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
                          <div class=\"col-md-3 col-lg-3 col-xl-3 d-flex\">
                            <li>
                            <button class=\"btn\" data-commande-id=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\" data-product-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\">
                              <i class=\"fas fa-minus\"></i>
                            </button>
                            </li>
                            <span class=\"form-control form-control-sm text-center quantity\" id=\"quantity-";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 86), "html", null, true);
                yield "</span>
                            <li>
                            <button class=\"btn\" data-commande-id=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\" data-product-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\">
                              <i class=\"fas fa-plus\"></i>
                            </button>
                            </li>

                          </div>
                          <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                            <h6 class=\"mb-0\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 95) * CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 95)), "html", null, true);
                yield " DT</h6>
                          </div>
                          <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                            <a href=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_order_remove_product", ["commandeId" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 98), "productId" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" class=\"btn btn-danger\"><i class=\"fas fa-times\"></i></a>
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "                    ";
            $context['_iterated'] = true;
        }
        // line 104
        if (!$context['_iterated']) {
            // line 103
            yield "                      <p>The Cart is empty</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
        // line 121
        $context["totalPrice"] = 0;
        // line 122
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 123
            yield "                      ";
            $context["totalPrice"] = CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 123);
            // line 124
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "
                    <div class=\"d-flex justify-content-between mb-4\">
                      <h5 class=\"text-uppercase\">Items ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "</h5>
                      <h5>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 128, $this->source); })()), "html", null, true);
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

                    <input type=\"hidden\" id=\"finalPriceInput\" name=\"finalPrice\" value=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "\">
                    <hr class=\"my-4\">
                    <div class=\"d-flex justify-content-between mb-5\">
                      <h5 class=\"text-uppercase\">Total price</h5>
                      <h5 id=\"finalPrice\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 149, $this->source); })()), "html", null, true);
        yield " DT</h5>
                    </div>
                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 152
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_cash", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\">
                      <span class=\"cash\"></span>
                    </a>
                    <a id=\"payment-link\" href=\"#\"
                    data-commande-id=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 156), "html", null, true);
            yield "\">
                      <span class=\"checkout\"></span>
                    </a>
                    <a href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\">
                      <span class=\"export\"></span>
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
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
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 178, $this->source); })()), "html", null, true);
        yield "; // Initial price from Twig
    let shippingSelect = document.getElementById(\"shippingMethod\");
    let finalPriceElement = document.getElementById(\"finalPrice\");
    let paymentLink = document.getElementById(\"payment-link\");

    // Get the commande ID from the <a> data attribute
    let commandeId = paymentLink.getAttribute(\"data-commande-id\");

    function updateFinalPrice() {
        let shippingCost = parseFloat(shippingSelect.value);
        let finalPrice = totalPrice + shippingCost;

        // Update displayed total price
        finalPriceElement.innerText = finalPrice + \" DT\";

        // Update payment link with price and commande ID
        paymentLink.href = \"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment", ["price" => "PRICE", "id" => "ID"]), "html", null, true);
        yield "\"
            .replace('PRICE', finalPrice) // Replace PRICE placeholder with actual finalPrice
            .replace('ID', commandeId); // Replace ID placeholder with actual commandeId
    }

    // Update price on shipping change
    shippingSelect.addEventListener(\"change\", updateFinalPrice);
    updateFinalPrice(); // Set initial price
});
</script>



<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    function updateQuantity(commandeId, productId, action) {
        fetch(`/cart/update/\${commandeId}/\${productId}/\${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let quantityElement = document.getElementById(`quantity-\${commandeId}-\${productId}`);
                quantityElement.innerText = data.newQuantity;
                location.reload(); // Refresh the page to update the total price
            } else {
                alert(\"Error updating quantity\");
            }
        })
        .catch(error => console.error('Error:', error));
    }

    document.querySelectorAll(\".plus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"increase\");
        });
    });

    document.querySelectorAll(\".minus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"decrease\");
        });
    });
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
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/card.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .checkout:hover {
        background: url(\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/card-hover.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
    }

    .cash {
        width: 50px;
        height: 50px;
        background: url(\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/cash.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .cash:hover {
        background: url(\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/cash-hover.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
    }

        .export {
        width: 50px;
        height: 50px;
        background: url(\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/export.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .export:hover {
        background: url(\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/export-hover.png"), "html", null, true);
        yield "\") no-repeat center;
        background-size: contain;
    }
</style>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    function updateQuantity(commandeId, productId, action) {
        fetch(`/cart/update/\${commandeId}/\${productId}/\${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let quantityElement = document.getElementById(`quantity-\${commandeId}-\${productId}`);
                quantityElement.innerText = data.newQuantity;
                location.reload(); // Refresh the page to update the total price
            } else {
                alert(\"Error updating quantity\");
            }
        })
        .catch(error => console.error('Error:', error));
    }

    document.querySelectorAll(\".plus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"increase\");
        });
    });

    document.querySelectorAll(\".minus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"decrease\");
        });
    });
});
</script>


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
        return array (  563 => 296,  554 => 290,  544 => 283,  535 => 277,  525 => 270,  516 => 264,  443 => 194,  424 => 178,  407 => 163,  397 => 159,  391 => 156,  383 => 152,  379 => 151,  374 => 149,  367 => 145,  347 => 128,  343 => 127,  339 => 125,  333 => 124,  330 => 123,  325 => 122,  323 => 121,  305 => 105,  298 => 103,  296 => 104,  292 => 102,  282 => 98,  276 => 95,  264 => 88,  255 => 86,  246 => 82,  239 => 78,  232 => 74,  225 => 69,  220 => 68,  215 => 67,  208 => 64,  202 => 63,  196 => 62,  193 => 61,  188 => 60,  183 => 59,  181 => 58,  139 => 19,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                          <div class=\"col-md-3 col-lg-3 col-xl-3 d-flex\">
                            <li>
                            <button class=\"btn\" data-commande-id=\"{{ commande.id }}\" data-product-id=\"{{ produit.id }}\">
                              <i class=\"fas fa-minus\"></i>
                            </button>
                            </li>
                            <span class=\"form-control form-control-sm text-center quantity\" id=\"quantity-{{ commande.id }}-{{ produit.id }}\">{{ produit.quantity }}</span>
                            <li>
                            <button class=\"btn\" data-commande-id=\"{{ commande.id }}\" data-product-id=\"{{ produit.id }}\">
                              <i class=\"fas fa-plus\"></i>
                            </button>
                            </li>

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

                    <input type=\"hidden\" id=\"finalPriceInput\" name=\"finalPrice\" value=\"{{ totalPrice }}\">
                    <hr class=\"my-4\">
                    <div class=\"d-flex justify-content-between mb-5\">
                      <h5 class=\"text-uppercase\">Total price</h5>
                      <h5 id=\"finalPrice\">{{ totalPrice }} DT</h5>
                    </div>
                    {% for commande in commandes %}
                    <a href=\"{{ path('order_cash', {'id': commande.id}) }}\">
                      <span class=\"cash\"></span>
                    </a>
                    <a id=\"payment-link\" href=\"#\"
                    data-commande-id=\"{{ commande.id }}\">
                      <span class=\"checkout\"></span>
                    </a>
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
    let totalPrice = {{ totalPrice }}; // Initial price from Twig
    let shippingSelect = document.getElementById(\"shippingMethod\");
    let finalPriceElement = document.getElementById(\"finalPrice\");
    let paymentLink = document.getElementById(\"payment-link\");

    // Get the commande ID from the <a> data attribute
    let commandeId = paymentLink.getAttribute(\"data-commande-id\");

    function updateFinalPrice() {
        let shippingCost = parseFloat(shippingSelect.value);
        let finalPrice = totalPrice + shippingCost;

        // Update displayed total price
        finalPriceElement.innerText = finalPrice + \" DT\";

        // Update payment link with price and commande ID
        paymentLink.href = \"{{ path('payment', {'price': 'PRICE', 'id': 'ID'}) }}\"
            .replace('PRICE', finalPrice) // Replace PRICE placeholder with actual finalPrice
            .replace('ID', commandeId); // Replace ID placeholder with actual commandeId
    }

    // Update price on shipping change
    shippingSelect.addEventListener(\"change\", updateFinalPrice);
    updateFinalPrice(); // Set initial price
});
</script>



<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    function updateQuantity(commandeId, productId, action) {
        fetch(`/cart/update/\${commandeId}/\${productId}/\${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let quantityElement = document.getElementById(`quantity-\${commandeId}-\${productId}`);
                quantityElement.innerText = data.newQuantity;
                location.reload(); // Refresh the page to update the total price
            } else {
                alert(\"Error updating quantity\");
            }
        })
        .catch(error => console.error('Error:', error));
    }

    document.querySelectorAll(\".plus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"increase\");
        });
    });

    document.querySelectorAll(\".minus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"decrease\");
        });
    });
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
        background: url(\"{{ asset('icons/card.png') }}\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .checkout:hover {
        background: url(\"{{ asset('icons/card-hover.png') }}\") no-repeat center;
        background-size: contain;
    }

    .cash {
        width: 50px;
        height: 50px;
        background: url(\"{{ asset('icons/cash.png') }}\") no-repeat center;
        background-size: contain;
        display: inline-block;
    }

    .cash:hover {
        background: url(\"{{ asset('icons/cash-hover.png') }}\") no-repeat center;
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

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    function updateQuantity(commandeId, productId, action) {
        fetch(`/cart/update/\${commandeId}/\${productId}/\${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let quantityElement = document.getElementById(`quantity-\${commandeId}-\${productId}`);
                quantityElement.innerText = data.newQuantity;
                location.reload(); // Refresh the page to update the total price
            } else {
                alert(\"Error updating quantity\");
            }
        })
        .catch(error => console.error('Error:', error));
    }

    document.querySelectorAll(\".plus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"increase\");
        });
    });

    document.querySelectorAll(\".minus-btn\").forEach(button => {
        button.addEventListener(\"click\", function() {
            let commandeId = this.getAttribute(\"data-commande-id\");
            let productId = this.getAttribute(\"data-product-id\");
            updateQuantity(commandeId, productId, \"decrease\");
        });
    });
});
</script>


{% endblock %}
", "frontend/order.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\frontend\\order.html.twig");
    }
}
