<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_3d24d43d99e13fc8b376f819c854c002b652a2fbed190eed9284eb85bcad0f06 extends Twig_Template
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
        $__internal_fb0ed598486b77ade6b2e50e2babd248e5194a464d109dfbeeb3a1da040e2a3d = $this->env->getExtension("native_profiler");
        $__internal_fb0ed598486b77ade6b2e50e2babd248e5194a464d109dfbeeb3a1da040e2a3d->enter($__internal_fb0ed598486b77ade6b2e50e2babd248e5194a464d109dfbeeb3a1da040e2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0ed598486b77ade6b2e50e2babd248e5194a464d109dfbeeb3a1da040e2a3d->leave($__internal_fb0ed598486b77ade6b2e50e2babd248e5194a464d109dfbeeb3a1da040e2a3d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ef61dc0d570b122142fed0c304f749b524cc2f6e111cdb5ddbf28cc419af864 = $this->env->getExtension("native_profiler");
        $__internal_9ef61dc0d570b122142fed0c304f749b524cc2f6e111cdb5ddbf28cc419af864->enter($__internal_9ef61dc0d570b122142fed0c304f749b524cc2f6e111cdb5ddbf28cc419af864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_9ef61dc0d570b122142fed0c304f749b524cc2f6e111cdb5ddbf28cc419af864->leave($__internal_9ef61dc0d570b122142fed0c304f749b524cc2f6e111cdb5ddbf28cc419af864_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_08404e23c49b19059f9101a4b97b31fb07955f1d4122c589d35fea606f96b7b6 = $this->env->getExtension("native_profiler");
        $__internal_08404e23c49b19059f9101a4b97b31fb07955f1d4122c589d35fea606f96b7b6->enter($__internal_08404e23c49b19059f9101a4b97b31fb07955f1d4122c589d35fea606f96b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08404e23c49b19059f9101a4b97b31fb07955f1d4122c589d35fea606f96b7b6->leave($__internal_08404e23c49b19059f9101a4b97b31fb07955f1d4122c589d35fea606f96b7b6_prof);

    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        $__internal_8dc93c72302d71de0ef368acdb7f07843a7c8dbd9c9c6a276207680065334dc3 = $this->env->getExtension("native_profiler");
        $__internal_8dc93c72302d71de0ef368acdb7f07843a7c8dbd9c9c6a276207680065334dc3->enter($__internal_8dc93c72302d71de0ef368acdb7f07843a7c8dbd9c9c6a276207680065334dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_8dc93c72302d71de0ef368acdb7f07843a7c8dbd9c9c6a276207680065334dc3->leave($__internal_8dc93c72302d71de0ef368acdb7f07843a7c8dbd9c9c6a276207680065334dc3_prof);

    }

    // line 33
    public function block_editor($context, array $blocks = array())
    {
        $__internal_567a7678a2737feea508b95501bdb7c4b96b623d2afec6c3c0f7a795e2e9b84e = $this->env->getExtension("native_profiler");
        $__internal_567a7678a2737feea508b95501bdb7c4b96b623d2afec6c3c0f7a795e2e9b84e->enter($__internal_567a7678a2737feea508b95501bdb7c4b96b623d2afec6c3c0f7a795e2e9b84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        
        $__internal_567a7678a2737feea508b95501bdb7c4b96b623d2afec6c3c0f7a795e2e9b84e->leave($__internal_567a7678a2737feea508b95501bdb7c4b96b623d2afec6c3c0f7a795e2e9b84e_prof);

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
