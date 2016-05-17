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
        $__internal_dda24da96baddd678211f6173e7c2dc7fae0f7d150e296453f4460f4483696e5 = $this->env->getExtension("native_profiler");
        $__internal_dda24da96baddd678211f6173e7c2dc7fae0f7d150e296453f4460f4483696e5->enter($__internal_dda24da96baddd678211f6173e7c2dc7fae0f7d150e296453f4460f4483696e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda24da96baddd678211f6173e7c2dc7fae0f7d150e296453f4460f4483696e5->leave($__internal_dda24da96baddd678211f6173e7c2dc7fae0f7d150e296453f4460f4483696e5_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_e336a249f7ec4eb8b807556ab0d2c5dcf880651741f2eb893d211081f48a3af8 = $this->env->getExtension("native_profiler");
        $__internal_e336a249f7ec4eb8b807556ab0d2c5dcf880651741f2eb893d211081f48a3af8->enter($__internal_e336a249f7ec4eb8b807556ab0d2c5dcf880651741f2eb893d211081f48a3af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayParentBlock("login", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_e336a249f7ec4eb8b807556ab0d2c5dcf880651741f2eb893d211081f48a3af8->leave($__internal_e336a249f7ec4eb8b807556ab0d2c5dcf880651741f2eb893d211081f48a3af8_prof);

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
