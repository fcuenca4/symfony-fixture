<?php

/* base.html.twig */
class __TwigTemplate_b220ca77be94b84322aff0eb1522cdf1f413abd6b24756b7f043d21c7413819f extends Twig_Template
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
        $__internal_64dc7cb4cc0f759b54e4087eb490a60df43de8af4bc03704ae0c34420253a203 = $this->env->getExtension("native_profiler");
        $__internal_64dc7cb4cc0f759b54e4087eb490a60df43de8af4bc03704ae0c34420253a203->enter($__internal_64dc7cb4cc0f759b54e4087eb490a60df43de8af4bc03704ae0c34420253a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_64dc7cb4cc0f759b54e4087eb490a60df43de8af4bc03704ae0c34420253a203->leave($__internal_64dc7cb4cc0f759b54e4087eb490a60df43de8af4bc03704ae0c34420253a203_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc358412a22417b444c1a1a75c3c983ba45077fe8366108df3ad3807a847fbf2 = $this->env->getExtension("native_profiler");
        $__internal_cc358412a22417b444c1a1a75c3c983ba45077fe8366108df3ad3807a847fbf2->enter($__internal_cc358412a22417b444c1a1a75c3c983ba45077fe8366108df3ad3807a847fbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_cc358412a22417b444c1a1a75c3c983ba45077fe8366108df3ad3807a847fbf2->leave($__internal_cc358412a22417b444c1a1a75c3c983ba45077fe8366108df3ad3807a847fbf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1407374540189b91a2e082d6a8afc4c5d9b3b647883b1db30b5b39b4aa909cdb = $this->env->getExtension("native_profiler");
        $__internal_1407374540189b91a2e082d6a8afc4c5d9b3b647883b1db30b5b39b4aa909cdb->enter($__internal_1407374540189b91a2e082d6a8afc4c5d9b3b647883b1db30b5b39b4aa909cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_1407374540189b91a2e082d6a8afc4c5d9b3b647883b1db30b5b39b4aa909cdb->leave($__internal_1407374540189b91a2e082d6a8afc4c5d9b3b647883b1db30b5b39b4aa909cdb_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb127f99a400ecea56e117eaee0fa7b7d8c100ae3d32a71aa6959166d5104d43 = $this->env->getExtension("native_profiler");
        $__internal_eb127f99a400ecea56e117eaee0fa7b7d8c100ae3d32a71aa6959166d5104d43->enter($__internal_eb127f99a400ecea56e117eaee0fa7b7d8c100ae3d32a71aa6959166d5104d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb127f99a400ecea56e117eaee0fa7b7d8c100ae3d32a71aa6959166d5104d43->leave($__internal_eb127f99a400ecea56e117eaee0fa7b7d8c100ae3d32a71aa6959166d5104d43_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1116e89a4753d41b16f9c7dc399d26faef0fd7fff35180dd17bc9872c9f73014 = $this->env->getExtension("native_profiler");
        $__internal_1116e89a4753d41b16f9c7dc399d26faef0fd7fff35180dd17bc9872c9f73014->enter($__internal_1116e89a4753d41b16f9c7dc399d26faef0fd7fff35180dd17bc9872c9f73014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1116e89a4753d41b16f9c7dc399d26faef0fd7fff35180dd17bc9872c9f73014->leave($__internal_1116e89a4753d41b16f9c7dc399d26faef0fd7fff35180dd17bc9872c9f73014_prof);

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
