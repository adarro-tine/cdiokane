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

/* cours/courBySouscategorie.html.twig */
class __TwigTemplate_ec296c62ae36f0b28053865e435078665bd80e29b1cd5e5c0dea8ad2b9048ce7 extends \Twig\Template
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
            'background' => [$this, 'block_background'],
            'barrier' => [$this, 'block_barrier'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "cours/allCours.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/courBySouscategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/courBySouscategorie.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/courBySouscategorie.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 4
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

    // line 5
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

    // line 6
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

    // line 7
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

    // line 8
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

    // line 9
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

    // line 12
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 13
        echo "    <style>
    .slider{
        background:#96bf31;
        height:150px;
    }
    ul.breadcrumb {
\tpadding: 30px 16px;
\tlist-style: none !important;
\tbackground-color: #96bf31;
\t}
\tul.breadcrumb li {
\tdisplay: inline;
\tfont-size: 11px;
\ttext-transform: uppercase;
\tfont-family:ubuntu;
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
    h1{
\tcolor: #ffffff !important;\t
\tmargin-top:50px;
    font-family:ubuntu;
    font-size: 2.5rem;
    line-height: 1.35em;
\t}
    h5{
    color: #ffffff !important; 
    font-family:ubuntu;
    margin-bottom: 10px;
    font-size: 1.2rem;
        line-height: 1.35em; 
    }
    .widget .course_cat_nav {
    background: #414;
    color: #FFF;
    border-radius: 4px;
    overflow: hidden;
    clear: both;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.widget .course_cat_nav ul li a {
    color:#fff;    
    padding: 18px 24px;
    font-size: 11px;
    line-height: 1.5;
    font-weight: 600;
    display: inline-block;
    width: 100%;
    text-transform: uppercase;
}
a, a:active, a:focus, a:hover {
    text-decoration: none;  
}
.widget .course_cat_nav ul li a span {
    float: right;
    font-size: 80%;
    background: #96bf31;
    color: #FFF;
    padding: 2px 7px;
    border-radius: 2px;
}
    .rower{
        margin-top:30px;
    }
    .rowerer{
        padding:50px;
        border-top:1px solid lightgrey;
    }
    .liste{
        margin-top:30px;
    }
    span[id^=\"grade-\"]:hover {
\t\t\t\t\t\topacity: 0.5;
\t\t\t\t}
\t#etoile{
\t\t\t
\t\t\tlist-style-type: none;
\t}
\t#lio{
\t\tcolor:#FFCB10;
\t}
    .diguanter{
        height:100px
    }
    </style>

    <div class=\"main_slider slider\" style=\"height:100px;background:linear-gradient(90deg,#096ea2,#96bf31);\" >
\t\t<div class=\"container fill_height\" style=\"padding-top:25px;\">        
                <h1 style=\"margin-top:-5px;\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nomsouscategorie"]) || array_key_exists("nomsouscategorie", $context) ? $context["nomsouscategorie"] : (function () { throw new RuntimeError('Variable "nomsouscategorie" does not exist.', 123, $this->source); })()), "nom", [], "any", false, false, false, 123), "html", null, true);
        echo "</h1>
                
                
           ";
        // line 127
        echo "        <div class=\"row align-items-center fill_height\">
            <div class=\"col\">
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        // line 136
        echo "    <div class=\"container\" >
    <div class=\"row rower\" style=\"margin-left:100px;\">
    <div class=\"col-lg-3\" >
    <div class=\"widget\" >
        <div class=\"course_cat_nav\" style=\"margin-bottom:80px;\">
        <ul class=\" name\">
        <li style=\"margin-left:17px;\">
        La liste des sous-catégories</li>
        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["souscategories"]) || array_key_exists("souscategories", $context) ? $context["souscategories"] : (function () { throw new RuntimeError('Variable "souscategories" does not exist.', 144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 145
            echo "        \t<li class=\"cat-item cat-item-34\" data-slug=\"technology\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("souscategorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["sc"], "slug", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\" title=\"1500+ students enrolled\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sc"], "nom", [], "any", false, false, false, 145), "html", null, true);
            echo "<span>3</span></a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        </ul>
        </div>
        </div>
        </div>
            <div class=\"col-lg-9\">
            <div class=\"row\">
          
                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["souscategorie"]) || array_key_exists("souscategorie", $context) ? $context["souscategorie"] : (function () { throw new RuntimeError('Variable "souscategorie" does not exist.', 155, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 156
            echo "                <div class=\"card col-lg-3 \" style=\"width:200px\">
                <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cour", ["slug" => twig_get_attribute($this->env, $this->source, $context["sc"], "slug", [], "any", false, false, false, 157)]), "html", null, true);
            echo "\" class=\"a_image\">
      <img class=\"card-img-top\" src=\"data:image/png;base64,";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sc"], "image", [], "any", false, false, false, 158), "html", null, true);
            echo "\" alt=\"Card image\">
      </a>
      
    <div class=\"card-body\">
    <h4 class=\"card-title\" style=\"font-size:15px;font-weight:600;\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sc"], "titreCours", [], "any", false, false, false, 162), "html", null, true);
            echo "</h4>
    <div class=\"rating\">
\t<div class=\"stars\">
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t</div>
</div>
    <h6 class=\"card-text\" style=\"margin-top:20px;text-align:center;\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sc"], "prix", [], "any", false, false, false, 172), "html", null, true);
            echo " FCFA</h6>
  </div>
</div>
\t\t\t\t
               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                <div class=\"navigation\">
    ";
        // line 179
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["souscategorie"]) || array_key_exists("souscategorie", $context) ? $context["souscategorie"] : (function () { throw new RuntimeError('Variable "souscategorie" does not exist.', 179, $this->source); })()));
        echo "
