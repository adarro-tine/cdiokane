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

/* don/donateur.html.twig */
class __TwigTemplate_e580cccc1a4e9bc40cf51d3d8e1c9e0911fcf9c4a97f6879307f32eb64159454 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'temoignages' => [$this, 'block_temoignages'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'background' => [$this, 'block_background'],
            'section' => [$this, 'block_section'],
            'categories' => [$this, 'block_categories'],
            'cat' => [$this, 'block_cat'],
            'cours' => [$this, 'block_cours'],
            'deal' => [$this, 'block_deal'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'options' => [$this, 'block_options'],
            'latest' => [$this, 'block_latest'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "don/donateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<header style=\"position: fixed;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\tbackground: #FFFFFF;
\tz-index: 10;\">
<div style=\"width: 100%;
\theight: 45px;
\tbackground: rgba(0,109,164,1);\">
<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">



";
        // line 17
        echo "
<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
\t\t\t\t <li class=\"account\" style=\"width:150px;margin-right:30px;\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"color:white;margin-top:13px;font-size:10px;text-decoration:none;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>
\t\t\t\t\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<ul class=\"account_selection\" style=\"padding: 8px 0 16px 0;width:230px;box-shadow:0 4px 16px rgba(20,23,28,0.25);margin-top:-17px;
\">
\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "
\t\t\t\t\t\t\t\t\t\t<li style=\"display:flex;margin-left:30px;\">
<img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "photo", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" height=\"120px\" width=\"120px\" id=\"image\" style=\"margin-left:10px;border-radius:38px;\">
</li>
<br><br>
\t\t\t\t\t  <li style=\"margin-top:-90px;\" class=\"menu_item\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "</li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</li>
                  <li class=\"menu_item\" style=\"margin-top:-70px;\"><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" style=\"text-decoration:none;\" >Compte </a></li>
\t\t\t\t\t  <li class=\"menu_item\" style=\"margin-top:-15px;\"><a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" style=\"text-decoration:none;\">Déconnexion</a></li>

\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 45
            echo "<li><a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\">S'inscrire</a></li>

<li><a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\" >Se connecter</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t\t </li>
                
</ul>  

</div>


</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t  </div>
\t\t\t
\t\t</div>


</header>
";
    }

    // line 68
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 69
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 70
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 71
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 72
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "<div style=\"width:1400px;height:930px;background-color:gainsboro;padding-top:114px;margin-top:100px;\">
<div style=\"width:750px;height:795px;margin-left:300px;margin-top:-0.5px;background-color:white;box-shadow: inset 0 0 0.125em #013552, 0 0 2em gray;padding-top:100px;border-top:5px solid #96bf31;\"><br/>
  
<form method=\"POST\" enctype=\"multipart/form-data\"  id=\"demo1-uploadd\" style=\"margin-top:-100px;width:800px;\">
    
      <div class=\"col-lg-9 col-md-1 col-sm-19 col-xs-19\"  style=\"padding-left:15px; padding-right:15px;margin-left:75px; padding-bottom:15px;\">
            
            
\t\t<br/></br/>\t
        
            \t<label>Prénom</label>
                 <div class=\"form-group \">
                  <input name=\"prenom\"  type=\"text\" required  class=\"form-control caret\" placeholder=\"Prénom\"> 
\t\t\t   </div>
\t\t\t<label>Nom</label>

               <div class=\"form-group \">
               <input name=\"nom\"  type=\"text\" required   class=\"form-control caret\" placeholder=\"Nom\">
              </div>
\t\t\t  \t<label>Téléphone</label>

                <div class=\"form-group\">
<input name=\"telephone\"  type=\"text\"    class=\"form-control caret\" required  placeholder=\"Téléphone\">
</div>
\t\t  \t<label>Email</label>

                <div class=\"form-group\">
<input name=\"email\"  type=\"email\"    class=\"form-control caret\" required  placeholder=\"Email\">
</div>
<label>Campagne à soutenir</label>
<div class=\"form-group\">
                     <select name=\"donateurId\" class=\"form-control\" required>

                    <option required>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["campagne"] ?? null), "user", [], "any", false, false, false, 106), "prenom", [], "any", false, false, false, 106), "html", null, true);
        echo "</option>
                </select>
            </div>
              \t<label>Montant</label>

                <div class=\"form-group\" >
<input name=\"montant\" id=\"montant\" type=\"text\"    class=\"form-control caret\" required  style=\"height:70px;\">
</div>
                  <div class=\"card-footer text-muted\" style=\"padding-top:5px;\"><br><br>
        <center>
<div class=\"row\">
                         <div class=\"col-lg-12\" style=\"margin-top:-25px;\">
 <input type=\"submit\" name=\"soutient\" class=\"btn  waves-effect waves-light\" style=\"width:300px;height:60px;background-color:#006DA4;font-size:25px;font-weight:500;color:white;\"  value=\"Continuer\" />
                                                    
                        </div>
                                                </div>          </center>        
        </div>
                </div>
               
                 
            
      </div>
      </form>
      <div style=\"width:260px;height:500px;margin-left:820px;margin-top:-700px;\">
      </div>
       
</div>

</div>

\t

";
    }

    // line 139
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 141
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 143
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 145
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 147
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
    }

    // line 149
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 151
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 153
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 155
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 157
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

<script>
 \$(document).ready(function() {
\t
 });

</script>
";
    }

    public function getTemplateName()
    {
        return "don/donateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 165,  350 => 164,  346 => 163,  342 => 162,  338 => 161,  334 => 160,  330 => 159,  327 => 158,  323 => 157,  317 => 155,  311 => 153,  305 => 151,  299 => 149,  295 => 148,  291 => 147,  285 => 145,  279 => 143,  273 => 141,  267 => 139,  230 => 106,  195 => 73,  191 => 72,  184 => 71,  177 => 70,  170 => 69,  163 => 68,  149 => 60,  136 => 49,  130 => 45,  124 => 42,  120 => 41,  116 => 40,  110 => 39,  104 => 36,  100 => 34,  97 => 33,  80 => 17,  65 => 3,  61 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "don/donateur.html.twig", "/var/www/html/CROWDEDU/templates/don/donateur.html.twig");
    }
}
