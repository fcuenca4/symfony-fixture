<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_225921c6684f58190a21fbaeb5d94247f71b81f4c953c366856877fe7e5a0fdf extends Twig_Template
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
        $__internal_e4b91448c9392f459c605b02dc896ee388c3d7ead90e1398c09ee196b2ffbbac = $this->env->getExtension("native_profiler");
        $__internal_e4b91448c9392f459c605b02dc896ee388c3d7ead90e1398c09ee196b2ffbbac->enter($__internal_e4b91448c9392f459c605b02dc896ee388c3d7ead90e1398c09ee196b2ffbbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b91448c9392f459c605b02dc896ee388c3d7ead90e1398c09ee196b2ffbbac->leave($__internal_e4b91448c9392f459c605b02dc896ee388c3d7ead90e1398c09ee196b2ffbbac_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_b279af1ee61f14886a9dba93af0da16bca832470e0c77bd9efdcc5b2d9e97058 = $this->env->getExtension("native_profiler");
        $__internal_b279af1ee61f14886a9dba93af0da16bca832470e0c77bd9efdcc5b2d9e97058->enter($__internal_b279af1ee61f14886a9dba93af0da16bca832470e0c77bd9efdcc5b2d9e97058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "    ";
        $this->displayParentBlock("login", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_b279af1ee61f14886a9dba93af0da16bca832470e0c77bd9efdcc5b2d9e97058->leave($__internal_b279af1ee61f14886a9dba93af0da16bca832470e0c77bd9efdcc5b2d9e97058_prof);

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
