<?php

/* MiAppBundle::arbitros/new.html.twig */
class __TwigTemplate_c65e7646e66349268912e19a7919d33dd4127b9a0462c2180e5726fd3dceabed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::arbitros/new.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de5ed265ea576383db91e05be8d5a3d90ec7437387f99eff915a8594181e72d4 = $this->env->getExtension("native_profiler");
        $__internal_de5ed265ea576383db91e05be8d5a3d90ec7437387f99eff915a8594181e72d4->enter($__internal_de5ed265ea576383db91e05be8d5a3d90ec7437387f99eff915a8594181e72d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::arbitros/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5ed265ea576383db91e05be8d5a3d90ec7437387f99eff915a8594181e72d4->leave($__internal_de5ed265ea576383db91e05be8d5a3d90ec7437387f99eff915a8594181e72d4_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_fb61494904e3c32690972c84df7c1bff057b8301ccaa9e795049957fd2c64de9 = $this->env->getExtension("native_profiler");
        $__internal_fb61494904e3c32690972c84df7c1bff057b8301ccaa9e795049957fd2c64de9->enter($__internal_fb61494904e3c32690972c84df7c1bff057b8301ccaa9e795049957fd2c64de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Crear Arbitro
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("arbitros_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
    </h1>

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear Arbitro\" toggle=\"tooltip\" title=\"Guardar nuevo arbitro\">
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    
";
        
        $__internal_fb61494904e3c32690972c84df7c1bff057b8301ccaa9e795049957fd2c64de9->leave($__internal_fb61494904e3c32690972c84df7c1bff057b8301ccaa9e795049957fd2c64de9_prof);

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
        return array (  62 => 15,  57 => 13,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
/*     <h1 style="text-align:center">Crear Arbitro*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('arbitros_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*     </h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Crear Arbitro" toggle="tooltip" title="Guardar nuevo arbitro">*/
/*     {{ form_end(form) }}*/
/* */
/*     */
/* {% endblock %}*/
/* */
