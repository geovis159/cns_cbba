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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_cursos.html.twig */
class __TwigTemplate_d1e498d13379ed1f29f5ca87ab5655c3 extends Template
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
<div id=\"cursos\" class=\"row\" style='margin-bottom: 25px;'>


\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            yield "

\t<div class='col-sm-4'>
\t\t<div class='card h-100'>
\t\t\t<h5 class='card-title m-4' style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\">
\t\t\t\t";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = $context["row"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 28))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["row"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 28)), "#row", [], "array", false, false, true, 28)), "_entity", [], "any", false, false, true, 28), "field_titulo_curso", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), "html", null, true);
            yield "
\t\t\t</h5>
\t\t\t<img style=\"object-fit: cover;\" src='";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = $context["row"]) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 30))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = $context["row"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 30)), "#row", [], "array", false, false, true, 30)), "_entity", [], "any", false, false, true, 30), "field_imagen_curso", [], "any", false, false, true, 30), "entity", [], "any", false, false, true, 30), "uri", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30)), "html", null, true);
            yield "' class='mx-2' alt='imagen' height='240'>
\t\t\t<div class='card-body'>
\t\t\t\t<p class='texto-anuncio'>
\t\t\t\t\t<strong> Modalidad </strong>
\t\t\t\t\t";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = $context["row"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 34))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = $context["row"]) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 34)), "#row", [], "array", false, false, true, 34)), "_entity", [], "any", false, false, true, 34), "field_modalidad_curso", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), "html", null, true);
            yield "
\t\t\t\t</p>
\t\t\t\t<p class='texto-anuncio'>
\t\t\t\t<strong> Tiempo de duración </strong>
\t\t\t\t";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = (($_v10 = $context["row"]) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 38))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = $context["row"]) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 38)), "#row", [], "array", false, false, true, 38)), "_entity", [], "any", false, false, true, 38), "field_duracion_curso", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), "html", null, true);
            yield "
\t\t\t\t</p>
\t\t\t\t<p class='texto-anuncio'>
\t\t\t\t<strong> Fecha de inicio </strong>
\t\t\t\t";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = (($_v13 = $context["row"]) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 42))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = $context["row"]) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 42)), "#row", [], "array", false, false, true, 42)), "_entity", [], "any", false, false, true, 42), "field_fecha_ini_curso", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42)) {
                // line 43
                yield "\t\t\t\t\t";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v15 = (($_v16 = $context["row"]) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 43))) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v17 = $context["row"]) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 43)), "#row", [], "array", false, false, true, 43)), "_entity", [], "any", false, false, true, 43), "field_fecha_ini_curso", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), "d/m/Y"), "html", null, true);
                yield "
\t\t\t\t";
            }
            // line 45
            yield "\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class='card-footer bg-transparent my-0 py-0' style='border: none; align-items: flex-end;'>

\t\t\t\t<a href=\"";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v18 = (($_v19 = $context["row"]) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 49))) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v20 = $context["row"]) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 49)), "#row", [], "array", false, false, true, 49)), "_entity", [], "any", false, false, true, 49), "nid", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), "html", null, true);
            yield "\">
\t\t\t\t\t<p class='text-lg-end'>Ver curso <i class='bi bi-arrow-right'></i></p>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>


\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_cursos.html.twig";
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
        return array (  118 => 58,  101 => 49,  95 => 45,  89 => 43,  87 => 42,  80 => 38,  73 => 34,  66 => 30,  61 => 28,  54 => 23,  50 => 22,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_cursos.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_cursos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 22, "if" => 42];
        static $filters = ["escape" => 28, "date" => 43];
        static $functions = ["file_url" => 30, "url" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date'],
                ['file_url', 'url'],
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
