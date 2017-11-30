<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58545b644cdf143f0aab679e984b4171d18228e03e7f2c46a8fc73ce372e53e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58545b644cdf143f0aab679e984b4171d18228e03e7f2c46a8fc73ce372e53e5->enter($__internal_58545b644cdf143f0aab679e984b4171d18228e03e7f2c46a8fc73ce372e53e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eec10940a0085176133f91a933b63694544652beaf83c1d49eab0ef65316060e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec10940a0085176133f91a933b63694544652beaf83c1d49eab0ef65316060e->enter($__internal_eec10940a0085176133f91a933b63694544652beaf83c1d49eab0ef65316060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_58545b644cdf143f0aab679e984b4171d18228e03e7f2c46a8fc73ce372e53e5->leave($__internal_58545b644cdf143f0aab679e984b4171d18228e03e7f2c46a8fc73ce372e53e5_prof);

        
        $__internal_eec10940a0085176133f91a933b63694544652beaf83c1d49eab0ef65316060e->leave($__internal_eec10940a0085176133f91a933b63694544652beaf83c1d49eab0ef65316060e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1d840dacdf3929e5697fde8854b4dcd6e7f76e53fd268e93715edbadae99688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d840dacdf3929e5697fde8854b4dcd6e7f76e53fd268e93715edbadae99688->enter($__internal_f1d840dacdf3929e5697fde8854b4dcd6e7f76e53fd268e93715edbadae99688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc72f957c4707a157ce893b384e78557f4c3479caa6f3375e712a4e7522121ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc72f957c4707a157ce893b384e78557f4c3479caa6f3375e712a4e7522121ff->enter($__internal_fc72f957c4707a157ce893b384e78557f4c3479caa6f3375e712a4e7522121ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc72f957c4707a157ce893b384e78557f4c3479caa6f3375e712a4e7522121ff->leave($__internal_fc72f957c4707a157ce893b384e78557f4c3479caa6f3375e712a4e7522121ff_prof);

        
        $__internal_f1d840dacdf3929e5697fde8854b4dcd6e7f76e53fd268e93715edbadae99688->leave($__internal_f1d840dacdf3929e5697fde8854b4dcd6e7f76e53fd268e93715edbadae99688_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc400c6834481cbecb29f7f358d2b4dc4aabac7e6a2a886b9e9122f6d04ae55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc400c6834481cbecb29f7f358d2b4dc4aabac7e6a2a886b9e9122f6d04ae55f->enter($__internal_dc400c6834481cbecb29f7f358d2b4dc4aabac7e6a2a886b9e9122f6d04ae55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1cf265e088e0fea22c0c9b9a483c8f1bb4997a86b52804a685c85f07271bf6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf265e088e0fea22c0c9b9a483c8f1bb4997a86b52804a685c85f07271bf6ef->enter($__internal_1cf265e088e0fea22c0c9b9a483c8f1bb4997a86b52804a685c85f07271bf6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1cf265e088e0fea22c0c9b9a483c8f1bb4997a86b52804a685c85f07271bf6ef->leave($__internal_1cf265e088e0fea22c0c9b9a483c8f1bb4997a86b52804a685c85f07271bf6ef_prof);

        
        $__internal_dc400c6834481cbecb29f7f358d2b4dc4aabac7e6a2a886b9e9122f6d04ae55f->leave($__internal_dc400c6834481cbecb29f7f358d2b4dc4aabac7e6a2a886b9e9122f6d04ae55f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dd27b19782409497fcafbca3fd8b63b9622a3f049928f60cd2ecdef2b1fa1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd27b19782409497fcafbca3fd8b63b9622a3f049928f60cd2ecdef2b1fa1c4->enter($__internal_3dd27b19782409497fcafbca3fd8b63b9622a3f049928f60cd2ecdef2b1fa1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bebc53eea87d9a9ace9de2633771188617975f8882f7ac9be3fec742365126c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bebc53eea87d9a9ace9de2633771188617975f8882f7ac9be3fec742365126c->enter($__internal_1bebc53eea87d9a9ace9de2633771188617975f8882f7ac9be3fec742365126c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1bebc53eea87d9a9ace9de2633771188617975f8882f7ac9be3fec742365126c->leave($__internal_1bebc53eea87d9a9ace9de2633771188617975f8882f7ac9be3fec742365126c_prof);

        
        $__internal_3dd27b19782409497fcafbca3fd8b63b9622a3f049928f60cd2ecdef2b1fa1c4->leave($__internal_3dd27b19782409497fcafbca3fd8b63b9622a3f049928f60cd2ecdef2b1fa1c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
