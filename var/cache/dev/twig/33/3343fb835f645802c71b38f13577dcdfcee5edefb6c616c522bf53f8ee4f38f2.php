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

/* cours/detailcour.html.twig */
class __TwigTemplate_4f6078563c4376f857f1e7fbc261e328113ae61ad75bc3ce63e7a43ae4f605bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'categories' => [$this, 'block_categories'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'barrier' => [$this, 'block_barrier'],
            'campagne' => [$this, 'block_campagne'],
            'temoignages' => [$this, 'block_temoignages'],
            'background' => [$this, 'block_background'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/detailcour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/detailcour.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/detailcour.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 4
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
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

    // line 6
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

    // line 7
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

    // line 9
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 10
        echo "\t<style>
\tul.breadcrumb {
\tpadding: 30px 16px;
\tlist-style: none !important;
\tbackground-color: #96bf31;
\t}
\tul.breadcrumb li {
\tdisplay: inline;
\tfont-size: 11px;
\ttext-transform: uppercase;
\tfont-family:'Roboto',sans-serif;
\t}
\tul.breadcrumb li+li:before {
\tpadding: 8px;
\tcolor: #ffffff;
\tcontent: \"/\\00a0\";
\t}
\tul.breadcrumb li a {
\tcolor: #ffffff;
\ttext-decoration: none;
\t}
\tul.breadcrumb li a:hover {
\tcolor: #fff;
\ttext-decoration: none;
\t}
\ta{
\tbackground-color: transparent;
\t}
\t.el{
\tcolor: #ffffff !important;\t
\t}
\th1{
\tcolor: #ffffff !important;\t
\tmargin-top:-30px;
\t}
\t.bp_filled_stars {
\tposition: absolute;
\ttop: 0;
\tcolor: #FFCB10;
\toverflow: hidden;
\tfloat: left;
\tleft: 0;
\t}
\tspan[id^=\"grade-\"]:hover {
\t\t\t\t\t\topacity: 0.5;
\t\t\t\t}
\t#etoile{
\t\t\t
\t\t\tlist-style-type: none;
\t}
\t#lio{
\t\tcolor:#ffffff;
\t}
\t.button{
\tbackground-color: #96bf31;
\tfont-family:'Roboto',sans-serif;
\tcolor:#053651;
\tbox-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
\twidth: 100%;
\ttext-align: center;
\tborder-radius: 2px;
\tletter-spacing: .1em;
\tposition: relative;
\ttransition: all .3s;
\tz-index: 1;
\tfont-size: 12px;
\tfont-weight: 600;
\toutline: 0;
\t}
\t.button:hover{
\tcolor:#fff;
\t}
\t.prix{
\tfont-family:'Roboto',sans-serif;
\tcolor:#96bf31;
\tfont-size: 14px;
\tpadding-left: 2px;
\tmargin-left:7px;
\tmargin-top:10px;
\ttext-transform: uppercase;
\t}
\t.cadre{
\theight:auto;
\twidth:auto;
\t}
\t.titre{
\theight:20%;
\t}
\t.badge{
\tcolor:#696969;
\tfont-size: 14px;
\tpadding:10px;
\t}
\t.font{
\tfont-size:30px;
\t}
\t.acceuil{
\t\tcolor:#696969;
\tfont-family:'Roboto',sans-serif;
\t}
\t.tr{
\t\tfont-size:12px;\t\t
\t}
\t.tr td a {
\t\tcolor:#686868;
\t}
\t.statu{
\t\twidth:100px;
\t\theight:20px;
\t\tfont-size:12px;
\t\tbackground: #70c989;
\t\tpadding: 2px 8px;
\t\tmargin-left: 10px;
\t\tcolor:#fff;
    \tborder-radius: 2px;
\t\tfont-size: 11px;
\t\tfont-weight: 600;
\t\ttext-transform: uppercase;
\t}
\t.tabla{
\t\tpadding: 15px 20px;
\t\tletter-spacing: 1px;\t\t
\t\tfont-size: 11px;
\t\ttext-transform: uppercase;
\t\topacity: .9;
\t\tfont-weight: 600;
\t\t\t
\t}
\t.item  {
\tcolor: #3d3d3d;
\t}
\t.item:hover {
\tcolor:#053651;
\t}
\t.addition{
\t\tmargin-left:700px;
\t\tcolor:#D3D3D3;
\t\tfont-size:32px;
\t}
\t.course-preview{
    display: flex;
    font-size: 18px;
    padding: 16px 64px 16px 16px;
\t}
\t
\t</style>
\t<div class=\"main_slider\" style=\"background:#096ea2;height:560px;\">

