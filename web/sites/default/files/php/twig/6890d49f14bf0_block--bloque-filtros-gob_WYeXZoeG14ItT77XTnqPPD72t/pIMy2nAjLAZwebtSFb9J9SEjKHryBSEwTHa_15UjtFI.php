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

/* themes/custom/gobbo_tema/templates/block/block--bloque-filtros-gobbo.html.twig */
class __TwigTemplate_6f6e3e0bee489057531d6de39e778547 extends Template
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
        // line 32
        yield "<div class=\"container px-4 pt-2\">
\t<div class=\"row justify-content-end\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"d-flex flex-row justify-content-end \">
\t\t\t\t<button id=\"theme-switcher-button\" class=\"btn\">
\t\t\t\t\t<i id=\"icono-tema\" class=\"icono-color bi\"></i>
\t\t\t\t</button>
\t\t\t\t<div class='mostrar-en-movil'>
                    <button id=\"button-buscar\" class=\"btn btn-search\"><i id=\"icono-tema\" class=\" icono-color bi bi-search\"></i></button>
                </div>
\t\t\t\t<div class=\"mostrar-en-movil\">
\t\t\t\t\t<form id=\"form-buscar\" role=\"search\" method=\"get\" class=\"form-inline\" action=\"/search/node\">
\t\t\t\t\t\t<div style=\"border-radius: 7px;\" class=\"input-group border border-1\">
\t\t\t\t\t\t\t<input type=\"search\" value name=\"keys\" data-drupal-selector=\"edit-keys\" class=\"fondo-default form-control border border-0 texto-default\" placeholder=\"Buscar...\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<button  class=\"btn btn-outline-white my-0 border-0\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"icono-color bi bi-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"mostrar-en-movil\">

\t\t\t\t\t<button class=\"btn\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#main-menu\" aria-controls=\"main-menu\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"icono-color bi bi-list\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"ocultar-en-movil ms-3\">
\t\t\t\t\t<form role=\"search\" method=\"get\" class=\"form-inline\" action=\"/search/node\">
\t\t\t\t\t\t<div style=\"border-radius: 5px;\" class=\"input-group border border-1\">
\t\t\t\t\t\t\t<input type=\"search\" value name=\"keys\" data-drupal-selector=\"edit-keys\" class=\"fondo-default form-control border border-0 texto-default\" placeholder=\"Buscar...\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<button  class=\"btn btn-outline-white my-0 border-0\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"icono-color bi bi-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\tconst search = document.querySelector(\"#form-buscar\");
const formBuscar = document.getElementById(\"form-buscar\");
const input = search.querySelector(\"input\");
formBuscar.style.display = \"none\";
const buscarBtn = document.querySelector(\"#button-buscar\");
const buscarBtnElement = document.getElementById(\"button-buscar\");
buscarBtn.addEventListener(\"click\", () => {
  console.log(\"Click en Btn search\");
  formBuscar.style.display = \"block\";
  buscarBtnElement.style.display = \"none\";
  input.focus();
});

</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--bloque-filtros-gobbo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--bloque-filtros-gobbo.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--bloque-filtros-gobbo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
