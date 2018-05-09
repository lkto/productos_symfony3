<?php

/* EmberBundle:Productos:show.html.twig */
class __TwigTemplate_bdbc3164c6fc78c21c39d426d844ae51dc7a36cd17034ad8583fd253a72328ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:show.html.twig", 1);
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
        $__internal_6a74b65bec5c72ae973f11d882a2b321a165518a59fc72b42498abfd5ac79d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a74b65bec5c72ae973f11d882a2b321a165518a59fc72b42498abfd5ac79d18->enter($__internal_6a74b65bec5c72ae973f11d882a2b321a165518a59fc72b42498abfd5ac79d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a74b65bec5c72ae973f11d882a2b321a165518a59fc72b42498abfd5ac79d18->leave($__internal_6a74b65bec5c72ae973f11d882a2b321a165518a59fc72b42498abfd5ac79d18_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e11b33fdec5b3911f2bbd9a8e802342793db23d4c0b05eea28c0e79acf0674a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e11b33fdec5b3911f2bbd9a8e802342793db23d4c0b05eea28c0e79acf0674a->enter($__internal_0e11b33fdec5b3911f2bbd9a8e802342793db23d4c0b05eea28c0e79acf0674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <div class=\"card-header\">Detalles productos</div>
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
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_0e11b33fdec5b3911f2bbd9a8e802342793db23d4c0b05eea28c0e79acf0674a->leave($__internal_0e11b33fdec5b3911f2bbd9a8e802342793db23d4c0b05eea28c0e79acf0674a_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 69,  104 => 58,  90 => 47,  76 => 36,  63 => 26,  40 => 5,  34 => 4,  11 => 1,);
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
      <div class=\"card-header\">Detalles productos</div>
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
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "EmberBundle:Productos:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/show.html.twig");
    }
}
