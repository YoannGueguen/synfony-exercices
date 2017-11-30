<?php

/* :default:index.html.twig */
class __TwigTemplate_9cb6cf1c58dfb8773b936b37df7d4469ddcbb8c70e955bd584b5d0706038d554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c975fecedfcd41212afd16413ed35f5817e2ace34bbaab8786c06f91340939a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c975fecedfcd41212afd16413ed35f5817e2ace34bbaab8786c06f91340939a4->enter($__internal_c975fecedfcd41212afd16413ed35f5817e2ace34bbaab8786c06f91340939a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_98ffe2909a7dbd1b2c0f484728aeebfd9b71386e8649ffe530f33f84e4a10af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ffe2909a7dbd1b2c0f484728aeebfd9b71386e8649ffe530f33f84e4a10af8->enter($__internal_98ffe2909a7dbd1b2c0f484728aeebfd9b71386e8649ffe530f33f84e4a10af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c975fecedfcd41212afd16413ed35f5817e2ace34bbaab8786c06f91340939a4->leave($__internal_c975fecedfcd41212afd16413ed35f5817e2ace34bbaab8786c06f91340939a4_prof);

        
        $__internal_98ffe2909a7dbd1b2c0f484728aeebfd9b71386e8649ffe530f33f84e4a10af8->leave($__internal_98ffe2909a7dbd1b2c0f484728aeebfd9b71386e8649ffe530f33f84e4a10af8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66214375571853d96886812e4f76f08c86359bbe5a24efe85239de23d6bb336b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66214375571853d96886812e4f76f08c86359bbe5a24efe85239de23d6bb336b->enter($__internal_66214375571853d96886812e4f76f08c86359bbe5a24efe85239de23d6bb336b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f0a9a8c874247bcef5b638b51e99f5827bd18883d18fbc38195fac9a99141c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0a9a8c874247bcef5b638b51e99f5827bd18883d18fbc38195fac9a99141c1->enter($__internal_7f0a9a8c874247bcef5b638b51e99f5827bd18883d18fbc38195fac9a99141c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_7f0a9a8c874247bcef5b638b51e99f5827bd18883d18fbc38195fac9a99141c1->leave($__internal_7f0a9a8c874247bcef5b638b51e99f5827bd18883d18fbc38195fac9a99141c1_prof);

        
        $__internal_66214375571853d96886812e4f76f08c86359bbe5a24efe85239de23d6bb336b->leave($__internal_66214375571853d96886812e4f76f08c86359bbe5a24efe85239de23d6bb336b_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% endblock %}", ":default:index.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\app/Resources\\views/default/index.html.twig");
    }
}
