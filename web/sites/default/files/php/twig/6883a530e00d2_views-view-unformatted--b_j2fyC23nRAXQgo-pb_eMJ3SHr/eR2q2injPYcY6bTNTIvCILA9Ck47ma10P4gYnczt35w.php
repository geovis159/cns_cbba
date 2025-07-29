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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_tramites.html.twig */
class __TwigTemplate_70e3cb843acd33fbe687f5eca53dd71d extends Template
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
        yield "<div class=\"row mt-3\">
\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            yield "\t\t<div class=\"col-sm-6 col-sx-6 col-md-4 mb-4\">
\t\t\t<div class='card h-100 p-2' style='border-radius: 20px;'>
\t\t\t\t<div class='card-body'>
\t\t\t\t\t<p class='card-text'>
\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = $context["row"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 25))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["row"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 25)), "#row", [], "array", false, false, true, 25)), "_entity", [], "any", false, false, true, 25), "field_codigo_tramite", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), "html", null, true);
            yield "
\t\t\t\t\t\t</b>
\t\t\t\t\t</p>
\t\t\t\t\t<h4 class='card-title text-white' style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\">
\t\t\t\t\t\t";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = $context["row"]) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 29))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = $context["row"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 29)), "#row", [], "array", false, false, true, 29)), "_entity", [], "any", false, false, true, 29), "field_nombre_tramite", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), "html", null, true);
            yield "
\t\t\t\t\t</h4>
\t\t\t\t\t<p class='card-text' style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;\">
\t\t\t\t\t\t";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = $context["row"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 32))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = $context["row"]) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 32)), "#row", [], "array", false, false, true, 32)), "_entity", [], "any", false, false, true, 32), "field_descripcion_tramite", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), "html", null, true);
            yield "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class='card-footer bg-transparent text-end' style='border: none;'>
\t\t\t\t\t<a href=\"";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36), "#row", [], "array", false, false, true, 36)), "_entity", [], "any", false, false, true, 36), "nid", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), "html", null, true);
            yield "\" class='btn btn-sm boton-tramite'>Ver trámite</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 43
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_tramites.html.twig";
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
        return array (  95 => 46,  87 => 43,  78 => 36,  71 => 32,  65 => 29,  58 => 25,  51 => 20,  47 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_tramites.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_tramites.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 19];
        static $filters = ["escape" => 25];
        static $functions = ["url" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
