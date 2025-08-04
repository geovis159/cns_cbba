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

/* themes/custom/gobbo_tema/templates/block/block--bloque-modal-gobbo.html.twig */
class __TwigTemplate_43e52a29a53f3269bd6845aa0e3d0084 extends Template
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
        yield "
    <!-- Modal -->
    ";
        // line 37
        yield "        <div id=\"comunicado\">

            <div class=\"modal fade \" id=\"modalBienvenida\" tabindex=\"-1\">
                <div class=\"modal-dialog modal-lg modal-dialog-centered \">
                    <div class=\"modal-content fondo-default\">
                        ";
        // line 42
        if (($context["titulo_modal"] ?? null)) {
            // line 43
            yield "                        <div class=\"modal-header py-2\">
                            <h1 class=\"modal-title fs-5\" id=\"modalBienvenidaLabel\">";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["titulo_modal"] ?? null), "html", null, true);
            yield "</h1>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        ";
        }
        // line 48
        yield "                        <div class=\"modal-body p-1\">
                            ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["contenido_modal"] ?? null));
        yield "
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "titulo_modal", "contenido_modal"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--bloque-modal-gobbo.html.twig";
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
        return array (  72 => 49,  69 => 48,  62 => 44,  59 => 43,  57 => 42,  50 => 37,  46 => 34,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--bloque-modal-gobbo.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--bloque-modal-gobbo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 32, "if" => 42];
        static $filters = ["clean_class" => 32, "escape" => 44, "raw" => 49];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
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
