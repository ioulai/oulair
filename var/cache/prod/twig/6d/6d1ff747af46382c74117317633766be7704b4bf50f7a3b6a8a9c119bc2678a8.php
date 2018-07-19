<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_45fe3b7564a37e67250546cb3ce11e679e2cc36875b4ff42be2bdfacc4a85516 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\oulair\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
