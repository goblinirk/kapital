<?php

/* /views/pages/shownews.twig */
class __TwigTemplate_94902a1ae903afdcdbd4607b1db148a4bc17e3c65acfc5d32f60595a1d616d1c extends Twig_Template
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

    // line 3
    public function block_maincontent($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 style=\"margin:0px; padding-bottom: 0px; font-weight: normal;font-size: 20px;padding: 5px 0 10px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "label"));
        echo "</h3>
    <i style=\"font-style:italic;font-size: 13px;\">Дата публикации: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "dateFormatter"), "format", array(0 => "dd MMM y", 1 => strtotime($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "create_date"))), "method"), "html", null, true);
        echo "
    </i>
    <br /><br />

    ";
        // line 9
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "full_text");
        echo "
    <br />
    <a href=\"/news/\">Все новости</a>
    <br /><br />

";
    }

    public function getTemplateName()
    {
        return "/views/pages/shownews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 5,  31 => 4,  28 => 3,);
    }
}
