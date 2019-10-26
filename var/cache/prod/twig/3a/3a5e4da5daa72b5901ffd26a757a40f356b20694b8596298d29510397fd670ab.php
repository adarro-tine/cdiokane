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

/* cours/detailcour.html.twig */
class __TwigTemplate_2ea95cc09a16e4ee7ecd922da005eba4f931f4e9cb202831f9745b5d8546c17d extends \Twig\Template
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
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'barrier' => [$this, 'block_barrier'],
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
        $this->parent = $this->loadTemplate("home/index.html.twig", "cours/detailcour.html.twig", 1);
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
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 14
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
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
\t\tcolor:#ffffff;
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
\t
\t</style>
\t<div class=\"main_slider\" style=\"background:#006DA4;height:560px;\">

\t";
        // line 164
        echo "\t\t<div class=\"container fill_height\">
\t\t\t
\t\t\t\t<h1>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "titreCours", [], "any", false, false, false, 166), "html", null, true);
        echo "</h1>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "image", [], "any", false, false, false, 171), "html", null, true);
        echo "\" width=\"300\" height=\"450\" alt=\"\" id=\"tine\">

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cadre\">
\t\t\t<div class=\"card-body\">
\t\t\t";
        // line 178
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "id", [], "any", false, false, false, 178), [], "array", true, true, false, 178)) {
            // line 179
            echo "\t\t\t <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_ajouterPanier", ["id" => twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "id", [], "any", false, false, false, 179)]), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t<button type=\"submit\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;\">PRENDRE CETTE FORMATION</button>
\t\t\t\t</form>
\t\t\t\t";
        } else {
            // line 183
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_panier");
            echo "\">Déja au panier</a>
                ";
        }
        // line 185
        echo "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 186
            echo "\t\t\t\t <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagne");
            echo "\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

\t\t\t\t ";
        } else {
            // line 189
            echo "\t\t\t\t <a href=\"#TaskListDialog\" role=\"button\" data-toggle=\"modal\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

";
        }
        // line 192
        echo "\t\t\t\t<p class=\"card-text prix\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "prix", [], "any", false, false, false, 192), "html", null, true);
        echo " CFA pour 10 jours</p>
\t\t\t\t<ul >
\t\t\t\t\t<li class=\"badge\">";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "duree", [], "any", false, false, false, 194), "html", null, true);
        echo "</li><i class=\"far fa-clock\"></i><br>
\t\t\t\t\t<li class=\"badge\">BADGE DE FORMATION</li><i class=\"far fa-id-badge\"></i>
\t\t\t\t\t<li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
\t\t\t\t</ul>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"    style=\"font-size: inherit;\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t</div><br>
\t\t\t\t\t<h2 style=\"color:white;\">";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "universite", [], "any", false, false, false, 203), "nom", [], "any", false, false, false, 203), "html", null, true);
        echo "</h2>

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
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "petitDescription", [], "any", false, false, false, 235), "html", null, true);
        echo "</strong></h6>
\t\t<p class=\"acceuil\">";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "description", [], "any", false, false, false, 236), "html", null, true);
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
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "chapitres", [], "any", false, false, false, 249));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 250
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 252
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 252) == false)) {
                // line 253
                echo "\t\t\t\t<div class=\"course-preview\">
\t\t\t\t<span>";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 254), "html", null, true);
                echo "</span>
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 256
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 256), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 260
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 260), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t";
            } else {
                // line 266
                echo "\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 266), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 269), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
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
\t<div class=\"course_curriculum accordion\">
<table class=\"table\">\t\t
\t<tbody>
\t<tr class=\"course_section show\">
\t\t\t\t
\t\t\t</tr>
\t\t\t";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "chapitres", [], "any", false, false, false, 290));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 291
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 293
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 293) == false)) {
                // line 294
                echo "\t\t\t\t<div class=\"course-preview\">
\t\t\t\t";
                // line 296
                echo "\t\t\t\t<h3>Ce que vous allez apprendre</h3>
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 298), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 302
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 302), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t";
            } else {
                // line 308
                echo "\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 308), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 311), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>

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

    // line 335
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 336
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 343
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
        return "cours/detailcour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 343,  579 => 342,  575 => 341,  571 => 340,  567 => 339,  563 => 338,  559 => 337,  554 => 336,  550 => 335,  526 => 314,  516 => 311,  509 => 308,  500 => 302,  493 => 298,  489 => 296,  486 => 294,  484 => 293,  480 => 291,  476 => 290,  456 => 272,  446 => 269,  439 => 266,  430 => 260,  423 => 256,  418 => 254,  415 => 253,  413 => 252,  409 => 250,  405 => 249,  389 => 236,  385 => 235,  350 => 203,  338 => 194,  332 => 192,  327 => 189,  320 => 186,  317 => 185,  311 => 183,  303 => 179,  301 => 178,  291 => 171,  283 => 166,  279 => 164,  129 => 15,  125 => 14,  118 => 12,  112 => 11,  106 => 10,  100 => 9,  94 => 8,  88 => 7,  82 => 6,  76 => 5,  70 => 4,  64 => 3,  58 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/detailcour.html.twig", "/var/www/html/crowdedu/templates/cours/detailcour.html.twig");
    }
}
