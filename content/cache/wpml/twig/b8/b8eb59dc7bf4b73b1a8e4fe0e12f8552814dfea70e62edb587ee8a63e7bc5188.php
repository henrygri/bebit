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

/* table-slot-row.twig */
class __TwigTemplate_b4642616a5638b4eabefbfc513cdb9aeb0e1910e00b757cb8c2a8d9883a8321d extends \Twig\Template
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
        if ((($context["slot_type"] ?? null) == "statics")) {
            // line 2
            echo "\t";
            $context["is_static"] = true;
            // line 3
            echo "\t";
            $context["dialog_title"] = $this->getAttribute($this->getAttribute(($context["strings"] ?? null), ($context["slug"] ?? null), [], "array"), "dialog_title", []);
            // line 4
            echo "\t";
            $context["include_row"] = (((("slot-subform-" . ($context["slot_type"] ?? null)) . "-") . ($context["slug"] ?? null)) . ".twig");
        } else {
            // line 6
            echo "\t";
            $context["dialog_title"] = $this->getAttribute($this->getAttribute(($context["strings"] ?? null), ($context["slot_type"] ?? null), [], "array"), "dialog_title", []);
            // line 7
            echo "\t";
            $context["include_row"] = (("slot-subform-" . ($context["slot_type"] ?? null)) . ".twig");
        }
        // line 9
        echo "
";
        // line 10
        $context["slot_row_id"] = ((("wpml-ls-" . ($context["slot_type"] ?? null)) . "-row-") . ($context["slug"] ?? null));
        // line 11
        echo "<tr id=\"";
        echo twig_escape_filter($this->env, ($context["slot_row_id"] ?? null), "html", null, true);
        echo "\" class=\"js-wpml-ls-row\" data-item-slug=\"";
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\" data-item-type=\"";
        echo twig_escape_filter($this->env, ($context["slot_type"] ?? null), "html", null, true);
        echo "\">
    <td class=\"wpml-ls-cell-preview\">
        <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-origin-id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["slot_row_id"] ?? null), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, ($context["dialog_title"] ?? null), "html", null, true);
        echo "\" data-item-slug=\"";
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\" data-item-type=\"";
        echo twig_escape_filter($this->env, ($context["slot_type"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 14
        if (($context["slot_settings"] ?? null)) {
            // line 15
            echo "                ";
            $this->loadTemplate(($context["include_row"] ?? null), "table-slot-row.twig", 15)->display(twig_array_merge($context, ["slug" =>             // line 17
($context["slug"] ?? null), "slot_settings" =>             // line 18
($context["slot_settings"] ?? null), "settings" =>             // line 19
($context["settings"] ?? null), "slots" =>             // line 20
($context["slots"] ?? null), "strings" =>             // line 21
($context["strings"] ?? null), "preview" => $this->getAttribute($this->getAttribute(            // line 22
($context["previews"] ?? null), ($context["slot_type"] ?? null), [], "array"), ($context["slug"] ?? null), [], "array"), "color_schemes" =>             // line 23
($context["color_schemes"] ?? null)]));
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </div>
    </td>

\t";
        // line 30
        if ( !($context["is_static"] ?? null)) {
            // line 31
            echo "    <td>
        <span class=\"js-wpml-ls-row-title\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["slots"] ?? null), ($context["slug"] ?? null), [], "array"), "name", []), "html", null, true);
            echo "</span>
    </td>
\t";
        }
        // line 35
        echo "
\t<td class=\"wpml-ls-cell-action\">
        <a href=\"#\" title=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "title_action_edit", []), "html", null, true);
        echo "\" class=\"js-wpml-ls-row-edit wpml-ls-row-edit\"><i class=\"otgs-ico-edit\"></i></a>
    </td>

\t";
        // line 40
        if ( !($context["is_static"] ?? null)) {
            // line 41
            echo "    <td class=\"wpml-ls-cell-action\">
        <a href=\"#\" title=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "title_action_delete", []), "html", null, true);
            echo "\" class=\"js-wpml-ls-row-remove wpml-ls-row-remove\"><i class=\"otgs-ico-delete\"></i></a>
    </td>
\t";
        }
        // line 45
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "table-slot-row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  120 => 42,  117 => 41,  115 => 40,  109 => 37,  105 => 35,  99 => 32,  96 => 31,  94 => 30,  89 => 27,  86 => 26,  84 => 23,  83 => 22,  82 => 21,  81 => 20,  80 => 19,  79 => 18,  78 => 17,  76 => 15,  74 => 14,  64 => 13,  54 => 11,  52 => 10,  49 => 9,  45 => 7,  42 => 6,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if slot_type == 'statics' %}
\t{% set is_static = true %}
\t{% set dialog_title = strings[ slug ].dialog_title %}
\t{% set include_row  = 'slot-subform-' ~ slot_type ~ '-' ~ slug ~ '.twig' %}
{% else %}
\t{% set dialog_title = strings[ slot_type ].dialog_title %}
\t{% set include_row  = 'slot-subform-' ~ slot_type ~ '.twig' %}
{% endif %}

{% set slot_row_id = 'wpml-ls-' ~ slot_type ~ '-row-' ~ slug %}
<tr id=\"{{ slot_row_id }}\" class=\"js-wpml-ls-row\" data-item-slug=\"{{ slug }}\" data-item-type=\"{{ slot_type }}\">
    <td class=\"wpml-ls-cell-preview\">
        <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-origin-id=\"{{ slot_row_id }}\" data-title=\"{{ dialog_title }}\" data-item-slug=\"{{ slug }}\" data-item-type=\"{{ slot_type }}\">
            {% if slot_settings %}
                {% include include_row
                    with {
                        \"slug\":     slug,
                        \"slot_settings\": slot_settings,
                        \"settings\": settings,
                        \"slots\":    slots,
                        \"strings\": strings,
                        \"preview\": previews[ slot_type ][ slug ],
                        \"color_schemes\": color_schemes,
                    }
                %}
            {% endif %}
        </div>
    </td>

\t{% if not is_static %}
    <td>
        <span class=\"js-wpml-ls-row-title\">{{ slots[ slug ].name }}</span>
    </td>
\t{% endif %}

\t<td class=\"wpml-ls-cell-action\">
        <a href=\"#\" title=\"{{ strings.misc.title_action_edit }}\" class=\"js-wpml-ls-row-edit wpml-ls-row-edit\"><i class=\"otgs-ico-edit\"></i></a>
    </td>

\t{% if not is_static %}
    <td class=\"wpml-ls-cell-action\">
        <a href=\"#\" title=\"{{ strings.misc.title_action_delete }}\" class=\"js-wpml-ls-row-remove wpml-ls-row-remove\"><i class=\"otgs-ico-delete\"></i></a>
    </td>
\t{% endif %}
</tr>", "table-slot-row.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/table-slot-row.twig");
    }
}
