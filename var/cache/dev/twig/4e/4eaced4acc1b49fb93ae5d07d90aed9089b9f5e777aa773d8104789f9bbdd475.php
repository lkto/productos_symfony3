<?php

/* EmberBundle:Productos:edit.html.twig */
class __TwigTemplate_5b7cff098ee0108e4ba64b844dd46065df9d9e8e93d76c00020cd4e05b5d9855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:edit.html.twig", 1);
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
        $__internal_3d7166d0ec569d58ce9b01a95ca8881470e464d169fdf3d7d6e5dd432c8892a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7166d0ec569d58ce9b01a95ca8881470e464d169fdf3d7d6e5dd432c8892a4->enter($__internal_3d7166d0ec569d58ce9b01a95ca8881470e464d169fdf3d7d6e5dd432c8892a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7166d0ec569d58ce9b01a95ca8881470e464d169fdf3d7d6e5dd432c8892a4->leave($__internal_3d7166d0ec569d58ce9b01a95ca8881470e464d169fdf3d7d6e5dd432c8892a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_beffa82c42ec34685c4fa42006122eda3dbd62631bff4cedfe0e2e82ceafcc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beffa82c42ec34685c4fa42006122eda3dbd62631bff4cedfe0e2e82ceafcc75->enter($__internal_beffa82c42ec34685c4fa42006122eda3dbd62631bff4cedfe0e2e82ceafcc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
          Editar</li>
      </ol>
      
     <div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar Productos</div>
      <div class=\"card-body\">
      
      ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar codigo", "readonly" => "true")));
        echo "
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar nombre")));
        echo "
                    
                </div>
               
              </div>
  
              <div class=\"col-md-6\" >
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                  

                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar descripcion")));
        echo "
                    
                </div>
               
              </div>

               <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marcaId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
        echo "
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categoriaId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar categoria")));
        echo "
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar precio")));
        echo "
                    
                </div>
               
              </div>

             
              
            </div>
          </div>
        ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "type" => "submit")));
        echo "
        
  ";
        // line 90
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>


</div>
    </div>
  </div>


</div>
</div>

";
        
        $__internal_beffa82c42ec34685c4fa42006122eda3dbd62631bff4cedfe0e2e82ceafcc75->leave($__internal_beffa82c42ec34685c4fa42006122eda3dbd62631bff4cedfe0e2e82ceafcc75_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 90,  146 => 88,  133 => 78,  120 => 68,  107 => 58,  94 => 48,  81 => 38,  69 => 29,  59 => 22,  40 => 5,  34 => 4,  11 => 1,);
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
          Editar</li>
      </ol>
      
     <div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar Productos</div>
      <div class=\"card-body\">
      
      {{ form_start(form) }}
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.codigo, {'attr': {'class':'form-control' , 'placeholder':'Ingresar codigo', 'readonly':'true'}}) }}
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.nombre, {'attr': {'class':'form-control' , 'placeholder':'Ingresar nombre'}}) }}
                    
                </div>
               
              </div>
  
              <div class=\"col-md-6\" >
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                  

                    {{ form_widget(form.descripcion, {'attr': {'class':'form-control', 'placeholder':'Ingresar descripcion'}}) }}
                    
                </div>
               
              </div>

               <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.marcaId, {'attr': {'class':'form-control', 'placeholder':'Ingresar marca'}}) }}
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    {{ form_widget(form.categoriaId, {'attr': {'class':'form-control', 'placeholder':'Ingresar categoria'}}) }}
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    {{ form_widget(form.precio, {'attr': {'class':'form-control', 'placeholder':'Ingresar precio'}}) }}
                    
                </div>
               
              </div>

             
              
            </div>
          </div>
        {{ form_widget(form.Guardar, {'attr': {'class':'btn btn-primary', 'type':'submit'}}) }}
        
  {{ form_end(form) }}
      </div>
    </div>
  </div>


</div>
    </div>
  </div>


</div>
</div>

{% endblock %}", "EmberBundle:Productos:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/edit.html.twig");
    }
}
