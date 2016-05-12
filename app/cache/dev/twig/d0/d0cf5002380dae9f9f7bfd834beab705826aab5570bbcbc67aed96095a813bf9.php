<?php

/* MiAppBundle:Partidos:listar.html.twig */
class __TwigTemplate_38d26201c82fa1bda641eaea57f2fbd6858a8cf3336eea1ec3316f903d0f5563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_535b646876cff87d648952ec8414b88fb38dc39e79aa44b4f3417dd6d2caacb6 = $this->env->getExtension("native_profiler");
        $__internal_535b646876cff87d648952ec8414b88fb38dc39e79aa44b4f3417dd6d2caacb6->enter($__internal_535b646876cff87d648952ec8414b88fb38dc39e79aa44b4f3417dd6d2caacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle:Partidos:listar.html.twig"));

        // line 1
        echo "
<h1>Listado de Partidos</h1>
<table border=\"1\">
    <tr>
        <th>Fecha</th>
        <th>Equipo 1</th>
        <th>Equipo 2</th>
        <th>Termino</th>
        
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 12
            echo "    <tr>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "fecha_partido", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "id_equipo1", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "id_equipo2", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "termino", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
        
        $__internal_535b646876cff87d648952ec8414b88fb38dc39e79aa44b4f3417dd6d2caacb6->leave($__internal_535b646876cff87d648952ec8414b88fb38dc39e79aa44b4f3417dd6d2caacb6_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle:Partidos:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* */
/* <h1>Listado de Partidos</h1>*/
/* <table border="1">*/
/*     <tr>*/
/*         <th>Fecha</th>*/
/*         <th>Equipo 1</th>*/
/*         <th>Equipo 2</th>*/
/*         <th>Termino</th>*/
/*         */
/*     </tr>*/
/*     {% for partido in partidos %}*/
/*     <tr>*/
/*         <td>{{ partido.fecha_partido }}</td>*/
/*         <td>{{ partido.id_equipo1 }}</td>*/
/*         <td>{{ partido.id_equipo2 }}</td>*/
/*         <td>{{ partido.termino }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
