<?php

/* MiAppBundle::partidos/edit.html.twig */
class __TwigTemplate_0268a95c96c0f830344cc21d37c42cc127c21aa7faecc4a91ae69f0acfedb0f8 extends Twig_Template
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
        $__internal_8184523117a1bc930348dec9094ea45d80f9b6338b20176947f17d1283b0efff = $this->env->getExtension("native_profiler");
        $__internal_8184523117a1bc930348dec9094ea45d80f9b6338b20176947f17d1283b0efff->enter($__internal_8184523117a1bc930348dec9094ea45d80f9b6338b20176947f17d1283b0efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8184523117a1bc930348dec9094ea45d80f9b6338b20176947f17d1283b0efff->leave($__internal_8184523117a1bc930348dec9094ea45d80f9b6338b20176947f17d1283b0efff_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_903f33016df24187b0e723cb3b3fa8534923b85b0db7406b309e5467da6de7d3 = $this->env->getExtension("native_profiler");
        $__internal_903f33016df24187b0e723cb3b3fa8534923b85b0db7406b309e5467da6de7d3->enter($__internal_903f33016df24187b0e723cb3b3fa8534923b85b0db7406b309e5467da6de7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_903f33016df24187b0e723cb3b3fa8534923b85b0db7406b309e5467da6de7d3->leave($__internal_903f33016df24187b0e723cb3b3fa8534923b85b0db7406b309e5467da6de7d3_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_77149cf1b24d1942f1b3979a388255eecd9b9f811ca73871f58e8ad3689107ec = $this->env->getExtension("native_profiler");
        $__internal_77149cf1b24d1942f1b3979a388255eecd9b9f811ca73871f58e8ad3689107ec->enter($__internal_77149cf1b24d1942f1b3979a388255eecd9b9f811ca73871f58e8ad3689107ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t
    
\t<div class=\"containar\" style=\"background-color: white;\" >
\t\t<br>
\t\t<h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Editar Partido
       
             
           <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("editor_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
        
         
\t\t</h1>
\t\t<br>
\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t";
        // line 26
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
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t</div>
    
";
        
        $__internal_77149cf1b24d1942f1b3979a388255eecd9b9f811ca73871f58e8ad3689107ec->leave($__internal_77149cf1b24d1942f1b3979a388255eecd9b9f811ca73871f58e8ad3689107ec_prof);

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
        return array (  96 => 34,  85 => 26,  81 => 25,  70 => 17,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
