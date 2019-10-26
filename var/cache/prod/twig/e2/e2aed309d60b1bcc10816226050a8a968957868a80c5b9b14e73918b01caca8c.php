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

/* security/index.html.twig */
class __TwigTemplate_3c6408dba1658551d95d17f91666d95f09e6317f6bb56a492481473c36c80f05 extends \Twig\Template
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
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
   <head>
      <title>Crowdedu Africa</title>
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
   <style>
      .input-group-prepend span{
      width: 40px;
      background-color: gainsboro;
      color: black;
      border:0 !important;
}
   </style>
   <body>

  <div class=\"super_container\" >
";
        // line 30
        if (($context["error"] ?? null)) {
            // line 31
            echo "    <div class=\"alert alert-danger\">
        <ul class=\"list-unstyled mb-0\">
            <li>
                <span class=\"initialism form-error-icon badge badge-danger\">Erreur</span>
                <span class=\"form-error-message\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 35), "security"), "html", null, true);
            echo "</span>
            </li>
        </ul>
    </div>
";
        }
        // line 40
        echo "
<div class=\"row\">
<div class=\"col-lg-3\">
";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43) != null)) {
        }
        // line 45
        echo "</div>
   <div class=\"col-lg-6 col-md-4 col-sm-6 col-xs-6 col-xxs-12\">
<div class=\"card\" style=\"width:350px; margin-left:-60px;\">
      <div class=\"card-header \"style=\"background-color:#96bf31;color:#ffffff;font-size:18px;font-family:'Roboto',sans-serif;text-align:center;\">
         <span style=\"margin-top:50px;font-family:'Roboto',sans-serif;\">Se connecter</span>
        </div>                  
      <div class=\"card-body\">        
         <form action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" id=\"connexion\">
         <div class=\"form-group input-group\">
<div class=\"input-group-prepend\">
    <span class=\"input-group-text\">
<i class=\"fas fa-envelope\"></i></span>

</div>
         <input type=\"email\" class=\"form-control\" name=\"_username\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"E-mail\" maxlength=\"64\" minlength=\"7\" required style=\"height:40px;\">
         <input type=\"hidden\" class=\"form-control\" name=\"isActive\" value=\"1\" placeholder=\"nom d'utilisateur\">
         </div>
         <div class=\"form-group input-group\">
<div class=\"input-group-prepend\">

<span class=\"input-group-text\" >

        <i class=\"fas fa-key\"></i>
    </span>
</div>

<input class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"password\" required style=\"height:40px;\">

         </div>
         <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            
              <center>
       <button class=\"btn\" type=\"submit\"style=\"background-color:#96bf31;color:#ffffff;font-family:'Roboto',sans-serif; width:300px; height:50px;font-size:18px;\">Valider</button>
               </center>         
            
         </form>
        </div><br>
        <div class=\"card-footer text-muted\">
           <center> <h6> <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
        echo "\"  style=\"color:#053151;\">Mot de passe oublié</a></h6></center>
               </div>
      </div>
</div>
</div>
</div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
   </body>
</html>";
    }

    public function getTemplateName()
    {
        return "security/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 97,  193 => 96,  189 => 95,  185 => 94,  181 => 93,  177 => 92,  173 => 91,  162 => 83,  150 => 74,  132 => 59,  122 => 52,  113 => 45,  110 => 43,  105 => 40,  97 => 35,  91 => 31,  89 => 30,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/index.html.twig", "/var/www/html/crowdedu/templates/security/index.html.twig");
    }
}
