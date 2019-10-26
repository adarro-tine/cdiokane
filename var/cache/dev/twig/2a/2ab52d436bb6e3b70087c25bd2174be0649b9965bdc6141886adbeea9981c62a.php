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

/* poste/poste.html.twig */
class __TwigTemplate_33287a5378a5399bc2be58ae838e6568fdcff1eece64a7a29063d15d5a1916dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'temoignages' => [$this, 'block_temoignages'],
            'campagne' => [$this, 'block_campagne'],
            'background' => [$this, 'block_background'],
            'barrier' => [$this, 'block_barrier'],
            'categories' => [$this, 'block_categories'],
            'share' => [$this, 'block_share'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "cours/allCours.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste/poste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste/poste.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "poste/poste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        // line 5
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "campagne"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 10
        echo "<style>
    .fx {
        flex: 1;
        min-width: 1px;
    }
    .channels--teach .small-content {
        max-width: 510px;
    }
    channels--teach .text-shadow {
        text-shadow: 0 2px 4px rgba(41, 48, 59, 0.5);
    }
    h3,
    .h3 {
        margin-top: 21px;
        margin-bottom: 10.5px;
    }

    .text {
        font-size: 15px;
        line-height: 24px;
        margin-top: 0;
        margin-bottom: 20px;
        color: #FFF ! important;
    }
    .col .hero-header--container--sJIdp {
        height: 367px;
        padding-bottom: 40px !important;
    }
    .channels--teach .discovery-unit-container>.unit-wrapper:nth-of-type(even) {
        background: #FFF;
    }
    * {
        box-sizing: border-box;
    }
    .channels--teach .hero-header h1 {
        font-size: 24px;
        color: #fff;
    }
    .channels--teach .text-shadow {
        text-shadow: 0 2px 4px rgba(41, 48, 59, 0.5);
    }
    h1 {
        display: block;
        font-size: 45px;
        margin-block-start: 0.67em;
        margin-block-end: 0.67em;
        margin-inline-start: 0;
        margin-inline-end: 0;
        font-weight: 300;
    }
    .btn-b {
        color: #FFF;
        background-color: #96bf31;
        border: 1px solid transparent;
        margin-top: 40px;
        border-color: #96bf31;
    }
    .main_slider {
        height: 450px;
        background: linear-gradient(#96bf31,rgba(255, 255,255, 0) 100%, rgba(0, 30, 0)) 100% no-repeat, url(\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/s4.jpg"), "html", null, true);
        echo "\") 100% 10% no-repeat;
        background-position: 100% 100%;


    }
    p {
        text-align: center;
    }
    h5 {
        text-align: center;
        font-family: ubuntu;
        font-size: 14px;
    }
    .text-shadow-text {
        font-family: ubuntu;
        font-weight: 300;
        line-height: 1.287;
        font-size: 55px;
        word-break: break-word;
        text-align: center;
    }
    .text-shadow {
        text-align: center;
        font-size: 16px;
        font-family: ubuntu;
        color: #fff ! important;
    }
    .title {
        margin-top: -20px;
        text-align: center;
        line-height: 1.287;
        font-family: ubuntu;
        font-weight: 300;
    }
    .trait {
        border-top: 2px solid #4682B4;
        width: 45px;
    }
    #voir {
        margin-left: 80%;
        background: inherit;
        border-color: #41444b;
    }
    #voir:hover {
        background: #41444b;
        color: #fff ! important;
    }
    h4 {
        text-align: center;
        color: #747777;
        font-size: 16px;
        font-family: ubuntu;
    }
    .benefit_content {
        text-align: center;
        font-weight: 300;
        font-family: ubuntu;
    }
    .benefit_content h6 {
        color: #747777;
    }
    .img_ {
        width: 100%;
        height: 100%;
        display: flex;
        max-height: 232px;
        align-items: center;
        margin-bottom: 16px;
        justify-content: center;
    }

    .container_video {
        margin-right: auto;
        margin-left: auto;
        padding-left: 100px;
        padding-top: 100px;
        padding-bottom: 50px;

    }
    .component {
        position: relative;
        padding: 50px 100px;
        border-bottom: 1px solid #e6f0f6;
        border-top: 1px solid #e6f0f6;
        background-color: #ffffff;
    }
    .component:hover {
        border-bottom: 1px solid gainsboro;
        border-top: 1px solid gainsboro;
    }
    .section-title {
        font-size: 35px;
        color: #053651;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 12px;
        text-transform: uppercase;
        text-align: center;
        padding-bottom: 30px;
    }
    .p_text {
        margin: 0 0 10px;
        font-family:'Roboto',sans-serif;
    }
    .span_d {
        padding-left: 600px;
        text-align: right;

    }

    .table {
        border-left: 1px solid gainsboro;
        border-right: 1px solid gainsboro;
        border-bottom: 1px solid gainsboro;
        width: 100%;
        margin-bottom: 250px;
    }
    .div_lien_etudiants {
        border-bottom: 1px solid gainsboro;
        border-top: 1px solid gainsboro;
        margin-top: 60px;

    }
    .info {
        text-align: center;
        color: #fff;
        position: relative;
        display: table;
        width: 100%;
        height: 420px;
        padding-top: 210px;
    }
    .roleFormateur {
        color: #2a333d;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.2;
        text-overflow: ellipsis;
        overflow: hidden;
    }
   h1, h5,span{
        font-family:'Roboto',sans-serif;
    }
