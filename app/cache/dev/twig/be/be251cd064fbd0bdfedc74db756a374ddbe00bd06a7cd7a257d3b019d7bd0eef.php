<?php

/* editor/index.html.twig */
class __TwigTemplate_cc1606788f00aaf8f3a77c417ff10e5ee13ac5b1cb2574674dbc1a7d8158b845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partidos/index.html.twig", "editor/index.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'editref' => array($this, 'block_editref'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partidos/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d3ede6c48f3d81cf0f5ec012a4d32bf2d512cb1d4f441d5cced819bd36ea174 = $this->env->getExtension("native_profiler");
        $__internal_2d3ede6c48f3d81cf0f5ec012a4d32bf2d512cb1d4f441d5cced819bd36ea174->enter($__internal_2d3ede6c48f3d81cf0f5ec012a4d32bf2d512cb1d4f441d5cced819bd36ea174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "editor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d3ede6c48f3d81cf0f5ec012a4d32bf2d512cb1d4f441d5cced819bd36ea174->leave($__internal_2d3ede6c48f3d81cf0f5ec012a4d32bf2d512cb1d4f441d5cced819bd36ea174_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_f15f229c29d9d61c90d9b7ac2491a9f04dadbf07a92527eab3d56c02755dd876 = $this->env->getExtension("native_profiler");
        $__internal_f15f229c29d9d61c90d9b7ac2491a9f04dadbf07a92527eab3d56c02755dd876->enter($__internal_f15f229c29d9d61c90d9b7ac2491a9f04dadbf07a92527eab3d56c02755dd876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Vista del Editor</h1>
";
        
        $__internal_f15f229c29d9d61c90d9b7ac2491a9f04dadbf07a92527eab3d56c02755dd876->leave($__internal_f15f229c29d9d61c90d9b7ac2491a9f04dadbf07a92527eab3d56c02755dd876_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c21c557a770ce77dbc87102b0c7511a1579a1d895b8209b8b20f642045172f41 = $this->env->getExtension("native_profiler");
        $__internal_c21c557a770ce77dbc87102b0c7511a1579a1d895b8209b8b20f642045172f41->enter($__internal_c21c557a770ce77dbc87102b0c7511a1579a1d895b8209b8b20f642045172f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_c21c557a770ce77dbc87102b0c7511a1579a1d895b8209b8b20f642045172f41->leave($__internal_c21c557a770ce77dbc87102b0c7511a1579a1d895b8209b8b20f642045172f41_prof);

    }

    // line 9
    public function block_editref($context, array $blocks = array())
    {
        $__internal_a34a4009f35a51dc2223f050a3af6ae8c5c91f591263cd41248f3bfe0eff8c3a = $this->env->getExtension("native_profiler");
        $__internal_a34a4009f35a51dc2223f050a3af6ae8c5c91f591263cd41248f3bfe0eff8c3a->enter($__internal_a34a4009f35a51dc2223f050a3af6ae8c5c91f591263cd41248f3bfe0eff8c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editref"));

        // line 10
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
        echo "\">edit</a>
";
        
        $__internal_a34a4009f35a51dc2223f050a3af6ae8c5c91f591263cd41248f3bfe0eff8c3a->leave($__internal_a34a4009f35a51dc2223f050a3af6ae8c5c91f591263cd41248f3bfe0eff8c3a_prof);

    }

    public function getTemplateName()
    {
        return "editor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  66 => 9,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'partidos/index.html.twig' %}*/
/* */
/* {% block titulo %}*/
/*     <h1 style="text-align:center">Vista del Editor</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block editref %}*/
/*     <a href="{{ path('editor_edit', { 'id': partido.id }) }}">edit</a>*/
/* {% endblock %}*/
/* */
