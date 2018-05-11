<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_74a8530b70946d10a6ae1f6ffe2777bcd94b566b02c9b7634e4f88dda9d915a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b909b1a3f79bf9f2d2c0c31536310cd1809c25f69d6532c1d0cac33581cba417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b909b1a3f79bf9f2d2c0c31536310cd1809c25f69d6532c1d0cac33581cba417->enter($__internal_b909b1a3f79bf9f2d2c0c31536310cd1809c25f69d6532c1d0cac33581cba417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b909b1a3f79bf9f2d2c0c31536310cd1809c25f69d6532c1d0cac33581cba417->leave($__internal_b909b1a3f79bf9f2d2c0c31536310cd1809c25f69d6532c1d0cac33581cba417_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdfa683cb41015c2daea37d9e1ceb2d968780e77d56f2707f072075596cfcbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfa683cb41015c2daea37d9e1ceb2d968780e77d56f2707f072075596cfcbe7->enter($__internal_bdfa683cb41015c2daea37d9e1ceb2d968780e77d56f2707f072075596cfcbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bdfa683cb41015c2daea37d9e1ceb2d968780e77d56f2707f072075596cfcbe7->leave($__internal_bdfa683cb41015c2daea37d9e1ceb2d968780e77d56f2707f072075596cfcbe7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6e8f3a6d09684f5b94603c43a895d5971cf58dedfad608aa04e1abda06b15ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e8f3a6d09684f5b94603c43a895d5971cf58dedfad608aa04e1abda06b15ee->enter($__internal_f6e8f3a6d09684f5b94603c43a895d5971cf58dedfad608aa04e1abda06b15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6e8f3a6d09684f5b94603c43a895d5971cf58dedfad608aa04e1abda06b15ee->leave($__internal_f6e8f3a6d09684f5b94603c43a895d5971cf58dedfad608aa04e1abda06b15ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2948a75d1f8263201e62933c560d41a4260fdcccb0f0123522e9b98d82dce46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2948a75d1f8263201e62933c560d41a4260fdcccb0f0123522e9b98d82dce46->enter($__internal_e2948a75d1f8263201e62933c560d41a4260fdcccb0f0123522e9b98d82dce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e2948a75d1f8263201e62933c560d41a4260fdcccb0f0123522e9b98d82dce46->leave($__internal_e2948a75d1f8263201e62933c560d41a4260fdcccb0f0123522e9b98d82dce46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
