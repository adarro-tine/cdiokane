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

/* cours/mesCoursSlug.html.twig */
class __TwigTemplate_fc88df8a2099c338cfe506b030df3af2db83f7e061086fbf9528e187f1b42cb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'categories' => [$this, 'block_categories'],
            'tabs' => [$this, 'block_tabs'],
            'share' => [$this, 'block_share'],
            'section' => [$this, 'block_section'],
            'temoignages' => [$this, 'block_temoignages'],
            'barrier' => [$this, 'block_barrier'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/mesCoursSlug.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/mesCoursSlug.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/mesCoursSlug.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
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

    // line 5
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
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

    // line 8
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
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

    // line 11
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 12
        echo "\t<style>
\t
\t
\ta{
\tbackground-color: transparent;
\t}
\t
\th1{
\tcolor: #ffffff !important;\t
\tmargin-top:-30px;
\tfont-family:'Roboto',sans-serif;
\t}
\t
\t
\t.font{
\tfont-size:30px;
\t}
\t.acceuil{
\t\tcolor:#696969;
\t\tfont-family:'Roboto',sans-serif;
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
\t
\th1,h2,h3,h4,h5,h6{
\t\tfont-family:'Roboto',sans-serif;
\t}
\t
\t</style>
\t<div class=\"main_slider\" style=\"background:linear-gradient(90deg,#096ea2,#96bf31);height:300px;\">
\t\t<div class=\"container fill_height\" style=\"padding:30px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\" style=\"margin-top:33px;\">
\t\t\t\t<h1>Formation complète ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 82, $this->source); })()), "titreCours", [], "any", false, false, false, 82), "html", null, true);
        echo "</h1>
\t\t\t\t<h3 style=\"color:white;font-weight:150;\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 83, $this->source); })()), "petitDescription", [], "any", false, false, false, 83), "html", null, true);
        echo "...</h3>
\t\t\t\t<h1 style=\"margin-top:35px;\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 84, $this->source); })()), "universite", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84), "html", null, true);
        echo "</h1>\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"card cadre\" style=\"width:230px;height:212px;border-radius:0;margin-top:15px;\">
\t\t\t<div class=\"card-body\" style=\"margin:-15px;\">
\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 90, $this->source); })()), "image", [], "any", false, false, false, 90), "html", null, true);
        echo "\" width=\"150\" height=\"200\" alt=\"\" id=\"tine\">

\t\t\t\t\t</div>

\t\t
\t\t\t</div>
\t\t\t</div><br>

\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container mt-3\">
\t<!-- Nav tabs -->
\t<ul class=\"nav nav-tabs tabla\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t</li>
\t<li class=\"nav-item \">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Ce que vous allez apprendre</a>
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
\t<div class=\"col-lg-8\">
\t\t<h6 class=\"acceuil\"><strong >";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 128, $this->source); })()), "petitDescription", [], "any", false, false, false, 128), "html", null, true);
        echo "</strong></h6>
\t\t<p class=\"acceuil\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 129, $this->source); })()), "description", [], "any", false, false, false, 129), "html", null, true);
        echo ".</p><br><br><br>
\t\t<div class=\"course_curriculum accordion\">
\t\t\t<h3 class=\"heading\">
<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
</h3>

