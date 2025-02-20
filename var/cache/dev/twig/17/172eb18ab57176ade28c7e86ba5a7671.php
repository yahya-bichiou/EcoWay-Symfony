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

/* backend/order.html.twig */
class __TwigTemplate_b1a4e1aa7290c4c1d4c714f20510a1d8 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/order.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "backend/order.html.twig", 1);
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

        yield "Commande index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            let collectionHolder = document.querySelector(\"#commande_produits\");
            if (!collectionHolder) {
                console.error(\"Commande produits collection not found!\");
                return;
            }

            let addButton = document.createElement(\"button\");
            addButton.textContent = \"Add Product\";
            addButton.type = \"button\";
            addButton.classList.add(\"btn\", \"btn-primary\", \"mt-2\");
            collectionHolder.after(addButton);

            addButton.addEventListener(\"click\", function() {
                let prototype = collectionHolder.dataset.prototype;
                let index = collectionHolder.children.length;
                let newForm = prototype.replace(/__name__/g, index);
                let newElement = document.createElement(\"div\");
                newElement.innerHTML = newForm;
                collectionHolder.appendChild(newElement);
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
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

        // line 34
        yield "<body class=\"navbar-fixed sidebar-fixed\" id=\"body\">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id=\"toaster\"></div>


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class=\"wrapper\">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class=\"left-sidebar sidebar-dark\" id=\"left-sidebar\">
          <div id=\"sidebar\" class=\"sidebar sidebar-with-footer\">
            <!-- Aplication Brand -->
            <div class=\"app-brand\">
              <a href=\"/index.html\">
                <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/logo.png"), "html", null, true);
        yield "\" alt=\"Mono\">
                <span class=\"brand-name\">MONO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class=\"sidebar-left\" data-simplebar style=\"height: 100%;\">
              <!-- sidebar menu -->
              <ul class=\"nav sidebar-inner\" id=\"sidebar-menu\">

                  <li class=\"section-title\">
                    Dashboards
                  </li>

                  <li
                   class=\"active\"
                   >
                    <a class=\"sidenav-item-link\" href=\"/back/order\">
                      <i class=\"mdi mdi-package-variant-closed\"></i>
                      <span class=\"nav-text\">Order Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/dropoff\">
                      <i class=\"mdi mdi-map-marker\"></i>
                      <span class=\"nav-text\">Drop-off Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/products\">
                      <i class=\"mdi mdi-shopping-outline\"></i>
                      <span class=\"nav-text\">Products Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/blog\">
                      <i class=\"mdi mdi-note-text-outline\"></i>
                      <span class=\"nav-text\">Blog Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/event\">
                      <i class=\"mdi mdi-calendar\"></i>
                      <span class=\"nav-text\">Event Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/user\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">User Dashboard</span>
                    </a>
                  </li>





                  <li class=\"section-title\">
                    Apps
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"chat.html\">
                      <i class=\"mdi mdi-wechat\"></i>
                      <span class=\"nav-text\">Chat</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"contacts.html\">
                      <i class=\"mdi mdi-phone\"></i>
                      <span class=\"nav-text\">Contacts</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"team.html\">
                      <i class=\"mdi mdi-account-group\"></i>
                      <span class=\"nav-text\">Team</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"calendar.html\">
                      <i class=\"mdi mdi-calendar-check\"></i>
                      <span class=\"nav-text\">Calendar</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#email\"
                      aria-expanded=\"false\" aria-controls=\"email\">
                      <i class=\"mdi mdi-email\"></i>
                      <span class=\"nav-text\">email</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"email\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-inbox.html\">
                                <span class=\"nav-text\">Email Inbox</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-details.html\">
                                <span class=\"nav-text\">Email Details</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-compose.html\">
                                <span class=\"nav-text\">Email Compose</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    UI Elements
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#ui-elements\"
                      aria-expanded=\"false\" aria-controls=\"ui-elements\">
                      <i class=\"mdi mdi-folder-outline\"></i>
                      <span class=\"nav-text\">UI Components</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"ui-elements\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"alert.html\">
                                <span class=\"nav-text\">Alert</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"badge.html\">
                                <span class=\"nav-text\">Badge</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"breadcrumb.html\">
                                <span class=\"nav-text\">Breadcrumb</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#buttons\"
                            aria-expanded=\"false\" aria-controls=\"buttons\">
                            <span class=\"nav-text\">Buttons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"buttons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"button-default.html\">Button Default</a>
                              </li>

                              <li >
                                <a href=\"button-dropdown.html\">Button Dropdown</a>
                              </li>

                              <li >
                                <a href=\"button-group.html\">Button Group</a>
                              </li>

                              <li >
                                <a href=\"button-social.html\">Button Social</a>
                              </li>

                              <li >
                                <a href=\"button-loading.html\">Button Loading</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"card.html\">
                                <span class=\"nav-text\">Card</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"carousel.html\">
                                <span class=\"nav-text\">Carousel</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"collapse.html\">
                                <span class=\"nav-text\">Collapse</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"editor.html\">
                                <span class=\"nav-text\">Editor</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"list-group.html\">
                                <span class=\"nav-text\">List Group</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"modal.html\">
                                <span class=\"nav-text\">Modal</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"pagination.html\">
                                <span class=\"nav-text\">Pagination</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"popover-tooltip.html\">
                                <span class=\"nav-text\">Popover & Tooltip</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"progress-bar.html\">
                                <span class=\"nav-text\">Progress Bar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"spinner.html\">
                                <span class=\"nav-text\">Spinner</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"switches.html\">
                                <span class=\"nav-text\">Switches</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#tables\"
                            aria-expanded=\"false\" aria-controls=\"tables\">
                            <span class=\"nav-text\">Tables</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"tables\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"bootstarp-tables.html\">Bootstrap Tables</a>
                              </li>

                              <li >
                                <a href=\"data-tables.html\">Data Tables</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"tab.html\">
                                <span class=\"nav-text\">Tab</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"toaster.html\">
                                <span class=\"nav-text\">Toaster</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#icons\"
                            aria-expanded=\"false\" aria-controls=\"icons\">
                            <span class=\"nav-text\">Icons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"icons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"material-icons.html\">Material Icon</a>
                              </li>

                              <li >
                                <a href=\"flag-icons.html\">Flag Icon</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#forms\"
                            aria-expanded=\"false\" aria-controls=\"forms\">
                            <span class=\"nav-text\">Forms</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"forms\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"basic-input.html\">Basic Input</a>
                              </li>

                              <li >
                                <a href=\"input-group.html\">Input Group</a>
                              </li>

                              <li >
                                <a href=\"checkbox-radio.html\">Checkbox & Radio</a>
                              </li>

                              <li >
                                <a href=\"form-validation.html\">Form Validation</a>
                              </li>

                              <li >
                                <a href=\"form-advance.html\">Form Advance</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#maps\"
                            aria-expanded=\"false\" aria-controls=\"maps\">
                            <span class=\"nav-text\">Maps</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"maps\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"google-maps.html\">Google Map</a>
                              </li>

                              <li >
                                <a href=\"vector-maps.html\">Vector Map</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#widgets\"
                            aria-expanded=\"false\" aria-controls=\"widgets\">
                            <span class=\"nav-text\">Widgets</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"widgets\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"widgets-general.html\">General Widget</a>
                              </li>

                              <li >
                                <a href=\"widgets-chart.html\">Chart Widget</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#charts\"
                      aria-expanded=\"false\" aria-controls=\"charts\">
                      <i class=\"mdi mdi-chart-pie\"></i>
                      <span class=\"nav-text\">Charts</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"charts\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"apex-charts.html\">
                                <span class=\"nav-text\">Apex Charts</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Pages
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#users\"
                      aria-expanded=\"false\" aria-controls=\"users\">
                      <i class=\"mdi mdi-image-filter-none\"></i>
                      <span class=\"nav-text\">User</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"users\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile.html\">
                                <span class=\"nav-text\">User Profile</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-activities.html\">
                                <span class=\"nav-text\">User Activities</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile-settings.html\">
                                <span class=\"nav-text\">User Profile Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-account-settings.html\">
                                <span class=\"nav-text\">User Account Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-planing-settings.html\">
                                <span class=\"nav-text\">User Planing Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-billing.html\">
                                <span class=\"nav-text\">User billing</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-notify-settings.html\">
                                <span class=\"nav-text\">User Notify Settings</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#authentication\"
                      aria-expanded=\"false\" aria-controls=\"authentication\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">Authentication</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"authentication\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-in.html\">
                                <span class=\"nav-text\">Sign In</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-up.html\">
                                <span class=\"nav-text\">Sign Up</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"reset-password.html\">
                                <span class=\"nav-text\">Reset Password</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#other-page\"
                      aria-expanded=\"false\" aria-controls=\"other-page\">
                      <i class=\"mdi mdi-file-multiple\"></i>
                      <span class=\"nav-text\">Other pages</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"other-page\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"invoice.html\">
                                <span class=\"nav-text\">Invoice</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"404.html\">
                                <span class=\"nav-text\">404 page</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-comingsoon.html\">
                                <span class=\"nav-text\">Coming Soon</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-maintenance.html\">
                                <span class=\"nav-text\">Maintenance</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Documentation
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"getting-started.html\">
                      <i class=\"mdi mdi-airplane\"></i>
                      <span class=\"nav-text\">Getting Started</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#customization\"
                      aria-expanded=\"false\" aria-controls=\"customization\">
                      <i class=\"mdi mdi-square-edit-outline\"></i>
                      <span class=\"nav-text\">Customization</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"customization\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"navbar-customization.html\">
                                <span class=\"nav-text\">Navbar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sidebar-customization.html\">
                                <span class=\"nav-text\">Sidebar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"styling.html\">
                                <span class=\"nav-text\">Styling</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>



              </ul>

            </div>

            <div class=\"sidebar-footer\">
              <div class=\"sidebar-footer-content\">
                <ul class=\"d-flex\">
                  <li>
                    <a href=\"user-account-settings.html\" data-toggle=\"tooltip\" title=\"Profile settings\"><i class=\"mdi mdi-settings\"></i></a></li>
                  <li>
                    <a href=\"#\" data-toggle=\"tooltip\" title=\"No chat messages\"><i class=\"mdi mdi-chat-processing\"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>



      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class=\"page-wrapper\">

          <!-- Header -->
          <header class=\"main-header\" id=\"header\">
            <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
              <!-- Sidebar toggle button -->
              <button id=\"sidebar-toggler\" class=\"sidebar-toggle\">
                <span class=\"sr-only\">Toggle navigation</span>
              </button>

              <span class=\"page-title\">dashboard</span>

              <div class=\"navbar-right \">

                <!-- search form -->
                <div class=\"search-form\">
                  <form action=\"index.html\" method=\"get\">
                    <div class=\"input-group input-group-sm\" id=\"input-group-search\">
                      <input type=\"text\" autocomplete=\"off\" name=\"query\" id=\"search-input\" class=\"form-control\" placeholder=\"Search...\" />
                      <div class=\"input-group-append\">
                        <button class=\"btn\" type=\"button\">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class=\"dropdown-menu dropdown-menu-search\">

                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Morbi leo risus</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Dapibus ac facilisis in</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Porta ac consectetur ac</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class=\"nav navbar-nav\">
                  <!-- Offcanvas -->
                  <li class=\"custom-dropdown\">
                    <a class=\"offcanvas-toggler active custom-dropdown-toggler\" data-offcanvas=\"contact-off\" href=\"javascript:\" >
                      <i class=\"mdi mdi-contacts icon\"></i>
                    </a>
                  </li>
                  <li class=\"custom-dropdown\">
                    <button class=\"notify-toggler custom-dropdown-toggler\">
                      <i class=\"mdi mdi-bell-outline icon\"></i>
                      <span class=\"badge badge-xs rounded-circle\">21</span>
                    </button>
                    <div class=\"dropdown-notify\">

                      <header>
                        <div class=\"nav nav-underline\" id=\"nav-tab\" role=\"tablist\">
                          <a class=\"nav-item nav-link active\" id=\"all-tabs\" data-toggle=\"tab\" href=\"#all\" role=\"tab\" aria-controls=\"nav-home\"
                            aria-selected=\"true\">All (5)</a>
                          <a class=\"nav-item nav-link\" id=\"message-tab\" data-toggle=\"tab\" href=\"#message\" role=\"tab\" aria-controls=\"nav-profile\"
                            aria-selected=\"false\">Msgs (4)</a>
                          <a class=\"nav-item nav-link\" id=\"other-tab\" data-toggle=\"tab\" href=\"#other\" role=\"tab\" aria-controls=\"nav-contact\"
                            aria-selected=\"false\">Others (3)</a>
                        </div>
                      </header>

                      <div class=\"\" data-simplebar style=\"height: 325px;\">
                        <div class=\"tab-content\" id=\"myTabContent\">

                          <div class=\"tab-pane fade show active\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tabs\">

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1040
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-02.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1074
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-03.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class=\"tab-pane fade\" id=\"message\" role=\"tabpanel\" aria-labelledby=\"message-tab\">

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-01.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Selena Wagner</span>
                                  <span class=\"discribe\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class=\"time\">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-03.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-02.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-04.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Albrecht Straub</span>
                                  <span class=\"discribe\"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class=\"tab-pane fade\" id=\"other\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class=\"border-top dropdown-notify-footer\">
                        <div class=\"d-flex justify-content-between align-items-center py-2 px-4\">
                          <span>Last updated 3 min ago</span>
                          <a id=\"refress-button\" href=\"javascript:\" class=\"btn mdi mdi-cached btn-refress\"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class=\"dropdown user-menu\">
                    <button class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                      <img src=\"";
        // line 1272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-xs-01.jpg"), "html", null, true);
        yield "\" class=\"user-image rounded-circle\" alt=\"User Image\" />
                      <span class=\"d-none d-lg-inline-block\">John Doe</span>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-profile.html\">
                          <i class=\"mdi mdi-account-outline\"></i>
                          <span class=\"nav-text\">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"email-inbox.html\">
                          <i class=\"mdi mdi-email-outline\"></i>
                          <span class=\"nav-text\">Message</span>
                          <span class=\"badge badge-pill badge-primary\">24</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-activities.html\">
                          <i class=\"mdi mdi-diamond-stone\"></i>
                          <span class=\"nav-text\">Activitise</span></a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-account-settings.html\">
                          <i class=\"mdi mdi-settings\"></i>
                          <span class=\"nav-text\">Account Setting</span>
                        </a>
                      </li>

                      <li class=\"dropdown-footer\">
                        <a class=\"dropdown-link-item\" href=\"sign-in.html\"> <i class=\"mdi mdi-logout\"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class=\"content-wrapper\">
          <div class=\"content\">
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Commandes</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          ";
        // line 1338
        yield from $this->loadTemplate("commande/index.html.twig", "backend/order.html.twig", 1338)->unwrap()->yield($context);
        // line 1339
        yield "                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#commande-modal\">Add Commande</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Livraisons</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          ";
        // line 1365
        yield from $this->loadTemplate("livraison/index.html.twig", "backend/order.html.twig", 1365)->unwrap()->yield($context);
        // line 1366
        yield "                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#livraison-modal\">Add Livraison</a>
                      </div>
                    </div>
                  </div>
                </div>

<!-- Commande Modal -->
<div class=\"modal fade\" id=\"commande-modal\" aria-labelledby=\"commande-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Commande</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1385
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1385, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1390, $this->source); })()), "clientId", [], "any", false, false, false, 1390), 'label');
        yield "
                                ";
        // line 1391
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1391, $this->source); })()), "clientId", [], "any", false, false, false, 1391), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1392
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1392, $this->source); })()), "clientId", [], "any", false, false, false, 1392), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1396
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1396, $this->source); })()), "date", [], "any", false, false, false, 1396), 'label');
        yield "
                                ";
        // line 1397
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1397, $this->source); })()), "date", [], "any", false, false, false, 1397), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1398
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1398, $this->source); })()), "date", [], "any", false, false, false, 1398), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1402
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1402, $this->source); })()), "status", [], "any", false, false, false, 1402), 'label');
        yield "
                                ";
        // line 1403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1403, $this->source); })()), "status", [], "any", false, false, false, 1403), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1409
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1409, $this->source); })()), "prix", [], "any", false, false, false, 1409), 'label');
        yield "
                                ";
        // line 1410
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1410, $this->source); })()), "prix", [], "any", false, false, false, 1410), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1411, $this->source); })()), "prix", [], "any", false, false, false, 1411), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1415, $this->source); })()), "modePaiement", [], "any", false, false, false, 1415), 'label');
        yield "
                                ";
        // line 1416
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1416, $this->source); })()), "modePaiement", [], "any", false, false, false, 1416), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 1420
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1420, $this->source); })()), "save", [], "any", false, false, false, 1420), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1421
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1421, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Livraison Modal -->
<div class=\"modal fade\" id=\"livraison-modal\" aria-labelledby=\"livraison-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Livraison</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1445
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1445, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1450
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1450, $this->source); })()), "livreur", [], "any", false, false, false, 1450), 'label');
        yield "
                                ";
        // line 1451
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1451, $this->source); })()), "livreur", [], "any", false, false, false, 1451), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1452, $this->source); })()), "livreur", [], "any", false, false, false, 1452), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1456
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1456, $this->source); })()), "adresse", [], "any", false, false, false, 1456), 'label');
        yield "
                                ";
        // line 1457
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1457, $this->source); })()), "adresse", [], "any", false, false, false, 1457), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1458, $this->source); })()), "adresse", [], "any", false, false, false, 1458), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1462, $this->source); })()), "date", [], "any", false, false, false, 1462), 'label');
        yield "
                                ";
        // line 1463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1463, $this->source); })()), "date", [], "any", false, false, false, 1463), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1464
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1464, $this->source); })()), "date", [], "any", false, false, false, 1464), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1470
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1470, $this->source); })()), "status", [], "any", false, false, false, 1470), 'label');
        yield "
                                ";
        // line 1471
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1471, $this->source); })()), "status", [], "any", false, false, false, 1471), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1475
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1475, $this->source); })()), "mode", [], "any", false, false, false, 1475), 'label');
        yield "
                                ";
        // line 1476
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1476, $this->source); })()), "mode", [], "any", false, false, false, 1476), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                                ";
        // line 1478
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1478, $this->source); })()), "prix", [], "any", false, false, false, 1478), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                        </div>
                    </div>
                    ";
        // line 1481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1481, $this->source); })()), "save", [], "any", false, false, false, 1481), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1482
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1482, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>