\t";
        // line 159
        echo "\t\t<div class=\"container fill_height\">
\t\t\t
\t\t\t\t<h1>";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 161, $this->source); })()), "titreCours", [], "any", false, false, false, 161), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 161, $this->source); })()), "universite", [], "any", false, false, false, 161), "nom", [], "any", false, false, false, 161), "html", null, true);
        echo ")</h1>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 166, $this->source); })()), "image", [], "any", false, false, false, 166), "html", null, true);
        echo "\" width=\"300\" height=\"450\" alt=\"\" id=\"tine\">

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cadre\">
\t\t\t<div class=\"card-body\">
\t\t\t";
        // line 173
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173), [], "array", true, true, false, 173)) {
            // line 174
            echo "\t\t\t <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_ajouterPanier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174)]), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t<button type=\"submit\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;\">PRENDRE CETTE FORMATION</button>
\t\t\t\t</form>
\t\t\t\t";
        } else {
            // line 178
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_panier");
            echo "\">Déja au panier</a>
                ";
        }
        // line 180
        echo "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 181
            echo "\t\t\t\t <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demarrer");
            echo "\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

\t\t\t\t ";
        } else {
            // line 184
            echo "\t\t\t\t <a href=\"#TaskListDialog\" role=\"button\" data-toggle=\"modal\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

";
        }
        // line 187
        echo "\t\t\t\t<p class=\"card-text prix\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 187, $this->source); })()), "prix", [], "any", false, false, false, 187), "html", null, true);
        echo " CFA pour 10 jours</p>
\t\t\t\t<ul >
\t\t\t\t\t<li class=\"badge\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 189, $this->source); })()), "duree", [], "any", false, false, false, 189), "html", null, true);
        echo "</li><i class=\"far fa-clock\"></i><br>
\t\t\t\t\t<li class=\"badge\">BADGE DE FORMATION</li><i class=\"far fa-id-badge\"></i>
\t\t\t\t\t<li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
\t\t\t\t</ul>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"    style=\"font-size: inherit;\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t</div><br>

\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container mt-3\" style=\"margin-bottom:100px;\">
\t<!-- Nav tabs -->
\t<ul class=\"nav nav-tabs tabla\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t</li>
\t<li class=\"nav-item \">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Programme de cours</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu2\">Avis</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu3\">Enseignant</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu4\">Option d'inscription</a>
\t</li>
\t</ul>

\t<!-- Tab panes -->
\t<div class=\"tab-content\">
\t<div id=\"home\" class=\"container tab-pane active\"><br>
\t<div class=\"row\">
\t<div class=\"col-lg-8\" style=\"border:1px solid gainsboro;padding:15px;\">
\t\t<h6 class=\"acceuil\"><strong >";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 229, $this->source); })()), "petitDescription", [], "any", false, false, false, 229), "html", null, true);
        echo "</strong></h6>
\t\t<p class=\"acceuil\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 230, $this->source); })()), "description", [], "any", false, false, false, 230), "html", null, true);
        echo ".</p><br><br><br>
\t\t<div class=\"course_curriculum accordion\">
\t\t\t<h3 class=\"heading\">
<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
</h3>
<div class=\"course_curriculum accordion\">
<table class=\"table\">\t\t
\t<tbody>
\t<tr class=\"course_section show\">
\t\t\t\t<td  colspan=\"4\" style=\"color:#686868;font-family:ubuntu\">Section 1: Introduction </td>
\t\t\t\t<i class=\"fa fa-plus addition\" id=\"hide\"></i>
\t</tr>
\t\t\t";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 242, $this->source); })()), "chapitres", [], "any", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 243
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 245
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 245) == false)) {
                // line 246
                echo "\t\t\t\t<div class=\"course-preview\">
\t\t\t\t<span>";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 247), "html", null, true);
                echo "</span>
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 249), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 253), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t";
            } else {
                // line 259
                echo "\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 259), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t";
            }
            // line 262
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 262), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"col-lg-4\" style=\"padding:15px;\">
\t\t<div class=\"students\">
\t\t<i class=\"fas fa-globe-africa\" style=\"font-size:25px;\"></i>
\t\t<h4 style=\"margin-left:35px;margin-top:-28px;
\t\tfont-size: 1.25rem;
    line-height: 1.5rem;
    font-weight: bold;
    font-family:ubuntu;\">Cours 100% en ligne</h4>
