<?php

/* MiAppBundle::editor/index.html.twig */
class __TwigTemplate_7b5516ffe58092f1b6f4045442c73bf39c013d13161e26efa5f0c4b3e459e357 extends Twig_Template
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
        $__internal_c1a1e44cba18b5f8a62294e0d429a2547eac9ff2b41643568eec7aabd11d5de4 = $this->env->getExtension("native_profiler");
        $__internal_c1a1e44cba18b5f8a62294e0d429a2547eac9ff2b41643568eec7aabd11d5de4->enter($__internal_c1a1e44cba18b5f8a62294e0d429a2547eac9ff2b41643568eec7aabd11d5de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::editor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a1e44cba18b5f8a62294e0d429a2547eac9ff2b41643568eec7aabd11d5de4->leave($__internal_c1a1e44cba18b5f8a62294e0d429a2547eac9ff2b41643568eec7aabd11d5de4_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_3d79dc1a228642ede105bd0ba8f522a5583680d2384821cda0f6b60be11bc5ed = $this->env->getExtension("native_profiler");
        $__internal_3d79dc1a228642ede105bd0ba8f522a5583680d2384821cda0f6b60be11bc5ed->enter($__internal_3d79dc1a228642ede105bd0ba8f522a5583680d2384821cda0f6b60be11bc5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Vista del Editor</h1>
";
        
        $__internal_3d79dc1a228642ede105bd0ba8f522a5583680d2384821cda0f6b60be11bc5ed->leave($__internal_3d79dc1a228642ede105bd0ba8f522a5583680d2384821cda0f6b60be11bc5ed_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_44a75ec5af826e8cfe176f9712303d5cbf55d4a0ea3b7a9940f12e36e3866d33 = $this->env->getExtension("native_profiler");
        $__internal_44a75ec5af826e8cfe176f9712303d5cbf55d4a0ea3b7a9940f12e36e3866d33->enter($__internal_44a75ec5af826e8cfe176f9712303d5cbf55d4a0ea3b7a9940f12e36e3866d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "    ";
        $this->displayParentBlock("editor", $context, $blocks);
        echo "
";
        
        $__internal_44a75ec5af826e8cfe176f9712303d5cbf55d4a0ea3b7a9940f12e36e3866d33->leave($__internal_44a75ec5af826e8cfe176f9712303d5cbf55d4a0ea3b7a9940f12e36e3866d33_prof);

    }

    // line 9
    public function block_editref($context, array $blocks = array())
    {
        $__internal_eb6af5a68983c12e8321658748c56683a7c951c6959313bb4556f139408233a6 = $this->env->getExtension("native_profiler");
        $__internal_eb6af5a68983c12e8321658748c56683a7c951c6959313bb4556f139408233a6->enter($__internal_eb6af5a68983c12e8321658748c56683a7c951c6959313bb4556f139408233a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editref"));

        // line 10
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
        echo "\">edit</a>
";
        
        $__internal_eb6af5a68983c12e8321658748c56683a7c951c6959313bb4556f139408233a6->leave($__internal_eb6af5a68983c12e8321658748c56683a7c951c6959313bb4556f139408233a6_prof);

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
