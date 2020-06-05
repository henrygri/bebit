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

/* dropdown-templates.twig */
class __TwigTemplate_5af860b1900cdbaa3c3dd69b6957bc16e4086e0cc073ff4b4e4428c899f1f4c1 extends \Twig\Template
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
        $context["supported_core_templates"] = [];
        // line 2
        $context["supported_custom_templates"] = [];
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "templates", []));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            if (twig_in_filter(($context["slot_type"] ?? null), $this->getAttribute($context["template"], "supported_slot_types", []))) {
                // line 5
                echo "\t";
                if ($this->getAttribute($context["template"], "is_core", [])) {
                    // line 6
                    echo "\t\t";
                    $context["supported_core_templates"] = twig_array_merge(($context["supported_core_templates"] ?? null), [0 => $context["template"]]);
                    // line 7
                    echo "\t";
                } else {
                    // line 8
                    echo "\t\t";
                    $context["supported_custom_templates"] = twig_array_merge(($context["supported_custom_templates"] ?? null), [0 => $context["template"]]);
                    // line 9
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        $context["total_templates"] = (twig_length_filter($this->env, ($context["supported_core_templates"] ?? null)) + twig_length_filter($this->env, ($context["supported_custom_templates"] ?? null)));
        // line 13
        echo "
<div";
        // line 14
        if ((($context["total_templates"] ?? null) <= 1)) {
            echo " class=\"hidden\"";
        }
        echo ">

\t<h4><label for=\"template-";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "templates_dropdown_label", []), "html", null, true);
        echo "</label>  ";
        $this->loadTemplate("tooltip.twig", "dropdown-templates.twig", 16)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "available_templates", [])]));
        echo "</h4>

\t<select id=\"template-";
        // line 18
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"js-wpml-ls-template-selector js-wpml-ls-trigger-update\">

\t\t<optgroup label=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "templates_wpml_group", []), "html", null, true);
        echo "\">
\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supported_core_templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 22
            echo "\t\t\t";
            $context["template_data"] = $this->getAttribute($context["template"], "get_template_data", [], "method");
            // line 23
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template_data"] ?? null), "slug", []), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == $this->getAttribute(($context["template_data"] ?? null), "slug", []))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template_data"] ?? null), "name", []), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</optgroup>

\t\t";
        // line 27
        if ((twig_length_filter($this->env, ($context["supported_custom_templates"] ?? null)) > 0)) {
            // line 28
            echo "\t\t\t<optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "templates_custom_group", []), "html", null, true);
            echo "\">
\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["supported_custom_templates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 30
                echo "\t\t\t\t";
                $context["template_data"] = $this->getAttribute($context["template"], "get_template_data", [], "method");
                // line 31
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template_data"] ?? null), "slug", []), "html", null, true);
                echo "\" ";
                if ((($context["value"] ?? null) == $this->getAttribute(($context["template_data"] ?? null), "slug", []))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template_data"] ?? null), "name", []), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 35
        echo "
\t</select>

</div>
";
    }

    public function getTemplateName()
    {
        return "dropdown-templates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 35,  152 => 33,  137 => 31,  134 => 30,  130 => 29,  125 => 28,  123 => 27,  119 => 25,  104 => 23,  101 => 22,  97 => 21,  93 => 20,  86 => 18,  77 => 16,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set supported_core_templates = [] %}
{% set supported_custom_templates = [] %}

{% for template in data.templates if slot_type in template.supported_slot_types %}
\t{% if template.is_core %}
\t\t{% set supported_core_templates = supported_core_templates|merge([template]) %}
\t{% else %}
\t\t{% set supported_custom_templates = supported_custom_templates|merge([template]) %}
\t{% endif %}
{% endfor %}

{% set total_templates = (supported_core_templates|length) + (supported_custom_templates|length)%}

<div{% if total_templates <= 1 %} class=\"hidden\"{% endif %}>

\t<h4><label for=\"template-{{ id }}\">{{ strings.misc.templates_dropdown_label }}</label>  {% include 'tooltip.twig' with { \"content\": strings.tooltips.available_templates } %}</h4>

\t<select id=\"template-{{ id }}\" name=\"{{ name }}\" class=\"js-wpml-ls-template-selector js-wpml-ls-trigger-update\">

\t\t<optgroup label=\"{{ strings.misc.templates_wpml_group }}\">
\t\t{% for template in supported_core_templates %}
\t\t\t{% set template_data = template.get_template_data() %}
\t\t\t<option value=\"{{ template_data.slug }}\" {% if value == template_data.slug %}selected=\"selected\"{% endif %}>{{ template_data.name }}</option>
\t\t{% endfor %}
\t\t</optgroup>

\t\t{% if supported_custom_templates|length > 0 %}
\t\t\t<optgroup label=\"{{ strings.misc.templates_custom_group }}\">
\t\t\t{% for template in supported_custom_templates %}
\t\t\t\t{% set template_data = template.get_template_data() %}
\t\t\t\t<option value=\"{{ template_data.slug }}\" {% if value == template_data.slug %}selected=\"selected\"{% endif %}>{{ template_data.name }}</option>
\t\t\t{% endfor %}
\t\t\t</optgroup>
\t\t{% endif %}

\t</select>

</div>
", "dropdown-templates.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/dropdown-templates.twig");
    }
}
