<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_cedc1ef17d2e8a9438da5b5b81a5993ba1634475e47a97f087fdc85792482e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedc1ef17d2e8a9438da5b5b81a5993ba1634475e47a97f087fdc85792482e18->enter($__internal_cedc1ef17d2e8a9438da5b5b81a5993ba1634475e47a97f087fdc85792482e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_37dfafdd6f827dfe1de64ae3bb46f70cb0b8c35a92f4f712e0651a0105f1fcc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dfafdd6f827dfe1de64ae3bb46f70cb0b8c35a92f4f712e0651a0105f1fcc1->enter($__internal_37dfafdd6f827dfe1de64ae3bb46f70cb0b8c35a92f4f712e0651a0105f1fcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedc1ef17d2e8a9438da5b5b81a5993ba1634475e47a97f087fdc85792482e18->leave($__internal_cedc1ef17d2e8a9438da5b5b81a5993ba1634475e47a97f087fdc85792482e18_prof);

        
        $__internal_37dfafdd6f827dfe1de64ae3bb46f70cb0b8c35a92f4f712e0651a0105f1fcc1->leave($__internal_37dfafdd6f827dfe1de64ae3bb46f70cb0b8c35a92f4f712e0651a0105f1fcc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be75dc36dc2832010e3e558f1ce1fc09ee56a05ee52280fd92ddeb9834ddc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be75dc36dc2832010e3e558f1ce1fc09ee56a05ee52280fd92ddeb9834ddc74->enter($__internal_1be75dc36dc2832010e3e558f1ce1fc09ee56a05ee52280fd92ddeb9834ddc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_115cc12d8bf888ce3ef8631babe0f9aa6581814dc987fc00888834d93e7a0c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115cc12d8bf888ce3ef8631babe0f9aa6581814dc987fc00888834d93e7a0c30->enter($__internal_115cc12d8bf888ce3ef8631babe0f9aa6581814dc987fc00888834d93e7a0c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_115cc12d8bf888ce3ef8631babe0f9aa6581814dc987fc00888834d93e7a0c30->leave($__internal_115cc12d8bf888ce3ef8631babe0f9aa6581814dc987fc00888834d93e7a0c30_prof);

        
        $__internal_1be75dc36dc2832010e3e558f1ce1fc09ee56a05ee52280fd92ddeb9834ddc74->leave($__internal_1be75dc36dc2832010e3e558f1ce1fc09ee56a05ee52280fd92ddeb9834ddc74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_885633d01a407d569f7b3c95cd9be7140db2ae5ffcdf7e93a550620b470ab979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885633d01a407d569f7b3c95cd9be7140db2ae5ffcdf7e93a550620b470ab979->enter($__internal_885633d01a407d569f7b3c95cd9be7140db2ae5ffcdf7e93a550620b470ab979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06c583b84dbeebea94a0297b2544ad3d5bf73b5fa48d992211928943f12e0d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c583b84dbeebea94a0297b2544ad3d5bf73b5fa48d992211928943f12e0d50->enter($__internal_06c583b84dbeebea94a0297b2544ad3d5bf73b5fa48d992211928943f12e0d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06c583b84dbeebea94a0297b2544ad3d5bf73b5fa48d992211928943f12e0d50->leave($__internal_06c583b84dbeebea94a0297b2544ad3d5bf73b5fa48d992211928943f12e0d50_prof);

        
        $__internal_885633d01a407d569f7b3c95cd9be7140db2ae5ffcdf7e93a550620b470ab979->leave($__internal_885633d01a407d569f7b3c95cd9be7140db2ae5ffcdf7e93a550620b470ab979_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
