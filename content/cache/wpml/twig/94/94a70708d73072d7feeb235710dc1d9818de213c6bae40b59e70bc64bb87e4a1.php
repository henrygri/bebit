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

/* radio-position-menu.twig */
class __TwigTemplate_5497f9ee9d252bf10f440b414050a906f52e05aa7799192bb3c0ae744f549ca8 extends \Twig\Template
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
        if ( !$this->getAttribute(($context["slot_settings"] ?? null), "position_in_menu", [])) {
            // line 2
            echo "    ";
            $context["menu_position"] = "after";
        } else {
            // line 4
            echo "    ";
            $context["menu_position"] = $this->getAttribute(($context["slot_settings"] ?? null), "position_in_menu", []);
        }
        // line 6
        echo "
<h4><label>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "position_label", []), "html", null, true);
        echo "</label>  ";
        $this->loadTemplate("tooltip.twig", "radio-position-menu.twig", 7)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "menu_position", [])]));
        echo "</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" name=\"";
        // line 11
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[position_in_menu]";
        } else {
            echo "position_in_menu";
        }
        echo "\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"before\"";
        // line 13
        if ((($context["menu_position"] ?? null) == "before")) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "position_first_item", []), "html", null, true);
        echo "
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" name=\"";
        // line 18
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[position_in_menu]";
        } else {
            echo "position_in_menu";
        }
        echo "\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"after\"";
        // line 20
        if ((($context["menu_position"] ?? null) == "after")) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "position_last_item", []), "html", null, true);
        echo "
        </label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "radio-position-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  74 => 18,  62 => 13,  52 => 11,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not slot_settings.position_in_menu %}
    {% set menu_position = 'after' %}
{% else %}
    {% set menu_position = slot_settings.position_in_menu %}
{% endif %}

<h4><label>{{ strings.menus.position_label }}</label>  {% include 'tooltip.twig' with { \"content\": strings.tooltips.menu_position } %}</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" name=\"{% if name_base %}{{ name_base }}[position_in_menu]{% else %}position_in_menu{% endif %}\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"before\"{% if menu_position == 'before' %} checked=\"checked\"{% endif %}>{{ strings.menus.position_first_item }}
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" name=\"{% if name_base %}{{ name_base }}[position_in_menu]{% else %}position_in_menu{% endif %}\"
                   class=\" js-wpml-ls-trigger-update\"
                   value=\"after\"{% if menu_position == 'after' %} checked=\"checked\"{% endif %}>{{ strings.menus.position_last_item }}
        </label>
    </li>
</ul>", "radio-position-menu.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/radio-position-menu.twig");
    }
}
