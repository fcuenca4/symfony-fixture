<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_980d583270c3f98d5e353b9fe29f67e23264162deeed449c622b1083efd6524a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_518349680c47c89abb75eb786b902e6c8056239a3541e75d03a0ae2eaccf6f7f = $this->env->getExtension("native_profiler");
        $__internal_518349680c47c89abb75eb786b902e6c8056239a3541e75d03a0ae2eaccf6f7f->enter($__internal_518349680c47c89abb75eb786b902e6c8056239a3541e75d03a0ae2eaccf6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518349680c47c89abb75eb786b902e6c8056239a3541e75d03a0ae2eaccf6f7f->leave($__internal_518349680c47c89abb75eb786b902e6c8056239a3541e75d03a0ae2eaccf6f7f_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_7c2e8deae301a682c7546a4dfea978ac777d2cccb7b0f9bd15dac79331d48654 = $this->env->getExtension("native_profiler");
        $__internal_7c2e8deae301a682c7546a4dfea978ac777d2cccb7b0f9bd15dac79331d48654->enter($__internal_7c2e8deae301a682c7546a4dfea978ac777d2cccb7b0f9bd15dac79331d48654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayParentBlock("login", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_7c2e8deae301a682c7546a4dfea978ac777d2cccb7b0f9bd15dac79331d48654->leave($__internal_7c2e8deae301a682c7546a4dfea978ac777d2cccb7b0f9bd15dac79331d48654_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block login %}*/
/*     {{ parent() }}*/
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
/* */
