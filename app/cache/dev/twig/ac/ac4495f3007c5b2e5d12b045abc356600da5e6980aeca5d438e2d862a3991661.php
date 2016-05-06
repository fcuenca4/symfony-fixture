<?php

/* ::base.html.twig */
class __TwigTemplate_2038cc02266f2ebece922e5b73aae651745bb00ee04074433dd7bb7435a1db9b extends Twig_Template
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
        $__internal_7a6b24417efbeb9c7ae9bd75b08c750a478ce83cd751e2f6141dfd4dcd8d6f18 = $this->env->getExtension("native_profiler");
        $__internal_7a6b24417efbeb9c7ae9bd75b08c750a478ce83cd751e2f6141dfd4dcd8d6f18->enter($__internal_7a6b24417efbeb9c7ae9bd75b08c750a478ce83cd751e2f6141dfd4dcd8d6f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>                                                       
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        echo "                           
        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        echo "                 
    </body>
</html>";
        
        $__internal_7a6b24417efbeb9c7ae9bd75b08c750a478ce83cd751e2f6141dfd4dcd8d6f18->leave($__internal_7a6b24417efbeb9c7ae9bd75b08c750a478ce83cd751e2f6141dfd4dcd8d6f18_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f34bc762fda345bf46fde23aa6c61cef5480674dc078ce8c480d003e4577d72 = $this->env->getExtension("native_profiler");
        $__internal_8f34bc762fda345bf46fde23aa6c61cef5480674dc078ce8c480d003e4577d72->enter($__internal_8f34bc762fda345bf46fde23aa6c61cef5480674dc078ce8c480d003e4577d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f34bc762fda345bf46fde23aa6c61cef5480674dc078ce8c480d003e4577d72->leave($__internal_8f34bc762fda345bf46fde23aa6c61cef5480674dc078ce8c480d003e4577d72_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac408b5c63eab372cfb96519f0d974e3a6e92b72d994d5424dff717f2e40bead = $this->env->getExtension("native_profiler");
        $__internal_ac408b5c63eab372cfb96519f0d974e3a6e92b72d994d5424dff717f2e40bead->enter($__internal_ac408b5c63eab372cfb96519f0d974e3a6e92b72d994d5424dff717f2e40bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac408b5c63eab372cfb96519f0d974e3a6e92b72d994d5424dff717f2e40bead->leave($__internal_ac408b5c63eab372cfb96519f0d974e3a6e92b72d994d5424dff717f2e40bead_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c896dd4201a50f42c67ac19407c468ca0b4e36de5e219f7388f086c56981ab39 = $this->env->getExtension("native_profiler");
        $__internal_c896dd4201a50f42c67ac19407c468ca0b4e36de5e219f7388f086c56981ab39->enter($__internal_c896dd4201a50f42c67ac19407c468ca0b4e36de5e219f7388f086c56981ab39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c896dd4201a50f42c67ac19407c468ca0b4e36de5e219f7388f086c56981ab39->leave($__internal_c896dd4201a50f42c67ac19407c468ca0b4e36de5e219f7388f086c56981ab39_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54928ab107ac4ba50b16770b926423bcf1d6da511047252ccc362e4b7231cdc9 = $this->env->getExtension("native_profiler");
        $__internal_54928ab107ac4ba50b16770b926423bcf1d6da511047252ccc362e4b7231cdc9->enter($__internal_54928ab107ac4ba50b16770b926423bcf1d6da511047252ccc362e4b7231cdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_54928ab107ac4ba50b16770b926423bcf1d6da511047252ccc362e4b7231cdc9->leave($__internal_54928ab107ac4ba50b16770b926423bcf1d6da511047252ccc362e4b7231cdc9_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  49 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>                                                       */
/*         {% block body %}{% endblock %}                           */
/*         {% block javascripts %}{% endblock %}                 */
/*     </body>*/
/* </html>*/
