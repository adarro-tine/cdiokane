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

/* cours/courBycategorie.html.twig */
class __TwigTemplate_5a4d746851aac51cb653614b23a361f1313ab14f03229ccb4649e691a97670cd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/courBycategorie.html.twig", 2);
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
        echo "    <style>
    .slider{
        background:#96bf31;
        height:150px;
    }
    ul.breadcrumb {
\tpadding: 30px 16px;
\tlist-style: none !important;
\tbackground-color: #96bf31;
\t}
\tul.breadcrumb li {
\tdisplay: inline;
\tfont-size: 11px;
\ttext-transform: uppercase;
\tfont-family:ubuntu;
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
    h1{
\tcolor: #ffffff !important;\t
\tmargin-top:50px;
    font-family:ubuntu;
    font-size: 2.5rem;
    line-height: 1.35em;
\t}
    h5{
    color: #ffffff !important; 
    font-family:ubuntu;
    margin-bottom: 10px;
    font-size: 1.2rem;
        line-height: 1.35em; 
    }
    .widget .course_cat_nav {
    background: #ffffff;
    color: #053651;
    border-radius: 4px;
    overflow: hidden;
    clear: both;
    width:100%;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.widget .course_cat_nav ul li a {
    color:#fff;    
    padding: 18px 24px;
    font-size: 11px;
    line-height: 1.5;
    font-weight: 600;
    display: inline-block;
    width: 100%;
    text-transform: uppercase;
}
a, a:active, a:focus, a:hover {
    text-decoration: none;  
}
.widget .course_cat_nav ul li a span {
    font-size: 80%;
    background: #96bf31;
    color: #FFF;
    padding: 2px 7px;
    border-radius: 2px;
    float:right;
}
    .rower{
        margin-top:30px;
    }
    .rowerer{
        padding:50px;
        border-top:1px solid lightgrey;
    }
    .liste{
        margin-top:30px;
    }
    span[id^=\"grade-\"]:hover {
\t\t\t\t\t\topacity: 0.5;
\t\t\t\t}
\t#etoile{
\t\t\t
\t\t\tlist-style-type: none;
\t}
\t#lio{
\t\tcolor:#FFCB10;
\t}
    .diguanter{
        height:100px
    }
    </style>

    <div class=\"main_slider slider\" style=\"height:100px;background:linear-gradient(90deg,#096ea2,#96bf31);\" >
\t\t<div class=\"container fill_height\" style=\"padding-top:25px;\">        
                <h1 style=\"margin-top:-5px;\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorielibelle"] ?? null), "libelle", [], "any", false, false, false, 124), "html", null, true);
        echo "</h1>
                
                
           ";
        // line 128
        echo "        <div class=\"row align-items-center fill_height\">
            <div class=\"col\">
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
    }

    // line 136
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "    <div class=\"container\" >
    <div class=\"row rower\" style=\"margin-left:100px;\">
    <div class=\"col-lg-3\">
    <div class=\"widget\" style=\"border:1px solid gainsboro;width:267px;\">
        <div class=\"course_cat_nav\">
        <ul class=\" name\" style=\"width:250px;\">
        <li style=\"margin-left:15px;\">
        <div style=\"height:50px;background-color:#96bf31;\"> 
       <p style=\"text-align:center;color:white;padding-top:15px;\"> La liste des catégories</p>
        </div>
        </li>
        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 149
            echo "        \t<li class=\"cat-item cat-item-34\" data-slug=\"technology\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_produitsByCategory", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\" title=\"1500+ students enrolled\" style=\"color:#053651;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 149), "html", null, true);
            echo "<span>
</span></a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        </ul>
        </div>
        </div>
        </div>
            <div class=\"col-lg-9\">
            <div class=\"row\" style=\"margin-left:25px;\">
          
                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ccrs"]) {
            // line 161
            echo "                <div class=\"card col-lg-3 \" style=\"width:200px\">
                <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cour", ["slug" => twig_get_attribute($this->env, $this->source, $context["ccrs"], "slug", [], "any", false, false, false, 162)]), "html", null, true);
            echo "\" class=\"a_image\">
      <img class=\"card-img-top\" src=\"data:image/png;base64,";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ccrs"], "image", [], "any", false, false, false, 163), "html", null, true);
            echo "\" alt=\"Card image\">
      </a>
      
    <div class=\"card-body\">
    <h4 class=\"card-title\" style=\"font-size:15px;font-weight:600;\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ccrs"], "titreCours", [], "any", false, false, false, 167), "html", null, true);
            echo "</h4>
    <div class=\"rating\">
\t<div class=\"stars\">
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t</div>
</div>
    <h6 class=\"card-text\" style=\"margin-top:20px;text-align:center;\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ccrs"], "prix", [], "any", false, false, false, 177), "html", null, true);
            echo " FCFA</h6>
  </div>
</div>
\t\t\t\t
               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ccrs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                <div class=\"navigation\">
    ";
        // line 184
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["categorie"] ?? null));
        echo "
</div>
                </div>
                </div>
            
        </div>
        <div style=\"margin-top:80px;\">
        </div>
        
        </div>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
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
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "cours/courBycategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 195,  332 => 194,  319 => 184,  316 => 183,  304 => 177,  291 => 167,  284 => 163,  280 => 162,  277 => 161,  273 => 160,  264 => 153,  251 => 149,  247 => 148,  234 => 137,  230 => 136,  219 => 128,  213 => 124,  100 => 13,  96 => 12,  90 => 9,  84 => 8,  78 => 7,  72 => 6,  66 => 5,  60 => 4,  54 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/courBycategorie.html.twig", "/var/www/html/CROWDEDU/templates/cours/courBycategorie.html.twig");
    }
}
