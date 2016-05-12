<?php

/* C:\proyecto\proyecto_symfony\src\MiAppBundle\Resources\views\adminview.html.twig */
class __TwigTemplate_70adc0976c344e6f3a420a1ec0bd6ee9ca2c0e7276c1c51770f442376fc08c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\proyecto\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig", 1);
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
        $__internal_d4a35232639f830d85251937b4225995ecaa8388ef797898d208381f4b70e54e = $this->env->getExtension("native_profiler");
        $__internal_d4a35232639f830d85251937b4225995ecaa8388ef797898d208381f4b70e54e->enter($__internal_d4a35232639f830d85251937b4225995ecaa8388ef797898d208381f4b70e54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\proyecto\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a35232639f830d85251937b4225995ecaa8388ef797898d208381f4b70e54e->leave($__internal_d4a35232639f830d85251937b4225995ecaa8388ef797898d208381f4b70e54e_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_657eee08b261f66612d5e5cda60c973482cc1cace65dea3836dbead60d03e31f = $this->env->getExtension("native_profiler");
        $__internal_657eee08b261f66612d5e5cda60c973482cc1cace65dea3836dbead60d03e31f->enter($__internal_657eee08b261f66612d5e5cda60c973482cc1cace65dea3836dbead60d03e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "    Esta es la vista del ADMINISTRADOR
";
        
        $__internal_657eee08b261f66612d5e5cda60c973482cc1cace65dea3836dbead60d03e31f->leave($__internal_657eee08b261f66612d5e5cda60c973482cc1cace65dea3836dbead60d03e31f_prof);

    }

    public function getTemplateName()
    {
        return "C:\\proyecto\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig";
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
