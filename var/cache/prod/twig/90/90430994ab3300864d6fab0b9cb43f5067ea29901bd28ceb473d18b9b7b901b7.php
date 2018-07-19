<?php

/* main/home.html.twig */
class __TwigTemplate_fb267348b66a9301c9456f799f5535d271acd6833a9e2015b77431c5e788b280 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "main/home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'bienvenue' => array($this, 'block_bienvenue'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("inc/nav.html.twig", "main/home.html.twig", 4)->display($context);
    }

    // line 6
    public function block_bienvenue($context, array $blocks = array())
    {
        // line 7
        echo "Bienvenue ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " !
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <p>
                    Bienvenue sur OULAIR !<br>
                    Site de reservation et de partage de vol !<br>
                    Vivez une experience riche en émotion !
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-lg-7\">
        <div class=\"card\">
            <!-- /.card-header -->
            <div class=\"card-body\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flights"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 34
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) {
                // line 35
                echo "                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\"
                                         src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_replace_filter("../public/ressources/img/%image%", array("%image%" => twig_get_attribute($this->env, $this->source, $context["flight"], "image", array())))), "html", null, true);
                echo "\"
                                         alt=\"First slide\">
                                </div>
                            ";
            } else {
                // line 41
                echo "                                <div class=\"carousel-item \">
                                    <img class=\"d-block w-100\"
                                         src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_replace_filter("../public/ressources/img/%image%", array("%image%" => twig_get_attribute($this->env, $this->source, $context["flight"], "image", array())))), "html", null, true);
                echo "\"
                                         alt=\"First slide\">
                                </div>
                            ";
            }
            // line 47
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  129 => 47,  122 => 43,  118 => 41,  111 => 37,  107 => 35,  104 => 34,  87 => 33,  62 => 10,  59 => 9,  52 => 7,  49 => 6,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main/home.html.twig", "C:\\wamp64\\www\\oulair\\templates\\main\\home.html.twig");
    }
}
