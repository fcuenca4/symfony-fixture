<?php

/* ::base.html.twig */
class __TwigTemplate_693f31f0a2e112601435dd1047623967b12865f624ed6ce9ba8610ec8eb1362a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c363b11f3ee3c6156fa47669701ddb07ca60dbf5753c56755752e143576e230 = $this->env->getExtension("native_profiler");
        $__internal_0c363b11f3ee3c6156fa47669701ddb07ca60dbf5753c56755752e143576e230->enter($__internal_0c363b11f3ee3c6156fa47669701ddb07ca60dbf5753c56755752e143576e230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body >
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</body>

</html>
";
        
        $__internal_0c363b11f3ee3c6156fa47669701ddb07ca60dbf5753c56755752e143576e230->leave($__internal_0c363b11f3ee3c6156fa47669701ddb07ca60dbf5753c56755752e143576e230_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d6ee14722a0ce139716fcfbe181403d5e6f6a9e4186c112364fe4d36f8f8610 = $this->env->getExtension("native_profiler");
        $__internal_9d6ee14722a0ce139716fcfbe181403d5e6f6a9e4186c112364fe4d36f8f8610->enter($__internal_9d6ee14722a0ce139716fcfbe181403d5e6f6a9e4186c112364fe4d36f8f8610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_9d6ee14722a0ce139716fcfbe181403d5e6f6a9e4186c112364fe4d36f8f8610->leave($__internal_9d6ee14722a0ce139716fcfbe181403d5e6f6a9e4186c112364fe4d36f8f8610_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_352387b5822e5950ef047c9af279667b049c0a25e12e64899a2e126a2969b5cc = $this->env->getExtension("native_profiler");
        $__internal_352387b5822e5950ef047c9af279667b049c0a25e12e64899a2e126a2969b5cc->enter($__internal_352387b5822e5950ef047c9af279667b049c0a25e12e64899a2e126a2969b5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_352387b5822e5950ef047c9af279667b049c0a25e12e64899a2e126a2969b5cc->leave($__internal_352387b5822e5950ef047c9af279667b049c0a25e12e64899a2e126a2969b5cc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3717100a96f296ea60bbe2c14701e6d26c24f6f106db23a5bffc92b4e33ad204 = $this->env->getExtension("native_profiler");
        $__internal_3717100a96f296ea60bbe2c14701e6d26c24f6f106db23a5bffc92b4e33ad204->enter($__internal_3717100a96f296ea60bbe2c14701e6d26c24f6f106db23a5bffc92b4e33ad204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3717100a96f296ea60bbe2c14701e6d26c24f6f106db23a5bffc92b4e33ad204->leave($__internal_3717100a96f296ea60bbe2c14701e6d26c24f6f106db23a5bffc92b4e33ad204_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d24896fc52ba65a63baecb383f0f158c9c0d338618f73b9cdcaae10e1b43bf46 = $this->env->getExtension("native_profiler");
        $__internal_d24896fc52ba65a63baecb383f0f158c9c0d338618f73b9cdcaae10e1b43bf46->enter($__internal_d24896fc52ba65a63baecb383f0f158c9c0d338618f73b9cdcaae10e1b43bf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d24896fc52ba65a63baecb383f0f158c9c0d338618f73b9cdcaae10e1b43bf46->leave($__internal_d24896fc52ba65a63baecb383f0f158c9c0d338618f73b9cdcaae10e1b43bf46_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 16,  104 => 15,  98 => 14,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  49 => 18,  47 => 14,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Torneo Futbol{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/miapp/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body >*/
/* {% block body %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/miapp/js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('bundles/miapp/js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
