<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_14af130ee6a1d0efb7224b6d90c084ec5eff9f145367b832b975ed7513c5a71d extends Twig_Template
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
        $__internal_8d761c01a287f2a82d9a1b0851b987ab26146b1d111518681066b0945b19d3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d761c01a287f2a82d9a1b0851b987ab26146b1d111518681066b0945b19d3f3->enter($__internal_8d761c01a287f2a82d9a1b0851b987ab26146b1d111518681066b0945b19d3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3340e538f124a4d69d278e366c3beb481068575e385b9822cb5ab4d66e9e2252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3340e538f124a4d69d278e366c3beb481068575e385b9822cb5ab4d66e9e2252->enter($__internal_3340e538f124a4d69d278e366c3beb481068575e385b9822cb5ab4d66e9e2252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8d761c01a287f2a82d9a1b0851b987ab26146b1d111518681066b0945b19d3f3->leave($__internal_8d761c01a287f2a82d9a1b0851b987ab26146b1d111518681066b0945b19d3f3_prof);

        
        $__internal_3340e538f124a4d69d278e366c3beb481068575e385b9822cb5ab4d66e9e2252->leave($__internal_3340e538f124a4d69d278e366c3beb481068575e385b9822cb5ab4d66e9e2252_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
