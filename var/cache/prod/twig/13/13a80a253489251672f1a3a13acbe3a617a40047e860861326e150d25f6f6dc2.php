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

/* cours/allCours.html.twig */
class __TwigTemplate_d683cad73d624d85dc67f09948b5af6e4a52bea3cd64d468f8c40a8a49b91dd4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'campagne' => [$this, 'block_campagne'],
            'categories' => [$this, 'block_categories'],
            'temoignages' => [$this, 'block_temoignages'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("home/index.html.twig", "cours/allCours.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<header style=\"position: fixed;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\tbackground: #FFFFFF;
\tz-index: 10;\">
<div style=\"width: 100%;
\theight: 45px;
\tbackground: rgba(0,109,164,1);\">
\t ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"alert alert-success\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">
 
\t\t\t\t
\t\t\t



";
        // line 25
        echo "
<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t    <li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
\t\t\t    ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            echo "
\t\t\t\t
\t\t\t\t<li style=\"padding:13px;\"><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes-cours");
            echo "\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fas fa-video\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tmes cours
\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t";
        // line 44
        echo "\t\t\t\t <li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;
\">
\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 55
            echo "
\t\t\t\t\t\t\t\t\t\t<li style=\"display:flex;margin-left:30px;\">
<img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57), "photo", [], "any", false, false, false, 57))), "html", null, true);
            echo "\"  class=\"rounded-circle\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;\">
</li>
<br><br>
\t\t\t\t\t  <li style=\"margin-top:-90px;\" class=\"menu_item\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61), "html", null, true);
            echo "</li>
                  <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 62), "slug", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" style=\"text-decoration:none;\">Déconnexion</a></li>

\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">S'inscrire</a></li>

<li><a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t\t </li>
                
</ul>  \t

</div>


</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 text-right\" style=\"margin-left:130px;margin-bottom:7px;postion:fixed;\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<nav class=\"navbar newnav\">
\t\t\t\t\t\t\t<ul class=\"navbar_menu\" id=\"menu-vertical\" style=\"margin-top:-1px;margin-left:-250px;\">
\t
\t\t\t\t<li class=\"active limenu\" style=\"margin-top:-1px;\"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\" id=\"ACCEUIL\" class=\"active activelien\" >Accueil</a></li>
\t\t\t
\t\t\t<li class=\"active limenu menu-cours\" style=\"margin-top:10px;\" class=\"dropdown\"><a href=\"#\"  id=\"COURS\" class=\"active activelien dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Cours</a>
\t\t\t
\t\t\t<ul class=\"dropdown-menu\" style=\"width:900px;height:50%;margin-top:-30px;text-decoration:none;margin-left:-400px;float:left;\">
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 97
            echo "\t\t\t<li class=\"channel1\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_produitsByCategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"menu-cours ctg\" style=\"color:black;text-decoration:none;font-size:13px;text-transform:none;\" ><i class=\"fas fa-plus\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 97), "html", null, true);
            echo "</a>
\t\t\t<ul class=\"submenu1\" style=\"width:900px;height:50px;margin-top:-1px;text-decoration:none;margin-left:-1px;float:left;\">
\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["souscategories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["souscat"]) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["souscat"], "categorie", [], "any", false, false, false, 99), "libelle", [], "any", false, false, false, 99) == twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 99))) {
                    // line 100
                    echo "\t\t\t";
                    // line 101
                    echo "
\t\t\t<li class=\"channel1\"><a href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["souscat"], "slug", [], "any", false, false, false, 102)]), "html", null, true);
                    echo "\" class=\"menu-cours ctg\" style=\"color:black;text-decoration:none;font-size:13px;color:white;padding-left:30px;text-transform:none;\" >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["souscat"], "nom", [], "any", false, false, false, 102), "html", null, true);
                    echo "</a>
\t\t";
                    // line 104
                    echo "\t\t\t
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
\t\t\t</ul>

\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t</li>
\t\t\t</ul>

            ";
        // line 114
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 115
            echo "\t\t\t<li class=\"limenu\" ><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste");
            echo "\"  id=\"FORMATEURS\" class=\"active activelien\">Formateurs</a>
\t\t\t</li>
\t\t\t";
        } else {
            // line 118
            echo "\t\t\t<li class=\"limenu\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"  id=\"cformateur\" style=\"color:#053651;text-decoration:none;\">Formateurs</a>
\t\t\t</li>
            ";
        }
        // line 121
        echo "\t\t\t
\t\t\t\t
         <li class=\"limenu\"><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" id=\"CONTACTEZ_NOUS\" class=\"active activelien\">Contactez-nous</a></li>

         <li class=\"checkoutt\" style=\"margin-left:200px;margin-top:3px;\">";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PanierController::menu"));
        echo "</li>


\t\t\t\t\t\t\t\t
                <li style=\"margin-right:-230px;margin-top:5px;\">
        <form  method=\"post\" action=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" id=\"search\" role=\"search\" class=\"ff\">
