<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a1278650c05506634c3c4de2f22add4c021c2d2193b992ba8674a98b0a1b7938 extends Twig_Template
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
        $__internal_2c2952b47dbbc8a158c94a906048c96520a3f4746ea6f63d721012afde684e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2952b47dbbc8a158c94a906048c96520a3f4746ea6f63d721012afde684e4b->enter($__internal_2c2952b47dbbc8a158c94a906048c96520a3f4746ea6f63d721012afde684e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e09150ff75f1809f537194214704fa1e62fb26d54d35b11dcce07f010e418c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09150ff75f1809f537194214704fa1e62fb26d54d35b11dcce07f010e418c8c->enter($__internal_e09150ff75f1809f537194214704fa1e62fb26d54d35b11dcce07f010e418c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2c2952b47dbbc8a158c94a906048c96520a3f4746ea6f63d721012afde684e4b->leave($__internal_2c2952b47dbbc8a158c94a906048c96520a3f4746ea6f63d721012afde684e4b_prof);

        
        $__internal_e09150ff75f1809f537194214704fa1e62fb26d54d35b11dcce07f010e418c8c->leave($__internal_e09150ff75f1809f537194214704fa1e62fb26d54d35b11dcce07f010e418c8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\HTTP\\Projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
