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

/* registration/edit.html.twig */
class __TwigTemplate_8ffa826db7b451bb730f95f71df2f249bec6e876f5fc0212f0b643e83f4b4992 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'temoignages' => [$this, 'block_temoignages'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'barrier' => [$this, 'block_barrier'],
            'background' => [$this, 'block_background'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'options' => [$this, 'block_options'],
            'categories' => [$this, 'block_categories'],
            'section' => [$this, 'block_section'],
            'cours' => [$this, 'block_cours'],
            'cat' => [$this, 'block_cat'],
            'deal' => [$this, 'block_deal'],
            'latest' => [$this, 'block_latest'],
            'campagne' => [$this, 'block_campagne'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "registration/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 3
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 4
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 6
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<style>
.form-control{
  display: block;
    width: 100%;
    height: 44px;
    padding: 10px 12px;
    font-size: 16px;
    line-height: 1.43;
    color: #29303B;
    background-color: #FFF;
    border: 1px solid #CACBCC;
    border-radius: 2px;
    box-shadow: none;
    transition: border-color ease-in-out .08s,box-shadow ease-in-out .08s;
}
.form-group{
  margin-bottom: 15px;
  position: relative;
}
</style>
<div style=\"margin-top:152px;margin-left:250px;margin-bottom:100px;padding-left:150px;width:800px;height:500px;border:1px solid gainsboro;\">
     <ul class=\"nav nav-tabs nav-stacked\" style=\"margin-left:50px;\">
         <li class=\"nav-item\">
             <a href=\"#\" class=\"nav-link active\" id=\"id_profil\">Profil Crowdedu</a>
         </li>
         <li class=\"nav-item\">
             <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_photo", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "slug", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" class=\"nav-link\" id=\"id_photo\">Photo profil</a>
         </li>
         <li class=\"nav-item \">
             <a href=\"#\" class=\"nav-link\" id=\"id_securite\">Confidentialités</a>
         </li>
     </ul>
     <br>
     <div id=\"formulaire\" style=\"margin-left:50px;\">
         <form method=\"POST\" >
           <div class=\"form-row\">
           <div class=\"form-group col-md-8\">
            <label for=\"\">Nom</label>
            <input type=\"text\" name=\"nom\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
        echo "\" class=\"form-control input\" placeholder=\"\" aria-describedby=\"helpId\" >
                </div>
                </div>
                <div class=\"form-row\">
                 <div class=\"form-group col-md-8\">
                  <label for=\"\">Prenom</label>
                  <input type=\"text\" name=\"prenom\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
        echo "\" class=\"form-control input\" placeholder=\"\" aria-describedby=\"helpId\">
                </div>
                </div>
                <div class=\"form-row\">
                 <div class=\"form-group col-md-8\">
                  <label for=\"\">Email</label>
                  <input type=\"text\" name=\"email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "\" class=\"form-control input\" placeholder=\"\" aria-describedby=\"helpId\">
                </div> 
                </div>
                <div class=\"form-row\">
                <div class=\"form-group col-md-8\">
                  <label for=\"\">Username</label>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63), "html", null, true);
        echo "\" class=\"form-control input\" placeholder=\"\" aria-describedby=\"helpId\">
                </div>
                </div>
    <button  type=\"submit\"  value=\"Submit\" name=\"modifier\" style=\"width:250px;height:60px;background-color:#006DA4;font-size:25px;font-weight:500;color:white;margin-left:70px;\">Modifier</button>
                
                </form>
                </div>
                </div>
  
";
    }

    // line 75
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 76
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 77
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 78
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 79
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 80
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 81
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 82
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 83
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 85
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function() {

        
        });
\t\t</script>

\t";
    }

    public function getTemplateName()
    {
        return "registration/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 93,  253 => 92,  249 => 91,  245 => 90,  241 => 89,  237 => 88,  233 => 87,  228 => 86,  224 => 85,  217 => 83,  211 => 82,  205 => 81,  199 => 80,  193 => 79,  187 => 78,  180 => 77,  174 => 76,  168 => 75,  154 => 63,  145 => 57,  136 => 51,  127 => 45,  112 => 33,  84 => 7,  80 => 6,  73 => 4,  66 => 3,  59 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/edit.html.twig", "/var/www/html/CROWDEDU/templates/registration/edit.html.twig");
    }
}
