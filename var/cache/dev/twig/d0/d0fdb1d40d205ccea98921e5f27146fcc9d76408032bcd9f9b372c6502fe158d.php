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
class __TwigTemplate_af0e31cb30deb9c2be65772598fb368960d27031a8d9de17ee1c5aba7d1560d3 extends \Twig\Template
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
            'tabs' => [$this, 'block_tabs'],
            'temoignages' => [$this, 'block_temoignages'],
            'share' => [$this, 'block_share'],
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
        echo "\t\t
\t\t<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">
\t\t\t<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t    <li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
\t\t\t\t 
\t\t\t    ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "\t\t\t\t
\t\t\t\t<li style=\"padding:13px;\">
\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes-cours");
            echo "\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fas fa-video\" style=\"padding:5px;\"></i>
\t\t\t\t\t\tmes cours
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t<a href=\"#\" style=\"color:#ffffff !important;;margin-top:13px;font-size:13.3px;text-decoration:none;\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;\">
\t\t\t\t\t\t\t<li style=\"display:flex;margin-left:30px;\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "photo", [], "any", false, false, false, 35))), "html", null, true);
            echo "\"  class=\"rounded-circle\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;\">
\t\t\t\t\t\t\t</li><br><br>
\t\t\t\t\t\t\t<li style=\"margin-top:-90px;\" class=\"menu_item\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</li>
\t\t\t                <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" style=\"text-decoration:none;\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</li>\t\t\t\t
\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t <li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t<a href=\"#\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>
\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">S'inscrire</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 54
        echo "    
\t\t\t</ul>
\t\t</div>
\t</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 text-right\" style=\"margin-left:100px;margin-bottom:7px;postion:fixed;\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<nav class=\"navbar newnav\">
\t\t\t\t\t\t\t<ul class=\"navbar_menu\" id=\"menu-vertical\" style=\"margin-top:-1px;margin-left:-150px;\">
\t
\t\t\t\t";
        // line 71
        echo "\t\t\t
\t\t\t<li class=\"active limenu menu-cours\" style=\"margin-top:10px;\" class=\"dropdown\"><a href=\"#\"  id=\"COURS\" class=\"active activelien dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Cours</a>


\t\t\t<ul class=\"dropdown-menu\" style=\"width:900px;height:50%;margin-top:-30px;text-decoration:none;margin-left:-400px;float:left;\">
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 77
            echo "\t\t\t<li class=\"channel1\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_produitsByCategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"menu-cours ctg\" style=\"color:black;text-decoration:none;font-size:13px;text-transform:none;\" ><i class=\"fas fa-plus\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
\t\t\t<ul class=\"submenu1\" style=\"width:900px;height:50px;margin-top:-1px;text-decoration:none;margin-left:-1px;float:left;\">
\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["souscategories"]) || array_key_exists("souscategories", $context) ? $context["souscategories"] : (function () { throw new RuntimeError('Variable "souscategories" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["souscat"]) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["souscat"], "categorie", [], "any", false, false, false, 79), "libelle", [], "any", false, false, false, 79) == twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "\t\t\t";
                    // line 81
                    echo "
\t\t\t<li class=\"channel1\"><a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["souscat"], "slug", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\" class=\"menu-cours ctg\" style=\"color:black;text-decoration:none;font-size:13px;color:white;padding-left:30px;text-transform:none;\" >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["souscat"], "nom", [], "any", false, false, false, 82), "html", null, true);
                    echo "</a>
\t\t";
                    // line 84
                    echo "\t\t\t
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t</ul>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t\t</li>
\t\t\t</ul>
\t\t\t<li class=\"limenu\" ><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste");
        echo "\"  id=\"FORMATEURS\" class=\"active activelien\">Formateurs</a>
\t\t\t</li>
\t\t
\t\t\t<li class=\"limenu\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation");
        echo "\"  id=\"FORMATION\">Formation</a></li>
\t\t<li class=\"limenu\"><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demarrer");
        echo "\" id=\"CROWDFUNDING\" class=\"active activelien\">Crowdfunding</a></li>
\t\t";
        // line 95
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "\t\t\t\t
\t\t<li class=\"limenu\"><a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" id=\"CROWDFUNDING\" class=\"active activelien\">Tableau de bord</a></li>
\t\t";
        }
        // line 98
        echo "\t\t<li class=\"checkoutt\" style=\"margin-left:200px;margin-top:3px;\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PanierController::menu"));
        echo "</li>
