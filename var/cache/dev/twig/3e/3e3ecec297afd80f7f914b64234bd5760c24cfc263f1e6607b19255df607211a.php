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

/* admin/list/lister_chapitre.html.twig */
class __TwigTemplate_c7a043770e0a1cf9dba8b96d32ec0b99bbad02bee26c3d1bc91327cb951173f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'row' => [$this, 'block_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/lister_chapitre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/lister_chapitre.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/list/lister_chapitre.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row"));

        // line 4
        echo "     <div class=\"panel\">
                            
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"m-b-30\">
                                            <a type=\"button\"  href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_chapitre");
        echo "\"id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Libelle</th>
                                            <th>Duration</th>
                                             <th>Cour</th>
                                              <th>Etat</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["chapitre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 27
            echo "                                    <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "titreChapitre", [], "any", false, false, false, 28), "html", null, true);
            echo " </td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "duree", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
            echo " </td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chapitre"], "cour", [], "any", false, false, false, 30), "titreCours", [], "any", false, false, false, 30), "html", null, true);
            echo " </td>
                                    ";
            // line 35
            echo "                                    <td>";
            if ((twig_get_attribute($this->env, $this->source, $context["chapitre"], "etat", [], "any", false, false, false, 35) == 1)) {
                // line 36
                echo "                                            Actif
                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["chapitre"], "etat", [], "any", false, false, false, 37) == 0)) {
                // line 38
                echo "                                                Inactif
                                                ";
            }
            // line 39
            echo " </td>
                                    ";
            // line 41
            echo "
                                                            <td class=\"actions\">
                                                            ";
            // line 44
            echo "                                                ";
            // line 46
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_chapitre", ["id" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_chapitre", ["id" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>  
                                            </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/list/lister_chapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 51,  140 => 47,  135 => 46,  133 => 44,  129 => 41,  126 => 39,  122 => 38,  120 => 37,  117 => 36,  114 => 35,  110 => 30,  106 => 29,  102 => 28,  99 => 27,  95 => 26,  76 => 10,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
  {% extends 'admin.html.twig' %}
  {% block row %}
     <div class=\"panel\">
                            
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"m-b-30\">
                                            <a type=\"button\"  href=\"{{path('add_chapitre')}}\"id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Libelle</th>
                                            <th>Duration</th>
                                             <th>Cour</th>
                                              <th>Etat</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                {% for chapitre in chapitre %}
                                    <tr>
                                    <td>{{chapitre.titreChapitre}} </td>
                                    <td>{{chapitre.duree | date ('d-m-Y')}} </td>
                                    <td>{{chapitre.cour.titreCours}} </td>
                                    {# <td><iframe width=\"100\" height=\"50 \"
                                        src=\"{{ dump(chapitre.video)}}\">
                                        </iframe>
                                </td> #}
                                    <td>{% if chapitre.etat == 1 %}
                                            Actif
                                                {% elseif chapitre.etat == 0 %}
                                                Inactif
                                                {% endif %} </td>
                                    {# <td> <img src=\"{{ asset('uploads/')}}{{ categorie.imgC}}\" width=\"40\" height=\"40\"\"></td> #}

                                                            <td class=\"actions\">
                                                            {# <td>{{ user.cour|length }}</td> #}
                                                {# <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a> #}
                                                <a href=\"{{ path('modifier_chapitre', {'id': chapitre.id}) }}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"{{ path('delete_chapitre',{'id':chapitre.id}) }}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>  
                                            </td>
                                            </tr>
                                        {% endfor %}
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

   {% endblock %}", "admin/list/lister_chapitre.html.twig", "/home/coumba/Bureau/cdiokane/templates/admin/list/lister_chapitre.html.twig");
    }
}
