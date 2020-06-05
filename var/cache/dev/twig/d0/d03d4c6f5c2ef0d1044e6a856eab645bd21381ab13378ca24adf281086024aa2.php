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

/* cours/addCours1.html.twig */
class __TwigTemplate_c8cbe5f8e0a6ab365c2b3493f84b0ff40e2280a71881c476a263e7663a5d17f0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'background' => [$this, 'block_background'],
            'tabs' => [$this, 'block_tabs'],
            'cat' => [$this, 'block_cat'],
            'categories' => [$this, 'block_categories'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'newsletters' => [$this, 'block_newsletters'],
            'options' => [$this, 'block_options'],
            'campagne' => [$this, 'block_campagne'],
            'temoignages' => [$this, 'block_temoignages'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/addCours1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/addCours1.html.twig"));

        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/addCours1.html.twig", 1);
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
        echo "<style>
.fx {
    flex: 1;
    min-width: 1px;
}
.channels--teach .small-content {
    max-width: 510px;
}
channels--teach .text-shadow {
    text-shadow: 0 2px 4px rgba(41,48,59,0.5);
}
h3, .h3 {
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
    color:#fff;
}
.channels--teach .text-shadow {
    text-shadow: 0 2px 4px rgba(41,48,59,0.5);
}
h1 {
    display: block;
    font-size: 45px;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: 300;
}
.btn-b {
    color: #FFF;
    background-color: #96bf31;
    border: 1px solid transparent;
    margin-top:40px;
    border-color: #96bf31;
}

p{
    text-align: center;
}
h5{
  text-align: center;
  font-family:ubuntu;
  font-size:14px;  
}
.text-shadow-text{
font-family:ubuntu;
font-weight: 300;
line-height: 1.287;
font-size: 55px;
word-break: break-word;
text-align: center;
}
.text-shadow {
text-align: center;
font-size: 16px;
font-family:ubuntu;
color:#fff ! important;
}
.title{
    margin-top:-20px;
    text-align: center;
    line-height: 1.287;
    font-family:ubuntu;
    font-weight: 300;
}
.trait{
    border-top: 2px solid #96bf31;
    width:45px;
}
#voir{
    margin-left:80%;background:inherit;
    border-color: #41444b;
}
#voir:hover{
    background:#41444b;
    color:#fff ! important;
}
h4{
    text-align:center;
    color:#747777;
    font-size:16px;
    font-family:ubuntu;
}
.benefit_content{
    text-align:center;
    font-weight: 300;
    font-family:ubuntu;
}
.benefit_content h6{
   color:#747777; 
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
    padding-top:100px;
    padding-bottom: 50px;

}
.component {
    position: relative;
    padding-top: 50px;
    padding-bottom: 50px;
    padding-left: 100px;
    padding-right: 100px;
    border-bottom: 1px solid #e6f0f6;
    border-top: 1px solid #e6f0f6;
    background-color: #ffffff;
}
.component:hover{
    border-bottom:1px solid gainsboro;
    border-top:1px solid gainsboro;
}
.section-title {
    font-size: 35px;
    color: #053651;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 12px;
    text-transform: uppercase;
    text-align: center;
    padding-bottom:30px;
}
.p_text{
        margin: 0 0 10px;
}
.span_d{
    padding-left:600px;
    text-align: right;

}

.table{
    border-left:1px solid gainsboro;
    border-right: 1px solid gainsboro;
    border-bottom: 1px solid gainsboro;
    width:100%;
    margin-bottom:250px;
}
.div_lien_etudiants{
 border-bottom: 1px solid gainsboro;
 border-top: 1px solid gainsboro;
margin-top:60px;

}
.info{
    text-align: center;
    color: #fff;
    position: relative;
    display: table;
    width: 100%;
    height: 420px;
    padding-top:210px;
} 
.roleFormateur{
        color: #2a333d;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.2;
    text-overflow: ellipsis;
    overflow: hidden;
}
    .text-center{
        ext-align: center;
    }
    .mb{
        border:1px solid gainsboro;
    }
    .mb{
        border-top:5px solid #96bf31;
    }
    .imgp{
    overflow:hidden;
    -webkit-border-radius:50px;
    -moz-border-radius:50px;
    border-radius:50px;
    width:90px;
    height:90px;
  }
  .spanp{
      font-size:13px;
  }
  .iot{
      font-size:13px;
  }
  .title{
      color:#053651;
  }
