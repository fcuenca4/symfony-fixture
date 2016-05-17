<?php

/* MiAppBundle::partidos/index.html.twig */
class __TwigTemplate_dc796df8116784abba8ec60805db98d62315ccf99ea0082839e0986458c0e74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MiAppBundle::Default/index.html.twig", "MiAppBundle::partidos/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'editor' => array($this, 'block_editor'),
            'titulo' => array($this, 'block_titulo'),
            'editref' => array($this, 'block_editref'),
            'administrador' => array($this, 'block_administrador'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MiAppBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_071fec79597e1119bad94b4bd8148de5660d822e72202db617b6e2e3bada98ee = $this->env->getExtension("native_profiler");
        $__internal_071fec79597e1119bad94b4bd8148de5660d822e72202db617b6e2e3bada98ee->enter($__internal_071fec79597e1119bad94b4bd8148de5660d822e72202db617b6e2e3bada98ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiAppBundle::partidos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_071fec79597e1119bad94b4bd8148de5660d822e72202db617b6e2e3bada98ee->leave($__internal_071fec79597e1119bad94b4bd8148de5660d822e72202db617b6e2e3bada98ee_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c932d6d73e402ec42bf5448bcccccbd62dd03594eed3de29f0d92e609f92935f = $this->env->getExtension("native_profiler");
        $__internal_c932d6d73e402ec42bf5448bcccccbd62dd03594eed3de29f0d92e609f92935f->enter($__internal_c932d6d73e402ec42bf5448bcccccbd62dd03594eed3de29f0d92e609f92935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Play\"/>
";
        
        $__internal_c932d6d73e402ec42bf5448bcccccbd62dd03594eed3de29f0d92e609f92935f->leave($__internal_c932d6d73e402ec42bf5448bcccccbd62dd03594eed3de29f0d92e609f92935f_prof);

    }

    // line 6
    public function block_editor($context, array $blocks = array())
    {
        $__internal_e486856e04ff0e5a53dda88cee8e370a767d6ebdcb21cd4fb591b739461107db = $this->env->getExtension("native_profiler");
        $__internal_e486856e04ff0e5a53dda88cee8e370a767d6ebdcb21cd4fb591b739461107db->enter($__internal_e486856e04ff0e5a53dda88cee8e370a767d6ebdcb21cd4fb591b739461107db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor"));

        // line 7
        echo "    <br>
    <br>
    <br>
    <div class=\"container\" style=\"background-color: white;\">
        ";
        // line 11
        $this->displayBlock('titulo', $context, $blocks);
        // line 18
        echo "        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                ";
        // line 26
        echo "                ";
        // line 27
        echo "                <th>Observacion</th>
                <th>Termino</th>
                <th>Editor</th>
                <th>Arbitro</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            if ($this->getAttribute($context["partido"], "fechaPartido", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaPartido", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo1", array()), "getNombre", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq1", array()), "html", null, true);
            echo ")</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "idEquipo2", array()), "getNombre", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "resultEq2", array()), "html", null, true);
            echo ")</td>
                    ";
            // line 42
            echo "                    ";
            // line 43
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "observacion", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            if ($this->getAttribute($context["partido"], "termino", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "idEditor", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "idArbitro", array()), "html", null, true);
            echo "</td>

                    <td>
                        <ul>
                            ";
            // line 50
            $this->displayBlock('editref', $context, $blocks);
            // line 61
            echo "                        </ul>
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>


    </div>
    <br>
    ";
        // line 71
        $this->displayBlock('administrador', $context, $blocks);
        // line 81
        echo "
";
        
        $__internal_e486856e04ff0e5a53dda88cee8e370a767d6ebdcb21cd4fb591b739461107db->leave($__internal_e486856e04ff0e5a53dda88cee8e370a767d6ebdcb21cd4fb591b739461107db_prof);

    }

    // line 11
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_4691b441bf0720e1b1801d90a8e96c3c580e646debfa27030df515ee1d08f14e = $this->env->getExtension("native_profiler");
        $__internal_4691b441bf0720e1b1801d90a8e96c3c580e646debfa27030df515ee1d08f14e->enter($__internal_4691b441bf0720e1b1801d90a8e96c3c580e646debfa27030df515ee1d08f14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 12
        echo "            <h1 style=\"text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold\">
                Campeonato


            </h1>
        ";
        
        $__internal_4691b441bf0720e1b1801d90a8e96c3c580e646debfa27030df515ee1d08f14e->leave($__internal_4691b441bf0720e1b1801d90a8e96c3c580e646debfa27030df515ee1d08f14e_prof);

    }

    // line 50
    public function block_editref($context, array $blocks = array())
    {
        $__internal_a804af212f8c636bf4a8d094cd1cc8eef3c6c7e32d694d293aadf5dcdcfe8515 = $this->env->getExtension("native_profiler");
        $__internal_a804af212f8c636bf4a8d094cd1cc8eef3c6c7e32d694d293aadf5dcdcfe8515->enter($__internal_a804af212f8c636bf4a8d094cd1cc8eef3c6c7e32d694d293aadf5dcdcfe8515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editref"));

        // line 51
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                            <button class=\"btn btn-default pull-right\">

                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partidos_edit", array("id" => $this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "id", array()))), "html", null, true);
            echo "\" toggle=\"tooltip\"
                                       title=\"Visualizar Partido\">
                                        <span class=\"glyphicon glyphicon-eye-open\" style=\"color:#00695c\"></span></a>
                                </button>
                            ";
        }
        // line 59
        echo "
                            ";
        
        $__internal_a804af212f8c636bf4a8d094cd1cc8eef3c6c7e32d694d293aadf5dcdcfe8515->leave($__internal_a804af212f8c636bf4a8d094cd1cc8eef3c6c7e32d694d293aadf5dcdcfe8515_prof);

    }

    // line 71
    public function block_administrador($context, array $blocks = array())
    {
        $__internal_102a9f4d48925a60542ed267f5bc09ac6be5be115e5c96673ecfd4bbda3d4f54 = $this->env->getExtension("native_profiler");
        $__internal_102a9f4d48925a60542ed267f5bc09ac6be5be115e5c96673ecfd4bbda3d4f54->enter($__internal_102a9f4d48925a60542ed267f5bc09ac6be5be115e5c96673ecfd4bbda3d4f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "administrador"));

        // line 72
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 73
            echo "        <div>
            <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("partidos_new");
            echo "\">
                <button class=\"btn btn-default pull-left\">Agregar Partido</button>
            </a>
        </div>
        ";
        }
        // line 79
        echo "
    ";
        
        $__internal_102a9f4d48925a60542ed267f5bc09ac6be5be115e5c96673ecfd4bbda3d4f54->leave($__internal_102a9f4d48925a60542ed267f5bc09ac6be5be115e5c96673ecfd4bbda3d4f54_prof);

    }

    public function getTemplateName()
    {
        return "MiAppBundle::partidos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 79,  251 => 74,  248 => 73,  245 => 72,  239 => 71,  231 => 59,  223 => 54,  219 => 52,  216 => 51,  210 => 50,  198 => 12,  192 => 11,  184 => 81,  182 => 71,  174 => 65,  157 => 61,  155 => 50,  148 => 46,  144 => 45,  136 => 44,  131 => 43,  129 => 42,  123 => 40,  117 => 39,  111 => 38,  108 => 37,  91 => 36,  80 => 27,  78 => 26,  69 => 18,  67 => 11,  61 => 7,  55 => 6,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'MiAppBundle::Default/index.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play"/>*/
/* {% endblock %}*/
/* {% block editor %}*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     <div class="container" style="background-color: white;">*/
/*         {% block titulo %}*/
/*             <h1 style="text-align:center; color:#0277bd  ; font-family: 'Play'; font-size: 40px; font-weight:bold">*/
/*                 Campeonato*/
/* */
/* */
/*             </h1>*/
/*         {% endblock %}*/
/*         <br>*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <th>Equipo Local</th>*/
/*                 <th>Equipo Visitante</th>*/
/*                 {#<th>Resulteq1</th>#}*/
/*                 {#<th>Resulteq2</th>#}*/
/*                 <th>Observacion</th>*/
/*                 <th>Termino</th>*/
/*                 <th>Editor</th>*/
/*                 <th>Arbitro</th>*/
/* */
/*                 <th></th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for partido in partidos %}*/
/*                 <tr>*/
/*                     <td>{% if partido.fechaPartido %}{{ partido.fechaPartido|date('Y-m-d') }}{% endif %}</td>*/
/*                     <td>{{ partido.idEquipo1.getNombre() }} ({{ partido.resultEq1 }})</td>*/
/*                     <td>{{ partido.idEquipo2.getNombre() }} ({{ partido.resultEq2 }})</td>*/
/*                     {#<td>{{ partido.resultEq1 }}</td>#}*/
/*                     {#<td>{{ partido.resultEq2 }}</td>#}*/
/*                     <td>{{ partido.observacion }}</td>*/
/*                     <td>{% if partido.termino %}Yes{% else %}No{% endif %}</td>*/
/*                     <td>{{ partido.idEditor }}</td>*/
/*                     <td>{{ partido.idArbitro }}</td>*/
/* */
/*                     <td>*/
/*                         <ul>*/
/*                             {% block editref %}*/
/*                             {% if is_granted('ROLE_ADMIN') %}*/
/*                             <button class="btn btn-default pull-right">*/
/* */
/*                                     <a href="{{ path('partidos_edit', { 'id': partido.id }) }}" toggle="tooltip"*/
/*                                        title="Visualizar Partido">*/
/*                                         <span class="glyphicon glyphicon-eye-open" style="color:#00695c"></span></a>*/
/*                                 </button>*/
/*                             {% endif %}*/
/* */
/*                             {% endblock %}*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/* */
/*     </div>*/
/*     <br>*/
/*     {% block administrador %}*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <div>*/
/*             <a href="{{ path('partidos_new') }}">*/
/*                 <button class="btn btn-default pull-left">Agregar Partido</button>*/
/*             </a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
