<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_773ffa4f9c2a12d7b8b1c1a5ecc16cad5a2f941d896ec85dc18e1685bf06fc95 extends Twig_Template
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
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  <div class=\"messages messages--";
            echo twig_render_var((isset($context["type"]) ? $context["type"] : null));
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_render_var($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"));
            echo "\">
    ";
            // line 28
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 29
                echo "      <div role=\"alert\">
    ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")) {
                // line 32
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_render_var($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"));
                echo "</h2>
      ";
            }
            // line 34
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 1)) {
                // line 35
                echo "        <ul class=\"messages__list\">
          ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "            <li class=\"messages__item\">";
                    echo twig_render_var((isset($context["message"]) ? $context["message"] : null));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </ul>
      ";
            } else {
                // line 41
                echo "        ";
                echo twig_render_var($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0));
                echo "
      ";
            }
            // line 43
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 44
                echo "      </div>
    ";
            }
            // line 46
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 44,  74 => 43,  68 => 41,  48 => 35,  45 => 34,  39 => 32,  354 => 207,  348 => 204,  345 => 203,  343 => 202,  340 => 201,  334 => 198,  330 => 197,  326 => 196,  322 => 195,  319 => 194,  317 => 193,  312 => 190,  306 => 187,  302 => 186,  298 => 185,  295 => 184,  293 => 183,  288 => 180,  282 => 177,  279 => 176,  277 => 175,  274 => 174,  268 => 171,  265 => 170,  263 => 169,  257 => 166,  252 => 165,  246 => 162,  243 => 161,  241 => 160,  236 => 159,  230 => 156,  227 => 155,  225 => 154,  220 => 153,  214 => 150,  211 => 149,  209 => 148,  205 => 147,  202 => 146,  196 => 145,  190 => 142,  186 => 140,  180 => 137,  177 => 136,  175 => 135,  172 => 134,  166 => 131,  163 => 130,  161 => 129,  157 => 127,  151 => 124,  148 => 123,  141 => 120,  138 => 119,  128 => 114,  121 => 113,  119 => 112,  103 => 107,  96 => 106,  83 => 101,  75 => 99,  72 => 98,  61 => 95,  38 => 88,  29 => 84,  27 => 83,  85 => 44,  71 => 39,  65 => 37,  63 => 96,  54 => 33,  50 => 91,  32 => 29,  26 => 25,  60 => 52,  57 => 34,  51 => 36,  47 => 31,  35 => 43,  25 => 41,  23 => 27,  21 => 24,  155 => 93,  149 => 90,  146 => 122,  143 => 88,  137 => 85,  134 => 117,  131 => 83,  125 => 81,  122 => 80,  116 => 111,  113 => 110,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 105,  90 => 67,  84 => 64,  81 => 46,  79 => 43,  76 => 58,  70 => 97,  67 => 54,  64 => 39,  58 => 94,  55 => 37,  52 => 51,  46 => 48,  43 => 90,  41 => 89,  36 => 31,  30 => 28,  28 => 27,  24 => 26,  19 => 26,);
    }
}
