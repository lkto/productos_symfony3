<?php

/* Brand/all.html.twig */
class __TwigTemplate_e38f0bd91277ce2746e1fbcd19c7752478f736b9e21dd5e09498e41d4dd21e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Brand/all.html.twig", 1);
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
        $__internal_a76e1cdf318610d142018ea23c9f6b16a12d64e8bb4cfc8008c337b17c856fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76e1cdf318610d142018ea23c9f6b16a12d64e8bb4cfc8008c337b17c856fd7->enter($__internal_a76e1cdf318610d142018ea23c9f6b16a12d64e8bb4cfc8008c337b17c856fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Brand/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76e1cdf318610d142018ea23c9f6b16a12d64e8bb4cfc8008c337b17c856fd7->leave($__internal_a76e1cdf318610d142018ea23c9f6b16a12d64e8bb4cfc8008c337b17c856fd7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5c6919e664eabcff02f337f95a24d6a9e8e5f26b86634bbe714db6b8ca584ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c6919e664eabcff02f337f95a24d6a9e8e5f26b86634bbe714db6b8ca584ff->enter($__internal_e5c6919e664eabcff02f337f95a24d6a9e8e5f26b86634bbe714db6b8ca584ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Marcas</li>
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
<div class=\"card mb-3\">
        <div class=\"card-header\">
          <i class=\"fa fa-table\"></i>Marcas

<div style=\"float: right;\">

          <a href=\"/brand/new\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-plus-square\"></i>
                    Agregar Marcas
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
                  <th>Acciones</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Codigo </th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
              <tbody>
                
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["brand"]);
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 67
            echo "                <tr>
\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
                    <a href = \"/brand/edit/";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-sticky-note-o\"></i>
                    </a>
                    <a href = \"/brand/show/";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\" class='btn' style='background-color:transparent;color:black;' > 
                    <i class=\"fa fa-low-vision\"></i>
                    </a>
                    <a href = \"/brand/delete/";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-remove\"></i>
                    </a>
                  </td>
\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "              </tbody>
            </table>
          </div>
        </div>
        <div class=\"card-footer small text-muted\">Ultima actualizacion ayer a las 11:59 PM</div>
      </div>

</div>
</div>

";
        
        $__internal_e5c6919e664eabcff02f337f95a24d6a9e8e5f26b86634bbe714db6b8ca584ff->leave($__internal_e5c6919e664eabcff02f337f95a24d6a9e8e5f26b86634bbe714db6b8ca584ff_prof);

    }

    public function getTemplateName()
    {
        return "Brand/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 83,  166 => 77,  160 => 74,  154 => 71,  149 => 69,  145 => 68,  142 => 67,  138 => 66,  102 => 32,  93 => 29,  90 => 28,  86 => 27,  77 => 24,  74 => 23,  70 => 22,  61 => 19,  58 => 18,  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
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
        <li class=\"breadcrumb-item active\">Marcas</li>
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

<div class=\"card mb-3\">
        <div class=\"card-header\">
          <i class=\"fa fa-table\"></i>Marcas

<div style=\"float: right;\">

          <a href=\"/brand/new\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-plus-square\"></i>
                    Agregar Marcas
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
                  <th>Acciones</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Codigo </th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
              <tbody>
                
                {% for brand in brand %}
                <tr>
\t\t\t\t\t<td>{{brand.id}}</td>
\t\t\t\t\t<td>{{brand.name}}</td>
\t\t\t\t\t<td>
                    <a href = \"/brand/edit/{{brand.id}}\" class='btn' style='background-color:transparent;color:black;'> 
                    <i class=\"fa fa-sticky-note-o\"></i>
                    </a>
                    <a href = \"/brand/show/{{brand.id}}\" class='btn' style='background-color:transparent;color:black;' > 
                    <i class=\"fa fa-low-vision\"></i>
                    </a>
                    <a href = \"/brand/delete/{{brand.id}}\" class='btn' style='background-color:transparent;color:black;'> 
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

{% endblock %}", "Brand/all.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/app/Resources/views/Brand/all.html.twig");
    }
}