</div>

        </div>

          <!-- Footer -->
          <footer class=\"footer mt-auto\">
            <div class=\"copyright bg-white\">
              <p>
                &copy; <span id=\"copy-year\"></span> Copyright ECOWAY
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById(\"copy-year\").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

                    <!-- Card Offcanvas -->
                    <div class=\"card card-offcanvas\" id=\"contact-off\" >
                      <div class=\"card-header\">
                        <h2>Contacts</h2>
                        <a href=\"#\" class=\"btn btn-primary btn-pill px-4\">Add New</a>
                      </div>
                      <div class=\"card-body\">

                        <div class=\"mb-4\">
                          <input type=\"text\" class=\"form-control form-control-lg form-control-secondary rounded-0\" placeholder=\"Search contacts...\">
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-01.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span class=\"discribe\">Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-02.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Walter Reuter</span>
                              <span>Developer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-03.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Larissa Gebhardt</span>
                              <span>Cyber Punk</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-04.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                            </a>

                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Albrecht Straub</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-05.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-danger\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Leopold Ebert</span>
                              <span>Fashion Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-06.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
  </body>

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
        return "backend/order.html.twig";
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
        return array (  1869 => 1605,  1851 => 1590,  1833 => 1575,  1816 => 1561,  1798 => 1546,  1780 => 1531,  1728 => 1482,  1724 => 1481,  1718 => 1478,  1713 => 1476,  1709 => 1475,  1702 => 1471,  1698 => 1470,  1689 => 1464,  1685 => 1463,  1681 => 1462,  1674 => 1458,  1670 => 1457,  1666 => 1456,  1659 => 1452,  1655 => 1451,  1651 => 1450,  1643 => 1445,  1616 => 1421,  1612 => 1420,  1605 => 1416,  1601 => 1415,  1594 => 1411,  1590 => 1410,  1586 => 1409,  1577 => 1403,  1573 => 1402,  1566 => 1398,  1562 => 1397,  1558 => 1396,  1551 => 1392,  1547 => 1391,  1543 => 1390,  1535 => 1385,  1514 => 1366,  1512 => 1365,  1484 => 1339,  1482 => 1338,  1413 => 1272,  1323 => 1185,  1302 => 1167,  1282 => 1150,  1262 => 1133,  1200 => 1074,  1163 => 1040,  178 => 58,  152 => 34,  139 => 33,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Commande index{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            let collectionHolder = document.querySelector(\"#commande_produits\");
            if (!collectionHolder) {
                console.error(\"Commande produits collection not found!\");
                return;
            }

            let addButton = document.createElement(\"button\");
            addButton.textContent = \"Add Product\";
            addButton.type = \"button\";
            addButton.classList.add(\"btn\", \"btn-primary\", \"mt-2\");
            collectionHolder.after(addButton);

            addButton.addEventListener(\"click\", function() {
                let prototype = collectionHolder.dataset.prototype;
                let index = collectionHolder.children.length;
                let newForm = prototype.replace(/__name__/g, index);
                let newElement = document.createElement(\"div\");
                newElement.innerHTML = newForm;
                collectionHolder.appendChild(newElement);
            });
        });
    </script>
{% endblock %}

{% block body %}
<body class=\"navbar-fixed sidebar-fixed\" id=\"body\">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id=\"toaster\"></div>


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class=\"wrapper\">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class=\"left-sidebar sidebar-dark\" id=\"left-sidebar\">
          <div id=\"sidebar\" class=\"sidebar sidebar-with-footer\">
            <!-- Aplication Brand -->
            <div class=\"app-brand\">
              <a href=\"/index.html\">
                <img src=\"{{asset('backend/images/logo.png')}}\" alt=\"Mono\">
                <span class=\"brand-name\">MONO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class=\"sidebar-left\" data-simplebar style=\"height: 100%;\">
              <!-- sidebar menu -->
              <ul class=\"nav sidebar-inner\" id=\"sidebar-menu\">

                  <li class=\"section-title\">
                    Dashboards
                  </li>

                  <li
                   class=\"active\"
                   >
                    <a class=\"sidenav-item-link\" href=\"/back/order\">
                      <i class=\"mdi mdi-package-variant-closed\"></i>
                      <span class=\"nav-text\">Order Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/dropoff\">
                      <i class=\"mdi mdi-map-marker\"></i>
                      <span class=\"nav-text\">Drop-off Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/products\">
                      <i class=\"mdi mdi-shopping-outline\"></i>
                      <span class=\"nav-text\">Products Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/blog\">
                      <i class=\"mdi mdi-note-text-outline\"></i>
                      <span class=\"nav-text\">Blog Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/event\">
                      <i class=\"mdi mdi-calendar\"></i>
                      <span class=\"nav-text\">Event Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/user\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">User Dashboard</span>
                    </a>
                  </li>





                  <li class=\"section-title\">
                    Apps
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"chat.html\">
                      <i class=\"mdi mdi-wechat\"></i>
                      <span class=\"nav-text\">Chat</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"contacts.html\">
                      <i class=\"mdi mdi-phone\"></i>
                      <span class=\"nav-text\">Contacts</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"team.html\">
                      <i class=\"mdi mdi-account-group\"></i>
                      <span class=\"nav-text\">Team</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"calendar.html\">
                      <i class=\"mdi mdi-calendar-check\"></i>
                      <span class=\"nav-text\">Calendar</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#email\"
                      aria-expanded=\"false\" aria-controls=\"email\">
                      <i class=\"mdi mdi-email\"></i>
                      <span class=\"nav-text\">email</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"email\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-inbox.html\">
                                <span class=\"nav-text\">Email Inbox</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-details.html\">
                                <span class=\"nav-text\">Email Details</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-compose.html\">
                                <span class=\"nav-text\">Email Compose</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    UI Elements
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#ui-elements\"
                      aria-expanded=\"false\" aria-controls=\"ui-elements\">
                      <i class=\"mdi mdi-folder-outline\"></i>
                      <span class=\"nav-text\">UI Components</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"ui-elements\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"alert.html\">
                                <span class=\"nav-text\">Alert</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"badge.html\">
                                <span class=\"nav-text\">Badge</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"breadcrumb.html\">
                                <span class=\"nav-text\">Breadcrumb</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#buttons\"
                            aria-expanded=\"false\" aria-controls=\"buttons\">
                            <span class=\"nav-text\">Buttons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"buttons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"button-default.html\">Button Default</a>
                              </li>

                              <li >
                                <a href=\"button-dropdown.html\">Button Dropdown</a>
                              </li>

                              <li >
                                <a href=\"button-group.html\">Button Group</a>
                              </li>

                              <li >
                                <a href=\"button-social.html\">Button Social</a>
                              </li>

                              <li >
                                <a href=\"button-loading.html\">Button Loading</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"card.html\">
                                <span class=\"nav-text\">Card</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"carousel.html\">
                                <span class=\"nav-text\">Carousel</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"collapse.html\">
                                <span class=\"nav-text\">Collapse</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"editor.html\">
                                <span class=\"nav-text\">Editor</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"list-group.html\">
                                <span class=\"nav-text\">List Group</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"modal.html\">
                                <span class=\"nav-text\">Modal</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"pagination.html\">
                                <span class=\"nav-text\">Pagination</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"popover-tooltip.html\">
                                <span class=\"nav-text\">Popover & Tooltip</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"progress-bar.html\">
                                <span class=\"nav-text\">Progress Bar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"spinner.html\">
                                <span class=\"nav-text\">Spinner</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"switches.html\">
                                <span class=\"nav-text\">Switches</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#tables\"
                            aria-expanded=\"false\" aria-controls=\"tables\">
                            <span class=\"nav-text\">Tables</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"tables\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"bootstarp-tables.html\">Bootstrap Tables</a>
                              </li>

                              <li >
                                <a href=\"data-tables.html\">Data Tables</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"tab.html\">
                                <span class=\"nav-text\">Tab</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"toaster.html\">
                                <span class=\"nav-text\">Toaster</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#icons\"
                            aria-expanded=\"false\" aria-controls=\"icons\">
                            <span class=\"nav-text\">Icons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"icons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"material-icons.html\">Material Icon</a>
                              </li>

                              <li >
                                <a href=\"flag-icons.html\">Flag Icon</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#forms\"
                            aria-expanded=\"false\" aria-controls=\"forms\">
                            <span class=\"nav-text\">Forms</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"forms\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"basic-input.html\">Basic Input</a>
                              </li>

                              <li >
                                <a href=\"input-group.html\">Input Group</a>
                              </li>

                              <li >
                                <a href=\"checkbox-radio.html\">Checkbox & Radio</a>
                              </li>

                              <li >
                                <a href=\"form-validation.html\">Form Validation</a>
                              </li>

                              <li >
                                <a href=\"form-advance.html\">Form Advance</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#maps\"
                            aria-expanded=\"false\" aria-controls=\"maps\">
                            <span class=\"nav-text\">Maps</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"maps\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"google-maps.html\">Google Map</a>
                              </li>

                              <li >
                                <a href=\"vector-maps.html\">Vector Map</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#widgets\"
                            aria-expanded=\"false\" aria-controls=\"widgets\">
                            <span class=\"nav-text\">Widgets</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"widgets\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"widgets-general.html\">General Widget</a>
                              </li>

                              <li >
                                <a href=\"widgets-chart.html\">Chart Widget</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#charts\"
                      aria-expanded=\"false\" aria-controls=\"charts\">
                      <i class=\"mdi mdi-chart-pie\"></i>
                      <span class=\"nav-text\">Charts</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"charts\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"apex-charts.html\">
                                <span class=\"nav-text\">Apex Charts</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Pages
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#users\"
                      aria-expanded=\"false\" aria-controls=\"users\">
                      <i class=\"mdi mdi-image-filter-none\"></i>
                      <span class=\"nav-text\">User</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"users\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile.html\">
                                <span class=\"nav-text\">User Profile</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-activities.html\">
                                <span class=\"nav-text\">User Activities</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile-settings.html\">
                                <span class=\"nav-text\">User Profile Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-account-settings.html\">
                                <span class=\"nav-text\">User Account Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-planing-settings.html\">
                                <span class=\"nav-text\">User Planing Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-billing.html\">
                                <span class=\"nav-text\">User billing</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-notify-settings.html\">
                                <span class=\"nav-text\">User Notify Settings</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#authentication\"
                      aria-expanded=\"false\" aria-controls=\"authentication\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">Authentication</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"authentication\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-in.html\">
                                <span class=\"nav-text\">Sign In</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-up.html\">
                                <span class=\"nav-text\">Sign Up</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"reset-password.html\">
                                <span class=\"nav-text\">Reset Password</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#other-page\"
                      aria-expanded=\"false\" aria-controls=\"other-page\">
                      <i class=\"mdi mdi-file-multiple\"></i>
                      <span class=\"nav-text\">Other pages</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"other-page\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"invoice.html\">
                                <span class=\"nav-text\">Invoice</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"404.html\">
                                <span class=\"nav-text\">404 page</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-comingsoon.html\">
                                <span class=\"nav-text\">Coming Soon</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-maintenance.html\">
                                <span class=\"nav-text\">Maintenance</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Documentation
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"getting-started.html\">
                      <i class=\"mdi mdi-airplane\"></i>
                      <span class=\"nav-text\">Getting Started</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#customization\"
                      aria-expanded=\"false\" aria-controls=\"customization\">
                      <i class=\"mdi mdi-square-edit-outline\"></i>
                      <span class=\"nav-text\">Customization</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"customization\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"navbar-customization.html\">
                                <span class=\"nav-text\">Navbar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sidebar-customization.html\">
                                <span class=\"nav-text\">Sidebar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"styling.html\">
                                <span class=\"nav-text\">Styling</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>



              </ul>

            </div>

            <div class=\"sidebar-footer\">
              <div class=\"sidebar-footer-content\">
                <ul class=\"d-flex\">
                  <li>
                    <a href=\"user-account-settings.html\" data-toggle=\"tooltip\" title=\"Profile settings\"><i class=\"mdi mdi-settings\"></i></a></li>
                  <li>
                    <a href=\"#\" data-toggle=\"tooltip\" title=\"No chat messages\"><i class=\"mdi mdi-chat-processing\"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>



      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class=\"page-wrapper\">

          <!-- Header -->
          <header class=\"main-header\" id=\"header\">
            <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
              <!-- Sidebar toggle button -->
              <button id=\"sidebar-toggler\" class=\"sidebar-toggle\">
                <span class=\"sr-only\">Toggle navigation</span>
              </button>

              <span class=\"page-title\">dashboard</span>

              <div class=\"navbar-right \">

                <!-- search form -->
                <div class=\"search-form\">
                  <form action=\"index.html\" method=\"get\">
                    <div class=\"input-group input-group-sm\" id=\"input-group-search\">
                      <input type=\"text\" autocomplete=\"off\" name=\"query\" id=\"search-input\" class=\"form-control\" placeholder=\"Search...\" />
                      <div class=\"input-group-append\">
                        <button class=\"btn\" type=\"button\">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class=\"dropdown-menu dropdown-menu-search\">

                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Morbi leo risus</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Dapibus ac facilisis in</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Porta ac consectetur ac</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class=\"nav navbar-nav\">
                  <!-- Offcanvas -->
                  <li class=\"custom-dropdown\">
                    <a class=\"offcanvas-toggler active custom-dropdown-toggler\" data-offcanvas=\"contact-off\" href=\"javascript:\" >
                      <i class=\"mdi mdi-contacts icon\"></i>
                    </a>
                  </li>
                  <li class=\"custom-dropdown\">
                    <button class=\"notify-toggler custom-dropdown-toggler\">
                      <i class=\"mdi mdi-bell-outline icon\"></i>
                      <span class=\"badge badge-xs rounded-circle\">21</span>
                    </button>
                    <div class=\"dropdown-notify\">

                      <header>
                        <div class=\"nav nav-underline\" id=\"nav-tab\" role=\"tablist\">
                          <a class=\"nav-item nav-link active\" id=\"all-tabs\" data-toggle=\"tab\" href=\"#all\" role=\"tab\" aria-controls=\"nav-home\"
                            aria-selected=\"true\">All (5)</a>
                          <a class=\"nav-item nav-link\" id=\"message-tab\" data-toggle=\"tab\" href=\"#message\" role=\"tab\" aria-controls=\"nav-profile\"
                            aria-selected=\"false\">Msgs (4)</a>
                          <a class=\"nav-item nav-link\" id=\"other-tab\" data-toggle=\"tab\" href=\"#other\" role=\"tab\" aria-controls=\"nav-contact\"
                            aria-selected=\"false\">Others (3)</a>
                        </div>
                      </header>

                      <div class=\"\" data-simplebar style=\"height: 325px;\">
                        <div class=\"tab-content\" id=\"myTabContent\">

                          <div class=\"tab-pane fade show active\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tabs\">

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-02.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-03.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class=\"tab-pane fade\" id=\"message\" role=\"tabpanel\" aria-labelledby=\"message-tab\">

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-01.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Selena Wagner</span>
                                  <span class=\"discribe\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class=\"time\">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-03.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-02.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-04.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Albrecht Straub</span>
                                  <span class=\"discribe\"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class=\"tab-pane fade\" id=\"other\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class=\"border-top dropdown-notify-footer\">
                        <div class=\"d-flex justify-content-between align-items-center py-2 px-4\">
                          <span>Last updated 3 min ago</span>
                          <a id=\"refress-button\" href=\"javascript:\" class=\"btn mdi mdi-cached btn-refress\"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class=\"dropdown user-menu\">
                    <button class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                      <img src=\"{{asset('backend/images/user/user-xs-01.jpg')}}\" class=\"user-image rounded-circle\" alt=\"User Image\" />
                      <span class=\"d-none d-lg-inline-block\">John Doe</span>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-profile.html\">
                          <i class=\"mdi mdi-account-outline\"></i>
                          <span class=\"nav-text\">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"email-inbox.html\">
                          <i class=\"mdi mdi-email-outline\"></i>
                          <span class=\"nav-text\">Message</span>
                          <span class=\"badge badge-pill badge-primary\">24</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-activities.html\">
                          <i class=\"mdi mdi-diamond-stone\"></i>
                          <span class=\"nav-text\">Activitise</span></a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-account-settings.html\">
                          <i class=\"mdi mdi-settings\"></i>
                          <span class=\"nav-text\">Account Setting</span>
                        </a>
                      </li>

                      <li class=\"dropdown-footer\">
                        <a class=\"dropdown-link-item\" href=\"sign-in.html\"> <i class=\"mdi mdi-logout\"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class=\"content-wrapper\">
          <div class=\"content\">
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Commandes</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          {% include \"commande/index.html.twig\" %}
                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#commande-modal\">Add Commande</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Livraisons</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          {% include \"livraison/index.html.twig\" %}
                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#livraison-modal\">Add Livraison</a>
                      </div>
                    </div>
                  </div>
                </div>

<!-- Commande Modal -->
<div class=\"modal fade\" id=\"commande-modal\" aria-labelledby=\"commande-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Commande</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(commandeForm, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(commandeForm.clientId) }}
                                {{ form_widget(commandeForm.clientId, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(commandeForm.clientId) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(commandeForm.date) }}
                                {{ form_widget(commandeForm.date, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(commandeForm.date) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(commandeForm.status) }}
                                {{ form_widget(commandeForm.status, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(commandeForm.prix) }}
                                {{ form_widget(commandeForm.prix, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(commandeForm.prix) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(commandeForm.modePaiement) }}
                                {{ form_widget(commandeForm.modePaiement, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    {{ form_widget(commandeForm.save, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_end(commandeForm) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Livraison Modal -->
<div class=\"modal fade\" id=\"livraison-modal\" aria-labelledby=\"livraison-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Livraison</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(livraisonForm, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.livreur) }}
                                {{ form_widget(livraisonForm.livreur, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(livraisonForm.livreur) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.adresse) }}
                                {{ form_widget(livraisonForm.adresse, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(livraisonForm.adresse) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.date) }}
                                {{ form_widget(livraisonForm.date, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(livraisonForm.date) }}
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.status) }}
                                {{ form_widget(livraisonForm.status, {'attr': {'class': 'form-control'}}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.mode) }}
                                {{ form_widget(livraisonForm.mode, {'attr': {'class': 'form-control'}}) }}
                            </div>
                                {{ form_widget(livraisonForm.prix, {'attr': {'style': 'display: none;'}}) }}
                        </div>
                    </div>
                    {{ form_widget(livraisonForm.save, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_end(livraisonForm) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>



</div>

        </div>

          <!-- Footer -->
          <footer class=\"footer mt-auto\">
            <div class=\"copyright bg-white\">
              <p>
                &copy; <span id=\"copy-year\"></span> Copyright ECOWAY
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById(\"copy-year\").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

                    <!-- Card Offcanvas -->
                    <div class=\"card card-offcanvas\" id=\"contact-off\" >
                      <div class=\"card-header\">
                        <h2>Contacts</h2>
                        <a href=\"#\" class=\"btn btn-primary btn-pill px-4\">Add New</a>
                      </div>
                      <div class=\"card-body\">

                        <div class=\"mb-4\">
                          <input type=\"text\" class=\"form-control form-control-lg form-control-secondary rounded-0\" placeholder=\"Search contacts...\">
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-01.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span class=\"discribe\">Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-02.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Walter Reuter</span>
                              <span>Developer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-03.jpg')}}\" alt=\"User Image\">
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Larissa Gebhardt</span>
                              <span>Cyber Punk</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-04.jpg')}}\" alt=\"User Image\">
                            </a>

                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Albrecht Straub</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-05.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-danger\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Leopold Ebert</span>
                              <span>Fashion Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-06.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
  </body>

{% endblock %}
", "backend/order.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\backend\\order.html.twig");
    }
}
