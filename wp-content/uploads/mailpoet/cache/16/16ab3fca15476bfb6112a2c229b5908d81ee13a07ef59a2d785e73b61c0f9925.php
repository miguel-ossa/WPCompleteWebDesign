<?php

/* form/templates/blocks/divider.hbs */
class __TwigTemplate_031704dd831594ba5b26675611beaccc4359fdac18e57a54e32867eecd9a64ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/divider.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/divider.hbs", "D:\\MAMP\\htdocs\\WPCompleteWebDesign\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\blocks\\divider.hbs");
    }
}
