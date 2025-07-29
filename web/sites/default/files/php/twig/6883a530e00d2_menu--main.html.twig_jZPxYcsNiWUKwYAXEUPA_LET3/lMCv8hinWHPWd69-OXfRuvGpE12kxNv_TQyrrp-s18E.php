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

/* themes/custom/gobbo_tema/templates/navigation/menu--main.html.twig */
class __TwigTemplate_baa7d2c6604302abe58270fbf1be89e6 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield "
";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 28, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "
";
        // line 100
        yield "
<script>
  function aplicarEstilos(e) {
    var width = window.innerWidth
    let elementos = document.querySelectorAll(\".menu-principal\");
    elementos.forEach((el, i) => {
      if (e.matches) {

        if (width < 991) {
          el.style.display = \"block\";
        } else {
          el.style.display = \"grid\";
        }

      }
    });
  }

  // Pantalla lg
  let mediaQuery = window.matchMedia(\"(max-width: 991px)\");
  let minQuery = window.matchMedia(\"(min-width: 991px)\");

  aplicarEstilos(mediaQuery);
  mediaQuery.addListener(aplicarEstilos);
  minQuery.addListener(aplicarEstilos);
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level", "loop"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            // line 32
            yield "  ";
            $macros["menus"] = $this;
            // line 33
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 34
                yield "  ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "  ";
                    $context["cantidad_items_level_0"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null));
                    // line 36
                    yield "  
      <ul";
                    // line 37
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar-nav pt-0 "], "method", false, false, true, 37), "id"), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 39
                    yield "      ";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        // line 40
                        yield "        <ul class=\"fondo-menu menu-nivel-0 px-4 pt-4 pb-0 dropdown-menu ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($_v0 = ($context["attributes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["nro"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "nro", [], "array", false, false, true, 40)) >= 4)) ? ("dropdown-menu-end") : ("")));
                        yield " \">
        <div class=\"menu-principal\"  style='grid-auto-flow: column; grid-auto-columns: 300px; display:grid;grid-template-rows: repeat(7, auto);column-gap: 20px;' >
      ";
                    }
                    // line 43
                    yield "      ";
                    if ((($context["menu_level"] ?? null) == 2)) {
                        // line 44
                        yield "        <ul style=\"list-style: none;\" class=\"collapse  pt-2 ps-4\" id=\"collapseId_";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["attributes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["idBloquePadre"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "idBloquePadre", [], "array", false, false, true, 44)), "html", null, true);
                        yield "\">
      ";
                    }
                    // line 46
                    yield "
    ";
                }
                // line 48
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    yield "
        ";
                    // line 51
                    $context["classes"] = [(((                    // line 52
($context["menu_level"] ?? null) == 0)) ? ("nav-item dropdown-center") : ("")), (((                    // line 53
($context["menu_level"] ?? null) == 1)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53)) ? ("pb-4") : (" pb-4"))) : ("")), (((                    // line 54
($context["menu_level"] ?? null) == 2)) ? ("d-flex justify-content-between align-items-center pt-1") : (""))];
                    // line 57
                    yield "        <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 57), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 57), "html", null, true);
                    yield ">
          ";
                    // line 59
                    $context["link_classes"] = [(( !                    // line 60
($context["menu_level"] ?? null)) ? ("nav-link") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 61
$context["item"], "in_active_trail", [], "any", false, false, true, 61)) ? ("activo") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 62
$context["item"], "below", [], "any", false, false, true, 62)) ? ("dropdown-toggle") : ("")), (((                    // line 63
($context["menu_level"] ?? null) == 0)) ? ("texto-nivel-0 px-2") : ((((($context["menu_level"] ?? null) == 1)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 63)) ? ("texto-nivel-1") : ("texto-nivel-1 d-flex "))) : ("texto-nivel-2 ps-0 ms-0  ")))), "text-start"];
                    // line 69
                    yield "          ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 69)) {
                        // line 70
                        yield "          ";
                        $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["nombreBloquePadre" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 70)]);
                        // line 71
                        yield "          ";
                        $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["nro" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 71)]);
                        // line 72
                        yield "            ";
                        if ((($context["menu_level"] ?? null) == 1)) {
                            // line 73
                            yield "              ";
                            $context["idBloque"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_link", [], "any", false, false, true, 73), "getDerivativeId", [], "method", false, false, true, 73);
                            // line 74
                            yield "              ";
                            $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["idBloquePadre" => ($context["idBloque"] ?? null)]);
                            // line 75
                            yield "
              <a class=\" texto-nivel-1   d-flex justify-content-between align-items-center \" role=\"button\" data-bs-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseId_";
                            // line 76
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["idBloque"] ?? null), "html", null, true);
                            yield "\" data-bs-target=\"#collapseId_";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["idBloque"] ?? null), "html", null, true);
                            yield "\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 76), "html", null, true);
                            yield "
                <i class=\"bi bi-chevron-down\"></i>
              </a> 
              ";
                            // line 80
                            yield "            ";
                        } else {
                            // line 81
                            yield "            ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 81), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), ["class" => ($context["link_classes"] ?? null), "data-bs-toggle" => "dropdown", "aria-expanded" => "true", "aria-haspopup" => "true", "data-bs-auto-close" => "outside"]), "html", null, true);
                            yield "
            ";
                        }
                        // line 83
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 83, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 83), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
          ";
                    } else {
                        // line 85
                        yield "            
            ";
                        // line 86
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 86), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 86), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        yield "
          ";
                    }
                    // line 88
                    yield "          ";
                    if ((($context["menu_level"] ?? null) == 2)) {
                        // line 89
                        yield "          <i class=\" ps-1 bi bi-arrow-right-short\"></i>
          ";
                    }
                    // line 91
                    yield "        </li>
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
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                yield "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 94
                    yield "      ";
                    // line 95
                    yield "      </div>
    ";
                }
                // line 97
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/navigation/menu--main.html.twig";
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
        return array (  268 => 97,  264 => 95,  262 => 94,  259 => 93,  244 => 91,  240 => 89,  237 => 88,  232 => 86,  229 => 85,  223 => 83,  217 => 81,  214 => 80,  204 => 76,  201 => 75,  198 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  183 => 69,  181 => 63,  180 => 62,  179 => 61,  178 => 60,  177 => 59,  172 => 57,  170 => 54,  169 => 53,  168 => 52,  167 => 51,  164 => 49,  146 => 48,  142 => 46,  136 => 44,  133 => 43,  126 => 40,  123 => 39,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  101 => 30,  87 => 29,  56 => 100,  52 => 28,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/navigation/menu--main.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "macro" => 29, "if" => 33, "set" => 35, "for" => 48];
        static $filters = ["length" => 35, "escape" => 37, "without" => 37, "merge" => 70];
        static $functions = ["link" => 81];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['length', 'escape', 'without', 'merge'],
                ['link'],
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
