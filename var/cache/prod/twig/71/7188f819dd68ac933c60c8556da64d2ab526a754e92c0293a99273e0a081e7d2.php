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

/* cours/chapitres.html.twig */
class __TwigTemplate_76e1865c737e0e14f9727ae40cd3ec99e22d7431226152ba86ec3cb1dea821c6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'categories' => [$this, 'block_categories'],
            'deal' => [$this, 'block_deal'],
            'options' => [$this, 'block_options'],
            'latest' => [$this, 'block_latest'],
            'newsletter' => [$this, 'block_newsletter'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'cat' => [$this, 'block_cat'],
            'section' => [$this, 'block_section'],
            'cours' => [$this, 'block_cours'],
            'background' => [$this, 'block_background'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("home/index.html.twig", "cours/chapitres.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<style>
\tul.breadcrumb {
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
\th1{
\tcolor: #ffffff !important;\t
\tmargin-top:-30px;
\t}
\t.bp_filled_stars {
\tposition: absolute;
\ttop: 0;
\tcolor: #FFCB10;
\toverflow: hidden;
\tfloat: left;
\tleft: 0;
\t}
\tspan[id^=\"grade-\"]:hover {
\t\t\t\t\t\topacity: 0.5;
\t\t\t\t}
\t#etoile{
\t\t\t
\t\t\tlist-style-type: none;
\t}
\t#lio{
\t\tcolor:#FFCB10;
\t}
\t.button{
\tbackground-color: #96bf31;
\tfont-family:ubuntu;
\tcolor:#053651;
\tbox-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
\twidth: 100%;
\ttext-align: center;
\tborder-radius: 2px;
\tletter-spacing: .1em;
\tposition: relative;
\ttransition: all .3s;
\tz-index: 1;
\tfont-size: 12px;
\tfont-weight: 600;
\toutline: 0;
\t}
\t.button:hover{
\tcolor:#fff;
\t}
\t.prix{
\tfont-family:ubuntu;
\tcolor:#96bf31;
\tfont-size: 14px;
\tpadding-left: 2px;
\tmargin-left:7px;
\tmargin-top:10px;
\ttext-transform: uppercase;
\t}
\t.cadre{
\theight:auto;
\twidth:auto;
\t}
\t.titre{
\theight:20%;
\t}
\t.badge{
\tcolor:#696969;
\tfont-size: 14px;
\tpadding:10px;
\t}
\t.font{
\tfont-size:30px;
\t}
\t.acceuil{
\t\tcolor:#696969;
\t\tfont-family:ubuntu;
\t}
\t.tr{
\t\tfont-size:12px;\t\t
\t}
\t.tr td a {
\t\tcolor:#686868;
\t}
\t.statu{
\t\twidth:100px;
\t\theight:20px;
\t\tfont-size:12px;
\t\tbackground: #70c989;
\t\tpadding: 2px 8px;
\t\tmargin-left: 10px;
\t\tcolor:#fff;
    \tborder-radius: 2px;
\t\tfont-size: 11px;
\t\tfont-weight: 600;
\t\ttext-transform: uppercase;
\t}
\t.tabla{
\t\tpadding: 15px 20px;
\t\tletter-spacing: 1px;\t\t
\t\tfont-size: 11px;
\t\ttext-transform: uppercase;
\t\topacity: .9;
\t\tfont-weight: 600;
\t\t\t
\t}
\t.item  {
\tcolor: #3d3d3d;
\t}
\t.item:hover {
\tcolor:#053651;
\t}
\t.addition{
\t\tmargin-left:700px;
\t\tcolor:#D3D3D3;
\t\tfont-size:32px;
\t}
\t.course-preview{
    display: flex;
    font-size: 18px;
    padding: 16px 64px 16px 16px;
\t}
\t</style>
\t<div class=\"main_slider\" style=\"background:#96bf31;height:800\">
\t\t<div class=\"container fill_height\">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t<li class=\"el\"><a href=\"#\">Accueil</a></li>
\t\t\t\t<li class=\"el\"><a href=\"#\">Cours</a></li>
\t\t\t\t<li class=\"el\"><a href=\"#\">Marketing</a></li>
\t\t\t\t<li class=\"el\"><a href=\"#\">Business</a></li>
\t\t\t\t<li style=\"color:#fff;font-family:ubuntu;\">";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "titreCours", [], "any", false, false, false, 164), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t\t<h1>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "titreCours", [], "any", false, false, false, 166), "html", null, true);
        echo "</h1>
                
\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<ol id=\"etoile\">
\t\t\t\t\t\t\t\t<li class=\"li\" id=\"lio\"> </li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"students\"><i class=\"fa fa-users\" style=\"color:#fff\"></i> 0 PARTICIPANTS</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "image", [], "any", false, false, false, 182), "html", null, true);
        echo "\" width=\"300\" height=\"450\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cadre\">
