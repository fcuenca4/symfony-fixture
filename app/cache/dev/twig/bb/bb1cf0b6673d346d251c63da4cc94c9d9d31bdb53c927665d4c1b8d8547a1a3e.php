<?php

/* MiAppBundle::equipos/edit.html.twig */
class __TwigTemplate_6bfefa82abf7975789dfc3b2419a7ae038a1b33e28599025ca72967057b04019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::equipos/edit.html.twig", 1);
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
        $__internal_bcf4a21d766540a577cce74f98d1b9a2ed898c4bfc1dee304e6038b6b2a9280c = $this->env->getExtension("native_profiler");
        $__internal_bcf4a21d766540a577cce74f98d1b9a2ed898c4bfc1dee304e6038b6b2a9280c->enter($__internal_bcf4a21d766540a577cce74f98d1b9a2ed898c4bfc1dee304e6038b6b2a9280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::equipos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf4a21d766540a577cce74f98d1b9a2ed898c4bfc1dee304e6038b6b2a9280c->leave($__internal_bcf4a21d766540a577cce74f98d1b9a2ed898c4bfc1dee304e6038b6b2a9280c_prof);

    }

    // line 7
    public function block_editor($context, array $blocks = array())
    {
        $__internal_449bfc1a9f6ee851d0daabeba3af678ee506a926dbdf040ec7e39e3a2e00f676 = $this->env->getExtension("native_profiler");
        $__internal_449bfc1a9f6ee851d0daabeba3af678ee506a926dbdf040ec7e39e3a2e00f676->enter($__internal_449bfc1a9f6ee851d0daabeba3af678ee506a926dbdf040ec7e39e3a2e00f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 8
        echo "    
    <h1 style=\"text-align:center\">Editar Equipo
       
             
           <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
        
         
    </h1>

    <div class=\"containar\" style=\"text-align:center\">
        <table  class=\"table table-hover\">  

            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar cambios\"/>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

              
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" toggle=\"tooltip\" title=\"Eliminar equipo\">
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
         </table> 
        
    </div>
";
        
        $__internal_449bfc1a9f6ee851d0daabeba3af678ee506a926dbdf040ec7e39e3a2e00f676->leave($__internal_449bfc1a9f6ee851d0daabeba3af678ee506a926dbdf040ec7e39e3a2e00f676_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::equipos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  76 => 30,  70 => 27,  65 => 25,  61 => 24,  47 => 13,  40 => 8,  34 => 7,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {#{% block stylesheets %}#}*/
/*     {##}*/
/*     {#<link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />#}*/
/* {#{% endblock %}#}*/
/* */
/* {% block editor %}*/
/*     */
/*     <h1 style="text-align:center">Editar Equipo*/
/*        */
/*              */
/*            <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('equipos_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*         */
/*          */
/*     </h1>*/
/* */
/*     <div class="containar" style="text-align:center">*/
/*         <table  class="table table-hover">  */
/* */
/*             {{ form_start(edit_form) }}*/
/*                 {{ form_widget(edit_form) }}*/
/*                 <input type="submit" value="Guardar" toggle="tooltip" title="Guardar cambios"/>*/
/*             {{ form_end(edit_form) }}*/
/* */
/*               */
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" toggle="tooltip" title="Eliminar equipo">*/
/*             {{ form_end(delete_form) }}*/
/*          </table> */
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
