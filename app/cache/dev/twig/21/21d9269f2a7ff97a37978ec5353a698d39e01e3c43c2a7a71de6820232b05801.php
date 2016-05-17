<?php

/* MiAppBundle::partidos/edit.html.twig */
class __TwigTemplate_246131cb929736dafd59ee1cf97709690c673ec406248d405c5ee864448b1c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f690be407a44a5989ff77397be8d12f0a86705fc40899d43092394faa16e00f7 = $this->env->getExtension("native_profiler");
        $__internal_f690be407a44a5989ff77397be8d12f0a86705fc40899d43092394faa16e00f7->enter($__internal_f690be407a44a5989ff77397be8d12f0a86705fc40899d43092394faa16e00f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f690be407a44a5989ff77397be8d12f0a86705fc40899d43092394faa16e00f7->leave($__internal_f690be407a44a5989ff77397be8d12f0a86705fc40899d43092394faa16e00f7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf98ab21d721fe533d7d6019847e57ad39c132d72436c20f4681f8e251a2baac = $this->env->getExtension("native_profiler");
        $__internal_bf98ab21d721fe533d7d6019847e57ad39c132d72436c20f4681f8e251a2baac->enter($__internal_bf98ab21d721fe533d7d6019847e57ad39c132d72436c20f4681f8e251a2baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_bf98ab21d721fe533d7d6019847e57ad39c132d72436c20f4681f8e251a2baac->leave($__internal_bf98ab21d721fe533d7d6019847e57ad39c132d72436c20f4681f8e251a2baac_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_0ff95bc0c31680c645e5170049a1c9226138594e4f06d5350a6e737bb646ac07 = $this->env->getExtension("native_profiler");
        $__internal_0ff95bc0c31680c645e5170049a1c9226138594e4f06d5350a6e737bb646ac07->enter($__internal_0ff95bc0c31680c645e5170049a1c9226138594e4f06d5350a6e737bb646ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t
    
\t<div class=\"containar\" style=\"background-color: white;\" >
\t\t<br>
\t\t<h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Editar Partido
       
             
           <button class=\"btn btn-default  pull-left \">

                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("editor_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
        
         
\t\t</h1>
\t\t<br>
\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'row');
        echo "
\t<br>
\t</div>
\t<div>
\t\t<br>
\t\t\t<button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar cambios\" >
\t\t\t\tGuardar\t
\t\t\t</button>
\t\t";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t</div>
    
";
        
        $__internal_0ff95bc0c31680c645e5170049a1c9226138594e4f06d5350a6e737bb646ac07->leave($__internal_0ff95bc0c31680c645e5170049a1c9226138594e4f06d5350a6e737bb646ac07_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::partidos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  86 => 27,  82 => 26,  71 => 18,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />*/
/* {% endblock %}*/
/* {% block editor %}*/
/* 	<br>*/
/* 	<br>*/
/* 	*/
/*     */
/* 	<div class="containar" style="background-color: white;" >*/
/* 		<br>*/
/* 		<h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Editar Partido*/
/*        */
/*              */
/*            <button class="btn btn-default  pull-left ">*/
/* */
/*                 <a href="{{ path('editor_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*         */
/*          */
/* 		</h1>*/
/* 		<br>*/
/* 		{{ form_start(edit_form) }}*/
/* 			{{ form_row(edit_form) }}*/
/* 	<br>*/
/* 	</div>*/
/* 	<div>*/
/* 		<br>*/
/* 			<button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar cambios" >*/
/* 				Guardar	*/
/* 			</button>*/
/* 		{{ form_end(edit_form) }}*/
/* 	</div>*/
/*     */
/* {% endblock %}*/
/* */
