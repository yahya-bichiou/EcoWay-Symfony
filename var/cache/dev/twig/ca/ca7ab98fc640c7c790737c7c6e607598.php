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

/* produits_boutique/show.html.twig */
class __TwigTemplate_44a7fea0e880a7d027e8cd9642094c45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_boutique/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_boutique/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits_boutique/show.html.twig", 1);
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

        yield "ProduitsBoutique";
        
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
        yield "<section class=\"single-product\">
\t<div class=\"container\">
<div class=\"row mt-20\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"single-product-slider\">
\t\t\t\t\t<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
\t\t\t\t\t\t\t\t<div class='item active'>
\t\t\t\t\t\t\t\t\t<img src=";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 13, $this->source); })()), "productImage", [], "any", false, false, false, 13), "html", null, true);
        yield " alt='' data-zoom-image=\"images/shop/single-products/product-1.jpg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"single-product-details\">
\t\t\t\t\t<h2>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 20, $this->source); })()), "productName", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
                    <pre>

                    </pre>
\t\t\t\t\t<p class=\"product-price\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 24, $this->source); })()), "productPrice", [], "any", false, false, false, 24), "html", null, true);
        yield " DT</p>

\t\t\t\t\t<p class=\"product-description mt-20\">
\t\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 27, $this->source); })()), "productName", [], "any", false, false, false, 27), "html", null, true);
        yield "
\t\t\t\t\t</p>
\t\t\t\t\t<p>Category: ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 29, $this->source); })()), "productCategory", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t<span>En Stock: ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 31, $this->source); })()), "productStock", [], "any", false, false, false, 31), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
                    <pre>






                    </pre>
                    <div class=\"col-lg-4 offset-lg-4\">
                    <table>
                    <tr>
                    <td>
                    <form action=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_boutique_index");
        yield "\">
                    <button class=\"btn\">Retour</button>
                    </form>
                    </td>
                    <td>
                    <form action=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_boutique_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produits_boutique"]) || array_key_exists("produits_boutique", $context) ? $context["produits_boutique"] : (function () { throw new RuntimeError('Variable "produits_boutique" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        yield "\">
                    <button class=\"btn\">Modifier</button>
                    </form>
                    </td>
                    <td>
                    ";
        // line 55
        yield Twig\Extension\CoreExtension::include($this->env, $context, "produits_boutique/_delete_form.html.twig");
        yield "
                    </td>
                    </tr>
                    </table>
              </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
        return "produits_boutique/show.html.twig";
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
        return array (  175 => 55,  167 => 50,  159 => 45,  142 => 31,  137 => 29,  132 => 27,  126 => 24,  119 => 20,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProduitsBoutique{% endblock %}

{% block body %}
<section class=\"single-product\">
\t<div class=\"container\">
<div class=\"row mt-20\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"single-product-slider\">
\t\t\t\t\t<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
\t\t\t\t\t\t\t\t<div class='item active'>
\t\t\t\t\t\t\t\t\t<img src={{ produits_boutique.productImage }} alt='' data-zoom-image=\"images/shop/single-products/product-1.jpg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"single-product-details\">
\t\t\t\t\t<h2>{{ produits_boutique.productName }}</h2>
                    <pre>

                    </pre>
\t\t\t\t\t<p class=\"product-price\">{{ produits_boutique.productPrice }} DT</p>

\t\t\t\t\t<p class=\"product-description mt-20\">
\t\t\t\t\t\t{{ produits_boutique.productName }}
\t\t\t\t\t</p>
\t\t\t\t\t<p>Category: {{ produits_boutique.productCategory }}</p>
\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t<span>En Stock: {{ produits_boutique.productStock }}</span>
\t\t\t\t\t</div>
                    <pre>






                    </pre>
                    <div class=\"col-lg-4 offset-lg-4\">
                    <table>
                    <tr>
                    <td>
                    <form action=\"{{ path('app_produits_boutique_index') }}\">
                    <button class=\"btn\">Retour</button>
                    </form>
                    </td>
                    <td>
                    <form action=\"{{ path('app_produits_boutique_edit', {'id': produits_boutique.id}) }}\">
                    <button class=\"btn\">Modifier</button>
                    </form>
                    </td>
                    <td>
                    {{ include('produits_boutique/_delete_form.html.twig') }}
                    </td>
                    </tr>
                    </table>
              </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}
", "produits_boutique/show.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\produits_boutique\\show.html.twig");
    }
}
