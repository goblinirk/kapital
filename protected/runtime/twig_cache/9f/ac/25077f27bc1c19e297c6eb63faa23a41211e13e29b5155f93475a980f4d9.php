<?php

/* /views/pages/news.twig */
class __TwigTemplate_9fac25077f27bc1c19e297c6eb63faa23a41211e13e29b5155f93475a980f4d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/index_inner.twig");

        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/index_inner.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_maincontent($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<h2>Новости</h2><br /><br />
    
    ";
        // line 9
        $context["tmp"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.CListView", 1 => array("dataProvider" => (isset($context["dataProvider"]) ? $context["dataProvider"] : null), "itemView" => "_news", "template" => "{items}{pager}"), 2 => true), "method");
        // line 14
        echo "
\t";
        // line 15
        echo (isset($context["tmp"]) ? $context["tmp"] : null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "/views/pages/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  38 => 14,  36 => 9,  31 => 6,  28 => 5,);
    }
}
