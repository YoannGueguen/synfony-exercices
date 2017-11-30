<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
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
        $__internal_a7afb8eec1967d809f08f0acd73c17acf022dc33792bfb35ecc3ceef511fc305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7afb8eec1967d809f08f0acd73c17acf022dc33792bfb35ecc3ceef511fc305->enter($__internal_a7afb8eec1967d809f08f0acd73c17acf022dc33792bfb35ecc3ceef511fc305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0ec9294077f26f1c65904dc705d15191a6dfa35b007d65e36a3cb24475da41a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec9294077f26f1c65904dc705d15191a6dfa35b007d65e36a3cb24475da41a3->enter($__internal_0ec9294077f26f1c65904dc705d15191a6dfa35b007d65e36a3cb24475da41a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a7afb8eec1967d809f08f0acd73c17acf022dc33792bfb35ecc3ceef511fc305->leave($__internal_a7afb8eec1967d809f08f0acd73c17acf022dc33792bfb35ecc3ceef511fc305_prof);

        
        $__internal_0ec9294077f26f1c65904dc705d15191a6dfa35b007d65e36a3cb24475da41a3->leave($__internal_0ec9294077f26f1c65904dc705d15191a6dfa35b007d65e36a3cb24475da41a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
