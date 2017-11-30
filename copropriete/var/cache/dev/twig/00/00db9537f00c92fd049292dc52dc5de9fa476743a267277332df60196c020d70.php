<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a43f2d0e2a84e4535dc9c913148a45d42a76c52aff428836aba4799bfd7c2c5f extends Twig_Template
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
        $__internal_77b669a13d59362bd3fe6322e68d0f6cb5f15f62c2d0a0cfbf403265afe7613f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b669a13d59362bd3fe6322e68d0f6cb5f15f62c2d0a0cfbf403265afe7613f->enter($__internal_77b669a13d59362bd3fe6322e68d0f6cb5f15f62c2d0a0cfbf403265afe7613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e24a9afde92758f5e8c75068cfbf06b9ff7f0aca443d304f3c47d3aff7aabfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24a9afde92758f5e8c75068cfbf06b9ff7f0aca443d304f3c47d3aff7aabfe1->enter($__internal_e24a9afde92758f5e8c75068cfbf06b9ff7f0aca443d304f3c47d3aff7aabfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_77b669a13d59362bd3fe6322e68d0f6cb5f15f62c2d0a0cfbf403265afe7613f->leave($__internal_77b669a13d59362bd3fe6322e68d0f6cb5f15f62c2d0a0cfbf403265afe7613f_prof);

        
        $__internal_e24a9afde92758f5e8c75068cfbf06b9ff7f0aca443d304f3c47d3aff7aabfe1->leave($__internal_e24a9afde92758f5e8c75068cfbf06b9ff7f0aca443d304f3c47d3aff7aabfe1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
