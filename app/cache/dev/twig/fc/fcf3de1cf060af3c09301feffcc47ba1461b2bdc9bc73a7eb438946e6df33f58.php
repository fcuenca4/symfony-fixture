<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9229f37f1b050c0965887ceb60970055c1dd5f0566ea048ce97feecad90ef1a5 extends Twig_Template
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
        $__internal_598093e9cd377287e6245f82f84e36a90e4de4f8bb151bae8fed20b4d4481716 = $this->env->getExtension("native_profiler");
        $__internal_598093e9cd377287e6245f82f84e36a90e4de4f8bb151bae8fed20b4d4481716->enter($__internal_598093e9cd377287e6245f82f84e36a90e4de4f8bb151bae8fed20b4d4481716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598093e9cd377287e6245f82f84e36a90e4de4f8bb151bae8fed20b4d4481716->leave($__internal_598093e9cd377287e6245f82f84e36a90e4de4f8bb151bae8fed20b4d4481716_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_6099f11c52e3c0c4f454eec15de1ee12cd3dcc56d45ff87ae04996157e72d219 = $this->env->getExtension("native_profiler");
        $__internal_6099f11c52e3c0c4f454eec15de1ee12cd3dcc56d45ff87ae04996157e72d219->enter($__internal_6099f11c52e3c0c4f454eec15de1ee12cd3dcc56d45ff87ae04996157e72d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayParentBlock("login", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_6099f11c52e3c0c4f454eec15de1ee12cd3dcc56d45ff87ae04996157e72d219->leave($__internal_6099f11c52e3c0c4f454eec15de1ee12cd3dcc56d45ff87ae04996157e72d219_prof);

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
