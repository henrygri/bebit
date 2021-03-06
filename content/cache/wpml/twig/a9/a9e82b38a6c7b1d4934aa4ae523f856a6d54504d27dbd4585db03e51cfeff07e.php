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

/* button-add-new-ls.twig */
class __TwigTemplate_9aacf68e7e757584fa164906c90d45d37a6cc0cc0a90781cbc424f71089d1fc4 extends \Twig\Template
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
        echo "<p class=\"alignright\">

\t";
        // line 3
        $context["add_tooltip"] = ($context["tooltip_all_assigned"] ?? null);
        // line 4
        echo "
\t";
        // line 5
        if ((($context["existing_items"] ?? null) == 0)) {
            // line 6
            echo "\t\t";
            $context["add_tooltip"] = ($context["tooltip_no_item"] ?? null);
            // line 7
            echo "\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if ((($context["settings_items"] ?? null) >= ($context["existing_items"] ?? null))) {
            // line 10
            echo "\t\t";
            $context["disabled"] = true;
            // line 11
            echo "\t";
        }
        // line 12
        echo "
\t<span class=\"js-wpml-ls-tooltip-wrapper";
        // line 13
        if ( !($context["disabled"] ?? null)) {
            echo " hidden";
        }
        echo "\">
        ";
        // line 14
        $this->loadTemplate("tooltip.twig", "button-add-new-ls.twig", 14)->display(twig_array_merge($context, ["content" => ($context["add_tooltip"] ?? null)]));
        // line 15
        echo "    </span>

\t<button class=\"js-wpml-ls-open-dialog button-secondary\"";
        // line 17
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 18
        echo "\t\t\tdata-target=\"";
        echo twig_escape_filter($this->env, ($context["button_target"] ?? null), "html", null, true);
        echo "\">+ ";
        echo twig_escape_filter($this->env, ($context["button_label"] ?? null), "html", null, true);
        echo "</button>
</p>";
    }

    public function getTemplateName()
    {
        return "button-add-new-ls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  73 => 17,  69 => 15,  67 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "button-add-new-ls.twig", "/Users/francescogrieco/Desktop/projects/bebit/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/button-add-new-ls.twig");
    }
}
