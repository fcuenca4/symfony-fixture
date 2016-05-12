<?php

/* arbitros/index.html.twig */
class __TwigTemplate_c3e014468357d6a8e6fb3e6c9236f13750f050d8494ec12b070831835a273588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "arbitros/index.html.twig", 1);
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
        $__internal_57e8fb4813821afc694f75c97cbe5844273fb249ce788d6189ad0525a9149868 = $this->env->getExtension("native_profiler");
        $__internal_57e8fb4813821afc694f75c97cbe5844273fb249ce788d6189ad0525a9149868->enter($__internal_57e8fb4813821afc694f75c97cbe5844273fb249ce788d6189ad0525a9149868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arbitros/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e8fb4813821afc694f75c97cbe5844273fb249ce788d6189ad0525a9149868->leave($__internal_57e8fb4813821afc694f75c97cbe5844273fb249ce788d6189ad0525a9149868_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0fa58310f600351c6f520263d0a7af2f14bea7856a80fc18687111c7fb4375a = $this->env->getExtension("native_profiler");
        $__internal_a0fa58310f600351c6f520263d0a7af2f14bea7856a80fc18687111c7fb4375a->enter($__internal_a0fa58310f600351c6f520263d0a7af2f14bea7856a80fc18687111c7fb4375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_a0fa58310f600351c6f520263d0a7af2f14bea7856a80fc18687111c7fb4375a->leave($__internal_a0fa58310f600351c6f520263d0a7af2f14bea7856a80fc18687111c7fb4375a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1236501b14fe74933a01f15d55219fbf69e40564a0c5bc141627035c3936d06 = $this->env->getExtension("native_profiler");
        $__internal_e1236501b14fe74933a01f15d55219fbf69e40564a0c5bc141627035c3936d06->enter($__internal_e1236501b14fe74933a01f15d55219fbf69e40564a0c5bc141627035c3936d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1236501b14fe74933a01f15d55219fbf69e40564a0c5bc141627035c3936d06->leave($__internal_e1236501b14fe74933a01f15d55219fbf69e40564a0c5bc141627035c3936d06_prof);

    }

    public function getTemplateName()
    {
        return "arbitros/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  103 => 37,  96 => 33,  92 => 32,  88 => 30,  84 => 29,  66 => 14,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
