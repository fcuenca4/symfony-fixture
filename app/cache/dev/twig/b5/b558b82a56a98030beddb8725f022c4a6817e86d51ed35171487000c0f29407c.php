<?php

/* ::base.html.twig */
class __TwigTemplate_770cabdb69225ca3b9a931865526aa6b5ed25dbdaa969e841738e92e5326de08 extends Twig_Template
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
        $__internal_e95cc0158e8a60ed469af7ae1415b92b7f857eb19741a474856225173ef15c6f = $this->env->getExtension("native_profiler");
        $__internal_e95cc0158e8a60ed469af7ae1415b92b7f857eb19741a474856225173ef15c6f->enter($__internal_e95cc0158e8a60ed469af7ae1415b92b7f857eb19741a474856225173ef15c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e95cc0158e8a60ed469af7ae1415b92b7f857eb19741a474856225173ef15c6f->leave($__internal_e95cc0158e8a60ed469af7ae1415b92b7f857eb19741a474856225173ef15c6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dec9e4564cf5dd5bd6caffc0f837cb03c62c93af6f78e9d39027664c1eb371c = $this->env->getExtension("native_profiler");
        $__internal_7dec9e4564cf5dd5bd6caffc0f837cb03c62c93af6f78e9d39027664c1eb371c->enter($__internal_7dec9e4564cf5dd5bd6caffc0f837cb03c62c93af6f78e9d39027664c1eb371c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Torneo Futbol";
        
        $__internal_7dec9e4564cf5dd5bd6caffc0f837cb03c62c93af6f78e9d39027664c1eb371c->leave($__internal_7dec9e4564cf5dd5bd6caffc0f837cb03c62c93af6f78e9d39027664c1eb371c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b644a41a9aa695148ff5e13315384f55bf41c6577caa04cf06f1cf51462a714 = $this->env->getExtension("native_profiler");
        $__internal_8b644a41a9aa695148ff5e13315384f55bf41c6577caa04cf06f1cf51462a714->enter($__internal_8b644a41a9aa695148ff5e13315384f55bf41c6577caa04cf06f1cf51462a714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_8b644a41a9aa695148ff5e13315384f55bf41c6577caa04cf06f1cf51462a714->leave($__internal_8b644a41a9aa695148ff5e13315384f55bf41c6577caa04cf06f1cf51462a714_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a4c13cb9cfcd74ca53235956d40484d7eacc331f57dfac561cb2059f039f71 = $this->env->getExtension("native_profiler");
        $__internal_70a4c13cb9cfcd74ca53235956d40484d7eacc331f57dfac561cb2059f039f71->enter($__internal_70a4c13cb9cfcd74ca53235956d40484d7eacc331f57dfac561cb2059f039f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70a4c13cb9cfcd74ca53235956d40484d7eacc331f57dfac561cb2059f039f71->leave($__internal_70a4c13cb9cfcd74ca53235956d40484d7eacc331f57dfac561cb2059f039f71_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e619c915013ee7787a6f9d7ce3b3d35b38c665a60bed16f78340af483a70275d = $this->env->getExtension("native_profiler");
        $__internal_e619c915013ee7787a6f9d7ce3b3d35b38c665a60bed16f78340af483a70275d->enter($__internal_e619c915013ee7787a6f9d7ce3b3d35b38c665a60bed16f78340af483a70275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e619c915013ee7787a6f9d7ce3b3d35b38c665a60bed16f78340af483a70275d->leave($__internal_e619c915013ee7787a6f9d7ce3b3d35b38c665a60bed16f78340af483a70275d_prof);

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
