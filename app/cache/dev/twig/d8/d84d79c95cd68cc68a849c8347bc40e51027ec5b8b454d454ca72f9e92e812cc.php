<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_0fc27207f58d0d5c8d5451ebad905caa33229d9a75087e2483d6134bb92c1629 extends Twig_Template
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
        $__internal_cab98262a97dde82f179d83f174e0fd58c46d45e501ed3e32f4639882fd49710 = $this->env->getExtension("native_profiler");
        $__internal_cab98262a97dde82f179d83f174e0fd58c46d45e501ed3e32f4639882fd49710->enter($__internal_cab98262a97dde82f179d83f174e0fd58c46d45e501ed3e32f4639882fd49710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cab98262a97dde82f179d83f174e0fd58c46d45e501ed3e32f4639882fd49710->leave($__internal_cab98262a97dde82f179d83f174e0fd58c46d45e501ed3e32f4639882fd49710_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b206496a8fe8046a77cd004dca8565b5d9dd4bcfa55fd63814110a19a5e0d6b3 = $this->env->getExtension("native_profiler");
        $__internal_b206496a8fe8046a77cd004dca8565b5d9dd4bcfa55fd63814110a19a5e0d6b3->enter($__internal_b206496a8fe8046a77cd004dca8565b5d9dd4bcfa55fd63814110a19a5e0d6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Luckiest+Guy\" />
";
        
        $__internal_b206496a8fe8046a77cd004dca8565b5d9dd4bcfa55fd63814110a19a5e0d6b3->leave($__internal_b206496a8fe8046a77cd004dca8565b5d9dd4bcfa55fd63814110a19a5e0d6b3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f2dac27473959ddccb6273d6fe570f695b29012fffd3b0e1755e900489a2fb4 = $this->env->getExtension("native_profiler");
        $__internal_7f2dac27473959ddccb6273d6fe570f695b29012fffd3b0e1755e900489a2fb4->enter($__internal_7f2dac27473959ddccb6273d6fe570f695b29012fffd3b0e1755e900489a2fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
                    <a class=\"navbar-brand\" href=\"/\" style=\"font-family: 'Luckiest Guy'; font-size: 40px;\">Torneo de Futbol</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"
                          class=\"navbar-form navbar-right form-inline\">
                        ";
        // line 24
        $this->displayBlock('login', $context, $blocks);
        // line 51
        echo "                    </form>
                </div>
            </div>
        </nav>
\t\t
        ";
        // line 56
        $this->displayBlock('editor', $context, $blocks);
        // line 59
        echo "    </div>

";
        
        $__internal_7f2dac27473959ddccb6273d6fe570f695b29012fffd3b0e1755e900489a2fb4->leave($__internal_7f2dac27473959ddccb6273d6fe570f695b29012fffd3b0e1755e900489a2fb4_prof);

    }

    // line 24
    public function block_login($context, array $blocks = array())
    {
        $__internal_c7e6b408898f8ae5a232f71f4c2139834f29b7639c9ae4ee1a2d00fedcecf9d4 = $this->env->getExtension("native_profiler");
        $__internal_c7e6b408898f8ae5a232f71f4c2139834f29b7639c9ae4ee1a2d00fedcecf9d4->enter($__internal_c7e6b408898f8ae5a232f71f4c2139834f29b7639c9ae4ee1a2d00fedcecf9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 25
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 26
            echo "                                Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t<!--Privilegios: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
            echo "-->
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-cog\" style=\"color:white\"></span>
\t\t\t\t\t\t\t\t\t</button>
 
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Desplegar menú</span>
\t\t\t\t\t\t\t\t\t</button>
 
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("equipos_index");
            echo "\">Equipos</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("jugadores_index");
            echo "\">Jugadores</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("arbitros_index");
            echo "\">Arbitros</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("partidos_index");
            echo "\">Partidos</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Cerrar Sesi&oacuten</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 49
        echo "
                        ";
        
        $__internal_c7e6b408898f8ae5a232f71f4c2139834f29b7639c9ae4ee1a2d00fedcecf9d4->leave($__internal_c7e6b408898f8ae5a232f71f4c2139834f29b7639c9ae4ee1a2d00fedcecf9d4_prof);

    }

    // line 56
    public function block_editor($context, array $blocks = array())
    {
        $__internal_f7137f44ab9729d89de86ab9b1b264acbab51bc79fb8f40b1276c1a56f331806 = $this->env->getExtension("native_profiler");
        $__internal_f7137f44ab9729d89de86ab9b1b264acbab51bc79fb8f40b1276c1a56f331806->enter($__internal_f7137f44ab9729d89de86ab9b1b264acbab51bc79fb8f40b1276c1a56f331806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 57
        echo "\t\t
        ";
        
        $__internal_f7137f44ab9729d89de86ab9b1b264acbab51bc79fb8f40b1276c1a56f331806->leave($__internal_f7137f44ab9729d89de86ab9b1b264acbab51bc79fb8f40b1276c1a56f331806_prof);

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
        return array (  170 => 57,  164 => 56,  156 => 49,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  119 => 27,  114 => 26,  111 => 25,  105 => 24,  96 => 59,  94 => 56,  87 => 51,  85 => 24,  80 => 22,  64 => 8,  58 => 7,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/miapp/css/navpadding.css') }}" type="text/css" rel="stylesheet"/>*/
/* 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Luckiest+Guy" />*/
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
/*                     <a class="navbar-brand" href="/" style="font-family: 'Luckiest Guy'; font-size: 40px;">Torneo de Futbol</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post"*/
/*                           class="navbar-form navbar-right form-inline">*/
/*                         {% block login %}*/
/*                             {% if is_granted("ROLE_USER") %}*/
/*                                 Bienvenido {{ app.user.username }} */
/* 								<!--Privilegios: {{ app.user.roles[0] }}-->*/
/* 								<div class="btn-group">*/
/* 									<button type="button" class="btn btn-primary">*/
/* 										<span class="glyphicon glyphicon-cog" style="color:white"></span>*/
/* 									</button>*/
/*  */
/* 									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/* 										<span class="caret"></span>*/
/* 										<span class="sr-only">Desplegar menú</span>*/
/* 									</button>*/
/*  */
/* 									<ul class="dropdown-menu" role="menu">*/
/* 										<li><a href="{{path('equipos_index')}}">Equipos</a></li>*/
/* 										<li><a href="{{path('jugadores_index')}}">Jugadores</a></li>*/
/* 										<li><a href="{{path('arbitros_index')}}">Arbitros</a></li>*/
/* 										<li><a href="{{path('partidos_index')}}">Partidos</a></li>*/
/* 										<li class="divider"></li>*/
/* 										<li><a href="#">Cerrar Sesi&oacuten</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							*/
/* 							{% endif %}*/
/* */
/*                         {% endblock %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* 		*/
/*         {% block editor %}*/
/* 		*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
