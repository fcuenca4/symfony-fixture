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
        $__internal_65cca31b3f165d5a8ed5b528cf157bbfa71b2cd120f3f982e0fba35f7da85c84 = $this->env->getExtension("native_profiler");
        $__internal_65cca31b3f165d5a8ed5b528cf157bbfa71b2cd120f3f982e0fba35f7da85c84->enter($__internal_65cca31b3f165d5a8ed5b528cf157bbfa71b2cd120f3f982e0fba35f7da85c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65cca31b3f165d5a8ed5b528cf157bbfa71b2cd120f3f982e0fba35f7da85c84->leave($__internal_65cca31b3f165d5a8ed5b528cf157bbfa71b2cd120f3f982e0fba35f7da85c84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2f04117fee109a4189a861a9c1aac5806f4073399a1022f6207ad09b782e7b9 = $this->env->getExtension("native_profiler");
        $__internal_e2f04117fee109a4189a861a9c1aac5806f4073399a1022f6207ad09b782e7b9->enter($__internal_e2f04117fee109a4189a861a9c1aac5806f4073399a1022f6207ad09b782e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2f04117fee109a4189a861a9c1aac5806f4073399a1022f6207ad09b782e7b9->leave($__internal_e2f04117fee109a4189a861a9c1aac5806f4073399a1022f6207ad09b782e7b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a21487d324513305ea6811fdbae20553c2cac6716db4d14c506be56030ef806a = $this->env->getExtension("native_profiler");
        $__internal_a21487d324513305ea6811fdbae20553c2cac6716db4d14c506be56030ef806a->enter($__internal_a21487d324513305ea6811fdbae20553c2cac6716db4d14c506be56030ef806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a21487d324513305ea6811fdbae20553c2cac6716db4d14c506be56030ef806a->leave($__internal_a21487d324513305ea6811fdbae20553c2cac6716db4d14c506be56030ef806a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c2c9e811639967e527a8640f0823357d44da2c7d28b6d07a118222c6ad0532d = $this->env->getExtension("native_profiler");
        $__internal_8c2c9e811639967e527a8640f0823357d44da2c7d28b6d07a118222c6ad0532d->enter($__internal_8c2c9e811639967e527a8640f0823357d44da2c7d28b6d07a118222c6ad0532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c2c9e811639967e527a8640f0823357d44da2c7d28b6d07a118222c6ad0532d->leave($__internal_8c2c9e811639967e527a8640f0823357d44da2c7d28b6d07a118222c6ad0532d_prof);

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
