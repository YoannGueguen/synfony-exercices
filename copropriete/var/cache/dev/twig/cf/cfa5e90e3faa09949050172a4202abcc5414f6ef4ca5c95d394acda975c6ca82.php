<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_605113dc16a680cde5e2b104ef63349dfd6bad748ab191d4f45ffbc3a8c3c1ac extends Twig_Template
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
        $__internal_53343a479dc839baa4620013fc09ca2de94e8593e1203f1859af2981caefb802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53343a479dc839baa4620013fc09ca2de94e8593e1203f1859af2981caefb802->enter($__internal_53343a479dc839baa4620013fc09ca2de94e8593e1203f1859af2981caefb802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_673ae8715934368766b5af3c696e7d326ccc1668c69082d4b174862de66feb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673ae8715934368766b5af3c696e7d326ccc1668c69082d4b174862de66feb17->enter($__internal_673ae8715934368766b5af3c696e7d326ccc1668c69082d4b174862de66feb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_53343a479dc839baa4620013fc09ca2de94e8593e1203f1859af2981caefb802->leave($__internal_53343a479dc839baa4620013fc09ca2de94e8593e1203f1859af2981caefb802_prof);

        
        $__internal_673ae8715934368766b5af3c696e7d326ccc1668c69082d4b174862de66feb17->leave($__internal_673ae8715934368766b5af3c696e7d326ccc1668c69082d4b174862de66feb17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
