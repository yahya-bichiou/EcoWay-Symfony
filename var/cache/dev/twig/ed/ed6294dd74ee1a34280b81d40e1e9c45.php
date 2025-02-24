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

/* commande/index.html.twig */
class __TwigTemplate_e2eebbc0f0281cac93e361091c8207e6 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "        <thead>
            <tr>
                <th>Id</th>
                <th>ClientId</th>
                <th>Date</th>
                <th>Status</th>
                <th>Prix</th>
                <th>ModePaiement</th>
                <th>Produits Nom</th>
                <th>Produits Quantity</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 18
            yield "            <tr>
                <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "clientId", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>";
            // line 21
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "modePaiement", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "produits", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 26
                yield "                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 27) * CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantity", [], "any", false, false, false, 27)), "html", null, true);
                yield "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                <td>
                    ";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "/commande/_delete_form.html.twig");
            yield "
                </td>
                <td>
                    <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 40
        if (!$context['_iterated']) {
            // line 37
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </tbody>
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
        return "commande/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 41,  178 => 37,  176 => 40,  160 => 33,  154 => 30,  151 => 29,  143 => 27,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  107 => 18,  89 => 17,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
        <thead>
            <tr>
                <th>Id</th>
                <th>ClientId</th>
                <th>Date</th>
                <th>Status</th>
                <th>Prix</th>
                <th>ModePaiement</th>
                <th>Produits Nom</th>
                <th>Produits Quantity</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>
                <td>{{ commande.id }}</td>
                <td>{{ commande.clientId }}</td>
                <td>{{ commande.date ? commande.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ commande.status }}</td>
                <td>{{ commande.prix }}</td>
                <td>{{ commande.modePaiement }}</td>
                {% for produit in commande.produits %}
                <td>{{ produit.nom }}</td>
                <td>{{ produit.prix * produit.quantity }}</td>
                {% endfor %}
                <td>
                    {{ include('/commande/_delete_form.html.twig') }}
                </td>
                <td>
                    <a href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-primary\">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\commande\\index.html.twig");
    }
}
