<?php

/* EmberBundle:Productos:search.html.twig */
class __TwigTemplate_80216f3c423d942f97a310c05bd5df960189e50518c3ed84f587f7f6efad799f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:search.html.twig", 1);
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
        $__internal_518794521b70a8969e1e0fad1e12e40f9d2d98da4679569fccf6e6acd968d90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518794521b70a8969e1e0fad1e12e40f9d2d98da4679569fccf6e6acd968d90a->enter($__internal_518794521b70a8969e1e0fad1e12e40f9d2d98da4679569fccf6e6acd968d90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518794521b70a8969e1e0fad1e12e40f9d2d98da4679569fccf6e6acd968d90a->leave($__internal_518794521b70a8969e1e0fad1e12e40f9d2d98da4679569fccf6e6acd968d90a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d87af6bf40ef5e91dacf824f4f0ae046d869a7425a92d84d37a846f245380b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d87af6bf40ef5e91dacf824f4f0ae046d869a7425a92d84d37a846f245380b->enter($__internal_d2d87af6bf40ef5e91dacf824f4f0ae046d869a7425a92d84d37a846f245380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
     <li class=\"breadcrumb-item\">
          <a href=\"#\">Productos</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Buscar Productos</li>
      </ol>
      
El producto encontrada es  ";
        // line 17
        echo twig_escape_filter($this->env, ($context["producto"] ?? $this->getContext($context, "producto")), "html", null, true);
        echo "

</div>
</div>

";
        
        $__internal_d2d87af6bf40ef5e91dacf824f4f0ae046d869a7425a92d84d37a846f245380b->leave($__internal_d2d87af6bf40ef5e91dacf824f4f0ae046d869a7425a92d84d37a846f245380b_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
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

<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
     <li class=\"breadcrumb-item\">
          <a href=\"#\">Productos</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Buscar Productos</li>
      </ol>
      
El producto encontrada es  {{producto}}

</div>
</div>

{% endblock %}", "EmberBundle:Productos:search.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/search.html.twig");
    }
}
