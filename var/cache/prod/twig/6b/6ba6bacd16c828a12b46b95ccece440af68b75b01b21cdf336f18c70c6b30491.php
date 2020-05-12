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

/* cours/addCoursName.html.twig */
class __TwigTemplate_a28c036c0c4affd94b027d0288c56ce260e37febe6218f7e9c444a715ede55f2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
            'background' => [$this, 'block_background'],
            'cat' => [$this, 'block_cat'],
            'cours' => [$this, 'block_cours'],
            'deal' => [$this, 'block_deal'],
            'newsletter' => [$this, 'block_newsletter'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'options' => [$this, 'block_options'],
            'latest' => [$this, 'block_latest'],
            'section' => [$this, 'block_section'],
            'categories' => [$this, 'block_categories'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("home/index.html.twig", "cours/addCoursName.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
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
.main_slider{
height:450px;
background:linear-gradient(#053651,rgba(255, 255,255, 0) 100%, rgba(0, 30, 0)) 100%  no-repeat, url(\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/s4.jpg"), "html", null, true);
        echo "\") 100% 10% no-repeat;
background-position:100% 100%;


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
    border-top: 2px solid #4682B4;
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
</style>
<div class=\"main_slider\">
<div class=\"container fill_height\">
<div class=\"info\">
<h2  style=\"color:white;\">Devenez formateur pour Crowdedu Africa</h2>
<br/>
<p style=\"color:white; font-size:17px;\">Partager votre expérience en accompagnant des jeunes</p>
</div>
</div>
</div><br><br>
";
    }

    // line 214
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "
";
    }

    // line 218
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "
";
    }

    // line 221
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "


";
    }

    // line 226
    public function block_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "\t<div class=\"newsletter\">
\t\t\t<div class=\"row\" style=\"background-color:#053651;\">
\t\t\t\t\t<div class=\"\" style=\"height:150px; padding:25px; margin-left:450px;\">

\t\t\t\t\t\t<h3 style=\"text-align:center; color:#ffffff;\">Nous sommes là pour vous aider.</h3>
\t\t\t\t\t\t<button class=\"contact-button\" tabindex=\"0\" role=\"button\"><a href=\"\"><span style=\"color:#ffffff;\">Commencer maintenant</span></a></button>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t</div>
\t";
    }

    // line 238
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 239
        echo "
";
    }

    // line 241
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        echo "

";
    }

    // line 245
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 247
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 249
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "cours/addCoursName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 249,  354 => 247,  348 => 245,  342 => 242,  338 => 241,  333 => 239,  329 => 238,  315 => 227,  311 => 226,  304 => 222,  300 => 221,  295 => 219,  291 => 218,  286 => 215,  282 => 214,  126 => 62,  66 => 4,  62 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/addCoursName.html.twig", "/var/www/html/CROWDEDU/templates/cours/addCoursName.html.twig");
    }
}
