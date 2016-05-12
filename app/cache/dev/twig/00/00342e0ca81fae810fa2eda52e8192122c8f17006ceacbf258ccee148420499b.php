<?php

/* editor/edit.html.twig */
class __TwigTemplate_a82342ba1f10d4dda6204e2f43fe3ec09f2fab5d21c2ae5c330711b81ca09550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partidos/edit.html.twig", "editor/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partidos/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dbc497c8217169cbcbee35c756c4c20bd63952c8bd5bc164fe1bbc5965c54b1 = $this->env->getExtension("native_profiler");
        $__internal_8dbc497c8217169cbcbee35c756c4c20bd63952c8bd5bc164fe1bbc5965c54b1->enter($__internal_8dbc497c8217169cbcbee35c756c4c20bd63952c8bd5bc164fe1bbc5965c54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "editor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dbc497c8217169cbcbee35c756c4c20bd63952c8bd5bc164fe1bbc5965c54b1->leave($__internal_8dbc497c8217169cbcbee35c756c4c20bd63952c8bd5bc164fe1bbc5965c54b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f64572bd4939abb9ce9a2339fd851121989a90b780afe968a87772b5de6dfa29 = $this->env->getExtension("native_profiler");
        $__internal_f64572bd4939abb9ce9a2339fd851121989a90b780afe968a87772b5de6dfa29->enter($__internal_f64572bd4939abb9ce9a2339fd851121989a90b780afe968a87772b5de6dfa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_f64572bd4939abb9ce9a2339fd851121989a90b780afe968a87772b5de6dfa29->leave($__internal_f64572bd4939abb9ce9a2339fd851121989a90b780afe968a87772b5de6dfa29_prof);

    }

    public function getTemplateName()
    {
        return "editor/edit.html.twig";
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
/* {% extends 'partidos/edit.html.twig' %}*/
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
