<?php

/* MiAppBundle::equipos/index.html.twig */
class __TwigTemplate_d4fc9ec443827f66bc3aec8f02776610651f85b1c491f0bb275f55a76f15c5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::equipos/index.html.twig", 1);
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
        $__internal_e538d43d7ee8725896351a1045d878a4c9ef809b60c20e113dabb5d31f2c6ede = $this->env->getExtension("native_profiler");
        $__internal_e538d43d7ee8725896351a1045d878a4c9ef809b60c20e113dabb5d31f2c6ede->enter($__internal_e538d43d7ee8725896351a1045d878a4c9ef809b60c20e113dabb5d31f2c6ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::equipos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e538d43d7ee8725896351a1045d878a4c9ef809b60c20e113dabb5d31f2c6ede->leave($__internal_e538d43d7ee8725896351a1045d878a4c9ef809b60c20e113dabb5d31f2c6ede_prof);

    }

    // line 8
    public function block_editor($context, array $blocks = array())
    {
        $__internal_f4c029fbb18524d6fdb71595e10c8655902448ebd198e8d9c6cb7f37b76b65dd = $this->env->getExtension("native_profiler");
        $__internal_f4c029fbb18524d6fdb71595e10c8655902448ebd198e8d9c6cb7f37b76b65dd->enter($__internal_f4c029fbb18524d6fdb71595e10c8655902448ebd198e8d9c6cb7f37b76b65dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 9
        echo "    
    <h1 style=\"text-align:center\">Equipos Participantes 
       
             
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("equipos_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Equipo</button></a>
        
       
    </h1>
   
   <div class=\"container\">
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 30
            echo "            <tr>
                
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "ptos", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 37
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
        // line 44
        echo "        </tbody>
    </table>
   </div>
    
";
        
        $__internal_f4c029fbb18524d6fdb71595e10c8655902448ebd198e8d9c6cb7f37b76b65dd->leave($__internal_f4c029fbb18524d6fdb71595e10c8655902448ebd198e8d9c6cb7f37b76b65dd_prof);

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
        return array (  97 => 44,  84 => 37,  77 => 33,  73 => 32,  69 => 30,  65 => 29,  46 => 13,  40 => 9,  34 => 8,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {#{% block stylesheets %}#}*/
/*     {##}*/
/*     {#<link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />#}*/
/* {#{% endblock %}#}*/
/* */
/* {% block editor %}*/
/*     */
/*     <h1 style="text-align:center">Equipos Participantes */
/*        */
/*              */
/*             <a href="{{ path('equipos_new') }}"><button class="btn btn-default pull-right">Agregar Equipo</button></a>*/
/*         */
/*        */
/*     </h1>*/
/*    */
/*    <div class="container">*/
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
/*     */
/* {% endblock %}*/
/* */
