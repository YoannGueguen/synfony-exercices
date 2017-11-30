<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab3509d84a76c90eadc8b484daa778bdf8e0f276954dab8bda9183ef9666e6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_796c5511dfc91b729273cc7d024cc65bb6fc559254f185c1b8f749c4ca6aafb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796c5511dfc91b729273cc7d024cc65bb6fc559254f185c1b8f749c4ca6aafb3->enter($__internal_796c5511dfc91b729273cc7d024cc65bb6fc559254f185c1b8f749c4ca6aafb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_354b2f75a1acda08973e180e4c2b71e4becc7bd9a9e2c2d8726077f05378cbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354b2f75a1acda08973e180e4c2b71e4becc7bd9a9e2c2d8726077f05378cbac->enter($__internal_354b2f75a1acda08973e180e4c2b71e4becc7bd9a9e2c2d8726077f05378cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_796c5511dfc91b729273cc7d024cc65bb6fc559254f185c1b8f749c4ca6aafb3->leave($__internal_796c5511dfc91b729273cc7d024cc65bb6fc559254f185c1b8f749c4ca6aafb3_prof);

        
        $__internal_354b2f75a1acda08973e180e4c2b71e4becc7bd9a9e2c2d8726077f05378cbac->leave($__internal_354b2f75a1acda08973e180e4c2b71e4becc7bd9a9e2c2d8726077f05378cbac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a95e82eb73626a9caa6846824a1e00e78661014854e92a50e4d53150caf558b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95e82eb73626a9caa6846824a1e00e78661014854e92a50e4d53150caf558b9->enter($__internal_a95e82eb73626a9caa6846824a1e00e78661014854e92a50e4d53150caf558b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c96638537edbb35cd71265ef6019dace7215cd8e49a0d73c4eb378dc30f146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c96638537edbb35cd71265ef6019dace7215cd8e49a0d73c4eb378dc30f146d->enter($__internal_5c96638537edbb35cd71265ef6019dace7215cd8e49a0d73c4eb378dc30f146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5c96638537edbb35cd71265ef6019dace7215cd8e49a0d73c4eb378dc30f146d->leave($__internal_5c96638537edbb35cd71265ef6019dace7215cd8e49a0d73c4eb378dc30f146d_prof);

        
        $__internal_a95e82eb73626a9caa6846824a1e00e78661014854e92a50e4d53150caf558b9->leave($__internal_a95e82eb73626a9caa6846824a1e00e78661014854e92a50e4d53150caf558b9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5dbf782e55f607e48ffa3aecd7918ce9934490bbbf968d49640351913caa80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5dbf782e55f607e48ffa3aecd7918ce9934490bbbf968d49640351913caa80e->enter($__internal_d5dbf782e55f607e48ffa3aecd7918ce9934490bbbf968d49640351913caa80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8a157bc9422fcc232175ee9e23fcbc22a4be76a72b719a95fa5591c46cd2dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a157bc9422fcc232175ee9e23fcbc22a4be76a72b719a95fa5591c46cd2dc8->enter($__internal_e8a157bc9422fcc232175ee9e23fcbc22a4be76a72b719a95fa5591c46cd2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e8a157bc9422fcc232175ee9e23fcbc22a4be76a72b719a95fa5591c46cd2dc8->leave($__internal_e8a157bc9422fcc232175ee9e23fcbc22a4be76a72b719a95fa5591c46cd2dc8_prof);

        
        $__internal_d5dbf782e55f607e48ffa3aecd7918ce9934490bbbf968d49640351913caa80e->leave($__internal_d5dbf782e55f607e48ffa3aecd7918ce9934490bbbf968d49640351913caa80e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_086e6f31d5e606c04cfaf2c3d871a3165a269aaa83e1a69156d90887e8656c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086e6f31d5e606c04cfaf2c3d871a3165a269aaa83e1a69156d90887e8656c98->enter($__internal_086e6f31d5e606c04cfaf2c3d871a3165a269aaa83e1a69156d90887e8656c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48b2c8da16e6100368d2472bb9cbc3945b68fc4cbfa97c5dc990ce48ab2e6e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b2c8da16e6100368d2472bb9cbc3945b68fc4cbfa97c5dc990ce48ab2e6e12->enter($__internal_48b2c8da16e6100368d2472bb9cbc3945b68fc4cbfa97c5dc990ce48ab2e6e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_48b2c8da16e6100368d2472bb9cbc3945b68fc4cbfa97c5dc990ce48ab2e6e12->leave($__internal_48b2c8da16e6100368d2472bb9cbc3945b68fc4cbfa97c5dc990ce48ab2e6e12_prof);

        
        $__internal_086e6f31d5e606c04cfaf2c3d871a3165a269aaa83e1a69156d90887e8656c98->leave($__internal_086e6f31d5e606c04cfaf2c3d871a3165a269aaa83e1a69156d90887e8656c98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
