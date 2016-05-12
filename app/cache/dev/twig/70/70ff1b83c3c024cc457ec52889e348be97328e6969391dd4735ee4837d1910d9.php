<?php

/* jugadores/edit.html.twig */
class __TwigTemplate_b16baa6a465c39106f4774cbe4a9f4980c0d8f04d0faf41ac599bcd852fecc9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jugadores/edit.html.twig", 1);
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
        $__internal_98f234f6e574c5e4cba3d515e7e79d154c5823235eb39c4c1e27c74b18b559c4 = $this->env->getExtension("native_profiler");
        $__internal_98f234f6e574c5e4cba3d515e7e79d154c5823235eb39c4c1e27c74b18b559c4->enter($__internal_98f234f6e574c5e4cba3d515e7e79d154c5823235eb39c4c1e27c74b18b559c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jugadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98f234f6e574c5e4cba3d515e7e79d154c5823235eb39c4c1e27c74b18b559c4->leave($__internal_98f234f6e574c5e4cba3d515e7e79d154c5823235eb39c4c1e27c74b18b559c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce036fff88672505283da1e22cf82646b88cff1947d667d12b8584aacc2d86b2 = $this->env->getExtension("native_profiler");
        $__internal_ce036fff88672505283da1e22cf82646b88cff1947d667d12b8584aacc2d86b2->enter($__internal_ce036fff88672505283da1e22cf82646b88cff1947d667d12b8584aacc2d86b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Jugadores edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("jugadores_index");
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
        
        $__internal_ce036fff88672505283da1e22cf82646b88cff1947d667d12b8584aacc2d86b2->leave($__internal_ce036fff88672505283da1e22cf82646b88cff1947d667d12b8584aacc2d86b2_prof);

    }

    public function getTemplateName()
    {
        return "jugadores/edit.html.twig";
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
/*     <h1>Jugadores edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('jugadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
