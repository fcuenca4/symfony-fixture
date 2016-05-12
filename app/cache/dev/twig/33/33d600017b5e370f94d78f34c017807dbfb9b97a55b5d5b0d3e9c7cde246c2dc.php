<?php

/* ::base.html.twig */
class __TwigTemplate_2966bf5056aa8fc5a997a2f91a1f2196c625b67a675d93e8625cbd5e14982fc1 extends Twig_Template
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
        $__internal_ad9581330515c5d7a1cf382e02ff98c807c681d399ffe161dfc59786252d7634 = $this->env->getExtension("native_profiler");
        $__internal_ad9581330515c5d7a1cf382e02ff98c807c681d399ffe161dfc59786252d7634->enter($__internal_ad9581330515c5d7a1cf382e02ff98c807c681d399ffe161dfc59786252d7634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ad9581330515c5d7a1cf382e02ff98c807c681d399ffe161dfc59786252d7634->leave($__internal_ad9581330515c5d7a1cf382e02ff98c807c681d399ffe161dfc59786252d7634_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de631cafdb0c0a45facdb5fcc849fdc4c23690f3560c6723779779506394e87 = $this->env->getExtension("native_profiler");
        $__internal_2de631cafdb0c0a45facdb5fcc849fdc4c23690f3560c6723779779506394e87->enter($__internal_2de631cafdb0c0a45facdb5fcc849fdc4c23690f3560c6723779779506394e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_2de631cafdb0c0a45facdb5fcc849fdc4c23690f3560c6723779779506394e87->leave($__internal_2de631cafdb0c0a45facdb5fcc849fdc4c23690f3560c6723779779506394e87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d33442262e5ce28d1342569ec0ceb3155338b3aebc1c1662509c92c48206349 = $this->env->getExtension("native_profiler");
        $__internal_3d33442262e5ce28d1342569ec0ceb3155338b3aebc1c1662509c92c48206349->enter($__internal_3d33442262e5ce28d1342569ec0ceb3155338b3aebc1c1662509c92c48206349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_3d33442262e5ce28d1342569ec0ceb3155338b3aebc1c1662509c92c48206349->leave($__internal_3d33442262e5ce28d1342569ec0ceb3155338b3aebc1c1662509c92c48206349_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a815417d424ca86a498e77b229c931af658060c105de3c36a9387ebe428840a = $this->env->getExtension("native_profiler");
        $__internal_0a815417d424ca86a498e77b229c931af658060c105de3c36a9387ebe428840a->enter($__internal_0a815417d424ca86a498e77b229c931af658060c105de3c36a9387ebe428840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a815417d424ca86a498e77b229c931af658060c105de3c36a9387ebe428840a->leave($__internal_0a815417d424ca86a498e77b229c931af658060c105de3c36a9387ebe428840a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af7c6d1e6e0923a56a26fc3b32067a086e6b396128930e0428179ad1ce6f0161 = $this->env->getExtension("native_profiler");
        $__internal_af7c6d1e6e0923a56a26fc3b32067a086e6b396128930e0428179ad1ce6f0161->enter($__internal_af7c6d1e6e0923a56a26fc3b32067a086e6b396128930e0428179ad1ce6f0161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_af7c6d1e6e0923a56a26fc3b32067a086e6b396128930e0428179ad1ce6f0161->leave($__internal_af7c6d1e6e0923a56a26fc3b32067a086e6b396128930e0428179ad1ce6f0161_prof);

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
