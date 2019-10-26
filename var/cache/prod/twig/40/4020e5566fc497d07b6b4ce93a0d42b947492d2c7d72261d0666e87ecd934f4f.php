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

/* registration/edit_photo.html.twig */
class __TwigTemplate_14b4f87d09443d0ee8047c32242857f4f89ddf576f4ddfa3e0b616618b157ac3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'temoignages' => [$this, 'block_temoignages'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "registration/edit_photo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 3
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 4
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 5
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
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
    background-image: none;
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
<div style=\"margin-top:172px;margin-left:250px;margin-bottom:100px;padding-left:150px;box-shadow: inset 0 0 0.25em #013552, 0 0 2em gray;width:800px;height:230px;\">
     <ul class=\"nav nav-tabs nav-stacked\">
         <li class=\"nav-item\">
             <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\" class=\"nav-link active\" id=\"id_profil\">Profil Crowdedu</a>
         </li>
         <li class=\"nav-item\">
             <a href=\"#\" class=\"nav-link\" id=\"id_photo\">Photo profil</a>
         </li>
         <li class=\"nav-item \">
             <a href=\"#\" class=\"nav-link\" id=\"id_securite\">Paramétre de confidentialités</a>
         </li>
     </ul>
     <br>
     <div id=\"formulaire\">
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
    <div class=\"form-row\">
    <div class=\"form-group col-md-8\">          
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control", "name" => "photo", "onchange" => "readURL(this);"]]);
        echo "
    </div>
<div>
    <img id=\"blah\" src=\"http://placehold.it/180\" alt=\"your image\" style=\"max-width:100px;display:block;height:auto;\"/>
    </div>    
     </div>
   <button  type=\"submit\"  value=\"Submit\" style=\"width:250px;height:60px;background-color:#006DA4;font-size:25px;font-weight:500;color:white;margin-left:80px;\">Modifier</button>
   ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    
";
    }

    // line 57
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 60
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 61
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 62
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 64
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 65
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 66
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function() {

         \$(\"#formulaire\").show();
\t\t\$(\"#profil\").hide();
        \$(\"#securite\").hide();
        \$(\"#photo\").hide();
\t\t\t\t
\t\t\$(\"#id_profil\").click(function(){
            console.log(\"bonjour\");
        \$(\"#formulaire\").show();
\t\t\$(\"#profil\").hide();
        \$(\"#securite\").hide();
        \$(\"#photo\").hide();
\t\t});
        \$(\"#id_photo\").click(function(){
        \$(\"#photo\").show();
\t\t\$(\"#formulaire\").hide();
        \$(\"#securite\").hide();
\t\t});
\t\t\$(\"#id_securite\").click(function(){
\t\t\$(\"#profil\").hide();
        \$(\"#photo\").hide();
\t\t});
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    \$('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
\t\t</script>

\t";
    }

    public function getTemplateName()
    {
        return "registration/edit_photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 74,  233 => 73,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  213 => 68,  208 => 67,  204 => 66,  197 => 65,  191 => 64,  185 => 63,  179 => 62,  173 => 61,  167 => 60,  160 => 59,  154 => 58,  148 => 57,  140 => 51,  130 => 44,  124 => 41,  110 => 30,  84 => 6,  80 => 5,  73 => 4,  66 => 3,  59 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/edit_photo.html.twig", "/var/www/html/crowdedu/templates/registration/edit_photo.html.twig");
    }
}
