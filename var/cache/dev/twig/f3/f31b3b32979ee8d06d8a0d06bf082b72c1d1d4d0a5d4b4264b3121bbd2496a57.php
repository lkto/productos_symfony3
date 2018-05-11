<?php

/* Products/new.html.twig */
class __TwigTemplate_3862af5c20cb0750b82e887ab6aabbeb77cab5f77cb7270d815a9b5f58d27589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Products/new.html.twig", 1);
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
        $__internal_a4b688808602892e090e2d83d451777833909b32d2323d1b7437544b141f2f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b688808602892e090e2d83d451777833909b32d2323d1b7437544b141f2f33->enter($__internal_a4b688808602892e090e2d83d451777833909b32d2323d1b7437544b141f2f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Products/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b688808602892e090e2d83d451777833909b32d2323d1b7437544b141f2f33->leave($__internal_a4b688808602892e090e2d83d451777833909b32d2323d1b7437544b141f2f33_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3bcbd782f6ffe3de57d30c3aa60a56e578e2c19a923e4d07a37dccf3c06461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bcbd782f6ffe3de57d30c3aa60a56e578e2c19a923e4d07a37dccf3c06461c->enter($__internal_a3bcbd782f6ffe3de57d30c3aa60a56e578e2c19a923e4d07a37dccf3c06461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         Agregar productos</li>
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
      <div class=\"card-header\">Registrar Productos</div>
      <div class=\"card-body\">
      
      ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar codigo", "minlength" => "4")));
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
\t
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
        
\t";
        // line 97
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>


</div>
</div>

";
        
        $__internal_a3bcbd782f6ffe3de57d30c3aa60a56e578e2c19a923e4d07a37dccf3c06461c->leave($__internal_a3bcbd782f6ffe3de57d30c3aa60a56e578e2c19a923e4d07a37dccf3c06461c_prof);

    }

    public function getTemplateName()
    {
        return "Products/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 97,  166 => 95,  153 => 85,  140 => 75,  127 => 65,  114 => 55,  101 => 45,  89 => 36,  79 => 29,  71 => 23,  62 => 20,  59 => 19,  55 => 18,  40 => 5,  34 => 4,  11 => 1,);
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
         Agregar productos</li>
      </ol>
      

{% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}

<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Registrar Productos</div>
      <div class=\"card-body\">
      
      {{ form_start(form) }}
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.code, {'attr': {'class':'form-control' , 'placeholder':'Ingresar codigo','minlength':'4' }}) }}
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.name, {'attr': {'class':'form-control' , 'placeholder':'Ingresar nombre'}}) }}
                    
                </div>
               
              </div>
\t
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
        
\t{{ form_end(form) }}
      </div>
    </div>
  </div>


</div>
</div>

{% endblock %}", "Products/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Products/new.html.twig");
    }
}
