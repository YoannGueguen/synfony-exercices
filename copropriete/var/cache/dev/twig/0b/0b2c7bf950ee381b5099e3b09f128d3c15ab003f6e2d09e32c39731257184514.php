<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_09470b55fecec64e262f8615ffc52b8b34bc014948ff5ae9ab1678c52455a790 extends Twig_Template
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
        $__internal_c22d056b4681e2376aa58859ee262c9d548acd4462f74f3ec4250ba978a2622a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22d056b4681e2376aa58859ee262c9d548acd4462f74f3ec4250ba978a2622a->enter($__internal_c22d056b4681e2376aa58859ee262c9d548acd4462f74f3ec4250ba978a2622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_693c43214e2f8ffbb65bf620f312d41a01d12f5d657f94f6efd129d1697ba27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693c43214e2f8ffbb65bf620f312d41a01d12f5d657f94f6efd129d1697ba27f->enter($__internal_693c43214e2f8ffbb65bf620f312d41a01d12f5d657f94f6efd129d1697ba27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c22d056b4681e2376aa58859ee262c9d548acd4462f74f3ec4250ba978a2622a->leave($__internal_c22d056b4681e2376aa58859ee262c9d548acd4462f74f3ec4250ba978a2622a_prof);

        
        $__internal_693c43214e2f8ffbb65bf620f312d41a01d12f5d657f94f6efd129d1697ba27f->leave($__internal_693c43214e2f8ffbb65bf620f312d41a01d12f5d657f94f6efd129d1697ba27f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}