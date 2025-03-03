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

/* frontend/dropoff.html.twig */
class __TwigTemplate_8d094351942ecacb9d471070d330b775 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/dropoff.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/dropoff.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/dropoff.html.twig", 1);
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
        yield "
  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky wow slideInDown\" data-wow-duration=\"0.75s\" data-wow-delay=\"0s\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <nav class=\"main-nav\">
            <!-- ***** Logo Start ***** -->
            <a href=\"index.html\" class=\"logo\">
              <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"\">
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
              <li><a href=\"/front/order\"><i class=\"fas fa-shopping-cart\"></i></a></li>
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
  <div>
    <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bg1.png"), "html", null, true);
        yield "\" >
  </div>
  <div id=\"services\" class=\"our-services section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Dépots</h6>
            <h2>Nos Points de dépots</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
  <div class=\"row\">
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["depots"]) || array_key_exists("depots", $context) ? $context["depots"] : (function () { throw new RuntimeError('Variable "depots" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 57
            yield "      <!-- Card -->
      <div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\"> <!-- Adjusted column sizes -->
        <div class=\"card h-100 shadow-sm\"> <!-- Added shadow for better visual appeal -->
        <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
          <img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "image", [], "any", false, false, false, 61))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "nom", [], "any", false, false, false, 61), "html", null, true);
            yield "\" style=\"height: 200px; object-fit: cover;\"> <!-- Fixed image height and aspect ratio -->
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "nom", [], "any", false, false, false, 63), "html", null, true);
            yield "</h5>
            <p class=\"card-text\">Adresse: ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "adresse", [], "any", false, false, false, 64), "html", null, true);
            yield "</p>
            <p class=\"card-text\">Capacité: ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "capacite", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
          </div>
        </a>
        </div>
      </div>
    ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 71
            yield "      <div class=\"col-12\">
        <p class=\"text-center\">No records found</p>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depot'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "  </div>
</div>

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
        return "frontend/dropoff.html.twig";
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
        return array (  208 => 75,  199 => 71,  197 => 74,  187 => 65,  183 => 64,  179 => 63,  172 => 61,  168 => 60,  163 => 57,  158 => 56,  139 => 40,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
              <img src=\"{{ asset('logo.png') }}\" alt=\"\">
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
              <li><a href=\"/front/order\"><i class=\"fas fa-shopping-cart\"></i></a></li>
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
  <div>
    <img src=\"{{ asset('bg1.png')}}\" >
  </div>
  <div id=\"services\" class=\"our-services section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Dépots</h6>
            <h2>Nos Points de dépots</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
  <div class=\"row\">
    {% for depot in depots %}
      <!-- Card -->
      <div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\"> <!-- Adjusted column sizes -->
        <div class=\"card h-100 shadow-sm\"> <!-- Added shadow for better visual appeal -->
        <a href=\"{{ path('app_depot_show', {'id': depot.id}) }}\" class=\"text-decoration-none text-dark\">
          <img src=\"{{ asset('uploads/' ~ depot.image) }}\" class=\"card-img-top img-fluid\" alt=\"{{ depot.nom }}\" style=\"height: 200px; object-fit: cover;\"> <!-- Fixed image height and aspect ratio -->
          <div class=\"card-body\">
            <h5 class=\"card-title\">{{ depot.nom }}</h5>
            <p class=\"card-text\">Adresse: {{ depot.adresse }}</p>
            <p class=\"card-text\">Capacité: {{ depot.capacite }}</p>
          </div>
        </a>
        </div>
      </div>
    {% else %}
      <div class=\"col-12\">
        <p class=\"text-center\">No records found</p>
      </div>
    {% endfor %}
  </div>
</div>

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2025 ECOWAY. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
{% endblock %}
", "frontend/dropoff.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\frontend\\dropoff.html.twig");
    }
}
