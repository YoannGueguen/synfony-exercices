<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84df81e35abd74689c0d93e4721c9d43c5fa66293d905fe6dd0a7328fbe9bfb7 extends Twig_Template
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
        $__internal_a97262cdddf2817444f102ed0a943693781b5a8f53596a12bceb9f8e3d4ef550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97262cdddf2817444f102ed0a943693781b5a8f53596a12bceb9f8e3d4ef550->enter($__internal_a97262cdddf2817444f102ed0a943693781b5a8f53596a12bceb9f8e3d4ef550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3c2eba21f5d7fbf0e21216d606718ff6be2ff6a3382a64f0941cf71326b3955e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2eba21f5d7fbf0e21216d606718ff6be2ff6a3382a64f0941cf71326b3955e->enter($__internal_3c2eba21f5d7fbf0e21216d606718ff6be2ff6a3382a64f0941cf71326b3955e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a97262cdddf2817444f102ed0a943693781b5a8f53596a12bceb9f8e3d4ef550->leave($__internal_a97262cdddf2817444f102ed0a943693781b5a8f53596a12bceb9f8e3d4ef550_prof);

        
        $__internal_3c2eba21f5d7fbf0e21216d606718ff6be2ff6a3382a64f0941cf71326b3955e->leave($__internal_3c2eba21f5d7fbf0e21216d606718ff6be2ff6a3382a64f0941cf71326b3955e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
