<?php

/* MiAppBundle::navbar.html.twig */
class __TwigTemplate_4b3e3c935bdd1452a43dfcc4c1113974239688f076dce3a296212fd225d649c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::navbar.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74fc1f4c941d827896d063a09d63db4c51e84ba42923a6273a29d5f3ed880538 = $this->env->getExtension("native_profiler");
        $__internal_74fc1f4c941d827896d063a09d63db4c51e84ba42923a6273a29d5f3ed880538->enter($__internal_74fc1f4c941d827896d063a09d63db4c51e84ba42923a6273a29d5f3ed880538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fc1f4c941d827896d063a09d63db4c51e84ba42923a6273a29d5f3ed880538->leave($__internal_74fc1f4c941d827896d063a09d63db4c51e84ba42923a6273a29d5f3ed880538_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e8b8c739e3f1c4122c26a044f3b7237871e694dbfad82a8b28f4e01a5a75401 = $this->env->getExtension("native_profiler");
        $__internal_2e8b8c739e3f1c4122c26a044f3b7237871e694dbfad82a8b28f4e01a5a75401->enter($__internal_2e8b8c739e3f1c4122c26a044f3b7237871e694dbfad82a8b28f4e01a5a75401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/navpadding.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_2e8b8c739e3f1c4122c26a044f3b7237871e694dbfad82a8b28f4e01a5a75401->leave($__internal_2e8b8c739e3f1c4122c26a044f3b7237871e694dbfad82a8b28f4e01a5a75401_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ace941e7fd12201eaaa530ad4dca0a3d865fc5eeb28d170424648cd77719a46c = $this->env->getExtension("native_profiler");
        $__internal_ace941e7fd12201eaaa530ad4dca0a3d865fc5eeb28d170424648cd77719a46c->enter($__internal_ace941e7fd12201eaaa530ad4dca0a3d865fc5eeb28d170424648cd77719a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "

            </div>
        </nav>
    </div>



";
        
        $__internal_ace941e7fd12201eaaa530ad4dca0a3d865fc5eeb28d170424648cd77719a46c->leave($__internal_ace941e7fd12201eaaa530ad4dca0a3d865fc5eeb28d170424648cd77719a46c_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/miapp/css/navpadding.css') }}" type="text/css" rel="stylesheet" />*/
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
/*                 {{ block('fos_user_content') }}*/
/* */
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
