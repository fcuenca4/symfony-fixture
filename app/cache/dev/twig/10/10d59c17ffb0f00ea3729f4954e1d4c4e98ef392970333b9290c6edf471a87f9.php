<?php

/* C:\Users\fcuenca\Desktop\proyecto_symfony\src\MiAppBundle\Resources\views\editorview.html.twig */
class __TwigTemplate_a666e61305344fe5941c4ac1921958e02a8bb094027fe6dae1458933c26caff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\Users\\fcuenca\\Desktop\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\editorview.html.twig", 1);
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
        $__internal_6d97dd4daac1607f959eb2a0dd34dc22e5daf68a1a3826f61dc18ac019cc956e = $this->env->getExtension("native_profiler");
        $__internal_6d97dd4daac1607f959eb2a0dd34dc22e5daf68a1a3826f61dc18ac019cc956e->enter($__internal_6d97dd4daac1607f959eb2a0dd34dc22e5daf68a1a3826f61dc18ac019cc956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\Users\\fcuenca\\Desktop\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\editorview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d97dd4daac1607f959eb2a0dd34dc22e5daf68a1a3826f61dc18ac019cc956e->leave($__internal_6d97dd4daac1607f959eb2a0dd34dc22e5daf68a1a3826f61dc18ac019cc956e_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_90d5f992ba1680a697404880822ea121228da97f021fd7131c9e186ba69a2d1a = $this->env->getExtension("native_profiler");
        $__internal_90d5f992ba1680a697404880822ea121228da97f021fd7131c9e186ba69a2d1a->enter($__internal_90d5f992ba1680a697404880822ea121228da97f021fd7131c9e186ba69a2d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "Esta es la vista del editor
";
        
        $__internal_90d5f992ba1680a697404880822ea121228da97f021fd7131c9e186ba69a2d1a->leave($__internal_90d5f992ba1680a697404880822ea121228da97f021fd7131c9e186ba69a2d1a_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Users\\fcuenca\\Desktop\\proyecto_symfony\\src\\MiAppBundle\\Resources\\views\\editorview.html.twig";
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
