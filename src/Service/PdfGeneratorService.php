<?php
namespace App\Service;

use TCPDF;

class PdfGeneratorService
{
    public function generateInvoice(array $commandeData): string
    {
        // Ensure there is no unexpected output anywhere
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Company');
        $pdf->SetTitle('Facture');
        $pdf->SetSubject('Invoice');

        // Add a page
        $pdf->AddPage();

        // Title
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->Cell(0, 10, 'Facture #' . $commandeData['id'], 0, 1, 'C');

        // Client Info
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'Client: ' . $commandeData['clientId'], 0, 1);
        $pdf->Cell(0, 10, 'Date: ' . $commandeData['date'], 0, 1);
        $pdf->Ln(5);

        // Table Header
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->Cell(80, 10, 'Produit', 1);
        $pdf->Cell(40, 10, 'Prix', 1);
        $pdf->Cell(30, 10, 'Quantité', 1);
        $pdf->Cell(40, 10, 'Total', 1);
        $pdf->Ln();

        // Table Data
        $pdf->SetFont('helvetica', '', 12);
        foreach ($commandeData['produits'] as $produit) {
            $pdf->Cell(80, 10, $produit['nom'], 1);
            $pdf->Cell(40, 10, $produit['prix'] . '€', 1);
            $pdf->Cell(30, 10, $produit['quantity'], 1);
            $pdf->Cell(40, 10, ($produit['prix'] * $produit['quantity']) . '€', 1);
            $pdf->Ln();
        }

        // Total Price
        $pdf->Ln(5);
        $pdf->Cell(150, 10, 'Total:', 0, 0, 'R');
        $pdf->Cell(40, 10, $commandeData['prix'] . '€', 1, 1, 'R');

        // Save the PDF to a file
        $filePath = 'invoices/facture_' . $commandeData['id'] . '.pdf';
        $pdf->Output(__DIR__ . '/../../public/' . $filePath, 'F');

        return $filePath;
    }
}
