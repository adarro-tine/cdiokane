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
class __TwigTemplate_a2f49667607844f67af5781a388f022c22c49b5d295703ce533077be203ee530 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/demarrerCampagne.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    
    ";
    }

    // line 15
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  178 => 80,  132 => 37,  109 => 16,  105 => 15,  100 => 13,  96 => 12,  90 => 9,  84 => 8,  78 => 7,  72 => 6,  66 => 5,  60 => 4,  54 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "campagne/demarrerCampagne.html.twig", "/var/www/html/CROWDEDU/templates/campagne/demarrerCampagne.html.twig");
    }
}
