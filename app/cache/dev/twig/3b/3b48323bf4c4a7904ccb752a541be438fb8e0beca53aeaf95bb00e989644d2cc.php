<?php

/* MiAppBundle::layout.html.twig */
class __TwigTemplate_dae45a44c01624a9bc669642c340d1fcf10f61f3a3df258d18459968ed9e6c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::layout.html.twig", 1);
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
        $__internal_7cf72d6bd3aba57288586f5c8c74c0a7053ab25884aba1be1e55440d6e3b5e70 = $this->env->getExtension("native_profiler");
        $__internal_7cf72d6bd3aba57288586f5c8c74c0a7053ab25884aba1be1e55440d6e3b5e70->enter($__internal_7cf72d6bd3aba57288586f5c8c74c0a7053ab25884aba1be1e55440d6e3b5e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf72d6bd3aba57288586f5c8c74c0a7053ab25884aba1be1e55440d6e3b5e70->leave($__internal_7cf72d6bd3aba57288586f5c8c74c0a7053ab25884aba1be1e55440d6e3b5e70_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_387c45f08e7d1039691fff034980fa09c35cf8904fb71bf492a182fedd2f03ac = $this->env->getExtension("native_profiler");
        $__internal_387c45f08e7d1039691fff034980fa09c35cf8904fb71bf492a182fedd2f03ac->enter($__internal_387c45f08e7d1039691fff034980fa09c35cf8904fb71bf492a182fedd2f03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_387c45f08e7d1039691fff034980fa09c35cf8904fb71bf492a182fedd2f03ac->leave($__internal_387c45f08e7d1039691fff034980fa09c35cf8904fb71bf492a182fedd2f03ac_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::layout.html.twig";
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
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block login %}*/
/*     {{ block('fos_user_content') }}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
