<?php

/* jugadores/new.html.twig */
class __TwigTemplate_6ef83c0dc12c0172ac7acdddee336ba139c80300d542a217c28da1451a611398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jugadores/new.html.twig", 1);
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
        $__internal_f9efa14d4115256badfd03b46e6b070227ce63d5cd2e7b4bd43bb0154a3dd95b = $this->env->getExtension("native_profiler");
        $__internal_f9efa14d4115256badfd03b46e6b070227ce63d5cd2e7b4bd43bb0154a3dd95b->enter($__internal_f9efa14d4115256badfd03b46e6b070227ce63d5cd2e7b4bd43bb0154a3dd95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jugadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9efa14d4115256badfd03b46e6b070227ce63d5cd2e7b4bd43bb0154a3dd95b->leave($__internal_f9efa14d4115256badfd03b46e6b070227ce63d5cd2e7b4bd43bb0154a3dd95b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5ec884d677de0e8e53358642717e35a5d2e20e4bf38206adda6f05b155b7e32 = $this->env->getExtension("native_profiler");
        $__internal_f5ec884d677de0e8e53358642717e35a5d2e20e4bf38206adda6f05b155b7e32->enter($__internal_f5ec884d677de0e8e53358642717e35a5d2e20e4bf38206adda6f05b155b7e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Jugadores creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("jugadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f5ec884d677de0e8e53358642717e35a5d2e20e4bf38206adda6f05b155b7e32->leave($__internal_f5ec884d677de0e8e53358642717e35a5d2e20e4bf38206adda6f05b155b7e32_prof);

    }

    public function getTemplateName()
    {
        return "jugadores/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Jugadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('jugadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
