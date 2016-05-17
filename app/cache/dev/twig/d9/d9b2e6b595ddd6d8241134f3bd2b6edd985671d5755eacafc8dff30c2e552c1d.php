<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_87af305bd8da04c2e28622071cc5ce64df8d58e8d34a2e1926dd740ee3ad9b04 extends Twig_Template
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
        $__internal_766a56de20947e86bb6c38feecb1a0c4aa9e36f40ce5fb245ee9e82c722f8a24 = $this->env->getExtension("native_profiler");
        $__internal_766a56de20947e86bb6c38feecb1a0c4aa9e36f40ce5fb245ee9e82c722f8a24->enter($__internal_766a56de20947e86bb6c38feecb1a0c4aa9e36f40ce5fb245ee9e82c722f8a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_766a56de20947e86bb6c38feecb1a0c4aa9e36f40ce5fb245ee9e82c722f8a24->leave($__internal_766a56de20947e86bb6c38feecb1a0c4aa9e36f40ce5fb245ee9e82c722f8a24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4dee936911a78e19d2b42c80134a8e871db988b99bb98d23ecdc840946c545c = $this->env->getExtension("native_profiler");
        $__internal_b4dee936911a78e19d2b42c80134a8e871db988b99bb98d23ecdc840946c545c->enter($__internal_b4dee936911a78e19d2b42c80134a8e871db988b99bb98d23ecdc840946c545c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4dee936911a78e19d2b42c80134a8e871db988b99bb98d23ecdc840946c545c->leave($__internal_b4dee936911a78e19d2b42c80134a8e871db988b99bb98d23ecdc840946c545c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b36063b5cb77cdc3fac8ef4b7e9d1f2c26d36785fb0ba7fa0f5426e793fe61a = $this->env->getExtension("native_profiler");
        $__internal_1b36063b5cb77cdc3fac8ef4b7e9d1f2c26d36785fb0ba7fa0f5426e793fe61a->enter($__internal_1b36063b5cb77cdc3fac8ef4b7e9d1f2c26d36785fb0ba7fa0f5426e793fe61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b36063b5cb77cdc3fac8ef4b7e9d1f2c26d36785fb0ba7fa0f5426e793fe61a->leave($__internal_1b36063b5cb77cdc3fac8ef4b7e9d1f2c26d36785fb0ba7fa0f5426e793fe61a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_117530e77979b1549b617fe262a107afb40dbd13294664c34a63c0c649c52737 = $this->env->getExtension("native_profiler");
        $__internal_117530e77979b1549b617fe262a107afb40dbd13294664c34a63c0c649c52737->enter($__internal_117530e77979b1549b617fe262a107afb40dbd13294664c34a63c0c649c52737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_117530e77979b1549b617fe262a107afb40dbd13294664c34a63c0c649c52737->leave($__internal_117530e77979b1549b617fe262a107afb40dbd13294664c34a63c0c649c52737_prof);

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
