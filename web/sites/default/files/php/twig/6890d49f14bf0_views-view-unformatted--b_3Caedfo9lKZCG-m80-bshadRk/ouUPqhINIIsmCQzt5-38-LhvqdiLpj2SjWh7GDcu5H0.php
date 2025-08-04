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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_carrousel.html.twig */
class __TwigTemplate_86066c2cb35455e616d9fe3e27ca927d extends Template
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
        // line 18
        yield "

<div id=\"carousel-img\" class=\"carousel carousel-dark slide\" style=\"height: 384px;\" data-bs-ride=\"carousel\">

\t<div class=\"carousel-indicators\">
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["campos"] ?? null));
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
            // line 24
            yield "\t\t\t<button type=\"button\" data-bs-target=\"#carousel-img\" data-bs-slide-to=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24), "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24) == 0)) ? ("active") : ("")));
            yield "\" aria-label=\"Slide";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24) + 1), "html", null, true);
            yield "\" aria-current=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24) == 0)) ? ("true") : ("")));
            yield "\"></button>
\t\t";
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
        // line 26
        yield "\t</div>


\t<div class=\"carousel-inner h-100\">
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["campos"] ?? null));
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
            // line 31
            yield "\t\t\t";
            // line 37
            yield "\t\t\t<div class=\"carousel-item  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 37) == 0)) ? ("active") : ("")));
            yield " h-100\" data-bs-interval=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = $context["row"]) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["field_transicion_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_transicion_carrousel", [], "array", false, false, true, 37)), "html", null, true);
            yield "\" style=\"transition: transform 0.5s ease-in-out;\">

\t\t\t\t<img style=\"object-fit: cover !important; height: 384px;  width: 100%;\" src=\"";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl((($_v1 = $context["row"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["field_imagen_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_imagen_carrousel", [], "array", false, false, true, 39))), "html", null, true);
            yield "\" class=\"\">
\t\t\t\t<div class=\"carousel-caption  d-block\" style=\"right: 10%;left: 10%;\">
\t\t\t\t\t";
            // line 41
            if ((($_v2 = $context["row"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["field_titulo_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_titulo_carrousel", [], "array", false, false, true, 41))) {
                // line 42
                yield "
\t\t\t\t\t";
                // line 44
                yield "\t\t\t\t\t<div class=\"ocultar-en-movil\">
\t\t\t\t\t\t<div class=\"card mx-auto  mb-4 ms-2\" style=\"width: 60%;height: 260px; background-color: rgba(";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v3 = $context["row"]) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["field_colorRgb_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_colorRgb_carrousel", [], "array", false, false, true, 45)), "html", null, true);
                yield ",0.40);\">
\t\t\t\t\t\t\t<div class=\"card-body text-start text-white\">
\t\t\t\t\t\t\t\t<div class=\"text-start d-none d-sm-block \">
\t\t\t\t\t\t\t\t\t<h2 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v4 = $context["row"]) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["field_titulo_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_titulo_carrousel", [], "array", false, false, true, 48)), "html", null, true);
                yield "</h2>
\t\t\t\t\t\t\t\t\t<h6 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v5 = $context["row"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["field_descripcion_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_descripcion_carrousel", [], "array", false, false, true, 49)), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-start d-block d-sm-none text-white\">
\t\t\t\t\t\t\t\t\t<h4 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v6 = $context["row"]) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["field_titulo_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_titulo_carrousel", [], "array", false, false, true, 52)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<h6 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = $context["row"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["field_descripcion_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_descripcion_carrousel", [], "array", false, false, true, 54)), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-end d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v8 = (($_v9 = $context["row"]) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 57))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["uri"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v10 = $context["row"]) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 57)), "uri", [], "array", false, false, true, 57)), "html", null, true);
                yield "\" class=\"btn btn-dark\" style=\"background-color: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v11 = $context["row"]) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["field_color_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_color_carrousel", [], "array", false, false, true, 57)), "html", null, true);
                yield ";\">
\t\t\t\t\t\t\t\t\t\t";
                // line 58
                yield (((($_v12 = (($_v13 = $context["row"]) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 58))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = $context["row"]) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 58)), "title", [], "array", false, false, true, 58))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v15 = (($_v16 = $context["row"]) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 58))) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v17 = $context["row"]) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 58)), "title", [], "array", false, false, true, 58)), "html", null, true)) : ("Más información"));
                yield "
\t\t\t\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-eendd-block d-sm-none\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v18 = (($_v19 = $context["row"]) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 63))) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["uri"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v20 = $context["row"]) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 63)), "uri", [], "array", false, false, true, 63)), "html", null, true);
                yield "\" class=\"btn btn-sm btn-dark\" style=\"background-color: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v21 = $context["row"]) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["field_color_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_color_carrousel", [], "array", false, false, true, 63)), "html", null, true);
                yield ";\">
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                yield (((($_v22 = (($_v23 = $context["row"]) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 64))) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v24 = $context["row"]) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 64)), "title", [], "array", false, false, true, 64))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v25 = (($_v26 = $context["row"]) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 64))) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v27 = $context["row"]) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 64)), "title", [], "array", false, false, true, 64)), "html", null, true)) : ("Más información"));
                yield "
\t\t\t\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 72
                yield "\t\t\t\t\t<div class=\"mostrar-en-movil\">
\t\t\t\t\t\t<div class=\"card mx-auto mt-4\" style=\"height: 330px; background-color: rgba(";
                // line 73
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v28 = $context["row"]) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["field_colorRgb_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_colorRgb_carrousel", [], "array", false, false, true, 73)), "html", null, true);
                yield ",0.40);\">
