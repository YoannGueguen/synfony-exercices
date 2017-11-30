<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_31a14440d659b2c3e4f51dad75502169c641596f63f5e09414a372dd01b7042d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caecae39e14622f8c308a586b6704c23cf16fba539a06027a6ebc6451e565bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caecae39e14622f8c308a586b6704c23cf16fba539a06027a6ebc6451e565bd0->enter($__internal_caecae39e14622f8c308a586b6704c23cf16fba539a06027a6ebc6451e565bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_60447768aab8a52b9178b241428831f7678374d1342439b13fa34112fb880cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60447768aab8a52b9178b241428831f7678374d1342439b13fa34112fb880cb4->enter($__internal_60447768aab8a52b9178b241428831f7678374d1342439b13fa34112fb880cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_caecae39e14622f8c308a586b6704c23cf16fba539a06027a6ebc6451e565bd0->leave($__internal_caecae39e14622f8c308a586b6704c23cf16fba539a06027a6ebc6451e565bd0_prof);

        
        $__internal_60447768aab8a52b9178b241428831f7678374d1342439b13fa34112fb880cb4->leave($__internal_60447768aab8a52b9178b241428831f7678374d1342439b13fa34112fb880cb4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c23e6dd7f8a2a88077c335c74cc10ccd1f18aa133d45b49e664486ec099f49f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23e6dd7f8a2a88077c335c74cc10ccd1f18aa133d45b49e664486ec099f49f6->enter($__internal_c23e6dd7f8a2a88077c335c74cc10ccd1f18aa133d45b49e664486ec099f49f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab28cb021d5719dbfbc4031f4721813daefe5af402b8d1bbd399f4bafa560ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab28cb021d5719dbfbc4031f4721813daefe5af402b8d1bbd399f4bafa560ce4->enter($__internal_ab28cb021d5719dbfbc4031f4721813daefe5af402b8d1bbd399f4bafa560ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab28cb021d5719dbfbc4031f4721813daefe5af402b8d1bbd399f4bafa560ce4->leave($__internal_ab28cb021d5719dbfbc4031f4721813daefe5af402b8d1bbd399f4bafa560ce4_prof);

        
        $__internal_c23e6dd7f8a2a88077c335c74cc10ccd1f18aa133d45b49e664486ec099f49f6->leave($__internal_c23e6dd7f8a2a88077c335c74cc10ccd1f18aa133d45b49e664486ec099f49f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
