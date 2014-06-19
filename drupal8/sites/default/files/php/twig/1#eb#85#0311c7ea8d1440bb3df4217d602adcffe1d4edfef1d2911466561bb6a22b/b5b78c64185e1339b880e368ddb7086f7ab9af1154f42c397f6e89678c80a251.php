<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_eb850311c7ea8d1440bb3df4217d602adcffe1d4edfef1d2911466561bb6a22b extends Twig_Template
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
        // line 25
        echo "<nav";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  <div";
        // line 26
        echo twig_render_var((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null));
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo twig_render_var((isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null));
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo twig_render_var($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "attributes"));
            echo ">";
            echo twig_render_var($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "link"));
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "attributes"));
            echo ">
      <div class=\"toolbar-lining clearfix\">
        ";
            // line 36
            if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label")) {
                // line 37
                echo "          <h3 class=\"toolbar-tray-name visually-hidden\">";
                echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"));
                echo "</h3>
        ";
            }
            // line 39
            echo "        ";
            echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "links"));
            echo "
      </div>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 43
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  ";
        echo twig_render_var((isset($context["remainder"]) ? $context["remainder"] : null));
        echo "
</nav>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 44,  71 => 39,  65 => 37,  63 => 36,  54 => 33,  50 => 32,  32 => 28,  26 => 16,  60 => 52,  57 => 34,  51 => 48,  47 => 31,  35 => 43,  25 => 41,  23 => 40,  21 => 15,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 43,  76 => 58,  70 => 56,  67 => 54,  64 => 56,  58 => 53,  55 => 49,  52 => 51,  46 => 48,  43 => 46,  41 => 46,  36 => 29,  30 => 43,  28 => 27,  24 => 26,  19 => 25,);
    }
}
