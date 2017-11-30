<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cfdd71e94444c899edef362485c9beedc392f4f3ee66b627195df79810d6cfc extends Twig_Template
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
        $__internal_7727c9ae12052e9dcf1e4911272c07aced5c6f98401c53346fdfc2d532ec8904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7727c9ae12052e9dcf1e4911272c07aced5c6f98401c53346fdfc2d532ec8904->enter($__internal_7727c9ae12052e9dcf1e4911272c07aced5c6f98401c53346fdfc2d532ec8904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_722939b622bbccfc39788b31f2ca2084b6db02f83dbc250c36bef3492517e147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722939b622bbccfc39788b31f2ca2084b6db02f83dbc250c36bef3492517e147->enter($__internal_722939b622bbccfc39788b31f2ca2084b6db02f83dbc250c36bef3492517e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7727c9ae12052e9dcf1e4911272c07aced5c6f98401c53346fdfc2d532ec8904->leave($__internal_7727c9ae12052e9dcf1e4911272c07aced5c6f98401c53346fdfc2d532ec8904_prof);

        
        $__internal_722939b622bbccfc39788b31f2ca2084b6db02f83dbc250c36bef3492517e147->leave($__internal_722939b622bbccfc39788b31f2ca2084b6db02f83dbc250c36bef3492517e147_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
