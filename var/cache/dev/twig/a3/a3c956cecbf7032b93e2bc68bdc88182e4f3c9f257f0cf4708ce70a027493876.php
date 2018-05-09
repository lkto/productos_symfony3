<?php

/* EmberBundle:Categoria:new.html.twig */
class __TwigTemplate_733e96cd074b8ea12ba8931866c4e0804d8e80546afc87ef5d466b75f3ec6fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Categoria:new.html.twig", 1);
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
        $__internal_2634b988170dbb514884588b902876a2b0a23e613d5d11ef49bf07ee8c5d4af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2634b988170dbb514884588b902876a2b0a23e613d5d11ef49bf07ee8c5d4af5->enter($__internal_2634b988170dbb514884588b902876a2b0a23e613d5d11ef49bf07ee8c5d4af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Categoria:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2634b988170dbb514884588b902876a2b0a23e613d5d11ef49bf07ee8c5d4af5->leave($__internal_2634b988170dbb514884588b902876a2b0a23e613d5d11ef49bf07ee8c5d4af5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2e8dd914eb619385a0fee3e944b77b275ab45bca95ddd2cf2742626fc75c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2e8dd914eb619385a0fee3e944b77b275ab45bca95ddd2cf2742626fc75c07->enter($__internal_0c2e8dd914eb619385a0fee3e944b77b275ab45bca95ddd2cf2742626fc75c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         Agregar Categoria</li>
      </ol>
      



<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Registrar categoria</div>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar categoria")));
        echo "
                    
                </div>
               
              </div>

              
            </div>
          </div>
        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "type" => "submit")));
        echo "
          <a href=\"/categoria\" class=\"btn btn-primary \" > Regregar </a>
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
        
        $__internal_0c2e8dd914eb619385a0fee3e944b77b275ab45bca95ddd2cf2742626fc75c07->leave($__internal_0c2e8dd914eb619385a0fee3e944b77b275ab45bca95ddd2cf2742626fc75c07_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Categoria:new.html.twig";
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
          <a href=\"/categoria\">Categoria</a>
        </li> 
        <li class=\"breadcrumb-item active\">
         Agregar Categoria</li>
      </ol>
      



<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Registrar categoria</div>
      <div class=\"card-body\">
      
      {{ form_start(form) }}
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-12\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.nombre, {'attr': {'class':'form-control' , 'placeholder':'Ingresar categoria'}}) }}
                    
                </div>
               
              </div>

              
            </div>
          </div>
        {{ form_widget(form.Guardar, {'attr': {'class':'btn btn-primary', 'type':'submit'}}) }}
          <a href=\"/categoria\" class=\"btn btn-primary \" > Regregar </a>
\t     {{ form_end(form) }}
      </div>
    </div>
  </div>


</div>
</div>

{% endblock %}", "EmberBundle:Categoria:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Categoria/new.html.twig");
    }
}
