<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7858c7f0961f4222bd5e94e745240acf0ab9550ce0f4e2df196571d8874382f7 extends Twig_Template
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
        $__internal_e9a5548fba21923cea054d33fcd45a7afad006b4cecd90786c2441b83441b851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a5548fba21923cea054d33fcd45a7afad006b4cecd90786c2441b83441b851->enter($__internal_e9a5548fba21923cea054d33fcd45a7afad006b4cecd90786c2441b83441b851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a5548fba21923cea054d33fcd45a7afad006b4cecd90786c2441b83441b851->leave($__internal_e9a5548fba21923cea054d33fcd45a7afad006b4cecd90786c2441b83441b851_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_604f44ce1200a630e2eadda822f82a183a9634bb9caf0174be59b29bff38197d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604f44ce1200a630e2eadda822f82a183a9634bb9caf0174be59b29bff38197d->enter($__internal_604f44ce1200a630e2eadda822f82a183a9634bb9caf0174be59b29bff38197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_604f44ce1200a630e2eadda822f82a183a9634bb9caf0174be59b29bff38197d->leave($__internal_604f44ce1200a630e2eadda822f82a183a9634bb9caf0174be59b29bff38197d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7efaaab7fcf089a7bf88bfc2cc1c4cc29b4482dd53f462e43fe7433c82ad5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7efaaab7fcf089a7bf88bfc2cc1c4cc29b4482dd53f462e43fe7433c82ad5ea->enter($__internal_f7efaaab7fcf089a7bf88bfc2cc1c4cc29b4482dd53f462e43fe7433c82ad5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7efaaab7fcf089a7bf88bfc2cc1c4cc29b4482dd53f462e43fe7433c82ad5ea->leave($__internal_f7efaaab7fcf089a7bf88bfc2cc1c4cc29b4482dd53f462e43fe7433c82ad5ea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7c205593ed1e02b4a6fc6be740b433e28a31b2e4793ccbb17866da4170ade68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c205593ed1e02b4a6fc6be740b433e28a31b2e4793ccbb17866da4170ade68->enter($__internal_f7c205593ed1e02b4a6fc6be740b433e28a31b2e4793ccbb17866da4170ade68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7c205593ed1e02b4a6fc6be740b433e28a31b2e4793ccbb17866da4170ade68->leave($__internal_f7c205593ed1e02b4a6fc6be740b433e28a31b2e4793ccbb17866da4170ade68_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