\t\t</div>
\t</div>
\t\t</div>
\t</div>
\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
\t<div class=\"course_curriculum accordion\">
\t<table class=\"table\">\t\t
\t\t<tbody>
\t\t\t";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 287, $this->source); })()), "chapitres", [], "any", false, false, false, 287));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 288
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 290
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 290) == false)) {
                // line 291
                echo "\t\t\t\t<div class=\"course-preview\">
\t\t\t\t";
                // line 293
                echo "\t\t\t\t<h3>Ce que vous allez apprendre</h3>
\t\t\t\t</div>
\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 295), "html", null, true);
                echo "</a></td>
\t\t\t<center>  
\t\t\t<div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 299
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 299), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t";
            } else {
                // line 305
                echo "\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 305), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t";
            }
            // line 308
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 308), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>

\t</div>
\t<div id=\"menu2\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t<div id=\"menu3\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t<div id=\"menu4\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t</div>
</div>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 332
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 333
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function() {
\t\t\t\t\$('.li').each(function() {
\t\t\t\t\t\t\$(this).append(objRate.initRate(objRate.maxRate));
\t\t\t\t});

\t\t\t\t\$('.fa-star-o, .fa-star').on('mouseenter mouseleave', objRate.hoverHandler);
\t\t\t\t\$('.fa-star-o, .fa-star').on('click', objRate.clickHandler);
\t\t});
\t\t\$(\"#hide\").click(function(){
\t\t\$(\".tr\").toggle();
\t\t});
\t\t\$(\"#myModal\").hide();
\t\t\$('#a_video').click(function(){
         \$(\"#myModal\").show();
\t\t});
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/detailcour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 340,  630 => 339,  626 => 338,  622 => 337,  618 => 336,  614 => 335,  610 => 334,  605 => 333,  595 => 332,  565 => 311,  555 => 308,  548 => 305,  539 => 299,  532 => 295,  528 => 293,  525 => 291,  523 => 290,  519 => 288,  515 => 287,  491 => 265,  481 => 262,  474 => 259,  465 => 253,  458 => 249,  453 => 247,  450 => 246,  448 => 245,  444 => 243,  440 => 242,  425 => 230,  421 => 229,  378 => 189,  372 => 187,  367 => 184,  360 => 181,  357 => 180,  351 => 178,  343 => 174,  341 => 173,  331 => 166,  321 => 161,  317 => 159,  167 => 10,  157 => 9,  138 => 7,  119 => 6,  100 => 5,  82 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t{% extends 'cours/allCours.html.twig' %}
\t{% block categories %}{% endblock %}
\t
\t{% block fonctionnalites %}{% endblock %}
\t{% block barrier %} {% endblock %}
\t{% block campagne %} {% endblock %}
\t{% block temoignages %} {% endblock %}

\t{% block background %}
\t<style>
\tul.breadcrumb {
\tpadding: 30px 16px;
\tlist-style: none !important;
\tbackground-color: #96bf31;
\t}
\tul.breadcrumb li {
\tdisplay: inline;
\tfont-size: 11px;
\ttext-transform: uppercase;
\tfont-family:'Roboto',sans-serif;
\t}
\tul.breadcrumb li+li:before {
\tpadding: 8px;
\tcolor: #ffffff;
\tcontent: \"/\\00a0\";
\t}
\tul.breadcrumb li a {
\tcolor: #ffffff;
\ttext-decoration: none;
\t}
\tul.breadcrumb li a:hover {
\tcolor: #fff;
\ttext-decoration: none;
\t}
\ta{
\tbackground-color: transparent;
\t}
\t.el{
\tcolor: #ffffff !important;\t
\t}
\th1{
\tcolor: #ffffff !important;\t
\tmargin-top:-30px;
\t}
\t.bp_filled_stars {
\tposition: absolute;
\ttop: 0;
\tcolor: #FFCB10;
\toverflow: hidden;
\tfloat: left;
\tleft: 0;
\t}
\tspan[id^=\"grade-\"]:hover {
\t\t\t\t\t\topacity: 0.5;
\t\t\t\t}
\t#etoile{
\t\t\t
\t\t\tlist-style-type: none;
\t}
\t#lio{
\t\tcolor:#ffffff;
\t}
\t.button{
\tbackground-color: #96bf31;
\tfont-family:'Roboto',sans-serif;
\tcolor:#053651;
\tbox-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
\twidth: 100%;
\ttext-align: center;
\tborder-radius: 2px;
\tletter-spacing: .1em;
\tposition: relative;
\ttransition: all .3s;
\tz-index: 1;
\tfont-size: 12px;
\tfont-weight: 600;
\toutline: 0;
\t}
\t.button:hover{
\tcolor:#fff;
\t}
\t.prix{
\tfont-family:'Roboto',sans-serif;
\tcolor:#96bf31;
\tfont-size: 14px;
\tpadding-left: 2px;
\tmargin-left:7px;
\tmargin-top:10px;
\ttext-transform: uppercase;
\t}
\t.cadre{
\theight:auto;
\twidth:auto;
\t}
\t.titre{
\theight:20%;
\t}
\t.badge{
\tcolor:#696969;
\tfont-size: 14px;
\tpadding:10px;
\t}
\t.font{
\tfont-size:30px;
\t}
\t.acceuil{
\t\tcolor:#696969;
\tfont-family:'Roboto',sans-serif;
\t}
\t.tr{
\t\tfont-size:12px;\t\t
\t}
\t.tr td a {
\t\tcolor:#686868;
\t}
\t.statu{
\t\twidth:100px;
\t\theight:20px;
\t\tfont-size:12px;
\t\tbackground: #70c989;
\t\tpadding: 2px 8px;
\t\tmargin-left: 10px;
\t\tcolor:#fff;
    \tborder-radius: 2px;
\t\tfont-size: 11px;
\t\tfont-weight: 600;
\t\ttext-transform: uppercase;
\t}
\t.tabla{
\t\tpadding: 15px 20px;
\t\tletter-spacing: 1px;\t\t
\t\tfont-size: 11px;
\t\ttext-transform: uppercase;
\t\topacity: .9;
\t\tfont-weight: 600;
\t\t\t
\t}
\t.item  {
\tcolor: #3d3d3d;
\t}
\t.item:hover {
\tcolor:#053651;
\t}
\t.addition{
\t\tmargin-left:700px;
\t\tcolor:#D3D3D3;
\t\tfont-size:32px;
\t}
\t.course-preview{
    display: flex;
    font-size: 18px;
    padding: 16px 64px 16px 16px;
\t}
\t
\t</style>
\t<div class=\"main_slider\" style=\"background:#096ea2;height:560px;\">

