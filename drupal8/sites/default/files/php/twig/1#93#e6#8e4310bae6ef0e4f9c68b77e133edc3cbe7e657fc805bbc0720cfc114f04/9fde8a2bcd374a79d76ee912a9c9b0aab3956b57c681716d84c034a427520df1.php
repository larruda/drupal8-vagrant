<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_93e68e4310bae6ef0e4f9c68b77e133edc3cbe7e657fc805bbc0720cfc114f04 extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var((isset($context["html_attributes"]) ? $context["html_attributes"] : null));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var((isset($context["head"]) ? $context["head"] : null));
        echo "
    <title>";
        // line 33
        echo twig_render_var((isset($context["head_title"]) ? $context["head_title"] : null));
        echo "</title>
    ";
        // line 34
        echo twig_render_var((isset($context["styles"]) ? $context["styles"] : null));
        echo "
    ";
        // line 35
        echo twig_render_var((isset($context["scripts"]) ? $context["scripts"] : null));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var((isset($context["page_top"]) ? $context["page_top"] : null));
        echo "
    ";
        // line 42
        echo twig_render_var((isset($context["page"]) ? $context["page"] : null));
        echo "
    ";
        // line 43
        echo twig_render_var((isset($context["page_bottom"]) ? $context["page_bottom"] : null));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 37,  22 => 30,  66 => 54,  49 => 39,  31 => 33,  20 => 44,  42 => 19,  33 => 17,  77 => 58,  74 => 43,  68 => 41,  48 => 48,  45 => 51,  39 => 35,  354 => 207,  348 => 204,  345 => 203,  343 => 202,  340 => 201,  334 => 198,  330 => 197,  326 => 196,  322 => 195,  319 => 194,  317 => 193,  312 => 190,  306 => 187,  302 => 186,  298 => 185,  295 => 184,  293 => 183,  288 => 180,  282 => 177,  279 => 176,  277 => 175,  274 => 174,  268 => 171,  265 => 170,  263 => 169,  257 => 166,  252 => 165,  246 => 162,  243 => 161,  241 => 160,  236 => 159,  230 => 156,  227 => 155,  225 => 154,  220 => 153,  214 => 150,  211 => 149,  209 => 148,  205 => 147,  202 => 146,  196 => 145,  190 => 142,  186 => 140,  180 => 137,  177 => 136,  175 => 135,  172 => 134,  166 => 131,  163 => 130,  161 => 129,  157 => 127,  151 => 124,  148 => 123,  141 => 120,  138 => 119,  128 => 114,  121 => 113,  119 => 112,  103 => 107,  96 => 106,  83 => 101,  75 => 99,  72 => 98,  61 => 95,  38 => 88,  29 => 46,  27 => 32,  85 => 44,  71 => 55,  65 => 37,  63 => 53,  54 => 41,  50 => 91,  32 => 43,  26 => 41,  60 => 53,  57 => 51,  51 => 55,  47 => 31,  35 => 34,  25 => 45,  23 => 27,  21 => 13,  155 => 93,  149 => 90,  146 => 122,  143 => 88,  137 => 85,  134 => 117,  131 => 83,  125 => 81,  122 => 80,  116 => 111,  113 => 110,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 105,  90 => 67,  84 => 64,  81 => 46,  79 => 43,  76 => 58,  70 => 97,  67 => 54,  64 => 39,  58 => 42,  55 => 37,  52 => 51,  46 => 47,  43 => 90,  41 => 46,  36 => 31,  30 => 28,  28 => 27,  24 => 16,  19 => 29,);
    }
}
