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

/* radio-hierarchical-menu.twig */
class __TwigTemplate_ef295b41a67ab44324921b9af6f57fcac281cfa1abfddc4087d1fbd3619f9f0a extends \Twig\Template
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
        if ( !$this->getAttribute(($context["slot_settings"] ?? null), "is_hierarchical", [], "any", true, true)) {
            // line 2
            echo "    ";
            $context["is_hierarchical"] = 1;
        } else {
            // line 4
            echo "    ";
            $context["is_hierarchical"] = $this->getAttribute(($context["slot_settings"] ?? null), "is_hierarchical", []);
        }
        // line 6
        echo "
<h4><label>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "is_hierarchical_label", []), "html", null, true);
        echo "</label>  ";
        $this->loadTemplate("tooltip.twig", "radio-hierarchical-menu.twig", 7)->display(twig_array_merge($context, ["content" => $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "tooltips", []), "menu_style_type", [])]));
        echo "</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" class=\"js-wpml-ls-trigger-update js-wpml-ls-menu-is-hierarchical\"
                   name=\"";
        // line 12
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[is_hierarchical]";
        } else {
            echo "is_hierarchical";
        }
        echo "\"
                   value=\"1\"";
        // line 13
        if ((($context["is_hierarchical"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "><b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "hierarchical", []), "html", null, true);
        echo "</b> - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "hierarchical_desc", []), "html", null, true);
        echo "
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" class=\"js-wpml-ls-trigger-update js-wpml-ls-menu-is-hierarchical\"
                   name=\"";
        // line 19
        if (($context["name_base"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["name_base"] ?? null), "html", null, true);
            echo "[is_hierarchical]";
        } else {
            echo "is_hierarchical";
        }
        echo "\"
                   value=\"0\"";
        // line 20
        if ((($context["is_hierarchical"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "><b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "flat", []), "html", null, true);
        echo "</b> - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "menus", []), "flat_desc", []), "html", null, true);
        echo "
        </label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "radio-hierarchical-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  77 => 19,  62 => 13,  53 => 12,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "radio-hierarchical-menu.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/radio-hierarchical-menu.twig");
    }
}
