<?php

/* ::base.html.twig */
class __TwigTemplate_1c46b3fab4cef8c75313d9d24381e31ada43a6f4980b083fb86c49bc98092ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65102e3f9d3a06ca18b250bfea407ddb037c83854e460a1f0d2a76e1f1ee7e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65102e3f9d3a06ca18b250bfea407ddb037c83854e460a1f0d2a76e1f1ee7e81->enter($__internal_65102e3f9d3a06ca18b250bfea407ddb037c83854e460a1f0d2a76e1f1ee7e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"fixed-nav sticky-footer \" id=\"page-top\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"/\">Productos</a>

    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"/\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Productos</span>
          </a>
        </li>

        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"/marca\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Marca</span>
          </a>
        </li>

        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"/categoria\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Categoria</span>
          </a>
        </li>
        
      </ul>
      <ul class=\"navbar-nav sidenav-toggler\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-center\" id=\"sidenavToggler\">
            <i class=\"fa fa-fw fa-angle-left\"></i>
          </a>
        </li>
      </ul>
     
    </div>
  </nav>
        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        

    <footer class=\"sticky-footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fa fa-angle-up\"></i>
    </a>

    ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "    </body>
</html>


 

 
  ";
        
        $__internal_65102e3f9d3a06ca18b250bfea407ddb037c83854e460a1f0d2a76e1f1ee7e81->leave($__internal_65102e3f9d3a06ca18b250bfea407ddb037c83854e460a1f0d2a76e1f1ee7e81_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_421ee6fbae76c7f5f2248965e62a250f73f2271ca4ba89ead022efbbb73d6ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421ee6fbae76c7f5f2248965e62a250f73f2271ca4ba89ead022efbbb73d6ce2->enter($__internal_421ee6fbae76c7f5f2248965e62a250f73f2271ca4ba89ead022efbbb73d6ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos";
        
        $__internal_421ee6fbae76c7f5f2248965e62a250f73f2271ca4ba89ead022efbbb73d6ce2->leave($__internal_421ee6fbae76c7f5f2248965e62a250f73f2271ca4ba89ead022efbbb73d6ce2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90033eaa5e4db5e04b564f6d7534bc20d64f83f13cec846722ddb35bcab8a13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90033eaa5e4db5e04b564f6d7534bc20d64f83f13cec846722ddb35bcab8a13f->enter($__internal_90033eaa5e4db5e04b564f6d7534bc20d64f83f13cec846722ddb35bcab8a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("alert/css/alertify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <style type=\"text/css\">
        .subMenu{
        padding-bottom: 0px !important;
        padding-top: 0px !important;
        }
        .nav-link{
        padding-bottom: 8px !important;
        padding-top: 8px !important;
        }

        
         </style>

        ";
        
        $__internal_90033eaa5e4db5e04b564f6d7534bc20d64f83f13cec846722ddb35bcab8a13f->leave($__internal_90033eaa5e4db5e04b564f6d7534bc20d64f83f13cec846722ddb35bcab8a13f_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b2fb67688cab3a6bad05d6ee39a83c1e2fbd37e1ff3ffa74ceab9dfc7e450c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2fb67688cab3a6bad05d6ee39a83c1e2fbd37e1ff3ffa74ceab9dfc7e450c7->enter($__internal_4b2fb67688cab3a6bad05d6ee39a83c1e2fbd37e1ff3ffa74ceab9dfc7e450c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "        ";
        
        $__internal_4b2fb67688cab3a6bad05d6ee39a83c1e2fbd37e1ff3ffa74ceab9dfc7e450c7->leave($__internal_4b2fb67688cab3a6bad05d6ee39a83c1e2fbd37e1ff3ffa74ceab9dfc7e450c7_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11610e58099b4b9776924b52a9a09df99a808c7d038497298b1ba986efaa4d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11610e58099b4b9776924b52a9a09df99a808c7d038497298b1ba986efaa4d00->enter($__internal_11610e58099b4b9776924b52a9a09df99a808c7d038497298b1ba986efaa4d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/dataTables.bootstrap4.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin-datatables.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin-charts.min.js"), "html", null, true);
        echo "\" ></script>

         <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("alert/js/alertify.js"), "html", null, true);
        echo "\" ></script>
    ";
        
        $__internal_11610e58099b4b9776924b52a9a09df99a808c7d038497298b1ba986efaa4d00->leave($__internal_11610e58099b4b9776924b52a9a09df99a808c7d038497298b1ba986efaa4d00_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 116,  252 => 114,  247 => 112,  242 => 110,  237 => 108,  232 => 106,  227 => 104,  222 => 102,  217 => 100,  211 => 98,  205 => 97,  198 => 82,  192 => 81,  169 => 22,  164 => 20,  159 => 18,  154 => 16,  149 => 14,  144 => 12,  141 => 11,  135 => 10,  123 => 9,  109 => 118,  107 => 97,  91 => 83,  89 => 81,  42 => 38,  40 => 10,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>{% block title %}Productos{% endblock %}</title>
        {% block stylesheets %}

        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('css/sb-admin.css') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('css/sb-admin.css') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('alert/css/alertify.css') }}\" rel=\"stylesheet\">
        
        <style type=\"text/css\">
        .subMenu{
        padding-bottom: 0px !important;
        padding-top: 0px !important;
        }
        .nav-link{
        padding-bottom: 8px !important;
        padding-top: 8px !important;
        }

        
         </style>

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"fixed-nav sticky-footer \" id=\"page-top\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"/\">Productos</a>

    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"/\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Productos</span>
          </a>
        </li>

        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"/marca\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Marca</span>
          </a>
        </li>

        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Dashboard\">
          <a class=\"nav-link\" href=\"/categoria\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Categoria</span>
          </a>
        </li>
        
      </ul>
      <ul class=\"navbar-nav sidenav-toggler\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-center\" id=\"sidenavToggler\">
            <i class=\"fa fa-fw fa-angle-left\"></i>
          </a>
        </li>
      </ul>
     
    </div>
  </nav>
        {% block body %}
        {% endblock %}
        

    <footer class=\"sticky-footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fa fa-angle-up\"></i>
    </a>

    {% block javascripts %}
         <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\" ></script>

         <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\" ></script>

         <script src=\"{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}\" ></script>

         <script src=\"{{ asset('vendor/chart.js/Chart.min.js') }}\" ></script>

         <script src=\"{{ asset('vendor/datatables/jquery.dataTables.js') }}\" ></script>

         <script src=\"{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}\" ></script>

         <script src=\"{{ asset('js/sb-admin.min.js') }}\" ></script>

         <script src=\"{{ asset('js/sb-admin-datatables.min.js') }}\" ></script>

         <script src=\"{{ asset('js/sb-admin-charts.min.js') }}\" ></script>

         <script src=\"{{ asset('alert/js/alertify.js') }}\" ></script>
    {% endblock %}
    </body>
</html>


 

 
  ", "::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/curso2/app/Resources/views/base.html.twig");
    }
}
