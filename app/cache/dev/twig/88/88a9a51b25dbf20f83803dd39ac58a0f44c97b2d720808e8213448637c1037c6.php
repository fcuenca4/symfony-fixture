<?php

/* C:\xampp\htdocs\proyecto\src\MiAppBundle\Resources\views\navbarnotlogged.html.twig */
class __TwigTemplate_9db17cb80a186166fde6eabc76e709e32d3f03842e747060e3bda4765e13448b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::navbar.html.twig", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbarnotlogged.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c5b43ea657b72656a6ac89deafe4c87e7bcff8fc54bb1e8c6fd22b240ad5c3 = $this->env->getExtension("native_profiler");
        $__internal_36c5b43ea657b72656a6ac89deafe4c87e7bcff8fc54bb1e8c6fd22b240ad5c3->enter($__internal_36c5b43ea657b72656a6ac89deafe4c87e7bcff8fc54bb1e8c6fd22b240ad5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbarnotlogged.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c5b43ea657b72656a6ac89deafe4c87e7bcff8fc54bb1e8c6fd22b240ad5c3->leave($__internal_36c5b43ea657b72656a6ac89deafe4c87e7bcff8fc54bb1e8c6fd22b240ad5c3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3214eb0e745b17dba88ddd666adbe224e91f97e7632bbc612ee7aa60beab946 = $this->env->getExtension("native_profiler");
        $__internal_b3214eb0e745b17dba88ddd666adbe224e91f97e7632bbc612ee7aa60beab946->enter($__internal_b3214eb0e745b17dba88ddd666adbe224e91f97e7632bbc612ee7aa60beab946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "MiAppBundle::layout.html.twig");
        echo "
";
        
        $__internal_b3214eb0e745b17dba88ddd666adbe224e91f97e7632bbc612ee7aa60beab946->leave($__internal_b3214eb0e745b17dba88ddd666adbe224e91f97e7632bbc612ee7aa60beab946_prof);

    }

    // line 5
    public function block_login($context, array $blocks = array())
    {
        $__internal_eed6a1d234acc4b064f3251cb1191a02f22a17b760a490c7f4f3aa9362fc79f0 = $this->env->getExtension("native_profiler");
        $__internal_eed6a1d234acc4b064f3251cb1191a02f22a17b760a490c7f4f3aa9362fc79f0->enter($__internal_eed6a1d234acc4b064f3251cb1191a02f22a17b760a490c7f4f3aa9362fc79f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 6
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_eed6a1d234acc4b064f3251cb1191a02f22a17b760a490c7f4f3aa9362fc79f0->leave($__internal_eed6a1d234acc4b064f3251cb1191a02f22a17b760a490c7f4f3aa9362fc79f0_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbarnotlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::navbar.html.twig' %}*/
/* {% block body %}*/
/*     {{ include ('MiAppBundle::layout.html.twig') }}*/
/* {% endblock %}*/
/* {% block login %}*/
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
/* */
