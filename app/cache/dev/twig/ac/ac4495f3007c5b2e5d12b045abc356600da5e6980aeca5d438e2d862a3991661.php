<?php

/* ::base.html.twig */
class __TwigTemplate_2038cc02266f2ebece922e5b73aae651745bb00ee04074433dd7bb7435a1db9b extends Twig_Template
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
        $__internal_cf16a4f094bd51be8061e1f3f3a5f0596ea7bc5bf9204c065359b2ec0ef9e66e = $this->env->getExtension("native_profiler");
        $__internal_cf16a4f094bd51be8061e1f3f3a5f0596ea7bc5bf9204c065359b2ec0ef9e66e->enter($__internal_cf16a4f094bd51be8061e1f3f3a5f0596ea7bc5bf9204c065359b2ec0ef9e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cf16a4f094bd51be8061e1f3f3a5f0596ea7bc5bf9204c065359b2ec0ef9e66e->leave($__internal_cf16a4f094bd51be8061e1f3f3a5f0596ea7bc5bf9204c065359b2ec0ef9e66e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bffc3dfaa6d2aa184be446e274a6d2dcee2e45bcaa97714a4f68f92f3c26015a = $this->env->getExtension("native_profiler");
        $__internal_bffc3dfaa6d2aa184be446e274a6d2dcee2e45bcaa97714a4f68f92f3c26015a->enter($__internal_bffc3dfaa6d2aa184be446e274a6d2dcee2e45bcaa97714a4f68f92f3c26015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_bffc3dfaa6d2aa184be446e274a6d2dcee2e45bcaa97714a4f68f92f3c26015a->leave($__internal_bffc3dfaa6d2aa184be446e274a6d2dcee2e45bcaa97714a4f68f92f3c26015a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8bdccb17a54036dc7e73d0cbff9e9d926baa61c99e26118bf39202ab1c06a14 = $this->env->getExtension("native_profiler");
        $__internal_f8bdccb17a54036dc7e73d0cbff9e9d926baa61c99e26118bf39202ab1c06a14->enter($__internal_f8bdccb17a54036dc7e73d0cbff9e9d926baa61c99e26118bf39202ab1c06a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_f8bdccb17a54036dc7e73d0cbff9e9d926baa61c99e26118bf39202ab1c06a14->leave($__internal_f8bdccb17a54036dc7e73d0cbff9e9d926baa61c99e26118bf39202ab1c06a14_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b85beaa67d606439e098ab90aa0ef814a25f2d8c6bab6f940d011dfec436a2a = $this->env->getExtension("native_profiler");
        $__internal_0b85beaa67d606439e098ab90aa0ef814a25f2d8c6bab6f940d011dfec436a2a->enter($__internal_0b85beaa67d606439e098ab90aa0ef814a25f2d8c6bab6f940d011dfec436a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b85beaa67d606439e098ab90aa0ef814a25f2d8c6bab6f940d011dfec436a2a->leave($__internal_0b85beaa67d606439e098ab90aa0ef814a25f2d8c6bab6f940d011dfec436a2a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23be39a57a8cfe2ade037caa870fb6f819aa69a86c5ef55884af196f44e81821 = $this->env->getExtension("native_profiler");
        $__internal_23be39a57a8cfe2ade037caa870fb6f819aa69a86c5ef55884af196f44e81821->enter($__internal_23be39a57a8cfe2ade037caa870fb6f819aa69a86c5ef55884af196f44e81821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_23be39a57a8cfe2ade037caa870fb6f819aa69a86c5ef55884af196f44e81821->leave($__internal_23be39a57a8cfe2ade037caa870fb6f819aa69a86c5ef55884af196f44e81821_prof);

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
