<?php

/* equipos/show.html.twig */
class __TwigTemplate_4e848bfa553d57918de7f0ab668c4517f196f3cc094dffaf31909d129336b685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipos/show.html.twig", 1);
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
        $__internal_f8c659355521c46df42b9dd8113b352983c2f04f3c2177fbf2d7f5c04289f5e3 = $this->env->getExtension("native_profiler");
        $__internal_f8c659355521c46df42b9dd8113b352983c2f04f3c2177fbf2d7f5c04289f5e3->enter($__internal_f8c659355521c46df42b9dd8113b352983c2f04f3c2177fbf2d7f5c04289f5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c659355521c46df42b9dd8113b352983c2f04f3c2177fbf2d7f5c04289f5e3->leave($__internal_f8c659355521c46df42b9dd8113b352983c2f04f3c2177fbf2d7f5c04289f5e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5edfbe6bb5112b4533708305cb582212a33ab97461edee20f55773d6bfe3d663 = $this->env->getExtension("native_profiler");
        $__internal_5edfbe6bb5112b4533708305cb582212a33ab97461edee20f55773d6bfe3d663->enter($__internal_5edfbe6bb5112b4533708305cb582212a33ab97461edee20f55773d6bfe3d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Equipos</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ptos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["equipo"]) ? $context["equipo"] : $this->getContext($context, "equipo")), "ptos", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("equipos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5edfbe6bb5112b4533708305cb582212a33ab97461edee20f55773d6bfe3d663->leave($__internal_5edfbe6bb5112b4533708305cb582212a33ab97461edee20f55773d6bfe3d663_prof);

    }

    public function getTemplateName()
    {
        return "equipos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Equipos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ equipo.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ equipo.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ptos</th>*/
/*                 <td>{{ equipo.ptos }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('equipos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
