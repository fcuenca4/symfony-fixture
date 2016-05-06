<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7aeff89d59ce4857c1e7102b77a02301fe93246091d260dbcab17b948be5cc81 extends Twig_Template
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
        $__internal_bfec730f137f577d968b5e81ca594575b201052d0c14294de1fd65a7f92a76db = $this->env->getExtension("native_profiler");
        $__internal_bfec730f137f577d968b5e81ca594575b201052d0c14294de1fd65a7f92a76db->enter($__internal_bfec730f137f577d968b5e81ca594575b201052d0c14294de1fd65a7f92a76db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfec730f137f577d968b5e81ca594575b201052d0c14294de1fd65a7f92a76db->leave($__internal_bfec730f137f577d968b5e81ca594575b201052d0c14294de1fd65a7f92a76db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e12ce6077058db2e40088327ecfa8e2543c5affb2d4ca16a7d2035d3105ea524 = $this->env->getExtension("native_profiler");
        $__internal_e12ce6077058db2e40088327ecfa8e2543c5affb2d4ca16a7d2035d3105ea524->enter($__internal_e12ce6077058db2e40088327ecfa8e2543c5affb2d4ca16a7d2035d3105ea524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e12ce6077058db2e40088327ecfa8e2543c5affb2d4ca16a7d2035d3105ea524->leave($__internal_e12ce6077058db2e40088327ecfa8e2543c5affb2d4ca16a7d2035d3105ea524_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61a1a7a59128bcb695ac9f4813b04705632f7fabe2765e8e496da3a1f602929a = $this->env->getExtension("native_profiler");
        $__internal_61a1a7a59128bcb695ac9f4813b04705632f7fabe2765e8e496da3a1f602929a->enter($__internal_61a1a7a59128bcb695ac9f4813b04705632f7fabe2765e8e496da3a1f602929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61a1a7a59128bcb695ac9f4813b04705632f7fabe2765e8e496da3a1f602929a->leave($__internal_61a1a7a59128bcb695ac9f4813b04705632f7fabe2765e8e496da3a1f602929a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19fe4304e960022fa0ffdea4f7372404d600a5dc2f6ee217ca43148f3cdafbd9 = $this->env->getExtension("native_profiler");
        $__internal_19fe4304e960022fa0ffdea4f7372404d600a5dc2f6ee217ca43148f3cdafbd9->enter($__internal_19fe4304e960022fa0ffdea4f7372404d600a5dc2f6ee217ca43148f3cdafbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19fe4304e960022fa0ffdea4f7372404d600a5dc2f6ee217ca43148f3cdafbd9->leave($__internal_19fe4304e960022fa0ffdea4f7372404d600a5dc2f6ee217ca43148f3cdafbd9_prof);

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
