<?php

/* arbitros/edit.html.twig */
class __TwigTemplate_70990786f4ba22e6b3d21f14f48f0ae424120e296db51430d0e24d2006f6fe4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "arbitros/edit.html.twig", 1);
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
        $__internal_ac658a8184ef5eb7ac93743fcf08a85b6eb0e7db99f8e38fc37082da182d02c3 = $this->env->getExtension("native_profiler");
        $__internal_ac658a8184ef5eb7ac93743fcf08a85b6eb0e7db99f8e38fc37082da182d02c3->enter($__internal_ac658a8184ef5eb7ac93743fcf08a85b6eb0e7db99f8e38fc37082da182d02c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arbitros/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac658a8184ef5eb7ac93743fcf08a85b6eb0e7db99f8e38fc37082da182d02c3->leave($__internal_ac658a8184ef5eb7ac93743fcf08a85b6eb0e7db99f8e38fc37082da182d02c3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f920a3441d54bc32bb7a3e5dd0b888c70c82aea56fe39dec1ca23abaf2cdd505 = $this->env->getExtension("native_profiler");
        $__internal_f920a3441d54bc32bb7a3e5dd0b888c70c82aea56fe39dec1ca23abaf2cdd505->enter($__internal_f920a3441d54bc32bb7a3e5dd0b888c70c82aea56fe39dec1ca23abaf2cdd505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_f920a3441d54bc32bb7a3e5dd0b888c70c82aea56fe39dec1ca23abaf2cdd505->leave($__internal_f920a3441d54bc32bb7a3e5dd0b888c70c82aea56fe39dec1ca23abaf2cdd505_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5ab12f37a8280072a52303b1eb379d778bf685ff646d44515f7aa73e6ca079f = $this->env->getExtension("native_profiler");
        $__internal_d5ab12f37a8280072a52303b1eb379d778bf685ff646d44515f7aa73e6ca079f->enter($__internal_d5ab12f37a8280072a52303b1eb379d778bf685ff646d44515f7aa73e6ca079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "     <h1 style=\"text-align:center\">Editar Arbitro
       
             
           <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("arbitros_index");
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
                <input type=\"submit\" value=\"Delete\" toggle=\"tooltip\" title=\"Eliminar arbitro\">
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
         </table> 
        
    </div>
";
        
        $__internal_d5ab12f37a8280072a52303b1eb379d778bf685ff646d44515f7aa73e6ca079f->leave($__internal_d5ab12f37a8280072a52303b1eb379d778bf685ff646d44515f7aa73e6ca079f_prof);

    }

    public function getTemplateName()
    {
        return "arbitros/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  94 => 30,  88 => 27,  83 => 25,  79 => 24,  65 => 13,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*      <h1 style="text-align:center">Editar Arbitro*/
/*        */
/*              */
/*            <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('arbitros_index') }}" toggle="tooltip" title="Volver">*/
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
/*                 <input type="submit" value="Delete" toggle="tooltip" title="Eliminar arbitro">*/
/*             {{ form_end(delete_form) }}*/
/*          </table> */
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
