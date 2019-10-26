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

/* security/forgotten_password.html.twig */
class __TwigTemplate_94cba6c6de55fb2dc02eca45a218a83b6f5de43dfc6fd4dba73c7e8dfcf03768 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
   <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

      <!-- Bootstrap CSS -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
</head>
   <body style=\"background-color:gainsboro;\">

";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "</body>
</html>";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div class=\"card\" style=\"width:400px; margin:auto; margin-top:150px;\">
    <h4 class=\"card-title\">Réinitialiser votre mot de passe</h4>
    <p class=\"card-text\">Veuillez saisir votre adresse e-mail ci-dessous.
     Nous rechercherons votre compte et vous enverrons un e-mail de réinitialisation de mot de passe.</p>
  <div class=\"card-body\">
    <form method=\"POST\" >
        <h1 class=\"h3 mb-3 font-weight-normal\">mot de passe oublié</h1>
        <label for=\"inputEmail\" class=\"sr-only\">Email</label>
        <input type=\"email\" name=\"emailer\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <br>
       <center> <button class=\"btn btn-lg\" type=\"submit\" style=\"background-color:#A9A9A9;color:white;\">
     Envoyez le mail </button>
        </center>

    </form>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/forgotten_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  87 => 20,  82 => 39,  80 => 20,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/forgotten_password.html.twig", "/var/www/html/crowdedu/templates/security/forgotten_password.html.twig");
    }
}
