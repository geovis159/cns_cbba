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

/* themes/custom/gobbo_tema/templates/navigation/pager.html.twig */
class __TwigTemplate_6fe09ad9b5721517288616f88d019193 extends Template
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            yield "  <nav aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <h4 id=\"";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</h4>
    <ul class=\"pagination js-pager__items justify-content-center custom-pagination\">
    
      ";
            // line 38
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 38)) {
                // line 39
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 40
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 40), "href", [], "any", false, false, true, 40), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 40), "attributes", [], "any", false, false, true, 40), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 41), "text", [], "any", true, true, true, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 41), "text", [], "any", false, false, true, 41), t("‹"))) : (t("‹"))), "html", null, true);
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 46
            yield "        ";
            // line 47
            yield "        ";
            if ((((($context["totalPaginas"] ?? null) > 3) && CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 47)) && (($context["current"] ?? null) > 2))) {
                // line 48
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 49), "href", [], "any", false, false, true, 49), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 49), "attributes", [], "any", false, false, true, 49), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            ";
                // line 51
                yield "            <span aria-hidden=\"true\">";
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 51), "text", [], "any", false, false, true, 51))) ? (1) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 51), "text", [], "any", true, true, true, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 51), "text", [], "any", false, false, true, 51), t("«"))) : (t("«"))), "html", null, true)));
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 56
            yield "      ";
            // line 57
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57) && (($context["current"] ?? null) > 3))) {
                // line 58
                yield "        <li class=\"page-item\" role=\"presentation\"><span class=\"page-link\">&hellip;</span></li>
      ";
            }
            // line 60
            yield "      ";
            // line 61
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                yield "        <li class=\"page-item ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("active") : ("")));
                yield "\">
          ";
                // line 63
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 64
                    yield "            <span class=\"page-link\">";
                    // line 65
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    // line 66
                    yield "</span>
          ";
                } else {
                    // line 68
                    yield "            <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 68), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "href", "title"), "html", null, true);
                    yield " class=\"page-link\">";
                    // line 69
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    // line 70
                    yield "</a>
          ";
                }
                // line 72
                yield "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "

      ";
            // line 77
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 77) && (($context["current"] ?? null) < (($context["totalPaginas"] ?? null) - 2)))) {
                // line 78
                yield "        <li class=\"page-item\" role=\"presentation\"><span class=\"page-link\">&hellip;</span></li>
      ";
            }
            // line 80
            yield "        ";
            // line 81
            yield "        ";
            if ((((($context["totalPaginas"] ?? null) > 3) && CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 81)) && (($context["current"] ?? null) < (($context["totalPaginas"] ?? null) - 1)))) {
                // line 82
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 83), "href", [], "any", false, false, true, 83), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 83), "attributes", [], "any", false, false, true, 83), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 84
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 84), "text", [], "any", false, false, true, 84))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["totalPaginas"] ?? null), "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 84), "text", [], "any", true, true, true, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 84), "text", [], "any", false, false, true, 84), t("»"))) : (t("»"))), "html", null, true)));
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 89
            yield "      ";
            // line 90
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 90)) {
                // line 91
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 92), "href", [], "any", false, false, true, 92), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 92), "attributes", [], "any", false, false, true, 92), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 93
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 93), "text", [], "any", true, true, true, 93)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 93), "text", [], "any", false, false, true, 93), t("›"))) : (t("›"))), "html", null, true);
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 94
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 98
            yield "
    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "totalPaginas", "current", "ellipses", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/navigation/pager.html.twig";
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
        return array (  229 => 98,  222 => 94,  218 => 93,  210 => 92,  207 => 91,  204 => 90,  202 => 89,  195 => 85,  191 => 84,  183 => 83,  180 => 82,  177 => 81,  175 => 80,  171 => 78,  168 => 77,  164 => 74,  157 => 72,  153 => 70,  151 => 69,  143 => 68,  139 => 66,  137 => 65,  135 => 64,  133 => 63,  128 => 62,  123 => 61,  121 => 60,  117 => 58,  114 => 57,  112 => 56,  105 => 52,  100 => 51,  92 => 49,  89 => 48,  86 => 47,  84 => 46,  77 => 42,  73 => 41,  65 => 40,  62 => 39,  59 => 38,  51 => 34,  46 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/navigation/pager.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 32, "for" => 61];
        static $filters = ["escape" => 33, "t" => 34, "without" => 40, "default" => 41];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'without', 'default'],
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
