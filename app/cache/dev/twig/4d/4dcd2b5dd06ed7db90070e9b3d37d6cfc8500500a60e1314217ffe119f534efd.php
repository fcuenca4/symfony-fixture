<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cd41b2ab83c0b360005f6fe56676c4a9d81c9772b9bcae0f796c1d35089ba4aa extends Twig_Template
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
        $__internal_e1d1cee570bc4a3806e16f8ac65a26ae038bc1f6b975c94d72d05d84e63dbb4b = $this->env->getExtension("native_profiler");
        $__internal_e1d1cee570bc4a3806e16f8ac65a26ae038bc1f6b975c94d72d05d84e63dbb4b->enter($__internal_e1d1cee570bc4a3806e16f8ac65a26ae038bc1f6b975c94d72d05d84e63dbb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d1cee570bc4a3806e16f8ac65a26ae038bc1f6b975c94d72d05d84e63dbb4b->leave($__internal_e1d1cee570bc4a3806e16f8ac65a26ae038bc1f6b975c94d72d05d84e63dbb4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39f225ea2d3e83d6e82f2d1ab63fa3131fdcac73a381d34eb6ae0665d9f0a6b3 = $this->env->getExtension("native_profiler");
        $__internal_39f225ea2d3e83d6e82f2d1ab63fa3131fdcac73a381d34eb6ae0665d9f0a6b3->enter($__internal_39f225ea2d3e83d6e82f2d1ab63fa3131fdcac73a381d34eb6ae0665d9f0a6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39f225ea2d3e83d6e82f2d1ab63fa3131fdcac73a381d34eb6ae0665d9f0a6b3->leave($__internal_39f225ea2d3e83d6e82f2d1ab63fa3131fdcac73a381d34eb6ae0665d9f0a6b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_747de5c79461f743e97854294daee6df73f964fbd935b1182ed8e085ec8130be = $this->env->getExtension("native_profiler");
        $__internal_747de5c79461f743e97854294daee6df73f964fbd935b1182ed8e085ec8130be->enter($__internal_747de5c79461f743e97854294daee6df73f964fbd935b1182ed8e085ec8130be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_747de5c79461f743e97854294daee6df73f964fbd935b1182ed8e085ec8130be->leave($__internal_747de5c79461f743e97854294daee6df73f964fbd935b1182ed8e085ec8130be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28277a830855f5ad2cbfbc7c3d97eea7875b03577bfe1af1f99b6369018cecdc = $this->env->getExtension("native_profiler");
        $__internal_28277a830855f5ad2cbfbc7c3d97eea7875b03577bfe1af1f99b6369018cecdc->enter($__internal_28277a830855f5ad2cbfbc7c3d97eea7875b03577bfe1af1f99b6369018cecdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28277a830855f5ad2cbfbc7c3d97eea7875b03577bfe1af1f99b6369018cecdc->leave($__internal_28277a830855f5ad2cbfbc7c3d97eea7875b03577bfe1af1f99b6369018cecdc_prof);

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