</style>

    <div style=\"background-image:url('";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
            height:auto; background-position:center center;
                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
        <div style=\"padding:150px;margin-left:-70px;\">
            <h2 id=\"cours_en_video\" style=\"font-size:35px;\">Devenez formateur pour Crowdedu</h2>
            ";
        // line 222
        echo "            <div style=\"position: absolute;
                \t\twidth: 575px;
                \t\theight: 1px;
                \t\tleft: 140px;
                \t\ttop: 230px;
                        margin-right:10px;
                        background:linear-gradient(90deg,#006DA4,#95C11E);\"></div>

            <div id=\"Formation_en_ligne_aupr_s_des_\">
                <span>Formation en ligne auprès des meilleurs formateurs
                    <br/>et institutions ici 
                        et partout dans le monde
                </span>
            </div>


            <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;text-align: left;
                    \t\t\">
                ";
        // line 240
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 241
            echo "                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                ";
        } else {
            // line 249
            echo "                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                ";
        }
        // line 257
        echo "

            </div>


        </div>


    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        // line 269
        echo "<div class=\"container_video\">
<h1 class=\"section-title\" style=\"text-align:center;\">Qui peut etre formateurs sur Crowdedu Africa ?</h1>
<div class=\"videos\" style=\"width:900px;\">
<iframe allowfullscreen=\"allowfullscreen\" class=\"youtube\" frameborder=\"0\" height=\"560\"  src=\"https://www.youtube.com/embed/YBY-nbIGxI4\"
 width=\"1150\"></iframe>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 278
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 279
        echo "<div class=\"component\">
<h3 class=\"section-title\">Le mentorat chez Crowdedu Africa</h3>
<p class=\"p_text\">
Crowdedu Africa est la plateforme d'éducation en ligne leader en Europe.
 Avec plus de 2,5 millions de membres, nous rendons l'éducation accessible à tous,
  notamment grâce à des diplômes 100% en ligne. 

Le mentorat est au cœur de ces parcours diplômants : cet accompagnement personnalisé 
permet en effet aux étudiant·e·s d’atteindre leurs objectifs plus facilement.
 Le ou la mentor est un·e expert·e métier qui fait le point avec l'étudiant·e
  une fois par semaine et apporte son expérience pour apprendre mieux et plus vite. 
  C’est la garantie d’un suivi régulier pour pouvoir dépasser tout blocage et pour ne jamais
   être à court de motivation.

Nous recherchons aujourd'hui des mentors dans de multiples
 disciplines : data science, développement web, marketing digital...
  Si vous êtes top et que vous aimez partager votre savoir-faire, rejoignez-nous 
  ! Notre révolution de l'éducation vous attend.</p>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 299
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        // line 300
        echo "
<div class=\"container\">
  <h2 style=\"text-align:center;\">Devenez Formateur</h2>
  <p>Poste disponible</p>            
  <table class=\"table table-hover \">
    <tbody>
      <tr>
   ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () { throw new RuntimeError('Variable "postes" does not exist.', 307, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 308
            echo "        <td ><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste_slug", ["slug" => twig_get_attribute($this->env, $this->source, $context["poste"], "slug", [], "any", false, false, false, 308)]), "html", null, true);
            echo "\"><h5 class=\"roleFormateur\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "role", [], "any", false, false, false, 308), "html", null, true);
            echo "
