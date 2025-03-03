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

/* backend/dropoff.html.twig */
class __TwigTemplate_04ca82ad6c4296851bb38f0aa4105ac1 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/dropoff.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/dropoff.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "backend/dropoff.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
        // line 30
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

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/order\">
                      <i class=\"mdi mdi-package-variant-closed\"></i>
                      <span class=\"nav-text\">Order Dashboard</span>
                    </a>
                  </li>

                  <li class=\"active\">
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
        <span class=\"badge badge-xs rounded-circle\">";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fullDepots"]) || array_key_exists("fullDepots", $context) ? $context["fullDepots"] : (function () { throw new RuntimeError('Variable "fullDepots" does not exist.', 987, $this->source); })())), "html", null, true);
        yield "</span>
    </button>
    <div class=\"dropdown-notify\">
        <header>
            <div class=\"nav nav-underline\" id=\"nav-tab\" role=\"tablist\">
                <a class=\"nav-item nav-link active\" id=\"all-tabs\" data-toggle=\"tab\" href=\"#all\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">All (";
        // line 992
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fullDepots"]) || array_key_exists("fullDepots", $context) ? $context["fullDepots"] : (function () { throw new RuntimeError('Variable "fullDepots" does not exist.', 992, $this->source); })())), "html", null, true);
        yield ")</a>
            </div>
        </header>

        <div class=\"\" data-simplebar style=\"height: 325px;\">
            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tabs\">
                    ";
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fullDepots"]) || array_key_exists("fullDepots", $context) ? $context["fullDepots"] : (function () { throw new RuntimeError('Variable "fullDepots" does not exist.', 999, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 1000
            yield "                        <div class=\"media media-sm bg-danger p-4 mb-0\">
                            <div class=\"media-sm-wrapper\">
                                <a href=\"#\">
                                    <i class=\"mdi mdi-alert-circle-outline\"></i>
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <a href=\"#\">
                                    <span class=\"title mb-0\">Depot Full!</span>
                                    <span class=\"discribe\">The depot ";
            // line 1009
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "nom", [], "any", false, false, false, 1009), "html", null, true);
            yield " is full, please empty it.</span>
                                    <span class=\"time\">
                                        <time>Just now</time>...
                                    </span>
                                </a>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 1022
        if (!$context['_iterated']) {
            // line 1017
            yield "                        <div class=\"media media-sm p-4 mb-0\">
                            <div class=\"media-body\">
                                <span class=\"title mb-0\">No depots are full!</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depot'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1023
        yield "                </div>
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
        // line 1039
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
                        <h2>Liste des Dépots</h2>
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
        // line 1105
        yield from $this->loadTemplate("depot/index.html.twig", "backend/dropoff.html.twig", 1105)->unwrap()->yield($context);
        // line 1106
        yield "                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#depot-modal\">Add Depot</a>
                        <a href=\"";
        // line 1108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("depot_export");
        yield "\" class=\"btn btn-primary btn-pill\">Export to Excel</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Collectes</h2>
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
        // line 1133
        yield from $this->loadTemplate("collecte/index.html.twig", "backend/dropoff.html.twig", 1133)->unwrap()->yield($context);
        // line 1134
        yield "                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#collecte-modal\">Add Collecte</a>
                      </div>
                    </div>
                  </div>
                </div>


<!-- depot Modal -->
<div class=\"modal fade\" id=\"depot-modal\" aria-labelledby=\"depot-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Depot</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1154
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1154, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1159, $this->source); })()), "nom", [], "any", false, false, false, 1159), 'label');
        yield "
                                ";
        // line 1160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1160, $this->source); })()), "nom", [], "any", false, false, false, 1160), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1161, $this->source); })()), "nom", [], "any", false, false, false, 1161), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1165, $this->source); })()), "adresse", [], "any", false, false, false, 1165), 'label');
        yield "
                                ";
        // line 1166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1166, $this->source); })()), "adresse", [], "any", false, false, false, 1166), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1167, $this->source); })()), "adresse", [], "any", false, false, false, 1167), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1171, $this->source); })()), "capacite", [], "any", false, false, false, 1171), 'label');
        yield "
                                ";
        // line 1172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1172, $this->source); })()), "capacite", [], "any", false, false, false, 1172), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1173, $this->source); })()), "capacite", [], "any", false, false, false, 1173), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                        <div class=\"custom-file\">
                          ";
        // line 1179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1179, $this->source); })()), "image", [], "any", false, false, false, 1179), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                          <span class=\"upload-image\">Click here to <span class=\"text-primary\">add product image.</span> </span>
                        </div>
                        </div>
                    </div>
                    ";
        // line 1184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1184, $this->source); })()), "save", [], "any", false, false, false, 1184), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1185
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["depotForm"]) || array_key_exists("depotForm", $context) ? $context["depotForm"] : (function () { throw new RuntimeError('Variable "depotForm" does not exist.', 1185, $this->source); })()), 'form_end');
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


