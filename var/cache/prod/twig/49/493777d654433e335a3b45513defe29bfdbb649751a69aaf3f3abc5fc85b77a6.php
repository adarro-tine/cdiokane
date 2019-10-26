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
class __TwigTemplate_fe71643e32635d93693368e28099a2f857d12c15c821f012c7c88e02950c30a5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "poste/poste_inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
                            height:auto; background-position:center center;
                                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
    <div style=\"padding:150px;margin-left:-70px;\">
        <h2 id=\"cours_en_video\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rolePoste"] ?? null), "role", [], "any", false, false, false, 7), "html", null, true);
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
    }

    // line 31
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
    <section style=\"border-top:1px solid silver; margin:25px;\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "formateur", "method" => "post", "enctype" => "multipart/form-data"]]);
        echo "
        <div class=\"col-md-4 description\" style=\"margin-top:30px;\">
            <h3>Informations personnelles</h3>
            <p>Parlez-nous de vous</p>
        </div>
        <div class=\"col-md-7\" style=\"padding-left:15px; padding-right:15px;margin-left:400px; padding-bottom:15px;\">

            <div class=\"form-group \">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control champ", "id" => "nom", "name" => "nom"]]);
        echo "
            </div>
            <div class=\"form-group \">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control champ", "id" => "prenom", "name" => "prenom"]]);
        echo "
            </div>
            <div class=\"form-group \">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control champ", "id" => "email"]]);
        echo "
            </div>
            <div class=\"form-group \">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control champ", "id" => "telephone"]]);
        echo "
            </div>
            <div class=\"form-group \">
                <label for=\"exampleFormControlSelect1\">Poste</label>
                <select class=\"form-control\" id=\"sposte\" name=\"sposte\">
                    <option>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rolePoste"] ?? null), "role", [], "any", false, false, false, 56), "html", null, true);
        echo "</option>
                </select>
            </div>
            <div class=\"form-group \">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control champ", "id" => "photo"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cv", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control champ", "id" => "cv"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "motivation", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control champ", "id" => "motivation"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "q1", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "form-control champ", "id" => "q1"]]);
        echo "
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "q2", [], "any", false, false, false, 103), 'row', ["attr" => ["class" => "form-control champ", "id" => "q2"]]);
        echo "
            </div>
            <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "q3", [], "any", false, false, false, 106), 'row', ["attr" => ["class" => "form-control champ", "id" => "q3"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 125
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 126
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 128
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 129
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 130
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 131
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
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
        return array (  258 => 131,  252 => 130,  246 => 129,  240 => 128,  234 => 126,  228 => 125,  221 => 119,  205 => 106,  199 => 103,  193 => 100,  178 => 88,  162 => 75,  144 => 60,  137 => 56,  129 => 51,  123 => 48,  117 => 45,  111 => 42,  100 => 34,  96 => 32,  92 => 31,  69 => 11,  65 => 7,  57 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste/poste_inscription.html.twig", "/var/www/html/crowdedu/templates/poste/poste_inscription.html.twig");
    }
}
