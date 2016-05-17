<?php

/* MiAppBundle::/Partidos/index.html.twig */
class __TwigTemplate_5c6a53161932e934042baf6cebcfc7cc86c06c16bcbf678f3355bfd324845c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::/Partidos/index.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d204f08b30aea72c6730832f8e3e8644d2cdd79e2a0e0d17b1f7b76d6b6ce005 = $this->env->getExtension("native_profiler");
        $__internal_d204f08b30aea72c6730832f8e3e8644d2cdd79e2a0e0d17b1f7b76d6b6ce005->enter($__internal_d204f08b30aea72c6730832f8e3e8644d2cdd79e2a0e0d17b1f7b76d6b6ce005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::/Partidos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d204f08b30aea72c6730832f8e3e8644d2cdd79e2a0e0d17b1f7b76d6b6ce005->leave($__internal_d204f08b30aea72c6730832f8e3e8644d2cdd79e2a0e0d17b1f7b76d6b6ce005_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_34013e31cb05c7e6f1d2e9b663d3207f4070c2fc690c5742b56660ac0c3946b8 = $this->env->getExtension("native_profiler");
        $__internal_34013e31cb05c7e6f1d2e9b663d3207f4070c2fc690c5742b56660ac0c3946b8->enter($__internal_34013e31cb05c7e6f1d2e9b663d3207f4070c2fc690c5742b56660ac0c3946b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

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
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partidos_edit", array("id" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Partido\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_34013e31cb05c7e6f1d2e9b663d3207f4070c2fc690c5742b56660ac0c3946b8->leave($__internal_34013e31cb05c7e6f1d2e9b663d3207f4070c2fc690c5742b56660ac0c3946b8_prof);

    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_4cf56784c899faf1c9c07a1bedd36ec8fbfecc9f64fe2ffe16f3572695cbcbb2 = $this->env->getExtension("native_profiler");
        $__internal_4cf56784c899faf1c9c07a1bedd36ec8fbfecc9f64fe2ffe16f3572695cbcbb2->enter($__internal_4cf56784c899faf1c9c07a1bedd36ec8fbfecc9f64fe2ffe16f3572695cbcbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 5
        echo "
        <h1 style=\"text-align:center\">Campeonato
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("partidos_new");
        echo "\">
                <button class=\"btn btn-default pull-right\">Agregar Partido</button>
            </a>
        </h1>
    ";
        
        $__internal_4cf56784c899faf1c9c07a1bedd36ec8fbfecc9f64fe2ffe16f3572695cbcbb2->leave($__internal_4cf56784c899faf1c9c07a1bedd36ec8fbfecc9f64fe2ffe16f3572695cbcbb2_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::/Partidos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 7,  148 => 5,  142 => 4,  131 => 52,  118 => 45,  110 => 40,  106 => 39,  98 => 38,  93 => 37,  91 => 36,  85 => 34,  79 => 33,  73 => 32,  70 => 31,  66 => 30,  55 => 21,  53 => 20,  44 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
/*     {% block titulo %}*/
/* */
/*         <h1 style="text-align:center">Campeonato*/
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
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('partidos_edit', { 'id': partido.id }) }}" toggle="tooltip" title="Visualizar Partido">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
