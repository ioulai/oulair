<?php

/* user/login.html.twig */
class __TwigTemplate_410fb9d188c278eec6a26c9ddd33e235cfa29ebb63b1b0780098b29d62bae4f3 extends Twig_Template
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
        if (($context["error"] ?? null)) {
            // line 35
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  132 => 72,  127 => 70,  122 => 68,  110 => 59,  107 => 58,  105 => 57,  103 => 56,  90 => 45,  82 => 40,  75 => 37,  69 => 35,  67 => 34,  48 => 18,  44 => 17,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/login.html.twig", "C:\\wamp64\\www\\oulair\\templates\\user\\login.html.twig");
    }
}
