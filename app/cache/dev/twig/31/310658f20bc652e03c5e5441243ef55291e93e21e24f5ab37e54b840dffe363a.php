<?php

/* partidos/new.html.twig */
class __TwigTemplate_b787d1c1002d1b244d9c88f55d36ff59c2317b811beb511f1c585505e1985f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partidos/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92eef7ef82c4fee3d75c58c0f8c86ce689def446cc447454024d199f823ae5a6 = $this->env->getExtension("native_profiler");
        $__internal_92eef7ef82c4fee3d75c58c0f8c86ce689def446cc447454024d199f823ae5a6->enter($__internal_92eef7ef82c4fee3d75c58c0f8c86ce689def446cc447454024d199f823ae5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92eef7ef82c4fee3d75c58c0f8c86ce689def446cc447454024d199f823ae5a6->leave($__internal_92eef7ef82c4fee3d75c58c0f8c86ce689def446cc447454024d199f823ae5a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03a117ee1eaf8b0a290fc65d967bbde884f6607feba00a39ac32d588aa32bef = $this->env->getExtension("native_profiler");
        $__internal_a03a117ee1eaf8b0a290fc65d967bbde884f6607feba00a39ac32d588aa32bef->enter($__internal_a03a117ee1eaf8b0a290fc65d967bbde884f6607feba00a39ac32d588aa32bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Partidos creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("partidos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a03a117ee1eaf8b0a290fc65d967bbde884f6607feba00a39ac32d588aa32bef->leave($__internal_a03a117ee1eaf8b0a290fc65d967bbde884f6607feba00a39ac32d588aa32bef_prof);

    }

    public function getTemplateName()
    {
        return "partidos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Partidos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('partidos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
