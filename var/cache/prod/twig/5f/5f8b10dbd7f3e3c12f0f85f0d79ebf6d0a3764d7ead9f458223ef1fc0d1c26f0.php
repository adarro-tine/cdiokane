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

/* cours/search.html.twig */
class __TwigTemplate_a5efb94d024d93b772d44f2a223a29c7895cdeab178b01960d64b9beb43022de extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'options' => [$this, 'block_options'],
            'cours' => [$this, 'block_cours'],
            'barrier' => [$this, 'block_barrier'],
            'section' => [$this, 'block_section'],
            'deal' => [$this, 'block_deal'],
            'latest' => [$this, 'block_latest'],
            'categories' => [$this, 'block_categories'],
            'cat' => [$this, 'block_cat'],
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
        $this->parent = $this->loadTemplate("home/index.html.twig", "cours/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('barrier', $context, $blocks);
        // line 6
        echo "
";
    }

    // line 5
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 8
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 16
            echo "<div class=\"col-lg-4 cole\"style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower animate_image\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cour", ["slug" => twig_get_attribute($this->env, $this->source, $context["r"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "image", [], "any", false, false, false, 19), "html", null, true);
            echo "\" width=\"350\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>\t\t
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t   <h4 class=\"card-title titre\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "titreCours", [], "any", false, false, false, 22), "html", null, true);
            echo "</h4>
\t\t\t\t\t<div class=\"course_block_bottom\">
\t\t\t\t\t<span class=\"fa fa-users ic\">39</span>
\t\t\t\t\t<div class=\"course_price\">
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">CFA</span>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "prix", [], "any", false, false, false, 27), "html", null, true);
            echo "</span><span class=\"subs\"> pour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "duree", [], "any", false, false, false, 27), "html", null, true);
            echo " &#65279;</span>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</div>
\t\t\t\t </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 36
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "cours/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  132 => 27,  124 => 22,  118 => 19,  114 => 18,  110 => 16,  106 => 15,  102 => 14,  96 => 12,  90 => 10,  84 => 8,  77 => 5,  72 => 6,  70 => 5,  66 => 4,  60 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/search.html.twig", "/var/www/html/crowdedu/templates/cours/search.html.twig");
    }
}
