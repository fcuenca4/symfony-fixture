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
        $__internal_9881ff3e571e72bc925c6d405cc70b1f40e77d25b93190570f6dd4bb1ed0a72e = $this->env->getExtension("native_profiler");
        $__internal_9881ff3e571e72bc925c6d405cc70b1f40e77d25b93190570f6dd4bb1ed0a72e->enter($__internal_9881ff3e571e72bc925c6d405cc70b1f40e77d25b93190570f6dd4bb1ed0a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9881ff3e571e72bc925c6d405cc70b1f40e77d25b93190570f6dd4bb1ed0a72e->leave($__internal_9881ff3e571e72bc925c6d405cc70b1f40e77d25b93190570f6dd4bb1ed0a72e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be5c78c0b244d55b17eee21dbcb40b5283d7de95bb4c64cb42aa2c0c917bb3f9 = $this->env->getExtension("native_profiler");
        $__internal_be5c78c0b244d55b17eee21dbcb40b5283d7de95bb4c64cb42aa2c0c917bb3f9->enter($__internal_be5c78c0b244d55b17eee21dbcb40b5283d7de95bb4c64cb42aa2c0c917bb3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be5c78c0b244d55b17eee21dbcb40b5283d7de95bb4c64cb42aa2c0c917bb3f9->leave($__internal_be5c78c0b244d55b17eee21dbcb40b5283d7de95bb4c64cb42aa2c0c917bb3f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce0a67935f24cc8fad69521178f0bca5da42a5ce88902c155d07612262655341 = $this->env->getExtension("native_profiler");
        $__internal_ce0a67935f24cc8fad69521178f0bca5da42a5ce88902c155d07612262655341->enter($__internal_ce0a67935f24cc8fad69521178f0bca5da42a5ce88902c155d07612262655341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce0a67935f24cc8fad69521178f0bca5da42a5ce88902c155d07612262655341->leave($__internal_ce0a67935f24cc8fad69521178f0bca5da42a5ce88902c155d07612262655341_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4be9e17217537b36710595c8d26a7eb9c1987ff29d4c13aa2ffaa06542ca83e9 = $this->env->getExtension("native_profiler");
        $__internal_4be9e17217537b36710595c8d26a7eb9c1987ff29d4c13aa2ffaa06542ca83e9->enter($__internal_4be9e17217537b36710595c8d26a7eb9c1987ff29d4c13aa2ffaa06542ca83e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4be9e17217537b36710595c8d26a7eb9c1987ff29d4c13aa2ffaa06542ca83e9->leave($__internal_4be9e17217537b36710595c8d26a7eb9c1987ff29d4c13aa2ffaa06542ca83e9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91d8e701245b24f993ee3c916320fa528012fbc8c6606be94b7e704eeb5c50e6 = $this->env->getExtension("native_profiler");
        $__internal_91d8e701245b24f993ee3c916320fa528012fbc8c6606be94b7e704eeb5c50e6->enter($__internal_91d8e701245b24f993ee3c916320fa528012fbc8c6606be94b7e704eeb5c50e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_91d8e701245b24f993ee3c916320fa528012fbc8c6606be94b7e704eeb5c50e6->leave($__internal_91d8e701245b24f993ee3c916320fa528012fbc8c6606be94b7e704eeb5c50e6_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
