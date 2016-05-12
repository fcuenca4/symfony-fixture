<?php

/* equipos/index.html.twig */
class __TwigTemplate_320d236b53d29a97570af83f14151cc8c28697ec9b1833442d601e8660f51729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84e5918931d424fe0fed09c4f24881c16cf47f26196f9716bb21749e3929bcb8 = $this->env->getExtension("native_profiler");
        $__internal_84e5918931d424fe0fed09c4f24881c16cf47f26196f9716bb21749e3929bcb8->enter($__internal_84e5918931d424fe0fed09c4f24881c16cf47f26196f9716bb21749e3929bcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e5918931d424fe0fed09c4f24881c16cf47f26196f9716bb21749e3929bcb8->leave($__internal_84e5918931d424fe0fed09c4f24881c16cf47f26196f9716bb21749e3929bcb8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b93a3d060d8f7d0425f3b8cca06f814ebe0d08b4ce8206fd971f835d8732962e = $this->env->getExtension("native_profiler");
        $__internal_b93a3d060d8f7d0425f3b8cca06f814ebe0d08b4ce8206fd971f835d8732962e->enter($__internal_b93a3d060d8f7d0425f3b8cca06f814ebe0d08b4ce8206fd971f835d8732962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b93a3d060d8f7d0425f3b8cca06f814ebe0d08b4ce8206fd971f835d8732962e->leave($__internal_b93a3d060d8f7d0425f3b8cca06f814ebe0d08b4ce8206fd971f835d8732962e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3357e3a14635ee1104fd4377275eba49ebe96d37c9b73ddf2671fffbb5a7659 = $this->env->getExtension("native_profiler");
        $__internal_c3357e3a14635ee1104fd4377275eba49ebe96d37c9b73ddf2671fffbb5a7659->enter($__internal_c3357e3a14635ee1104fd4377275eba49ebe96d37c9b73ddf2671fffbb5a7659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3357e3a14635ee1104fd4377275eba49ebe96d37c9b73ddf2671fffbb5a7659->leave($__internal_c3357e3a14635ee1104fd4377275eba49ebe96d37c9b73ddf2671fffbb5a7659_prof);

    }

    public function getTemplateName()
    {
        return "equipos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  103 => 37,  96 => 33,  92 => 32,  88 => 30,  84 => 29,  65 => 13,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
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
