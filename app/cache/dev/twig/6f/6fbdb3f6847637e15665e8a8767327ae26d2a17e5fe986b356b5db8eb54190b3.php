<?php

/* equipos/new.html.twig */
class __TwigTemplate_36ab650a91828267e92fb867f7231b0a9838c085d2921add808a09274d4df9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/new.html.twig", 1);
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
        $__internal_eaf55f06d0228f1e3dc98a7e43b7708084be49c08fdba088ef1c944ababd0a0f = $this->env->getExtension("native_profiler");
        $__internal_eaf55f06d0228f1e3dc98a7e43b7708084be49c08fdba088ef1c944ababd0a0f->enter($__internal_eaf55f06d0228f1e3dc98a7e43b7708084be49c08fdba088ef1c944ababd0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf55f06d0228f1e3dc98a7e43b7708084be49c08fdba088ef1c944ababd0a0f->leave($__internal_eaf55f06d0228f1e3dc98a7e43b7708084be49c08fdba088ef1c944ababd0a0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d070c71e917e767b17b4a81f93b53182722723df2987c067b5ebdeec6bb88a = $this->env->getExtension("native_profiler");
        $__internal_53d070c71e917e767b17b4a81f93b53182722723df2987c067b5ebdeec6bb88a->enter($__internal_53d070c71e917e767b17b4a81f93b53182722723df2987c067b5ebdeec6bb88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Crear Equipo
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
    </h1>

    <div class=\"container\">
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Crear Equipo\" toggle=\"tooltip\" title=\"Guardar nuevo equipo\">
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_53d070c71e917e767b17b4a81f93b53182722723df2987c067b5ebdeec6bb88a->leave($__internal_53d070c71e917e767b17b4a81f93b53182722723df2987c067b5ebdeec6bb88a_prof);

    }

    public function getTemplateName()
    {
        return "equipos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  54 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 style="text-align:center">Crear Equipo*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('equipos_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*     </h1>*/
/* */
/*     <div class="container">*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Crear Equipo" toggle="tooltip" title="Guardar nuevo equipo">*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
