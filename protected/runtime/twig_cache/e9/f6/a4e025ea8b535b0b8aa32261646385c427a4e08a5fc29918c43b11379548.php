<?php

/* /views/pages/update.twig */
class __TwigTemplate_e9f6a4e025ea8b535b0b8aa32261646385c427a4e08a5fc29918c43b11379548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Редактирование записи # ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id"), "html", null, true);
        echo "</h1>
\t 
\t";
        // line 6
        $this->env->loadTemplate("views/pages/_form.twig")->display(array_merge($context, array("model" => (isset($context["model"]) ? $context["model"] : null), "seo" => (isset($context["seo"]) ? $context["seo"] : null))));
    }

    public function getTemplateName()
    {
        return "/views/pages/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  28 => 3,);
    }
}
