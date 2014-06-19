<?php

/* core/modules/system/templates/links.html.twig */
class __TwigTemplate_c665117a8fa3533c1a9cdec78a0e57f5bbec9c9f85e870f8ef9f45f1ea7b5368 extends Twig_Template
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
        // line 38
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 39
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 40
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 41
                    echo "<";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo ">";
                } else {
                    // line 43
                    echo "<h2";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</h2>";
                }
            }
            // line 46
            echo "<ul";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "<li";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"));
                echo ">";
                // line 49
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link")) {
                    // line 50
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"));
                } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes")) {
                    // line 52
                    echo "<span";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                    echo "</span>";
                } else {
                    // line 54
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                }
                // line 56
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 52,  57 => 50,  51 => 48,  47 => 47,  35 => 43,  25 => 41,  23 => 40,  21 => 39,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 58,  70 => 56,  67 => 54,  64 => 56,  58 => 53,  55 => 49,  52 => 51,  46 => 48,  43 => 46,  41 => 46,  36 => 45,  30 => 43,  28 => 42,  24 => 41,  19 => 38,);
    }
}
