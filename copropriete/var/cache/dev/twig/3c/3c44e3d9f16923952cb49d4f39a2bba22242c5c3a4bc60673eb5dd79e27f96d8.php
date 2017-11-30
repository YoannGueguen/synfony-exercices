<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9f6588ab938828fd0d015ddebc9c70318f11dfede6949f85c6a3b4942e0c523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f1e023737108c872953b84f736b0afee678923863bd0a7765e85f07f95f61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f1e023737108c872953b84f736b0afee678923863bd0a7765e85f07f95f61a->enter($__internal_74f1e023737108c872953b84f736b0afee678923863bd0a7765e85f07f95f61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_fba54841dc0c4317c58307f9500257574170917512e2724f373d9c9f33b2348b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba54841dc0c4317c58307f9500257574170917512e2724f373d9c9f33b2348b->enter($__internal_fba54841dc0c4317c58307f9500257574170917512e2724f373d9c9f33b2348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_74f1e023737108c872953b84f736b0afee678923863bd0a7765e85f07f95f61a->leave($__internal_74f1e023737108c872953b84f736b0afee678923863bd0a7765e85f07f95f61a_prof);

        
        $__internal_fba54841dc0c4317c58307f9500257574170917512e2724f373d9c9f33b2348b->leave($__internal_fba54841dc0c4317c58307f9500257574170917512e2724f373d9c9f33b2348b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
