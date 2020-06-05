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

/* panel-colors.twig */
class __TwigTemplate_e854ad39ffd884ea16d360b8078484692b55d457e9aa1de552c716d101f6e367 extends \Twig\Template
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
        $context["wrapper_options"] = [0 => ["label" => $this->getAttribute($this->getAttribute(        // line 2
($context["strings"] ?? null), "color_picker", []), "background", []), "name" => "background", "schemes" => [0 => "normal"], "default" => ""], 1 => ["label" => $this->getAttribute($this->getAttribute(        // line 3
($context["strings"] ?? null), "color_picker", []), "border", []), "name" => "border", "schemes" => [0 => "normal"], "default" => ""]];
        // line 6
        echo "
";
        // line 7
        $context["options"] = [0 => ["label" => $this->getAttribute($this->getAttribute(        // line 8
($context["strings"] ?? null), "color_picker", []), "font_current", []), "name" => "font_current", "schemes" => [0 => "normal", 1 => "hover"], "default" => ""], 1 => ["label" => $this->getAttribute($this->getAttribute(        // line 9
($context["strings"] ?? null), "color_picker", []), "background_current", []), "name" => "background_current", "schemes" => [0 => "normal", 1 => "hover"], "default" => ""], 2 => ["label" => $this->getAttribute($this->getAttribute(        // line 10
($context["strings"] ?? null), "color_picker", []), "font_other", []), "name" => "font_other", "schemes" => [0 => "normal", 1 => "hover"], "default" => ""], 3 => ["label" => $this->getAttribute($this->getAttribute(        // line 11
($context["strings"] ?? null), "color_picker", []), "background_other", []), "name" => "background_other", "schemes" => [0 => "normal", 1 => "hover"], "default" => ""]];
        // line 14
        echo "
";
        // line 15
        if ((($context["slot_type"] ?? null) != "menus")) {
            // line 16
            echo "    ";
            $context["options"] = twig_array_merge(($context["wrapper_options"] ?? null), ($context["options"] ?? null));
        }
        // line 18
        echo "
";
        // line 19
        $context["css_class"] = (((isset($context["css_class"]) || array_key_exists("css_class", $context))) ? (_twig_default_filter(($context["css_class"] ?? null), "js-wpml-ls-colorpicker")) : ("js-wpml-ls-colorpicker"));
        // line 20
        echo "
<div class=\"js-wpml-ls-panel-colors wpml-ls-panel-colors\">
    <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "color_picker", []), "panel_title", []), "html", null, true);
        echo "</h4>

    <label for=\"wpml-ls-";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-colorpicker-preset\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "color_picker", []), "label_color_preset", []), "html", null, true);
        echo "</label>
    <select name=\"wpml-ls-";
        // line 25
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-colorpicker-preset\" class=\"js-wpml-ls-colorpicker-preset\">
        <option value=\"\">-- ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "color_picker", []), "select_option_choose", []), "html", null, true);
        echo " --</option>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["color_schemes"] ?? null));
        foreach ($context['_seq'] as $context["scheme_id"] => $context["scheme"]) {
            // line 28
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["scheme_id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scheme"], "label", []), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scheme_id'], $context['scheme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>

    <div>
        <table>
            <tr>
                <td>
                </td>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "color_picker", []), "label_normal_scheme", []), "html", null, true);
        echo "</th>
                <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "color_picker", []), "label_hover_scheme", []), "html", null, true);
        echo "</th>
            </tr>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "label", []), "html", null, true);
            echo "</td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 44
            if (twig_in_filter("normal", $this->getAttribute($context["option"], "schemes", []))) {
                // line 45
                echo "                        ";
                if (($context["name_base"] ?? null)) {
                    // line 46
                    echo "                            ";
                    $context["input_name"] = (((($context["name_base"] ?? null) . "[") . $this->getAttribute($context["option"], "name", [])) . "_normal]");
                    // line 47
                    echo "                        ";
                } else {
                    // line 48
                    echo "                            ";
                    $context["input_name"] = ($this->getAttribute($context["option"], "name", []) . "_normal");
                    // line 49
                    echo "                        ";
                }
                // line 50
                echo "                        <input class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo " js-wpml-ls-color-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", []), "html", null, true);
                echo "_normal\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 51
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", []), "html", null, true);
                echo "-normal\" name=\"";
                echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
                echo "\"
                               value=\"";
                // line 52
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["slot_settings"] ?? null), ($this->getAttribute($context["option"], "name", []) . "_normal"), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["slot_settings"] ?? null), ($this->getAttribute($context["option"], "name", []) . "_normal"), [], "array"), $this->getAttribute($context["option"], "default", []))) : ($this->getAttribute($context["option"], "default", []))), "html", null, true);
                echo "\" data-default-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "default", []), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 54
            echo "                </td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 56
            if (twig_in_filter("hover", $this->getAttribute($context["option"], "schemes", []))) {
                // line 57
                echo "                        ";
                if (($context["name_base"] ?? null)) {
                    // line 58
                    echo "                            ";
                    $context["input_name"] = (((($context["name_base"] ?? null) . "[") . $this->getAttribute($context["option"], "name", [])) . "_hover]");
                    // line 59
                    echo "                        ";
                } else {
                    // line 60
                    echo "                            ";
                    $context["input_name"] = ($this->getAttribute($context["option"], "name", []) . "_hover");
                    // line 61
                    echo "                        ";
                }
                // line 62
                echo "                        <input class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo " js-wpml-ls-color-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", []), "html", null, true);
                echo "_hover\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 63
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", []), "html", null, true);
                echo "-hover\" name=\"";
                echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
                echo "\"
                               value=\"";
                // line 64
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["slot_settings"] ?? null), ($this->getAttribute($context["option"], "name", []) . "_hover"), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["slot_settings"] ?? null), ($this->getAttribute($context["option"], "name", []) . "_hover"), [], "array"), $this->getAttribute($context["option"], "default", []))) : ($this->getAttribute($context["option"], "default", []))), "html", null, true);
                echo "\" data-default-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "default", []), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 66
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "panel-colors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 69,  207 => 66,  200 => 64,  192 => 63,  185 => 62,  182 => 61,  179 => 60,  176 => 59,  173 => 58,  170 => 57,  168 => 56,  164 => 54,  157 => 52,  149 => 51,  142 => 50,  139 => 49,  136 => 48,  133 => 47,  130 => 46,  127 => 45,  125 => 44,  120 => 42,  117 => 41,  113 => 40,  108 => 38,  104 => 37,  95 => 30,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  66 => 24,  61 => 22,  57 => 20,  55 => 19,  52 => 18,  48 => 16,  46 => 15,  43 => 14,  41 => 11,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  34 => 6,  32 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "panel-colors.twig", "/Users/francescogrieco/Desktop/projects/bebit/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/panel-colors.twig");
    }
}
