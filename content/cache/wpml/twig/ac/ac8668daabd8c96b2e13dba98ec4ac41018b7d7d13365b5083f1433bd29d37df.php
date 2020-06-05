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

/* layout-main.twig */
class __TwigTemplate_bfd1cc4a120ec70f6d32da252a1a8e95595ce9088b328e0da854aa33a11a5723 extends \Twig\Template
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
        echo "<form id=\"wpml-ls-settings-form\" name=\"wpml_ls_settings_form\">

\t<input type=\"hidden\" name=\"wpml-ls-refresh-on-browser-back-button\" id=\"wpml-ls-refresh-on-browser-back-button\" value=\"no\">

    ";
        // line 5
        if ($this->getAttribute(($context["notifications"] ?? null), "css_not_loaded", [])) {
            // line 6
            echo "        <div class=\"wpml-ls-message notice notice-info\">
            <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["notifications"] ?? null), "css_not_loaded", []), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 10
        echo "
    <div id=\"wpml-language-switcher-options\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "section_title", []), "html", null, true);
        echo "</h3>
\t\t\t<p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "section_description", []), "html", null, true);
        echo "</p>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 18
        $this->loadTemplate("section-options.twig", "layout-main.twig", 18)->display($context);
        // line 19
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-menus\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "section_title", []), "html", null, true);
        echo "
            </h3>
            ";
        // line 27
        $this->loadTemplate("save-notification.twig", "layout-main.twig", 27)->display($context);
        // line 28
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 31
        $this->loadTemplate("section-menus.twig", "layout-main.twig", 31)->display($context);
        // line 32
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-sidebars\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "sidebars", []), "section_title", []), "html", null, true);
        echo "
            </h3>
            ";
        // line 40
        $this->loadTemplate("save-notification.twig", "layout-main.twig", 40)->display($context);
        // line 41
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 44
        $this->loadTemplate("section-sidebars.twig", "layout-main.twig", 44)->display($context);
        // line 45
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-footer\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "footer", []), "section_title", []), "html", null, true);
        echo "
                ";
        // line 52
        $this->loadTemplate("tooltip.twig", "layout-main.twig", 52)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "show_in_footer", [])]));
        // line 53
        echo "            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 57
        $this->loadTemplate("section-footer.twig", "layout-main.twig", 57)->display($context);
        // line 58
        echo "        </div>

    </div>

    <div id=\"wpml-language-switcher-post-translations\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "post_translations", []), "section_title", []), "html", null, true);
        echo "
                ";
        // line 66
        $this->loadTemplate("tooltip.twig", "layout-main.twig", 66)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "section_post_translations", [])]));
        // line 67
        echo "            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 71
        $this->loadTemplate("section-post-translations.twig", "layout-main.twig", 71)->display($context);
        // line 72
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-shortcode-action\" class=\"js-wpml-ls-section wpml-section\"
        ";
        // line 76
        if ( !($context["setup_complete"] ?? null)) {
            echo " style=\"display:none;\"";
        }
        echo ">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", []), "section_title", []), "html", null, true);
        echo "
                ";
        // line 81
        echo "            </h3>
            ";
        // line 82
        $this->loadTemplate("save-notification.twig", "layout-main.twig", 82)->display($context);
        // line 83
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 86
        $this->loadTemplate("section-shortcode-action.twig", "layout-main.twig", 86)->display($context);
        // line 87
        echo "        </div>
    </div>

    ";
        // line 90
        $this->loadTemplate("setup-wizard-buttons.twig", "layout-main.twig", 90)->display($context);
        // line 91
        echo "
    ";
        // line 92
        $this->loadTemplate("dialog-box.twig", "layout-main.twig", 92)->display($context);
        // line 93
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 93,  194 => 92,  191 => 91,  189 => 90,  184 => 87,  182 => 86,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  160 => 76,  154 => 72,  152 => 71,  146 => 67,  144 => 66,  140 => 65,  131 => 58,  129 => 57,  123 => 53,  121 => 52,  117 => 51,  109 => 45,  107 => 44,  102 => 41,  100 => 40,  95 => 38,  87 => 32,  85 => 31,  80 => 28,  78 => 27,  73 => 25,  65 => 19,  63 => 18,  56 => 14,  52 => 13,  47 => 10,  41 => 7,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"wpml-ls-settings-form\" name=\"wpml_ls_settings_form\">

\t<input type=\"hidden\" name=\"wpml-ls-refresh-on-browser-back-button\" id=\"wpml-ls-refresh-on-browser-back-button\" value=\"no\">

    {% if notifications.css_not_loaded %}
        <div class=\"wpml-ls-message notice notice-info\">
            <p>{{ notifications.css_not_loaded }}</p>
        </div>
    {% endif %}

    <div id=\"wpml-language-switcher-options\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>{{ strings.options.section_title }}</h3>
\t\t\t<p>{{ strings.options.section_description }}</p>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            {% include 'section-options.twig' %}
        </div>
    </div>

    <div id=\"wpml-language-switcher-menus\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                {{ strings.menus.section_title }}
            </h3>
            {% include 'save-notification.twig' %}
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            {% include 'section-menus.twig' %}
        </div>
    </div>

    <div id=\"wpml-language-switcher-sidebars\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                {{ strings.sidebars.section_title }}
            </h3>
            {% include 'save-notification.twig' %}
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            {% include 'section-sidebars.twig' %}
        </div>
    </div>

    <div id=\"wpml-language-switcher-footer\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                {{ strings.footer.section_title }}
                {% include 'tooltip.twig' with { \"content\": strings.tooltips.show_in_footer } %}
            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            {% include 'section-footer.twig' %}
        </div>

    </div>

    <div id=\"wpml-language-switcher-post-translations\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                {{ strings.post_translations.section_title }}
                {% include 'tooltip.twig' with { \"content\": strings.tooltips.section_post_translations } %}
            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            {% include 'section-post-translations.twig' %}
        </div>
    </div>

    <div id=\"wpml-language-switcher-shortcode-action\" class=\"js-wpml-ls-section wpml-section\"
        {% if not setup_complete %} style=\"display:none;\"{% endif %}>
        <div class=\"wpml-section-header\">
            <h3>
                {{ strings.shortcode_actions.section_title }}
                {#{% include 'tooltip.twig' with { \"content\": strings.tooltips.section_shortcode_action } %}#}
            </h3>
            {% include 'save-notification.twig' %}
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            {% include 'section-shortcode-action.twig' %}
        </div>
    </div>

    {% include 'setup-wizard-buttons.twig' %}

    {% include 'dialog-box.twig' %}

</form>", "layout-main.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/layout-main.twig");
    }
}
