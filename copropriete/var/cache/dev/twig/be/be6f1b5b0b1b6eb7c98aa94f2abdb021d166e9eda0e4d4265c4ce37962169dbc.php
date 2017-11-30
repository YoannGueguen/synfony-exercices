<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75173cca7348b0f53398bf8df7ea4e011d98df74b62c11c890ac8d64bf5d5487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_40f0b39b3d9747a7d7ee1ccd7cc6a59de41619419eb6afbb8b8c18ede01280c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f0b39b3d9747a7d7ee1ccd7cc6a59de41619419eb6afbb8b8c18ede01280c6->enter($__internal_40f0b39b3d9747a7d7ee1ccd7cc6a59de41619419eb6afbb8b8c18ede01280c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6f442dd2ca6f201588b2fc9ca20d3caf2c46be6a22f7672ecd92317957758c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f442dd2ca6f201588b2fc9ca20d3caf2c46be6a22f7672ecd92317957758c4c->enter($__internal_6f442dd2ca6f201588b2fc9ca20d3caf2c46be6a22f7672ecd92317957758c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f0b39b3d9747a7d7ee1ccd7cc6a59de41619419eb6afbb8b8c18ede01280c6->leave($__internal_40f0b39b3d9747a7d7ee1ccd7cc6a59de41619419eb6afbb8b8c18ede01280c6_prof);

        
        $__internal_6f442dd2ca6f201588b2fc9ca20d3caf2c46be6a22f7672ecd92317957758c4c->leave($__internal_6f442dd2ca6f201588b2fc9ca20d3caf2c46be6a22f7672ecd92317957758c4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cde1c03e2f1c9171cd7cf2c0eccf47411474b2734bbb79451c226cd5cd857570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde1c03e2f1c9171cd7cf2c0eccf47411474b2734bbb79451c226cd5cd857570->enter($__internal_cde1c03e2f1c9171cd7cf2c0eccf47411474b2734bbb79451c226cd5cd857570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0767f06db0c15a62362f35fa4b051f47536d366f6d9408ec53276f5be347557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0767f06db0c15a62362f35fa4b051f47536d366f6d9408ec53276f5be347557->enter($__internal_e0767f06db0c15a62362f35fa4b051f47536d366f6d9408ec53276f5be347557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0767f06db0c15a62362f35fa4b051f47536d366f6d9408ec53276f5be347557->leave($__internal_e0767f06db0c15a62362f35fa4b051f47536d366f6d9408ec53276f5be347557_prof);

        
        $__internal_cde1c03e2f1c9171cd7cf2c0eccf47411474b2734bbb79451c226cd5cd857570->leave($__internal_cde1c03e2f1c9171cd7cf2c0eccf47411474b2734bbb79451c226cd5cd857570_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2637c21ab1ea63dcb43f947c124d9e9a2350222d2800444021391ada5f0680d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2637c21ab1ea63dcb43f947c124d9e9a2350222d2800444021391ada5f0680d->enter($__internal_a2637c21ab1ea63dcb43f947c124d9e9a2350222d2800444021391ada5f0680d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2b2c13b9a342468b86eb48d8e42e02f4dc3e054d5e0423a5adab5d1baf9b819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b2c13b9a342468b86eb48d8e42e02f4dc3e054d5e0423a5adab5d1baf9b819->enter($__internal_a2b2c13b9a342468b86eb48d8e42e02f4dc3e054d5e0423a5adab5d1baf9b819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2b2c13b9a342468b86eb48d8e42e02f4dc3e054d5e0423a5adab5d1baf9b819->leave($__internal_a2b2c13b9a342468b86eb48d8e42e02f4dc3e054d5e0423a5adab5d1baf9b819_prof);

        
        $__internal_a2637c21ab1ea63dcb43f947c124d9e9a2350222d2800444021391ada5f0680d->leave($__internal_a2637c21ab1ea63dcb43f947c124d9e9a2350222d2800444021391ada5f0680d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4318be377a5e331e3e77d69997a94053ed0d8ba51fb4fdb164aba2024f6f0587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4318be377a5e331e3e77d69997a94053ed0d8ba51fb4fdb164aba2024f6f0587->enter($__internal_4318be377a5e331e3e77d69997a94053ed0d8ba51fb4fdb164aba2024f6f0587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8401803e78a4c66936acc987ac0b3809ded319ca3444f7e92460ccf8f0e6aae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8401803e78a4c66936acc987ac0b3809ded319ca3444f7e92460ccf8f0e6aae6->enter($__internal_8401803e78a4c66936acc987ac0b3809ded319ca3444f7e92460ccf8f0e6aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8401803e78a4c66936acc987ac0b3809ded319ca3444f7e92460ccf8f0e6aae6->leave($__internal_8401803e78a4c66936acc987ac0b3809ded319ca3444f7e92460ccf8f0e6aae6_prof);

        
        $__internal_4318be377a5e331e3e77d69997a94053ed0d8ba51fb4fdb164aba2024f6f0587->leave($__internal_4318be377a5e331e3e77d69997a94053ed0d8ba51fb4fdb164aba2024f6f0587_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
