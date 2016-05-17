<?php

/* MiAppBundle::editor/index.html.twig */
class __TwigTemplate_7525f00e95d3d66d958dbdf429f64133b1410d138f4fe2cfb5ab453d6ee17825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::partidos/index.html.twig", "MiAppBundle::editor/index.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'editor' => array($this, 'block_editor'),
            'editref' => array($this, 'block_editref'),
            'administrador' => array($this, 'block_administrador'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::partidos/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b1c8c93af6711d2dfa6f077c596a812d1737d5006da4195ccc016c64c45450e = $this->env->getExtension("native_profiler");
        $__internal_6b1c8c93af6711d2dfa6f077c596a812d1737d5006da4195ccc016c64c45450e->enter($__internal_6b1c8c93af6711d2dfa6f077c596a812d1737d5006da4195ccc016c64c45450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::editor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1c8c93af6711d2dfa6f077c596a812d1737d5006da4195ccc016c64c45450e->leave($__internal_6b1c8c93af6711d2dfa6f077c596a812d1737d5006da4195ccc016c64c45450e_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_a60afb28c18a87025afae1f734a674667d2428bbe8b35f5cdb4b2744a8b4a8f8 = $this->env->getExtension("native_profiler");
        $__internal_a60afb28c18a87025afae1f734a674667d2428bbe8b35f5cdb4b2744a8b4a8f8->enter($__internal_a60afb28c18a87025afae1f734a674667d2428bbe8b35f5cdb4b2744a8b4a8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "

    <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">
        Vista del editor
    </h1>
";
        
        $__internal_a60afb28c18a87025afae1f734a674667d2428bbe8b35f5cdb4b2744a8b4a8f8->leave($__internal_a60afb28c18a87025afae1f734a674667d2428bbe8b35f5cdb4b2744a8b4a8f8_prof);

    }

    // line 10
    public function block_editor($context, array $blocks = array())
    {
        $__internal_2aa1166521330971e0ee3a00353d28b531a26cc6abef8ace57fd87024df9dd88 = $this->env->getExtension("native_profiler");
        $__internal_2aa1166521330971e0ee3a00353d28b531a26cc6abef8ace57fd87024df9dd88->enter($__internal_2aa1166521330971e0ee3a00353d28b531a26cc6abef8ace57fd87024df9dd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 11
        echo "        ";
        $this->displayParentBlock("editor", $context, $blocks);
        echo "
    ";
        
        $__internal_2aa1166521330971e0ee3a00353d28b531a26cc6abef8ace57fd87024df9dd88->leave($__internal_2aa1166521330971e0ee3a00353d28b531a26cc6abef8ace57fd87024df9dd88_prof);

    }

    // line 13
    public function block_editref($context, array $blocks = array())
    {
        $__internal_8050ccbe7a1aabc2cd5b5c1eac0fad0dbbbc82e06b21a6e24154a6531ab14e89 = $this->env->getExtension("native_profiler");
        $__internal_8050ccbe7a1aabc2cd5b5c1eac0fad0dbbbc82e06b21a6e24154a6531ab14e89->enter($__internal_8050ccbe7a1aabc2cd5b5c1eac0fad0dbbbc82e06b21a6e24154a6531ab14e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editref"));

        // line 14
        echo "        <button class=\"btn btn-default pull-right\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
        echo "\" toggle=\"tooltip\" title=\"Visualizar Partido\">
                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
        </button>
    ";
        
        $__internal_8050ccbe7a1aabc2cd5b5c1eac0fad0dbbbc82e06b21a6e24154a6531ab14e89->leave($__internal_8050ccbe7a1aabc2cd5b5c1eac0fad0dbbbc82e06b21a6e24154a6531ab14e89_prof);

    }

    // line 19
    public function block_administrador($context, array $blocks = array())
    {
        $__internal_3cad2b8c2660f56fb8228ae6e75a4a1bef52028bab2d73893990d5659a08151b = $this->env->getExtension("native_profiler");
        $__internal_3cad2b8c2660f56fb8228ae6e75a4a1bef52028bab2d73893990d5659a08151b->enter($__internal_3cad2b8c2660f56fb8228ae6e75a4a1bef52028bab2d73893990d5659a08151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administrador"));

        // line 20
        echo "    ";
        
        $__internal_3cad2b8c2660f56fb8228ae6e75a4a1bef52028bab2d73893990d5659a08151b->leave($__internal_3cad2b8c2660f56fb8228ae6e75a4a1bef52028bab2d73893990d5659a08151b_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::editor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 20,  91 => 19,  80 => 15,  77 => 14,  71 => 13,  61 => 11,  55 => 10,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::partidos/index.html.twig' %}*/
/* */
/* {% block titulo %}*/
/* */
/* */
/*     <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">*/
/*         Vista del editor*/
/*     </h1>*/
/* {% endblock %}*/
/*     {% block editor %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/*     {% block editref %}*/
/*         <button class="btn btn-default pull-right">*/
/*             <a href="{{ path('editor_edit', { 'id': partido.id }) }}" toggle="tooltip" title="Visualizar Partido">*/
/*                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*         </button>*/
/*     {% endblock %}*/
/*     {% block administrador %}*/
/*     {% endblock %}*/
/* */
/* */