\t\t<li style=\"margin-right:-230px;margin-top:5px;\">
\t\t<form  method=\"post\" action=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" id=\"search\" role=\"search\" class=\"ff\">
\t\t\t<div class=\"searchbar\" >
\t\t<input class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Que voulez-vous apprendre ?\" maxlength=\"200\" >
        <button href=\"\" type=\"submit\" class=\"search_icon\"><i class=\"fas fa-search\"></i></button>
        </div>
\t\t\t\t</form>\t
                </li>
\t\t\t\t\t\t\t</ul>
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

    // line 118
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        // line 119
        echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Atteignez vos objectifs avec CrowdEdu</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><br>
\t\t<div class=\"row blogs_container\" style=\"text-align:center\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;\">Développez des compétences de pointe</p>
\t\t\t<font>telles que la business analytics, la conception graphique, Python et bien d'autres</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;text-align:center\">Préparez-vous pour une nouvelle carrière</p>
\t\t\t<font>dans des domaines très convoités tels que l'informatique, l'IA et l'ingénierie du cloud</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;text-align:center\">Obtenez un certificat ou un diplôme</p>
\t\t\td'une université de premier plan spécialisée dans le domaine des affaires, de l'informatique et bien plus encore</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;text-align:center\">Améliorez les compétences de votre organisation</p>
\t\t\tavec des programmes de formation et de perfectionnement à la demande</div>
\t\t\t</div>
\t\t</div><br>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 146
        echo "\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Trouvez des options flexibles et abordables </h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t<div  style=\"background:linear-gradient(90deg,#006DA4,#95C11E);background-size:contain;
        height:200px; background-position:fixed;
            background-repeat: no-repeat;width:100%;\">
\t\t<div class=\"row blogs_container\" style=\"text-align:center;margin-top:65px;color:#ffffff!important\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;\">24</p>
\t\t\t<font>Apprenants</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;text-align:center\">30</p>
\t\t\t<font>cours</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;text-align:center\">64</p>
\t\t\t\tFormations</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;text-align:center\">7</p>
\t\t\tinstitutions</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        // line 179
        echo "\t<div class=\"container\" style=\"margin-top:150px;\">
\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Maîtrisez des compétences avec un apprentissage en profondeur </h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 189
            echo "\t\t\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower animate_image mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cour", ["slug" => twig_get_attribute($this->env, $this->source, $context["produits"], "slug", [], "any", false, false, false, 191)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "image", [], "any", false, false, false, 192), "html", null, true);
            echo "\" width=\"350\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>\t\t
\t\t\t\t\t<div class=\"card-body\" style=\"background:linear-gradient(90deg,#006DA4,#95C11E);height:50px;padding:0;\">
\t\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\t\t\t\t\tfont-family: ubuntu;
\t\t\t\t\tfont-style: normal;
\t\t\t\t\tfont-weight: normal;padding-top:13px;\">
\t\t\t\t\t<a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cour", ["slug" => twig_get_attribute($this->env, $this->source, $context["produits"], "slug", [], "any", false, false, false, 199)]), "html", null, true);
            echo "\" style=\"text-decoration:none;color:rgba(255,255,255,1);\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "titreCours", [], "any", false, false, false, 199), "html", null, true);
            echo "</a></h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t</div>
\t</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        // line 207
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
\t\t\t\t\t\t";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 217, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 218
            echo "\t\t\t\t<div class=\"col-lg-3 blog_item_col\">
\t\t\t\t<div class=\"blog_item\">
\t\t\t<div class=\"blog_background\" style=\"background-image:url('";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "photo", [], "any", false, false, false, 220), "html", null, true);
            echo "');\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\" style=\"font-weight:350;\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "prenom", [], "any", false, false, false, 222), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nom", [], "any", false, false, false, 222), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\" style=\"font-size:10px;line-height: 170%;\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "evaluation", [], "any", false, false, false, 223), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        // line 235
        echo "<div class=\"container\">
<div  style=\"background-color:;background-size:contain;
        height:400px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;color:#ffffff !important\">
                <div class=\"conatiner \">
                    <div class=\"row \">
                        <div class=\"col-lg-4\">
                        <font style=\"vertical-align: inherit;text-align:center;font-size:30px;\">
                            
                        </font>
                        </div>
                        <div class=\"col-lg-4\">
                                <iframe width=\"700\" height=\"400 \"
