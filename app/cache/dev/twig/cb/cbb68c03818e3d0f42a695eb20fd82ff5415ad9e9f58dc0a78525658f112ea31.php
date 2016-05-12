<?php

/* goles/new.html.twig */
class __TwigTemplate_ec2545e0560181ea98b7f07357f6805eb18d2defe2563640e689a6076b946d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "goles/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70ffca26d7c16b13de45eff3c8e1903a1ce47655c368e06739eb8d24c9d80590 = $this->env->getExtension("native_profiler");
        $__internal_70ffca26d7c16b13de45eff3c8e1903a1ce47655c368e06739eb8d24c9d80590->enter($__internal_70ffca26d7c16b13de45eff3c8e1903a1ce47655c368e06739eb8d24c9d80590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "goles/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70ffca26d7c16b13de45eff3c8e1903a1ce47655c368e06739eb8d24c9d80590->leave($__internal_70ffca26d7c16b13de45eff3c8e1903a1ce47655c368e06739eb8d24c9d80590_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54001d08b6baacaf786037a9177ef1354518951f7fdf1491de34fad0a4b1c4ee = $this->env->getExtension("native_profiler");
        $__internal_54001d08b6baacaf786037a9177ef1354518951f7fdf1491de34fad0a4b1c4ee->enter($__internal_54001d08b6baacaf786037a9177ef1354518951f7fdf1491de34fad0a4b1c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Cargar Nuevo Gol
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("goles_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                    <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
                </a>
            </button>
    </h1>

    <div class=\"container\">
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Crear Equipo\" toggle=\"tooltip\" title=\"Guardar nuevo gol\">
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    
";
        
        $__internal_54001d08b6baacaf786037a9177ef1354518951f7fdf1491de34fad0a4b1c4ee->leave($__internal_54001d08b6baacaf786037a9177ef1354518951f7fdf1491de34fad0a4b1c4ee_prof);

    }

    public function getTemplateName()
    {
        return "goles/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  54 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 style="text-align:center">Cargar Nuevo Gol*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('goles_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*     </h1>*/
/* */
/*     <div class="container">*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Crear Equipo" toggle="tooltip" title="Guardar nuevo gol">*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/*     */
/* {% endblock %}*/
/* */
