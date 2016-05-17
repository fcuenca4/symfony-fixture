<?php

/* MiAppBundle::partidos/new.html.twig */
class __TwigTemplate_e59bf59a7b4454fa294326a01d669610250a8fbfcf419e0c588709c2f2718096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/new.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9017b5be71b75d0e193d36b2f9b8b7a6db1e8a5c830768aeac36678447ffd57 = $this->env->getExtension("native_profiler");
        $__internal_f9017b5be71b75d0e193d36b2f9b8b7a6db1e8a5c830768aeac36678447ffd57->enter($__internal_f9017b5be71b75d0e193d36b2f9b8b7a6db1e8a5c830768aeac36678447ffd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9017b5be71b75d0e193d36b2f9b8b7a6db1e8a5c830768aeac36678447ffd57->leave($__internal_f9017b5be71b75d0e193d36b2f9b8b7a6db1e8a5c830768aeac36678447ffd57_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_8972b73905f3815a2aa03bfb2037d435cc69f17001b1114ce595bdef7d5d071e = $this->env->getExtension("native_profiler");
        $__internal_8972b73905f3815a2aa03bfb2037d435cc69f17001b1114ce595bdef7d5d071e->enter($__internal_8972b73905f3815a2aa03bfb2037d435cc69f17001b1114ce595bdef7d5d071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "     <h1 style=\"text-align:center\">Crear Partido
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("partidos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
    </h1>

\t<div class=\"container\">
\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t <button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar nuevo partido\" >
\t\t\t\tGuardar\t
\t\t\t</button>
\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
    
";
        
        $__internal_8972b73905f3815a2aa03bfb2037d435cc69f17001b1114ce595bdef7d5d071e->leave($__internal_8972b73905f3815a2aa03bfb2037d435cc69f17001b1114ce595bdef7d5d071e_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::partidos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  58 => 14,  54 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
/*      <h1 style="text-align:center">Crear Partido*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('partidos_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*     </h1>*/
/* */
/* 	<div class="container">*/
/* 		{{ form_start(form) }}*/
/* 			{{ form_widget(form) }}*/
/* 			 <button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar nuevo partido" >*/
/* 				Guardar	*/
/* 			</button>*/
/* 		{{ form_end(form) }}*/
/* 	</div>*/
/*     */
/* {% endblock %}*/
/* */
