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

/* panier/index.html.twig */
class __TwigTemplate_3506576170507e69ccccb1e7554f72fc65df69313fc6011e0e747494b77fb505 extends \Twig\Template
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
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li > 
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_panier");
        echo "\">
            <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\" style=\"color:#013552;\"></i>
            <span id=\"checkout_items\" class=\"checkout_items\">
                ";
        // line 7
        if ((($context["produits"] ?? null) == 0)) {
            // line 8
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["produits"] ?? null), "html", null, true);
            echo "
                ";
        } elseif ((        // line 9
($context["produits"] ?? null) == 1)) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["produits"] ?? null), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["produits"] ?? null), "html", null, true);
            echo " 
                ";
        }
        // line 14
        echo "                </span>
            </a>
        </li>
    </ul>
</div> ";
    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  63 => 12,  57 => 10,  55 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "panier/index.html.twig", "/var/www/html/crowdedu/templates/panier/index.html.twig");
    }
}
