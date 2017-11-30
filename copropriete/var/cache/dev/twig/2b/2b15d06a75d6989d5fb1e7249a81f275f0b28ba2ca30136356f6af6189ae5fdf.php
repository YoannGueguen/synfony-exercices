<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_18e23267d467f8a5f2c2f2f08a0a426cef5f4f3c6afbb8eadd47ac95082739e8 extends Twig_Template
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
        $__internal_30cf2efca996a7a90355762b14574e3ee435c730d4ae52eea9362ff0d6c77b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30cf2efca996a7a90355762b14574e3ee435c730d4ae52eea9362ff0d6c77b16->enter($__internal_30cf2efca996a7a90355762b14574e3ee435c730d4ae52eea9362ff0d6c77b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_afc002f8c809399070162068dee0e67b8bb7e5c158500b6448c4f3977f5d1a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc002f8c809399070162068dee0e67b8bb7e5c158500b6448c4f3977f5d1a79->enter($__internal_afc002f8c809399070162068dee0e67b8bb7e5c158500b6448c4f3977f5d1a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_30cf2efca996a7a90355762b14574e3ee435c730d4ae52eea9362ff0d6c77b16->leave($__internal_30cf2efca996a7a90355762b14574e3ee435c730d4ae52eea9362ff0d6c77b16_prof);

        
        $__internal_afc002f8c809399070162068dee0e67b8bb7e5c158500b6448c4f3977f5d1a79->leave($__internal_afc002f8c809399070162068dee0e67b8bb7e5c158500b6448c4f3977f5d1a79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
