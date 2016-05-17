<?php

/* ::base.html.twig */
class __TwigTemplate_ad6b8a5be1cbba7af3705dfbf8227b19b77dd667a6aeda5506872be801821687 extends Twig_Template
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
        $__internal_26110752497fa06cf19df5c35e6bec81cca96f5c8dd7cfd2bba1110195b5bb4b = $this->env->getExtension("native_profiler");
        $__internal_26110752497fa06cf19df5c35e6bec81cca96f5c8dd7cfd2bba1110195b5bb4b->enter($__internal_26110752497fa06cf19df5c35e6bec81cca96f5c8dd7cfd2bba1110195b5bb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_26110752497fa06cf19df5c35e6bec81cca96f5c8dd7cfd2bba1110195b5bb4b->leave($__internal_26110752497fa06cf19df5c35e6bec81cca96f5c8dd7cfd2bba1110195b5bb4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c79c7aee26f802bfcd7bd56628d179874d7784f3e0a89d8da5c6ef0388d5211c = $this->env->getExtension("native_profiler");
        $__internal_c79c7aee26f802bfcd7bd56628d179874d7784f3e0a89d8da5c6ef0388d5211c->enter($__internal_c79c7aee26f802bfcd7bd56628d179874d7784f3e0a89d8da5c6ef0388d5211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_c79c7aee26f802bfcd7bd56628d179874d7784f3e0a89d8da5c6ef0388d5211c->leave($__internal_c79c7aee26f802bfcd7bd56628d179874d7784f3e0a89d8da5c6ef0388d5211c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5578e9d2bab71aeaa1cbbc9eafe2b0c7a93244b4039015e9ec1411d1d0fab0a = $this->env->getExtension("native_profiler");
        $__internal_b5578e9d2bab71aeaa1cbbc9eafe2b0c7a93244b4039015e9ec1411d1d0fab0a->enter($__internal_b5578e9d2bab71aeaa1cbbc9eafe2b0c7a93244b4039015e9ec1411d1d0fab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_b5578e9d2bab71aeaa1cbbc9eafe2b0c7a93244b4039015e9ec1411d1d0fab0a->leave($__internal_b5578e9d2bab71aeaa1cbbc9eafe2b0c7a93244b4039015e9ec1411d1d0fab0a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c03acf9aadb1cb89811fa8147f63f5c52943d87859b2ad0d0948456f8338164 = $this->env->getExtension("native_profiler");
        $__internal_4c03acf9aadb1cb89811fa8147f63f5c52943d87859b2ad0d0948456f8338164->enter($__internal_4c03acf9aadb1cb89811fa8147f63f5c52943d87859b2ad0d0948456f8338164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c03acf9aadb1cb89811fa8147f63f5c52943d87859b2ad0d0948456f8338164->leave($__internal_4c03acf9aadb1cb89811fa8147f63f5c52943d87859b2ad0d0948456f8338164_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dce7b3cce2837cae68d42e2d667a0c4730ebf9803190664522bc3fe08c2d0eaa = $this->env->getExtension("native_profiler");
        $__internal_dce7b3cce2837cae68d42e2d667a0c4730ebf9803190664522bc3fe08c2d0eaa->enter($__internal_dce7b3cce2837cae68d42e2d667a0c4730ebf9803190664522bc3fe08c2d0eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dce7b3cce2837cae68d42e2d667a0c4730ebf9803190664522bc3fe08c2d0eaa->leave($__internal_dce7b3cce2837cae68d42e2d667a0c4730ebf9803190664522bc3fe08c2d0eaa_prof);

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
