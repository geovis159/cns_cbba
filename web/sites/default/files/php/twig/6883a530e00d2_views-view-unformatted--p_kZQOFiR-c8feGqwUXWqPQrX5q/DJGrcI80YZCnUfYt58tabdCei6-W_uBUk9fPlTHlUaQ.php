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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_servicios.html.twig */
class __TwigTemplate_7f05ed563fd5a6f73070a00dde8b167c extends Template
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

<div id=\"servicios\" class=\"row\" style='margin-bottom: 25px;'>

<div class=\"row\">
\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            yield "\t\t<div class='col-12 m-2'>
\t\t\t<div class='card  h-100 card p-2 ' style='border-radius: 20px;'>
\t\t\t\t<div class='card-body '>
\t\t\t\t\t<div class='d-flex flex-column flex-md-row align-items-center'>
\t\t\t\t\t\t<img  class='text-success pe-4'style=\"object-fit: contain;\" src=\"";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "#row", [], "array", false, false, true, 28)), "_entity", [], "any", false, false, true, 28), "field_imagen_servicios", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "getFileUri", [], "method", false, false, true, 28)), "html", null, true);
            yield "\"   width='75' height='75'>
\t\t\t\t
\t\t\t\t\t\t<div class=\"align-middle pb-4\" >
\t\t\t\t\t\t\t<p class=\"titulo \">";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31), "#row", [], "array", false, false, true, 31)), "_entity", [], "any", false, false, true, 31), "field_titulo_servicios", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), "html", null, true);
            yield "</p>

\t\t\t\t\t\t\t<div class=\"anuncio\" style=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;\">";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33), "#row", [], "array", false, false, true, 33)), "_entity", [], "any", false, false, true, 33), "field_anuncio_servicios", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), "html", null, true);
            yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ms-auto align-self-center pb-0\">

\t\t\t\t\t\t\t";
            // line 37
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), "#row", [], "array", false, false, true, 37)), "_entity", [], "any", false, false, true, 37), "field_enlace_servicios", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37)) > 1)) {
                // line 38
                yield "\t\t\t\t\t\t\t<a class=\"btn ver-detalles ms-4\" style=\"text-decoration: none;min-width: 140px;\" target=\"_blank\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38), "#row", [], "array", false, false, true, 38)), "_entity", [], "any", false, false, true, 38), "field_enlace_servicios", [], "any", false, false, true, 38), "uri", [], "any", false, false, true, 38), "html", null, true);
                yield "\">Ver detalles
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 41
                yield "\t\t\t\t\t\t\t<a class=\"btn ver-detalles ms-4\" style=\"text-decoration: none;min-width: 140px;\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
                yield "/node/";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41), "#row", [], "array", false, false, true, 41)), "_entity", [], "any", false, false, true, 41), "nid", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), "html", null, true);
                yield "\">Ver detalles
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 44
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
</div>


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
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_servicios.html.twig";
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
        return array (  109 => 51,  97 => 44,  88 => 41,  81 => 38,  79 => 37,  72 => 33,  67 => 31,  61 => 28,  55 => 24,  51 => 23,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_servicios.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--pagina_lista_servicios.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 23, "if" => 37];
        static $filters = ["escape" => 28, "length" => 37];
        static $functions = ["file_url" => 28, "url" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'length'],
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
