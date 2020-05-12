<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin.html.twig */
class __TwigTemplate_9a54d4527813bbb0fef17a9bfcab48435b0550d81809693fd9a15e9bb81c6d2b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'entete' => [$this, 'block_entete'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"utf-8\" />
        <title>Administration Crowdedu Africa</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>

        ";
        // line 36
        $this->displayBlock('entete', $context, $blocks);
        // line 320
        echo "


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== --> 
            ";
        // line 326
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_entete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entete"));

        // line 37
        echo "
    <body class=\"fixed-left\">
        <!-- Begin page -->
         <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Crowdedu Africa </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "photo", [], "any", false, false, false, 132))), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>          
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "photo", [], "any", false, false, false, 155))), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                            
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "prenom", [], "any", false, false, false, 160), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "nom", [], "any", false, false, false, 160), "html", null, true);
        echo "<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrateur</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 326
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "                     
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Welcome !</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li class=\"active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <!--Widget-4 -->
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-info\"><i class=\"ion-social-usd\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">15852</span>
                                        Total Sales
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-purple\"><i class=\"ion-ios7-cart\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">956</span>
                                        New Orders
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">90%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-purple\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                                    <span class=\"sr-only\">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-success\"><i class=\"ion-android-contacts\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">5210</span>
                                        New Users
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">57%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"57\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 57%\">
                                                    <span class=\"sr-only\">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-primary\"><i class=\"ion-eye\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row-->


                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">948,16</h4>
                                                            <small class=\"text-muted\">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->

                            <div class=\"col-lg-4\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"pie-chart\">
                                                        <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->


                        <div class=\"row\">
                            <!-- INBOX -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">Inbox</h4>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"inbox-widget nicescroll mx-box\">
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Chadengle</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Tomaslau</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Stillnotdavid</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Kurafire</p>
                                                    <p class=\"inbox-item-text\">Nice to meet you</p>
                                                    <p class=\"inbox-item-date\">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Shahedk</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Adhamdannaway</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Arashasghari</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Joshaustin</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Chat</h3> 
                                    </div> 
                                    <div class=\"panel-body\"> 
                                        <div class=\"chat-conversation\">
                                            <ul class=\"conversation-list nicescroll\">
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"male\">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">mol
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"Female\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"male\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"male\">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 chat-inputbar\">
                                                    <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                                                </div>
                                                <div class=\"col-sm-3 chat-send\">
                                                    <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> <!-- end col-->


                            <!-- TODOs -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Todo</h3> 
                                    </div> 
                                    <div class=\"panel-body todoapp\"> 
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4> 
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                                            </div>
                                        </div>

                                        <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                                         <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 todo-inputbar\">
                                                    <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                                                </div>
                                                <div class=\"col-sm-3 todo-send\">
                                                    <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2019 © Moltran.
                </footer>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/images/users/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>

        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 843
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 854
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 872
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 875
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    
    </body>

