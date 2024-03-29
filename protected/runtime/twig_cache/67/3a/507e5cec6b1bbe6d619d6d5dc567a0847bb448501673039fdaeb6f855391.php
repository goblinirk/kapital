<?php

/* /components/views/galleries.twig */
class __TwigTemplate_673a507e5cec6b1bbe6d619d6d5dc567a0847bb448501673039fdaeb6f855391 extends Twig_Template
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
        $context["items"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getGalleryBlock", array(), "method");
        // line 2
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "\t\t<h2>";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "label") == "")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label")) : ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "label"))), "html", null, true);
                echo "</h2>
\t\t";
                // line 5
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showdesc")) {
                    echo "<p>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
                    echo "</p>";
                }
                // line 6
                echo "\t\t<div class=\"bs-gallery\">
\t\t\t";
                // line 7
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "images"));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 8
                    echo "\t\t\t\t";
                    echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.lyiightbox.LyiightBox2", 1 => array("thumbnail" => $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "thumb"), "image" => $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "large"), "title" => $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "description")), 2 => true), "method");
                    // line 12
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/components/views/galleries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  49 => 12,  46 => 8,  42 => 7,  39 => 6,  33 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
