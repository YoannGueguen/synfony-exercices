<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_93d8b1387310d0b56a649a670dd222fd6f95520ecea82fd5b60fddbb98bd4df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d8b1387310d0b56a649a670dd222fd6f95520ecea82fd5b60fddbb98bd4df8->enter($__internal_93d8b1387310d0b56a649a670dd222fd6f95520ecea82fd5b60fddbb98bd4df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f1309a1c8e978e92167e4d7b2f92470faf6bb1cf0979b04ad911e41154eeafaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1309a1c8e978e92167e4d7b2f92470faf6bb1cf0979b04ad911e41154eeafaa->enter($__internal_f1309a1c8e978e92167e4d7b2f92470faf6bb1cf0979b04ad911e41154eeafaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_93d8b1387310d0b56a649a670dd222fd6f95520ecea82fd5b60fddbb98bd4df8->leave($__internal_93d8b1387310d0b56a649a670dd222fd6f95520ecea82fd5b60fddbb98bd4df8_prof);

        
        $__internal_f1309a1c8e978e92167e4d7b2f92470faf6bb1cf0979b04ad911e41154eeafaa->leave($__internal_f1309a1c8e978e92167e4d7b2f92470faf6bb1cf0979b04ad911e41154eeafaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
