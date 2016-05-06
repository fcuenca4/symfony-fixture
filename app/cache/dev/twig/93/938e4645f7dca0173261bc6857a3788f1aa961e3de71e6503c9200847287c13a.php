<?php

/* MiAppBundle:Default:index.html.twig */
class __TwigTemplate_3d24d43d99e13fc8b376f819c854c002b652a2fbed190eed9284eb85bcad0f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MiAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d5ed2e066e40521ed067a76754250b007f9296b783a85d28de67952ff07a2d6 = $this->env->getExtension("native_profiler");
        $__internal_5d5ed2e066e40521ed067a76754250b007f9296b783a85d28de67952ff07a2d6->enter($__internal_5d5ed2e066e40521ed067a76754250b007f9296b783a85d28de67952ff07a2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5ed2e066e40521ed067a76754250b007f9296b783a85d28de67952ff07a2d6->leave($__internal_5d5ed2e066e40521ed067a76754250b007f9296b783a85d28de67952ff07a2d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_907f52fc4269c4c57b95752f2592c0ebfd195f12ac0d1ce202cb612cd34c38b4 = $this->env->getExtension("native_profiler");
        $__internal_907f52fc4269c4c57b95752f2592c0ebfd195f12ac0d1ce202cb612cd34c38b4->enter($__internal_907f52fc4269c4c57b95752f2592c0ebfd195f12ac0d1ce202cb612cd34c38b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "MiAppBundle::layout.html.twig");
        echo "
";
        
        $__internal_907f52fc4269c4c57b95752f2592c0ebfd195f12ac0d1ce202cb612cd34c38b4->leave($__internal_907f52fc4269c4c57b95752f2592c0ebfd195f12ac0d1ce202cb612cd34c38b4_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ include ('MiAppBundle::layout.html.twig') }}*/
/* {% endblock %}*/
