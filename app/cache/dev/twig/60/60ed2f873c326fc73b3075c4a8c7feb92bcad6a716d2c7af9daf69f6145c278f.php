<?php

/* MiAppBundle:Equipos:nuevo.html.twig */
class __TwigTemplate_f7f26d884144cd4843aff7117751bf60bf3613ff84aadd63cb53cd88347e2d1f extends Twig_Template
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
        $__internal_895615a610114c9c01bd7078749bb99205ad7bc8ec6594fa18d2c92e0a1355b3 = $this->env->getExtension("native_profiler");
        $__internal_895615a610114c9c01bd7078749bb99205ad7bc8ec6594fa18d2c92e0a1355b3->enter($__internal_895615a610114c9c01bd7078749bb99205ad7bc8ec6594fa18d2c92e0a1355b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle:Equipos:nuevo.html.twig"));

        // line 1
        echo "



";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_895615a610114c9c01bd7078749bb99205ad7bc8ec6594fa18d2c92e0a1355b3->leave($__internal_895615a610114c9c01bd7078749bb99205ad7bc8ec6594fa18d2c92e0a1355b3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4b126818e02d51c42af9ac29766570d5a2eea59e28c4d4a46d703d1dfda81fad = $this->env->getExtension("native_profiler");
        $__internal_4b126818e02d51c42af9ac29766570d5a2eea59e28c4d4a46d703d1dfda81fad->enter($__internal_4b126818e02d51c42af9ac29766570d5a2eea59e28c4d4a46d703d1dfda81fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b126818e02d51c42af9ac29766570d5a2eea59e28c4d4a46d703d1dfda81fad->leave($__internal_4b126818e02d51c42af9ac29766570d5a2eea59e28c4d4a46d703d1dfda81fad_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle:Equipos:nuevo.html.twig";
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
