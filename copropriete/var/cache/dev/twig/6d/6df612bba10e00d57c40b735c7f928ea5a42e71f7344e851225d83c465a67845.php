<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd5938f749f8cf4680e0cf1a1f2d05a39c0b5e3270a4c96f8415a16051a37e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55823e68de9d8fb328815bf70743dadbfa96a4bafa1c25ba2586feefc3525d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55823e68de9d8fb328815bf70743dadbfa96a4bafa1c25ba2586feefc3525d48->enter($__internal_55823e68de9d8fb328815bf70743dadbfa96a4bafa1c25ba2586feefc3525d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c1c8b900b08413368d2b2862ff323166e11ce1a1b65c8cb13426f2aaf7c4c528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c8b900b08413368d2b2862ff323166e11ce1a1b65c8cb13426f2aaf7c4c528->enter($__internal_c1c8b900b08413368d2b2862ff323166e11ce1a1b65c8cb13426f2aaf7c4c528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55823e68de9d8fb328815bf70743dadbfa96a4bafa1c25ba2586feefc3525d48->leave($__internal_55823e68de9d8fb328815bf70743dadbfa96a4bafa1c25ba2586feefc3525d48_prof);

        
        $__internal_c1c8b900b08413368d2b2862ff323166e11ce1a1b65c8cb13426f2aaf7c4c528->leave($__internal_c1c8b900b08413368d2b2862ff323166e11ce1a1b65c8cb13426f2aaf7c4c528_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e090134a60f32012a98d91c4467e2ed1c564bd5eb064470b8267bba079bd530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e090134a60f32012a98d91c4467e2ed1c564bd5eb064470b8267bba079bd530->enter($__internal_9e090134a60f32012a98d91c4467e2ed1c564bd5eb064470b8267bba079bd530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22123db65e5b8ff81d169f48cc287e6454e197e00a1d0fe53d12d8eacaeffeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22123db65e5b8ff81d169f48cc287e6454e197e00a1d0fe53d12d8eacaeffeba->enter($__internal_22123db65e5b8ff81d169f48cc287e6454e197e00a1d0fe53d12d8eacaeffeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_22123db65e5b8ff81d169f48cc287e6454e197e00a1d0fe53d12d8eacaeffeba->leave($__internal_22123db65e5b8ff81d169f48cc287e6454e197e00a1d0fe53d12d8eacaeffeba_prof);

        
        $__internal_9e090134a60f32012a98d91c4467e2ed1c564bd5eb064470b8267bba079bd530->leave($__internal_9e090134a60f32012a98d91c4467e2ed1c564bd5eb064470b8267bba079bd530_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9009ecaade52cf09c7c1220227ca08dfd84cb4b450369ad6936c1d433e4dcde4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9009ecaade52cf09c7c1220227ca08dfd84cb4b450369ad6936c1d433e4dcde4->enter($__internal_9009ecaade52cf09c7c1220227ca08dfd84cb4b450369ad6936c1d433e4dcde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9d10f7f19ba6b8d6ee7eb093c6d1de5041a11dc53c95a877971ae6c2254ddd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d10f7f19ba6b8d6ee7eb093c6d1de5041a11dc53c95a877971ae6c2254ddd2->enter($__internal_d9d10f7f19ba6b8d6ee7eb093c6d1de5041a11dc53c95a877971ae6c2254ddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d9d10f7f19ba6b8d6ee7eb093c6d1de5041a11dc53c95a877971ae6c2254ddd2->leave($__internal_d9d10f7f19ba6b8d6ee7eb093c6d1de5041a11dc53c95a877971ae6c2254ddd2_prof);

        
        $__internal_9009ecaade52cf09c7c1220227ca08dfd84cb4b450369ad6936c1d433e4dcde4->leave($__internal_9009ecaade52cf09c7c1220227ca08dfd84cb4b450369ad6936c1d433e4dcde4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac4fa8d84fe3aa9f04194458e694a4667c0b403170371d20333d38ce007a082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4fa8d84fe3aa9f04194458e694a4667c0b403170371d20333d38ce007a082e->enter($__internal_ac4fa8d84fe3aa9f04194458e694a4667c0b403170371d20333d38ce007a082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e426c9651b9d9af8268d99ca2286bb2a87b73ed5610eaba7239e6b966c05bb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e426c9651b9d9af8268d99ca2286bb2a87b73ed5610eaba7239e6b966c05bb7f->enter($__internal_e426c9651b9d9af8268d99ca2286bb2a87b73ed5610eaba7239e6b966c05bb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e426c9651b9d9af8268d99ca2286bb2a87b73ed5610eaba7239e6b966c05bb7f->leave($__internal_e426c9651b9d9af8268d99ca2286bb2a87b73ed5610eaba7239e6b966c05bb7f_prof);

        
        $__internal_ac4fa8d84fe3aa9f04194458e694a4667c0b403170371d20333d38ce007a082e->leave($__internal_ac4fa8d84fe3aa9f04194458e694a4667c0b403170371d20333d38ce007a082e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
