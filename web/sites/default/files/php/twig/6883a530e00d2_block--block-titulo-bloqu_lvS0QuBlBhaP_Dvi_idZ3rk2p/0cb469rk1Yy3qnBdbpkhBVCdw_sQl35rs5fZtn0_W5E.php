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

/* themes/custom/gobbo_tema/templates/block/block--block-titulo-bloque.html.twig */
class __TwigTemplate_698a39571bc204167f5d768aa1306a27 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $context["classes"] = ["container pt-2"];
        // line 37
        yield "<div id=\"titulos-bloque\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 37), "html", null, true);
        yield ">
\t";
        // line 38
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 58
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content"]);        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "\t\t<div class=\"row my-2\">
\t\t\t<div id=\"divider\">
\t\t\t\t<hr>
\t\t\t\t<div>
\t\t\t\t\t<h4>";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 43)), "field_titulos_titulo", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), "html", null, true);
        yield "</h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 47
        if ((($_v1 = (($_v2 = (($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 47))) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["content"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 47)), 0, [], "array", false, false, true, 47))) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = (($_v6 = ($context["content"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 47))) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["content"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 47)), 0, [], "array", false, false, true, 47)), "#title", [], "array", false, false, true, 47))) {
            // line 48
            yield "
\t\t\t<div class=\"row\">
\t\t\t\t<a class='text-lg-end' href=\"";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v8 = (($_v9 = (($_v10 = ($context["content"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 50))) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["content"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 50)), 0, [], "array", false, false, true, 50))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v12 = (($_v13 = ($context["content"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 50))) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v14 = ($context["content"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 50)), 0, [], "array", false, false, true, 50)), "#url", [], "array", false, false, true, 50)), "html", null, true);
            yield "\">
\t\t\t\t\t";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v15 = (($_v16 = (($_v17 = ($context["content"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 51))) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v18 = ($context["content"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 51)), 0, [], "array", false, false, true, 51))) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v19 = (($_v20 = ($context["content"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 51))) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v21 = ($context["content"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["field_titulos_enlace"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulos_enlace", [], "array", false, false, true, 51)), 0, [], "array", false, false, true, 51)), "#title", [], "array", false, false, true, 51)), "html", null, true);
            yield "
\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 56
        yield "
\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--block-titulo-bloque.html.twig";
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
        return array (  99 => 56,  91 => 51,  87 => 50,  83 => 48,  81 => 47,  74 => 43,  68 => 39,  61 => 38,  54 => 58,  52 => 38,  47 => 37,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--block-titulo-bloque.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--block-titulo-bloque.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 33, "block" => 38, "if" => 47];
        static $filters = ["escape" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape'],
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
