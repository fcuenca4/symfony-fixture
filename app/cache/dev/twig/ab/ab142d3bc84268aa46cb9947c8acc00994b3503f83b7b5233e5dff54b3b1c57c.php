<?php

/* goles/index.html.twig */
class __TwigTemplate_83dd43cb401a82b4fed4c4eb53580569fa94b70d9a961d319102acc96891490e extends Twig_Template
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
        $__internal_cafea62f2b7eab04b90c04074baf68519930ce09e42f525754bb12e5c5c59bbc = $this->env->getExtension("native_profiler");
        $__internal_cafea62f2b7eab04b90c04074baf68519930ce09e42f525754bb12e5c5c59bbc->enter($__internal_cafea62f2b7eab04b90c04074baf68519930ce09e42f525754bb12e5c5c59bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "goles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cafea62f2b7eab04b90c04074baf68519930ce09e42f525754bb12e5c5c59bbc->leave($__internal_cafea62f2b7eab04b90c04074baf68519930ce09e42f525754bb12e5c5c59bbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df2048a354ca5234ee0304b84912cdd6665eed12e3914dd3664caaa120e08bfd = $this->env->getExtension("native_profiler");
        $__internal_df2048a354ca5234ee0304b84912cdd6665eed12e3914dd3664caaa120e08bfd->enter($__internal_df2048a354ca5234ee0304b84912cdd6665eed12e3914dd3664caaa120e08bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["goles"]) ? $context["goles"] : $this->getContext($context, "goles")));
        foreach ($context['_seq'] as $context["_key"] => $context["gole"]) {
            // line 22
            echo "            <tr>
               <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gole"], "idJugador", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
               <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gole"], "idEquipo", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
               <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gole"], "idPartido", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 29
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
        // line 36
        echo "        </tbody>
    </table>
   </div>
   
";
        
        $__internal_df2048a354ca5234ee0304b84912cdd6665eed12e3914dd3664caaa120e08bfd->leave($__internal_df2048a354ca5234ee0304b84912cdd6665eed12e3914dd3664caaa120e08bfd_prof);

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
        return array (  97 => 36,  84 => 29,  77 => 25,  73 => 24,  69 => 23,  66 => 22,  62 => 21,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
