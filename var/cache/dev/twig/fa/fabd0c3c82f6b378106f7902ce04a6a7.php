<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* depot/show.html.twig */
class __TwigTemplate_6993f3573aed1144784786a991548a12 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "depot/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Depot index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky wow slideInDown\" data-wow-duration=\"0.75s\" data-wow-delay=\"0s\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <nav class=\"main-nav\">
            <!-- ***** Logo Start ***** -->
            <a href=\"index.html\" class=\"logo\">
              <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"Logo\">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class=\"nav\">
              <li class=\"scroll-to-section\"><a href=\"index.html\">Home</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/dropoff\" class=\"active\">Dépots</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Boutique</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/blog\">Blog</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/event\">Event</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/user\">Users</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Main Content Section -->
  <section class=\"single-product\">
    <div class=\"container\">
      <div class=\"row mt-5\">
        <!-- Image Section -->
        <div class=\"col-md-5\">
          <div class=\"single-product-slider\" style=\"height: 100%;\">
            <div id=\"carousel-custom\" class=\"carousel slide h-100\" data-ride=\"carousel\">
              <div class=\"carousel-item active h-100\">
                <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47))), "html", null, true);
        yield "\" alt=\"Depot Image\" class=\"img-fluid rounded shadow h-100 w-100\" style=\"object-fit: cover;\">
              </div>
            </div>
          </div>
        </div>

        <!-- Details Section -->
        <div class=\"col-md-7\">
          <div class=\"single-product-details\">
            <h2 class=\"mb-4\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), "html", null, true);
        yield "</h2>
            <div class=\"details-table mb-4\">
              <table class=\"table\">
                <tbody>
                  <tr>
                    <td><h5>Adresse:</h5></td>
                    <td><p class=\"product-price\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 62, $this->source); })()), "adresse", [], "any", false, false, false, 62), "html", null, true);
        yield "</p></td>
                  </tr>
                  <tr>
                    <td><h5>Capacité:</h5></td>
                    <td><p class=\"product-price\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depot"]) || array_key_exists("depot", $context) ? $context["depot"] : (function () { throw new RuntimeError('Variable "depot" does not exist.', 66, $this->source); })()), "capacite", [], "any", false, false, false, 66), "html", null, true);
        yield "</p></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Form Section -->
            <div class=\"collection-form\">
              ";
        // line 74
        yield from $this->loadTemplate("/collecte/new.html.twig", "depot/show.html.twig", 74)->unwrap()->yield($context);
        // line 75
        yield "            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2025 ECOWAY. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "depot/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 75,  185 => 74,  174 => 66,  167 => 62,  158 => 56,  146 => 47,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Depot index{% endblock %}

{% block body %}
  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky wow slideInDown\" data-wow-duration=\"0.75s\" data-wow-delay=\"0s\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <nav class=\"main-nav\">
            <!-- ***** Logo Start ***** -->
            <a href=\"index.html\" class=\"logo\">
              <img src=\"{{ asset('logo.png') }}\" alt=\"Logo\">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class=\"nav\">
              <li class=\"scroll-to-section\"><a href=\"index.html\">Home</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/dropoff\" class=\"active\">Dépots</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Boutique</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/blog\">Blog</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/event\">Event</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/user\">Users</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Main Content Section -->
  <section class=\"single-product\">
    <div class=\"container\">
      <div class=\"row mt-5\">
        <!-- Image Section -->
        <div class=\"col-md-5\">
          <div class=\"single-product-slider\" style=\"height: 100%;\">
            <div id=\"carousel-custom\" class=\"carousel slide h-100\" data-ride=\"carousel\">
              <div class=\"carousel-item active h-100\">
                <img src=\"{{ asset('uploads/' ~ depot.image) }}\" alt=\"Depot Image\" class=\"img-fluid rounded shadow h-100 w-100\" style=\"object-fit: cover;\">
              </div>
            </div>
          </div>
        </div>

        <!-- Details Section -->
        <div class=\"col-md-7\">
          <div class=\"single-product-details\">
            <h2 class=\"mb-4\">{{ depot.nom }}</h2>
            <div class=\"details-table mb-4\">
              <table class=\"table\">
                <tbody>
                  <tr>
                    <td><h5>Adresse:</h5></td>
                    <td><p class=\"product-price\">{{ depot.adresse }}</p></td>
                  </tr>
                  <tr>
                    <td><h5>Capacité:</h5></td>
                    <td><p class=\"product-price\">{{ depot.capacite }}</p></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Form Section -->
            <div class=\"collection-form\">
              {% include \"/collecte/new.html.twig\" %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2025 ECOWAY. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
{% endblock %}", "depot/show.html.twig", "C:\\Users\\User\\Downloads\\EcoWay-produit (1)\\EcoWay-produit\\templates\\depot\\show.html.twig");
    }
}
