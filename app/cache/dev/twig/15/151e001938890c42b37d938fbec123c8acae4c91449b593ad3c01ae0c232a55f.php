<?php

/* partidos/index.html.twig */
class __TwigTemplate_360c328686a936783a968e4031f771db013815a10146eaf8260a9a1bd9103cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partidos/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'titulo' => array($this, 'block_titulo'),
            'editref' => array($this, 'block_editref'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2003622c8cde36acc5cbc5a05e09ccce1f738bb98aeafe001a3c370100bb6356 = $this->env->getExtension("native_profiler");
        $__internal_2003622c8cde36acc5cbc5a05e09ccce1f738bb98aeafe001a3c370100bb6356->enter($__internal_2003622c8cde36acc5cbc5a05e09ccce1f738bb98aeafe001a3c370100bb6356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2003622c8cde36acc5cbc5a05e09ccce1f738bb98aeafe001a3c370100bb6356->leave($__internal_2003622c8cde36acc5cbc5a05e09ccce1f738bb98aeafe001a3c370100bb6356_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a790b39f7fd6b2b7444843fffff519ec3f7d02337da9fb5f78b8e5ce7989480c = $this->env->getExtension("native_profiler");
        $__internal_a790b39f7fd6b2b7444843fffff519ec3f7d02337da9fb5f78b8e5ce7989480c->enter($__internal_a790b39f7fd6b2b7444843fffff519ec3f7d02337da9fb5f78b8e5ce7989480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('titulo', $context, $blocks);
        // line 12
        echo "    <div class=\"container\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                ";
        // line 20
        echo "                ";
        // line 21
        echo "                <th>Observacion</th>
                <th>Termino</th>
                <th>Editor</th>
                <th>Arbitro</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 31
            echo "                <tr>
                    <td>";
            // line 32
            if ($this->getAttribute($context["partido"], "fechaPartido", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaPartido", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo1", array()), "getNombre", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq1", array()), "html", null, true);
            echo ")</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo2", array()), "getNombre", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq2", array()), "html", null, true);
            echo ")</td>
                    ";
            // line 36
            echo "                    ";
            // line 37
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "observacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            if ($this->getAttribute($context["partido"], "termino", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "idEditor", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "idArbitro", array()), "html", null, true);
            echo "</td>

                    <td>
                        <ul>
                            ";
            // line 45
            echo "                            ";
            // line 46
            echo "                            ";
            // line 47
            echo "
                            <li>
                                ";
            // line 49
            $this->displayBlock('editref', $context, $blocks);
            // line 52
            echo "                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_a790b39f7fd6b2b7444843fffff519ec3f7d02337da9fb5f78b8e5ce7989480c->leave($__internal_a790b39f7fd6b2b7444843fffff519ec3f7d02337da9fb5f78b8e5ce7989480c_prof);

    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_52cdbb5d379fbb892217fab61a5727fa01b8bab452e6dc23311bd53eb36db54b = $this->env->getExtension("native_profiler");
        $__internal_52cdbb5d379fbb892217fab61a5727fa01b8bab452e6dc23311bd53eb36db54b->enter($__internal_52cdbb5d379fbb892217fab61a5727fa01b8bab452e6dc23311bd53eb36db54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 5
        echo "
        <h1 style=\"text-align:center\">Partidos
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("partidos_new");
        echo "\">
                <button class=\"btn btn-default pull-right\">Agregar Partido</button>
            </a>
        </h1>
    ";
        
        $__internal_52cdbb5d379fbb892217fab61a5727fa01b8bab452e6dc23311bd53eb36db54b->leave($__internal_52cdbb5d379fbb892217fab61a5727fa01b8bab452e6dc23311bd53eb36db54b_prof);

    }

    // line 49
    public function block_editref($context, array $blocks = array())
    {
        $__internal_1c74421a089f52afe822c2cc9c3929b856f9d520a34457e83b337fe98e5e6d15 = $this->env->getExtension("native_profiler");
        $__internal_1c74421a089f52afe822c2cc9c3929b856f9d520a34457e83b337fe98e5e6d15->enter($__internal_1c74421a089f52afe822c2cc9c3929b856f9d520a34457e83b337fe98e5e6d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editref"));

        // line 50
        echo "                                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partidos_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
        echo "\">edit</a>
                                ";
        
        $__internal_1c74421a089f52afe822c2cc9c3929b856f9d520a34457e83b337fe98e5e6d15->leave($__internal_1c74421a089f52afe822c2cc9c3929b856f9d520a34457e83b337fe98e5e6d15_prof);

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
        return array (  198 => 50,  192 => 49,  180 => 7,  176 => 5,  170 => 4,  159 => 57,  141 => 52,  139 => 49,  135 => 47,  133 => 46,  131 => 45,  124 => 40,  120 => 39,  112 => 38,  107 => 37,  105 => 36,  99 => 34,  93 => 33,  87 => 32,  84 => 31,  67 => 30,  56 => 21,  54 => 20,  45 => 12,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% block titulo %}*/
/* */
/*         <h1 style="text-align:center">Partidos*/
/*             <a href="{{ path('partidos_new') }}">*/
/*                 <button class="btn btn-default pull-right">Agregar Partido</button>*/
/*             </a>*/
/*         </h1>*/
/*     {% endblock %}*/
/*     <div class="container">*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <th>Equipo Local</th>*/
/*                 <th>Equipo Visitante</th>*/
/*                 {#<th>Resulteq1</th>#}*/
/*                 {#<th>Resulteq2</th>#}*/
/*                 <th>Observacion</th>*/
/*                 <th>Termino</th>*/
/*                 <th>Editor</th>*/
/*                 <th>Arbitro</th>*/
/* */
/*                 <th></th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for partido in partidos %}*/
/*                 <tr>*/
/*                     <td>{% if partido.fechaPartido %}{{ partido.fechaPartido|date('Y-m-d') }}{% endif %}</td>*/
/*                     <td>{{ partido.idEquipo1.getNombre() }} ({{ partido.resultEq1 }})</td>*/
/*                     <td>{{ partido.idEquipo2.getNombre() }} ({{ partido.resultEq2 }})</td>*/
/*                     {#<td>{{ partido.resultEq1 }}</td>#}*/
/*                     {#<td>{{ partido.resultEq2 }}</td>#}*/
/*                     <td>{{ partido.observacion }}</td>*/
/*                     <td>{% if partido.termino %}Yes{% else %}No{% endif %}</td>*/
/*                     <td>{{ partido.idEditor }}</td>*/
/*                     <td>{{ partido.idArbitro }}</td>*/
/* */
/*                     <td>*/
/*                         <ul>*/
/*                             {#<li>#}*/
/*                             {#<a href="{{ path('partidos_show', { 'id': partido.id }) }}">show</a>#}*/
/*                             {#</li>#}*/
/* */
/*                             <li>*/
/*                                 {% block editref %}*/
/*                                     <a href="{{ path('partidos_edit', { 'id': partido.id }) }}">edit</a>*/
/*                                 {% endblock %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
