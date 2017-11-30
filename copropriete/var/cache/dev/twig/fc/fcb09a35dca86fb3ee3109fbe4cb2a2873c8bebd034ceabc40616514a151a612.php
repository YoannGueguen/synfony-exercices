<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b9781c0f213beff2a78b860e07049836d68c42b297cf29ecc2407e83e1a6a712 extends Twig_Template
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
        $__internal_5c7344b97b77290cf3c70b94a0533687d198b741b553f71e17e516f8bb74e381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7344b97b77290cf3c70b94a0533687d198b741b553f71e17e516f8bb74e381->enter($__internal_5c7344b97b77290cf3c70b94a0533687d198b741b553f71e17e516f8bb74e381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8babefe40c827005f1966c4f3809f709891a3d598681ea264163bf22672b365c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8babefe40c827005f1966c4f3809f709891a3d598681ea264163bf22672b365c->enter($__internal_8babefe40c827005f1966c4f3809f709891a3d598681ea264163bf22672b365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5c7344b97b77290cf3c70b94a0533687d198b741b553f71e17e516f8bb74e381->leave($__internal_5c7344b97b77290cf3c70b94a0533687d198b741b553f71e17e516f8bb74e381_prof);

        
        $__internal_8babefe40c827005f1966c4f3809f709891a3d598681ea264163bf22672b365c->leave($__internal_8babefe40c827005f1966c4f3809f709891a3d598681ea264163bf22672b365c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
