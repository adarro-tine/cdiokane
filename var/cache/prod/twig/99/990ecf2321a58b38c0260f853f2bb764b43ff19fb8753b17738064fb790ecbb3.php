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

/* poste/email.html.twig */
class __TwigTemplate_d658be2f0282e82efe651fcf993a4992d86def2bc09522ea5a7b4a94eeba05fa extends \Twig\Template
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
        echo "<div style=\"margin:auto;width:500px;height:150px; border:1px solid black;\">
<div style=\"background-color:#96bf31;border-bottom:1px solid black;\">
<center>Bonjour <h4>";
        // line 3
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "!</h4></center>
</div style=\"padding-bottom:15px;\">
Votre inscription  a été soumis avec succès.
Nous vous reviendrons le plus rapidement possible.</div>
    ";
    }

    public function getTemplateName()
    {
        return "poste/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste/email.html.twig", "/var/www/html/crowdedu/templates/poste/email.html.twig");
    }
}
