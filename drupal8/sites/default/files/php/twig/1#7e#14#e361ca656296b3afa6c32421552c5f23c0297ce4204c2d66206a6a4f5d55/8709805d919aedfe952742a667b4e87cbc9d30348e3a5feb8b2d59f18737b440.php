<?php

/* core/themes/bartik/templates/page.html.twig */
class __TwigTemplate_7e14e361ca656296b3afa6c32421552c5f23c0297ce4204c2d66206a6a4f5d55 extends Twig_Template
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
        // line 80
        echo "<div id=\"page-wrapper\"><div id=\"page\">

  <header id=\"header\" class=\"";
        // line 82
        echo twig_render_var((((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) ? ("with-secondary-menu") : ("without-secondary-menu")));
        echo "\" role=\"banner\"><div class=\"section clearfix\">
   ";
        // line 83
        if ((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) {
            // line 84
            echo "      <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
        ";
            // line 85
            echo twig_render_var((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null));
            echo "
      </nav> <!-- /#secondary-menu -->
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 90
            echo "      <a href=\"";
            echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
        <img src=\"";
            // line 91
            echo twig_render_var((isset($context["logo"]) ? $context["logo"] : null));
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\" />
      </a>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 96
            echo "      <div id=\"name-and-slogan\"";
            if (((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null) && (isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
        ";
            // line 97
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 98
                echo "          ";
                if ((isset($context["title"]) ? $context["title"] : null)) {
                    // line 99
                    echo "            <div id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
              <strong>
                <a href=\"";
                    // line 101
                    echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_render_var((isset($context["site_name"]) ? $context["site_name"] : null));
                    echo "</span></a>
              </strong>
            </div>
          ";
                    // line 105
                    echo "          ";
                } else {
                    // line 106
                    echo "            <h1 id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
              <a href=\"";
                    // line 107
                    echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_render_var((isset($context["site_name"]) ? $context["site_name"] : null));
                    echo "</span></a>
            </h1>
          ";
                }
                // line 110
                echo "        ";
            }
            // line 111
            echo "
        ";
            // line 112
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 113
                echo "          <div id=\"site-slogan\"";
                if ((isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
            ";
                // line 114
                echo twig_render_var((isset($context["site_slogan"]) ? $context["site_slogan"] : null));
                echo "
          </div>
        ";
            }
            // line 117
            echo "      </div><!-- /#name-and-slogan -->
    ";
        }
        // line 119
        echo "
    ";
        // line 120
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header"));
        echo "

    ";
        // line 122
        if ((isset($context["main_menu"]) ? $context["main_menu"] : null)) {
            // line 123
            echo "      <nav id =\"main-menu\" class=\"navigation\" role=\"navigation\">
        ";
            // line 124
            echo twig_render_var((isset($context["main_menu"]) ? $context["main_menu"] : null));
            echo "
      </nav> <!-- /#main-menu -->
    ";
        }
        // line 127
        echo "  </div></header> <!-- /.section, /#header-->

  ";
        // line 129
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 130
            echo "    <div id=\"messages\"><div class=\"section clearfix\">
      ";
            // line 131
            echo twig_render_var((isset($context["messages"]) ? $context["messages"] : null));
            echo "
    </div></div> <!-- /.section, /#messages -->
  ";
        }
        // line 134
        echo "
  ";
        // line 135
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured")) {
            // line 136
            echo "    <aside id=\"featured\"><div class=\"section clearfix\">
      ";
            // line 137
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured"));
            echo "
    </div></aside> <!-- /.section, /#featured -->
  ";
        }
        // line 140
        echo "
  <div id=\"main-wrapper\" class=\"clearfix\"><div id=\"main\" class=\"clearfix\">
    ";
        // line 142
        echo twig_render_var((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        echo "

    <main id=\"content\" class=\"column\" role=\"main\"><section class=\"section\">
      ";
        // line 145
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted")) {
            echo "<div id=\"highlighted\">";
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted"));
            echo "</div>";
        }
        // line 146
        echo "      <a id=\"main-content\"></a>
      ";
        // line 147
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
        ";
        // line 148
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 149
            echo "          <h1 class=\"title\" id=\"page-title\">
            ";
            // line 150
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "
          </h1>
        ";
        }
        // line 153
        echo "      ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "
        ";
        // line 154
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 155
            echo "          <nav class=\"tabs\" role=\"navigation\">
            ";
            // line 156
            echo twig_render_var((isset($context["tabs"]) ? $context["tabs"] : null));
            echo "
          </nav>
        ";
        }
        // line 159
        echo "      ";
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"));
        echo "
        ";
        // line 160
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 161
            echo "          <ul class=\"action-links\">
            ";
            // line 162
            echo twig_render_var((isset($context["action_links"]) ? $context["action_links"] : null));
            echo "
          </ul>
        ";
        }
        // line 165
        echo "      ";
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
      ";
        // line 166
        echo twig_render_var((isset($context["feed_icons"]) ? $context["feed_icons"] : null));
        echo "
    </section></main> <!-- /.section, /#content -->

    ";
        // line 169
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first")) {
            // line 170
            echo "      <div id=\"sidebar-first\" class=\"column sidebar\"><aside class=\"section\">
        ";
            // line 171
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first"));
            echo "
      </aside></div><!-- /.section, /#sidebar-first -->
    ";
        }
        // line 174
        echo "
    ";
        // line 175
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second")) {
            // line 176
            echo "      <div id=\"sidebar-second\" class=\"column sidebar\"><aside class=\"section\">
        ";
            // line 177
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second"));
            echo "
      </aside></div><!-- /.section, /#sidebar-second -->
    ";
        }
        // line 180
        echo "
  </div></div><!-- /#main, /#main-wrapper -->

  ";
        // line 183
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_first") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_middle")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_last"))) {
            // line 184
            echo "    <div id=\"triptych-wrapper\"><aside id=\"triptych\" class=\"clearfix\">
      ";
            // line 185
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_first"));
            echo "
      ";
            // line 186
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_middle"));
            echo "
      ";
            // line 187
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_last"));
            echo "
    </aside></div><!-- /#triptych, /#triptych-wrapper -->
  ";
        }
        // line 190
        echo "
  <div id=\"footer-wrapper\"><footer class=\"section\">

    ";
        // line 193
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourthcolumn"))) {
            // line 194
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
        ";
            // line 195
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn"));
            echo "
        ";
            // line 196
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn"));
            echo "
        ";
            // line 197
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn"));
            echo "
        ";
            // line 198
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourthcolumn"));
            echo "
      </div><!-- /#footer-columns -->
    ";
        }
        // line 201
        echo "
    ";
        // line 202
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer")) {
            // line 203
            echo "      <div id=\"footer\" role=\"contentinfo\" class=\"clearfix\">
        ";
            // line 204
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer"));
            echo "
      </div> <!-- /#footer -->
   ";
        }
        // line 207
        echo "
  </footer></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 207,  348 => 204,  345 => 203,  343 => 202,  340 => 201,  334 => 198,  330 => 197,  326 => 196,  322 => 195,  319 => 194,  317 => 193,  312 => 190,  306 => 187,  302 => 186,  298 => 185,  295 => 184,  293 => 183,  288 => 180,  282 => 177,  279 => 176,  277 => 175,  274 => 174,  268 => 171,  265 => 170,  263 => 169,  257 => 166,  252 => 165,  246 => 162,  243 => 161,  241 => 160,  236 => 159,  230 => 156,  227 => 155,  225 => 154,  220 => 153,  214 => 150,  211 => 149,  209 => 148,  205 => 147,  202 => 146,  196 => 145,  190 => 142,  186 => 140,  180 => 137,  177 => 136,  175 => 135,  172 => 134,  166 => 131,  163 => 130,  161 => 129,  157 => 127,  151 => 124,  148 => 123,  141 => 120,  138 => 119,  128 => 114,  121 => 113,  119 => 112,  103 => 107,  96 => 106,  83 => 101,  75 => 99,  72 => 98,  61 => 95,  38 => 88,  29 => 84,  27 => 83,  85 => 44,  71 => 39,  65 => 37,  63 => 96,  54 => 33,  50 => 91,  32 => 85,  26 => 25,  60 => 52,  57 => 34,  51 => 48,  47 => 31,  35 => 43,  25 => 41,  23 => 82,  21 => 24,  155 => 93,  149 => 90,  146 => 122,  143 => 88,  137 => 85,  134 => 117,  131 => 83,  125 => 81,  122 => 80,  116 => 111,  113 => 110,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 105,  90 => 67,  84 => 64,  81 => 63,  79 => 43,  76 => 58,  70 => 97,  67 => 54,  64 => 56,  58 => 94,  55 => 49,  52 => 51,  46 => 48,  43 => 90,  41 => 89,  36 => 29,  30 => 43,  28 => 27,  24 => 26,  19 => 80,);
    }
}
