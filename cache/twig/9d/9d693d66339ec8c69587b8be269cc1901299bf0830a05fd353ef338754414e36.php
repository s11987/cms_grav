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

/* partials/messages.html.twig */
class __TwigTemplate_393c143df5aa22a70778466f0dbc4c0f739d419c1b04048464ee6ead113de40b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/messages.html.twig"));

        // line 1
        $context["type_mapping"] = ["info" => "success", "error" => "error", "warning" => "warning"];
        // line 2
        $context["icon_mapping"] = ["info" => "checkmark", "error" => "wrong", "warning" => "information"];
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 5
            echo "    <div id=\"messages\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "fetch", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "
        ";
                // line 8
                $context["scope"] = twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", []));
                // line 9
                echo "        ";
                $context["type"] = $this->getAttribute(($context["type_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 10
                echo "        ";
                $context["icon"] = $this->getAttribute(($context["icon_mapping"] ?? null), ($context["scope"] ?? null), [], "array");
                // line 11
                echo "
        <div class=\"toast toast-";
                // line 12
                echo ($context["type"] ?? null);
                echo " ";
                echo ($context["scope"] ?? null);
                echo "\">
            <i class=\"icon dripicons-";
                // line 13
                echo ($context["icon"] ?? null);
                echo "\"></i> ";
                echo $this->getAttribute($context["message"], "message", []);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  69 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  52 => 8,  49 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set type_mapping = {'info':'success', 'error': 'error', 'warning': 'warning'} %}
{% set icon_mapping = {'info':'checkmark', 'error':'wrong', 'warning':'information'} %}

{% if grav.messages.all %}
    <div id=\"messages\">
    {% for message in grav.messages.fetch %}

        {% set scope = message.scope|e %}
        {% set type = type_mapping[scope] %}
        {% set icon = icon_mapping[scope] %}

        <div class=\"toast toast-{{ type }} {{ scope }}\">
            <i class=\"icon dripicons-{{ icon }}\"></i> {{ message.message|raw }}
        </div>
    {% endfor %}
    </div>
{% endif %}", "partials/messages.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\themes\\quark\\templates\\partials\\messages.html.twig");
    }
}
