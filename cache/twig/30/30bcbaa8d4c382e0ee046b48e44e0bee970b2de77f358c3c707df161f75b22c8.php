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

/* login.html.twig */
class __TwigTemplate_de46f3c4927c12215424f129269bd00ee6f0a60caf8bf479719bf6b0ae1a0a14 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        $context["user"] = $this->getAttribute(($context["grav"] ?? null), "user", []);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute(($context["user"] ?? null), "username", []) && $this->getAttribute(($context["user"] ?? null), "authenticated", []))) {
            // line 4
            echo "    ";
            if (( !$this->getAttribute(($context["user"] ?? null), "authorized", []) && $this->getAttribute(($context["user"] ?? null), "twofa_enabled", []))) {
                // line 5
                echo "        ";
                $this->loadTemplate("partials/login-twofa.html.twig", "login.html.twig", 5)->display($context);
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $this->loadTemplate("partials/login-logout.html.twig", "login.html.twig", 7)->display($context);
                // line 8
                echo "    ";
            }
        } else {
            // line 10
            echo "    ";
            $this->loadTemplate("partials/login-form.html.twig", "login.html.twig", 10)->display($context);
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  40 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set user = grav.user %}

{% if user.username and user.authenticated %}
    {% if not user.authorized and user.twofa_enabled %}
        {% include 'partials/login-twofa.html.twig' %}
    {% else %}
        {% include 'partials/login-logout.html.twig' %}
    {% endif %}
{% else %}
    {% include 'partials/login-form.html.twig' %}
{% endif %}", "login.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\admin\\themes\\grav\\templates\\login.html.twig");
    }
}
