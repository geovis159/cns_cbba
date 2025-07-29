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

/* themes/custom/gobbo_tema/templates/views/views-view.html.twig */
class __TwigTemplate_ad67594ebedc98cbf34d616f0052fc3b extends Template
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
        // line 34
        $context["classes"] = ["fondo-default ps-2", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), ("view-id-" .         // line 37
($context["id"] ?? null)), ("view-display-id-" .         // line 38
($context["display_id"] ?? null)), ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 42
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), "html", null, true);
        yield ">
  <div class=\"row pt-4\">
    ";
        // line 44
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "storage", [], "any", false, false, true, 44), "label", [], "any", false, false, true, 44) && ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#view_display_plugin_id"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 44), "#view_display_plugin_id", [], "array", false, false, true, 44)) == "page")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "storage", [], "any", false, false, true, 44), "id", [], "any", false, false, true, 44) != "frontpage"))) {
            // line 45
            yield "      
    <nav aria-label=\"breadcrumb\">
      <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\">Inicio</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">
            ";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 50)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 50), "#title", [], "array", false, false, true, 50))) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 50)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 50), "#title", [], "array", false, false, true, 50)), "#markup", [], "array", false, false, true, 50)), "html", null, true);
            yield " </li>
      </ol>
    </nav> 
    <h2 >";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v4 = (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 53)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 53), "#title", [], "array", false, false, true, 53))) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 53)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "element", [], "any", false, false, true, 53), "#title", [], "array", false, false, true, 53)), "#markup", [], "array", false, false, true, 53)), "html", null, true);
            yield "</h2>
    ";
        }
        // line 55
        yield "  </div>
  ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 57
        if (($context["title"] ?? null)) {
            // line 58
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 60
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 61
        if (($context["header"] ?? null)) {
            // line 62
            yield "    <div class=\"view-header\">
      ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 66
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 67
            yield "    <div class=\"view-filters\">
      ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 71
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 72
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 76
        yield "    ";
        // line 77
        yield "  ";
        if (($context["rows"] ?? null)) {
            // line 78
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
  ";
        } elseif (        // line 79
($context["empty"] ?? null)) {
            // line 80
            yield "    <div class=\"view-empty\">
      ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 84
        yield "
  ";
        // line 85
        if (($context["pager"] ?? null)) {
            // line 86
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 88
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 89
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 93
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 94
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 96
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 97
            yield "    <div class=\"view-footer\">
      ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 101
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 102
            yield "    <div class=\"feed-icons\">
      ";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 106
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "view", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view.html.twig";
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
        return array (  211 => 106,  205 => 103,  202 => 102,  199 => 101,  193 => 98,  190 => 97,  187 => 96,  181 => 94,  178 => 93,  172 => 90,  169 => 89,  166 => 88,  160 => 86,  158 => 85,  155 => 84,  149 => 81,  146 => 80,  144 => 79,  139 => 78,  136 => 77,  134 => 76,  128 => 73,  125 => 72,  122 => 71,  116 => 68,  113 => 67,  110 => 66,  104 => 63,  101 => 62,  99 => 61,  94 => 60,  88 => 58,  86 => 57,  82 => 56,  79 => 55,  74 => 53,  68 => 50,  63 => 48,  58 => 45,  56 => 44,  50 => 42,  48 => 39,  47 => 38,  46 => 37,  45 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 44];
        static $filters = ["clean_class" => 36, "escape" => 42];
        static $functions = ["url" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                ['url'],
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
