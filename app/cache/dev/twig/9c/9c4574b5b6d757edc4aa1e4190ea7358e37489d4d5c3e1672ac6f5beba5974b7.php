<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_49110f75e9112edc882f5598e76b327363b344dfb83d7fcf69f3ac2d8c196d42 extends Twig_Template
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
        $__internal_41ba5855dc881aec81d19ca4d40dfeba3f032f9146f5b6bb09515a75812ff19a = $this->env->getExtension("native_profiler");
        $__internal_41ba5855dc881aec81d19ca4d40dfeba3f032f9146f5b6bb09515a75812ff19a->enter($__internal_41ba5855dc881aec81d19ca4d40dfeba3f032f9146f5b6bb09515a75812ff19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ba5855dc881aec81d19ca4d40dfeba3f032f9146f5b6bb09515a75812ff19a->leave($__internal_41ba5855dc881aec81d19ca4d40dfeba3f032f9146f5b6bb09515a75812ff19a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0e2d43c472f66d0c4886866fc7864878218b22fdf625c338ece9c680bfef49c = $this->env->getExtension("native_profiler");
        $__internal_f0e2d43c472f66d0c4886866fc7864878218b22fdf625c338ece9c680bfef49c->enter($__internal_f0e2d43c472f66d0c4886866fc7864878218b22fdf625c338ece9c680bfef49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f0e2d43c472f66d0c4886866fc7864878218b22fdf625c338ece9c680bfef49c->leave($__internal_f0e2d43c472f66d0c4886866fc7864878218b22fdf625c338ece9c680bfef49c_prof);

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
