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

/* flex-objects/types/user-accounts/edit.html.twig */
class __TwigTemplate_aa5b6250f97bcd509fc5ded4a0af164a111d7e3d4d7fcd5d3ab24ade0e9a8b4b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/user-accounts/edit.html.twig"));

        // line 3
        if ( !$this->getAttribute(($context["directory"] ?? null), "isAuthorized", [0 => "list", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) {
            // line 4
            $context["back_route"] = "/";
        }
        // line 7
        if ( !$this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 8
            $this->getAttribute(($context["object"] ?? null), "onPrepareRegistration", [], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/user-accounts/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/user-accounts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 1,  44 => 8,  42 => 7,  39 => 4,  37 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{% if not directory.isAuthorized('list', 'admin', user) %}
    {% set back_route = '/' %}
{% endif %}

{% if not object.exists %}
    {% do object.onPrepareRegistration() %}
{% endif %}", "flex-objects/types/user-accounts/edit.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\user-accounts\\edit.html.twig");
    }
}
