<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_549a4468c6fe9f90087515633da51c3dd4d9056586c6d6354144983cbe5804ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_196ac31a5255fe89fb5627725d7823a89791be6c4a4357f2b8c24f62556bb1eb = $this->env->getExtension("native_profiler");
        $__internal_196ac31a5255fe89fb5627725d7823a89791be6c4a4357f2b8c24f62556bb1eb->enter($__internal_196ac31a5255fe89fb5627725d7823a89791be6c4a4357f2b8c24f62556bb1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196ac31a5255fe89fb5627725d7823a89791be6c4a4357f2b8c24f62556bb1eb->leave($__internal_196ac31a5255fe89fb5627725d7823a89791be6c4a4357f2b8c24f62556bb1eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb73487c566a5eaedcc6202c95f176595840fb92d4e73631475ca6133586a3f = $this->env->getExtension("native_profiler");
        $__internal_7bb73487c566a5eaedcc6202c95f176595840fb92d4e73631475ca6133586a3f->enter($__internal_7bb73487c566a5eaedcc6202c95f176595840fb92d4e73631475ca6133586a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Signup</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
    </div>
";
        
        $__internal_7bb73487c566a5eaedcc6202c95f176595840fb92d4e73631475ca6133586a3f->leave($__internal_7bb73487c566a5eaedcc6202c95f176595840fb92d4e73631475ca6133586a3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col s12 m8 offset-m2">*/
/*             <h4 class="card-panel teal lighten-2 white-head">Signup</h4>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col s12 m8 offset-m2">*/
/*             {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock body %}*/
