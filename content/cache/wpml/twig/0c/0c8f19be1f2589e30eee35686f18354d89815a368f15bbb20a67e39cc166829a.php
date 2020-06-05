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

/* slot-subform-menus.twig */
class __TwigTemplate_380a801e5e044c5970d93b4cad08a8bb7d20bdf0138e55e915da5a6c473f0dd4 extends \Twig\Template
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
        if ( !(isset($context["slot_settings"]) || array_key_exists("slot_settings", $context))) {
            // line 2
            echo "\t";
            $context["slot_settings"] = ($context["default_menus_slot"] ?? null);
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("preview.twig", "slot-subform-menus.twig", 5)->display(twig_array_merge($context, ["preview" => ($context["preview"] ?? null)]));
        // line 6
        echo "
<div class=\"wpml-ls-subform-options\">

    ";
        // line 9
        $this->loadTemplate("dropdown-menus.twig", "slot-subform-menus.twig", 9)->display(twig_array_merge($context, ["slug" =>         // line 11
($context["slug"] ?? null), "menus" =>         // line 12
($context["slots"] ?? null)]));
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-menus.twig", 16)->display(twig_array_merge($context, ["id" => ("in-menus-" .         // line 18
($context["slug"] ?? null)), "name" => (("menus[" .         // line 19
($context["slug"] ?? null)) . "][template]"), "value" => $this->getAttribute(        // line 20
($context["slot_settings"] ?? null), "template", []), "slot_type" => "menus"]));
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("radio-position-menu.twig", "slot-subform-menus.twig", 25)->display(twig_array_merge($context, ["name_base" => (("menus[" .         // line 27
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 28
($context["slot_settings"] ?? null)]));
        // line 31
        echo "
    ";
        // line 32
        $this->loadTemplate("radio-hierarchical-menu.twig", "slot-subform-menus.twig", 32)->display(twig_array_merge($context, ["name_base" => (("menus[" .         // line 34
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 35
($context["slot_settings"] ?? null)]));
        // line 38
        echo "

    ";
        // line 40
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-menus.twig", 40)->display(twig_array_merge($context, ["name_base" => (("menus[" .         // line 42
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 43
($context["slot_settings"] ?? null), "template_slug" => $this->getAttribute(        // line 44
($context["slot_settings"] ?? null), "template", [])]));
        // line 47
        echo "
    ";
        // line 48
        $this->loadTemplate("panel-colors.twig", "slot-subform-menus.twig", 48)->display(twig_array_merge($context, ["id" => ("in-menus-" .         // line 50
($context["slug"] ?? null)), "name_base" => (("menus[" .         // line 51
($context["slug"] ?? null)) . "]"), "slot_settings" =>         // line 52
($context["slot_settings"] ?? null), "slot_type" => "menus"]));
        // line 56
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 56,  87 => 52,  86 => 51,  85 => 50,  84 => 48,  81 => 47,  79 => 44,  78 => 43,  77 => 42,  76 => 40,  72 => 38,  70 => 35,  69 => 34,  68 => 32,  65 => 31,  63 => 28,  62 => 27,  61 => 25,  58 => 24,  56 => 20,  55 => 19,  54 => 18,  53 => 16,  50 => 15,  48 => 12,  47 => 11,  46 => 9,  41 => 6,  39 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not slot_settings is defined %}
\t{% set slot_settings = default_menus_slot %}
{% endif %}

{% include 'preview.twig' with {\"preview\": preview } %}

<div class=\"wpml-ls-subform-options\">

    {% include 'dropdown-menus.twig'
        with {
            \"slug\":     slug,
            \"menus\":    slots,
        }
    %}

    {% include 'dropdown-templates.twig'
        with {
            \"id\": \"in-menus-\" ~ slug,
            \"name\": \"menus[\" ~ slug ~ \"][template]\",
            \"value\": slot_settings.template,
            \"slot_type\": \"menus\",
        }
    %}

    {% include 'radio-position-menu.twig'
        with {
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings
        }
    %}

    {% include 'radio-hierarchical-menu.twig'
        with {
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings
        }
    %}


    {% include 'checkboxes-includes.twig'
        with {
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"template_slug\": slot_settings.template,
        }
    %}

    {% include 'panel-colors.twig'
        with {
            \"id\": \"in-menus-\" ~ slug,
            \"name_base\": \"menus[\" ~ slug ~ \"]\",
            \"slot_settings\": slot_settings,
            \"slot_type\": \"menus\",
        }
    %}

</div>", "slot-subform-menus.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-menus.twig");
    }
}
