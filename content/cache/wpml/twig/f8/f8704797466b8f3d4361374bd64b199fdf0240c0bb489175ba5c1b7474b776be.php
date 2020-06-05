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

/* slot-subform-statics-footer.twig */
class __TwigTemplate_55a7628f717bdbad38633250881f2d8e3a488526ca7aadb872d6158010351de7 extends \Twig\Template
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
        $this->loadTemplate("preview.twig", "slot-subform-statics-footer.twig", 1)->display(twig_array_merge($context, ["preview" => $this->getAttribute($this->getAttribute(($context["previews"] ?? null), "statics", []), "footer", [])]));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">

\t";
        // line 5
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-footer.twig", 5)->display(twig_array_merge($context, ["id" => "in-footer", "name" => "statics[footer][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["settings"] ?? null), "statics", []), "footer", []), "template", []), "slot_type" => "footer"]));
        // line 13
        echo "
\t";
        // line 14
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-footer.twig", 14)->display(twig_array_merge($context, ["name_base" => "statics[footer]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 17
($context["settings"] ?? null), "statics", []), "footer", []), "template_slug" => $this->getAttribute(        // line 18
($context["slot_settings"] ?? null), "template", [])]));
        // line 21
        echo "
\t";
        // line 22
        $this->loadTemplate("panel-colors.twig", "slot-subform-statics-footer.twig", 22)->display(twig_array_merge($context, ["id" => "static-footer", "name_base" => "statics[footer]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 26
($context["settings"] ?? null), "statics", []), "footer", [])]));
        // line 29
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 29,  51 => 26,  50 => 22,  47 => 21,  45 => 18,  44 => 17,  43 => 14,  40 => 13,  38 => 9,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'preview.twig' with {\"preview\": previews.statics.footer } %}

<div class=\"wpml-ls-subform-options\">

\t{% include 'dropdown-templates.twig'
\t\twith {
\t\t\t\"id\": \"in-footer\",
\t\t\t\"name\": \"statics[footer][template]\",
\t\t\t\"value\":     settings.statics.footer.template,
\t\t\t\"slot_type\": \"footer\",
\t\t}
\t%}

\t{% include 'checkboxes-includes.twig'
\t\twith {
\t\t\t\"name_base\": \"statics[footer]\",
\t\t\t\"slot_settings\": settings.statics.footer,
\t\t\t\"template_slug\": slot_settings.template,
\t\t}
\t%}

\t{% include 'panel-colors.twig'
\t\twith {
\t\t\t\"id\": \"static-footer\",
\t\t\t\"name_base\": \"statics[footer]\",
\t\t\t\"slot_settings\": settings.statics.footer,
\t\t}
\t%}

</div>", "slot-subform-statics-footer.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-footer.twig");
    }
}
