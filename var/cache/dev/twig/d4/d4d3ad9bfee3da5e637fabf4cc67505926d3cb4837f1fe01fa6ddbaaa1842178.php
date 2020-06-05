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

/* admin/list/lister_cours.html.twig */
class __TwigTemplate_b8e08399a6e8046f1b224c3817856fd8bc6562e2dec6d1fa2397ba6faad4b898 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/lister_cours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/lister_cours.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/list/lister_cours.html.twig", 2);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cour");
        echo "\"id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Université</th>
                                            <th>Categorie</th>
                                            <th>Sou-categorie</th>
                                            <th>Prix</th>
                                            <th>Durée</th>
                                            <th>Visibilité</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cour"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 32
            echo "                                    <tr>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "titreCours", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cour"], "universite", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cour"], "categorie", [], "any", false, false, false, 35), "libelle", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cour"], "souscategorie", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
            echo " </td> 
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "<i>Fcfa</i> </td> 
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "duree", [], "any", false, false, false, 38), "html", null, true);
            echo " </td> 
                                    <td> 
                                        ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["cour"], "visibilite", [], "any", false, false, false, 40) == 0)) {
                // line 41
                echo "                                            <i>Gratuit</i>
                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
$context["cour"], "visibilite", [], "any", false, false, false, 42) == 1)) {
                // line 43
                echo "                                                <i>Certifié</i>
                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
$context["cour"], "visibilite", [], "any", false, false, false, 44) == 2)) {
                // line 45
                echo "                                                <i>Diplomé</i>
                                                ";
            }
            // line 47
            echo "                                        </td> 
                                                        <td class=\"actions\">
                                                        ";
            // line 50
            echo "                                            <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                            <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_cour", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cour", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a> 
                                        </td>
                                        </tr>
                                        
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return "admin/list/lister_cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  160 => 53,  156 => 52,  152 => 50,  148 => 47,  144 => 45,  142 => 44,  139 => 43,  137 => 42,  134 => 41,  132 => 40,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  104 => 32,  100 => 31,  76 => 10,  68 => 4,  58 => 3,  35 => 2,);
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
                                            <a type=\"button\"  href=\"{{path('add_cour')}}\"id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Université</th>
                                            <th>Categorie</th>
                                            <th>Sou-categorie</th>
                                            <th>Prix</th>
                                            <th>Durée</th>
                                            <th>Visibilité</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                {% for cour in cour %}
                                    <tr>
                                    <td>{{cour.titreCours}} </td>
                                    <td>{{cour.universite.nom}}</td>
                                    <td>{{cour.categorie.libelle}}</td>
                                    <td>{{cour.souscategorie.nom}} </td> 
                                        <td>{{cour.prix}}<i>Fcfa</i> </td> 
                                        <td>{{cour.duree}} </td> 
                                    <td> 
                                        {% if cour.visibilite == 0 %}
                                            <i>Gratuit</i>
                                                {% elseif cour.visibilite == 1 %}
                                                <i>Certifié</i>
                                                {% elseif cour.visibilite == 2 %}
                                                <i>Diplomé</i>
                                                {% endif %}
                                        </td> 
                                                        <td class=\"actions\">
                                                        {# <td>{{ user.cour|length }}</td> #}
                                            <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                            <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                            <a href=\"{{ path('modifier_cour', {'id': cour.id}) }}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                            <a href=\"{{ path('delete_cour',{'id':cour.id}) }}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a> 
                                        </td>
                                        </tr>
                                        
                                    {% endfor %}
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- end: page -->

                    </div> <!-- end Panel -->

{% endblock %}", "admin/list/lister_cours.html.twig", "/home/coumba/Bureau/cdiokane/templates/admin/list/lister_cours.html.twig");
    }
}
