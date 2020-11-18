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

/* flex-objects/types/default/configure.html.twig */
class __TwigTemplate_c34459a0a56a641170bff9c31e7f436c02f510fc08ac81e1e6dead44753221ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("flex-objects/types/default/titlebar/configure.html.twig", "flex-objects/types/default/configure.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."flex-objects/types/default/titlebar/configure.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'body' => [$this, 'block_body'],
                'content_top' => [$this, 'block_content_top'],
                'topbar' => [$this, 'block_topbar'],
                'content' => [$this, 'block_content'],
                'edit' => [$this, 'block_edit'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/configure.html.twig"));

        // line 4
        $context["name"] = $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.form"], "method");
        // line 5
        $context["form"] = (($context["form"]) ?? ($this->getAttribute(($context["directory"] ?? null), "directoryForm", [0 => ($context["name"] ?? null)], "method")));
        // line 8
        $context["can_save"] = (($context["can_save"]) ?? ($this->getAttribute(($context["user"] ?? null), "authorize", [0 => ((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method")) : ("admin.super"))], "method")));
        // line 11
        $context["allowed"] = (($context["allowed"]) ?? (((($context["directory"] ?? null) && ($context["form"] ?? null)) && ($context["can_save"] ?? null))));
        // line 12
        $context["back_route"] = (($context["back_route"]) ?? (("/" . $this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"))));
        // line 13
        $context["title_icon"] = (($context["title_icon"]) ?? ("fa-cog"));
        // line 14
        ob_start();
        // line 15
        $context["title_config"] = $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.title"], "method");
        // line 16
        if ($this->getAttribute(($context["title_config"] ?? null), "template", [])) {
            // line 17
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["title_config"] ?? null), "template", []), "configure title template"));
        } else {
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["directory"] ?? null), "title", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects/types/default/configure.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null))));
        // line 30
        echo "
    ";
        // line 31
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 34
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 35
        echo "    ";
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 36
            echo "        ";
            $context["save_location"] = $this->getAttribute(($context["directory"] ?? null), "getDirectoryConfigUri", [0 => ($context["name"] ?? null)], "method");
            // line 37
            echo "        <div class=\"alert notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo "</b></div>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 41
    public function block_topbar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 42
        echo "    <form id=\"admin-mode-toggle\">
        ";
        // line 43
        $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
        // line 44
        echo "        ";
        $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
        // line 45
        echo "        ";
        $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
        // line 46
        echo "        ";
        $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
        // line 47
        echo "        ";
        $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
        // line 48
        echo "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "normal"], "method"), "toString", [0 => true], "method"), "html", null, true);
        echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
            echo " checked=\"checked\"";
        }
        echo ">
            <label for=\"normal\">";
        // line 51
        echo ($context["normalText"] ?? null);
        echo "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "expert"], "method"), "toString", [0 => true], "method"), "html", null, true);
        echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
            echo " checked=\"checked\"";
        }
        echo ">
            <label for=\"expert\">";
        // line 53
        echo ($context["expertText"] ?? null);
        echo "</label>
            <a></a>
        </div>
    </form>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 62
        if (($context["allowed"] ?? null)) {
            // line 63
            echo "        <div class=\"clear directory admin-flex-config\">
            <div class=\"admin-form-wrapper\">
                ";
            // line 70
            echo "                ";
            $this->displayBlock('edit', $context, $blocks);
            // line 73
            echo "            </div>
        </div>

        ";
            // line 76
            $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/default/configure.html.twig", 76)->display($context);
            // line 77
            echo "
    ";
        } else {
            // line 79
            echo "
        ";
            // line 80
            $this->getAttribute(($context["page"] ?? null), "modifyHeader", [0 => "http_response_code", 1 => 404], "method");
            // line 81
            echo "        <div class=\"error-block\">
            <h1>Error 404</h1>
            <div class=\"padding\">
                <p>
                    Woops! Looks like this page doesn't exist.
                </p>
            </div>
        </div>

    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 70
    public function block_edit($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 71
        echo "                    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/default/configure.html.twig", 71)->display(twig_array_merge($context, ["form" => ($context["form"] ?? null), "data" => $this->getAttribute(($context["form"] ?? null), "data", [])]));
        // line 72
        echo "                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 93
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 94
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "

    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 23
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

            // line 24
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
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
        return "flex-objects/types/default/configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 24,  284 => 23,  273 => 94,  267 => 93,  260 => 72,  257 => 71,  251 => 70,  234 => 81,  232 => 80,  229 => 79,  225 => 77,  223 => 76,  218 => 73,  215 => 70,  211 => 63,  209 => 62,  203 => 60,  197 => 59,  185 => 53,  177 => 52,  173 => 51,  165 => 50,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  149 => 44,  147 => 43,  144 => 42,  138 => 41,  125 => 37,  122 => 36,  119 => 35,  113 => 34,  104 => 31,  101 => 30,  98 => 29,  92 => 28,  84 => 1,  82 => 26,  76 => 19,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 8,  57 => 5,  55 => 4,  46 => 1,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% use 'flex-objects/types/default/titlebar/configure.html.twig' %}

{% set name = directory.config('admin.configure.form') %}
{% set form = form ?? directory.directoryForm(name) %}

{# Allowed actions #}
{% set can_save = can_save ?? user.authorize(directory.config('admin.configure.authorize') ?? 'admin.super') %}

{# These variables can be overridden from the main template file #}
{% set allowed = allowed ?? (directory and form and can_save) %}
{% set back_route = back_route ?? ('/' ~ route.getRoute(1)) %}
{% set title_icon = title_icon ?? 'fa-cog' %}
{% set title -%}
    {%- set title_config = directory.config('admin.configure.title') -%}
    {%- if title_config.template -%}
        {{- include(template_from_string(title_config.template, 'configure title template')) -}}
    {%- else -%}
        {{- directory.title }} {{ 'PLUGIN_ADMIN.CONFIGURATION'|tu -}}
    {% endif %}
{%- endset %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}
{% import _self as macro %}

{% block body %}
    {% set back_url = back_url ?? admin_route(back_route) %}

    {{ parent() }}
{% endblock body %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
        {% set save_location = directory.getDirectoryConfigUri(name) %}
        <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }}</b></div>
    {% endif %}
{% endblock %}

{% block topbar %}
    <form id=\"admin-mode-toggle\">
        {% set normalText = 'PLUGIN_ADMIN.NORMAL'|tu %}
        {% set expertText = 'PLUGIN_ADMIN.EXPERT'|tu %}
        {% set maxLen = max([normalText|length, expertText|length]) %}
        {% set normalText = macro.spanToggle(normalText, maxLen) %}
        {% set expertText = macro.spanToggle(expertText, maxLen) %}

        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ route.withGravParam('mode', 'normal').toString(true) }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
            <label for=\"normal\">{{ normalText|raw }}</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ route.withGravParam('mode', 'expert').toString(true) }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
            <label for=\"expert\">{{ expertText|raw }}</label>
            <a></a>
        </div>
    </form>
{% endblock topbar %}

{% block content %}
    {{ parent() }}

    {% if allowed %}
        <div class=\"clear directory admin-flex-config\">
            <div class=\"admin-form-wrapper\">
                {# TODO: RAW MODE
                <div id=\"admin-topbar\">
                    {{ block('topbar') }}
                </div>
                #}
                {% block edit %}
                    {% include 'partials/blueprints.html.twig' with { form: form, data: form.data } %}
                {% endblock %}
            </div>
        </div>

        {% include 'partials/modal-changes-detected.html.twig' %}

    {% else %}

        {% do page.modifyHeader('http_response_code', 404) %}
        <div class=\"error-block\">
            <h1>Error 404</h1>
            <div class=\"padding\">
                <p>
                    Woops! Looks like this page doesn't exist.
                </p>
            </div>
        </div>

    {% endif %}
{% endblock %}

{% block bottom %}
    {{ parent() }}

    {# TODO: RAW MODE
    <script>
        \$('.admin-flex-config .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
    #}
{% endblock bottom %}
", "flex-objects/types/default/configure.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\configure.html.twig");
    }
}
