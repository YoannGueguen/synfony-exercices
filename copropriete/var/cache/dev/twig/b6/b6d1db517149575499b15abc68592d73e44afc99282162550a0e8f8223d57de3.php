<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_98f903150e01340dc1c3417364aa4c4a5d5cd974626b2ba876a5605b6b59d1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f903150e01340dc1c3417364aa4c4a5d5cd974626b2ba876a5605b6b59d1c1->enter($__internal_98f903150e01340dc1c3417364aa4c4a5d5cd974626b2ba876a5605b6b59d1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bcc698dd93f9ca17a9279539e40f3afd5d5344dbbb41e43c064666e737d49ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc698dd93f9ca17a9279539e40f3afd5d5344dbbb41e43c064666e737d49ed4->enter($__internal_bcc698dd93f9ca17a9279539e40f3afd5d5344dbbb41e43c064666e737d49ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_98f903150e01340dc1c3417364aa4c4a5d5cd974626b2ba876a5605b6b59d1c1->leave($__internal_98f903150e01340dc1c3417364aa4c4a5d5cd974626b2ba876a5605b6b59d1c1_prof);

        
        $__internal_bcc698dd93f9ca17a9279539e40f3afd5d5344dbbb41e43c064666e737d49ed4->leave($__internal_bcc698dd93f9ca17a9279539e40f3afd5d5344dbbb41e43c064666e737d49ed4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
