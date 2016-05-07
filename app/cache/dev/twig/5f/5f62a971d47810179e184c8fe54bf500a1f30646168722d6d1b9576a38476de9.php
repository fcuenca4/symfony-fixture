<?php

/* C:\xampp\htdocs\proyecto\src\MiAppBundle\Resources\views\adminview.html.twig */
class __TwigTemplate_b379719977a71ff3a161160a9b29625abd2f38f6c56b9e70beb97a1ec23b728f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig", 1);
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
        $__internal_56bbdf8bc7d4ec46f89fbe5cf2d60dc7769e944200f8e01c38a5ddd887084675 = $this->env->getExtension("native_profiler");
        $__internal_56bbdf8bc7d4ec46f89fbe5cf2d60dc7769e944200f8e01c38a5ddd887084675->enter($__internal_56bbdf8bc7d4ec46f89fbe5cf2d60dc7769e944200f8e01c38a5ddd887084675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bbdf8bc7d4ec46f89fbe5cf2d60dc7769e944200f8e01c38a5ddd887084675->leave($__internal_56bbdf8bc7d4ec46f89fbe5cf2d60dc7769e944200f8e01c38a5ddd887084675_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_495b7031cd22750bc0aed1548ed1c39b9af36d7aed2d0348f87c68a60b44f42d = $this->env->getExtension("native_profiler");
        $__internal_495b7031cd22750bc0aed1548ed1c39b9af36d7aed2d0348f87c68a60b44f42d->enter($__internal_495b7031cd22750bc0aed1548ed1c39b9af36d7aed2d0348f87c68a60b44f42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "    Esta es la vista del ADMINISTRADOR
";
        
        $__internal_495b7031cd22750bc0aed1548ed1c39b9af36d7aed2d0348f87c68a60b44f42d->leave($__internal_495b7031cd22750bc0aed1548ed1c39b9af36d7aed2d0348f87c68a60b44f42d_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig";
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
