<?php

/* MiAppBundle::layout.html.twig */
class __TwigTemplate_225921c6684f58190a21fbaeb5d94247f71b81f4c953c366856877fe7e5a0fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MiAppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39715f8e95fc05ee5956c7ecfc7fbc06a47821156a38555bef8932a2573c502e = $this->env->getExtension("native_profiler");
        $__internal_39715f8e95fc05ee5956c7ecfc7fbc06a47821156a38555bef8932a2573c502e->enter($__internal_39715f8e95fc05ee5956c7ecfc7fbc06a47821156a38555bef8932a2573c502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39715f8e95fc05ee5956c7ecfc7fbc06a47821156a38555bef8932a2573c502e->leave($__internal_39715f8e95fc05ee5956c7ecfc7fbc06a47821156a38555bef8932a2573c502e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b82601ceea5a151932e3c684c522ed5809e5c998502ffe1f1283b074ab40aaca = $this->env->getExtension("native_profiler");
        $__internal_b82601ceea5a151932e3c684c522ed5809e5c998502ffe1f1283b074ab40aaca->enter($__internal_b82601ceea5a151932e3c684c522ed5809e5c998502ffe1f1283b074ab40aaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
";
        
        $__internal_b82601ceea5a151932e3c684c522ed5809e5c998502ffe1f1283b074ab40aaca->leave($__internal_b82601ceea5a151932e3c684c522ed5809e5c998502ffe1f1283b074ab40aaca_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd1da8dc93390e260b3aab05be3d9eae7bf2d3e451f14c2ed72b49ddd9f6d3a8 = $this->env->getExtension("native_profiler");
        $__internal_bd1da8dc93390e260b3aab05be3d9eae7bf2d3e451f14c2ed72b49ddd9f6d3a8->enter($__internal_bd1da8dc93390e260b3aab05be3d9eae7bf2d3e451f14c2ed72b49ddd9f6d3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd1da8dc93390e260b3aab05be3d9eae7bf2d3e451f14c2ed72b49ddd9f6d3a8->leave($__internal_bd1da8dc93390e260b3aab05be3d9eae7bf2d3e451f14c2ed72b49ddd9f6d3a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75495bbab8ab15c49cf8e4e4ec36b597d8eb7568b54489eb0dbcab60964a1793 = $this->env->getExtension("native_profiler");
        $__internal_75495bbab8ab15c49cf8e4e4ec36b597d8eb7568b54489eb0dbcab60964a1793->enter($__internal_75495bbab8ab15c49cf8e4e4ec36b597d8eb7568b54489eb0dbcab60964a1793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_75495bbab8ab15c49cf8e4e4ec36b597d8eb7568b54489eb0dbcab60964a1793->leave($__internal_75495bbab8ab15c49cf8e4e4ec36b597d8eb7568b54489eb0dbcab60964a1793_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 11,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet">*/
/* <link href="{{ asset('bundles/miapp/css/bootstrap-responsive.css') }}" type="text/css" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script type="text/javascript" src="{{ asset('bundles/miapp/js/bootstrap.js') }}"></script>*/
/* {% endblock %}*/
