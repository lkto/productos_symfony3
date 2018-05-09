<?php

/* EmberBundle:Productos:create.html.twig */
class __TwigTemplate_a19f30252f43333b0677e59f006e2fe0e28cf3c6ad9cb00254016094599cd7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:create.html.twig", 1);
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
        $__internal_9b32c29f95cf4cdf61eb0d055869b5ceffb49bf5db3678c85959b2ca8aa7b123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b32c29f95cf4cdf61eb0d055869b5ceffb49bf5db3678c85959b2ca8aa7b123->enter($__internal_9b32c29f95cf4cdf61eb0d055869b5ceffb49bf5db3678c85959b2ca8aa7b123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b32c29f95cf4cdf61eb0d055869b5ceffb49bf5db3678c85959b2ca8aa7b123->leave($__internal_9b32c29f95cf4cdf61eb0d055869b5ceffb49bf5db3678c85959b2ca8aa7b123_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2657b887cf96cb77db66aadebbc3620c7046560e011f623cc4add786f48b7b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2657b887cf96cb77db66aadebbc3620c7046560e011f623cc4add786f48b7b3b->enter($__internal_2657b887cf96cb77db66aadebbc3620c7046560e011f623cc4add786f48b7b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
          Crear Productos</li>
      </ol>
      
Creada emprea ";
        // line 17
        echo twig_escape_filter($this->env, ($context["productos"] ?? $this->getContext($context, "productos")), "html", null, true);
        echo "

</div>
</div>

";
        
        $__internal_2657b887cf96cb77db66aadebbc3620c7046560e011f623cc4add786f48b7b3b->leave($__internal_2657b887cf96cb77db66aadebbc3620c7046560e011f623cc4add786f48b7b3b_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:create.html.twig";
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
          Crear Productos</li>
      </ol>
      
Creada emprea {{productos}}

</div>
</div>

{% endblock %}", "EmberBundle:Productos:create.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/create.html.twig");
    }
}
