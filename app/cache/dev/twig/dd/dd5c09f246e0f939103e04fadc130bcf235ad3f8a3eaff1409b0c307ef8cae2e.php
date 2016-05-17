<?php

/* MiAppBundle::arbitros/index.html.twig */
class __TwigTemplate_87d4c6f9916e9a940a4afd1f8043d805a306633175b246bf5284f2e9bd277817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::arbitros/index.html.twig", 1);
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
        $__internal_1198a60f581f2d763b9f07d0495d0c9e234fa3e57c703f84e69c9221abcf4c22 = $this->env->getExtension("native_profiler");
        $__internal_1198a60f581f2d763b9f07d0495d0c9e234fa3e57c703f84e69c9221abcf4c22->enter($__internal_1198a60f581f2d763b9f07d0495d0c9e234fa3e57c703f84e69c9221abcf4c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::arbitros/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1198a60f581f2d763b9f07d0495d0c9e234fa3e57c703f84e69c9221abcf4c22->leave($__internal_1198a60f581f2d763b9f07d0495d0c9e234fa3e57c703f84e69c9221abcf4c22_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70bb0dab114964a35131f6370c28e0b7cea3aa6df360535433009588d9da2689 = $this->env->getExtension("native_profiler");
        $__internal_70bb0dab114964a35131f6370c28e0b7cea3aa6df360535433009588d9da2689->enter($__internal_70bb0dab114964a35131f6370c28e0b7cea3aa6df360535433009588d9da2689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_70bb0dab114964a35131f6370c28e0b7cea3aa6df360535433009588d9da2689->leave($__internal_70bb0dab114964a35131f6370c28e0b7cea3aa6df360535433009588d9da2689_prof);

    }

    // line 8
    public function block_editor($context, array $blocks = array())
    {
        $__internal_4d0b9c8fa0dcdbeafeb47e75fc7282c582b6da14d9cbac840d2aefca3b73be39 = $this->env->getExtension("native_profiler");
        $__internal_4d0b9c8fa0dcdbeafeb47e75fc7282c582b6da14d9cbac840d2aefca3b73be39->enter($__internal_4d0b9c8fa0dcdbeafeb47e75fc7282c582b6da14d9cbac840d2aefca3b73be39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 9
        echo "\t<br>
\t<br>
\t<br>

   <div class=\"container\" style=\"background-color: white;\">
    <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold \">
\t\tArbitros del Campeonato      
    </h1>
\t<br>
    <table class=\"table table-hover\">
        <thead>
            <tr>                
                <th>Nombre</th>
                <th>Edad</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arbitros"]) ? $context["arbitros"] : $this->getContext($context, "arbitros")));
        foreach ($context['_seq'] as $context["_key"] => $context["arbitro"]) {
            // line 28
            echo "            <tr>
                
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["arbitro"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["arbitro"], "edad", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 35
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
        // line 42
        echo "        </tbody>
    </table>

    </div>
    <br>
\t<div>
      <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("arbitros_new");
        echo "\">
\t\t<button class=\"btn btn-default pull-left\">Agregar Arbitro</button>
\t  </a>  
\t</div>
";
        
        $__internal_4d0b9c8fa0dcdbeafeb47e75fc7282c582b6da14d9cbac840d2aefca3b73be39->leave($__internal_4d0b9c8fa0dcdbeafeb47e75fc7282c582b6da14d9cbac840d2aefca3b73be39_prof);

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
        return array (  118 => 48,  110 => 42,  97 => 35,  90 => 31,  86 => 30,  82 => 28,  78 => 27,  58 => 9,  52 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />*/
/* {% endblock %}*/
/* */
/* {% block editor %}*/
/* 	<br>*/
/* 	<br>*/
/* 	<br>*/
/* */
/*    <div class="container" style="background-color: white;">*/
/*     <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold ">*/
/* 		Arbitros del Campeonato      */
/*     </h1>*/
/* 	<br>*/
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
/*     </div>*/
/*     <br>*/
/* 	<div>*/
/*       <a href="{{ path('arbitros_new') }}">*/
/* 		<button class="btn btn-default pull-left">Agregar Arbitro</button>*/
/* 	  </a>  */
/* 	</div>*/
/* {% endblock %}*/
/* */
