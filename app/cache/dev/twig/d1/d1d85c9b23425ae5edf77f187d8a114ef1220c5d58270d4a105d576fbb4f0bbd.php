<?php

/* C:\proyecto\proyectof\src\MiAppBundle\Resources\views\adminview.html.twig */
class __TwigTemplate_5c15d26deed480f2b08e0ce0a171c8c151a1f50c6d331b5ecf681875ba202c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\proyecto\\proyectof\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig", 1);
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
        $__internal_a155568b1ebd1ef8d0b38abd20d59d4ef9492d465f4b87a633cbcc762781c437 = $this->env->getExtension("native_profiler");
        $__internal_a155568b1ebd1ef8d0b38abd20d59d4ef9492d465f4b87a633cbcc762781c437->enter($__internal_a155568b1ebd1ef8d0b38abd20d59d4ef9492d465f4b87a633cbcc762781c437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\proyecto\\proyectof\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a155568b1ebd1ef8d0b38abd20d59d4ef9492d465f4b87a633cbcc762781c437->leave($__internal_a155568b1ebd1ef8d0b38abd20d59d4ef9492d465f4b87a633cbcc762781c437_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_7cb0c6b4e50392808d12ece5504f4f8ccaade29d4021c2c14589881b31bed91c = $this->env->getExtension("native_profiler");
        $__internal_7cb0c6b4e50392808d12ece5504f4f8ccaade29d4021c2c14589881b31bed91c->enter($__internal_7cb0c6b4e50392808d12ece5504f4f8ccaade29d4021c2c14589881b31bed91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "    Esta es la vista del ADMINISTRADOR
";
        
        $__internal_7cb0c6b4e50392808d12ece5504f4f8ccaade29d4021c2c14589881b31bed91c->leave($__internal_7cb0c6b4e50392808d12ece5504f4f8ccaade29d4021c2c14589881b31bed91c_prof);

    }

    public function getTemplateName()
    {
        return "C:\\proyecto\\proyectof\\src\\MiAppBundle\\Resources\\views\\adminview.html.twig";
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
