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

/* section-shortcode-action.twig */
class __TwigTemplate_b35421d3475e8b365b399d2acbb8deba8fd471d62cc15bca23e75242acc81940 extends \Twig\Template
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
        echo "<p>";
        echo $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", []), "section_description", []);
        echo "</p>
<p>
    <input type=\"checkbox\" id=\"wpml-ls-show-in-shortcode-actions\" name=\"statics[shortcode_actions][show]\" value=\"1\"
                   class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-shortcode-actions-toggle-target\"
                   ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", []), "shortcode_actions", []), "show", [])) {
            echo "checked=\"checked\"";
        }
        echo "/>

    <label for=\"wpml-ls-show-in-shortcode-actions\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", []), "show", []), "html", null, true);
        echo "</label>
</p>

<div class=\"hidden\">
    ";
        // line 11
        $context["slot_settings"] = [];
        // line 12
        echo "    ";
        $context["slot_settings"] = twig_array_merge(($context["slot_settings"] ?? null), ["shortcode_actions" => $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", []), "footer", [])]);
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("table-slots.twig", "section-shortcode-action.twig", 14)->display(twig_array_merge($context, ["slot_type" => "statics", "slots_settings" =>         // line 17
($context["slot_settings"] ?? null), "slug" => "shortcode_actions"]));
        // line 21
        echo "
</div>

<div class=\"js-wpml-ls-shortcode-actions-toggle-target alignleft";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", []), "shortcode_actions", []), "show", []) != 1)) {
            echo " hidden";
        }
        echo "\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", []), "customize_button_label", []), "html", null, true);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "section-shortcode-action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  68 => 24,  63 => 21,  61 => 17,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  45 => 7,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ strings.shortcode_actions.section_description|raw }}</p>
<p>
    <input type=\"checkbox\" id=\"wpml-ls-show-in-shortcode-actions\" name=\"statics[shortcode_actions][show]\" value=\"1\"
                   class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-shortcode-actions-toggle-target\"
                   {% if settings.statics.shortcode_actions.show %}checked=\"checked\"{% endif %}/>

    <label for=\"wpml-ls-show-in-shortcode-actions\">{{ strings.shortcode_actions.show }}</label>
</p>

<div class=\"hidden\">
    {% set slot_settings = [] %}
    {% set slot_settings = slot_settings|merge({'shortcode_actions': settings.statics.footer}) %}

    {% include 'table-slots.twig'
        with {
            \"slot_type\": \"statics\",
            \"slots_settings\": slot_settings,
            \"slug\"     : 'shortcode_actions',
        }
    %}

</div>

<div class=\"js-wpml-ls-shortcode-actions-toggle-target alignleft{% if settings.statics.shortcode_actions.show != 1 %} hidden{% endif %}\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">{{ strings.shortcode_actions.customize_button_label }}</button>
</div>", "section-shortcode-action.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-shortcode-action.twig");
    }
}
