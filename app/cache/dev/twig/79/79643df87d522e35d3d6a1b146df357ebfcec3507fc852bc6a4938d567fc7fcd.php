<?php

/* MiAppBundle:Jugadores:nuevo.html.twig */
class __TwigTemplate_a91471fe72741a0cab427cfc6304ca1d82146e73d0002649e2049585ac731b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ff448fa9eb6e060ff0855b2d9c4446618849b9b56e7e796ff799a237cb4260b = $this->env->getExtension("native_profiler");
        $__internal_5ff448fa9eb6e060ff0855b2d9c4446618849b9b56e7e796ff799a237cb4260b->enter($__internal_5ff448fa9eb6e060ff0855b2d9c4446618849b9b56e7e796ff799a237cb4260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle:Jugadores:nuevo.html.twig"));

        // line 1
        echo "



";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5ff448fa9eb6e060ff0855b2d9c4446618849b9b56e7e796ff799a237cb4260b->leave($__internal_5ff448fa9eb6e060ff0855b2d9c4446618849b9b56e7e796ff799a237cb4260b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a075446e7f9269329c898d1b142150d7d7a86cbe2b459e4153a4cfd2bd953f66 = $this->env->getExtension("native_profiler");
        $__internal_a075446e7f9269329c898d1b142150d7d7a86cbe2b459e4153a4cfd2bd953f66->enter($__internal_a075446e7f9269329c898d1b142150d7d7a86cbe2b459e4153a4cfd2bd953f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"main-block\">
    <article>
        <section>
            <h1>Register</h1>

           <form action=\"\" method=\"POST\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
   
     ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Registrar!\" />
</form>
</section>
";
        
        $__internal_a075446e7f9269329c898d1b142150d7d7a86cbe2b459e4153a4cfd2bd953f66->leave($__internal_a075446e7f9269329c898d1b142150d7d7a86cbe2b459e4153a4cfd2bd953f66_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle:Jugadores:nuevo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  54 => 14,  50 => 13,  41 => 6,  29 => 5,  23 => 1,);
    }
}
/* */
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* <section class="main-block">*/
/*     <article>*/
/*         <section>*/
/*             <h1>Register</h1>*/
/* */
/*            <form action="" method="POST">*/
/*     {{ form_errors(form) }}*/
/*     {{ form_row(form.nombre) }}*/
/*    */
/*      {{ form_rest(form) }}*/
/*     <input type="submit" class="btn btn-primary pull-right" value="Registrar!" />*/
/* </form>*/
/* </section>*/
/* {% endblock %}*/
