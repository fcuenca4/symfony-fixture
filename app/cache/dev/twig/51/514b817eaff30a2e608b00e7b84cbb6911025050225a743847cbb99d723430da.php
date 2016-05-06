<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_00b11da24303c454c925c99f8c00f170b7eee074d82b9f1f50dddde4232d9b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e5dccad3026f78160aef2ca290d9807f1aa013fd48c47458322b1d3ed3bc7f1 = $this->env->getExtension("native_profiler");
        $__internal_4e5dccad3026f78160aef2ca290d9807f1aa013fd48c47458322b1d3ed3bc7f1->enter($__internal_4e5dccad3026f78160aef2ca290d9807f1aa013fd48c47458322b1d3ed3bc7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5dccad3026f78160aef2ca290d9807f1aa013fd48c47458322b1d3ed3bc7f1->leave($__internal_4e5dccad3026f78160aef2ca290d9807f1aa013fd48c47458322b1d3ed3bc7f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6be2adfbc11e60650e5412626878664ab1e545219d22b861e2b6df34891f75a7 = $this->env->getExtension("native_profiler");
        $__internal_6be2adfbc11e60650e5412626878664ab1e545219d22b861e2b6df34891f75a7->enter($__internal_6be2adfbc11e60650e5412626878664ab1e545219d22b861e2b6df34891f75a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6be2adfbc11e60650e5412626878664ab1e545219d22b861e2b6df34891f75a7->leave($__internal_6be2adfbc11e60650e5412626878664ab1e545219d22b861e2b6df34891f75a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
