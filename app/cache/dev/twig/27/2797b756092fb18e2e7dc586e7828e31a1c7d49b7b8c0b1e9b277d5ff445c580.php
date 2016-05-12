<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bfbf38258789561a145ae23662485fd462cb557ef23c83c1f6b100f7f51c1c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2bf42bdd9d62269367fe7680e17938d134f4936ff95496b3dc8485292fd7eb85 = $this->env->getExtension("native_profiler");
        $__internal_2bf42bdd9d62269367fe7680e17938d134f4936ff95496b3dc8485292fd7eb85->enter($__internal_2bf42bdd9d62269367fe7680e17938d134f4936ff95496b3dc8485292fd7eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf42bdd9d62269367fe7680e17938d134f4936ff95496b3dc8485292fd7eb85->leave($__internal_2bf42bdd9d62269367fe7680e17938d134f4936ff95496b3dc8485292fd7eb85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ebfe1c66f5e066e20488ce55a78953e83182e7f0b6305acb4586799d327ab5d = $this->env->getExtension("native_profiler");
        $__internal_2ebfe1c66f5e066e20488ce55a78953e83182e7f0b6305acb4586799d327ab5d->enter($__internal_2ebfe1c66f5e066e20488ce55a78953e83182e7f0b6305acb4586799d327ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ebfe1c66f5e066e20488ce55a78953e83182e7f0b6305acb4586799d327ab5d->leave($__internal_2ebfe1c66f5e066e20488ce55a78953e83182e7f0b6305acb4586799d327ab5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11782f71624966e1bb14d10ded591247ee16cc799af26acc701e580cb0bb18b2 = $this->env->getExtension("native_profiler");
        $__internal_11782f71624966e1bb14d10ded591247ee16cc799af26acc701e580cb0bb18b2->enter($__internal_11782f71624966e1bb14d10ded591247ee16cc799af26acc701e580cb0bb18b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11782f71624966e1bb14d10ded591247ee16cc799af26acc701e580cb0bb18b2->leave($__internal_11782f71624966e1bb14d10ded591247ee16cc799af26acc701e580cb0bb18b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96a0f27832b5e8ff3527353c07c946e0b4d7275c251f0ed8d3c1948258a65d56 = $this->env->getExtension("native_profiler");
        $__internal_96a0f27832b5e8ff3527353c07c946e0b4d7275c251f0ed8d3c1948258a65d56->enter($__internal_96a0f27832b5e8ff3527353c07c946e0b4d7275c251f0ed8d3c1948258a65d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96a0f27832b5e8ff3527353c07c946e0b4d7275c251f0ed8d3c1948258a65d56->leave($__internal_96a0f27832b5e8ff3527353c07c946e0b4d7275c251f0ed8d3c1948258a65d56_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
