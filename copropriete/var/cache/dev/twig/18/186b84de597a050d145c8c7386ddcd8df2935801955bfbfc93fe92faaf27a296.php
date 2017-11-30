<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
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
        $__internal_82e71029070b63ac4d870b197c198d7c1b172c80addeec09253aa63a44404946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e71029070b63ac4d870b197c198d7c1b172c80addeec09253aa63a44404946->enter($__internal_82e71029070b63ac4d870b197c198d7c1b172c80addeec09253aa63a44404946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a24c63a5f20ccb212f7d0693334b66b3f063cb0544453abe83170378e59c19f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24c63a5f20ccb212f7d0693334b66b3f063cb0544453abe83170378e59c19f4->enter($__internal_a24c63a5f20ccb212f7d0693334b66b3f063cb0544453abe83170378e59c19f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_82e71029070b63ac4d870b197c198d7c1b172c80addeec09253aa63a44404946->leave($__internal_82e71029070b63ac4d870b197c198d7c1b172c80addeec09253aa63a44404946_prof);

        
        $__internal_a24c63a5f20ccb212f7d0693334b66b3f063cb0544453abe83170378e59c19f4->leave($__internal_a24c63a5f20ccb212f7d0693334b66b3f063cb0544453abe83170378e59c19f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
