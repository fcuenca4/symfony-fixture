<?php

/* MiAppBundle::/tablaPosiciones.html.twig */
class __TwigTemplate_8030909c5574b187943f4e80b35f52178ef68820d77dddb418f517905d74ab0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::/tablaPosiciones.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2ff220171b153dda9010f0f2093759eff74435a5d5b3157718a9ddaa93315b6 = $this->env->getExtension("native_profiler");
        $__internal_c2ff220171b153dda9010f0f2093759eff74435a5d5b3157718a9ddaa93315b6->enter($__internal_c2ff220171b153dda9010f0f2093759eff74435a5d5b3157718a9ddaa93315b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::/tablaPosiciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ff220171b153dda9010f0f2093759eff74435a5d5b3157718a9ddaa93315b6->leave($__internal_c2ff220171b153dda9010f0f2093759eff74435a5d5b3157718a9ddaa93315b6_prof);

    }

    // line 2
    public function block_editor($context, array $blocks = array())
    {
        $__internal_89cd6516d2c9c6cdbd8a8465ccb6ff5ab1fca02e3fe3baab8fafa647bdb26bb4 = $this->env->getExtension("native_profiler");
        $__internal_89cd6516d2c9c6cdbd8a8465ccb6ff5ab1fca02e3fe3baab8fafa647bdb26bb4->enter($__internal_89cd6516d2c9c6cdbd8a8465ccb6ff5ab1fca02e3fe3baab8fafa647bdb26bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 3
        echo "
    <h1 style=\"text-align:center\">Equipos Participantes

        ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("equipos_new");
            echo "\">
                <button class=\"btn btn-default pull-right\">Agregar Equipo</button>
            </a>
        ";
        }
        // line 11
        echo "    </h1>
    <div class=\"container\">
        <table class=\"table table-hover\">
            <thead>
            <tr>

                <th>Nombre</th>
                <th>Puntos</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 24
            echo "                <tr>

                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "ptos", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            ";
            // line 30
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 31
                echo "
                                <button class=\"btn btn-default pull-right\">
                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_edit", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                echo "\" toggle=\"tooltip\"
                                       title=\"Visualizar Equipo\">
                                        <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                                </button>
                            ";
            }
            // line 38
            echo "
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_89cd6516d2c9c6cdbd8a8465ccb6ff5ab1fca02e3fe3baab8fafa647bdb26bb4->leave($__internal_89cd6516d2c9c6cdbd8a8465ccb6ff5ab1fca02e3fe3baab8fafa647bdb26bb4_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::/tablaPosiciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  101 => 38,  93 => 33,  89 => 31,  87 => 30,  81 => 27,  77 => 26,  73 => 24,  69 => 23,  55 => 11,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block editor %}*/
/* */
/*     <h1 style="text-align:center">Equipos Participantes*/
/* */
/*         {% if is_granted("ROLE_ADMIN") %}*/
/*             <a href="{{ path('equipos_new') }}">*/
/*                 <button class="btn btn-default pull-right">Agregar Equipo</button>*/
/*             </a>*/
/*         {% endif %}*/
/*     </h1>*/
/*     <div class="container">*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/* */
/*                 <th>Nombre</th>*/
/*                 <th>Puntos</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for equipo in equipos %}*/
/*                 <tr>*/
/* */
/*                     <td>{{ equipo.nombre }}</td>*/
/*                     <td>{{ equipo.ptos }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             {% if is_granted("ROLE_ADMIN") %}*/
/* */
/*                                 <button class="btn btn-default pull-right">*/
/*                                     <a href="{{ path('equipos_edit', { 'id': equipo.id }) }}" toggle="tooltip"*/
/*                                        title="Visualizar Equipo">*/
/*                                         <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                                 </button>*/
/*                             {% endif %}*/
/* */
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
