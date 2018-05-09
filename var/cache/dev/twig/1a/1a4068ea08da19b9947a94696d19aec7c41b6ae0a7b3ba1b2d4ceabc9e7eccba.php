<?php

/* EmberBundle:Marca:edit.html.twig */
class __TwigTemplate_c7dd673fc908222c90beffc4893e1140677111974c28546c2840d818513ff9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Marca:edit.html.twig", 1);
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
        $__internal_637923d852d35443e18e6d069a1c5bab0f7a58d4a5b7ef588b9603b68bd8cdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637923d852d35443e18e6d069a1c5bab0f7a58d4a5b7ef588b9603b68bd8cdaf->enter($__internal_637923d852d35443e18e6d069a1c5bab0f7a58d4a5b7ef588b9603b68bd8cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Marca:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637923d852d35443e18e6d069a1c5bab0f7a58d4a5b7ef588b9603b68bd8cdaf->leave($__internal_637923d852d35443e18e6d069a1c5bab0f7a58d4a5b7ef588b9603b68bd8cdaf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e28c7235fd841e83cabe27e2bbfe7954b2eb1459a012700c13bf05524ac19ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e28c7235fd841e83cabe27e2bbfe7954b2eb1459a012700c13bf05524ac19ef->enter($__internal_1e28c7235fd841e83cabe27e2bbfe7954b2eb1459a012700c13bf05524ac19ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         Editar Marcas</li>
      </ol>
      



<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar marca</div>
      <div class=\"card-body\">
      
      ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-12\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
        echo "
                    
                </div>
               
              </div>

              
            </div>
          </div>
        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "type" => "submit")));
        echo "
          <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
\t     ";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>


</div>
</div>

";
        
        $__internal_1e28c7235fd841e83cabe27e2bbfe7954b2eb1459a012700c13bf05524ac19ef->leave($__internal_1e28c7235fd841e83cabe27e2bbfe7954b2eb1459a012700c13bf05524ac19ef_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Marca:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  84 => 41,  72 => 32,  62 => 25,  40 => 5,  34 => 4,  11 => 1,);
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
         Editar Marcas</li>
      </ol>
      



<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar marca</div>
      <div class=\"card-body\">
      
      {{ form_start(form) }}
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-12\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.nombre, {'attr': {'class':'form-control' , 'placeholder':'Ingresar marca'}}) }}
                    
                </div>
               
              </div>

              
            </div>
          </div>
        {{ form_widget(form.Guardar, {'attr': {'class':'btn btn-primary', 'type':'submit'}}) }}
          <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
\t     {{ form_end(form) }}
      </div>
    </div>
  </div>


</div>
</div>

{% endblock %}", "EmberBundle:Marca:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Marca/edit.html.twig");
    }
}
