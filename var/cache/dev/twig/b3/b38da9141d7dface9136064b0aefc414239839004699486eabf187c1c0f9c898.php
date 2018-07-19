<?php

/* inc/nav.html.twig */
class __TwigTemplate_8ccb1928601651858fa322ac88440b8bf64fb41311d5f7c746e2713f09ff539e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        // line 1
        echo "<!-- Sidebar Menu -->
<nav class=\"mt-2\">
    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link active\">
                <i class=\"nav-icon fa fa-dashboard\"></i>
                <p>
                    Tableau de bord
                    <i class=\"right fa fa-angle-left\"></i>
                </p>
            </a>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "role", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 16
            echo "            ";
            if (($context["role"] == "ROLE_CLIENT_AVION")) {
                // line 17
                echo "            <ul class=\"nav nav-treeview\">
                <li class=\"nav-item\">
                    <a href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("proposer_vol");
                echo "\" class=\"nav-link active\">
                        <i class=\"fa fa-plane nav-icon\"></i>
                        <p>Proposer vol</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("liste_vols");
                echo "\" class=\"nav-link\">
                        <i class=\"fa fa-circle-o nav-icon\"></i>
                        <p>Reserver</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    ";
            } else {
                // line 34
                echo "        <ul class=\"nav nav-treeview\">
            <li class=\"nav-item\">
                <a href=\"";
                // line 36
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("liste_vols");
                echo "\" class=\"nav-link\">
                    <i class=\"fa fa-circle-o nav-icon\"></i>
                    <p>Reserver</p>
                </a>
            </li>
        </ul>
        </li>
        </ul>
    ";
            }
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
</nav>
<!-- /.sidebar-menu -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  93 => 45,  81 => 36,  77 => 34,  65 => 25,  56 => 19,  52 => 17,  49 => 16,  45 => 15,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Sidebar Menu -->
<nav class=\"mt-2\">
    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link active\">
                <i class=\"nav-icon fa fa-dashboard\"></i>
                <p>
                    Tableau de bord
                    <i class=\"right fa fa-angle-left\"></i>
                </p>
            </a>
            {% for role in user.role %}
            {% if role == \"ROLE_CLIENT_AVION\" %}
            <ul class=\"nav nav-treeview\">
                <li class=\"nav-item\">
                    <a href=\"{{ url('proposer_vol') }}\" class=\"nav-link active\">
                        <i class=\"fa fa-plane nav-icon\"></i>
                        <p>Proposer vol</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ url('liste_vols') }}\" class=\"nav-link\">
                        <i class=\"fa fa-circle-o nav-icon\"></i>
                        <p>Reserver</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    {% else %}
        <ul class=\"nav nav-treeview\">
            <li class=\"nav-item\">
                <a href=\"{{ url('liste_vols') }}\" class=\"nav-link\">
                    <i class=\"fa fa-circle-o nav-icon\"></i>
                    <p>Reserver</p>
                </a>
            </li>
        </ul>
        </li>
        </ul>
    {% endif %}
    {% endfor %}

</nav>
<!-- /.sidebar-menu -->", "inc/nav.html.twig", "C:\\wamp64\\www\\oulair\\templates\\inc\\nav.html.twig");
    }
}
