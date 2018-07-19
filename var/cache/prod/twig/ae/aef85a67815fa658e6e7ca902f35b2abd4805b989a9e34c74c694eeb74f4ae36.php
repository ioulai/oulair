<?php

/* base.html.twig */
class __TwigTemplate_284ab29e4dd2e85607e87ac4ecf01b9aa54dd0f1a726cd6384ac23d7d478cc0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>


\000\000\000";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "toto!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 9,  62 => 6,  56 => 5,  48 => 11,  45 => 10,  43 => 9,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\oulair\\templates\\base.html.twig");
    }
}
