<?php

/* C:\xampp\htdocs\proyecto\src\MiAppBundle\Resources\views\navbarlogged.html.twig */
class __TwigTemplate_37ca7f858a70f22af26c32a29bb1736e8f411dd8aee6a8d3b5ea846f0bc490d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::navbar.html.twig", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbarlogged.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f59c19be2796538501fa7c3cf4ec9e13842ac74be529a37af909b4cccf4520da = $this->env->getExtension("native_profiler");
        $__internal_f59c19be2796538501fa7c3cf4ec9e13842ac74be529a37af909b4cccf4520da->enter($__internal_f59c19be2796538501fa7c3cf4ec9e13842ac74be529a37af909b4cccf4520da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbarlogged.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59c19be2796538501fa7c3cf4ec9e13842ac74be529a37af909b4cccf4520da->leave($__internal_f59c19be2796538501fa7c3cf4ec9e13842ac74be529a37af909b4cccf4520da_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_0aec223abc8af166f3cc0577deb28bf5dabcf7fe9443a1a3218c55e5bd2f9bcf = $this->env->getExtension("native_profiler");
        $__internal_0aec223abc8af166f3cc0577deb28bf5dabcf7fe9443a1a3218c55e5bd2f9bcf->enter($__internal_0aec223abc8af166f3cc0577deb28bf5dabcf7fe9443a1a3218c55e5bd2f9bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "
";
        
        $__internal_0aec223abc8af166f3cc0577deb28bf5dabcf7fe9443a1a3218c55e5bd2f9bcf->leave($__internal_0aec223abc8af166f3cc0577deb28bf5dabcf7fe9443a1a3218c55e5bd2f9bcf_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbarlogged.html.twig";
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
/* {% block login %}*/
/* {{ user }}*/
/* {% endblock %}*/
