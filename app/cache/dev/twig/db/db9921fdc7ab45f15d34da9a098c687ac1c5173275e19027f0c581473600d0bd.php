<?php

/* MiAppBundle::editor/edit.html.twig */
class __TwigTemplate_67c9fbc9b423f6a58e307549a74931ccf2fbb447e011980d3d742b77ebe3ed35 extends Twig_Template
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
        $__internal_45a3f111d160612681db2258b3139bfc1dc39c98da90d86759b897b6a62e5172 = $this->env->getExtension("native_profiler");
        $__internal_45a3f111d160612681db2258b3139bfc1dc39c98da90d86759b897b6a62e5172->enter($__internal_45a3f111d160612681db2258b3139bfc1dc39c98da90d86759b897b6a62e5172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::editor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a3f111d160612681db2258b3139bfc1dc39c98da90d86759b897b6a62e5172->leave($__internal_45a3f111d160612681db2258b3139bfc1dc39c98da90d86759b897b6a62e5172_prof);

    }

    // line 2
    public function block_editor($context, array $blocks = array())
    {
        $__internal_99e2142bddff3248a9b58c90eacb100430e39af3a3ce243a4dc71666b486064b = $this->env->getExtension("native_profiler");
        $__internal_99e2142bddff3248a9b58c90eacb100430e39af3a3ce243a4dc71666b486064b->enter($__internal_99e2142bddff3248a9b58c90eacb100430e39af3a3ce243a4dc71666b486064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 3
        echo "    ";
        $this->displayParentBlock("editor", $context, $blocks);
        echo "
";
        
        $__internal_99e2142bddff3248a9b58c90eacb100430e39af3a3ce243a4dc71666b486064b->leave($__internal_99e2142bddff3248a9b58c90eacb100430e39af3a3ce243a4dc71666b486064b_prof);

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