\t\t\t\t\t\t\t\tsrc=\"https://www.youtube.com/embed/tgbNymZ7vqY\">
                                </iframe>
                            </div>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;text-align:center;font-size:30px;\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</font>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
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
        return array (  552 => 235,  542 => 234,  527 => 227,  516 => 223,  510 => 222,  504 => 220,  500 => 218,  496 => 217,  484 => 207,  474 => 206,  463 => 204,  450 => 199,  439 => 192,  435 => 191,  431 => 189,  427 => 188,  416 => 179,  406 => 178,  365 => 146,  355 => 145,  320 => 119,  310 => 118,  282 => 100,  276 => 98,  271 => 96,  267 => 95,  263 => 94,  259 => 93,  253 => 90,  249 => 88,  242 => 86,  234 => 84,  228 => 82,  225 => 81,  223 => 80,  218 => 79,  210 => 77,  206 => 76,  199 => 71,  184 => 60,  176 => 54,  169 => 51,  165 => 50,  157 => 44,  150 => 40,  146 => 39,  142 => 38,  136 => 37,  131 => 35,  123 => 32,  115 => 27,  110 => 25,  100 => 17,  91 => 14,  88 => 13,  84 => 12,  73 => 3,  63 => 2,  40 => 1,);
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
\t\t
\t\t<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">
\t\t\t<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t    <li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
\t\t\t\t 
\t\t\t    {% if is_granted('IS_AUTHENTICATED_FULLY') %}\t\t\t\t
\t\t\t\t<li style=\"padding:13px;\">
\t\t\t\t\t<a href=\"{{path('mes-cours')}}\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fas fa-video\" style=\"padding:5px;\"></i>
\t\t\t\t\t\tmes cours
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t<a href=\"#\" style=\"color:#ffffff !important;;margin-top:13px;font-size:13.3px;text-decoration:none;\">{{app.user.prenom}} {{app.user.nom}}</a>
\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;\">
\t\t\t\t\t\t\t<li style=\"display:flex;margin-left:30px;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/' ~ app.user.photo) }}\"  class=\"rounded-circle\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;\">
\t\t\t\t\t\t\t</li><br><br>
\t\t\t\t\t\t\t<li style=\"margin-top:-90px;\" class=\"menu_item\">{{app.user.prenom}} {{app.user.nom}}</li>
\t\t\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\">{{app.user.email}}</li>
\t\t\t                <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"{{path('edit',{'slug':app.user.slug})}}\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"{{path('security_logout')}}\" style=\"text-decoration:none;\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</li>\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t <li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t<a href=\"#\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>
\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;\">
\t\t\t\t\t\t\t<li><a href=\"{{path('registration')}}\">S'inscrire</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{path('login')}}\">Se connecter</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t{% endif %}    
\t\t\t</ul>
\t\t</div>
\t</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"{{path('cours')}}\"> <img src=\"{{asset('img/logo_crowdedu.png')}}\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 text-right\" style=\"margin-left:100px;margin-bottom:7px;postion:fixed;\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<nav class=\"navbar newnav\">
\t\t\t\t\t\t\t<ul class=\"navbar_menu\" id=\"menu-vertical\" style=\"margin-top:-1px;margin-left:-150px;\">
\t
\t\t\t\t{# <li class=\"active limenu\" style=\"margin-top:-1px;\"><a href=\"{{path('cours')}}\" id=\"ACCEUIL\" class=\"active activelien\" >Accueil</a></li> #}
\t\t\t
\t\t\t<li class=\"active limenu menu-cours\" style=\"margin-top:10px;\" class=\"dropdown\"><a href=\"#\"  id=\"COURS\" class=\"active activelien dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Cours</a>


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
\t\t\t{% endfor %}
\t\t\t</li>
\t\t\t</ul>
\t\t\t<li class=\"limenu\" ><a href=\"{{path('poste')}}\"  id=\"FORMATEURS\" class=\"active activelien\">Formateurs</a>
\t\t\t</li>
\t\t
\t\t\t<li class=\"limenu\"><a href=\"{{path('formation')}}\"  id=\"FORMATION\">Formation</a></li>
\t\t<li class=\"limenu\"><a href=\"{{path('demarrer')}}\" id=\"CROWDFUNDING\" class=\"active activelien\">Crowdfunding</a></li>
\t\t{% if is_granted('ROLE_ADMIN') %}\t\t\t\t
\t\t<li class=\"limenu\"><a href=\"{{path('admin')}}\" id=\"CROWDFUNDING\" class=\"active activelien\">Tableau de bord</a></li>
\t\t{% endif %}
\t\t<li class=\"checkoutt\" style=\"margin-left:200px;margin-top:3px;\">{{render(controller('App\\\\Controller\\\\PanierController::menu'))}}</li>
\t\t<li style=\"margin-right:-230px;margin-top:5px;\">
\t\t<form  method=\"post\" action=\"{{path('search')}}\" id=\"search\" role=\"search\" class=\"ff\">
\t\t\t<div class=\"searchbar\" >
\t\t<input class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Que voulez-vous apprendre ?\" maxlength=\"200\" >
        <button href=\"\" type=\"submit\" class=\"search_icon\"><i class=\"fas fa-search\"></i></button>
        </div>
\t\t\t\t</form>\t
                </li>
\t\t\t\t\t\t\t</ul>
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
\t{% block campagne %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Atteignez vos objectifs avec CrowdEdu</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><br>
\t\t<div class=\"row blogs_container\" style=\"text-align:center\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;\">Développez des compétences de pointe</p>
\t\t\t<font>telles que la business analytics, la conception graphique, Python et bien d'autres</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;text-align:center\">Préparez-vous pour une nouvelle carrière</p>
\t\t\t<font>dans des domaines très convoités tels que l'informatique, l'IA et l'ingénierie du cloud</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;text-align:center\">Obtenez un certificat ou un diplôme</p>
\t\t\td'une université de premier plan spécialisée dans le domaine des affaires, de l'informatique et bien plus encore</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#A9A9A9;font-size:20px;text-align:center\">Améliorez les compétences de votre organisation</p>
\t\t\tavec des programmes de formation et de perfectionnement à la demande</div>
\t\t\t</div>
\t\t</div><br>
\t{% endblock %}
\t{% block categories %}
\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Trouvez des options flexibles et abordables </h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t<div  style=\"background:linear-gradient(90deg,#006DA4,#95C11E);background-size:contain;
        height:200px; background-position:fixed;
            background-repeat: no-repeat;width:100%;\">
\t\t<div class=\"row blogs_container\" style=\"text-align:center;margin-top:65px;color:#ffffff!important\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;\">24</p>
\t\t\t<font>Apprenants</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;text-align:center\">30</p>
\t\t\t<font>cours</font>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;text-align:center\">64</p>
\t\t\t\tFormations</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t<p style=\"color:#ffffff!important;font-size:40px;text-align:center\">7</p>
\t\t\tinstitutions</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t
\t\t</div>
\t{% endblock %}
\t{% block tabs %}
\t<div class=\"container\" style=\"margin-top:150px;\">
\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"section_title\">
\t\t\t\t\t\t<h2>Maîtrisez des compétences avec un apprentissage en profondeur </h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for produits in produits %}
\t\t\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower animate_image mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"{{path('cour', {'slug':produits.slug})}}\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ produits.image}}\" width=\"350\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>\t\t
\t\t\t\t\t<div class=\"card-body\" style=\"background:linear-gradient(90deg,#006DA4,#95C11E);height:50px;padding:0;\">
\t\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\t\t\t\t\tfont-family: ubuntu;
\t\t\t\t\tfont-style: normal;
\t\t\t\t\tfont-weight: normal;padding-top:13px;\">
\t\t\t\t\t<a href=\"{{ path('cour',{'slug':produits.slug})}}\" style=\"text-decoration:none;color:rgba(255,255,255,1);\">{{produits.titreCours}}</a></h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>{% endblock %}
\t{% block temoignages %}
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
\t\t\t\t\t\t{% for commentaire in commentaires %}
\t\t\t\t<div class=\"col-lg-3 blog_item_col\">
\t\t\t\t<div class=\"blog_item\">
\t\t\t<div class=\"blog_background\" style=\"background-image:url('{{ asset('uploads/')}}{{ commentaire.photo }}');\"></div>
\t\t\t\t\t\t<div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t\t\t\t\t<h4 class=\"blog_title\" style=\"font-weight:350;\">{{commentaire.prenom}} {{commentaire.nom}}</h4>
\t\t\t\t\t\t\t<span class=\"blog_meta\" style=\"font-size:10px;line-height: 170%;\">{{commentaire.evaluation}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t{% endfor %}\t\t\t
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t{% endblock %}

{% block share %}
<div class=\"container\">
<div  style=\"background-color:;background-size:contain;
        height:400px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;color:#ffffff !important\">
                <div class=\"conatiner \">
                    <div class=\"row \">
                        <div class=\"col-lg-4\">
                        <font style=\"vertical-align: inherit;text-align:center;font-size:30px;\">
                            
                        </font>
                        </div>
                        <div class=\"col-lg-4\">
                                <iframe width=\"700\" height=\"400 \"
\t\t\t\t\t\t\t\tsrc=\"https://www.youtube.com/embed/tgbNymZ7vqY\">
                                </iframe>
                            </div>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<font style=\"vertical-align: inherit;text-align:center;font-size:30px;\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</font>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
{% endblock %}
", "cours/allCours.html.twig", "/home/coumba/Bureau/cdiokane/templates/cours/allCours.html.twig");
    }
}
