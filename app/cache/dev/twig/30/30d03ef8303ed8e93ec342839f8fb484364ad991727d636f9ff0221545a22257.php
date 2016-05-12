<?php

/* MiAppBundle::goles/index.html.twig */
class __TwigTemplate_e1538a59d1bf0c7e08499d57162d8fb970264808d89d0951b9997ad2e6dff6dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::goles/index.html.twig", 1);
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
        $__internal_9d9c8933aa21401982c0413794425b336befc581a5309ca0d34658ae908e7a36 = $this->env->getExtension("native_profiler");
        $__internal_9d9c8933aa21401982c0413794425b336befc581a5309ca0d34658ae908e7a36->enter($__internal_9d9c8933aa21401982c0413794425b336befc581a5309ca0d34658ae908e7a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::goles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d9c8933aa21401982c0413794425b336befc581a5309ca0d34658ae908e7a36->leave($__internal_9d9c8933aa21401982c0413794425b336befc581a5309ca0d34658ae908e7a36_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_cf9cd7159d50b6b708e6e23e61ecf447da0887dcb1dbaf46a573f332b1c124d9 = $this->env->getExtension("native_profiler");
        $__internal_cf9cd7159d50b6b708e6e23e61ecf447da0887dcb1dbaf46a573f332b1c124d9->enter($__internal_cf9cd7159d50b6b708e6e23e61ecf447da0887dcb1dbaf46a573f332b1c124d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

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
        
        $__internal_cf9cd7159d50b6b708e6e23e61ecf447da0887dcb1dbaf46a573f332b1c124d9->leave($__internal_cf9cd7159d50b6b708e6e23e61ecf447da0887dcb1dbaf46a573f332b1c124d9_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::goles/index.html.twig";
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
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
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
