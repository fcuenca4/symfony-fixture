<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_ab9c1f0b055fc79ce1d0d4d2eb3649a3e4274b3c7f0e72cea235a88e634943c6 extends Twig_Template
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
        $__internal_6161a0342c7b6f4499dcee362a4f29b0b8203ad38c6264d22503eb0d04970e83 = $this->env->getExtension("native_profiler");
        $__internal_6161a0342c7b6f4499dcee362a4f29b0b8203ad38c6264d22503eb0d04970e83->enter($__internal_6161a0342c7b6f4499dcee362a4f29b0b8203ad38c6264d22503eb0d04970e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6161a0342c7b6f4499dcee362a4f29b0b8203ad38c6264d22503eb0d04970e83->leave($__internal_6161a0342c7b6f4499dcee362a4f29b0b8203ad38c6264d22503eb0d04970e83_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acfc2868ade730a8b3055cb184cbb13d2c72dd702c33b6aee540005570701c89 = $this->env->getExtension("native_profiler");
        $__internal_acfc2868ade730a8b3055cb184cbb13d2c72dd702c33b6aee540005570701c89->enter($__internal_acfc2868ade730a8b3055cb184cbb13d2c72dd702c33b6aee540005570701c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_acfc2868ade730a8b3055cb184cbb13d2c72dd702c33b6aee540005570701c89->leave($__internal_acfc2868ade730a8b3055cb184cbb13d2c72dd702c33b6aee540005570701c89_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7e793e2f2b74f2796c8e8f2152ff1258690c4d49fa651662649986f035a08f2 = $this->env->getExtension("native_profiler");
        $__internal_d7e793e2f2b74f2796c8e8f2152ff1258690c4d49fa651662649986f035a08f2->enter($__internal_d7e793e2f2b74f2796c8e8f2152ff1258690c4d49fa651662649986f035a08f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
                    <a class=\"navbar-brand\" href=\"/\">Torneo de Futbol</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"
                          class=\"navbar-form navbar-right form-inline\">
                        ";
        // line 23
        $this->displayBlock('login', $context, $blocks);
        // line 29
        echo "                    </form>
                </div>
            </div>
        </nav>
        ";
        // line 33
        $this->displayBlock('editor', $context, $blocks);
        // line 34
        echo "    </div>

";
        
        $__internal_d7e793e2f2b74f2796c8e8f2152ff1258690c4d49fa651662649986f035a08f2->leave($__internal_d7e793e2f2b74f2796c8e8f2152ff1258690c4d49fa651662649986f035a08f2_prof);

    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        $__internal_98bd82fc75347a5d46c7a47d48ac395f44f91f3702f7a57b625cffcaf4ab99e8 = $this->env->getExtension("native_profiler");
        $__internal_98bd82fc75347a5d46c7a47d48ac395f44f91f3702f7a57b625cffcaf4ab99e8->enter($__internal_98bd82fc75347a5d46c7a47d48ac395f44f91f3702f7a57b625cffcaf4ab99e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 24
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 25
            echo "                                Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " Privilegios: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
            echo "
                            ";
        }
        // line 27
        echo "
                        ";
        
        $__internal_98bd82fc75347a5d46c7a47d48ac395f44f91f3702f7a57b625cffcaf4ab99e8->leave($__internal_98bd82fc75347a5d46c7a47d48ac395f44f91f3702f7a57b625cffcaf4ab99e8_prof);

    }

    // line 33
    public function block_editor($context, array $blocks = array())
    {
        $__internal_5e1823dd62467ba459f82f3484de578528225251e93859c9782d783230b31e86 = $this->env->getExtension("native_profiler");
        $__internal_5e1823dd62467ba459f82f3484de578528225251e93859c9782d783230b31e86->enter($__internal_5e1823dd62467ba459f82f3484de578528225251e93859c9782d783230b31e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        
        $__internal_5e1823dd62467ba459f82f3484de578528225251e93859c9782d783230b31e86->leave($__internal_5e1823dd62467ba459f82f3484de578528225251e93859c9782d783230b31e86_prof);

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
        return array (  128 => 33,  120 => 27,  112 => 25,  109 => 24,  103 => 23,  94 => 34,  92 => 33,  86 => 29,  84 => 23,  79 => 21,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/miapp/css/navpadding.css') }}" type="text/css" rel="stylesheet"/>*/
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
/*                     <a class="navbar-brand" href="/">Torneo de Futbol</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post"*/
/*                           class="navbar-form navbar-right form-inline">*/
/*                         {% block login %}*/
/*                             {% if is_granted("ROLE_USER") %}*/
/*                                 Bienvenido {{ app.user.username }} Privilegios: {{ app.user.roles[0] }}*/
/*                             {% endif %}*/
/* */
/*                         {% endblock %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*         {% block editor %}{% endblock %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
