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

/* don/index.html.twig */
class __TwigTemplate_849e99af28391cc69f565599208dd3dfd3bb48ec14f0c132fce371f0ce414e6d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'background' => [$this, 'block_background'],
            'barrier' => [$this, 'block_barrier'],
            'categories' => [$this, 'block_categories'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'deal' => [$this, 'block_deal'],
            'share' => [$this, 'block_share'],
            'temoignages' => [$this, 'block_temoignages'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "don/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "



<div class=\"container\" style=\"margin-top:115px;box-shadow: 0px 27px 179px #96bf31;\">
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pixa2.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" style=\"width:100%; height:450px;\">
      </div>
      
    </div>
    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
      <span class=\"sr-only\">Précédent</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
      <span class=\"sr-only\">Suivant</span>
    </a>
  </div>
  <!--  fin div carroussel -->
  <br/><br><br>
  <div class=\"row\" style=\"border-radius:25px;\">
   <div class=\"col-sm-8 panel panel-primary\" style=\"margin:0px;border-radius:25px;\">
        <div class=\"panel-heading\" style=\"background-color:#96bf31; border-color:#96bf31;\">
        <h3 style=\"text-align:center;\">
        \"De même que le fleuve retourne à la mer, le don de l’homme revient vers lui.\"
        </h3>
</div>

     <div class=\"panel-body\">
         <p>
       On sait depuis longtemps que travailler avec du texte lisible et contenant du sens
        est source de distractions, et empêche de se concentrer sur la mise en page elle-même.
         L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'
          est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable 
          avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs 
          de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 
          'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de 
          construction. Plusieurs versions sont apparues avec le temps, parfois par accident, 
          souvent intentionnellement 
       (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
       </p>
       </div>

   </div>
        <div class=\"col-sm-4 panel panel-primary\" style=\"margin:0px;border-radius:25px;\">
        <div class=\"panel-heading\" style=\"background-color:#96bf31; border-color:#96bf31;\">
        <marquee>
        <h2 style=\"text-align:center;\">Soutenir le projet</h2>
        </marquee>
        </div>
\t\t\t\t\t<p>Remplissez le formulaire ci-dessous pour soutenir le projet.</p>
        
\t      \t ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div class=\"form-group \">       
                  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
               <div class=\"form-group \">         
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "montant", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
                <div class=\"form-group\">          
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              <div class=\"form-group\">          
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                   
\t\t   <div class=\"form-group row\">
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-8\">
        <button id=\"review_submit\" type=\"submit\" class=\"btn btn-lg btn-primary\" value=\"Submit\" >envoyer</button>     </div>
       </div>
       ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

       </div>
    </div>  
</div>


";
    }

    // line 87
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 89
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 91
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 93
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 95
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
    }

    // line 97
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 99
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "don/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 99,  197 => 97,  193 => 96,  189 => 95,  183 => 93,  177 => 91,  171 => 89,  165 => 87,  153 => 79,  142 => 71,  136 => 68,  130 => 65,  124 => 62,  119 => 60,  68 => 12,  57 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "don/index.html.twig", "/var/www/html/CROWDEDU/templates/don/index.html.twig");
    }
}
