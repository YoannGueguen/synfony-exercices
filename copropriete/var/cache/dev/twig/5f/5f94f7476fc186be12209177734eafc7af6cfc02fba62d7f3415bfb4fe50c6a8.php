<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3c3f980554672e11da03518cfae9330598f803683e603d27fe2c5f5c021b6463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2840d4ae12ae73cb81adb313748bfedaf018c302255fb829b296f840f3a0bfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2840d4ae12ae73cb81adb313748bfedaf018c302255fb829b296f840f3a0bfd5->enter($__internal_2840d4ae12ae73cb81adb313748bfedaf018c302255fb829b296f840f3a0bfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5b89582ef1531da64b4c74537150c3641b10bca6e7e784297b73e5b56e670f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b89582ef1531da64b4c74537150c3641b10bca6e7e784297b73e5b56e670f65->enter($__internal_5b89582ef1531da64b4c74537150c3641b10bca6e7e784297b73e5b56e670f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2840d4ae12ae73cb81adb313748bfedaf018c302255fb829b296f840f3a0bfd5->leave($__internal_2840d4ae12ae73cb81adb313748bfedaf018c302255fb829b296f840f3a0bfd5_prof);

        
        $__internal_5b89582ef1531da64b4c74537150c3641b10bca6e7e784297b73e5b56e670f65->leave($__internal_5b89582ef1531da64b4c74537150c3641b10bca6e7e784297b73e5b56e670f65_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f8922c49356f9635b7291620a6e92371b4f70a40bd098b88f223630fc11889ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8922c49356f9635b7291620a6e92371b4f70a40bd098b88f223630fc11889ab->enter($__internal_f8922c49356f9635b7291620a6e92371b4f70a40bd098b88f223630fc11889ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5587303a99968e04b48959e45313b4d02e71ed64dec0e680730a7ae0e89c296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5587303a99968e04b48959e45313b4d02e71ed64dec0e680730a7ae0e89c296e->enter($__internal_5587303a99968e04b48959e45313b4d02e71ed64dec0e680730a7ae0e89c296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5587303a99968e04b48959e45313b4d02e71ed64dec0e680730a7ae0e89c296e->leave($__internal_5587303a99968e04b48959e45313b4d02e71ed64dec0e680730a7ae0e89c296e_prof);

        
        $__internal_f8922c49356f9635b7291620a6e92371b4f70a40bd098b88f223630fc11889ab->leave($__internal_f8922c49356f9635b7291620a6e92371b4f70a40bd098b88f223630fc11889ab_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_386c291f41082bff98e626b66855b1fb5dc84a6c94cf674268e89f09b26a4bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386c291f41082bff98e626b66855b1fb5dc84a6c94cf674268e89f09b26a4bef->enter($__internal_386c291f41082bff98e626b66855b1fb5dc84a6c94cf674268e89f09b26a4bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_497d2f9b6dbafcb4f5ad32bb3613e9a5c5244f0b08c86942f8d570ad7b966a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497d2f9b6dbafcb4f5ad32bb3613e9a5c5244f0b08c86942f8d570ad7b966a31->enter($__internal_497d2f9b6dbafcb4f5ad32bb3613e9a5c5244f0b08c86942f8d570ad7b966a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_497d2f9b6dbafcb4f5ad32bb3613e9a5c5244f0b08c86942f8d570ad7b966a31->leave($__internal_497d2f9b6dbafcb4f5ad32bb3613e9a5c5244f0b08c86942f8d570ad7b966a31_prof);

        
        $__internal_386c291f41082bff98e626b66855b1fb5dc84a6c94cf674268e89f09b26a4bef->leave($__internal_386c291f41082bff98e626b66855b1fb5dc84a6c94cf674268e89f09b26a4bef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
