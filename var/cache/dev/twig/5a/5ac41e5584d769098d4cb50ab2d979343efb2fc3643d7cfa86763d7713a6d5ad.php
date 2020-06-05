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

/* formation/parcour.html.twig */
class __TwigTemplate_1152e406dc769a556b8b26898e8b2a4c716d72a96658cc91a55e78f1b3eec3f9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'background' => [$this, 'block_background'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'barrier' => [$this, 'block_barrier'],
            'campagne' => [$this, 'block_campagne'],
            'categories' => [$this, 'block_categories'],
            'tabs' => [$this, 'block_tabs'],
            'share' => [$this, 'block_share'],
            'temoignages' => [$this, 'block_temoignages'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/parcour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/parcour.html.twig"));

        $this->parent = $this->loadTemplate("home/index.html.twig", "formation/parcour.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 3
        echo "<style>
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

<div  style=\"background-color:#006DA4;background-size:contain;
height:200px; background-position:fixed;
     background-repeat: no-repeat;margin-top:65px;width:100%;\">
     <div style=\"padding:50px;margin-left:-70px;\">
   <center> <font  style=\"color:#ffffff !important;font-size:27px;vertical-align: inherit;text-align:center\">Étudiez ce programme partout dans le monde et recevez un diplôme de l'Université de Caman entièrement accrédité</font></center>
    
    </div>
     </div>
</div>
</div><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 161
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        // line 162
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-4\"></div>        
        <div class=\"col-lg-8\">
            <font style=\"font-size: 4.5vw;\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 166, $this->source); })()), "titreCours", [], "any", false, false, false, 166), "html", null, true);
        echo "</font><br>
            <font>Cette suite de nouveaux diplômes en ligne de ";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 167, $this->source); })()), "titreCours", [], "any", false, false, false, 167), "html", null, true);
        echo " vous prépare aux
            emplois technologiques du futur.
            Nos diplômes utilisent des approches interactives créatives 
            fournies par Crowdedu, la plus grande plate-forme 
            d'apprentissage en ligne du monde, pour fournir
            des expériences d'apprentissage immersives. Choisissez l'une des sept spécialités pour
            tirer parti de vos intérêts et développer les compétences dont vous avez besoin pour une carrière épanouissante.
            </font>
        <div  style=\"background-color:#006DA4;background-size:contain;
        height:200px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;color:#ffffff !important\">
                <div class=\"container \">
                    <div class=\"row \">
                        <div class=\"col-lg-6\">
                                <dl>
                                    <dt>Modes d'étude:  </dt>      
                                    <dd></dd>

                                    <dt>Durée du programme:</dt>
                                    <dd></dd>

                                    <dt>Dates limite d'inscription:</dt>
                                    <dd></dd>

                                    <dt>Direction academique de:</dt>
                                    <dd></dd>
                                </dl>
                        </div>
                            <div class=\"col-lg-6\"style=\"margin-rigth:-20px;\">
                                <dl >
                                    <dt> <u>En ligne </u></dt>
                                        <dd></dd>

                                    <dt>";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 201, $this->source); })()), "duree", [], "any", false, false, false, 201), "html", null, true);
        echo "</dt>
                                        <dd></dd>

                                    <dt>07 septembre 2020</dt>
                                        <dd></dd><br>
                                    <dt>CAMAN</dt>
                                    
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
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

    // line 220
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        echo " 
<div class=\"container\">
<div  style=\"background-color:#006DA4;background-size:contain;
        height:400px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;color:#ffffff !important\">
                <div class=\"conatiner \">
                    <div class=\"row \">
                        <div class=\"col-lg-4\">
                        <font style=\"vertical-align: inherit;text-align:center;font-size:30px;\">
                            Votre avenir est à portée de main.
                            ";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 232, $this->source); })()), "titreCours", [], "any", false, false, false, 232), "html", null, true);
        echo " vous permet de développer vos compétences grâce à un travail de projet pratique.
                        </font>
                        </div>
                        <div class=\"col-lg-8\" style=\"margin-rigth:-20px;padding-bottom:100px;\">
                                <iframe width=\"700\" height=\"400 \"style=\"margin-left:100px;margin-top:-100px;\"
                            src=\"https://www.youtube.com/embed/tgbNymZ7vqY\">
                                </iframe>
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

    // line 246
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 247
        echo "        <div class=\"container\">
<div  style=\"background-size:contain;
        height:400px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;\">
                <div class=\"container \">
                    <div class=\"row \">
                        
                        <div class=\"col-lg-12\">
                            <font style=\"vertical-align: inherit;font-size: 20px;\">
                                En étudiant ce diplôme, vous:
                            </font>
                            <ul>
                            <li>";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 260, $this->source); })()), "competence", [], "any", false, false, false, 260), "html", null, true);
        echo "</li>
                            </ul>
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

    // line 270
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        // line 271
        echo "<div class=\"container\" style=\"margin-top:-150px\">
    <div class=\"row\"style=\"background-size:contain;background-color:#f3f0ec;
                height:auto;background-repeat: no-repeat;width:100%;\">
    \t<div class=\"container mt-3\">
\t\t\t<!-- Nav tabs -->
\t\t\t<ul class=\"nav nav-tabs tabla\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Programme de cours</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu2\">Avis</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu3\">Enseignant</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu4\">Option d'inscription</a>
\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- Tab panes -->
\t\t<div class=\"tab-content\">
\t\t\t <div id=\"home\" class=\"container tab-pane active\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\" style=\"border:1px solid gainsboro;padding:15px;\">
\t\t\t\t\t\t";
        // line 299
        echo "\t\t\t\t\t\t<p class=\"acceuil\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 299, $this->source); })()), "description", [], "any", false, false, false, 299), "html", null, true);
        echo ".</p><br><br><br>
\t\t\t\t\t\t<div class=\"course_curriculum accordion\">
\t\t\t\t\t\t\t<h3 class=\"heading\">
\t\t\t\t\t\t\t\t<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"course_curriculum accordion\">
\t\t\t\t\t\t\t\t<table class=\"table\">\t\t
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr class=\"course_section show\">
\t\t\t\t\t\t\t\t\t\t\t<td  colspan=\"4\" style=\"color:#686868;font-family:ubuntu\">Section 1: Introduction </td>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 310
        echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 311, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 312
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"chape_lesson show tr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 314
            if ((twig_get_attribute($this->env, $this->source, $context["chap"], "etat", [], "any", false, false, false, 314) == false)) {
                // line 315
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chape-preview\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 316
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "titreChapitre", [], "any", false, false, false, 316), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 318
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "titreChapitre", [], "any", false, false, false, 318), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<center>  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<iframe width=\"700\" height=\"400\" src=\"";
                // line 321
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "video", [], "any", false, false, false, 321), "html", null, true);
                echo "\"></iframe>            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "titreChapitre", [], "any", false, false, false, 326), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"statu\">payant</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 329
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "duration", [], "any", false, false, false, 329), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\" style=\"padding:15px;\">
\t\t\t\t\t\t<div class=\"students\">
\t\t\t\t\t\t\t<i class=\"fas fa-globe-africa\" style=\"font-size:25px;\"></i>
\t\t\t\t\t\t\t<h4 style=\"margin-left:35px;margin-top:-28px;
\t\t\t\t\t\t\tfont-size: 1.25rem;
\t\t\t\t\t\t\tline-height: 1.5rem;
\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\tfont-family:ubuntu;\">chap 100% en ligne</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> 
\t\t
\t\t\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
\t\t\t\t<div class=\"chape_curriculum accordion\">
\t\t\t\t\t<table class=\"table\">\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 354, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 355
            echo "\t\t\t\t\t\t\t<tr class=\"chape_lesson show tr\">
