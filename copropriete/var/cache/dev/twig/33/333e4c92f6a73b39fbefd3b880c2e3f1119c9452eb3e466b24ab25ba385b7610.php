<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6f4ce033039f6c51d9532719449c55d4a4f2c11f37f9fcb7c35eb01a47ee1679 extends Twig_Template
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
        $__internal_65cd465e7dd0255e8a7e06d4b1083b94656004136e75fbf00494f5cd6991efd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cd465e7dd0255e8a7e06d4b1083b94656004136e75fbf00494f5cd6991efd7->enter($__internal_65cd465e7dd0255e8a7e06d4b1083b94656004136e75fbf00494f5cd6991efd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b5ec425e464ad0c438c77bf08bec0817b87f0a04b85880c43bbf9f92178e40a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ec425e464ad0c438c77bf08bec0817b87f0a04b85880c43bbf9f92178e40a4->enter($__internal_b5ec425e464ad0c438c77bf08bec0817b87f0a04b85880c43bbf9f92178e40a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_65cd465e7dd0255e8a7e06d4b1083b94656004136e75fbf00494f5cd6991efd7->leave($__internal_65cd465e7dd0255e8a7e06d4b1083b94656004136e75fbf00494f5cd6991efd7_prof);

        
        $__internal_b5ec425e464ad0c438c77bf08bec0817b87f0a04b85880c43bbf9f92178e40a4->leave($__internal_b5ec425e464ad0c438c77bf08bec0817b87f0a04b85880c43bbf9f92178e40a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
