<?php

/* views/layouts/index_inner.twig */
class __TwigTemplate_ade4e56ffae6880d0a7be4ac0baee748a121012ac80d91fb20bf0e76b1d70a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<!--[if IE]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
\t<title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pagetitle"), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"/css/style2.css?v4\" type=\"text/css\" media=\"screen, projection\" />
\t<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.css?v2\" />
\t<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap-responsive.css?v2\" />
\t<script type=\"text/javascript\" src=\"/scripts/jquery-1.9.1.js?v2\"></script>
\t<script type=\"text/javascript\" src=\"/bootstrap/js/bootstrap.js?v2\"></script>
\t<!--[if lte IE 6]><link rel=\"stylesheet\" href=\"style_ie.css\" type=\"text/css\" media=\"screen, projection\" /><![endif]-->
</head>

<body>

<div id=\"wrapper\">

\t<header id=\"header\">
\t\t<h1 class=\"mainlabel\">Капитал</h1>
\t\t<div id=\"usermnu\">
\t\t\t";
        // line 22
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
\t\t</div>
\t</header><!-- #header-->

\t<section id=\"middle\">
\t\t<div id=\"container\">
\t\t\t<div id=\"content\"><div id=\"contwrap\">


\t\t\t\t";
        // line 31
        $this->displayBlock('maincontent', $context, $blocks);
        // line 34
        echo "\t\t\t</div></div><!-- #content-->
\t\t</div><!-- #container-->

\t\t</div>
\t</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id=\"footer\">
\t<p><i>(с) Copyright 2014</i></p>
</footer><!-- #footer -->

</body>
</html>";
    }

    // line 31
    public function block_maincontent($context, array $blocks = array())
    {
        // line 32
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "views/layouts/index_inner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  77 => 31,  60 => 34,  58 => 31,  46 => 22,  27 => 6,  20 => 1,);
    }
}
