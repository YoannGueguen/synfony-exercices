<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2e3ea2001c36140ce38ec7ae415e5d4901a735d7a3ece394cdba6dbddca93b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3ea2001c36140ce38ec7ae415e5d4901a735d7a3ece394cdba6dbddca93b2d->enter($__internal_2e3ea2001c36140ce38ec7ae415e5d4901a735d7a3ece394cdba6dbddca93b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_081ff9fd66fae6aa177dd229c7568ceeb88b737e64450bebaea5ae40bcde368a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081ff9fd66fae6aa177dd229c7568ceeb88b737e64450bebaea5ae40bcde368a->enter($__internal_081ff9fd66fae6aa177dd229c7568ceeb88b737e64450bebaea5ae40bcde368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e3ea2001c36140ce38ec7ae415e5d4901a735d7a3ece394cdba6dbddca93b2d->leave($__internal_2e3ea2001c36140ce38ec7ae415e5d4901a735d7a3ece394cdba6dbddca93b2d_prof);

        
        $__internal_081ff9fd66fae6aa177dd229c7568ceeb88b737e64450bebaea5ae40bcde368a->leave($__internal_081ff9fd66fae6aa177dd229c7568ceeb88b737e64450bebaea5ae40bcde368a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a02f14efa936298d9059b4888e133a040830cb0c4c9124424f7f325998041fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02f14efa936298d9059b4888e133a040830cb0c4c9124424f7f325998041fd5->enter($__internal_a02f14efa936298d9059b4888e133a040830cb0c4c9124424f7f325998041fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c898518bfa9c1b1a50f2a7b972e41f1cb0deaf576fd2e8c22a197835d2fc3c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c898518bfa9c1b1a50f2a7b972e41f1cb0deaf576fd2e8c22a197835d2fc3c0f->enter($__internal_c898518bfa9c1b1a50f2a7b972e41f1cb0deaf576fd2e8c22a197835d2fc3c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c898518bfa9c1b1a50f2a7b972e41f1cb0deaf576fd2e8c22a197835d2fc3c0f->leave($__internal_c898518bfa9c1b1a50f2a7b972e41f1cb0deaf576fd2e8c22a197835d2fc3c0f_prof);

        
        $__internal_a02f14efa936298d9059b4888e133a040830cb0c4c9124424f7f325998041fd5->leave($__internal_a02f14efa936298d9059b4888e133a040830cb0c4c9124424f7f325998041fd5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7198eea3bda802fe00f752d9d42d4c28c16bd821ad96184fb7fde6729b962922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7198eea3bda802fe00f752d9d42d4c28c16bd821ad96184fb7fde6729b962922->enter($__internal_7198eea3bda802fe00f752d9d42d4c28c16bd821ad96184fb7fde6729b962922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_536615a8640d5e07605822b81e0e162dc5e0a875ce7e29ea51ca01b4ddc204be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536615a8640d5e07605822b81e0e162dc5e0a875ce7e29ea51ca01b4ddc204be->enter($__internal_536615a8640d5e07605822b81e0e162dc5e0a875ce7e29ea51ca01b4ddc204be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_536615a8640d5e07605822b81e0e162dc5e0a875ce7e29ea51ca01b4ddc204be->leave($__internal_536615a8640d5e07605822b81e0e162dc5e0a875ce7e29ea51ca01b4ddc204be_prof);

        
        $__internal_7198eea3bda802fe00f752d9d42d4c28c16bd821ad96184fb7fde6729b962922->leave($__internal_7198eea3bda802fe00f752d9d42d4c28c16bd821ad96184fb7fde6729b962922_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7582c124138627a39dca04e0f913d11a0e93e41997c635d120685d707669e95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7582c124138627a39dca04e0f913d11a0e93e41997c635d120685d707669e95e->enter($__internal_7582c124138627a39dca04e0f913d11a0e93e41997c635d120685d707669e95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d803a155b5db64ed9d49dc2057e10cbf3feced1e3005ea3a67f799dd590d222e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d803a155b5db64ed9d49dc2057e10cbf3feced1e3005ea3a67f799dd590d222e->enter($__internal_d803a155b5db64ed9d49dc2057e10cbf3feced1e3005ea3a67f799dd590d222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d803a155b5db64ed9d49dc2057e10cbf3feced1e3005ea3a67f799dd590d222e->leave($__internal_d803a155b5db64ed9d49dc2057e10cbf3feced1e3005ea3a67f799dd590d222e_prof);

        
        $__internal_7582c124138627a39dca04e0f913d11a0e93e41997c635d120685d707669e95e->leave($__internal_7582c124138627a39dca04e0f913d11a0e93e41997c635d120685d707669e95e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
