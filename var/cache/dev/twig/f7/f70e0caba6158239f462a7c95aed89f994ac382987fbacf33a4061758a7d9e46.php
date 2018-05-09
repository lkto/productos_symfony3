<?php

/* EmberBundle:Productos:delete.html.twig */
class __TwigTemplate_119af15f1e67e35f4d027e6e2db0449e81ea16226c92ee7403f8839d6bb0e10d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:delete.html.twig", 1);
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
        $__internal_67f08ea9b76f6801ab78b73cad28d42b26508abb2cb8e3eae02530987058267a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f08ea9b76f6801ab78b73cad28d42b26508abb2cb8e3eae02530987058267a->enter($__internal_67f08ea9b76f6801ab78b73cad28d42b26508abb2cb8e3eae02530987058267a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f08ea9b76f6801ab78b73cad28d42b26508abb2cb8e3eae02530987058267a->leave($__internal_67f08ea9b76f6801ab78b73cad28d42b26508abb2cb8e3eae02530987058267a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_95306544804dd91d258313c80b894054b898e4bdbbedf207411e90ad35cfa6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95306544804dd91d258313c80b894054b898e4bdbbedf207411e90ad35cfa6ae->enter($__internal_95306544804dd91d258313c80b894054b898e4bdbbedf207411e90ad35cfa6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <label for=\"user\">Nombre</label>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["producto"] ?? $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Descripcion</label>
                 <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["producto"] ?? $this->getContext($context, "producto")), "descripcion", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Marca</label>
                 <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["producto"] ?? $this->getContext($context, "producto")), "marcaId", array()), "nombre", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Categoria</label>
                 <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["producto"] ?? $this->getContext($context, "producto")), "categoriaId", array()), "nombre", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Precio</label>
                 <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["producto"] ?? $this->getContext($context, "producto")), "precio", array()), "html", null, true);
        echo "</p>
                
              </div>
            </div>
          </div>
         
      
       <a href=\"/\" class=\"btn btn-primary \" > Regregar </a>
       <a href=\"/eliminar/";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["producto"] ?? $this->getContext($context, "producto")), "codigo", array()), "html", null, true);
        echo "\" class=\"btn btn-danger \" > Eliminar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_95306544804dd91d258313c80b894054b898e4bdbbedf207411e90ad35cfa6ae->leave($__internal_95306544804dd91d258313c80b894054b898e4bdbbedf207411e90ad35cfa6ae_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 77,  118 => 69,  104 => 58,  90 => 47,  76 => 36,  63 => 26,  40 => 5,  34 => 4,  11 => 1,);
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
                <label for=\"user\">Nombre</label>
                <p>{{producto.nombre}}</p>
              </div>
              
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Descripcion</label>
                 <p>{{producto.descripcion}}</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Marca</label>
                 <p>{{producto.marcaId.nombre}}</p>
                
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Categoria</label>
                 <p>{{producto.categoriaId.nombre}}</p>
                
              </div>
            </div>
          </div>
          
          <div class=\"form-group\">
            <div class=\"form-row\">
            <div class=\"col-md-12\">
              
                <label for=\"implemento\">Precio</label>
                 <p>{{producto.precio}}</p>
                
              </div>
            </div>
          </div>
         
      
       <a href=\"/\" class=\"btn btn-primary \" > Regregar </a>
       <a href=\"/eliminar/{{producto.codigo}}\" class=\"btn btn-danger \" > Eliminar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "EmberBundle:Productos:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/delete.html.twig");
    }
}
