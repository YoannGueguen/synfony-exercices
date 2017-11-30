<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d6d8bf321a7b87591a33bc98efee3737c3f1a5dbb11b9a4d4bb9c894567d6ea9 extends Twig_Template
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
        $__internal_b4ca46538bd3ad2ab340032a599fc7538e64fee3f27d390f5595095e55079c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ca46538bd3ad2ab340032a599fc7538e64fee3f27d390f5595095e55079c07->enter($__internal_b4ca46538bd3ad2ab340032a599fc7538e64fee3f27d390f5595095e55079c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_d2bf71c413f944ee7dec83394973c4049ec448489659caca878222f799475df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bf71c413f944ee7dec83394973c4049ec448489659caca878222f799475df3->enter($__internal_d2bf71c413f944ee7dec83394973c4049ec448489659caca878222f799475df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b4ca46538bd3ad2ab340032a599fc7538e64fee3f27d390f5595095e55079c07->leave($__internal_b4ca46538bd3ad2ab340032a599fc7538e64fee3f27d390f5595095e55079c07_prof);

        
        $__internal_d2bf71c413f944ee7dec83394973c4049ec448489659caca878222f799475df3->leave($__internal_d2bf71c413f944ee7dec83394973c4049ec448489659caca878222f799475df3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23fdfce751907352f908264f471c9c68375e54091d518635be9953aa32dcb020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fdfce751907352f908264f471c9c68375e54091d518635be9953aa32dcb020->enter($__internal_23fdfce751907352f908264f471c9c68375e54091d518635be9953aa32dcb020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf1224e766a119e1a5c5f0e640ab5b8229d2e898778a0ce12806a5d2f8f9757b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1224e766a119e1a5c5f0e640ab5b8229d2e898778a0ce12806a5d2f8f9757b->enter($__internal_bf1224e766a119e1a5c5f0e640ab5b8229d2e898778a0ce12806a5d2f8f9757b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bf1224e766a119e1a5c5f0e640ab5b8229d2e898778a0ce12806a5d2f8f9757b->leave($__internal_bf1224e766a119e1a5c5f0e640ab5b8229d2e898778a0ce12806a5d2f8f9757b_prof);

        
        $__internal_23fdfce751907352f908264f471c9c68375e54091d518635be9953aa32dcb020->leave($__internal_23fdfce751907352f908264f471c9c68375e54091d518635be9953aa32dcb020_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_81ed01647a7e2bd65f7d51301a96aefd6f2e1a5038c1e4465e0cc9caa1a30471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ed01647a7e2bd65f7d51301a96aefd6f2e1a5038c1e4465e0cc9caa1a30471->enter($__internal_81ed01647a7e2bd65f7d51301a96aefd6f2e1a5038c1e4465e0cc9caa1a30471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f3753600f21017af1c84604381d44818695c3ebafdd980ce9ce17634296cbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3753600f21017af1c84604381d44818695c3ebafdd980ce9ce17634296cbc0->enter($__internal_8f3753600f21017af1c84604381d44818695c3ebafdd980ce9ce17634296cbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8f3753600f21017af1c84604381d44818695c3ebafdd980ce9ce17634296cbc0->leave($__internal_8f3753600f21017af1c84604381d44818695c3ebafdd980ce9ce17634296cbc0_prof);

        
        $__internal_81ed01647a7e2bd65f7d51301a96aefd6f2e1a5038c1e4465e0cc9caa1a30471->leave($__internal_81ed01647a7e2bd65f7d51301a96aefd6f2e1a5038c1e4465e0cc9caa1a30471_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1aa8ff3c50586683ac1fac74b483fe2ecbab1b07cb154eb8470bd16bc80eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1aa8ff3c50586683ac1fac74b483fe2ecbab1b07cb154eb8470bd16bc80eab->enter($__internal_ff1aa8ff3c50586683ac1fac74b483fe2ecbab1b07cb154eb8470bd16bc80eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5272ee5e6dd75b0d83f19e3059016c506f1ae2fd7092825112063ea9e30d413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5272ee5e6dd75b0d83f19e3059016c506f1ae2fd7092825112063ea9e30d413e->enter($__internal_5272ee5e6dd75b0d83f19e3059016c506f1ae2fd7092825112063ea9e30d413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5272ee5e6dd75b0d83f19e3059016c506f1ae2fd7092825112063ea9e30d413e->leave($__internal_5272ee5e6dd75b0d83f19e3059016c506f1ae2fd7092825112063ea9e30d413e_prof);

        
        $__internal_ff1aa8ff3c50586683ac1fac74b483fe2ecbab1b07cb154eb8470bd16bc80eab->leave($__internal_ff1aa8ff3c50586683ac1fac74b483fe2ecbab1b07cb154eb8470bd16bc80eab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
