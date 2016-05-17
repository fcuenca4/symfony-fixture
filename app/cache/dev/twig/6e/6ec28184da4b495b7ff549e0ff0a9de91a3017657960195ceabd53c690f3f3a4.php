<?php

/* MiAppBundle::jugadores/index.html.twig */
class __TwigTemplate_d269f5b37453f6fee88898083f7c6256d750674c5f59a6d5c463f37e053cc85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::jugadores/index.html.twig", 1);
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
        $__internal_3b81b864592271652c3e5b3e079117e340c29f5c7b8784a6b864396845d434dc = $this->env->getExtension("native_profiler");
        $__internal_3b81b864592271652c3e5b3e079117e340c29f5c7b8784a6b864396845d434dc->enter($__internal_3b81b864592271652c3e5b3e079117e340c29f5c7b8784a6b864396845d434dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::jugadores/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b81b864592271652c3e5b3e079117e340c29f5c7b8784a6b864396845d434dc->leave($__internal_3b81b864592271652c3e5b3e079117e340c29f5c7b8784a6b864396845d434dc_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74e9840910c54ac5446995a8c05b179fb089431d01e595e3acc673a372888091 = $this->env->getExtension("native_profiler");
        $__internal_74e9840910c54ac5446995a8c05b179fb089431d01e595e3acc673a372888091->enter($__internal_74e9840910c54ac5446995a8c05b179fb089431d01e595e3acc673a372888091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_74e9840910c54ac5446995a8c05b179fb089431d01e595e3acc673a372888091->leave($__internal_74e9840910c54ac5446995a8c05b179fb089431d01e595e3acc673a372888091_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_9c44198b84a4e378bce1c3fe1a5959a33cabf8a00bf3a15368e044c744cb750e = $this->env->getExtension("native_profiler");
        $__internal_9c44198b84a4e378bce1c3fe1a5959a33cabf8a00bf3a15368e044c744cb750e->enter($__internal_9c44198b84a4e378bce1c3fe1a5959a33cabf8a00bf3a15368e044c744cb750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "\t<br>
\t<br>
\t<br>
    
   <div class=\"container\" style=\"background-color: white;\">
    <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">
\t\tJugadores del Campeonato       
    </h1>
\t<br>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
\t\t\t\t<th>Equipo</th>
\t\t\t\t<th>Goles</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["jugadore"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugadore"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugadore"], "edad", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["jugadore"], "idEquipo", array()), "getNombre", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["jugadore"], "goles", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jugadores_edit", array("id" => $this->getAttribute($context["jugadore"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Jugador\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugadore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
   </div>
   <br>
   <div>
\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("jugadores_new");
        echo "\">
\t\t\t<button class=\"btn btn-default pull-left\">Agregar Jugador</button>
\t\t</a>
        
   </div>
   
";
        
        $__internal_9c44198b84a4e378bce1c3fe1a5959a33cabf8a00bf3a15368e044c744cb750e->leave($__internal_9c44198b84a4e378bce1c3fe1a5959a33cabf8a00bf3a15368e044c744cb750e_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::jugadores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  119 => 43,  106 => 36,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  84 => 28,  80 => 27,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/*     */
/*    <div class="container" style="background-color: white;">*/
/*     <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">*/
/* 		Jugadores del Campeonato       */
/*     </h1>*/
/* 	<br>*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Edad</th>*/
/* 				<th>Equipo</th>*/
/* 				<th>Goles</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for jugadore in jugadores %}*/
/*             <tr>*/
/*                 <td>{{ jugadore.nombre }}</td>*/
/*                 <td>{{ jugadore.edad }}</td>*/
/* 				<td>{{ jugadore.idEquipo.getNombre() }}</td>*/
/*                 <td>{{ jugadore.goles}}</td>*/
/* 				<td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('jugadores_edit', { 'id': jugadore.id }) }}" toggle="tooltip" title="Visualizar Jugador">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    </div>*/
/*    <br>*/
/*    <div>*/
/* 		<a href="{{ path('jugadores_new') }}">*/
/* 			<button class="btn btn-default pull-left">Agregar Jugador</button>*/
/* 		</a>*/
/*         */
/*    </div>*/
/*    */
/* {% endblock %}*/
/* */