\t\t\t\t\t\t\t<div class=\"card-body text-start text-white\">
\t\t\t\t\t\t\t\t<div class=\"text-start d-none d-sm-block \">
\t\t\t\t\t\t\t\t\t<h2 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v29 = $context["row"]) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29["field_titulo_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_titulo_carrousel", [], "array", false, false, true, 76)), "html", null, true);
                yield "</h2>
\t\t\t\t\t\t\t\t\t<h6 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v30 = $context["row"]) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30["field_descripcion_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_descripcion_carrousel", [], "array", false, false, true, 77)), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-start d-block d-sm-none text-white\">
\t\t\t\t\t\t\t\t\t<h4 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v31 = $context["row"]) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["field_titulo_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_titulo_carrousel", [], "array", false, false, true, 80)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<h6 style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\" class=\"text-white\">";
                // line 82
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v32 = $context["row"]) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32["field_descripcion_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_descripcion_carrousel", [], "array", false, false, true, 82)), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-end d-none d-sm-block\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v33 = (($_v34 = $context["row"]) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 85))) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33["uri"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v35 = $context["row"]) && is_array($_v35) || $_v35 instanceof ArrayAccess && in_array($_v35::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v35["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 85)), "uri", [], "array", false, false, true, 85)), "html", null, true);
                yield "\" class=\"btn btn-dark\" style=\"background-color: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v36 = $context["row"]) && is_array($_v36) || $_v36 instanceof ArrayAccess && in_array($_v36::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v36["field_color_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_color_carrousel", [], "array", false, false, true, 85)), "html", null, true);
                yield ";\">
\t\t\t\t\t\t\t\t\t\t";
                // line 86
                yield (((($_v37 = (($_v38 = $context["row"]) && is_array($_v38) || $_v38 instanceof ArrayAccess && in_array($_v38::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v38["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 86))) && is_array($_v37) || $_v37 instanceof ArrayAccess && in_array($_v37::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v37["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v39 = $context["row"]) && is_array($_v39) || $_v39 instanceof ArrayAccess && in_array($_v39::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v39["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 86)), "title", [], "array", false, false, true, 86))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v40 = (($_v41 = $context["row"]) && is_array($_v41) || $_v41 instanceof ArrayAccess && in_array($_v41::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v41["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 86))) && is_array($_v40) || $_v40 instanceof ArrayAccess && in_array($_v40::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v40["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v42 = $context["row"]) && is_array($_v42) || $_v42 instanceof ArrayAccess && in_array($_v42::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v42["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 86)), "title", [], "array", false, false, true, 86)), "html", null, true)) : ("Más información"));
                yield "
\t\t\t\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-eendd-block d-sm-none\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v43 = (($_v44 = $context["row"]) && is_array($_v44) || $_v44 instanceof ArrayAccess && in_array($_v44::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v44["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 91))) && is_array($_v43) || $_v43 instanceof ArrayAccess && in_array($_v43::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v43["uri"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v45 = $context["row"]) && is_array($_v45) || $_v45 instanceof ArrayAccess && in_array($_v45::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v45["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 91)), "uri", [], "array", false, false, true, 91)), "html", null, true);
                yield "\" class=\"btn btn-sm btn-dark\" style=\"background-color: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v46 = $context["row"]) && is_array($_v46) || $_v46 instanceof ArrayAccess && in_array($_v46::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v46["field_color_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_color_carrousel", [], "array", false, false, true, 91)), "html", null, true);
                yield ";\">
\t\t\t\t\t\t\t\t\t\t";
                // line 92
                yield (((($_v47 = (($_v48 = $context["row"]) && is_array($_v48) || $_v48 instanceof ArrayAccess && in_array($_v48::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v48["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 92))) && is_array($_v47) || $_v47 instanceof ArrayAccess && in_array($_v47::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v47["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v49 = $context["row"]) && is_array($_v49) || $_v49 instanceof ArrayAccess && in_array($_v49::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v49["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 92)), "title", [], "array", false, false, true, 92))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v50 = (($_v51 = $context["row"]) && is_array($_v51) || $_v51 instanceof ArrayAccess && in_array($_v51::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v51["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 92))) && is_array($_v50) || $_v50 instanceof ArrayAccess && in_array($_v50::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v50["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v52 = $context["row"]) && is_array($_v52) || $_v52 instanceof ArrayAccess && in_array($_v52::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v52["field_enlace_carrousel"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "field_enlace_carrousel", [], "array", false, false, true, 92)), "title", [], "array", false, false, true, 92)), "html", null, true)) : ("Más información"));
                yield "
\t\t\t\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 100
            yield "\t\t\t\t</div>
\t\t\t</div>

\t\t";
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
        // line 104
        yield "\t</div>


\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-img\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-img\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t</button>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["campos", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_carrousel.html.twig";
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
        return array (  272 => 104,  255 => 100,  244 => 92,  238 => 91,  230 => 86,  224 => 85,  218 => 82,  213 => 80,  207 => 77,  203 => 76,  197 => 73,  194 => 72,  184 => 64,  178 => 63,  170 => 58,  164 => 57,  158 => 54,  153 => 52,  147 => 49,  143 => 48,  137 => 45,  134 => 44,  131 => 42,  129 => 41,  124 => 39,  116 => 37,  114 => 31,  97 => 30,  91 => 26,  68 => 24,  51 => 23,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_carrousel.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_carrousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 23, "if" => 41];
        static $filters = ["escape" => 24];
        static $functions = ["file_url" => 39];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
