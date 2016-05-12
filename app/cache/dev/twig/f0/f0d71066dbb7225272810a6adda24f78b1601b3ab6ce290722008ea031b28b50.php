<?php

/* MiAppBundle::partidos/edit.html.twig */
class __TwigTemplate_3c55fbd1c284bf13369c2e77afe9046c5b80c5b3f95a95520fc5dfe043806c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/edit.html.twig", 1);
        $this->blocks = array(
            'editor' => array($this, 'block_editor'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e84e05035081354a8f68e3bb5bb44d5b083a35a483ed911fe96ad074587a3bb4 = $this->env->getExtension("native_profiler");
        $__internal_e84e05035081354a8f68e3bb5bb44d5b083a35a483ed911fe96ad074587a3bb4->enter($__internal_e84e05035081354a8f68e3bb5bb44d5b083a35a483ed911fe96ad074587a3bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84e05035081354a8f68e3bb5bb44d5b083a35a483ed911fe96ad074587a3bb4->leave($__internal_e84e05035081354a8f68e3bb5bb44d5b083a35a483ed911fe96ad074587a3bb4_prof);

    }

    // line 3
    public function block_editor($context, array $blocks = array())
    {
        $__internal_e44a59d40a39b2b92ac5bd4d378396783e1e1969f232c62bc0ea624d0bdda55b = $this->env->getExtension("native_profiler");
        $__internal_e44a59d40a39b2b92ac5bd4d378396783e1e1969f232c62bc0ea624d0bdda55b->enter($__internal_e44a59d40a39b2b92ac5bd4d378396783e1e1969f232c62bc0ea624d0bdda55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 4
        echo "    <h1>Partidos edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("editor_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 16
        echo "            ";
        // line 17
        echo "                ";
        // line 18
        echo "            ";
        // line 19
        echo "        ";
        // line 20
        echo "    </ul>
";
        
        $__internal_e44a59d40a39b2b92ac5bd4d378396783e1e1969f232c62bc0ea624d0bdda55b->leave($__internal_e44a59d40a39b2b92ac5bd4d378396783e1e1969f232c62bc0ea624d0bdda55b_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::partidos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* */
/* {% block editor %}*/
/*     <h1>Partidos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('editor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         {#<li>#}*/
/*             {#{{ form_start(delete_form) }}#}*/
/*                 {#<input type="submit" value="Delete">#}*/
/*             {#{{ form_end(delete_form) }}#}*/
/*         {#</li>#}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
