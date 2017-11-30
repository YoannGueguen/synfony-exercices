<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_a4191ecd7ecc415c69cd3cd10f262dc778f603ce495d66ea49e84a4d86300782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4191ecd7ecc415c69cd3cd10f262dc778f603ce495d66ea49e84a4d86300782->enter($__internal_a4191ecd7ecc415c69cd3cd10f262dc778f603ce495d66ea49e84a4d86300782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3dad3b98f17d35f8c435bc6f10d0773b3a9bfb24f36d791a6355d720639f5670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dad3b98f17d35f8c435bc6f10d0773b3a9bfb24f36d791a6355d720639f5670->enter($__internal_3dad3b98f17d35f8c435bc6f10d0773b3a9bfb24f36d791a6355d720639f5670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a4191ecd7ecc415c69cd3cd10f262dc778f603ce495d66ea49e84a4d86300782->leave($__internal_a4191ecd7ecc415c69cd3cd10f262dc778f603ce495d66ea49e84a4d86300782_prof);

        
        $__internal_3dad3b98f17d35f8c435bc6f10d0773b3a9bfb24f36d791a6355d720639f5670->leave($__internal_3dad3b98f17d35f8c435bc6f10d0773b3a9bfb24f36d791a6355d720639f5670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
