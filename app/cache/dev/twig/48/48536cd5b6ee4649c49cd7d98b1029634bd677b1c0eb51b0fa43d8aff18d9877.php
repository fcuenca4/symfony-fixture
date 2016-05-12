<?php

/* base.html.twig */
class __TwigTemplate_f44dc01d4240784d9d77816ab733ead7a08fc62bc162e206967348bad226e3f4 extends Twig_Template
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
        $__internal_ce94a602b1752edc27048823da46a4e5293754b0a29011a9dcdde93ac49f1636 = $this->env->getExtension("native_profiler");
        $__internal_ce94a602b1752edc27048823da46a4e5293754b0a29011a9dcdde93ac49f1636->enter($__internal_ce94a602b1752edc27048823da46a4e5293754b0a29011a9dcdde93ac49f1636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ce94a602b1752edc27048823da46a4e5293754b0a29011a9dcdde93ac49f1636->leave($__internal_ce94a602b1752edc27048823da46a4e5293754b0a29011a9dcdde93ac49f1636_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c1a462f6cfaf28580f1ccc4947b60cce01fe6c4c5118a67ff026de19139bdcf = $this->env->getExtension("native_profiler");
        $__internal_0c1a462f6cfaf28580f1ccc4947b60cce01fe6c4c5118a67ff026de19139bdcf->enter($__internal_0c1a462f6cfaf28580f1ccc4947b60cce01fe6c4c5118a67ff026de19139bdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_0c1a462f6cfaf28580f1ccc4947b60cce01fe6c4c5118a67ff026de19139bdcf->leave($__internal_0c1a462f6cfaf28580f1ccc4947b60cce01fe6c4c5118a67ff026de19139bdcf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d09a17b96f0ee71bfcf2304f313f4122949e7ae2830ca87df5c915e9b45c9e7 = $this->env->getExtension("native_profiler");
        $__internal_7d09a17b96f0ee71bfcf2304f313f4122949e7ae2830ca87df5c915e9b45c9e7->enter($__internal_7d09a17b96f0ee71bfcf2304f313f4122949e7ae2830ca87df5c915e9b45c9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_7d09a17b96f0ee71bfcf2304f313f4122949e7ae2830ca87df5c915e9b45c9e7->leave($__internal_7d09a17b96f0ee71bfcf2304f313f4122949e7ae2830ca87df5c915e9b45c9e7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9fb0e1ad61b390270ad7a4c2308efa37e9b0288ec655d75f15e355e9be71b16 = $this->env->getExtension("native_profiler");
        $__internal_e9fb0e1ad61b390270ad7a4c2308efa37e9b0288ec655d75f15e355e9be71b16->enter($__internal_e9fb0e1ad61b390270ad7a4c2308efa37e9b0288ec655d75f15e355e9be71b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9fb0e1ad61b390270ad7a4c2308efa37e9b0288ec655d75f15e355e9be71b16->leave($__internal_e9fb0e1ad61b390270ad7a4c2308efa37e9b0288ec655d75f15e355e9be71b16_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05c55366749c4f580399804db72925be613a4c9b2385d1407116fdf7db7ccf06 = $this->env->getExtension("native_profiler");
        $__internal_05c55366749c4f580399804db72925be613a4c9b2385d1407116fdf7db7ccf06->enter($__internal_05c55366749c4f580399804db72925be613a4c9b2385d1407116fdf7db7ccf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_05c55366749c4f580399804db72925be613a4c9b2385d1407116fdf7db7ccf06->leave($__internal_05c55366749c4f580399804db72925be613a4c9b2385d1407116fdf7db7ccf06_prof);

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
