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

/* home/index.html.twig */
class __TwigTemplate_343e19cf0f48c6cd7b4c5f78de1a6f8003b94edf55711eed5a0b8d672f9c1c1f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'header' => [$this, 'block_header'],
            'background' => [$this, 'block_background'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'categories' => [$this, 'block_categories'],
            'tabs' => [$this, 'block_tabs'],
            'share' => [$this, 'block_share'],
            'temoignages' => [$this, 'block_temoignages'],
            'footer' => [$this, 'block_footer'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 33
        $this->loadTemplate("contact/flash_messages.html.twig", "home/index.html.twig", 33)->display($context);
        // line 34
        echo "
</head>
<body style=\"overflow-y: auto;
overflow-x: hidden;\">
";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 118
        echo "<div id=\"container\">
";
        // line 119
        $this->displayBlock('background', $context, $blocks);
        // line 179
        $this->displayBlock('barrier', $context, $blocks);
        // line 196
        $this->displayBlock('fonctionnalites', $context, $blocks);
        // line 213
        $this->displayBlock('campagne', $context, $blocks);
        // line 215
        echo "

";
        // line 217
        $this->displayBlock('categories', $context, $blocks);
        // line 221
        $this->displayBlock('tabs', $context, $blocks);
        // line 256
        echo "   ";
        $this->displayBlock('share', $context, $blocks);
        // line 260
        echo "\t ";
        $this->displayBlock('temoignages', $context, $blocks);
        // line 264
        echo " 
\t ";
        // line 265
        $this->displayBlock('footer', $context, $blocks);
        // line 389
        echo "   ";
        $this->displayBlock('script', $context, $blocks);
        // line 520
        echo "
";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>

<title>crowdedu Africa</title>
<style id=\"applicationStylesheet\" type=\"text/css\">
 ::placeholder {
  color: blue;
  font-size: 2px;
}


\t
</style>
";
    }

    // line 38
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "<header style=\"position: fixed;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\tbackground: #FFFFFF;
\tz-index: 10;\">
<div style=\"width: 100%;
\theight: 45px;
\tbackground: rgba(0,109,164,1);\">
<div class=\"top_nav_left\" style=\"margin-left:150px;padding-top:3px;\">

<a href=\"#TaskListDialog\" role=\"button\" class=\"btn\" data-toggle=\"modal\" style=\"color:white;margin-top:-12px;font-size:10px;\"><i class=\"fa fa-user\" style=\"padding:5px;\"></i>Se connecter
</a>


";
        // line 55
        echo "
<ul style=\"display:flex;flex-wrap:wrap;margin-top:-17px;float:right;\">
\t\t\t\t<li style=\"padding:13px;color:white;\"><a href=\"https://www.facebook.com/crowdedu\"><i class=\"fab fa-facebook-f\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i></a></li>
\t\t\t\t<li style=\"padding:13px;\"><a href=\"#\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i></a></li>
                
</ul>  

</div>


</div>
<div class=\"main_nav_container\" style=\"background-color:#f5f5f5;height:auto;height:70px;padding:0;\">
\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"75%\" height=\"auto\"/></a>
\t\t\t\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\"  >
\t\t\t\t\t<div class=\"col-lg-12 text-right\" style=\"margin-left:50px;\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t\t\t<ul class=\"navbar_menu\" style=\"margin-top:-10px;\">
\t
\t\t\t\t<li class=\"active limenu\" style=\"margin-top:-1px;\"><a href=\"#\" id=\"ACCEUIL\" class=\"active activelien\" >Accueil</a></li>
\t\t\t\t<li class=\"active limenu\" style=\"margin-top:-1px;\"><a href=\"#\"  id=\"COURS\" class=\"active activelien\" >Cours</a></li>
\t\t\t\t<li class=\"limenu\" ><a href=\"#\"  id=\"FORMATEURS\" class=\"active activelien\">Formateurs</a></li>
         <li class=\"limenu\"><a href=\"#\" id=\"CONTACTEZ_NOUS\" class=\"active activelien\">Contactez-nous</a></li>

         <li class=\"checkoutt\" style=\"margin-right:25px;\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PanierController::menu"));
        echo "</li>