</style>

    <div style=\"background-image:url('";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
            height:auto; background-position:center center;
                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
        <div style=\"padding:150px;margin-left:-70px;\">
            <h2 id=\"cours_en_video\" style=\"font-size:35px;\">Ayez un impact global</h2>
            ";
        // line 232
        echo "            <div style=\"position: absolute;
                \t\twidth: 575px;
                \t\theight: 1px;
                \t\tleft: 140px;
                \t\ttop: 230px;
                        margin-right:10px;
                        background:linear-gradient(90deg,#006DA4,#95C11E);\"></div>

            <div id=\"Formation_en_ligne_aupr_s_des_\">
                <span>Construisez votre cours en ligne et monétisez
                    <br/>votre expertise en partageant votre savoir <br/>
                    partout dans le monde
                </span>
            </div>


            <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;text-align: left;
                    \t\t\">
                ";
        // line 250
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 251
            echo "                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                ";
        } else {
            // line 259
            echo "                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                ";
        }
        // line 267
        echo "

            </div>


        </div>


    </div>
</div>
<br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 281
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

    // line 282
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 283
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "categories"));

        // line 284
        echo "            <section style=\"border-top:1px solid silver; margin:25px;\">
            
<form method=\"post\" action=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acid");
        echo "\">
        <div class=\"col-md-4 description\" style=\"margin-top:30px;padding-right:20px;\">
        <h3>Le nom du cours</h3>
      </div>
      <div class=\"col-md-7\"  style=\"padding-left:15px; padding-right:15px;margin-left:400px; padding-bottom:15px;\">
               
                <div class=\"form-group \">
                   <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
                </div>
                </div>
                </section>
                <section style=\"border-top:1px solid silver;\" required>
                
                <h3 style=\"padding-left:35px;\">
                Choisir la catégorie
                </h3>
                </div>
                <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
            <select class=\"form-control\" id=\"categorie\" name=\"categorie\" required=\"required\">
              <option value=\"none\" selected=\"\" disabled=\"\">Sélectionner la catégorie</option>
              ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 306, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 307
            echo "           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 307), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 307), "html", null, true);
            echo "</option>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "          
       </select>
     
                </div>
                  </section>
                  <section style=\"padding-bottom: 20px;
    margin-bottom: 20px;
    padding-top: 0px;
    overflow: hidden;width:1300px;\">
                  
                 
                </section>
             <section style=\"border-top:1px solid silver;\">
             <div class=\"col-md-8\">
             <h3 style=\"padding-left:25px;\">
             Questions
             </h3>
             </div>  
                <div class=\"form-group col-md-7\"style=\"margin-left:400px;;\" >
                    <select name=\"question\" class=\"form-control\" required=\"required\">
                      <option value=\"none\" selected=\"\" disabled=\"\">
                     Selectionner celui qui vous convient</option>
                     <option value=\"Je suis occupé en ce moment(0 à 2h)\">Je suis occupé en ce moment(0 à 2h)</option>
                     <option value=\"Je travaillerai sur ce cours de temps en temps (2 à 4h)\">Je travaillerai sur ce cours de temps en temps (2 à 4h)</option>
                     <option value=\"Je suis très flexible (plus de 5h)\">Je suis très flexible (plus de 5h)</option>
                     <option value=\"Je ne sais pas encore si j'ai le temps\">Je ne sais pas encore si j'ai le temps</option>
                </select>



                  </div>
                  
                  
         </section>  
      </div>
         <div class=\"card-footer text-muted\" style=\"padding-top:5px;\">
        <center>
       <button class=\"btn btn-lg\" style=\"background-color:#96bf31;color:#ffffff;font-family:ubuntu; width:250px; height:50px;\" type=\"submit\" name=\"ajouter\"><strong style=\"font-size:18px;\">S'inscrire</strong></button>
                   
          </center>        
        </div>
          </form>
          
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 353
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

    // line 354
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

    // line 355
    public function block_newsletters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newsletters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newsletters"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 356
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 357
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

    // line 358
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

    public function getTemplateName()
    {
        return "cours/addCours1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 358,  585 => 357,  567 => 356,  549 => 355,  531 => 354,  513 => 353,  460 => 309,  449 => 307,  445 => 306,  422 => 286,  418 => 284,  408 => 283,  390 => 282,  372 => 281,  350 => 267,  340 => 259,  330 => 251,  328 => 250,  308 => 232,  300 => 224,  77 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'cours/allCours.html.twig'%}
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
    text-shadow: 0 2px 4px rgba(41,48,59,0.5);
}
h3, .h3 {
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
    color:#fff;
}
.channels--teach .text-shadow {
    text-shadow: 0 2px 4px rgba(41,48,59,0.5);
}
h1 {
    display: block;
    font-size: 45px;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: 300;
}
.btn-b {
    color: #FFF;
    background-color: #96bf31;
    border: 1px solid transparent;
    margin-top:40px;
    border-color: #96bf31;
}

