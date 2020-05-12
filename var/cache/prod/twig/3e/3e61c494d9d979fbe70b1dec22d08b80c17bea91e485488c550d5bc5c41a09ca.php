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
class __TwigTemplate_5ec9c385eebcdab2583fecec4a466e188ed1bd34843ce0048e902dc923ea9b54 extends \Twig\Template
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
\tfont-family: 'Roboto',sans-serif;
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

}
</style>
<div style=\"background-image:url('";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
                    height:auto; background-position:fixed;
                         background-repeat: no-repeat;margin-top:80px;width:100%;\">
    <div style=\"padding:150px;margin-left:-70px;\">
        <h2 id=\"cours_en_video\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "role", [], "any", false, false, false, 54), "html", null, true);
        echo "</h2>
        ";
        // line 58
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
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "role", [], "any", false, false, false, 90), "html", null, true);
        echo "</h3>
<h4 style=\"color:#96bf31;padding-top:15px;\">description du Poste</h4>
<p style=\"padding-top:10px;font-family:'Roboto',sans-serif;font-size:16px;\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "description", [], "any", false, false, false, 92), "html", null, true);
        echo "</p><br><br><br>
<center>
<a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_formateur", ["slug" => twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "slug", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\" class=\"btn btn_submit\" style=\"margin:0 auto;\">Postuler</a>
</center>   
</section>
<section style=\"width:400px; margin-top:40px;\">
<a class=\"btn btn_postule\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_formateur", ["slug" => twig_get_attribute($this->env, $this->source, ($context["formateurs"] ?? null), "slug", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">Postuler pour ce Poste </a>

</secton>
</div>


   
";
    }

    // line 107
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 108
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 109
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 110
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 111
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 112
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 113
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
        return array (  219 => 113,  213 => 112,  207 => 111,  201 => 110,  195 => 109,  189 => 108,  183 => 107,  171 => 98,  164 => 94,  159 => 92,  154 => 90,  120 => 58,  116 => 54,  109 => 50,  62 => 6,  57 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste/poste_slug.html.twig", "/var/www/html/CROWDEDU/templates/poste/poste_slug.html.twig");
    }
}
