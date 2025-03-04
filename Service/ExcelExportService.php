<?php
namespace App\Service;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Repository\DepotRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExcelExportService
{
    private DepotRepository $depotRepository;

    public function __construct(DepotRepository $depotRepository)
    {
        $this->depotRepository = $depotRepository;
    }

    public function exportDepots(): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Depots');

        // Add headers
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Address');
        $sheet->setCellValue('D1', 'Capacity');

        // Fetch depot data
        $depots = $this->depotRepository->findAll();
        $row = 2;

        foreach ($depots as $depot) {
            $sheet->setCellValue('A' . $row, $depot->getId());
            $sheet->setCellValue('B' . $row, $depot->getNom());
            $sheet->setCellValue('C' . $row, $depot->getAdresse());
            $sheet->setCellValue('D' . $row, $depot->getCapacite());
            $row++;
        }

        $response = new StreamedResponse(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="depots.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}
