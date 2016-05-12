<?php

/* MiAppBundle::arbitros/index.html.twig */
class __TwigTemplate_d74e660d7e0384e98943ef7cafe424427ccbbd4cc2c2c70c6e11f5ccbbc2c6a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::arbitros/index.html.twig", 1);
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
        $__internal_59cf2f19d86533e0ac0c258c02686f1c6d43eb1bc2b934d861ac5ca4455531f3 = $this->env->getExtension("native_profiler");
        $__internal_59cf2f19d86533e0ac0c258c02686f1c6d43eb1bc2b934d861ac5ca4455531f3->enter($__internal_59cf2f19d86533e0ac0c258c02686f1c6d43eb1bc2b934d861ac5ca4455531f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::arbitros/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59cf2f19d86533e0ac0c258c02686f1c6d43eb1bc2b934d861ac5ca4455531f3->leave($__internal_59cf2f19d86533e0ac0c258c02686f1c6d43eb1bc2b934d861ac5ca4455531f3_prof);

    }

    // line 8
    public function block_editor($context, array $blocks = array())
    {
        $__internal_795b43c47b9feb2fdb9b32be9c9a8895014138397ec040069ef797393bb40252 = $this->env->getExtension("native_profiler");
        $__internal_795b43c47b9feb2fdb9b32be9c9a8895014138397ec040069ef797393bb40252->enter($__internal_795b43c47b9feb2fdb9b32be9c9a8895014138397ec040069ef797393bb40252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 9
        echo "   

    <h1 style=\"text-align:center\">Arbitros
       
             
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("arbitros_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Arbitro</button></a>
        
       
    </h1>

   <div class=\"container\">
    <table class=\"table table-hover\">
        <thead>
            <tr>                
                <th>Nombre</th>
                <th>Edad</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arbitros"]) ? $context["arbitros"] : $this->getContext($context, "arbitros")));
        foreach ($context['_seq'] as $context["_key"] => $context["arbitro"]) {
            // line 30
            echo "            <tr>
                
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["arbitro"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["arbitro"], "edad", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arbitros_edit", array("id" => $this->getAttribute($context["arbitro"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Arbitro\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arbitro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

   </div>
";
        
        $__internal_795b43c47b9feb2fdb9b32be9c9a8895014138397ec040069ef797393bb40252->leave($__internal_795b43c47b9feb2fdb9b32be9c9a8895014138397ec040069ef797393bb40252_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::arbitros/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  84 => 37,  77 => 33,  73 => 32,  69 => 30,  65 => 29,  47 => 14,  40 => 9,  34 => 8,  11 => 1,);
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
/*    */
/* */
/*     <h1 style="text-align:center">Arbitros*/
/*        */
/*              */
/*             <a href="{{ path('arbitros_new') }}"><button class="btn btn-default pull-right">Agregar Arbitro</button></a>*/
/*         */
/*        */
/*     </h1>*/
/* */
/*    <div class="container">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>                */
/*                 <th>Nombre</th>*/
/*                 <th>Edad</th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for arbitro in arbitros %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ arbitro.nombre }}</td>*/
/*                 <td>{{ arbitro.edad }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('arbitros_edit', { 'id': arbitro.id }) }}" toggle="tooltip" title="Visualizar Arbitro">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*    </div>*/
/* {% endblock %}*/
/* */
