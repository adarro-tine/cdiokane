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

/* admin/list/list_campagne.html.twig */
class __TwigTemplate_5e8a09a3c9ef1509a5d8e0b76e84f6e0102dc2c549af97e596e605b5a0ae91b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/list_campagne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/list_campagne.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/list/list_campagne.html.twig", 2);
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
                                            ";
        // line 11
        echo "                                        </div>
                                    </div>
                                </div>
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse</th>
                                            <th>Pays</th>
                                            <th>Ville</th>
                                            <th>Téléphone</th>
                                             <th>Cour</th>
                                              ";
        // line 25
        echo "                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["campagne"]);
        foreach ($context['_seq'] as $context["_key"] => $context["campagne"]) {
            // line 31
            echo "                                    <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "user", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            echo " </td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "user", [], "any", false, false, false, 33), "prenom", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "telephone", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
                                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "pays", [], "any", false, false, false, 35), "html", null, true);
            echo " </td>
                                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "ville", [], "any", false, false, false, 36), "html", null, true);
            echo " </td>
                                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campagne"], "telephone", [], "any", false, false, false, 37), "html", null, true);
            echo " </td>
                                                               
                                                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["campagne"], "cours", [], "any", false, false, false, 39), "titreCours", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                                                                    ";
            // line 41
            echo "                                                            <td class=\"actions\">
                                                            ";
            // line 43
            echo "                                                ";
            // line 45
            echo "                                                ";
            // line 46
            echo "                                                ";
            // line 47
            echo "                                            </td>
                                            </tr>
                                           
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campagne'], $context['_parent'], $context['loop']);
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
        return "admin/list/list_campagne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  143 => 47,  141 => 46,  139 => 45,  137 => 43,  134 => 41,  130 => 39,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  102 => 31,  98 => 30,  91 => 25,  76 => 11,  68 => 4,  58 => 3,  35 => 2,);
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
                                            {# <a type=\"button\"  href=\"{{path('add_commande')}}\"id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Ajouter <i class=\"fa fa-plus\"></i></a> #}
                                        </div>
                                    </div>
                                </div>
                                <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse</th>
                                            <th>Pays</th>
                                            <th>Ville</th>
                                            <th>Téléphone</th>
                                             <th>Cour</th>
                                              {# <th>statut</th> #}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                {% for campagne in campagne %}
                                    <tr>
                                <td>{{campagne.user.nom}} </td>
                                        <td>{{campagne.user.prenom}} </td>
                                            <td>{{campagne.telephone}} </td>
                                                <td>{{campagne.pays}} </td>
                                                    <td>{{campagne.ville}} </td>
                                                            <td>{{campagne.telephone}} </td>
                                                               
                                                                <td>{{campagne.cours.titreCours}} </td>
                                                                    {# <td>{{campagne.statut}} </td> #}
                                                            <td class=\"actions\">
                                                            {# <td>{{ user.cour|length }}</td> #}
                                                {# <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a> #}
                                                {# <a href=\"{{ path('modifier_campagne', {'id': campagne.id}) }}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>#}
                                                {# <a href=\"{{ path('delete_campagne',{'id':campagne.id}) }}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>   #}
                                            </td>
                                            </tr>
                                           
                                        {% endfor %}
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

   {% endblock %}", "admin/list/list_campagne.html.twig", "/home/coumba/Bureau/cdiokane/templates/admin/list/list_campagne.html.twig");
    }
}
