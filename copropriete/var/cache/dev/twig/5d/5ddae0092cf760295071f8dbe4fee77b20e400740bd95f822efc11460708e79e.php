<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a7ba78300f2d384d1a8293a933612a7c4886972b819864d4c080f9e47f5f52d9 extends Twig_Template
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
        $__internal_54a2346b15d2db1e3170ba78eceaed662581b5430fd56fee2a894f8d296573b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a2346b15d2db1e3170ba78eceaed662581b5430fd56fee2a894f8d296573b2->enter($__internal_54a2346b15d2db1e3170ba78eceaed662581b5430fd56fee2a894f8d296573b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_92a157c74166ad3a891b204da800240ff42da0b3131494be9112c160e393e070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a157c74166ad3a891b204da800240ff42da0b3131494be9112c160e393e070->enter($__internal_92a157c74166ad3a891b204da800240ff42da0b3131494be9112c160e393e070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_54a2346b15d2db1e3170ba78eceaed662581b5430fd56fee2a894f8d296573b2->leave($__internal_54a2346b15d2db1e3170ba78eceaed662581b5430fd56fee2a894f8d296573b2_prof);

        
        $__internal_92a157c74166ad3a891b204da800240ff42da0b3131494be9112c160e393e070->leave($__internal_92a157c74166ad3a891b204da800240ff42da0b3131494be9112c160e393e070_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
