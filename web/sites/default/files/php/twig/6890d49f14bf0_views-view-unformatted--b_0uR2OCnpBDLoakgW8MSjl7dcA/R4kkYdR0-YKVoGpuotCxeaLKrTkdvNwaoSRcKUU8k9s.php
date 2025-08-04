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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_notas.html.twig */
class __TwigTemplate_3458ae049856166ecb571c79641b023f extends Template
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


\t<div class=\"row mt-3\">
    ";
        // line 23
        yield "    ";
        // line 24
        yield "    
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            yield "\t\t\t<div class='col-12 col-sm-6 col-md-4' style='margin-bottom: 25px;'>
\t\t\t\t<div class='card h-100'>
\t\t\t\t\t
\t\t\t\t\t<img style=\"object-fit: cover;\" src='";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = $context["row"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 29))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["row"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 29)), "#row", [], "array", false, false, true, 29)), "_entity", [], "any", false, false, true, 29), "field_imagen_nota", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "uri", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29)), "html", null, true);
            yield "' class='card-img-top mx-auto' alt='";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = $context["row"]) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 29))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = $context["row"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 29)), "#row", [], "array", false, false, true, 29)), "_entity", [], "any", false, false, true, 29), "field_imagen_nota", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 0, [], "any", false, false, true, 29), "alt", [], "any", false, false, true, 29), "html", null, true);
            yield "' width='50' height='270'>
\t\t\t\t\t<div class='card-body'>
\t\t\t\t\t\t<p class='card-text'>
\t\t\t\t\t\t\t<small class='text-muted'>
\t\t\t\t\t\t\t\t";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = $context["row"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 33))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = $context["row"]) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 33)), "#row", [], "array", false, false, true, 33)), "_entity", [], "any", false, false, true, 33), "created", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33)) {
                // line 34
                yield "                \t\t\t\t\t";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = (($_v10 = $context["row"]) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 34))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = $context["row"]) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 34)), "#row", [], "array", false, false, true, 34)), "_entity", [], "any", false, false, true, 34), "created", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), "d/m/Y"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t";
            }
            // line 36
            yield "\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = (($_v13 = $context["row"]) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 37))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = $context["row"]) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 37)), "#row", [], "array", false, false, true, 37)), "_entity", [], "any", false, false, true, 37), "field_lugar_nota", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h5 class='card-title' style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\">
\t\t\t\t\t\t\t";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v15 = (($_v16 = $context["row"]) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 42))) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v17 = $context["row"]) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 42)), "#row", [], "array", false, false, true, 42)), "_entity", [], "any", false, false, true, 42), "field_titulo_nota", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), "html", null, true);
            yield "
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div>
\t\t\t\t\t<div class='card-footer bg-transparent' style='border: none;'>
\t\t\t\t\t\t<a href=\"";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v18 = (($_v19 = $context["row"]) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 47))) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v20 = $context["row"]) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 47)), "#row", [], "array", false, false, true, 47)), "_entity", [], "any", false, false, true, 47), "nid", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<p class='text-lg-end'>Leer nota
\t\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</a>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "\t</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_notas.html.twig";
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
        return array (  119 => 58,  100 => 47,  92 => 42,  84 => 37,  81 => 36,  75 => 34,  73 => 33,  64 => 29,  59 => 26,  55 => 25,  52 => 24,  50 => 23,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_notas.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_notas.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 25, "if" => 33];
        static $filters = ["escape" => 29, "date" => 34];
        static $functions = ["file_url" => 29, "url" => 47];

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
