<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_67df203297ae53eedef7dd578a07ed5b038c60b38209ccb58babe7efb1d78604 extends Twig_Template
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
        $__internal_2d759ee6ee0a644ef762a3eb0715bbcbbc86f6aae9131da90cede891ca3ba6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d759ee6ee0a644ef762a3eb0715bbcbbc86f6aae9131da90cede891ca3ba6c1->enter($__internal_2d759ee6ee0a644ef762a3eb0715bbcbbc86f6aae9131da90cede891ca3ba6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_79bc078d80f5f4eed527351f1adc12d61409f18edbd2be1eb5202864f6620783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bc078d80f5f4eed527351f1adc12d61409f18edbd2be1eb5202864f6620783->enter($__internal_79bc078d80f5f4eed527351f1adc12d61409f18edbd2be1eb5202864f6620783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2d759ee6ee0a644ef762a3eb0715bbcbbc86f6aae9131da90cede891ca3ba6c1->leave($__internal_2d759ee6ee0a644ef762a3eb0715bbcbbc86f6aae9131da90cede891ca3ba6c1_prof);

        
        $__internal_79bc078d80f5f4eed527351f1adc12d61409f18edbd2be1eb5202864f6620783->leave($__internal_79bc078d80f5f4eed527351f1adc12d61409f18edbd2be1eb5202864f6620783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
