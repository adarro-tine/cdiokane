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

/* poste/poste_inscription.html.twig */
class __TwigTemplate_0aaaf7835c27e69256aa3eaeb3538c7194f52947b528f24d858a2654eef20872 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'background' => [$this, 'block_background'],
            'categories' => [$this, 'block_categories'],
            'tabs' => [$this, 'block_tabs'],
            'barrier' => [$this, 'block_barrier'],
            'campagne' => [$this, 'block_campagne'],
            'share' => [$this, 'block_share'],
            'temoignages' => [$this, 'block_temoignages'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste/poste_inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste/poste_inscription.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "poste/poste_inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 3
        echo "<div style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
                            height:auto; background-position:center center;
                                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
    <div style=\"padding:150px;margin-left:-70px;\">
        <h2 id=\"cours_en_video\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rolePoste"]) || array_key_exists("rolePoste", $context) ? $context["rolePoste"] : (function () { throw new RuntimeError('Variable "rolePoste" does not exist.', 7, $this->source); })()), "role", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        ";
        // line 11
        echo "        <div style=\"position: absolute;
                                        \t\twidth: 575px;
                                        \t\theight: 1px;
                                        \t\tleft: 140px;
                                        \t\ttop: 230px;
                                                margin-right:10px;
                                                background:linear-gradient(90deg,#006DA4,#95C11E);\"></div>

        <div id=\"Formation_en_ligne_aupr_s_des_\"></div>


        <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;text-align: left;
                                                \t\t\"></div>


    </div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 32
        echo "
    <section style=\"border-top:1px solid silver; margin:25px;\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["id" => "formateur", "method" => "post", "enctype" => "multipart/form-data"]]);
        echo "
        <div class=\"col-md-4 description\" style=\"margin-top:30px;\">
            <h3>Informations personnelles</h3>
            <p>Parlez-nous de vous</p>
        </div>
        <div class=\"col-md-7\" style=\"padding-left:15px; padding-right:15px;margin-left:400px; padding-bottom:15px;\">

            <div class=\"form-group \">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control champ", "id" => "nom", "name" => "nom"]]);
        echo "
            </div>
            <div class=\"form-group \">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control champ", "id" => "prenom", "name" => "prenom"]]);
        echo "
            </div>
            <div class=\"form-group \">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control champ", "id" => "email"]]);
        echo "
            </div>
            <div class=\"form-group \">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "telephone", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control champ", "id" => "telephone"]]);
        echo "
            </div>
            <div class=\"form-group \">
                <label for=\"exampleFormControlSelect1\">Poste</label>
                <select class=\"form-control\" id=\"sposte\" name=\"sposte\">
                    <option>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rolePoste"]) || array_key_exists("rolePoste", $context) ? $context["rolePoste"] : (function () { throw new RuntimeError('Variable "rolePoste" does not exist.', 56, $this->source); })()), "role", [], "any", false, false, false, 56), "html", null, true);
        echo "</option>
                </select>
            </div>
            <div class=\"form-group \">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "photo", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control champ", "id" => "photo"]]);
        echo "
            </div>
        </div>
        <section style=\"padding-bottom: 20px;
                    margin-bottom: 20px;
                    padding-top: 0px;
                    border-bottom: 1px solid silver;
                        border-top: 1px solid silver;
                    overflow: hidden;width:1300px;\">
            <div class=\"col-md-3 description\">
                <h3>
                    CV
                </h3>
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "cv", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control champ", "id" => "cv"]]);
        echo "
            </div>
        </section>
        <section style=\"padding-bottom: 20px;
                    margin-bottom: 20px;
                    padding-top: 0px;
                    overflow: hidden;width:1300px;\">
            <div class=\"col-md-6 description\">
                <h3>
                    Lettre de motivation
                </h3>
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "motivation", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control champ", "id" => "motivation"]]);
        echo "
            </div>

        </section>
        <section style=\"border-top:1px solid silver;\">
            <div class=\"col-md-8\">
                <h3>
                    Questions
                </h3>
                <p>Merci de compléter les questions additionnelles</p>
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;;\">
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "q1", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "form-control champ", "id" => "q1"]]);
        echo "
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "q2", [], "any", false, false, false, 103), 'row', ["attr" => ["class" => "form-control champ", "id" => "q2"]]);
        echo "
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "q3", [], "any", false, false, false, 106), 'row', ["attr" => ["class" => "form-control champ", "id" => "q3"]]);
        echo "
            </div>

        </section>
    </div>
    <div class=\"card-footer text-muted\" style=\"padding-top:5px;\">
        <center>
            <button class=\"btn btn-lg\" style=\"background-color:#96bf31;color:#ffffff;font-family:ubuntu; width:250px; height:50px;\">
                <strong style=\"font-size:18px;\">S'inscrire</strong>
            </button>

        </center>
    </div>
    ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
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

    // line 126
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barrier"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
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

    // line 129
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "share"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "temoignages"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonctionnalites"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "poste/poste_inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 131,  336 => 130,  318 => 129,  300 => 128,  282 => 126,  264 => 125,  251 => 119,  235 => 106,  229 => 103,  223 => 100,  208 => 88,  192 => 75,  174 => 60,  167 => 56,  159 => 51,  153 => 48,  147 => 45,  141 => 42,  130 => 34,  126 => 32,  116 => 31,  87 => 11,  83 => 7,  75 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig'%}
{% block background %}
<div style=\"background-image:url('{{asset('img/xyz.jpg')}}');background-size:contain;
                            height:auto; background-position:center center;
                                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
    <div style=\"padding:150px;margin-left:-70px;\">
        <h2 id=\"cours_en_video\">{{rolePoste.role}}</h2>
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

        <div id=\"Formation_en_ligne_aupr_s_des_\"></div>


        <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;text-align: left;
                                                \t\t\"></div>


    </div>