\t\t\t\t\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t\t\t\t\t";
            // line 357
            if ((twig_get_attribute($this->env, $this->source, $context["chap"], "etat", [], "any", false, false, false, 357) == false)) {
                // line 358
                echo "\t\t\t\t\t\t\t\t<div class=\"chape-preview\">
\t\t\t\t\t\t\t\t";
                // line 360
                echo "\t\t\t\t\t\t\t\t<h3>Ce que vous allez apprendre</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 362
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "titreChapitre", [], "any", false, false, false, 362), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t\t\t<center>  
\t\t\t\t\t\t\t\t<div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<iframe width=\"700\" height=\"400\" src=\"";
                // line 366
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "video", [], "any", false, false, false, 366), "html", null, true);
                echo "\"></iframe>            
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t\t\t\t\t";
            } else {
                // line 372
                echo "\t\t\t\t\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "titreChapitre", [], "any", false, false, false, 372), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t\t\t\t\t";
            }
            // line 375
            echo "\t\t\t\t\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "duree", [], "any", false, false, false, 375), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu2\" class=\"container tab-pane fade\"><br>
\t\t\t\t\t\t<h3>Menu 2</h3>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu3\" class=\"container tab-pane fade\"><br>
\t\t\t\t\t\t<h3>Menu 2</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu4\" class=\"container tab-pane fade\"><br>
\t\t\t\t\t\t<h3>Menu 2</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
    </div><br><br>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 400
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        // line 401
        echo "<div class=\"container\">
    <div class=\"row\">
            ";
        // line 406
        echo "\t\t\t
                <div class=\"col-lg-4\">
                    ";
        // line 409
        echo "                            <div class=\"card-body\">
                                ";
        // line 410
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 410, $this->source); })()), "id", [], "any", false, false, false, 410), [], "array", true, true, false, 410)) {
            // line 411
            echo "                                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_ajouterPanier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 411, $this->source); })()), "id", [], "any", false, false, false, 411)]), "html", null, true);
            echo "\" method=\"get\">
                                            <button type=\"submit\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;\">PRENDRE CETTE FORMATION</button>
                                        </form>
                                            ";
        } else {
            // line 415
            echo "                                                <a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_panier");
            echo "\">Déja au panier</a>
                                            ";
        }
        // line 417
        echo "                                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 418
            echo "                                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demarrer");
            echo "\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

                                            ";
        } else {
            // line 421
            echo "                                            <a href=\"#TaskListDialog\" role=\"\" data-toggle=\"\" class=\"\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;padding:18px;color:#000000\">Aide financiére</a>

                                            ";
        }
        // line 424
        echo "                                            <p class=\"card-text prix\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 424, $this->source); })()), "prix", [], "any", false, false, false, 424), "html", null, true);
        echo " CFA pour 10 jours</p>
                                            <ul >
                                                <li class=\"badge\">";
        // line 426
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcour"]) || array_key_exists("parcour", $context) ? $context["parcour"] : (function () { throw new RuntimeError('Variable "parcour" does not exist.', 426, $this->source); })()), "duree", [], "any", false, false, false, 426), "html", null, true);
        echo "</li><i class=\"far fa-clock\"></i><br>
                                                <li class=\"badge\">BADGE DE FORMATION</li><i class=\"far fa-id-badge\"></i>
                                                <li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
                                            </ul>
                                            <a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"style=\"font-size: inherit;\"></i></a>
                                            <a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>                        
