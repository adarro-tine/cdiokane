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
class __TwigTemplate_50340a4d6210319e4854c5d0703e7a41b613865272c623588c4579158dee2f81 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/index.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "security/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
.ici{
   border:1px solid gainsboro;
}
</style>

   
    
  <div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper auth-page\">
      <div class=\"content-wrapper d-flex align-items-center auth auth-bg-1 theme-one\">
        <div class=\"row w-100\">
          <div class=\"col-lg-4 mx-auto\">
            <div class=\"auto-form-wrapper\">
             ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "        <div class=\"alert alert-danger\">
            <ul class=\"list-unstyled mb-0\">
                <li><span class=\"initialism form-error-icon badge badge-danger\">Error</span> 
                    <span class=\"form-error-message\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageKey", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageData", [], "any", false, false, false, 22), "security"), "html", null, true);
            echo "</span>
                </li>
            </ul>
        </div>
    ";
        }
        // line 27
        echo "
<form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" >
         <div class=\"form-group\">
             <label for=\"email\">Email</label>

         <input type=\"text\" class=\"form-control ici\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"nom d'utilisateur\">
         </div>
         <div class=\"form-group\" >
         <label for=\"password\">Mot de passe</label>

            <input class=\"form-control ici\" type=\"password\" name=\"_password\"  placeholder=\"password\">
         </div>
         <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <div class=\"row\">
               <div class=\"col-lg-4\"></div>
                  <div class=\"col-lg-4\">
            <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary submit-btn btn-block\"> connecter</button>
            </div>
            </div>
               <div class=\"col-lg-4\"></div>
               </div>
         </form>
    
                <div class=\"text-block text-center my-3\">
                  <span class=\"text-small font-weight-semibold\">Pas un membre ?</span>
                                    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\" class=\"text-black text-small\">S'inscrire</a><br/>

                                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
        echo "\" class=\"text-black text-small\">Mot de passe oublié</a>

                </div>
            </div>
          
            <p class=\"footer-text text-center\">copyright © 2020 Abdoulaye TINE. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  141 => 55,  136 => 53,  119 => 39,  109 => 32,  102 => 28,  99 => 27,  91 => 22,  86 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block body %}
<style>
.ici{
   border:1px solid gainsboro;
}
</style>

   
    
  <div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper auth-page\">
      <div class=\"content-wrapper d-flex align-items-center auth auth-bg-1 theme-one\">
        <div class=\"row w-100\">
          <div class=\"col-lg-4 mx-auto\">
            <div class=\"auto-form-wrapper\">
             {% if error %}
        <div class=\"alert alert-danger\">
            <ul class=\"list-unstyled mb-0\">
                <li><span class=\"initialism form-error-icon badge badge-danger\">Error</span> 
                    <span class=\"form-error-message\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
                </li>
            </ul>
        </div>
    {% endif %}

<form action=\"{{path('login')}}\" method=\"POST\" >
         <div class=\"form-group\">
             <label for=\"email\">Email</label>

         <input type=\"text\" class=\"form-control ici\" name=\"_username\" value=\"{{last_username}}\" placeholder=\"nom d'utilisateur\">
         </div>
         <div class=\"form-group\" >
         <label for=\"password\">Mot de passe</label>

            <input class=\"form-control ici\" type=\"password\" name=\"_password\"  placeholder=\"password\">
         </div>
         <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <div class=\"row\">
               <div class=\"col-lg-4\"></div>
                  <div class=\"col-lg-4\">
            <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary submit-btn btn-block\"> connecter</button>
            </div>
            </div>
               <div class=\"col-lg-4\"></div>
               </div>
         </form>
    
                <div class=\"text-block text-center my-3\">
                  <span class=\"text-small font-weight-semibold\">Pas un membre ?</span>
                                    <a href=\"{{path('registration')}}\" class=\"text-black text-small\">S'inscrire</a><br/>

                                    <a href=\"{{path('app_forgotten_password')}}\" class=\"text-black text-small\">Mot de passe oublié</a>

                </div>
            </div>
          
            <p class=\"footer-text text-center\">copyright © 2020 Abdoulaye TINE. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

{% endblock %}
", "security/index.html.twig", "/home/coumba/Bureau/cdiokane/templates/security/index.html.twig");
    }
}
