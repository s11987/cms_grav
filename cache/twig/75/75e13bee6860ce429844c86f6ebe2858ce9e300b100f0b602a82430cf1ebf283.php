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

/* plugins/admin-buttons.html.twig */
class __TwigTemplate_3caf9f970decd0cbd7bd290de33e7e4591076022b40094b2eef10d84ea269b4a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins/admin-buttons.html.twig"));

        // line 1
        echo "<button data-preview-scss class=\"button\"><i class=\"fa fa-fw fa-eye\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW"));
        echo "</button>
<button data-recompile-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RECOMPILE"));
        echo "</button>
<button data-export-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPORT"));
        echo "</button>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "plugins/admin-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  38 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<button data-preview-scss class=\"button\"><i class=\"fa fa-fw fa-eye\"></i> {{ \"PLUGIN_ADMIN.PREVIEW\"|tu|e }}</button>
<button data-recompile-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> {{ \"PLUGIN_ADMIN.RECOMPILE\"|tu|e }}</button>
<button data-export-scss class=\"button\"><i class=\"fa fa-fw fa-tasks\"></i> {{ \"PLUGIN_ADMIN.EXPORT\"|tu|e }}</button>
", "plugins/admin-buttons.html.twig", "C:\\xampp\\htdocs\\cms_grav\\user\\plugins\\admin\\themes\\grav\\templates\\plugins\\admin-buttons.html.twig");
    }
}
