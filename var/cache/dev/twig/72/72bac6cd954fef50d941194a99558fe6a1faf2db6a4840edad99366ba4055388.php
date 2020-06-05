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

/* registration/confirmation.html.twig */
class __TwigTemplate_06f6748d295df00db4f4c0cf2de0eb04f15a588fc7a986af791658c639e876b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation.html.twig"));

        // line 4
        echo "<!doctype html>
<html lang=\"en\">
   <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

      <!-- Bootstrap CSS -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
</head>
   <body style=\"background-color:gainsboro;\">
 ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, false, 22), "flashbag", [], "any", false, false, false, 22), "get", [0 => "danger"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 23
            echo "                <div class=\"container alert alert-danger\" role=\"alert\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<div style=\"width:610px;height:250px;background-color:white;padding:60px;margin-left:200px;margin-top:40px;border-top:5px solid #96bf31;\">
<div style=\"margin-top:-45px;margin-right:70px;border-bottom:1px solid gainsboro;\">
<img src=\"http://crowdeduafrica.com/wp-content/uploads/2018/10/Logo-CrowdEdu-Africa-1-1.png\" width=\"50%\" height=\"auto\"/>
</div>
<div style=\"padding:15px;font-family:'Roboto',sans-serif;font-size:16px;\">
Bonjour ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 32, $this->source); })()), "html", null, true);
        echo ",

Vous vous êtes inscrits sur <i style=\"#096ea2\">Crowdedu Africa</i> et nous vous en remercions.

";
        // line 37
        echo "
";
        // line 40
        echo " ";
        // line 41
        echo "</div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  119 => 40,  116 => 37,  107 => 32,  100 => 27,  91 => 24,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#<div style=\"width:500px; margin: 0 auto; height:150px; background-color:#96bf31;brder:1px solid black;\">
Veuillez cliquez sur ce lien pour modifier votre mot de passe  <a href=\"{{url}}\"><h6>Cliquez ici<h6></a>
</div>#}
<!doctype html>
<html lang=\"en\">
   <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

      <!-- Bootstrap CSS -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap4/bootstrap.min.css')}}\">
<link href=\"{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/main_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/responsive.css')}}\">
</head>
   <body style=\"background-color:gainsboro;\">
 {% for flash_message in app.session.flashbag.get('danger') %}
                <div class=\"container alert alert-danger\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
<div style=\"width:610px;height:250px;background-color:white;padding:60px;margin-left:200px;margin-top:40px;border-top:5px solid #96bf31;\">
<div style=\"margin-top:-45px;margin-right:70px;border-bottom:1px solid gainsboro;\">
<img src=\"http://crowdeduafrica.com/wp-content/uploads/2018/10/Logo-CrowdEdu-Africa-1-1.png\" width=\"50%\" height=\"auto\"/>
</div>
<div style=\"padding:15px;font-family:'Roboto',sans-serif;font-size:16px;\">
Bonjour {{prenom}} {{nom}},

Vous vous êtes inscrits sur <i style=\"#096ea2\">Crowdedu Africa</i> et nous vous en remercions.

{# Cliquez sur le bouton ci-dessous pour modifier votre mot de passe.<br/> #}

{# Remarque : ce lien est valable pendant 24 heures. Après expiration de ce délai,
 vous devrez soumettre une nouvelle demande de réinitialisation de mot de passe.<br><br> #}
 {# <a href=\"{{path('url')}}\" class=\"btn\" syle=\"background-color:#96bf31;height:50px;padding:12px;color:white;font-family:'Roboto',sans-serif;text-decoration:none;\">Changer votre mot de passe</a> #}
</div>
</div>
</body>
</html>", "registration/confirmation.html.twig", "/home/coumba/Bureau/cdiokane/templates/registration/confirmation.html.twig");
    }
}
