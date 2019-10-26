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

/* registration/new.html.twig */
class __TwigTemplate_00c35e9c3f74fab2fdbca8c836537c0b747c1cd35e23a24a650d36b04bcc2ca5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 123
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/new.html.twig", 123);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 128
        echo "    <h1>Register</h1>
    <div style=\"margin:auto;\">

    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 131, $this->source); })()), 'form_start');
        echo "
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 132, $this->source); })()), "nom", [], "any", false, false, false, 132), 'row');
        echo "
                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 133, $this->source); })()), "prenom", [], "any", false, false, false, 133), 'row');
        echo "
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 134, $this->source); })()), "username", [], "any", false, false, false, 134), 'row');
        echo "
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 135, $this->source); })()), "email", [], "any", false, false, false, 135), 'row');
        echo "

        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 137, $this->source); })()), "password", [], "any", false, false, false, 137), 'row');
        echo "

        <button class=\"btn\">Register</button>
    ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new RuntimeError('Variable "registration" does not exist.', 140, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 140,  114 => 137,  109 => 135,  105 => 134,  101 => 133,  97 => 132,  93 => 131,  88 => 128,  78 => 127,  59 => 125,  36 => 123,);
    }

    public function getSourceContext()
    {
        return new Source("
{#<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"{{asset('moltran/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('moltran/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"{{asset('moltran/js/modernizr.min.js')}}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class=\"wrapper-page\">
            <div class=\"panel panel-color panel-primary panel-pages\"  style=\"width:350px;\">
                <div class=\"panel-heading bg-img\"> 
                    <div class=\"bg-overlay\"></div>
                   <h3 class=\"text-center m-t-10 text-white\"> Create a new Account </h3>
                </div> 


                <div class=\"panel-body\" style=\"width:350px;\">
                <form class=\"form-horizontal m-t-20\" action=\"{{path('inscription')}}\" method=\"POST\">
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Nom\" name=\"nom\">
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Prenom\" name=\"prenom\">
                        </div>
                    </div>
                     <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Username\" name=\"username\">
                        </div>
                    </div> <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"email\" required=\"\" placeholder=\"Email\" name=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" required=\"\" placeholder=\"Password\" name=\"password\">
                        </div>
                    </div>
                    

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\" checked=\"checked\">
                                <label for=\"checkbox-signup\">
                                    I accept <a href=\"#\">Terms and Conditions</a>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary waves-effect waves-light btn-lg w-lg\" type=\"submit\" name=\"ajouter\">Register</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-12 text-center\">
                            <a href=\"{{path('login')}}\">Already have account?</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    \t<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src=\"{{asset('moltran/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('moltran/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('moltran/js/detect.js')}}\"></script>
        <script src=\"{{asset('moltran/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('moltran/js/waves.js')}}\"></script>
        <script src=\"{{asset('moltran/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('moltran/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset('moltran/js/jquery.app.js')}}\"></script>
\t
\t</body>
</html>#}
{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <h1>Register</h1>
    <div style=\"margin:auto;\">

    {{ form_start(registration) }}
        {{ form_row(registration.nom) }}
                {{ form_row(registration.prenom) }}
        {{ form_row(registration.username) }}
        {{ form_row(registration.email) }}

        {{ form_row(registration.password) }}

        <button class=\"btn\">Register</button>
    {{ form_end(registration) }}
    </div>
{% endblock %}", "registration/new.html.twig", "/var/www/html/crowdedu/templates/registration/new.html.twig");
    }
}
