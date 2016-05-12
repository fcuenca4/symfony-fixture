<?php

/* equipos/index.html.twig */
class __TwigTemplate_173f4befb2145063cd03cc725f7f93fe73acaf18eb921da10672fe16afa94ccd extends Twig_Template
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
        $__internal_670ae00184daaa4179015e3610c09ab4f6a3a14eea4493d8b3f5c33108d49c87 = $this->env->getExtension("native_profiler");
        $__internal_670ae00184daaa4179015e3610c09ab4f6a3a14eea4493d8b3f5c33108d49c87->enter($__internal_670ae00184daaa4179015e3610c09ab4f6a3a14eea4493d8b3f5c33108d49c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670ae00184daaa4179015e3610c09ab4f6a3a14eea4493d8b3f5c33108d49c87->leave($__internal_670ae00184daaa4179015e3610c09ab4f6a3a14eea4493d8b3f5c33108d49c87_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b8083497d9b9272cadf7eaa771e11529501bf27cc934046fbc76d2efff319b4 = $this->env->getExtension("native_profiler");
        $__internal_2b8083497d9b9272cadf7eaa771e11529501bf27cc934046fbc76d2efff319b4->enter($__internal_2b8083497d9b9272cadf7eaa771e11529501bf27cc934046fbc76d2efff319b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_2b8083497d9b9272cadf7eaa771e11529501bf27cc934046fbc76d2efff319b4->leave($__internal_2b8083497d9b9272cadf7eaa771e11529501bf27cc934046fbc76d2efff319b4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1870c3dfff77791938d35a01b85afd89bfed9038bc27786e03b89005e551975 = $this->env->getExtension("native_profiler");
        $__internal_f1870c3dfff77791938d35a01b85afd89bfed9038bc27786e03b89005e551975->enter($__internal_f1870c3dfff77791938d35a01b85afd89bfed9038bc27786e03b89005e551975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Equipos Participantes</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ptos</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_show", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "id", array()), "html", null, true);
            echo "</a></td>
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
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_show", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipos_edit", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("equipos_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f1870c3dfff77791938d35a01b85afd89bfed9038bc27786e03b89005e551975->leave($__internal_f1870c3dfff77791938d35a01b85afd89bfed9038bc27786e03b89005e551975_prof);

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
        return array (  122 => 43,  115 => 38,  103 => 32,  97 => 29,  90 => 25,  86 => 24,  80 => 23,  77 => 22,  73 => 21,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/navpadding.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>Equipos Participantes</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Ptos</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for equipo in equipos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('equipos_show', { 'id': equipo.id }) }}">{{ equipo.id }}</a></td>*/
/*                 <td>{{ equipo.nombre }}</td>*/
/*                 <td>{{ equipo.ptos }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('equipos_show', { 'id': equipo.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('equipos_edit', { 'id': equipo.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('equipos_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
