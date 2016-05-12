<?php

/* jugadores/new.html.twig */
class __TwigTemplate_b862fc9adbbaf070b330c96f4a51f9b96f75f6ce7cf91c37c22740b76c0bac56 extends Twig_Template
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
        $__internal_611327a3f1bb1bff76bdb5caa2e95a8c18efceb5239e0502f0db47e685052cba = $this->env->getExtension("native_profiler");
        $__internal_611327a3f1bb1bff76bdb5caa2e95a8c18efceb5239e0502f0db47e685052cba->enter($__internal_611327a3f1bb1bff76bdb5caa2e95a8c18efceb5239e0502f0db47e685052cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jugadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_611327a3f1bb1bff76bdb5caa2e95a8c18efceb5239e0502f0db47e685052cba->leave($__internal_611327a3f1bb1bff76bdb5caa2e95a8c18efceb5239e0502f0db47e685052cba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_61ebc9c43a51734a3f8b4928130438688ffd03c157e9bc0d732c617ae3778827 = $this->env->getExtension("native_profiler");
        $__internal_61ebc9c43a51734a3f8b4928130438688ffd03c157e9bc0d732c617ae3778827->enter($__internal_61ebc9c43a51734a3f8b4928130438688ffd03c157e9bc0d732c617ae3778827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_61ebc9c43a51734a3f8b4928130438688ffd03c157e9bc0d732c617ae3778827->leave($__internal_61ebc9c43a51734a3f8b4928130438688ffd03c157e9bc0d732c617ae3778827_prof);

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
