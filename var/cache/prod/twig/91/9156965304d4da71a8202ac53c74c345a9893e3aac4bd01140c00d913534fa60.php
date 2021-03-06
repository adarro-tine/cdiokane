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
class __TwigTemplate_4bb9774c3a6d0b98824431cd1d10e9f708f14a19392440e0660866707275f6ad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'flash' => [$this, 'block_flash'],
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
        $this->parent = $this->loadTemplate("home/base.html.twig", "registration/index.html.twig", 1);
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
      <div class=\"content-wrapper d-flex align-items-center auth register-bg-1 theme-one\">
        <div class=\"row w-100\">
          <div class=\"col-lg-6 mx-auto\"><br><br>
            <h2 class=\"text-center mb-12\" style=\"color:white;\">Inscription</h2>
                 
  ";
        // line 17
        $this->displayBlock('flash', $context, $blocks);
        // line 39
        echo "
   
            <div class=\"auto-form-wrapper\" style=\"width:400px;margin-left:130px;height:500px;padding-bottom:150px;\">
                         <div class=\"text-block text-left my-3\">
                        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

                  <span class=\"text-small font-weight-semibold\">Vous avez un compte ?</span>
                  <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"text-black text-small\">Se connecter</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

";
    }

    // line 17
    public function block_flash($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 18), "flashbag", [], "any", false, false, false, 18), "get", [0 => "success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "                <div class=\"container alert alert-success\" role=\"alert\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 23), "flashbag", [], "any", false, false, false, 23), "get", [0 => "info"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "                <div class=\"container alert alert-info\" role=\"alert\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 28), "flashbag", [], "any", false, false, false, 28), "get", [0 => "warning"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "                <div class=\"container alert alert-warning\" role=\"alert\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 33), "flashbag", [], "any", false, false, false, 33), "get", [0 => "danger"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 34
            echo "                <div class=\"container alert alert-danger\" role=\"alert\">
                    ";
            // line 35
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
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
        return array (  168 => 38,  159 => 35,  156 => 34,  151 => 33,  142 => 30,  139 => 29,  134 => 28,  125 => 25,  122 => 24,  117 => 23,  108 => 20,  105 => 19,  100 => 18,  96 => 17,  80 => 46,  74 => 43,  68 => 39,  66 => 17,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/index.html.twig", "/var/www/html/CROWDEDU/templates/registration/index.html.twig");
    }
}
