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

/* layout-slot-edit-button.twig */
class __TwigTemplate_cb15425cc1b6ebfe47aa53121cf5c7949da1582903eef45afc5c1a06997c5068 extends \Twig\Template
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
        ob_start();
        // line 2
        if ((($context["action"] ?? null) == "edit")) {
            // line 3
            echo "\t";
            $context["class"] = "otgs-ico-edit";
        } else {
            // line 5
            echo "\t";
            $context["class"] = "otgs-ico-add";
        }
        // line 7
        echo "
<p class=\"wpml-ls-slot-management-link-wrapper\">
\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"js-wpml-ls-slot-management-link button-secondary\">
\t\t<span class=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</a>
</p>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "layout-slot-edit-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 9,  42 => 7,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
{% if action == 'edit' %}
\t{% set class = 'otgs-ico-edit' %}
{% else %}
\t{% set class = 'otgs-ico-add' %}
{% endif %}

<p class=\"wpml-ls-slot-management-link-wrapper\">
\t<a href=\"{{ url }}\" class=\"js-wpml-ls-slot-management-link button-secondary\">
\t\t<span class=\"{{ class }}\"></span> {{ label -}}</a>
</p>
{% endspaceless %}", "layout-slot-edit-button.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/layout-slot-edit-button.twig");
    }
}