\t\t\t\t";
        // line 88
        echo "
\t\t\t\t\t\t\t\t
                <li style=\"margin-right:-90px;\">
        <form  method=\"post\" action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" id=\"search\" role=\"search\" class=\"ff\">
\t\t\t\t<div class=\"searchbar\">
          <input class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Que voulez-vous apprendre ?\" maxlength=\"200\" >
        <button href=\"\" type=\"submit\" class=\"search_icon\"><i class=\"fas fa-search\"></i></button>

        </div>
\t\t\t\t</form>\t
                </li>
               
\t\t\t\t\t\t\t\t
               


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"hamburger_container\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>


</header>
";
    }

    // line 119
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "<div  style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/xyz.jpg"), "html", null, true);
        echo "');background-size:contain;
height:auto; background-position:fixed;
     background-repeat: no-repeat;margin-top:65px;width:100%;\">
     <div style=\"padding:150px;margin-left:-70px;\">
    <h2 id=\"cours_en_video\">Financer votre formation</h2>
    ";
        // line 128
        echo "    <div style=\"position: absolute;
\t\twidth: 575px;
\t\theight: 1px;
\t\tleft: 140px;
\t\ttop: 230px;
        margin-right:10px;
        background:linear-gradient(90deg,#006DA4,#95C11E);\">
        </div>
        
<div id=\"Formation_en_ligne_aupr_s_des_\">
\t\t<span>Formation en ligne auprès des meilleurs formateurs <br/>et institutions ici 
    et partout dans le monde </span>
\t</div>
    

    <div id=\"#Rectangle_396\" style=\"width:300px; right:12px;margin-top:185px;height:50px;background:linear-gradient(90deg,#006DA4,#95C11E);\ttext-align: left;
\t\t\">
\t\t\t";
        // line 145
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 146
            echo "    
    <h4 style=\"\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: 200;
\t\tfont-size: 18px;
\t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
\">
    <a href=\"";
            // line 153
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demarrer");
            echo "\" role=\"button\"  style=\"color:white;text-decoration:none;\">Démarrer une campagne</a>
    </h4>
    ";
        } else {
            // line 156
            echo "    <h4 style=\"\tfont-family: ubuntu;
\t\tfont-style: normal;
\t\tfont-weight: 200;
\t\tfont-size: 18px;
\t\tcolor: rgba(255,255,255,1);text-align:center;padding-top:15px;
\">
    <a href=\"";
            // line 162
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" style=\"color:white;text-decoration:none;\">Démarrer une campagne</a>
    \t\t

    </h4>
    ";
        }
        // line 167
        echo " 

    </div>



     </div>


</div>
</div>
";
    }

    // line 179
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_jokalante.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">
<img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/caman.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">
<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_jokalante.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">
<img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/caman.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">
<img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_jokalante.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">

<img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/caman.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">
<img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_jokalante.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">
<img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/caman.png"), "html", null, true);
        echo "\" width=\"10%\" height=\"auto\" style=\"margin-top:7px;margin-left:25px;\">

