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

/* panier/panier.html.twig */
class __TwigTemplate_9ac053d46845e4a8e5aababf1c7e44e266a4f021a6f3a690d94d9585e7bb052f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'background' => [$this, 'block_background'],
            'categories' => [$this, 'block_categories'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'barrier' => [$this, 'block_barrier'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        // line 2
        $context["total"] = 0;
        // line 1
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "panier/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 4
        echo "    <style>
    .slider{
        background:#96bf31;
        height:200px;
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
    font-family:'Roboto',sans-serif;
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
\tmargin-top:-30px;
    font-family:'Roboto',sans-serif;
\t}
    h5{
    color: #ffffff !important; 
    font-family:'Roboto',sans-serif;
    margin-bottom: 10px;
    font-size: 1.2rem;
    line-height: 1.35em; 
    }
    .tab{
        color:#053651;
        font-size:14px;
        font-family:'Roboto',sans-serif;
        font-weight:bold;
        border:1px solid gainsboro;
        
    }
    .thead{
       font-size:15px; 
       color:#686868;
       font-family:'Roboto',sans-serif;
       border:1px solid gainsboro;
       
    }
    h2{
    font-family:'Roboto',sans-serif;
    }
    .button{
    background-color:#96bf31;
    color:#fff !important;
    width:300px;
    height:50px;
    font-family: 'Roboto',sans-serif; 
    margin-left:27.5px;
    font-size: 100%;
    line-height: 1;
    cursor: pointer;
    position: relative;
    text-decoration: none;
    overflow: visible;
    font-weight: 700;
    border-radius: 3px;
    left: auto;
    }
   
    #button{
    background:#96bf31;
    color:#fff !important;
    width:250px;
    height:35.5px;
    }
    .delete{    
    display: block;
    font-size: 1.5em;
    height: 1em;
    width: 1em;
    text-align: center;
    line-height: 1;
    border-radius: 100%;
    color: red!important;
    text-decoration: none;
    font-weight: 700;
    border: 0;
    
}
    .delete:hover{
    background:red;
    color:#fff ! important;
}
#a{
    text-decoration: none;
}
th,td{
    color:#053651;
    font-family:'Roboto',sans-serif;

}

span{
    font-family:'Roboto',sans-serif;
    
}

    </style>
    <div class=\"main_slider slider\" style=\"height:100px;background:linear-gradient(90deg,#006DA4,#95C11E);\">
\t\t<div class=\"container fill_height\">
       
                <h1 style=\"padding-top:25px;font-family: 'Roboto',sans-serif; \">Panier</h1>
        <div class=\"row align-items-center fill_height\">
            <div class=\"col\">
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 139
        echo "        <div  style=\"margin-top:30px; box-shadow: 0px 27px 150px gainsboro;\">
          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "session", [], "any", false, false, false, 140), "flashbag", [], "any", false, false, false, 140), "get", [0 => "success"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 141
            echo "                <div class=\"alert alert-success\" id=\"flash\">
                    ";
            // line 142
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            <div class=\"row\" style=\"margin-left:50px;\">           
            <div class=\"col-lg-8\">
            <table class=\"table table-hover\">
                <thead class=\"thead\">
                <tr>
                    <th></th>
                    <th>Images</th>
                    <th>Produits</th>
                    <th>Prix</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody class=\" tab\">
            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 159
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_ajouterPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            echo "\" method=\"get\">                  
                <tr>
                    <td><a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_supprimerPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            echo "\" id=\"a\"><i class=\"delete\">×</i></a></td>

                    <td><img src=\"data:image/png;base64,";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 163), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"\">  
\t\t\t\t\t</td> 
                    <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titreCours", [], "any", false, false, false, 165), "html", null, true);
            echo "</td>
                    <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 166), "html", null, true);
            echo " FCFA</td>
                    <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 167), "html", null, true);
            echo " FCFA</td>
                </tr>
                </form>
                 ";
            // line 170
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 170, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 170));
            // line 171
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                </tbody>
            </table>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"cart-collaterals\">
