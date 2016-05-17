<?php

/* MiAppBundle::equipos/edit.html.twig */
class __TwigTemplate_e16456bbed4777d71a18c92b4e1318e95b1e2ac23ed1fedb3c9911f3c655f8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::equipos/edit.html.twig", 1);
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
        $__internal_768773963bb0532a0c46f6f52c236096c3bb5c15ea9ed18a78cc47bd18bda162 = $this->env->getExtension("native_profiler");
        $__internal_768773963bb0532a0c46f6f52c236096c3bb5c15ea9ed18a78cc47bd18bda162->enter($__internal_768773963bb0532a0c46f6f52c236096c3bb5c15ea9ed18a78cc47bd18bda162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::equipos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768773963bb0532a0c46f6f52c236096c3bb5c15ea9ed18a78cc47bd18bda162->leave($__internal_768773963bb0532a0c46f6f52c236096c3bb5c15ea9ed18a78cc47bd18bda162_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90b70e038503f19c72b5a4ee230f0fa503ccb95ccd6fa92df14163e2ecef3a85 = $this->env->getExtension("native_profiler");
        $__internal_90b70e038503f19c72b5a4ee230f0fa503ccb95ccd6fa92df14163e2ecef3a85->enter($__internal_90b70e038503f19c72b5a4ee230f0fa503ccb95ccd6fa92df14163e2ecef3a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_90b70e038503f19c72b5a4ee230f0fa503ccb95ccd6fa92df14163e2ecef3a85->leave($__internal_90b70e038503f19c72b5a4ee230f0fa503ccb95ccd6fa92df14163e2ecef3a85_prof);

    }

    // line 7
    public function block_editor($context, array $blocks = array())
    {
        $__internal_9706cc66735d5ae027b9c5e7326ebe5528186de0a5f2ddd78d7bde33a0a7f28c = $this->env->getExtension("native_profiler");
        $__internal_9706cc66735d5ae027b9c5e7326ebe5528186de0a5f2ddd78d7bde33a0a7f28c->enter($__internal_9706cc66735d5ae027b9c5e7326ebe5528186de0a5f2ddd78d7bde33a0a7f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 8
        echo "    <br>
\t<br>
\t
    <div class=\"containar\" style=\"background-color: white;\" >
        <br>
\t\t<h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Editar Equipo
       
             
           <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
\t\t\t
         
\t\t</h1>\t
\t\t<br>
\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t<br>
\t</div>
\t<div>
\t\t<br>
\t\t\t<button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar cambios\" >
\t\t\t\tGuardar\t
\t\t\t</button>
\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        
        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t<button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Eliminar\" toggle=\"tooltip\" title=\"Eliminar equipo\" >
\t\t\t\tEliminar
\t\t\t</button>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        
\t\t
        
    </div>
";
        
        $__internal_9706cc66735d5ae027b9c5e7326ebe5528186de0a5f2ddd78d7bde33a0a7f28c->leave($__internal_9706cc66735d5ae027b9c5e7326ebe5528186de0a5f2ddd78d7bde33a0a7f28c_prof);

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
        return array (  107 => 40,  100 => 36,  95 => 34,  84 => 26,  80 => 25,  69 => 17,  58 => 8,  52 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />*/
/* {% endblock %}*/
/* */
/* {% block editor %}*/
/*     <br>*/
/* 	<br>*/
/* 	*/
/*     <div class="containar" style="background-color: white;" >*/
/*         <br>*/
/* 		<h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Editar Equipo*/
/*        */
/*              */
/*            <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('equipos_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/* 			*/
/*          */
/* 		</h1>	*/
/* 		<br>*/
/* 		{{ form_start(edit_form) }}*/
/* 			{{ form_widget(edit_form) }}*/
/* 		<br>*/
/* 	</div>*/
/* 	<div>*/
/* 		<br>*/
/* 			<button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar cambios" >*/
/* 				Guardar	*/
/* 			</button>*/
/* 		{{ form_end(edit_form) }}*/
/*         */
/*         {{ form_start(delete_form) }}*/
/* 			<button class="btn btn-default pull-right" type="submit" value="Eliminar" toggle="tooltip" title="Eliminar equipo" >*/
/* 				Eliminar*/
/* 			</button>*/
/*         {{ form_end(delete_form) }}*/
/*         */
/* 		*/
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
