<?php

/* Brand/show.html.twig */
class __TwigTemplate_e2a57ffbead3ea337a1ff1251885d38d8fd43e637b1689c9c12054d37333f03b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Brand/show.html.twig", 1);
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
        $__internal_d1aecda6592b2eb2b8ca3cb3dc164b6a22ae3bf956528154e7c77b4fd0cde576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1aecda6592b2eb2b8ca3cb3dc164b6a22ae3bf956528154e7c77b4fd0cde576->enter($__internal_d1aecda6592b2eb2b8ca3cb3dc164b6a22ae3bf956528154e7c77b4fd0cde576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Brand/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1aecda6592b2eb2b8ca3cb3dc164b6a22ae3bf956528154e7c77b4fd0cde576->leave($__internal_d1aecda6592b2eb2b8ca3cb3dc164b6a22ae3bf956528154e7c77b4fd0cde576_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b0fbdd53e2ad526cbed2b4cc5c69690a07d477b7fdb9bf678009fdbaaa6a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b0fbdd53e2ad526cbed2b4cc5c69690a07d477b7fdb9bf678009fdbaaa6a47->enter($__internal_99b0fbdd53e2ad526cbed2b4cc5c69690a07d477b7fdb9bf678009fdbaaa6a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
     <li class=\"breadcrumb-item\">
          <a href=\"/brand\">Marca</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Detalles marca</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles marca</div>
      <div class=\"card-body\">
      
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["brand"] ?? $this->getContext($context, "brand")), "name", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/brand\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_99b0fbdd53e2ad526cbed2b4cc5c69690a07d477b7fdb9bf678009fdbaaa6a47->leave($__internal_99b0fbdd53e2ad526cbed2b4cc5c69690a07d477b7fdb9bf678009fdbaaa6a47_prof);

    }

    public function getTemplateName()
    {
        return "Brand/show.html.twig";
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
          <a href=\"/brand\">Marca</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Detalles marca</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles marca</div>
      <div class=\"card-body\">
      
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>{{brand.name}}</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/brand\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "Brand/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Brand/show.html.twig");
    }
}
