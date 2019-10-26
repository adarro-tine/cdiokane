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

/* poste/poste_slug.html.twig */
class __TwigTemplate_c1b4a1e6c068135ab0207f1df2d35cae9f40cef875544228cdc1567d805f345d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'background' => [$this, 'block_background'],
            'tabs' => [$this, 'block_tabs'],
            'barrier' => [$this, 'block_barrier'],
            'categories' => [$this, 'block_categories'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "poste/poste_slug.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>
.bg_formateur{
height:550px;
background:linear-gradient(#96bf31,rgba(255, 255,255, 0) 100%, rgba(0, 30, 0)) 100%  no-repeat, url(\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/s4.jpg"), "html", null, true);
        echo "\") 100% 10% no-repeat;
background-position:100% 100%;
}
.btn_submit{
\tcursor: pointer;
\ttext-transform: uppercase;
\tfont-family: \"Montserrat\";
    font-size:  0.975rem;
    font-weight: 700;
    text-align: center;
    line-height: 1.5rem;
\tmargin-left:115px;
\tbackground-color: #053651;
    padding: 9px 11px 7px;
\talign-items: flex-start;
\tcolor:white;
\tborder-style:solid;
\tborder-radius: 4px;
    border-width: 1px;
    border-style: solid;
    width:150px;
\t\t}
.btn_submit:hover{
\tbackground-color:#096ea2;
\tcolor:#ffffff;
}
.btn_postule{
\tdisplay: block;
\twidth: 80%;
\tmargin-bottom: 20px; 
\tmargin-left:60px; 
\tbackground-color:#053651;
\tfont-size: 18px;
    text-align: center;
    padding: 20px 0; 
\tborder-radius: 4px;
\t color:#ffffff;
}
.btn_postule:hover{
\tbackground-color:#096ea2;
\tcolor:#ffffff;
/*<div class=\"info\" style=\"margin-left:500px; padding-top:300px; color:#ffffff;\">
    <h2 style=\"color:#ffffff;\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "role", [], "any", false, false, false, 48), "html", null, true);
        echo "</h2>
</div>*/
}
</style>
<div style=\"background-image:url('";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
                    height:auto; background-position:fixed;
                         background-repeat: no-repeat;margin-top:80px;width:100%;\">
    <div style=\"padding:150px;margin-left:-70px;\">
        <h2 id=\"cours_en_video\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "role", [], "any", false, false, false, 56), "html", null, true);
        echo "</h2>
        ";
        // line 60
        echo "        <div style=\"position: absolute;
                            \t\twidth: 575px;
                            \t\theight: 1px;
                            \t\tleft: 140px;
                            \t\ttop: 230px;
                                    margin-right:10px;
                                    background:linear-gradient(90deg,#006DA4,#95C11E);\"></div>

        <div id=\"Formation_en_ligne_aupr_s_des_\">
            
        </div>


        <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;text-align: left;
                                    \t\t\">
            


        </div>


    </div>


</div></div>




<br>
<div style=\"display:flex;flex-wrap:wrap; border-top:1px solid silver; border-bottom:1px solid silver; padding-bottom:50px;\">
<section style=\"width:850px;margin-left:60px; border-right:1px solid silver; margin-top:40px; margin-top:40px;padding-right:60px;padding-top:20px;\">
<h3 style=\"text-align:center;font-family:'Roboto',sans-serif;\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "role", [], "any", false, false, false, 92), "html", null, true);
        echo "</h3>
<h4 style=\"color:#96bf31;padding-top:15px;\">description du Poste</h4>
<p style=\"padding-top:10px;font-family:'Roboto',sans-serif;\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "description", [], "any", false, false, false, 94), "html", null, true);
        echo "</p><br><br><br>
<center>
<a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_formateur", ["slug" => twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "slug", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\" class=\"btn btn_submit\" style=\"margin:0 auto;\">Postuler</a>
</center>   
</section>
<section style=\"width:400px; margin-top:40px;\">
<a class=\"btn btn_postule\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_formateur", ["slug" => twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "slug", [], "any", false, false, false, 100)]), "html", null, true);
        echo "\">Postuler pour ce Poste </a>

</secton>
</div>


   
";
    }

    // line 109
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 110
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 111
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 112
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 113
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 114
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 115
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "poste/poste_slug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 115,  218 => 114,  212 => 113,  206 => 112,  200 => 111,  194 => 110,  188 => 109,  176 => 100,  169 => 96,  164 => 94,  159 => 92,  125 => 60,  121 => 56,  114 => 52,  107 => 48,  62 => 6,  57 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste/poste_slug.html.twig", "/var/www/html/crowdedu/templates/poste/poste_slug.html.twig");
    }
}
