<?php

/* equipos/edit.html.twig */
class __TwigTemplate_fd283d0f898af69c38aa7646b910dc0ce01a334a916af1f3cc943bc48a8aae6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/edit.html.twig", 1);
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
        $__internal_81d8b59a60c56f9568669d918c982aadc18034298bffb7123b77dc523da1e246 = $this->env->getExtension("native_profiler");
        $__internal_81d8b59a60c56f9568669d918c982aadc18034298bffb7123b77dc523da1e246->enter($__internal_81d8b59a60c56f9568669d918c982aadc18034298bffb7123b77dc523da1e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81d8b59a60c56f9568669d918c982aadc18034298bffb7123b77dc523da1e246->leave($__internal_81d8b59a60c56f9568669d918c982aadc18034298bffb7123b77dc523da1e246_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_588488a51b2c0b112c5a8b12a728374ce96234acdb6f4d70e889f7981091cf78 = $this->env->getExtension("native_profiler");
        $__internal_588488a51b2c0b112c5a8b12a728374ce96234acdb6f4d70e889f7981091cf78->enter($__internal_588488a51b2c0b112c5a8b12a728374ce96234acdb6f4d70e889f7981091cf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Equipos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_588488a51b2c0b112c5a8b12a728374ce96234acdb6f4d70e889f7981091cf78->leave($__internal_588488a51b2c0b112c5a8b12a728374ce96234acdb6f4d70e889f7981091cf78_prof);

    }

    public function getTemplateName()
    {
        return "equipos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Equipos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('equipos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
