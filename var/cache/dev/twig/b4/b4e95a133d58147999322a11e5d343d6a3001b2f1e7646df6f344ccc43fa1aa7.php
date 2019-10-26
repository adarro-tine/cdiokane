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

/* registration/index.html.twig */
class __TwigTemplate_240076ae2ee17a3fcfbe4537bc3c1e89daa200ef75909f6fa5dfa2f7adfc7814 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datetimepicker/jquery.datetimepicker.css"), "html", null, true);
        echo "\"/>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  </head>
  <body>
  <div class=\"super_container\">

\t<!-- Header -->

\t


  <div class=\"row\">
  <div class=\"col-lg-3\">
  
  </div>
      <div class=\"col-lg-6 col-md-4 col-sm-6 col-xs-6 col-xxs-12\">
      <div class=\"card\" style=\"width:350px; margin-left:-60px;border:0;\" >
      
        <div class=\"card-header \"style=\"background-color:#96bf31;color:#ffffff;font-size:18px;font-family:'Roboto',sans-serif;text-align:center;\">
         <span >Inscrivez-vous</span>
        </div>
        <div class=\"card-body\">
           ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["id" => "formulaire", "method" => "POST"]]);
        echo "
                <div class=\"form-row \">
                <div class=\"form-group col-md-6\">
                  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "form-control champ", "id" => "nom", "name" => "nom"]]);
        echo "
                </div>
               <div class=\"form-group col-md-6\">

                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "prenom", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control champ", "id" => "prenom", "name" => "prenom"]]);
        echo "
              </div>
              </div>
               <div class=\"form-row \">
                <div class=\"form-group col-md-6\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "username", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control champ", "id" => "username", "name" => "username"]]);
        echo "
                </div>
              <div class=\"form-group col-md-6\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control champ", "id" => "email", "name" => "email", "maxlength" => "64", "minlength" => "7"]]);
        echo "
                </div>
                </div>
                    <div class=\"form-row \">
                <div class=\"form-group col-md-6\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), "first", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control champ mp", "id" => "mdp", "name" => "passwordF"]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
                  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "password", [], "any", false, false, false, 63), "second", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control champ mp", "id" => "confirmation", "name" => "passwordS"]]);
        echo "
                </div>
                </div>
              <div class=\"card-footer text-muted\" style=\"padding-top:5px;\">
              <center>
              <button class=\"btn btn-lg\" id=\"envoyer\" style=\"background-color:#96bf31;color:#ffffff;font-family:'Roboto',sans-serif; width:250px; height:50px;border:0;\">S'inscrire
             </button>
              </center>       
              </div>
             ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "

      </div>

      </div>
     </div>
      </div>
      <div class=\"col-lg-3\"></div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
     <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/jss/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datetimepicker/php-date-formatter/js/php-date-formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datetimepicker/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datetimepicker/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
 <script>
   \$(document).ready(function() {
     /* \$('#user_dateNaissance').datetimepicker({
        lang:'fr',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'d/m/Y',
      });*/
    


    });
    </script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 98,  216 => 97,  212 => 96,  208 => 95,  201 => 91,  197 => 90,  193 => 89,  189 => 88,  185 => 87,  181 => 86,  177 => 85,  161 => 72,  149 => 63,  143 => 60,  135 => 55,  129 => 52,  121 => 47,  114 => 43,  108 => 40,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/plugins/datetimepicker/jquery.datetimepicker.css')}}\"/>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  </head>
  <body>
  <div class=\"super_container\">

\t<!-- Header -->

\t


  <div class=\"row\">
  <div class=\"col-lg-3\">
  
  </div>
      <div class=\"col-lg-6 col-md-4 col-sm-6 col-xs-6 col-xxs-12\">
      <div class=\"card\" style=\"width:350px; margin-left:-60px;border:0;\" >
      
        <div class=\"card-header \"style=\"background-color:#96bf31;color:#ffffff;font-size:18px;font-family:'Roboto',sans-serif;text-align:center;\">
         <span >Inscrivez-vous</span>
        </div>
        <div class=\"card-body\">
           {{form_start(form,{'attr':{'id':'formulaire','method':'POST'}})}}
                <div class=\"form-row \">
                <div class=\"form-group col-md-6\">
                  {{form_row(form.nom,{'attr':{'class':'form-control champ','id':'nom','name':'nom'}}) }}
                </div>
               <div class=\"form-group col-md-6\">

                {{form_row(form.prenom,{'attr':{'class':'form-control champ','id':'prenom','name':'prenom'}}) }}
              </div>
              </div>
               <div class=\"form-row \">
                <div class=\"form-group col-md-6\">
                {{form_row(form.username,{'attr':{'class':'form-control champ','id':'username','name':'username'}}) }}
                </div>
              <div class=\"form-group col-md-6\">
                {{form_row (form.email,{'attr':{'class':'form-control champ','id':'email','name':'email','maxlength':'64','minlength':'7'}}) }}
                </div>
                </div>
                    <div class=\"form-row \">
                <div class=\"form-group col-md-6\">
                    {{form_row(form.password.first,{'attr':{'class':'form-control champ mp','id':'mdp','name':'passwordF'}}) }}
                  </div>
                  <div class=\"form-group col-md-6\">
                  {{form_row(form.password.second,{'attr':{'class':'form-control champ mp','id':'confirmation','name':'passwordS'}}) }}
                </div>
                </div>
              <div class=\"card-footer text-muted\" style=\"padding-top:5px;\">
              <center>
              <button class=\"btn btn-lg\" id=\"envoyer\" style=\"background-color:#96bf31;color:#ffffff;font-family:'Roboto',sans-serif; width:250px; height:50px;border:0;\">S'inscrire
             </button>
              </center>       
              </div>
             {{ form_end(form) }}

      </div>

      </div>
     </div>
      </div>
      <div class=\"col-lg-3\"></div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{asset('css/bootstrap4/popper.js')}}\"></script>
<script src=\"{{asset('css/bootstrap4/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"{{asset('js/custom.js')}}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
     <script src=\"{{asset('assets/jss/jquery.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datetimepicker/php-date-formatter/js/php-date-formatter.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datetimepicker/jquery-mousewheel/jquery.mousewheel.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datetimepicker/jquery.datetimepicker.js')}}\"></script>
 <script>
   \$(document).ready(function() {
     /* \$('#user_dateNaissance').datetimepicker({
        lang:'fr',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'d/m/Y',
      });*/
    


    });
    </script>
  </body>
</html>
", "registration/index.html.twig", "/var/www/html/crowdedu/templates/registration/index.html.twig");
    }
}