</h5></a></td>

        <td><span class=\"span_d\">";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["poste"], "category", [], "any", false, false, false, 311), "libelle", [], "any", false, false, false, 311), "html", null, true);
            echo "</span></td>
      </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "
    </tbody>
  </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "poste/poste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 314,  526 => 311,  517 => 308,  513 => 307,  504 => 300,  494 => 299,  465 => 279,  455 => 278,  438 => 269,  428 => 268,  409 => 257,  399 => 249,  389 => 241,  387 => 240,  367 => 222,  359 => 214,  211 => 69,  150 => 10,  140 => 9,  122 => 8,  111 => 5,  101 => 4,  83 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig' %}
{% block tabs %}{% endblock %}
{% block fonctionnalites %}{% endblock %}
{% block temoignages %}

\t{% endblock %}

{% block campagne %}{% endblock %}
{% block background %}
<style>
    .fx {
        flex: 1;
        min-width: 1px;
    }
    .channels--teach .small-content {
        max-width: 510px;
    }
    channels--teach .text-shadow {
        text-shadow: 0 2px 4px rgba(41, 48, 59, 0.5);
    }
    h3,
    .h3 {
        margin-top: 21px;
        margin-bottom: 10.5px;
    }

    .text {
        font-size: 15px;
        line-height: 24px;
        margin-top: 0;
        margin-bottom: 20px;
        color: #FFF ! important;
    }
    .col .hero-header--container--sJIdp {
        height: 367px;
        padding-bottom: 40px !important;
    }
    .channels--teach .discovery-unit-container>.unit-wrapper:nth-of-type(even) {
        background: #FFF;
    }
    * {
        box-sizing: border-box;
    }
    .channels--teach .hero-header h1 {
        font-size: 24px;
        color: #fff;
    }
    .channels--teach .text-shadow {
        text-shadow: 0 2px 4px rgba(41, 48, 59, 0.5);
    }
    h1 {
        display: block;
        font-size: 45px;
        margin-block-start: 0.67em;
        margin-block-end: 0.67em;
        margin-inline-start: 0;
        margin-inline-end: 0;
        font-weight: 300;
    }
    .btn-b {
        color: #FFF;
        background-color: #96bf31;
        border: 1px solid transparent;
        margin-top: 40px;
        border-color: #96bf31;
    }
    .main_slider {
        height: 450px;
        background: linear-gradient(#96bf31,rgba(255, 255,255, 0) 100%, rgba(0, 30, 0)) 100% no-repeat, url(\"{{asset('img/s4.jpg')}}\") 100% 10% no-repeat;
        background-position: 100% 100%;


    }
    p {
        text-align: center;
    }
    h5 {
        text-align: center;
        font-family: ubuntu;
        font-size: 14px;
    }
    .text-shadow-text {
        font-family: ubuntu;
        font-weight: 300;
        line-height: 1.287;
        font-size: 55px;
        word-break: break-word;
        text-align: center;
    }
    .text-shadow {
        text-align: center;
        font-size: 16px;
        font-family: ubuntu;
        color: #fff ! important;
    }
    .title {
        margin-top: -20px;
        text-align: center;
        line-height: 1.287;
        font-family: ubuntu;
        font-weight: 300;
    }
    .trait {
        border-top: 2px solid #4682B4;
        width: 45px;
    }
    #voir {
        margin-left: 80%;
        background: inherit;
        border-color: #41444b;
    }
    #voir:hover {
        background: #41444b;
        color: #fff ! important;
    }
    h4 {
        text-align: center;
        color: #747777;
        font-size: 16px;
        font-family: ubuntu;
    }
    .benefit_content {
        text-align: center;
        font-weight: 300;
        font-family: ubuntu;
    }
    .benefit_content h6 {
        color: #747777;
    }
    .img_ {
        width: 100%;
        height: 100%;
        display: flex;
        max-height: 232px;
        align-items: center;
        margin-bottom: 16px;
        justify-content: center;
    }

    .container_video {
        margin-right: auto;
        margin-left: auto;
        padding-left: 100px;
        padding-top: 100px;
        padding-bottom: 50px;

    }
    .component {
        position: relative;
        padding: 50px 100px;
        border-bottom: 1px solid #e6f0f6;
        border-top: 1px solid #e6f0f6;
        background-color: #ffffff;
    }
    .component:hover {
        border-bottom: 1px solid gainsboro;
        border-top: 1px solid gainsboro;
    }
    .section-title {
        font-size: 35px;
        color: #053651;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 12px;
        text-transform: uppercase;
        text-align: center;
        padding-bottom: 30px;
    }
    .p_text {
        margin: 0 0 10px;
        font-family:'Roboto',sans-serif;
    }
    .span_d {
        padding-left: 600px;
        text-align: right;

    }

    .table {
        border-left: 1px solid gainsboro;
        border-right: 1px solid gainsboro;
        border-bottom: 1px solid gainsboro;
        width: 100%;
        margin-bottom: 250px;
    }
    .div_lien_etudiants {
        border-bottom: 1px solid gainsboro;
        border-top: 1px solid gainsboro;
        margin-top: 60px;

    }
    .info {
        text-align: center;
        color: #fff;
        position: relative;
        display: table;
        width: 100%;
        height: 420px;
        padding-top: 210px;
    }
    .roleFormateur {
        color: #2a333d;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.2;
        text-overflow: ellipsis;
        overflow: hidden;
    }
   h1, h5,span{
        font-family:'Roboto',sans-serif;
    }
