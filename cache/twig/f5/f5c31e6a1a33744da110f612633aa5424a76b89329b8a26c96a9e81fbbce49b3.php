<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/themepreview/themepreview.html.twig */
class __TwigTemplate_2f4de2b3ef96507ac91e78525087a31860bd7275166557aa7e62daea469a3657 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/themepreview/themepreview.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/themepreview/themepreview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 4
        echo "    <div class=\"jquery-horizontal-scroll-wrap\">
        <div class=\"jquery-horizontal-scroll\">
            <div class=\"holder\" style=\"white-space: nowrap;\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["whitelabel_presets"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["preset"]) {
            // line 8
            echo "            <style>
                .pid-";
            // line 9
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .admin-preview {
                    background: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "page-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 12
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-sidebar {
                    background: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "nav-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 15
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-logo {
                    background: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "logo-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 18
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-logo::after {
                    background: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "logo-link", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 21
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-text, .pid-";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-text::before, .pid-";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-text::after {
                    background: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "nav-link", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 24
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-active {
                    background: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "nav-selected-bg", [], "array"), "html", null, true);
            echo ";
                    border-left-color: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "button-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 28
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-active::after {
                    background: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "nav-selected-link", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 31
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-toolbar {
                    background: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "toolbar-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 34
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-toolbar::after {
                    background: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "toolbar-text", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 37
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-button {
                    background: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "button-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 40
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-content {
                    background: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "content-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 43
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-title {
                    background: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "content-header", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 46
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-content .ap-text {
                    background: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "content-link", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 49
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-content .ap-text::before, .pid-";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-content .ap-text::after {
                    background: ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "content-text", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 52
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-update {
                    background: ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "update-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 55
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-update::after {
                    background: ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "update-text", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 58
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-notice {
                    background: ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "notice-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 61
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-notice::after {
                    background: ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "notice-text", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 64
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-critical {
                    background: ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "critical-bg", [], "array"), "html", null, true);
            echo ";
                }
                .pid-";
            // line 67
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " .ap-critical::after {
                    background: ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["preset"], "colors", []), "critical-text", [], "array"), "html", null, true);
            echo ";
                }
            </style>
            <div class=\"pid-";
            // line 71
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo " admin-preview-wrapper\" data-preset-values=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["preset"]), "html_attr");
            echo "\">
                <div class=\"admin-preview form-border\">
                    <div class=\"ap-overlay\"><b><i class=\"fa fa-upload\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOAD_PRESET"));
            echo "</b></div>
                    <div class=\"ap-sidebar\">
                        <div class=\"ap-logo\"></div>
                        <div class=\"ap-nav\">
                            <span class=\"ap-text\"></span>
                            <span class=\"ap-active\"></span>
                            <span class=\"ap-text\"></span>
                        </div>
                    </div>
                    <div class=\"ap-toolbar\">
                        <span class=\"ap-button\"></span>
                    </div>
                    <div class=\"ap-page\">
                        <div class=\"ap-content\">
                            <span class=\"ap-update\"></span>
                            <span class=\"ap-title\"></span>
                            <span class=\"ap-text\"></span>
                            <span class=\"ap-notice\"></span>
                            <span class=\"ap-text\"></span>
                            <span class=\"ap-critical\"></span>
                            <span class=\"ap-text\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"admin-preview-title\">
                    ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["preset"], "name", []));
            echo "
                </div>
                <input type=\"hidden\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["preset"]), "html", null, true);
            echo "\" />
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['preset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/themepreview/themepreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 103,  294 => 100,  289 => 98,  261 => 73,  254 => 71,  248 => 68,  244 => 67,  239 => 65,  235 => 64,  230 => 62,  226 => 61,  221 => 59,  217 => 58,  212 => 56,  208 => 55,  203 => 53,  199 => 52,  194 => 50,  188 => 49,  183 => 47,  179 => 46,  174 => 44,  170 => 43,  165 => 41,  161 => 40,  156 => 38,  152 => 37,  147 => 35,  143 => 34,  138 => 32,  134 => 31,  129 => 29,  125 => 28,  120 => 26,  116 => 25,  112 => 24,  107 => 22,  99 => 21,  94 => 19,  90 => 18,  85 => 16,  81 => 15,  76 => 13,  72 => 12,  67 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"jquery-horizontal-scroll-wrap\">
        <div class=\"jquery-horizontal-scroll\">
            <div class=\"holder\" style=\"white-space: nowrap;\">
            {% for id,preset in whitelabel_presets %}
            <style>
                .pid-{{ id }} .admin-preview {
                    background: {{ preset.colors['page-bg'] }};
                }
                .pid-{{ id }} .ap-sidebar {
                    background: {{ preset.colors['nav-bg'] }};
                }
                .pid-{{ id }} .ap-logo {
                    background: {{ preset.colors['logo-bg'] }};
                }
                .pid-{{ id }} .ap-logo::after {
                    background: {{ preset.colors['logo-link'] }};
                }
                .pid-{{ id }} .ap-text, .pid-{{ id }} .ap-text::before, .pid-{{ id }} .ap-text::after {
                    background: {{ preset.colors['nav-link'] }};
                }
                .pid-{{ id }} .ap-active {
                    background: {{ preset.colors['nav-selected-bg'] }};
                    border-left-color: {{ preset.colors['button-bg'] }};
                }
                .pid-{{ id }} .ap-active::after {
                    background: {{ preset.colors['nav-selected-link'] }};
                }
                .pid-{{ id }} .ap-toolbar {
                    background: {{ preset.colors['toolbar-bg'] }};
                }
                .pid-{{ id }} .ap-toolbar::after {
                    background: {{ preset.colors['toolbar-text'] }};
                }
                .pid-{{ id }} .ap-button {
                    background: {{ preset.colors['button-bg'] }};
                }
                .pid-{{ id }} .ap-content {
                    background: {{ preset.colors['content-bg'] }};
                }
                .pid-{{ id }} .ap-title {
                    background: {{ preset.colors['content-header'] }};
                }
                .pid-{{ id }} .ap-content .ap-text {
                    background: {{ preset.colors['content-link'] }};
                }
                .pid-{{ id }} .ap-content .ap-text::before, .pid-{{ id }} .ap-content .ap-text::after {
                    background: {{ preset.colors['content-text'] }};
                }
                .pid-{{ id }} .ap-update {
                    background: {{ preset.colors['update-bg'] }};
                }
                .pid-{{ id }} .ap-update::after {
                    background: {{ preset.colors['update-text'] }};
                }
                .pid-{{ id }} .ap-notice {
                    background: {{ preset.colors['notice-bg'] }};
                }
                .pid-{{ id }} .ap-notice::after {
                    background: {{ preset.colors['notice-text'] }};
                }
                .pid-{{ id }} .ap-critical {
                    background: {{ preset.colors['critical-bg'] }};
                }
                .pid-{{ id }} .ap-critical::after {
                    background: {{ preset.colors['critical-text'] }};
                }
            </style>
            <div class=\"pid-{{ id }} admin-preview-wrapper\" data-preset-values=\"{{ preset|json_encode|e('html_attr') }}\">
                <div class=\"admin-preview form-border\">
                    <div class=\"ap-overlay\"><b><i class=\"fa fa-upload\"></i> {{ \"PLUGIN_ADMIN.LOAD_PRESET\"|tu|e }}</b></div>
                    <div class=\"ap-sidebar\">
                        <div class=\"ap-logo\"></div>
                        <div class=\"ap-nav\">
                            <span class=\"ap-text\"></span>
                            <span class=\"ap-active\"></span>
                            <span class=\"ap-text\"></span>
                        </div>
                    </div>
                    <div class=\"ap-toolbar\">
                        <span class=\"ap-button\"></span>
                    </div>
                    <div class=\"ap-page\">
                        <div class=\"ap-content\">
                            <span class=\"ap-update\"></span>
                            <span class=\"ap-title\"></span>
                            <span class=\"ap-text\"></span>
                            <span class=\"ap-notice\"></span>
                            <span class=\"ap-text\"></span>
                            <span class=\"ap-critical\"></span>
                            <span class=\"ap-text\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"admin-preview-title\">
                    {{ preset.name|e }}
                </div>
                <input type=\"hidden\" value=\"{{ preset|json_encode }}\" />
            </div>
            {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "forms/fields/themepreview/themepreview.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\themepreview\\themepreview.html.twig");
    }
}
