<?php

/* Products/delete.html.twig */
class __TwigTemplate_218885c16f5c03c72c43d2f27f7a7c1053b1043f4ee9e232bcca4a650402bc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Products/delete.html.twig", 1);
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
        $__internal_97154e6a2d744b363e3713226312b0317287036f5ef039c4667e5c263a3484f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97154e6a2d744b363e3713226312b0317287036f5ef039c4667e5c263a3484f4->enter($__internal_97154e6a2d744b363e3713226312b0317287036f5ef039c4667e5c263a3484f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Products/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97154e6a2d744b363e3713226312b0317287036f5ef039c4667e5c263a3484f4->leave($__internal_97154e6a2d744b363e3713226312b0317287036f5ef039c4667e5c263a3484f4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f845f15fc0a22bfd81bfcc6be6a46ecbae50d05b2ffb3e71563c4760f82c5d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f845f15fc0a22bfd81bfcc6be6a46ecbae50d05b2ffb3e71563c4760f82c5d7d->enter($__internal_f845f15fc0a22bfd81bfcc6be6a46ecbae50d05b2ffb3e71563c4760f82c5d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
          Detalles Productos</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Eliminar producto</div>
      <div class=\"card-body\">
      
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Codigo</label>
                <p>";
        // line 26
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
        // line 36
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
        // line 46
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
        // line 57
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
        // line 68
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
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>
         
      
       <a href=\"/\" class=\"btn btn-primary \" > Regregar </a>
       <a href=\"/delete2/";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-danger \" > Eliminar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_f845f15fc0a22bfd81bfcc6be6a46ecbae50d05b2ffb3e71563c4760f82c5d7d->leave($__internal_f845f15fc0a22bfd81bfcc6be6a46ecbae50d05b2ffb3e71563c4760f82c5d7d_prof);

    }

    public function getTemplateName()
    {
        return "Products/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 87,  131 => 79,  117 => 68,  103 => 57,  89 => 46,  76 => 36,  63 => 26,  40 => 5,  34 => 4,  11 => 1,);
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
          Detalles Productos</li>
      </ol>
      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Eliminar producto</div>
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
       <a href=\"/delete2/{{product.id}}\" class=\"btn btn-danger \" > Eliminar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "Products/delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Products/delete.html.twig");
    }
}
