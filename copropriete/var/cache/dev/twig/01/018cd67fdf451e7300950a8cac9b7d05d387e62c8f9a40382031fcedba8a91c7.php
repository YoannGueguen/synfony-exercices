<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
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
        $__internal_1707952737544ce023bfd7ae73b888b103715564ed73bf81540254b8b787d47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1707952737544ce023bfd7ae73b888b103715564ed73bf81540254b8b787d47f->enter($__internal_1707952737544ce023bfd7ae73b888b103715564ed73bf81540254b8b787d47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_08fccae6ad5068093f693888ce885cc345320c159cd33db4026f4b253f06565b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fccae6ad5068093f693888ce885cc345320c159cd33db4026f4b253f06565b->enter($__internal_08fccae6ad5068093f693888ce885cc345320c159cd33db4026f4b253f06565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
    ";
        // line 11
        $this->loadTemplate("default/nav/menu.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "    ";
        $this->loadTemplate("default/nav/footer.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_1707952737544ce023bfd7ae73b888b103715564ed73bf81540254b8b787d47f->leave($__internal_1707952737544ce023bfd7ae73b888b103715564ed73bf81540254b8b787d47f_prof);

        
        $__internal_08fccae6ad5068093f693888ce885cc345320c159cd33db4026f4b253f06565b->leave($__internal_08fccae6ad5068093f693888ce885cc345320c159cd33db4026f4b253f06565b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4afd83d696f99e0ed845a476d2d9815a895c7511260652cc53d9e28813c4bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4afd83d696f99e0ed845a476d2d9815a895c7511260652cc53d9e28813c4bc3->enter($__internal_e4afd83d696f99e0ed845a476d2d9815a895c7511260652cc53d9e28813c4bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1254373aff1412489bfdd795ab24929460b5ae93d1f7a6e34b486585aff999b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1254373aff1412489bfdd795ab24929460b5ae93d1f7a6e34b486585aff999b->enter($__internal_a1254373aff1412489bfdd795ab24929460b5ae93d1f7a6e34b486585aff999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "clorporate";
        
        $__internal_a1254373aff1412489bfdd795ab24929460b5ae93d1f7a6e34b486585aff999b->leave($__internal_a1254373aff1412489bfdd795ab24929460b5ae93d1f7a6e34b486585aff999b_prof);

        
        $__internal_e4afd83d696f99e0ed845a476d2d9815a895c7511260652cc53d9e28813c4bc3->leave($__internal_e4afd83d696f99e0ed845a476d2d9815a895c7511260652cc53d9e28813c4bc3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_da6f706505c2995a8bbecfd1c2d83b05d5332a061cfd90940f72e4cf7df89b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6f706505c2995a8bbecfd1c2d83b05d5332a061cfd90940f72e4cf7df89b32->enter($__internal_da6f706505c2995a8bbecfd1c2d83b05d5332a061cfd90940f72e4cf7df89b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a04a8bb61f056437109e014a27376c963475456fb12f0ab798b18028d3895529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04a8bb61f056437109e014a27376c963475456fb12f0ab798b18028d3895529->enter($__internal_a04a8bb61f056437109e014a27376c963475456fb12f0ab798b18028d3895529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a04a8bb61f056437109e014a27376c963475456fb12f0ab798b18028d3895529->leave($__internal_a04a8bb61f056437109e014a27376c963475456fb12f0ab798b18028d3895529_prof);

        
        $__internal_da6f706505c2995a8bbecfd1c2d83b05d5332a061cfd90940f72e4cf7df89b32->leave($__internal_da6f706505c2995a8bbecfd1c2d83b05d5332a061cfd90940f72e4cf7df89b32_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e102f5b7587b45ad57112b7cb953a700a59fbb4f2b78aa9c2ef9eb4b54f1064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e102f5b7587b45ad57112b7cb953a700a59fbb4f2b78aa9c2ef9eb4b54f1064->enter($__internal_4e102f5b7587b45ad57112b7cb953a700a59fbb4f2b78aa9c2ef9eb4b54f1064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_063e86c5408ed0a6505fd1c5849eaa76c65f7169c2c3b253d2062800aa4f03fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063e86c5408ed0a6505fd1c5849eaa76c65f7169c2c3b253d2062800aa4f03fd->enter($__internal_063e86c5408ed0a6505fd1c5849eaa76c65f7169c2c3b253d2062800aa4f03fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_063e86c5408ed0a6505fd1c5849eaa76c65f7169c2c3b253d2062800aa4f03fd->leave($__internal_063e86c5408ed0a6505fd1c5849eaa76c65f7169c2c3b253d2062800aa4f03fd_prof);

        
        $__internal_4e102f5b7587b45ad57112b7cb953a700a59fbb4f2b78aa9c2ef9eb4b54f1064->leave($__internal_4e102f5b7587b45ad57112b7cb953a700a59fbb4f2b78aa9c2ef9eb4b54f1064_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 14,  93 => 12,  75 => 5,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}clorporate{% endblock %}</title>
        <link href=\"{{ asset('contents/css/site.css') }}\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('contents/css/bootstrap.css') }}\" rel=\"stylesheet\">
    </head>
    <body>
    {% include \"default/nav/menu.html.twig\" %}
        {% block body %}{% endblock %}
    {% include \"default/nav/footer.html.twig\" %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\app\\Resources\\views\\base.html.twig");
    }
}