\t\t\t\t<div class=\"searchbar\" >
          <input class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Que voulez-vous apprendre ?\" maxlength=\"200\" >
        <button href=\"\" type=\"submit\" class=\"search_icon\"><i class=\"fas fa-search\"></i></button>

        </div>
\t\t\t\t</form>\t
                </li>
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t
               


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"hamburger_container\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>


</header>
";
    }

    // line 159
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:120px;color:#053651;\">Principales collectes de fonds</h2>
<div class=\"container\" style=\"margin-top:20px;\">

\t<div class=\"row\">
\t\t\t\t\t";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campagnes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 165
            echo "                
\t\t\t\t\t";
            // line 166
            if ((twig_get_attribute($this->env, $this->source, $context["campagne"], "id", [], "any", false, false, false, 166) < 12)) {
                // line 167
                echo "\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 169)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "photo", [], "any", false, false, false, 170), "html", null, true);
                echo "\" width=\"350\" height=\"150\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"card-body\" style=\"height:210px;padding:0;\">

\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:22px;\">
\t\t<a href=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 179)]), "html", null, true);
                echo "\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;\">";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 181), "titreCours", [], "any", false, false, false, 181), "html", null, true);
                echo "</a></a></h5>
\t<h6 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;color:#96bf31;padding-top:10px;\">";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "ville", [], "any", false, false, false, 184), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "pays", [], "any", false, false, false, 184), "html", null, true);
                echo "</h6>
\t <section style=\"margin-left:95px;margin-top:-27px;\">\t<i class=\"fas fa-map-marker-alt\"></i></section>
\t<h5 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;color:#053651;margin-left:220px;padding-top:10px;\">";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 189), "prix", [], "any", false, false, false, 189), "html", null, true);
                echo " FCFA</h5>
\t\t<div style=\"width:100%;height:30px;border-top:1px solid gainsboro;\">
\t\t\t\t<a href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 191)]), "html", null, true);
                echo "\" class=\"btn\" style=\"margin-top:37px;width:100%;background-color:#96bf31;color:white;\" id=\"myBtn\">Voir le projet</a>

\t\t</div>




\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 202
            echo "\t\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campagne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t\t \t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allcampagnes");
        echo "\" style=\"margin-left:1050px;\">Voir plus</a>


\t\t\t 
\t\t\t </div>
";
    }

    // line 210
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 211
        echo "<div class=\"container\" style=\"margin-top:150px;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 214
            echo "\t\t\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower animate_image mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_produitsByCategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 216)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "imgC", [], "any", false, false, false, 217), "html", null, true);
            echo "\" width=\"350\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>\t\t
\t\t\t\t\t<div class=\"card-body\" style=\"background:linear-gradient(90deg,#006DA4,#95C11E);height:50px;padding:0;\">
\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:13px;\">
\t\t<a href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_produitsByCategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 224)]), "html", null, true);
            echo "\" style=\"text-decoration:none;color:rgba(255,255,255,1);\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 224), "html", null, true);
            echo "</a></h5>


\t\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "\t\t\t </div>
\t\t\t </div>
";
    }

    // line 236
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 237
        echo "\t<div class=\"blogs\" style=\"margin-bottom:100px;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Témoignages de nos participants</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row blogs_container\">
\t\t\t\t\t\t ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 248
            echo "\t\t\t\t    <div class=\"col-lg-3 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t<div class=\"blog_background\" style=\"background-image:url('data:image/png;base64,";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "photo", [], "any", false, false, false, 250), "html", null, true);
            echo "');\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\" style=\"font-weight:350;\">";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "prenom", [], "any", false, false, false, 252), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nom", [], "any", false, false, false, 252), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\" style=\"font-size:10px;line-height: 170%;\">";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "evaluation", [], "any", false, false, false, 253), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "cours/allCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 257,  506 => 253,  500 => 252,  495 => 250,  491 => 248,  487 => 247,  475 => 237,  471 => 236,  465 => 233,  448 => 224,  438 => 217,  434 => 216,  430 => 214,  426 => 213,  422 => 211,  418 => 210,  407 => 204,  400 => 202,  386 => 191,  381 => 189,  371 => 184,  365 => 181,  360 => 179,  348 => 170,  344 => 169,  340 => 167,  338 => 166,  335 => 165,  331 => 164,  325 => 160,  321 => 159,  288 => 130,  280 => 125,  275 => 123,  271 => 121,  264 => 118,  257 => 115,  255 => 114,  250 => 111,  240 => 106,  232 => 104,  226 => 102,  223 => 101,  221 => 100,  216 => 99,  208 => 97,  204 => 96,  196 => 91,  181 => 81,  168 => 70,  163 => 68,  157 => 66,  151 => 63,  147 => 62,  143 => 61,  137 => 60,  131 => 57,  127 => 55,  124 => 54,  113 => 44,  111 => 39,  103 => 34,  99 => 32,  97 => 31,  89 => 25,  80 => 17,  71 => 14,  68 => 13,  64 => 12,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/allCours.html.twig", "/var/www/html/CROWDEDU/templates/cours/allCours.html.twig");
    }
}
