<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_ab9c1f0b055fc79ce1d0d4d2eb3649a3e4274b3c7f0e72cea235a88e634943c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MiAppBundle::Default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18a8cd38eeff085a46e61472d2f89808633f211a3fe59a94e2db6e2bb03951b1 = $this->env->getExtension("native_profiler");
        $__internal_18a8cd38eeff085a46e61472d2f89808633f211a3fe59a94e2db6e2bb03951b1->enter($__internal_18a8cd38eeff085a46e61472d2f89808633f211a3fe59a94e2db6e2bb03951b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a8cd38eeff085a46e61472d2f89808633f211a3fe59a94e2db6e2bb03951b1->leave($__internal_18a8cd38eeff085a46e61472d2f89808633f211a3fe59a94e2db6e2bb03951b1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cdff31692d2fc780907414975bbdd459596b4065ff5c4a061cb3b867470f286 = $this->env->getExtension("native_profiler");
        $__internal_4cdff31692d2fc780907414975bbdd459596b4065ff5c4a061cb3b867470f286->enter($__internal_4cdff31692d2fc780907414975bbdd459596b4065ff5c4a061cb3b867470f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_4cdff31692d2fc780907414975bbdd459596b4065ff5c4a061cb3b867470f286->leave($__internal_4cdff31692d2fc780907414975bbdd459596b4065ff5c4a061cb3b867470f286_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_673e7b3854d7c66464d09fff822bc36855982163d6e01469c58971275c560c3b = $this->env->getExtension("native_profiler");
        $__internal_673e7b3854d7c66464d09fff822bc36855982163d6e01469c58971275c560c3b->enter($__internal_673e7b3854d7c66464d09fff822bc36855982163d6e01469c58971275c560c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"
                          class=\"navbar-form navbar-right form-inline\">
                        ";
        // line 23
        $this->displayBlock('login', $context, $blocks);
        // line 29
        echo "                    </form>
                </div>
            </div>
        </nav>
        ";
        // line 33
        $this->displayBlock('editor', $context, $blocks);
        // line 35
        echo "    </div>

";
        
        $__internal_673e7b3854d7c66464d09fff822bc36855982163d6e01469c58971275c560c3b->leave($__internal_673e7b3854d7c66464d09fff822bc36855982163d6e01469c58971275c560c3b_prof);

    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        $__internal_4e60c86485818c0b50a04b6875741033acefa37d3381f9147c586345289e586f = $this->env->getExtension("native_profiler");
        $__internal_4e60c86485818c0b50a04b6875741033acefa37d3381f9147c586345289e586f->enter($__internal_4e60c86485818c0b50a04b6875741033acefa37d3381f9147c586345289e586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 24
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 25
            echo "                                Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " Privilegios: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
            echo "
                            ";
        }
        // line 27
        echo "
                        ";
        
        $__internal_4e60c86485818c0b50a04b6875741033acefa37d3381f9147c586345289e586f->leave($__internal_4e60c86485818c0b50a04b6875741033acefa37d3381f9147c586345289e586f_prof);

    }

    // line 33
    public function block_editor($context, array $blocks = array())
    {
        $__internal_b1dcb024675429c8829f3618fab037cac7fee6378752f43c4ae89a3be7a39ffa = $this->env->getExtension("native_profiler");
        $__internal_b1dcb024675429c8829f3618fab037cac7fee6378752f43c4ae89a3be7a39ffa->enter($__internal_b1dcb024675429c8829f3618fab037cac7fee6378752f43c4ae89a3be7a39ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 34
        echo "        ";
        
        $__internal_b1dcb024675429c8829f3618fab037cac7fee6378752f43c4ae89a3be7a39ffa->leave($__internal_b1dcb024675429c8829f3618fab037cac7fee6378752f43c4ae89a3be7a39ffa_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  128 => 33,  120 => 27,  112 => 25,  109 => 24,  103 => 23,  94 => 35,  92 => 33,  86 => 29,  84 => 23,  79 => 21,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
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
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post"*/
/*                           class="navbar-form navbar-right form-inline">*/
/*                         {% block login %}*/
/*                             {% if is_granted("ROLE_USER") %}*/
/*                                 Bienvenido {{ app.user.username }} Privilegios: {{ app.user.roles[0] }}*/
/*                             {% endif %}*/
/* */
/*                         {% endblock %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*         {% block editor %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