</style>

    <div style=\"background-image:url('{{asset('img/xyz.jpg')}}');background-size:contain;
            height:auto; background-position:center center;
                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
        <div style=\"padding:150px;margin-left:-70px;\">
            <h2 id=\"cours_en_video\" style=\"font-size:35px;\">Devenez formateur pour Crowdedu</h2>
            {#style=\"background: -webkit-linear-gradient(right,black,#006DA4);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;opacity:100%;#}
            <div style=\"position: absolute;
                \t\twidth: 575px;
                \t\theight: 1px;
                \t\tleft: 140px;
                \t\ttop: 230px;
                        margin-right:10px;
                        background:linear-gradient(90deg,#006DA4,#95C11E);\"></div>

            <div id=\"Formation_en_ligne_aupr_s_des_\">
                <span>Formation en ligne auprès des meilleurs formateurs
                    <br/>et institutions ici 
                        et partout dans le monde
                </span>
            </div>


            <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;text-align: left;
                    \t\t\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                {% else %}
                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                {% endif %}


            </div>


        </div>


    </div>
</div>{% endblock %}

{% block barrier %}
<div class=\"container_video\">
<h1 class=\"section-title\" style=\"text-align:center;\">Qui peut etre formateurs sur Crowdedu Africa ?</h1>
<div class=\"videos\" style=\"width:900px;\">
<iframe allowfullscreen=\"allowfullscreen\" class=\"youtube\" frameborder=\"0\" height=\"560\"  src=\"https://www.youtube.com/embed/YBY-nbIGxI4\"
 width=\"1150\"></iframe>
</div>
</div>
{% endblock %}
{# {% block cours %}{% endblock %} #}
 {% block categories %}
<div class=\"component\">
<h3 class=\"section-title\">Le mentorat chez Crowdedu Africa</h3>
<p class=\"p_text\">
Crowdedu Africa est la plateforme d'éducation en ligne leader en Europe.
 Avec plus de 2,5 millions de membres, nous rendons l'éducation accessible à tous,
  notamment grâce à des diplômes 100% en ligne. 

Le mentorat est au cœur de ces parcours diplômants : cet accompagnement personnalisé 
permet en effet aux étudiant·e·s d’atteindre leurs objectifs plus facilement.
 Le ou la mentor est un·e expert·e métier qui fait le point avec l'étudiant·e
  une fois par semaine et apporte son expérience pour apprendre mieux et plus vite. 
  C’est la garantie d’un suivi régulier pour pouvoir dépasser tout blocage et pour ne jamais
   être à court de motivation.

Nous recherchons aujourd'hui des mentors dans de multiples
 disciplines : data science, développement web, marketing digital...
  Si vous êtes top et que vous aimez partager votre savoir-faire, rejoignez-nous 
  ! Notre révolution de l'éducation vous attend.</p>
</div>
{% endblock %} 
{% block share %}

<div class=\"container\">
  <h2 style=\"text-align:center;\">Devenez Formateur</h2>
  <p>Poste disponible</p>            
  <table class=\"table table-hover \">
    <tbody>
      <tr>
   {% for poste in postes %}
        <td ><a href=\"{{path('poste_slug',{'slug':poste.slug})}}\"><h5 class=\"roleFormateur\"> {{poste.role}}
</h5></a></td>

        <td><span class=\"span_d\">{{poste.category.libelle}}</span></td>
      </tr>
 {% endfor %}

    </tbody>
  </table>
</div>

{% endblock %}

", "poste/poste.html.twig", "/var/www/html/crowdedu/templates/poste/poste.html.twig");
    }
}
