<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de70762e7ac8aaaf997cd5f3df37c401c4876b03d8ec132bc2dc113da26daac8 extends Twig_Template
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
        $__internal_52ad7de4d12435b17892afbb17ad6cfd812be19b3b253d08e3c0fb73da60fae5 = $this->env->getExtension("native_profiler");
        $__internal_52ad7de4d12435b17892afbb17ad6cfd812be19b3b253d08e3c0fb73da60fae5->enter($__internal_52ad7de4d12435b17892afbb17ad6cfd812be19b3b253d08e3c0fb73da60fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ad7de4d12435b17892afbb17ad6cfd812be19b3b253d08e3c0fb73da60fae5->leave($__internal_52ad7de4d12435b17892afbb17ad6cfd812be19b3b253d08e3c0fb73da60fae5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a0e2738c1697c3cf17bf7558161a9e10db6a3090f5d0879509cb5ae775837ad = $this->env->getExtension("native_profiler");
        $__internal_4a0e2738c1697c3cf17bf7558161a9e10db6a3090f5d0879509cb5ae775837ad->enter($__internal_4a0e2738c1697c3cf17bf7558161a9e10db6a3090f5d0879509cb5ae775837ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a0e2738c1697c3cf17bf7558161a9e10db6a3090f5d0879509cb5ae775837ad->leave($__internal_4a0e2738c1697c3cf17bf7558161a9e10db6a3090f5d0879509cb5ae775837ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20ba124c32b91eb5956447f47501d67696898ef2e6deb0128075a97116bf9365 = $this->env->getExtension("native_profiler");
        $__internal_20ba124c32b91eb5956447f47501d67696898ef2e6deb0128075a97116bf9365->enter($__internal_20ba124c32b91eb5956447f47501d67696898ef2e6deb0128075a97116bf9365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20ba124c32b91eb5956447f47501d67696898ef2e6deb0128075a97116bf9365->leave($__internal_20ba124c32b91eb5956447f47501d67696898ef2e6deb0128075a97116bf9365_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60ab9da8dc9816e7e964f721795ed8b3f10495c6b270d70461e27fffb24feed4 = $this->env->getExtension("native_profiler");
        $__internal_60ab9da8dc9816e7e964f721795ed8b3f10495c6b270d70461e27fffb24feed4->enter($__internal_60ab9da8dc9816e7e964f721795ed8b3f10495c6b270d70461e27fffb24feed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60ab9da8dc9816e7e964f721795ed8b3f10495c6b270d70461e27fffb24feed4->leave($__internal_60ab9da8dc9816e7e964f721795ed8b3f10495c6b270d70461e27fffb24feed4_prof);

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