</div>
{% endblock %}
{% block categories %}

    <section style=\"border-top:1px solid silver; margin:25px;\">
        {{form_start(form,{'attr':{'id':'formateur','method':'post','enctype':'multipart/form-data'}})}}
        <div class=\"col-md-4 description\" style=\"margin-top:30px;\">
            <h3>Informations personnelles</h3>
            <p>Parlez-nous de vous</p>
        </div>
        <div class=\"col-md-7\" style=\"padding-left:15px; padding-right:15px;margin-left:400px; padding-bottom:15px;\">

            <div class=\"form-group \">
                {{form_row(form.nom,{'attr':{'class':'form-control champ','id':'nom','name':'nom'}}) }}
            </div>
            <div class=\"form-group \">
                {{form_row(form.prenom,{'attr':{'class':'form-control champ','id':'prenom','name':'prenom'}}) }}
            </div>
            <div class=\"form-group \">
                {{form_row(form.email,{'attr':{'class':'form-control champ','id':'email'}}) }}
            </div>
            <div class=\"form-group \">
                {{form_row(form.telephone,{'attr':{'class':'form-control champ','id':'telephone'}}) }}
            </div>
            <div class=\"form-group \">
                <label for=\"exampleFormControlSelect1\">Poste</label>
                <select class=\"form-control\" id=\"sposte\" name=\"sposte\">
                    <option>{{rolePoste.role}}</option>
                </select>
            </div>
            <div class=\"form-group \">
                {{form_row (form.photo,{'attr':{'class':'form-control champ','id':'photo'}}) }}
            </div>
        </div>
        <section style=\"padding-bottom: 20px;
                    margin-bottom: 20px;
                    padding-top: 0px;
                    border-bottom: 1px solid silver;
                        border-top: 1px solid silver;
                    overflow: hidden;width:1300px;\">
            <div class=\"col-md-3 description\">
                <h3>
                    CV
                </h3>
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                {{form_row(form.cv,{'attr':{'class':'form-control champ','id':'cv'}}) }}
            </div>
        </section>
        <section style=\"padding-bottom: 20px;
                    margin-bottom: 20px;
                    padding-top: 0px;
                    overflow: hidden;width:1300px;\">
            <div class=\"col-md-6 description\">
                <h3>
                    Lettre de motivation
                </h3>
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                {{form_row(form.motivation,{'attr':{'class':'form-control champ','id':'motivation'}}) }}
            </div>

        </section>
        <section style=\"border-top:1px solid silver;\">
            <div class=\"col-md-8\">
                <h3>
                    Questions
                </h3>
                <p>Merci de compléter les questions additionnelles</p>
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;;\">
                {{form_row(form.q1,{'attr':{'class':'form-control champ','id':'q1'}}) }}
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                {{form_row(form.q2,{'attr':{'class':'form-control champ','id':'q2'}}) }}
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                {{form_row(form.q3,{'attr':{'class':'form-control champ','id':'q3'}}) }}
            </div>

        </section>
    </div>
    <div class=\"card-footer text-muted\" style=\"padding-top:5px;\">
        <center>
            <button class=\"btn btn-lg\" style=\"background-color:#96bf31;color:#ffffff;font-family:ubuntu; width:250px; height:50px;\">
                <strong style=\"font-size:18px;\">S'inscrire</strong>
            </button>

        </center>
    </div>
    {{ form_end(form) }}

{% endblock %}



{% block tabs %}{% endblock %}
{% block barrier %}{% endblock %}

{% block campagne %}{% endblock %}
{% block share %}{% endblock %}
{% block temoignages %}{% endblock %}
{% block fonctionnalites %} {% endblock %}




      

    
", "poste/poste_inscription.html.twig", "/var/www/html/CROWDEDU/templates/poste/poste_inscription.html.twig");
    }
}
