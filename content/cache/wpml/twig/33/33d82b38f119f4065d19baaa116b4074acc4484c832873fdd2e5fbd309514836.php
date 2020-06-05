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

/* slot-subform-statics-shortcode_actions.twig */
class __TwigTemplate_72202a53b542039d5bec3a02f6dbc7ca91e51d215d509d3a61478440ae162cab extends \Twig\Template
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
        $this->loadTemplate("preview.twig", "slot-subform-statics-shortcode_actions.twig", 1)->display(twig_array_merge($context, ["preview" => $this->getAttribute($this->getAttribute(($context["previews"] ?? null), "statics", []), "shortcode_actions", [])]));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">

\t";
        // line 5
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-shortcode_actions.twig", 5)->display(twig_array_merge($context, ["id" => "in-shortcode-action", "name" => "statics[shortcode_actions][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["settings"] ?? null), "statics", []), "shortcode_actions", []), "template", []), "slot_type" => "shortcode_actions"]));
        // line 13
        echo "
\t";
        // line 14
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-shortcode_actions.twig", 14)->display(twig_array_merge($context, ["id" => "in-shortcode-actions", "name_base" => "statics[shortcode_actions]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 18
($context["settings"] ?? null), "statics", []), "shortcode_actions", []), "template_slug" => $this->getAttribute(        // line 19
($context["slot_settings"] ?? null), "template", [])]));
        // line 22
        echo "
\t";
        // line 23
        $this->loadTemplate("panel-colors.twig", "slot-subform-statics-shortcode_actions.twig", 23)->display(twig_array_merge($context, ["id" => "in-shortcode-actions", "name_base" => "statics[shortcode_actions]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 27
($context["settings"] ?? null), "statics", []), "shortcode_actions", [])]));
        // line 30
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-shortcode_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 30,  51 => 27,  50 => 23,  47 => 22,  45 => 19,  44 => 18,  43 => 14,  40 => 13,  38 => 9,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'preview.twig' with {\"preview\": previews.statics.shortcode_actions } %}

<div class=\"wpml-ls-subform-options\">

\t{% include 'dropdown-templates.twig'
\t\twith {
\t\t\t\"id\": \"in-shortcode-action\",
\t\t\t\"name\": \"statics[shortcode_actions][template]\",
\t\t\t\"value\":     settings.statics.shortcode_actions.template,
\t\t\t\"slot_type\": \"shortcode_actions\",
\t\t}
\t%}

\t{% include 'checkboxes-includes.twig'
\t\twith {
\t\t\t\"id\": \"in-shortcode-actions\",
\t\t\t\"name_base\": \"statics[shortcode_actions]\",
\t\t\t\"slot_settings\": settings.statics.shortcode_actions,
\t\t\t\"template_slug\": slot_settings.template,
\t\t}
\t%}

\t{% include 'panel-colors.twig'
\t\twith {
\t\t\t\"id\": \"in-shortcode-actions\",
\t\t\t\"name_base\": \"statics[shortcode_actions]\",
\t\t\t\"slot_settings\": settings.statics.shortcode_actions,
\t\t}
\t%}

</div>", "slot-subform-statics-shortcode_actions.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-shortcode_actions.twig");
    }
}
