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

/* contact/index.html.twig */
class __TwigTemplate_b3287d0fdddf56afb2565cc63d643bd008ba0356c58dc8100b4b0b5a69f028d3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'temoignages' => [$this, 'block_temoignages'],
            'barrier' => [$this, 'block_barrier'],
            'fonctionnalites' => [$this, 'block_fonctionnalites'],
            'campagne' => [$this, 'block_campagne'],
            'background' => [$this, 'block_background'],
            'section' => [$this, 'block_section'],
            'categories' => [$this, 'block_categories'],
            'cat' => [$this, 'block_cat'],
            'cours' => [$this, 'block_cours'],
            'deal' => [$this, 'block_deal'],
            'meilleurs_ventes' => [$this, 'block_meilleurs_ventes'],
            'options' => [$this, 'block_options'],
            'latest' => [$this, 'block_latest'],
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
        $this->parent = $this->loadTemplate("cours/allCours.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_temoignages($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 3
    public function block_barrier($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 4
    public function block_fonctionnalites($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 5
    public function block_campagne($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 6
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<style>
    .contact_contents
{
\tpadding-right: 30px;
}
.contact_contents h1,
.follow_us_contents h1,
.get_in_touch_contents h1
{
\tfont-size: 40px;
\tfont-weight: 500;
}
.contact_contents p,
.get_in_touch_contents p
{
\tfont-size: 16px;
\tfont-weight: 400;
\tmargin-bottom: 0px;
}
.contact_contents div
{
\tmargin-top: 22px;
}
.contact_contents div:first-of-type
{
\tmargin-top: 39px;
}

/*********************************
7. Follow Us
*********************************/

.follow_us_contents
{
\tmargin-top: 32px;
}
.social
{
\tmargin-top: 20px;
}
.social li
{
\tmargin-right: 12px;
}
.social li:last-child
{
\tmargin-right: 0px;
}
.social li a
{
\tdisplay: -webkit-box;
\tdisplay: -moz-box;
\tdisplay: -ms-flexbox;
\tdisplay: -webkit-flex;
\tdisplay: flex;
\tflex-direction: column;
\tjustify-content: center;
\talign-items: center;
\twidth: 40px;
\theight: 40px;
\tborder-radius: 50%;
\t-webkit-transition: all 300ms ease;
\t-moz-transition: all 300ms ease;
\t-ms-transition: all 300ms ease;
\t-o-transition: all 300ms ease;
\ttransition: all 300ms ease;
}
.social li a i
{
\tcolor: #FFFFFF;
}
.social li:hover a
{
\ttransform: translateY(-5px);
\tbox-shadow: 0px 10px 20px rgba(0,0,0,0.3);
}

/*********************************
8. Contact Form
*********************************/

.form_input
{
\tdisplay: block;
\twidth: 100%;
\theight: 50px;
\tborder: solid 1px #e5e5e5;
\tpadding-left: 20px;
\tfont-size: 16px;
\tmargin-bottom: 20px;
}
.input_message
{
\twidth: 100%;
\tmargin-bottom: 15px;
\tfont-size: 16px;
\tpadding-bottom: 15px;
}
.form_input:focus,
#newsletter_email:focus
{
\tborder: solid 1px #7f7f7f !important;
\tbox-shadow: none !important;
}
.message_submit_btn
{
\tbackground: #1e1e27;
\tcolor: #FFFFFF;
\ttext-transform: uppercase;
\twidth: 165px;
\tborder: none;
\theight: 46px;
\tcursor: pointer;
}
.message_submit_btn:hover
{
\tbackground: #2b2b34 !important;
}
:focus
{
\toutline: none !important;
}
.input_ph::-webkit-input-placeholder
{
\tfont-size: 16px !important;
\tfont-weight: 400;
\tcolor: #b9b4c7 !important;
}
.input_ph:-moz-placeholder /* older Firefox*/
{
\tfont-size: 16px !important;
\tfont-weight: 400;
\tcolor: #b9b4c7 !important;
}
.input_ph::-moz-placeholder /* Firefox 19+ */
{
\tfont-size: 16px !important;
\tfont-weight: 400;
\tcolor: #b9b4c7 !important;
}
.input_ph:-ms-input-placeholder
{
\tfont-size: 16px !important;
\tfont-weight: 400;
\tcolor: #b9b4c7 !important;
}
.input_ph::input-placeholder
{
\tfont-size: 16px !important;
\tfont-weight: 400;
\tcolor: #b9b4c7 !important;
}
textarea
{
\tborder: solid 1px #e5e5e5;
\tpadding-left: 20px;
\tpadding-top: 15px;
}
textarea:hover
{
\tborder-color: #7f7f7f !important;
}
.input_name
{
\tmargin-bottom: 19px;
\tmargin-top: 31px;
}
.input_review
{
\tdisplay: block;
\twidth: 100%;
\tborder: solid 1px #e5e5e5;
\tmargin-top: 23px;
\tpadding-left: 20px;
\tpadding-top: 13px;
}
.user_star_rating
{
\tdisplay: inline-block;
\tmargin-left: 18px;
}
.user_star_rating li
{
\tdisplay: inline-block;
\tmargin-right: -3px;
\tcursor: pointer;
}
.user_star_rating li i
{
\tcolor: #f5c136;
\tfont-size: 18px;
}
.review_submit_btn
{
\twidth: 170px;
\tborder: none;
\tcolor: #FFFFFF;
\ttext-transform: uppercase;
\tfont-size: 14px;
\tfont-weight: 500;
\tcursor: pointer;
}


     </style>
\t <div id=\"google_map\" style=\"width: 100%; height: 507px;margin-top: 79px; margin-bottom:89px;\">
<div id=\"map\" style=\"margin: 0 auto; width:1000px;box-shadow: 0px 27px 179px gainsboro;\">
<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7718.336774909604!2d-17.471233276891482!3d14.703067686488305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1729783494179%3A0x23bb471dc2527440!2sSICAP+Karak%2C+Dakar!5e0!3m2!1sfr!2ssn!4v1552045092536\"  width=\"100%\" height=\"607\" margin-bottom=\"59\" padding=\"25\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>
</div>
<div class=\"row\">

\t\t\t<div class=\"col-lg-6 contact_col\" style=\"padding:100px;\">
\t\t\t\t<div class=\"contact_contents\">
\t\t\t\t\t<h1>Contactez-nous</h1>
\t\t\t\t\t<p>Il y a plusieurs façons de nous contacter. Vous pouvez nous contacter, nous appeler ou envoyer un email, choisir ce qui vous convient le mieux.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>33 827 99 53</p>
\t\t\t\t\t\t<p>info@crowdeduafrica.com</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<!-- Follow Us -->

\t\t\t\t<div class=\"follow_us_contents\">
\t\t\t\t\t<h1>Suivez nous</h1>
\t\t\t\t\t<ul class=\"social d-flex flex-row\">
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/crowdedu\" style=\"background-color: #3a61c9\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\" style=\"background-color: #41a1f6\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\" style=\"background-color: #8f6247\"><i class=\"fab fa-instagram\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
";
        // line 243
        echo "\t\t\t<div class=\"col-lg-6 get_in_touch_col\" style=\"padding:100px;\">
\t\t\t\t<div class=\"get_in_touch_contents\">
\t\t\t\t\t<h1>Prenez contact avec nous!</h1>
\t\t\t\t\t<p>Remplissez le formulaire ci-dessous pour recevoir un message gratuit et confidentiel.</p>
\t\t\t\t\t<div>
\t\t ";
        // line 248
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_start');
        echo "
                <div class=\"form-group \">       
                  ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "nom", [], "any", false, false, false, 250), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
               <div class=\"form-group \">         
                ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "email", [], "any", false, false, false, 253), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
                <div class=\"form-group\">          
                ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "objet", [], "any", false, false, false, 256), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
              <div class=\"form-group\">          
                ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "message", [], "any", false, false, false, 259), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                   
        </div>
\t\t<div class=\"form-group row\">
     <div class=\"col-sm-4\"></div>
     <div class=\"col-sm-8\">
<button id=\"review_submit\" type=\"submit\"  value=\"Submit\" 
style=\"background: #96bf31;
    color: #FFFFFF;
    text-transform: uppercase;
    width: 150px;
    border: none;
    height: 46px;
    cursor: pointer;\">envoyer</button>     </div>
     </div>
          ";
        // line 275
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_end');
        echo "
    </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
        </div>

";
    }

    // line 284
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 286
    public function block_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 288
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 290
    public function block_cours($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 292
    public function block_deal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 293
        echo "    ";
    }

    // line 294
    public function block_meilleurs_ventes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 296
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 298
    public function block_latest($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 298,  427 => 296,  421 => 294,  417 => 293,  413 => 292,  407 => 290,  401 => 288,  395 => 286,  389 => 284,  376 => 275,  357 => 259,  351 => 256,  345 => 253,  339 => 250,  334 => 248,  327 => 243,  90 => 7,  86 => 6,  79 => 5,  72 => 4,  65 => 3,  58 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "/var/www/html/crowdedu/templates/contact/index.html.twig");
    }
}
