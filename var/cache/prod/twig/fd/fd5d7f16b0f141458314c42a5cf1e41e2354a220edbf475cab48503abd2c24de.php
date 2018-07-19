<?php

/* reservation/reservation.html.twig */
class __TwigTemplate_2fd803eb400f2f2850944dda61d90b6e17b377a1556cbcec84037ffa95c92427 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "reservation/reservation.html.twig", 1);
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
        $this->loadTemplate("inc/nav.html.twig", "reservation/reservation.html.twig", 8)->display($context);
    }

    // line 11
    public function block_titre_page($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    Reservation d'un vol
";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        // line 18
        echo "    <div class=\"col-lg-1 col-md-1 col-sm-1 \">
        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("liste_vols");
        echo "\">
            <button class=\"btn btn-primary btn-block btn-flat\"><i class=\"fa fa-arrow-left\"></i></button>
        </a>
    </div>
    <div class=\"row\">

        <div class=\"col-lg-6 col-md-12 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <img class=\"d-block w-100\"
                         src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_replace_filter("../public/ressources/img/%image%", array("%image%" => twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "image", array())))), "html", null, true);
        echo "\"
                         alt=\"First slide\">
                </div>
                <div class=\"card-body text-center\">
                    <h4>VOL-";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "id", array()), "html", null, true);
        echo "</h4>
                    ";
        // line 35
        echo "                    <p>Lieu de Depart : ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "departure", array())), "html", null, true);
        echo "</p>
                    <p>Lieu d'arrive : ";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "arrive", array())), "html", null, true);
        echo "</p>
                    <p>Date de depart : ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "dateDeparture", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>Date d'arrivée : ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "dateArrive", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>Prix : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "price", array()), "html", null, true);
        echo "€</p>
                    <p>Nombre de places : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flight"] ?? null), "nbPlace", array()), "html", null, true);
        echo "</p>

                </div>
            </div>
        </div>

        <div class=\"register-box col-lg-6 col-md col-sm\">
            ";
        // line 48
        echo "            <div class=\"card\">
                <div class=\"card-body register-card-body\">
                    ";
        // line 50
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form_reservation"] ?? null), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 51
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_reservation"] ?? null), 'form_start');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form_reservation"] ?? null), 'widget');
        echo "
                    <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">Reserver</button>
                    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_reservation"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "reservation/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  134 => 52,  129 => 51,  127 => 50,  123 => 48,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  92 => 35,  88 => 33,  81 => 29,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  55 => 13,  53 => 12,  50 => 11,  45 => 8,  42 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reservation/reservation.html.twig", "C:\\wamp64\\www\\oulair\\templates\\reservation\\reservation.html.twig");
    }
}
