<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_aed538842a391c4c6fafba07f44399040e8d74788965be95267ff5a49a2a5169 extends Twig_Template
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
        $__internal_5323d6182ce75954caff66b2f894d72257fb4775527e0ef9c707219256a1f7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5323d6182ce75954caff66b2f894d72257fb4775527e0ef9c707219256a1f7da->enter($__internal_5323d6182ce75954caff66b2f894d72257fb4775527e0ef9c707219256a1f7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_020115b2b9dc0d02f15a6611c38771eb19158aa1792dde0b028d01c2eaa9175a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020115b2b9dc0d02f15a6611c38771eb19158aa1792dde0b028d01c2eaa9175a->enter($__internal_020115b2b9dc0d02f15a6611c38771eb19158aa1792dde0b028d01c2eaa9175a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5323d6182ce75954caff66b2f894d72257fb4775527e0ef9c707219256a1f7da->leave($__internal_5323d6182ce75954caff66b2f894d72257fb4775527e0ef9c707219256a1f7da_prof);

        
        $__internal_020115b2b9dc0d02f15a6611c38771eb19158aa1792dde0b028d01c2eaa9175a->leave($__internal_020115b2b9dc0d02f15a6611c38771eb19158aa1792dde0b028d01c2eaa9175a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
