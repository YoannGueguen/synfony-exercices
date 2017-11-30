<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_469d5132eed9d8a52881c0bfd7e315fc6942caa85e6c1bcee73353d600ffbf65 extends Twig_Template
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
        $__internal_f0855f688749881f68a4be3e7730a3d9a733302784f925d5df13f64e817a0679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0855f688749881f68a4be3e7730a3d9a733302784f925d5df13f64e817a0679->enter($__internal_f0855f688749881f68a4be3e7730a3d9a733302784f925d5df13f64e817a0679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_38e821691ff8ba20f7d92a440baaf49ab15b063561146ab0d28674d1d1daade5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e821691ff8ba20f7d92a440baaf49ab15b063561146ab0d28674d1d1daade5->enter($__internal_38e821691ff8ba20f7d92a440baaf49ab15b063561146ab0d28674d1d1daade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f0855f688749881f68a4be3e7730a3d9a733302784f925d5df13f64e817a0679->leave($__internal_f0855f688749881f68a4be3e7730a3d9a733302784f925d5df13f64e817a0679_prof);

        
        $__internal_38e821691ff8ba20f7d92a440baaf49ab15b063561146ab0d28674d1d1daade5->leave($__internal_38e821691ff8ba20f7d92a440baaf49ab15b063561146ab0d28674d1d1daade5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
