<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_e32d3db1a5518cdb2c80ff5ad2163a1abba02e3b5b71ed1eb62f4718e211268a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32d3db1a5518cdb2c80ff5ad2163a1abba02e3b5b71ed1eb62f4718e211268a->enter($__internal_e32d3db1a5518cdb2c80ff5ad2163a1abba02e3b5b71ed1eb62f4718e211268a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fc05c134ebaae41af880a6094daadebf1f0a65d046befcd76672504934a1b9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc05c134ebaae41af880a6094daadebf1f0a65d046befcd76672504934a1b9ca->enter($__internal_fc05c134ebaae41af880a6094daadebf1f0a65d046befcd76672504934a1b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e32d3db1a5518cdb2c80ff5ad2163a1abba02e3b5b71ed1eb62f4718e211268a->leave($__internal_e32d3db1a5518cdb2c80ff5ad2163a1abba02e3b5b71ed1eb62f4718e211268a_prof);

        
        $__internal_fc05c134ebaae41af880a6094daadebf1f0a65d046befcd76672504934a1b9ca->leave($__internal_fc05c134ebaae41af880a6094daadebf1f0a65d046befcd76672504934a1b9ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
