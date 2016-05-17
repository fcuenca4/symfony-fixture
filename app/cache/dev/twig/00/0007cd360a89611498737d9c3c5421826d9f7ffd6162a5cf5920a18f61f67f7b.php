<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_bb7824176ef1651c21a20cce4af68a5197e06581d5ccc6653f328a4da30d509e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b615aee0531ddaf25c4843b23ad84a4b01b78ccc74e3d8e24d175324ba9b6c5 = $this->env->getExtension("native_profiler");
        $__internal_0b615aee0531ddaf25c4843b23ad84a4b01b78ccc74e3d8e24d175324ba9b6c5->enter($__internal_0b615aee0531ddaf25c4843b23ad84a4b01b78ccc74e3d8e24d175324ba9b6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_label', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('choice_label', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 184
        echo "
";
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('form_row', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('button_row', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('choice_row', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('date_row', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('time_row', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('radio_row', $context, $blocks);
        // line 234
        echo "
";
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_0b615aee0531ddaf25c4843b23ad84a4b01b78ccc74e3d8e24d175324ba9b6c5->leave($__internal_0b615aee0531ddaf25c4843b23ad84a4b01b78ccc74e3d8e24d175324ba9b6c5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_64de9a920180a0204f53455619b568f8872be56ef7262383c4c2380427751064 = $this->env->getExtension("native_profiler");
        $__internal_64de9a920180a0204f53455619b568f8872be56ef7262383c4c2380427751064->enter($__internal_64de9a920180a0204f53455619b568f8872be56ef7262383c4c2380427751064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_64de9a920180a0204f53455619b568f8872be56ef7262383c4c2380427751064->leave($__internal_64de9a920180a0204f53455619b568f8872be56ef7262383c4c2380427751064_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d904da31b244c949d32080e1b459d66e07a58f80cf36292ff40a3c698270b75a = $this->env->getExtension("native_profiler");
        $__internal_d904da31b244c949d32080e1b459d66e07a58f80cf36292ff40a3c698270b75a->enter($__internal_d904da31b244c949d32080e1b459d66e07a58f80cf36292ff40a3c698270b75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d904da31b244c949d32080e1b459d66e07a58f80cf36292ff40a3c698270b75a->leave($__internal_d904da31b244c949d32080e1b459d66e07a58f80cf36292ff40a3c698270b75a_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d3cf4ee24ddbb1436315203bdb5264d069a1460e9c9264183f3d1d9c9853a5ae = $this->env->getExtension("native_profiler");
        $__internal_d3cf4ee24ddbb1436315203bdb5264d069a1460e9c9264183f3d1d9c9853a5ae->enter($__internal_d3cf4ee24ddbb1436315203bdb5264d069a1460e9c9264183f3d1d9c9853a5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d3cf4ee24ddbb1436315203bdb5264d069a1460e9c9264183f3d1d9c9853a5ae->leave($__internal_d3cf4ee24ddbb1436315203bdb5264d069a1460e9c9264183f3d1d9c9853a5ae_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4f4b3853d6a3e4b29a9be8ada0835812d75dcaf526023cd721f7c5164791bbe4 = $this->env->getExtension("native_profiler");
        $__internal_4f4b3853d6a3e4b29a9be8ada0835812d75dcaf526023cd721f7c5164791bbe4->enter($__internal_4f4b3853d6a3e4b29a9be8ada0835812d75dcaf526023cd721f7c5164791bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 25
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_4f4b3853d6a3e4b29a9be8ada0835812d75dcaf526023cd721f7c5164791bbe4->leave($__internal_4f4b3853d6a3e4b29a9be8ada0835812d75dcaf526023cd721f7c5164791bbe4_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_cd0cbf9c9eae89cde9113d0fb68ffa10e6c024f34338bd20c6c729bba9b4dfc5 = $this->env->getExtension("native_profiler");
        $__internal_cd0cbf9c9eae89cde9113d0fb68ffa10e6c024f34338bd20c6c729bba9b4dfc5->enter($__internal_cd0cbf9c9eae89cde9113d0fb68ffa10e6c024f34338bd20c6c729bba9b4dfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cd0cbf9c9eae89cde9113d0fb68ffa10e6c024f34338bd20c6c729bba9b4dfc5->leave($__internal_cd0cbf9c9eae89cde9113d0fb68ffa10e6c024f34338bd20c6c729bba9b4dfc5_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1b6d3e7326963f30ec97e7a58b968db07f27727fb802244520cb3764c11fbbf0 = $this->env->getExtension("native_profiler");
        $__internal_1b6d3e7326963f30ec97e7a58b968db07f27727fb802244520cb3764c11fbbf0->enter($__internal_1b6d3e7326963f30ec97e7a58b968db07f27727fb802244520cb3764c11fbbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_1b6d3e7326963f30ec97e7a58b968db07f27727fb802244520cb3764c11fbbf0->leave($__internal_1b6d3e7326963f30ec97e7a58b968db07f27727fb802244520cb3764c11fbbf0_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e2486f78e1c33764baa6d7d3a5f6b285e3daca2161c72f01cfde71484183910e = $this->env->getExtension("native_profiler");
        $__internal_e2486f78e1c33764baa6d7d3a5f6b285e3daca2161c72f01cfde71484183910e->enter($__internal_e2486f78e1c33764baa6d7d3a5f6b285e3daca2161c72f01cfde71484183910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_e2486f78e1c33764baa6d7d3a5f6b285e3daca2161c72f01cfde71484183910e->leave($__internal_e2486f78e1c33764baa6d7d3a5f6b285e3daca2161c72f01cfde71484183910e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d9fdce4cc764ff34e3ace5a23f5fe24d74b3ceb6ff4b898c7ccb1597458c60e2 = $this->env->getExtension("native_profiler");
        $__internal_d9fdce4cc764ff34e3ace5a23f5fe24d74b3ceb6ff4b898c7ccb1597458c60e2->enter($__internal_d9fdce4cc764ff34e3ace5a23f5fe24d74b3ceb6ff4b898c7ccb1597458c60e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_d9fdce4cc764ff34e3ace5a23f5fe24d74b3ceb6ff4b898c7ccb1597458c60e2->leave($__internal_d9fdce4cc764ff34e3ace5a23f5fe24d74b3ceb6ff4b898c7ccb1597458c60e2_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_477566424cf2ce7d873ad1ba9de43480062ab4f85b090de7b63840c4c73a9987 = $this->env->getExtension("native_profiler");
        $__internal_477566424cf2ce7d873ad1ba9de43480062ab4f85b090de7b63840c4c73a9987->enter($__internal_477566424cf2ce7d873ad1ba9de43480062ab4f85b090de7b63840c4c73a9987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_477566424cf2ce7d873ad1ba9de43480062ab4f85b090de7b63840c4c73a9987->leave($__internal_477566424cf2ce7d873ad1ba9de43480062ab4f85b090de7b63840c4c73a9987_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e6b81355a4636321d397b488a06690847bf4b1abab392ae4a9ea652b9f6efd9d = $this->env->getExtension("native_profiler");
        $__internal_e6b81355a4636321d397b488a06690847bf4b1abab392ae4a9ea652b9f6efd9d->enter($__internal_e6b81355a4636321d397b488a06690847bf4b1abab392ae4a9ea652b9f6efd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</div>";
        } else {
            // line 106
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 109
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 110
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "</div>";
        }
        
        $__internal_e6b81355a4636321d397b488a06690847bf4b1abab392ae4a9ea652b9f6efd9d->leave($__internal_e6b81355a4636321d397b488a06690847bf4b1abab392ae4a9ea652b9f6efd9d_prof);

    }

    // line 117
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9b965b93bf75fbb1a1a868ac75d50b92648ef9a7d470deb562b6450621a4a815 = $this->env->getExtension("native_profiler");
        $__internal_9b965b93bf75fbb1a1a868ac75d50b92648ef9a7d470deb562b6450621a4a815->enter($__internal_9b965b93bf75fbb1a1a868ac75d50b92648ef9a7d470deb562b6450621a4a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 118
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 119
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 122
            echo "<div class=\"checkbox\">";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 124
            echo "</div>";
        }
        
        $__internal_9b965b93bf75fbb1a1a868ac75d50b92648ef9a7d470deb562b6450621a4a815->leave($__internal_9b965b93bf75fbb1a1a868ac75d50b92648ef9a7d470deb562b6450621a4a815_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9bf676b786b01ea8625979f66e4f98cfa2e8efcea0a708a9fd3c539647f1857c = $this->env->getExtension("native_profiler");
        $__internal_9bf676b786b01ea8625979f66e4f98cfa2e8efcea0a708a9fd3c539647f1857c->enter($__internal_9bf676b786b01ea8625979f66e4f98cfa2e8efcea0a708a9fd3c539647f1857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 130
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
        
        $__internal_9bf676b786b01ea8625979f66e4f98cfa2e8efcea0a708a9fd3c539647f1857c->leave($__internal_9bf676b786b01ea8625979f66e4f98cfa2e8efcea0a708a9fd3c539647f1857c_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cc083fb86fc5c1e1e5eef4b3cd291dd131a6bf7a2553bf7f2f32b99f5f7d1366 = $this->env->getExtension("native_profiler");
        $__internal_cc083fb86fc5c1e1e5eef4b3cd291dd131a6bf7a2553bf7f2f32b99f5f7d1366->enter($__internal_cc083fb86fc5c1e1e5eef4b3cd291dd131a6bf7a2553bf7f2f32b99f5f7d1366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_cc083fb86fc5c1e1e5eef4b3cd291dd131a6bf7a2553bf7f2f32b99f5f7d1366->leave($__internal_cc083fb86fc5c1e1e5eef4b3cd291dd131a6bf7a2553bf7f2f32b99f5f7d1366_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f0032dc61e6a8f65f3b9f7fbea93a0a49afb3003a2f3919a2cf449426c209e0c = $this->env->getExtension("native_profiler");
        $__internal_f0032dc61e6a8f65f3b9f7fbea93a0a49afb3003a2f3919a2cf449426c209e0c->enter($__internal_f0032dc61e6a8f65f3b9f7fbea93a0a49afb3003a2f3919a2cf449426c209e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f0032dc61e6a8f65f3b9f7fbea93a0a49afb3003a2f3919a2cf449426c209e0c->leave($__internal_f0032dc61e6a8f65f3b9f7fbea93a0a49afb3003a2f3919a2cf449426c209e0c_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ccd1b68b57d02792d872e9d57cfb34f27433c520d98737b176ba576d0abcc1b5 = $this->env->getExtension("native_profiler");
        $__internal_ccd1b68b57d02792d872e9d57cfb34f27433c520d98737b176ba576d0abcc1b5->enter($__internal_ccd1b68b57d02792d872e9d57cfb34f27433c520d98737b176ba576d0abcc1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ccd1b68b57d02792d872e9d57cfb34f27433c520d98737b176ba576d0abcc1b5->leave($__internal_ccd1b68b57d02792d872e9d57cfb34f27433c520d98737b176ba576d0abcc1b5_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f1a688d92443e7d3b2bd3737aaa2776ef450624920305211a73d84e1a471a8b8 = $this->env->getExtension("native_profiler");
        $__internal_f1a688d92443e7d3b2bd3737aaa2776ef450624920305211a73d84e1a471a8b8->enter($__internal_f1a688d92443e7d3b2bd3737aaa2776ef450624920305211a73d84e1a471a8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f1a688d92443e7d3b2bd3737aaa2776ef450624920305211a73d84e1a471a8b8->leave($__internal_f1a688d92443e7d3b2bd3737aaa2776ef450624920305211a73d84e1a471a8b8_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3ebfc5dd59811cf0c2454a54ff7fbe1940527b7c133135120bf89a5804f3df52 = $this->env->getExtension("native_profiler");
        $__internal_3ebfc5dd59811cf0c2454a54ff7fbe1940527b7c133135120bf89a5804f3df52->enter($__internal_3ebfc5dd59811cf0c2454a54ff7fbe1940527b7c133135120bf89a5804f3df52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 170
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 171
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 172
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 173
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 176
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 179
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 180
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 181
            echo "</label>
    ";
        }
        
        $__internal_3ebfc5dd59811cf0c2454a54ff7fbe1940527b7c133135120bf89a5804f3df52->leave($__internal_3ebfc5dd59811cf0c2454a54ff7fbe1940527b7c133135120bf89a5804f3df52_prof);

    }

    // line 187
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0be597fa2b902d19b616af8ea7fad1559d156caa943a7b239b4ae4c5af5c9929 = $this->env->getExtension("native_profiler");
        $__internal_0be597fa2b902d19b616af8ea7fad1559d156caa943a7b239b4ae4c5af5c9929->enter($__internal_0be597fa2b902d19b616af8ea7fad1559d156caa943a7b239b4ae4c5af5c9929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 188
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 192
        echo "</div>";
        
        $__internal_0be597fa2b902d19b616af8ea7fad1559d156caa943a7b239b4ae4c5af5c9929->leave($__internal_0be597fa2b902d19b616af8ea7fad1559d156caa943a7b239b4ae4c5af5c9929_prof);

    }

    // line 195
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bc00bb7af7da52a99e77f7e1e846a910ec92887a3399cc3b0afc334cbbe74fa4 = $this->env->getExtension("native_profiler");
        $__internal_bc00bb7af7da52a99e77f7e1e846a910ec92887a3399cc3b0afc334cbbe74fa4->enter($__internal_bc00bb7af7da52a99e77f7e1e846a910ec92887a3399cc3b0afc334cbbe74fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 196
        echo "<div class=\"form-group\">";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 198
        echo "</div>";
        
        $__internal_bc00bb7af7da52a99e77f7e1e846a910ec92887a3399cc3b0afc334cbbe74fa4->leave($__internal_bc00bb7af7da52a99e77f7e1e846a910ec92887a3399cc3b0afc334cbbe74fa4_prof);

    }

    // line 201
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3566d070de377cf03f2a760ad4116878f8ea1017eed984bfd456e2c53db4635d = $this->env->getExtension("native_profiler");
        $__internal_3566d070de377cf03f2a760ad4116878f8ea1017eed984bfd456e2c53db4635d->enter($__internal_3566d070de377cf03f2a760ad4116878f8ea1017eed984bfd456e2c53db4635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 202
        $context["force_error"] = true;
        // line 203
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3566d070de377cf03f2a760ad4116878f8ea1017eed984bfd456e2c53db4635d->leave($__internal_3566d070de377cf03f2a760ad4116878f8ea1017eed984bfd456e2c53db4635d_prof);

    }

    // line 206
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cb121babcaf59d8ff766d7f76a1f79bcf9e2df937d7e8f0d664e4289802639e5 = $this->env->getExtension("native_profiler");
        $__internal_cb121babcaf59d8ff766d7f76a1f79bcf9e2df937d7e8f0d664e4289802639e5->enter($__internal_cb121babcaf59d8ff766d7f76a1f79bcf9e2df937d7e8f0d664e4289802639e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 207
        $context["force_error"] = true;
        // line 208
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cb121babcaf59d8ff766d7f76a1f79bcf9e2df937d7e8f0d664e4289802639e5->leave($__internal_cb121babcaf59d8ff766d7f76a1f79bcf9e2df937d7e8f0d664e4289802639e5_prof);

    }

    // line 211
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_674574bb7f76b9583f4026450a21dc3e819af66180845dbbd1379a8b40249b4b = $this->env->getExtension("native_profiler");
        $__internal_674574bb7f76b9583f4026450a21dc3e819af66180845dbbd1379a8b40249b4b->enter($__internal_674574bb7f76b9583f4026450a21dc3e819af66180845dbbd1379a8b40249b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 212
        $context["force_error"] = true;
        // line 213
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_674574bb7f76b9583f4026450a21dc3e819af66180845dbbd1379a8b40249b4b->leave($__internal_674574bb7f76b9583f4026450a21dc3e819af66180845dbbd1379a8b40249b4b_prof);

    }

    // line 216
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_96e5e7b0b6c30801351bd22d1e8970d4486865e5c3fdb35f49cf0b85ca35223d = $this->env->getExtension("native_profiler");
        $__internal_96e5e7b0b6c30801351bd22d1e8970d4486865e5c3fdb35f49cf0b85ca35223d->enter($__internal_96e5e7b0b6c30801351bd22d1e8970d4486865e5c3fdb35f49cf0b85ca35223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 217
        $context["force_error"] = true;
        // line 218
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_96e5e7b0b6c30801351bd22d1e8970d4486865e5c3fdb35f49cf0b85ca35223d->leave($__internal_96e5e7b0b6c30801351bd22d1e8970d4486865e5c3fdb35f49cf0b85ca35223d_prof);

    }

    // line 221
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_625674a4fb5499e768b2dd1be32c105108adc2b1f7caeb62074b837eb22d4aba = $this->env->getExtension("native_profiler");
        $__internal_625674a4fb5499e768b2dd1be32c105108adc2b1f7caeb62074b837eb22d4aba->enter($__internal_625674a4fb5499e768b2dd1be32c105108adc2b1f7caeb62074b837eb22d4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 222
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 225
        echo "</div>";
        
        $__internal_625674a4fb5499e768b2dd1be32c105108adc2b1f7caeb62074b837eb22d4aba->leave($__internal_625674a4fb5499e768b2dd1be32c105108adc2b1f7caeb62074b837eb22d4aba_prof);

    }

    // line 228
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9bcb6bda42f473c685b85bbff072913a01873e29f2c5e21304f01c42fd3fa2e3 = $this->env->getExtension("native_profiler");
        $__internal_9bcb6bda42f473c685b85bbff072913a01873e29f2c5e21304f01c42fd3fa2e3->enter($__internal_9bcb6bda42f473c685b85bbff072913a01873e29f2c5e21304f01c42fd3fa2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 229
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_9bcb6bda42f473c685b85bbff072913a01873e29f2c5e21304f01c42fd3fa2e3->leave($__internal_9bcb6bda42f473c685b85bbff072913a01873e29f2c5e21304f01c42fd3fa2e3_prof);

    }

    // line 237
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f03b0896e6b68b812352fed5ec796587aa689d51be65bfb48c0af51c72293781 = $this->env->getExtension("native_profiler");
        $__internal_f03b0896e6b68b812352fed5ec796587aa689d51be65bfb48c0af51c72293781->enter($__internal_f03b0896e6b68b812352fed5ec796587aa689d51be65bfb48c0af51c72293781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 238
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 239
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 240
            echo "    <ul class=\"list-unstyled\">";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 242
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "</ul>
    ";
            // line 245
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_f03b0896e6b68b812352fed5ec796587aa689d51be65bfb48c0af51c72293781->leave($__internal_f03b0896e6b68b812352fed5ec796587aa689d51be65bfb48c0af51c72293781_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  841 => 245,  838 => 244,  830 => 242,  826 => 241,  824 => 240,  818 => 239,  816 => 238,  810 => 237,  803 => 232,  801 => 231,  799 => 230,  793 => 229,  787 => 228,  780 => 225,  778 => 224,  776 => 223,  770 => 222,  764 => 221,  757 => 218,  755 => 217,  749 => 216,  742 => 213,  740 => 212,  734 => 211,  727 => 208,  725 => 207,  719 => 206,  712 => 203,  710 => 202,  704 => 201,  697 => 198,  695 => 197,  693 => 196,  687 => 195,  680 => 192,  678 => 191,  676 => 190,  674 => 189,  668 => 188,  662 => 187,  653 => 181,  649 => 180,  634 => 179,  630 => 176,  627 => 173,  626 => 172,  625 => 171,  623 => 170,  620 => 169,  617 => 168,  614 => 167,  611 => 166,  608 => 165,  605 => 164,  602 => 163,  599 => 162,  597 => 161,  591 => 160,  584 => 157,  578 => 156,  571 => 153,  565 => 152,  558 => 149,  556 => 148,  550 => 146,  543 => 143,  541 => 142,  535 => 141,  527 => 135,  525 => 134,  523 => 133,  520 => 131,  518 => 130,  516 => 129,  510 => 128,  502 => 124,  500 => 123,  498 => 122,  495 => 120,  493 => 119,  491 => 118,  485 => 117,  477 => 113,  471 => 110,  470 => 109,  469 => 108,  465 => 107,  461 => 106,  458 => 104,  452 => 101,  451 => 100,  450 => 99,  446 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 237,  197 => 236,  194 => 234,  192 => 228,  189 => 227,  187 => 221,  184 => 220,  182 => 216,  179 => 215,  177 => 211,  174 => 210,  172 => 206,  169 => 205,  167 => 201,  164 => 200,  162 => 195,  159 => 194,  157 => 187,  154 => 186,  151 => 184,  149 => 160,  146 => 159,  144 => 156,  141 => 155,  139 => 152,  136 => 151,  134 => 146,  131 => 145,  129 => 141,  126 => 140,  123 => 138,  121 => 128,  118 => 127,  116 => 117,  113 => 116,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or type not in ['file', 'hidden'] %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do not display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*     {% if form.parent %}<span class="help-block">{% else %}<div class="alert alert-danger">{% endif %}*/
/*     <ul class="list-unstyled">*/
/*         {%- for error in errors -%}*/
/*             <li><span class="glyphicon glyphicon-exclamation-sign"></span> {{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {% if form.parent %}</span>{% else %}</div>{% endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
