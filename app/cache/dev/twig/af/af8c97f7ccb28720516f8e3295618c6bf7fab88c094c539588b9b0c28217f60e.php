<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_2811e35b5fb4c6641998b34528207acfc4651a492dda2a40cff46d09cd9a42f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MiAppBundle::Default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a51f158bba3de369c61e35a18ffc8c0ac10eb0a2e50f92bb5949016e2d11191 = $this->env->getExtension("native_profiler");
        $__internal_9a51f158bba3de369c61e35a18ffc8c0ac10eb0a2e50f92bb5949016e2d11191->enter($__internal_9a51f158bba3de369c61e35a18ffc8c0ac10eb0a2e50f92bb5949016e2d11191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a51f158bba3de369c61e35a18ffc8c0ac10eb0a2e50f92bb5949016e2d11191->leave($__internal_9a51f158bba3de369c61e35a18ffc8c0ac10eb0a2e50f92bb5949016e2d11191_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5170e1c501aa0637552c39753130dba634dbf7294f1357064d45343bd39c77b1 = $this->env->getExtension("native_profiler");
        $__internal_5170e1c501aa0637552c39753130dba634dbf7294f1357064d45343bd39c77b1->enter($__internal_5170e1c501aa0637552c39753130dba634dbf7294f1357064d45343bd39c77b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"
          xmlns=\"http://www.w3.org/1999/html\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Luckiest+Guy\"/>
";
        
        $__internal_5170e1c501aa0637552c39753130dba634dbf7294f1357064d45343bd39c77b1->leave($__internal_5170e1c501aa0637552c39753130dba634dbf7294f1357064d45343bd39c77b1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b105de7981004bea7e7fae5d50ed31b06543891fa1288ab426604ad6c4636ed7 = $this->env->getExtension("native_profiler");
        $__internal_b105de7981004bea7e7fae5d50ed31b06543891fa1288ab426604ad6c4636ed7->enter($__internal_b105de7981004bea7e7fae5d50ed31b06543891fa1288ab426604ad6c4636ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\" style=\"font-family: 'Luckiest Guy'; font-size: 40px;\">Torneo de
                        Futbol</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"
                          class=\"navbar-form navbar-right form-inline\">
                        ";
        // line 26
        $this->displayBlock('login', $context, $blocks);
        // line 64
        echo "                    </form>
                </div>
            </div>
        </nav>

        ";
        // line 69
        $this->displayBlock('editor', $context, $blocks);
        // line 72
        echo "    </div>

";
        
        $__internal_b105de7981004bea7e7fae5d50ed31b06543891fa1288ab426604ad6c4636ed7->leave($__internal_b105de7981004bea7e7fae5d50ed31b06543891fa1288ab426604ad6c4636ed7_prof);

    }

    // line 26
    public function block_login($context, array $blocks = array())
    {
        $__internal_9d8dc4e24f7773464d9453e513148a01071cf0027ea51dcbb16fe650f7d2329f = $this->env->getExtension("native_profiler");
        $__internal_9d8dc4e24f7773464d9453e513148a01071cf0027ea51dcbb16fe650f7d2329f->enter($__internal_9d8dc4e24f7773464d9453e513148a01071cf0027ea51dcbb16fe650f7d2329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 27
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-primary\">
                                        <span class=\"glyphicon glyphicon-cog\" style=\"color:white\"></span>
                                    </button>

                                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\"
                                            data-toggle=\"dropdown\">
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">Desplegar men�</span>
                                    </button>

                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        ";
            // line 41
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "                                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("equipos_index");
                echo "\">Equipos</a></li>
                                            <li><a href=\"";
                // line 43
                echo $this->env->getExtension('routing')->getPath("jugadores_index");
                echo "\">Jugadores</a></li>
                                            <li><a href=\"";
                // line 44
                echo $this->env->getExtension('routing')->getPath("arbitros_index");
                echo "\">Arbitros</a></li>
                                            <li><a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("partidos_index");
                echo "\">Partidos</a></li>
                                            <li><a href=\"";
                // line 46
                echo $this->env->getExtension('routing')->getPath("editor_index");
                echo "\">Editar</a></li>


                                        ";
            } else {
                // line 50
                echo "                                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("editor_index");
                echo "\">Editar</a></li>
                                        ";
            }
            // line 52
            echo "                                        <li class=\"divider\"></li>

                                        <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                Cerrar Sesi&oacuten</a></li>
                                    </ul>
                                </div>
                            ";
        } else {
            // line 59
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </a>
                            ";
        }
        // line 62
        echo "
                        ";
        
        $__internal_9d8dc4e24f7773464d9453e513148a01071cf0027ea51dcbb16fe650f7d2329f->leave($__internal_9d8dc4e24f7773464d9453e513148a01071cf0027ea51dcbb16fe650f7d2329f_prof);

    }

    // line 69
    public function block_editor($context, array $blocks = array())
    {
        $__internal_761c7d3b8fa64b6c5c1a8360f405400366bff878b3f7d4077051a683f2d49b4c = $this->env->getExtension("native_profiler");
        $__internal_761c7d3b8fa64b6c5c1a8360f405400366bff878b3f7d4077051a683f2d49b4c->enter($__internal_761c7d3b8fa64b6c5c1a8360f405400366bff878b3f7d4077051a683f2d49b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 70
        echo "
        ";
        
        $__internal_761c7d3b8fa64b6c5c1a8360f405400366bff878b3f7d4077051a683f2d49b4c->leave($__internal_761c7d3b8fa64b6c5c1a8360f405400366bff878b3f7d4077051a683f2d49b4c_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 70,  194 => 69,  186 => 62,  177 => 59,  169 => 54,  165 => 52,  159 => 50,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  135 => 42,  133 => 41,  116 => 28,  113 => 27,  107 => 26,  98 => 72,  96 => 69,  89 => 64,  87 => 26,  82 => 24,  65 => 9,  59 => 8,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/miapp/css/navpadding.css') }}" type="text/css" rel="stylesheet"*/
/*           xmlns="http://www.w3.org/1999/html"/>*/
/*     <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Luckiest+Guy"/>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"*/
/*                             aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/" style="font-family: 'Luckiest Guy'; font-size: 40px;">Torneo de*/
/*                         Futbol</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post"*/
/*                           class="navbar-form navbar-right form-inline">*/
/*                         {% block login %}*/
/*                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                                 <div class="btn-group">*/
/*                                     <button type="button" class="btn btn-primary">*/
/*                                         <span class="glyphicon glyphicon-cog" style="color:white"></span>*/
/*                                     </button>*/
/* */
/*                                     <button type="button" class="btn btn-primary dropdown-toggle"*/
/*                                             data-toggle="dropdown">*/
/*                                         <span class="caret"></span>*/
/*                                         <span class="sr-only">Desplegar men�</span>*/
/*                                     </button>*/
/* */
/*                                     <ul class="dropdown-menu" role="menu">*/
/*                                         {% if is_granted('ROLE_ADMIN') %}*/
/*                                             <li><a href="{{ path('equipos_index') }}">Equipos</a></li>*/
/*                                             <li><a href="{{ path('jugadores_index') }}">Jugadores</a></li>*/
/*                                             <li><a href="{{ path('arbitros_index') }}">Arbitros</a></li>*/
/*                                             <li><a href="{{ path('partidos_index') }}">Partidos</a></li>*/
/*                                             <li><a href="{{ path('editor_index') }}">Editar</a></li>*/
/* */
/* */
/*                                         {% else %}*/
/*                                             <li><a href="{{ path('editor_index') }}">Editar</a></li>*/
/*                                         {% endif %}*/
/*                                         <li class="divider"></li>*/
/* */
/*                                         <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                                                 Cerrar Sesi&oacuten</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             {% else %}*/
/*                                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                 </a>*/
/*                             {% endif %}*/
/* */
/*                         {% endblock %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         {% block editor %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
