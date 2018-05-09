<?php

/* EmberBundle:Eventos:all.html.twig */
class __TwigTemplate_032c344fe50395ed14a56713b6c747be83c3998145fa1fef228f3d655baed781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Eventos:all.html.twig", 1);
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
        $__internal_a6990633ef20f825c197664514bc74be4cbc98e1de8a49866da35aca865ccbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6990633ef20f825c197664514bc74be4cbc98e1de8a49866da35aca865ccbd4->enter($__internal_a6990633ef20f825c197664514bc74be4cbc98e1de8a49866da35aca865ccbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Eventos:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6990633ef20f825c197664514bc74be4cbc98e1de8a49866da35aca865ccbd4->leave($__internal_a6990633ef20f825c197664514bc74be4cbc98e1de8a49866da35aca865ccbd4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ac8f0bfa8893a21aa294f84691e0d8a79f2c8f638c40620f9cd6de86c7ded5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac8f0bfa8893a21aa294f84691e0d8a79f2c8f638c40620f9cd6de86c7ded5e->enter($__internal_3ac8f0bfa8893a21aa294f84691e0d8a79f2c8f638c40620f9cd6de86c7ded5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Eventos</li>
      </ol>
      
Todos los eventos

</div>
</div>

";
        
        $__internal_3ac8f0bfa8893a21aa294f84691e0d8a79f2c8f638c40620f9cd6de86c7ded5e->leave($__internal_3ac8f0bfa8893a21aa294f84691e0d8a79f2c8f638c40620f9cd6de86c7ded5e_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Eventos:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
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
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Eventos</li>
      </ol>
      
Todos los eventos

</div>
</div>

{% endblock %}", "EmberBundle:Eventos:all.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Eventos/all.html.twig");
    }
}