<div>
<h1 style=\"text-align:center;margin-top:71px;color:#006DA4;\tfont-family: ubuntu;
font-weight:bold;\">No Barrier For Education.</h1>
<p style=\"margin-top:20px;text-align:center;font-size:22px;\">Accessible à tous.</p>
</div>
";
    }

    // line 196
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "<center>
<div id=\"fonctionnalites\" style=\"width:1200px;height:150px;margin-left:110px;display:flex;flex-wrap:wrap;padding-top:75px;\">
<div id=\"Cours_en_vid_os\" style=\"width:225px;height:45px;border-radius: 35px;margin-right:70px;background:linear-gradient(90deg,#006DA4,#95C11E);padding-bottom:25px;
\">
\t\t<span class=\"sp\">Cours en vidéos</span>
</div>
<div id=\"Financement_Participatif\" style=\"width:225px;height:45px;margin-right:70px;background:linear-gradient(90deg,#006DA4,#95C11E);border-radius: 35px;\">
\t\t<span class=\"sp\">Cursus diplomante</span>
</div><div id=\"Cursus_diplomante\" style=\"width:225px;height:45px;margin-right:70px;background:linear-gradient(90deg,#006DA4,#95C11E);border-radius: 35px;padding-top:10px;\">
\t\t<span  class=\"sp\">Financement Participatif</span>
</div><div id=\"\" style=\"width:225px;height:45px;background:linear-gradient(90deg,#006DA4,#95C11E);margin-right:70px;border-radius: 35px;padding-top:10px;\">
\t\t<span class=\"sp\">Organisation / Entreprise</span>
</div>
</div>
</center>
";
    }

    // line 213
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "  ";
    }

    // line 217
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "

";
    }

    // line 221
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "\t<div id=\"TaskListDialog\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"windowTitleLabel\" style=\"width:500px;margin:auto; background-color:white;\">
    <div class=\"modal-header\">
        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_crowdedu.png"), "html", null, true);
        echo "\" width=\"150\" height=\"50\" style=\"margin-left:150px;\"/>
    </div>
    <div class=\"modal-body\">
\t\t\t<p style=\"text-align:center;\">Une autre vision de la formation professionnelle</p>
        <div class=\"tabbable\">
        <ul class=\"nav nav-tabs tabs\" style=\"margin-left:60px;\">
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"tab_container\" style=\"color:#96bf31;font-weight:bold;display:inline-block;\" id=\"tc\">Connexion</a></li>
        <li><a href=\"#tab2\" data-toggle=\"tab\" style=\"padding: 0 20px;\" class=\"tab_container\" style=\"font-weight:normal;display:inline-block;color:black;\" id=\"ti\">Inscription</a></li>

\t\t\t\t</ul>
\t\t<br>
\t\t  
        <div class=\"tab-content\" style=\"height:400px;\">
\t\t\t\t<div id=\"msg\"></div>
\t\t\t\t<div id=\"info\"></div>
        <div class=\"erreur\" id=\"erreure\" style=\"display:none;color:black;\">Vous n'avez pas rempli correctement les champs du formulaire</div>

\t\t\t\t<br><br>
\t\t\t
\t\t\t\t</div>
        </div>
\t\t\t\t <div class=\"c-modal-x-out\">
  <a class=\"nostyle\" aria-label=\"fermer\" href=\"\" role=\"button\" data-track=\"true\" data-track-app=\"discovery\" data-track-action=\"close\" data-courselenium=\"close-modal-button\" >✕</a>
  </div>
   </div>
 
   </div>
\t <!-- Fin div container -->
\t </div>
\t <!-- aaaaaaaaaaaaa -->

   ";
    }

    // line 256
    public function block_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo "\t

   ";
    }

    // line 260
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        echo "
\t
\t";
    }

    // line 265
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "\t <!-- Footer -->
<footer class=\"page-footer font-small indigo\">

  <!-- Footer Links -->
\t
  <div class=\"containero text-center text-md-left\" style=\"background-color:#013552;padding-left:100px;padding-bottom:50px;padding-right:50px;\">

    <!-- Grid row -->
    <div class=\"row\">

      <!-- Grid column -->
      <div class=\"col-md-3 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 f\">Menu</h5><hr>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"\" class=\"fl\">Accueil</a>
          </li>
          
          <li>
            <a href=\"";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste");
        echo "\" class=\"fl\">Formateurs</a>
          </li>
          <li>
          <a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"fl\">Contact</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
    
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-3 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 f\">RETROUVEZ-NOUS</h5><hr>
";
        // line 313
        echo "        <ul class=\"list-unstyled\">
          <li>
