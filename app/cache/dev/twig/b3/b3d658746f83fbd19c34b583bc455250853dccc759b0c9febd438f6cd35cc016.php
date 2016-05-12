<?php

/* base.html.twig */
class __TwigTemplate_f57faeda8aa8220fa78bee7b8349bc6d8c404f9d392ba5ce19f6974a2fc4cd23 extends Twig_Template
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
        $__internal_0c4d3f84ed6e0f7e9f437e66ac08339ebdaf6385c0e96d75c8237dbeb5c3990c = $this->env->getExtension("native_profiler");
        $__internal_0c4d3f84ed6e0f7e9f437e66ac08339ebdaf6385c0e96d75c8237dbeb5c3990c->enter($__internal_0c4d3f84ed6e0f7e9f437e66ac08339ebdaf6385c0e96d75c8237dbeb5c3990c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c4d3f84ed6e0f7e9f437e66ac08339ebdaf6385c0e96d75c8237dbeb5c3990c->leave($__internal_0c4d3f84ed6e0f7e9f437e66ac08339ebdaf6385c0e96d75c8237dbeb5c3990c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed04e85c11822ee71956ae4b8e0f1e7f29c3a3bb004fce7c0020f37e7cacfee3 = $this->env->getExtension("native_profiler");
        $__internal_ed04e85c11822ee71956ae4b8e0f1e7f29c3a3bb004fce7c0020f37e7cacfee3->enter($__internal_ed04e85c11822ee71956ae4b8e0f1e7f29c3a3bb004fce7c0020f37e7cacfee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_ed04e85c11822ee71956ae4b8e0f1e7f29c3a3bb004fce7c0020f37e7cacfee3->leave($__internal_ed04e85c11822ee71956ae4b8e0f1e7f29c3a3bb004fce7c0020f37e7cacfee3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48a50e7b6adf2b69adcb0198342da8dbf7f6edb38957510240ed74b05093b8f8 = $this->env->getExtension("native_profiler");
        $__internal_48a50e7b6adf2b69adcb0198342da8dbf7f6edb38957510240ed74b05093b8f8->enter($__internal_48a50e7b6adf2b69adcb0198342da8dbf7f6edb38957510240ed74b05093b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_48a50e7b6adf2b69adcb0198342da8dbf7f6edb38957510240ed74b05093b8f8->leave($__internal_48a50e7b6adf2b69adcb0198342da8dbf7f6edb38957510240ed74b05093b8f8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_48a04c749332d3f9c9646993e2565eb7aa7f901484b05b02d862a60a74e4d960 = $this->env->getExtension("native_profiler");
        $__internal_48a04c749332d3f9c9646993e2565eb7aa7f901484b05b02d862a60a74e4d960->enter($__internal_48a04c749332d3f9c9646993e2565eb7aa7f901484b05b02d862a60a74e4d960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48a04c749332d3f9c9646993e2565eb7aa7f901484b05b02d862a60a74e4d960->leave($__internal_48a04c749332d3f9c9646993e2565eb7aa7f901484b05b02d862a60a74e4d960_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd9f7523d78e603ca00b91770c445e946eda8c71352921113f8c15215abc74e0 = $this->env->getExtension("native_profiler");
        $__internal_bd9f7523d78e603ca00b91770c445e946eda8c71352921113f8c15215abc74e0->enter($__internal_bd9f7523d78e603ca00b91770c445e946eda8c71352921113f8c15215abc74e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_bd9f7523d78e603ca00b91770c445e946eda8c71352921113f8c15215abc74e0->leave($__internal_bd9f7523d78e603ca00b91770c445e946eda8c71352921113f8c15215abc74e0_prof);

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
