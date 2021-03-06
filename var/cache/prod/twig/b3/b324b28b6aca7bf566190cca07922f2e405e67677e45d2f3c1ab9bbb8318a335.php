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
class __TwigTemplate_3b96e55c0bb6d3176499264b6bb717fcfdacda5f8230e63e958fd03e376a9db2 extends \Twig\Template
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
        echo "<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">la liste des campagnes</h2>


\t<div class=\"row\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["campagnes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 16
            echo "                
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:350px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"data:image/png;base64,";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "photo", [], "any", false, false, false, 20), "html", null, true);
            echo "\" width=\"350\" height=\"150\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"card-body\" style=\"height:250px;padding:0;\">

\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:22px;\">
\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 31), "titreCours", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></a></h5>
\t<h6 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;color:#96bf31;padding-top:10px;\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "ville", [], "any", false, false, false, 34), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "pays", [], "any", false, false, false, 34), "html", null, true);
            echo "</h6>
\t <section style=\"margin-left:95px;margin-top:-27px;\">\t<i class=\"fas fa-map-marker-alt\"></i></section>
\t<h5 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;color:#053651;margin-left:220px;padding-top:10px;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 39), "prix", [], "any", false, false, false, 39), "html", null, true);
            echo " FCFA</h5>
\t\t<div style=\"width:100%;height:120px;border-top:1px solid gainsboro;\">
\t\t<p style=\"padding-left:10px;\tfont-family: ubuntu;
\">";
            // line 42
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "motivation", [], "any", false, false, false, 42), 0, 50), "html", null, true);
            echo "...</p>
\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn\" style=\"margin-top:15px;width:100%;background-color:#96bf31;color:white;\">Voir le projet</a>

\t\t</div>




\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campagne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t <div class=\"navigation\" style=\"margin-left:860px;\">
             ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["campagnes"] ?? null));
        echo "
             </div>
\t\t\t 
</div>
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
        return array (  178 => 58,  175 => 57,  155 => 43,  151 => 42,  145 => 39,  135 => 34,  129 => 31,  124 => 29,  112 => 20,  108 => 19,  103 => 16,  99 => 15,  92 => 10,  88 => 9,  81 => 8,  74 => 7,  67 => 6,  62 => 4,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campagne/all.html.twig", "/var/www/html/CROWDEDU/templates/campagne/all.html.twig");
    }
}
