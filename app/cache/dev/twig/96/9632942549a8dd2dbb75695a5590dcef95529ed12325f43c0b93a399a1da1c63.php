<?php

/* jugadores/index.html.twig */
class __TwigTemplate_466010496521f458595f01f0fbaac68202c2f05c548611af3158de4e63c85bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jugadores/index.html.twig", 1);
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
        $__internal_d26f09686524ec9a034c5fe4f87f82ed087f79ca075ece2e00ed0ce07e6e3c2a = $this->env->getExtension("native_profiler");
        $__internal_d26f09686524ec9a034c5fe4f87f82ed087f79ca075ece2e00ed0ce07e6e3c2a->enter($__internal_d26f09686524ec9a034c5fe4f87f82ed087f79ca075ece2e00ed0ce07e6e3c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jugadores/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d26f09686524ec9a034c5fe4f87f82ed087f79ca075ece2e00ed0ce07e6e3c2a->leave($__internal_d26f09686524ec9a034c5fe4f87f82ed087f79ca075ece2e00ed0ce07e6e3c2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc7dede9e90c3b5e5c38fb1f5586d0aae9382c3eddd587978f80ce9e67d1120e = $this->env->getExtension("native_profiler");
        $__internal_cc7dede9e90c3b5e5c38fb1f5586d0aae9382c3eddd587978f80ce9e67d1120e->enter($__internal_cc7dede9e90c3b5e5c38fb1f5586d0aae9382c3eddd587978f80ce9e67d1120e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Jugadores 
       
             
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("jugadores_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Jugador</button></a>
        
       
    </h1>
   <div class=\"container\">
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
\t\t\t\t<th>Equipo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugadore"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugadore"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugadore"], "edad", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["jugadore"], "idEquipo", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jugadores_edit", array("id" => $this->getAttribute($context["jugadore"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Jugador\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugadore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
   </div>

   
";
        
        $__internal_cc7dede9e90c3b5e5c38fb1f5586d0aae9382c3eddd587978f80ce9e67d1120e->leave($__internal_cc7dede9e90c3b5e5c38fb1f5586d0aae9382c3eddd587978f80ce9e67d1120e_prof);

    }

    public function getTemplateName()
    {
        return "jugadores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  85 => 30,  78 => 26,  74 => 25,  70 => 24,  67 => 23,  63 => 22,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 style="text-align:center">Jugadores */
/*        */
/*              */
/*             <a href="{{ path('jugadores_new') }}"><button class="btn btn-default pull-right">Agregar Jugador</button></a>*/
/*         */
/*        */
/*     </h1>*/
/*    <div class="container">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Edad</th>*/
/* 				<th>Equipo</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for jugadore in jugadores %}*/
/*             <tr>*/
/*                 <td>{{ jugadore.nombre }}</td>*/
/*                 <td>{{ jugadore.edad }}</td>*/
/* 				<td>{{ jugadore.idEquipo.getNombre() }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('jugadores_edit', { 'id': jugadore.id }) }}" toggle="tooltip" title="Visualizar Jugador">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    </div>*/
/* */
/*    */
/* {% endblock %}*/
/* */
