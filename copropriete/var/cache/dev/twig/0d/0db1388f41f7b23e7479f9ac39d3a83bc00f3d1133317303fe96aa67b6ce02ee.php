<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d30d6cfdeb9426039466a33c6a4d8fa265ee5379aac5dd08ce26690038b3d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33ed9c36ecb3ee3ca3d5d4b012a895ba2ea234fb754d04e2920c040c953f777e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ed9c36ecb3ee3ca3d5d4b012a895ba2ea234fb754d04e2920c040c953f777e->enter($__internal_33ed9c36ecb3ee3ca3d5d4b012a895ba2ea234fb754d04e2920c040c953f777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b439d90db8ed53ab36e2c6d85d267dc47f4a507f16ee7e2176539ed68cce8a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b439d90db8ed53ab36e2c6d85d267dc47f4a507f16ee7e2176539ed68cce8a08->enter($__internal_b439d90db8ed53ab36e2c6d85d267dc47f4a507f16ee7e2176539ed68cce8a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_33ed9c36ecb3ee3ca3d5d4b012a895ba2ea234fb754d04e2920c040c953f777e->leave($__internal_33ed9c36ecb3ee3ca3d5d4b012a895ba2ea234fb754d04e2920c040c953f777e_prof);

        
        $__internal_b439d90db8ed53ab36e2c6d85d267dc47f4a507f16ee7e2176539ed68cce8a08->leave($__internal_b439d90db8ed53ab36e2c6d85d267dc47f4a507f16ee7e2176539ed68cce8a08_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3c56ff9dcc1c79f263587cd0603b09c20c347129fef31eb76b74462bff27657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c56ff9dcc1c79f263587cd0603b09c20c347129fef31eb76b74462bff27657->enter($__internal_e3c56ff9dcc1c79f263587cd0603b09c20c347129fef31eb76b74462bff27657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_102b149a6f68de8012ab954d879de254808e59e6e0c8884eafeaee0f7c91e8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102b149a6f68de8012ab954d879de254808e59e6e0c8884eafeaee0f7c91e8bd->enter($__internal_102b149a6f68de8012ab954d879de254808e59e6e0c8884eafeaee0f7c91e8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_102b149a6f68de8012ab954d879de254808e59e6e0c8884eafeaee0f7c91e8bd->leave($__internal_102b149a6f68de8012ab954d879de254808e59e6e0c8884eafeaee0f7c91e8bd_prof);

        
        $__internal_e3c56ff9dcc1c79f263587cd0603b09c20c347129fef31eb76b74462bff27657->leave($__internal_e3c56ff9dcc1c79f263587cd0603b09c20c347129fef31eb76b74462bff27657_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
