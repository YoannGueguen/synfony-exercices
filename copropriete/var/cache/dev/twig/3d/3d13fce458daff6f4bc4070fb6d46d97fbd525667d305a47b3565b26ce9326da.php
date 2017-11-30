<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_2ff3c78878c131181b79ead97559f2b2ea7d53748c89689705cf17b7be04597f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff3c78878c131181b79ead97559f2b2ea7d53748c89689705cf17b7be04597f->enter($__internal_2ff3c78878c131181b79ead97559f2b2ea7d53748c89689705cf17b7be04597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4d662cc7b9420dd3d2765e132f10f33534b1ab9cadf99180407dcbe0cad17fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d662cc7b9420dd3d2765e132f10f33534b1ab9cadf99180407dcbe0cad17fc9->enter($__internal_4d662cc7b9420dd3d2765e132f10f33534b1ab9cadf99180407dcbe0cad17fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2ff3c78878c131181b79ead97559f2b2ea7d53748c89689705cf17b7be04597f->leave($__internal_2ff3c78878c131181b79ead97559f2b2ea7d53748c89689705cf17b7be04597f_prof);

        
        $__internal_4d662cc7b9420dd3d2765e132f10f33534b1ab9cadf99180407dcbe0cad17fc9->leave($__internal_4d662cc7b9420dd3d2765e132f10f33534b1ab9cadf99180407dcbe0cad17fc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
