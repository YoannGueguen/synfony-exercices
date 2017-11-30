<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_ae2aa8a7e4636abcb3be5a2358d3efe1694b16145e6fa6cf2fe2833aaa1b5918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2aa8a7e4636abcb3be5a2358d3efe1694b16145e6fa6cf2fe2833aaa1b5918->enter($__internal_ae2aa8a7e4636abcb3be5a2358d3efe1694b16145e6fa6cf2fe2833aaa1b5918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_00599be2057405c9e92c9273b9ec7956303f79a6bace6a66ea59d404d15128a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00599be2057405c9e92c9273b9ec7956303f79a6bace6a66ea59d404d15128a4->enter($__internal_00599be2057405c9e92c9273b9ec7956303f79a6bace6a66ea59d404d15128a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ae2aa8a7e4636abcb3be5a2358d3efe1694b16145e6fa6cf2fe2833aaa1b5918->leave($__internal_ae2aa8a7e4636abcb3be5a2358d3efe1694b16145e6fa6cf2fe2833aaa1b5918_prof);

        
        $__internal_00599be2057405c9e92c9273b9ec7956303f79a6bace6a66ea59d404d15128a4->leave($__internal_00599be2057405c9e92c9273b9ec7956303f79a6bace6a66ea59d404d15128a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
