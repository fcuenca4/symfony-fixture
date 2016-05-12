<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d60cfaa3b8c394405435ed2ee8a0b6ccb50b4961727051a2e64c4ef14e7d618c extends Twig_Template
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
        $__internal_8b7803a7fe4992aacb1ea8ab41ab03e51a48f04b2c1f59c63de00dc402e66604 = $this->env->getExtension("native_profiler");
        $__internal_8b7803a7fe4992aacb1ea8ab41ab03e51a48f04b2c1f59c63de00dc402e66604->enter($__internal_8b7803a7fe4992aacb1ea8ab41ab03e51a48f04b2c1f59c63de00dc402e66604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7803a7fe4992aacb1ea8ab41ab03e51a48f04b2c1f59c63de00dc402e66604->leave($__internal_8b7803a7fe4992aacb1ea8ab41ab03e51a48f04b2c1f59c63de00dc402e66604_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fba733936cab48e2ad2226ee414d7fa3ab7b9267322ced3fde81e33852fc226 = $this->env->getExtension("native_profiler");
        $__internal_3fba733936cab48e2ad2226ee414d7fa3ab7b9267322ced3fde81e33852fc226->enter($__internal_3fba733936cab48e2ad2226ee414d7fa3ab7b9267322ced3fde81e33852fc226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fba733936cab48e2ad2226ee414d7fa3ab7b9267322ced3fde81e33852fc226->leave($__internal_3fba733936cab48e2ad2226ee414d7fa3ab7b9267322ced3fde81e33852fc226_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b48d5df1a3a4e4f4d592d99937d6442c5b8e10acc1c329c6fbbf7b3eecc9691 = $this->env->getExtension("native_profiler");
        $__internal_3b48d5df1a3a4e4f4d592d99937d6442c5b8e10acc1c329c6fbbf7b3eecc9691->enter($__internal_3b48d5df1a3a4e4f4d592d99937d6442c5b8e10acc1c329c6fbbf7b3eecc9691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b48d5df1a3a4e4f4d592d99937d6442c5b8e10acc1c329c6fbbf7b3eecc9691->leave($__internal_3b48d5df1a3a4e4f4d592d99937d6442c5b8e10acc1c329c6fbbf7b3eecc9691_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_152732c060a086c452cbd3a58d9aa94e19e1935230ac9fd3616d0d7e07cf685b = $this->env->getExtension("native_profiler");
        $__internal_152732c060a086c452cbd3a58d9aa94e19e1935230ac9fd3616d0d7e07cf685b->enter($__internal_152732c060a086c452cbd3a58d9aa94e19e1935230ac9fd3616d0d7e07cf685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_152732c060a086c452cbd3a58d9aa94e19e1935230ac9fd3616d0d7e07cf685b->leave($__internal_152732c060a086c452cbd3a58d9aa94e19e1935230ac9fd3616d0d7e07cf685b_prof);

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
