<?php

/* EmberBundle:Default:redireccion.html.twig */
class __TwigTemplate_d6b407098e698a4f0fdec20456f3ecae32a693fa11e7d75a0a7f6b435001de3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Default:redireccion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5de0754ad5ef4c5644a5d75d4377924902f35b7e2b826d4d371f0b33aa456d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de0754ad5ef4c5644a5d75d4377924902f35b7e2b826d4d371f0b33aa456d1c->enter($__internal_5de0754ad5ef4c5644a5d75d4377924902f35b7e2b826d4d371f0b33aa456d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Default:redireccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de0754ad5ef4c5644a5d75d4377924902f35b7e2b826d4d371f0b33aa456d1c->leave($__internal_5de0754ad5ef4c5644a5d75d4377924902f35b7e2b826d4d371f0b33aa456d1c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb79f6955123b356d77b1ad71ca00177dee7d837519b305a5f6e6a0fe2ff22b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb79f6955123b356d77b1ad71ca00177dee7d837519b305a5f6e6a0fe2ff22b9->enter($__internal_fb79f6955123b356d77b1ad71ca00177dee7d837519b305a5f6e6a0fe2ff22b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "Redireccion

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ember_index");
        echo "\">Inicio</a>
";
        
        $__internal_fb79f6955123b356d77b1ad71ca00177dee7d837519b305a5f6e6a0fe2ff22b9->leave($__internal_fb79f6955123b356d77b1ad71ca00177dee7d837519b305a5f6e6a0fe2ff22b9_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Default:redireccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}


{% block body %}
Redireccion

<a href=\"{{ path('ember_index') }}\">Inicio</a>
{% endblock %}", "EmberBundle:Default:redireccion.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Default/redireccion.html.twig");
    }
}
