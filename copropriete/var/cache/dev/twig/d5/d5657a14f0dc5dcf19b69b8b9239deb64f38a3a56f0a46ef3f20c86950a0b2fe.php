<?php

/* default/index.html.twig */
class __TwigTemplate_65d87c3f9022c20ccd1994a53497b1a778e94a59350b8e518f344f5da5e8c04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e921e53d293a576cd3697c987c07e7718a0ed1890fef1b194b9c336ae9b635b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e921e53d293a576cd3697c987c07e7718a0ed1890fef1b194b9c336ae9b635b->enter($__internal_5e921e53d293a576cd3697c987c07e7718a0ed1890fef1b194b9c336ae9b635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_72c3491e27f42f8d3b74076d4a13056ea0d9965ac564f391391c7e174465144e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c3491e27f42f8d3b74076d4a13056ea0d9965ac564f391391c7e174465144e->enter($__internal_72c3491e27f42f8d3b74076d4a13056ea0d9965ac564f391391c7e174465144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e921e53d293a576cd3697c987c07e7718a0ed1890fef1b194b9c336ae9b635b->leave($__internal_5e921e53d293a576cd3697c987c07e7718a0ed1890fef1b194b9c336ae9b635b_prof);

        
        $__internal_72c3491e27f42f8d3b74076d4a13056ea0d9965ac564f391391c7e174465144e->leave($__internal_72c3491e27f42f8d3b74076d4a13056ea0d9965ac564f391391c7e174465144e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f91a354389efe55002c11cc0e2269a96fb2b0e916f03ebe2f17a136fd07ea72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91a354389efe55002c11cc0e2269a96fb2b0e916f03ebe2f17a136fd07ea72d->enter($__internal_f91a354389efe55002c11cc0e2269a96fb2b0e916f03ebe2f17a136fd07ea72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86c9fdc3e08901e281b733107071b9a7bbe3fa23f6f40043f01e3a37aac6ad27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c9fdc3e08901e281b733107071b9a7bbe3fa23f6f40043f01e3a37aac6ad27->enter($__internal_86c9fdc3e08901e281b733107071b9a7bbe3fa23f6f40043f01e3a37aac6ad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_86c9fdc3e08901e281b733107071b9a7bbe3fa23f6f40043f01e3a37aac6ad27->leave($__internal_86c9fdc3e08901e281b733107071b9a7bbe3fa23f6f40043f01e3a37aac6ad27_prof);

        
        $__internal_f91a354389efe55002c11cc0e2269a96fb2b0e916f03ebe2f17a136fd07ea72d->leave($__internal_f91a354389efe55002c11cc0e2269a96fb2b0e916f03ebe2f17a136fd07ea72d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\app\\Resources\\views\\default\\index.html.twig");
    }
}
