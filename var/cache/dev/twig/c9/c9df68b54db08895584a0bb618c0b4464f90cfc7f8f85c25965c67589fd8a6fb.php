<?php

/* Products/edit.html.twig */
class __TwigTemplate_c2da480fa1f15b889d60882d1c89abee4124059ee448b371de9fbf19f08aa6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Products/edit.html.twig", 1);
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
        $__internal_9257c75577357d8a836595fe976c9956af45092f6273267a3400ecfab026ce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9257c75577357d8a836595fe976c9956af45092f6273267a3400ecfab026ce60->enter($__internal_9257c75577357d8a836595fe976c9956af45092f6273267a3400ecfab026ce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Products/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9257c75577357d8a836595fe976c9956af45092f6273267a3400ecfab026ce60->leave($__internal_9257c75577357d8a836595fe976c9956af45092f6273267a3400ecfab026ce60_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef30b63ad4a177a8c4bf4111d302294f807a9de2ab87264484dfe0f20c706a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef30b63ad4a177a8c4bf4111d302294f807a9de2ab87264484dfe0f20c706a0->enter($__internal_2ef30b63ad4a177a8c4bf4111d302294f807a9de2ab87264484dfe0f20c706a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      


      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 20
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 21
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "     <div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar Productos</div>
      <div class=\"card-body\">
      
      ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar codigo", "readonly" => "true")));
        echo "
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar nombre")));
        echo "
                    
                </div>
               
              </div>
  
              <div class=\"col-md-6\" >
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                  

                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar descripcion")));
        echo "
                    
                </div>
               
              </div>

               <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "brand", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
        echo "
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar categoria")));
        echo "
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar precio")));
        echo "
                    
                </div>
               
              </div>

             
              
            </div>
          </div>
        ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "type" => "submit")));
        echo "
        
  ";
        // line 97
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
        
        $__internal_2ef30b63ad4a177a8c4bf4111d302294f807a9de2ab87264484dfe0f20c706a0->leave($__internal_2ef30b63ad4a177a8c4bf4111d302294f807a9de2ab87264484dfe0f20c706a0_prof);

    }

    public function getTemplateName()
    {
        return "Products/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 97,  166 => 95,  153 => 85,  140 => 75,  127 => 65,  114 => 55,  101 => 45,  89 => 36,  79 => 29,  72 => 24,  63 => 21,  60 => 20,  56 => 19,  40 => 5,  34 => 4,  11 => 1,);
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
      


      {% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}
     <div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar Productos</div>
      <div class=\"card-body\">
      
      {{ form_start(form) }}
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.code, {'attr': {'class':'form-control' , 'placeholder':'Ingresar codigo', 'readonly':'true'}}) }}
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.name, {'attr': {'class':'form-control' , 'placeholder':'Ingresar nombre'}}) }}
                    
                </div>
               
              </div>
  
              <div class=\"col-md-6\" >
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                  

                    {{ form_widget(form.description, {'attr': {'class':'form-control', 'placeholder':'Ingresar descripcion'}}) }}
                    
                </div>
               
              </div>

               <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.brand, {'attr': {'class':'form-control', 'placeholder':'Ingresar marca'}}) }}
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    {{ form_widget(form.category, {'attr': {'class':'form-control', 'placeholder':'Ingresar categoria'}}) }}
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    {{ form_widget(form.price, {'attr': {'class':'form-control', 'placeholder':'Ingresar precio'}}) }}
                    
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

{% endblock %}", "Products/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Products/edit.html.twig");
    }
}
