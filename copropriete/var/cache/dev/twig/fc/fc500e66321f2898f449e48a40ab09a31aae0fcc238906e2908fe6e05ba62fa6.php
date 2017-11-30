<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fb10407335196a932bff325691d154db9990813425fc19f532b3227c4db42927 extends Twig_Template
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
        $__internal_a8fc00a46a90af4ad4f1576fd43120d7e80010c5961aff6a29ee6fcabeca0b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fc00a46a90af4ad4f1576fd43120d7e80010c5961aff6a29ee6fcabeca0b10->enter($__internal_a8fc00a46a90af4ad4f1576fd43120d7e80010c5961aff6a29ee6fcabeca0b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ba167dbdc47bc6248d5740ba19b39c44a0b7eca06603347a97251c36ee3e1097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba167dbdc47bc6248d5740ba19b39c44a0b7eca06603347a97251c36ee3e1097->enter($__internal_ba167dbdc47bc6248d5740ba19b39c44a0b7eca06603347a97251c36ee3e1097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_a8fc00a46a90af4ad4f1576fd43120d7e80010c5961aff6a29ee6fcabeca0b10->leave($__internal_a8fc00a46a90af4ad4f1576fd43120d7e80010c5961aff6a29ee6fcabeca0b10_prof);

        
        $__internal_ba167dbdc47bc6248d5740ba19b39c44a0b7eca06603347a97251c36ee3e1097->leave($__internal_ba167dbdc47bc6248d5740ba19b39c44a0b7eca06603347a97251c36ee3e1097_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
