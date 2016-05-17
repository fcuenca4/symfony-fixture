<?php

/* MiAppBundle::editor/edit.html.twig */
class __TwigTemplate_8f3eeacd32003155f00f7ed16819b1061802b331de4eb7ea40f09d359e6f5e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::partidos/edit.html.twig", "MiAppBundle::editor/edit.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::partidos/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d3d36a5178698f9184e7e3a41475e88cfa9464a9caa70b6d963e55a51b48050 = $this->env->getExtension("native_profiler");
        $__internal_4d3d36a5178698f9184e7e3a41475e88cfa9464a9caa70b6d963e55a51b48050->enter($__internal_4d3d36a5178698f9184e7e3a41475e88cfa9464a9caa70b6d963e55a51b48050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::editor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3d36a5178698f9184e7e3a41475e88cfa9464a9caa70b6d963e55a51b48050->leave($__internal_4d3d36a5178698f9184e7e3a41475e88cfa9464a9caa70b6d963e55a51b48050_prof);

    }

    // line 2
    public function block_editor($context, array $blocks = array())
    {
        $__internal_79120c543c900f48212957407f9098f499b90d9a83efba3e65aa4f34f2c042b6 = $this->env->getExtension("native_profiler");
        $__internal_79120c543c900f48212957407f9098f499b90d9a83efba3e65aa4f34f2c042b6->enter($__internal_79120c543c900f48212957407f9098f499b90d9a83efba3e65aa4f34f2c042b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 3
        echo "    ";
        $this->displayParentBlock("editor", $context, $blocks);
        echo "
";
        
        $__internal_79120c543c900f48212957407f9098f499b90d9a83efba3e65aa4f34f2c042b6->leave($__internal_79120c543c900f48212957407f9098f499b90d9a83efba3e65aa4f34f2c042b6_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::editor/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::partidos/edit.html.twig' %}*/
/* {% block editor %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
