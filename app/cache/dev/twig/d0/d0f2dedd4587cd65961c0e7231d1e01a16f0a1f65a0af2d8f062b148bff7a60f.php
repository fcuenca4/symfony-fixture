<?php

/* MiAppBundle::navbar.html.twig */
class __TwigTemplate_4b3e3c935bdd1452a43dfcc4c1113974239688f076dce3a296212fd225d649c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::navbar.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3537919dd7ecdb569e10ac77202f911346fb699f9621e1f849b2b076b577e3e2 = $this->env->getExtension("native_profiler");
        $__internal_3537919dd7ecdb569e10ac77202f911346fb699f9621e1f849b2b076b577e3e2->enter($__internal_3537919dd7ecdb569e10ac77202f911346fb699f9621e1f849b2b076b577e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3537919dd7ecdb569e10ac77202f911346fb699f9621e1f849b2b076b577e3e2->leave($__internal_3537919dd7ecdb569e10ac77202f911346fb699f9621e1f849b2b076b577e3e2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1aa52974a6e01ecba6d46afc99473d771dcfe563211236e8db23d70e602dd83b = $this->env->getExtension("native_profiler");
        $__internal_1aa52974a6e01ecba6d46afc99473d771dcfe563211236e8db23d70e602dd83b->enter($__internal_1aa52974a6e01ecba6d46afc99473d771dcfe563211236e8db23d70e602dd83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_1aa52974a6e01ecba6d46afc99473d771dcfe563211236e8db23d70e602dd83b->leave($__internal_1aa52974a6e01ecba6d46afc99473d771dcfe563211236e8db23d70e602dd83b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c7175ec3731219ca8dec750515e76193b9440eb4f9fda47f01d57794bb938b6 = $this->env->getExtension("native_profiler");
        $__internal_7c7175ec3731219ca8dec750515e76193b9440eb4f9fda47f01d57794bb938b6->enter($__internal_7c7175ec3731219ca8dec750515e76193b9440eb4f9fda47f01d57794bb938b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">Torneo de Futbol</a>
                </div>
                ";
        // line 20
        $this->displayBlock('login', $context, $blocks);
        // line 23
        echo "            </div>
        </nav>
    </div>
";
        
        $__internal_7c7175ec3731219ca8dec750515e76193b9440eb4f9fda47f01d57794bb938b6->leave($__internal_7c7175ec3731219ca8dec750515e76193b9440eb4f9fda47f01d57794bb938b6_prof);

    }

    // line 20
    public function block_login($context, array $blocks = array())
    {
        $__internal_8d6ea77717d4f99f49dcbb6b1c752bdd1b1c76374f8e4e1c44f7c8cf8c291cfe = $this->env->getExtension("native_profiler");
        $__internal_8d6ea77717d4f99f49dcbb6b1c752bdd1b1c76374f8e4e1c44f7c8cf8c291cfe->enter($__internal_8d6ea77717d4f99f49dcbb6b1c752bdd1b1c76374f8e4e1c44f7c8cf8c291cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 21
        echo "                    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
                ";
        
        $__internal_8d6ea77717d4f99f49dcbb6b1c752bdd1b1c76374f8e4e1c44f7c8cf8c291cfe->leave($__internal_8d6ea77717d4f99f49dcbb6b1c752bdd1b1c76374f8e4e1c44f7c8cf8c291cfe_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  89 => 20,  79 => 23,  77 => 20,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/miapp/css/navpadding.css') }}" type="text/css" rel="stylesheet"/>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"*/
/*                             aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/">Torneo de Futbol</a>*/
/*                 </div>*/
/*                 {% block login %}*/
/*                     {{ block('fos_user_content') }}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* {% endblock %}*/
