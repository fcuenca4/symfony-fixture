<?php

/* goles/index.html.twig */
class __TwigTemplate_bb6a31e9b7bfadf749503f7d7320f260b0b2f7952c99ed37fd357ffb170e9d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "goles/index.html.twig", 1);
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
        $__internal_f067a43e53f6ed2db807ca774aee6637c2aae314a309ef3d10ca93b4c96e197d = $this->env->getExtension("native_profiler");
        $__internal_f067a43e53f6ed2db807ca774aee6637c2aae314a309ef3d10ca93b4c96e197d->enter($__internal_f067a43e53f6ed2db807ca774aee6637c2aae314a309ef3d10ca93b4c96e197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "goles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f067a43e53f6ed2db807ca774aee6637c2aae314a309ef3d10ca93b4c96e197d->leave($__internal_f067a43e53f6ed2db807ca774aee6637c2aae314a309ef3d10ca93b4c96e197d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1e4499c221feb3a2d15a1cea1462eb0e13cf3242ccf9569f4730627269fdf9f = $this->env->getExtension("native_profiler");
        $__internal_d1e4499c221feb3a2d15a1cea1462eb0e13cf3242ccf9569f4730627269fdf9f->enter($__internal_d1e4499c221feb3a2d15a1cea1462eb0e13cf3242ccf9569f4730627269fdf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Goles del Campeonato 
       
             
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("goles_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Gol</button></a>
        
       
    </h1>
   <div class=\"container\">
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Jugador</th>
                <th>Equipo</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["goles"]) ? $context["goles"] : $this->getContext($context, "goles")));
        foreach ($context['_seq'] as $context["_key"] => $context["gole"]) {
            // line 23
            echo "            <tr>
               <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gole"], "idJugador", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
               <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gole"], "idEquipo", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
               <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gole"], "idPartido", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("goles_edit", array("id" => $this->getAttribute($context["gole"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Gol\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
   </div>
   
";
        
        $__internal_d1e4499c221feb3a2d15a1cea1462eb0e13cf3242ccf9569f4730627269fdf9f->leave($__internal_d1e4499c221feb3a2d15a1cea1462eb0e13cf3242ccf9569f4730627269fdf9f_prof);

    }

    public function getTemplateName()
    {
        return "goles/index.html.twig";
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
/*     <h1 style="text-align:center">Goles del Campeonato */
/*        */
/*              */
/*             <a href="{{ path('goles_new') }}"><button class="btn btn-default pull-right">Agregar Gol</button></a>*/
/*         */
/*        */
/*     </h1>*/
/*    <div class="container">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Jugador</th>*/
/*                 <th>Equipo</th>*/
/*                 <th>Fecha</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for gole in goles %}*/
/*             <tr>*/
/*                <td>{{ gole.idJugador.getNombre() }}</td>*/
/*                <td>{{ gole.idEquipo.getNombre() }}</td>*/
/*                <td>{{ gole.idPartido.getNombre() }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('goles_edit', { 'id': gole.id }) }}" toggle="tooltip" title="Visualizar Gol">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    </div>*/
/*    */
/* {% endblock %}*/
/* */
