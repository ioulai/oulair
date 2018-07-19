<?php

/* flight/liste_vols.html.twig */
class __TwigTemplate_e9bac6e6a5664ddda2b9abbcde624210712b2ae54ec0f0c19fdd467f38d4f3e2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "flight/liste_vols.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'titre_page' => array($this, 'block_titre_page'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("inc/nav.html.twig", "flight/liste_vols.html.twig", 8)->display($context);
    }

    // line 11
    public function block_titre_page($context, array $blocks = array())
    {
        // line 12
        echo "    ";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flights"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 18
            echo "
            <div class=\"ccol-lg-4 col-md-4 col-sm-4 col-xm-4\">
                <a href=\"\">
                    <div class=\"card card-widget widget-user\">
                        <div class=\"widget-user-header text-white\"
                             style=\"background: url(";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_replace_filter("../public/ressources/img/%image%", array("%image%" => twig_get_attribute($this->env, $this->source, $context["flight"], "image", array())))), "html", null, true);
            echo ") center center;\">
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "name", array()), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"card-body text-center\">
                                <p>Description : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "description", array()), "html", null, true);
            echo "</p>

                                <p>Date de depart : ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "dateDeparture", array()), "d-m-Y"), "html", null, true);
            echo "</p>

                            </div>
                            <div class=\"col-5\">
                                ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["flight"], "user", array()), "id", array()) != twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))) {
                // line 37
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reservation", array("id" => twig_get_attribute($this->env, $this->source, $context["flight"], "id", array()))), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">Reserver</button>
                                </a>
                                ";
            }
            // line 41
            echo "                            </div>

                        </div>
                    </div>
                </a>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 47
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "                        <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
                            <h5>";
                    // line 49
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</h5>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "flight/liste_vols.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 52,  130 => 49,  125 => 48,  120 => 47,  116 => 46,  109 => 41,  101 => 37,  99 => 36,  92 => 32,  87 => 30,  81 => 27,  74 => 23,  67 => 18,  62 => 17,  60 => 16,  57 => 15,  53 => 12,  50 => 11,  45 => 8,  42 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "flight/liste_vols.html.twig", "C:\\wamp64\\www\\oulair\\templates\\flight\\liste_vols.html.twig");
    }
}
