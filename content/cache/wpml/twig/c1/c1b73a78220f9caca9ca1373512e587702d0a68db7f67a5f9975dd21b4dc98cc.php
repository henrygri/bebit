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

/* layout-reset.twig */
class __TwigTemplate_746e1a64f15cb31231f22aec0ead586d836e61e87e522b3541b90f66b6b4741c extends \Twig\Template
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
        // line 1
        echo "<div class=\"wpml-section\" id=\"wpml_ls_reset\">
\t<div class=\"wpml-section-header\">
\t\t<h3>";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h3>
\t</div>
\t<div class=\"wpml-section-content\">
\t\t<p>";
        // line 6
        echo ($context["description"] ?? null);
        echo "</p>

\t\t";
        // line 8
        if (($context["theme_config_file"] ?? null)) {
            // line 9
            echo "\t\t\t<p class=\"explanation-text\">";
            echo ($context["explanation_text"] ?? null);
            echo "</p>
\t\t";
        }
        // line 11
        echo "
\t\t<p class=\"buttons-wrap\">
\t\t\t<a class=\"button button-secondary\" onclick=\"if(!confirm('";
        // line 13
        echo twig_escape_filter($this->env, ($context["confirmation_message"] ?? null), "html", null, true);
        echo "')) return false;\"
\t\t\t   href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["restore_page_url"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["restore_button_label"] ?? null), "html", null, true);
        if (($context["theme_config_file"] ?? null)) {
            echo " *";
        }
        echo "</a>
\t\t</p>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout-reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  53 => 11,  47 => 9,  45 => 8,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "layout-reset.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/layout-reset.twig");
    }
}
