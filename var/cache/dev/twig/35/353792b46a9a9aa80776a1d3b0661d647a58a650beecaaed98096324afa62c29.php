<?php

/* Category/show.html.twig */
class __TwigTemplate_822948491ece2c8f0e06ae70e0ec3c6868a6fc55d6833b6fc38648d91d15fdfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Category/show.html.twig", 1);
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
        $__internal_2912d92c8417c3b7686a7e510c4b7db5c1805f60d559d33052b4691713bc9f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2912d92c8417c3b7686a7e510c4b7db5c1805f60d559d33052b4691713bc9f37->enter($__internal_2912d92c8417c3b7686a7e510c4b7db5c1805f60d559d33052b4691713bc9f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2912d92c8417c3b7686a7e510c4b7db5c1805f60d559d33052b4691713bc9f37->leave($__internal_2912d92c8417c3b7686a7e510c4b7db5c1805f60d559d33052b4691713bc9f37_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ebe639c93a96d05ebd04740158551a86f3b58e6b3233989b0bd02b4ce3eac27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebe639c93a96d05ebd04740158551a86f3b58e6b3233989b0bd02b4ce3eac27->enter($__internal_6ebe639c93a96d05ebd04740158551a86f3b58e6b3233989b0bd02b4ce3eac27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/category\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_6ebe639c93a96d05ebd04740158551a86f3b58e6b3233989b0bd02b4ce3eac27->leave($__internal_6ebe639c93a96d05ebd04740158551a86f3b58e6b3233989b0bd02b4ce3eac27_prof);

    }

    public function getTemplateName()
    {
        return "Category/show.html.twig";
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
                <p>{{category.name}}</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/category\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "Category/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Category/show.html.twig");
    }
}
