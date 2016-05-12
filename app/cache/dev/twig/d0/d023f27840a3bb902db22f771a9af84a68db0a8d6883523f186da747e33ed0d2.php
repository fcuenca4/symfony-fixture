<?php

/* MiAppBundle::Default/index.html.twig */
class __TwigTemplate_f33ebc65dac7cdc887ed905934ea6c3c10994963eb0c7d1ed4006f0da4f38ff4 extends Twig_Template
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
        $__internal_2b9d607ff78301bca96c39b22a505f1c9afc607a1024dcc1af839feba5b1308e = $this->env->getExtension("native_profiler");
        $__internal_2b9d607ff78301bca96c39b22a505f1c9afc607a1024dcc1af839feba5b1308e->enter($__internal_2b9d607ff78301bca96c39b22a505f1c9afc607a1024dcc1af839feba5b1308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9d607ff78301bca96c39b22a505f1c9afc607a1024dcc1af839feba5b1308e->leave($__internal_2b9d607ff78301bca96c39b22a505f1c9afc607a1024dcc1af839feba5b1308e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e17fbb9adea3bf4e539133530eb1087e0f9bd22444028f589c19cdffd67f4639 = $this->env->getExtension("native_profiler");
        $__internal_e17fbb9adea3bf4e539133530eb1087e0f9bd22444028f589c19cdffd67f4639->enter($__internal_e17fbb9adea3bf4e539133530eb1087e0f9bd22444028f589c19cdffd67f4639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_e17fbb9adea3bf4e539133530eb1087e0f9bd22444028f589c19cdffd67f4639->leave($__internal_e17fbb9adea3bf4e539133530eb1087e0f9bd22444028f589c19cdffd67f4639_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_544c17bf4192e7acab78fdb98b7b4410ebf1f6ab2d0c5f6bea6e92515e43fc80 = $this->env->getExtension("native_profiler");
        $__internal_544c17bf4192e7acab78fdb98b7b4410ebf1f6ab2d0c5f6bea6e92515e43fc80->enter($__internal_544c17bf4192e7acab78fdb98b7b4410ebf1f6ab2d0c5f6bea6e92515e43fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_544c17bf4192e7acab78fdb98b7b4410ebf1f6ab2d0c5f6bea6e92515e43fc80->leave($__internal_544c17bf4192e7acab78fdb98b7b4410ebf1f6ab2d0c5f6bea6e92515e43fc80_prof);

    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        $__internal_3fc353ba1dee4bd22688bce105c6b1ce0dacd5dc9c3882ea98ec18831d939537 = $this->env->getExtension("native_profiler");
        $__internal_3fc353ba1dee4bd22688bce105c6b1ce0dacd5dc9c3882ea98ec18831d939537->enter($__internal_3fc353ba1dee4bd22688bce105c6b1ce0dacd5dc9c3882ea98ec18831d939537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_3fc353ba1dee4bd22688bce105c6b1ce0dacd5dc9c3882ea98ec18831d939537->leave($__internal_3fc353ba1dee4bd22688bce105c6b1ce0dacd5dc9c3882ea98ec18831d939537_prof);

    }

    // line 33
    public function block_editor($context, array $blocks = array())
    {
        $__internal_de825ae7757e1ef87ea2e0a45618ad2c7af3b696e3a2e9a9796bda9e85171b27 = $this->env->getExtension("native_profiler");
        $__internal_de825ae7757e1ef87ea2e0a45618ad2c7af3b696e3a2e9a9796bda9e85171b27->enter($__internal_de825ae7757e1ef87ea2e0a45618ad2c7af3b696e3a2e9a9796bda9e85171b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        
        $__internal_de825ae7757e1ef87ea2e0a45618ad2c7af3b696e3a2e9a9796bda9e85171b27->leave($__internal_de825ae7757e1ef87ea2e0a45618ad2c7af3b696e3a2e9a9796bda9e85171b27_prof);

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
