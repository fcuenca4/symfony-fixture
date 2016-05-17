<?php

/* MiAppBundle::partidos/new.html.twig */
class __TwigTemplate_8d7410626483a5e6a64ba31e83ac9e9f83ae6920567610451c4da4d7966acc16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/new.html.twig", 1);
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
        $__internal_3a0fe1681bed433693001efed377fad3f2a2cb5024bff998b8149fc30b12d28d = $this->env->getExtension("native_profiler");
        $__internal_3a0fe1681bed433693001efed377fad3f2a2cb5024bff998b8149fc30b12d28d->enter($__internal_3a0fe1681bed433693001efed377fad3f2a2cb5024bff998b8149fc30b12d28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a0fe1681bed433693001efed377fad3f2a2cb5024bff998b8149fc30b12d28d->leave($__internal_3a0fe1681bed433693001efed377fad3f2a2cb5024bff998b8149fc30b12d28d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d47015da4a4ec99a0348142c2fa3f90fb039a8284cb32fedfefa4ec3c1e16492 = $this->env->getExtension("native_profiler");
        $__internal_d47015da4a4ec99a0348142c2fa3f90fb039a8284cb32fedfefa4ec3c1e16492->enter($__internal_d47015da4a4ec99a0348142c2fa3f90fb039a8284cb32fedfefa4ec3c1e16492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_d47015da4a4ec99a0348142c2fa3f90fb039a8284cb32fedfefa4ec3c1e16492->leave($__internal_d47015da4a4ec99a0348142c2fa3f90fb039a8284cb32fedfefa4ec3c1e16492_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_d8812fea8dcaaedc01ef879d77dba951afcf5e6f8a93c4d61440fbee2e17690b = $this->env->getExtension("native_profiler");
        $__internal_d8812fea8dcaaedc01ef879d77dba951afcf5e6f8a93c4d61440fbee2e17690b->enter($__internal_d8812fea8dcaaedc01ef879d77dba951afcf5e6f8a93c4d61440fbee2e17690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t<br>
\t<div class=\"container\" style=\"background-color: white;\">
\t\t<h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Crear Partido
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("partidos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
\t\t</h1>
\t\t<br>
\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</div>
\t<div>
\t\t<br>
\t\t\t <button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar nuevo partido\" >
\t\t\t\tGuardar\t
\t\t\t</button>
\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
    
";
        
        $__internal_d8812fea8dcaaedc01ef879d77dba951afcf5e6f8a93c4d61440fbee2e17690b->leave($__internal_d8812fea8dcaaedc01ef879d77dba951afcf5e6f8a93c4d61440fbee2e17690b_prof);

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
        return array (  89 => 27,  79 => 20,  75 => 19,  66 => 13,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/* 		<h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Crear Partido*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('partidos_index') }}" toggle="tooltip" title="Volver">*/
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
/* 			 <button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar nuevo partido" >*/
/* 				Guardar	*/
/* 			</button>*/
/* 		{{ form_end(form) }}*/
/* 	</div>*/
/*     */
/* {% endblock %}*/
/* */
