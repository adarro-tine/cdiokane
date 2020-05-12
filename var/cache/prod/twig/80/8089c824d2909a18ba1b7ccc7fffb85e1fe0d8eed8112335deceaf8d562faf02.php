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
class __TwigTemplate_487b9fb6ac8f660e17337e7af4329afd7822f36cae812d2aec226face393cc4f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("home/base.html.twig", "security/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["error"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\">
            <ul class=\"list-unstyled mb-0\">
                <li><span class=\"initialism form-error-icon badge badge-danger\">Error</span> 
                    <span class=\"form-error-message\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 22), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  123 => 55,  118 => 53,  101 => 39,  91 => 32,  84 => 28,  81 => 27,  73 => 22,  68 => 19,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/index.html.twig", "/var/www/html/CROWDEDU/templates/security/index.html.twig");
    }
}
