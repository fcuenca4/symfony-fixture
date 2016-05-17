<?php

/* MiAppBundle::editor/edit.html.twig */
class __TwigTemplate_61a5ba2ba7201b4e62b43afbfa65e61409994112bc8f3a2399e3626f50d9619b extends Twig_Template
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
        $__internal_1a5676c7f7f38949a5b2db09ced54d0925bbe8a2c430afa28fe7a658932bc61b = $this->env->getExtension("native_profiler");
        $__internal_1a5676c7f7f38949a5b2db09ced54d0925bbe8a2c430afa28fe7a658932bc61b->enter($__internal_1a5676c7f7f38949a5b2db09ced54d0925bbe8a2c430afa28fe7a658932bc61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::editor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5676c7f7f38949a5b2db09ced54d0925bbe8a2c430afa28fe7a658932bc61b->leave($__internal_1a5676c7f7f38949a5b2db09ced54d0925bbe8a2c430afa28fe7a658932bc61b_prof);

    }

    // line 2
    public function block_editor($context, array $blocks = array())
    {
        $__internal_8212898a7cb3afe24e0d96edf8b0111596e628c1abd1c36fd1ea651ece5bc407 = $this->env->getExtension("native_profiler");
        $__internal_8212898a7cb3afe24e0d96edf8b0111596e628c1abd1c36fd1ea651ece5bc407->enter($__internal_8212898a7cb3afe24e0d96edf8b0111596e628c1abd1c36fd1ea651ece5bc407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 3
        echo "    ";
        $this->displayParentBlock("editor", $context, $blocks);
        echo "
";
        
        $__internal_8212898a7cb3afe24e0d96edf8b0111596e628c1abd1c36fd1ea651ece5bc407->leave($__internal_8212898a7cb3afe24e0d96edf8b0111596e628c1abd1c36fd1ea651ece5bc407_prof);

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
