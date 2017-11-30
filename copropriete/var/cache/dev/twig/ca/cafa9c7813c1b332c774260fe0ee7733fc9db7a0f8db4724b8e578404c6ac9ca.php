<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5051379d71087f28b2fbb36b4d9d7031836e6d41ebfc140cec6969682065031e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5051379d71087f28b2fbb36b4d9d7031836e6d41ebfc140cec6969682065031e->enter($__internal_5051379d71087f28b2fbb36b4d9d7031836e6d41ebfc140cec6969682065031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c7ce89c60a83e211bab75291081355c6a7d11ed457ab068754cb2c131f85d938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ce89c60a83e211bab75291081355c6a7d11ed457ab068754cb2c131f85d938->enter($__internal_c7ce89c60a83e211bab75291081355c6a7d11ed457ab068754cb2c131f85d938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5051379d71087f28b2fbb36b4d9d7031836e6d41ebfc140cec6969682065031e->leave($__internal_5051379d71087f28b2fbb36b4d9d7031836e6d41ebfc140cec6969682065031e_prof);

        
        $__internal_c7ce89c60a83e211bab75291081355c6a7d11ed457ab068754cb2c131f85d938->leave($__internal_c7ce89c60a83e211bab75291081355c6a7d11ed457ab068754cb2c131f85d938_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f682ded1831f3ab8eb40cde5b6bf9d979599d7fb9d2814df2b1d38024446ca39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f682ded1831f3ab8eb40cde5b6bf9d979599d7fb9d2814df2b1d38024446ca39->enter($__internal_f682ded1831f3ab8eb40cde5b6bf9d979599d7fb9d2814df2b1d38024446ca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbe63791c0c510868c04a33b74b42c906efad93f41bd6b585fa16e3166518b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe63791c0c510868c04a33b74b42c906efad93f41bd6b585fa16e3166518b3a->enter($__internal_cbe63791c0c510868c04a33b74b42c906efad93f41bd6b585fa16e3166518b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cbe63791c0c510868c04a33b74b42c906efad93f41bd6b585fa16e3166518b3a->leave($__internal_cbe63791c0c510868c04a33b74b42c906efad93f41bd6b585fa16e3166518b3a_prof);

        
        $__internal_f682ded1831f3ab8eb40cde5b6bf9d979599d7fb9d2814df2b1d38024446ca39->leave($__internal_f682ded1831f3ab8eb40cde5b6bf9d979599d7fb9d2814df2b1d38024446ca39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dfddc536cb78a2d8842c9bc068eccff92c2c226e2fdd926c07d5ee085f213d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dfddc536cb78a2d8842c9bc068eccff92c2c226e2fdd926c07d5ee085f213d7->enter($__internal_4dfddc536cb78a2d8842c9bc068eccff92c2c226e2fdd926c07d5ee085f213d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b166388ef65fa122eef8387e28bc08901858814c41efb73a1fec681a85c7f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b166388ef65fa122eef8387e28bc08901858814c41efb73a1fec681a85c7f74->enter($__internal_3b166388ef65fa122eef8387e28bc08901858814c41efb73a1fec681a85c7f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3b166388ef65fa122eef8387e28bc08901858814c41efb73a1fec681a85c7f74->leave($__internal_3b166388ef65fa122eef8387e28bc08901858814c41efb73a1fec681a85c7f74_prof);

        
        $__internal_4dfddc536cb78a2d8842c9bc068eccff92c2c226e2fdd926c07d5ee085f213d7->leave($__internal_4dfddc536cb78a2d8842c9bc068eccff92c2c226e2fdd926c07d5ee085f213d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
