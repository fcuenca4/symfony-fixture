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
        $__internal_c7a8595fd3c52b6432aa0eea9c810dcb67e0d38cf864150e24e7650319228fcb = $this->env->getExtension("native_profiler");
        $__internal_c7a8595fd3c52b6432aa0eea9c810dcb67e0d38cf864150e24e7650319228fcb->enter($__internal_c7a8595fd3c52b6432aa0eea9c810dcb67e0d38cf864150e24e7650319228fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a8595fd3c52b6432aa0eea9c810dcb67e0d38cf864150e24e7650319228fcb->leave($__internal_c7a8595fd3c52b6432aa0eea9c810dcb67e0d38cf864150e24e7650319228fcb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba132ef7513ffb6208d30fa774803809956c1a9f017e2b18080fd12644402f6f = $this->env->getExtension("native_profiler");
        $__internal_ba132ef7513ffb6208d30fa774803809956c1a9f017e2b18080fd12644402f6f->enter($__internal_ba132ef7513ffb6208d30fa774803809956c1a9f017e2b18080fd12644402f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_ba132ef7513ffb6208d30fa774803809956c1a9f017e2b18080fd12644402f6f->leave($__internal_ba132ef7513ffb6208d30fa774803809956c1a9f017e2b18080fd12644402f6f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea755e993b6ca4887d51d799ce16656ace1eab6e85d611f57d2ca42be438b6b1 = $this->env->getExtension("native_profiler");
        $__internal_ea755e993b6ca4887d51d799ce16656ace1eab6e85d611f57d2ca42be438b6b1->enter($__internal_ea755e993b6ca4887d51d799ce16656ace1eab6e85d611f57d2ca42be438b6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea755e993b6ca4887d51d799ce16656ace1eab6e85d611f57d2ca42be438b6b1->leave($__internal_ea755e993b6ca4887d51d799ce16656ace1eab6e85d611f57d2ca42be438b6b1_prof);

    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        $__internal_59e429ebba0d1b1c7263d5dff964ffa09eb2788bdeb8d105c63206356afc5590 = $this->env->getExtension("native_profiler");
        $__internal_59e429ebba0d1b1c7263d5dff964ffa09eb2788bdeb8d105c63206356afc5590->enter($__internal_59e429ebba0d1b1c7263d5dff964ffa09eb2788bdeb8d105c63206356afc5590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_59e429ebba0d1b1c7263d5dff964ffa09eb2788bdeb8d105c63206356afc5590->leave($__internal_59e429ebba0d1b1c7263d5dff964ffa09eb2788bdeb8d105c63206356afc5590_prof);

    }

    // line 33
    public function block_editor($context, array $blocks = array())
    {
        $__internal_88db99a62bd0ed701254d739ab5d3bf2e7a249e9d0ff9beb95eaecd09ade92e5 = $this->env->getExtension("native_profiler");
        $__internal_88db99a62bd0ed701254d739ab5d3bf2e7a249e9d0ff9beb95eaecd09ade92e5->enter($__internal_88db99a62bd0ed701254d739ab5d3bf2e7a249e9d0ff9beb95eaecd09ade92e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        
        $__internal_88db99a62bd0ed701254d739ab5d3bf2e7a249e9d0ff9beb95eaecd09ade92e5->leave($__internal_88db99a62bd0ed701254d739ab5d3bf2e7a249e9d0ff9beb95eaecd09ade92e5_prof);

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
