<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gobbo_tema/templates/layout/html.html.twig */
class __TwigTemplate_12fc5eff2b595f070b4aaea63d2d1ffe extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        $context["body_classes"] = [((        // line 29
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 30
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 31
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 32
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 35
        yield "<!DOCTYPE html>
<html";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">

  <head>
    <head-placeholder token=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
      <style type=\"text/css\">
        :root {
          --primary-main: ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["colores"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["main_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "main_light", [], "array", false, false, true, 42)), "html", null, true);
        yield ";
          --primary-dark: ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["colores"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["dark_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "dark_light", [], "array", false, false, true, 43)), "html", null, true);
        yield ";
          --primary-light: ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = ($context["colores"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["light_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "light_light", [], "array", false, false, true, 44)), "html", null, true);
        yield ";
          --primary-contrast: ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v3 = ($context["colores"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["contrast_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "contrast_light", [], "array", false, false, true, 45)), "html", null, true);
        yield ";
          --primary-navbg: ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v4 = ($context["colores"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["navbg_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "navbg_light", [], "array", false, false, true, 46)), "html", null, true);
        yield ";
          --primary-navbghigh: ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v5 = ($context["colores"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["navbg_high_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "navbg_high_light", [], "array", false, false, true, 47)), "html", null, true);
        yield ";

          --background-default: ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v6 = ($context["colores"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["default_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "default_light", [], "array", false, false, true, 49)), "html", null, true);
        yield ";
          --background-paper: ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = ($context["colores"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["paper_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "paper_light", [], "array", false, false, true, 50)), "html", null, true);
        yield ";
          --texto-default: ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v8 = ($context["colores"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["texto_light"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "texto_light", [], "array", false, false, true, 51)), "html", null, true);
        yield ";
        }
        [data-theme=\"dark\"] {
          --primary-main: ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v9 = ($context["colores"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["main_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "main_dark", [], "array", false, false, true, 54)), "html", null, true);
        yield ";
          --primary-dark: ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v10 = ($context["colores"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["dark_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "dark_dark", [], "array", false, false, true, 55)), "html", null, true);
        yield ";
          --primary-light: ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v11 = ($context["colores"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["light_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "light_dark", [], "array", false, false, true, 56)), "html", null, true);
        yield ";
          --primary-contrast: ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v12 = ($context["colores"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["contrast_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "contrast_dark", [], "array", false, false, true, 57)), "html", null, true);
        yield ";
          --background-default: ";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v13 = ($context["colores"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["default_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "default_dark", [], "array", false, false, true, 58)), "html", null, true);
        yield ";
          --background-paper: ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v14 = ($context["colores"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["paper_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "paper_dark", [], "array", false, false, true, 59)), "html", null, true);
        yield ";
          --texto-default: ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v15 = ($context["colores"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["texto_dark"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["colores"] ?? null), "texto_dark", [], "array", false, false, true, 60)), "html", null, true);
        yield ";
        }
      </style>
      <title>";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
      <css-placeholder token=\"";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
        <js-placeholder token=\"";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </head>
  <body";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 67), "html", null, true);
        yield ">
    <a href=\"#main-content\" class=\"visually-hidden-focusable\">
      ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\"></body>

      </html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "colores", "head_title", "attributes", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/layout/html.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  169 => 74,  165 => 73,  161 => 72,  157 => 71,  152 => 69,  147 => 67,  142 => 65,  138 => 64,  134 => 63,  128 => 60,  124 => 59,  120 => 58,  116 => 57,  112 => 56,  108 => 55,  104 => 54,  98 => 51,  94 => 50,  90 => 49,  85 => 47,  81 => 46,  77 => 45,  73 => 44,  69 => 43,  65 => 42,  59 => 39,  53 => 36,  50 => 35,  48 => 32,  47 => 31,  46 => 30,  45 => 29,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/layout/html.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28];
        static $filters = ["clean_class" => 30, "escape" => 36, "raw" => 39, "safe_join" => 63, "t" => 69];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
                [],
                $this->source
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
