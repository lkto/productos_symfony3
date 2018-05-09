<?php

/* EmberBundle:Default:index.html.twig */
class __TwigTemplate_baf2c38fe1b60174ff8ec3ebd502bf5d103a95606e1d5d9ad59b16585e310dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EmberBundle:Default:index.html.twig", 2);
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
        $__internal_ffc0d298326244e470592ff412e44a6e19fc3adb23e3e452a195b9b8244fa8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc0d298326244e470592ff412e44a6e19fc3adb23e3e452a195b9b8244fa8b6->enter($__internal_ffc0d298326244e470592ff412e44a6e19fc3adb23e3e452a195b9b8244fa8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmberBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc0d298326244e470592ff412e44a6e19fc3adb23e3e452a195b9b8244fa8b6->leave($__internal_ffc0d298326244e470592ff412e44a6e19fc3adb23e3e452a195b9b8244fa8b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_002149bf07bd3ae0e522abdaabfeda7be3e8567f70218740af0206b3a0a467a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002149bf07bd3ae0e522abdaabfeda7be3e8567f70218740af0206b3a0a467a6->enter($__internal_002149bf07bd3ae0e522abdaabfeda7be3e8567f70218740af0206b3a0a467a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Inicio</li>
      </ol>
  
      <!-- Icon Cards-->
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-primary o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-address-card\"></i>
              </div>
              <div class=\"mr-5\">26 Reservas</div>
            </div>
           
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-warning o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-archive\"></i>
              </div>
              <div class=\"mr-5\">11 Implementos</div>
            </div>
            
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-success o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-home\"></i>
              </div>
              <div class=\"mr-5\">123 Salones</div>
            </div>
            
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-danger o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-users\"></i>
              </div>
              <div class=\"mr-5\">13 usuarios</div>
            </div>
            
          </div>
        </div>
      </div>
</div>
";
        
        $__internal_002149bf07bd3ae0e522abdaabfeda7be3e8567f70218740af0206b3a0a467a6->leave($__internal_002149bf07bd3ae0e522abdaabfeda7be3e8567f70218740af0206b3a0a467a6_prof);

    }

    public function getTemplateName()
    {
        return "EmberBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends '::base.html.twig'%}


{% block body %}

 <div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
       <!-- <li class=\"breadcrumb-item\">
          <a href=\"#\">Reservas</a>
        </li> -->
        <li class=\"breadcrumb-item active\">Inicio</li>
      </ol>
  
      <!-- Icon Cards-->
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-primary o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-address-card\"></i>
              </div>
              <div class=\"mr-5\">26 Reservas</div>
            </div>
           
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-warning o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-archive\"></i>
              </div>
              <div class=\"mr-5\">11 Implementos</div>
            </div>
            
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-success o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-home\"></i>
              </div>
              <div class=\"mr-5\">123 Salones</div>
            </div>
            
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-3\">
          <div class=\"card text-white bg-danger o-hidden h-100\">
            <div class=\"card-body\">
              <div class=\"card-body-icon\">
                <i class=\"fa fa-fw fa-users\"></i>
              </div>
              <div class=\"mr-5\">13 usuarios</div>
            </div>
            
          </div>
        </div>
      </div>
</div>
{% endblock %}", "EmberBundle:Default:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/EmberBundle/Resources/views/Default/index.html.twig");
    }
}
