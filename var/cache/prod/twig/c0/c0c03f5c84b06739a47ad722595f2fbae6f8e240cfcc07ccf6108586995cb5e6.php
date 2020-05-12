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

/* cours/addCours.html.twig */
class __TwigTemplate_b45358138de049eadf1d5f197e788d16bb5bafebd7dbd22c4ecf974e08568d91 extends \Twig\Template
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
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'newsletter' => [$this, 'block_newsletter'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'latest' => [$this, 'block_latest'],
            'temoignages' => [$this, 'block_temoignages'],
            'categories' => [$this, 'block_categories'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "cours/addCours.html.twig", 1);
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
background:linear-gradient(#96bf31,rgba(255, 255,255, 0) 100%, rgba(0, 30, 0)) 100%  no-repeat, url(\"";
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
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
            height:auto; background-position:center center;
                 background-repeat: no-repeat;margin-top:80px;width:100%;\">
        <div style=\"padding:150px;margin-left:-70px;\">
            <h2 id=\"cours_en_video\" style=\"font-size:35px;\">Ayez un impact global</h2>
            ";
        // line 239
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
        // line 257
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 258
            echo "                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                ";
        } else {
            // line 266
            echo "                    <h4 style=\"font-family: 'Roboto', sans-serif;
                            \t\tfont-style: normal;
                            \t\tfont-weight: 200;
                            \t\tfont-size: 18px;
                            \t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
                            \">
                    </h4>
                ";
        }
        // line 274
        echo "

            </div>


        </div>


    </div>
</div>
<br><br>

";
    }

    // line 287
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 288
        echo "
";
    }

    // line 291
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 292
        echo " <div class=\"col-xxs-12 \"><h1 class=\"title\">Découvrez et développez votre potentiel</h1></div>

 <div class=\"row\" style=\"margin-left: -15px;
    margin-right: -15px; padding:20px;\">
 <div class=\"col-sm-4 text-content text-center \"><h3><i class=\"fas fa-money-check-alt\"></i></h3><h3>Gagnez de l’argent</h3>Vous gagnez de l’argent à chaque fois qu’un participant achète votre cours sur la place de marché. Vous touchez vos revenus tous les mois via Paypal ou Payoneer selon votre préférence.</div>
<div class=\"col-sm-4 text-content text-center \"><h3><i class=\"far fa-play-circle\"></i></h3><h3>Ayez un impact dans la vie des participants</h3>En partageant vos connaissances, vous aidez les personnes inscrites à votre cours à développer leurs compétences, leur carrière ou à progresser dans leurs passions.</div>
 <div class=\"col-sm-4 text-content text-center \"><h3><i class=\"far fa-hand-point-right\"></i></h3>    <h3>Vous êtes accompagné</h3>Rejoignez notre communauté de formateurs et profitez de toutes nos ressources pour vous guider lors de la création de votre cours.</div>
 </div>

";
    }

    // line 302
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 303
        echo " <div class=\"col-xxs-12 \" style=\"padding:50px; height:130px;background-color:#96bf31;\">
 <h1 class=\"title\" style=\"color:white;\">Un dynamisme exceptionnel</h1>
 </div>

 <div class=\"col-xxs-12 \" style=\"padding:50px; height:130px;\">
 <h1 class=\"title\">Élargissez votre public</h1>
 </div>

 <div class=\"col-xxs-12 \" style=\"padding:20px; height:130px;\">
 <h3 class=\"title\">Grâce à la mise en relation de formateurs et d'étudiants présents aux quatre coins du globe, 
 nous avons la possibilité à chaque instant d'impacter positivement des vies partout dans le monde.</h3>
 </div>
  <div class=\"row\" style=\"margin-left: -15px;
    margin-right: -15px; padding:20px; display:flex;\">
 <div class=\"col-sm-4 text-center mb\"><h3><img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mme_sylla.png"), "html", null, true);
        echo "\" class=\"imgp\"/><br>Mme Sylla<br><span class=\"iot\">Directrice</span>
</h3><span class=\"spanp\">J'ai pu tester différents formats et encodages pour obtenir un feedback correct de la part de Udemy Technique. Retour très rapide de l'équipe.</span> </div>
<div class=\"col-sm-4  text-center mb\" style=\"margin-bottom:30px;\"><h3><img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mme_sylla.png"), "html", null, true);
        echo "\" class=\"imgp\" /><br>Mme Sylla</br><span class=\"iot\">Directeur Technique</span></h3><span class=\"spanp\">Les outils mis à disposition sont pensés pour vous faciliter la tâche. Les supports clairs et précis, la disponibilité des équipes sont pour moi un atout précieux.</span></div>
 <div class=\"col-sm-4  text-center mb\"><h3><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mme_sylla.png"), "html", null, true);
        echo "\"  class=\"imgp\"/><br>Mme Sylla</br><span class=\"iot\">Entrepreneur et Formateur</span></h3><span class=\"spanp\">La plateforme d'Udemy regorge d'étudiants curieux, provenant de dizaines de pays et les différentes promotions vous permettent de toucher un public très large.</span></div>
 </div>
 <center>
<a class=\"btn \" style=\"background-color:#96bf31;color:white;\" href=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acid");
        echo "\">Commencer maintenant</a>
</center>;
";
    }

    // line 326
    public function block_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 327
        echo "\t
\t";
    }

    // line 329
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "


";
    }

    // line 334
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 336
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 338
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "cours/addCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 338,  457 => 336,  451 => 334,  444 => 330,  440 => 329,  435 => 327,  431 => 326,  424 => 323,  418 => 320,  414 => 319,  409 => 317,  393 => 303,  389 => 302,  376 => 292,  372 => 291,  367 => 288,  363 => 287,  347 => 274,  337 => 266,  327 => 258,  325 => 257,  305 => 239,  297 => 231,  125 => 62,  65 => 4,  61 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cours/addCours.html.twig", "/var/www/html/CROWDEDU/templates/cours/addCours.html.twig");
    }
}
