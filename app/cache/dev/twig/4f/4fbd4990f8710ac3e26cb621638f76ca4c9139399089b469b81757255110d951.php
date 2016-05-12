<?php

/* equipos/index.html.twig */
class __TwigTemplate_0157c87fa7a5584003a70de6ed1abf6a09b0c35f8d46192a5b749ec201bf29ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/index.html.twig", 1);
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
        $__internal_d1af322c8ddc7bf0b4a7696c18cd00e8926c5efcd20ec8212f3dee8e096f9357 = $this->env->getExtension("native_profiler");
        $__internal_d1af322c8ddc7bf0b4a7696c18cd00e8926c5efcd20ec8212f3dee8e096f9357->enter($__internal_d1af322c8ddc7bf0b4a7696c18cd00e8926c5efcd20ec8212f3dee8e096f9357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1af322c8ddc7bf0b4a7696c18cd00e8926c5efcd20ec8212f3dee8e096f9357->leave($__internal_d1af322c8ddc7bf0b4a7696c18cd00e8926c5efcd20ec8212f3dee8e096f9357_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c49a40f8243431f0bb19acdd78d5012d37ae11a70f14fb424291e7fee409815f = $this->env->getExtension("native_profiler");
        $__internal_c49a40f8243431f0bb19acdd78d5012d37ae11a70f14fb424291e7fee409815f->enter($__internal_c49a40f8243431f0bb19acdd78d5012d37ae11a70f14fb424291e7fee409815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_c49a40f8243431f0bb19acdd78d5012d37ae11a70f14fb424291e7fee409815f->leave($__internal_c49a40f8243431f0bb19acdd78d5012d37ae11a70f14fb424291e7fee409815f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_336af03472f57656465978d5ca70d59198f738319d901453c4d6896f4f9727c5 = $this->env->getExtension("native_profiler");
        $__internal_336af03472f57656465978d5ca70d59198f738319d901453c4d6896f4f9727c5->enter($__internal_336af03472f57656465978d5ca70d59198f738319d901453c4d6896f4f9727c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    <h1 style=\"text-align:center\">Equipos Participantes 
       
             
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("equipos_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Equipo</button></a>
        
       
    </h1>
   
   <div class=\"container\">
    <table  class=\"table table-hover\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Puntos</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 30
            echo "            <tr>
                
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "ptos", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_edit", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Equipo\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
   </div>
    
";
        
        $__internal_336af03472f57656465978d5ca70d59198f738319d901453c4d6896f4f9727c5->leave($__internal_336af03472f57656465978d5ca70d59198f738319d901453c4d6896f4f9727c5_prof);

    }

    public function getTemplateName()
    {
        return "equipos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  103 => 37,  96 => 33,  92 => 32,  88 => 30,  84 => 29,  65 => 13,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h1 style="text-align:center">Equipos Participantes */
/*        */
/*              */
/*             <a href="{{ path('equipos_new') }}"><button class="btn btn-default pull-right">Agregar Equipo</button></a>*/
/*         */
/*        */
/*     </h1>*/
/*    */
/*    <div class="container">*/
/*     <table  class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 */
/*                 <th>Nombre</th>*/
/*                 <th>Puntos</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for equipo in equipos %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ equipo.nombre }}</td>*/
/*                 <td>{{ equipo.ptos }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('equipos_edit', { 'id': equipo.id }) }}" toggle="tooltip" title="Visualizar Equipo">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    </div>*/
/*     */
/* {% endblock %}*/
/* */
