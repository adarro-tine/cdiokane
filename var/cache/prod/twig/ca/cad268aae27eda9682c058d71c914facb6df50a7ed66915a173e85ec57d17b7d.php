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

/* panier/finaliser_commande.html.twig */
class __TwigTemplate_4c8eac339874f730b3b8da696533db1e019fe1a41a8138376be7be0464d666b7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'share' => [$this, 'block_share'],
            'temoignages' => [$this, 'block_temoignages'],
            'campagne' => [$this, 'block_campagne'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'cat' => [$this, 'block_cat'],
            'cours' => [$this, 'block_cours'],
            'background' => [$this, 'block_background'],
            'categories' => [$this, 'block_categories'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "panier/finaliser_commande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
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
    th,td{
    color:#053651;
    font-family:'Roboto',sans-serif;
    }
   span{
    font-family:'Roboto',sans-serif;
}
    </style>
    <div class=\"main_slider slider\"  style=\"height:100px;background:linear-gradient(90deg,#006DA4,#95C11E);\">
\t\t<div class=\"container fill_height\" style=\"padding-top:25px;\">
      
                <h1>Payer votre panier</h1>
        <div class=\"row align-items-center fill_height\">
            <div class=\"col\">
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
    }

    // line 79
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "    <div class=\"container\" style=\"margin-top:25px;margin-bottom:50px;\">

    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t<div class=\"card text-black bg-default\" style=\"box-shadow: 0px 27px 150px gainsboro;\">
          <div style=\"margin-left:200px; padding-top:50px;\">
            <div class=\"form-group\" style=\"width:700px;\"> 
                 ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"width:700px;\">       
                 ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 89), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div> 
                        <div class=\"form-group\" style=\"width:700px;\">       
                 ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 92), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"form-group\" style=\"width:700px;\">       
                 ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 95), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
     </div>

 <center><h2 style=\"color:black;\">Votre commande</h2></center>
 <br><br>
 ";
        // line 103
        echo " <div class=\"row\">           
            <div class=\"col-lg-8\">
            <table class=\"table table-hover\">
                <thead class=\"thead\">
                <tr>
                    <th>Images</th>
                    <th>Produits</th>
                    <th>Prix</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody class=\" tab\">
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 116
            echo "                <tr>
                    <td><img src=\"data:image/png;base64,";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 117), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"\">  
\t\t\t\t\t</td> 
                    <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titreCours", [], "any", false, false, false, 119), "html", null, true);
            echo "</td>
                    <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 120), "html", null, true);
            echo " FCFA</td>
                    <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 121), "html", null, true);
            echo " FCFA</td>

                </tr>
                 ";
            // line 124
            $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 124));
            // line 125
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
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
\t\t\t<th class=\"thead\">Sous-total</th>
\t\t\t<td data-title=\"Sous-total\"><span class=\"woocommerce-Price-amount  tab\"><span class=\"woocommerce-Price-currencySymbol\"> </span>";
        // line 137
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span> FCFA</td>
\t\t</tr>
\t\t<tr class=\"order-total\">
\t\t\t<th class=\"thead\">Total</th>
\t\t\t<td data-title=\"Total\"><span class=\"woocommerce-Price-amount  tab\"><span class=\"woocommerce-Price-currencySymbol\"></span>";
        // line 141
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span> FCFA </td>
\t\t</tr>
\t</tbody>
    </table>
    </div>
\t\t\t</div>\t
  <button class=\"btn\" type=\"submit\" style=\"background-color:#96bf31;color:#ffffff;font-family:'Roboto',sans-serif; width:350px; font-size:20px;height:50px;\">Payer</button> </div>
  </div>
 ";
        // line 149
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "panier/finaliser_commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 149,  281 => 141,  274 => 137,  261 => 126,  255 => 125,  253 => 124,  247 => 121,  243 => 120,  239 => 119,  234 => 117,  231 => 116,  227 => 115,  213 => 103,  203 => 95,  197 => 92,  191 => 89,  185 => 86,  178 => 82,  174 => 80,  170 => 79,  100 => 12,  96 => 11,  90 => 9,  84 => 8,  78 => 7,  72 => 6,  66 => 5,  60 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "panier/finaliser_commande.html.twig", "/var/www/html/crowdedu/templates/panier/finaliser_commande.html.twig");
    }
}
