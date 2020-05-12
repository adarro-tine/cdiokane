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

/* admin/tables_users.html.twig */
class __TwigTemplate_8a7208beca549e13c7e0beff8d8fda06e277d0802c0fbd807115d6812d758ef4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tables_users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tables_users.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/tables_users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo " <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Administration Crowdedu Africa</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/assets/images/favicon_1.ico"), "html", null, true);
        echo "\">
        
        <!-- DataTables -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>


    <body class=\"fixed-left\">
        
        


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Datatable</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li><a href=\"#\">Tables</a></li>
                                    <li class=\"active\">Datatable</li>
                                </ol>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Liste des utilisateurs</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Prénom</th>
                                                    <th>Nom</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                  <th>Roles</th>
                                                    <th>Active</th>
                                                    <th>Photo</th>
                                                    <th>Supprimer   </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 89
            echo "                                                <tr>
                                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                                                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 95
                echo "                                                    <td>";
                echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                echo "</td>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                                                   ";
            // line 99
            echo "                                                    <td><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 99))), "html", null, true);
            echo "\" height=\"30px\" width=\"110px\"></td>
                                                      <td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Supprimer</a></td>                                          
                                                    </tr>
                                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                         <!-- End Row -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">LISTE DES COMMANDES</h3>
                                    </div>
                                    <div class=\"panel-body\">

                                        <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                                             <thead>
                                                <tr>
                                                    <th>Prénom</th>
                                                    <th>Nom</th>
                                                    <th>Adresse</th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th>Cours</th>
                                                    <th>Statut</th>
                                                    <th>Subvention</th>
                                                    <th>Date commande</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 137
            echo "                                                <tr>
                                                    <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 138), "prenom", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
                                                    <td> ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 139), "nom", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresse", [], "any", false, false, false, 140), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "telephone", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 142), "email", [], "any", false, false, false, 142), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "cours", [], "any", false, false, false, 143), "titreCours", [], "any", false, false, false, 143), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 144), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "subvention", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 146), "Y-m-d"), "html", null, true);
            echo "</td>
                                                </tr>                
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div> 
                     <!-- fin commande -->
                      <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">LISTE DES FORMATEURS</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>Nom Complet</th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th style=\"text-align:center;\">CV</th>
                                                    <th>Photo</th>
                                                    <th>Spécialité</th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formateurs"]) || array_key_exists("formateurs", $context) ? $context["formateurs"] : (function () { throw new RuntimeError('Variable "formateurs" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formateur"]) {
            // line 181
            echo "                                                <tr>
                                                    <td>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "nom", [], "any", false, false, false, 182), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "telephone", [], "any", false, false, false, 183), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "email", [], "any", false, false, false, 184), "html", null, true);
            echo "</td>
                                                    <td><center><a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["formateur"], "cv", [], "any", false, false, false, 185))), "html", null, true);
            echo "\"><i class=\"ion-upload\"></i></a></center></td>                                               
                                                    <td>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "photo", [], "any", false, false, false, 186), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "poste", [], "any", false, false, false, 187), "html", null, true);
            echo "</td>
                                                    <td><a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_formateur", ["id" => twig_get_attribute($this->env, $this->source, $context["formateur"], "id", [], "any", false, false, false, 188)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Supprimer</a></td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo " 
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div> 

                      
                        
                        



                    </div> <!-- container -->

                    
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
           
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatables-->
        <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Datatable init js -->
        <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moltran/plugins/datatables/json/scroller-demo.json"), "html", null, true);
        echo "\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>


