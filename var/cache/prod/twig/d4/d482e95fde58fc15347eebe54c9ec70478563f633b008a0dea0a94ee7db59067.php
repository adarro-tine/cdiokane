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

/* campagne/all.html.twig */
class __TwigTemplate_f1161dbc8044eef1efadb20891a44c5bcbcdc08ce84852a4f03afaf6a4396fff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'temoignages' => [$this, 'block_temoignages'],
            'background' => [$this, 'block_background'],
            'categories' => [$this, 'block_categories'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 3
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
    }

    // line 6
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 7
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 8
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 9
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"container\" style=\"margin-top:100px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">la liste des campagnes</h2>


\t<div class=\"row\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campagnes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 16
            echo "\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "photo", [], "any", false, false, false, 19), "html", null, true);
            echo "\" width=\"350\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>\t
\t\t\t\t\t<h4 style=\"text-align:center;white-space: nowrap;
        font-family: 'Roboto', sans-serif;
\t\tfont-style: normal;color:#95C11E;\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "ville", [], "any", false, false, false, 23), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "pays", [], "any", false, false, false, 23), "html", null, true);
            echo "</h4>\t
\t\t\t\t\t<div class=\"card-body\" style=\"height:105px;padding:0;\">
\t\t\t\t<h5 class=\"card-title titre\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;text-align:center;\">
\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 30), "titreCours", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></h5>
\t\t<h6 style=\"text-align:center;white-space: nowrap;
        font-family: 'Roboto', sans-serif;
\t\tfont-style: normal;
\t\tfont-weight: normal;font-weight:700;color:#053651;\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 34), "prix", [], "any", false, false, false, 34), "html", null, true);
            echo " FCFA</h6>
\t\t<div style=\"border-radius: 6.25rem;height:1px;background-color:#95C11E;\">
\t\t</div>
\t\t<p style=\"padding-left:10px;font-family:'Roboto',sans-serif;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "parcoursEdu", [], "any", false, false, false, 37), 0, 50), "html", null, true);
            echo "...</p>


\t\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campagne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t 
\t\t\t </div>
 ";
    }

    public function getTemplateName()
    {
        return "campagne/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 46,  146 => 37,  140 => 34,  133 => 30,  128 => 28,  118 => 23,  111 => 19,  107 => 18,  103 => 16,  99 => 15,  92 => 10,  88 => 9,  81 => 8,  74 => 7,  67 => 6,  62 => 4,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campagne/all.html.twig", "/var/www/html/crowdedu/templates/campagne/all.html.twig");
    }
}
