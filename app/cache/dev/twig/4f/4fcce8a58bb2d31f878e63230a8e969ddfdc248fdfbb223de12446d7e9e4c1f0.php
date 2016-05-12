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
        $__internal_44cab2ca05d13d8fe45589c7b3f435e51373558187a4501108494646f12bff26 = $this->env->getExtension("native_profiler");
        $__internal_44cab2ca05d13d8fe45589c7b3f435e51373558187a4501108494646f12bff26->enter($__internal_44cab2ca05d13d8fe45589c7b3f435e51373558187a4501108494646f12bff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44cab2ca05d13d8fe45589c7b3f435e51373558187a4501108494646f12bff26->leave($__internal_44cab2ca05d13d8fe45589c7b3f435e51373558187a4501108494646f12bff26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f506728b0945fbdd2f05dd1da79c0603a9121b7c825689ea7d201bf5f0d7a257 = $this->env->getExtension("native_profiler");
        $__internal_f506728b0945fbdd2f05dd1da79c0603a9121b7c825689ea7d201bf5f0d7a257->enter($__internal_f506728b0945fbdd2f05dd1da79c0603a9121b7c825689ea7d201bf5f0d7a257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f506728b0945fbdd2f05dd1da79c0603a9121b7c825689ea7d201bf5f0d7a257->leave($__internal_f506728b0945fbdd2f05dd1da79c0603a9121b7c825689ea7d201bf5f0d7a257_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8db6e5176cc8ff64a83353b665a74150caadc5db6d32c46f99f4df16b3397c5 = $this->env->getExtension("native_profiler");
        $__internal_a8db6e5176cc8ff64a83353b665a74150caadc5db6d32c46f99f4df16b3397c5->enter($__internal_a8db6e5176cc8ff64a83353b665a74150caadc5db6d32c46f99f4df16b3397c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a8db6e5176cc8ff64a83353b665a74150caadc5db6d32c46f99f4df16b3397c5->leave($__internal_a8db6e5176cc8ff64a83353b665a74150caadc5db6d32c46f99f4df16b3397c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24cacabb12430689aa0450641361de6c127fd1cdf5cf3e29ba582338e15f0753 = $this->env->getExtension("native_profiler");
        $__internal_24cacabb12430689aa0450641361de6c127fd1cdf5cf3e29ba582338e15f0753->enter($__internal_24cacabb12430689aa0450641361de6c127fd1cdf5cf3e29ba582338e15f0753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24cacabb12430689aa0450641361de6c127fd1cdf5cf3e29ba582338e15f0753->leave($__internal_24cacabb12430689aa0450641361de6c127fd1cdf5cf3e29ba582338e15f0753_prof);

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
