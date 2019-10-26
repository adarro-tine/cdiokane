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

/* cours/mesCours.html.twig */
class __TwigTemplate_7f4997e4a06fedc5edd7971b12126b94251c28d371476473abcbbf22e38413e0 extends \Twig\Template
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
        echo " <html>
 <head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

<title>crowdedu Africa</title>

</head>
<body>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t</div>
\t\t\t
\t\t\t\t\t\t
\t\t\t</div>

    <div>
    <h1 style=\"margin-top:90px;font-family:'Roboto',sans-serif;margin-left:100px;\">Mes cours</h1>
    <div style=\"width:100%;height:370px;margin:0 auto;border-bottom:1px solid gainsboro;border-top:1px solid gainsboro;margin-bottom:200px;\">
    <div class=\"row\" style=\"margin:0 auto;padding-top:30px;margin-left:100px;\">
          
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 38
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "cours", [], "any", false, false, false, 38), "titreCours", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, $context["c"], "titreCours", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 39), "email", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "email", [], "any", false, false, false, 39))) {
                        // line 40
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 40) == 2)) {
                            // line 41
                            echo "
                <div class=\"card col-lg-3 \" style=\"width:200px\">
                <a href=\"";
                            // line 43
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes-cours-slug", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
                            echo "\" class=\"a_image\">
      <img class=\"card-img-top\" src=\"data:image/png;base64,";
                            // line 44
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 44), "html", null, true);
                            echo "\" alt=\"Card image\">
      </a>
      
    <div class=\"card-body\">
    <h4 class=\"card-title\" style=\"font-size:15px;font-weight:600;\">";
                            // line 48
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "titreCours", [], "any", false, false, false, 48), "html", null, true);
                            echo "</h4>
    <div class=\"rating\">
\t<div class=\"stars\">
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t\t<i class=\"fa fa-star gold\"></i>
\t</div>
</div>
    <h6 class=\"card-text\" style=\"margin-top:20px;text-align:center;\">";
                            // line 58
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "cours", [], "any", false, false, false, 58), "prix", [], "any", false, false, false, 58), "html", null, true);
                            echo " FCFA</h6>
  </div>
</div>           ";
                        }
                        // line 61
                        echo "                 ";
                    }
                    // line 62
                    echo "\t\t\t\t";
                }
                // line 63
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
    </div>
        </body>
</html>";
    }

    public function getTemplateName()
    {
        return "cours/mesCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  164 => 64,  158 => 63,  155 => 62,  152 => 61,  146 => 58,  133 => 48,  126 => 44,  122 => 43,  118 => 41,  115 => 40,  112 => 39,  109 => 38,  104 => 37,  100 => 36,  84 => 25,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/mesCours.html.twig", "/var/www/html/crowdedu/templates/cours/mesCours.html.twig");
    }
}
