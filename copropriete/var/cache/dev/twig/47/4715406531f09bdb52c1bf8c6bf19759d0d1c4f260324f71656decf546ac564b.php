<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae60f9ac4aac497736af46c049a4cc09c782f08f175cf5813eae5116cc7e4ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae60f9ac4aac497736af46c049a4cc09c782f08f175cf5813eae5116cc7e4ff4->enter($__internal_ae60f9ac4aac497736af46c049a4cc09c782f08f175cf5813eae5116cc7e4ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7d8f14f0f9e24653650951bdf3fb1c1815b844a3f650f7671250a8d29c631f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8f14f0f9e24653650951bdf3fb1c1815b844a3f650f7671250a8d29c631f51->enter($__internal_7d8f14f0f9e24653650951bdf3fb1c1815b844a3f650f7671250a8d29c631f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae60f9ac4aac497736af46c049a4cc09c782f08f175cf5813eae5116cc7e4ff4->leave($__internal_ae60f9ac4aac497736af46c049a4cc09c782f08f175cf5813eae5116cc7e4ff4_prof);

        
        $__internal_7d8f14f0f9e24653650951bdf3fb1c1815b844a3f650f7671250a8d29c631f51->leave($__internal_7d8f14f0f9e24653650951bdf3fb1c1815b844a3f650f7671250a8d29c631f51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9643c0e29561dea987d88ddc45d42d14e1500b193da168d585d674501c218bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9643c0e29561dea987d88ddc45d42d14e1500b193da168d585d674501c218bca->enter($__internal_9643c0e29561dea987d88ddc45d42d14e1500b193da168d585d674501c218bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d91b091539f460338ceba78a1b35a4b353995661f2090a9d8fccfd72a7bc60e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91b091539f460338ceba78a1b35a4b353995661f2090a9d8fccfd72a7bc60e9->enter($__internal_d91b091539f460338ceba78a1b35a4b353995661f2090a9d8fccfd72a7bc60e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d91b091539f460338ceba78a1b35a4b353995661f2090a9d8fccfd72a7bc60e9->leave($__internal_d91b091539f460338ceba78a1b35a4b353995661f2090a9d8fccfd72a7bc60e9_prof);

        
        $__internal_9643c0e29561dea987d88ddc45d42d14e1500b193da168d585d674501c218bca->leave($__internal_9643c0e29561dea987d88ddc45d42d14e1500b193da168d585d674501c218bca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ef8665121d0cb302b99e47742b1de9fea54d64ec4d0b8fc85024a24374c5031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef8665121d0cb302b99e47742b1de9fea54d64ec4d0b8fc85024a24374c5031->enter($__internal_2ef8665121d0cb302b99e47742b1de9fea54d64ec4d0b8fc85024a24374c5031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0f14c198dfadd962e049740c82feee398a46e90b92d725d53b3a49fb0cd9f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f14c198dfadd962e049740c82feee398a46e90b92d725d53b3a49fb0cd9f03->enter($__internal_a0f14c198dfadd962e049740c82feee398a46e90b92d725d53b3a49fb0cd9f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a0f14c198dfadd962e049740c82feee398a46e90b92d725d53b3a49fb0cd9f03->leave($__internal_a0f14c198dfadd962e049740c82feee398a46e90b92d725d53b3a49fb0cd9f03_prof);

        
        $__internal_2ef8665121d0cb302b99e47742b1de9fea54d64ec4d0b8fc85024a24374c5031->leave($__internal_2ef8665121d0cb302b99e47742b1de9fea54d64ec4d0b8fc85024a24374c5031_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df1b207553ea093396e27042dc9d12ede9acaa71b4aefeb733c8176ce047aaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1b207553ea093396e27042dc9d12ede9acaa71b4aefeb733c8176ce047aaac->enter($__internal_df1b207553ea093396e27042dc9d12ede9acaa71b4aefeb733c8176ce047aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38b9ed8f079cc5cfbfa175819437550d10925c434edd4cd20d1c6d0fe4b208c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b9ed8f079cc5cfbfa175819437550d10925c434edd4cd20d1c6d0fe4b208c2->enter($__internal_38b9ed8f079cc5cfbfa175819437550d10925c434edd4cd20d1c6d0fe4b208c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_38b9ed8f079cc5cfbfa175819437550d10925c434edd4cd20d1c6d0fe4b208c2->leave($__internal_38b9ed8f079cc5cfbfa175819437550d10925c434edd4cd20d1c6d0fe4b208c2_prof);

        
        $__internal_df1b207553ea093396e27042dc9d12ede9acaa71b4aefeb733c8176ce047aaac->leave($__internal_df1b207553ea093396e27042dc9d12ede9acaa71b4aefeb733c8176ce047aaac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
