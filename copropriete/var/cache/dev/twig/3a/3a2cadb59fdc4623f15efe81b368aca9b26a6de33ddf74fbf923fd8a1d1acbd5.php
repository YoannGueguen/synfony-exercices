<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2728bef2d34e3c7fe629e55187061bea0c48351ca1638906c23b3ce8441d147c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3eceeed1eb49735f9ae706a1c9657e1ed6d256e8336df5979dfdeaa81ea7407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3eceeed1eb49735f9ae706a1c9657e1ed6d256e8336df5979dfdeaa81ea7407->enter($__internal_b3eceeed1eb49735f9ae706a1c9657e1ed6d256e8336df5979dfdeaa81ea7407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ad52c1551052b26666aa767d7658acee80597f64efadbcc90e25a3d8619393a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad52c1551052b26666aa767d7658acee80597f64efadbcc90e25a3d8619393a6->enter($__internal_ad52c1551052b26666aa767d7658acee80597f64efadbcc90e25a3d8619393a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3eceeed1eb49735f9ae706a1c9657e1ed6d256e8336df5979dfdeaa81ea7407->leave($__internal_b3eceeed1eb49735f9ae706a1c9657e1ed6d256e8336df5979dfdeaa81ea7407_prof);

        
        $__internal_ad52c1551052b26666aa767d7658acee80597f64efadbcc90e25a3d8619393a6->leave($__internal_ad52c1551052b26666aa767d7658acee80597f64efadbcc90e25a3d8619393a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_427cc3f66114c794b0d570ecf48319d806ddeef4b05e2371beb94af00f6489fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427cc3f66114c794b0d570ecf48319d806ddeef4b05e2371beb94af00f6489fb->enter($__internal_427cc3f66114c794b0d570ecf48319d806ddeef4b05e2371beb94af00f6489fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_795b8914793d982b768e16adf6b675c305df9f41b7f9639cd709cbbaf352255b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795b8914793d982b768e16adf6b675c305df9f41b7f9639cd709cbbaf352255b->enter($__internal_795b8914793d982b768e16adf6b675c305df9f41b7f9639cd709cbbaf352255b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_795b8914793d982b768e16adf6b675c305df9f41b7f9639cd709cbbaf352255b->leave($__internal_795b8914793d982b768e16adf6b675c305df9f41b7f9639cd709cbbaf352255b_prof);

        
        $__internal_427cc3f66114c794b0d570ecf48319d806ddeef4b05e2371beb94af00f6489fb->leave($__internal_427cc3f66114c794b0d570ecf48319d806ddeef4b05e2371beb94af00f6489fb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_064cd118220a13a39a4975fa107169915c8c34be7f505f3b0d138a7fec0b1a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064cd118220a13a39a4975fa107169915c8c34be7f505f3b0d138a7fec0b1a2b->enter($__internal_064cd118220a13a39a4975fa107169915c8c34be7f505f3b0d138a7fec0b1a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aad6c8ac0024d69abf7aa7bf363190795a011070df46013f8abe4b5bad7910a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad6c8ac0024d69abf7aa7bf363190795a011070df46013f8abe4b5bad7910a0->enter($__internal_aad6c8ac0024d69abf7aa7bf363190795a011070df46013f8abe4b5bad7910a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_aad6c8ac0024d69abf7aa7bf363190795a011070df46013f8abe4b5bad7910a0->leave($__internal_aad6c8ac0024d69abf7aa7bf363190795a011070df46013f8abe4b5bad7910a0_prof);

        
        $__internal_064cd118220a13a39a4975fa107169915c8c34be7f505f3b0d138a7fec0b1a2b->leave($__internal_064cd118220a13a39a4975fa107169915c8c34be7f505f3b0d138a7fec0b1a2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
