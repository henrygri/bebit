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

/* section-options.twig */
class __TwigTemplate_ac6b67137e32b7e70fb74cddc6533883d28f5f0f6899df070ae525ae1d5e32d6 extends \Twig\Template
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
        echo "<div class=\"js-wpml-ls-option wpml-ls-language_order\">
\t<h4><label>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "label_language_order", []), "html", null, true);
        echo "</label> ";
        $this->loadTemplate("tooltip.twig", "section-options.twig", 2)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "languages_order", [])]));
        // line 3
        echo "\t\t";
        $this->loadTemplate("save-notification.twig", "section-options.twig", 3)->display($context);
        // line 4
        echo "\t</h4>
\t<p class=\"explanation-text\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "tip_drag_languages", []), "html", null, true);
        echo "</p>
\t<ul id=\"wpml-ls-languages-order\" class=\"wpml-ls-languages-order\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordered_languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            echo "\t\t<li class=\"js-wpml-languages-order-item\" data-language-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", []), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", []), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", []), "html", null, true);
            echo "<input type=\"hidden\" name=\"languages_order[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", []), "html", null, true);
            echo "\">
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
</div>

<div class=\"js-wpml-ls-option wpml-ls-languages_with_no_translations\">
\t<h4><label>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "label_languages_with_no_translations", []), "html", null, true);
        echo " ";
        $this->loadTemplate("tooltip.twig", "section-options.twig", 16)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "languages_without_translation", [])]));
        // line 17
        echo "\t\t</label>
\t\t";
        // line 18
        $this->loadTemplate("save-notification.twig", "section-options.twig", 18)->display($context);
        // line 19
        echo "\t</h4>
\t<ul>
\t\t<li>
\t\t\t<label for=\"link_empty_off\">
\t\t\t\t<input type=\"radio\" name=\"link_empty\" id=\"link_empty_off\"
\t\t\t\t\t   class=\"js-wpml-ls-trigger-save\"
\t\t\t\t\t   value=\"0\"";
        // line 25
        if ( !$this->getAttribute(($context["settings"] ?? null), "link_empty", [])) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "option_skip_link", []), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<label for=\"link_empty_on\">
\t\t\t\t<input type=\"radio\" name=\"link_empty\" id=\"link_empty_on\"
\t\t\t\t\t   class=\"js-wpml-ls-trigger-save\"
\t\t\t\t\t   value=\"1\"";
        // line 32
        if ($this->getAttribute(($context["settings"] ?? null), "link_empty", [])) {
            echo " checked=\"checked\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "option_link_home", []), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t</ul>
</div>

<div class=\"js-wpml-ls-option wpml-ls-preserve_url_args\">
\t<p class=\"wpml-ls-form-line\">
\t\t";
        // line 40
        if ( !$this->getAttribute(($context["settings"] ?? null), "copy_parameters", [])) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 41
        echo "\t\t\t<label for=\"copy_parameters\">
\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "label_preserve_url_args", []), "html", null, true);
        if ( !$this->getAttribute(($context["settings"] ?? null), "copy_parameters", [])) {
            echo "<span class=\"otgs-ico-caret-down js-arrow-toggle\"></span>";
        }
        // line 43
        echo "</label>";
        if ( !$this->getAttribute(($context["settings"] ?? null), "copy_parameters", [])) {
            echo "</a>";
        }
        // line 44
        echo "
\t\t";
        // line 45
        $this->loadTemplate("tooltip.twig", "section-options.twig", 45)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "preserve_url_arguments", [])]));
        // line 46
        echo "
\t\t";
        // line 47
        $this->loadTemplate("save-notification.twig", "section-options.twig", 47)->display($context);
        // line 48
        echo "
\t\t<input type=\"text\" size=\"100\" id=\"copy_parameters\" name=\"copy_parameters\"
\t\t\t   value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "copy_parameters", []), "html", null, true);
        echo "\"
\t\t\t   class=\"js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save";
        // line 51
        if ( !$this->getAttribute(($context["settings"] ?? null), "copy_parameters", [])) {
            echo " js-wpml-ls-toggle-target hidden";
        }
        echo "\">
\t</p>
</div>

<div class=\"js-wpml-ls-option wpml-ls-additional_css\">
\t<p class=\"wpml-ls-form-line\">
\t\t";
        // line 57
        if ( !$this->getAttribute(($context["settings"] ?? null), "additional_css", [])) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 58
        echo "\t\t\t<label for=\"additional_css\">
