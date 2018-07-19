<?php

/* main/info_legal.html.twig */
class __TwigTemplate_ad9e8272e987f538d55c673ad02057e0d1617a98d441c0662ffcdd5e1b78d28e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "main/info_legal.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Informations legales";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("inc/nav.html.twig", "main/info_legal.html.twig", 4)->display($context);
    }

    // line 6
    public function block_titre_page($context, array $blocks = array())
    {
        // line 7
        echo "    Informations legales
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">OULAIR</h5>
                <p>
                    Tel : 0123456789<br>
                    Email : contact@oulair.com<br>
                    SAS au capital de 200.000.000€ RCS Nantes Z 000 111 222 333<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris<br>
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <br>

                </p>
            </div>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "main/info_legal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  57 => 9,  52 => 7,  49 => 6,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main/info_legal.html.twig", "C:\\wamp64\\www\\oulair\\templates\\main\\info_legal.html.twig");
    }
}
