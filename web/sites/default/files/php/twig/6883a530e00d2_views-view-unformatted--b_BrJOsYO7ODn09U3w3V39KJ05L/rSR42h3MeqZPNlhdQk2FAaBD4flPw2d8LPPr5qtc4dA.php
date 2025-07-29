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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_comunicados.html.twig */
class __TwigTemplate_ce559301f5440dddec0637e7cd02ee1e extends Template
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

<div class=\"mx-auto my-2 justify-content-center otro\">

\t<div style=\"display: flex;\" id=\"comunicadosCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">

\t\t<div class=\"position-relative mx-2\">
\t\t\t<a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#comunicadosCarousel\" role=\"button\"
\t\t\t\tdata-bs-slide=\"prev\">
\t\t\t\t<i class=\"align-middle bi bi-caret-left-fill\"></i>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"carousel-inner row row-cols-md-4 row-cols-lg-5\" role=\"listbox\">

\t\t\t";
        // line 33
        $context["bandera"] = true;
        // line 34
        yield "\t\t\t";
        $context["comunicados"] = [];
        // line 35
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
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
            // line 36
            yield "\t\t\t";
            $context["comunicado"] = ["titulo" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36), "#row", [], "array", false, false, true, 36)), "_entity", [], "any", false, false, true, 36), "field_titulo_comunicado", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), "contenido" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["row"], "content", [], "any", false, false, true, 37)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), "#row", [], "array", false, false, true, 37)), "_entity", [], "any", false, false, true, 37), "field_contenido_comunicado", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), "archivo" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source,             // line 38
$context["row"], "content", [], "any", false, false, true, 38)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38), "#row", [], "array", false, false, true, 38)), "_entity", [], "any", false, false, true, 38), "field_archivo_comunicado", [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "getFileUri", [], "method", false, false, true, 38))];
            // line 40
            yield "
\t\t\t";
            // line 41
            $context["comunicados"] = Twig\Extension\CoreExtension::merge(($context["comunicados"] ?? null), [($context["comunicado"] ?? null)]);
            // line 42
            yield "\t\t\t";
            // line 43
            yield "\t\t\t<div class=\"carousel-item ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bandera"] ?? null)) ? ("active") : ("")));
            yield " mt-2\">

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class='card mx-2 p-0 mb-2' style=\"max-height: 134px;min-height: 134px;\">

\t\t\t\t\t\t<div class='card-body pb-0'>

\t\t\t\t\t\t\t<p class='texto-default ver-comunicado'>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 52)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 52), "#row", [], "array", false, false, true, 52)), "_entity", [], "any", false, false, true, 52), "field_fecha_comunicado", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52)) {
                // line 53
                yield "\t\t\t\t\t\t\t\t\t \t";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 53), "#row", [], "array", false, false, true, 53)), "_entity", [], "any", false, false, true, 53), "field_fecha_comunicado", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53), "d/m/Y"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            yield "\t\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t\t";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56), "#row", [], "array", false, false, true, 56)), "_entity", [], "any", false, false, true, 56), "field_lugar_comunicado", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class='titulo'
\t\t\t\t\t\t\t\tstyle=\"overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;\">
\t\t\t\t\t\t\t\t";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 61)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 61), "#row", [], "array", false, false, true, 61)), "_entity", [], "any", false, false, true, 61), "field_titulo_comunicado", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), "html", null, true);
            yield "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- button ver comunicado en modal -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='card-footer mt-0 pt-0 bg-transparent' style='border: none;'>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<p class='text-lg-end ver-comunicado mb-1' data-bs-toggle=\"modal\"
\t\t\t\t\t\t\t\t\tdata-bs-target=\"#modalComunicado\" data-post-id=\"";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 69), "html", null, true);
            yield "\">Ver comunicado
\t\t\t\t\t\t\t\t\t<i class='bi bi-arrow-right'></i>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 77
            $context["bandera"] = false;
            // line 78
            yield "\t\t\t";
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
        // line 79
        yield "\t\t</div>
\t\t<div class=\"position-relative mx-2\">
\t\t\t<a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#comunicadosCarousel\" role=\"button\"
\t\t\t\tdata-bs-slide=\"next\">
\t\t\t\t<i class=\"bi bi-caret-right-fill\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
</div>


<div class=\"modal fade\" id=\"modalComunicado\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
\taria-labelledby=\"modalComunicadoLabel\" aria-hidden=\"true\">
\t<div class=\" modal-dialog modal-dialog-centered modal-dialog-scrollable\" style=\"max-width: 800px;\">
\t\t<div id=\"modal-comunicado\" class=\"fondo-default modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"modalComunicadoLabel\">
\t\t\t\t\t<strong>Comunicado</strong>
\t\t\t\t</h5>
\t\t\t\t<button type=\"button\" class=\"texto-default btn-close\" data-bs-dismiss=\"modal\"
\t\t\t\t\taria-label=\"Close\"></button>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">

