<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2979e3e8298549d9f5ee97fb48c37c28788173549edd0068c94c65cc61e6dcfe extends Twig_Template
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
        $__internal_02e68c056584d693519cfcc2ba98121630b37046f2a7a26485c712605ded256e = $this->env->getExtension("native_profiler");
        $__internal_02e68c056584d693519cfcc2ba98121630b37046f2a7a26485c712605ded256e->enter($__internal_02e68c056584d693519cfcc2ba98121630b37046f2a7a26485c712605ded256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02e68c056584d693519cfcc2ba98121630b37046f2a7a26485c712605ded256e->leave($__internal_02e68c056584d693519cfcc2ba98121630b37046f2a7a26485c712605ded256e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e77e42ee31cfce050031a578f10b64dfc037cb107634c9080f2a02c0ce5decb = $this->env->getExtension("native_profiler");
        $__internal_7e77e42ee31cfce050031a578f10b64dfc037cb107634c9080f2a02c0ce5decb->enter($__internal_7e77e42ee31cfce050031a578f10b64dfc037cb107634c9080f2a02c0ce5decb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e77e42ee31cfce050031a578f10b64dfc037cb107634c9080f2a02c0ce5decb->leave($__internal_7e77e42ee31cfce050031a578f10b64dfc037cb107634c9080f2a02c0ce5decb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5f8d0b4588d2892a1bee6c9e6aec4076b67585d7c0f2189207e4cab4042b23e = $this->env->getExtension("native_profiler");
        $__internal_b5f8d0b4588d2892a1bee6c9e6aec4076b67585d7c0f2189207e4cab4042b23e->enter($__internal_b5f8d0b4588d2892a1bee6c9e6aec4076b67585d7c0f2189207e4cab4042b23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5f8d0b4588d2892a1bee6c9e6aec4076b67585d7c0f2189207e4cab4042b23e->leave($__internal_b5f8d0b4588d2892a1bee6c9e6aec4076b67585d7c0f2189207e4cab4042b23e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_566b5029c7f55f9b839d0bd94c9b6daa10d09679a6b6c37307b201f289f92653 = $this->env->getExtension("native_profiler");
        $__internal_566b5029c7f55f9b839d0bd94c9b6daa10d09679a6b6c37307b201f289f92653->enter($__internal_566b5029c7f55f9b839d0bd94c9b6daa10d09679a6b6c37307b201f289f92653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_566b5029c7f55f9b839d0bd94c9b6daa10d09679a6b6c37307b201f289f92653->leave($__internal_566b5029c7f55f9b839d0bd94c9b6daa10d09679a6b6c37307b201f289f92653_prof);

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
