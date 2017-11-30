<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ad25e4e008bfaf7d716cab14e1f42eb67fe05ebf2e28e7032bb5f9f646e86552 extends Twig_Template
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
        $__internal_0ec03c4ea1ddce556a6077aaf44bbac5b0b08a17a06e6e30961d862cc8e5c27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec03c4ea1ddce556a6077aaf44bbac5b0b08a17a06e6e30961d862cc8e5c27e->enter($__internal_0ec03c4ea1ddce556a6077aaf44bbac5b0b08a17a06e6e30961d862cc8e5c27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_bcd9982f9ac6d3e76d727b33bcd61760a99d084527e0e5e7887d65e72522b4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd9982f9ac6d3e76d727b33bcd61760a99d084527e0e5e7887d65e72522b4d9->enter($__internal_bcd9982f9ac6d3e76d727b33bcd61760a99d084527e0e5e7887d65e72522b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_0ec03c4ea1ddce556a6077aaf44bbac5b0b08a17a06e6e30961d862cc8e5c27e->leave($__internal_0ec03c4ea1ddce556a6077aaf44bbac5b0b08a17a06e6e30961d862cc8e5c27e_prof);

        
        $__internal_bcd9982f9ac6d3e76d727b33bcd61760a99d084527e0e5e7887d65e72522b4d9->leave($__internal_bcd9982f9ac6d3e76d727b33bcd61760a99d084527e0e5e7887d65e72522b4d9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ced43e85fe1487e6eaeabf9eda33edd6f33f54720eeee86138e56f948ceee021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced43e85fe1487e6eaeabf9eda33edd6f33f54720eeee86138e56f948ceee021->enter($__internal_ced43e85fe1487e6eaeabf9eda33edd6f33f54720eeee86138e56f948ceee021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5cd3c01c94e3b4fba479bdfd680ed09de9348dd196c31574f8f823b6040fa967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd3c01c94e3b4fba479bdfd680ed09de9348dd196c31574f8f823b6040fa967->enter($__internal_5cd3c01c94e3b4fba479bdfd680ed09de9348dd196c31574f8f823b6040fa967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5cd3c01c94e3b4fba479bdfd680ed09de9348dd196c31574f8f823b6040fa967->leave($__internal_5cd3c01c94e3b4fba479bdfd680ed09de9348dd196c31574f8f823b6040fa967_prof);

        
        $__internal_ced43e85fe1487e6eaeabf9eda33edd6f33f54720eeee86138e56f948ceee021->leave($__internal_ced43e85fe1487e6eaeabf9eda33edd6f33f54720eeee86138e56f948ceee021_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6492d069147c9bd503fe5ac4f7c9c60663e63709afb1b4370188d5910fcfa989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6492d069147c9bd503fe5ac4f7c9c60663e63709afb1b4370188d5910fcfa989->enter($__internal_6492d069147c9bd503fe5ac4f7c9c60663e63709afb1b4370188d5910fcfa989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6e76332cbc1d8bc1f100aabc9957f8943a97e489cae99408dd0b54ad98265bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e76332cbc1d8bc1f100aabc9957f8943a97e489cae99408dd0b54ad98265bf5->enter($__internal_6e76332cbc1d8bc1f100aabc9957f8943a97e489cae99408dd0b54ad98265bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e76332cbc1d8bc1f100aabc9957f8943a97e489cae99408dd0b54ad98265bf5->leave($__internal_6e76332cbc1d8bc1f100aabc9957f8943a97e489cae99408dd0b54ad98265bf5_prof);

        
        $__internal_6492d069147c9bd503fe5ac4f7c9c60663e63709afb1b4370188d5910fcfa989->leave($__internal_6492d069147c9bd503fe5ac4f7c9c60663e63709afb1b4370188d5910fcfa989_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f29ae9b4b90e9a322883643c18287b3ae822b6fb8e26f1dfc425bdf317fef235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29ae9b4b90e9a322883643c18287b3ae822b6fb8e26f1dfc425bdf317fef235->enter($__internal_f29ae9b4b90e9a322883643c18287b3ae822b6fb8e26f1dfc425bdf317fef235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cc785e1df9acfde8fd347496806b7be17d9021b104308c6479e668a1529c396f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc785e1df9acfde8fd347496806b7be17d9021b104308c6479e668a1529c396f->enter($__internal_cc785e1df9acfde8fd347496806b7be17d9021b104308c6479e668a1529c396f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_cc785e1df9acfde8fd347496806b7be17d9021b104308c6479e668a1529c396f->leave($__internal_cc785e1df9acfde8fd347496806b7be17d9021b104308c6479e668a1529c396f_prof);

        
        $__internal_f29ae9b4b90e9a322883643c18287b3ae822b6fb8e26f1dfc425bdf317fef235->leave($__internal_f29ae9b4b90e9a322883643c18287b3ae822b6fb8e26f1dfc425bdf317fef235_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_905be989f2a9d85d23943291d3e4301d4f7dc323ad5fe36151c98a9d173001d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905be989f2a9d85d23943291d3e4301d4f7dc323ad5fe36151c98a9d173001d2->enter($__internal_905be989f2a9d85d23943291d3e4301d4f7dc323ad5fe36151c98a9d173001d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_adac8328dc7c03e0951061397040c6776964f10cda9a11ff3abd4c86d0f70eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adac8328dc7c03e0951061397040c6776964f10cda9a11ff3abd4c86d0f70eb4->enter($__internal_adac8328dc7c03e0951061397040c6776964f10cda9a11ff3abd4c86d0f70eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_adac8328dc7c03e0951061397040c6776964f10cda9a11ff3abd4c86d0f70eb4->leave($__internal_adac8328dc7c03e0951061397040c6776964f10cda9a11ff3abd4c86d0f70eb4_prof);

        
        $__internal_905be989f2a9d85d23943291d3e4301d4f7dc323ad5fe36151c98a9d173001d2->leave($__internal_905be989f2a9d85d23943291d3e4301d4f7dc323ad5fe36151c98a9d173001d2_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_394164df2f01165b07c0c84eb3612d5e6063db46f896c4ee9f20e32cd03db4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394164df2f01165b07c0c84eb3612d5e6063db46f896c4ee9f20e32cd03db4f1->enter($__internal_394164df2f01165b07c0c84eb3612d5e6063db46f896c4ee9f20e32cd03db4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_dbe4e41b7490918aeb266465852dbf7d42306e70bcb226de0ca43e9cd221c34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe4e41b7490918aeb266465852dbf7d42306e70bcb226de0ca43e9cd221c34f->enter($__internal_dbe4e41b7490918aeb266465852dbf7d42306e70bcb226de0ca43e9cd221c34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_dbe4e41b7490918aeb266465852dbf7d42306e70bcb226de0ca43e9cd221c34f->leave($__internal_dbe4e41b7490918aeb266465852dbf7d42306e70bcb226de0ca43e9cd221c34f_prof);

        
        $__internal_394164df2f01165b07c0c84eb3612d5e6063db46f896c4ee9f20e32cd03db4f1->leave($__internal_394164df2f01165b07c0c84eb3612d5e6063db46f896c4ee9f20e32cd03db4f1_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bc4b991d7b2fb8d0de3870457421d4b0cfe8a503da0ba624c23af8d94c144e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4b991d7b2fb8d0de3870457421d4b0cfe8a503da0ba624c23af8d94c144e94->enter($__internal_bc4b991d7b2fb8d0de3870457421d4b0cfe8a503da0ba624c23af8d94c144e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_71a4e90f0440ba632e3621612c322eaf1b6e3414994eb3cc6c4c73d4a4974840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a4e90f0440ba632e3621612c322eaf1b6e3414994eb3cc6c4c73d4a4974840->enter($__internal_71a4e90f0440ba632e3621612c322eaf1b6e3414994eb3cc6c4c73d4a4974840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_71a4e90f0440ba632e3621612c322eaf1b6e3414994eb3cc6c4c73d4a4974840->leave($__internal_71a4e90f0440ba632e3621612c322eaf1b6e3414994eb3cc6c4c73d4a4974840_prof);

        
        $__internal_bc4b991d7b2fb8d0de3870457421d4b0cfe8a503da0ba624c23af8d94c144e94->leave($__internal_bc4b991d7b2fb8d0de3870457421d4b0cfe8a503da0ba624c23af8d94c144e94_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_e289fa19fc1a9e8af5a9c29934d5cd88a7cb95450db89b7cb484eeb49494d726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e289fa19fc1a9e8af5a9c29934d5cd88a7cb95450db89b7cb484eeb49494d726->enter($__internal_e289fa19fc1a9e8af5a9c29934d5cd88a7cb95450db89b7cb484eeb49494d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_d6bc5c84df0615615f445c2de6698f2b7f211fca9389598e0fca137ada486de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bc5c84df0615615f445c2de6698f2b7f211fca9389598e0fca137ada486de0->enter($__internal_d6bc5c84df0615615f445c2de6698f2b7f211fca9389598e0fca137ada486de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d6bc5c84df0615615f445c2de6698f2b7f211fca9389598e0fca137ada486de0->leave($__internal_d6bc5c84df0615615f445c2de6698f2b7f211fca9389598e0fca137ada486de0_prof);

        
        $__internal_e289fa19fc1a9e8af5a9c29934d5cd88a7cb95450db89b7cb484eeb49494d726->leave($__internal_e289fa19fc1a9e8af5a9c29934d5cd88a7cb95450db89b7cb484eeb49494d726_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5f362234c57d08cb824df2a4b343fffce477d1559ef408a5568b483f7e3fda92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f362234c57d08cb824df2a4b343fffce477d1559ef408a5568b483f7e3fda92->enter($__internal_5f362234c57d08cb824df2a4b343fffce477d1559ef408a5568b483f7e3fda92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7e61fed3172791a2a0e22d77128353fc72a0006d28b950e79d11a058dde2ad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e61fed3172791a2a0e22d77128353fc72a0006d28b950e79d11a058dde2ad8d->enter($__internal_7e61fed3172791a2a0e22d77128353fc72a0006d28b950e79d11a058dde2ad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7e61fed3172791a2a0e22d77128353fc72a0006d28b950e79d11a058dde2ad8d->leave($__internal_7e61fed3172791a2a0e22d77128353fc72a0006d28b950e79d11a058dde2ad8d_prof);

        
        $__internal_5f362234c57d08cb824df2a4b343fffce477d1559ef408a5568b483f7e3fda92->leave($__internal_5f362234c57d08cb824df2a4b343fffce477d1559ef408a5568b483f7e3fda92_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3b1f9e62ea7d9ba76c811eb0c8fdd8cc75f34ec7cfc00425644e55d43b1d6921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1f9e62ea7d9ba76c811eb0c8fdd8cc75f34ec7cfc00425644e55d43b1d6921->enter($__internal_3b1f9e62ea7d9ba76c811eb0c8fdd8cc75f34ec7cfc00425644e55d43b1d6921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ea3a0b2237bffcb849451e9a80f9c394e14dede2e6415caa1b3ce20416f607ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3a0b2237bffcb849451e9a80f9c394e14dede2e6415caa1b3ce20416f607ae->enter($__internal_ea3a0b2237bffcb849451e9a80f9c394e14dede2e6415caa1b3ce20416f607ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ea3a0b2237bffcb849451e9a80f9c394e14dede2e6415caa1b3ce20416f607ae->leave($__internal_ea3a0b2237bffcb849451e9a80f9c394e14dede2e6415caa1b3ce20416f607ae_prof);

        
        $__internal_3b1f9e62ea7d9ba76c811eb0c8fdd8cc75f34ec7cfc00425644e55d43b1d6921->leave($__internal_3b1f9e62ea7d9ba76c811eb0c8fdd8cc75f34ec7cfc00425644e55d43b1d6921_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ae066a9a66165780d58da8c08a039798e5acb59bb620297ce73aa85a9eeecf94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae066a9a66165780d58da8c08a039798e5acb59bb620297ce73aa85a9eeecf94->enter($__internal_ae066a9a66165780d58da8c08a039798e5acb59bb620297ce73aa85a9eeecf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8393f2a25aaeb72429a06ebb15851d2175950a03c61c0f2b7f80e887884d78da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8393f2a25aaeb72429a06ebb15851d2175950a03c61c0f2b7f80e887884d78da->enter($__internal_8393f2a25aaeb72429a06ebb15851d2175950a03c61c0f2b7f80e887884d78da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_8393f2a25aaeb72429a06ebb15851d2175950a03c61c0f2b7f80e887884d78da->leave($__internal_8393f2a25aaeb72429a06ebb15851d2175950a03c61c0f2b7f80e887884d78da_prof);

        
        $__internal_ae066a9a66165780d58da8c08a039798e5acb59bb620297ce73aa85a9eeecf94->leave($__internal_ae066a9a66165780d58da8c08a039798e5acb59bb620297ce73aa85a9eeecf94_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
