<?php

/* MiAppBundle::editor/index.html.twig */
class __TwigTemplate_73e62f09c662bea5da8b2a770f71d4e57ddbfb684411046f755df518ea2bbcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::partidos/index.html.twig", "MiAppBundle::editor/index.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'editor' => array($this, 'block_editor'),
            'editref' => array($this, 'block_editref'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::partidos/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_354f55a6ebb979ae2ba2c5ab0b3c345864d658177bed52b53963920b973f022e = $this->env->getExtension("native_profiler");
        $__internal_354f55a6ebb979ae2ba2c5ab0b3c345864d658177bed52b53963920b973f022e->enter($__internal_354f55a6ebb979ae2ba2c5ab0b3c345864d658177bed52b53963920b973f022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::editor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_354f55a6ebb979ae2ba2c5ab0b3c345864d658177bed52b53963920b973f022e->leave($__internal_354f55a6ebb979ae2ba2c5ab0b3c345864d658177bed52b53963920b973f022e_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_f9d9e5c943821565d7ba0e097faace18ce2c413c5524ad93b1c93dd35ab8de2e = $this->env->getExtension("native_profiler");
        $__internal_f9d9e5c943821565d7ba0e097faace18ce2c413c5524ad93b1c93dd35ab8de2e->enter($__internal_f9d9e5c943821565d7ba0e097faace18ce2c413c5524ad93b1c93dd35ab8de2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Vista del Editor</h1>
";
        
        $__internal_f9d9e5c943821565d7ba0e097faace18ce2c413c5524ad93b1c93dd35ab8de2e->leave($__internal_f9d9e5c943821565d7ba0e097faace18ce2c413c5524ad93b1c93dd35ab8de2e_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_4f53cf1fbca4a03d1c56452c9357cb426b57db96b93e57cbb52910b3936bdae6 = $this->env->getExtension("native_profiler");
        $__internal_4f53cf1fbca4a03d1c56452c9357cb426b57db96b93e57cbb52910b3936bdae6->enter($__internal_4f53cf1fbca4a03d1c56452c9357cb426b57db96b93e57cbb52910b3936bdae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "    ";
        $this->displayParentBlock("editor", $context, $blocks);
        echo "
";
        
        $__internal_4f53cf1fbca4a03d1c56452c9357cb426b57db96b93e57cbb52910b3936bdae6->leave($__internal_4f53cf1fbca4a03d1c56452c9357cb426b57db96b93e57cbb52910b3936bdae6_prof);

    }

    // line 9
    public function block_editref($context, array $blocks = array())
    {
        $__internal_ec25774f748124a25b3f55231798f04e9677b24bdfea83420a527ac21d550bf3 = $this->env->getExtension("native_profiler");
        $__internal_ec25774f748124a25b3f55231798f04e9677b24bdfea83420a527ac21d550bf3->enter($__internal_ec25774f748124a25b3f55231798f04e9677b24bdfea83420a527ac21d550bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editref"));

        // line 10
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
        echo "\">edit</a>
";
        
        $__internal_ec25774f748124a25b3f55231798f04e9677b24bdfea83420a527ac21d550bf3->leave($__internal_ec25774f748124a25b3f55231798f04e9677b24bdfea83420a527ac21d550bf3_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::editor/index.html.twig";
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
/* {% extends 'MiAppBundle::partidos/index.html.twig' %}*/
/* */
/* {% block titulo %}*/
/*     <h1 style="text-align:center">Vista del Editor</h1>*/
/* {% endblock %}*/
/* {% block editor %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block editref %}*/
/*     <a href="{{ path('editor_edit', { 'id': partido.id }) }}">edit</a>*/
/* {% endblock %}*/
/* */
