<?php

/* equipos/new.html.twig */
class __TwigTemplate_9739e893ac7f57a66b69daa94a64b87675da99ed0334de21608bb6cb0ee6014e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/new.html.twig", 1);
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
        $__internal_f54158fdc60f66e1c291d124f290ac10dccf43dd680e9c684ceda184a965c9e7 = $this->env->getExtension("native_profiler");
        $__internal_f54158fdc60f66e1c291d124f290ac10dccf43dd680e9c684ceda184a965c9e7->enter($__internal_f54158fdc60f66e1c291d124f290ac10dccf43dd680e9c684ceda184a965c9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f54158fdc60f66e1c291d124f290ac10dccf43dd680e9c684ceda184a965c9e7->leave($__internal_f54158fdc60f66e1c291d124f290ac10dccf43dd680e9c684ceda184a965c9e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ddce37bea79ec9b9774a966a51878441bf844a7b45e554255535aeeb68c03a8 = $this->env->getExtension("native_profiler");
        $__internal_0ddce37bea79ec9b9774a966a51878441bf844a7b45e554255535aeeb68c03a8->enter($__internal_0ddce37bea79ec9b9774a966a51878441bf844a7b45e554255535aeeb68c03a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Crear Equipo
            <button class=\"btn btn-default  pull-left \">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("equipos_index");
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
            <input type=\"submit\" value=\"Crear Equipo\" toggle=\"tooltip\" title=\"Guardar nuevo equipo\">
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_0ddce37bea79ec9b9774a966a51878441bf844a7b45e554255535aeeb68c03a8->leave($__internal_0ddce37bea79ec9b9774a966a51878441bf844a7b45e554255535aeeb68c03a8_prof);

    }

    public function getTemplateName()
    {
        return "equipos/new.html.twig";
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
/*     <h1 style="text-align:center">Crear Equipo*/
/*             <button class="btn btn-default  pull-left ">*/
/*                 <a href="{{ path('equipos_index') }}" toggle="tooltip" title="Volver">*/
/*                     <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*                 </a>*/
/*             </button>*/
/*     </h1>*/
/* */
/*     <div class="container">*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Crear Equipo" toggle="tooltip" title="Guardar nuevo equipo">*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