\t{#<a href=\"{{path('chapitres_complet', {'slug':cour.slug})}}\">TEST</a>#}
\t\t<div class=\"container fill_height\">
\t\t\t
\t\t\t\t<h1>{{cour.titreCours}} ({{cour.universite.nom }})</h1>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,{{ cour.image }}\" width=\"300\" height=\"450\" alt=\"\" id=\"tine\">

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cadre\">
\t\t\t<div class=\"card-body\">
\t\t\t{% if panier[cour.id] is not defined %}
\t\t\t <form action=\"{{ path('page_ajouterPanier',{'id':cour.id}) }}\" method=\"get\">
\t\t\t\t<button type=\"submit\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;\">PRENDRE CETTE FORMATION</button>
\t\t\t\t</form>
\t\t\t\t{% else %}
                    <a class=\"btn btn-success\" href=\"{{ path('page_panier')}}\">Déja au panier</a>
                {% endif %}
\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t <a href=\"{{path('demarrer')}}\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

\t\t\t\t {% else %}
\t\t\t\t <a href=\"#TaskListDialog\" role=\"button\" data-toggle=\"modal\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

{% endif %}
\t\t\t\t<p class=\"card-text prix\">{{cour.prix}} CFA pour 10 jours</p>
\t\t\t\t<ul >
\t\t\t\t\t<li class=\"badge\">{{cour.duree}}</li><i class=\"far fa-clock\"></i><br>
\t\t\t\t\t<li class=\"badge\">BADGE DE FORMATION</li><i class=\"far fa-id-badge\"></i>
\t\t\t\t\t<li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
\t\t\t\t</ul>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"    style=\"font-size: inherit;\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t</div><br>

\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container mt-3\" style=\"margin-bottom:100px;\">
\t<!-- Nav tabs -->
\t<ul class=\"nav nav-tabs tabla\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t</li>
\t<li class=\"nav-item \">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Programme de cours</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu2\">Avis</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu3\">Enseignant</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu4\">Option d'inscription</a>
\t</li>
\t</ul>

\t<!-- Tab panes -->
\t<div class=\"tab-content\">
\t<div id=\"home\" class=\"container tab-pane active\"><br>
\t<div class=\"row\">
\t<div class=\"col-lg-8\" style=\"border:1px solid gainsboro;padding:15px;\">
\t\t<h6 class=\"acceuil\"><strong >{{cour.petitDescription}}</strong></h6>
\t\t<p class=\"acceuil\">{{cour.description}}.</p><br><br><br>
\t\t<div class=\"course_curriculum accordion\">
\t\t\t<h3 class=\"heading\">
<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
</h3>
<div class=\"course_curriculum accordion\">
<table class=\"table\">\t\t
\t<tbody>
\t<tr class=\"course_section show\">
\t\t\t\t<td  colspan=\"4\" style=\"color:#686868;font-family:ubuntu\">Section 1: Introduction </td>
\t\t\t\t<i class=\"fa fa-plus addition\" id=\"hide\"></i>
\t</tr>
\t\t\t{% for cours in cour.chapitres %}
\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t{% if cours.etat == false %}
\t\t\t\t<div class=\"course-preview\">
\t\t\t\t<span>{{cours.titreChapitre}}</span>
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">{{cours.titreChapitre}}</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"{{cours.video}}\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t<td><a >{{cours.titreChapitre}}</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t{% endif %}
\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> {{cours.duration}}</span></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"col-lg-4\" style=\"padding:15px;\">
\t\t<div class=\"students\">
\t\t<i class=\"fas fa-globe-africa\" style=\"font-size:25px;\"></i>
\t\t<h4 style=\"margin-left:35px;margin-top:-28px;
\t\tfont-size: 1.25rem;
    line-height: 1.5rem;
    font-weight: bold;
    font-family:ubuntu;\">Cours 100% en ligne</h4>
\t\t</div>
\t</div>
\t\t</div>
\t</div>
\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
\t<div class=\"course_curriculum accordion\">
\t<table class=\"table\">\t\t
\t\t<tbody>
\t\t\t{% for cours in cour.chapitres %}
\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t{% if cours.etat == false %}
\t\t\t\t<div class=\"course-preview\">
\t\t\t\t{#<span>{{cours.titreChapitre}}</span>#}
\t\t\t\t<h3>Ce que vous allez apprendre</h3>
\t\t\t\t</div>
\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">{{cours.titreChapitre}}</a></td>
\t\t\t<center>  
\t\t\t<div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t
                <iframe width=\"700\" height=\"400\" src=\"{{cours.video}}\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t<td><a >{{cours.titreChapitre}}</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t{% endif %}
\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> {{cours.duration}}</span></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>

\t</div>
\t<div id=\"menu2\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t<div id=\"menu3\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t<div id=\"menu4\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t</div>
</div>

\t{% endblock %}\t
\t{% block script %}
\t<script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
\t<script src=\"{{asset('js/rate.class.js')}}\"></script>
\t<script src=\"{{asset('css/bootstrap4/popper.js')}}\"></script>
\t<script src=\"{{asset('css/bootstrap4/bootstrap.min.js')}}\"></script>
\t<script src=\"{{asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
\t<script src=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
\t<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
\t<script src=\"{{asset('js/custom.js')}}\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function() {
\t\t\t\t\$('.li').each(function() {
\t\t\t\t\t\t\$(this).append(objRate.initRate(objRate.maxRate));
\t\t\t\t});

\t\t\t\t\$('.fa-star-o, .fa-star').on('mouseenter mouseleave', objRate.hoverHandler);
\t\t\t\t\$('.fa-star-o, .fa-star').on('click', objRate.clickHandler);
\t\t});
\t\t\$(\"#hide\").click(function(){
\t\t\$(\".tr\").toggle();
\t\t});
\t\t\$(\"#myModal\").hide();
\t\t\$('#a_video').click(function(){
         \$(\"#myModal\").show();
\t\t});
\t\t</script>
\t{% endblock %}", "cours/detailcour.html.twig", "/home/coumba/Bureau/cdiokane/templates/cours/detailcour.html.twig");
    }
}