\t\t\t\t<div class=\"cart_totals \">
\t<h2>Total panier</h2>
\t<table class=\"table table-hover\">
\t\t<tbody>
        <tr class=\"cart-subtotal\">
\t\t\t<th class=\"theadd\">Sous-total</th>
\t\t\t<td data-title=\"Sous-total\"><span class=\"woocommerce-Price-amount  tabb\"><span class=\"woocommerce-Price-currencySymbol\"></span>";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 183, $this->source); })()), "html", null, true);
        echo "</span> FCFA</td>
\t\t</tr>
\t\t<tr class=\"order-total\">
\t\t\t<th class=\"theadd\">Total</th>
\t\t\t<td data-title=\"Total\"><span class=\"woocommerce-Price-amount  tabb\"><span class=\"woocommerce-Price-currencySymbol\"></span>";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 187, $this->source); })()), "html", null, true);
        echo "</span> FCFA</td>
\t\t</tr>
\t</tbody>
    </table>
\t<div class=\"wc-proceed-to-checkout\">
       
\t\t";
        // line 193
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 194
            echo "               <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_commande");
            echo "\" class=\"btn button\" style=\"background-color:#96bf31;padding-top:15px;\">
        Valider la commande</a>
            ";
        } else {
            // line 197
            echo "              <a href=\"#TaskListDialog\" role=\"button\" data-toggle=\"modal\" class=\"btn button\" style=\"background-color:#96bf31;padding-top:15px;font-size:15px;text-align:center;\">
        Vous devez vous connecter pour continuer </a>
        ";
        }
        // line 200
        echo "
       
        </div>
    </div>
\t\t\t</div>
            </div> 
            </div>
            </div>
            <script>
            \$(function() {
        \$('#flash').delay(500).fadeIn('normal', function() {
            \$(this).delay(2500).fadeOut();
        });
        });
            </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 216
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 217
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 221,  447 => 220,  429 => 219,  411 => 218,  393 => 217,  375 => 216,  350 => 200,  345 => 197,  338 => 194,  336 => 193,  327 => 187,  320 => 183,  307 => 172,  301 => 171,  299 => 170,  293 => 167,  289 => 166,  285 => 165,  280 => 163,  275 => 161,  269 => 159,  265 => 158,  250 => 145,  241 => 142,  238 => 141,  234 => 140,  231 => 139,  221 => 138,  78 => 4,  68 => 3,  57 => 1,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig' %}
{% set total = 0 %}
\t{% block background %}
    <style>
    .slider{
        background:#96bf31;
        height:200px;
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
    font-family:'Roboto',sans-serif;
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
\tmargin-top:-30px;
    font-family:'Roboto',sans-serif;
\t}
    h5{
    color: #ffffff !important; 
    font-family:'Roboto',sans-serif;
    margin-bottom: 10px;
    font-size: 1.2rem;
    line-height: 1.35em; 
    }
    .tab{
        color:#053651;
        font-size:14px;
        font-family:'Roboto',sans-serif;
        font-weight:bold;
        border:1px solid gainsboro;
        
    }
    .thead{
       font-size:15px; 
       color:#686868;
       font-family:'Roboto',sans-serif;
       border:1px solid gainsboro;
       
    }
    h2{
    font-family:'Roboto',sans-serif;
    }
    .button{
    background-color:#96bf31;
    color:#fff !important;
    width:300px;
    height:50px;
    font-family: 'Roboto',sans-serif; 
    margin-left:27.5px;
    font-size: 100%;
    line-height: 1;
    cursor: pointer;
    position: relative;
    text-decoration: none;
    overflow: visible;
    font-weight: 700;
    border-radius: 3px;
    left: auto;
    }
   
    #button{
    background:#96bf31;
    color:#fff !important;
    width:250px;
    height:35.5px;
    }
    .delete{    
    display: block;
    font-size: 1.5em;
    height: 1em;
    width: 1em;
    text-align: center;
    line-height: 1;
    border-radius: 100%;
    color: red!important;
    text-decoration: none;
    font-weight: 700;
    border: 0;
    
}
    .delete:hover{
    background:red;
    color:#fff ! important;
}
#a{
    text-decoration: none;
}
th,td{
    color:#053651;
    font-family:'Roboto',sans-serif;

}

