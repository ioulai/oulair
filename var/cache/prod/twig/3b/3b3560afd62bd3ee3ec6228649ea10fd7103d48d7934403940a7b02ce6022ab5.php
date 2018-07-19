<?php

/* reservation/reservation_user.html.twig */
class __TwigTemplate_7c8eaffd225a2aea2575574fb8529cfcdc63480a7a46ca1b99c7fcceb20e989c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "reservation/reservation_user.html.twig", 1);
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
        // line 5
        echo "    Mes reservations
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("inc/nav.html.twig", "reservation/reservation_user.html.twig", 9)->display($context);
    }

    // line 12
    public function block_titre_page($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    Mes reservations
";
    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "reservations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 21
            echo "            <div class=\"ccol-lg-4 col-md-4 col-sm-4 col-xm-4\">
                <a href=\"\">
                    <div class=\"card card-widget widget-user\">
                        <div class=\"widget-user-header text-white\"
                             style=\"background: url(";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_replace_filter("../public/ressources/img/%image%", array("%image%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "flight", array()), "image", array())))), "html", null, true);
            echo ") center center;\">
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "flight", array()), "name", array()), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"card-body text-center\">
                                <p>Description : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "flight", array()), "description", array()), "html", null, true);
            echo "</p>

                                <p>Date de depart : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "flight", array()), "dateDeparture", array()), "d-m-Y"), "html", null, true);
            echo "</p>

                            </div>
                            <div class=\"col-5 pull-left\">
                                    <a href=\"\">
                                        <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">Modifier</button>
                                    </a>
                            </div>
                            <div class=\"col-5 pull-right\">
                                <a data-toggle=\"modal\" href=\"#modal_annuler_";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", array()), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-danger btn-block btn-flat\" type=\"submit\">Annuler</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>

                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 52
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 53
                    echo "                        <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
                            <h5>";
                    // line 54
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</h5>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "reservation/reservation_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  145 => 57,  136 => 54,  131 => 53,  126 => 52,  122 => 51,  111 => 43,  99 => 34,  94 => 32,  88 => 29,  81 => 25,  75 => 21,  70 => 20,  68 => 19,  66 => 18,  63 => 17,  58 => 14,  56 => 13,  53 => 12,  48 => 9,  45 => 8,  40 => 5,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reservation/reservation_user.html.twig", "C:\\wamp64\\www\\oulair\\templates\\reservation\\reservation_user.html.twig");
    }
}