\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "label_additional_css", []), "html", null, true);
        if ( !$this->getAttribute(($context["settings"] ?? null), "additional_css", [])) {
            echo "<span class=\"otgs-ico-caret-down js-arrow-toggle\"></span>";
        }
        // line 60
        echo "</label>";
        if ( !$this->getAttribute(($context["settings"] ?? null), "additional_css", [])) {
            echo "</a>";
        }
        // line 61
        echo "

\t\t";
        // line 63
        $this->loadTemplate("tooltip.twig", "section-options.twig", 63)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "additional_css", [])]));
        // line 64
        echo "
\t\t";
        // line 65
        $this->loadTemplate("save-notification.twig", "section-options.twig", 65)->display($context);
        // line 66
        echo "
\t\t<textarea id=\"additional_css\" name=\"additional_css\" rows=\"4\"
\t\t\t\t  class=\"large-text js-wpml-ls-additional-css js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save";
        // line 68
        if ( !$this->getAttribute(($context["settings"] ?? null), "additional_css", [])) {
            echo " js-wpml-ls-toggle-target hidden";
        }
        echo "\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "additional_css", []), "html", null, true);
        // line 70
        echo "</textarea>
\t</p>
</div>

<div class=\"js-wpml-ls-option wpml-ls-backwards_compatibility\">
\t<div class=\"wpml-ls-form-line\">
\t\t";
        // line 76
        if (( !$this->getAttribute(($context["settings"] ?? null), "migrated", []) == 1)) {
            // line 77
            echo "\t\t\t";
            $context["hide_backwards_compatibility"] = true;
            // line 78
            echo "\t\t";
        }
        // line 79
        echo "
\t\t";
        // line 80
        if (($context["hide_backwards_compatibility"] ?? null)) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 81
        echo "\t\t\t<label>
\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "label_migrated_toggle", []), "html", null, true);
        if (($context["hide_backwards_compatibility"] ?? null)) {
            echo "<span class=\"otgs-ico-caret-down js-arrow-toggle\"></span>";
        }
        // line 83
        echo "</label>";
        if (($context["hide_backwards_compatibility"] ?? null)) {
            echo "</a>";
        }
        // line 84
        echo "
\t\t";
        // line 85
        $this->loadTemplate("tooltip.twig", "section-options.twig", 85)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "backwards_compatibility", [])]));
        // line 86
        echo "
\t\t";
        // line 87
        $this->loadTemplate("save-notification.twig", "section-options.twig", 87)->display($context);
        // line 88
        echo "
\t\t<p";
        // line 89
        if (($context["hide_backwards_compatibility"] ?? null)) {
            echo " class=\"js-wpml-ls-toggle-target hidden\"";
        }
        echo ">
\t\t\t<input type=\"checkbox\" id=\"wpml-ls-backwards-compatibility\" name=\"migrated\"
\t\t\t\t   value=\"0\"";
        // line 91
        if (($this->getAttribute(($context["settings"] ?? null), "migrated", []) == 0)) {
            echo " checked=\"checked\"";
        }
        // line 92
        echo "\t\t\t\t   class=\"js-wpml-ls-migrated js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save\">

\t\t\t<label for=\"wpml-ls-backwards-compatibility\">
\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "options", []), "label_skip_backwards_compatibility", []), "html", null, true);
        echo "
\t\t\t</label>
\t\t</p>

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "section-options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 95,  267 => 92,  263 => 91,  256 => 89,  253 => 88,  251 => 87,  248 => 86,  246 => 85,  243 => 84,  238 => 83,  233 => 82,  230 => 81,  226 => 80,  223 => 79,  220 => 78,  217 => 77,  215 => 76,  207 => 70,  205 => 69,  200 => 68,  196 => 66,  194 => 65,  191 => 64,  189 => 63,  185 => 61,  180 => 60,  175 => 59,  172 => 58,  168 => 57,  157 => 51,  153 => 50,  149 => 48,  147 => 47,  144 => 46,  142 => 45,  139 => 44,  134 => 43,  129 => 42,  126 => 41,  122 => 40,  107 => 32,  93 => 25,  85 => 19,  83 => 18,  80 => 17,  76 => 16,  70 => 12,  57 => 9,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "section-options.twig", "/Users/francescogrieco/Desktop/projects/bebit/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-options.twig");
    }
}
