<?php

/* C:\xampp\htdocs\proyecto\src\MiAppBundle\Resources\views\navbar.html.twig */
class __TwigTemplate_a36382b08fad283da6baabeb2e0c76908622a0dd598c4d674accfe391d052410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbar.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_718d7a9084c2012a032e847d5849f9431aa727b3b48ded87fa68d378eb788240 = $this->env->getExtension("native_profiler");
        $__internal_718d7a9084c2012a032e847d5849f9431aa727b3b48ded87fa68d378eb788240->enter($__internal_718d7a9084c2012a032e847d5849f9431aa727b3b48ded87fa68d378eb788240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718d7a9084c2012a032e847d5849f9431aa727b3b48ded87fa68d378eb788240->leave($__internal_718d7a9084c2012a032e847d5849f9431aa727b3b48ded87fa68d378eb788240_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1fa8ce5a8be1a1c5dcc7fe7eb23add667ad60d497a067c4412563b67c9eeb29 = $this->env->getExtension("native_profiler");
        $__internal_c1fa8ce5a8be1a1c5dcc7fe7eb23add667ad60d497a067c4412563b67c9eeb29->enter($__internal_c1fa8ce5a8be1a1c5dcc7fe7eb23add667ad60d497a067c4412563b67c9eeb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_c1fa8ce5a8be1a1c5dcc7fe7eb23add667ad60d497a067c4412563b67c9eeb29->leave($__internal_c1fa8ce5a8be1a1c5dcc7fe7eb23add667ad60d497a067c4412563b67c9eeb29_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac772ec33295e8923348a413c7259b3612ca8938521391d2f77f62c294877bd = $this->env->getExtension("native_profiler");
        $__internal_7ac772ec33295e8923348a413c7259b3612ca8938521391d2f77f62c294877bd->enter($__internal_7ac772ec33295e8923348a413c7259b3612ca8938521391d2f77f62c294877bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                ";
        // line 20
        $this->displayBlock('login', $context, $blocks);
        // line 22
        echo "            </div>
        </nav>
    </div>
";
        
        $__internal_7ac772ec33295e8923348a413c7259b3612ca8938521391d2f77f62c294877bd->leave($__internal_7ac772ec33295e8923348a413c7259b3612ca8938521391d2f77f62c294877bd_prof);

    }

    // line 20
    public function block_login($context, array $blocks = array())
    {
        $__internal_e66e9734deeb0b1487a2bf81e0856b66ae40aed47b227e058f03c479d9cf4760 = $this->env->getExtension("native_profiler");
        $__internal_e66e9734deeb0b1487a2bf81e0856b66ae40aed47b227e058f03c479d9cf4760->enter($__internal_e66e9734deeb0b1487a2bf81e0856b66ae40aed47b227e058f03c479d9cf4760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 21
        echo "                ";
        
        $__internal_e66e9734deeb0b1487a2bf81e0856b66ae40aed47b227e058f03c479d9cf4760->leave($__internal_e66e9734deeb0b1487a2bf81e0856b66ae40aed47b227e058f03c479d9cf4760_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  89 => 20,  79 => 22,  77 => 20,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
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
/*                 {% block login %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* {% endblock %}*/
