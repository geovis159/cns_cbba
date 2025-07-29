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

/* themes/custom/gobbo_tema/templates/views/views-view-table.html.twig */
class __TwigTemplate_26676dd6fda982f83465bf5102d4fbb3 extends Template
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
        $context["classes"] = ["table", ((        // line 36
($context["hover"] ?? null)) ? ("table-hover") : ("")),         // line 37
($context["table_class"] ?? null), "views-table", "views-view-table", ("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 40
($context["header"] ?? null))), ((        // line 41
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 42
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 45
        yield "
<div class=\"table-responsive col\">
<table";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), "html", null, true);
        yield ">
  ";
        // line 48
        if (($context["caption_needed"] ?? null)) {
            // line 49
            yield "    <caption>
    ";
            // line 50
            if (($context["caption"] ?? null)) {
                // line 51
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
                yield "
    ";
            } else {
                // line 53
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 55
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))))) {
                // line 56
                yield "      <details>
        ";
                // line 57
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) {
                    // line 58
                    yield "          <summary>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true);
                    yield "</summary>
        ";
                }
                // line 60
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
                    // line 61
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    yield "
        ";
                }
                // line 63
                yield "      </details>
    ";
            }
            // line 65
            yield "    </caption>
  ";
        }
        // line 67
        yield "  ";
        if (($context["header"] ?? null)) {
            // line 68
            yield "    <thead class='";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["thead_class"] ?? null), "html", null, true);
            yield "'>
      <tr>
        <th>Nro</th>
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 72
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 72)) {
                    // line 73
                    yield "            ";
                    // line 74
                    $context["column_classes"] = ["views-field", ("views-field-" . (($_v0 =                     // line 76
($context["fields"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["key"], [], "array", false, false, true, 76)))];
                    // line 79
                    yield "          ";
                }
                // line 80
                yield "          <th";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 80), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 80), "setAttribute", ["scope", "col"], "method", false, false, true, 80), "html", null, true);
                yield ">";
                // line 81
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 81)) {
                    // line 82
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 82), "html", null, true);
                    yield ">";
                    // line 83
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 83)) {
                        // line 84
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 84), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 84), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 84), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 84), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 86
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 86), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 86), "html", null, true);
                    }
                    // line 88
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 88), "html", null, true);
                    yield ">";
                } else {
                    // line 90
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 90)) {
                        // line 91
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 91), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 91), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 91), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 91), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 93
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 93), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 93), "html", null, true);
                    }
                }
                // line 96
                yield "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "      </tr>
    </thead>
  ";
        }
        // line 101
        yield "  <tbody>
    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 103
            yield "      <tr";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 103), "html", null, true);
            yield ">
        <td>";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 104) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "pager", [], "any", false, false, true, 104), "current_page", [], "any", false, false, true, 104) * (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "pager", [], "any", false, false, true, 104), "options", [], "any", false, false, true, 104)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["items_per_page"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "pager", [], "any", false, false, true, 104), "options", [], "any", false, false, true, 104), "items_per_page", [], "array", false, false, true, 104)))), "html", null, true);
            yield "</td>
        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 105));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 106
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 106)) {
                    // line 107
                    yield "            ";
                    // line 108
                    $context["column_classes"] = ["views-field"];
                    // line 112
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 113
                        yield "              ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge(($context["column_classes"] ?? null), [("views-field-" . $context["field"])]);
                        // line 114
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    yield "          ";
                }
                // line 116
                yield "          <td";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 116), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 116), "html", null, true);
                yield ">";
                // line 117
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 117)) {
                    // line 118
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 118), "html", null, true);
                    yield ">
              ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 119));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 120
                        yield "              
                ";
                        // line 121
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 121), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 121), "html", null, true);
                        yield "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    yield "              </";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 123), "html", null, true);
                    yield ">";
                } else {
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 125));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 126
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 126), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 126), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 129
                yield "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "      </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "  </tbody>
</table>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["hover", "table_class", "header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary", "description", "thead_class", "fields", "rows", "loop", "view"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-table.html.twig";
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
        return array (  317 => 133,  302 => 131,  295 => 129,  287 => 126,  283 => 125,  278 => 123,  269 => 121,  266 => 120,  262 => 119,  257 => 118,  255 => 117,  251 => 116,  248 => 115,  242 => 114,  239 => 113,  234 => 112,  232 => 108,  230 => 107,  227 => 106,  223 => 105,  219 => 104,  214 => 103,  197 => 102,  194 => 101,  189 => 98,  182 => 96,  177 => 93,  167 => 91,  165 => 90,  160 => 88,  156 => 86,  146 => 84,  144 => 83,  140 => 82,  138 => 81,  134 => 80,  131 => 79,  129 => 76,  128 => 74,  126 => 73,  123 => 72,  119 => 71,  112 => 68,  109 => 67,  105 => 65,  101 => 63,  95 => 61,  92 => 60,  86 => 58,  84 => 57,  81 => 56,  78 => 55,  72 => 53,  66 => 51,  64 => 50,  61 => 49,  59 => 48,  55 => 47,  51 => 45,  49 => 42,  48 => 41,  47 => 40,  46 => 37,  45 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-table.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 48, "for" => 71];
        static $filters = ["length" => 40, "escape" => 47, "merge" => 113];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
