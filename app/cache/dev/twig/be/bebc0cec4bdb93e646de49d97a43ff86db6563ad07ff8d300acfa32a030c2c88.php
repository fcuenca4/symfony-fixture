<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_baeba89d09d51110b256fabe904f41b0a019f91229cd569a381de513fa7c68ea extends Twig_Template
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
        $__internal_11f27f3607d853ebee5e427546842467a0b0187a650435aab10efdc795292dad = $this->env->getExtension("native_profiler");
        $__internal_11f27f3607d853ebee5e427546842467a0b0187a650435aab10efdc795292dad->enter($__internal_11f27f3607d853ebee5e427546842467a0b0187a650435aab10efdc795292dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f27f3607d853ebee5e427546842467a0b0187a650435aab10efdc795292dad->leave($__internal_11f27f3607d853ebee5e427546842467a0b0187a650435aab10efdc795292dad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e998fbb33e6867c353738c4a7ae16ac51ce3ce3e817d23befdde0f9e827d9d6 = $this->env->getExtension("native_profiler");
        $__internal_9e998fbb33e6867c353738c4a7ae16ac51ce3ce3e817d23befdde0f9e827d9d6->enter($__internal_9e998fbb33e6867c353738c4a7ae16ac51ce3ce3e817d23befdde0f9e827d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e998fbb33e6867c353738c4a7ae16ac51ce3ce3e817d23befdde0f9e827d9d6->leave($__internal_9e998fbb33e6867c353738c4a7ae16ac51ce3ce3e817d23befdde0f9e827d9d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3fe5c058af186596a407aa36c287d8d318ade0fac4315adcbb3e790db5b2d8b = $this->env->getExtension("native_profiler");
        $__internal_e3fe5c058af186596a407aa36c287d8d318ade0fac4315adcbb3e790db5b2d8b->enter($__internal_e3fe5c058af186596a407aa36c287d8d318ade0fac4315adcbb3e790db5b2d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3fe5c058af186596a407aa36c287d8d318ade0fac4315adcbb3e790db5b2d8b->leave($__internal_e3fe5c058af186596a407aa36c287d8d318ade0fac4315adcbb3e790db5b2d8b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_567c144bec875227dbd12d1b415f5cde08761ec2bc6e2f8cb7a670367ee663eb = $this->env->getExtension("native_profiler");
        $__internal_567c144bec875227dbd12d1b415f5cde08761ec2bc6e2f8cb7a670367ee663eb->enter($__internal_567c144bec875227dbd12d1b415f5cde08761ec2bc6e2f8cb7a670367ee663eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_567c144bec875227dbd12d1b415f5cde08761ec2bc6e2f8cb7a670367ee663eb->leave($__internal_567c144bec875227dbd12d1b415f5cde08761ec2bc6e2f8cb7a670367ee663eb_prof);

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
