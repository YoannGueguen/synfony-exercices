<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cff1d78ce7fd6925c697c441a039e4eea0dfcc8ffafcf2fdda6c96770ff40d64 extends Twig_Template
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
        $__internal_574c3cf0cdf9b2e8459166a3b1104cbf10667a09f7ebe7c25dc26e4ba7df8644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574c3cf0cdf9b2e8459166a3b1104cbf10667a09f7ebe7c25dc26e4ba7df8644->enter($__internal_574c3cf0cdf9b2e8459166a3b1104cbf10667a09f7ebe7c25dc26e4ba7df8644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_bd0b4bff49e5d0ba0808ed5892b1e3b4b4607acf886576768584e3d7ccde27ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0b4bff49e5d0ba0808ed5892b1e3b4b4607acf886576768584e3d7ccde27ec->enter($__internal_bd0b4bff49e5d0ba0808ed5892b1e3b4b4607acf886576768584e3d7ccde27ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_574c3cf0cdf9b2e8459166a3b1104cbf10667a09f7ebe7c25dc26e4ba7df8644->leave($__internal_574c3cf0cdf9b2e8459166a3b1104cbf10667a09f7ebe7c25dc26e4ba7df8644_prof);

        
        $__internal_bd0b4bff49e5d0ba0808ed5892b1e3b4b4607acf886576768584e3d7ccde27ec->leave($__internal_bd0b4bff49e5d0ba0808ed5892b1e3b4b4607acf886576768584e3d7ccde27ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