<!-- collecte Modal -->
<div class=\"modal fade\" id=\"collecte-modal\" aria-labelledby=\"collecte-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Collecte</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1209
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1209, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                ";
        // line 1214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1214, $this->source); })()), "quantite", [], "any", false, false, false, 1214), 'label');
        yield "
                                ";
        // line 1215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1215, $this->source); })()), "quantite", [], "any", false, false, false, 1215), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1216, $this->source); })()), "quantite", [], "any", false, false, false, 1216), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1220, $this->source); })()), "date", [], "any", false, false, false, 1220), 'label');
        yield "
                                ";
        // line 1221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1221, $this->source); })()), "date", [], "any", false, false, false, 1221), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1222, $this->source); })()), "date", [], "any", false, false, false, 1222), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1226, $this->source); })()), "responsable", [], "any", false, false, false, 1226), 'label');
        yield "
                                ";
        // line 1227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1227, $this->source); })()), "responsable", [], "any", false, false, false, 1227), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1228, $this->source); })()), "responsable", [], "any", false, false, false, 1228), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 1232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1232, $this->source); })()), "depot", [], "any", false, false, false, 1232), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1233, $this->source); })()), "save", [], "any", false, false, false, 1233), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1234
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["collecteForm"]) || array_key_exists("collecteForm", $context) ? $context["collecteForm"] : (function () { throw new RuntimeError('Variable "collecteForm" does not exist.', 1234, $this->source); })()), 'form_end');
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
        // line 1284
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
        // line 1299
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
        // line 1314
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
        // line 1328
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
        // line 1343
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
        // line 1358
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
        return "backend/dropoff.html.twig";
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
        return array (  1587 => 1358,  1569 => 1343,  1551 => 1328,  1534 => 1314,  1516 => 1299,  1498 => 1284,  1445 => 1234,  1441 => 1233,  1437 => 1232,  1430 => 1228,  1426 => 1227,  1422 => 1226,  1415 => 1222,  1411 => 1221,  1407 => 1220,  1400 => 1216,  1396 => 1215,  1392 => 1214,  1384 => 1209,  1357 => 1185,  1353 => 1184,  1345 => 1179,  1336 => 1173,  1332 => 1172,  1328 => 1171,  1321 => 1167,  1317 => 1166,  1313 => 1165,  1306 => 1161,  1302 => 1160,  1298 => 1159,  1290 => 1154,  1268 => 1134,  1266 => 1133,  1238 => 1108,  1234 => 1106,  1232 => 1105,  1163 => 1039,  1145 => 1023,  1134 => 1017,  1132 => 1022,  1120 => 1009,  1109 => 1000,  1104 => 999,  1094 => 992,  1086 => 987,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Commande index{% endblock %}

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

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/order\">
                      <i class=\"mdi mdi-package-variant-closed\"></i>
                      <span class=\"nav-text\">Order Dashboard</span>
                    </a>
                  </li>

                  <li class=\"active\">
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
        <span class=\"badge badge-xs rounded-circle\">{{ fullDepots|length }}</span>
    </button>
    <div class=\"dropdown-notify\">
        <header>
            <div class=\"nav nav-underline\" id=\"nav-tab\" role=\"tablist\">
                <a class=\"nav-item nav-link active\" id=\"all-tabs\" data-toggle=\"tab\" href=\"#all\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">All ({{ fullDepots|length }})</a>
            </div>
        </header>

        <div class=\"\" data-simplebar style=\"height: 325px;\">
            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tabs\">
                    {% for depot in fullDepots %}
                        <div class=\"media media-sm bg-danger p-4 mb-0\">
                            <div class=\"media-sm-wrapper\">
                                <a href=\"#\">
                                    <i class=\"mdi mdi-alert-circle-outline\"></i>
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <a href=\"#\">
                                    <span class=\"title mb-0\">Depot Full!</span>
                                    <span class=\"discribe\">The depot {{ depot.nom }} is full, please empty it.</span>
                                    <span class=\"time\">
                                        <time>Just now</time>...
                                    </span>
                                </a>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"media media-sm p-4 mb-0\">
                            <div class=\"media-body\">
                                <span class=\"title mb-0\">No depots are full!</span>
                            </div>
                        </div>
                    {% endfor %}
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
                        <h2>Liste des Dépots</h2>
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
                          {% include \"depot/index.html.twig\" %}
                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#depot-modal\">Add Depot</a>
                        <a href=\"{{ path('depot_export') }}\" class=\"btn btn-primary btn-pill\">Export to Excel</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Collectes</h2>
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
                          {% include \"collecte/index.html.twig\" %}
                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#collecte-modal\">Add Collecte</a>
                      </div>
                    </div>
                  </div>
                </div>


<!-- depot Modal -->
<div class=\"modal fade\" id=\"depot-modal\" aria-labelledby=\"depot-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Depot</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(depotForm, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(depotForm.nom) }}
                                {{ form_widget(depotForm.nom, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(depotForm.nom) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(depotForm.adresse) }}
                                {{ form_widget(depotForm.adresse, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(depotForm.adresse) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(depotForm.capacite) }}
                                {{ form_widget(depotForm.capacite, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(depotForm.capacite) }}
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                        <div class=\"custom-file\">
                          {{ form_widget(depotForm.image, {'attr': {'class': 'form-control'}}) }}
                          <span class=\"upload-image\">Click here to <span class=\"text-primary\">add product image.</span> </span>
                        </div>
                        </div>
                    </div>
                    {{ form_widget(depotForm.save, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_end(depotForm) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- collecte Modal -->
<div class=\"modal fade\" id=\"collecte-modal\" aria-labelledby=\"collecte-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Collecte</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(collecteForm, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                {{ form_label(collecteForm.quantite) }}
                                {{ form_widget(collecteForm.quantite, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(collecteForm.quantite) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(collecteForm.date) }}
                                {{ form_widget(collecteForm.date, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(collecteForm.date) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(collecteForm.responsable) }}
                                {{ form_widget(collecteForm.responsable, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(collecteForm.responsable) }}
                            </div>
                        </div>
                    </div>
                    {{ form_widget(collecteForm.depot, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_widget(collecteForm.save, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_end(collecteForm) }}
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
", "backend/dropoff.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\backend\\dropoff.html.twig");
    }
}
