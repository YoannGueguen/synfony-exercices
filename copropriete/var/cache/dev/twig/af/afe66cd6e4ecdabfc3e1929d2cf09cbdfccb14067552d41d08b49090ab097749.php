<?php

/* ::base.html.twig */
class __TwigTemplate_62a34b8c5e10f0b3b2f6cbc742bb3d39aefb614b3bbc5e8143329982fe7cdfb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c990886d63e0f01be5393cdbd1c8781954fc6ac5b3c976d89a1b94ec9d632aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c990886d63e0f01be5393cdbd1c8781954fc6ac5b3c976d89a1b94ec9d632aa->enter($__internal_2c990886d63e0f01be5393cdbd1c8781954fc6ac5b3c976d89a1b94ec9d632aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_62c16b013bededd6cf3369364e12edbf55fd7d021aa293a26fcca149088fb186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c16b013bededd6cf3369364e12edbf55fd7d021aa293a26fcca149088fb186->enter($__internal_62c16b013bededd6cf3369364e12edbf55fd7d021aa293a26fcca149088fb186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/css/site.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 10
        $this->loadTemplate("default/nav/menu.html.twig", "::base.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    ";
        $this->loadTemplate("default/nav/footer.html.twig", "::base.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_2c990886d63e0f01be5393cdbd1c8781954fc6ac5b3c976d89a1b94ec9d632aa->leave($__internal_2c990886d63e0f01be5393cdbd1c8781954fc6ac5b3c976d89a1b94ec9d632aa_prof);

        
        $__internal_62c16b013bededd6cf3369364e12edbf55fd7d021aa293a26fcca149088fb186->leave($__internal_62c16b013bededd6cf3369364e12edbf55fd7d021aa293a26fcca149088fb186_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc60569c95231ef621ff3b9070855815833a56169eb0f97aa2c4cbeca66f57dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc60569c95231ef621ff3b9070855815833a56169eb0f97aa2c4cbeca66f57dc->enter($__internal_cc60569c95231ef621ff3b9070855815833a56169eb0f97aa2c4cbeca66f57dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2926132fda4e9f36d43a513e7c168813605dcf70bc55b95f910fc349019e6721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2926132fda4e9f36d43a513e7c168813605dcf70bc55b95f910fc349019e6721->enter($__internal_2926132fda4e9f36d43a513e7c168813605dcf70bc55b95f910fc349019e6721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2926132fda4e9f36d43a513e7c168813605dcf70bc55b95f910fc349019e6721->leave($__internal_2926132fda4e9f36d43a513e7c168813605dcf70bc55b95f910fc349019e6721_prof);

        
        $__internal_cc60569c95231ef621ff3b9070855815833a56169eb0f97aa2c4cbeca66f57dc->leave($__internal_cc60569c95231ef621ff3b9070855815833a56169eb0f97aa2c4cbeca66f57dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a54dce4b1ad849fba2b701f75215732cf7a35c6e1e7343e3d3ad9fe67032a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a54dce4b1ad849fba2b701f75215732cf7a35c6e1e7343e3d3ad9fe67032a07->enter($__internal_3a54dce4b1ad849fba2b701f75215732cf7a35c6e1e7343e3d3ad9fe67032a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8ff007074c9a6d8ce271630db4ffc25864458db12b35251a07971633519bda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ff007074c9a6d8ce271630db4ffc25864458db12b35251a07971633519bda7->enter($__internal_a8ff007074c9a6d8ce271630db4ffc25864458db12b35251a07971633519bda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8ff007074c9a6d8ce271630db4ffc25864458db12b35251a07971633519bda7->leave($__internal_a8ff007074c9a6d8ce271630db4ffc25864458db12b35251a07971633519bda7_prof);

        
        $__internal_3a54dce4b1ad849fba2b701f75215732cf7a35c6e1e7343e3d3ad9fe67032a07->leave($__internal_3a54dce4b1ad849fba2b701f75215732cf7a35c6e1e7343e3d3ad9fe67032a07_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd5114d3c2967b6e4b12cba241290dc091024cd4623ce656a33cad528a2bf153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5114d3c2967b6e4b12cba241290dc091024cd4623ce656a33cad528a2bf153->enter($__internal_cd5114d3c2967b6e4b12cba241290dc091024cd4623ce656a33cad528a2bf153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e16706ea7bf40cb4a5223c4e222c7331a63def79a5b5fefcb5d205c8654fa4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e16706ea7bf40cb4a5223c4e222c7331a63def79a5b5fefcb5d205c8654fa4b->enter($__internal_3e16706ea7bf40cb4a5223c4e222c7331a63def79a5b5fefcb5d205c8654fa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e16706ea7bf40cb4a5223c4e222c7331a63def79a5b5fefcb5d205c8654fa4b->leave($__internal_3e16706ea7bf40cb4a5223c4e222c7331a63def79a5b5fefcb5d205c8654fa4b_prof);

        
        $__internal_cd5114d3c2967b6e4b12cba241290dc091024cd4623ce656a33cad528a2bf153->leave($__internal_cd5114d3c2967b6e4b12cba241290dc091024cd4623ce656a33cad528a2bf153_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 13,  89 => 11,  71 => 5,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"{{ asset('contents/css/site.css') }}\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% include \"default/nav/menu.html.twig\" %}
        {% block body %}{% endblock %}
    {% include \"default/nav/footer.html.twig\" %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\app/Resources\\views/base.html.twig");
    }
}
