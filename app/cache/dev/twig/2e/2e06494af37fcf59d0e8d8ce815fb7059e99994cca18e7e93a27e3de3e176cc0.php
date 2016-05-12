<?php

/* partidos/edit.html.twig */
class __TwigTemplate_9092b743024d7120f9965cccfdab7267ff4962df438823b442c524848c2031c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partidos/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0d98ac9f744b208cf613cca4e1e9ebceea40896c461e006903adb35f3072875 = $this->env->getExtension("native_profiler");
        $__internal_d0d98ac9f744b208cf613cca4e1e9ebceea40896c461e006903adb35f3072875->enter($__internal_d0d98ac9f744b208cf613cca4e1e9ebceea40896c461e006903adb35f3072875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d98ac9f744b208cf613cca4e1e9ebceea40896c461e006903adb35f3072875->leave($__internal_d0d98ac9f744b208cf613cca4e1e9ebceea40896c461e006903adb35f3072875_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48e0289e501f5ab279eec5c9acae6989307341e4dba1a85927c10e47b60ff39c = $this->env->getExtension("native_profiler");
        $__internal_48e0289e501f5ab279eec5c9acae6989307341e4dba1a85927c10e47b60ff39c->enter($__internal_48e0289e501f5ab279eec5c9acae6989307341e4dba1a85927c10e47b60ff39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Partidos edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("editor_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 16
        echo "            ";
        // line 17
        echo "                ";
        // line 18
        echo "            ";
        // line 19
        echo "        ";
        // line 20
        echo "    </ul>
";
        
        $__internal_48e0289e501f5ab279eec5c9acae6989307341e4dba1a85927c10e47b60ff39c->leave($__internal_48e0289e501f5ab279eec5c9acae6989307341e4dba1a85927c10e47b60ff39c_prof);

    }

    public function getTemplateName()
    {
        return "partidos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Partidos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('editor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         {#<li>#}*/
/*             {#{{ form_start(delete_form) }}#}*/
/*                 {#<input type="submit" value="Delete">#}*/
/*             {#{{ form_end(delete_form) }}#}*/
/*         {#</li>#}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
