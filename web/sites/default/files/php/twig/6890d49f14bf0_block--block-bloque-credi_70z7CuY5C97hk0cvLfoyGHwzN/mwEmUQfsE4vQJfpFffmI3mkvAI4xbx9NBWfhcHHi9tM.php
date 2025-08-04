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

/* themes/custom/gobbo_tema/templates/block/block--block-bloque-creditos.html.twig */
class __TwigTemplate_3cbec1f8122eeb5ea3174a617204c4a6 extends Template
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
        // line 33
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 35))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["plugin_id"] ?? null)))];
        // line 47
        yield "<div style=\"background-image:url(/";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/imagenes/alpha-web-cinta.png); background-repeat:repeat-x; background-size: contain; height: 48px; \"></div>
<hr class=\"hr\"></hr><div class=\"text-center\">
";
        // line 49
        if ((($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 49)), "field_reglas_credito", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 49)), "field_reglas_credito", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), 0, [], "array", false, false, true, 49))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["content"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 49)), "field_reglas_credito", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["content"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 49)), "field_reglas_credito", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49), 0, [], "array", false, false, true, 49)), "title", [], "array", false, false, true, 49))) {
            // line 50
            yield "
\t<a class=\"footer-credito text-center pe-2\" target=\"_blank\" href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = (($_v8 = (($_v9 = ($context["content"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["field_reglas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_reglas_credito", [], "array", false, false, true, 51))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["content"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["field_reglas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_reglas_credito", [], "array", false, false, true, 51)), 0, [], "array", false, false, true, 51))) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = (($_v12 = ($context["content"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["field_reglas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_reglas_credito", [], "array", false, false, true, 51))) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["content"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["field_reglas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_reglas_credito", [], "array", false, false, true, 51)), 0, [], "array", false, false, true, 51)), "#url", [], "array", false, false, true, 51)), "html", null, true);
            yield "\" style=\"text-decoration: none;\">
\t\t";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v14 = (($_v15 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v16 = ($context["content"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 52)), "field_reglas_credito", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v17 = ($context["content"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 52)), "field_reglas_credito", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 0, [], "array", false, false, true, 52))) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v19 = ($context["content"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 52)), "field_reglas_credito", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52)) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v20 = ($context["content"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 52)), "field_reglas_credito", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 0, [], "array", false, false, true, 52)), "title", [], "array", false, false, true, 52)), "html", null, true);
            yield "
\t\t<i class=\"bi bi-arrow-right-short\"></i>
\t</a>
";
        }
        // line 56
        if ((($_v21 = (($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v23 = ($context["content"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 56)), "field_politicas_credito", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56)) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v24 = ($context["content"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 56)), "field_politicas_credito", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56), 0, [], "array", false, false, true, 56))) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v26 = ($context["content"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 56)), "field_politicas_credito", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56)) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v27 = ($context["content"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 56)), "field_politicas_credito", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56), 0, [], "array", false, false, true, 56)), "title", [], "array", false, false, true, 56))) {
            // line 57
            yield "
\t<a class=\"footer-credito text-center pe-2\" target=\"_blank\" href=\"";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v28 = (($_v29 = (($_v30 = ($context["content"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30["field_politicas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_politicas_credito", [], "array", false, false, true, 58))) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v31 = ($context["content"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["field_politicas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_politicas_credito", [], "array", false, false, true, 58)), 0, [], "array", false, false, true, 58))) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v32 = (($_v33 = ($context["content"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33["field_politicas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_politicas_credito", [], "array", false, false, true, 58))) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v34 = ($context["content"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["field_politicas_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_politicas_credito", [], "array", false, false, true, 58)), 0, [], "array", false, false, true, 58)), "#url", [], "array", false, false, true, 58)), "html", null, true);
            yield "\" style=\"text-decoration: none;\">
\t\t";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v35 = (($_v36 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v37 = ($context["content"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess && in_array($_v37::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v37["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 59)), "field_politicas_credito", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59)) && is_array($_v36) || $_v36 instanceof ArrayAccess && in_array($_v36::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v36[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v38 = ($context["content"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess && in_array($_v38::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v38["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 59)), "field_politicas_credito", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 0, [], "array", false, false, true, 59))) && is_array($_v35) || $_v35 instanceof ArrayAccess && in_array($_v35::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v35["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v39 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v40 = ($context["content"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess && in_array($_v40::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v40["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 59)), "field_politicas_credito", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59)) && is_array($_v39) || $_v39 instanceof ArrayAccess && in_array($_v39::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v39[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v41 = ($context["content"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess && in_array($_v41::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v41["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 59)), "field_politicas_credito", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), 0, [], "array", false, false, true, 59)), "title", [], "array", false, false, true, 59)), "html", null, true);
            yield "
\t\t<i class=\"bi bi-arrow-right-short\"></i>
\t</a>
";
        }
        // line 63
        if ((($_v42 = (($_v43 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v44 = ($context["content"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess && in_array($_v44::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v44["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 63)), "field_sitemap_credito", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63)) && is_array($_v43) || $_v43 instanceof ArrayAccess && in_array($_v43::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v43[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v45 = ($context["content"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess && in_array($_v45::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v45["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 63)), "field_sitemap_credito", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 0, [], "array", false, false, true, 63))) && is_array($_v42) || $_v42 instanceof ArrayAccess && in_array($_v42::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v42["title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v46 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v47 = ($context["content"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess && in_array($_v47::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v47["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 63)), "field_sitemap_credito", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63)) && is_array($_v46) || $_v46 instanceof ArrayAccess && in_array($_v46::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v46[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v48 = ($context["content"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess && in_array($_v48::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v48["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 63)), "field_sitemap_credito", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 0, [], "array", false, false, true, 63)), "title", [], "array", false, false, true, 63))) {
            // line 64
            yield "\t<a class=\"footer-credito text-center\" target=\"_blank\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v49 = (($_v50 = (($_v51 = ($context["content"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess && in_array($_v51::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v51["field_sitemap_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_sitemap_credito", [], "array", false, false, true, 64))) && is_array($_v50) || $_v50 instanceof ArrayAccess && in_array($_v50::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v50[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v52 = ($context["content"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess && in_array($_v52::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v52["field_sitemap_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_sitemap_credito", [], "array", false, false, true, 64)), 0, [], "array", false, false, true, 64))) && is_array($_v49) || $_v49 instanceof ArrayAccess && in_array($_v49::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v49["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v53 = (($_v54 = ($context["content"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess && in_array($_v54::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v54["field_sitemap_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_sitemap_credito", [], "array", false, false, true, 64))) && is_array($_v53) || $_v53 instanceof ArrayAccess && in_array($_v53::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v53[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v55 = ($context["content"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess && in_array($_v55::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v55["field_sitemap_credito"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_sitemap_credito", [], "array", false, false, true, 64)), 0, [], "array", false, false, true, 64)), "#url", [], "array", false, false, true, 64)), "html", null, true);
            yield "\" style=\"text-decoration: none;\">Mapa del sítio
\t\t<i class=\"bi bi-arrow-right-short\"></i>
\t</a>
";
        }
        // line 67
        yield "</div>

<!-- Pie de pagina -->
<div id=\"pie-pagina\" class=\"footer-credito text-center mb-3\">
  ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v56 = ($context["content"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess && in_array($_v56::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v56["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 71)), "field_titulo_credito", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71)) {
            // line 72
            yield "\t<a class=\"\" href=\"#\" style=\"text-decoration: none;\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v57 = ($context["content"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess && in_array($_v57::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v57["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 72)), "field_titulo_credito", [], "any", false, false, true, 72), "value", [], "any", false, false, true, 72), "html", null, true);
            yield "</a>
  ";
        }
        // line 74
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "directory", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--block-bloque-creditos.html.twig";
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
        return array (  110 => 74,  104 => 72,  102 => 71,  96 => 67,  88 => 64,  86 => 63,  79 => 59,  75 => 58,  72 => 57,  70 => 56,  63 => 52,  59 => 51,  56 => 50,  54 => 49,  48 => 47,  46 => 36,  45 => 35,  44 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--block-bloque-creditos.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--block-bloque-creditos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 33, "if" => 49];
        static $filters = ["clean_class" => 35, "escape" => 47];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
