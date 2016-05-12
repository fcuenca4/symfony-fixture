<?php

/* base.html.twig */
class __TwigTemplate_3f9e5e7b1ba149e9af43dc98daf3926e16e1cbf7969a020cf07ee6b6bce6fd3b extends Twig_Template
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
        $__internal_a81b922a736fd1fc5399d3f10303a8b9e3309da945794ae30b9c400b0bb84b20 = $this->env->getExtension("native_profiler");
        $__internal_a81b922a736fd1fc5399d3f10303a8b9e3309da945794ae30b9c400b0bb84b20->enter($__internal_a81b922a736fd1fc5399d3f10303a8b9e3309da945794ae30b9c400b0bb84b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</body>

</html>
";
        
        $__internal_a81b922a736fd1fc5399d3f10303a8b9e3309da945794ae30b9c400b0bb84b20->leave($__internal_a81b922a736fd1fc5399d3f10303a8b9e3309da945794ae30b9c400b0bb84b20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b19f8848e6071aeaf446f593cfc325c35f8e952cf24950d2791f8b370a91b99c = $this->env->getExtension("native_profiler");
        $__internal_b19f8848e6071aeaf446f593cfc325c35f8e952cf24950d2791f8b370a91b99c->enter($__internal_b19f8848e6071aeaf446f593cfc325c35f8e952cf24950d2791f8b370a91b99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_b19f8848e6071aeaf446f593cfc325c35f8e952cf24950d2791f8b370a91b99c->leave($__internal_b19f8848e6071aeaf446f593cfc325c35f8e952cf24950d2791f8b370a91b99c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dfb55f1ead08bb96903c658971c2f902090ee121337bdcfa7e2f83f6bd0e5571 = $this->env->getExtension("native_profiler");
        $__internal_dfb55f1ead08bb96903c658971c2f902090ee121337bdcfa7e2f83f6bd0e5571->enter($__internal_dfb55f1ead08bb96903c658971c2f902090ee121337bdcfa7e2f83f6bd0e5571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_dfb55f1ead08bb96903c658971c2f902090ee121337bdcfa7e2f83f6bd0e5571->leave($__internal_dfb55f1ead08bb96903c658971c2f902090ee121337bdcfa7e2f83f6bd0e5571_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6eadf30def2f33843683237ccea8f8aa6ad0768f2a48001223ff78e9d9388f1 = $this->env->getExtension("native_profiler");
        $__internal_a6eadf30def2f33843683237ccea8f8aa6ad0768f2a48001223ff78e9d9388f1->enter($__internal_a6eadf30def2f33843683237ccea8f8aa6ad0768f2a48001223ff78e9d9388f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6eadf30def2f33843683237ccea8f8aa6ad0768f2a48001223ff78e9d9388f1->leave($__internal_a6eadf30def2f33843683237ccea8f8aa6ad0768f2a48001223ff78e9d9388f1_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2f007b58e27bb2962c8b0e2655095c5c19cc2d155f8892ec7a2c3b59b912475 = $this->env->getExtension("native_profiler");
        $__internal_d2f007b58e27bb2962c8b0e2655095c5c19cc2d155f8892ec7a2c3b59b912475->enter($__internal_d2f007b58e27bb2962c8b0e2655095c5c19cc2d155f8892ec7a2c3b59b912475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d2f007b58e27bb2962c8b0e2655095c5c19cc2d155f8892ec7a2c3b59b912475->leave($__internal_d2f007b58e27bb2962c8b0e2655095c5c19cc2d155f8892ec7a2c3b59b912475_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
/* <body>*/
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
