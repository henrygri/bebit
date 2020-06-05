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

/* table-slots.twig */
class __TwigTemplate_68e2792f30456b146fdd8732e6f054634ee6738633999874289140cd4cc39259 extends \Twig\Template
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
            $context["table_id"] = ((("wpml-ls-slot-list-" . ($context["slot_type"] ?? null)) . "-") . ($context["slug"] ?? null));
        } else {
            // line 5
            echo "\t";
            $context["table_id"] = ("wpml-ls-slot-list-" . ($context["slot_type"] ?? null));
        }
        // line 7
        echo "
";
        // line 8
        if (twig_in_filter(($context["slug"] ?? null), [0 => "footer", 1 => "post_translations"])) {
            // line 9
            echo "    ";
            $context["label_action"] = $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_action", []);
        } else {
            // line 11
            echo "    ";
            $context["label_action"] = $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_actions", []);
        }
        // line 13
        echo "
<table id=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["table_id"] ?? null), "html", null, true);
        echo "\" class=\"js-wpml-ls-slot-list wpml-ls-slot-list\"";
        if ( !($context["slots_settings"] ?? null)) {
            echo " style=\"display:none;\"";
        }
        echo ">
    <thead>
    <tr>
        <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_preview", []), "html", null, true);
        echo "</th>
        ";
        // line 18
        if ( !($context["is_static"] ?? null)) {
            echo "<th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_position", []), "html", null, true);
            echo "</th>";
        }
        // line 19
        echo "        <th";
        if ( !($context["is_static"] ?? null)) {
            echo " colspan=\"2\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, ($context["label_action"] ?? null), "html", null, true);
        echo "</th></tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slots_settings"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["slug"] => $context["slot_settings"]) {
            // line 23
            echo "        ";
            $this->loadTemplate("table-slot-row.twig", "table-slots.twig", 23)->display(twig_array_merge($context, ["slug" =>             // line 25
$context["slug"], "slot_type" =>             // line 26
($context["slot_type"] ?? null), "slot_settings" =>             // line 27
$context["slot_settings"], "slots" =>             // line 28
($context["slots"] ?? null)]));
            // line 31
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['slot_settings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "table-slots.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  114 => 31,  112 => 28,  111 => 27,  110 => 26,  109 => 25,  107 => 23,  90 => 22,  79 => 19,  73 => 18,  69 => 17,  59 => 14,  56 => 13,  52 => 11,  48 => 9,  46 => 8,  43 => 7,  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
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
\t{% set table_id = 'wpml-ls-slot-list-' ~ slot_type ~ '-' ~ slug %}
{% else %}
\t{% set table_id = 'wpml-ls-slot-list-' ~ slot_type %}
{% endif %}

{% if slug in ['footer', 'post_translations'] %}
    {% set label_action = strings.misc.label_action %}
{% else %}
    {% set label_action = strings.misc.label_actions %}
{% endif %}

<table id=\"{{ table_id }}\" class=\"js-wpml-ls-slot-list wpml-ls-slot-list\"{% if not slots_settings %} style=\"display:none;\"{% endif %}>
    <thead>
    <tr>
        <th>{{ strings.misc.label_preview }}</th>
        {% if not is_static %}<th>{{ strings.misc.label_position }}</th>{% endif %}
        <th{% if not is_static %} colspan=\"2\"{% endif %}>{{ label_action }}</th></tr>
    </thead>
    <tbody>
    {% for slug, slot_settings in slots_settings %}
        {% include 'table-slot-row.twig'
            with {
                \"slug\": slug,
                \"slot_type\": slot_type,
                \"slot_settings\": slot_settings,
                \"slots\": slots,
            }
        %}
    {% endfor %}
    </tbody>
</table>", "table-slots.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/table-slots.twig");
    }
}
