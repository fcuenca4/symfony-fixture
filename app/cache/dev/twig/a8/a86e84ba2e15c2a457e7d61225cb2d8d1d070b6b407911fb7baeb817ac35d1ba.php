<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6d171fbba08da3efd50ad3b7f8526074e123de7726a2b36462ee52a31b8a149b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_684b353b2a0ca7d45b4c97948bc612c1169f1a4a0b73a3bb677ea824f0d9ac13 = $this->env->getExtension("native_profiler");
        $__internal_684b353b2a0ca7d45b4c97948bc612c1169f1a4a0b73a3bb677ea824f0d9ac13->enter($__internal_684b353b2a0ca7d45b4c97948bc612c1169f1a4a0b73a3bb677ea824f0d9ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_684b353b2a0ca7d45b4c97948bc612c1169f1a4a0b73a3bb677ea824f0d9ac13->leave($__internal_684b353b2a0ca7d45b4c97948bc612c1169f1a4a0b73a3bb677ea824f0d9ac13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c5ca2884401016cd9a93b29ce5c978d4c1e3e6f5f873b3f2ca16e15b0f076ff = $this->env->getExtension("native_profiler");
        $__internal_1c5ca2884401016cd9a93b29ce5c978d4c1e3e6f5f873b3f2ca16e15b0f076ff->enter($__internal_1c5ca2884401016cd9a93b29ce5c978d4c1e3e6f5f873b3f2ca16e15b0f076ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1c5ca2884401016cd9a93b29ce5c978d4c1e3e6f5f873b3f2ca16e15b0f076ff->leave($__internal_1c5ca2884401016cd9a93b29ce5c978d4c1e3e6f5f873b3f2ca16e15b0f076ff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1154c2f789620d3d0effc62e8c79258cfa1725b2156db4c3fe2cdece36d3f854 = $this->env->getExtension("native_profiler");
        $__internal_1154c2f789620d3d0effc62e8c79258cfa1725b2156db4c3fe2cdece36d3f854->enter($__internal_1154c2f789620d3d0effc62e8c79258cfa1725b2156db4c3fe2cdece36d3f854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1154c2f789620d3d0effc62e8c79258cfa1725b2156db4c3fe2cdece36d3f854->leave($__internal_1154c2f789620d3d0effc62e8c79258cfa1725b2156db4c3fe2cdece36d3f854_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4cca748f28f5efa3b8ffa3511ac0d89d3f60cb3061c3bf4d7eb07c8cfaea0ea = $this->env->getExtension("native_profiler");
        $__internal_c4cca748f28f5efa3b8ffa3511ac0d89d3f60cb3061c3bf4d7eb07c8cfaea0ea->enter($__internal_c4cca748f28f5efa3b8ffa3511ac0d89d3f60cb3061c3bf4d7eb07c8cfaea0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c4cca748f28f5efa3b8ffa3511ac0d89d3f60cb3061c3bf4d7eb07c8cfaea0ea->leave($__internal_c4cca748f28f5efa3b8ffa3511ac0d89d3f60cb3061c3bf4d7eb07c8cfaea0ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
