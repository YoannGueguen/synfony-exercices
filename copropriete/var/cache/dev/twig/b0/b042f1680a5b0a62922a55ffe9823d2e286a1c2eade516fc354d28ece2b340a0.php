<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_521e392abad97a41e1f946598b0e4e5d2c2990b8ee2a1fd3fc54844a91a1210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521e392abad97a41e1f946598b0e4e5d2c2990b8ee2a1fd3fc54844a91a1210c->enter($__internal_521e392abad97a41e1f946598b0e4e5d2c2990b8ee2a1fd3fc54844a91a1210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bb29c5d54a9906f084bd4cbed9c5573e8a456cfa2e2855dd9a439feca671c0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb29c5d54a9906f084bd4cbed9c5573e8a456cfa2e2855dd9a439feca671c0f8->enter($__internal_bb29c5d54a9906f084bd4cbed9c5573e8a456cfa2e2855dd9a439feca671c0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_521e392abad97a41e1f946598b0e4e5d2c2990b8ee2a1fd3fc54844a91a1210c->leave($__internal_521e392abad97a41e1f946598b0e4e5d2c2990b8ee2a1fd3fc54844a91a1210c_prof);

        
        $__internal_bb29c5d54a9906f084bd4cbed9c5573e8a456cfa2e2855dd9a439feca671c0f8->leave($__internal_bb29c5d54a9906f084bd4cbed9c5573e8a456cfa2e2855dd9a439feca671c0f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
