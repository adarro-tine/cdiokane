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
       <div style=\"width:100%;height:300px;background:linear-gradient(90deg,#096ea2,#96bf31);\">
       <h1 style=\"padding-top:170px;padding-left:400px;color:white;\">Démarrer votre campagne </h1>
       </div>
\t   <div class=\"row\" style=\"width:1000px;height:200px;margin-left:170px;margin-top:75px;\">
\t   <div class=\"col-md-4\">
\t   <i class=\"far fa-folder-open\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t              <h4 class=\"h_demarrer\">SOUMETTRE</h4>
\t\t\t\t  <div>
<p class=\"p_demarrer\">Déposer gratuitement votre campagne sur crowdedu.</p>\t\t 
  </div>

\t   </div>
\t   <div class=\"col-md-4\">
\t\t\t  <i class=\"fas fa-sync-alt fa-spin\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>


           <h4 class=\"h_demarrer\">PRESENTATION</h4>
\t\t   <div>
\t\t   <p class=\"p_demarrer\">Une bonne présentation est la qualité du succés.</p>
\t\t   </div>
\t\t   <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagne");
        echo "\" class=\"btn\" style=\"margin-left:50px;background-color:#96bf31;color:white;\">Démarrer votre campagne</a>

\t   </div>
\t   <div class=\"col-md-4\">
\t   \t   <i class=\"fas fa-chalkboard-teacher\" style=\"font-size:60px;margin-left:100px;color:#053651;;\"></i>
           <h4 class=\"h_demarrer\">FORMATION</h4>
\t\t   <div>
<p class=\"p_demarrer\">Vous aurez accés à toute la formation dès que l'objectif est atteint.</p>\t\t   </div>
\t   </div>
\t   </div>
\t  <div class=\"row\" style=\"width:1000px;height:500px;margin-left:170px;margin-top:110px;\">
\t  <h1 style=\"padding-top:25px;text-align:center;\">CONSEIL À FAIRE POUR QUE VOTRE CAMPAGNE SOIT FINANCER RAPIDEMENT</h1>
\t   <div class=\"col-md-4\">
\t   <i class=\"fas fa-user-tie\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t              <h4 class=\"h_demarrer\">Etre motivé</h4>
\t\t\t\t  <div>
<p class=\"p_demarrer\">Montrer à vos futurs contributeurs que vous êtes engagé et déterminé.</p>\t\t 
  </div>

\t   </div>
\t   <div class=\"col-md-4\">
\t   \t   <i class=\"fas fa-image\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>

           <h4 class=\"h_demarrer\">Une bonne photo</h4>
\t\t   <div>
\t\t   <p class=\"p_demarrer\">Attirer vos contributeurs avec des images captivantes.</p>
\t\t   </div>

\t   </div>
\t   <div class=\"col-md-4\">
\t\t\t  \t   \t\t\t  <i class=\"fas fa-video\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>

           <h4 class=\"h_demarrer\">Une vidéo</h4>
\t\t   <div>
<p class=\"p_demarrer\">Une vidéo bien expliquée vous permettra d'atteindre votre objectif le plus rapidement possible.</p>\t\t   </div>
\t   </div>
\t   </div>

\t   <div style=\"width:1000px;height:200px;margin-left:170px;margin-top:5px;margin-bottom:100px;\">
\t   \t  <h1 style=\"padding-top:25px;text-align:center;\">VOUS AVEZ BESOIN D'INSPIRATION
</h1>
<h3 style=\"text-align:center;\">Regarder des campagnes qui ont été financées avec succès:
</h3>
\t\t   <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allcampagnes");
        echo "\" class=\"btn\" style=\"margin-left:415px;background-color:#96bf31;color:white;margin-top:20px;\">Voir des campagnes</a>


\t   </div>
               
        
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
        return array (  292 => 80,  246 => 37,  223 => 16,  213 => 15,  202 => 13,  192 => 12,  174 => 9,  156 => 8,  138 => 7,  120 => 6,  102 => 5,  84 => 4,  66 => 3,  43 => 2,);
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
    
       <div style=\"width:100%;height:300px;background:linear-gradient(90deg,#096ea2,#96bf31);\">
       <h1 style=\"padding-top:170px;padding-left:400px;color:white;\">Démarrer votre campagne </h1>
       </div>
