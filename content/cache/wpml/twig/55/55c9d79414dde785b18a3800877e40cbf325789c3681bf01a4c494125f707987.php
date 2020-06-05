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

/* section-footer.twig */
class __TwigTemplate_d8e6a817d5f18e079b2dc01befeea0a832147554184b8bbd8a40f43446c2acae extends \Twig\Template
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
        echo "<p class=\"wpml-ls-form-line js-wpml-ls-option\">
    <label for=\"wpml-ls-show-in-footer\">
        <input type=\"checkbox\" id=\"wpml-ls-show-in-footer\" name=\"statics[footer][show]\" value=\"1\"
               class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-footer-toggle-target\"
               ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", []), "footer", []), "show", [])) {
            echo "checked=\"checked\"";
        }
        echo "/>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "footer", []), "show", []), "html", null, true);
        echo "
    </label>

\t";
        // line 9
        $this->loadTemplate("save-notification.twig", "section-footer.twig", 9)->display($context);
        // line 10
        echo "</p>

<div class=\"js-wpml-ls-footer-toggle-target";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", []), "footer", []), "show", []) != 1)) {
            echo " hidden";
        }
        echo "\">

\t";
        // line 14
        $context["slot_settings"] = [];
        // line 15
        echo "\t";
        $context["slot_settings"] = twig_array_merge(($context["slot_settings"] ?? null), ["footer" => $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", []), "footer", [])]);
        // line 16
        echo "
\t";
        // line 17
        $this->loadTemplate("table-slots.twig", "section-footer.twig", 17)->display(twig_array_merge($context, ["slot_type" => "statics", "slots_settings" =>         // line 20
($context["slot_settings"] ?? null), "slug" => "footer"]));
        // line 24
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "section-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  70 => 20,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  54 => 12,  50 => 10,  48 => 9,  42 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "section-footer.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-footer.twig");
    }
}
