<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6a3843b3ce0c950f9e07e32c2a70245f0d3b9b9e75798f1230ccabf7ee44dca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47c7fc20fbcd88d5278599a5996eb2bf377a4591bdf48867aa7221762d9ad77f = $this->env->getExtension("native_profiler");
        $__internal_47c7fc20fbcd88d5278599a5996eb2bf377a4591bdf48867aa7221762d9ad77f->enter($__internal_47c7fc20fbcd88d5278599a5996eb2bf377a4591bdf48867aa7221762d9ad77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "register")));
        echo "
  <div class=\"row\">
    <div class=\"input-field col s12\">
      ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
      ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
    </div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
      ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
    </div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
    </div>
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
  </div>
  <div class=\"row no-padding\">
    <div class=\"input-field col s12\">
      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
    </div>
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
  </div>
  <div align=\"center\" class=\"button-wrap\">
    <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
      <i class=\"material-icons\">send</i>
    </button>
  </div>
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_47c7fc20fbcd88d5278599a5996eb2bf377a4591bdf48867aa7221762d9ad77f->leave($__internal_47c7fc20fbcd88d5278599a5996eb2bf377a4591bdf48867aa7221762d9ad77f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 33,  85 => 29,  80 => 27,  76 => 26,  69 => 22,  64 => 20,  60 => 19,  53 => 15,  48 => 13,  44 => 12,  37 => 8,  32 => 6,  28 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {{form_start(form, {'method': 'POST', 'attr':{'class': 'register'}})}}*/
/*   <div class="row">*/
/*     <div class="input-field col s12">*/
/*       {{ form_label(form.username) }}*/
/*       {{ form_widget(form.username) }}*/
/*     </div>*/
/*     {{ form_errors(form.username) }}*/
/*   </div>*/
/*   <div class="row no-padding">*/
/*     <div class="input-field col s12">*/
/*       {{ form_label(form.email) }}*/
/*       {{ form_widget(form.email) }}*/
/*     </div>*/
/*     {{ form_errors(form.email) }}*/
/*   </div>*/
/*   <div class="row no-padding">*/
/*     <div class="input-field col s12">*/
/*       {{ form_label(form.plainPassword.first) }}*/
/*       {{ form_widget(form.plainPassword.first) }}*/
/*     </div>*/
/*     {{ form_errors(form.plainPassword.first) }}*/
/*   </div>*/
/*   <div class="row no-padding">*/
/*     <div class="input-field col s12">*/
/*       {{ form_label(form.plainPassword.second) }}*/
/*       {{ form_widget(form.plainPassword.second) }}*/
/*     </div>*/
/*     {{ form_errors(form.plainPassword.second) }}*/
/*   </div>*/
/*   <div align="center" class="button-wrap">*/
/*     <button class="btn-large waves-effect waves-light" type="submit" name="action">*/
/*       {{ 'registration.submit'|trans }}*/
/*       <i class="material-icons">send</i>*/
/*     </button>*/
/*   </div>*/
/* {{ form_end(form) }}*/
