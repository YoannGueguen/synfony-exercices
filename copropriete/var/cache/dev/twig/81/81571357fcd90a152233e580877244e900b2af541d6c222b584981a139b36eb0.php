<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_941cdb0a4e50f923bd7b2744454317b38598ba2d267835439a8d60a19aff1404 extends Twig_Template
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
        $__internal_db0268e7fa609d049d10cafaadd6a01a6490d2f042910c9237f78cf9d0431250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0268e7fa609d049d10cafaadd6a01a6490d2f042910c9237f78cf9d0431250->enter($__internal_db0268e7fa609d049d10cafaadd6a01a6490d2f042910c9237f78cf9d0431250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4f54af2230c9bcf83d29c9a3ebfe1b8dc8fe82053152ef6e8255bb9f1f620420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f54af2230c9bcf83d29c9a3ebfe1b8dc8fe82053152ef6e8255bb9f1f620420->enter($__internal_4f54af2230c9bcf83d29c9a3ebfe1b8dc8fe82053152ef6e8255bb9f1f620420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db0268e7fa609d049d10cafaadd6a01a6490d2f042910c9237f78cf9d0431250->leave($__internal_db0268e7fa609d049d10cafaadd6a01a6490d2f042910c9237f78cf9d0431250_prof);

        
        $__internal_4f54af2230c9bcf83d29c9a3ebfe1b8dc8fe82053152ef6e8255bb9f1f620420->leave($__internal_4f54af2230c9bcf83d29c9a3ebfe1b8dc8fe82053152ef6e8255bb9f1f620420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
