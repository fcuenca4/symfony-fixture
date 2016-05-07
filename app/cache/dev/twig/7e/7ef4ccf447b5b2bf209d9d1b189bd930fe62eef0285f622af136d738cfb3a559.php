<?php

/* C:\xampp\htdocs\proyecto\src\MiAppBundle\Resources\views\editorview.html.twig */
class __TwigTemplate_d4a3879517364ad0495d1920ebade1f5f0a2cb85056103ad4cecdbd19bbe7624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\editorview.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b74d957b9906786428762988b5d3e091ed71d21eba2e440b702b2c52d214ca3e = $this->env->getExtension("native_profiler");
        $__internal_b74d957b9906786428762988b5d3e091ed71d21eba2e440b702b2c52d214ca3e->enter($__internal_b74d957b9906786428762988b5d3e091ed71d21eba2e440b702b2c52d214ca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\editorview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74d957b9906786428762988b5d3e091ed71d21eba2e440b702b2c52d214ca3e->leave($__internal_b74d957b9906786428762988b5d3e091ed71d21eba2e440b702b2c52d214ca3e_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_5f09da0f2e1c67775a00e0d1917f4ce743c18e8b5212505e90ebe53d1d9237e8 = $this->env->getExtension("native_profiler");
        $__internal_5f09da0f2e1c67775a00e0d1917f4ce743c18e8b5212505e90ebe53d1d9237e8->enter($__internal_5f09da0f2e1c67775a00e0d1917f4ce743c18e8b5212505e90ebe53d1d9237e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "Esta es la vista del editor
";
        
        $__internal_5f09da0f2e1c67775a00e0d1917f4ce743c18e8b5212505e90ebe53d1d9237e8->leave($__internal_5f09da0f2e1c67775a00e0d1917f4ce743c18e8b5212505e90ebe53d1d9237e8_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\editorview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
/* Esta es la vista del editor*/
/* {% endblock %}*/
/* */
/* */
/* */
