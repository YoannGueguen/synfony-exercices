<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_01d3cbe0799be5a27f0f271a1fd9be0af9cc36a123902ddc970ef2d85d2bb98c extends Twig_Template
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
        $__internal_3f20bc3e8c760a5871d1095eef4591884b192f49bce4f616f22f22e992f3dd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f20bc3e8c760a5871d1095eef4591884b192f49bce4f616f22f22e992f3dd02->enter($__internal_3f20bc3e8c760a5871d1095eef4591884b192f49bce4f616f22f22e992f3dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c9e72eab5a59fadbaa782574c840144867bba51c32ffeee2c294893e10b0bf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e72eab5a59fadbaa782574c840144867bba51c32ffeee2c294893e10b0bf8c->enter($__internal_c9e72eab5a59fadbaa782574c840144867bba51c32ffeee2c294893e10b0bf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_3f20bc3e8c760a5871d1095eef4591884b192f49bce4f616f22f22e992f3dd02->leave($__internal_3f20bc3e8c760a5871d1095eef4591884b192f49bce4f616f22f22e992f3dd02_prof);

        
        $__internal_c9e72eab5a59fadbaa782574c840144867bba51c32ffeee2c294893e10b0bf8c->leave($__internal_c9e72eab5a59fadbaa782574c840144867bba51c32ffeee2c294893e10b0bf8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
