<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_ddca71522a253e25f6c0a3bb3068f7139dc7294607a6dce93e2aceeccad3f470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddca71522a253e25f6c0a3bb3068f7139dc7294607a6dce93e2aceeccad3f470->enter($__internal_ddca71522a253e25f6c0a3bb3068f7139dc7294607a6dce93e2aceeccad3f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5d0d40fb6bdc34a38a10dee6e778ba9eced463c204da398112a020d79b4a9988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0d40fb6bdc34a38a10dee6e778ba9eced463c204da398112a020d79b4a9988->enter($__internal_5d0d40fb6bdc34a38a10dee6e778ba9eced463c204da398112a020d79b4a9988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddca71522a253e25f6c0a3bb3068f7139dc7294607a6dce93e2aceeccad3f470->leave($__internal_ddca71522a253e25f6c0a3bb3068f7139dc7294607a6dce93e2aceeccad3f470_prof);

        
        $__internal_5d0d40fb6bdc34a38a10dee6e778ba9eced463c204da398112a020d79b4a9988->leave($__internal_5d0d40fb6bdc34a38a10dee6e778ba9eced463c204da398112a020d79b4a9988_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
