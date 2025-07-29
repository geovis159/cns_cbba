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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_footer_central.html.twig */
class __TwigTemplate_244fe274f86a18e48fb6e81f21f97c86 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            yield "
<div style=\"position: relative; width: 100%; height: 100%;\">
    
    <div style=\"position: absolute;top: 0%;right:0%;color: black;pointer-events: none;\">
        
        <img style=\"opacity:0.6;\" height=\"320\" width=\"auto\" src=\"/";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/imagenes/alpha-web-footer.png\" alt=\"Bolivia\">
    </div>
    <div style=\"position: relative; z-index: 1;\" class=\"container\">
        <div class=\"row my-4\">
            <div id=\"divider\">
                <hr>
                <div>
                    <h4>Contacto</h4>
                </div>
            </div>
        </div>
        <!--Grid row-->
        <div class=\"row \">
            <!--Grid column-->
            <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                <h5 class=\"footer-titulo\">
                    ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = $context["row"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 40))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["row"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 40)), "#row", [], "array", false, false, true, 40)), "_entity", [], "any", false, false, true, 40), "field_titulo_footer", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), "html", null, true);
            yield "
                </h5>
                <p>
                    <i class=\"bi bi-geo-alt\"></i> Direcciones: 
                    <a href=\"";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = (($_v5 = $context["row"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 44))) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v6 = $context["row"]) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 44)), "#row", [], "array", false, false, true, 44)), "_entity", [], "any", false, false, true, 44), "field_direcciones_footer", [], "any", false, false, true, 44)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v7 = (($_v8 = $context["row"]) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 44))) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v9 = $context["row"]) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 44)), "#row", [], "array", false, false, true, 44)), "_entity", [], "any", false, false, true, 44), "field_direcciones_footer", [], "any", false, false, true, 44), 0, [], "array", false, false, true, 44)), "getUrl", [], "method", false, false, true, 44), "html", null, true);
            yield "\">
                        ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v11 = (($_v12 = $context["row"]) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 45))) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v13 = $context["row"]) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 45)), "#row", [], "array", false, false, true, 45)), "_entity", [], "any", false, false, true, 45), "field_direcciones_footer", [], "any", false, false, true, 45)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v14 = (($_v15 = $context["row"]) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 45))) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v16 = $context["row"]) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 45)), "#row", [], "array", false, false, true, 45)), "_entity", [], "any", false, false, true, 45), "field_direcciones_footer", [], "any", false, false, true, 45), 0, [], "array", false, false, true, 45)), "title", [], "any", false, false, true, 45), "html", null, true);
            yield "
                        <i class='bi bi-arrow-right'></i>
                    </a>
                </p>
                <p><i class=\"bi bi-telephone-fill\"></i> Teléfono:
                    ";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v17 = (($_v18 = $context["row"]) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 50))) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v19 = $context["row"]) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 50)), "#row", [], "array", false, false, true, 50)), "_entity", [], "any", false, false, true, 50), "field_telefono_footer", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), "html", null, true);
            yield "
                </p>
                <p>
                    <i class=\"bi bi-telephone-fill\"></i> Línea gratuita:
                    ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v20 = (($_v21 = $context["row"]) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 54))) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v22 = $context["row"]) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 54)), "#row", [], "array", false, false, true, 54)), "_entity", [], "any", false, false, true, 54), "field_linea_gratuita_footer", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54), "html", null, true);
            yield "
                </p>
                <p><i class=\"bi bi-envelope\"></i> Correo electrónico:
                    ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v23 = (($_v24 = $context["row"]) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 57))) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v25 = $context["row"]) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 57)), "#row", [], "array", false, false, true, 57)), "_entity", [], "any", false, false, true, 57), "field_correo_electronico_footer", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), "html", null, true);
            yield "
                </p>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class=\"col-lg-6 col-md-12 mt-md-5 mb-3 order-lg-2 text-lg-end\">

                <h5><strong>Encuéntranos en nuestras redes sociales</strong></h5>
                <!-- Right -->
                <div>
                ";
            // line 68
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v26 = (($_v27 = $context["row"]) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 68))) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v28 = $context["row"]) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 68)), "#row", [], "array", false, false, true, 68)), "_entity", [], "any", false, false, true, 68), "field_redes_sociales", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "field_facebook_rrss", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "uri", [], "any", false, false, true, 68)) {
                // line 69
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v29 = (($_v30 = $context["row"]) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 69))) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v31 = $context["row"]) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 69)), "#row", [], "array", false, false, true, 69)), "_entity", [], "any", false, false, true, 69), "field_redes_sociales", [], "any", false, false, true, 69), "entity", [], "any", false, false, true, 69), "field_facebook_rrss", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "uri", [], "any", false, false, true, 69), "html", null, true);
                yield "\" class=\"me-4 text-reset\" target=\"_blank\">
                
                    <svg width=\"32\" height=\"32\" viewbox=\"0 0 54 54\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M26.9999 0.643066C12.3333 0.643066 0.333252 12.6164 0.333252 27.3631C0.333252 40.6964 10.0933 51.7631 22.8399 53.7631V35.0964H16.0666V27.3631H22.8399V21.4697C22.8399 14.7764 26.8133 11.0964 32.9199 11.0964C35.8266 11.0964 38.8666 11.6031 38.8666 11.6031V18.1897H35.5066C32.1999 18.1897 31.1599 20.2431 31.1599 22.3497V27.3631H38.5733L37.3733 35.0964H31.1599V53.7631C37.4438 52.7706 43.1658 49.5644 47.2931 44.7232C51.4203 39.882 53.6809 33.7248 53.6666 27.3631C53.6666 12.6164 41.6666 0.643066 26.9999 0.643066Z\" fill=\"#0D6EFD\"/>
                    </svg>
                </a>
                ";
            }
            // line 76
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v32 = (($_v33 = $context["row"]) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 76))) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v34 = $context["row"]) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 76)), "#row", [], "array", false, false, true, 76)), "_entity", [], "any", false, false, true, 76), "field_redes_sociales", [], "any", false, false, true, 76), "entity", [], "any", false, false, true, 76), "field_youtube_rrss", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 0, [], "any", false, false, true, 76), "uri", [], "any", false, false, true, 76)) {
                // line 77
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v35 = (($_v36 = $context["row"]) && is_array($_v36) || $_v36 instanceof ArrayAccess && in_array($_v36::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v36["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 77))) && is_array($_v35) || $_v35 instanceof ArrayAccess && in_array($_v35::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v35["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v37 = $context["row"]) && is_array($_v37) || $_v37 instanceof ArrayAccess && in_array($_v37::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v37["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 77)), "#row", [], "array", false, false, true, 77)), "_entity", [], "any", false, false, true, 77), "field_redes_sociales", [], "any", false, false, true, 77), "entity", [], "any", false, false, true, 77), "field_youtube_rrss", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 0, [], "any", false, false, true, 77), "uri", [], "any", false, false, true, 77), "html", null, true);
                yield "\" class=\"me-4 text-reset\" target=\"_blank\">
                    <svg width=\"32\" height=\"38\" viewbox=\"0 0 54 38\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M21.6666 27.203L35.5066 19.203L21.6666 11.203V27.203ZM52.4932 6.32304C52.8399 7.57638 53.0799 9.25638 53.2399 11.3897C53.4266 13.523 53.5066 15.363 53.5066 16.963L53.6666 19.203C53.6666 25.043 53.2399 29.3364 52.4932 32.083C51.8266 34.483 50.2799 36.0297 47.8799 36.6964C46.6266 37.043 44.3333 37.283 40.8133 37.443C37.3466 37.6297 34.1733 37.7097 31.2399 37.7097L26.9999 37.8697C15.8266 37.8697 8.86658 37.443 6.11992 36.6964C3.71992 36.0297 2.17325 34.483 1.50659 32.083C1.15992 30.8297 0.919919 29.1497 0.759919 27.0164C0.573252 24.883 0.493252 23.043 0.493252 21.443L0.333252 19.203C0.333252 13.363 0.759919 9.06971 1.50659 6.32304C2.17325 3.92304 3.71992 2.37638 6.11992 1.70971C7.37325 1.36304 9.66658 1.12304 13.1866 0.963043C16.6533 0.776377 19.8266 0.696377 22.7599 0.696377L26.9999 0.536377C38.1732 0.536377 45.1332 0.963044 47.8799 1.70971C50.2799 2.37638 51.8266 3.92304 52.4932 6.32304Z\" fill=\"#DC3545\"/>
                      </svg>                </a>
                ";
            }
            // line 82
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v38 = (($_v39 = $context["row"]) && is_array($_v39) || $_v39 instanceof ArrayAccess && in_array($_v39::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v39["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 82))) && is_array($_v38) || $_v38 instanceof ArrayAccess && in_array($_v38::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v38["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v40 = $context["row"]) && is_array($_v40) || $_v40 instanceof ArrayAccess && in_array($_v40::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v40["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 82)), "#row", [], "array", false, false, true, 82)), "_entity", [], "any", false, false, true, 82), "field_redes_sociales", [], "any", false, false, true, 82), "entity", [], "any", false, false, true, 82), "field_instagram_rrss", [], "any", false, false, true, 82), "value", [], "any", false, false, true, 82), 0, [], "any", false, false, true, 82), "uri", [], "any", false, false, true, 82)) {
                // line 83
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v41 = (($_v42 = $context["row"]) && is_array($_v42) || $_v42 instanceof ArrayAccess && in_array($_v42::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v42["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 83))) && is_array($_v41) || $_v41 instanceof ArrayAccess && in_array($_v41::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v41["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v43 = $context["row"]) && is_array($_v43) || $_v43 instanceof ArrayAccess && in_array($_v43::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v43["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 83)), "#row", [], "array", false, false, true, 83)), "_entity", [], "any", false, false, true, 83), "field_redes_sociales", [], "any", false, false, true, 83), "entity", [], "any", false, false, true, 83), "field_instagram_rrss", [], "any", false, false, true, 83), "value", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83), "uri", [], "any", false, false, true, 83), "html", null, true);
                yield "\" class=\"me-4 text-reset\" target=\"_blank\">
                    <svg width=\"32\" height=\"54\" viewbox=\"0 0 54 54\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M15.7999 0.536377H38.1999C46.7332 0.536377 53.6666 7.46971 53.6666 16.003V38.403C53.6666 42.5051 52.0371 46.4391 49.1365 49.3396C46.2359 52.2402 42.3019 53.8697 38.1999 53.8697H15.7999C7.26659 53.8697 0.333252 46.9364 0.333252 38.403V16.003C0.333252 11.901 1.96277 7.96702 4.86333 5.06646C7.7639 2.1659 11.6979 0.536377 15.7999 0.536377ZM15.2666 5.86971C12.7205 5.86971 10.2787 6.88114 8.47836 8.68149C6.67801 10.4818 5.66658 12.9236 5.66658 15.4697V38.9364C5.66658 44.243 9.95992 48.5364 15.2666 48.5364H38.7332C41.2793 48.5364 43.7211 47.525 45.5215 45.7246C47.3218 43.9243 48.3332 41.4825 48.3332 38.9364V15.4697C48.3332 10.163 44.0399 5.86971 38.7332 5.86971H15.2666ZM40.9999 9.86971C41.884 9.86971 42.7318 10.2209 43.3569 10.846C43.9821 11.4711 44.3332 12.319 44.3332 13.203C44.3332 14.0871 43.9821 14.9349 43.3569 15.5601C42.7318 16.1852 41.884 16.5364 40.9999 16.5364C40.1159 16.5364 39.268 16.1852 38.6429 15.5601C38.0178 14.9349 37.6666 14.0871 37.6666 13.203C37.6666 12.319 38.0178 11.4711 38.6429 10.846C39.268 10.2209 40.1159 9.86971 40.9999 9.86971ZM26.9999 13.8697C30.5361 13.8697 33.9275 15.2745 36.428 17.775C38.9285 20.2754 40.3332 23.6668 40.3332 27.203C40.3332 30.7393 38.9285 34.1306 36.428 36.6311C33.9275 39.1316 30.5361 40.5364 26.9999 40.5364C23.4637 40.5364 20.0723 39.1316 17.5718 36.6311C15.0713 34.1306 13.6666 30.7393 13.6666 27.203C13.6666 23.6668 15.0713 20.2754 17.5718 17.775C20.0723 15.2745 23.4637 13.8697 26.9999 13.8697ZM26.9999 19.203C24.8782 19.203 22.8434 20.0459 21.3431 21.5462C19.8428 23.0465 18.9999 25.0813 18.9999 27.203C18.9999 29.3248 19.8428 31.3596 21.3431 32.8599C22.8434 34.3602 24.8782 35.203 26.9999 35.203C29.1216 35.203 31.1565 34.3602 32.6568 32.8599C34.1571 31.3596 34.9999 29.3248 34.9999 27.203C34.9999 25.0813 34.1571 23.0465 32.6568 21.5462C31.1565 20.0459 29.1216 19.203 26.9999 19.203Z\" fill=\"#6610F2\"/>
                      </svg>                </a>
                ";
            }
            // line 88
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v44 = (($_v45 = $context["row"]) && is_array($_v45) || $_v45 instanceof ArrayAccess && in_array($_v45::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v45["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 88))) && is_array($_v44) || $_v44 instanceof ArrayAccess && in_array($_v44::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v44["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v46 = $context["row"]) && is_array($_v46) || $_v46 instanceof ArrayAccess && in_array($_v46::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v46["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 88)), "#row", [], "array", false, false, true, 88)), "_entity", [], "any", false, false, true, 88), "field_redes_sociales", [], "any", false, false, true, 88), "entity", [], "any", false, false, true, 88), "field_whatsapp_rrss", [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 0, [], "any", false, false, true, 88), "uri", [], "any", false, false, true, 88)) {
                // line 89
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v47 = (($_v48 = $context["row"]) && is_array($_v48) || $_v48 instanceof ArrayAccess && in_array($_v48::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v48["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 89))) && is_array($_v47) || $_v47 instanceof ArrayAccess && in_array($_v47::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v47["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v49 = $context["row"]) && is_array($_v49) || $_v49 instanceof ArrayAccess && in_array($_v49::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v49["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 89)), "#row", [], "array", false, false, true, 89)), "_entity", [], "any", false, false, true, 89), "field_redes_sociales", [], "any", false, false, true, 89), "entity", [], "any", false, false, true, 89), "field_whatsapp_rrss", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89), 0, [], "any", false, false, true, 89), "uri", [], "any", false, false, true, 89), "html", null, true);
                yield "\" class=\"me-4 text-reset\" target=\"_blank\">
                    <svg width=\"32\" height=\"54\" viewbox=\"0 0 54 54\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M27.1066 0.536377C12.5466 0.536377 0.679886 12.403 0.679886 26.963C0.679886 31.6297 1.90655 36.163 4.19989 40.163L0.466553 53.8697L14.4666 50.1897C18.3332 52.2964 22.6799 53.4164 27.1066 53.4164C41.6665 53.4164 53.5332 41.5497 53.5332 26.9897C53.5332 19.923 50.7865 13.283 45.7999 8.29638C40.8132 3.28304 34.1732 0.536377 27.1066 0.536377ZM27.1332 4.98971C32.9999 4.98971 38.4932 7.28304 42.6532 11.443C46.7866 15.603 49.0799 21.123 49.0799 26.9897C49.0799 39.0964 39.2132 48.9364 27.1066 48.9364C23.1599 48.9364 19.2932 47.8964 15.9332 45.8697L15.1332 45.4164L6.81322 47.603L9.02655 39.4964L8.49322 38.643C6.30655 35.203 5.13322 31.123 5.13322 26.963C5.15989 14.8564 14.9999 4.98971 27.1332 4.98971ZM17.7465 14.7497C17.3199 14.7497 16.5999 14.9097 15.9866 15.5764C15.3999 16.243 13.6666 17.8697 13.6666 21.0964C13.6666 24.3497 16.0399 27.4697 16.3332 27.923C16.7066 28.3764 21.0266 35.043 27.6665 37.8697C29.2399 38.5897 30.4666 38.9897 31.4265 39.283C32.9999 39.7897 34.4399 39.7097 35.5866 39.5497C36.8666 39.363 39.4799 37.9497 40.0399 36.403C40.5999 34.8564 40.5999 33.5497 40.4399 33.2564C40.2532 32.9897 39.8265 32.8297 39.1599 32.5364C38.4932 32.163 35.2399 30.563 34.6532 30.3497C34.0399 30.1364 33.6665 30.0297 33.1599 30.6697C32.7332 31.3364 31.4532 32.8297 31.0799 33.2564C30.6799 33.7097 30.3066 33.763 29.6665 33.443C28.9732 33.0964 26.8399 32.403 24.3332 30.163C22.3599 28.403 21.0532 26.243 20.6532 25.5764C20.3332 24.9364 20.6266 24.5364 20.9466 24.243C21.2399 23.9497 21.6666 23.4697 21.9332 23.0697C22.2799 22.6964 22.3866 22.403 22.5999 21.9764C22.8132 21.523 22.7066 21.1497 22.5466 20.8297C22.3866 20.5364 21.0532 17.2297 20.4932 15.923C19.9599 14.643 19.4266 14.803 18.9999 14.7764C18.6266 14.7764 18.1999 14.7497 17.7465 14.7497Z\" fill=\"#28A745\"/>
                      </svg>                </a>
                ";
            }
            // line 94
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v50 = (($_v51 = $context["row"]) && is_array($_v51) || $_v51 instanceof ArrayAccess && in_array($_v51::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v51["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 94))) && is_array($_v50) || $_v50 instanceof ArrayAccess && in_array($_v50::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v50["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v52 = $context["row"]) && is_array($_v52) || $_v52 instanceof ArrayAccess && in_array($_v52::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v52["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 94)), "#row", [], "array", false, false, true, 94)), "_entity", [], "any", false, false, true, 94), "field_redes_sociales", [], "any", false, false, true, 94), "entity", [], "any", false, false, true, 94), "field_x_rrss", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), 0, [], "any", false, false, true, 94), "uri", [], "any", false, false, true, 94)) {
                // line 95
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v53 = (($_v54 = $context["row"]) && is_array($_v54) || $_v54 instanceof ArrayAccess && in_array($_v54::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v54["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 95))) && is_array($_v53) || $_v53 instanceof ArrayAccess && in_array($_v53::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v53["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v55 = $context["row"]) && is_array($_v55) || $_v55 instanceof ArrayAccess && in_array($_v55::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v55["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 95)), "#row", [], "array", false, false, true, 95)), "_entity", [], "any", false, false, true, 95), "field_redes_sociales", [], "any", false, false, true, 95), "entity", [], "any", false, false, true, 95), "field_x_rrss", [], "any", false, false, true, 95), "value", [], "any", false, false, true, 95), 0, [], "any", false, false, true, 95), "uri", [], "any", false, false, true, 95), "html", null, true);
                yield "\" class=\"me-4 text-reset\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"32\" fill=\"currentColor\" class=\"bi bi-twitter-x\" viewBox=\"0 0 16 16\">
                        <path d=\"M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z\"/>
                        </svg>
                </a>
                ";
            }
            // line 101
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v56 = (($_v57 = $context["row"]) && is_array($_v57) || $_v57 instanceof ArrayAccess && in_array($_v57::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v57["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 101))) && is_array($_v56) || $_v56 instanceof ArrayAccess && in_array($_v56::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v56["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v58 = $context["row"]) && is_array($_v58) || $_v58 instanceof ArrayAccess && in_array($_v58::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v58["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 101)), "#row", [], "array", false, false, true, 101)), "_entity", [], "any", false, false, true, 101), "field_redes_sociales", [], "any", false, false, true, 101), "entity", [], "any", false, false, true, 101), "field_tiktok_rrss", [], "any", false, false, true, 101), "value", [], "any", false, false, true, 101), 0, [], "any", false, false, true, 101), "uri", [], "any", false, false, true, 101)) {
                // line 102
                yield "                <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v59 = (($_v60 = $context["row"]) && is_array($_v60) || $_v60 instanceof ArrayAccess && in_array($_v60::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v60["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 102))) && is_array($_v59) || $_v59 instanceof ArrayAccess && in_array($_v59::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v59["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v61 = $context["row"]) && is_array($_v61) || $_v61 instanceof ArrayAccess && in_array($_v61::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v61["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 102)), "#row", [], "array", false, false, true, 102)), "_entity", [], "any", false, false, true, 102), "field_redes_sociales", [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "field_tiktok_rrss", [], "any", false, false, true, 102), "value", [], "any", false, false, true, 102), 0, [], "any", false, false, true, 102), "uri", [], "any", false, false, true, 102), "html", null, true);
                yield "\" class=\"me-4 text-reset\" target=\"_blank\">
                    <svg height=\"32\" viewBox=\"-58.35000000000002 -186.70564362582354 2548.289756960746 2538.849821747569\" width=\"32\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"#25f4ee\"><path d=\"M779.38 890.55v-88.12a650.81 650.81 0 0 0-92.45-7.94c-299.8-.64-565.22 193.64-655.25 479.6S47.92 1871.34 294 2042.56a684.7 684.7 0 0 1 485.36-1152z\"/><path d=\"M796 1888.72c167.62-.23 305.4-132.28 312.74-299.74V94.62h273A512.17 512.17 0 0 1 1373.8 0h-373.41v1492.92c-6.21 168.31-144.32 301.63-312.74 301.9a317.76 317.76 0 0 1-144.45-36.11A313.48 313.48 0 0 0 796 1888.72zM1891.66 601.64v-83.06a509.85 509.85 0 0 1-282.4-85.22 517.79 517.79 0 0 0 282.4 168.28z\"/></g><path d=\"M1609.26 433.36a514.19 514.19 0 0 1-127.84-339.47h-99.68a517.16 517.16 0 0 0 227.52 339.47zM686.93 1167.9a313.46 313.46 0 0 0-144.46 590.81A312.75 312.75 0 0 1 796 1262.51a329.69 329.69 0 0 1 92.44 14.49V897.05a654.77 654.77 0 0 0-92.44-7.22h-16.62v288.9a321.13 321.13 0 0 0-92.45-10.83z\" fill=\"#fe2c55\"/><path d=\"M1891.66 601.64v288.91a886.23 886.23 0 0 1-517.86-168.29v759.1c-.8 378.78-308.09 685.43-686.87 685.43A679.65 679.65 0 0 1 294 2042.56 685.43 685.43 0 0 0 1481.42 1576V819.05A887.71 887.71 0 0 0 2000 985.17v-372a529.59 529.59 0 0 1-108.34-11.53z\" fill=\"#fe2c55\"/><path d=\"M1373.8 1481.36v-759.1a886.11 886.11 0 0 0 518.58 166.12v-288.9a517.87 517.87 0 0 1-283.12-166.12 517.16 517.16 0 0 1-227.52-339.47h-273V1589a313.46 313.46 0 0 1-567 171.17 313.46 313.46 0 0 1 144.46-590.83 321.35 321.35 0 0 1 92.45 14.45V894.88A684.71 684.71 0 0 0 293.29 2050.5a679.65 679.65 0 0 0 393.64 116.29c378.78 0 686.07-306.65 686.87-685.43z\"/></svg>
                </a>
                ";
            }
            // line 106
            yield "  
                </div>
                <!-- Right -->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    
        <div id=\"logo-container\" class=\"text-center\">
            <!-- <img style=\"width: 166px; height: 83px; object-fit: contain;\" src=\"<?php echo esc_html(\$logo_central); ?>\" alt=\"Logo\" class=\"img-fluid\" width=\"250\" height=\"150\"> -->
            <img style=\"width: 166px; height: 83px; object-fit: contain;\" src=\"";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v62 = (($_v63 = $context["row"]) && is_array($_v63) || $_v63 instanceof ArrayAccess && in_array($_v63::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v63["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 116))) && is_array($_v62) || $_v62 instanceof ArrayAccess && in_array($_v62::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v62["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v64 = $context["row"]) && is_array($_v64) || $_v64 instanceof ArrayAccess && in_array($_v64::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v64["content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "array", false, false, true, 116)), "#row", [], "array", false, false, true, 116)), "_entity", [], "any", false, false, true, 116), "field_logo_central_footer", [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "uri", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116)), "html", null, true);
            yield "\" alt=\"Logo\" class=\"img-fluid\" width=\"250\" height=\"150\">
        </div> 
    </div>
</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_footer_central.html.twig";
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
        return array (  205 => 116,  193 => 106,  185 => 102,  182 => 101,  172 => 95,  169 => 94,  160 => 89,  157 => 88,  148 => 83,  145 => 82,  136 => 77,  133 => 76,  122 => 69,  120 => 68,  106 => 57,  100 => 54,  93 => 50,  85 => 45,  81 => 44,  74 => 40,  55 => 24,  48 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_footer_central.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque_footer_central.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 18, "if" => 68];
        static $filters = ["escape" => 24];
        static $functions = ["file_url" => 116];

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
