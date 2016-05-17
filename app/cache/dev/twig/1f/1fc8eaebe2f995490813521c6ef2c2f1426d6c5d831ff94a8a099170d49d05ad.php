<?php

/* MiAppBundle::arbitros/index.html.twig */
class __TwigTemplate_7eb963ff3e37a39caf82561e7cd6792bd3e1baefe4b4ad762ff801ba2602730d extends Twig_Template
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
        $__internal_d7d0c42e69864d286a118a07b2726455a061011753e814dcfbdcf5b1a046431b = $this->env->getExtension("native_profiler");
        $__internal_d7d0c42e69864d286a118a07b2726455a061011753e814dcfbdcf5b1a046431b->enter($__internal_d7d0c42e69864d286a118a07b2726455a061011753e814dcfbdcf5b1a046431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::arbitros/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d0c42e69864d286a118a07b2726455a061011753e814dcfbdcf5b1a046431b->leave($__internal_d7d0c42e69864d286a118a07b2726455a061011753e814dcfbdcf5b1a046431b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bae99da285511efee9fca3b97eeebb4b4b8fe3f5337c87e00a3d2bac25e218c = $this->env->getExtension("native_profiler");
        $__internal_8bae99da285511efee9fca3b97eeebb4b4b8fe3f5337c87e00a3d2bac25e218c->enter($__internal_8bae99da285511efee9fca3b97eeebb4b4b8fe3f5337c87e00a3d2bac25e218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\" />
";
        
        $__internal_8bae99da285511efee9fca3b97eeebb4b4b8fe3f5337c87e00a3d2bac25e218c->leave($__internal_8bae99da285511efee9fca3b97eeebb4b4b8fe3f5337c87e00a3d2bac25e218c_prof);

    }

    // line 8
    public function block_editor($context, array $blocks = array())
    {
        $__internal_76a48af730af64629dd50800d8f9fbaa9b581e9978834fffac08f31ba2ed4d4c = $this->env->getExtension("native_profiler");
        $__internal_76a48af730af64629dd50800d8f9fbaa9b581e9978834fffac08f31ba2ed4d4c->enter($__internal_76a48af730af64629dd50800d8f9fbaa9b581e9978834fffac08f31ba2ed4d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

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
        
        $__internal_76a48af730af64629dd50800d8f9fbaa9b581e9978834fffac08f31ba2ed4d4c->leave($__internal_76a48af730af64629dd50800d8f9fbaa9b581e9978834fffac08f31ba2ed4d4c_prof);

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
