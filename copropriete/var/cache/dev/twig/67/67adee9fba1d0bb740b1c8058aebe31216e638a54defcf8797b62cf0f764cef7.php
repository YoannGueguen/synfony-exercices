<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_00ed75d6b6ebafef0f33ae82425d6d77ba0bc6bcef7b2dfdd3a48bada0626ae2 extends Twig_Template
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
        $__internal_e871b27ec641f54338852ae94ec3c270d4a8f73766f58940e828edcc31df89dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e871b27ec641f54338852ae94ec3c270d4a8f73766f58940e828edcc31df89dd->enter($__internal_e871b27ec641f54338852ae94ec3c270d4a8f73766f58940e828edcc31df89dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_267ac06145bfc5b4c487b528ce4ee8bdc916c23a016fcc1e2ba6681be36379b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267ac06145bfc5b4c487b528ce4ee8bdc916c23a016fcc1e2ba6681be36379b4->enter($__internal_267ac06145bfc5b4c487b528ce4ee8bdc916c23a016fcc1e2ba6681be36379b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e871b27ec641f54338852ae94ec3c270d4a8f73766f58940e828edcc31df89dd->leave($__internal_e871b27ec641f54338852ae94ec3c270d4a8f73766f58940e828edcc31df89dd_prof);

        
        $__internal_267ac06145bfc5b4c487b528ce4ee8bdc916c23a016fcc1e2ba6681be36379b4->leave($__internal_267ac06145bfc5b4c487b528ce4ee8bdc916c23a016fcc1e2ba6681be36379b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
