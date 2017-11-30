<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a4fae4aef90fdd2708ae59143dd820e276cba814802c95d802ffafd794e62530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_980f462a552e88ea5a1cf83e3414f437cee17d3da5619245c06a3f6da1a21feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980f462a552e88ea5a1cf83e3414f437cee17d3da5619245c06a3f6da1a21feb->enter($__internal_980f462a552e88ea5a1cf83e3414f437cee17d3da5619245c06a3f6da1a21feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3f52f655cda2a9dcc40f28027dff8702f1b1db4804110ed7b2055f4a004bcab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f52f655cda2a9dcc40f28027dff8702f1b1db4804110ed7b2055f4a004bcab5->enter($__internal_3f52f655cda2a9dcc40f28027dff8702f1b1db4804110ed7b2055f4a004bcab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980f462a552e88ea5a1cf83e3414f437cee17d3da5619245c06a3f6da1a21feb->leave($__internal_980f462a552e88ea5a1cf83e3414f437cee17d3da5619245c06a3f6da1a21feb_prof);

        
        $__internal_3f52f655cda2a9dcc40f28027dff8702f1b1db4804110ed7b2055f4a004bcab5->leave($__internal_3f52f655cda2a9dcc40f28027dff8702f1b1db4804110ed7b2055f4a004bcab5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c016f4d21a5c65c2cda7a61db8805dfb48dbea8e40ac0ad07fa8b67921b869ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c016f4d21a5c65c2cda7a61db8805dfb48dbea8e40ac0ad07fa8b67921b869ae->enter($__internal_c016f4d21a5c65c2cda7a61db8805dfb48dbea8e40ac0ad07fa8b67921b869ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_20bd1147555e24ffc0c7ee562bb39cfc57b02d973974a0e04ca29ddcd4691aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bd1147555e24ffc0c7ee562bb39cfc57b02d973974a0e04ca29ddcd4691aee->enter($__internal_20bd1147555e24ffc0c7ee562bb39cfc57b02d973974a0e04ca29ddcd4691aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_20bd1147555e24ffc0c7ee562bb39cfc57b02d973974a0e04ca29ddcd4691aee->leave($__internal_20bd1147555e24ffc0c7ee562bb39cfc57b02d973974a0e04ca29ddcd4691aee_prof);

        
        $__internal_c016f4d21a5c65c2cda7a61db8805dfb48dbea8e40ac0ad07fa8b67921b869ae->leave($__internal_c016f4d21a5c65c2cda7a61db8805dfb48dbea8e40ac0ad07fa8b67921b869ae_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6870cfc744ec6a11b29a92a1de58c85285516182d9eddfcaf35d3d4df725a72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6870cfc744ec6a11b29a92a1de58c85285516182d9eddfcaf35d3d4df725a72d->enter($__internal_6870cfc744ec6a11b29a92a1de58c85285516182d9eddfcaf35d3d4df725a72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8177563b5d7caa859a39cb6f59e358eb0326125b718e96b27bc81f51ae0bd0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8177563b5d7caa859a39cb6f59e358eb0326125b718e96b27bc81f51ae0bd0a2->enter($__internal_8177563b5d7caa859a39cb6f59e358eb0326125b718e96b27bc81f51ae0bd0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8177563b5d7caa859a39cb6f59e358eb0326125b718e96b27bc81f51ae0bd0a2->leave($__internal_8177563b5d7caa859a39cb6f59e358eb0326125b718e96b27bc81f51ae0bd0a2_prof);

        
        $__internal_6870cfc744ec6a11b29a92a1de58c85285516182d9eddfcaf35d3d4df725a72d->leave($__internal_6870cfc744ec6a11b29a92a1de58c85285516182d9eddfcaf35d3d4df725a72d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
