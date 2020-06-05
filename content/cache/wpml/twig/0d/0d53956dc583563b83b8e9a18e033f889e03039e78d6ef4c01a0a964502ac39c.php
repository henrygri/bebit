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

/* tooltip.twig */
class __TwigTemplate_c1660340148c2f8d8aa054c0ccbedbcc95adc54721dae320f9ce2ac524e84efe extends \Twig\Template
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
        echo "<a href=\"#\" class=\"js-wpml-ls-tooltip-open wpml-ls-tooltip-open otgs-ico-help\" data-content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "text", []), "html_attr");
        echo "\" data-link-text=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "link", []), "text", []), "html_attr");
        echo "\" data-link-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "link", []), "url", []), "html_attr");
        echo "\" data-link-target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "link", []), "target", []), "html_attr");
        echo "\"></a>";
    }

    public function getTemplateName()
    {
        return "tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"#\" class=\"js-wpml-ls-tooltip-open wpml-ls-tooltip-open otgs-ico-help\" data-content=\"{{ content.text|e('html_attr') }}\" data-link-text=\"{{ content.link.text|e('html_attr') }}\" data-link-url=\"{{ content.link.url|e('html_attr') }}\" data-link-target=\"{{ content.link.target|e('html_attr') }}\"></a>", "tooltip.twig", "/var/www/clients/client17/web339/web/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/tooltip.twig");
    }
}
