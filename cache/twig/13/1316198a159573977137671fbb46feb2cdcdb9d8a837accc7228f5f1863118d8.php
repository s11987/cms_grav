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

/* forms/fields/colorscheme.color/colorscheme.color.html.twig */
class __TwigTemplate_e96e84b9d9702b65a0fb15b9ed08815e8611ff56735c4dc79d1976aa37eabd37 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/colorscheme.color/colorscheme.color.html.twig"));

        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 3
        $context["classes"] = $this->getAttribute(($context["field"] ?? null), "classes", []);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('field', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 6
        echo "    ";
        $this->displayBlock('contents', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_contents($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 7
        echo "        ";
        $this->displayBlock('group', $context, $blocks);
        // line 39
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 7
    public function block_group($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group"));

        // line 8
        echo "            ";
        $this->displayBlock('input', $context, $blocks);
        // line 38
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 8
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 9
        echo "                <div class=\"colorbar-element-container g-colorpicker\">
                    <div class=\"colorbar-element light-border\" style=\"background-color: ";
        // line 10
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"colorbar-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
        echo "</div>

                        <input
                            data-grav-colorpicker=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["update" => ".colorbar-element", "offset" => ["x" =>  -2, "y" => 20]]), "html_attr");
        echo "\"
                            ";
        // line 16
        echo "                            name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                            value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
                            autocomplete=\"off\"
                            ";
        // line 20
        echo "                            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 34
        echo "                            />
                    </div>
                </div>
            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 20
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 21
        echo "                                ";
        if (($context["classes"] ?? null)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 22
        echo "                                ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 23
        echo "                                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 24
        echo "                                ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 25
        echo "                                ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true);
            echo "\"";
        }
        // line 26
        echo "                                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 27
        echo "                                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "                                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 29
        echo "                                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 30
        echo "                                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []), "html", null, true);
            echo "\"";
        }
        // line 31
        echo "                                ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", []))), "html", null, true);
            echo "\"
                                ";
        } elseif ($this->getAttribute(        // line 32
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", []))), "html", null, true);
            echo "\" ";
        }
        // line 33
        echo "                            ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/colorscheme.color/colorscheme.color.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 33,  217 => 32,  210 => 31,  203 => 30,  198 => 29,  193 => 28,  188 => 27,  183 => 26,  176 => 25,  171 => 24,  164 => 23,  157 => 22,  150 => 21,  144 => 20,  134 => 34,  131 => 20,  126 => 17,  121 => 16,  117 => 14,  111 => 11,  107 => 10,  104 => 9,  98 => 8,  91 => 38,  88 => 8,  82 => 7,  75 => 39,  72 => 7,  59 => 6,  47 => 5,  44 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set value = (value is null ? field.default : value) %}
{% set classes = field.classes %}

{% block field %}
    {% block contents %}
        {% block group %}
            {% block input %}
                <div class=\"colorbar-element-container g-colorpicker\">
                    <div class=\"colorbar-element light-border\" style=\"background-color: {{value}}\">
                        <div class=\"colorbar-title\">{{ field.help|e|tu }}</div>

                        <input
                            data-grav-colorpicker=\"{{ {update: '.colorbar-element', offset: {x: -2, y: 20}} |json_encode|e('html_attr') }}\"
                            {# required attribute structures #}
                            name=\"{{ (scope ~ field.name)|fieldName }}\"
                            value=\"{{ value }}\"
                            autocomplete=\"off\"
                            {# input attribute structures #}
                            {% block input_attributes %}
                                {% if classes %}class=\"{{ classes }}\" {% endif %}
                                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                {% if field.disabled %}disabled=\"disabled\"{% endif %}
                                {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %}
                                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                {% if field.validate.message %}title=\"{{ field.validate.message|e|t }}\"
                                {% elseif field.title is defined %}title=\"{{ field.title|e|t }}\" {% endif %}
                            {% endblock %}
                            />
                    </div>
                </div>
            {% endblock %}
        {% endblock %}
    {% endblock %}
{% endblock %}
", "forms/fields/colorscheme.color/colorscheme.color.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\colorscheme.color\\colorscheme.color.html.twig");
    }
}
