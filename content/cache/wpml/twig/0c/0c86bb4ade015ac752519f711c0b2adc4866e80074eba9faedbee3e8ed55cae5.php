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

/* dropdown-sidebars.twig */
class __TwigTemplate_843c256cdc9f04c52b0612e7c5c9a00250f8205b877be556e4bf6aff6875a867 extends \Twig\Template
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
        echo "<h4><label for=\"wpml-ls-available-sidebars\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "sidebars", []), "select_label", []), "html", null, true);
        echo ":</label>  ";
        $this->loadTemplate("tooltip.twig", "dropdown-sidebars.twig", 1)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "available_sidebars", [])]));
        echo "</h4>
<select name=\"wpml_ls_available_sidebars\" class=\"js-wpml-ls-available-slots js-wpml-ls-available-sidebars\">
    <option disabled=\"disabled\">-- ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "sidebars", []), "select_option_choose", []), "html", null, true);
        echo " --</option>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sidebars"] ?? null));
        foreach ($context['_seq'] as $context["sidebar_key"] => $context["sidebar"]) {
            // line 5
            echo "        ";
            if (($context["sidebar_key"] == ($context["slug"] ?? null))) {
                // line 6
                echo "            ";
                $context["attr"] = " selected=\"selected\"";
                // line 7
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute($context["sidebar"], "id", []), twig_get_array_keys_filter($this->getAttribute(($context["settings"] ?? null), "sidebar", [])))) {
                // line 8
                echo "            ";
                $context["attr"] = " disabled=\"disabled\"";
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["attr"] = "";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar"], "id", []), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, ($context["attr"] ?? null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar"], "name", []), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sidebar_key'], $context['sidebar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "dropdown-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  42 => 4,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h4><label for=\"wpml-ls-available-sidebars\">{{ strings.sidebars.select_label }}:</label>  {% include 'tooltip.twig' with { \"content\": strings.tooltips.available_sidebars } %}</h4>
<select name=\"wpml_ls_available_sidebars\" class=\"js-wpml-ls-available-slots js-wpml-ls-available-sidebars\">
    <option disabled=\"disabled\">-- {{ strings.sidebars.select_option_choose }} --</option>
    {% for sidebar_key, sidebar in sidebars %}
        {% if sidebar_key == slug %}
            {% set attr = ' selected=\"selected\"' %}
        {% elseif sidebar.id in settings.sidebar|keys %}
            {% set attr = ' disabled=\"disabled\"' %}
        {% else %}
            {% set attr = '' %}
        {% endif %}
        <option value=\"{{ sidebar.id }}\"{{ attr }}>{{ sidebar.name }}</option>
    {% endfor %}
</select>
", "dropdown-sidebars.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/dropdown-sidebars.twig");
    }
}
