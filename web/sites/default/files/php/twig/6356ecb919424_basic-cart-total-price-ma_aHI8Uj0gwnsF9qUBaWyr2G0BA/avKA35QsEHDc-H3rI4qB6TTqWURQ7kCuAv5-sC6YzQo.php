<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/basic_cart/templates/basic-cart-total-price-markup.html.twig */
class __TwigTemplate_1a7b14a3e5c9e9adf3fac5e40ce2993f13799002ceaeb1c12d822c1107fe7900 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"basic_cart-cart-total-price-contents row\"><div class=\"basic_cart-total-price cell\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "total_price_label", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ": <strong>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "total_price", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "</strong></div></div>
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "vat_enabled", [], "any", false, false, true, 2)) {
            // line 3
            echo "<div class=\"basic_cart-cart-total-vat-contents row\">
<div class=\"basic_cart-total-vat cell\">";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "total_vat_label", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo " : <strong>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "vat_value", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo " </strong></div></div>
";
        }
        // line 5
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "modules/contrib/basic_cart/templates/basic-cart-total-price-markup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  51 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/basic_cart/templates/basic-cart-total-price-markup.html.twig", "/var/www/html/web/modules/contrib/basic_cart/templates/basic-cart-total-price-markup.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
