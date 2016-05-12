<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_82e7260caa5402930a4bfbd9d272b356328b20b7a29c939a7ec9e31caf0eda23 extends Twig_Template
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
        $__internal_005c5d15e1f079378b7aa176d0e855e73a81e6959617afd22f2588042a43ccfe = $this->env->getExtension("native_profiler");
        $__internal_005c5d15e1f079378b7aa176d0e855e73a81e6959617afd22f2588042a43ccfe->enter($__internal_005c5d15e1f079378b7aa176d0e855e73a81e6959617afd22f2588042a43ccfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_005c5d15e1f079378b7aa176d0e855e73a81e6959617afd22f2588042a43ccfe->leave($__internal_005c5d15e1f079378b7aa176d0e855e73a81e6959617afd22f2588042a43ccfe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_833ef7e0260bbaf70623d320a63d416fbf4b81e4cab179a39c8bb8e5e8ea83c1 = $this->env->getExtension("native_profiler");
        $__internal_833ef7e0260bbaf70623d320a63d416fbf4b81e4cab179a39c8bb8e5e8ea83c1->enter($__internal_833ef7e0260bbaf70623d320a63d416fbf4b81e4cab179a39c8bb8e5e8ea83c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_833ef7e0260bbaf70623d320a63d416fbf4b81e4cab179a39c8bb8e5e8ea83c1->leave($__internal_833ef7e0260bbaf70623d320a63d416fbf4b81e4cab179a39c8bb8e5e8ea83c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9cff7d289b87607d8899a99cda941315dc8b9438cc0abae288c7fc139eb6701 = $this->env->getExtension("native_profiler");
        $__internal_b9cff7d289b87607d8899a99cda941315dc8b9438cc0abae288c7fc139eb6701->enter($__internal_b9cff7d289b87607d8899a99cda941315dc8b9438cc0abae288c7fc139eb6701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9cff7d289b87607d8899a99cda941315dc8b9438cc0abae288c7fc139eb6701->leave($__internal_b9cff7d289b87607d8899a99cda941315dc8b9438cc0abae288c7fc139eb6701_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e73ec827989787c1d11881b4c4482429ed8958e8a325a82c25df800dd48a7358 = $this->env->getExtension("native_profiler");
        $__internal_e73ec827989787c1d11881b4c4482429ed8958e8a325a82c25df800dd48a7358->enter($__internal_e73ec827989787c1d11881b4c4482429ed8958e8a325a82c25df800dd48a7358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e73ec827989787c1d11881b4c4482429ed8958e8a325a82c25df800dd48a7358->leave($__internal_e73ec827989787c1d11881b4c4482429ed8958e8a325a82c25df800dd48a7358_prof);

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
