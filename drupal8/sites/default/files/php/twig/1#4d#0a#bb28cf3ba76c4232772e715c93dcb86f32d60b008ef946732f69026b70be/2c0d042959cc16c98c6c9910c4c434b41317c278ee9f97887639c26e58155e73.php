<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_4d0abb28cf3ba76c4232772e715c93dcb86f32d60b008ef946732f69026b70be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 44
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 45
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
  ";
        // line 46
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 47
            echo "    <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

  <div";
        // line 51
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "  </div>
</div>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "      ";
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 52,  31 => 47,  20 => 44,  42 => 19,  33 => 17,  77 => 44,  74 => 43,  68 => 41,  48 => 35,  45 => 51,  39 => 49,  354 => 207,  348 => 204,  345 => 203,  343 => 202,  340 => 201,  334 => 198,  330 => 197,  326 => 196,  322 => 195,  319 => 194,  317 => 193,  312 => 190,  306 => 187,  302 => 186,  298 => 185,  295 => 184,  293 => 183,  288 => 180,  282 => 177,  279 => 176,  277 => 175,  274 => 174,  268 => 171,  265 => 170,  263 => 169,  257 => 166,  252 => 165,  246 => 162,  243 => 161,  241 => 160,  236 => 159,  230 => 156,  227 => 155,  225 => 154,  220 => 153,  214 => 150,  211 => 149,  209 => 148,  205 => 147,  202 => 146,  196 => 145,  190 => 142,  186 => 140,  180 => 137,  177 => 136,  175 => 135,  172 => 134,  166 => 131,  163 => 130,  161 => 129,  157 => 127,  151 => 124,  148 => 123,  141 => 120,  138 => 119,  128 => 114,  121 => 113,  119 => 112,  103 => 107,  96 => 106,  83 => 101,  75 => 99,  72 => 98,  61 => 95,  38 => 88,  29 => 46,  27 => 83,  85 => 44,  71 => 39,  65 => 37,  63 => 96,  54 => 33,  50 => 91,  32 => 29,  26 => 25,  60 => 53,  57 => 52,  51 => 55,  47 => 31,  35 => 43,  25 => 45,  23 => 27,  21 => 13,  155 => 93,  149 => 90,  146 => 122,  143 => 88,  137 => 85,  134 => 117,  131 => 83,  125 => 81,  122 => 80,  116 => 111,  113 => 110,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 105,  90 => 67,  84 => 64,  81 => 46,  79 => 43,  76 => 58,  70 => 97,  67 => 54,  64 => 39,  58 => 94,  55 => 37,  52 => 51,  46 => 48,  43 => 90,  41 => 89,  36 => 31,  30 => 28,  28 => 27,  24 => 14,  19 => 12,);
    }
}
