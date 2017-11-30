<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_73e63b9267a385b723ce06ba75a68ccba6e68238e6a2c7fef16911bf0fc8d2d0 extends Twig_Template
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
        $__internal_6cf3a12a78bb1c682cf354227980ac1d5d5bba987edbd7683ae3e44ea54a0321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf3a12a78bb1c682cf354227980ac1d5d5bba987edbd7683ae3e44ea54a0321->enter($__internal_6cf3a12a78bb1c682cf354227980ac1d5d5bba987edbd7683ae3e44ea54a0321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_262992c111afae6825c372971ced0f23a3c60d00fc8eee5da2f4d10768a8fa16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262992c111afae6825c372971ced0f23a3c60d00fc8eee5da2f4d10768a8fa16->enter($__internal_262992c111afae6825c372971ced0f23a3c60d00fc8eee5da2f4d10768a8fa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6cf3a12a78bb1c682cf354227980ac1d5d5bba987edbd7683ae3e44ea54a0321->leave($__internal_6cf3a12a78bb1c682cf354227980ac1d5d5bba987edbd7683ae3e44ea54a0321_prof);

        
        $__internal_262992c111afae6825c372971ced0f23a3c60d00fc8eee5da2f4d10768a8fa16->leave($__internal_262992c111afae6825c372971ced0f23a3c60d00fc8eee5da2f4d10768a8fa16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
