<?php

/* MiAppBundle::jugadores/new.html.twig */
class __TwigTemplate_853f44b8767f60df428101951b605e4369f65ab8f8094981329df5559b314bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::jugadores/new.html.twig", 1);
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
        $__internal_a943cd5efe1f9e9133be943c265830f7d92bedeb7de2cf933a9d5ace67fb3662 = $this->env->getExtension("native_profiler");
        $__internal_a943cd5efe1f9e9133be943c265830f7d92bedeb7de2cf933a9d5ace67fb3662->enter($__internal_a943cd5efe1f9e9133be943c265830f7d92bedeb7de2cf933a9d5ace67fb3662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::jugadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a943cd5efe1f9e9133be943c265830f7d92bedeb7de2cf933a9d5ace67fb3662->leave($__internal_a943cd5efe1f9e9133be943c265830f7d92bedeb7de2cf933a9d5ace67fb3662_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e30d0ddb73947327a67ed57a8d4949febb768e91a0376cf220b0ba45ed628d65 = $this->env->getExtension("native_profiler");
        $__internal_e30d0ddb73947327a67ed57a8d4949febb768e91a0376cf220b0ba45ed628d65->enter($__internal_e30d0ddb73947327a67ed57a8d4949febb768e91a0376cf220b0ba45ed628d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_e30d0ddb73947327a67ed57a8d4949febb768e91a0376cf220b0ba45ed628d65->leave($__internal_e30d0ddb73947327a67ed57a8d4949febb768e91a0376cf220b0ba45ed628d65_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_69aee1af46c52273f455fd9cc2d83710b4891aa0e97eacf5a915bcc4e1232b51 = $this->env->getExtension("native_profiler");
        $__internal_69aee1af46c52273f455fd9cc2d83710b4891aa0e97eacf5a915bcc4e1232b51->enter($__internal_69aee1af46c52273f455fd9cc2d83710b4891aa0e97eacf5a915bcc4e1232b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t<br>
\t<div class=\"container\" style=\"background-color: white;\">
\t\t 
\t\t <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Crear Jugador
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("jugadores_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
\t\t</h1>
\t\t<br>
\t\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</div>
\t<div>
\t\t<br>
\t\t\t<button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar nuevo jugador\" >
\t\t\t\tGuardar\t
\t\t\t</button>
\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
   
";
        
        $__internal_69aee1af46c52273f455fd9cc2d83710b4891aa0e97eacf5a915bcc4e1232b51->leave($__internal_69aee1af46c52273f455fd9cc2d83710b4891aa0e97eacf5a915bcc4e1232b51_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::jugadores/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  80 => 21,  76 => 20,  67 => 14,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/* 	<br>*/
/* 	<div class="container" style="background-color: white;">*/
/* 		 */
/* 		 <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Crear Jugador*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('jugadores_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/* 		</h1>*/
/* 		<br>*/
/* 		{{ form_start(form) }}*/
/* 			{{ form_widget(form) }}*/
/* 	</div>*/
/* 	<div>*/
/* 		<br>*/
/* 			<button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar nuevo jugador" >*/
/* 				Guardar	*/
/* 			</button>*/
/* 		{{ form_end(form) }}*/
/* 	</div>*/
/*    */
/* {% endblock %}*/
/* */
