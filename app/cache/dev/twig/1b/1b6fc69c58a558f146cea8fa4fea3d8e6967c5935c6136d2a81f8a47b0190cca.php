<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b69538ae969376a642d6b40799e582f9a945a9491071422436783c91c012c9ed extends Twig_Template
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
        $__internal_ba632d7c98b0eda1571b9c3b48de01215e3c0789f278e2a1558fb1c9fef854eb = $this->env->getExtension("native_profiler");
        $__internal_ba632d7c98b0eda1571b9c3b48de01215e3c0789f278e2a1558fb1c9fef854eb->enter($__internal_ba632d7c98b0eda1571b9c3b48de01215e3c0789f278e2a1558fb1c9fef854eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba632d7c98b0eda1571b9c3b48de01215e3c0789f278e2a1558fb1c9fef854eb->leave($__internal_ba632d7c98b0eda1571b9c3b48de01215e3c0789f278e2a1558fb1c9fef854eb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d184d8a624ead32361cdc5800ed68b8aff477d9c8c797948938012e5d921cf8d = $this->env->getExtension("native_profiler");
        $__internal_d184d8a624ead32361cdc5800ed68b8aff477d9c8c797948938012e5d921cf8d->enter($__internal_d184d8a624ead32361cdc5800ed68b8aff477d9c8c797948938012e5d921cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"
              class=\"navbar-form navbar-right form-inline\">
            ";
        // line 15
        echo "            ";
        // line 16
        echo "            ";
        // line 17
        echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
            <div class=\"form-group\"><label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
            </div>
            <div class=\"form-group\"><label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\"
                   value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            ";
        // line 31
        echo "        </form>
    </div>

";
        
        $__internal_d184d8a624ead32361cdc5800ed68b8aff477d9c8c797948938012e5d921cf8d->leave($__internal_d184d8a624ead32361cdc5800ed68b8aff477d9c8c797948938012e5d921cf8d_prof);

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
        return array (  95 => 31,  91 => 29,  85 => 26,  77 => 21,  72 => 19,  68 => 18,  63 => 17,  61 => 16,  59 => 15,  54 => 12,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
/* */
/*     <div id="navbar" class="navbar-collapse collapse">*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post"*/
/*               class="navbar-form navbar-right form-inline">*/
/*             {#{% if is_granted("ROLE_USER") %}#}*/
/*             {#Bienvenido {{ app.user.username }} Privilegios: {{ app.user.roles[0] }}#}*/
/*             {#{% else %}#}*/
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
/*             {#{% endif %}#}*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock fos_user_content %}*/
