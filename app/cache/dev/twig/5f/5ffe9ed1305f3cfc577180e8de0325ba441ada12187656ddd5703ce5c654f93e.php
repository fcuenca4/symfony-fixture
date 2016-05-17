<?php

/* MiAppBundle::jugadores/edit.html.twig */
class __TwigTemplate_a9804922f7885fa1d55d1b63f72117955887b0ddaf3bb51dc27d24c5bdf2fd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::jugadores/edit.html.twig", 1);
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
        $__internal_552177d444518b7bd226123fa032cf451503a889bb473e27c7c8597b161d5530 = $this->env->getExtension("native_profiler");
        $__internal_552177d444518b7bd226123fa032cf451503a889bb473e27c7c8597b161d5530->enter($__internal_552177d444518b7bd226123fa032cf451503a889bb473e27c7c8597b161d5530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::jugadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552177d444518b7bd226123fa032cf451503a889bb473e27c7c8597b161d5530->leave($__internal_552177d444518b7bd226123fa032cf451503a889bb473e27c7c8597b161d5530_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d6864f88d005d4445d1974e429087c6c9f3e89649aace62d7e440dcf4370b9e = $this->env->getExtension("native_profiler");
        $__internal_9d6864f88d005d4445d1974e429087c6c9f3e89649aace62d7e440dcf4370b9e->enter($__internal_9d6864f88d005d4445d1974e429087c6c9f3e89649aace62d7e440dcf4370b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_9d6864f88d005d4445d1974e429087c6c9f3e89649aace62d7e440dcf4370b9e->leave($__internal_9d6864f88d005d4445d1974e429087c6c9f3e89649aace62d7e440dcf4370b9e_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_b08a6a4f66d26a937505c89fa7e113e01f2f9ecc443606f399b204ff3e45f1bd = $this->env->getExtension("native_profiler");
        $__internal_b08a6a4f66d26a937505c89fa7e113e01f2f9ecc443606f399b204ff3e45f1bd->enter($__internal_b08a6a4f66d26a937505c89fa7e113e01f2f9ecc443606f399b204ff3e45f1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t
\t<div class=\"containar\" style=\"background-color: white;\" >
\t\t<br>
\t\t<h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Editar Jugador
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("jugadores_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" ></span>
                </a>
            </button>
\t\t</h1>
\t\t<br>
\t\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t";
        // line 21
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
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    
       
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
           <button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Eliminar\" toggle=\"tooltip\" title=\"Eliminar jugador\" >
\t\t\t\tEliminar
\t\t\t\t</button>
        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
     </div>    
";
        
        $__internal_b08a6a4f66d26a937505c89fa7e113e01f2f9ecc443606f399b204ff3e45f1bd->leave($__internal_b08a6a4f66d26a937505c89fa7e113e01f2f9ecc443606f399b204ff3e45f1bd_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::jugadores/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  98 => 33,  91 => 29,  80 => 21,  76 => 20,  67 => 14,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/* 	<div class="containar" style="background-color: white;" >*/
/* 		<br>*/
/* 		<h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Editar Jugador*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('jugadores_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" ></span>*/
/*                 </a>*/
/*             </button>*/
/* 		</h1>*/
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
/* */
/*     */
/*        */
/*         {{ form_start(delete_form) }}*/
/*            <button class="btn btn-default pull-right" type="submit" value="Eliminar" toggle="tooltip" title="Eliminar jugador" >*/
/* 				Eliminar*/
/* 				</button>*/
/*         {{ form_end(delete_form) }}*/
/*      </div>    */
/* {% endblock %}*/
/* */
