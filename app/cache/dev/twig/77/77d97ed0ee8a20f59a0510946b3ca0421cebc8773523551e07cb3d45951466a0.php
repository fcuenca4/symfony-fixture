<?php

/* MiAppBundle::arbitros/edit.html.twig */
class __TwigTemplate_475850fb993f1dc029c5ad56a879645b2afc2819a8ba81913c140b771e09f44c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::arbitros/edit.html.twig", 1);
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
        $__internal_712c2c4e6ce717b130d64e9a16798da9a6a403633002039f81820096bb1f8d1f = $this->env->getExtension("native_profiler");
        $__internal_712c2c4e6ce717b130d64e9a16798da9a6a403633002039f81820096bb1f8d1f->enter($__internal_712c2c4e6ce717b130d64e9a16798da9a6a403633002039f81820096bb1f8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::arbitros/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712c2c4e6ce717b130d64e9a16798da9a6a403633002039f81820096bb1f8d1f->leave($__internal_712c2c4e6ce717b130d64e9a16798da9a6a403633002039f81820096bb1f8d1f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd887c72c66654302d87238c2fdcbf20639cf7e9963d47425bdf6296552654a2 = $this->env->getExtension("native_profiler");
        $__internal_dd887c72c66654302d87238c2fdcbf20639cf7e9963d47425bdf6296552654a2->enter($__internal_dd887c72c66654302d87238c2fdcbf20639cf7e9963d47425bdf6296552654a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_dd887c72c66654302d87238c2fdcbf20639cf7e9963d47425bdf6296552654a2->leave($__internal_dd887c72c66654302d87238c2fdcbf20639cf7e9963d47425bdf6296552654a2_prof);

    }

    // line 7
    public function block_editor($context, array $blocks = array())
    {
        $__internal_235b95966c404c304e14375fa23e255ef5b539999b971fc0fdbe3ee361d57fcb = $this->env->getExtension("native_profiler");
        $__internal_235b95966c404c304e14375fa23e255ef5b539999b971fc0fdbe3ee361d57fcb->enter($__internal_235b95966c404c304e14375fa23e255ef5b539999b971fc0fdbe3ee361d57fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 8
        echo "    <br>
\t<br>
\t
    <div class=\"containar\" style=\"background-color: white;\" >
\t\t<br>
        <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Editar Arbitro
       
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("arbitros_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
\t\t</h1>
\t\t<br>
\t
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t
\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t<br>\t
\t</div>
\t<div>
\t\t<br>
\t\t<button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar cambios\" >
\t\t\tGuardar\t
\t\t</button>
\t\t\t
\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        
        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t<button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Eliminar\" toggle=\"tooltip\" title=\"Eliminar arbitro\" >
\t\t\t\tEliminar
\t\t\t</button>
\t\t\t
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        
    </div>
";
        
        $__internal_235b95966c404c304e14375fa23e255ef5b539999b971fc0fdbe3ee361d57fcb->leave($__internal_235b95966c404c304e14375fa23e255ef5b539999b971fc0fdbe3ee361d57fcb_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::arbitros/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  100 => 36,  95 => 34,  83 => 25,  78 => 23,  68 => 16,  58 => 8,  52 => 7,  41 => 3,  35 => 2,  11 => 1,);
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
/* 		<br>*/
/*         <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Editar Arbitro*/
/*        */
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('arbitros_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/* 		</h1>*/
/* 		<br>*/
/* 	*/
/*         {{ form_start(edit_form) }}*/
/* 	*/
/* 		{{ form_widget(edit_form) }}*/
/* 	<br>	*/
/* 	</div>*/
/* 	<div>*/
/* 		<br>*/
/* 		<button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar cambios" >*/
/* 			Guardar	*/
/* 		</button>*/
/* 			*/
/* 		{{ form_end(edit_form) }}*/
/*         */
/*         {{ form_start(delete_form) }}*/
/* 			<button class="btn btn-default pull-right" type="submit" value="Eliminar" toggle="tooltip" title="Eliminar arbitro" >*/
/* 				Eliminar*/
/* 			</button>*/
/* 			*/
/*         {{ form_end(delete_form) }}*/
/*         */
/*     </div>*/
/* {% endblock %}*/
/* */
