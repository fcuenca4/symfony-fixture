<?php

/* MiAppBundle::layout.html.twig */
class __TwigTemplate_d2296755c9e35ce6b4403701e31b8607a1a4de2c0386230d357585dcebd96871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::navbar.html.twig", "MiAppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d111ee6f55427056e31304ec9c039342af9f8c3f755b8cd2d948afb53c3d5a6 = $this->env->getExtension("native_profiler");
        $__internal_2d111ee6f55427056e31304ec9c039342af9f8c3f755b8cd2d948afb53c3d5a6->enter($__internal_2d111ee6f55427056e31304ec9c039342af9f8c3f755b8cd2d948afb53c3d5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d111ee6f55427056e31304ec9c039342af9f8c3f755b8cd2d948afb53c3d5a6->leave($__internal_2d111ee6f55427056e31304ec9c039342af9f8c3f755b8cd2d948afb53c3d5a6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e9b344e5ffd5344cdeda0210590dc13bd64933e3d7984a2cfac561ccd11faf9 = $this->env->getExtension("native_profiler");
        $__internal_8e9b344e5ffd5344cdeda0210590dc13bd64933e3d7984a2cfac561ccd11faf9->enter($__internal_8e9b344e5ffd5344cdeda0210590dc13bd64933e3d7984a2cfac561ccd11faf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_8e9b344e5ffd5344cdeda0210590dc13bd64933e3d7984a2cfac561ccd11faf9->leave($__internal_8e9b344e5ffd5344cdeda0210590dc13bd64933e3d7984a2cfac561ccd11faf9_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::navbar.html.twig' %}*/
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/*  */
/* */
/* */
/* */
