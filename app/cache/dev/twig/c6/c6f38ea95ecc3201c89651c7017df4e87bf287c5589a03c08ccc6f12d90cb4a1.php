<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dce31b55edc6282b219a3d6a99c45ffebb7b1372e5bf2240017c03a11a9253f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e02453585b933db434df258071c4159488be25dd2653ad535b4d1560d9ad3080 = $this->env->getExtension("native_profiler");
        $__internal_e02453585b933db434df258071c4159488be25dd2653ad535b4d1560d9ad3080->enter($__internal_e02453585b933db434df258071c4159488be25dd2653ad535b4d1560d9ad3080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02453585b933db434df258071c4159488be25dd2653ad535b4d1560d9ad3080->leave($__internal_e02453585b933db434df258071c4159488be25dd2653ad535b4d1560d9ad3080_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95aebd6a4cf8e85d55db7137f541f86d4db0eba70e3c4f1fbab685dd086b8bb1 = $this->env->getExtension("native_profiler");
        $__internal_95aebd6a4cf8e85d55db7137f541f86d4db0eba70e3c4f1fbab685dd086b8bb1->enter($__internal_95aebd6a4cf8e85d55db7137f541f86d4db0eba70e3c4f1fbab685dd086b8bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95aebd6a4cf8e85d55db7137f541f86d4db0eba70e3c4f1fbab685dd086b8bb1->leave($__internal_95aebd6a4cf8e85d55db7137f541f86d4db0eba70e3c4f1fbab685dd086b8bb1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2ff5cd8d2983fea60b2acb5b685cf8494205e74b6fcd3fb3479e2c85c8e9034 = $this->env->getExtension("native_profiler");
        $__internal_a2ff5cd8d2983fea60b2acb5b685cf8494205e74b6fcd3fb3479e2c85c8e9034->enter($__internal_a2ff5cd8d2983fea60b2acb5b685cf8494205e74b6fcd3fb3479e2c85c8e9034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2ff5cd8d2983fea60b2acb5b685cf8494205e74b6fcd3fb3479e2c85c8e9034->leave($__internal_a2ff5cd8d2983fea60b2acb5b685cf8494205e74b6fcd3fb3479e2c85c8e9034_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ae2d805153d5f78aa3b3d21cf599ae3aa18f81d08b28f9ec57fb04f2983c694 = $this->env->getExtension("native_profiler");
        $__internal_7ae2d805153d5f78aa3b3d21cf599ae3aa18f81d08b28f9ec57fb04f2983c694->enter($__internal_7ae2d805153d5f78aa3b3d21cf599ae3aa18f81d08b28f9ec57fb04f2983c694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7ae2d805153d5f78aa3b3d21cf599ae3aa18f81d08b28f9ec57fb04f2983c694->leave($__internal_7ae2d805153d5f78aa3b3d21cf599ae3aa18f81d08b28f9ec57fb04f2983c694_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