p{
    text-align: center;
}
h5{
  text-align: center;
  font-family:ubuntu;
  font-size:14px;  
}
.text-shadow-text{
font-family:ubuntu;
font-weight: 300;
line-height: 1.287;
font-size: 55px;
word-break: break-word;
text-align: center;
}
.text-shadow {
text-align: center;
font-size: 16px;
font-family:ubuntu;
color:#fff ! important;
}
.title{
    margin-top:-20px;
    text-align: center;
    line-height: 1.287;
    font-family:ubuntu;
    font-weight: 300;
}
.trait{
    border-top: 2px solid #96bf31;
    width:45px;
}
#voir{
    margin-left:80%;background:inherit;
    border-color: #41444b;
}
#voir:hover{
    background:#41444b;
    color:#fff ! important;
}
h4{
    text-align:center;
    color:#747777;
    font-size:16px;
    font-family:ubuntu;
}
.benefit_content{
    text-align:center;
    font-weight: 300;
    font-family:ubuntu;
}
.benefit_content h6{
   color:#747777; 
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
    padding-top:100px;
    padding-bottom: 50px;

}
.component {
    position: relative;
    padding-top: 50px;
    padding-bottom: 50px;
    padding-left: 100px;
    padding-right: 100px;
    border-bottom: 1px solid #e6f0f6;
    border-top: 1px solid #e6f0f6;
    background-color: #ffffff;
}
.component:hover{
    border-bottom:1px solid gainsboro;
    border-top:1px solid gainsboro;
}
.section-title {
    font-size: 35px;
    color: #053651;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 12px;
    text-transform: uppercase;
    text-align: center;
    padding-bottom:30px;
}
.p_text{
        margin: 0 0 10px;
}
.span_d{
    padding-left:600px;
    text-align: right;

}

.table{
    border-left:1px solid gainsboro;
    border-right: 1px solid gainsboro;
    border-bottom: 1px solid gainsboro;
    width:100%;
    margin-bottom:250px;
}
.div_lien_etudiants{
 border-bottom: 1px solid gainsboro;
 border-top: 1px solid gainsboro;
margin-top:60px;

}
.info{
    text-align: center;
    color: #fff;
    position: relative;
    display: table;
    width: 100%;
    height: 420px;
    padding-top:210px;
} 
.roleFormateur{
        color: #2a333d;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.2;
    text-overflow: ellipsis;
    overflow: hidden;
}
    .text-center{
        ext-align: center;
    }
    .mb{
        border:1px solid gainsboro;
    }
    .mb{
        border-top:5px solid #96bf31;
    }
    .imgp{
    overflow:hidden;
    -webkit-border-radius:50px;
    -moz-border-radius:50px;
    border-radius:50px;
    width:90px;
    height:90px;
  }
  .spanp{
      font-size:13px;
  }
  .iot{
      font-size:13px;
  }
  .title{
      color:#053651;
  }
