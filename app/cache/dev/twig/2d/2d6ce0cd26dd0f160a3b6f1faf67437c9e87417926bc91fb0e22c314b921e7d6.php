<?php

/* MiAppBundle::arbitros/new.html.twig */
class __TwigTemplate_d7404c56c27362b2a965c5457165696bf1dc6a9706e96b488f4e5ce4ab50f321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::arbitros/new.html.twig", 1);
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
        $__internal_b0606b5aeb148d20a36ca4e05df78c0bb9cf96ee0d4e2a92fa5d9c4b8a81ebf3 = $this->env->getExtension("native_profiler");
        $__internal_b0606b5aeb148d20a36ca4e05df78c0bb9cf96ee0d4e2a92fa5d9c4b8a81ebf3->enter($__internal_b0606b5aeb148d20a36ca4e05df78c0bb9cf96ee0d4e2a92fa5d9c4b8a81ebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::arbitros/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0606b5aeb148d20a36ca4e05df78c0bb9cf96ee0d4e2a92fa5d9c4b8a81ebf3->leave($__internal_b0606b5aeb148d20a36ca4e05df78c0bb9cf96ee0d4e2a92fa5d9c4b8a81ebf3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec5e4ecf151e73bf078db930c0506054dc1f20cf5e852d41b8947f4d3cbc75b6 = $this->env->getExtension("native_profiler");
        $__internal_ec5e4ecf151e73bf078db930c0506054dc1f20cf5e852d41b8947f4d3cbc75b6->enter($__internal_ec5e4ecf151e73bf078db930c0506054dc1f20cf5e852d41b8947f4d3cbc75b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_ec5e4ecf151e73bf078db930c0506054dc1f20cf5e852d41b8947f4d3cbc75b6->leave($__internal_ec5e4ecf151e73bf078db930c0506054dc1f20cf5e852d41b8947f4d3cbc75b6_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_f28bf3a11cb9ced5b81c7fe0c93b6badb8aca57e6ad2488f2ec41f3ce8fa5bcf = $this->env->getExtension("native_profiler");
        $__internal_f28bf3a11cb9ced5b81c7fe0c93b6badb8aca57e6ad2488f2ec41f3ce8fa5bcf->enter($__internal_f28bf3a11cb9ced5b81c7fe0c93b6badb8aca57e6ad2488f2ec41f3ce8fa5bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t<br>
    <div class=\"container\" style=\"background-color: white;\">
\t\t
\t\t<h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Crear Arbitro
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("arbitros_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
\t\t</h1>
\t\t<br>
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</div>  
\t<div>
\t\t<br>
\t\t   <button class=\"btn btn-default pull-right\" type=\"submit\" value=\"Guardar\" toggle=\"tooltip\" title=\"Guardar nuevo arbitro\" >
\t\t\t\tGuardar\t
\t\t\t</button>
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
    
";
        
        $__internal_f28bf3a11cb9ced5b81c7fe0c93b6badb8aca57e6ad2488f2ec41f3ce8fa5bcf->leave($__internal_f28bf3a11cb9ced5b81c7fe0c93b6badb8aca57e6ad2488f2ec41f3ce8fa5bcf_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::arbitros/new.html.twig";
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
/*     <div class="container" style="background-color: white;">*/
/* 		*/
/* 		<h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Crear Arbitro*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('arbitros_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/* 		</h1>*/
/* 		<br>*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/* 	</div>  */
/* 	<div>*/
/* 		<br>*/
/* 		   <button class="btn btn-default pull-right" type="submit" value="Guardar" toggle="tooltip" title="Guardar nuevo arbitro" >*/
/* 				Guardar	*/
/* 			</button>*/
/*         {{ form_end(form) }}*/
/* 	</div>*/
/*     */
/* {% endblock %}*/
/* */