\t\t\t\t\t\t\t";
        // line 436
        echo "\t\t\t\t\t\t\t<div class=\"col-lg-4\"></div>
\t\t\t<div class=\"col-lg-4\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><br>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 441
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        // line 442
        echo "                 ";
        // line 477
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 478
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 479
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 486
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
        return "formation/parcour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  793 => 486,  789 => 485,  785 => 484,  781 => 483,  777 => 482,  773 => 481,  769 => 480,  764 => 479,  754 => 478,  744 => 477,  742 => 442,  732 => 441,  718 => 436,  706 => 426,  700 => 424,  695 => 421,  688 => 418,  685 => 417,  679 => 415,  671 => 411,  669 => 410,  666 => 409,  662 => 406,  658 => 401,  648 => 400,  617 => 378,  607 => 375,  600 => 372,  591 => 366,  584 => 362,  580 => 360,  577 => 358,  575 => 357,  571 => 355,  567 => 354,  543 => 332,  533 => 329,  526 => 326,  518 => 321,  512 => 318,  507 => 316,  504 => 315,  502 => 314,  498 => 312,  494 => 311,  491 => 310,  477 => 299,  448 => 271,  438 => 270,  418 => 260,  403 => 247,  393 => 246,  369 => 232,  347 => 221,  329 => 220,  300 => 201,  263 => 167,  259 => 166,  253 => 162,  243 => 161,  76 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/index.html.twig'%}
{% block background %}
<style>
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

