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

/* admin/list/list_commande.html.twig */
class __TwigTemplate_e88600b7887bc0444c979a42ba8eff52348271c9d055f69806f1b4ddb8aae80c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/list_commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/list/list_commande.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/list/list_commande.html.twig", 2);
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
                                            <th>Subvention</th>
                                             <th>Cour</th>
                                              <th>statut</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["commande"]);
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 32
            echo "                                    <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresse", [], "any", false, false, false, 35), "html", null, true);
            echo " </td>
                                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "pays", [], "any", false, false, false, 36), "html", null, true);
            echo " </td>
                                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "ville", [], "any", false, false, false, 37), "html", null, true);
            echo " </td>
                                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "telephone", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                                                                <td> 
                                                                    ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["commande"], "subvention", [], "any", false, false, false, 40) == 1)) {
                // line 41
                echo "                                                                        OUI
                                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
$context["commande"], "subvention", [], "any", false, false, false, 42) == 0)) {
                // line 43
                echo "                                                                            NON
                                                                            ";
            }
            // line 45
            echo "                                                                </td> 
                                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "cours", [], "any", false, false, false, 46), "titreCours", [], "any", false, false, false, 46), "html", null, true);
            echo " </td>
                                                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 47), "html", null, true);
            echo " </td>
                                                            <td class=\"actions\">
                                                            ";
            // line 50
            echo "                                                ";
            // line 52
            echo "                                                ";
            // line 53
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_commande", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>  
                                            </td>
                                            </tr>
                                           
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
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
        return "admin/list/list_commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 58,  157 => 53,  155 => 52,  153 => 50,  148 => 47,  144 => 46,  141 => 45,  137 => 43,  135 => 42,  132 => 41,  130 => 40,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  102 => 32,  98 => 31,  76 => 11,  68 => 4,  58 => 3,  35 => 2,);
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
                                            <th>Subvention</th>
                                             <th>Cour</th>
                                              <th>statut</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                
                                {% for commande in commande %}
                                    <tr>
                                <td>{{commande.user.nom}} </td>
                                        <td>{{commande.user.prenom}} </td>
                                            <td>{{commande.adresse}} </td>
                                                <td>{{commande.pays}} </td>
                                                    <td>{{commande.ville}} </td>
                                                            <td>{{commande.telephone}} </td>
                                                                <td> 
                                                                    {% if commande.subvention == 1 %}
                                                                        OUI
                                                                            {% elseif commande.subvention == 0 %}
                                                                            NON
                                                                            {% endif %}
                                                                </td> 
                                                                <td>{{commande.cours.titreCours}} </td>
                                                                    <td>{{commande.statut}} </td>
                                                            <td class=\"actions\">
                                                            {# <td>{{ user.cour|length }}</td> #}
                                                {# <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a> #}
                                                {# <a href=\"{{ path('modifier_commande', {'id': commande.id}) }}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>#}
                                                <a href=\"{{ path('delete_commande',{'id':commande.id}) }}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>  
                                            </td>
                                            </tr>
                                           
                                        {% endfor %}
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

   {% endblock %}", "admin/list/list_commande.html.twig", "/home/coumba/Bureau/cdiokane/templates/admin/list/list_commande.html.twig");
    }
}
