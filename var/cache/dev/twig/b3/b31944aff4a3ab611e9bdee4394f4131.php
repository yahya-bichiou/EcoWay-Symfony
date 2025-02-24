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
            'css' => [$this, 'block_css'],
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
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        yield "<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend/cart.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
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
        // line 19
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

<section class=\"h-100 h-custom\" style=\"background-color:rgb(199, 255, 169);\">
  <div class=\"container py-5 h-100\">
    <div class=\"margiini\">
      <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-12\">
          <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
            <div class=\"card-body p-0\">
              <div class=\"row g-0\">
                <div class=\"col-lg-8\">
                  <div class=\"p-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-5\">
                      <h1 class=\"fw-bold mb-0\">Shopping Cart</h1>

                      <!-- Compute total items count -->
                      ";
        // line 58
        $context["totalItems"] = 0;
        // line 59
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 60
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "produits", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 61
                yield "                          ";
                $context["totalItems"] = ((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 61, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 61));
                // line 62
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                      <h6 class=\"mb-0 text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 64, $this->source); })()), "html", null, true);
        yield " Items</h6>
                    </div>

                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 67, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 68
            yield "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "produits", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 69
                yield "                        <hr class=\"my-4\">

                        <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                          <div class=\"col-md-2 col-lg-2 col-xl-2\">
                            <img
                              src=";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 74), "html", null, true);
                yield "
                              class=\"img-fluid rounded-3\" alt=\"Product Image\">
                          </div>
                          <div class=\"col-md-3 col-lg-3 col-xl-3\">
                            <h6 class=\"mb-0\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 78), "html", null, true);
                yield "</h6>
                          </div>
                          <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                            <span class=\"form-control form-control-sm\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 81), "html", null, true);
                yield "</span>
                          </div>
                          <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                            <h6 class=\"mb-0\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 84) * CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 84)), "html", null, true);
                yield " DT</h6>
                          </div>
                          <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                            <a href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_order_remove_product", ["commandeId" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 87), "productId" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" class=\"btn btn-danger\"><i class=\"fas fa-times\"></i></a>
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "                    ";
            $context['_iterated'] = true;
        }
        // line 93
        if (!$context['_iterated']) {
            // line 92
            yield "                      <p>The Cart is empty</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
                    <hr class=\"my-4\">
                    <div class=\"pt-5\">
                      <h6 class=\"mb-0\"><a href=\"products\" class=\"text-body\">
                        <i class=\"fas fa-long-arrow-alt-left me-2\"></i>Back to shop</a>
                      </h6>
                    </div>
                  </div>
                </div>

                <div class=\"col-lg-4 bg-body-tertiary\">
                  <div class=\"p-5\">
                    <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                    <hr class=\"my-4\">

                    <!-- Compute total price -->
                    ";
        // line 110
        $context["totalPrice"] = 0;
        // line 111
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 112
            yield "                      ";
            $context["totalPrice"] = CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 112);
            // line 113
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "
                    <div class=\"d-flex justify-content-between mb-4\">
                      <h5 class=\"text-uppercase\">Items ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 116, $this->source); })()), "html", null, true);
        yield "</h5>
                      <h5>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 117, $this->source); })()), "html", null, true);
        yield " DT</h5>
                    </div>

                    <h5 class=\"text-uppercase mb-3\">Shipping</h5>
                    <div class=\"mb-4 pb-2\">
                      <select id=\"shippingMethod\" class=\"form-control\">
                        <option value=\"20\">Same-Day - 20DT</option>
                        <option value=\"10\">Fast - 10DT</option>
                        <option value=\"5\">Normal - 5DT</option>
                      </select>
                    </div>

                    <h5 class=\"text-uppercase mb-3\">Give code</h5>
                    <div class=\"mb-5\">
                      <input type=\"text\" id=\"discountCode\" class=\"form-control form-control-lg\" />
                    </div>

                    <hr class=\"my-4\">
                    <div class=\"d-flex justify-content-between mb-5\">
                      <h5 class=\"text-uppercase\">Total price</h5>
                      <h5 id=\"finalPrice\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 137, $this->source); })()), "html", null, true);
        yield " DT</h5>
                    </div>
                    <span class=\"checkout\"></span>
                    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 141
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\">
                      <span class=\"export\"></span>
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    let totalPrice = ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 160, $this->source); })()), "html", null, true);
        yield "; // Get total price from Twig
    let shippingSelect = document.getElementById(\"shippingMethod\");
    let finalPriceElement = document.getElementById(\"finalPrice\");

    function updateFinalPrice() {
        let shippingCost = parseFloat(shippingSelect.value);
        let finalPrice = totalPrice + shippingCost;
        finalPriceElement.innerText = finalPrice + \" DT\";
    }

    // Update price on shipping change
    shippingSelect.addEventListener(\"change\", updateFinalPrice);
    updateFinalPrice();
});
</script>



  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2025 ECOWAY. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <style>
    .checkout {
        width: 50px;
        height: 50px;
        background: url(\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/check-out.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .checkout:hover {
        background: url(\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/check-out-hover.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
    }

        .export {
        width: 50px;
        height: 50px;
        background: url(\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/export.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .export:hover {
        background: url(\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/export-hover.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
    }
</style>

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
        return array (  446 => 211,  437 => 205,  427 => 198,  418 => 192,  383 => 160,  366 => 145,  355 => 141,  351 => 140,  345 => 137,  322 => 117,  318 => 116,  314 => 114,  308 => 113,  305 => 112,  300 => 111,  298 => 110,  280 => 94,  273 => 92,  271 => 93,  267 => 91,  257 => 87,  251 => 84,  245 => 81,  239 => 78,  232 => 74,  225 => 69,  220 => 68,  215 => 67,  208 => 64,  202 => 63,  196 => 62,  193 => 61,  188 => 60,  183 => 59,  181 => 58,  139 => 19,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Depot index{% endblock %}

{% block css %}
<link href=\"{{ asset('frontend/cart.css')}}\" rel=\"stylesheet\">
{% endblock %}

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

<section class=\"h-100 h-custom\" style=\"background-color:rgb(199, 255, 169);\">
  <div class=\"container py-5 h-100\">
    <div class=\"margiini\">
      <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col-12\">
          <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
            <div class=\"card-body p-0\">
              <div class=\"row g-0\">
                <div class=\"col-lg-8\">
                  <div class=\"p-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-5\">
                      <h1 class=\"fw-bold mb-0\">Shopping Cart</h1>

                      <!-- Compute total items count -->
                      {% set totalItems = 0 %}
                      {% for commande in commandes %}
                        {% for produit in commande.produits %}
                          {% set totalItems = totalItems + produit.quantity %}
                        {% endfor %}
                      {% endfor %}
                      <h6 class=\"mb-0 text-muted\">{{ totalItems }} Items</h6>
                    </div>

                    {% for commande in commandes %}
                      {% for produit in commande.produits %}
                        <hr class=\"my-4\">

                        <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                          <div class=\"col-md-2 col-lg-2 col-xl-2\">
                            <img
                              src={{ produit.image }}
                              class=\"img-fluid rounded-3\" alt=\"Product Image\">
                          </div>
                          <div class=\"col-md-3 col-lg-3 col-xl-3\">
                            <h6 class=\"mb-0\">{{ produit.nom }}</h6>
                          </div>
                          <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                            <span class=\"form-control form-control-sm\">{{ produit.quantity }}</span>
                          </div>
                          <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                            <h6 class=\"mb-0\">{{ produit.prix * produit.quantity }} DT</h6>
                          </div>
                          <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                            <a href=\"{{ path('front_order_remove_product', {'commandeId': commande.id, 'productId': produit.id}) }}\" class=\"btn btn-danger\"><i class=\"fas fa-times\"></i></a>
                          </div>
                        </div>
                      {% endfor %}
                    {% else %}
                      <p>The Cart is empty</p>
                    {% endfor %}

                    <hr class=\"my-4\">
                    <div class=\"pt-5\">
                      <h6 class=\"mb-0\"><a href=\"products\" class=\"text-body\">
                        <i class=\"fas fa-long-arrow-alt-left me-2\"></i>Back to shop</a>
                      </h6>
                    </div>
                  </div>
                </div>

                <div class=\"col-lg-4 bg-body-tertiary\">
                  <div class=\"p-5\">
                    <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                    <hr class=\"my-4\">

                    <!-- Compute total price -->
                    {% set totalPrice = 0 %}
                    {% for commande in commandes %}
                      {% set totalPrice = commande.prix %}
                    {% endfor %}

                    <div class=\"d-flex justify-content-between mb-4\">
                      <h5 class=\"text-uppercase\">Items {{ totalItems }}</h5>
                      <h5>{{ totalPrice }} DT</h5>
                    </div>

                    <h5 class=\"text-uppercase mb-3\">Shipping</h5>
                    <div class=\"mb-4 pb-2\">
                      <select id=\"shippingMethod\" class=\"form-control\">
                        <option value=\"20\">Same-Day - 20DT</option>
                        <option value=\"10\">Fast - 10DT</option>
                        <option value=\"5\">Normal - 5DT</option>
                      </select>
                    </div>

                    <h5 class=\"text-uppercase mb-3\">Give code</h5>
                    <div class=\"mb-5\">
                      <input type=\"text\" id=\"discountCode\" class=\"form-control form-control-lg\" />
                    </div>

                    <hr class=\"my-4\">
                    <div class=\"d-flex justify-content-between mb-5\">
                      <h5 class=\"text-uppercase\">Total price</h5>
                      <h5 id=\"finalPrice\">{{ totalPrice }} DT</h5>
                    </div>
                    <span class=\"checkout\"></span>
                    {% for commande in commandes %}
                    <a href=\"{{ path('commande_invoice', {'id': commande.id}) }}\">
                      <span class=\"export\"></span>
                    </a>
                    {% endfor %}


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    let totalPrice = {{ totalPrice }}; // Get total price from Twig
    let shippingSelect = document.getElementById(\"shippingMethod\");
    let finalPriceElement = document.getElementById(\"finalPrice\");

    function updateFinalPrice() {
        let shippingCost = parseFloat(shippingSelect.value);
        let finalPrice = totalPrice + shippingCost;
        finalPriceElement.innerText = finalPrice + \" DT\";
    }

    // Update price on shipping change
    shippingSelect.addEventListener(\"change\", updateFinalPrice);
    updateFinalPrice();
});
</script>



  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2025 ECOWAY. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <style>
    .checkout {
        width: 50px;
        height: 50px;
        background: url(\"{{ asset('icons/check-out.png') }}\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .checkout:hover {
        background: url(\"{{ asset('icons/check-out-hover.png') }}\") no-repeat center;
        background-size: contain;
    }

        .export {
        width: 50px;
        height: 50px;
        background: url(\"{{ asset('icons/export.png') }}\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .export:hover {
        background: url(\"{{ asset('icons/export-hover.png') }}\") no-repeat center;
        background-size: contain;
    }
</style>

{% endblock %}
", "frontend/order.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\frontend\\order.html.twig");
    }
}
