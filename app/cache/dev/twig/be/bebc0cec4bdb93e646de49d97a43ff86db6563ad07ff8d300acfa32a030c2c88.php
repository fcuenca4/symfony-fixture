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
        $__internal_b1b863fda7e2f3d9dc25d58abd67edd162182ea3536e882b9781381dc5a9d980 = $this->env->getExtension("native_profiler");
        $__internal_b1b863fda7e2f3d9dc25d58abd67edd162182ea3536e882b9781381dc5a9d980->enter($__internal_b1b863fda7e2f3d9dc25d58abd67edd162182ea3536e882b9781381dc5a9d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b863fda7e2f3d9dc25d58abd67edd162182ea3536e882b9781381dc5a9d980->leave($__internal_b1b863fda7e2f3d9dc25d58abd67edd162182ea3536e882b9781381dc5a9d980_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7aa2027c22b2193f1d72e8aa21370fe77b711de441f0da16d84a80ca8dfc69da = $this->env->getExtension("native_profiler");
        $__internal_7aa2027c22b2193f1d72e8aa21370fe77b711de441f0da16d84a80ca8dfc69da->enter($__internal_7aa2027c22b2193f1d72e8aa21370fe77b711de441f0da16d84a80ca8dfc69da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7aa2027c22b2193f1d72e8aa21370fe77b711de441f0da16d84a80ca8dfc69da->leave($__internal_7aa2027c22b2193f1d72e8aa21370fe77b711de441f0da16d84a80ca8dfc69da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ffa2ff4b64b03478ceb99aefb2ffe05b04ed51fd0c01fbd2cb561130e0c50f1 = $this->env->getExtension("native_profiler");
        $__internal_5ffa2ff4b64b03478ceb99aefb2ffe05b04ed51fd0c01fbd2cb561130e0c50f1->enter($__internal_5ffa2ff4b64b03478ceb99aefb2ffe05b04ed51fd0c01fbd2cb561130e0c50f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ffa2ff4b64b03478ceb99aefb2ffe05b04ed51fd0c01fbd2cb561130e0c50f1->leave($__internal_5ffa2ff4b64b03478ceb99aefb2ffe05b04ed51fd0c01fbd2cb561130e0c50f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e8c7525644bd8bd6edd6050efc0e9c90c34fa44edfe5a7448c190769f38fe2 = $this->env->getExtension("native_profiler");
        $__internal_74e8c7525644bd8bd6edd6050efc0e9c90c34fa44edfe5a7448c190769f38fe2->enter($__internal_74e8c7525644bd8bd6edd6050efc0e9c90c34fa44edfe5a7448c190769f38fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_74e8c7525644bd8bd6edd6050efc0e9c90c34fa44edfe5a7448c190769f38fe2->leave($__internal_74e8c7525644bd8bd6edd6050efc0e9c90c34fa44edfe5a7448c190769f38fe2_prof);

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