</div>
                </div>
                </div>
            
        </div>
        
        </div>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
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
\t\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/courBySouscategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 188,  439 => 187,  428 => 179,  425 => 178,  413 => 172,  400 => 162,  393 => 158,  389 => 157,  386 => 156,  382 => 155,  373 => 148,  361 => 145,  357 => 144,  347 => 136,  337 => 135,  320 => 127,  314 => 123,  202 => 13,  192 => 12,  174 => 9,  156 => 8,  138 => 7,  120 => 6,  102 => 5,  84 => 4,  66 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'cours/allCours.html.twig' %}
    {% block fonctionnalites %}{% endblock %}
\t{% block campagne %}{% endblock %}
\t{% block categories %}{% endblock %}
\t{% block tabs %}{% endblock %}
\t{% block share %}{% endblock %}
\t{% block section %}{% endblock %}
\t{% block temoignages  %}{% endblock %}
    

\t{% block background %}
    <style>
    .slider{
        background:#96bf31;
        height:150px;
    }
    ul.breadcrumb {
\tpadding: 30px 16px;
\tlist-style: none !important;
\tbackground-color: #96bf31;
\t}
\tul.breadcrumb li {
\tdisplay: inline;
\tfont-size: 11px;
\ttext-transform: uppercase;
\tfont-family:ubuntu;
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
    h1{
\tcolor: #ffffff !important;\t
\tmargin-top:50px;
    font-family:ubuntu;
    font-size: 2.5rem;
    line-height: 1.35em;
\t}
    h5{
    color: #ffffff !important; 
    font-family:ubuntu;
    margin-bottom: 10px;
    font-size: 1.2rem;
        line-height: 1.35em; 
    }
    .widget .course_cat_nav {
    background: #414;
    color: #FFF;
    border-radius: 4px;
    overflow: hidden;
    clear: both;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.widget .course_cat_nav ul li a {
    color:#fff;    
    padding: 18px 24px;
    font-size: 11px;
    line-height: 1.5;
    font-weight: 600;
    display: inline-block;
    width: 100%;
    text-transform: uppercase;
}
a, a:active, a:focus, a:hover {
    text-decoration: none;  
}
.widget .course_cat_nav ul li a span {
    float: right;
    font-size: 80%;
    background: #96bf31;
    color: #FFF;
    padding: 2px 7px;
    border-radius: 2px;
}
    .rower{
        margin-top:30px;
    }
    .rowerer{
        padding:50px;
        border-top:1px solid lightgrey;
    }
    .liste{
        margin-top:30px;
    }
    span[id^=\"grade-\"]:hover {
\t\t\t\t\t\topacity: 0.5;
\t\t\t\t}
\t#etoile{
\t\t\t
\t\t\tlist-style-type: none;
\t}
\t#lio{
\t\tcolor:#FFCB10;
\t}
    .diguanter{
        height:100px
    }
    </style>

    <div class=\"main_slider slider\" style=\"height:100px;background:linear-gradient(90deg,#096ea2,#96bf31);\" >
\t\t<div class=\"container fill_height\" style=\"padding-top:25px;\">        
                <h1 style=\"margin-top:-5px;\">{{nomsouscategorie.nom}}</h1>
                
                
           {# <h5>1200+ students enrolled</h5>#}
        <div class=\"row align-items-center fill_height\">
            <div class=\"col\">
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    {% endblock %}
   {% block barrier  %}
    <div class=\"container\" >
    <div class=\"row rower\" style=\"margin-left:100px;\">
    <div class=\"col-lg-3\" >
    <div class=\"widget\" >
        <div class=\"course_cat_nav\" style=\"margin-bottom:80px;\">
        <ul class=\" name\">
        <li style=\"margin-left:17px;\">
        La liste des sous-catégories</li>
        {% for sc in souscategories %}
        \t<li class=\"cat-item cat-item-34\" data-slug=\"technology\"><a href=\"{{ path('souscategorie',{'slug':sc.slug})}}\" title=\"1500+ students enrolled\">{{sc.nom}}<span>3</span></a>
        </li>
        {% endfor %}
        </ul>
        </div>
        </div>
        </div>
            <div class=\"col-lg-9\">
            <div class=\"row\">
          
                {% for sc in souscategorie %}
                <div class=\"card col-lg-3 \" style=\"width:200px\">
                <a href=\"{{path('cour',{'slug':sc.slug} )}}\" class=\"a_image\">
      <img class=\"card-img-top\" src=\"data:image/png;base64,{{ sc.image }}\" alt=\"Card image\">
      </a>
      
    <div class=\"card-body\">
    <h4 class=\"card-title\" style=\"font-size:15px;font-weight:600;\">{{sc.titreCours}}</h4>
    <div class=\"rating\">
\t<div class=\"stars\">
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t</div>
</div>
    <h6 class=\"card-text\" style=\"margin-top:20px;text-align:center;\">{{ sc.prix }} FCFA</h6>
  </div>
</div>
\t\t\t\t
               
                {% endfor %}
                <div class=\"navigation\">
    {{ knp_pagination_render(souscategorie) }}
</div>
                </div>
                </div>
            
        </div>
        
        </div>
    <script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
\t<script src=\"{{asset('js/rate.class.js')}}\"></script>
        <script type=\"text/javascript\">
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
\t\t</script>
{% endblock %}", "cours/courBySouscategorie.html.twig", "/var/www/html/crowdedu/templates/cours/courBySouscategorie.html.twig");
    }
}