\t\t</div>
\t</div>
\t<div class=\"col-lg-4\">
\t\t<div class=\"students\"><i class=\"fa fa-users\"style=\"color:#fff;font-family:ubuntu;\"></i> <b>0 PARTICIPANTS</b></div>
\t</div>
\t\t</div>
\t</div>
\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
<div class=\"course_curriculum accordion\" style=\"width:700px;\">
<table class=\"table\">\t\t
\t<tbody>
\t
\t\t\t";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 147, $this->source); })()), "chapitres", [], "any", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 148
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 150) == true)) {
                // line 151
                echo "\t\t\t\t
\t\t\t\t<td><a href=\"\" style=\"color:#053651;\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 152), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 156), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >Libre</span> </td>\t\t\t\t
\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 161
$context["cours"], "etat", [], "any", false, false, false, 161) == false)) {
                // line 162
                echo "\t\t\t\t";
                // line 163
                echo "\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#053651;\"0 id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 164), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 168), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >Libre</span> </td>\t
\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 174), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
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

    // line 201
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 202
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
 \$(document).ready(function() {
\t\$('.li').each(function() {
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

\t\t
\t\t});
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/mesCoursSlug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 209,  506 => 208,  502 => 207,  498 => 206,  494 => 205,  490 => 204,  486 => 203,  481 => 202,  471 => 201,  438 => 177,  428 => 174,  419 => 168,  412 => 164,  409 => 163,  407 => 162,  405 => 161,  397 => 156,  390 => 152,  387 => 151,  385 => 150,  381 => 148,  377 => 147,  356 => 129,  352 => 128,  311 => 90,  302 => 84,  298 => 83,  294 => 82,  222 => 12,  212 => 11,  193 => 9,  175 => 8,  157 => 7,  139 => 6,  121 => 5,  103 => 4,  85 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t{% extends 'cours/allCours.html.twig' %}
\t{% block fonctionnalites %}{% endblock %}
\t{% block campagne %}{% endblock %}
\t{% block categories %}{% endblock %}
\t{% block tabs %}{% endblock %}
\t{% block share %}{% endblock %}
\t{% block section %}{% endblock %}
\t{% block temoignages  %}{% endblock %}
\t{% block barrier %} {% endblock %}

\t{% block background %}
\t<style>
\t
\t
\ta{
\tbackground-color: transparent;
\t}
\t
\th1{
\tcolor: #ffffff !important;\t
\tmargin-top:-30px;
\tfont-family:'Roboto',sans-serif;
\t}
\t
\t
\t.font{
\tfont-size:30px;
\t}
\t.acceuil{
\t\tcolor:#696969;
\t\tfont-family:'Roboto',sans-serif;
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
\t
\th1,h2,h3,h4,h5,h6{
\t\tfont-family:'Roboto',sans-serif;
\t}
\t
\t</style>
\t<div class=\"main_slider\" style=\"background:linear-gradient(90deg,#096ea2,#96bf31);height:300px;\">
\t\t<div class=\"container fill_height\" style=\"padding:30px;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\" style=\"margin-top:33px;\">
\t\t\t\t<h1>Formation complète {{cour.titreCours}}</h1>
\t\t\t\t<h3 style=\"color:white;font-weight:150;\">{{cour.petitDescription}}...</h3>
\t\t\t\t<h1 style=\"margin-top:35px;\">{{cour.universite.nom}}</h1>\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<div class=\"card cadre\" style=\"width:230px;height:212px;border-radius:0;margin-top:15px;\">
\t\t\t<div class=\"card-body\" style=\"margin:-15px;\">
\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,{{ cour.image }}\" width=\"150\" height=\"200\" alt=\"\" id=\"tine\">

\t\t\t\t\t</div>

\t\t
\t\t\t</div>
\t\t\t</div><br>

\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container mt-3\">
\t<!-- Nav tabs -->
\t<ul class=\"nav nav-tabs tabla\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t</li>
\t<li class=\"nav-item \">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Ce que vous allez apprendre</a>
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
\t<div class=\"col-lg-8\">
\t\t<h6 class=\"acceuil\"><strong >{{cour.petitDescription}}</strong></h6>
\t\t<p class=\"acceuil\">{{cour.description}}.</p><br><br><br>
\t\t<div class=\"course_curriculum accordion\">
\t\t\t<h3 class=\"heading\">
<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
</h3>

\t\t</div>
\t</div>
\t<div class=\"col-lg-4\">
\t\t<div class=\"students\"><i class=\"fa fa-users\"style=\"color:#fff;font-family:ubuntu;\"></i> <b>0 PARTICIPANTS</b></div>
\t</div>
\t\t</div>
\t</div>
\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
<div class=\"course_curriculum accordion\" style=\"width:700px;\">
<table class=\"table\">\t\t
\t<tbody>
\t
\t\t\t{% for cours in cour.chapitres %}
\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t{% if cours.etat == true %}
\t\t\t\t
\t\t\t\t<td><a href=\"\" style=\"color:#053651;\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">{{cours.titreChapitre}}</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"{{cours.video}}\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >Libre</span> </td>\t\t\t\t
\t\t\t\t{% elseif cours.etat == false %}
\t\t\t\t{#<span>{{cours.titreChapitre}}</span>#}
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#053651;\"0 id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">{{cours.titreChapitre}}</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"{{cours.video}}\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >Libre</span> </td>\t
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
 \$(document).ready(function() {
\t\$('.li').each(function() {
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

\t\t
\t\t});
\t\t</script>
\t{% endblock %}", "cours/mesCoursSlug.html.twig", "/var/www/html/crowdedu/templates/cours/mesCoursSlug.html.twig");
    }
}
