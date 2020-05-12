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
class __TwigTemplate_3a5016cbc902162bcf120bc11f0f91f22c73226fe180e09de36473fa4c402a63 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'categories' => [$this, 'block_categories'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'barrier' => [$this, 'block_barrier'],
            'campagne' => [$this, 'block_campagne'],
            'temoignages' => [$this, 'block_temoignages'],
            'background' => [$this, 'block_background'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/detailcour.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 6
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 7
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 9
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
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
\tfont-family:'Roboto',sans-serif;
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
\tfont-family:'Roboto',sans-serif;
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
\tfont-family:'Roboto',sans-serif;
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
\tfont-family:'Roboto',sans-serif;
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
\t<div class=\"main_slider\" style=\"background:#096ea2;height:560px;\">

\t";
        // line 159
        echo "\t\t<div class=\"container fill_height\">
\t\t\t
\t\t\t\t<h1>";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "titreCours", [], "any", false, false, false, 161), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "universite", [], "any", false, false, false, 161), "nom", [], "any", false, false, false, 161), "html", null, true);
        echo ")</h1>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"product_image\">
\t\t\t\t\t<img src=\"data:image/png;base64,";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "image", [], "any", false, false, false, 166), "html", null, true);
        echo "\" width=\"300\" height=\"450\" alt=\"\" id=\"tine\">

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"card cadre\">
\t\t\t<div class=\"card-body\">
\t\t\t";
        // line 173
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "id", [], "any", false, false, false, 173), [], "array", true, true, false, 173)) {
            // line 174
            echo "\t\t\t <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_ajouterPanier", ["id" => twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "id", [], "any", false, false, false, 174)]), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t<button type=\"submit\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;\">PRENDRE CETTE FORMATION</button>
\t\t\t\t</form>
\t\t\t\t";
        } else {
            // line 178
            echo "                    <a class=\"btn btn-success\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_panier");
            echo "\">Déja au panier</a>
                ";
        }
        // line 180
        echo "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 181
            echo "\t\t\t\t <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demarrer");
            echo "\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

\t\t\t\t ";
        } else {
            // line 184
            echo "\t\t\t\t <a href=\"#TaskListDialog\" role=\"button\" data-toggle=\"modal\" class=\"btn button\" style=\"width:100%; height:60px;font-size: 16px;margin-bottom:5px;background-color:#96bf31;color:white;padding:18px;\">NE PEUT PAS PAYER</a>

";
        }
        // line 187
        echo "\t\t\t\t<p class=\"card-text prix\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "prix", [], "any", false, false, false, 187), "html", null, true);
        echo " CFA pour 10 jours</p>
\t\t\t\t<ul >
\t\t\t\t\t<li class=\"badge\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "duree", [], "any", false, false, false, 189), "html", null, true);
        echo "</li><i class=\"far fa-clock\"></i><br>
\t\t\t\t\t<li class=\"badge\">BADGE DE FORMATION</li><i class=\"far fa-id-badge\"></i>
\t\t\t\t\t<li class=\"badge\">CERTIFICAT DE FORMATION</li><i class=\"fas fa-graduation-cap\"></i>
\t\t\t\t</ul>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-facebook-f\"    style=\"font-size: inherit;\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t</div><br>

\t\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container mt-3\" style=\"margin-bottom:100px;\">
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
\t<div class=\"col-lg-8\" style=\"border:1px solid gainsboro;padding:15px;\">
\t\t<h6 class=\"acceuil\"><strong >";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "petitDescription", [], "any", false, false, false, 229), "html", null, true);
        echo "</strong></h6>
\t\t<p class=\"acceuil\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "description", [], "any", false, false, false, 230), "html", null, true);
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
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "chapitres", [], "any", false, false, false, 243));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 244
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 246
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 246) == false)) {
                // line 247
                echo "\t\t\t\t<div class=\"course-preview\">
\t\t\t\t<span>";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 248), "html", null, true);
                echo "</span>
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 250), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 254), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t";
            } else {
                // line 260
                echo "\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 260), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t";
            }
            // line 263
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 263), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>

\t\t</div>
\t</div>
\t
\t<div class=\"col-lg-4\" style=\"padding:15px;\">
\t\t<div class=\"students\">
\t\t<i class=\"fas fa-globe-africa\" style=\"font-size:25px;\"></i>
\t\t<h4 style=\"margin-left:35px;margin-top:-28px;
\t\tfont-size: 1.25rem;
    line-height: 1.5rem;
    font-weight: bold;
    font-family:ubuntu;\">Cours 100% en ligne</h4>
\t\t</div>
\t</div>
\t

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
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cour"] ?? null), "chapitres", [], "any", false, false, false, 294));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 295
            echo "\t\t\t<tr class=\"course_lesson show tr\">
\t\t\t<td class=\"curriculum-icon\"><i class=\"fa fa-play-circle\"></i></td>
\t\t\t\t";
            // line 297
            if ((twig_get_attribute($this->env, $this->source, $context["cours"], "etat", [], "any", false, false, false, 297) == false)) {
                // line 298
                echo "\t\t\t\t<div class=\"course-preview\">
\t\t\t\t";
                // line 300
                echo "\t\t\t\t<h3>Ce que vous allez apprendre</h3>
\t\t\t\t</div>
\t\t\t\t<td><a href=\"\" style=\"color:#96bf31\" id=\"a_video\" data-toggle=\"modal\" data-target=\"#myModal\">";
                // line 302
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 302), "html", null, true);
                echo "</a></td>
\t\t\t  <center>  
\t\t\t  <div  id=\"myModal\" class=\"modal fade\" role=\"dialog\" style=\"padding-top:150px;\">
\t\t\t  
                <iframe width=\"700\" height=\"400\" src=\"";
                // line 306
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 306), "html", null, true);
                echo "\"></iframe>            
\t\t\t    </div>
\t\t\t\t</center>
\t\t\t\t
\t\t\t\t<td><span class=\"statu\" >gratuit</span> </td>\t\t\t\t
\t\t\t\t";
            } else {
                // line 312
                echo "\t\t\t\t<td><a >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreChapitre", [], "any", false, false, false, 312), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><span class=\"statu\">payant</span> </td>
\t\t\t\t";
            }
            // line 315
            echo "\t\t\t\t<td><span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "duration", [], "any", false, false, false, 315), "html", null, true);
            echo "</span></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
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

    // line 339
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 340
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/rate.class.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 347
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
        return array (  551 => 347,  547 => 346,  543 => 345,  539 => 344,  535 => 343,  531 => 342,  527 => 341,  522 => 340,  518 => 339,  494 => 318,  484 => 315,  477 => 312,  468 => 306,  461 => 302,  457 => 300,  454 => 298,  452 => 297,  448 => 295,  444 => 294,  414 => 266,  404 => 263,  397 => 260,  388 => 254,  381 => 250,  376 => 248,  373 => 247,  371 => 246,  367 => 244,  363 => 243,  347 => 230,  343 => 229,  300 => 189,  294 => 187,  289 => 184,  282 => 181,  279 => 180,  273 => 178,  265 => 174,  263 => 173,  253 => 166,  243 => 161,  239 => 159,  89 => 10,  85 => 9,  78 => 7,  71 => 6,  64 => 5,  58 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/detailcour.html.twig", "/var/www/html/CROWDEDU/templates/cours/detailcour.html.twig");
    }
}
