<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_80bfe6283f73fe5597e31db3824e009a6a4926aa9947fbd20bb51fd6f0f1ed94 extends Twig_Template
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
        $__internal_01ec0831eb1256c6b047b194e6550e65115d43c4037c50db08c41d2b4cf2a574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ec0831eb1256c6b047b194e6550e65115d43c4037c50db08c41d2b4cf2a574->enter($__internal_01ec0831eb1256c6b047b194e6550e65115d43c4037c50db08c41d2b4cf2a574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_94567ef0e02f29ec6615f3429809b5b1ce2ea4c966afbf66ca60c1d4d7f26915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94567ef0e02f29ec6615f3429809b5b1ce2ea4c966afbf66ca60c1d4d7f26915->enter($__internal_94567ef0e02f29ec6615f3429809b5b1ce2ea4c966afbf66ca60c1d4d7f26915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_01ec0831eb1256c6b047b194e6550e65115d43c4037c50db08c41d2b4cf2a574->leave($__internal_01ec0831eb1256c6b047b194e6550e65115d43c4037c50db08c41d2b4cf2a574_prof);

        
        $__internal_94567ef0e02f29ec6615f3429809b5b1ce2ea4c966afbf66ca60c1d4d7f26915->leave($__internal_94567ef0e02f29ec6615f3429809b5b1ce2ea4c966afbf66ca60c1d4d7f26915_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit_content.html.twig");
    }
}
