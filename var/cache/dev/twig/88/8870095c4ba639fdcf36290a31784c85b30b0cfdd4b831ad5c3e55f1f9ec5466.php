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
class __TwigTemplate_8d92e4be88a0f77b55dc58296d943a703936073095df8888ddd01aee1f4da3f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campagne/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campagne/all.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "campagne/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        // line 10
        echo "<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">la liste des campagnes</h2>


\t<div class=\"row\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campagnes"]) || array_key_exists("campagnes", $context) ? $context["campagnes"] : (function () { throw new RuntimeError('Variable "campagnes" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 16
            echo "                
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:10px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("campagneUser", ["slug" => twig_get_attribute($this->env, $this->source, $context["campagne"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "photo", [], "any", false, false, false, 20), "html", null, true);
            echo "\" width=\"250\" height=\"100\" alt=\"\" id=\"image\">
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
            echo "</a></a></h5><br>
\t";
            // line 35
            echo "\t ";
            // line 36
            echo "\t<h5 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;color:#053651;padding-top:10px;\">";
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
        // line 53
        echo "\t\t\t\t";
        // line 56
        echo "\t\t\t 
</div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  247 => 56,  245 => 53,  229 => 43,  225 => 42,  219 => 39,  214 => 36,  212 => 35,  208 => 31,  203 => 29,  190 => 20,  186 => 19,  181 => 16,  177 => 15,  170 => 10,  160 => 9,  141 => 8,  122 => 7,  103 => 6,  92 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig'%}
{% block temoignages %} {% endblock %}
{% block background %}

{% endblock %}
{% block categories %} {% endblock %}
{% block barrier %} {% endblock %}
{% block fonctionnalites %} {% endblock %}
{% block campagne %}
<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">la liste des campagnes</h2>


\t<div class=\"row\">
\t\t\t\t\t{% for campagne in campagnes %}
                
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:10px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ campagne.photo}}\" width=\"250\" height=\"100\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"card-body\" style=\"height:250px;padding:0;\">

\t\t\t\t<h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;padding-top:22px;\">
\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\" style=\"text-decoration:none;color: #053651;
    display: block;
    font-weight: 900;\">{{campagne.cours.titreCours}}</a></a></h5><br>
\t{# <h6 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;color:#96bf31;padding-top:10px;\">{{campagne.ville}},{{campagne.pays}}</h6> #}
\t {# <section style=\"margin-left:95px;margin-top:-27px;\"></section> #}
\t<h5 style=\"text-align:center;white-space: nowrap;
\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: normal;color:#053651;padding-top:10px;\">{{campagne.cours.prix}} FCFA</h5>
\t\t<div style=\"width:100%;height:120px;border-top:1px solid gainsboro;\">
\t\t<p style=\"padding-left:10px;\tfont-family: ubuntu;
\">{{campagne.motivation|slice(0,50)}}...</p>
\t\t\t\t<a href=\"{{path('campagneUser',{'slug':campagne.slug})}}\" class=\"btn\" style=\"margin-top:15px;width:100%;background-color:#96bf31;color:white;\">Voir le projet</a>

\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t {% endfor %}
\t\t\t\t{# <div class=\"navigation\" style=\"margin-left:860px;\">
\t\t\t\t{{ knp_pagination_render(campagnes) }}
\t\t\t\t</div> #}
\t\t\t 
</div>
 {% endblock %}





", "campagne/all.html.twig", "/home/coumba/Bureau/cdiokane/templates/campagne/all.html.twig");
    }
}
