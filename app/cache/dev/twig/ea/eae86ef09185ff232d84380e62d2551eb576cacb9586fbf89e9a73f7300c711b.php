<?php

/* equipos/edit.html.twig */
class __TwigTemplate_3f41faa057debbeed1dd823407622ede2864f3339d17a6820e76919e2f001f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccf475414250096590ceab1c16093248214fae35d614ec9ac122f0c546435a44 = $this->env->getExtension("native_profiler");
        $__internal_ccf475414250096590ceab1c16093248214fae35d614ec9ac122f0c546435a44->enter($__internal_ccf475414250096590ceab1c16093248214fae35d614ec9ac122f0c546435a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf475414250096590ceab1c16093248214fae35d614ec9ac122f0c546435a44->leave($__internal_ccf475414250096590ceab1c16093248214fae35d614ec9ac122f0c546435a44_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8079365076d3859ca5e02eac1cd444a978674c3da1ba4561a04182a6f40b503 = $this->env->getExtension("native_profiler");
        $__internal_e8079365076d3859ca5e02eac1cd444a978674c3da1ba4561a04182a6f40b503->enter($__internal_e8079365076d3859ca5e02eac1cd444a978674c3da1ba4561a04182a6f40b503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_e8079365076d3859ca5e02eac1cd444a978674c3da1ba4561a04182a6f40b503->leave($__internal_e8079365076d3859ca5e02eac1cd444a978674c3da1ba4561a04182a6f40b503_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_582d8d2a73109579a1f9a4c5beb319bae985336e58f42a0d5dce6bf217fd36a7 = $this->env->getExtension("native_profiler");
        $__internal_582d8d2a73109579a1f9a4c5beb319bae985336e58f42a0d5dce6bf217fd36a7->enter($__internal_582d8d2a73109579a1f9a4c5beb319bae985336e58f42a0d5dce6bf217fd36a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_582d8d2a73109579a1f9a4c5beb319bae985336e58f42a0d5dce6bf217fd36a7->leave($__internal_582d8d2a73109579a1f9a4c5beb319bae985336e58f42a0d5dce6bf217fd36a7_prof);

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
        return array (  100 => 32,  95 => 30,  89 => 27,  84 => 25,  80 => 24,  66 => 13,  59 => 8,  53 => 7,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
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
