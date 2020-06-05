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
class __TwigTemplate_107acbf06d00a355ec278461c93a821d46999a8d51c6e3173e7a0deb4863f8c0 extends \Twig\Template
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
        $context["css_classes_link"] = twig_trim_filter(("wpml-ls-link " . $this->getAttribute($this->getAttribute(($context["language"] ?? null), "backward_compatibility", []), "css_classes_a", [])));
        // line 6
        echo "
<div class=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["css_classes"] ?? null), "html", null, true);
        echo " wpml-ls-legacy-list-horizontal\"";
        if ($this->getAttribute(($context["backward_compatibility"] ?? null), "css_id", [])) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backward_compatibility"] ?? null), "css_id", []), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 11
            echo "<li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", []), "html", null, true);
            echo " wpml-ls-item-legacy-list-horizontal\">
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["css_classes_link"] ?? null), "html", null, true);
            echo "\">";
            // line 13
            if ($this->getAttribute($context["language"], "flag_url", [])) {
                // line 14
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
            // line 17
            if (($this->getAttribute($context["language"], "is_current", []) && ($this->getAttribute($context["language"], "native_name", []) || $this->getAttribute($context["language"], "display_name", [])))) {
                // line 19
                $context["current_language_name"] = (($this->getAttribute($context["language"], "native_name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["language"], "native_name", []), $this->getAttribute($context["language"], "display_name", []))) : ($this->getAttribute($context["language"], "display_name", [])));
                // line 20
                echo "<span class=\"";
                echo twig_escape_filter($this->env, ($context["css_classes_native"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["current_language_name"] ?? null), "html", null, true);
                echo "</span>";
            } else {
                // line 24
                if ($this->getAttribute($context["language"], "native_name", [])) {
                    // line 25
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, ($context["css_classes_native"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", []), "html", null, true);
                    echo "</span>";
                }
                // line 28
                if ($this->getAttribute($context["language"], "display_name", [])) {
                    // line 29
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, ($context["css_classes_display"] ?? null), "html", null, true);
                    echo "\">";
                    // line 30
                    if ($this->getAttribute($context["language"], "native_name", [])) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, ($context["css_classes_bracket"] ?? null), "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", []), "html", null, true);
                    // line 32
                    if ($this->getAttribute($context["language"], "native_name", [])) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, ($context["css_classes_bracket"] ?? null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 33
                    echo "</span>";
                }
            }
            // line 37
            echo "</a>
\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>
</div>";
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
        return array (  131 => 41,  124 => 37,  120 => 33,  114 => 32,  112 => 31,  106 => 30,  102 => 29,  100 => 28,  93 => 25,  91 => 24,  84 => 20,  82 => 19,  80 => 17,  69 => 14,  67 => 13,  62 => 12,  57 => 11,  53 => 10,  43 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig", "/Users/francescogrieco/Desktop/projects/bebit/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/template.twig");
    }
}
