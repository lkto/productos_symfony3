<?php

/* EmberBundle:Productos:new.html.twig */
class __TwigTemplate_f3a9653e3ad41bcdbd6eeec995e28f17d469542660338a5e2eb751f7b6245dbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:new.html.twig", 1);
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
        $__internal_5020838555b0263c10b8fcac27809000d6aec866f4b7f9abbd290c79e8637dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5020838555b0263c10b8fcac27809000d6aec866f4b7f9abbd290c79e8637dd2->enter($__internal_5020838555b0263c10b8fcac27809000d6aec866f4b7f9abbd290c79e8637dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5020838555b0263c10b8fcac27809000d6aec866f4b7f9abbd290c79e8637dd2->leave($__internal_5020838555b0263c10b8fcac27809000d6aec866f4b7f9abbd290c79e8637dd2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2476214a02dcaf57da39e5346efedb76d7c7e1b8ef7fafc2238ec663ddfcf6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2476214a02dcaf57da39e5346efedb76d7c7e1b8ef7fafc2238ec663ddfcf6b1->enter($__internal_2476214a02dcaf57da39e5346efedb76d7c7e1b8ef7fafc2238ec663ddfcf6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar codigo", "minlength" => "4")));
        echo "
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar nombre")));
        echo "
                    
                </div>
               
              </div>
\t
              <div class=\"col-md-6\" >
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                  

                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar descripcion")));
        echo "
                    
                </div>
               
              </div>

               <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marcaId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
        echo "
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categoriaId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar categoria")));
        echo "
                    
                </div>
               
              </div>

              <div class=\"col-md-6\">
                <div class='input-group ' style=\"margin-bottom: 8px;\">
                   

                    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar precio")));
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
        
        $__internal_2476214a02dcaf57da39e5346efedb76d7c7e1b8ef7fafc2238ec663ddfcf6b1->leave($__internal_2476214a02dcaf57da39e5346efedb76d7c7e1b8ef7fafc2238ec663ddfcf6b1_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:new.html.twig";
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
                    

                    {{ form_widget(form.codigo, {'attr': {'class':'form-control' , 'placeholder':'Ingresar codigo','minlength':'4' }}) }}
                    
                </div>
               
              </div>
              <div class=\"col-md-6\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    {{ form_widget(form.nombre, {'attr': {'class':'form-control' , 'placeholder':'Ingresar nombre'}}) }}
                    
                </div>
               
              </div>
\t
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
        
\t{{ form_end(form) }}
      </div>
    </div>
  </div>


</div>
</div>

{% endblock %}", "EmberBundle:Productos:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/new.html.twig");
    }
}
