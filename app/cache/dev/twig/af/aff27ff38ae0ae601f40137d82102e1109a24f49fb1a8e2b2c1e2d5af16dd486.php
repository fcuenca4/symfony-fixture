<?php

/* MiAppBundle::partidos/index.html.twig */
class __TwigTemplate_543a9ca5984491d460694b2a40680f8e2d8c668e9a8cbf46f2b4761e34dcbc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49f79655cea18bb3b6f8cfd691aa028fee7448463f24438b9006269eb5c90a71 = $this->env->getExtension("native_profiler");
        $__internal_49f79655cea18bb3b6f8cfd691aa028fee7448463f24438b9006269eb5c90a71->enter($__internal_49f79655cea18bb3b6f8cfd691aa028fee7448463f24438b9006269eb5c90a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49f79655cea18bb3b6f8cfd691aa028fee7448463f24438b9006269eb5c90a71->leave($__internal_49f79655cea18bb3b6f8cfd691aa028fee7448463f24438b9006269eb5c90a71_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2895fb2d70b6945f178aa55f3fcb8d9a808fd5b315e29343c990744d846249d = $this->env->getExtension("native_profiler");
        $__internal_b2895fb2d70b6945f178aa55f3fcb8d9a808fd5b315e29343c990744d846249d->enter($__internal_b2895fb2d70b6945f178aa55f3fcb8d9a808fd5b315e29343c990744d846249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_b2895fb2d70b6945f178aa55f3fcb8d9a808fd5b315e29343c990744d846249d->leave($__internal_b2895fb2d70b6945f178aa55f3fcb8d9a808fd5b315e29343c990744d846249d_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_07688b1bdf62a24341e09fc3c0c4d6e5a5c5f1e5f8398818738fc19468e69f06 = $this->env->getExtension("native_profiler");
        $__internal_07688b1bdf62a24341e09fc3c0c4d6e5a5c5f1e5f8398818738fc19468e69f06->enter($__internal_07688b1bdf62a24341e09fc3c0c4d6e5a5c5f1e5f8398818738fc19468e69f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t<br>
    <div class=\"container\" style=\"background-color: white;\">
\t\t
        <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\"> 
\t\t\tCampeonato 
\t\t</h1>
\t\t<br>
\t\t<table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                ";
        // line 23
        echo "                ";
        // line 24
        echo "                <th>Observacion</th>
                <th>Termino</th>
                <th>Editor</th>
                <th>Arbitro</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 34
            echo "                <tr>
                    <td>";
            // line 35
            if ($this->getAttribute($context["partido"], "fechaPartido", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaPartido", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo1", array()), "getNombre", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq1", array()), "html", null, true);
            echo ")</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo2", array()), "getNombre", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq2", array()), "html", null, true);
            echo ")</td>
                    ";
            // line 39
            echo "                    ";
            // line 40
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "observacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            if ($this->getAttribute($context["partido"], "termino", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "idEditor", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "idArbitro", array()), "html", null, true);
            echo "</td>

                    <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 48
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
        // line 55
        echo "            </tbody>
        </table>

\t\t
    </div>
\t<br>
\t<div>
\t\t<a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("partidos_new");
        echo "\">
\t\t\t<button class=\"btn btn-default pull-left\">Agregar Partido</button>
\t\t</a>
\t</div>
";
        
        $__internal_07688b1bdf62a24341e09fc3c0c4d6e5a5c5f1e5f8398818738fc19468e69f06->leave($__internal_07688b1bdf62a24341e09fc3c0c4d6e5a5c5f1e5f8398818738fc19468e69f06_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::partidos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 62,  153 => 55,  140 => 48,  132 => 43,  128 => 42,  120 => 41,  115 => 40,  113 => 39,  107 => 37,  101 => 36,  95 => 35,  92 => 34,  88 => 33,  77 => 24,  75 => 23,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />*/
/* {% endblock %}*/
/* {% block editor %}*/
/* 	<br>*/
/* 	<br>*/
/* 	<br>*/
/*     <div class="container" style="background-color: white;">*/
/* 		*/
/*         <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold"> */
/* 			Campeonato */
/* 		</h1>*/
/* 		<br>*/
/* 		<table class="table table-hover">*/
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
/* 		*/
/*     </div>*/
/* 	<br>*/
/* 	<div>*/
/* 		<a href="{{ path('partidos_new') }}">*/
/* 			<button class="btn btn-default pull-left">Agregar Partido</button>*/
/* 		</a>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
