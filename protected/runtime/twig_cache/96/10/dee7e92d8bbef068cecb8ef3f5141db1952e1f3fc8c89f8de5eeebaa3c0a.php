<?php

/* /components/views/mainMenu.twig */
class __TwigTemplate_9610dee7e92d8bbef068cecb8ef3f5141db1952e1f3fc8c89f8de5eeebaa3c0a extends Twig_Template
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
        $context["items"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMainMenu", array(), "method");
        // line 2
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 3
            echo "<ul style=\"padding-bottom: 60px;\">
\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t<li>
\t\t\t<a href=\"/page/";
                // line 6
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seo"), "alias")) ? ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seo"), "alias")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"))), "html", null, true);
                echo "/\">
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nav_label")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "nav_label")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"))), "html", null, true);
                echo "
\t\t\t</a>
\t\t\t";
                // line 9
                $context["qwert"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")), 2 => true), "method");
                // line 10
                echo "\t\t\t";
                echo (isset($context["qwert"]) ? $context["qwert"] : null);
                echo "
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/components/views/mainMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  44 => 10,  42 => 9,  37 => 7,  33 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
