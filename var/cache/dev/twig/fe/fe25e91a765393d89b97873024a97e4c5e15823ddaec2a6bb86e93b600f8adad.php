<?php

/* EmberBundle:Marca:delete.html.twig */
class __TwigTemplate_011d1929aa6b7eede8fb8abfb28d18660cc3049df3f5f7dbaac1c60d09843581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Marca:delete.html.twig", 1);
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
        $__internal_ecffbedc3fcfcbe7406f33d9c6245793b4145ed548ecb2b7a0459c9aef558bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecffbedc3fcfcbe7406f33d9c6245793b4145ed548ecb2b7a0459c9aef558bfa->enter($__internal_ecffbedc3fcfcbe7406f33d9c6245793b4145ed548ecb2b7a0459c9aef558bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Marca:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecffbedc3fcfcbe7406f33d9c6245793b4145ed548ecb2b7a0459c9aef558bfa->leave($__internal_ecffbedc3fcfcbe7406f33d9c6245793b4145ed548ecb2b7a0459c9aef558bfa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f81504ef2431d52f8ef2a23325bf99b8dde2acf98bc7dd19e98968178dae443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f81504ef2431d52f8ef2a23325bf99b8dde2acf98bc7dd19e98968178dae443->enter($__internal_3f81504ef2431d52f8ef2a23325bf99b8dde2acf98bc7dd19e98968178dae443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Detalles marca</div>
      <div class=\"card-body\">
      
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-12\">
                <label for=\"user\">Nombre</label>
                <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["marca"] ?? $this->getContext($context, "marca")), "nombre", array()), "html", null, true);
        echo "</p>
              </div>
              
            </div>
          </div>
          

          

          
         
      <a href=\"/marca/eliminar/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["marca"] ?? $this->getContext($context, "marca")), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-danger \" > Eliminar </a>
       <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

";
        
        $__internal_3f81504ef2431d52f8ef2a23325bf99b8dde2acf98bc7dd19e98968178dae443->leave($__internal_3f81504ef2431d52f8ef2a23325bf99b8dde2acf98bc7dd19e98968178dae443_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Marca:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  82 => 32,  70 => 22,  61 => 19,  58 => 18,  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
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
      
{% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}
      
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
          

          

          
         
      <a href=\"/marca/eliminar/{{marca.id}}\" class=\"btn btn-danger \" > Eliminar </a>
       <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
      </div>
    </div>
  </div>

</div>
</div>

{% endblock %}", "EmberBundle:Marca:delete.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Marca/delete.html.twig");
    }
}