<div  style=\"background-color:#006DA4;background-size:contain;
height:200px; background-position:fixed;
     background-repeat: no-repeat;margin-top:65px;width:100%;\">
     <div style=\"padding:50px;margin-left:-70px;\">
   <center> <font  style=\"color:#ffffff !important;font-size:27px;vertical-align: inherit;text-align:center\">Étudiez ce programme partout dans le monde et recevez un diplôme de l'Université de Caman entièrement accrédité</font></center>
    
    </div>
     </div>
</div>
</div><br>
{% endblock %}
{% block fonctionnalites %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-4\"></div>        
        <div class=\"col-lg-8\">
            <font style=\"font-size: 4.5vw;\">{{parcour.titreCours}}</font><br>
            <font>Cette suite de nouveaux diplômes en ligne de {{parcour.titreCours}} vous prépare aux
            emplois technologiques du futur.
            Nos diplômes utilisent des approches interactives créatives 
            fournies par Crowdedu, la plus grande plate-forme 
            d'apprentissage en ligne du monde, pour fournir
            des expériences d'apprentissage immersives. Choisissez l'une des sept spécialités pour
            tirer parti de vos intérêts et développer les compétences dont vous avez besoin pour une carrière épanouissante.
            </font>
        <div  style=\"background-color:#006DA4;background-size:contain;
        height:200px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;color:#ffffff !important\">
                <div class=\"container \">
                    <div class=\"row \">
                        <div class=\"col-lg-6\">
                                <dl>
                                    <dt>Modes d'étude:  </dt>      
                                    <dd></dd>

                                    <dt>Durée du programme:</dt>
                                    <dd></dd>

                                    <dt>Dates limite d'inscription:</dt>
                                    <dd></dd>

                                    <dt>Direction academique de:</dt>
                                    <dd></dd>
                                </dl>
                        </div>
                            <div class=\"col-lg-6\"style=\"margin-rigth:-20px;\">
                                <dl >
                                    <dt> <u>En ligne </u></dt>
                                        <dd></dd>

                                    <dt>{{parcour.duree}}</dt>
                                        <dd></dd>

                                    <dt>07 septembre 2020</dt>
                                        <dd></dd><br>
                                    <dt>CAMAN</dt>
                                    
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
</div>
</div>
</div>
</div>
{% endblock %}
{% block barrier %}{% endblock %}
{% block campagne %} 
<div class=\"container\">
<div  style=\"background-color:#006DA4;background-size:contain;
        height:400px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;color:#ffffff !important\">
                <div class=\"conatiner \">
                    <div class=\"row \">
                        <div class=\"col-lg-4\">
                        <font style=\"vertical-align: inherit;text-align:center;font-size:30px;\">
                            Votre avenir est à portée de main.
                            {{parcour.titreCours}} vous permet de développer vos compétences grâce à un travail de projet pratique.
                        </font>
                        </div>
                        <div class=\"col-lg-8\" style=\"margin-rigth:-20px;padding-bottom:100px;\">
                                <iframe width=\"700\" height=\"400 \"style=\"margin-left:100px;margin-top:-100px;\"
                            src=\"https://www.youtube.com/embed/tgbNymZ7vqY\">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        {% endblock %}
        {% block categories %}
        <div class=\"container\">
<div  style=\"background-size:contain;
        height:400px; background-position:fixed;
            background-repeat: no-repeat;margin-top:65px;width:100%;\">
            <div style=\"padding:50px;margin-left:-20px;position: absolute;\">
                <div class=\"container \">
                    <div class=\"row \">
                        
                        <div class=\"col-lg-12\">
                            <font style=\"vertical-align: inherit;font-size: 20px;\">
                                En étudiant ce diplôme, vous:
                            </font>
                            <ul>
                            <li>{{parcour.competence}}</li>
                            </ul>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
</div>
        {% endblock %}
    {% block tabs %}
<div class=\"container\" style=\"margin-top:-150px\">
    <div class=\"row\"style=\"background-size:contain;background-color:#f3f0ec;
                height:auto;background-repeat: no-repeat;width:100%;\">
    \t<div class=\"container mt-3\">
\t\t\t<!-- Nav tabs -->
\t\t\t<ul class=\"nav nav-tabs tabla\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Programme de cours</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu2\">Avis</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu3\">Enseignant</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu4\">Option d'inscription</a>
\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- Tab panes -->
\t\t<div class=\"tab-content\">
\t\t\t <div id=\"home\" class=\"container tab-pane active\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\" style=\"border:1px solid gainsboro;padding:15px;\">
\t\t\t\t\t\t{# <h6 class=\"acceuil\"><strong >{{parcour.petitDescription}}</strong></h6> #}
\t\t\t\t\t\t<p class=\"acceuil\">{{parcour.description}}.</p><br><br><br>
\t\t\t\t\t\t<div class=\"course_curriculum accordion\">
\t\t\t\t\t\t\t<h3 class=\"heading\">
\t\t\t\t\t\t\t\t<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"course_curriculum accordion\">
\t\t\t\t\t\t\t\t<table class=\"table\">\t\t
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr class=\"course_section show\">
\t\t\t\t\t\t\t\t\t\t\t<td  colspan=\"4\" style=\"color:#686868;font-family:ubuntu\">Section 1: Introduction </td>
\t\t\t\t\t\t\t\t\t\t\t{# <i class=\"fa fa-plus addition\" id=\"hide\"></i> #}
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% for chap in chapitre %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"chape_lesson show tr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chap.etat == false %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chape-preview\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{chap.titreChapitre}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">{{chap.titreChapitre}}</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<center>  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<iframe width=\"700\" height=\"400\" src=\"{{chap.video}}\"></iframe>            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a >{{chap.titreChapitre}}</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"statu\">payant</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> {{chap.duration}}</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\" style=\"padding:15px;\">
\t\t\t\t\t\t<div class=\"students\">
\t\t\t\t\t\t\t<i class=\"fas fa-globe-africa\" style=\"font-size:25px;\"></i>
\t\t\t\t\t\t\t<h4 style=\"margin-left:35px;margin-top:-28px;
\t\t\t\t\t\t\tfont-size: 1.25rem;
\t\t\t\t\t\t\tline-height: 1.5rem;
\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\tfont-family:ubuntu;\">chap 100% en ligne</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> 
\t\t
\t\t\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
\t\t\t\t<div class=\"chape_curriculum accordion\">
\t\t\t\t\t<table class=\"table\">\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for chap in chapitre %}
\t\t\t\t\t\t\t<tr class=\"chape_lesson show tr\">
\t\t\t\t\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t\t\t\t\t{% if chap.etat == false %}
\t\t\t\t\t\t\t\t<div class=\"chape-preview\">
\t\t\t\t\t\t\t\t{#<span>{{chap.titreChapitre}}</span>#}
\t\t\t\t\t\t\t\t<h3>Ce que vous allez apprendre</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">{{chap.titreChapitre}}</a></td>
\t\t\t\t\t\t\t\t<center>  
\t\t\t\t\t\t\t\t<div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<iframe width=\"700\" height=\"400\" src=\"{{chap.video}}\"></iframe>            
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td><a >{{chap.titreChapitre}}</a></td>
\t\t\t\t\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> {{chap.duree}}</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu2\" class=\"container tab-pane fade\"><br>
\t\t\t\t\t\t<h3>Menu 2</h3>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu3\" class=\"container tab-pane fade\"><br>
\t\t\t\t\t\t<h3>Menu 2</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu4\" class=\"container tab-pane fade\"><br>
\t\t\t\t\t\t<h3>Menu 2</h3>
\t\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
    </div><br><br>
        {% endblock %}
        {% block share %}
<div class=\"container\">
    <div class=\"row\">
            {# <div class=\"col-lg-8 \">
\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ parcour.image }}\" width=\"366\" height=\"320.5\" alt=\"\" id=\"tine\">
\t\t\t</div> #}
\t\t\t
                <div class=\"col-lg-4\">
                    {# <div class=\"card cadre\"> #}
                            <div class=\"card-body\">
                                {% if panier[parcour.id] is not defined %}
                                        <form action=\"{{ path('page_ajouterPanier',{'id':parcour.id}) }}\" method=\"get\">
                                            <button type=\"submit\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;\">PRENDRE CETTE FORMATION</button>
                                        </form>
                                            {% else %}
                                                <a class=\"btn btn-success\" href=\"{{ path('page_panier')}}\">Déja au panier</a>
                                            {% endif %}
                                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                            <a href=\"{{path('demarrer')}}\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

                                            {% else %}
                                            <a href=\"#TaskListDialog\" role=\"\" data-toggle=\"\" class=\"\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;padding:18px;color:#000000\">Aide financiére</a>

                                            {% endif %}
                                            <p class=\"card-text prix\">{{parcour.prix}} CFA pour 10 jours</p>
                                            <ul >
                                                <li class=\"badge\">{{parcour.duree}}</li><i class=\"far fa-clock\"></i><br>
                                                <li class=\"badge\">BADGE DE FORMATION</li><i class=\"far fa-id-badge\"></i>
                                                <li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
                                            </ul>
                                            <a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"style=\"font-size: inherit;\"></i></a>
                                            <a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>                        
\t\t\t\t\t\t\t{# </div> #}
\t\t\t\t\t\t\t<div class=\"col-lg-4\"></div>
\t\t\t<div class=\"col-lg-4\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><br>
 {% endblock %}
         {% block temoignages %}
                 {# <div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
        <h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">Obtenez votre diplôme</h2>
\t<div class=\"row\">
\t\t\t\t\t{% for coursSimilaire in coursSimilaire %}
                
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ coursSimilaire.image}}\" width=\"250\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"card-body\" style=\"\">

            <h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
                font-family: ubuntu;
                font-style: normal;
                font-weight: normal;\">
                <a href=\"#\" style=\"text-decoration:none;color: #053651;
                display: block;
                font-weight: 900;\">{{coursSimilaire.titreCours}}</a></a></h5><br>
                <h5 style=\"text-align:center;white-space: nowrap;
                font-family: ubuntu;
                font-style: normal;
                font-weight: normal;color:#053651;\">{{coursSimilaire.prix}} FCFA</h5>

        <a href=\"{{ path('parcour',{'slug':coursSimilaire.slug})}}\" class=\"btn\" style=\";width:100%;background-color:#96bf31;color:white;\">Voir le parcous</a>
            </div>
        
        </div>
        
        </div>
        
            {% endfor %}
\t\t\t</div>
\t\t\t</div> #}
        {% endblock %}
\t\t{% block script %}
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
\t{% endblock %}", "formation/parcour.html.twig", "/home/coumba/Bureau/cdiokane/templates/formation/parcour.html.twig");
    }
}
