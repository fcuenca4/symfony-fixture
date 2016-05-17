<?php

/* MiAppBundle::partidos/new.html.twig */
class __TwigTemplate_9fc2c04f47bf6bae12d0492e90d099f1aaf2aa021edb2c217c81e188c777b70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/new.html.twig", 1);
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
        $__internal_0e8bea3993332192c1c2082bc6029c51b004016d04cb95acdd683df0ee2c9858 = $this->env->getExtension("native_profiler");
        $__internal_0e8bea3993332192c1c2082bc6029c51b004016d04cb95acdd683df0ee2c9858->enter($__internal_0e8bea3993332192c1c2082bc6029c51b004016d04cb95acdd683df0ee2c9858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8bea3993332192c1c2082bc6029c51b004016d04cb95acdd683df0ee2c9858->leave($__internal_0e8bea3993332192c1c2082bc6029c51b004016d04cb95acdd683df0ee2c9858_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_f72a7aa0b024b52a54c2263560e6a4cb2aba0111a8119a7e5d6fb8c0df62cb69 = $this->env->getExtension("native_profiler");
        $__internal_f72a7aa0b024b52a54c2263560e6a4cb2aba0111a8119a7e5d6fb8c0df62cb69->enter($__internal_f72a7aa0b024b52a54c2263560e6a4cb2aba0111a8119a7e5d6fb8c0df62cb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

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
        
        $__internal_f72a7aa0b024b52a54c2263560e6a4cb2aba0111a8119a7e5d6fb8c0df62cb69->leave($__internal_f72a7aa0b024b52a54c2263560e6a4cb2aba0111a8119a7e5d6fb8c0df62cb69_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::partidos/new.html.twig";
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
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
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
