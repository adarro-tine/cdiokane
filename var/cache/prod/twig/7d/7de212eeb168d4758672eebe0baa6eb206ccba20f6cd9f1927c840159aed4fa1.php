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
class __TwigTemplate_3a2f89a3e62a707a6f92e96d34d0207696e3a993111538f20d4c85b1281a7f0b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/tables_users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["formateurs"] ?? null));
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
        return array (  551 => 271,  541 => 264,  536 => 262,  530 => 259,  526 => 258,  522 => 257,  518 => 256,  514 => 255,  510 => 254,  506 => 253,  502 => 252,  498 => 251,  494 => 250,  490 => 249,  486 => 248,  482 => 247,  478 => 246,  472 => 243,  468 => 242,  464 => 241,  460 => 240,  456 => 239,  452 => 238,  448 => 237,  444 => 236,  440 => 235,  436 => 234,  390 => 190,  381 => 188,  377 => 187,  373 => 186,  369 => 185,  365 => 184,  361 => 183,  357 => 182,  354 => 181,  350 => 180,  317 => 149,  308 => 146,  304 => 145,  300 => 144,  296 => 143,  292 => 142,  288 => 141,  284 => 140,  280 => 139,  276 => 138,  273 => 137,  269 => 136,  234 => 103,  225 => 100,  220 => 99,  215 => 97,  206 => 95,  202 => 94,  198 => 93,  194 => 92,  190 => 91,  186 => 90,  183 => 89,  179 => 88,  118 => 30,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  62 => 13,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tables_users.html.twig", "/var/www/html/crowdedu/templates/admin/tables_users.html.twig");
    }
}
