<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0b318252adf791ab817222dd269f3e2cbfdf9182d0005a53898c13bf12ad140f extends Twig_Template
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
        $__internal_b8cd69596893f4f1692944373d3817fe4daf525bcda1022a98f62d8287d0742e = $this->env->getExtension("native_profiler");
        $__internal_b8cd69596893f4f1692944373d3817fe4daf525bcda1022a98f62d8287d0742e->enter($__internal_b8cd69596893f4f1692944373d3817fe4daf525bcda1022a98f62d8287d0742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8cd69596893f4f1692944373d3817fe4daf525bcda1022a98f62d8287d0742e->leave($__internal_b8cd69596893f4f1692944373d3817fe4daf525bcda1022a98f62d8287d0742e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b0afbebcb73042b300fdff1775946d5280448ec4e481afe1b5fb93f26f6589d = $this->env->getExtension("native_profiler");
        $__internal_1b0afbebcb73042b300fdff1775946d5280448ec4e481afe1b5fb93f26f6589d->enter($__internal_1b0afbebcb73042b300fdff1775946d5280448ec4e481afe1b5fb93f26f6589d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b0afbebcb73042b300fdff1775946d5280448ec4e481afe1b5fb93f26f6589d->leave($__internal_1b0afbebcb73042b300fdff1775946d5280448ec4e481afe1b5fb93f26f6589d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a289855118b81a53f80db6f1d4823ef478f538a0aee03dd9e35d9b263675f418 = $this->env->getExtension("native_profiler");
        $__internal_a289855118b81a53f80db6f1d4823ef478f538a0aee03dd9e35d9b263675f418->enter($__internal_a289855118b81a53f80db6f1d4823ef478f538a0aee03dd9e35d9b263675f418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a289855118b81a53f80db6f1d4823ef478f538a0aee03dd9e35d9b263675f418->leave($__internal_a289855118b81a53f80db6f1d4823ef478f538a0aee03dd9e35d9b263675f418_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c9248dc297dc2b792f6a31a05dca2ebd657f818076d945d5875d677c526a11 = $this->env->getExtension("native_profiler");
        $__internal_a0c9248dc297dc2b792f6a31a05dca2ebd657f818076d945d5875d677c526a11->enter($__internal_a0c9248dc297dc2b792f6a31a05dca2ebd657f818076d945d5875d677c526a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a0c9248dc297dc2b792f6a31a05dca2ebd657f818076d945d5875d677c526a11->leave($__internal_a0c9248dc297dc2b792f6a31a05dca2ebd657f818076d945d5875d677c526a11_prof);

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