</html>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1149 => 878,  1143 => 875,  1137 => 872,  1131 => 869,  1127 => 868,  1123 => 867,  1119 => 866,  1115 => 865,  1111 => 864,  1107 => 863,  1103 => 862,  1096 => 858,  1090 => 855,  1086 => 854,  1080 => 851,  1074 => 848,  1069 => 846,  1065 => 845,  1061 => 844,  1057 => 843,  1053 => 842,  1049 => 841,  1045 => 840,  1041 => 839,  1037 => 838,  1033 => 837,  1007 => 814,  994 => 804,  981 => 794,  968 => 784,  955 => 774,  942 => 764,  929 => 754,  916 => 744,  903 => 734,  890 => 724,  804 => 641,  787 => 627,  770 => 613,  753 => 599,  728 => 577,  717 => 569,  706 => 561,  695 => 553,  684 => 545,  673 => 537,  662 => 529,  651 => 521,  445 => 326,  363 => 248,  270 => 160,  262 => 155,  236 => 132,  139 => 37,  129 => 36,  119 => 326,  111 => 320,  109 => 36,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"utf-8\" />
        <title>Administration Crowdedu Africa</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"{{asset('plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('moltran/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"{{asset('moltran/js/modernizr.min.js')}}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>

        {% block entete %}

    <body class=\"fixed-left\">
        <!-- Begin page -->
         <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Crowdedu Africa </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{ asset('uploads/' ~ app.user.photo) }}\" alt=\"user-img\" class=\"img-circle\"> </a>          
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"{{ asset('uploads/' ~ app.user.photo) }}\" alt=\"\" class=\"thumb-md img-circle\">
                            
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">{{app.user.prenom}} {{app.user.nom}}<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrateur</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"{{path('admin_users')}}\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
            {% endblock %}



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== --> 
            {% block content %}                     
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Welcome !</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li class=\"active\">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <!--Widget-4 -->
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-info\"><i class=\"ion-social-usd\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">15852</span>
                                        Total Sales
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-purple\"><i class=\"ion-ios7-cart\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">956</span>
                                        New Orders
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">90%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-purple\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                                    <span class=\"sr-only\">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-success\"><i class=\"ion-android-contacts\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">5210</span>
                                        New Users
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">57%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"57\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 57%\">
                                                    <span class=\"sr-only\">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"mini-stat clearfix bx-shadow bg-white\">
                                    <span class=\"mini-stat-icon bg-primary\"><i class=\"ion-eye\"></i></span>
                                    <div class=\"mini-stat-info text-right text-dark\">
                                        <span class=\"counter text-dark\">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class=\"tiles-progress\">
                                        <div class=\"m-t-20\">
                                            <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                                            <div class=\"progress progress-sm m-0\">
                                                <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row-->


                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-4\">
                                                            <h4 class=\"counter\">948,16</h4>
                                                            <small class=\"text-muted\">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->

                            <div class=\"col-lg-4\">
                                <div class=\"portlet\"><!-- /portlet heading -->
                                    <div class=\"portlet-heading\">
                                        <h3 class=\"portlet-title text-dark text-uppercase\">
                                            Website Stats
                                        </h3>
                                        <div class=\"portlet-widgets\">
                                            <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                                            <span class=\"divider\"></span>
                                            <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                                        <div class=\"portlet-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div id=\"pie-chart\">
                                                        <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                                        </div>
                                                    </div>

                                                    <div class=\"row text-center m-t-30\">
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,956</h4>
                                                            <small class=\"text-muted\"> Weekly Report</small>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <h4 class=\"counter\">86,69</h4>
                                                            <small class=\"text-muted\">Monthly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->


                        <div class=\"row\">
                            <!-- INBOX -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\">Inbox</h4>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"inbox-widget nicescroll mx-box\">
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-1.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Chadengle</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-2.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Tomaslau</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-3.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Stillnotdavid</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-4.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Kurafire</p>
                                                    <p class=\"inbox-item-text\">Nice to meet you</p>
                                                    <p class=\"inbox-item-date\">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-5.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Shahedk</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-6.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Adhamdannaway</p>
                                                    <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-8.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Arashasghari</p>
                                                    <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                    <p class=\"inbox-item-date\">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href=\"#\">
                                                <div class=\"inbox-item\">
                                                    <div class=\"inbox-item-img\"><img src=\"{{asset('moltran/images/users/avatar-9.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                                    <p class=\"inbox-item-author\">Joshaustin</p>
                                                    <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                    <p class=\"inbox-item-date\">9:56 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Chat</h3> 
                                    </div> 
                                    <div class=\"panel-body\"> 
                                        <div class=\"chat-conversation\">
                                            <ul class=\"conversation-list nicescroll\">
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"{{asset('moltran/images/avatar-1.jpg')}}\" alt=\"male\">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">mol
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"{{asset('moltran/images/users/avatar-5.jpg')}}\" alt=\"Female\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"{{asset('moltran/images/avatar-1.jpg')}}\" alt=\"male\">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>John Deo</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"clearfix odd\">
                                                    <div class=\"chat-avatar\">
                                                        <img src=\"{{asset('moltran/images/users/avatar-5.jpg')}}\" alt=\"male\">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class=\"conversation-text\">
                                                        <div class=\"ctext-wrap\">
                                                            <i>Smith</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 chat-inputbar\">
                                                    <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                                                </div>
                                                <div class=\"col-sm-3 chat-send\">
                                                    <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> <!-- end col-->


                            <!-- TODOs -->
                            <div class=\"col-lg-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\"> 
                                        <h3 class=\"panel-title\">Todo</h3> 
                                    </div> 
                                    <div class=\"panel-body todoapp\"> 
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4> 
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                                            </div>
                                        </div>

                                        <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                                         <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-9 todo-inputbar\">
                                                    <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                                                </div>
                                                <div class=\"col-sm-3 todo-send\">
                                                    <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2019 © Moltran.
                </footer>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-1.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-2.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-3.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-4.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-5.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-6.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-7.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-8.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-9.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"{{asset('moltran/images/users/avatar-10.jpg')}}\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>

        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{asset('moltran/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('moltran/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('moltran/js/detect.js')}}\"></script>
        <script src=\"{{asset('moltran/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('moltran/js/waves.js')}}\"></script>
        <script src=\"{{asset('moltran/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset('moltran/js/jquery.app.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('moltran/plugins/moment/moment.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('moltran/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/counterup/jquery.counterup.min.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('moltran/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('moltran/pages/jquery.todo.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('moltran/pages/jquery.chat.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{asset('moltran/pages/jquery.dashboard.js')}}\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    
    </body>

</html>
                    {% endblock %}
", "admin.html.twig", "/var/www/html/CROWDEDU/templates/admin.html.twig");
    }
}
