<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_c271a93b4eae2d43aad812f30bbbbb1fe6004dd2f910589e3c0c5ab72d06de92 extends Twig_Template
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
        $__internal_38f2f14037b7a96ec6a041e918ce3039341da099ae5f85ce0df0d6deba95f529 = $this->env->getExtension("native_profiler");
        $__internal_38f2f14037b7a96ec6a041e918ce3039341da099ae5f85ce0df0d6deba95f529->enter($__internal_38f2f14037b7a96ec6a041e918ce3039341da099ae5f85ce0df0d6deba95f529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f2f14037b7a96ec6a041e918ce3039341da099ae5f85ce0df0d6deba95f529->leave($__internal_38f2f14037b7a96ec6a041e918ce3039341da099ae5f85ce0df0d6deba95f529_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c02839d57b97dd32e4e9d76c1484c647825a4022ef0fdd171d3de9e22b00b84e = $this->env->getExtension("native_profiler");
        $__internal_c02839d57b97dd32e4e9d76c1484c647825a4022ef0fdd171d3de9e22b00b84e->enter($__internal_c02839d57b97dd32e4e9d76c1484c647825a4022ef0fdd171d3de9e22b00b84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_c02839d57b97dd32e4e9d76c1484c647825a4022ef0fdd171d3de9e22b00b84e->leave($__internal_c02839d57b97dd32e4e9d76c1484c647825a4022ef0fdd171d3de9e22b00b84e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a25957a756798c78a572dac22333f4f4e97a2ad6dadb448c6bb92b87bfe139 = $this->env->getExtension("native_profiler");
        $__internal_41a25957a756798c78a572dac22333f4f4e97a2ad6dadb448c6bb92b87bfe139->enter($__internal_41a25957a756798c78a572dac22333f4f4e97a2ad6dadb448c6bb92b87bfe139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 34
        echo "    </div>

";
        
        $__internal_41a25957a756798c78a572dac22333f4f4e97a2ad6dadb448c6bb92b87bfe139->leave($__internal_41a25957a756798c78a572dac22333f4f4e97a2ad6dadb448c6bb92b87bfe139_prof);

    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        $__internal_31121e144f68650b257918601c2a889f081bbc8656b6950ab1b4757f95049227 = $this->env->getExtension("native_profiler");
        $__internal_31121e144f68650b257918601c2a889f081bbc8656b6950ab1b4757f95049227->enter($__internal_31121e144f68650b257918601c2a889f081bbc8656b6950ab1b4757f95049227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_31121e144f68650b257918601c2a889f081bbc8656b6950ab1b4757f95049227->leave($__internal_31121e144f68650b257918601c2a889f081bbc8656b6950ab1b4757f95049227_prof);

    }

    // line 33
    public function block_editor($context, array $blocks = array())
    {
        $__internal_2048968d79bf5110ad83937d3c7d60d204a13c21fb693570733fd418c0fb7dc9 = $this->env->getExtension("native_profiler");
        $__internal_2048968d79bf5110ad83937d3c7d60d204a13c21fb693570733fd418c0fb7dc9->enter($__internal_2048968d79bf5110ad83937d3c7d60d204a13c21fb693570733fd418c0fb7dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        
        $__internal_2048968d79bf5110ad83937d3c7d60d204a13c21fb693570733fd418c0fb7dc9->leave($__internal_2048968d79bf5110ad83937d3c7d60d204a13c21fb693570733fd418c0fb7dc9_prof);

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
        return array (  128 => 33,  120 => 27,  112 => 25,  109 => 24,  103 => 23,  94 => 34,  92 => 33,  86 => 29,  84 => 23,  79 => 21,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*         {% block editor %}{% endblock %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
