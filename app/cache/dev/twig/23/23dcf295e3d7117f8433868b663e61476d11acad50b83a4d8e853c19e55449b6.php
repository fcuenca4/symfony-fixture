<?php

/* C:\Users\fcuenca\Desktop\proyecto_symfony\src\MiAppBundle\Resources\views\adminview.html.twig */
class __TwigTemplate_2c004d91614e6d363ef701bdddf404a297bdae1ed60867572bc39bfd159b9bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\Users\\fcuenca\\Desktop\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig", 1);
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
        $__internal_632a79b01750afc656823c6380ea600f3626b3657034c27bd100ed834064ec99 = $this->env->getExtension("native_profiler");
        $__internal_632a79b01750afc656823c6380ea600f3626b3657034c27bd100ed834064ec99->enter($__internal_632a79b01750afc656823c6380ea600f3626b3657034c27bd100ed834064ec99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\Users\\fcuenca\\Desktop\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632a79b01750afc656823c6380ea600f3626b3657034c27bd100ed834064ec99->leave($__internal_632a79b01750afc656823c6380ea600f3626b3657034c27bd100ed834064ec99_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_c07a6c73fd55e42acb57e624080f528d070f42eda3b9f31ba0c977b2ee6d946c = $this->env->getExtension("native_profiler");
        $__internal_c07a6c73fd55e42acb57e624080f528d070f42eda3b9f31ba0c977b2ee6d946c->enter($__internal_c07a6c73fd55e42acb57e624080f528d070f42eda3b9f31ba0c977b2ee6d946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "    Esta es la vista del ADMINISTRADOR
";
        
        $__internal_c07a6c73fd55e42acb57e624080f528d070f42eda3b9f31ba0c977b2ee6d946c->leave($__internal_c07a6c73fd55e42acb57e624080f528d070f42eda3b9f31ba0c977b2ee6d946c_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Users\\fcuenca\\Desktop\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig";
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
/*     Esta es la vista del ADMINISTRADOR*/
/* {% endblock %}*/
/* */
/* */
/* */
