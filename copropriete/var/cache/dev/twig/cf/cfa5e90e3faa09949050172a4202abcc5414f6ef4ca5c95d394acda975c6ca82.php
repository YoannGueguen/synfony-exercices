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
        $__internal_3ec74877d4a138657d6da1491044cad654eb08a88e787e81cdd6cc471c7b2fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec74877d4a138657d6da1491044cad654eb08a88e787e81cdd6cc471c7b2fed->enter($__internal_3ec74877d4a138657d6da1491044cad654eb08a88e787e81cdd6cc471c7b2fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_fbde5a54a827aa8d66f32f93d3289fd5ce44093ef3c4d930ebaaad3693f213c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbde5a54a827aa8d66f32f93d3289fd5ce44093ef3c4d930ebaaad3693f213c0->enter($__internal_fbde5a54a827aa8d66f32f93d3289fd5ce44093ef3c4d930ebaaad3693f213c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3ec74877d4a138657d6da1491044cad654eb08a88e787e81cdd6cc471c7b2fed->leave($__internal_3ec74877d4a138657d6da1491044cad654eb08a88e787e81cdd6cc471c7b2fed_prof);

        
        $__internal_fbde5a54a827aa8d66f32f93d3289fd5ce44093ef3c4d930ebaaad3693f213c0->leave($__internal_fbde5a54a827aa8d66f32f93d3289fd5ce44093ef3c4d930ebaaad3693f213c0_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
