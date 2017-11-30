<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_723afc4844a567937d204258882dec7cc5e62e0bdc4644da4b3a001d02826423 extends Twig_Template
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
        $__internal_afb3854a8ba6f94a649716acf7be2ffa5914a23ecb70ce669d6961152ac9ede1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb3854a8ba6f94a649716acf7be2ffa5914a23ecb70ce669d6961152ac9ede1->enter($__internal_afb3854a8ba6f94a649716acf7be2ffa5914a23ecb70ce669d6961152ac9ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_9aa6f5e29deb393934234f48f448cfa417c315bee4af1d564111b8f52f86374e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa6f5e29deb393934234f48f448cfa417c315bee4af1d564111b8f52f86374e->enter($__internal_9aa6f5e29deb393934234f48f448cfa417c315bee4af1d564111b8f52f86374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_afb3854a8ba6f94a649716acf7be2ffa5914a23ecb70ce669d6961152ac9ede1->leave($__internal_afb3854a8ba6f94a649716acf7be2ffa5914a23ecb70ce669d6961152ac9ede1_prof);

        
        $__internal_9aa6f5e29deb393934234f48f448cfa417c315bee4af1d564111b8f52f86374e->leave($__internal_9aa6f5e29deb393934234f48f448cfa417c315bee4af1d564111b8f52f86374e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
