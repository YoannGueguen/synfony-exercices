<?php

/* form_table_layout.html.twig */
class __TwigTemplate_dc58db71459f313049b174f0f04f296ddc23df9088ccf72dd2bbb273a22def82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f7e48862ff4e157c615f1a0a9118386556d43e67d87d2d1ce9aa86e9f4ea185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7e48862ff4e157c615f1a0a9118386556d43e67d87d2d1ce9aa86e9f4ea185->enter($__internal_5f7e48862ff4e157c615f1a0a9118386556d43e67d87d2d1ce9aa86e9f4ea185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_b3739386b9699ca448bab075acc4e917274095c6cdda8c071f9ef943a26b7b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3739386b9699ca448bab075acc4e917274095c6cdda8c071f9ef943a26b7b28->enter($__internal_b3739386b9699ca448bab075acc4e917274095c6cdda8c071f9ef943a26b7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_5f7e48862ff4e157c615f1a0a9118386556d43e67d87d2d1ce9aa86e9f4ea185->leave($__internal_5f7e48862ff4e157c615f1a0a9118386556d43e67d87d2d1ce9aa86e9f4ea185_prof);

        
        $__internal_b3739386b9699ca448bab075acc4e917274095c6cdda8c071f9ef943a26b7b28->leave($__internal_b3739386b9699ca448bab075acc4e917274095c6cdda8c071f9ef943a26b7b28_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_83a33359eb2e147a7bc4d13baa7e6bd90e989efbabdcf35ee7930a204da09b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a33359eb2e147a7bc4d13baa7e6bd90e989efbabdcf35ee7930a204da09b09->enter($__internal_83a33359eb2e147a7bc4d13baa7e6bd90e989efbabdcf35ee7930a204da09b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_054b214ecf62eee274c453cec866f6ae7bca261f7cc0b028c7c538e1d113392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054b214ecf62eee274c453cec866f6ae7bca261f7cc0b028c7c538e1d113392e->enter($__internal_054b214ecf62eee274c453cec866f6ae7bca261f7cc0b028c7c538e1d113392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_054b214ecf62eee274c453cec866f6ae7bca261f7cc0b028c7c538e1d113392e->leave($__internal_054b214ecf62eee274c453cec866f6ae7bca261f7cc0b028c7c538e1d113392e_prof);

        
        $__internal_83a33359eb2e147a7bc4d13baa7e6bd90e989efbabdcf35ee7930a204da09b09->leave($__internal_83a33359eb2e147a7bc4d13baa7e6bd90e989efbabdcf35ee7930a204da09b09_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_50c4a2ae18b5382d5060de99c16c46f0dacad22eb68ea4fa3f469d0933a791ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c4a2ae18b5382d5060de99c16c46f0dacad22eb68ea4fa3f469d0933a791ff->enter($__internal_50c4a2ae18b5382d5060de99c16c46f0dacad22eb68ea4fa3f469d0933a791ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_785f6f9d2d9ed48be18ab08920ca6d6ee309cfa1df343f449dc6ba06f0ffc27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785f6f9d2d9ed48be18ab08920ca6d6ee309cfa1df343f449dc6ba06f0ffc27b->enter($__internal_785f6f9d2d9ed48be18ab08920ca6d6ee309cfa1df343f449dc6ba06f0ffc27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_785f6f9d2d9ed48be18ab08920ca6d6ee309cfa1df343f449dc6ba06f0ffc27b->leave($__internal_785f6f9d2d9ed48be18ab08920ca6d6ee309cfa1df343f449dc6ba06f0ffc27b_prof);

        
        $__internal_50c4a2ae18b5382d5060de99c16c46f0dacad22eb68ea4fa3f469d0933a791ff->leave($__internal_50c4a2ae18b5382d5060de99c16c46f0dacad22eb68ea4fa3f469d0933a791ff_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d28d62bd87cabf7862da13d42bfa8a6a87d48c43a6f97f67933f2ff50c131e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28d62bd87cabf7862da13d42bfa8a6a87d48c43a6f97f67933f2ff50c131e0b->enter($__internal_d28d62bd87cabf7862da13d42bfa8a6a87d48c43a6f97f67933f2ff50c131e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ed3a4b3f9312eb2c8c8d7857466559076c6e7195172e43d22573409330f6cbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3a4b3f9312eb2c8c8d7857466559076c6e7195172e43d22573409330f6cbba->enter($__internal_ed3a4b3f9312eb2c8c8d7857466559076c6e7195172e43d22573409330f6cbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ed3a4b3f9312eb2c8c8d7857466559076c6e7195172e43d22573409330f6cbba->leave($__internal_ed3a4b3f9312eb2c8c8d7857466559076c6e7195172e43d22573409330f6cbba_prof);

        
        $__internal_d28d62bd87cabf7862da13d42bfa8a6a87d48c43a6f97f67933f2ff50c131e0b->leave($__internal_d28d62bd87cabf7862da13d42bfa8a6a87d48c43a6f97f67933f2ff50c131e0b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_227572ee7ebebb0a505527b3aa2e39cc933ed430ea6d33dc2e712db53c98e166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227572ee7ebebb0a505527b3aa2e39cc933ed430ea6d33dc2e712db53c98e166->enter($__internal_227572ee7ebebb0a505527b3aa2e39cc933ed430ea6d33dc2e712db53c98e166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_453bec9cd8991f96b2498065ae73b2948222e276f3eb5145635cd08567030bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453bec9cd8991f96b2498065ae73b2948222e276f3eb5145635cd08567030bc4->enter($__internal_453bec9cd8991f96b2498065ae73b2948222e276f3eb5145635cd08567030bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_453bec9cd8991f96b2498065ae73b2948222e276f3eb5145635cd08567030bc4->leave($__internal_453bec9cd8991f96b2498065ae73b2948222e276f3eb5145635cd08567030bc4_prof);

        
        $__internal_227572ee7ebebb0a505527b3aa2e39cc933ed430ea6d33dc2e712db53c98e166->leave($__internal_227572ee7ebebb0a505527b3aa2e39cc933ed430ea6d33dc2e712db53c98e166_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
