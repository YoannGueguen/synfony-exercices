<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_316d22b0e3178201a79bf30df7f164418cb94ee3324c1ed9bf8e64b8c125b6dc extends Twig_Template
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
        $__internal_2b51e0c450e0788c0fba8497f2e91346e55b05fef7ffc91c5a3723970d41f4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b51e0c450e0788c0fba8497f2e91346e55b05fef7ffc91c5a3723970d41f4d5->enter($__internal_2b51e0c450e0788c0fba8497f2e91346e55b05fef7ffc91c5a3723970d41f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1599ff24160a079c5b1521d7eeb617a6ee725df627c3bde0adb20221199ede6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1599ff24160a079c5b1521d7eeb617a6ee725df627c3bde0adb20221199ede6b->enter($__internal_1599ff24160a079c5b1521d7eeb617a6ee725df627c3bde0adb20221199ede6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2b51e0c450e0788c0fba8497f2e91346e55b05fef7ffc91c5a3723970d41f4d5->leave($__internal_2b51e0c450e0788c0fba8497f2e91346e55b05fef7ffc91c5a3723970d41f4d5_prof);

        
        $__internal_1599ff24160a079c5b1521d7eeb617a6ee725df627c3bde0adb20221199ede6b->leave($__internal_1599ff24160a079c5b1521d7eeb617a6ee725df627c3bde0adb20221199ede6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