<a href=\"https://web.facebook.com/crowdedu?_rdc=1&_rdr\" class=\"lf\"><i class=\"fab fa-facebook-f\" style=\"color:white; \"></i>  Facebook</a></li>
          <li >
<a href=\"#\" class=\"lf\"><i class=\"fab fa-linkedin-in\" style=\"color:white;\"></i>  Linkedin</a></li>
          <li>
<a href=\"#\" class=\"lf\"><i class=\"fab fa-instagram\" style=\"color:white;\"></i>  Instagram</a>
</li>
<li>
<a href=\"#\" class=\"lf\"><i class=\"fab fa-twitter\" style=\"color:white;\"></i>  Twitter</a>
</li>
</ul>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-3 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 f\">En plus</h5><hr>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste");
        echo "\" class=\"fl\">Devenez formateur</a>
          </li>
          <li>
            <a href=\"#!\" class=\"fl\">Conditions Générales d'Utilisations</a>
          </li>
          <li>
            <a href=\"#!\" class=\"fl\">Business</a>
          </li>
          <li>
            <a href=\"#!\" class=\"fl\">A propos de nous</a>
          </li>
        </ul>

      </div>
      <div class=\"col-md-3 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4 f\">Contactez-nous</h5><hr>

        <ul class=\"list-unstyled\">
          <li class=\"fl\">
immeuble SAMASSA | SICAP KARACK
          </li>
          <li class=\"fl\">info@crowdedu.africa
          </li>
          <li class=\"fl\">
\t\t\t\t\t338524693
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\" style=\"background-color:#96bf31;color:white;font-size:15px;\">© 2020 Copyright :
     Abdoulaye Tine
  </div>
  <!-- Copyright -->

</footer>

<!-- Footer -->
\t ";
    }

    // line 389
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 390
        echo "
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

