<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_856a3428db9c8a9dd6094305bc6f99fd818d24c6e7a3d1ab3e396f5541d421b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856a3428db9c8a9dd6094305bc6f99fd818d24c6e7a3d1ab3e396f5541d421b8->enter($__internal_856a3428db9c8a9dd6094305bc6f99fd818d24c6e7a3d1ab3e396f5541d421b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b9c74d56fa9a0f0274418189cf964f4b2b6c3e7e9de27019b50c9a36441f357a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c74d56fa9a0f0274418189cf964f4b2b6c3e7e9de27019b50c9a36441f357a->enter($__internal_b9c74d56fa9a0f0274418189cf964f4b2b6c3e7e9de27019b50c9a36441f357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_856a3428db9c8a9dd6094305bc6f99fd818d24c6e7a3d1ab3e396f5541d421b8->leave($__internal_856a3428db9c8a9dd6094305bc6f99fd818d24c6e7a3d1ab3e396f5541d421b8_prof);

        
        $__internal_b9c74d56fa9a0f0274418189cf964f4b2b6c3e7e9de27019b50c9a36441f357a->leave($__internal_b9c74d56fa9a0f0274418189cf964f4b2b6c3e7e9de27019b50c9a36441f357a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
