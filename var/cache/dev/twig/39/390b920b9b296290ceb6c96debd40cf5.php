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

/* produitcon/index.html.twig */
class __TwigTemplate_87e83f677b8a5ea1dacb4858a927aef8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitcon/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitcon/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produitcon/index.html.twig", 1);
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

        yield "Liste des Produits";
        
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
              <li class=\"scroll-to-section\"><a href=\"/depot\">Dépots</a></li>
              <li class=\"scroll-to-section\"><a href=\"/produitcon\" class=\"active\">Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/produits/boutique\">Boutique</a></li>
              <li class=\"scroll-to-section\"><a href=\"/bande/commande\">Achat</a></li>
              <li class=\"scroll-to-section\"><a href=\"/phase\">Production</a></li>
              <li class=\"scroll-to-section\"><a href=\"/utilisateur\">Users</a></li>
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

            <h2>Nos produits</h2>
          </div>
        </div>
      </div>
    </div>

    <div >

 <section class=\"products section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 60
            yield "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t<span class=\"bage\">Nouveau</span>
\t\t\t\t\t\t\t<img class=\"img-responsive\"
\t\t\t\t\t\t\t     src=\"";
            // line 65
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 65), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-product.png"), "html", null, true)));
            yield "\"
\t\t\t\t\t\t\t     alt=\"product-img\" />
\t\t\t\t\t\t\t<div class=\"preview-meta\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitcon_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitcon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t<h4><a href=\"product-single.html\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "</a></h4>
\t\t\t\t\t\t\t<p>";
            // line 84
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 84)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 84), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 84), "html", null, true)));
            yield "</p>
\t\t\t\t\t\t\t<p class=\"price\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t<p class=\"price\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "qualite", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t<p class=\"price\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantiteDisponible", [], "any", false, false, false, 87), "html", null, true);
            yield " en stock</p>
\t\t\t\t\t\t\t<p class=\"price\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 88), 2, ",", " "), "html", null, true);
            yield " DT</p>
\t\t\t\t\t\t\t<p class=\"date\">Ajouté le : ";
            // line 89
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "dateAjout", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "dateAjout", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        // line 97
        if (!$context['_iterated']) {
            // line 94
            yield "\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p>Aucun produit disponible.</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "\t\t</div>
\t</div>
</section>



<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
<div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>listes des catégories</h6>
</div>
";
        // line 110
        yield from $this->loadTemplate("categorie/index.html.twig", "produitcon/index.html.twig", 110)->unwrap()->yield($context);
        // line 111
        yield "</div>
</div>
</div>
<a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitcon_new");
        yield "\">Ajouter</a>

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
        return "produitcon/index.html.twig";
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
        return array (  265 => 114,  260 => 111,  258 => 110,  244 => 98,  235 => 94,  233 => 97,  224 => 89,  220 => 88,  216 => 87,  212 => 86,  208 => 85,  204 => 84,  200 => 83,  189 => 75,  181 => 70,  173 => 65,  166 => 60,  161 => 59,  139 => 40,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Produits{% endblock %}

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
              <li class=\"scroll-to-section\"><a href=\"/depot\">Dépots</a></li>
              <li class=\"scroll-to-section\"><a href=\"/produitcon\" class=\"active\">Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/produits/boutique\">Boutique</a></li>
              <li class=\"scroll-to-section\"><a href=\"/bande/commande\">Achat</a></li>
              <li class=\"scroll-to-section\"><a href=\"/phase\">Production</a></li>
              <li class=\"scroll-to-section\"><a href=\"/utilisateur\">Users</a></li>
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

            <h2>Nos produits</h2>
          </div>
        </div>
      </div>
    </div>

    <div >

 <section class=\"products section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{% for produit in produits %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t<span class=\"bage\">Nouveau</span>
\t\t\t\t\t\t\t<img class=\"img-responsive\"
\t\t\t\t\t\t\t     src=\"{{ produit.image ?: asset('images/default-product.png') }}\"
\t\t\t\t\t\t\t     alt=\"product-img\" />
\t\t\t\t\t\t\t<div class=\"preview-meta\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_produitcon_show', {'id': produit.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_produitcon_edit', {'id': produit.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t<h4><a href=\"product-single.html\">{{ produit.nom }}</a></h4>
\t\t\t\t\t\t\t<p>{{ produit.description|length > 30 ? produit.description|slice(0, 30) ~ '...' : produit.description }}</p>
\t\t\t\t\t\t\t<p class=\"price\">{{ produit.type }}</p>
\t\t\t\t\t\t\t<p class=\"price\">{{ produit.qualite }}</p>
\t\t\t\t\t\t\t<p class=\"price\">{{ produit.quantiteDisponible }} en stock</p>
\t\t\t\t\t\t\t<p class=\"price\">{{ produit.prix|number_format(2, ',', ' ') }} DT</p>
\t\t\t\t\t\t\t<p class=\"date\">Ajouté le : {{ produit.dateAjout ? produit.dateAjout|date('d/m/Y H:i') : '' }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p>Aucun produit disponible.</p>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>



<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
<div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>listes des catégories</h6>
</div>
{% include 'categorie/index.html.twig' %}
</div>
</div>
</div>
<a href=\"{{ path('app_produitcon_new') }}\">Ajouter</a>

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
", "produitcon/index.html.twig", "C:\\Users\\User\\Downloads\\EcoWay-produit (1)\\EcoWay-produit\\templates\\produitcon\\index.html.twig");
    }
}
