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

/* contact/sendemail.html.twig */
class __TwigTemplate_0677c74e9d0172d5bbe6a16b03e578109abd93810192025d1cab40a5b7436eac extends \Twig\Template
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

<div style=\"width:610px;height:250px;background-color:white;padding:60px;margin-left:200px;margin-top:40px;border-top:5px solid #96bf31;\">
<div style=\"margin-top:-45px;margin-right:70px;border-bottom:1px solid gainsboro;\">
<img src=\"http://crowdeduafrica.com/wp-content/uploads/2018/10/Logo-CrowdEdu-Africa-1-1.png\" width=\"50%\" height=\"auto\"/>
</div>
<div style=\"padding:15px;font-family:'Roboto',sans-serif;font-size:16px;\">
Bonjour ";
        // line 28
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo ",

 Votre message a été soumis avec succès. Nous reviendrons vers vous bientôt! Merci!
Veuillez cliquez sur ce bouton pour avoir plus d'informations concernant <br/><br><br>
 <a href=\"http://crowdeduafrica.com\" class=\"btn\" style=\"background-color:#96bf31;height:50px;padding:12px;color:white;font-family:'Roboto',sans-serif;text-decoration:none;\">Crowdedu Africa</a>
</div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "contact/sendemail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/sendemail.html.twig", "/var/www/html/crowdedu/templates/contact/sendemail.html.twig");
    }
}
