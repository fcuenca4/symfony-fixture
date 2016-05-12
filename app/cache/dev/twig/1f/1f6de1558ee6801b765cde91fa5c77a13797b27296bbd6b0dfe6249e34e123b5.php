<?php

/* ::base.html.twig */
class __TwigTemplate_3c01208796e50e0678fabfc5e19b4f274d1d95ad60795a9ddd8cf2a18a872e43 extends Twig_Template
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
        $__internal_6c7167cedc3f3866d562fc777d724f6f512f24c283197559cfed6563b13ebb0a = $this->env->getExtension("native_profiler");
        $__internal_6c7167cedc3f3866d562fc777d724f6f512f24c283197559cfed6563b13ebb0a->enter($__internal_6c7167cedc3f3866d562fc777d724f6f512f24c283197559cfed6563b13ebb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6c7167cedc3f3866d562fc777d724f6f512f24c283197559cfed6563b13ebb0a->leave($__internal_6c7167cedc3f3866d562fc777d724f6f512f24c283197559cfed6563b13ebb0a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af55065e5e4ac5916359a1a4f24d7aab56498e71cbd83a7282a034c11e741106 = $this->env->getExtension("native_profiler");
        $__internal_af55065e5e4ac5916359a1a4f24d7aab56498e71cbd83a7282a034c11e741106->enter($__internal_af55065e5e4ac5916359a1a4f24d7aab56498e71cbd83a7282a034c11e741106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_af55065e5e4ac5916359a1a4f24d7aab56498e71cbd83a7282a034c11e741106->leave($__internal_af55065e5e4ac5916359a1a4f24d7aab56498e71cbd83a7282a034c11e741106_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d530b2f40b124e4777d93864f0795359a84b51ff9256fb333e92ea6938da22a = $this->env->getExtension("native_profiler");
        $__internal_1d530b2f40b124e4777d93864f0795359a84b51ff9256fb333e92ea6938da22a->enter($__internal_1d530b2f40b124e4777d93864f0795359a84b51ff9256fb333e92ea6938da22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_1d530b2f40b124e4777d93864f0795359a84b51ff9256fb333e92ea6938da22a->leave($__internal_1d530b2f40b124e4777d93864f0795359a84b51ff9256fb333e92ea6938da22a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b49c370b557044ccd41caa6097754c64405874eb4f82d02116a8b0183a71853 = $this->env->getExtension("native_profiler");
        $__internal_9b49c370b557044ccd41caa6097754c64405874eb4f82d02116a8b0183a71853->enter($__internal_9b49c370b557044ccd41caa6097754c64405874eb4f82d02116a8b0183a71853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b49c370b557044ccd41caa6097754c64405874eb4f82d02116a8b0183a71853->leave($__internal_9b49c370b557044ccd41caa6097754c64405874eb4f82d02116a8b0183a71853_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f1601af7039e4cc5a0c41dbaf4a2cc21d4ea7c5cf59e2f1f8c4f42ef8fc7385 = $this->env->getExtension("native_profiler");
        $__internal_5f1601af7039e4cc5a0c41dbaf4a2cc21d4ea7c5cf59e2f1f8c4f42ef8fc7385->enter($__internal_5f1601af7039e4cc5a0c41dbaf4a2cc21d4ea7c5cf59e2f1f8c4f42ef8fc7385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5f1601af7039e4cc5a0c41dbaf4a2cc21d4ea7c5cf59e2f1f8c4f42ef8fc7385->leave($__internal_5f1601af7039e4cc5a0c41dbaf4a2cc21d4ea7c5cf59e2f1f8c4f42ef8fc7385_prof);

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
