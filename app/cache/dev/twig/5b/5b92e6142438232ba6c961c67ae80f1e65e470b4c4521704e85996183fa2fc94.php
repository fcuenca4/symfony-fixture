<?php

/* MiAppBundle::equipos/index.html.twig */
class __TwigTemplate_a9c504031a552091148a8b23cf256c581d3cc2651d5e222fa36701a46baff028 extends Twig_Template
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
        $__internal_1f9997945428f5cf5c8c2f9c07dab6d9649ca253f39348628b1035f785c54bd5 = $this->env->getExtension("native_profiler");
        $__internal_1f9997945428f5cf5c8c2f9c07dab6d9649ca253f39348628b1035f785c54bd5->enter($__internal_1f9997945428f5cf5c8c2f9c07dab6d9649ca253f39348628b1035f785c54bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::equipos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9997945428f5cf5c8c2f9c07dab6d9649ca253f39348628b1035f785c54bd5->leave($__internal_1f9997945428f5cf5c8c2f9c07dab6d9649ca253f39348628b1035f785c54bd5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_965203daa1f805d2dcef45063d93f2826e3aed1eb1a3cd0ca9e1926d6e4d0156 = $this->env->getExtension("native_profiler");
        $__internal_965203daa1f805d2dcef45063d93f2826e3aed1eb1a3cd0ca9e1926d6e4d0156->enter($__internal_965203daa1f805d2dcef45063d93f2826e3aed1eb1a3cd0ca9e1926d6e4d0156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_965203daa1f805d2dcef45063d93f2826e3aed1eb1a3cd0ca9e1926d6e4d0156->leave($__internal_965203daa1f805d2dcef45063d93f2826e3aed1eb1a3cd0ca9e1926d6e4d0156_prof);

    }

    // line 7
    public function block_editor($context, array $blocks = array())
    {
        $__internal_c23c13fbc5f2197d20dbcc9a6257d45c4f34fb434bd0b8800e0efb51a4a6a273 = $this->env->getExtension("native_profiler");
        $__internal_c23c13fbc5f2197d20dbcc9a6257d45c4f34fb434bd0b8800e0efb51a4a6a273->enter($__internal_c23c13fbc5f2197d20dbcc9a6257d45c4f34fb434bd0b8800e0efb51a4a6a273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

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
        
        $__internal_c23c13fbc5f2197d20dbcc9a6257d45c4f34fb434bd0b8800e0efb51a4a6a273->leave($__internal_c23c13fbc5f2197d20dbcc9a6257d45c4f34fb434bd0b8800e0efb51a4a6a273_prof);

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
