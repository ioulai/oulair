<?php

/* flight/proposer_vol.html.twig */
class __TwigTemplate_810ceb9f2b38b90b12a886a4f00248b1a157b43e914c9d77a106e91c8ebbfdc7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "flight/proposer_vol.html.twig", 1);
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
        $this->loadTemplate("inc/nav.html.twig", "flight/proposer_vol.html.twig", 8)->display($context);
    }

    // line 11
    public function block_titre_page($context, array $blocks = array())
    {
        // line 12
        echo "    Proposer un vol
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"register-box col-lg-6\">
        ";
        // line 18
        echo "        <div class=\"card\">
            <div class=\"card-body register-card-body\">
                ";
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form_vol"] ?? null), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 21
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_vol"] ?? null), 'form_start');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form_vol"] ?? null), 'widget');
        echo "
                <button class=\"btn btn-primary btn-block btn-flat\" type=\"submit\">Ajouter</button>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_vol"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "flight/proposer_vol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  75 => 22,  70 => 21,  68 => 20,  64 => 18,  61 => 16,  58 => 15,  53 => 12,  50 => 11,  45 => 8,  42 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "flight/proposer_vol.html.twig", "C:\\wamp64\\www\\oulair\\templates\\flight\\proposer_vol.html.twig");
    }
}
