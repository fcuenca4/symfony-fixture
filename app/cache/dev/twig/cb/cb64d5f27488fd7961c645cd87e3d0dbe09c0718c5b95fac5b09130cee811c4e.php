<?php

/* equipos/edit.html.twig */
class __TwigTemplate_812a55ad3e86f9e8b0163ac8bf982e8ca0c82400a1f9a0d727b1f44b8a70f08b extends Twig_Template
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
        $__internal_080c2f3b6e4d5a66c8e999518fe2517ceda794bd4e67855438f618828eb7dbe2 = $this->env->getExtension("native_profiler");
        $__internal_080c2f3b6e4d5a66c8e999518fe2517ceda794bd4e67855438f618828eb7dbe2->enter($__internal_080c2f3b6e4d5a66c8e999518fe2517ceda794bd4e67855438f618828eb7dbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080c2f3b6e4d5a66c8e999518fe2517ceda794bd4e67855438f618828eb7dbe2->leave($__internal_080c2f3b6e4d5a66c8e999518fe2517ceda794bd4e67855438f618828eb7dbe2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f05ac45e8defd4fb548703e20319be3f58c71828690f5bfb2aeed3b3f34917f = $this->env->getExtension("native_profiler");
        $__internal_9f05ac45e8defd4fb548703e20319be3f58c71828690f5bfb2aeed3b3f34917f->enter($__internal_9f05ac45e8defd4fb548703e20319be3f58c71828690f5bfb2aeed3b3f34917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_9f05ac45e8defd4fb548703e20319be3f58c71828690f5bfb2aeed3b3f34917f->leave($__internal_9f05ac45e8defd4fb548703e20319be3f58c71828690f5bfb2aeed3b3f34917f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_94ec6a3b8260e2ae0d0a565ee32f1848b8cb372ae1e19e030ad623d2bf3b57ce = $this->env->getExtension("native_profiler");
        $__internal_94ec6a3b8260e2ae0d0a565ee32f1848b8cb372ae1e19e030ad623d2bf3b57ce->enter($__internal_94ec6a3b8260e2ae0d0a565ee32f1848b8cb372ae1e19e030ad623d2bf3b57ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94ec6a3b8260e2ae0d0a565ee32f1848b8cb372ae1e19e030ad623d2bf3b57ce->leave($__internal_94ec6a3b8260e2ae0d0a565ee32f1848b8cb372ae1e19e030ad623d2bf3b57ce_prof);

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
