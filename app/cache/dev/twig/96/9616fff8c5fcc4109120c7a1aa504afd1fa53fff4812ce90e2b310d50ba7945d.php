<?php

/* jugadores/edit.html.twig */
class __TwigTemplate_8fcff522725846a5ee14d0691668903fffa40af3b26f25704432b8b6f8db0064 extends Twig_Template
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
        $__internal_f0100a2e8158c25dfb352ac811fb659e32e1d17b0d4daccef995da91c239149f = $this->env->getExtension("native_profiler");
        $__internal_f0100a2e8158c25dfb352ac811fb659e32e1d17b0d4daccef995da91c239149f->enter($__internal_f0100a2e8158c25dfb352ac811fb659e32e1d17b0d4daccef995da91c239149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jugadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0100a2e8158c25dfb352ac811fb659e32e1d17b0d4daccef995da91c239149f->leave($__internal_f0100a2e8158c25dfb352ac811fb659e32e1d17b0d4daccef995da91c239149f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_027e98994d862e9715d34b717809c49018bfa319e267f55b0d7e8adcb3c6d7b7 = $this->env->getExtension("native_profiler");
        $__internal_027e98994d862e9715d34b717809c49018bfa319e267f55b0d7e8adcb3c6d7b7->enter($__internal_027e98994d862e9715d34b717809c49018bfa319e267f55b0d7e8adcb3c6d7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_027e98994d862e9715d34b717809c49018bfa319e267f55b0d7e8adcb3c6d7b7->leave($__internal_027e98994d862e9715d34b717809c49018bfa319e267f55b0d7e8adcb3c6d7b7_prof);

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
