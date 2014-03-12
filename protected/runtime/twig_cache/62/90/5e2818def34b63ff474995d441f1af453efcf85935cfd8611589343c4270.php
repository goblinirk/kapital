<?php

/* views/pages/_seoform.twig */
class __TwigTemplate_62905e2818def34b63ff474995d441f1af453efcf85935cfd8611589343c4270 extends Twig_Template
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
        echo "<div class=\"seoform\">

\t<div class=\"row\">
        ";
        // line 4
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "show_in_nav"), "method");
        echo "
        ";
        // line 5
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropDownList", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "show_in_nav", 2 => array("1" => " Да ", "0" => " Нет ")), "method");
        echo "
        ";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "show_in_nav"), "method");
        echo "
    </div><!-- /.row -->

\t<div class=\"row\">
\t\t";
        // line 10
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "nav_label"), "method");
        echo "
        ";
        // line 11
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "nav_label", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "nav_label"), "method");
        echo "
\t</div>

<hr />

\t<div class=\"row\">
\t\t";
        // line 18
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "template"), "method");
        echo "
        ";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "template", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "template"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "alias"), "method");
        echo "
        ";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "alias", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 26
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "alias"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 30
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "redirect_url"), "method");
        echo "
        ";
        // line 31
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "redirect_url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
        ";
        // line 32
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "redirect_url"), "method");
        echo "
\t</div>

<hr />

\t<div class=\"row\">
\t\t";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "title"), "method");
        echo "
        ";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "title", 2 => array("size" => 60, "maxlength" => 128)), "method");
        echo "
        ";
        // line 40
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_keywords"), "method");
        echo "
        ";
        // line 45
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_keywords", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 46
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_keywords"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_description"), "method");
        echo "
        ";
        // line 51
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_description", 2 => array("size" => 60, "maxlength" => 500)), "method");
        echo "
        ";
        // line 52
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["seo"]) ? $context["seo"] : null), 1 => "meta_description"), "method");
        echo "
\t</div>

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "views/pages/_seoform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 52,  133 => 50,  126 => 46,  122 => 45,  111 => 40,  107 => 39,  103 => 38,  94 => 32,  90 => 31,  79 => 26,  75 => 25,  64 => 20,  60 => 19,  47 => 12,  43 => 11,  39 => 10,  32 => 6,  24 => 4,  180 => 89,  174 => 85,  170 => 84,  167 => 83,  165 => 82,  137 => 51,  131 => 54,  127 => 52,  125 => 51,  118 => 44,  114 => 46,  110 => 45,  101 => 39,  97 => 38,  93 => 37,  86 => 30,  82 => 32,  78 => 31,  71 => 24,  67 => 26,  63 => 25,  56 => 18,  52 => 20,  48 => 19,  41 => 15,  33 => 13,  25 => 7,  23 => 3,  19 => 1,  37 => 14,  31 => 4,  28 => 5,);
    }
}
