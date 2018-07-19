<?php

/* layout.html.twig */
class __TwigTemplate_a7e4d196e06f609e79ca088464e3b02693c8a9cb71add27cb55e2f320123d880 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "name", array())), "html", null, true);
        echo "</i></a>

                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-header\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->source); })()), "mail", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->source); })()), "mail", array()), "html", null, true);
        echo "</p>
            <hr class=\"mb-2\">
            <p><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reservation_user", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->source); })()), "id", array()))), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "titre layout ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 82
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        // line 98
        echo "                                ";
        // line 99
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 112
        echo "


                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  312 => 112,  303 => 111,  293 => 99,  291 => 98,  282 => 97,  271 => 82,  262 => 81,  244 => 12,  231 => 144,  226 => 142,  221 => 140,  208 => 130,  202 => 127,  196 => 123,  188 => 116,  186 => 111,  173 => 100,  171 => 97,  156 => 84,  154 => 81,  144 => 74,  134 => 67,  128 => 64,  123 => 62,  108 => 50,  103 => 48,  97 => 45,  88 => 38,  86 => 37,  84 => 36,  79 => 33,  61 => 18,  57 => 17,  52 => 15,  46 => 12,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <title>{% block title %}titre layout {% endblock %}</title>

    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\" {{ asset('ressources/plugins/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('ressources/dist/css/adminlte.min.css') }}\">
    <link rel=\"icon\" href=\"{{ asset(\"ressources/img/paper-plane.png\") }}\">
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
                <a href=\"{{ url('home') }}\" class=\"nav-link\">Home</a>
            </li>
            {#<li class=\"nav-item d-none d-sm-inline-block\">#}
                {#<a href=\"#\" class=\"nav-link\">Contact</a>#}
            {#</li>#}
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\"><i
                            class=\"fa fa-user\"> {{ user.name | upper }}</i></a>

                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-header\">{{ user.mail }}</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"{{ url('logout') }}\" class=\"dropdown-item dropdown-footer\">
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
            <p>{{ user.mail }}</p>
            <hr class=\"mb-2\">
            <p><a href=\"{{ url('reservation_user',{id:user.id}) }}\">Mes reservations</a></p>
        </div>
        <div class=\"dropdown-divider\"></div>
        <a href=\"{{ url('logout') }}\" class=\"dropdown-item dropdown-footer\">
            <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">logout</button>
        </a>
    </aside>
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"{{ url('home') }}\" class=\"brand-link\">
            <i class=\"fa fa-paper-plane nav-icon\"></i>
            <span class=\"brand-text font-weight-light\"><b>OUL</b>AIR</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            {% block menu %}

            {% endblock %}
        </div>
        <!-- /.sidebar -->
    </aside>


    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">

                        <h1 class=\"m-0 text-dark\">
                            {% block titre_page %}
                                {#Bienvenue {{ user.name }} !#}
                            {% endblock %}
                        </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    {% block main %}



                    {% endblock %}
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {#endblock#}
    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"float-right d-none d-sm-inline\">
            <a href=\"{{ url('info_legal') }}\">Info legal</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href=\"{{ url('home') }}\">OULAIR</a>.</strong> All rights reserved.
    </footer>

</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=\" {{ asset('ressources/plugins/jquery/jquery.min.js') }}\"></script>
<!-- Bootstrap 4 -->
<script src=\" {{ asset('ressources/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('ressources/dist/js/adminlte.min.js') }}\"></script>
</body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\oulair\\templates\\layout.html.twig");
    }
}
