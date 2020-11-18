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

/* edit title template (string template b2c66b8c2c0ca9b468f59b3b4916afd5deb2d8999d7fae3fecf32124121dcbd0) */
class __TwigTemplate_4dd3fdad923601c4f3809d0af4a693ec9de39801bb97b4ecdc01c3d3293b1220 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit title template (string template b2c66b8c2c0ca9b468f59b3b4916afd5deb2d8999d7fae3fecf32124121dcbd0)"));

        // line 1
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["form"] ?? null), "value", [0 => "fullname"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "value", [0 => "fullname"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => "fullname"], "method")) : ($this->getAttribute(($context["form"] ?? null), "value", [0 => "username"], "method"))), "html", null, true);
        echo " &lt;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", [0 => "email"], "method"), "html", null, true);
        echo "&gt;";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "edit title template (string template b2c66b8c2c0ca9b468f59b3b4916afd5deb2d8999d7fae3fecf32124121dcbd0)";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ form.value('fullname') ?? form.value('username') }} &lt;{{ form.value('email') }}&gt;", "edit title template (string template b2c66b8c2c0ca9b468f59b3b4916afd5deb2d8999d7fae3fecf32124121dcbd0)", "");
    }
}