\t   <div class=\"row\" style=\"width:1000px;height:200px;margin-left:170px;margin-top:75px;\">
\t   <div class=\"col-md-4\">
\t   <i class=\"far fa-folder-open\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t              <h4 class=\"h_demarrer\">SOUMETTRE</h4>
\t\t\t\t  <div>
<p class=\"p_demarrer\">Déposer gratuitement votre campagne sur crowdedu.</p>\t\t 
  </div>

\t   </div>
\t   <div class=\"col-md-4\">
\t\t\t  <i class=\"fas fa-sync-alt fa-spin\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>


           <h4 class=\"h_demarrer\">PRESENTATION</h4>
\t\t   <div>
\t\t   <p class=\"p_demarrer\">Une bonne présentation est la qualité du succés.</p>
\t\t   </div>
\t\t   <a href=\"{{path('campagne')}}\" class=\"btn\" style=\"margin-left:50px;background-color:#96bf31;color:white;\">Démarrer votre campagne</a>

\t   </div>
\t   <div class=\"col-md-4\">
\t   \t   <i class=\"fas fa-chalkboard-teacher\" style=\"font-size:60px;margin-left:100px;color:#053651;;\"></i>
           <h4 class=\"h_demarrer\">FORMATION</h4>
\t\t   <div>
<p class=\"p_demarrer\">Vous aurez accés à toute la formation dès que l'objectif est atteint.</p>\t\t   </div>
\t   </div>
\t   </div>
\t  <div class=\"row\" style=\"width:1000px;height:500px;margin-left:170px;margin-top:110px;\">
\t  <h1 style=\"padding-top:25px;text-align:center;\">CONSEIL À FAIRE POUR QUE VOTRE CAMPAGNE SOIT FINANCER RAPIDEMENT</h1>
\t   <div class=\"col-md-4\">
\t   <i class=\"fas fa-user-tie\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>
\t              <h4 class=\"h_demarrer\">Etre motivé</h4>
\t\t\t\t  <div>
<p class=\"p_demarrer\">Montrer à vos futurs contributeurs que vous êtes engagé et déterminé.</p>\t\t 
  </div>

\t   </div>
\t   <div class=\"col-md-4\">
\t   \t   <i class=\"fas fa-image\" style=\"font-size:60px;margin-left:120px;color:#96bf31;\"></i>

           <h4 class=\"h_demarrer\">Une bonne photo</h4>
\t\t   <div>
\t\t   <p class=\"p_demarrer\">Attirer vos contributeurs avec des images captivantes.</p>
\t\t   </div>

\t   </div>
\t   <div class=\"col-md-4\">
\t\t\t  \t   \t\t\t  <i class=\"fas fa-video\" style=\"font-size:60px;margin-left:120px;color:#053651;\"></i>

           <h4 class=\"h_demarrer\">Une vidéo</h4>
\t\t   <div>
<p class=\"p_demarrer\">Une vidéo bien expliquée vous permettra d'atteindre votre objectif le plus rapidement possible.</p>\t\t   </div>
\t   </div>
\t   </div>

\t   <div style=\"width:1000px;height:200px;margin-left:170px;margin-top:5px;margin-bottom:100px;\">
\t   \t  <h1 style=\"padding-top:25px;text-align:center;\">VOUS AVEZ BESOIN D'INSPIRATION
</h1>
<h3 style=\"text-align:center;\">Regarder des campagnes qui ont été financées avec succès:
</h3>
\t\t   <a href=\"{{path('allcampagnes')}}\" class=\"btn\" style=\"margin-left:415px;background-color:#96bf31;color:white;margin-top:20px;\">Voir des campagnes</a>


\t   </div>
               
        
{% endblock %}

", "campagne/demarrerCampagne.html.twig", "/var/www/html/CROWDEDU/templates/campagne/demarrerCampagne.html.twig");
    }
}
