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

/* cours/resultatrecherche.html.twig */
class __TwigTemplate_d6e864eee313838b3ed6fc29930473e0e21486cccbb032da158943bdd3412981 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produit"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "titreCours", [], "any", false, false, false, 3), "html", null, true);
            echo "
<div class=\"product_image\">
<img src=\"data:image/png;base64,";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "image", [], "any", false, false, false, 5), "html", null, true);
            echo "\" width=\"200\" height=\"150\" alt=\"\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "cours/resultatrecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/resultatrecherche.html.twig", "/var/www/html/crowdedu/templates/cours/resultatrecherche.html.twig");
    }
}
