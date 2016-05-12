<?php

/* equipos/show.html.twig */
class __TwigTemplate_689fd8579e1306a021f62716215e78aea4676e9d73c1521a77f451009d740ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28df1fb6fe42e7f34dd77d2ce84641db716844988404a6b8833b42834dc7dc8c = $this->env->getExtension("native_profiler");
        $__internal_28df1fb6fe42e7f34dd77d2ce84641db716844988404a6b8833b42834dc7dc8c->enter($__internal_28df1fb6fe42e7f34dd77d2ce84641db716844988404a6b8833b42834dc7dc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28df1fb6fe42e7f34dd77d2ce84641db716844988404a6b8833b42834dc7dc8c->leave($__internal_28df1fb6fe42e7f34dd77d2ce84641db716844988404a6b8833b42834dc7dc8c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afea02979697f78d87faf6b52c2292f6950de9303134e16560838665a6817a60 = $this->env->getExtension("native_profiler");
        $__internal_afea02979697f78d87faf6b52c2292f6950de9303134e16560838665a6817a60->enter($__internal_afea02979697f78d87faf6b52c2292f6950de9303134e16560838665a6817a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_afea02979697f78d87faf6b52c2292f6950de9303134e16560838665a6817a60->leave($__internal_afea02979697f78d87faf6b52c2292f6950de9303134e16560838665a6817a60_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f4ea31534b97d2e425fbaf7ef2e7bf8a6de52588fe38d93b216cd693f0c829 = $this->env->getExtension("native_profiler");
        $__internal_d4f4ea31534b97d2e425fbaf7ef2e7bf8a6de52588fe38d93b216cd693f0c829->enter($__internal_d4f4ea31534b97d2e425fbaf7ef2e7bf8a6de52588fe38d93b216cd693f0c829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
   <div class=\"container\">
    <table  class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ptos</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "ptos", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
   <div class=\"container\">
    <ul>
        
        <button class=\"btn btn-default  pull-center \">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\" toggle=\"tooltip\" title=\"Volver\">
                <span class=\"glyphicon glyphicon-chevron-left\" style=\"color:#00695c\"></span>
            </a>
        </button>
        <button class=\"btn btn-default  pull-center\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_edit", array("id" => $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()))), "html", null, true);
        echo "\" toggle=\"tooltip\" title=\"Editar Equipo\">
                <span class=\"glyphicon glyphicon-pencil\" style=\"color:#00695c\"></span>
            </a>
        </button>
    </ul>
   
";
        
        $__internal_d4f4ea31534b97d2e425fbaf7ef2e7bf8a6de52588fe38d93b216cd693f0c829->leave($__internal_d4f4ea31534b97d2e425fbaf7ef2e7bf8a6de52588fe38d93b216cd693f0c829_prof);

    }

    public function getTemplateName()
    {
        return "equipos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  92 => 29,  81 => 21,  74 => 17,  67 => 13,  59 => 7,  53 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*    <div class="container">*/
/*     <table  class="table table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ equipo.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ equipo.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ptos</th>*/
/*                 <td>{{ equipo.ptos }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*    <div class="container">*/
/*     <ul>*/
/*         */
/*         <button class="btn btn-default  pull-center ">*/
/*             <a href="{{ path('equipos_index') }}" toggle="tooltip" title="Volver">*/
/*                 <span class="glyphicon glyphicon-chevron-left" style="color:#00695c"></span>*/
/*             </a>*/
/*         </button>*/
/*         <button class="btn btn-default  pull-center">*/
/*             <a href="{{ path('equipos_edit', { 'id': equipo.id }) }}" toggle="tooltip" title="Editar Equipo">*/
/*                 <span class="glyphicon glyphicon-pencil" style="color:#00695c"></span>*/
/*             </a>*/
/*         </button>*/
/*     </ul>*/
/*    */
/* {% endblock %}*/
/* */
