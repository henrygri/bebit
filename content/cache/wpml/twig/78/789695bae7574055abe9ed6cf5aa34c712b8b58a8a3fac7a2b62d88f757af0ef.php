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
class __TwigTemplate_47fafc9100618074e3ce3d362625a0bc9a5e8841b09a6240006161d1ffea4760 extends \Twig\Template
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
        return new Source("{% set css_classes_flag    = ('wpml-ls-flag ' ~ backward_compatibility.css_classes_flag)|trim %}
{% set css_classes_native  = ('wpml-ls-native ' ~ backward_compatibility.css_classes_native)|trim %}
{% set css_classes_display = ('wpml-ls-display ' ~ backward_compatibility.css_classes_display)|trim %}
{% set css_classes_bracket = ('wpml-ls-bracket ' ~ backward_compatibility.css_classes_bracket)|trim %}
{% set css_classes_link    = ('wpml-ls-link ' ~ language.backward_compatibility.css_classes_a)|trim %}

<div class=\"{{ css_classes }} wpml-ls-legacy-list-horizontal\"{% if backward_compatibility.css_id %} id=\"{{ backward_compatibility.css_id }}\"{% endif %}>
\t<ul>

\t\t{%- for code, language in languages -%}
\t\t\t<li class=\"{{ language.css_classes }} wpml-ls-item-legacy-list-horizontal\">
\t\t\t\t<a href=\"{{ language.url }}\" class=\"{{ css_classes_link }}\">
\t\t\t\t\t{%- if language.flag_url -%}
\t\t\t\t\t\t<img class=\"{{ css_classes_flag }}\" src=\"{{ language.flag_url }}\" alt=\"{{ language.code }}\" title=\"{{ language.flag_title }}\">
\t\t\t\t\t{%- endif -%}

\t\t\t\t\t{%- if language.is_current and (language.native_name or language.display_name)  -%}

\t\t\t\t\t\t{%- set current_language_name = language.native_name|default(language.display_name) -%}
\t\t\t\t\t\t<span class=\"{{ css_classes_native }}\">{{- current_language_name -}}</span>

\t\t\t\t\t{%- else -%}

\t\t\t\t\t\t{%- if language.native_name -%}
\t\t\t\t\t\t\t<span class=\"{{ css_classes_native }}\">{{- language.native_name -}}</span>
\t\t\t\t\t\t{%- endif -%}

\t\t\t\t\t\t{%- if language.display_name -%}
\t\t\t\t\t\t\t<span class=\"{{ css_classes_display }}\">
\t\t\t\t\t\t\t{%- if language.native_name -%}<span class=\"{{ css_classes_bracket }}\"> (</span>{%- endif -%}
\t\t\t\t\t\t\t\t{{- language.display_name -}}
\t\t\t\t\t\t\t{%- if language.native_name -%}<span class=\"{{ css_classes_bracket }}\">)</span>{%- endif -%}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t{%- endif -%}

\t\t\t\t\t{%- endif -%}
\t\t\t\t</a>
\t\t\t</li>
\t\t{%- endfor -%}

\t</ul>
</div>", "template.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/template.twig");
    }
}
