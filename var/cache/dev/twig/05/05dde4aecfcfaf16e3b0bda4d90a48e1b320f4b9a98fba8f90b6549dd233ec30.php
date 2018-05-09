<?php

/* PruebaBundle:Default:nombre.html.twig */
class __TwigTemplate_96371dfb07e729d31c1a78bd9216641b91dc9d4a240e5586924becff15584e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PruebaBundle:Default:nombre.html.twig", 1);
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
        $__internal_ecc190fbe6f4b75c7287ed52f12ab146b0426f7e48ec3e8df46040692080a944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc190fbe6f4b75c7287ed52f12ab146b0426f7e48ec3e8df46040692080a944->enter($__internal_ecc190fbe6f4b75c7287ed52f12ab146b0426f7e48ec3e8df46040692080a944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaBundle:Default:nombre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc190fbe6f4b75c7287ed52f12ab146b0426f7e48ec3e8df46040692080a944->leave($__internal_ecc190fbe6f4b75c7287ed52f12ab146b0426f7e48ec3e8df46040692080a944_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3a1f73b936a4446b1a55ed5e06c59c60e9ca00d159128323d6d44ce608143c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a1f73b936a4446b1a55ed5e06c59c60e9ca00d159128323d6d44ce608143c6->enter($__internal_e3a1f73b936a4446b1a55ed5e06c59c60e9ca00d159128323d6d44ce608143c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "Estamos dentro de la pagina nombres
<br/>
";
        // line 7
        echo twig_escape_filter($this->env, ($context["nPila"] ?? $this->getContext($context, "nPila")), "html", null, true);
        echo "
";
        
        $__internal_e3a1f73b936a4446b1a55ed5e06c59c60e9ca00d159128323d6d44ce608143c6->leave($__internal_e3a1f73b936a4446b1a55ed5e06c59c60e9ca00d159128323d6d44ce608143c6_prof);

    }

    public function getTemplateName()
    {
        return "PruebaBundle:Default:nombre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
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
Estamos dentro de la pagina nombres
<br/>
{{nPila}}
{% endblock %}", "PruebaBundle:Default:nombre.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/src/PruebaBundle/Resources/views/Default/nombre.html.twig");
    }
}
