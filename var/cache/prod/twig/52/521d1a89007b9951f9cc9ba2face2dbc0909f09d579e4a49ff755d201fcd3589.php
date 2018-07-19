<?php

/* reservation/reservation_remove.html.twig */
class __TwigTemplate_cf5bbb22bdc705b17062fd6290b71ce3e226ac0b4a9a11bd6334d3d62ac3cf68 extends Twig_Template
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
        echo "<div class=\"modal bg-danger-gradient\" id=\"modal_annuler_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "id", array()), "html", null, true);
        echo "\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <h4 class=\"modal-title\">Annuler</h4>
        </div>
    </div>

    <div class=\"modal-body\">

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "reservation/reservation_remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reservation/reservation_remove.html.twig", "C:\\wamp64\\www\\oulair\\templates\\reservation\\reservation_remove.html.twig");
    }
}
