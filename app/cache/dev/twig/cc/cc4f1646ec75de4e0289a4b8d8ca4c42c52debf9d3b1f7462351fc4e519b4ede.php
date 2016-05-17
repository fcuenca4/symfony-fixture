<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3ef6b7589f6f218c3f66eb4eabadee843bf974cd0749f106278a08783c324eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a50de8cda9ed4b318ad14d917885e2f6fdbf8ff8621091c1b2d0cb5bb7686dc3 = $this->env->getExtension("native_profiler");
        $__internal_a50de8cda9ed4b318ad14d917885e2f6fdbf8ff8621091c1b2d0cb5bb7686dc3->enter($__internal_a50de8cda9ed4b318ad14d917885e2f6fdbf8ff8621091c1b2d0cb5bb7686dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_a50de8cda9ed4b318ad14d917885e2f6fdbf8ff8621091c1b2d0cb5bb7686dc3->leave($__internal_a50de8cda9ed4b318ad14d917885e2f6fdbf8ff8621091c1b2d0cb5bb7686dc3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_44e0dfebac2cc148f424cce78c41781394ded5c7477919950b0152bdae0d433b = $this->env->getExtension("native_profiler");
        $__internal_44e0dfebac2cc148f424cce78c41781394ded5c7477919950b0152bdae0d433b->enter($__internal_44e0dfebac2cc148f424cce78c41781394ded5c7477919950b0152bdae0d433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_44e0dfebac2cc148f424cce78c41781394ded5c7477919950b0152bdae0d433b->leave($__internal_44e0dfebac2cc148f424cce78c41781394ded5c7477919950b0152bdae0d433b_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_88fbe17fc6cd69db5ded7b3d6929918bb48776bf11c16e142111d704ea888fcc = $this->env->getExtension("native_profiler");
        $__internal_88fbe17fc6cd69db5ded7b3d6929918bb48776bf11c16e142111d704ea888fcc->enter($__internal_88fbe17fc6cd69db5ded7b3d6929918bb48776bf11c16e142111d704ea888fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88fbe17fc6cd69db5ded7b3d6929918bb48776bf11c16e142111d704ea888fcc->leave($__internal_88fbe17fc6cd69db5ded7b3d6929918bb48776bf11c16e142111d704ea888fcc_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_31665637e5454d22b591a1c4d757f7b7d0f8ca99f8f841bf8f0db24506c64d4f = $this->env->getExtension("native_profiler");
        $__internal_31665637e5454d22b591a1c4d757f7b7d0f8ca99f8f841bf8f0db24506c64d4f->enter($__internal_31665637e5454d22b591a1c4d757f7b7d0f8ca99f8f841bf8f0db24506c64d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_31665637e5454d22b591a1c4d757f7b7d0f8ca99f8f841bf8f0db24506c64d4f->leave($__internal_31665637e5454d22b591a1c4d757f7b7d0f8ca99f8f841bf8f0db24506c64d4f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3afd1369f3b06ae6d5ec49b340d32f7d40718ff7ac3c65973823c9a71b347e84 = $this->env->getExtension("native_profiler");
        $__internal_3afd1369f3b06ae6d5ec49b340d32f7d40718ff7ac3c65973823c9a71b347e84->enter($__internal_3afd1369f3b06ae6d5ec49b340d32f7d40718ff7ac3c65973823c9a71b347e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_3afd1369f3b06ae6d5ec49b340d32f7d40718ff7ac3c65973823c9a71b347e84->leave($__internal_3afd1369f3b06ae6d5ec49b340d32f7d40718ff7ac3c65973823c9a71b347e84_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d06c9b71e9447d87c3871f7caf93bd90055666cf099b5c7af1727b24a1635c43 = $this->env->getExtension("native_profiler");
        $__internal_d06c9b71e9447d87c3871f7caf93bd90055666cf099b5c7af1727b24a1635c43->enter($__internal_d06c9b71e9447d87c3871f7caf93bd90055666cf099b5c7af1727b24a1635c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d06c9b71e9447d87c3871f7caf93bd90055666cf099b5c7af1727b24a1635c43->leave($__internal_d06c9b71e9447d87c3871f7caf93bd90055666cf099b5c7af1727b24a1635c43_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_34317624547ff5578a8eebd8dd131642ed40d49c941bad7bc0f09815ace03b10 = $this->env->getExtension("native_profiler");
        $__internal_34317624547ff5578a8eebd8dd131642ed40d49c941bad7bc0f09815ace03b10->enter($__internal_34317624547ff5578a8eebd8dd131642ed40d49c941bad7bc0f09815ace03b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_34317624547ff5578a8eebd8dd131642ed40d49c941bad7bc0f09815ace03b10->leave($__internal_34317624547ff5578a8eebd8dd131642ed40d49c941bad7bc0f09815ace03b10_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_37cc45654eb8549576483bd50722a8d315b31715698aaf0a039b8e930f6d1f6f = $this->env->getExtension("native_profiler");
        $__internal_37cc45654eb8549576483bd50722a8d315b31715698aaf0a039b8e930f6d1f6f->enter($__internal_37cc45654eb8549576483bd50722a8d315b31715698aaf0a039b8e930f6d1f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_37cc45654eb8549576483bd50722a8d315b31715698aaf0a039b8e930f6d1f6f->leave($__internal_37cc45654eb8549576483bd50722a8d315b31715698aaf0a039b8e930f6d1f6f_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b364b7cfbd33b5e0526e98a37416fd89ee2ce7791391f6d262f1c64be4c6b300 = $this->env->getExtension("native_profiler");
        $__internal_b364b7cfbd33b5e0526e98a37416fd89ee2ce7791391f6d262f1c64be4c6b300->enter($__internal_b364b7cfbd33b5e0526e98a37416fd89ee2ce7791391f6d262f1c64be4c6b300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b364b7cfbd33b5e0526e98a37416fd89ee2ce7791391f6d262f1c64be4c6b300->leave($__internal_b364b7cfbd33b5e0526e98a37416fd89ee2ce7791391f6d262f1c64be4c6b300_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7648d4c5e43604e75372af5bcdd43f90351c099ca0112d25734b2a6ffc33df12 = $this->env->getExtension("native_profiler");
        $__internal_7648d4c5e43604e75372af5bcdd43f90351c099ca0112d25734b2a6ffc33df12->enter($__internal_7648d4c5e43604e75372af5bcdd43f90351c099ca0112d25734b2a6ffc33df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7648d4c5e43604e75372af5bcdd43f90351c099ca0112d25734b2a6ffc33df12->leave($__internal_7648d4c5e43604e75372af5bcdd43f90351c099ca0112d25734b2a6ffc33df12_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_37733a8185390b77876276b70ed0cc435a0e1ab48a936134c98f8314f1c4add5 = $this->env->getExtension("native_profiler");
        $__internal_37733a8185390b77876276b70ed0cc435a0e1ab48a936134c98f8314f1c4add5->enter($__internal_37733a8185390b77876276b70ed0cc435a0e1ab48a936134c98f8314f1c4add5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_37733a8185390b77876276b70ed0cc435a0e1ab48a936134c98f8314f1c4add5->leave($__internal_37733a8185390b77876276b70ed0cc435a0e1ab48a936134c98f8314f1c4add5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 80,  321 => 79,  309 => 73,  305 => 72,  301 => 71,  298 => 70,  296 => 69,  290 => 68,  278 => 62,  274 => 61,  270 => 60,  267 => 59,  265 => 58,  259 => 57,  247 => 51,  243 => 50,  239 => 49,  235 => 48,  228 => 47,  226 => 46,  220 => 45,  213 => 42,  207 => 41,  200 => 38,  194 => 37,  187 => 34,  184 => 33,  182 => 32,  180 => 31,  176 => 30,  174 => 29,  168 => 28,  162 => 27,  155 => 22,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 79,  95 => 78,  93 => 68,  90 => 67,  88 => 57,  85 => 56,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  73 => 37,  70 => 36,  68 => 27,  65 => 26,  62 => 24,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
