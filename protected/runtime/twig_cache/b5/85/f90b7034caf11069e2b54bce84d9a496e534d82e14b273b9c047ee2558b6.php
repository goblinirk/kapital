<?php

/* /views/users/view.twig */
class __TwigTemplate_b585f90b7034caf11069e2b54bce84d9a496e534d82e14b273b9c047ee2558b6 extends Twig_Template
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
        echo "<div class=\"b-dop-serv\">
\t<h1 class=\"contlabel\">ВАШ ПРОФИЛЬ</h1>
    <dl>
    \t<dt>Ваше имя: </dt><dd>";
        // line 7
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "realname");
        echo "</dd>
    \t<dt>Телефон: </dt><dd>";
        // line 8
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "phone");
        echo "</dd>
    \t<dt>E-Mail: </dt><dd>";
        // line 9
        echo $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "email");
        echo "</dd>
    \t<hr />
    \t<dt>Тарифный план: </dt><dd>Старт</dd>
    </dl>
</div><!--end b-dop-serv-->
";
    }

    public function getTemplateName()
    {
        return "/views/users/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
