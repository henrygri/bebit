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

/* checkboxes-includes.twig */
class __TwigTemplate_e436baeb5073656b4ed12d6965292489b668458690b18247d63c4eafc09d8a58 extends \Twig\Template
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
        $context["force"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), "templates", []), ($context["template_slug"] ?? null), [], "array"), "force_settings", []);
        // line 2
        $context["is_hierarchical"] = (($this->getAttribute(($context["slot_settings"] ?? null), "slot_group", []) == "menus") && $this->getAttribute(($context["slot_settings"] ?? null), "is_hierarchical", []));
        // line 3
        echo "
<h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "title_what_to_include", []), "html", null, true);
        echo " ";
        $this->loadTemplate("tooltip.twig", "checkboxes-includes.twig", 4)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "what_to_include", [])]));
        echo "</h4>
<ul class=\"js-wpml-ls-to-include\">
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_flags js-wpml-ls-trigger-update\"
                      name=\"";
        // line 8
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[display_flags]";
        } else {
            echo "display_flags";
        }
        echo "\"
                      ";
        // line 9
        if ($this->getAttribute(($context["force"] ?? null), "display_flags", [], "any", true, true)) {
            echo " disabled=\"disabled\"";
        }
        // line 10
        echo "                      value=\"1\"";
        if ($this->getAttribute(($context["slot_settings"] ?? null), "display_flags", [])) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_include_flag", []), "html", null, true);
        echo "</label>
    </li>
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_names_in_native_lang js-wpml-ls-trigger-update\"
                      name=\"";
        // line 14
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[display_names_in_native_lang]";
        } else {
            echo "display_names_in_native_lang";
        }
        echo "\"
                      ";
        // line 15
        if ($this->getAttribute(($context["force"] ?? null), "display_names_in_native_lang", [], "any", true, true)) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        echo "                      value=\"1\"";
        if ($this->getAttribute(($context["slot_settings"] ?? null), "display_names_in_native_lang", [])) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_include_native_lang", []), "html", null, true);
        echo "</label>
    </li>
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_names_in_current_lang js-wpml-ls-trigger-update\"
                      name=\"";
        // line 20
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[display_names_in_current_lang]";
        } else {
            echo "display_names_in_current_lang";
        }
        echo "\"
                      ";
        // line 21
        if ($this->getAttribute(($context["force"] ?? null), "display_names_in_current_lang", [], "any", true, true)) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        echo "                      value=\"1\"";
        if ((($this->getAttribute(($context["slot_settings"] ?? null), "display_names_in_current_lang", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["slot_settings"] ?? null), "display_names_in_current_lang", []), 1)) : (1))) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_include_display_lang", []), "html", null, true);
        echo "</label>
    </li>
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_link_for_current_lang js-wpml-ls-trigger-update\"
                      name=\"";
        // line 26
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[display_link_for_current_lang]";
        } else {
            echo "display_link_for_current_lang";
        }
        echo "\"
                      ";
        // line 27
        if (($this->getAttribute(($context["force"] ?? null), "display_link_for_current_lang", [], "any", true, true) || ($context["is_hierarchical"] ?? null))) {
            echo " disabled=\"disabled\"";
        }
        // line 28
        echo "                      value=\"1\"";
        if ((($this->getAttribute(($context["slot_settings"] ?? null), "display_link_for_current_lang", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["slot_settings"] ?? null), "display_link_for_current_lang", []), 1)) : (1))) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", []), "label_include_current_lang", []), "html", null, true);
        echo "</label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "checkboxes-includes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 28,  130 => 27,  121 => 26,  109 => 22,  105 => 21,  96 => 20,  84 => 16,  80 => 15,  71 => 14,  59 => 10,  55 => 9,  46 => 8,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "checkboxes-includes.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/checkboxes-includes.twig");
    }
}
