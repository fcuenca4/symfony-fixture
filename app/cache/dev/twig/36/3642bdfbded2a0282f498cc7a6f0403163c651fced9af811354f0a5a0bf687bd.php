<?php

/* jugadores/show.html.twig */
class __TwigTemplate_4f12947aec1b6d60c973c081c9b32105ead41c045dd078f8c9c5b7bf8eba6bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jugadores/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_146daa1941fb321c343c63743c09c140ea7b33682be3e7608d36bd7267088753 = $this->env->getExtension("native_profiler");
        $__internal_146daa1941fb321c343c63743c09c140ea7b33682be3e7608d36bd7267088753->enter($__internal_146daa1941fb321c343c63743c09c140ea7b33682be3e7608d36bd7267088753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jugadores/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146daa1941fb321c343c63743c09c140ea7b33682be3e7608d36bd7267088753->leave($__internal_146daa1941fb321c343c63743c09c140ea7b33682be3e7608d36bd7267088753_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5087bf85e36eec88e3bd1f320a7368679a05cd46698bef61165dcd9d8dadbce2 = $this->env->getExtension("native_profiler");
        $__internal_5087bf85e36eec88e3bd1f320a7368679a05cd46698bef61165dcd9d8dadbce2->enter($__internal_5087bf85e36eec88e3bd1f320a7368679a05cd46698bef61165dcd9d8dadbce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Jugadores</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugadore"]) ? $context["jugadore"] : $this->getContext($context, "jugadore")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugadore"]) ? $context["jugadore"] : $this->getContext($context, "jugadore")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugadore"]) ? $context["jugadore"] : $this->getContext($context, "jugadore")), "edad", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("jugadores_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jugadores_edit", array("id" => $this->getAttribute((isset($context["jugadore"]) ? $context["jugadore"] : $this->getContext($context, "jugadore")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5087bf85e36eec88e3bd1f320a7368679a05cd46698bef61165dcd9d8dadbce2->leave($__internal_5087bf85e36eec88e3bd1f320a7368679a05cd46698bef61165dcd9d8dadbce2_prof);

    }

    public function getTemplateName()
    {
        return "jugadores/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Jugadores</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ jugadore.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ jugadore.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Edad</th>*/
/*                 <td>{{ jugadore.edad }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('jugadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('jugadores_edit', { 'id': jugadore.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
