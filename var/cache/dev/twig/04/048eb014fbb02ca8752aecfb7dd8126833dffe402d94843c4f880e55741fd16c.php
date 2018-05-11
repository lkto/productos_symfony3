<?php

/* Category/edit.html.twig */
class __TwigTemplate_d311cd3c971822794a270ba1624850200c416976241eed4bf112c484a5d44cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Category/edit.html.twig", 1);
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
        $__internal_f727f0647b24a9772c64a8e654889858b64debe3aa4942b07042245ebeb6eb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f727f0647b24a9772c64a8e654889858b64debe3aa4942b07042245ebeb6eb5b->enter($__internal_f727f0647b24a9772c64a8e654889858b64debe3aa4942b07042245ebeb6eb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f727f0647b24a9772c64a8e654889858b64debe3aa4942b07042245ebeb6eb5b->leave($__internal_f727f0647b24a9772c64a8e654889858b64debe3aa4942b07042245ebeb6eb5b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_82ec1eba1e96a9b1748d9da32a095d0ecddd6d9556d6ea5cabf9dadc146da84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ec1eba1e96a9b1748d9da32a095d0ecddd6d9556d6ea5cabf9dadc146da84c->enter($__internal_82ec1eba1e96a9b1748d9da32a095d0ecddd6d9556d6ea5cabf9dadc146da84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         Editar Categorias</li>
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
        echo "
<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar categoria</div>
      <div class=\"card-body\">
      
      ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          <div class=\"form-group\">
            <div class=\"form-row\">
            \t<div class=\"col-md-12\">
                <div class='input-group' style=\"margin-bottom: 8px;\">
                    

                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingresar marca")));
        echo "
                    
                </div>
               
              </div>

              
            </div>
          </div>
        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "type" => "submit")));
        echo "
          <a href=\"/category\" class=\"btn btn-primary \" > Regregar </a>
\t     ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>


</div>
</div>

";
        
        $__internal_82ec1eba1e96a9b1748d9da32a095d0ecddd6d9556d6ea5cabf9dadc146da84c->leave($__internal_82ec1eba1e96a9b1748d9da32a095d0ecddd6d9556d6ea5cabf9dadc146da84c_prof);

    }

    public function getTemplateName()
    {
        return "Category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  102 => 46,  90 => 37,  80 => 30,  72 => 24,  63 => 21,  60 => 20,  56 => 19,  40 => 5,  34 => 4,  11 => 1,);
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
         Editar Categorias</li>
      </ol>
      


{% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}

<div class=\"container\" id=\"form-datos\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Editar categoria</div>
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
          <a href=\"/category\" class=\"btn btn-primary \" > Regregar </a>
\t     {{ form_end(form) }}
      </div>
    </div>
  </div>


</div>
</div>

{% endblock %}", "Category/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Category/edit.html.twig");
    }
}
