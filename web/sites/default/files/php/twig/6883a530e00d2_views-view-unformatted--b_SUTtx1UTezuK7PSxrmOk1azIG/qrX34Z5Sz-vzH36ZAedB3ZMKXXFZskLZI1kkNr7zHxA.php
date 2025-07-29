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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_indicadores.html.twig */
class __TwigTemplate_57f390efdea8507697a3e0cb123c838d extends Template
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
        // line 19
        yield "
<div id=\"indicadores\" >
\t
\t<div id=\"indicadoresCarrousel\" class=\"row  mx-auto mb-2 justify-content-center enlaces";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 22), "html", null, true);
        yield "\">
\t\t<div style=\"display: flex;\" id=\"carousel";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 23), "html", null, true);
        yield "\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"position-relative mx-2\">
\t\t\t\t<a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#carousel";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 25), "html", null, true);
        yield "\" role=\"button\"
\t\t\t\t\tdata-bs-slide=\"prev\">
\t\t\t\t\t<i class=\"align-middle bi bi-caret-left-fill\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t";
        // line 31
        $context["bandera"] = true;
        // line 32
        yield "\t\t\t\t
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            yield "\t
\t\t\t\t";
            // line 36
            yield "\t\t\t\t";
            $context["enlace"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36), "#row", [], "array", false, false, true, 36)), "_entity", [], "any", false, false, true, 36), "field_enlace_indicador", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36);
            // line 37
            yield "\t\t\t\t";
            $context["archivo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), "#row", [], "array", false, false, true, 37)), "_entity", [], "any", false, false, true, 37), "field_archivo_indicador", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37);
            // line 38
            yield "
\t\t
\t\t\t\t<div class=\"carousel-item ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bandera"] ?? null)) ? ("active") : ("")));
            yield "\">
\t\t\t\t\t<div class='col-12 col-sm-6 col-md-4'>
\t\t\t\t\t\t";
            // line 42
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["enlace"] ?? null)) > 0)) {
                // line 43
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43), "#row", [], "array", false, false, true, 43)), "_entity", [], "any", false, false, true, 43), "field_enlace_indicador", [], "any", false, false, true, 43), 0, [], "any", false, false, true, 43), "url", [], "any", false, false, true, 43), "html", null, true);
                yield "\" target=\"_blank\">
\t\t\t\t\t\t";
            } else {
                // line 45
                yield "\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#row", [], "array", false, false, true, 45)), "_entity", [], "any", false, false, true, 45), "field_archivo_indicador", [], "any", false, false, true, 45), "entity", [], "any", false, false, true, 45), "getFileUri", [], "method", false, false, true, 45)), "html", null, true);
                yield "\">
\t\t\t\t\t\t";
            }
            // line 47
            yield "\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class='card-footer bg-transparent' style='border: none;'>
\t\t\t\t\t\t\t\t\t<div class='row justify-content-center'>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"object-fit: cover;\"
\t\t\t\t\t\t\t\t\t\t\t\t src='";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53), "#row", [], "array", false, false, true, 53)), "_entity", [], "any", false, false, true, 53), "field_imagen_indicador", [], "any", false, false, true, 53), "entity", [], "any", false, false, true, 53), "getFileUri", [], "method", false, false, true, 53)), "html", null, true);
            yield "'
\t\t\t\t\t\t\t\t\t\t\t\tclass='card-img-top mx-auto' alt='imagen' width='auto' height='160px'>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class='col-12 col-md-8'>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"titulo\" style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\">
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 59)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 59), "#row", [], "array", false, false, true, 59)), "_entity", [], "any", false, false, true, 59), "field_titulo_indicador", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"descripcion pt-2\" style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\">
\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 63)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 63), "#row", [], "array", false, false, true, 63)), "_entity", [], "any", false, false, true, 63), "field_descripcion_indicador", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-4\"></div>
\t\t\t\t\t\t\t\t\t\t<div class='col-12 col-md-8 pt-3'>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t\t\t\t\t\t\t\tActualizado hace ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = $context["row"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["minutos_desde_publicacion"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "minutos_desde_publicacion", [], "array", false, false, true, 70)), "html", null, true);
            yield " mins
\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 81
            $context["bandera"] = false;
            // line 82
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "\t\t\t</div>
\t\t\t<div class=\"position-relative mx-2\">
\t\t\t\t<a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#carousel";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 85), "html", null, true);
        yield "\" role=\"button\"
\t\t\t\t\tdata-bs-slide=\"next\">
\t\t\t\t\t<i class=\"bi bi-caret-right-fill\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

</div>











";
        // line 106
        yield "

<script>
\tvar dato  = \"";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 109), "html", null, true);
        yield "\"
\tlet items";
        // line 110
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 110), "html", null, true);
        yield " = document.querySelectorAll('.enlaces";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 110), "html", null, true);
        yield " .carousel .carousel-item')
\titems";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 111), "html", null, true);
        yield ".forEach((el) => {
\t\tconst minPerSlide = 3
\t\tlet next = el.nextElementSibling
\t\tfor (var i = 1; i < minPerSlide; i++) {
\t\t\tif (!next) {
\t\t\t\tnext = items";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 116), "html", null, true);
        yield "[0]
\t\t\t}
\t\t\tlet cloneChild = next.cloneNode(true)
\t\t\tel.appendChild(cloneChild.children[0])
\t\t\tnext = next.nextElementSibling
\t\t}
\t})
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["view", "rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_indicadores.html.twig";
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
        return array (  214 => 116,  206 => 111,  200 => 110,  196 => 109,  191 => 106,  168 => 85,  164 => 83,  158 => 82,  156 => 81,  142 => 70,  132 => 63,  125 => 59,  116 => 53,  108 => 47,  102 => 45,  96 => 43,  94 => 42,  89 => 40,  85 => 38,  82 => 37,  79 => 36,  76 => 34,  72 => 33,  69 => 32,  67 => 31,  58 => 25,  53 => 23,  49 => 22,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_indicadores.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_indicadores.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "for" => 33, "if" => 42];
        static $filters = ["escape" => 22, "length" => 42];
        static $functions = ["file_url" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'length'],
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
