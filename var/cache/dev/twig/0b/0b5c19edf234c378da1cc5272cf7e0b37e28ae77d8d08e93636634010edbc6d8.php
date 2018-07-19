<?php

/* user/login.html.twig */
class __TwigTemplate_16e18b952ab85eb3b8b7203ef57dd14402e8d85494c79f9653b4e9eb53215bdc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>OULAIR | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/parallax.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>

<body class=\"hold-transition login-page\">
<div class=\"parallax\"></div>
<div class=\"login-box\">
    <div class=\"login-logo\">
        <i class=\"fa fa-paper-plane nav-icon\"></i> <a href=\"\"><b>OUL</b>AIR</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <p class=\"login-box-msg\">Sign in</p>

            ";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 37
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <label for=\"username\">Username:</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group has-feedback\">
                    <label  for=\"password\">Password:</label>
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" />
                </div>
                <div class=\"col-4\">
                <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">login</button>
                </div>


            </form>
            <!-- /.social-auth-links -->

            ";
        // line 56
        echo "                ";
        // line 57
        echo "            ";
        // line 58
        echo "            <p class=\"mb-0\">
                <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "\" class=\"text-center\">Register</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ressources/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass   : 'iradio_square-blue',
            increaseArea : '20%' // optional
        })
    })
</script>
</body>
</html>
\000\000\000\000";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  133 => 70,  128 => 68,  116 => 59,  113 => 58,  111 => 57,  109 => 56,  96 => 45,  88 => 40,  81 => 37,  75 => 35,  73 => 34,  54 => 18,  50 => 17,  45 => 15,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>OULAIR | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('ressources/dist/css/adminlte.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('ressources/plugins/iCheck/square/blue.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('ressources/parallax.css') }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>

<body class=\"hold-transition login-page\">
<div class=\"parallax\"></div>
<div class=\"login-box\">
    <div class=\"login-logo\">
        <i class=\"fa fa-paper-plane nav-icon\"></i> <a href=\"\"><b>OUL</b>AIR</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <p class=\"login-box-msg\">Sign in</p>

            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            <form action=\"{{ path('login') }}\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <label for=\"username\">Username:</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                </div>
                <div class=\"form-group has-feedback\">
                    <label  for=\"password\">Password:</label>
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ url('home') }}\" />
                </div>
                <div class=\"col-4\">
                <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">login</button>
                </div>


            </form>
            <!-- /.social-auth-links -->

            {#<p class=\"mb-1\">#}
                {#<a href=\"#\">I forgot my password</a>#}
            {#</p>#}
            <p class=\"mb-0\">
                <a href=\"{{ url('register') }}\" class=\"text-center\">Register</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"{{ asset('ressources/plugins/jquery/jquery.min.js') }}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('ressources/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('ressources/plugins/iCheck/icheck.min.js') }}\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass   : 'iradio_square-blue',
            increaseArea : '20%' // optional
        })
    })
</script>
</body>
</html>
\000\000\000\000", "user/login.html.twig", "C:\\wamp64\\www\\oulair\\templates\\user\\login.html.twig");
    }
}
