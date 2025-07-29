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

/* themes/custom/gobbo_tema/templates/navigation/menu--organigrama.html.twig */
class __TwigTemplate_ac245dd38241376c76dcc439952a64cb extends Template
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
        yield "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        yield "
";
        // line 28
        yield "<div class=\"container pt-4\">
\t";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 29, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0, ""]));
        yield "
\t";
        // line 145
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level", "loop", "departamento"]);        yield from [];
    }

    // line 30
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, $departamento = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "departamento" => $departamento,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "\t\t";
            // line 32
            yield "\t\t";
            $macros["menus"] = $this;
            // line 33
            yield "\t\t";
            if (($context["items"] ?? null)) {
                // line 34
                yield "\t\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "\t\t\t\t<ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [""], "method", false, false, true, 35), "id"), "html", null, true);
                    yield ">
\t\t    ";
                } else {
                    // line 37
                    yield "\t\t\t\t<div class=\"staff-panel ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["menu_level"] ?? null) == 1)) ? ("show") : ("")));
                    yield "\">
\t\t\t\t\t<ul class=\"staffer-archive-grid staff-ul-main staff-ul-main-show\">
\t\t\t";
                }
                // line 40
                yield "
\t\t\t\t\t\t";
                // line 41
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
                    // line 42
                    yield "\t\t\t\t\t\t\t";
                    // line 43
                    $context["classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "below", [], "any", false, false, true, 45)) ? ("") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45) == 0)) ? ((((($context["menu_level"] ?? null) == 1)) ? ("staff-li-head level_1") : ("staff-li-head"))) : ((((($context["menu_level"] ?? null) == 1)) ? ("staff-li level_1") : ("staff-li")))))), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 46
$context["item"], "is_expanded", [], "any", false, false, true, 46)) ? ("show") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 47
$context["item"], "is_collapsed", [], "any", false, false, true, 47)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 48
$context["item"], "in_active_trail", [], "any", false, false, true, 48)) ? ("menu-item--active-trail") : (""))];
                    // line 51
                    yield "
\t\t\t\t\t\t\t<li";
                    // line 52
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), "html", null, true);
                    yield " style=\"list-style: none; \">

\t\t\t\t\t\t\t\t";
                    // line 54
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54)) {
                        // line 55
                        yield "\t\t\t\t\t\t\t\t\t";
                        // line 56
                        yield "\t\t\t\t\t\t\t\t\t<button class=\"staff-accordion";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["menu_level"] ?? null) == 0)) ? (" level_0") : (" level_1")));
                        yield " \">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = $context["item"]) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "array", false, false, true, 56)), "html", null, true);
                        yield "</button>
\t\t\t\t\t\t\t\t\t";
                        // line 57
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 57, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), (($_v1 = $context["item"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "array", false, false, true, 57))]));
                        yield "

\t\t\t\t\t\t\t\t";
                    } else {
                        // line 60
                        yield "\t\t\t\t\t\t\t\t\t";
                        // line 61
                        yield "\t\t\t\t\t\t\t\t\t";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 61) == 0)) {
                            // line 62
                            yield "
\t\t\t\t\t\t\t\t\t\t<div class=\"staff-content\">
\t\t\t\t\t\t\t\t\t\t\t<div data-bs-toggle=\"modal\" data-bs-target=\"#cardmodal";
                            // line 64
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["item"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 64)), "id", [], "any", false, false, true, 64), "html", null, true);
                            yield "\" style=\"cursor: pointer;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"aligncenter staffer-list-image wp-post-image\" src=\"";
                            // line 65
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = $context["item"]) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 65)), "field_imagen_personal", [], "any", false, false, true, 65), "entity", [], "any", false, false, true, 65), "getFileUri", [], "method", false, false, true, 65)), "html", null, true);
                            yield "\" width=\"250\" height=\"250\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"staffer-staff-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"staffer-staff-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-name=\"";
                            // line 68
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = $context["item"]) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 68)), "field_nombre_personal", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), "html", null, true);
                            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 69
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = $context["item"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 69)), "field_nombre_personal", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), "html", null, true);
                            yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"staffer-staff-title\">";
                            // line 71
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = $context["item"]) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 71)), "field_cargo_personal", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), "html", null, true);
                            yield "</small>
\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr class=\"staff-hr\">
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 77
                            yield "
