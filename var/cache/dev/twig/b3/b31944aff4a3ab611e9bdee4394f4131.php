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

/* frontend/order.html.twig */
class __TwigTemplate_50c76cca9414a32420aca0ea921c2270 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/order.html.twig", 1);
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
              <li class=\"scroll-to-section\"><a href=\"/front/dropoff\">Dépots</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Boutique</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/blog\">Blog</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/event\">Event</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/user\">Users</a></li>
              <li><a href=\"/front/order\" class=\"active\"><i class=\"fas fa-shopping-cart\"></i></a></li>
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
            <h6>Vos Commandes</h6>
            <table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>User ID</th>
            <th>Status</th>
            <th>Prix</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 61
            yield "            <tr>
                <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "clientId", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                <td>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 66), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                  <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 69))), "html", null, true);
            yield "\">
                    <button class=\"btn btn-primary\">Anuler</button>
                  </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 75
            yield "            <tr>
                <td colspan=\"6\">No commandes found.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "    </tbody>
</table>

          </div>
        </div>
      </div>
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
        return "frontend/order.html.twig";
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
        return array (  216 => 79,  207 => 75,  205 => 78,  195 => 69,  191 => 68,  186 => 66,  182 => 65,  178 => 64,  174 => 63,  170 => 62,  167 => 61,  162 => 60,  139 => 40,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
              <li class=\"scroll-to-section\"><a href=\"/front/dropoff\">Dépots</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Produits</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/product\">Boutique</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/blog\">Blog</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/event\">Event</a></li>
              <li class=\"scroll-to-section\"><a href=\"/front/user\">Users</a></li>
              <li><a href=\"/front/order\" class=\"active\"><i class=\"fas fa-shopping-cart\"></i></a></li>
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
            <h6>Vos Commandes</h6>
            <table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>User ID</th>
            <th>Status</th>
            <th>Prix</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for commande in commandes %}
            <tr>
                <td>{{ commande.id }}</td>
                <td>{{ commande.clientId }}</td>
                <td>{{ commande.status }}</td>
                <td>{{ commande.prix }}</td>
                <td>{{ commande.date ? commande.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                  <form method=\"post\" action=\"{{ path('app_commande_delete', {'id': commande.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commande.id) }}\">
                    <button class=\"btn btn-primary\">Anuler</button>
                  </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No commandes found.</td>
            </tr>
        {% endfor %}
    </tbody>
</table>

          </div>
        </div>
      </div>
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
", "frontend/order.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\frontend\\order.html.twig");
    }
}
