<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_99c254f846844d4884ac68b3943b877298000ba30923321cae70f001332696de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_d2ae9066cd3c39bc52b9a6e809040bdca4c88474d92fcb6758e1800df8127608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ae9066cd3c39bc52b9a6e809040bdca4c88474d92fcb6758e1800df8127608->enter($__internal_d2ae9066cd3c39bc52b9a6e809040bdca4c88474d92fcb6758e1800df8127608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_aeff2a9fd43cf7bb9734418c67d3b80d04557ad206652fe8b03c1e5f5595495d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeff2a9fd43cf7bb9734418c67d3b80d04557ad206652fe8b03c1e5f5595495d->enter($__internal_aeff2a9fd43cf7bb9734418c67d3b80d04557ad206652fe8b03c1e5f5595495d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2ae9066cd3c39bc52b9a6e809040bdca4c88474d92fcb6758e1800df8127608->leave($__internal_d2ae9066cd3c39bc52b9a6e809040bdca4c88474d92fcb6758e1800df8127608_prof);

        
        $__internal_aeff2a9fd43cf7bb9734418c67d3b80d04557ad206652fe8b03c1e5f5595495d->leave($__internal_aeff2a9fd43cf7bb9734418c67d3b80d04557ad206652fe8b03c1e5f5595495d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f170ebf19eddfe9f8fa5ca6883d8927d5bdc597227a33fa332ca4fae5b7f75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f170ebf19eddfe9f8fa5ca6883d8927d5bdc597227a33fa332ca4fae5b7f75d->enter($__internal_3f170ebf19eddfe9f8fa5ca6883d8927d5bdc597227a33fa332ca4fae5b7f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b83cbfd4874e843b04c574340c1165344e291b731a4ca48487643f7e827d9c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83cbfd4874e843b04c574340c1165344e291b731a4ca48487643f7e827d9c55->enter($__internal_b83cbfd4874e843b04c574340c1165344e291b731a4ca48487643f7e827d9c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b83cbfd4874e843b04c574340c1165344e291b731a4ca48487643f7e827d9c55->leave($__internal_b83cbfd4874e843b04c574340c1165344e291b731a4ca48487643f7e827d9c55_prof);

        
        $__internal_3f170ebf19eddfe9f8fa5ca6883d8927d5bdc597227a33fa332ca4fae5b7f75d->leave($__internal_3f170ebf19eddfe9f8fa5ca6883d8927d5bdc597227a33fa332ca4fae5b7f75d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_935cea5ae3522738ffc4c5b228c0a0569d0bfe8cbc84738b5c3176058bb7cd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935cea5ae3522738ffc4c5b228c0a0569d0bfe8cbc84738b5c3176058bb7cd11->enter($__internal_935cea5ae3522738ffc4c5b228c0a0569d0bfe8cbc84738b5c3176058bb7cd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_200562890974fcffe87f9a25d9ca4faf0ad6084a794ae1b10155fa6088b306d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200562890974fcffe87f9a25d9ca4faf0ad6084a794ae1b10155fa6088b306d8->enter($__internal_200562890974fcffe87f9a25d9ca4faf0ad6084a794ae1b10155fa6088b306d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_200562890974fcffe87f9a25d9ca4faf0ad6084a794ae1b10155fa6088b306d8->leave($__internal_200562890974fcffe87f9a25d9ca4faf0ad6084a794ae1b10155fa6088b306d8_prof);

        
        $__internal_935cea5ae3522738ffc4c5b228c0a0569d0bfe8cbc84738b5c3176058bb7cd11->leave($__internal_935cea5ae3522738ffc4c5b228c0a0569d0bfe8cbc84738b5c3176058bb7cd11_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
