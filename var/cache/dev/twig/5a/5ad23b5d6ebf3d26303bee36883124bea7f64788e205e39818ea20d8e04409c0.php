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

/* campagne/index.html.twig */
class __TwigTemplate_8367819d1d799b655d1fd3b008e7477f18b2f43cb6cc70a0d28fc8d47a0d48db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'temoignages' => [$this, 'block_temoignages'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'background' => [$this, 'block_background'],
            'section' => [$this, 'block_section'],
            'categories' => [$this, 'block_categories'],
            'cat' => [$this, 'block_cat'],
            'cours' => [$this, 'block_cours'],
            'deal' => [$this, 'block_deal'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'options' => [$this, 'block_options'],
            'latest' => [$this, 'block_latest'],
            'footer' => [$this, 'block_footer'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "cours/allCours.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campagne/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campagne/index.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/index.html.twig", 1);
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
<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">



";
        // line 17
        echo "
<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
\t\t\t\t <li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;
\">
\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            echo "
\t\t\t\t\t\t\t\t\t\t<li style=\"display:flex;margin-left:30px;\">
<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "photo", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;border-radius:38px;\">
</li>
<br><br>
\t\t\t\t\t<li style=\"margin-top:-90px;\" class=\"menu_item\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</li>
\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</li>
                  <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" style=\"text-decoration:none;\">Déconnexion</a></li>

\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 43
            echo "<li><a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\">S'inscrire</a></li>

<li><a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\" >Se connecter</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t\t </li>
                
</ul>  
</div>
</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t  </div>
\t\t\t
\t\t</div>


</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 68
        echo "<div style=\"width:1400px;height:1100px;background-color:white;padding-top:114px;\">
<div style=\"width:646px;height:995px;margin-left:350px;margin-top:5px;background-color:white;border:1px solid gainsboro;padding-top:-4x²0px;\"><br/>
";
        // line 71
        echo "  
<form method=\"POST\" enctype=\"multipart/form-data\"  id=\"demo1-upload\">
    
      <div class=\"col-lg-9 col-md-1 col-sm-19 col-xs-19\"  style=\"padding-left:15px; padding-right:15px;margin-left:75px; padding-bottom:15px;\">
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "flashbag", [], "any", false, false, false, 75), "get", [0 => "success"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 76
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 77
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "get", [0 => "danger"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 81
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            
\t\t<br/></br/>\t
            \t<label>Téléphone :</label>
                 <div class=\"form-group \">
                  <input name=\"telephone\" id=\"telephone\" type=\"text\" required  class=\"form-control caret\" placeholder=\"Veuillez saisir votre numéro de téléphone\"> 
\t\t\t   </div>
\t\t\t<label>Ville :</label>

               <div class=\"form-group \">
               <input name=\"ville\" id=\"ville\" type=\"text\" required   class=\"form-control caret\" placeholder=\"Entrer le nom de votre ville\">
              </div>
\t\t\t  \t<label>Pays :</label>

                <div class=\"form-group\">
<input name=\"pays\" id=\"pays\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer le nom du pays\">
</div>
\t\t\t\t <label>Photo :</label>

<div class=\"form-group\">
               <input type=\"file\" name=\"photo\" class=\"form-control\" placeholder=\"Choisir une photo\" required>
            </div>
       \t\t\t\t <label>Votre parcours :</label>

<div class=\"form-group res-mg-t-15\">
                    <textarea name=\"parcoursEdu\"  placeholder=\"\" rows=\"2\" placeholder=\"Parler nous de votre histtoire\" class=\"form-control caret\" required>
\t\t\t\t\t</textarea>
                      </div>
\t\t\t\t <label>Formation :</label>

                <div class=\"form-group\">
                     <select name=\"coursid\" class=\"form-control\" required>
                  <option value=\"none\" selected=\"\" disabled=\"\">
                         Selectionnez la formation</option>
                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 119
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\" required>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titreCours", [], "any", false, false, false, 119), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </select>
            </div>
\t\t\t\t <label>Attentes :</label>

\t\t\t              <div class=\"form-group\">
<input name=\"attentes\" id=\"attentes\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer vos attentes\">
</div>
\t\t\t
            
\t\t\t\t\t\t\t<label>Motivation :</label>

\t\t\t<div class=\"form-group res-mg-t-15\">
\t\t\t\t<textarea name=\"motivation\"  placeholder=\"\" rows=\"2\" placeholder=\"Montrer nous votre motivation\" class=\"form-control caret\" required>
\t\t\t\t</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label>Perspective :</label>

\t\t\t\t\t<div class=\"form-group\">
<input name=\"perspective\" id=\"perspective\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer vos perspectives\">
</div>
<label>Lien de votre vidéo :</label>

\t\t\t\t\t<div class=\"form-group\">
<input name=\"video\" id=\"myUrl\" type=\"text\"    class=\"form-control caret\" value=\"\" required >
</div>
\t\t\t
\t\t\t\t<div class=\"card-footer text-muted\" style=\"padding-top:5px;\"><br><br>
\t<center>
<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\" style=\"margin-top:-25px;\">
<input type=\"submit\" name=\"ajouter\" class=\"btn  waves-effect waves-light\" style=\"width:400px;height:60px;background-color:#96bf31;font-size:25px;font-weight:500;color:white;\"  value=\"Enregistrer\" />
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>          </center>        
\t</div>
\t\t\t</div>
\t\t\t
\t\t\t\t
            
      </div>
      </form>
       
</div>

</div>

\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cours"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cours"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "deal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "deal"));

        // line 179
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meilleurs_ventes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meilleurs_ventes"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "latest"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 188
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 189
        echo "
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

<script>
 \$(document).ready(function() {
\t
 });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "campagne/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 196,  616 => 195,  612 => 194,  608 => 193,  604 => 192,  600 => 191,  596 => 190,  593 => 189,  583 => 188,  565 => 186,  547 => 184,  529 => 182,  511 => 180,  501 => 179,  491 => 178,  473 => 176,  455 => 174,  437 => 172,  419 => 170,  361 => 121,  350 => 119,  346 => 118,  311 => 85,  302 => 82,  299 => 81,  294 => 80,  285 => 77,  282 => 76,  278 => 75,  272 => 71,  268 => 68,  258 => 67,  239 => 66,  220 => 65,  201 => 64,  182 => 63,  162 => 55,  152 => 47,  146 => 43,  140 => 40,  136 => 39,  132 => 38,  126 => 37,  120 => 34,  116 => 32,  113 => 31,  98 => 17,  83 => 3,  73 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig' %}
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
<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">



{#<li><a  >Se connecter</a></li>#}

<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
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
<img src=\"{{ asset('uploads/' ~ app.user.photo) }}\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;border-radius:38px;\">
</li>
<br><br>
\t\t\t\t\t<li style=\"margin-top:-90px;\" class=\"menu_item\">{{app.user.prenom}} {{app.user.nom}}</li>
\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\">{{app.user.email}}</li>
                  <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"{{path('edit',{'slug':app.user.slug})}}\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t<li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"{{path('security_logout')}}\" style=\"text-decoration:none;\">Déconnexion</a></li>

\t\t\t\t\t\t\t\t\t\t{% else %}
<li><a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\">S'inscrire</a></li>

<li><a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\" >Se connecter</a></li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t\t </li>
                
</ul>  
</div>
</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"{{path('cours')}}\"> <img src=\"{{asset('img/logo_crowdedu.png')}}\" width=\"75%\" height=\"auto\"/></a>
\t\t  </div>
\t\t\t
\t\t</div>


</header>
{% endblock %}
{% block temoignages %} {% endblock %}
{% block barrier %} {% endblock %}
{% block fonctionnalites %} {% endblock %}
{% block campagne %} {% endblock  %}
{% block background %}
<div style=\"width:1400px;height:1100px;background-color:white;padding-top:114px;\">
<div style=\"width:646px;height:995px;margin-left:350px;margin-top:5px;background-color:white;border:1px solid gainsboro;padding-top:-4x²0px;\"><br/>
{#<h4 style=\"text-align:center;font-family:'Roboto',sans-serif;\">Indiquez votre objectif ici</h4><br>#}
  
<form method=\"POST\" enctype=\"multipart/form-data\"  id=\"demo1-upload\">
    
      <div class=\"col-lg-9 col-md-1 col-sm-19 col-xs-19\"  style=\"padding-left:15px; padding-right:15px;margin-left:75px; padding-bottom:15px;\">
            {% for flash_message in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('danger') %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            
\t\t<br/></br/>\t
            \t<label>Téléphone :</label>
                 <div class=\"form-group \">
                  <input name=\"telephone\" id=\"telephone\" type=\"text\" required  class=\"form-control caret\" placeholder=\"Veuillez saisir votre numéro de téléphone\"> 
\t\t\t   </div>
\t\t\t<label>Ville :</label>

               <div class=\"form-group \">
               <input name=\"ville\" id=\"ville\" type=\"text\" required   class=\"form-control caret\" placeholder=\"Entrer le nom de votre ville\">
              </div>
\t\t\t  \t<label>Pays :</label>

                <div class=\"form-group\">
<input name=\"pays\" id=\"pays\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer le nom du pays\">
</div>
\t\t\t\t <label>Photo :</label>

<div class=\"form-group\">
               <input type=\"file\" name=\"photo\" class=\"form-control\" placeholder=\"Choisir une photo\" required>
            </div>
       \t\t\t\t <label>Votre parcours :</label>

<div class=\"form-group res-mg-t-15\">
                    <textarea name=\"parcoursEdu\"  placeholder=\"\" rows=\"2\" placeholder=\"Parler nous de votre histtoire\" class=\"form-control caret\" required>
\t\t\t\t\t</textarea>
                      </div>
\t\t\t\t <label>Formation :</label>

                <div class=\"form-group\">
                     <select name=\"coursid\" class=\"form-control\" required>
                  <option value=\"none\" selected=\"\" disabled=\"\">
                         Selectionnez la formation</option>
                        {% for c in cours %}
                    <option value=\"{{c.id}}\" required>{{c.titreCours}}</option>
                        {% endfor %}
                </select>
            </div>
\t\t\t\t <label>Attentes :</label>

\t\t\t              <div class=\"form-group\">
<input name=\"attentes\" id=\"attentes\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer vos attentes\">
</div>
\t\t\t
            
\t\t\t\t\t\t\t<label>Motivation :</label>

\t\t\t<div class=\"form-group res-mg-t-15\">
\t\t\t\t<textarea name=\"motivation\"  placeholder=\"\" rows=\"2\" placeholder=\"Montrer nous votre motivation\" class=\"form-control caret\" required>
\t\t\t\t</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label>Perspective :</label>

\t\t\t\t\t<div class=\"form-group\">
<input name=\"perspective\" id=\"perspective\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer vos perspectives\">
</div>
<label>Lien de votre vidéo :</label>

\t\t\t\t\t<div class=\"form-group\">
<input name=\"video\" id=\"myUrl\" type=\"text\"    class=\"form-control caret\" value=\"\" required >
</div>
\t\t\t
\t\t\t\t<div class=\"card-footer text-muted\" style=\"padding-top:5px;\"><br><br>
\t<center>
<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\" style=\"margin-top:-25px;\">
<input type=\"submit\" name=\"ajouter\" class=\"btn  waves-effect waves-light\" style=\"width:400px;height:60px;background-color:#96bf31;font-size:25px;font-weight:500;color:white;\"  value=\"Enregistrer\" />
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>          </center>        
\t</div>
\t\t\t</div>
\t\t\t
\t\t\t\t
            
      </div>
      </form>
       
</div>

</div>

\t

{% endblock %}
{% block section %}
{% endblock %}
{% block categories %}
{% endblock %}
{% block cat %}
{% endblock %}
{% block cours %}
{% endblock %}
\t{% block deal %}
    {% endblock %}
    \t{% block meilleurs_ventes %}
{% endblock %}
{% block options %}
{% endblock %}
{% block latest %}
{% endblock %}
{% block footer %}
{% endblock %}
 {% block script %}

<script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{asset('css/bootstrap4/popper.js')}}\"></script>
<script src=\"{{asset('css/bootstrap4/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"{{asset('js/custom.js')}}\"></script>

<script>
 \$(document).ready(function() {
\t
 });

</script>
{% endblock %}

", "campagne/index.html.twig", "/home/coumba/Bureau/cdiokane/templates/campagne/index.html.twig");
    }
}
