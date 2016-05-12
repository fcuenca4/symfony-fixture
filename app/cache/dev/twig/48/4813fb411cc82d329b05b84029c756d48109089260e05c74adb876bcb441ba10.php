<?php

/* partidos/new.html.twig */
class __TwigTemplate_2d760095421b9d06a949992cd662a13b3a1425ccbd34189c92522509dde40adf extends Twig_Template
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
        $__internal_3e54a7084766507c7c01df53438f141b77263c4a860ba33c250b55b881406920 = $this->env->getExtension("native_profiler");
        $__internal_3e54a7084766507c7c01df53438f141b77263c4a860ba33c250b55b881406920->enter($__internal_3e54a7084766507c7c01df53438f141b77263c4a860ba33c250b55b881406920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e54a7084766507c7c01df53438f141b77263c4a860ba33c250b55b881406920->leave($__internal_3e54a7084766507c7c01df53438f141b77263c4a860ba33c250b55b881406920_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1eda591b1b45c584b03a53ee699354889f41f2338a7c548fb413d77316a1be = $this->env->getExtension("native_profiler");
        $__internal_ff1eda591b1b45c584b03a53ee699354889f41f2338a7c548fb413d77316a1be->enter($__internal_ff1eda591b1b45c584b03a53ee699354889f41f2338a7c548fb413d77316a1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff1eda591b1b45c584b03a53ee699354889f41f2338a7c548fb413d77316a1be->leave($__internal_ff1eda591b1b45c584b03a53ee699354889f41f2338a7c548fb413d77316a1be_prof);

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
