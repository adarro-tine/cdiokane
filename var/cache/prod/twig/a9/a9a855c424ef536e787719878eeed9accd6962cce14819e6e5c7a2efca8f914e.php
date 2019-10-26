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

/* campagne/index.html.twig */
class __TwigTemplate_e30b31a809e167c99a5e4830eddd8a4f78a5ddc5a2002056de6b555157d6ddb8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/index.html.twig", 1);
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
        echo "<div style=\"width:1400px;height:1100px;background-color:white;padding-top:114px;\">
<div style=\"width:646px;height:995px;margin-left:350px;margin-top:-0.5px;background-color:white;box-shadow: inset 0 0 0.125em #013552, 0 0 2em gray;padding-top:-4x²0px;\"><br/>
<h4 style=\"text-align:center;font-family:'Roboto',sans-serif;\">Indiquez votre objectif ici</h4><br>
  
<form method=\"POST\" enctype=\"multipart/form-data\"  id=\"demo1-upload\">
    
      <div class=\"col-lg-9 col-md-1 col-sm-19 col-xs-19\"  style=\"padding-left:15px; padding-right:15px;margin-left:75px; padding-bottom:15px;\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "get", [0 => "success"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 81
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "get", [0 => "danger"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 86
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            
\t\t<br/></br/>\t
            \t<label>Téléphone :</label>
                 <div class=\"form-group \">
                  <input name=\"telephone\" id=\"telephone\" type=\"text\" required  class=\"form-control caret\" placeholder=\"Veuillez saisir votre numéro de téléphone\"> 
\t\t\t   </div>
\t\t\t<label>Ville :</label>

               <div class=\"form-group \">
               <input name=\"ville\" id=\"ville\" type=\"text\" required   class=\"form-control caret\" placeholder=\"Entrer le nom de votre ville\">
              </div>
\t\t\t  \t<label>Pays :</label>

                <div class=\"form-group\">
<input name=\"pays\" id=\"pays\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer le nom du pays\">
</div>
\t\t\t\t <label>Photo :</label>

<div class=\"form-group\">
               <input type=\"file\" name=\"photo\" class=\"form-control\" placeholder=\"Choisir une photo\" required>
            </div>
       \t\t\t\t <label>Votre parcours :</label>

<div class=\"form-group res-mg-t-15\">
                    <textarea name=\"parcoursEdu\"  placeholder=\"\" rows=\"2\" placeholder=\"Parler nous de votre histtoire\" class=\"form-control caret\" required>
\t\t\t\t\t</textarea>
                      </div>
\t\t\t\t <label>Formation :</label>

                <div class=\"form-group\">
                     <select name=\"coursid\" class=\"form-control\" required>
                  <option value=\"none\" selected=\"\" disabled=\"\">
                         Selectionnez la formation</option>
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 124
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\" required>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titreCours", [], "any", false, false, false, 124), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </select>
            </div>
\t\t\t\t <label>Attentes :</label>

\t\t\t              <div class=\"form-group\">
<input name=\"attentes\" id=\"attentes\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer vos attentes\">
</div>
\t\t\t
            
\t\t\t\t\t\t\t <label>Motivation :</label>

              <div class=\"form-group res-mg-t-15\">
                    <textarea name=\"motivation\"  placeholder=\"\" rows=\"2\" placeholder=\"Montrer nous votre motivation\" class=\"form-control caret\" required>
\t\t\t\t\t</textarea>
                      </div>
\t\t\t\t\t  \t\t\t\t <label>Perspective :</label>

\t\t\t\t\t  <div class=\"form-group\">
<input name=\"perspective\" id=\"perspective\" type=\"text\"    class=\"form-control caret\" required  placeholder=\"Entrer vos perspectives\">
</div>
              
                  <div class=\"card-footer text-muted\" style=\"padding-top:5px;\"><br><br>
        <center>
<div class=\"row\">
                         <div class=\"col-lg-12\" style=\"margin-top:-25px;\">
 <input type=\"submit\" name=\"ajouter\" class=\"btn  waves-effect waves-light\" style=\"width:400px;height:60px;background-color:#006DA4;font-size:25px;font-weight:500;color:white;\"  value=\"Enregistrer\" />
                                                    
                        </div>
                                                </div>          </center>        
        </div>
                </div>
               
                 
            
      </div>
      </form>
       
</div>

</div>

\t

";
    }

    // line 170
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 172
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 174
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 176
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 178
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "    ";
    }

    // line 180
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 182
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 184
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 186
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 188
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
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
        return "campagne/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 196,  417 => 195,  413 => 194,  409 => 193,  405 => 192,  401 => 191,  397 => 190,  394 => 189,  390 => 188,  384 => 186,  378 => 184,  372 => 182,  366 => 180,  362 => 179,  358 => 178,  352 => 176,  346 => 174,  340 => 172,  334 => 170,  287 => 126,  276 => 124,  272 => 123,  237 => 90,  228 => 87,  225 => 86,  220 => 85,  211 => 82,  208 => 81,  204 => 80,  195 => 73,  191 => 72,  184 => 71,  177 => 70,  170 => 69,  163 => 68,  149 => 60,  136 => 49,  130 => 45,  124 => 42,  120 => 41,  116 => 40,  110 => 39,  104 => 36,  100 => 34,  97 => 33,  80 => 17,  65 => 3,  61 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campagne/index.html.twig", "/var/www/html/crowdedu/templates/campagne/index.html.twig");
    }
}
