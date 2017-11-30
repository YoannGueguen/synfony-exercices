<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49659a44992dc1813fc9f7de6dbc22911e8f0c8a4a1d5fda0b4b82b9877a5285 extends Twig_Template
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
        $__internal_647683f977a24a32e93c494e1c85d7f1f25906bc88325bb2c379ee68db1b1403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647683f977a24a32e93c494e1c85d7f1f25906bc88325bb2c379ee68db1b1403->enter($__internal_647683f977a24a32e93c494e1c85d7f1f25906bc88325bb2c379ee68db1b1403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b9486e435c8cfe28952dc90218b9e985f2925e59b5b8db95f3ddf1a948b010ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9486e435c8cfe28952dc90218b9e985f2925e59b5b8db95f3ddf1a948b010ac->enter($__internal_b9486e435c8cfe28952dc90218b9e985f2925e59b5b8db95f3ddf1a948b010ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_647683f977a24a32e93c494e1c85d7f1f25906bc88325bb2c379ee68db1b1403->leave($__internal_647683f977a24a32e93c494e1c85d7f1f25906bc88325bb2c379ee68db1b1403_prof);

        
        $__internal_b9486e435c8cfe28952dc90218b9e985f2925e59b5b8db95f3ddf1a948b010ac->leave($__internal_b9486e435c8cfe28952dc90218b9e985f2925e59b5b8db95f3ddf1a948b010ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
