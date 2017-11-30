<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_362108fd7d7d6d643f721791d619c31c061797f605291372ae3b3daf6a29dd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362108fd7d7d6d643f721791d619c31c061797f605291372ae3b3daf6a29dd33->enter($__internal_362108fd7d7d6d643f721791d619c31c061797f605291372ae3b3daf6a29dd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2a946fc0e122d564e3b1bbf2580cc06b1e16e5f49157b24d4fe3fb9c9f9ccb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a946fc0e122d564e3b1bbf2580cc06b1e16e5f49157b24d4fe3fb9c9f9ccb8a->enter($__internal_2a946fc0e122d564e3b1bbf2580cc06b1e16e5f49157b24d4fe3fb9c9f9ccb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_362108fd7d7d6d643f721791d619c31c061797f605291372ae3b3daf6a29dd33->leave($__internal_362108fd7d7d6d643f721791d619c31c061797f605291372ae3b3daf6a29dd33_prof);

        
        $__internal_2a946fc0e122d564e3b1bbf2580cc06b1e16e5f49157b24d4fe3fb9c9f9ccb8a->leave($__internal_2a946fc0e122d564e3b1bbf2580cc06b1e16e5f49157b24d4fe3fb9c9f9ccb8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
