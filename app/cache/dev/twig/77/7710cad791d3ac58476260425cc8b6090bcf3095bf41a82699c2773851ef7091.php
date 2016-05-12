<?php

/* partidos/show.html.twig */
class __TwigTemplate_de0bf0145905a5933ad7fd84d9f4f727da874646fd4b6cf9164c322aa0804642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partidos/show.html.twig", 1);
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
        $__internal_657d3849636950d499f52211f74a8fd67c2d11d4d9d301e1ca6cdfecf69ab886 = $this->env->getExtension("native_profiler");
        $__internal_657d3849636950d499f52211f74a8fd67c2d11d4d9d301e1ca6cdfecf69ab886->enter($__internal_657d3849636950d499f52211f74a8fd67c2d11d4d9d301e1ca6cdfecf69ab886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_657d3849636950d499f52211f74a8fd67c2d11d4d9d301e1ca6cdfecf69ab886->leave($__internal_657d3849636950d499f52211f74a8fd67c2d11d4d9d301e1ca6cdfecf69ab886_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a40d3b42fb70950894a7c216cacbb7f1ccfe9069b66101b5406baf3dd1fb4a5a = $this->env->getExtension("native_profiler");
        $__internal_a40d3b42fb70950894a7c216cacbb7f1ccfe9069b66101b5406baf3dd1fb4a5a->enter($__internal_a40d3b42fb70950894a7c216cacbb7f1ccfe9069b66101b5406baf3dd1fb4a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Partidos</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaPartido", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "fechaPartido", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Resulteq1</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultEq1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resulteq2</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultEq2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observacion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "observacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Termino</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "termino", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Editor</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "editor", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("partidos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partidos_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a40d3b42fb70950894a7c216cacbb7f1ccfe9069b66101b5406baf3dd1fb4a5a->leave($__internal_a40d3b42fb70950894a7c216cacbb7f1ccfe9069b66101b5406baf3dd1fb4a5a_prof);

    }

    public function getTemplateName()
    {
        return "partidos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  118 => 47,  112 => 44,  106 => 41,  96 => 34,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Partidos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ partido.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if partido.fechaPartido %}{{ partido.fechaPartido|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resulteq1</th>*/
/*                 <td>{{ partido.resultEq1 }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resulteq2</th>*/
/*                 <td>{{ partido.resultEq2 }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Observacion</th>*/
/*                 <td>{{ partido.observacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Termino</th>*/
/*                 <td>{% if partido.termino %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Editor</th>*/
/*                 <td>{{ partido.editor }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('partidos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('partidos_edit', { 'id': partido.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
