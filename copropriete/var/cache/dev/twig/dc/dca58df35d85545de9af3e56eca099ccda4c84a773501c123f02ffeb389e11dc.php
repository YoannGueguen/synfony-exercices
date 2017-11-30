<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5a9333badc484bd217e3a06d41ff5df228e73382f960a32beca2eed80ba85e81 extends Twig_Template
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
        $__internal_867234d992974517d0782dd66ad816995341b528061730c4fe924c31cbbf5272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867234d992974517d0782dd66ad816995341b528061730c4fe924c31cbbf5272->enter($__internal_867234d992974517d0782dd66ad816995341b528061730c4fe924c31cbbf5272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_fec65cfb27a504f1c0aac42a2cf59fe521f7c60cffdc3b52d168de0c2ea0ca66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec65cfb27a504f1c0aac42a2cf59fe521f7c60cffdc3b52d168de0c2ea0ca66->enter($__internal_fec65cfb27a504f1c0aac42a2cf59fe521f7c60cffdc3b52d168de0c2ea0ca66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_867234d992974517d0782dd66ad816995341b528061730c4fe924c31cbbf5272->leave($__internal_867234d992974517d0782dd66ad816995341b528061730c4fe924c31cbbf5272_prof);

        
        $__internal_fec65cfb27a504f1c0aac42a2cf59fe521f7c60cffdc3b52d168de0c2ea0ca66->leave($__internal_fec65cfb27a504f1c0aac42a2cf59fe521f7c60cffdc3b52d168de0c2ea0ca66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
