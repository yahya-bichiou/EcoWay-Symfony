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

/* back.html.twig */
class __TwigTemplate_f19348cad0742cbdfc5d2d4e57d9c883 extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 20
        yield "
        ";
        // line 21
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 61
        yield "    </head>
    <body>
        ";
        // line 63
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 65
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "            <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700|Roboto\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/material/css/materialdesignicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/simplebar/simplebar.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/nprogress/nprogress.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/jvectormap/jquery-jvectormap-2.0.3.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/toaster/toastr.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
            <link id=\"main-css-href\" rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/css/style.css"), "html", null, true);
        yield "\" />
            <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/favicon.png"), "html", null, true);
        yield "\" rel=\"shortcut icon\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/nprogress/nprogress.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"https://unpkg.com/hotkeys-js/dist/hotkeys.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
            <script src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/apexcharts/apexcharts.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/jvectormap/jquery-jvectormap-world-mill.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/jvectormap/jquery-jvectormap-us-aea.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/daterangepicker/moment.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        yield "\"></script>
            <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name=\"dateRange\"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name=\"dateRange\"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name=\"dateRange\"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
            </script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css\">
            <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
            <script src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/plugins/toaster/toastr.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/js/mono.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/js/chart.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/js/map.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/js/custom.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
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

        // line 64
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  296 => 64,  283 => 63,  270 => 59,  266 => 58,  262 => 57,  258 => 56,  254 => 55,  231 => 35,  227 => 34,  223 => 33,  219 => 32,  215 => 31,  211 => 30,  207 => 29,  200 => 25,  196 => 24,  192 => 23,  187 => 22,  174 => 21,  161 => 18,  157 => 17,  153 => 16,  148 => 14,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  125 => 8,  112 => 7,  89 => 5,  76 => 65,  74 => 63,  70 => 61,  68 => 21,  65 => 20,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>

        {% block css %}
            <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700|Roboto\" rel=\"stylesheet\">
            <link href=\"{{asset('backend/plugins/material/css/materialdesignicons.min.css')}}\" rel=\"stylesheet\" />
            <link href=\"{{asset('backend/plugins/simplebar/simplebar.css')}}\" rel=\"stylesheet\" />
            <link href=\"{{asset('backend/plugins/nprogress/nprogress.css')}}\" rel=\"stylesheet\" />
            <link href=\"{{asset('backend/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" />
            <link href=\"{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}\" rel=\"stylesheet\" />
            <link href=\"{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}\" rel=\"stylesheet\" />
            <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
            <link href=\"{{asset('backend/plugins/toaster/toastr.min.css')}}\" rel=\"stylesheet\" />
            <link id=\"main-css-href\" rel=\"stylesheet\" href=\"{{asset('backend/css/style.css')}}\" />
            <link href=\"{{asset('backend/images/favicon.png')}}\" rel=\"shortcut icon\" />
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{asset('backend/plugins/nprogress/nprogress.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/jquery/jquery.min.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/simplebar/simplebar.min.js')}}\"></script>
            <script src=\"https://unpkg.com/hotkeys-js/dist/hotkeys.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
            <script src=\"{{asset('backend/plugins/apexcharts/apexcharts.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/daterangepicker/moment.min.js')}}\"></script>
            <script src=\"{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}\"></script>
            <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name=\"dateRange\"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name=\"dateRange\"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name=\"dateRange\"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
            </script>
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css\">
            <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
            <script src=\"{{asset('backend/plugins/toaster/toastr.min.js')}}\"></script>
            <script src=\"{{asset('backend/js/mono.js')}}\"></script>
            <script src=\"{{asset('backend/js/chart.js')}}\"></script>
            <script src=\"{{asset('backend/js/map.js')}}\"></script>
            <script src=\"{{asset('backend/js/custom.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}
        {% endblock %}
    </body>
</html>
", "back.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\back.html.twig");
    }
}
