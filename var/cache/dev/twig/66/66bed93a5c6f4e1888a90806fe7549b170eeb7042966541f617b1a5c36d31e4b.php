<?php

/* Products/show.html.twig */
class __TwigTemplate_4a9ab1e19e10b19797aba02b9ac317ec4f0cb9afecf5633dab39cd0200a8a80e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Products/show.html.twig", 1);
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
        $__internal_1539a86a1f98e8d3348f280ce119741545a8a6c85412421c055e7483b59b071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1539a86a1f98e8d3348f280ce119741545a8a6c85412421c055e7483b59b071d->enter($__internal_1539a86a1f98e8d3348f280ce119741545a8a6c85412421c055e7483b59b071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Products/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1539a86a1f98e8d3348f280ce119741545a8a6c85412421c055e7483b59b071d->leave($__internal_1539a86a1f98e8d3348f280ce119741545a8a6c85412421c055e7483b59b071d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_483c978daf0e97c1fb384af8c475995fbd0ce8e2c684f06242f2186842c6ccae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483c978daf0e97c1fb384af8c475995fbd0ce8e2c684f06242f2186842c6ccae->enter($__internal_483c978daf0e97c1fb384af8c475995fbd0ce8e2c684f06242f2186842c6ccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "



<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
     <li class=\"breadcrumb-item\">
          <a href=\"/\">Productos</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Detalles Productos</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles productos</div>
      <div class=\"card-body\">

          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Codigo</label>
                <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "code", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Descripcion</label>
                 <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Marca</label>
                 <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "brand", array()), "name", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Categoria</label>
                 <p>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "category", array()), "name", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Precio</label>
                 <p>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>
         
      
       <a href=\"/\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_483c978daf0e97c1fb384af8c475995fbd0ce8e2c684f06242f2186842c6ccae->leave($__internal_483c978daf0e97c1fb384af8c475995fbd0ce8e2c684f06242f2186842c6ccae_prof);

    }

    public function getTemplateName()
    {
        return "Products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 82,  120 => 71,  106 => 60,  92 => 49,  79 => 39,  66 => 29,  40 => 5,  34 => 4,  11 => 1,);
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
          <a href=\"/\">Productos</a>
        </li> 
        <li class=\"breadcrumb-item active\">
          Detalles Productos</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles productos</div>
      <div class=\"card-body\">

          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Codigo</label>
                <p>{{product.code}}</p>
              </div>
              
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>{{product.name}}</p>
              </div>
              
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Descripcion</label>
                 <p>{{product.description}}</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Marca</label>
                 <p>{{product.brand.name}}</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Categoria</label>
                 <p>{{product.category.name}}</p>
                
              </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Precio</label>
                 <p>{{product.price}}</p>
                
              </div>
            </div>
          </div>
         
      
       <a href=\"/\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "Products/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Products/show.html.twig");
    }
}
