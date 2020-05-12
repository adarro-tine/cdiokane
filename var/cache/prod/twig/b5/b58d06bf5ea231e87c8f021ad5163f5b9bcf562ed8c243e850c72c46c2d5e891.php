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
class __TwigTemplate_af3dc6c5e864f0d6d59164c5a508131720fe572284e70ecacbc53b82fb0617c9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/new.html.twig", 123);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 125
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 127
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "    <h1>Register</h1>
    <div style=\"margin:auto;\">

    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registration"] ?? null), 'form_start');
        echo "
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registration"] ?? null), "nom", [], "any", false, false, false, 132), 'row');
        echo "
                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registration"] ?? null), "prenom", [], "any", false, false, false, 133), 'row');
        echo "
        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registration"] ?? null), "username", [], "any", false, false, false, 134), 'row');
        echo "
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registration"] ?? null), "email", [], "any", false, false, false, 135), 'row');
        echo "

        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registration"] ?? null), "password", [], "any", false, false, false, 137), 'row');
        echo "

        <button class=\"btn\">Register</button>
    ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registration"] ?? null), 'form_end');
        echo "
    </div>
";
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
        return array (  90 => 140,  84 => 137,  79 => 135,  75 => 134,  71 => 133,  67 => 132,  63 => 131,  58 => 128,  54 => 127,  47 => 125,  36 => 123,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/new.html.twig", "/var/www/html/CROWDEDU/templates/registration/new.html.twig");
    }
}
