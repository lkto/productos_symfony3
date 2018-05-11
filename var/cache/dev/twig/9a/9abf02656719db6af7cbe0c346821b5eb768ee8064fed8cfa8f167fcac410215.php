<?php

/* Brand/edit.html.twig */
class __TwigTemplate_d87f83577350b9b34cf7da5c8e6578544a525ed7d855178c0ec87c6e41303e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Brand/edit.html.twig", 1);
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
        $__internal_3b41c339544374ec04273b176187e541e487cb6cfefeafdafa0622367436caf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b41c339544374ec04273b176187e541e487cb6cfefeafdafa0622367436caf7->enter($__internal_3b41c339544374ec04273b176187e541e487cb6cfefeafdafa0622367436caf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Brand/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b41c339544374ec04273b176187e541e487cb6cfefeafdafa0622367436caf7->leave($__internal_3b41c339544374ec04273b176187e541e487cb6cfefeafdafa0622367436caf7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9a09d70e7511f7ecbf5555573f5b504a6aa9d8ead569eae36c2e7385cc0a7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a09d70e7511f7ecbf5555573f5b504a6aa9d8ead569eae36c2e7385cc0a7a6->enter($__internal_f9a09d70e7511f7ecbf5555573f5b504a6aa9d8ead569eae36c2e7385cc0a7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar marca</div>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
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
        
        $__internal_f9a09d70e7511f7ecbf5555573f5b504a6aa9d8ead569eae36c2e7385cc0a7a6->leave($__internal_f9a09d70e7511f7ecbf5555573f5b504a6aa9d8ead569eae36c2e7385cc0a7a6_prof);

    }

    public function getTemplateName()
    {
        return "Brand/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  101 => 45,  89 => 36,  79 => 29,  71 => 23,  62 => 20,  59 => 19,  55 => 18,  40 => 5,  34 => 4,  11 => 1,);
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
      

{% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}

<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar marca</div>
      <div class=\"card-body\">
      
      {{ form_start(form) }}
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-12\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.name, {'attr': {'class':'form-control' , 'placeholder':'Ingresar marca'}}) }}
                    
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

{% endblock %}", "Brand/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Brand/edit.html.twig");
    }
}
