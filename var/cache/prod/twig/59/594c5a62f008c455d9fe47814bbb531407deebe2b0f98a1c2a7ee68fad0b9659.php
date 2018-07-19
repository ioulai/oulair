<?php

/* main/squelette.html.twig */
class __TwigTemplate_442bf11c4e7bec38b6117a8bdd3158e0b21ececef21b1ada95c74ee6ed3e9af1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "main/squelette.html.twig", 1);
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
        $this->loadTemplate("inc/nav.html.twig", "main/squelette.html.twig", 8)->display($context);
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
    }

    public function getTemplateName()
    {
        return "main/squelette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  57 => 15,  53 => 12,  50 => 11,  45 => 8,  42 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main/squelette.html.twig", "C:\\wamp64\\www\\oulair\\templates\\main\\squelette.html.twig");
    }
}
