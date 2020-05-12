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
class __TwigTemplate_d3cc8dc5f91f15067002a4462bf357c615855d0240a753bb5fbf0a36d3ead71d extends \Twig\Template
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
        // line 2
        $context["total"] = 0;
        // line 1
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "panier/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 138
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "        <div  style=\"margin-top:30px; box-shadow: 0px 27px 150px gainsboro;\">
          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 140), "flashbag", [], "any", false, false, false, 140), "get", [0 => "success"], "method", false, false, false, 140));
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
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
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
            $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 170));
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
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span> FCFA</td>
\t\t</tr>
\t\t<tr class=\"order-total\">
\t\t\t<th class=\"theadd\">Total</th>
\t\t\t<td data-title=\"Total\"><span class=\"woocommerce-Price-amount  tabb\"><span class=\"woocommerce-Price-currencySymbol\"></span>";
        // line 187
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
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
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"  class=\"btn button\" style=\"background-color:#96bf31;padding-top:15px;font-size:15px;text-align:center;\">
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
    }

    // line 216
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 217
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 218
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 219
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 220
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 221
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  371 => 221,  365 => 220,  359 => 219,  353 => 218,  347 => 217,  341 => 216,  322 => 200,  315 => 197,  308 => 194,  306 => 193,  297 => 187,  290 => 183,  277 => 172,  271 => 171,  269 => 170,  263 => 167,  259 => 166,  255 => 165,  250 => 163,  245 => 161,  239 => 159,  235 => 158,  220 => 145,  211 => 142,  208 => 141,  204 => 140,  201 => 139,  197 => 138,  60 => 4,  56 => 3,  51 => 1,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "panier/panier.html.twig", "/var/www/html/CROWDEDU/templates/panier/panier.html.twig");
    }
}
