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

/* forms/fields/widgets/widgets.html.twig */
class __TwigTemplate_6c8de7ca283f393d7f9f299291b99f85dc3b7cb761d8b34762657eb10d1b9e29 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/widgets/widgets.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["macro"] = $this;
        // line 4
        echo "
";
        // line 9
        echo "
";
        // line 13
        echo "
";
        // line 14
        $context["widgets"] = twig_array_merge(twig_array_merge($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_top", [])), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_main", []))), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_dashboard_widgets_bottom", [])));
        // line 15
        $context["widgets_display"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "admin", []), "widgets_display", []);
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 18
            echo "    ";
            $context["widget_name"] = (($this->getAttribute($context["widget"], "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "name", []), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute($context["widget"], "template", [])))) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute($context["widget"], "template", []))));
            // line 19
            echo "    ";
            $context["widget_id"] = $this->getAttribute($context["widget"], "template", []);
            // line 20
            echo "    ";
            $context["widget_value"] = ((twig_in_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter($this->getAttribute(($context["widgets_display"] ?? null), ($context["widget_id"] ?? null), [], "array")), [0 => "1", 1 => "true"])) ? ("true") : ("false"));
            // line 21
            echo "    ";
            $context["name"] = (((("data[" . $this->getAttribute(($context["field"] ?? null), "name", [])) . "][") . ($context["widget_id"] ?? null)) . "]");
            // line 22
            echo "
    <div class=\"block block-toggle\">
        <div class=\"form-field grid\">
            <div class=\"form-label block size-1-3\">
                 <label>
                     <span>";
            // line 27
            echo twig_escape_filter($this->env, ($context["widget_name"] ?? null), "html", null, true);
            echo " Widget</span>
                 </label>
            </div>
            <div class=\"form-data block size-2-3\" data-grav-field=\"toggle\" data-grav-default=\"1\">
                <div class=\"switch-toggle switch-grav medium switch-2\">

                    ";
            // line 33
            $context["options"] = ["true" => "PLUGIN_ADMIN.ENABLED", "false" => "PLUGIN_ADMIN.DISABLED"];
            // line 34
            echo "
                    ";
            // line 35
            $context["maxLen"] = 0;
            // line 36
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 37
                echo "                        ";
                $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"])));
                // line 38
                echo "                        ";
                $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
                // line 39
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 42
                echo "                        ";
                $context["id"] = ((((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . ($context["widget_id"] ?? null)) . ".") . $context["key"]);
                // line 43
                echo "                        ";
                $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]))));
                // line 44
                echo "
                        <input type=\"radio\"
                               value=\"";
                // line 46
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                               id=\"";
                // line 47
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"
                               name=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
                               class=\"";
                // line 49
                echo ((("true" == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                            ";
                // line 50
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter($context["key"]) == $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFilter(($context["widget_value"] ?? null)))) {
                    // line 51
                    echo "                                checked=\"checked\"
                            ";
                }
                // line 53
                echo "                        />

                        <label for=\"";
                // line 55
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
                echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), ($context["maxLen"] ?? null)));
                echo "</label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "spanToggle"));

            // line 6
            echo "    ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 7
            echo "    ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getoutputWidget($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "outputWidget"));

            // line 11
            echo "
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/widgets/widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 11,  218 => 10,  197 => 7,  194 => 6,  178 => 5,  163 => 57,  153 => 55,  149 => 53,  145 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 44,  120 => 43,  117 => 42,  113 => 41,  110 => 40,  104 => 39,  101 => 38,  98 => 37,  93 => 36,  91 => 35,  88 => 34,  86 => 33,  77 => 27,  70 => 22,  67 => 21,  64 => 20,  61 => 19,  58 => 18,  54 => 17,  51 => 16,  49 => 15,  47 => 14,  44 => 13,  41 => 9,  38 => 4,  36 => 3,  33 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends \"forms/field.html.twig\" %}#}

{% import _self as macro %}

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% macro outputWidget(widget) %}

{% endmacro %}

{% set widgets = grav.twig.plugins_hooked_dashboard_widgets_top|array|merge(grav.twig.plugins_hooked_dashboard_widgets_main|array)|merge(grav.twig.plugins_hooked_dashboard_widgets_bottom|array) %}
{% set widgets_display = grav.config.plugins.admin.widgets_display %}

{% for widget in widgets %}
    {% set widget_name = widget.name|default(widget.template|titleize) %}
    {% set widget_id = widget.template %}
    {% set widget_value = widgets_display[widget_id]|string in ['1', 'true'] ? 'true' : 'false' %}
    {% set name = 'data['~field.name~']['~widget_id~']' %}

    <div class=\"block block-toggle\">
        <div class=\"form-field grid\">
            <div class=\"form-label block size-1-3\">
                 <label>
                     <span>{{ widget_name }} Widget</span>
                 </label>
            </div>
            <div class=\"form-data block size-2-3\" data-grav-field=\"toggle\" data-grav-default=\"1\">
                <div class=\"switch-toggle switch-grav medium switch-2\">

                    {% set options = { true: 'PLUGIN_ADMIN.ENABLED', false: 'PLUGIN_ADMIN.DISABLED' } %}

                    {% set maxLen = 0 %}
                    {% for value, text in options %}
                        {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}
                        {% set maxLen = max(translation|length, maxLen) %}
                    {% endfor %}

                    {% for key, text in options %}
                        {% set id = \"toggle_\" ~ field.name ~ \".\" ~ widget_id ~ '.' ~ key %}
                        {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}

                        <input type=\"radio\"
                               value=\"{{ key }}\"
                               id=\"{{ id }}\"
                               name=\"{{ name }}\"
                               class=\"{{ 'true' == '' ~ key ? 'highlight' : '' }}\"
                            {% if key|string == widget_value|string %}
                                checked=\"checked\"
                            {% endif %}
                        />

                        <label for=\"{{ id }}\">{{ (macro.spanToggle(translation, maxLen)|trim)|raw }}</label>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endfor %}
", "forms/fields/widgets/widgets.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\widgets\\widgets.html.twig");
    }
}
