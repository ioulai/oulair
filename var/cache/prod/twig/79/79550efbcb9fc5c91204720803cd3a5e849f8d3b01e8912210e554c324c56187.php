<?php

/* layout.html.twig */
class __TwigTemplate_5e34d8647fb1d611737232ee7ea955a4f5d32724fc5a7cf11765628c5ef90fd3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'titre_page' => array($this, 'block_titre_page'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/img/paper-plane.png"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand bg-dark navbar-dark border-bottom\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fa fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" class=\"nav-link\">Home</a>
            </li>
            ";
        // line 36
        echo "                ";
        // line 37
        echo "            ";
        // line 38
        echo "        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\"><i
                            class=\"fa fa-user\"> ";
        // line 45
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array())), "html", null, true);
        echo "</i></a>

                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-header\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", array()), "html", null, true);
        echo "</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\" class=\"dropdown-item dropdown-footer\">
                        <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">logout</button>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <aside class=\"control-sidebar control-sidebar-dark\" style=\"top: 57px;\">
        <!-- Control sidebar content goes here -->
        <div class=\"p-3\">
            <h5>Profile</h5>
            <p>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", array()), "html", null, true);
        echo "</p>
            <hr class=\"mb-2\">
            <p><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reservation_user", array("id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">Mes reservations</a></p>
        </div>
        <div class=\"dropdown-divider\"></div>
        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\" class=\"dropdown-item dropdown-footer\">
            <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">logout</button>
        </a>
    </aside>
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" class=\"brand-link\">
            <i class=\"fa fa-paper-plane nav-icon\"></i>
            <span class=\"brand-text font-weight-light\"><b>OUL</b>AIR</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            ";
        // line 81
        $this->displayBlock('menu', $context, $blocks);
        // line 84
        echo "        </div>
        <!-- /.sidebar -->
    </aside>


    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">

                        <h1 class=\"m-0 text-dark\">
                            ";
        // line 97
        $this->displayBlock('titre_page', $context, $blocks);
        // line 100
        echo "                        </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 116
        echo "                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    ";
        // line 123
        echo "    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"float-right d-none d-sm-inline\">
            <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("info_legal");
        echo "\">Info legal</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">OULAIR</a>.</strong> All rights reserved.
    </footer>

</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=\" ";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\" ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "titre layout ";
    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        // line 82
        echo "
            ";
    }

    // line 97
    public function block_titre_page($context, array $blocks = array())
    {
        // line 98
        echo "                                ";
        // line 99
        echo "                            ";
    }

    // line 111
    public function block_main($context, array $blocks = array())
    {
        // line 112
        echo "


                    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 112,  255 => 111,  251 => 99,  249 => 98,  246 => 97,  241 => 82,  238 => 81,  232 => 12,  225 => 144,  220 => 142,  215 => 140,  202 => 130,  196 => 127,  190 => 123,  182 => 116,  180 => 111,  167 => 100,  165 => 97,  150 => 84,  148 => 81,  138 => 74,  128 => 67,  122 => 64,  117 => 62,  102 => 50,  97 => 48,  91 => 45,  82 => 38,  80 => 37,  78 => 36,  73 => 33,  55 => 18,  51 => 17,  46 => 15,  40 => 12,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\wamp64\\www\\oulair\\templates\\layout.html.twig");
    }
}