\t\t\t\t\t\t\t\t\t\t<div class=\"staff-content\">
\t\t\t\t\t\t\t\t\t\t\t<div data-bs-toggle=\"modal\" data-bs-target=\"#cardmodal";
                            // line 79
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v7 = $context["item"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 79)), "id", [], "any", false, false, true, 79), "html", null, true);
                            yield "\" style=\"cursor: pointer;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"aligncenter staffer-list-image wp-post-image\" src=\"";
                            // line 80
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v8 = $context["item"]) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 80)), "field_imagen_personal", [], "any", false, false, true, 80), "entity", [], "any", false, false, true, 80), "getFileUri", [], "method", false, false, true, 80)), "html", null, true);
                            yield "\" width=\"250\" height=\"250\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"staffer-staff-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"staffer-staff-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-bio=\"\" data-name=\"";
                            // line 83
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = $context["item"]) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 83)), "field_nombre_personal", [], "any", false, false, true, 83), "value", [], "any", false, false, true, 83), "html", null, true);
                            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 84
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v10 = $context["item"]) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 84)), "field_nombre_personal", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), "html", null, true);
                            yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"staffer-staff-title\">";
                            // line 86
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v11 = $context["item"]) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 86)), "field_cargo_personal", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86), "html", null, true);
                            yield "</small>
\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                        }
                        // line 92
                        yield "\t\t\t\t\t\t\t\t\t";
                        // line 93
                        yield "\t\t\t\t\t\t\t\t\t<div class=\"modal fade cw-staffer-modal\" id=\"cardmodal";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = $context["item"]) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 93)), "id", [], "any", false, false, true, 93), "html", null, true);
                        yield "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"cardmodalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t<div id=\"persona\" class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" style=\"max-width: 800px;\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"modal-persona\" class=\"fondo-default modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
                              <div class=\"cw-modal-image\">
                                <img  src=\"";
                        // line 104
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v13 = $context["item"]) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 104)), "field_imagen_personal", [], "any", false, false, true, 104), "entity", [], "any", false, false, true, 104), "getFileUri", [], "method", false, false, true, 104)), "html", null, true);
                        yield "\" width=\"180\" height=\"180\" alt=\"\">
                              </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"staff-name pt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 107
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v14 = $context["item"]) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 107)), "field_nombre_personal", [], "any", false, false, true, 107), "value", [], "any", false, false, true, 107), "html", null, true);
                        yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6\" style=\"text-align: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"staff-title\">";
                        // line 110
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v15 = $context["item"]) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 110)), "field_cargo_personal", [], "any", false, false, true, 110), "value", [], "any", false, false, true, 110), "html", null, true);
                        yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"staff-department\">";
                        // line 111
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["departamento"] ?? null), "html", null, true);
                        yield "</h5>
                              <div class=\"section pt-4\">
                                <div class=\"staff-mail\">
                                  <a href=\"mailto:";
                        // line 114
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v16 = $context["item"]) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 114)), "field_correo_personal", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v17 = $context["item"]) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 114)), "field_correo_personal", [], "any", false, false, true, 114), "value", [], "any", false, false, true, 114), "html", null, true);
                        yield "</a>
                                </div>
                                <div class=\"staff-phone\">
                                  ";
                        // line 117
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v18 = $context["item"]) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 117)), "field_telefono_personal", [], "any", false, false, true, 117), "value", [], "any", false, false, true, 117), "html", null, true);
                        yield "
                                </div>
                              </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                            <div class=\"col-12 p-4\">
                              ";
                        // line 122
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v19 = $context["item"]) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["node"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "node", [], "array", false, false, true, 122)), "field_informacion_personal", [], "any", false, false, true, 122), "value", [], "any", false, false, true, 122));
                        yield "
                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        // line 131
                        yield "

\t\t\t\t\t\t\t\t\t";
                        // line 134
                        yield "\t\t\t\t\t\t\t\t";
                    }
                    // line 135
                    yield "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
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
                // line 137
                yield "\t\t\t\t\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 138
                    yield "\t\t\t\t\t\t</ul>
\t\t\t\t";
                } else {
                    // line 140
                    yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
                }
                // line 143
                yield "\t\t";
            }
            // line 144
            yield "\t";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/navigation/menu--organigrama.html.twig";
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
        return array (  330 => 144,  327 => 143,  322 => 140,  318 => 138,  315 => 137,  300 => 135,  297 => 134,  293 => 131,  282 => 122,  274 => 117,  266 => 114,  260 => 111,  256 => 110,  250 => 107,  244 => 104,  229 => 93,  227 => 92,  218 => 86,  213 => 84,  209 => 83,  203 => 80,  199 => 79,  195 => 77,  186 => 71,  181 => 69,  177 => 68,  171 => 65,  167 => 64,  163 => 62,  160 => 61,  158 => 60,  152 => 57,  145 => 56,  143 => 55,  141 => 54,  136 => 52,  133 => 51,  131 => 48,  130 => 47,  129 => 46,  128 => 45,  127 => 43,  125 => 42,  108 => 41,  105 => 40,  98 => 37,  92 => 35,  89 => 34,  86 => 33,  83 => 32,  81 => 31,  66 => 30,  59 => 145,  55 => 29,  52 => 28,  49 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/navigation/menu--organigrama.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/navigation/menu--organigrama.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 22, "macro" => 30, "if" => 33, "for" => 41, "set" => 43];
        static $filters = ["escape" => 35, "without" => 35, "raw" => 122];
        static $functions = ["file_url" => 65];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'without', 'raw'],
                ['file_url'],
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
