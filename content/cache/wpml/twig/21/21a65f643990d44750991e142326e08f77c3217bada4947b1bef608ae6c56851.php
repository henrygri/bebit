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

/* section-menus.twig */
class __TwigTemplate_c6b2b2b38d9dbd85fde3b8da1b2c097b92f7b572e204640578d1c73d9613dd2c extends \Twig\Template
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
        $context["slug_placeholder"] = "%id%";
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("table-slots.twig", "section-menus.twig", 3)->display(twig_array_merge($context, ["slot_type" => "menus", "slots_settings" => $this->getAttribute(        // line 6
($context["settings"] ?? null), "menus", []), "slots" => $this->getAttribute(        // line 7
($context["data"] ?? null), "menus", [])]));
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("button-add-new-ls.twig", "section-menus.twig", 11)->display(twig_array_merge($context, ["existing_items" => twig_length_filter($this->env, $this->getAttribute(        // line 13
($context["data"] ?? null), "menus", [])), "settings_items" => twig_length_filter($this->env, $this->getAttribute(        // line 14
($context["settings"] ?? null), "menus", [])), "tooltip_all_assigned" => $this->getAttribute($this->getAttribute(        // line 15
($context["strings"] ?? null), "tooltips", []), "add_menu_all_assigned", []), "tooltip_no_item" => $this->getAttribute($this->getAttribute(        // line 16
($context["strings"] ?? null), "tooltips", []), "add_menu_no_menu", []), "button_target" => "#wpml-ls-new-menus-template", "button_label" => $this->getAttribute($this->getAttribute(        // line 18
($context["strings"] ?? null), "menus", []), "add_button_label", [])]));
        // line 21
        echo "
<script type=\"text/html\" id=\"wpml-ls-new-menus-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "dialog_title_new", []), "html", null, true);
        echo "\" data-item-slug=\"";
        echo twig_escape_filter($this->env, ($context["slug_placeholder"] ?? null), "html", null, true);
        echo "\" data-item-type=\"menus\">

        ";
        // line 25
        $this->loadTemplate("slot-subform-menus.twig", "section-menus.twig", 25)->display(twig_array_merge($context, ["slug" =>         // line 27
($context["slug_placeholder"] ?? null), "slots_settings" =>         // line 28
($context["slots_settings"] ?? null), "slots" => $this->getAttribute(        // line 29
($context["data"] ?? null), "menus", []), "preview" => $this->getAttribute($this->getAttribute(        // line 30
($context["previews"] ?? null), "menu", []), ($context["slug"] ?? null), [], "array")]));
        // line 33
        echo "    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-menus-row-template\" class=\"js-wpml-ls-template\">
    ";
        // line 37
        $this->loadTemplate("table-slot-row.twig", "section-menus.twig", 37)->display(twig_array_merge($context, ["slug" =>         // line 39
($context["slug_placeholder"] ?? null), "slots" =>         // line 40
($context["menus"] ?? null)]));
        // line 43
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "section-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 43,  74 => 40,  73 => 39,  72 => 37,  66 => 33,  64 => 30,  63 => 29,  62 => 28,  61 => 27,  60 => 25,  53 => 23,  49 => 21,  47 => 18,  46 => 16,  45 => 15,  44 => 14,  43 => 13,  42 => 11,  39 => 10,  37 => 7,  36 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set slug_placeholder = '%id%' %}

{% include 'table-slots.twig'
    with {
        \"slot_type\": \"menus\",
        \"slots_settings\": settings.menus,
        \"slots\"    : data.menus,
    }
%}

{% include 'button-add-new-ls.twig'
    with {
        \"existing_items\": data.menus|length,
        \"settings_items\":  settings.menus|length,
        \"tooltip_all_assigned\": strings.tooltips.add_menu_all_assigned,
        \"tooltip_no_item\": strings.tooltips.add_menu_no_menu,
        \"button_target\": \"#wpml-ls-new-menus-template\",
        \"button_label\": strings.menus.add_button_label,
    }
%}

<script type=\"text/html\" id=\"wpml-ls-new-menus-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"{{ strings.menus.dialog_title_new }}\" data-item-slug=\"{{ slug_placeholder }}\" data-item-type=\"menus\">

        {% include 'slot-subform-menus.twig'
        with {
            \"slug\":     slug_placeholder,
            \"slots_settings\": slots_settings,
            \"slots\":    data.menus,
            \"preview\": previews.menu[ slug ],
        }
        %}
    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-menus-row-template\" class=\"js-wpml-ls-template\">
    {% include 'table-slot-row.twig'
        with {
            \"slug\": slug_placeholder,
            \"slots\": menus
        }
    %}
</script>", "section-menus.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-menus.twig");
    }
}
