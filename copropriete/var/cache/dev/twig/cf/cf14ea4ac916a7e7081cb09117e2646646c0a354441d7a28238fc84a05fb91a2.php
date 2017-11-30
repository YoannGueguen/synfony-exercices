<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
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
        $__internal_858a09418c852f59ef35d062a73fd758003ea8b73fe63da7b08a4010ff9c4c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858a09418c852f59ef35d062a73fd758003ea8b73fe63da7b08a4010ff9c4c7d->enter($__internal_858a09418c852f59ef35d062a73fd758003ea8b73fe63da7b08a4010ff9c4c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_30e98c4c0829c838f370c24847e558f5401e40b28ad4ff33a7c222f5e9a6ae18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e98c4c0829c838f370c24847e558f5401e40b28ad4ff33a7c222f5e9a6ae18->enter($__internal_30e98c4c0829c838f370c24847e558f5401e40b28ad4ff33a7c222f5e9a6ae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_858a09418c852f59ef35d062a73fd758003ea8b73fe63da7b08a4010ff9c4c7d->leave($__internal_858a09418c852f59ef35d062a73fd758003ea8b73fe63da7b08a4010ff9c4c7d_prof);

        
        $__internal_30e98c4c0829c838f370c24847e558f5401e40b28ad4ff33a7c222f5e9a6ae18->leave($__internal_30e98c4c0829c838f370c24847e558f5401e40b28ad4ff33a7c222f5e9a6ae18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
