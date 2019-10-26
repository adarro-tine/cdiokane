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

/* security/reset_password.html.twig */
class __TwigTemplate_fd8b3843c1c5809d56e464e586991e063d940b377cf2ec4db05587202939ff4b extends \Twig\Template
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
      <title>Reset Passsword</title>
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
      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
   </head>
   <body style=\"background-color:black;\">

";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "</body>
</html>
";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<div class=\"card\" style=\"width:450px; margin:auto; margin-top:150px;\">
    <h4 class=\"card-title\">Veuillez choisir un nouveau mot de passe</h4>
    <p class=\"card-text\">
     Penser à choisir un mot de passe un peu complexe dont vous ne communiquerez à personne.</p>
  <div class=\"card-body\">
    <form method=\"post\">

        <h1 class=\"h3 mb-3 font-weight-normal\">réinitialiser le mot de passe</h1>
        <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\"><br>

        <center><button class=\"btn btn-lg \" type=\"submit\" style=\"background-color:#A9A9A9; color:white;\">
            Enregistrer
        </button>
        </center>
    </form>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  93 => 22,  89 => 21,  83 => 42,  81 => 21,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/reset_password.html.twig", "/var/www/html/crowdedu/templates/security/reset_password.html.twig");
    }
}
