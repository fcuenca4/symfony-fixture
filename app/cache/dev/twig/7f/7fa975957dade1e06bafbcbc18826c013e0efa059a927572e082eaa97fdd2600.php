<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d2296755c9e35ce6b4403701e31b8607a1a4de2c0386230d357585dcebd96871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb50166d562dd37e5e3a15f4a0cacb44cf39fcaa3a6dbf4c546595c06633788 = $this->env->getExtension("native_profiler");
        $__internal_0fb50166d562dd37e5e3a15f4a0cacb44cf39fcaa3a6dbf4c546595c06633788->enter($__internal_0fb50166d562dd37e5e3a15f4a0cacb44cf39fcaa3a6dbf4c546595c06633788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb50166d562dd37e5e3a15f4a0cacb44cf39fcaa3a6dbf4c546595c06633788->leave($__internal_0fb50166d562dd37e5e3a15f4a0cacb44cf39fcaa3a6dbf4c546595c06633788_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_5f371ee66a6323cf34da0420d92de23967ab4e28ce6d545372e25b320eea23b5 = $this->env->getExtension("native_profiler");
        $__internal_5f371ee66a6323cf34da0420d92de23967ab4e28ce6d545372e25b320eea23b5->enter($__internal_5f371ee66a6323cf34da0420d92de23967ab4e28ce6d545372e25b320eea23b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayParentBlock("login", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_5f371ee66a6323cf34da0420d92de23967ab4e28ce6d545372e25b320eea23b5->leave($__internal_5f371ee66a6323cf34da0420d92de23967ab4e28ce6d545372e25b320eea23b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block login %}*/
/*     {{ parent() }}*/
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
/* */
