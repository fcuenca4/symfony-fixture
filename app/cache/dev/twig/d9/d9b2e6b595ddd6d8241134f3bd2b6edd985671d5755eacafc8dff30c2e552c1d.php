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
        $__internal_6d67cd4fc388af761932ef5126289c262620c8cb7a1e04a3c5dcdbaba5e202df = $this->env->getExtension("native_profiler");
        $__internal_6d67cd4fc388af761932ef5126289c262620c8cb7a1e04a3c5dcdbaba5e202df->enter($__internal_6d67cd4fc388af761932ef5126289c262620c8cb7a1e04a3c5dcdbaba5e202df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d67cd4fc388af761932ef5126289c262620c8cb7a1e04a3c5dcdbaba5e202df->leave($__internal_6d67cd4fc388af761932ef5126289c262620c8cb7a1e04a3c5dcdbaba5e202df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cfc495331750d1c5b538afca2447ac9a11407aed28eb1104192044032565826 = $this->env->getExtension("native_profiler");
        $__internal_2cfc495331750d1c5b538afca2447ac9a11407aed28eb1104192044032565826->enter($__internal_2cfc495331750d1c5b538afca2447ac9a11407aed28eb1104192044032565826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2cfc495331750d1c5b538afca2447ac9a11407aed28eb1104192044032565826->leave($__internal_2cfc495331750d1c5b538afca2447ac9a11407aed28eb1104192044032565826_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed9c2c7b4fd9fe03403c2f7c6dfa8081de1d8024090897f0cd0694ae30b12afd = $this->env->getExtension("native_profiler");
        $__internal_ed9c2c7b4fd9fe03403c2f7c6dfa8081de1d8024090897f0cd0694ae30b12afd->enter($__internal_ed9c2c7b4fd9fe03403c2f7c6dfa8081de1d8024090897f0cd0694ae30b12afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed9c2c7b4fd9fe03403c2f7c6dfa8081de1d8024090897f0cd0694ae30b12afd->leave($__internal_ed9c2c7b4fd9fe03403c2f7c6dfa8081de1d8024090897f0cd0694ae30b12afd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e68b14603a6019b48b76f38f1463d1270055c850978b7177dadba5477de77a1 = $this->env->getExtension("native_profiler");
        $__internal_1e68b14603a6019b48b76f38f1463d1270055c850978b7177dadba5477de77a1->enter($__internal_1e68b14603a6019b48b76f38f1463d1270055c850978b7177dadba5477de77a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1e68b14603a6019b48b76f38f1463d1270055c850978b7177dadba5477de77a1->leave($__internal_1e68b14603a6019b48b76f38f1463d1270055c850978b7177dadba5477de77a1_prof);

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
