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

/* campagne/demarrerCampagne.html.twig */
class __TwigTemplate_c2b4d48ba26d1cd19294a48d4c8f22373f7af3fce51cf50d9a1ec1bae4597cc8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campagne/demarrerCampagne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campagne/demarrerCampagne.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/demarrerCampagne.html.twig", 2);
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
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        // line 16
        echo "
\t<div style=\"width:100%;height:300px;background:linear-gradient(90deg,#096ea2,#96bf31);\">
\t<h1 style=\"padding-top:170px;padding-left:400px;color:white;\">Démarrer votre campagne </h1>
\t</div>
\t<div class=\"row\" style=\"width:1000px;height:200px;margin-left:170px;margin-top:75px;\">
\t<div class=\"col-md-4\">
\t<i class=\"far fa-folder-open\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t\t\t\t<h4 class=\"h_demarrer\">SOUMETTRE</h4>
\t\t\t\t<div>
<p class=\"p_demarrer\">Déposer gratuitement votre campagne sur crowdedu.</p>\t\t 
</div>

\t</div>
\t<div class=\"col-md-4\">
\t\t\t<i class=\"fas fa-sync-alt fa-spin\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>


\t\t<h4 class=\"h_demarrer\">PRESENTATION</h4>
\t\t<div>
\t\t<p class=\"p_demarrer\">Une bonne présentation est la qualité du succés.</p>
\t\t</div>
\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagne");
        echo "\" class=\"btn\" style=\"margin-left:50px;background-color:#96bf31;color:white;\">Démarrer votre campagne</a>

\t</div>
\t<div class=\"col-md-4\">
\t\t<i class=\"fas fa-chalkboard-teacher\" style=\"font-size:60px;margin-left:100px;color:#053651;;\"></i>
\t\t<h4 class=\"h_demarrer\">FORMATION</h4>
\t\t<div>
<p class=\"p_demarrer\">Vous aurez accés à toute la formation dès que l'objectif est atteint.</p>\t\t   </div>
\t</div>
\t</div>
\t<div class=\"row\" style=\"width:1000px;height:500px;margin-left:170px;margin-top:110px;\">
\t<h1 style=\"padding-top:25px;text-align:center;\">CONSEIL À FAIRE POUR QUE VOTRE CAMPAGNE SOIT FINANCER RAPIDEMENT</h1>
\t<div class=\"col-md-4\">
\t<i class=\"fas fa-user-tie\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t\t\t\t<h4 class=\"h_demarrer\">Etre motivé</h4>
\t\t\t\t<div>
<p class=\"p_demarrer\">Montrer à vos futurs contributeurs que vous êtes engagé et déterminé.</p>\t\t 
</div>

\t</div>
\t<div class=\"col-md-4\">
\t\t<i class=\"fas fa-image\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>

\t\t<h4 class=\"h_demarrer\">Une bonne photo</h4>
\t\t<div>
\t\t<p class=\"p_demarrer\">Attirer vos contributeurs avec des images captivantes.</p>
\t\t</div>

\t</div>
\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<i class=\"fas fa-video\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>

\t\t<h4 class=\"h_demarrer\">Une vidéo</h4>
\t\t<div>
<p class=\"p_demarrer\">Une vidéo bien expliquée vous permettra d'atteindre votre objectif le plus rapidement possible.</p>\t\t   </div>
\t</div>
\t</div>

\t<div style=\"width:1000px;height:200px;margin-left:170px;margin-top:5px;margin-bottom:100px;\">
\t\t<h1 style=\"padding-top:25px;text-align:center;\">VOUS AVEZ BESOIN D'INSPIRATION
</h1>
<h3 style=\"text-align:center;\">Regarder des campagnes qui ont été financées avec succès:
</h3>
\t\t<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allcampagnes");
        echo "\" class=\"btn\" style=\"margin-left:415px;background-color:#96bf31;color:white;margin-top:20px;\">Voir des campagnes</a>

\t</div>

\t
\t\t\t<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:120px;color:#053651;\">Principales collectes de fonds</h2>
<div class=\"container\" style=\"margin-top:20px;\">

\t<div class=\"row\">
\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campagnes"]) || array_key_exists("campagnes", $context) ? $context["campagnes"] : (function () { throw new RuntimeError('Variable "campagnes" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 90
            echo "                
\t\t\t\t\t";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, $context["campagne"], "id", [], "any", false, false, false, 91) < 4)) {
                // line 92
                echo "\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "photo", [], "any", false, false, false, 95), "html", null, true);
                echo "\" width=\"350\" height=\"150\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"card-body\" style=\"height:210px;padding:0;\">

\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:22px;\">
\t\t<a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 106), "titreCours", [], "any", false, false, false, 106), "html", null, true);
                echo "</a></a></h5>
\t<h6 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;color:#96bf31;padding-top:10px;\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "ville", [], "any", false, false, false, 109), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "pays", [], "any", false, false, false, 109), "html", null, true);
                echo "</h6>
\t <section style=\"margin-left:95px;margin-top:-27px;\">\t<i class=\"fas fa-map-marker-alt\"></i></section>
\t<h5 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;color:#053651;margin-left:220px;padding-top:10px;\">";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 114), "prix", [], "any", false, false, false, 114), "html", null, true);
                echo " FCFA</h5>
