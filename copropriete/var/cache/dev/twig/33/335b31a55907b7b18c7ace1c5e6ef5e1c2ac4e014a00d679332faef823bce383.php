<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b55ba1aec3f18cb53fbb155c0fece24e000215d002b94cd52275594f2bd15144 extends Twig_Template
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
        $__internal_6ff01347fba95608b3fe99d2165c564dc69247355a1cd79cbb6cef33796ce139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff01347fba95608b3fe99d2165c564dc69247355a1cd79cbb6cef33796ce139->enter($__internal_6ff01347fba95608b3fe99d2165c564dc69247355a1cd79cbb6cef33796ce139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8a88e818f631f97b9bbd24a5563ae437e76af7b86c0b8203045fa64ededb9d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a88e818f631f97b9bbd24a5563ae437e76af7b86c0b8203045fa64ededb9d5a->enter($__internal_8a88e818f631f97b9bbd24a5563ae437e76af7b86c0b8203045fa64ededb9d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6ff01347fba95608b3fe99d2165c564dc69247355a1cd79cbb6cef33796ce139->leave($__internal_6ff01347fba95608b3fe99d2165c564dc69247355a1cd79cbb6cef33796ce139_prof);

        
        $__internal_8a88e818f631f97b9bbd24a5563ae437e76af7b86c0b8203045fa64ededb9d5a->leave($__internal_8a88e818f631f97b9bbd24a5563ae437e76af7b86c0b8203045fa64ededb9d5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
