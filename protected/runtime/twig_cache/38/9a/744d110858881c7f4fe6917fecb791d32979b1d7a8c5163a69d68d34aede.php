<?php

/* views/layouts/contacts_index.twig */
class __TwigTemplate_389a744d110858881c7f4fe6917fecb791d32979b1d7a8c5163a69d68d34aede extends Twig_Template
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
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <!--[if IE]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
  <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pagetitle"), "html", null, true);
        echo "</title>
  <link rel=\"stylesheet\" href=\"/css/style2.css?v4\" type=\"text/css\" media=\"screen, projection\" />
  <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.css?v2\" />
  <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap-responsive.css?v2\" />
  <script type=\"text/javascript\" src=\"/scripts/jquery-1.9.1.js?v2\"></script>
  <script type=\"text/javascript\" src=\"/bootstrap/js/bootstrap.js?v2\"></script>
  <!--[if lte IE 6]><link rel=\"stylesheet\" href=\"style_ie.css\" type=\"text/css\" media=\"screen, projection\" /><![endif]-->
</head>

<body>

<div id=\"wrapper\">

  <header id=\"header\">
    <h1 class=\"mainlabel\">Капитал</h1>
    <div id=\"usermnu\">
      ";
        // line 22
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "MainMenu", 1 => array("rootId" => 0), 2 => true), "method");
        echo "
    </div>
  </header><!-- #header-->

  <section id=\"middle\">
    <div id=\"container\">
      <div id=\"content\"><div id=\"contwrap\">
        <div class=\"contact-l\">
            <h1 class=\"contlabel\">НАПИШИТЕ НАМ</h1>
            <form id=\"feedback\" action=\"/feedback/send/\" method=\"POST\">
            <table cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <th scope=\"row\">Ваше имя</th>
                <td><input class=\"pole\" name=\"FbMessages[sndr_name]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Телефон</th>
                <td><input class=\"pole\" name=\"FbMessages[sndr_phone]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Электропочта</th>
                <td><input class=\"pole\" name=\"FbMessages[sndr_email]\" type=\"text\"></td>
              </tr>
              <tr>
                <th scope=\"row\">Сообщение</th>
                <td><textarea name=\"FbMessages[sndr_message]\" cols=\"\" rows=\"\"></textarea></td>
              </tr>
              <tr>
                <th scope=\"row\">&nbsp;</th>
                <td><input class=\"btn2\" name=\"\" type=\"submit\" value=\"Отправить\"></td>
              </tr>
            </table>
            </form>
        </div><!--end contact-l-->
        <div class=\"contact-r\"> 
            ";
        // line 57
        $this->displayBlock('maincontent', $context, $blocks);
        // line 60
        echo "        </div><!--end contact-r-->
      </div></div><!-- #content-->
    </div><!-- #container-->

    </div>
  </section><!-- #middle-->

</div><!-- #wrapper -->

<footer id=\"footer\">
  <p><i>(с) Copyright 2014</i></p>
</footer><!-- #footer -->

</body>
</html>";
    }

    // line 57
    public function block_maincontent($context, array $blocks = array())
    {
        // line 58
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "views/layouts/contacts_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 58,  104 => 57,  86 => 60,  84 => 57,  46 => 22,  27 => 6,  20 => 1,);
    }
}
