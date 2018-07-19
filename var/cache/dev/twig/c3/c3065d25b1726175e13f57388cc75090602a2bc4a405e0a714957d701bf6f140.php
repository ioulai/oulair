<?php

/* reservation/reservation.html.twig */
class __TwigTemplate_3085dfd2234602ce2c85eb7941a971e7f48d305bd731371c83a52e06129b9403 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "    ";
        $this->loadTemplate("inc/nav.html.twig", "reservation/reservation.html.twig", 8)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        // line 12
        echo "    ";
        // line 13
        echo "    Reservation d'un vol
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_replace_filter("../public/ressources/img/%image%", array("%image%" => twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 29, $this->source); })()), "image", array())))), "html", null, true);
        echo "\"
                         alt=\"First slide\">
                </div>
                <div class=\"card-body text-center\">
                    <h4>VOL-";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 33, $this->source); })()), "id", array()), "html", null, true);
        echo "</h4>
                    ";
        // line 35
        echo "                    <p>Lieu de Depart : ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 35, $this->source); })()), "departure", array())), "html", null, true);
        echo "</p>
                    <p>Lieu d'arrive : ";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 36, $this->source); })()), "arrive", array())), "html", null, true);
        echo "</p>
                    <p>Date de depart : ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 37, $this->source); })()), "dateDeparture", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>Date d'arrivée : ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 38, $this->source); })()), "dateArrive", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>Prix : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 39, $this->source); })()), "price", array()), "html", null, true);
        echo "€</p>
                    <p>Nombre de places : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 40, $this->source); })()), "nbPlace", array()), "html", null, true);
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form_reservation"]) || array_key_exists("form_reservation", $context) ? $context["form_reservation"] : (function () { throw new Twig_Error_Runtime('Variable "form_reservation" does not exist.', 50, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 51
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_reservation"]) || array_key_exists("form_reservation", $context) ? $context["form_reservation"] : (function () { throw new Twig_Error_Runtime('Variable "form_reservation" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_reservation"]) || array_key_exists("form_reservation", $context) ? $context["form_reservation"] : (function () { throw new Twig_Error_Runtime('Variable "form_reservation" does not exist.', 52, $this->source); })()), 'widget');
        echo "
                    <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">Reserver</button>
                    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_reservation"]) || array_key_exists("form_reservation", $context) ? $context["form_reservation"] : (function () { throw new Twig_Error_Runtime('Variable "form_reservation" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  193 => 54,  188 => 52,  183 => 51,  181 => 50,  177 => 48,  167 => 40,  163 => 39,  159 => 38,  155 => 37,  151 => 36,  146 => 35,  142 => 33,  135 => 29,  122 => 19,  119 => 18,  117 => 17,  108 => 16,  97 => 13,  95 => 12,  86 => 11,  75 => 8,  66 => 7,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends('layout.html.twig') %}

{% block title %}
    {#contenue ici#}
{% endblock %}

{% block menu %}
    {% include('inc/nav.html.twig') %}
{% endblock %}

{% block titre_page %}
    {#contenue ici#}
    Reservation d'un vol
{% endblock %}

{% block main %}
    {#contenue ici#}
    <div class=\"col-lg-1 col-md-1 col-sm-1 \">
        <a href=\"{{ url('liste_vols') }}\">
            <button class=\"btn btn-primary btn-block btn-flat\"><i class=\"fa fa-arrow-left\"></i></button>
        </a>
    </div>
    <div class=\"row\">

        <div class=\"col-lg-6 col-md-12 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <img class=\"d-block w-100\"
                         src=\"{{ asset('../public/ressources/img/%image%'|replace({'%image%': flight.image})) }}\"
                         alt=\"First slide\">
                </div>
                <div class=\"card-body text-center\">
                    <h4>VOL-{{ flight.id }}</h4>
                    {#<p>{{ flight[user.name] }} </p>#}
                    <p>Lieu de Depart : {{ flight.departure|upper }}</p>
                    <p>Lieu d'arrive : {{ flight.arrive |upper }}</p>
                    <p>Date de depart : {{ flight.dateDeparture| date('d-m-Y') }}</p>
                    <p>Date d'arrivée : {{ flight.dateArrive|date('d-m-Y') }}</p>
                    <p>Prix : {{ flight.price }}€</p>
                    <p>Nombre de places : {{ flight.nbPlace }}</p>

                </div>
            </div>
        </div>

        <div class=\"register-box col-lg-6 col-md col-sm\">
            {#contenue ici#}
            <div class=\"card\">
                <div class=\"card-body register-card-body\">
                    {% form_theme form_reservation 'bootstrap_4_layout.html.twig' %}
                    {{ form_start(form_reservation) }}
                    {{ form_widget(form_reservation) }}
                    <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">Reserver</button>
                    {{ form_end(form_reservation) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "reservation/reservation.html.twig", "C:\\wamp64\\www\\oulair\\templates\\reservation\\reservation.html.twig");
    }
}
