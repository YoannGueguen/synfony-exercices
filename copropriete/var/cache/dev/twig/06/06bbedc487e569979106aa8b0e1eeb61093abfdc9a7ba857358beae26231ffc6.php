<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_57df2c39a0b06d8b68778369aa5cdc15783ae797e12a86dfff3d32babfab7b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57df2c39a0b06d8b68778369aa5cdc15783ae797e12a86dfff3d32babfab7b6b->enter($__internal_57df2c39a0b06d8b68778369aa5cdc15783ae797e12a86dfff3d32babfab7b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_751486cde42a5a1c6bb2b16c1b9be46b530d44ceb1a67d320556f149ec429c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751486cde42a5a1c6bb2b16c1b9be46b530d44ceb1a67d320556f149ec429c2c->enter($__internal_751486cde42a5a1c6bb2b16c1b9be46b530d44ceb1a67d320556f149ec429c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_57df2c39a0b06d8b68778369aa5cdc15783ae797e12a86dfff3d32babfab7b6b->leave($__internal_57df2c39a0b06d8b68778369aa5cdc15783ae797e12a86dfff3d32babfab7b6b_prof);

        
        $__internal_751486cde42a5a1c6bb2b16c1b9be46b530d44ceb1a67d320556f149ec429c2c->leave($__internal_751486cde42a5a1c6bb2b16c1b9be46b530d44ceb1a67d320556f149ec429c2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
