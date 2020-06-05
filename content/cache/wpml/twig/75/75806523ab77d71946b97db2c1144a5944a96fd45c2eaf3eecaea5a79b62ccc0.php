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

/* slot-subform-sidebars.twig */
class __TwigTemplate_0bea4665956996dba56ad0a8d48023b44dde2f255049c68d74815936940979a9 extends \Twig\Template
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
        if ( !(isset($context["slot_settings"]) || array_key_exists("slot_settings", $context))) {
            // line 2
            echo "    ";
            $context["slot_settings"] = ($context["default_sidebars_slot"] ?? null);
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("preview.twig", "slot-subform-sidebars.twig", 5)->display(twig_array_merge($context, ["preview" => ($context["preview"] ?? null)]));
        // line 6
        echo "
<div class=\"wpml-ls-subform-options\">

    ";
        // line 9
        $this->loadTemplate("dropdown-sidebars.twig", "slot-subform-sidebars.twig", 9)->display(twig_array_merge($context, ["slug" =>         // line 11
($context["slug"] ?? null), "settings" =>         // line 12
($context["settings"] ?? null), "sidebars" =>         // line 13
($context["slots"] ?? null), "strings" =>         // line 14
($context["strings"] ?? null)]));
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-sidebars.twig", 18)->display(twig_array_merge($context, ["id" => ("in-sidebars-" .         // line 20
($context["slug"] ?? null)), "name" => (("sidebars[" .         // line 21
($context["slug"] ?? null)) . "][template]"), "value" => $this->getAttribute(        // line 22
($context["slot_settings"] ?? null), "template", []), "slot_type" => "sidebars"]));
        // line 26
        echo "
    ";
        // line 27
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-sidebars.twig", 27)->display(twig_array_merge($context, ["name_base" => (("sidebars[" .         // line 29
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 30
($context["slot_settings"] ?? null), "strings" =>         // line 31
($context["strings"] ?? null), "template_slug" => $this->getAttribute(        // line 32
($context["slot_settings"] ?? null), "template", [])]));
        // line 35
        echo "
    <h4><label for=\"widget-title-in-";
        // line 36
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "sidebars", []), "label_widget_title", []), "html", null, true);
        echo "  ";
        $this->loadTemplate("tooltip.twig", "slot-subform-sidebars.twig", 37)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "widget_title", [])]));
        echo "</label></h4>

    <input type=\"text\" id=\"widget-title-in-";
        // line 39
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\"
           name=\"sidebars[";
        // line 40
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "][widget_title]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["slot_settings"] ?? null), "widget_title", []), "html", null, true);
        echo "\" size=\"40\">


    ";
        // line 43
        $this->loadTemplate("panel-colors.twig", "slot-subform-sidebars.twig", 43)->display(twig_array_merge($context, ["strings" =>         // line 45
($context["strings"] ?? null), "id" => ("in-sidebars-" .         // line 46
($context["slug"] ?? null)), "name_base" => (("sidebars[" .         // line 47
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 48
($context["slot_settings"] ?? null), "color_schemes" =>         // line 49
($context["color_schemes"] ?? null)]));
        // line 52
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  100 => 49,  99 => 48,  98 => 47,  97 => 46,  96 => 45,  95 => 43,  87 => 40,  83 => 39,  76 => 37,  72 => 36,  69 => 35,  67 => 32,  66 => 31,  65 => 30,  64 => 29,  63 => 27,  60 => 26,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  52 => 17,  50 => 14,  49 => 13,  48 => 12,  47 => 11,  46 => 9,  41 => 6,  39 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not slot_settings is defined %}
    {% set slot_settings = default_sidebars_slot %}
{% endif %}

{% include 'preview.twig' with {\"preview\": preview } %}

<div class=\"wpml-ls-subform-options\">

    {% include 'dropdown-sidebars.twig'
        with {
            \"slug\":     slug,
            \"settings\": settings,
            \"sidebars\": slots,
            \"strings\": strings,
        }
    %}

    {% include 'dropdown-templates.twig'
        with {
            \"id\": \"in-sidebars-\" ~ slug,
            \"name\": \"sidebars[\" ~ slug ~ \"][template]\",
            \"value\": slot_settings.template,
            \"slot_type\": \"sidebars\",
        }
    %}

    {% include 'checkboxes-includes.twig'
        with {
            \"name_base\": \"sidebars[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"strings\": strings,
            \"template_slug\": slot_settings.template,
        }
    %}

    <h4><label for=\"widget-title-in-{{ slug }}\">
            {{ strings.sidebars.label_widget_title }}  {% include 'tooltip.twig' with { \"content\": strings.tooltips.widget_title } %}</label></h4>

    <input type=\"text\" id=\"widget-title-in-{{ slug }}\"
           name=\"sidebars[{{ slug }}][widget_title]\" value=\"{{ slot_settings.widget_title }}\" size=\"40\">


    {% include 'panel-colors.twig'
        with {
            \"strings\": strings,
            \"id\": \"in-sidebars-\" ~ slug,
            \"name_base\": \"sidebars[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"color_schemes\": color_schemes,
        }
    %}

</div>", "slot-subform-sidebars.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-sidebars.twig");
    }
}
