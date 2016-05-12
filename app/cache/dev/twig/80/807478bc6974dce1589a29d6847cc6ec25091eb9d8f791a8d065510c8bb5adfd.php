<?php

/* ::base.html.twig */
class __TwigTemplate_ad6b8a5be1cbba7af3705dfbf8227b19b77dd667a6aeda5506872be801821687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39a90553b5d456ca9705fe75bfeda08feb50257f9a68523fcf8ecb0fa5bee614 = $this->env->getExtension("native_profiler");
        $__internal_39a90553b5d456ca9705fe75bfeda08feb50257f9a68523fcf8ecb0fa5bee614->enter($__internal_39a90553b5d456ca9705fe75bfeda08feb50257f9a68523fcf8ecb0fa5bee614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</body>

</html>
";
        
        $__internal_39a90553b5d456ca9705fe75bfeda08feb50257f9a68523fcf8ecb0fa5bee614->leave($__internal_39a90553b5d456ca9705fe75bfeda08feb50257f9a68523fcf8ecb0fa5bee614_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6be74f4a8ddbf6fbd0c2a90114387031696e33b8233e08aab14539673e9d9cba = $this->env->getExtension("native_profiler");
        $__internal_6be74f4a8ddbf6fbd0c2a90114387031696e33b8233e08aab14539673e9d9cba->enter($__internal_6be74f4a8ddbf6fbd0c2a90114387031696e33b8233e08aab14539673e9d9cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_6be74f4a8ddbf6fbd0c2a90114387031696e33b8233e08aab14539673e9d9cba->leave($__internal_6be74f4a8ddbf6fbd0c2a90114387031696e33b8233e08aab14539673e9d9cba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b235b72686ae41e265c87f705bb4d843c59dcc642d241a2fd6ab3aab3d51e88 = $this->env->getExtension("native_profiler");
        $__internal_0b235b72686ae41e265c87f705bb4d843c59dcc642d241a2fd6ab3aab3d51e88->enter($__internal_0b235b72686ae41e265c87f705bb4d843c59dcc642d241a2fd6ab3aab3d51e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_0b235b72686ae41e265c87f705bb4d843c59dcc642d241a2fd6ab3aab3d51e88->leave($__internal_0b235b72686ae41e265c87f705bb4d843c59dcc642d241a2fd6ab3aab3d51e88_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d65be7ee15eb9d5cebcbe99bc57ad6cf001e2222b205ba08fe6d336829e916 = $this->env->getExtension("native_profiler");
        $__internal_65d65be7ee15eb9d5cebcbe99bc57ad6cf001e2222b205ba08fe6d336829e916->enter($__internal_65d65be7ee15eb9d5cebcbe99bc57ad6cf001e2222b205ba08fe6d336829e916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65d65be7ee15eb9d5cebcbe99bc57ad6cf001e2222b205ba08fe6d336829e916->leave($__internal_65d65be7ee15eb9d5cebcbe99bc57ad6cf001e2222b205ba08fe6d336829e916_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fff5ae41d81b036118705c92efce90f41b091023ff0c431c4f8ecf13089b6195 = $this->env->getExtension("native_profiler");
        $__internal_fff5ae41d81b036118705c92efce90f41b091023ff0c431c4f8ecf13089b6195->enter($__internal_fff5ae41d81b036118705c92efce90f41b091023ff0c431c4f8ecf13089b6195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fff5ae41d81b036118705c92efce90f41b091023ff0c431c4f8ecf13089b6195->leave($__internal_fff5ae41d81b036118705c92efce90f41b091023ff0c431c4f8ecf13089b6195_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 16,  104 => 15,  98 => 14,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  49 => 18,  47 => 14,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Torneo Futbol{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/miapp/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/miapp/js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('bundles/miapp/js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
