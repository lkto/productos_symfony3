<?php

/* PruebaBundle:Default:index.html.twig */
class __TwigTemplate_edd06f275a13d37559dfc8d73fc891d806d9a2abd42df2f9e3b11c259c0949e8 extends Twig_Template
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
        $__internal_0b9d73849dc2e510d5fed6bab975969be81c95bd3fe1e39d7a84c95f2fa96006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9d73849dc2e510d5fed6bab975969be81c95bd3fe1e39d7a84c95f2fa96006->enter($__internal_0b9d73849dc2e510d5fed6bab975969be81c95bd3fe1e39d7a84c95f2fa96006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0b9d73849dc2e510d5fed6bab975969be81c95bd3fe1e39d7a84c95f2fa96006->leave($__internal_0b9d73849dc2e510d5fed6bab975969be81c95bd3fe1e39d7a84c95f2fa96006_prof);

    }

    public function getTemplateName()
    {
        return "PruebaBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "PruebaBundle:Default:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/PruebaBundle/Resources/views/Default/index.html.twig");
    }
}