<script>
 \$(document).ready(function() {
  /
         
  // fin
  
  \$(\"#formulaire\").submit(function(e){
        e.preventDefault();
        var donnees = \$(this).serialize();
        \$.ajax({
        data : donnees,
\t\t\t\ttype:'text',
\t\t    url : \"";
        // line 411
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\",
\t\t    method : \$(this).attr('method'),
\t\t    success: function (data)
          {
\t\t\t\t\t\tconsole.log(data)
\t\t\t\t\t\t
          },
\t\t   \terror : function(){
       \$(\"#msg\").text(\"Inscription incorrect\").slideDown(\"slow\");

\t\t\t},
\t\t\tcomplete : function(data){
\t\t\t\t\t\$(\"#msg\").html('<center><span class=\"alert alert-success\">Votre inscription a réussi! Veuillez-vous connecter</span></center>');
\t\t\t\t\t\$(\"#msg\").fadeIn(10000);
\t\t\t\t  //window.location.reload(false);
            },
            });
\t});

   \$( \"#ACCEUIL\").click(function() {
  \$( this ).css( {\"font-weight\":\"bold\",\"border-bottom\":\"0.5px solid #96bf31\",\"padding-right\":\"2px\",\"padding-bottom\":\"2px\",\"display\":\"inline-block\"});
  \$(\"#COURS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
    \$(\"#FORMATEURS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
  \$(\"#CONTACTEZ_NOUS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
});
\$( \"#COURS\").click(function() {
  \$( this ).css( {\"font-weight\":\"bold\",\"border-bottom\":\"1px solid #96bf31\",\"padding-bottom\":\"2px\",\"display\":\"inline-block\"});
  \$(\"#ACCEUIL\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
    \$(\"#FORMATEURS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
  \$(\"#CONTACTEZ_NOUS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
});
\$( \"#FORMATEURS\").click(function() {
  \$( this ).css( {\"font-weight\":\"bold\",\"border-bottom\":\"1px solid #96bf31\",\"padding-bottom\":\"2px\",\"display\":\"inline-block\"});
  \$(\"#COURS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
    \$(\"#ACCEUIL\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
  \$(\"#CONTACTEZ_NOUS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
});
\$( \"#CONTACTEZ_NOUS\").click(function() {
  \$( this ).css( {\"font-weight\":\"bold\",\"border-bottom\":\"1px solid #96bf31\",\"padding-bottom\":\"2px\",\"display\":\"inline-block\"});
  \$(\"#COURS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
    \$(\"#FORMATEURS\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
  \$(\"#ACCEUIL\").css({\"font-weight\":\"normal\",\"border-bottom\":\"none\"});
});
 \$( \"#tc\").click(function() {
  \$( this ).css( {\"font-weight\":\"bold\",\"color\":\"#96bf31\",\"display\":\"inline-block\"});
  \$(\"#ti\").css({\"color\":\"black\",\"display\":\"inline-block\",\"font-weight\":\"normal\"});
});
\$( \"#ti\").click(function() {
  \$( this ).css( {\"font-weight\":\"bold\",\"color\":\"#96bf31\",\"display\":\"inline-block\"});
    \$(\"#tc\").css({\"color\":\"black\",\"display\":\"inline-block\",\"font-weight\":\"normal\"});

});
\t//Animation img cours 
\t      \$('.animate_image').mouseover(function(){
            \$(this).find('#image').animate({
                width:365,
                height:200
            }, 1000)
          }).mouseout(function(){
            \$(this).find('#image').animate({
                width:350,
                height:200
            }, 1000)
        });
\t\t\t\t///////////////////////////////////////////////////////////
          
        
   /* \$('#COURS').mouseover(function() {
    \$(this).dropdown('toggle');
  });
  \$(\"#COURS\").mouseout(function(){
    \$(\"dropdown-menu\").hide();
  });*/
   
  
   \$(\".nav-item\").click(function(){
\t\t\t console.log(\"test réussi\");
\t\t });

     /////////
  

function getId(url) {
    var regExp = /^.*(youtu.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}

var myId;

    var myUrl = \$('#emb').val();
    myId = getId(myUrl);
    
    
    \$('#myCode').html('<iframe width=\"600\" height=\"315\" src=\"//www.youtube.com/embed/' + myId + '\" frameborder=\"0\" allowfullscreen></iframe>');


        
 });

</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 411,  661 => 397,  657 => 396,  653 => 395,  649 => 394,  645 => 393,  641 => 392,  637 => 391,  634 => 390,  630 => 389,  576 => 339,  548 => 313,  524 => 291,  518 => 288,  494 => 266,  490 => 265,  484 => 261,  480 => 260,  474 => 257,  470 => 256,  434 => 224,  430 => 222,  426 => 221,  420 => 218,  416 => 217,  412 => 214,  408 => 213,  389 => 197,  385 => 196,  373 => 188,  369 => 187,  365 => 186,  360 => 184,  356 => 183,  352 => 182,  348 => 181,  343 => 180,  339 => 179,  324 => 167,  316 => 162,  308 => 156,  302 => 153,  293 => 146,  291 => 145,  272 => 128,  263 => 120,  259 => 119,  228 => 91,  223 => 88,  218 => 85,  198 => 70,  181 => 55,  164 => 39,  160 => 38,  137 => 14,  133 => 13,  129 => 12,  125 => 11,  121 => 10,  117 => 9,  113 => 8,  110 => 7,  106 => 6,  101 => 520,  98 => 389,  96 => 265,  93 => 264,  90 => 260,  87 => 256,  85 => 221,  83 => 217,  79 => 215,  77 => 213,  75 => 196,  73 => 179,  71 => 119,  68 => 118,  66 => 38,  60 => 34,  58 => 33,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/var/www/html/CROWDEDU/templates/home/index.html.twig");
    }
}
