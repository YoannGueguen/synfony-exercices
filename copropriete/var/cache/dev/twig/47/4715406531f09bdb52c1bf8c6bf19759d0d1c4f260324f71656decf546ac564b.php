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
        $__internal_ea1648419cb3f1668921e2cbc84c2670a86a0046da940b396f3eed0ea2aec219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1648419cb3f1668921e2cbc84c2670a86a0046da940b396f3eed0ea2aec219->enter($__internal_ea1648419cb3f1668921e2cbc84c2670a86a0046da940b396f3eed0ea2aec219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_faef0fdb1ec4b392e542c137e94fdc82b1b2b73b474690272df0f8b10eca7c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faef0fdb1ec4b392e542c137e94fdc82b1b2b73b474690272df0f8b10eca7c5a->enter($__internal_faef0fdb1ec4b392e542c137e94fdc82b1b2b73b474690272df0f8b10eca7c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1648419cb3f1668921e2cbc84c2670a86a0046da940b396f3eed0ea2aec219->leave($__internal_ea1648419cb3f1668921e2cbc84c2670a86a0046da940b396f3eed0ea2aec219_prof);

        
        $__internal_faef0fdb1ec4b392e542c137e94fdc82b1b2b73b474690272df0f8b10eca7c5a->leave($__internal_faef0fdb1ec4b392e542c137e94fdc82b1b2b73b474690272df0f8b10eca7c5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2cdbcc981098a3045c55cd39738ef508ca2aa9a7ddd1a10271a0e9180ceb471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cdbcc981098a3045c55cd39738ef508ca2aa9a7ddd1a10271a0e9180ceb471->enter($__internal_e2cdbcc981098a3045c55cd39738ef508ca2aa9a7ddd1a10271a0e9180ceb471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b30125b1baa926b85873ccdb9565ff74c6d758bc60f59b103804aac56005212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b30125b1baa926b85873ccdb9565ff74c6d758bc60f59b103804aac56005212->enter($__internal_7b30125b1baa926b85873ccdb9565ff74c6d758bc60f59b103804aac56005212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b30125b1baa926b85873ccdb9565ff74c6d758bc60f59b103804aac56005212->leave($__internal_7b30125b1baa926b85873ccdb9565ff74c6d758bc60f59b103804aac56005212_prof);

        
        $__internal_e2cdbcc981098a3045c55cd39738ef508ca2aa9a7ddd1a10271a0e9180ceb471->leave($__internal_e2cdbcc981098a3045c55cd39738ef508ca2aa9a7ddd1a10271a0e9180ceb471_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efc825c049b380c885a51599fc0858a56ecf3a293b2c42194b283d0d3e5a2b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc825c049b380c885a51599fc0858a56ecf3a293b2c42194b283d0d3e5a2b9c->enter($__internal_efc825c049b380c885a51599fc0858a56ecf3a293b2c42194b283d0d3e5a2b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_73ca3467cddc47fab3410735e345ed55734aa66fa8a7049ed057e8c1c28627a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ca3467cddc47fab3410735e345ed55734aa66fa8a7049ed057e8c1c28627a0->enter($__internal_73ca3467cddc47fab3410735e345ed55734aa66fa8a7049ed057e8c1c28627a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_73ca3467cddc47fab3410735e345ed55734aa66fa8a7049ed057e8c1c28627a0->leave($__internal_73ca3467cddc47fab3410735e345ed55734aa66fa8a7049ed057e8c1c28627a0_prof);

        
        $__internal_efc825c049b380c885a51599fc0858a56ecf3a293b2c42194b283d0d3e5a2b9c->leave($__internal_efc825c049b380c885a51599fc0858a56ecf3a293b2c42194b283d0d3e5a2b9c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1913f633c71d0745d909010e337fe809071292038aa0faf6d6d151c7e0e43f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1913f633c71d0745d909010e337fe809071292038aa0faf6d6d151c7e0e43f6f->enter($__internal_1913f633c71d0745d909010e337fe809071292038aa0faf6d6d151c7e0e43f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c0aff2335ff4bd30a6c9943ccfc77d469934e6212f8b58c0fbb68a44e493ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0aff2335ff4bd30a6c9943ccfc77d469934e6212f8b58c0fbb68a44e493ce2->enter($__internal_2c0aff2335ff4bd30a6c9943ccfc77d469934e6212f8b58c0fbb68a44e493ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2c0aff2335ff4bd30a6c9943ccfc77d469934e6212f8b58c0fbb68a44e493ce2->leave($__internal_2c0aff2335ff4bd30a6c9943ccfc77d469934e6212f8b58c0fbb68a44e493ce2_prof);

        
        $__internal_1913f633c71d0745d909010e337fe809071292038aa0faf6d6d151c7e0e43f6f->leave($__internal_1913f633c71d0745d909010e337fe809071292038aa0faf6d6d151c7e0e43f6f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
