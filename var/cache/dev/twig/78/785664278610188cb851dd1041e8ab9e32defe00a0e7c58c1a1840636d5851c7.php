<?php

/* EmberBundle:Marca:show.html.twig */
class __TwigTemplate_f0e81d9fea9a8943c42accb618805ea4895e2684cdc13523d0de613b200ed7d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Marca:show.html.twig", 1);
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
        $__internal_ab44802ce41adc0f76215b9e2c02dfbe1fd7959ce0dc2331a7b70e7765fddbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab44802ce41adc0f76215b9e2c02dfbe1fd7959ce0dc2331a7b70e7765fddbc0->enter($__internal_ab44802ce41adc0f76215b9e2c02dfbe1fd7959ce0dc2331a7b70e7765fddbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Marca:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab44802ce41adc0f76215b9e2c02dfbe1fd7959ce0dc2331a7b70e7765fddbc0->leave($__internal_ab44802ce41adc0f76215b9e2c02dfbe1fd7959ce0dc2331a7b70e7765fddbc0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_279546eaf1e7338c6570a2b59ac8947fc4a4b509fe6969b1367777e4225e52c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279546eaf1e7338c6570a2b59ac8947fc4a4b509fe6969b1367777e4225e52c0->enter($__internal_279546eaf1e7338c6570a2b59ac8947fc4a4b509fe6969b1367777e4225e52c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
     <li class=\"breadcrumb-item\">
          <a href=\"/marca\">Marca</a>
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["marca"] ?? $this->getContext($context, "marca")), "nombre", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_279546eaf1e7338c6570a2b59ac8947fc4a4b509fe6969b1367777e4225e52c0->leave($__internal_279546eaf1e7338c6570a2b59ac8947fc4a4b509fe6969b1367777e4225e52c0_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Marca:show.html.twig";
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
          <a href=\"/marca\">Marca</a>
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
                <p>{{marca.nombre}}</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      
       <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "EmberBundle:Marca:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Marca/show.html.twig");
    }
}
