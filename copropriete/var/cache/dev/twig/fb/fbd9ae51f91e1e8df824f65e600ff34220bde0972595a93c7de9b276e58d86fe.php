<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_165f3744fdb2b14823a83419f62990e40437d77de85ee0cde4b7b293e263ff34 extends Twig_Template
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
        $__internal_c60903f9dfa0aed510adc16e5b554115693e0262ae2c3c54d75052ebcea2cdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60903f9dfa0aed510adc16e5b554115693e0262ae2c3c54d75052ebcea2cdc2->enter($__internal_c60903f9dfa0aed510adc16e5b554115693e0262ae2c3c54d75052ebcea2cdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_070eacfc56be5477511cfe718d57243ee5e5870e5a3bdc27d7e8fe9128c98ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070eacfc56be5477511cfe718d57243ee5e5870e5a3bdc27d7e8fe9128c98ec3->enter($__internal_070eacfc56be5477511cfe718d57243ee5e5870e5a3bdc27d7e8fe9128c98ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c60903f9dfa0aed510adc16e5b554115693e0262ae2c3c54d75052ebcea2cdc2->leave($__internal_c60903f9dfa0aed510adc16e5b554115693e0262ae2c3c54d75052ebcea2cdc2_prof);

        
        $__internal_070eacfc56be5477511cfe718d57243ee5e5870e5a3bdc27d7e8fe9128c98ec3->leave($__internal_070eacfc56be5477511cfe718d57243ee5e5870e5a3bdc27d7e8fe9128c98ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