span{
    font-family:'Roboto',sans-serif;
    
}

    </style>
    <div class=\"main_slider slider\" style=\"height:100px;background:linear-gradient(90deg,#006DA4,#95C11E);\">
\t\t<div class=\"container fill_height\">
       
                <h1 style=\"padding-top:25px;font-family: 'Roboto',sans-serif; \">Panier</h1>
        <div class=\"row align-items-center fill_height\">
            <div class=\"col\">
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    {% endblock %}
{% block categories %}
        <div  style=\"margin-top:30px; box-shadow: 0px 27px 150px gainsboro;\">
          {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\" id=\"flash\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            <div class=\"row\" style=\"margin-left:50px;\">           
            <div class=\"col-lg-8\">
            <table class=\"table table-hover\">
                <thead class=\"thead\">
                <tr>
                    <th></th>
                    <th>Images</th>
                    <th>Produits</th>
                    <th>Prix</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody class=\" tab\">
            {% for produit in produits %}
            <form action=\"{{ path('page_ajouterPanier',{'id':produit.id}) }}\" method=\"get\">                  
                <tr>
                    <td><a href=\"{{ path('page_supprimerPanier',{'id':produit.id}) }}\" id=\"a\"><i class=\"delete\">×</i></a></td>

                    <td><img src=\"data:image/png;base64,{{ produit.image }}\" width=\"40\" height=\"40\" alt=\"\">  
\t\t\t\t\t</td> 
                    <td>{{produit.titreCours}}</td>
                    <td>{{produit.prix}} FCFA</td>
                    <td>{{produit.prix}} FCFA</td>
                </tr>
                </form>
                 {% set total = total + (produit.prix ) %}
                {% endfor %}
                </tbody>
            </table>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"cart-collaterals\">
\t\t\t\t<div class=\"cart_totals \">
\t<h2>Total panier</h2>
\t<table class=\"table table-hover\">
\t\t<tbody>
        <tr class=\"cart-subtotal\">
\t\t\t<th class=\"theadd\">Sous-total</th>
\t\t\t<td data-title=\"Sous-total\"><span class=\"woocommerce-Price-amount  tabb\"><span class=\"woocommerce-Price-currencySymbol\"></span>{{total}}</span> FCFA</td>
\t\t</tr>
\t\t<tr class=\"order-total\">
\t\t\t<th class=\"theadd\">Total</th>
\t\t\t<td data-title=\"Total\"><span class=\"woocommerce-Price-amount  tabb\"><span class=\"woocommerce-Price-currencySymbol\"></span>{{total}}</span> FCFA</td>
\t\t</tr>
\t</tbody>
    </table>
\t<div class=\"wc-proceed-to-checkout\">
       
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
               <a href=\"{{path('valider_commande')}}\" class=\"btn button\" style=\"background-color:#96bf31;padding-top:15px;\">
        Valider la commande</a>
            {% else %}
              <a href=\"#TaskListDialog\" role=\"button\" data-toggle=\"modal\" class=\"btn button\" style=\"background-color:#96bf31;padding-top:15px;font-size:15px;text-align:center;\">
        Vous devez vous connecter pour continuer </a>
        {% endif %}

       
        </div>
    </div>
\t\t\t</div>
            </div> 
            </div>
            </div>
            <script>
            \$(function() {
        \$('#flash').delay(500).fadeIn('normal', function() {
            \$(this).delay(2500).fadeOut();
        });
        });
            </script>
{% endblock %}
    {% block fonctionnalites %}{% endblock %}
    {% block barrier %}{% endblock %}
    {% block footer %}{% endblock %}
    {% block campagne %}{% endblock %}
    {% block share %}{% endblock %}
    {% block temoignages %}{% endblock %}









\t

\t
    ", "panier/panier.html.twig", "/var/www/html/crowdedu/templates/panier/panier.html.twig");
    }
}
