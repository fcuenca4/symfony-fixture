<?php

/* partidos/index.html.twig */
class __TwigTemplate_e8f91c0ef0bddb4b32dcd79f37b07603951385d739c4d7737683636ba28619a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partidos/index.html.twig", 1);
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
        $__internal_0782b19fdc918b78ca63d9ff86994e35c89879c9f96f6e7de6b522039b14f151 = $this->env->getExtension("native_profiler");
        $__internal_0782b19fdc918b78ca63d9ff86994e35c89879c9f96f6e7de6b522039b14f151->enter($__internal_0782b19fdc918b78ca63d9ff86994e35c89879c9f96f6e7de6b522039b14f151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0782b19fdc918b78ca63d9ff86994e35c89879c9f96f6e7de6b522039b14f151->leave($__internal_0782b19fdc918b78ca63d9ff86994e35c89879c9f96f6e7de6b522039b14f151_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0f1ca98cd5ca8baee1934911f4c3c2f50087a7f6259199d052944fa9aa0e036 = $this->env->getExtension("native_profiler");
        $__internal_e0f1ca98cd5ca8baee1934911f4c3c2f50087a7f6259199d052944fa9aa0e036->enter($__internal_e0f1ca98cd5ca8baee1934911f4c3c2f50087a7f6259199d052944fa9aa0e036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center\">Partidos
       
             
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("partidos_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Partido</button></a>
        
       
    </h1>
  <div class=\"container\">
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Fechapartido</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                <th>Resulteq1</th>
                <th>Resulteq2</th>
                <th>Observacion</th>
                <th>Termino</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            if ($this->getAttribute($context["partido"], "fechaPartido", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaPartido", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo1", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo2", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "observacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["partido"], "termino", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partidos_show", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partidos_edit", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

   </div>
";
        
        $__internal_e0f1ca98cd5ca8baee1934911f4c3c2f50087a7f6259199d052944fa9aa0e036->leave($__internal_e0f1ca98cd5ca8baee1934911f4c3c2f50087a7f6259199d052944fa9aa0e036_prof);

    }

    public function getTemplateName()
    {
        return "partidos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  117 => 41,  111 => 38,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  74 => 28,  71 => 27,  67 => 26,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 style="text-align:center">Partidos*/
/*        */
/*              */
/*             <a href="{{ path('partidos_new') }}"><button class="btn btn-default pull-right">Agregar Partido</button></a>*/
/*         */
/*        */
/*     </h1>*/
/*   <div class="container">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Fechapartido</th>*/
/*                 <th>Equipo Local</th>*/
/*                 <th>Equipo Visitante</th>*/
/*                 <th>Resulteq1</th>*/
/*                 <th>Resulteq2</th>*/
/*                 <th>Observacion</th>*/
/*                 <th>Termino</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for partido in partidos %}*/
/*             <tr>*/
/*                 <td>{% if partido.fechaPartido %}{{ partido.fechaPartido|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ partido.idEquipo1.getNombre() }}</td>*/
/*                 <td>{{ partido.idEquipo2.getNombre() }}</td>*/
/*                 <td>{{ partido.resultEq1 }}</td>*/
/*                 <td>{{ partido.resultEq2 }}</td>*/
/*                 <td>{{ partido.observacion }}</td>*/
/*                 <td>{% if partido.termino %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('partidos_show', { 'id': partido.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('partidos_edit', { 'id': partido.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*    </div>*/
/* {% endblock %}*/
/* */
