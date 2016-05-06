<?php

/* MiAppBundle:Default:index.html.twig */
class __TwigTemplate_f33ebc65dac7cdc887ed905934ea6c3c10994963eb0c7d1ed4006f0da4f38ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::layout.html.twig", "MiAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2de1aaf0ebcc9dbc95a9daa4847457493e906f81581f9b339e60b66d4b95234 = $this->env->getExtension("native_profiler");
        $__internal_b2de1aaf0ebcc9dbc95a9daa4847457493e906f81581f9b339e60b66d4b95234->enter($__internal_b2de1aaf0ebcc9dbc95a9daa4847457493e906f81581f9b339e60b66d4b95234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2de1aaf0ebcc9dbc95a9daa4847457493e906f81581f9b339e60b66d4b95234->leave($__internal_b2de1aaf0ebcc9dbc95a9daa4847457493e906f81581f9b339e60b66d4b95234_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c035e331640abc833d06a9ae5f9946e3c8790cb32d2bd78acfe4467d181808f0 = $this->env->getExtension("native_profiler");
        $__internal_c035e331640abc833d06a9ae5f9946e3c8790cb32d2bd78acfe4467d181808f0->enter($__internal_c035e331640abc833d06a9ae5f9946e3c8790cb32d2bd78acfe4467d181808f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Static navbar -->
    <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class=\"container\">
      <!-- Main component for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
        <h1>Hello pepe</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">View navbar docs &raquo;</a>
        </p>
      </div>
    </div> <!-- /container -->
";
        
        $__internal_c035e331640abc833d06a9ae5f9946e3c8790cb32d2bd78acfe4467d181808f0->leave($__internal_c035e331640abc833d06a9ae5f9946e3c8790cb32d2bd78acfe4467d181808f0_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Static navbar -->*/
/*     <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">Project name</a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="#">Home</a></li>*/
/*             <li><a href="#about">About</a></li>*/
/*             <li><a href="#contact">Contact</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </div>*/
/* <div class="container">*/
/*       <!-- Main component for a primary marketing message or call to action -->*/
/*       <div class="jumbotron">*/
/*         <h1>Hello pepe</h1>*/
/*         <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>*/
/*         <p>To see the difference between static and fixed top navbars, just scroll.</p>*/
/*         <p>*/
/*           <a class="btn btn-lg btn-primary" href="#" role="button">View navbar docs &raquo;</a>*/
/*         </p>*/
/*       </div>*/
/*     </div> <!-- /container -->*/
/* {% endblock %}*/
