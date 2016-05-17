<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_98c3e7907a944ab0099cb5df5fe7fc862559c5f563cc7d09b9ca46973830a617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_68a597caef98d2b55a6069e6e0e15f213159dbd2b0428d8286a35007e63d6c26 = $this->env->getExtension("native_profiler");
        $__internal_68a597caef98d2b55a6069e6e0e15f213159dbd2b0428d8286a35007e63d6c26->enter($__internal_68a597caef98d2b55a6069e6e0e15f213159dbd2b0428d8286a35007e63d6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a597caef98d2b55a6069e6e0e15f213159dbd2b0428d8286a35007e63d6c26->leave($__internal_68a597caef98d2b55a6069e6e0e15f213159dbd2b0428d8286a35007e63d6c26_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4121eea5085cad44a7acabed26645448a6f8489779fa0dcac4794c944ccb87d3 = $this->env->getExtension("native_profiler");
        $__internal_4121eea5085cad44a7acabed26645448a6f8489779fa0dcac4794c944ccb87d3->enter($__internal_4121eea5085cad44a7acabed26645448a6f8489779fa0dcac4794c944ccb87d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"
              class=\"navbar-form navbar-right form-inline\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
            <div class=\"form-group\"><label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
            </div>
            <div class=\"form-group\"><label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\"
                   value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
        </form>
    </div>


";
        
        $__internal_4121eea5085cad44a7acabed26645448a6f8489779fa0dcac4794c944ccb87d3->leave($__internal_4121eea5085cad44a7acabed26645448a6f8489779fa0dcac4794c944ccb87d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  79 => 22,  71 => 17,  66 => 15,  62 => 14,  58 => 13,  53 => 11,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div id="navbar" class="navbar-collapse collapse">*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post"*/
/*               class="navbar-form navbar-right form-inline">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*             <div class="form-group"><label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" required="required"/>*/
/*             </div>*/
/*             <div class="form-group"><label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                 <input type="password" id="password" name="_password" required="required"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*             </div>*/
/*             <input type="submit" class="btn btn-success" id="_submit" name="_submit"*/
/*                    value="{{ 'security.login.submit'|trans }}"/>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
