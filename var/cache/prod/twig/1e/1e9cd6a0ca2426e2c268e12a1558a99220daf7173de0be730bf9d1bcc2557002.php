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

/* campagne/campagneUser.html.twig */
class __TwigTemplate_8ef1d3f057025adc9e4de1cc9ecf3447062c5c868cdd3342e556628f7ade4772 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'temoignages' => [$this, 'block_temoignages'],
            'background' => [$this, 'block_background'],
            'share' => [$this, 'block_share'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'footer' => [$this, 'block_footer'],
            'campagne' => [$this, 'block_campagne'],
            'categories' => [$this, 'block_categories'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/campagneUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 3
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
    }

    // line 6
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 7
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 8
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 9
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 11
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"container\" style=\"margin-left:125px;position:fixed;\">


\t<h1 style=\"font-weight: 700;margin-left:-2px;margin-top:135px;color:#053651;font-family:'Roboto',sans-serif\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "cours", [], "any", false, false, false, 15), "titreCours", [], "any", false, false, false, 15), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "cours", [], "any", false, false, false, 15), "universite", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo ")</h1>
    <div style=\"filter: drop-shadow(0 0 0.75rem gainsboro);\">
    <section style=\"width:700px;height:400px;padding-top:30px;\">
    <img src=\"data:image/png;base64,";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "photo", [], "any", false, false, false, 18), "html", null, true);
        echo "\" width=\"680\" height=\"350\" alt=\"\" ><br><br>
        <h6 style=\"text-align:center;\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "user", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "user", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo " organise cette collecte de fonds pour payer sa formation</h6><br>
        <div style=\"width:310px;height:50px;margin-bottom:100px;border-top:1px solid #96bf31;border-bottom:1px solid #96bf31;margin-left:170px;\">
        ";
        // line 22
        echo "        <h6 style=\"padding-top:15px;font-size:13px;margin-left:8px;\">Date de création : <span style=\"margin-right:5px;\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "date", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
        echo "</span> | <span style=\"margin-left:5px;\"><i class=\"fas fa-bullseye\" style=\"color:#053651;\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "cours", [], "any", false, false, false, 22), "categorie", [], "any", false, false, false, 22), "libelle", [], "any", false, false, false, 22), "html", null, true);
        echo "</span></h6>
        </div>
     
    <div class=\"panel panel-primary\" style=\"margin-top:-60px;\">
    <div class=\"panel-heading\" style=\"background-color:#96bf31;height:60px;border:1px solid #96bf31;text-align:center;padding-top:17px;width:650px;\">Panel Heading</div>
    <div class=\"panel-body\" style=\"border:1px solid gainsboro;font-size:15px;padding:17px; text-align: justify;
  text-justify: inter-word;width:650px;\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "parcoursEdu", [], "any", false, false, false, 28), "html", null, true);
        echo "</div>
  </div>


    </section>
    <section style=\"width:400px;height:1087px;padding-top:30px;background-color:#fff;margin-left:700px;margin-top:-370px;border:1px solid gainsboro;\">
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donateur", ["slug" => twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "pays", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\" class=\"acampagneUser\" >Je soutiens</a>

    <a href=\"#ShareSocialNetworks\" id=\"opip\" role=\"button\" data-toggle=\"modal\" class=\"acampagneUser\" style=\"margin-top:25px;background-color:#fff;color:#053651;border:1px solid #96bf31;\">Partager</a>
    
    </section>
    </div>

\t\t\t 
 </div>
 ";
    }

    // line 44
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "\t<div id=\"ShareSocialNetworks\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"windowTitleLabel\" style=\"width:500px;margin:auto; background-color:white;height:400px;\">
    <div class=\"modal-header\">
        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"150\" height=\"50\" style=\"margin-left:150px;\"/>
    </div>
    <div class=\"modal-body\">
\t\t\t<p style=\"text-align:center;\">Une autre vision de la formation professionnelle</p>
        <h3 style=\"text-align:center;\">Soutenez la campagne </h3>
        <div style=\"width:300;height:70px;border-bottom:1px solid #96bf31;border-top:1px solid #96bf31;margin-top:50px;\">
        <ul style=\"display:flex;flex-wrap:wrap;padding-bottom:15px;padding-top:15px;margin-left:90px;\">
        <li style=\"padding-left:30px;\"><a style=\"width:auto;\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "facebook", [], "any", false, false, false, 54), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-square\" style=\"font-size:36px;color:#3b5998;\"></i></a></li>
        <li style=\"padding-left:30px;\"><a href=\"https://twitter.com/home?status=";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "twitter", [], "any", false, false, false, 55), "html", null, true);
        echo "\"><i class=\"fab fa-twitter-square\" style=\"font-size:36px;color:#00acee;\"></i></a></li>
        <li style=\"padding-left:30px;\"><a href=\"https://www.linkedin.com/shareArticle?mini=true&url=";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "linkedin", [], "any", false, false, false, 56), "html", null, true);
        echo "/&title=&summary=&source=\"><i class=\"fab fa-linkedin\" style=\"font-size:36px;color:#0e76a8;\"></i></a></li>
        <li style=\"padding-left:30px;\"><a><i class=\"fab fa-instagram\" style=\"font-size:36px;color:\"></i></a></li>

        

        </ul>
        
        </div>

    </div>
<div class=\"c-modal-x-out\" style=\"margin-left:450px;\">
  <a class=\"nostyle\" aria-label=\"fermer\" href=\"\" role=\"button\" data-track=\"true\" data-track-app=\"discovery\" data-track-action=\"close\" data-courselenium=\"close-modal-button\" >✕</a>
  </div>
   </div>
 
   </div>
\t <!-- Fin div container -->
\t </div>
\t <!-- aaaaaaaaaaaaa -->

   ";
    }

    public function getTemplateName()
    {
        return "campagne/campagneUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 56,  182 => 55,  178 => 54,  168 => 47,  164 => 45,  160 => 44,  146 => 34,  137 => 28,  125 => 22,  118 => 19,  114 => 18,  106 => 15,  101 => 12,  97 => 11,  90 => 9,  83 => 8,  76 => 7,  69 => 6,  64 => 4,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campagne/campagneUser.html.twig", "/var/www/html/crowdedu/templates/campagne/campagneUser.html.twig");
    }
}
