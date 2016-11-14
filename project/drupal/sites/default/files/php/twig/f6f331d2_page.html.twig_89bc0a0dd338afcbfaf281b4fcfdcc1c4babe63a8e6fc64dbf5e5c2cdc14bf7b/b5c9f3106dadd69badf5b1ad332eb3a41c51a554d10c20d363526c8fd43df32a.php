<?php

/* themes/integrity/templates/page.html.twig */
class __TwigTemplate_e5d3755a97b4ca74a70600250da0c4555db919310ebd9ff926cf07ec1f7f430c extends Twig_Template
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
        $tags = array("if" => 89, "for" => 93, "autoescape" => 94);
        $filters = array("t" => 77, "raw" => 95);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'autoescape'),
                array('t', 'raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 75
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
      <div class=\"full-width-bg\">
        <div class=\"section layout-container clearfix\">
          ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "
        </div>
      </div>
      <div class=\"section layout-container clearfix\">
        <div class=\"col-md-12 col-sm-12\">
        ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
        echo "
        </div>
      </div>
    </header>
    ";
        // line 89
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (isset($context["slider_contents"]) ? $context["slider_contents"] : null))) {
            // line 90
            echo "      <!-- CAROUSEL -->
      <div id=\"myCarousel\" class=\"carousel slide\">
        <div class=\"carousel-inner\">
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider_contents"]) ? $context["slider_contents"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["slider"]) {
                // line 94
                echo "              ";
                // line 95
                echo "                ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["slider"]));
                echo "
              ";
                // line 97
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
      </div>
    ";
        }
        // line 104
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 105
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 111
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 112
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 118
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
            ";
        // line 126
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 127
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
              </h1>
            ";
        }
        // line 131
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
            ";
        // line 132
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 133
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
                ";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
              </nav>
            ";
        }
        // line 137
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
        // line 138
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 139
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 141
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>
        </main>
        ";
        // line 144
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 145
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 147
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 151
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 152
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 158
        echo "      </div>
    </div>
    ";
        // line 160
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()))) {
            // line 161
            echo "      <div id=\"featured-bottom-wrapper\">
        <aside id=\"featured-bottom\" class=\"section layout-container clearfix\" role=\"complementary\">
          ";
            // line 163
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()), "html", null, true));
            echo "
          ";
            // line 164
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array()), "html", null, true));
            echo "
          ";
            // line 165
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 169
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 171
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 172
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 173
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 174
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 175
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 176
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 179
        echo "      </div>
      <div class=\"sub-footer\">
        <div class=\"layout-container\">
          ";
        // line 182
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer", array())) {
            // line 183
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 184
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 187
        echo "          <hr>
        </div>
      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/integrity/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 187,  282 => 184,  279 => 183,  277 => 182,  272 => 179,  266 => 176,  262 => 175,  258 => 174,  254 => 173,  251 => 172,  249 => 171,  245 => 169,  238 => 165,  234 => 164,  230 => 163,  226 => 161,  224 => 160,  220 => 158,  213 => 154,  209 => 152,  206 => 151,  199 => 147,  195 => 145,  193 => 144,  186 => 141,  180 => 139,  178 => 138,  173 => 137,  167 => 134,  162 => 133,  160 => 132,  155 => 131,  149 => 128,  146 => 127,  144 => 126,  140 => 125,  133 => 121,  128 => 118,  121 => 114,  117 => 112,  114 => 111,  107 => 107,  103 => 105,  100 => 104,  93 => 99,  86 => 97,  81 => 95,  79 => 94,  75 => 93,  70 => 90,  68 => 89,  61 => 85,  53 => 80,  47 => 77,  43 => 75,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.highlighted: Items for the highlighted region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.featured_top: Items for the featured top region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.featured_bottom_first: Items for the first featured bottom region.*/
/*  * - page.featured_bottom_second: Items for the second featured bottom region.*/
/*  * - page.featured_bottom_third: Items for the third featured bottom region.*/
/*  * - page.footer_first: Items for the first footer column.*/
/*  * - page.footer_second: Items for the second footer column.*/
/*  * - page.footer_third: Items for the third footer column.*/
/*  * - page.footer_fourth: Items for the fourth footer column.*/
/*  * - page.footer_fifth: Items for the fifth footer column.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div id="page-wrapper">*/
/*   <div id="page">*/
/*     <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*       <div class="full-width-bg">*/
/*         <div class="section layout-container clearfix">*/
/*           {{ page.secondary_menu }}*/
/*         </div>*/
/*       </div>*/
/*       <div class="section layout-container clearfix">*/
/*         <div class="col-md-12 col-sm-12">*/
/*         {{ page.main_menu }}*/
/*         </div>*/
/*       </div>*/
/*     </header>*/
/*     {% if is_front and slider_contents %}*/
/*       <!-- CAROUSEL -->*/
/*       <div id="myCarousel" class="carousel slide">*/
/*         <div class="carousel-inner">*/
/*           {% for key, slider in slider_contents %}*/
/*               {% autoescape 'html' %}*/
/*                 {{ slider | raw }}*/
/*               {% endautoescape %}*/
/* */
/*           {% endfor %}*/
/*         </div>*/
/*         <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>*/
/*         <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.highlighted %}*/
/*       <div class="highlighted">*/
/*         <aside class="layout-container section clearfix" role="complementary">*/
/*           {{ page.highlighted }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.featured_top %}*/
/*       <div class="featured-top">*/
/*         <aside class="featured-top__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.featured_top }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">*/
/*       <div id="main" class="layout-main clearfix">*/
/*         {{ page.breadcrumb }}*/
/*         <main id="content" class="column main-content" role="main">*/
/*           <section class="section">*/
/*             <a id="main-content" tabindex="-1"></a>*/
/*             {{ title_prefix }}*/
/*             {% if title %}*/
/*               <h1 class="title" id="page-title">*/
/*                 {{ title }}*/
/*               </h1>*/
/*             {% endif %}*/
/*             {{ title_suffix }}*/
/*             {% if tabs %}*/
/*               <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*                 {{ tabs }}*/
/*               </nav>*/
/*             {% endif %}*/
/*             {{ page.help }}*/
/*             {% if action_links %}*/
/*               <ul class="action-links">{{ action_links }}</ul>*/
/*             {% endif %}*/
/*             {{ page.content }}*/
/*           </section>*/
/*         </main>*/
/*         {% if page.sidebar_first %}*/
/*           <div id="sidebar-first" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_first }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.sidebar_second %}*/
/*           <div id="sidebar-second" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_second }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}*/
/*       <div id="featured-bottom-wrapper">*/
/*         <aside id="featured-bottom" class="section layout-container clearfix" role="complementary">*/
/*           {{ page.featured_bottom_first }}*/
/*           {{ page.featured_bottom_second }}*/
/*           {{ page.featured_bottom_third }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/*     <footer class="site-footer">*/
/*       <div class="layout-container">*/
/*         {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*           <div class="site-footer__top clearfix">*/
/*             {{ page.footer_first }}*/
/*             {{ page.footer_second }}*/
/*             {{ page.footer_third }}*/
/*             {{ page.footer_fourth }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="sub-footer">*/
/*         <div class="layout-container">*/
/*           {% if page.sub_footer %}*/
/*             <div class="site-footer__bottom">*/
/*               {{ page.sub_footer }}*/
/*             </div>*/
/*           {% endif %}*/
/*           <hr>*/
/*         </div>*/
/*       </div>*/
/*     </footer>*/
/*   </div>*/
/* </div>*/
/* */