\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/tables_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 271,  559 => 264,  554 => 262,  548 => 259,  544 => 258,  540 => 257,  536 => 256,  532 => 255,  528 => 254,  524 => 253,  520 => 252,  516 => 251,  512 => 250,  508 => 249,  504 => 248,  500 => 247,  496 => 246,  490 => 243,  486 => 242,  482 => 241,  478 => 240,  474 => 239,  470 => 238,  466 => 237,  462 => 236,  458 => 235,  454 => 234,  408 => 190,  399 => 188,  395 => 187,  391 => 186,  387 => 185,  383 => 184,  379 => 183,  375 => 182,  372 => 181,  368 => 180,  335 => 149,  326 => 146,  322 => 145,  318 => 144,  314 => 143,  310 => 142,  306 => 141,  302 => 140,  298 => 139,  294 => 138,  291 => 137,  287 => 136,  252 => 103,  243 => 100,  238 => 99,  233 => 97,  224 => 95,  220 => 94,  216 => 93,  212 => 92,  208 => 91,  204 => 90,  201 => 89,  197 => 88,  136 => 30,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'admin.html.twig' %}
 {% block content %}
 <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Administration Crowdedu Africa</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"{{asset('moltran/assets/images/favicon_1.ico')}}\">
        
        <!-- DataTables -->
        <link href=\"{{asset('moltran/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('moltran/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('moltran/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('moltran/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('moltran/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

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


    <body class=\"fixed-left\">
        
        


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Datatable</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li><a href=\"#\">Tables</a></li>
                                    <li class=\"active\">Datatable</li>
                                </ol>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Liste des utilisateurs</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Prénom</th>
                                                    <th>Nom</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                  <th>Roles</th>
                                                    <th>Active</th>
                                                    <th>Photo</th>
                                                    <th>Supprimer   </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for user in users %}
                                                <tr>
                                                    <td>{{user.prenom}}</td>
                                                    <td>{{user.nom}}</td>
                                                    <td>{{user.username}}</td>
                                                    <td>{{user.email}}</td>
                                                    {% for a in user.roles  %}
                                                    <td>{{a}}</td>
                                                    {% endfor %}
                                                    <td>{{user.isActive}}</td>
                                                   {# <td>{{user.photo}}</td>#}
                                                    <td><img src=\"{{ asset('uploads/' ~ user.photo) }}\" height=\"30px\" width=\"110px\"></td>
                                                      <td><a href=\"{{path('delete',{'id':user.id})}}\" class=\"btn btn-primary\">Supprimer</a></td>                                          
                                                    </tr>
                                              {% endfor %}
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                         <!-- End Row -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">LISTE DES COMMANDES</h3>
                                    </div>
                                    <div class=\"panel-body\">

                                        <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                                             <thead>
                                                <tr>
                                                    <th>Prénom</th>
                                                    <th>Nom</th>
                                                    <th>Adresse</th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th>Cours</th>
                                                    <th>Statut</th>
                                                    <th>Subvention</th>
                                                    <th>Date commande</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for commande in commandes %}
                                                <tr>
                                                    <td>{{commande.user.prenom}}</td>
                                                    <td> {{commande.user.nom}}</td>
                                                    <td>{{commande.adresse}}</td>
                                                    <td>{{commande.telephone}}</td>
                                                    <td>{{commande.user.email}}</td>
                                                    <td>{{commande.cours.titreCours}}</td>
                                                    <td>{{commande.statut}}</td>
                                                    <td>{{commande.subvention}}</td>
                                                    <td>{{commande.date|date('Y-m-d')   }}</td>
                                                </tr>                
                                                {% endfor %}
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div> 
                     <!-- fin commande -->
                      <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">LISTE DES FORMATEURS</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>Nom Complet</th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th style=\"text-align:center;\">CV</th>
                                                    <th>Photo</th>
                                                    <th>Spécialité</th>
                                                    <th>Supprimer</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                            {% for formateur in formateurs %}
                                                <tr>
                                                    <td>{{formateur.nom}}</td>
                                                    <td>{{formateur.telephone}}</td>
                                                    <td>{{formateur.email}}</td>
                                                    <td><center><a href=\"{{ asset('uploads/' ~ formateur.cv) }}\"><i class=\"ion-upload\"></i></a></center></td>                                               
                                                    <td>{{formateur.photo}}</td>
                                                    <td>{{formateur.poste}}</td>
                                                    <td><a href=\"{{path('delete_formateur',{'id':formateur.id})}}\" class=\"btn btn-primary\">Supprimer</a></td>
                                                </tr>
                                                {% endfor %} 
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div> 

                      
                        
                        



                    </div> <!-- container -->

                    
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
           
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

        <!-- Datatables-->
        <script src=\"{{asset('moltran/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/buttons.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/jszip.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/pdfmake.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/vfs_fonts.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/buttons.html5.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/buttons.print.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/dataTables.fixedHeader.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/dataTables.keyTable.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/responsive.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('moltran/plugins/datatables/dataTables.scroller.min.js')}}\"></script>

        <!-- Datatable init js -->
        <script src=\"{{asset('moltran/pages/datatables.init.js')}}\"></script>

        <script src=\"{{asset('moltran/js/jquery.app.js')}}\"></script>

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"{{asset('moltran/plugins/datatables/json/scroller-demo.json')}}\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>


\t</body>
</html>
{% endblock %}", "admin/tables_users.html.twig", "/var/www/html/CROWDEDU/templates/admin/tables_users.html.twig");
    }
}
