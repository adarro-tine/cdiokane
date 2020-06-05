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

/* cours/mesCours.html.twig */
class __TwigTemplate_8056c8973c7a0c19384d41e164e1d7485cbe20f7d56caa875a40c0b0e834d174 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/mesCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/mesCours.html.twig"));

        // line 1
        echo " <html>
 <head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

<title>crowdedu Africa</title>

</head>
<body>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t</div>
    <div>
    <h1 style=\"margin-top:90px;font-family:'Roboto',sans-serif;margin-left:100px;\">Mes cours</h1>
    <div style=\"width:100%;height:370px;margin:0 auto;border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;margin-bottom:200px;\">
    <div class=\"row\" style=\"margin:0 auto;padding-top:30px;margin-left:100px;\">
          
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 35
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "cours", [], "any", false, false, false, 35), "titreCours", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["c"], "titreCours", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36))) {
                        // line 37
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 37) == 2)) {
                            // line 38
                            echo "
                <div class=\"card col-lg-3 \" style=\"width:200px\">
                <a href=\"";
                            // line 40
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes-cours-slug", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 40)]), "html", null, true);
                            echo "\" class=\"a_image\">
      <img class=\"card-img-top\" src=\"";
                            // line 41
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 41), "html", null, true);
                            echo "\" alt=\"Card image\">
      </a>
    <div class=\"card-body\">
    <h4 class=\"card-title\" style=\"font-size:15px;font-weight:600;\">";
                            // line 44
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titreCours", [], "any", false, false, false, 44), "html", null, true);
                            echo "</h4>
    <div class=\"rating\">
\t<div class=\"stars\">
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t</div>
</div>
    <h6 class=\"card-text\" style=\"margin-top:20px;text-align:center;\">";
                            // line 54
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "cours", [], "any", false, false, false, 54), "prix", [], "any", false, false, false, 54), "html", null, true);
                            echo " FCFA</h6>
  </div>
</div>           ";
                        }
                        // line 57
                        echo "                ";
                    }
                    // line 58
                    echo "              ";
                }
                // line 59
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
    </div>
        </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cours/mesCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 61,  167 => 60,  161 => 59,  158 => 58,  155 => 57,  149 => 54,  136 => 44,  129 => 41,  125 => 40,  121 => 38,  118 => 37,  115 => 36,  112 => 35,  107 => 34,  103 => 33,  90 => 25,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <html>
 <head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap4/bootstrap.min.css')}}\">
<link href=\"{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/main_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/responsive.css')}}\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

<title>crowdedu Africa</title>

</head>
<body>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"{{path('cours')}}\"> <img src=\"{{asset('img/logo_crowdedu.png')}}\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t</div>
    <div>
    <h1 style=\"margin-top:90px;font-family:'Roboto',sans-serif;margin-left:100px;\">Mes cours</h1>
    <div style=\"width:100%;height:370px;margin:0 auto;border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;margin-bottom:200px;\">
    <div class=\"row\" style=\"margin:0 auto;padding-top:30px;margin-left:100px;\">
          
                {% for commande in commandes %}
                {% for c in cours %}
                {% if commande.cours.titreCours == c.titreCours %}
                {% if commande.user.email == app.user.email %}
                {% if commande.statut == 2 %}

                <div class=\"card col-lg-3 \" style=\"width:200px\">
                <a href=\"{{path('mes-cours-slug',{'slug':c.slug} )}}\" class=\"a_image\">
      <img class=\"card-img-top\" src=\"{{asset('uploads/')}}{{ c.image }}\" alt=\"Card image\">
      </a>
    <div class=\"card-body\">
    <h4 class=\"card-title\" style=\"font-size:15px;font-weight:600;\">{{c.titreCours}}</h4>
    <div class=\"rating\">
\t<div class=\"stars\">
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t</div>
</div>
    <h6 class=\"card-text\" style=\"margin-top:20px;text-align:center;\">{{ commande.cours.prix }} FCFA</h6>
  </div>
</div>           {% endif %}
                {% endif %}
              {% endif %}
              {% endfor %}
                {% endfor %}
    </div>
    </div>
        </body>
</html>", "cours/mesCours.html.twig", "/home/coumba/Bureau/cdiokane/templates/cours/mesCours.html.twig");
    }
}
