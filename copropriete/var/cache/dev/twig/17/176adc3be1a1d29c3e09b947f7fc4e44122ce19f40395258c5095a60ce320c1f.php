<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0d76113f15b8033c60734e18cd14fb2140f39b49b849fdcf27843165b54b909a extends Twig_Template
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
        $__internal_8ac9a32e7e555a88a34fe8503b2bfb905580523bba2da3694862bd9b1912b702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac9a32e7e555a88a34fe8503b2bfb905580523bba2da3694862bd9b1912b702->enter($__internal_8ac9a32e7e555a88a34fe8503b2bfb905580523bba2da3694862bd9b1912b702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e4d87265666c855f3a7b0807d0aa76dc5eb7e9d84a483321ac1217e9d5c35982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d87265666c855f3a7b0807d0aa76dc5eb7e9d84a483321ac1217e9d5c35982->enter($__internal_e4d87265666c855f3a7b0807d0aa76dc5eb7e9d84a483321ac1217e9d5c35982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8ac9a32e7e555a88a34fe8503b2bfb905580523bba2da3694862bd9b1912b702->leave($__internal_8ac9a32e7e555a88a34fe8503b2bfb905580523bba2da3694862bd9b1912b702_prof);

        
        $__internal_e4d87265666c855f3a7b0807d0aa76dc5eb7e9d84a483321ac1217e9d5c35982->leave($__internal_e4d87265666c855f3a7b0807d0aa76dc5eb7e9d84a483321ac1217e9d5c35982_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
