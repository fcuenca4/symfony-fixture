<?php

/* MiAppBundle::equipos/index.html.twig */
class __TwigTemplate_cd760a30a5cbfa4504f2348dbf30bd08f94c1392eb818680a19274a8e4abe803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::equipos/index.html.twig", 1);
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
        $__internal_64cfcdb5635e0c769a2bdfdb7658e4544e29b3999b2ebc7c45fa2a42f16ee0e7 = $this->env->getExtension("native_profiler");
        $__internal_64cfcdb5635e0c769a2bdfdb7658e4544e29b3999b2ebc7c45fa2a42f16ee0e7->enter($__internal_64cfcdb5635e0c769a2bdfdb7658e4544e29b3999b2ebc7c45fa2a42f16ee0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::equipos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64cfcdb5635e0c769a2bdfdb7658e4544e29b3999b2ebc7c45fa2a42f16ee0e7->leave($__internal_64cfcdb5635e0c769a2bdfdb7658e4544e29b3999b2ebc7c45fa2a42f16ee0e7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cd35fccb02d765817968854709c827ab90b1d27a586fa1137eaa1c3282cee54 = $this->env->getExtension("native_profiler");
        $__internal_6cd35fccb02d765817968854709c827ab90b1d27a586fa1137eaa1c3282cee54->enter($__internal_6cd35fccb02d765817968854709c827ab90b1d27a586fa1137eaa1c3282cee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_6cd35fccb02d765817968854709c827ab90b1d27a586fa1137eaa1c3282cee54->leave($__internal_6cd35fccb02d765817968854709c827ab90b1d27a586fa1137eaa1c3282cee54_prof);

    }

    // line 7
    public function block_editor($context, array $blocks = array())
    {
        $__internal_2d42fc5b16aace2602e4af18efcea5fdc3fda81b45b6741e04b88c00d37d0f4e = $this->env->getExtension("native_profiler");
        $__internal_2d42fc5b16aace2602e4af18efcea5fdc3fda81b45b6741e04b88c00d37d0f4e->enter($__internal_2d42fc5b16aace2602e4af18efcea5fdc3fda81b45b6741e04b88c00d37d0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 8
        echo "    <br>
\t<br>
\t<br>
    
   
   <div class=\"container\" style=\"background-color: white;\">
    <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">Equipos del Campeonato 
        
    </h1>
\t<br>
    <table  class=\"table table-hover\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Puntos</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 29
            echo "            <tr>
                
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "ptos", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_edit", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Equipo\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
   </div>
    <br>
   <div>
\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("equipos_new");
        echo "\">
\t\t<button class=\"btn btn-default pull-left\">Agregar Equipo</button>
\t</a>     
    </div>
";
        
        $__internal_2d42fc5b16aace2602e4af18efcea5fdc3fda81b45b6741e04b88c00d37d0f4e->leave($__internal_2d42fc5b16aace2602e4af18efcea5fdc3fda81b45b6741e04b88c00d37d0f4e_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::equipos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  112 => 43,  99 => 36,  92 => 32,  88 => 31,  84 => 29,  80 => 28,  58 => 8,  52 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />*/
/* {% endblock %}*/
/* */
/* {% block editor %}*/
/*     <br>*/
/* 	<br>*/
/* 	<br>*/
/*     */
/*    */
/*    <div class="container" style="background-color: white;">*/
/*     <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">Equipos del Campeonato */
/*         */
/*     </h1>*/
/* 	<br>*/
/*     <table  class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 */
/*                 <th>Nombre</th>*/
/*                 <th>Puntos</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for equipo in equipos %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ equipo.nombre }}</td>*/
/*                 <td>{{ equipo.ptos }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('equipos_edit', { 'id': equipo.id }) }}" toggle="tooltip" title="Visualizar Equipo">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    </div>*/
/*     <br>*/
/*    <div>*/
/* 	<a href="{{ path('equipos_new') }}">*/
/* 		<button class="btn btn-default pull-left">Agregar Equipo</button>*/
/* 	</a>     */
/*     </div>*/
/* {% endblock %}*/
/* */
