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

/* template.twig */
class __TwigTemplate_03de81d125e0e5f89d5191e71a189de3fbbcd7d4ad316579316851c1896ee7fe extends \Twig\Template
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
        $context["css_classes_flag"] = twig_trim_filter(("wpml-ls-flag " . $this->getAttribute(($context["backward_compatibility"] ?? null), "css_classes_flag", [])));
        // line 2
        $context["css_classes_native"] = twig_trim_filter(("wpml-ls-native " . $this->getAttribute(($context["backward_compatibility"] ?? null), "css_classes_native", [])));
        // line 3
        $context["css_classes_display"] = twig_trim_filter(("wpml-ls-display " . $this->getAttribute(($context["backward_compatibility"] ?? null), "css_classes_display", [])));
        // line 4
        $context["css_classes_bracket"] = twig_trim_filter(("wpml-ls-bracket " . $this->getAttribute(($context["backward_compatibility"] ?? null), "css_classes_bracket", [])));
        // line 5
        $context["css_classes_link"] = twig_trim_filter(((($context["css_classes_link"] ?? null) . " ") . $this->getAttribute($this->getAttribute(($context["language"] ?? null), "backward_compatibility", []), "css_classes_a", [])));
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 8
            echo "    ";
            ob_start(function () { return ''; });
            // line 9
            echo "    <span class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", []), "html", null, true);
            echo " wpml-ls-item-legacy-post-translations\">
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["css_classes_link"] ?? null), "html", null, true);
            echo "\">";
            // line 11
            if ($this->getAttribute($context["language"], "flag_url", [])) {
                // line 12
                echo "<img class=\"";
                echo twig_escape_filter($this->env, ($context["css_classes_flag"] ?? null), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_title", []), "html", null, true);
                echo "\">";
            }
            // line 15
            if (($this->getAttribute($context["language"], "is_current", []) && ($this->getAttribute($context["language"], "native_name", []) || $this->getAttribute($context["language"], "display_name", [])))) {
                // line 17
                $context["current_language_name"] = (($this->getAttribute($context["language"], "native_name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["language"], "native_name", []), $this->getAttribute($context["language"], "display_name", []))) : ($this->getAttribute($context["language"], "display_name", [])));
                // line 18
                echo "<span class=\"";
                echo twig_escape_filter($this->env, ($context["css_classes_native"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["current_language_name"] ?? null), "html", null, true);
                echo "</span>";
            } else {
                // line 22
                if ($this->getAttribute($context["language"], "native_name", [])) {
                    // line 23
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, ($context["css_classes_native"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", []), "html", null, true);
                    echo "</span>";
                }
                // line 26
                if ($this->getAttribute($context["language"], "display_name", [])) {
                    // line 27
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, ($context["css_classes_display"] ?? null), "html", null, true);
                    echo "\">";
                    // line 28
                    if ($this->getAttribute($context["language"], "native_name", [])) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, ($context["css_classes_bracket"] ?? null), "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", []), "html", null, true);
                    // line 30
                    if ($this->getAttribute($context["language"], "native_name", [])) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, ($context["css_classes_bracket"] ?? null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 31
                    echo "</span>";
                }
            }
            // line 35
            echo "</a>
    </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  113 => 31,  107 => 30,  105 => 29,  99 => 28,  95 => 27,  93 => 26,  86 => 23,  84 => 22,  77 => 18,  75 => 17,  73 => 15,  62 => 12,  60 => 11,  55 => 10,  50 => 9,  47 => 8,  43 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-post-translations/template.twig");
    }
}
