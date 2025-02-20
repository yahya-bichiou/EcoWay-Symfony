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

/* produits_boutique/index.html.twig */
class __TwigTemplate_4f161aec7fbd1106d548f885392a1850 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_boutique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_boutique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits_boutique/index.html.twig", 1);
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

        yield "ProduitsBoutique index";
        
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
              <li class=\"scroll-to-section\"><a href=\"/produitcon\" >Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/produits/boutique\" class=\"active\">Boutique</a></li>
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
            <h6>Boutique</h6>
            <h2>Nos Articles</h2>
          </div>
        </div>
      </div>
    </div>


<section class=\"products section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits_boutiques"]) || array_key_exists("produits_boutiques", $context) ? $context["produits_boutiques"] : (function () { throw new RuntimeError('Variable "produits_boutiques" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produits_boutique"]) {
            // line 59
            yield "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<span class=\"bage\">Sale</span>
\t\t\t\t\t\t<img class=\"img-responsive\" src=";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "productImage", [], "any", false, false, false, 63), "html", null, true);
            yield " alt=\"product-img\" />
\t\t\t\t\t\t<div class=\"preview-meta\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_boutique_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-eye\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
                  <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_boutique_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-pen\"></i></a>
                </li>
\t\t\t\t\t\t\t</ul>
                      \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t<h4><a href=\"product-single.html\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "productName", [], "any", false, false, false, 76), "html", null, true);
            yield "</a></h4>
\t\t\t\t\t\t<p class=\"price\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "productDesc", [], "any", false, false, false, 77), "html", null, true);
            yield "</p>
            <p class=\"price\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "productPrice", [], "any", false, false, false, 78), "html", null, true);
            yield " DT</p>
            <p class=\"price\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produits_boutique"], "productCategory", [], "any", false, false, false, 79), "html", null, true);
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
          ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 84
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produits_boutique'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "\t\t</div>
\t</div>
</section>

<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
<div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Liste Des Commandes</h6>
</div>
";
        // line 98
        yield from $this->loadTemplate("commandes_boutique/index.html.twig", "produits_boutique/index.html.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "</div>
</div>
</div>
<a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_boutique_new");
        yield "\">Create new</a>
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
        return "produits_boutique/index.html.twig";
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
        return array (  244 => 102,  239 => 99,  237 => 98,  225 => 88,  216 => 84,  214 => 87,  205 => 79,  201 => 78,  197 => 77,  193 => 76,  184 => 70,  178 => 67,  171 => 63,  165 => 59,  160 => 58,  139 => 40,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProduitsBoutique index{% endblock %}

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
              <li class=\"scroll-to-section\"><a href=\"/produitcon\" >Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/produits/boutique\" class=\"active\">Boutique</a></li>
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
            <h6>Boutique</h6>
            <h2>Nos Articles</h2>
          </div>
        </div>
      </div>
    </div>


<section class=\"products section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
{% for produits_boutique in produits_boutiques %}
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<span class=\"bage\">Sale</span>
\t\t\t\t\t\t<img class=\"img-responsive\" src={{ produits_boutique.productImage }} alt=\"product-img\" />
\t\t\t\t\t\t<div class=\"preview-meta\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_produits_boutique_show', {'id': produits_boutique.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
                  <a href=\"{{ path('app_produits_boutique_edit', {'id': produits_boutique.id}) }}\"><i class=\"fa-solid fa-pen\"></i></a>
                </li>
\t\t\t\t\t\t\t</ul>
                      \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t<h4><a href=\"product-single.html\">{{ produits_boutique.productName }}</a></h4>
\t\t\t\t\t\t<p class=\"price\">{{ produits_boutique.productDesc }}</p>
            <p class=\"price\">{{ produits_boutique.productPrice }} DT</p>
            <p class=\"price\">{{ produits_boutique.productCategory }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
          {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
    {% endfor %}
\t\t</div>
\t</div>
</section>

<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
<div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Liste Des Commandes</h6>
</div>
{% include 'commandes_boutique/index.html.twig' %}
</div>
</div>
</div>
<a href=\"{{ path('app_produits_boutique_new') }}\">Create new</a>
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
", "produits_boutique/index.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\produits_boutique\\index.html.twig");
    }
}