\t\t<div style=\"width:100%;height:30px;border-top:1px solid gainsboro;\">
\t\t\t\t<a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 116)]), "html", null, true);
                echo "\" class=\"btn\" style=\"margin-top:37px;width:100%;background-color:#96bf31;color:white;\" id=\"myBtn\">Voir le projet</a>

\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t
        ";
            }
            // line 124
            echo "\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campagne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allcampagnes");
        echo "\" style=\"margin-left:1050px;\">Voir plus</a>
\t\t\t</div>
\t\t\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "campagne/demarrerCampagne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 126,  371 => 124,  360 => 116,  355 => 114,  345 => 109,  339 => 106,  334 => 104,  321 => 95,  317 => 94,  313 => 92,  311 => 91,  308 => 90,  304 => 89,  292 => 80,  246 => 37,  223 => 16,  213 => 15,  202 => 13,  192 => 12,  174 => 9,  156 => 8,  138 => 7,  120 => 6,  102 => 5,  84 => 4,  66 => 3,  43 => 2,);
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
    
    {% endblock %}
    {% block barrier  %}

\t<div style=\"width:100%;height:300px;background:linear-gradient(90deg,#096ea2,#96bf31);\">
\t<h1 style=\"padding-top:170px;padding-left:400px;color:white;\">Démarrer votre campagne </h1>
\t</div>
\t<div class=\"row\" style=\"width:1000px;height:200px;margin-left:170px;margin-top:75px;\">
\t<div class=\"col-md-4\">
\t<i class=\"far fa-folder-open\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t\t\t\t<h4 class=\"h_demarrer\">SOUMETTRE</h4>
\t\t\t\t<div>
<p class=\"p_demarrer\">Déposer gratuitement votre campagne sur crowdedu.</p>\t\t 
</div>

\t</div>
\t<div class=\"col-md-4\">
\t\t\t<i class=\"fas fa-sync-alt fa-spin\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>


\t\t<h4 class=\"h_demarrer\">PRESENTATION</h4>
\t\t<div>
\t\t<p class=\"p_demarrer\">Une bonne présentation est la qualité du succés.</p>
\t\t</div>
\t\t<a href=\"{{path('campagne')}}\" class=\"btn\" style=\"margin-left:50px;background-color:#96bf31;color:white;\">Démarrer votre campagne</a>

\t</div>
\t<div class=\"col-md-4\">
\t\t<i class=\"fas fa-chalkboard-teacher\" style=\"font-size:60px;margin-left:100px;color:#053651;;\"></i>
\t\t<h4 class=\"h_demarrer\">FORMATION</h4>
\t\t<div>
<p class=\"p_demarrer\">Vous aurez accés à toute la formation dès que l'objectif est atteint.</p>\t\t   </div>
\t</div>
\t</div>
\t<div class=\"row\" style=\"width:1000px;height:500px;margin-left:170px;margin-top:110px;\">
\t<h1 style=\"padding-top:25px;text-align:center;\">CONSEIL À FAIRE POUR QUE VOTRE CAMPAGNE SOIT FINANCER RAPIDEMENT</h1>
\t<div class=\"col-md-4\">
\t<i class=\"fas fa-user-tie\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t\t\t\t<h4 class=\"h_demarrer\">Etre motivé</h4>
\t\t\t\t<div>
<p class=\"p_demarrer\">Montrer à vos futurs contributeurs que vous êtes engagé et déterminé.</p>\t\t 
</div>

\t</div>
\t<div class=\"col-md-4\">
\t\t<i class=\"fas fa-image\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>

\t\t<h4 class=\"h_demarrer\">Une bonne photo</h4>
\t\t<div>
\t\t<p class=\"p_demarrer\">Attirer vos contributeurs avec des images captivantes.</p>
\t\t</div>

\t</div>
\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<i class=\"fas fa-video\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>

\t\t<h4 class=\"h_demarrer\">Une vidéo</h4>
\t\t<div>
<p class=\"p_demarrer\">Une vidéo bien expliquée vous permettra d'atteindre votre objectif le plus rapidement possible.</p>\t\t   </div>
\t</div>
\t</div>

\t<div style=\"width:1000px;height:200px;margin-left:170px;margin-top:5px;margin-bottom:100px;\">
\t\t<h1 style=\"padding-top:25px;text-align:center;\">VOUS AVEZ BESOIN D'INSPIRATION
</h1>
<h3 style=\"text-align:center;\">Regarder des campagnes qui ont été financées avec succès:
</h3>
\t\t<a href=\"{{path('allcampagnes')}}\" class=\"btn\" style=\"margin-left:415px;background-color:#96bf31;color:white;margin-top:20px;\">Voir des campagnes</a>

\t</div>

\t
\t\t\t<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:120px;color:#053651;\">Principales collectes de fonds</h2>
<div class=\"container\" style=\"margin-top:20px;\">

\t<div class=\"row\">
\t\t\t\t\t{% for campagne in campagnes %}
                
\t\t\t\t\t{%  if campagne.id < 4 %}
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ campagne.photo }}\" width=\"350\" height=\"150\" alt=\"\" id=\"image\">
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
\t
        {% endif %}
\t\t\t
\t\t\t{% endfor %}
\t\t\t\t\t<a href=\"{{path('allcampagnes')}}\" style=\"margin-left:1050px;\">Voir plus</a>
\t\t\t</div>
\t\t\t</div>
{% endblock %}

", "campagne/demarrerCampagne.html.twig", "/home/coumba/Bureau/cdiokane/templates/campagne/demarrerCampagne.html.twig");
    }
}