\t\t\t<div class=\"card-body\">
\t\t\t";
        // line 188
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "id", [], "any", false, false, false, 188), [], "array", true, true, false, 188)) {
            // line 189
            echo "\t\t\t<div style=\"background-color:#96bf31; width:300px; height:60px;\">
                <a href=\"";
            // line 190
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
            echo "\" style=\"font-size:20px;font-weight: 600; padding-left:30px; padding-top:30px; color:white; padding-top:60px;\">VOIRE D'AUTRES COURS</a>
                </div>
\t\t\t\t ";
        } else {
            // line 193
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_panier");
            echo "\">Déja au panier</a>
                ";
        }
        // line 195
        echo "\t\t\t\t";
        // line 196
        echo "\t\t\t\t<p class=\"card-text prix\">CFA ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "prix", [], "any", false, false, false, 196), "html", null, true);
        echo " pour 10 jours</p>
\t\t\t\t<ul >
\t\t\t\t\t<li class=\"badge\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "duree", [], "any", false, false, false, 198), "html", null, true);
        echo "</li> <i class=\"far fa-clock\"></i><br>
\t\t\t\t\t<li class=\"badge\">BADGE DE FORMATION</li><i class=\"fa fa-ribbon\"></i>
\t\t\t\t\t<li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
\t\t\t\t</ul>
\t\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"    style=\"font-size: inherit;\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t</div><br>
\t\t\t<p style=\"color:#fff ! important ;font-family:ubuntu;font-size:18px;\">Formateurs</p>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container mt-3\">
\t<!-- Nav tabs -->
\t<ul class=\"nav nav-tabs tabla\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link active item\" data-toggle=\"tab\" href=\"#home\">Acceuil</a>
\t</li>
\t<li class=\"nav-item \">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu1\">Programme de cours</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu2\">Avis</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu3\">Enseignant</a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link item\" data-toggle=\"tab\" href=\"#menu4\">Option d'inscription</a>
\t</li>
\t</ul>

\t<!-- Tab panes -->
\t<div class=\"tab-content\">
\t<div id=\"home\" class=\"container tab-pane active\"><br>
\t<div class=\"row\">
\t<div class=\"col-lg-8\">
\t\t<h6 class=\"acceuil\"><strong >";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "petitDescription", [], "any", false, false, false, 237), "html", null, true);
        echo "</strong></h6>
\t\t<p class=\"acceuil\">";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "description", [], "any", false, false, false, 238), "html", null, true);
        echo ".</p><br><br><br>
\t\t<div class=\"course_curriculum accordion\">
\t\t\t<h3 class=\"heading\">
<span style=\"font-family:ubuntu;text-transform: uppercase;font-size:16px;\">Programme de Formation</span>
</h3>
<div class=\"course_curriculum accordion\">
<table class=\"table\">\t\t
\t<tbody>
\t<tr class=\"course_section show\">
\t\t\t\t<td  colspan=\"4\" style=\"color:#686868;font-family:ubuntu\">Section 1: Introduction </td>
\t\t\t\t<i class=\"fa fa-plus addition\" id=\"hide\"></i>
\t\t\t\t
\t\t\t</tr>
\t\t\t";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "chapitres", [], "any", false, false, false, 251));
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 252
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t     <td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t <div class=\"course-preview\">
\t\t\t\t <span>";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "titreChapitre", [], "any", false, false, false, 255), "html", null, true);
            echo "</span>
\t\t\t\t </div>
\t\t\t\t <td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "titreChapitre", [], "any", false, false, false, 257), "html", null, true);
            echo "</a></td>
\t\t\t     <center>  
\t\t\t     <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
                 <iframe width=\"700\" height=\"400\" src=\"";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "video", [], "any", false, false, false, 260), "html", null, true);
            echo "\"></iframe>            
\t\t\t     </div>
\t\t\t\t </center>
\t\t\t\t <td><span class=\"statu\" >libre</span> </td>\t\t\t\t
\t\t\t\t <td><span class=\"time\"><i class=\"fa fa-clock-o\"></i>";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "duration", [], "any", false, false, false, 264), "html", null, true);
            echo "</span></td>
\t\t\t\t </tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-4\">
\t\t<div class=\"students\"><i class=\"fa fa-users\"style=\"color:#fff;font-family:ubuntu;\"></i> <b>0 PARTICIPANTS</b></div>
\t</div>
\t\t</div>
\t</div>
\t<div id=\"menu1\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 1</h3>
\t\t<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t</div>
\t<div id=\"menu2\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t<div id=\"menu3\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t<div id=\"menu4\" class=\"container tab-pane fade\"><br>
\t\t<h3>Menu 2</h3>
\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
\t</div>
\t</div>
</div>

\t";
    }

    // line 297
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 298
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
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
\t\t\$(\"#myModal\").hide();
\t\t\$('#a_video').click(function(){
         \$(\"#myModal\").show();
\t\t});
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "cours/chapitres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 305,  486 => 304,  482 => 303,  478 => 302,  474 => 301,  470 => 300,  466 => 299,  461 => 298,  457 => 297,  424 => 267,  415 => 264,  408 => 260,  402 => 257,  397 => 255,  392 => 252,  388 => 251,  372 => 238,  368 => 237,  326 => 198,  320 => 196,  318 => 195,  312 => 193,  306 => 190,  303 => 189,  301 => 188,  292 => 182,  273 => 166,  268 => 164,  114 => 12,  110 => 11,  104 => 10,  98 => 9,  92 => 8,  86 => 7,  80 => 6,  74 => 5,  68 => 4,  62 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/chapitres.html.twig", "/var/www/html/CROWDEDU/templates/cours/chapitres.html.twig");
    }
}
