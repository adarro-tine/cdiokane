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

/* formation/index.html.twig */
class __TwigTemplate_d43b6a6b792fa3817e0453f2b18d0eea1beaf57da752b0ebd07a52d32bd60c75 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'categories' => [$this, 'block_categories'],
            'temoignages' => [$this, 'block_temoignages'],
            'background' => [$this, 'block_background'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'share' => [$this, 'block_share'],
            'tabs' => [$this, 'block_tabs'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "formation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
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

    // line 4
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 5
        echo "<div  style=\"background-color:#006DA4;background-size:contain;
height:auto; background-position:fixed;
     background-repeat: no-repeat;margin-top:65px;width:100%;\">
     <div style=\"padding:150px;margin-left:-70px;\">
    <h2 id=\"cours_en_video\" style=\"color:#ffffff !important\">Suivez votre formation en ligne</h2>
    <div style=\"position: absolute;
\t\twidth: 575px;
\t\theight: 1px;
\t\tleft: 140px;
\t\ttop: 230px;
        margin-right:10px;
        background:linear-gradient(90deg);
        color:#ffffff !important\">
        </div>
    </div>
     </div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        // line 25
        echo "<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">Formations gratuites</h2>
\t<div class=\"row\">
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["parcourgratuit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["parcourgratuit"]) {
            // line 29
            echo "\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcourgratuit"], "image", [], "any", false, false, false, 32), "html", null, true);
            echo "\" width=\"250\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"card-body\" style=\"\">
                <h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
                    font-family: ubuntu;
                    font-style: normal;
                    font-weight: normal;\">
                    <a href=\"#\" style=\"text-decoration:none;color: #053651;
                    display: block;
                    font-weight: 900;\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcourgratuit"], "titreCours", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></a></h5><br>
                    <h5 style=\"text-align:center;white-space: nowrap;
                    font-family: ubuntu;
                    font-style: normal;
                    font-weight: normal;color:#053651;\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcourgratuit"], "prix", [], "any", false, false, false, 45), "html", null, true);
            echo " FCFA</h5>
                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcour", ["slug" => twig_get_attribute($this->env, $this->source, $context["parcourgratuit"], "slug", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn\" style=\";width:100%;background-color:#96bf31;color:white;\">Voir le parcous</a>
            </div>
        </div>
        </div>
        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcourgratuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        // line 56
        echo "<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">Obtenez votre diplôme</h2>
\t<div class=\"row\">
\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["formation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 60
            echo "\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "image", [], "any", false, false, false, 63), "html", null, true);
            echo "\" width=\"250\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"card-body\" style=\"\">
                        <h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
                        font-family: ubuntu;
                        font-style: normal;
                        font-weight: normal;\">
                        <a href=\"#\" style=\"text-decoration:none;color: #053651;
                        display: block;
                        font-weight: 900;\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "titreCours", [], "any", false, false, false, 72), "html", null, true);
            echo "</a></a></h5><br>
                        <h5 style=\"text-align:center;white-space: nowrap;
                        font-family: ubuntu;
                        font-style: normal;
                        font-weight: normal;color:#053651;\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "prix", [], "any", false, false, false, 76), "html", null, true);
            echo " FCFA</h5>
                <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcour", ["slug" => twig_get_attribute($this->env, $this->source, $context["formation"], "slug", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" class=\"btn\" style=\";width:100%;background-color:#96bf31;color:white;\">Voir le parcous</a>
            </div>
        </div>
        </div>
        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
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

    // line 88
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 88,  282 => 87,  269 => 83,  257 => 77,  253 => 76,  246 => 72,  233 => 63,  228 => 60,  224 => 59,  219 => 56,  209 => 55,  198 => 52,  186 => 46,  182 => 45,  175 => 41,  162 => 32,  157 => 29,  153 => 28,  148 => 25,  138 => 24,  110 => 5,  100 => 4,  82 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig' %}
{% block categories %}{% endblock %}
{% block temoignages %}{% endblock %}
{% block background %}
<div  style=\"background-color:#006DA4;background-size:contain;
height:auto; background-position:fixed;
     background-repeat: no-repeat;margin-top:65px;width:100%;\">
     <div style=\"padding:150px;margin-left:-70px;\">
    <h2 id=\"cours_en_video\" style=\"color:#ffffff !important\">Suivez votre formation en ligne</h2>
    <div style=\"position: absolute;
\t\twidth: 575px;
\t\theight: 1px;
\t\tleft: 140px;
\t\ttop: 230px;
        margin-right:10px;
        background:linear-gradient(90deg);
        color:#ffffff !important\">
        </div>
    </div>
     </div>
</div>
</div>
{% endblock %}
{% block fonctionnalites %}
<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">Formations gratuites</h2>
\t<div class=\"row\">
\t\t\t\t\t{% for parcourgratuit in parcourgratuit %}
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ parcourgratuit.image}}\" width=\"250\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"card-body\" style=\"\">
                <h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
                    font-family: ubuntu;
                    font-style: normal;
                    font-weight: normal;\">
                    <a href=\"#\" style=\"text-decoration:none;color: #053651;
                    display: block;
                    font-weight: 900;\">{{parcourgratuit.titreCours}}</a></a></h5><br>
                    <h5 style=\"text-align:center;white-space: nowrap;
                    font-family: ubuntu;
                    font-style: normal;
                    font-weight: normal;color:#053651;\">{{parcourgratuit.prix}} FCFA</h5>
                <a href=\"{{ path('parcour',{'slug':parcourgratuit.slug})}}\" class=\"btn\" style=\";width:100%;background-color:#96bf31;color:white;\">Voir le parcous</a>
            </div>
        </div>
        </div>
        
            {% endfor %}
</div>
{% endblock %}
{# {% block barrier %}{% endblock %} #}
{% block campagne %}
<div class=\"container\" style=\"margin-top:100px;margin-bottom:50px;\">
<h2 style=\"font-size: 1.5rem;font-weight: 900;line-height: 2rem;margin-left:10px;margin-top:135px;\">Obtenez votre diplôme</h2>
\t<div class=\"row\">
\t\t\t\t\t{% for formation in formation %}
\t\t\t<div class=\"col-lg-4 cole\" style=\"padding:20px;\">
\t\t\t\t\t<div class=\"card rower  mk\" style=\"width:250px;overflow:hidden;\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/')}}{{ formation.image}}\" width=\"250\" height=\"200\" alt=\"\" id=\"image\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"card-body\" style=\"\">
                        <h5 class=\"card-title titre\" style=\"text-align:center;white-space: nowrap;
                        font-family: ubuntu;
                        font-style: normal;
                        font-weight: normal;\">
                        <a href=\"#\" style=\"text-decoration:none;color: #053651;
                        display: block;
                        font-weight: 900;\">{{formation.titreCours}}</a></a></h5><br>
                        <h5 style=\"text-align:center;white-space: nowrap;
                        font-family: ubuntu;
                        font-style: normal;
                        font-weight: normal;color:#053651;\">{{formation.prix}} FCFA</h5>
                <a href=\"{{ path('parcour',{'slug':formation.slug})}}\" class=\"btn\" style=\";width:100%;background-color:#96bf31;color:white;\">Voir le parcous</a>
            </div>
        </div>
        </div>
        </div>
            {% endfor %}
            
</div>
</div>
{% endblock %}
{% block share %}{% endblock %}
{% block tabs %}{% endblock %}", "formation/index.html.twig", "/home/coumba/Bureau/cdiokane/templates/formation/index.html.twig");
    }
}
