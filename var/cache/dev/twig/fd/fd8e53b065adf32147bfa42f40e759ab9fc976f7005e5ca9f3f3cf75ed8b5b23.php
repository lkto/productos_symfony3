<?php

/* EmberBundle:Productos:all.html.twig */
class __TwigTemplate_2ddfe857f3479cbe69bd6e77d17ab368f920d9599829cdfc24c75123e6dc6a75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Productos:all.html.twig", 1);
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
        $__internal_2d2a6187549c6b9e59595d6918110cbdbfbf6ba2eeadef8855e2d53bade71f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2a6187549c6b9e59595d6918110cbdbfbf6ba2eeadef8855e2d53bade71f0f->enter($__internal_2d2a6187549c6b9e59595d6918110cbdbfbf6ba2eeadef8855e2d53bade71f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Productos:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d2a6187549c6b9e59595d6918110cbdbfbf6ba2eeadef8855e2d53bade71f0f->leave($__internal_2d2a6187549c6b9e59595d6918110cbdbfbf6ba2eeadef8855e2d53bade71f0f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e1dac484bc6737e4cfe8c024d0aee21a45092859a0b2cb43bd7afe0b89d376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e1dac484bc6737e4cfe8c024d0aee21a45092859a0b2cb43bd7afe0b89d376->enter($__internal_f5e1dac484bc6737e4cfe8c024d0aee21a45092859a0b2cb43bd7afe0b89d376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Productos</li>
      </ol>
      

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "add"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "    <div class=\"alert alert-success\" role=\"alert\">
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "delete"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 23
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 24
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "update"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "    <div class=\"alert alert-info\" role=\"alert\">
        ";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 34
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 35
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<div class=\"card mb-3\">
        <div class=\"card-header\">
          <i class=\"fa fa-table\"></i>Productos

<div style=\"float: right;\">

          <a href=\"/new\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-plus-square\"></i>
                    Agregar productos
                    </a>

        </div>
      </div>
        <div class=\"card-body\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
              <thead>
                <tr>
                  <th>Codigo </th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Marca</th>
                  <th>Categoria</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Codigo </th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Marca</th>
                  <th>Categoria</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
              <tbody>
                
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 81
            echo "                <tr>
\t\t\t\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "codigo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "marcaId", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "categoriaId", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
                    <a href = \"/edit/";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "codigo", array()), "html", null, true);
            echo "\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-sticky-note-o\"></i>
                    </a>
                    <a href = \"/show/";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "codigo", array()), "html", null, true);
            echo "\" class='btn' style='background-color:transparent;color:black;' > 
                    <i class=\"fa fa-low-vision\"></i>
                    </a>
                    <a href = \"/delete/";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "codigo", array()), "html", null, true);
            echo "\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-remove\"></i>
                    </a>
                  </td>
\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "              </tbody>
            </table>
          </div>
        </div>
        <div class=\"card-footer small text-muted\">Ultima actualizacion ayer a las 11:59 PM</div>
      </div>

</div>
</div>

";
        
        $__internal_f5e1dac484bc6737e4cfe8c024d0aee21a45092859a0b2cb43bd7afe0b89d376->leave($__internal_f5e1dac484bc6737e4cfe8c024d0aee21a45092859a0b2cb43bd7afe0b89d376_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Productos:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 101,  209 => 95,  203 => 92,  197 => 89,  192 => 87,  188 => 86,  184 => 85,  180 => 84,  176 => 83,  172 => 82,  169 => 81,  165 => 80,  121 => 38,  112 => 35,  109 => 34,  105 => 33,  102 => 32,  93 => 29,  90 => 28,  86 => 27,  77 => 24,  74 => 23,  70 => 22,  61 => 19,  58 => 18,  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
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
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Productos</li>
      </ol>
      

{% for flash_message in app.session.flashbag.get('add') %}
    <div class=\"alert alert-success\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}
{% for flash_message in app.session.flashbag.get('delete') %}
    <div class=\"alert alert-danger\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}
{% for flash_message in app.session.flashbag.get('update') %}
    <div class=\"alert alert-info\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}

{% for flash_message in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ flash_message }}
    </div>
{% endfor %}

<div class=\"card mb-3\">
        <div class=\"card-header\">
          <i class=\"fa fa-table\"></i>Productos

<div style=\"float: right;\">

          <a href=\"/new\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-plus-square\"></i>
                    Agregar productos
                    </a>

        </div>
      </div>
        <div class=\"card-body\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
              <thead>
                <tr>
                  <th>Codigo </th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Marca</th>
                  <th>Categoria</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Codigo </th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Marca</th>
                  <th>Categoria</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
              <tbody>
                
                {% for producto in productos %}
                <tr>
\t\t\t\t\t<td>{{producto.codigo}}</td>
\t\t\t\t\t<td>{{producto.nombre}}</td>
\t\t\t\t\t<td>{{producto.descripcion}}</td>
\t\t\t\t\t<td>{{producto.marcaId.nombre}}</td>
\t\t\t\t\t<td>{{producto.categoriaId.nombre}}</td>
\t\t\t\t\t<td>{{producto.precio}}</td>
\t\t\t\t\t<td>
                    <a href = \"/edit/{{producto.codigo}}\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-sticky-note-o\"></i>
                    </a>
                    <a href = \"/show/{{producto.codigo}}\" class='btn' style='background-color:transparent;color:black;' > 
                    <i class=\"fa fa-low-vision\"></i>
                    </a>
                    <a href = \"/delete/{{producto.codigo}}\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-remove\"></i>
                    </a>
                  </td>
\t\t\t\t</tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
        <div class=\"card-footer small text-muted\">Ultima actualizacion ayer a las 11:59 PM</div>
      </div>

</div>
</div>

{% endblock %}", "EmberBundle:Productos:all.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Productos/all.html.twig");
    }
}
