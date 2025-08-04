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

/* themes/custom/gobbo_tema/templates/block/block--bloque-marca-gobbo.html.twig */
class __TwigTemplate_5bc00ddfc8f6bff5c7f3a705e01398f0 extends Template
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
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "provider", [], "any", false, false, true, 32))), ("block-" . \Drupal\Component\Utility\Html::getClass(($context["plugin_id"] ?? null)))];
        // line 34
        yield "<div id=\"marca-gobbo\">
    <div class=\"fondo-descripcion d-flex justify-content-left\">
        <div class=\"container\">
            <a class='btn btn-link py-0 px-1' type=\"button\" data-bs-toggle=\"collapse\" style=\"text-decoration: none;\"
            data-bs-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
            <img class=\"pe-2\" height=\"16px\" src=\"/";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/imagenes/bandera.png\" />
            <span class=\"texto\">Sitio oficial del Estado Plurinacional de Bolivia</span>
                <i class=\"color bi bi-info-circle\"></i>
           </a>
        </div>
    </div>
    <div class=\"collapse fondo-descripcion\" id=\"collapseExample\">
        <div class=\"container \">
            <a type=\"button\" data-bs-toggle=\"collapse\" style=\"text-decoration: none;\"
            data-bs-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
            <div class=\"row \">

                <div class=\"col d-flex\">
                    <div class=\"p-1\">
                        <i class=\"color bi bi-buildings\" style=\"font-size: 3em;\"></i>
                    </div>
                    <div class=\"p-2\">
                        <small class=\"texto\">
                            <b>Uso de .gob.bo</b>
                            <p>
                                Los portales oficiales del Estado Plurinacional de Bolivia <br>
                                emplean el dominio .gob.bo de forma exclusiva.
                            </p>
                        </small>
                    </div>
                </div>
                <div class=\"col d-flex\">
                    <div class=\"p-1\">
                        <i class=\"color bi bi-lock\" style=\"font-size: 3em;\"></i>
                    </div>
                    <div class=\"p-2\">
                        <small class=\"texto\">
                            <b>Uso de https://</b>
                            <p>
                                Los portales oficiales incorporan en sus direcciones el protocolo
                                https:// y/o
                                muestran un candado en la barra de direccion del navegador. <br>
                                Esto significa que estás conectado a un dominio .gob.bo de manera
                                segura.
                                <br>
                                <br>
                                Se sugiere compartir información sensible únicamnete con
                                portales oficiales asegurados.
                            </p>
                        </small>
                    </div>
                </div>
            </div>
        </a>
        </div>
    </div>
    
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--bloque-marca-gobbo.html.twig";
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
        return array (  53 => 39,  46 => 34,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--bloque-marca-gobbo.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--bloque-marca-gobbo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 32];
        static $filters = ["clean_class" => 32, "escape" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
