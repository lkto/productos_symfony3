<?php

/* EmberBundle:Categoria:show.html.twig */
class __TwigTemplate_307452a7a7a015d865c5c2a70f537a0752a712a472b5604d0c94e8631af0052a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Categoria:show.html.twig", 1);
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
        $__internal_9b8456f2e506dbae1fff2ca83fb5181cd7777502919c41c8b2764046eb7ae3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8456f2e506dbae1fff2ca83fb5181cd7777502919c41c8b2764046eb7ae3b6->enter($__internal_9b8456f2e506dbae1fff2ca83fb5181cd7777502919c41c8b2764046eb7ae3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Categoria:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b8456f2e506dbae1fff2ca83fb5181cd7777502919c41c8b2764046eb7ae3b6->leave($__internal_9b8456f2e506dbae1fff2ca83fb5181cd7777502919c41c8b2764046eb7ae3b6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6992f337d06dd63b75f833afe108653d641f61b163cf4de5bb40fa0b2c873b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6992f337d06dd63b75f833afe108653d641f61b163cf4de5bb40fa0b2c873b04->enter($__internal_6992f337d06dd63b75f833afe108653d641f61b163cf4de5bb40fa0b2c873b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
     <li class=\"breadcrumb-item\">
          <a href=\"/categoria\">Categoria</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Detalles categoria</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles categoria</div>
      <div class=\"card-body\">
      
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categoria"] ?? $this->getContext($context, "categoria")), "nombre", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/categoria\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_6992f337d06dd63b75f833afe108653d641f61b163cf4de5bb40fa0b2c873b04->leave($__internal_6992f337d06dd63b75f833afe108653d641f61b163cf4de5bb40fa0b2c873b04_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Categoria:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  40 => 5,  34 => 4,  11 => 1,);
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
          <a href=\"/categoria\">Categoria</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Detalles categoria</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles categoria</div>
      <div class=\"card-body\">
      
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>{{categoria.nombre}}</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/categoria\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "EmberBundle:Categoria:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Categoria/show.html.twig");
    }
}
