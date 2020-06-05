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

/* section-sidebars.twig */
class __TwigTemplate_06d6efc8a5dfa9473bdf9500fed0ab5b9df720fb1708544b7cd73fb9605f8267 extends \Twig\Template
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
        $context["slug_placeholder"] = "%id%";
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("table-slots.twig", "section-sidebars.twig", 3)->display(twig_array_merge($context, ["slot_type" => "sidebars", "slots_settings" => $this->getAttribute(        // line 6
($context["settings"] ?? null), "sidebars", []), "slots" => $this->getAttribute(        // line 7
($context["data"] ?? null), "sidebars", [])]));
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("button-add-new-ls.twig", "section-sidebars.twig", 11)->display(twig_array_merge($context, ["existing_items" => twig_length_filter($this->env, $this->getAttribute(        // line 13
($context["data"] ?? null), "sidebars", [])), "settings_items" => twig_length_filter($this->env, $this->getAttribute(        // line 14
($context["settings"] ?? null), "sidebars", [])), "tooltip_all_assigned" => $this->getAttribute($this->getAttribute(        // line 15
($context["strings"] ?? null), "tooltips", []), "add_sidebar_all_assigned", []), "tooltip_no_item" => $this->getAttribute($this->getAttribute(        // line 16
($context["strings"] ?? null), "tooltips", []), "add_sidebar_no_sidebar", []), "button_target" => "#wpml-ls-new-sidebars-template", "button_label" => $this->getAttribute($this->getAttribute(        // line 18
($context["strings"] ?? null), "sidebars", []), "add_button_label", [])]));
        // line 21
        echo "
<script type=\"text/html\" id=\"wpml-ls-new-sidebars-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "sidebars", []), "dialog_title_new", []), "html", null, true);
        echo "\" data-item-slug=\"";
        echo twig_escape_filter($this->env, ($context["slug_placeholder"] ?? null), "html", null, true);
        echo "\" data-item-type=\"sidebars\">

        ";
        // line 25
        $this->loadTemplate("slot-subform-sidebars.twig", "section-sidebars.twig", 25)->display(twig_array_merge($context, ["slug" =>         // line 27
($context["slug_placeholder"] ?? null), "slots_settings" =>         // line 28
($context["slots_settings"] ?? null), "slots" => $this->getAttribute(        // line 29
($context["data"] ?? null), "sidebars", []), "preview" => $this->getAttribute($this->getAttribute(        // line 30
($context["previews"] ?? null), "sidebars", []), ($context["slug"] ?? null), [], "array")]));
        // line 33
        echo "
    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-sidebars-row-template\" class=\"js-wpml-ls-template\">
    ";
        // line 38
        $this->loadTemplate("table-slot-row.twig", "section-sidebars.twig", 38)->display(twig_array_merge($context, ["slug" =>         // line 40
($context["slug_placeholder"] ?? null), "slots" =>         // line 41
($context["sidebars"] ?? null)]));
        // line 44
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "section-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 44,  75 => 41,  74 => 40,  73 => 38,  66 => 33,  64 => 30,  63 => 29,  62 => 28,  61 => 27,  60 => 25,  53 => 23,  49 => 21,  47 => 18,  46 => 16,  45 => 15,  44 => 14,  43 => 13,  42 => 11,  39 => 10,  37 => 7,  36 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "section-sidebars.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-sidebars.twig");
    }
}
