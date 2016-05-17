<?php

/* MiAppBundle::tablaPosiciones.html.twig */
class __TwigTemplate_05f4095838342564ebefca6816504859cecc7c54b8a41ccc7ed1e432c15de107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::tablaPosiciones.html.twig", 1);
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
        $__internal_605beba689bb693ab9586e8ea4f6906479f2bf6dfb40704a652664ee2d493562 = $this->env->getExtension("native_profiler");
        $__internal_605beba689bb693ab9586e8ea4f6906479f2bf6dfb40704a652664ee2d493562->enter($__internal_605beba689bb693ab9586e8ea4f6906479f2bf6dfb40704a652664ee2d493562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::tablaPosiciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605beba689bb693ab9586e8ea4f6906479f2bf6dfb40704a652664ee2d493562->leave($__internal_605beba689bb693ab9586e8ea4f6906479f2bf6dfb40704a652664ee2d493562_prof);

    }

    // line 2
    public function block_editor($context, array $blocks = array())
    {
        $__internal_c31b33ac8378ccb9a64245197a48c1e08b57cdb2080967d3eaac82b4404d27d2 = $this->env->getExtension("native_profiler");
        $__internal_c31b33ac8378ccb9a64245197a48c1e08b57cdb2080967d3eaac82b4404d27d2->enter($__internal_c31b33ac8378ccb9a64245197a48c1e08b57cdb2080967d3eaac82b4404d27d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "ptos", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            ";
            // line 28
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                                <button class=\"btn btn-default pull-right\">
                                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_edit", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                echo "\" toggle=\"tooltip\"
                                       title=\"Visualizar Equipo\">
                                        <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                                </button>
                            ";
            }
            // line 35
            echo "                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_c31b33ac8378ccb9a64245197a48c1e08b57cdb2080967d3eaac82b4404d27d2->leave($__internal_c31b33ac8378ccb9a64245197a48c1e08b57cdb2080967d3eaac82b4404d27d2_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::tablaPosiciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  98 => 35,  90 => 30,  87 => 29,  85 => 28,  79 => 25,  75 => 24,  72 => 23,  68 => 22,  55 => 11,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
/*                 <th>Nombre</th>*/
/*                 <th>Puntos</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for equipo in equipos %}*/
/*                 <tr>*/
/*                     <td>{{ equipo.nombre }}</td>*/
/*                     <td>{{ equipo.ptos }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             {% if is_granted("ROLE_ADMIN") %}*/
/*                                 <button class="btn btn-default pull-right">*/
/*                                     <a href="{{ path('equipos_edit', { 'id': equipo.id }) }}" toggle="tooltip"*/
/*                                        title="Visualizar Equipo">*/
/*                                         <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                                 </button>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
