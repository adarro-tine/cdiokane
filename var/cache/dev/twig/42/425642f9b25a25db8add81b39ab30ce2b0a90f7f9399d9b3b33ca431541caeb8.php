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
class __TwigTemplate_8e96dffa28182d78b47028a0e1ecdc4f48468a11ca72d1a4e0b4f4af50a4d702 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/allCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/allCours.html.twig"));

        $this->parent = $this->loadTemplate("home/index.html.twig", "cours/allCours.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "photo", [], "any", false, false, false, 57))), "html", null, true);
            echo "\"  class=\"rounded-circle\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;\">
</li>
<br><br>
\t\t\t\t\t  <li style=\"margin-top:-90px;\" class=\"menu_item\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61), "html", null, true);
            echo "</li>
                  <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "slug", [], "any", false, false, false, 62)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 96, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["souscategories"]) || array_key_exists("souscategories", $context) ? $context["souscategories"] : (function () { throw new RuntimeError('Variable "souscategories" does not exist.', 99, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        // line 160
        echo "<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:120px;color:#053651;\">Principales collectes de fonds</h2>
<div class=\"container\" style=\"margin-top:20px;\">

\t<div class=\"row\">
\t\t\t\t\t";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campagnes"]) || array_key_exists("campagnes", $context) ? $context["campagnes"] : (function () { throw new RuntimeError('Variable "campagnes" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 165
            echo "                
\t\t\t\t\t";
            // line 166
            if ((twig_get_attribute($this->env, $this->source, $context["campagne"], "id", [], "any", false, false, false, 166) < 4)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 211
        echo "<div class=\"container\" style=\"margin-top:150px;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 213, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 247, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  571 => 257,  560 => 253,  554 => 252,  549 => 250,  545 => 248,  541 => 247,  529 => 237,  519 => 236,  507 => 233,  490 => 224,  480 => 217,  476 => 216,  472 => 214,  468 => 213,  464 => 211,  454 => 210,  437 => 204,  430 => 202,  416 => 191,  411 => 189,  401 => 184,  395 => 181,  390 => 179,  378 => 170,  374 => 169,  370 => 167,  368 => 166,  365 => 165,  361 => 164,  355 => 160,  345 => 159,  306 => 130,  298 => 125,  293 => 123,  289 => 121,  282 => 118,  275 => 115,  273 => 114,  268 => 111,  258 => 106,  250 => 104,  244 => 102,  241 => 101,  239 => 100,  234 => 99,  226 => 97,  222 => 96,  214 => 91,  199 => 81,  186 => 70,  181 => 68,  175 => 66,  169 => 63,  165 => 62,  161 => 61,  155 => 60,  149 => 57,  145 => 55,  142 => 54,  131 => 44,  129 => 39,  121 => 34,  117 => 32,  115 => 31,  107 => 25,  98 => 17,  89 => 14,  86 => 13,  82 => 12,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/index.html.twig'%}
{% block header %}
<header style=\"position: fixed;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\tbackground: #FFFFFF;
\tz-index: 10;\">
<div style=\"width: 100%;
\theight: 45px;
\tbackground: rgba(0,109,164,1);\">
\t {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">
 
\t\t\t\t
\t\t\t



{#<li><a  >Se connecter</a></li>#}

<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t    <li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
\t\t\t    {% if is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t\t\t
\t\t\t\t<li style=\"padding:13px;\"><a href=\"{{path('mes-cours')}}\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fas fa-video\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tmes cours
\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t
\t\t\t\t{% endif %}
\t\t\t\t{#{% if is_granted('ROLE_FORMATEUR') %}
\t\t\t\t<li style=\"padding:13px;\"><a href=\"{{path('addCours')}}\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"far fa-plus-square\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tAjouter un cours
\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t{% endif %}#}
\t\t\t\t <li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;
\">
\t\t\t\t\t\t\t\t\t\t{#{% if app.user != null %}#}
\t\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t\t\t\t\t\t\t\t\t<li style=\"display:flex;margin-left:30px;\">
<img src=\"{{ asset('uploads/' ~ app.user.photo) }}\"  class=\"rounded-circle\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;\">
</li>
<br><br>
\t\t\t\t\t  <li style=\"margin-top:-90px;\" class=\"menu_item\">{{app.user.prenom}} {{app.user.nom}}</li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\">{{app.user.email}}</li>
                  <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"{{path('edit',{'slug':app.user.slug})}}\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"{{path('security_logout')}}\" style=\"text-decoration:none;\">Déconnexion</a></li>

\t\t\t\t\t\t\t\t\t\t{% else %}
<li><a href=\"{{path('registration')}}\">S'inscrire</a></li>

<li><a href=\"{{path('login')}}\">Se connecter</a></li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t\t </li>
                
</ul>  \t

</div>


</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"{{path('cours')}}\"> <img src=\"{{asset('img/logo_crowdedu.png')}}\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 text-right\" style=\"margin-left:130px;margin-bottom:7px;postion:fixed;\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<nav class=\"navbar newnav\">
\t\t\t\t\t\t\t<ul class=\"navbar_menu\" id=\"menu-vertical\" style=\"margin-top:-1px;margin-left:-250px;\">
\t
\t\t\t\t<li class=\"active limenu\" style=\"margin-top:-1px;\"><a href=\"{{path('cours')}}\" id=\"ACCEUIL\" class=\"active activelien\" >Accueil</a></li>
\t\t\t
\t\t\t<li class=\"active limenu menu-cours\" style=\"margin-top:10px;\" class=\"dropdown\"><a href=\"#\"  id=\"COURS\" class=\"active activelien dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Cours</a>
\t\t\t
\t\t\t<ul class=\"dropdown-menu\" style=\"width:900px;height:50%;margin-top:-30px;text-decoration:none;margin-left:-400px;float:left;\">
            {% for categorie in categories %}
\t\t\t<li class=\"channel1\"><a href=\"{{ path('page_produitsByCategory',{'slug':categorie.slug})}}\" class=\"menu-cours ctg\" style=\"color:black;text-decoration:none;font-size:13px;text-transform:none;\" ><i class=\"fas fa-plus\"></i> {{categorie.libelle}}</a>
\t\t\t<ul class=\"submenu1\" style=\"width:900px;height:50px;margin-top:-1px;text-decoration:none;margin-left:-1px;float:left;\">
\t\t\t{% for souscat in souscategories if souscat.categorie.libelle == categorie.libelle %}
\t\t\t{#{% if  %}#}

\t\t\t<li class=\"channel1\"><a href=\"{{ path('souscategorie',{'slug':souscat.slug})}}\" class=\"menu-cours ctg\" style=\"color:black;text-decoration:none;font-size:13px;color:white;padding-left:30px;text-transform:none;\" >{{souscat.nom}}</a>
\t\t{#\t{% endif %}#}
\t\t\t
\t\t\t{% endfor %}

\t\t\t</ul>

\t\t\t
\t\t\t{% endfor %}
\t\t\t</li>
\t\t\t</ul>

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<li class=\"limenu\" ><a href=\"{{path('poste')}}\"  id=\"FORMATEURS\" class=\"active activelien\">Formateurs</a>
\t\t\t</li>
\t\t\t{% else %}
\t\t\t<li class=\"limenu\"><a href=\"{{path('login')}}\"  id=\"cformateur\" style=\"color:#053651;text-decoration:none;\">Formateurs</a>
\t\t\t</li>
            {% endif %}
\t\t\t
\t\t\t\t
         <li class=\"limenu\"><a href=\"{{path('contact')}}\" id=\"CONTACTEZ_NOUS\" class=\"active activelien\">Contactez-nous</a></li>

         <li class=\"checkoutt\" style=\"margin-left:200px;margin-top:3px;\">{{render(controller('App\\\\Controller\\\\PanierController::menu'))}}</li>


\t\t\t\t\t\t\t\t
                <li style=\"margin-right:-230px;margin-top:5px;\">
        <form  method=\"post\" action=\"{{path('search')}}\" id=\"search\" role=\"search\" class=\"ff\">
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
{% endblock %}
{% block campagne %}
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:120px;color:#053651;\">Principales collectes de fonds</h2>
<div class=\"container\" style=\"margin-top:20px;\">

\t<div class=\"row\">
\t\t\t\t\t{% for campagne in campagnes %}
                
\t\t\t\t\t{%  if campagne.id < 4 %}
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,{{ campagne.photo }}\" width=\"350\" height=\"150\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"card-body\" style=\"height:210px;padding:0;\">

\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:22px;\">
\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;\">{{campagne.cours.titreCours}}</a></a></h5>
\t<h6 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;color:#96bf31;padding-top:10px;\">{{campagne.ville}},{{campagne.pays}}</h6>
\t <section style=\"margin-left:95px;margin-top:-27px;\">\t<i class=\"fas fa-map-marker-alt\"></i></section>
\t<h5 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;color:#053651;margin-left:220px;padding-top:10px;\">{{campagne.cours.prix}} FCFA</h5>
\t\t<div style=\"width:100%;height:30px;border-top:1px solid gainsboro;\">
\t\t\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\" class=\"btn\" style=\"margin-top:37px;width:100%;background-color:#96bf31;color:white;\" id=\"myBtn\">Voir le projet</a>

\t\t</div>




\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t {% endfor %}
\t\t\t \t\t\t<a href=\"{{path('allcampagnes')}}\" style=\"margin-left:1050px;\">Voir plus</a>


\t\t\t 
\t\t\t </div>
{% endblock %}
{% block categories %}
<div class=\"container\" style=\"margin-top:150px;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for categorie in categories %}
\t\t\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower animate_image mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"{{path('page_produitsByCategory', {'slug':categorie.slug})}}\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,{{ categorie.imgC }}\" width=\"350\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>\t\t
\t\t\t\t\t<div class=\"card-body\" style=\"background:linear-gradient(90deg,#006DA4,#95C11E);height:50px;padding:0;\">
\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:13px;\">
\t\t<a href=\"{{ path('page_produitsByCategory',{'slug':categorie.slug})}}\" style=\"text-decoration:none;color:rgba(255,255,255,1);\">{{categorie.libelle}}</a></h5>


\t\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t {% endfor %}
\t\t\t </div>
\t\t\t </div>
{% endblock %}
{% block temoignages %}
\t<div class=\"blogs\" style=\"margin-bottom:100px;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Témoignages de nos participants</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row blogs_container\">
\t\t\t\t\t\t {% for commentaire in commentaires %}
\t\t\t\t    <div class=\"col-lg-3 blog_item_col\">
\t\t\t\t\t<div class=\"blog_item\">
\t\t\t<div class=\"blog_background\" style=\"background-image:url('data:image/png;base64,{{ commentaire.photo }}');\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\" style=\"font-weight:350;\">{{commentaire.prenom}} {{commentaire.nom}}</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\" style=\"font-size:10px;line-height: 170%;\">{{commentaire.evaluation}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t{% endfor %}\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}


", "cours/allCours.html.twig", "/var/www/html/CROWDEDU/templates/cours/allCours.html.twig");
    }
}
