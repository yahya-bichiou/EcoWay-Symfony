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

/* phase/index.html.twig */
class __TwigTemplate_5971d6f0fb17d7663a5c62fed8e02ab7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phase/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "phase/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "phase/index.html.twig", 1);
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

        yield "Phase index";
        
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
  <div>
    <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bg1.png"), "html", null, true);
        yield "\" >
  </div>
  <div id=\"services\" class=\"our-services section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Production</h6>
            <h2>Les phases de production</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row\">
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["phases"]) || array_key_exists("phases", $context) ? $context["phases"] : (function () { throw new RuntimeError('Variable "phases" does not exist.', 24, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["phase"]) {
            // line 25
            yield "        <div class=\"col-lg-4\">
          <div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
            <div class=\"row\">
              <div class=\"col-lg-8\">
                <div class=\"right-content\">
                  <h4>Phase ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "numP", [], "any", false, false, false, 30), "html", null, true);
            yield "</h4>
                  <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                  <p>Date: ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "dateP", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                  <p>Status: ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "status", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                  <table>
                  <tr>
                  <td>
                  <form action=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_phase_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">
                    <button class=\"btn\">Edit</button>
                  </form>
                  </td>
                  <td>";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "phase/_delete_form.html.twig");
            yield "</td>
                  </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        // line 53
        if (!$context['_iterated']) {
            // line 50
            yield "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['phase'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "      </div>
    </div>



<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
<div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Planning</h6>
</div>
";
        // line 65
        yield from $this->loadTemplate("plannig/index.html.twig", "phase/index.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "</div>
</div>
</div>
<a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_phase_new");
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
        return "phase/index.html.twig";
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
        return array (  226 => 69,  221 => 66,  219 => 65,  206 => 54,  197 => 50,  195 => 53,  174 => 41,  167 => 37,  160 => 33,  156 => 32,  152 => 31,  148 => 30,  141 => 25,  123 => 24,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phase index{% endblock %}

{% block body %}

  <div>
    <img src=\"{{ asset('bg1.png')}}\" >
  </div>
  <div id=\"services\" class=\"our-services section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Production</h6>
            <h2>Les phases de production</h2>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row\">
      {% for phase in phases %}
        <div class=\"col-lg-4\">
          <div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
            <div class=\"row\">
              <div class=\"col-lg-8\">
                <div class=\"right-content\">
                  <h4>Phase {{ phase.numP }}</h4>
                  <p>{{ phase.description }}</p>
                  <p>Date: {{ phase.dateP }}</p>
                  <p>Status: {{ phase.status }}</p>
                  <table>
                  <tr>
                  <td>
                  <form action=\"{{ path('app_phase_edit', {'id': phase.id}) }}\">
                    <button class=\"btn\">Edit</button>
                  </form>
                  </td>
                  <td>{{ include('phase/_delete_form.html.twig') }}</td>
                  </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
    {% endfor %}
      </div>
    </div>



<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"service-item wow bounceInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.3s\">
<div class=\"section-heading wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
            <h6>Planning</h6>
</div>
{% include 'plannig/index.html.twig' %}
</div>
</div>
</div>
<a href=\"{{ path('app_phase_new') }}\">Create new</a>
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
", "phase/index.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\phase\\index.html.twig");
    }
}
