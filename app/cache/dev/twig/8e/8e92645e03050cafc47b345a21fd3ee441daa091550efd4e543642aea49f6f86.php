<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_549c443b6e48fbacbb30c8ae9ae24ae7d5223521c8f228fb8df78d8128aa20c1 extends Twig_Template
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
        $__internal_b30ed054dbc6f2ef19459ccf09db31470310ea9e60dbcf3301aa465cb5ccfc77 = $this->env->getExtension("native_profiler");
        $__internal_b30ed054dbc6f2ef19459ccf09db31470310ea9e60dbcf3301aa465cb5ccfc77->enter($__internal_b30ed054dbc6f2ef19459ccf09db31470310ea9e60dbcf3301aa465cb5ccfc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30ed054dbc6f2ef19459ccf09db31470310ea9e60dbcf3301aa465cb5ccfc77->leave($__internal_b30ed054dbc6f2ef19459ccf09db31470310ea9e60dbcf3301aa465cb5ccfc77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ea4d812a7e3f0dc48d4d1424e0faa6df05d969ab372476353d042a8adb6e124 = $this->env->getExtension("native_profiler");
        $__internal_5ea4d812a7e3f0dc48d4d1424e0faa6df05d969ab372476353d042a8adb6e124->enter($__internal_5ea4d812a7e3f0dc48d4d1424e0faa6df05d969ab372476353d042a8adb6e124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ea4d812a7e3f0dc48d4d1424e0faa6df05d969ab372476353d042a8adb6e124->leave($__internal_5ea4d812a7e3f0dc48d4d1424e0faa6df05d969ab372476353d042a8adb6e124_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eb966189192d3546a87bb1b223d9cdc17c8fd16138c43eecfd6ebf06bd294c5 = $this->env->getExtension("native_profiler");
        $__internal_7eb966189192d3546a87bb1b223d9cdc17c8fd16138c43eecfd6ebf06bd294c5->enter($__internal_7eb966189192d3546a87bb1b223d9cdc17c8fd16138c43eecfd6ebf06bd294c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7eb966189192d3546a87bb1b223d9cdc17c8fd16138c43eecfd6ebf06bd294c5->leave($__internal_7eb966189192d3546a87bb1b223d9cdc17c8fd16138c43eecfd6ebf06bd294c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89628e01591020591ac92845b679aba09968752674a5c23784e6449a77534cb4 = $this->env->getExtension("native_profiler");
        $__internal_89628e01591020591ac92845b679aba09968752674a5c23784e6449a77534cb4->enter($__internal_89628e01591020591ac92845b679aba09968752674a5c23784e6449a77534cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_89628e01591020591ac92845b679aba09968752674a5c23784e6449a77534cb4->leave($__internal_89628e01591020591ac92845b679aba09968752674a5c23784e6449a77534cb4_prof);

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
