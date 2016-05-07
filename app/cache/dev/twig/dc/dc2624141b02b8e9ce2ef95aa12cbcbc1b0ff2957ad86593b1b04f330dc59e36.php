<?php

/* C:\xampp\htdocs\proyecto\src\MiAppBundle\Resources\views\Default\index.html.twig */
class __TwigTemplate_25ad3345049dbdf7488c94e5fe67824e537f63f08b598cee8274f5a2f53f7895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\Default\\index.html.twig", 1);
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
        $__internal_08c3014987f02d1d76b3f16fbe0cb44eedcffc7bc588bc9f9cba25d94a39e839 = $this->env->getExtension("native_profiler");
        $__internal_08c3014987f02d1d76b3f16fbe0cb44eedcffc7bc588bc9f9cba25d94a39e839->enter($__internal_08c3014987f02d1d76b3f16fbe0cb44eedcffc7bc588bc9f9cba25d94a39e839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c3014987f02d1d76b3f16fbe0cb44eedcffc7bc588bc9f9cba25d94a39e839->leave($__internal_08c3014987f02d1d76b3f16fbe0cb44eedcffc7bc588bc9f9cba25d94a39e839_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_949990d9a20e6108e027c1dfac087a5de17e2f09aff96ca8e3fd63d6c9ba7a19 = $this->env->getExtension("native_profiler");
        $__internal_949990d9a20e6108e027c1dfac087a5de17e2f09aff96ca8e3fd63d6c9ba7a19->enter($__internal_949990d9a20e6108e027c1dfac087a5de17e2f09aff96ca8e3fd63d6c9ba7a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_949990d9a20e6108e027c1dfac087a5de17e2f09aff96ca8e3fd63d6c9ba7a19->leave($__internal_949990d9a20e6108e027c1dfac087a5de17e2f09aff96ca8e3fd63d6c9ba7a19_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_097b08cc172481c72893d0e5af921934a66c16248db2e52465b2b88d5308c2bc = $this->env->getExtension("native_profiler");
        $__internal_097b08cc172481c72893d0e5af921934a66c16248db2e52465b2b88d5308c2bc->enter($__internal_097b08cc172481c72893d0e5af921934a66c16248db2e52465b2b88d5308c2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 24
        $this->displayBlock('editor', $context, $blocks);
        // line 25
        echo "    </div>

";
        
        $__internal_097b08cc172481c72893d0e5af921934a66c16248db2e52465b2b88d5308c2bc->leave($__internal_097b08cc172481c72893d0e5af921934a66c16248db2e52465b2b88d5308c2bc_prof);

    }

    // line 20
    public function block_login($context, array $blocks = array())
    {
        $__internal_a5d84c62857607dd1dbd8c380aca54bbfd7f9b16c517851a1c4410c3aacb2c23 = $this->env->getExtension("native_profiler");
        $__internal_a5d84c62857607dd1dbd8c380aca54bbfd7f9b16c517851a1c4410c3aacb2c23->enter($__internal_a5d84c62857607dd1dbd8c380aca54bbfd7f9b16c517851a1c4410c3aacb2c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 21
        echo "                ";
        
        $__internal_a5d84c62857607dd1dbd8c380aca54bbfd7f9b16c517851a1c4410c3aacb2c23->leave($__internal_a5d84c62857607dd1dbd8c380aca54bbfd7f9b16c517851a1c4410c3aacb2c23_prof);

    }

    // line 24
    public function block_editor($context, array $blocks = array())
    {
        $__internal_5869b409c2e0442d22bfd5e192343180dd27ec6e7648ee97e84f088df704ca53 = $this->env->getExtension("native_profiler");
        $__internal_5869b409c2e0442d22bfd5e192343180dd27ec6e7648ee97e84f088df704ca53->enter($__internal_5869b409c2e0442d22bfd5e192343180dd27ec6e7648ee97e84f088df704ca53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        
        $__internal_5869b409c2e0442d22bfd5e192343180dd27ec6e7648ee97e84f088df704ca53->leave($__internal_5869b409c2e0442d22bfd5e192343180dd27ec6e7648ee97e84f088df704ca53_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\proyecto\\src\\MiAppBundle\\Resources\\views\\Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  101 => 21,  95 => 20,  86 => 25,  84 => 24,  80 => 22,  78 => 20,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*                 {% block login %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </nav>*/
/*         {% block editor %}{% endblock %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
