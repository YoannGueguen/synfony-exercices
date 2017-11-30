<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48c4ab9f2dad15df4653eed6d95c4e4a358d52dcf94e2a491f0f9951cc7c5a82 extends Twig_Template
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
        $__internal_f43f410e85069a1ff1c1c20ba62a13bfbd6409dfe1eff2239f869d0c20386c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43f410e85069a1ff1c1c20ba62a13bfbd6409dfe1eff2239f869d0c20386c10->enter($__internal_f43f410e85069a1ff1c1c20ba62a13bfbd6409dfe1eff2239f869d0c20386c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_5c296aa03871d2070f1ff0feea2fc4211ff989616b94ecc6a001878c8fe4e210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c296aa03871d2070f1ff0feea2fc4211ff989616b94ecc6a001878c8fe4e210->enter($__internal_5c296aa03871d2070f1ff0feea2fc4211ff989616b94ecc6a001878c8fe4e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f43f410e85069a1ff1c1c20ba62a13bfbd6409dfe1eff2239f869d0c20386c10->leave($__internal_f43f410e85069a1ff1c1c20ba62a13bfbd6409dfe1eff2239f869d0c20386c10_prof);

        
        $__internal_5c296aa03871d2070f1ff0feea2fc4211ff989616b94ecc6a001878c8fe4e210->leave($__internal_5c296aa03871d2070f1ff0feea2fc4211ff989616b94ecc6a001878c8fe4e210_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
