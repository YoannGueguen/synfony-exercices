<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7eccb48954b0631b3c684ce5b7bf58546b6c16056b61032ab6e278944ccd2f0e extends Twig_Template
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
        $__internal_33a2b3de7c53d9eaddfe58cae0359edd52678a2124a15dcb45c21d95541722a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a2b3de7c53d9eaddfe58cae0359edd52678a2124a15dcb45c21d95541722a0->enter($__internal_33a2b3de7c53d9eaddfe58cae0359edd52678a2124a15dcb45c21d95541722a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1776aee30761b415bd096a6bd1db81f7998cb7707675af6cf6fc0c44b8ee3545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1776aee30761b415bd096a6bd1db81f7998cb7707675af6cf6fc0c44b8ee3545->enter($__internal_1776aee30761b415bd096a6bd1db81f7998cb7707675af6cf6fc0c44b8ee3545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_33a2b3de7c53d9eaddfe58cae0359edd52678a2124a15dcb45c21d95541722a0->leave($__internal_33a2b3de7c53d9eaddfe58cae0359edd52678a2124a15dcb45c21d95541722a0_prof);

        
        $__internal_1776aee30761b415bd096a6bd1db81f7998cb7707675af6cf6fc0c44b8ee3545->leave($__internal_1776aee30761b415bd096a6bd1db81f7998cb7707675af6cf6fc0c44b8ee3545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
