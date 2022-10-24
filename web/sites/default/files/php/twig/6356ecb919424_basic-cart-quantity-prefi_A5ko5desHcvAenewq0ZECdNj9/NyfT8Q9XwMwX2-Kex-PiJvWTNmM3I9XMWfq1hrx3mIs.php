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

/* modules/contrib/basic_cart/templates/basic-cart-quantity-prefix.html.twig */
class __TwigTemplate_2dfb5a90d6158cd1dec9c49e942b7a2465ded99652f607113d52bfab3b773148 extends \Twig\Template
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
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "notempty", [], "any", false, false, true, 2)) {
            // line 3
            echo "<div class=\"basic_cart-cart-contents row\"><div class=\"basic_cart-delete-image cell\"><span class=\"basic_cart-delete-image-image\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "delete_url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "module_url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "/images/delete2.png\"/></a></span></div><div class=\"basic_cart-cart-node-title cell\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "title_link", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "<br /></div><div class=\"cell basic_cart-cart-unit-price\"><strong>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["basic_cart"] ?? null), "unit_price", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "</strong></div><div class=\"basic_cart-cart-quantity cell\"><div class=\"cell\">
";
        }
        // line 5
        echo "
  
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/basic_cart/templates/basic-cart-quantity-prefix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/basic_cart/templates/basic-cart-quantity-prefix.html.twig", "/var/www/html/web/modules/contrib/basic_cart/templates/basic-cart-quantity-prefix.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
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