\t\t\t\t<div style=\"display: flex;\" class=\"text-center\">
\t\t\t\t\t<a class=\"floating-button\" style=\"left: 0px;\" onclick=\"anteriorComunicadoModal()\"
\t\t\t\t\t\thref=\"#comunicadosCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<i class=\"bi bi-caret-left-fill icono-color\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"\">

\t\t\t\t\t\t<div class=\"mt-2\" style=\"margin-left: 26px;margin-right: 26px;\">
\t\t\t\t\t\t\t<h5 id=\"modal-titulo\"></h5>
\t\t\t\t\t\t\t<div class=\"contenido-modal texto-default\" id=\"modal-contenido\"
\t\t\t\t\t\t\t\tstyle=\"white-space: pre-wrap;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"floating-button\" style=\"right: 0px;\" href=\"#comunicadosCarousel\"
\t\t\t\t\t\tonclick=\"siguienteComunicadoModal()\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t\t\t<i class=\"bi bi-caret-right-fill icono-color\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"\" target=\"_blank\" id=\"modal-archivo\" class=\"btn\">Descargar
\t\t\t\t\t<i class=\"bi bi-file-earmark-pdf-fill icono-color\"></i>
\t\t\t\t</a>
\t\t\t</div>

\t\t</div>
\t</div>
</div>

<script>
\tvar postData = JSON.parse(\"";
        // line 137
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, json_encode(($context["comunicados"] ?? null)), "js"), "html", null, true);
        yield "\");
</script>
<script>
\tlet items = document.querySelectorAll('.otro .carousel .carousel-item')
\tvar width = window.innerWidth;
\tlet currentComunicado = 1;
\tconst titulo = document.getElementById('modal-titulo');
\tconst contenido = document.getElementById('modal-contenido');
\tconst archivo = document.getElementById('modal-archivo');
\t

\t
\titems.forEach((el) => {
\t\tconst minPerSlide = width > 992 ? 5 : 4
\t\tlet next = el.nextElementSibling
\t\tfor (var i = 1; i < minPerSlide; i++) {
\t\t\tif (!next) {
\t\t\t\tnext = items[0]
\t\t\t}
\t\t\tlet cloneChild = next.cloneNode(true)
\t\t\tel.appendChild(cloneChild.children[0])
\t\t\tnext = next.nextElementSibling
\t\t}
\t})

\tfunction actualizarModal(post) {
\t\ttitulo.textContent = post.titulo;
\t\tcontenido.innerHTML = post.contenido;
\t\tarchivo.setAttribute('href', post.archivo);
\t}
\tdocument.querySelectorAll('.ver-comunicado').forEach(item => {
\t\titem.addEventListener('click', event => {
\t\t\tconst postId = item.getAttribute('data-post-id');

\t\t\tthis.currentComunicado = postId;
\t\t\tconst post = postData[postId];
\t\t\tactualizarModal(post)
\t\t});
\t});

\tfunction siguienteComunicadoModal() {
\t\tcurrentComunicado = (parseInt(currentComunicado) + 1) % postData.length

\t\tconst post = postData[currentComunicado];
\t\tactualizarModal(post)
\t}
\tfunction anteriorComunicadoModal() {
\t\tcurrentComunicado = (parseInt(currentComunicado) - 1 + postData.length) % postData.length
\t\tconst post = postData[currentComunicado];
\t\tactualizarModal(post)
\t}

\tdocument.addEventListener('DOMContentLoaded', function () {
\t";
        // line 190
        if ((($context["mostrar_modal"] ?? null) == 1)) {
            // line 191
            yield "\tactualizarModal(postData[0])
\tconst myModal = new bootstrap.Modal(document.getElementById('modalComunicado'));
\tmyModal.show();
\t";
        }
        // line 195
        yield "
  });
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop", "mostrar_modal"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_comunicados.html.twig";
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
        return array (  290 => 195,  284 => 191,  282 => 190,  226 => 137,  166 => 79,  152 => 78,  150 => 77,  139 => 69,  128 => 61,  120 => 56,  117 => 55,  111 => 53,  109 => 52,  96 => 43,  94 => 42,  92 => 41,  89 => 40,  87 => 38,  86 => 37,  84 => 36,  66 => 35,  63 => 34,  61 => 33,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_comunicados.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_de_comunicados.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 33, "for" => 35, "if" => 52];
        static $filters = ["merge" => 41, "escape" => 53, "date" => 53, "e" => 137, "json_encode" => 137];
        static $functions = ["file_url" => 38];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'escape', 'date', 'e', 'json_encode'],
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
