<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8f0bc5c7668a81a440eee8dd43dc8a25a040f1a87522490b5a0d4324c4d5bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9339a0c5ae85af6bf4c1159eeca794e2e4d595f1e93d61bc5eda5038012c58f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9339a0c5ae85af6bf4c1159eeca794e2e4d595f1e93d61bc5eda5038012c58f6->enter($__internal_9339a0c5ae85af6bf4c1159eeca794e2e4d595f1e93d61bc5eda5038012c58f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9339a0c5ae85af6bf4c1159eeca794e2e4d595f1e93d61bc5eda5038012c58f6->leave($__internal_9339a0c5ae85af6bf4c1159eeca794e2e4d595f1e93d61bc5eda5038012c58f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73410a99094d330791d8918ffedd4e6fe22efcd373a3190171d37ed262fefb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73410a99094d330791d8918ffedd4e6fe22efcd373a3190171d37ed262fefb19->enter($__internal_73410a99094d330791d8918ffedd4e6fe22efcd373a3190171d37ed262fefb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73410a99094d330791d8918ffedd4e6fe22efcd373a3190171d37ed262fefb19->leave($__internal_73410a99094d330791d8918ffedd4e6fe22efcd373a3190171d37ed262fefb19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9071fa9301674471ecbc358ecdfbb58bc65e6f757145bc1dade52bb3f5c9d796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9071fa9301674471ecbc358ecdfbb58bc65e6f757145bc1dade52bb3f5c9d796->enter($__internal_9071fa9301674471ecbc358ecdfbb58bc65e6f757145bc1dade52bb3f5c9d796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9071fa9301674471ecbc358ecdfbb58bc65e6f757145bc1dade52bb3f5c9d796->leave($__internal_9071fa9301674471ecbc358ecdfbb58bc65e6f757145bc1dade52bb3f5c9d796_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dff60e608fc8d02cf4e29d181582e7815fc12fa75b9bdeb4f3f0890bc5a35585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff60e608fc8d02cf4e29d181582e7815fc12fa75b9bdeb4f3f0890bc5a35585->enter($__internal_dff60e608fc8d02cf4e29d181582e7815fc12fa75b9bdeb4f3f0890bc5a35585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dff60e608fc8d02cf4e29d181582e7815fc12fa75b9bdeb4f3f0890bc5a35585->leave($__internal_dff60e608fc8d02cf4e29d181582e7815fc12fa75b9bdeb4f3f0890bc5a35585_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/prueba_synfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
