<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_69b07457559438bda4b1591edc0b79289912a023407d05b5ddf2d56e3c5a5631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b07457559438bda4b1591edc0b79289912a023407d05b5ddf2d56e3c5a5631->enter($__internal_69b07457559438bda4b1591edc0b79289912a023407d05b5ddf2d56e3c5a5631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2b318d1e50446a7f94f4446844870e3303e15ea5a761f73c82c932b3c433459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b318d1e50446a7f94f4446844870e3303e15ea5a761f73c82c932b3c433459e->enter($__internal_2b318d1e50446a7f94f4446844870e3303e15ea5a761f73c82c932b3c433459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_69b07457559438bda4b1591edc0b79289912a023407d05b5ddf2d56e3c5a5631->leave($__internal_69b07457559438bda4b1591edc0b79289912a023407d05b5ddf2d56e3c5a5631_prof);

        
        $__internal_2b318d1e50446a7f94f4446844870e3303e15ea5a761f73c82c932b3c433459e->leave($__internal_2b318d1e50446a7f94f4446844870e3303e15ea5a761f73c82c932b3c433459e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
