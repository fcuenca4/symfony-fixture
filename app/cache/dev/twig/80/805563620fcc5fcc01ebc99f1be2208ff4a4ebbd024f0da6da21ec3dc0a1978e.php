<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f2ee7482c24f70910feafc53f07ed6824c7aab216f0e4ec4234c7c3edc84c63f extends Twig_Template
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
        $__internal_b18bce0741947fa6be4fc9fc0feda26d541fb2f8aa3160d4045286cfad8c52fc = $this->env->getExtension("native_profiler");
        $__internal_b18bce0741947fa6be4fc9fc0feda26d541fb2f8aa3160d4045286cfad8c52fc->enter($__internal_b18bce0741947fa6be4fc9fc0feda26d541fb2f8aa3160d4045286cfad8c52fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18bce0741947fa6be4fc9fc0feda26d541fb2f8aa3160d4045286cfad8c52fc->leave($__internal_b18bce0741947fa6be4fc9fc0feda26d541fb2f8aa3160d4045286cfad8c52fc_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_0383e866b40b82478364e97b5ce953c4455dca348b7fa47a8c0bb7fd4d8dfc04 = $this->env->getExtension("native_profiler");
        $__internal_0383e866b40b82478364e97b5ce953c4455dca348b7fa47a8c0bb7fd4d8dfc04->enter($__internal_0383e866b40b82478364e97b5ce953c4455dca348b7fa47a8c0bb7fd4d8dfc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayParentBlock("login", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_0383e866b40b82478364e97b5ce953c4455dca348b7fa47a8c0bb7fd4d8dfc04->leave($__internal_0383e866b40b82478364e97b5ce953c4455dca348b7fa47a8c0bb7fd4d8dfc04_prof);

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
