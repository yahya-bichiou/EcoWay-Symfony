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

/* depot/index.html.twig */
class __TwigTemplate_2fcf720d9d1d948bb9ac89a383c781e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/index.html.twig"));

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
                <th>Nom</th>
                <th>Adresse</th>
                <th>Capacité</th>
                <th>Image</th>
                <th>Progress</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["depots"]) || array_key_exists("depots", $context) ? $context["depots"] : (function () { throw new RuntimeError('Variable "depots" does not exist.', 15, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 16
            yield "            <tr>
                <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "nom", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "adresse", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "capacite", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "image", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 23
            $context["percentageUsed"] = CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "usagePercentage", [], "any", false, false, false, 23);
            // line 24
            yield "
        <div class=\"progress\">
            <div class=\"progress-bar\"
                 role=\"progressbar\"
                 style=\"width: ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentageUsed"]) || array_key_exists("percentageUsed", $context) ? $context["percentageUsed"] : (function () { throw new RuntimeError('Variable "percentageUsed" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "%; background-color:
                    ";
            // line 29
            if (((isset($context["percentageUsed"]) || array_key_exists("percentageUsed", $context) ? $context["percentageUsed"] : (function () { throw new RuntimeError('Variable "percentageUsed" does not exist.', 29, $this->source); })()) < 50)) {
                // line 30
                yield "                        green
                    ";
            } elseif ((            // line 31
(isset($context["percentageUsed"]) || array_key_exists("percentageUsed", $context) ? $context["percentageUsed"] : (function () { throw new RuntimeError('Variable "percentageUsed" does not exist.', 31, $this->source); })()) < 80)) {
                // line 32
                yield "                        yellow
                    ";
            } else {
                // line 34
                yield "                        red
                    ";
            }
            // line 35
            yield ";\"
                 aria-valuenow=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentageUsed"]) || array_key_exists("percentageUsed", $context) ? $context["percentageUsed"] : (function () { throw new RuntimeError('Variable "percentageUsed" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "\"
                 aria-valuemin=\"0\"
                 aria-valuemax=\"100\">
                ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "remainingSpace", [], "any", false, false, false, 39), "html", null, true);
            yield "Kg left
            </div>
        </div>
    </td>
                <td>
                    ";
            // line 44
            yield Twig\Extension\CoreExtension::include($this->env, $context, "/depot/_delete_form.html.twig");
            yield "
                </td>
                <td>
                    <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 47)]), "html", null, true);
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
        // line 54
        if (!$context['_iterated']) {
            // line 51
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depot'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "depot/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  206 => 55,  197 => 51,  195 => 54,  179 => 47,  173 => 44,  165 => 39,  159 => 36,  156 => 35,  152 => 34,  148 => 32,  146 => 31,  143 => 30,  141 => 29,  137 => 28,  131 => 24,  129 => 23,  124 => 21,  120 => 20,  116 => 19,  112 => 18,  108 => 17,  105 => 16,  87 => 15,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Capacité</th>
                <th>Image</th>
                <th>Progress</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for depot in depots %}
            <tr>
                <td>{{ depot.id }}</td>
                <td>{{ depot.nom }}</td>
                <td>{{ depot.adresse}}</td>
                <td>{{ depot.capacite }}</td>
                <td>{{ depot.image }}</td>
                <td>
                    {% set percentageUsed = depot.usagePercentage %}

        <div class=\"progress\">
            <div class=\"progress-bar\"
                 role=\"progressbar\"
                 style=\"width: {{ percentageUsed }}%; background-color:
                    {% if percentageUsed < 50 %}
                        green
                    {% elseif percentageUsed < 80 %}
                        yellow
                    {% else %}
                        red
                    {% endif %};\"
                 aria-valuenow=\"{{ percentageUsed }}\"
                 aria-valuemin=\"0\"
                 aria-valuemax=\"100\">
                {{ depot.remainingSpace }}Kg left
            </div>
        </div>
    </td>
                <td>
                    {{ include('/depot/_delete_form.html.twig') }}
                </td>
                <td>
                    <a href=\"{{ path('app_depot_edit', {'id': depot.id}) }}\" class=\"btn btn-primary\">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
{% endblock %}
", "depot/index.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\depot\\index.html.twig");
    }
}
