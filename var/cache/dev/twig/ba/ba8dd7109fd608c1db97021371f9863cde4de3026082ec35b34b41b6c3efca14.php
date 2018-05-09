<?php

/* EmberBundle:Marca:new.html.twig */
class __TwigTemplate_5ad5ab1f61c16d5b2a24fc42c73ff3784a26c960bde2772af9feb4d3b8803ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Marca:new.html.twig", 1);
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
        $__internal_1ddaf8268b430264a6e1ae0eccaed85f71aa8a4360a31b8e70f72b4dab0f503e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddaf8268b430264a6e1ae0eccaed85f71aa8a4360a31b8e70f72b4dab0f503e->enter($__internal_1ddaf8268b430264a6e1ae0eccaed85f71aa8a4360a31b8e70f72b4dab0f503e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Marca:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ddaf8268b430264a6e1ae0eccaed85f71aa8a4360a31b8e70f72b4dab0f503e->leave($__internal_1ddaf8268b430264a6e1ae0eccaed85f71aa8a4360a31b8e70f72b4dab0f503e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_674f697e66d975a080a1abb4140a40354d1e8e757b46991b0a509afe51fa5e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674f697e66d975a080a1abb4140a40354d1e8e757b46991b0a509afe51fa5e7f->enter($__internal_674f697e66d975a080a1abb4140a40354d1e8e757b46991b0a509afe51fa5e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         Agregar Marcas</li>
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
      <div class=\"card-header\">Registrar marca</div>
      <div class=\"card-body\">
      
      ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-12\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
        echo "
                    
                </div>
               
              </div>

              
            </div>
          </div>
        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "type" => "submit")));
        echo "
          <a href=\"/marca\" class=\"btn btn-primary \" > Regregar </a>
\t     ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>


</div>
</div>

";
        
        $__internal_674f697e66d975a080a1abb4140a40354d1e8e757b46991b0a509afe51fa5e7f->leave($__internal_674f697e66d975a080a1abb4140a40354d1e8e757b46991b0a509afe51fa5e7f_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Marca:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  101 => 45,  89 => 36,  79 => 29,  70 => 22,  61 => 19,  58 => 18,  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
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
         Agregar Marcas</li>
      </ol>
      
{% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}


<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Registrar marca</div>
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

{% endblock %}", "EmberBundle:Marca:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Marca/new.html.twig");
    }
}
