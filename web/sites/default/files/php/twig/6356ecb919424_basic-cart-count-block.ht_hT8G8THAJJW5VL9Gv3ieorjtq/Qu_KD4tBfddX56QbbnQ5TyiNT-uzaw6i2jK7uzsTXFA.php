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

/* modules/contrib/basic_cart/templates/basic-cart-count-block.html.twig */
class __TwigTemplate_678315bddfc07a9e69519381eb349969b3f03e4399a96a9bb0a47b9387b77bec extends \Twig\Template
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
        echo "<div class=\"basic_cart-msg-pck";
        if (array_key_exists("size_class", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["size_class"] ?? null), 1, $this->source), "html", null, true);
        }
        echo "\" style=\"float:";
        if (array_key_exists("float", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["float"] ?? null), 1, $this->source), "html", null, true);
        }
        echo "; right:";
        if (array_key_exists("right", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 1, $this->source), "html", null, true);
        }
        echo "; left:";
        if (array_key_exists("left", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 1, $this->source), "html", null, true);
        }
        echo "; top:";
        if (array_key_exists("top", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top"] ?? null), 1, $this->source), "html", null, true);
        }
        echo "; bottom:";
        if (array_key_exists("bottom", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom"] ?? null), 1, $this->source), "html", null, true);
        }
        echo ";\">
<a title=\"Cart\" href=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("basic_cart.cart")), "html", null, true);
        echo "\"><img src=\"";
        if (array_key_exists("module_url", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_url"] ?? null), 2, $this->source), "html", null, true);
        }
        echo "/images/cart_";
        if (array_key_exists("size", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 2, $this->source), "html", null, true);
        }
        echo ".png\" alt=\"cart icon\"><span class=\"basic_cart-circles basic_cart-circle";
        if (array_key_exists("size_class", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["size_class"] ?? null), 2, $this->source), "html", null, true);
        }
        echo "\">";
        if (array_key_exists("cartcount", $context)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cartcount"] ?? null), 2, $this->source), "html", null, true);
        }
        echo "</span></a>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/basic_cart/templates/basic-cart-count-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/basic_cart/templates/basic-cart-count-block.html.twig", "/var/www/html/web/modules/contrib/basic_cart/templates/basic-cart-count-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 1, "render" => 2);
        static $functions = array("url" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
                ['url']
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