</style>

    <div style=\"background-image:url('{{asset('img/xyz.jpg')}}');background-size:contain;
            height:auto; background-position:center center;
                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
        <div style=\"padding:150px;margin-left:-70px;\">
            <h2 id=\"cours_en_video\" style=\"font-size:35px;\">Ayez un impact global</h2>
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
                <span>Construisez votre cours en ligne et monétisez
                    <br/>votre expertise en partageant votre savoir <br/>
                    partout dans le monde
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
</div>
<br><br>

{% endblock %}

{% block tabs %}{% endblock %}
{% block cat %}{% endblock %}
{% block categories %}
            <section style=\"border-top:1px solid silver; margin:25px;\">
            
<form method=\"post\" action=\"{{path('acid')}}\">
        <div class=\"col-md-4 description\" style=\"margin-top:30px;padding-right:20px;\">
        <h3>Le nom du cours</h3>
      </div>
      <div class=\"col-md-7\"  style=\"padding-left:15px; padding-right:15px;margin-left:400px; padding-bottom:15px;\">
               
                <div class=\"form-group \">
                   <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" required>
                </div>
                </div>
                </section>
                <section style=\"border-top:1px solid silver;\" required>
                
                <h3 style=\"padding-left:35px;\">
                Choisir la catégorie
                </h3>
                </div>
                <div class=\"form-group col-md-7\" style=\"margin-left:400px;\">
            <select class=\"form-control\" id=\"categorie\" name=\"categorie\" required=\"required\">
              <option value=\"none\" selected=\"\" disabled=\"\">Sélectionner la catégorie</option>
              {% for cat in categories %}
           <option value=\"{{cat.id}}\">{{cat.libelle}}</option>
           {% endfor %}
          
       </select>
     
                </div>
                  </section>
                  <section style=\"padding-bottom: 20px;
    margin-bottom: 20px;
    padding-top: 0px;
    overflow: hidden;width:1300px;\">
                  
                 
                </section>
             <section style=\"border-top:1px solid silver;\">
             <div class=\"col-md-8\">
             <h3 style=\"padding-left:25px;\">
             Questions
             </h3>
             </div>  
                <div class=\"form-group col-md-7\"style=\"margin-left:400px;;\" >
                    <select name=\"question\" class=\"form-control\" required=\"required\">
                      <option value=\"none\" selected=\"\" disabled=\"\">
                     Selectionner celui qui vous convient</option>
                     <option value=\"Je suis occupé en ce moment(0 à 2h)\">Je suis occupé en ce moment(0 à 2h)</option>
                     <option value=\"Je travaillerai sur ce cours de temps en temps (2 à 4h)\">Je travaillerai sur ce cours de temps en temps (2 à 4h)</option>
                     <option value=\"Je suis très flexible (plus de 5h)\">Je suis très flexible (plus de 5h)</option>
                     <option value=\"Je ne sais pas encore si j'ai le temps\">Je ne sais pas encore si j'ai le temps</option>
                </select>



                  </div>
                  
                  
         </section>  
      </div>
         <div class=\"card-footer text-muted\" style=\"padding-top:5px;\">
        <center>
       <button class=\"btn btn-lg\" style=\"background-color:#96bf31;color:#ffffff;font-family:ubuntu; width:250px; height:50px;\" type=\"submit\" name=\"ajouter\"><strong style=\"font-size:18px;\">S'inscrire</strong></button>
                   
          </center>        
        </div>
          </form>
          
{% endblock %}
{% block barrier %}{% endblock %}
{% block fonctionnalites %}{% endblock %}
{% block newsletters %}{% endblock %}
{% block options %}{% endblock %}
{% block campagne %}{% endblock %}
{% block temoignages %}{% endblock %}




      

    
", "cours/addCours1.html.twig", "/home/coumba/Bureau/cdiokane/templates/cours/addCours1.html.twig");
    }
}
