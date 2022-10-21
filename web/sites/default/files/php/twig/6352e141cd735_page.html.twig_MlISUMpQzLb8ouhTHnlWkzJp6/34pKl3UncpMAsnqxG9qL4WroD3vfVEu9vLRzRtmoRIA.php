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

/* themes/custom/hagai/templates/layout/page.html.twig */
class __TwigTemplate_a438090e3db331722d1411a5624a6871dea4c50866720c1716f626fcc3c53ea2 extends \Twig\Template
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
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        echo "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        echo "




       
<div class=\"top-bar\">
    <a href=\"#\" class=\"icon\" id=\"burger-icon\">
        <i class=\"fa fa-bars\"></i>
    </a>
    <a class=\"menu-link\" href=\"/\"><div class=\"logo\"><h1>Storefront</h1></div></a>
    <div class=\"menus\">
      ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
    </div>
</div>
";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "  


";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 77)) {
            // line 78
            echo "<footer class=\"mt-auto ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 78, $this->source), "html", null, true);
            echo "\">
  <div class=\"";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 79, $this->source), "html", null, true);
            echo "\">
    ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
  </div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/hagai/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 80,  89 => 79,  84 => 78,  82 => 77,  76 => 74,  72 => 73,  66 => 70,  52 => 58,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  44 => 51,  42 => 49,  41 => 48,  40 => 47,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hagai/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/hagai/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 77);
        static $filters = array("escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
