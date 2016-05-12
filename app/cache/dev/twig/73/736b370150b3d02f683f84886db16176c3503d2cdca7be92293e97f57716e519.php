<?php

/* arbitros/index.html.twig */
class __TwigTemplate_5abac0df885d44bd744f0b3b7dad454285f6540c8e0c089989bf002f295a437a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "arbitros/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd393320caca23fb8ccc568817dda4ec0c6f86c00615b92dab85ee63cca33a22 = $this->env->getExtension("native_profiler");
        $__internal_fd393320caca23fb8ccc568817dda4ec0c6f86c00615b92dab85ee63cca33a22->enter($__internal_fd393320caca23fb8ccc568817dda4ec0c6f86c00615b92dab85ee63cca33a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arbitros/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd393320caca23fb8ccc568817dda4ec0c6f86c00615b92dab85ee63cca33a22->leave($__internal_fd393320caca23fb8ccc568817dda4ec0c6f86c00615b92dab85ee63cca33a22_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_732fa69e4924c850d91f8682adb3568b209464e83c94d2cbd6ae62ae5edabcb9 = $this->env->getExtension("native_profiler");
        $__internal_732fa69e4924c850d91f8682adb3568b209464e83c94d2cbd6ae62ae5edabcb9->enter($__internal_732fa69e4924c850d91f8682adb3568b209464e83c94d2cbd6ae62ae5edabcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/miapp/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_732fa69e4924c850d91f8682adb3568b209464e83c94d2cbd6ae62ae5edabcb9->leave($__internal_732fa69e4924c850d91f8682adb3568b209464e83c94d2cbd6ae62ae5edabcb9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59bed1964824a27dc214bdec68213a58d847be641e8679202a3fa2bec7c7b58 = $this->env->getExtension("native_profiler");
        $__internal_a59bed1964824a27dc214bdec68213a58d847be641e8679202a3fa2bec7c7b58->enter($__internal_a59bed1964824a27dc214bdec68213a58d847be641e8679202a3fa2bec7c7b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "   

    <h1 style=\"text-align:center\">Arbitros
       
             
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("arbitros_new");
        echo "\"><button class=\"btn btn-default pull-right\">Agregar Arbitro</button></a>
        
       
    </h1>

   <div class=\"container\">
    <table class=\"table table-hover\">
        <thead>
            <tr>                
                <th>Nombre</th>
                <th>Edad</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arbitros"]) ? $context["arbitros"] : $this->getContext($context, "arbitros")));
        foreach ($context['_seq'] as $context["_key"] => $context["arbitro"]) {
            // line 30
            echo "            <tr>
                
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["arbitro"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["arbitro"], "edad", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <button class=\"btn btn-default pull-right\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arbitros_edit", array("id" => $this->getAttribute($context["arbitro"], "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\" title=\"Visualizar Arbitro\">
                                <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                        </button>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arbitro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

   </div>
";
        
        $__internal_a59bed1964824a27dc214bdec68213a58d847be641e8679202a3fa2bec7c7b58->leave($__internal_a59bed1964824a27dc214bdec68213a58d847be641e8679202a3fa2bec7c7b58_prof);

    }

    public function getTemplateName()
    {
        return "arbitros/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  103 => 37,  96 => 33,  92 => 32,  88 => 30,  84 => 29,  66 => 14,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     */
/*     <link href="{{ asset('bundles/miapp/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*    */
/* */
/*     <h1 style="text-align:center">Arbitros*/
/*        */
/*              */
/*             <a href="{{ path('arbitros_new') }}"><button class="btn btn-default pull-right">Agregar Arbitro</button></a>*/
/*         */
/*        */
/*     </h1>*/
/* */
/*    <div class="container">*/
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>                */
/*                 <th>Nombre</th>*/
/*                 <th>Edad</th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for arbitro in arbitros %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ arbitro.nombre }}</td>*/
/*                 <td>{{ arbitro.edad }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <button class="btn btn-default pull-right">*/
/*                             <a href="{{ path('arbitros_edit', { 'id': arbitro.id }) }}" toggle="tooltip" title="Visualizar Arbitro">*/
/*                                 <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                         </button>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*    </div>*/
/* {% endblock %}*/
/* */
