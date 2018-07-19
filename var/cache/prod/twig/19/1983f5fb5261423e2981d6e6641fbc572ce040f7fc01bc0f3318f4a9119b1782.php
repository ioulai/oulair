<?php

/* inc/nav.html.twig */
class __TwigTemplate_8af1dd1efc3040957211c2e60b3c9eb07f3551a6962bc18d5087c5924ebab399 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", array()));
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
        return array (  93 => 46,  87 => 45,  75 => 36,  71 => 34,  59 => 25,  50 => 19,  46 => 17,  43 => 16,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "inc/nav.html.twig", "C:\\wamp64\\www\\oulair\\templates\\inc\\nav.html.twig");
    }
}
