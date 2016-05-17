<?php

/* MiAppBundle::equipos/new.html.twig */
class __TwigTemplate_f50b12bdbd955c88af38fe6b29f9e29c6dde766a6d0343987346a6324c9b2c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::equipos/new.html.twig", 1);
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
        $__internal_e490eca3da8dc6db6fce1eb254f8481998c070f5438487a3dfb9649315ac3789 = $this->env->getExtension("native_profiler");
        $__internal_e490eca3da8dc6db6fce1eb254f8481998c070f5438487a3dfb9649315ac3789->enter($__internal_e490eca3da8dc6db6fce1eb254f8481998c070f5438487a3dfb9649315ac3789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::equipos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e490eca3da8dc6db6fce1eb254f8481998c070f5438487a3dfb9649315ac3789->leave($__internal_e490eca3da8dc6db6fce1eb254f8481998c070f5438487a3dfb9649315ac3789_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b980e993cb3ffb6823bc9cd97056ca0e9fb0e6774f1fea506e4139b50a8e28d7 = $this->env->getExtension("native_profiler");
        $__internal_b980e993cb3ffb6823bc9cd97056ca0e9fb0e6774f1fea506e4139b50a8e28d7->enter($__internal_b980e993cb3ffb6823bc9cd97056ca0e9fb0e6774f1fea506e4139b50a8e28d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_b980e993cb3ffb6823bc9cd97056ca0e9fb0e6774f1fea506e4139b50a8e28d7->leave($__internal_b980e993cb3ffb6823bc9cd97056ca0e9fb0e6774f1fea506e4139b50a8e28d7_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_44ae8111ae0db2ae37c67ddfaeffe6748ab5d5d90fa01a11a6578febd00d9b5a = $this->env->getExtension("native_profiler");
        $__internal_44ae8111ae0db2ae37c67ddfaeffe6748ab5d5d90fa01a11a6578febd00d9b5a->enter($__internal_44ae8111ae0db2ae37c67ddfaeffe6748ab5d5d90fa01a11a6578febd00d9b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t<br>
    
    <div class=\"container\" style=\"background-color: white;\">
\t    
\t\t<h1 style=\"text-align:center ; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Crear Equipo
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
\t\t</h1>
\t\t<br>
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</div>
\t<div>
\t\t<br>
            <button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar nuevo equipo\" >
\t\t\t\tGuardar\t
\t\t\t</button>
        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_44ae8111ae0db2ae37c67ddfaeffe6748ab5d5d90fa01a11a6578febd00d9b5a->leave($__internal_44ae8111ae0db2ae37c67ddfaeffe6748ab5d5d90fa01a11a6578febd00d9b5a_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::equipos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  81 => 22,  77 => 21,  68 => 15,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/*     */
/*     <div class="container" style="background-color: white;">*/
/* 	    */
/* 		<h1 style="text-align:center ; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Crear Equipo*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('equipos_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/* 		</h1>*/
/* 		<br>*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/* 	</div>*/
/* 	<div>*/
/* 		<br>*/
/*             <button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar nuevo equipo" >*/
/* 				Guardar	*/
/* 			</button>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
