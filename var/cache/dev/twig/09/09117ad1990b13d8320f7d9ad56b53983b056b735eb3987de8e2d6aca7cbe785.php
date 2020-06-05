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

/* admin/package.json */
class __TwigTemplate_f87ad5a6c9b3ee609d540f7f70e648e233841200e8499748975d3ad1a4309ea6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/package.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/package.json"));

        // line 1
        echo "{
  \"name\": \"Moltran\",
  \"version\": \"1.3.0\",
  \"description\": \"Admin template and App UI Kit\",
  \"private\": \"true\",
  \"author\": \"coderthemes.com\",
  \"url\": \"http://coderthemes.com/moltran\",
  \"keywords\": [
    \"bootstrap\",
    \"admin\",
    \"dashboard\",
    \"frontend\",
    \"template\",
    \"theme\"
  ],
  \"dependencies\": {
  },
  \"devDependencies\": {
    \"gulp\": \"~3.9.0\",
    \"gulp-less\": \"^1.3.6\",
    \"path\": \"^0.12.7\",
    \"gulp-minify-css\": \"^1.2.1\",
    \"rimraf\": \"~2.4.3\",
    \"gulp-rimraf\": \"~0.2.0\",
    \"gulp-ignore\": \"~2.0.1\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/package.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"Moltran\",
  \"version\": \"1.3.0\",
  \"description\": \"Admin template and App UI Kit\",
  \"private\": \"true\",
  \"author\": \"coderthemes.com\",
  \"url\": \"http://coderthemes.com/moltran\",
  \"keywords\": [
    \"bootstrap\",
    \"admin\",
    \"dashboard\",
    \"frontend\",
    \"template\",
    \"theme\"
  ],
  \"dependencies\": {
  },
  \"devDependencies\": {
    \"gulp\": \"~3.9.0\",
    \"gulp-less\": \"^1.3.6\",
    \"path\": \"^0.12.7\",
    \"gulp-minify-css\": \"^1.2.1\",
    \"rimraf\": \"~2.4.3\",
    \"gulp-rimraf\": \"~0.2.0\",
    \"gulp-ignore\": \"~2.0.1\"
  }
}
", "admin/package.json", "/home/coumba/Bureau/cdiokane/templates/admin/package.json");
    }
}
