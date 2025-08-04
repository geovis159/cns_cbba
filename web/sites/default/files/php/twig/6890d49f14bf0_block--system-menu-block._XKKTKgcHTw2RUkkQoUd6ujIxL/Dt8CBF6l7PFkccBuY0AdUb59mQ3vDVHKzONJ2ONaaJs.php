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

/* themes/custom/gobbo_tema/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_4b8a5bafce75b84b2b07ec721003d5da extends Template
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
        // line 22
        yield "
<nav class=\"navbar navbar-expand-lg  pt-0 pb-0 fondo-nivel-0\">
\t<div class=\"container-fluid\">
    ";
        // line 28
        yield "\t\t<div class=\"offcanvas offcanvas-start fondo-nivel-0\" tabindex=\"-1\" id=\"main-menu\" aria-labelledby=\"offcanvasNavbarLabel\">
\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t<a href=\"";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\" style=\"text-decoration: none;\" id=\"theme-toggle\" class=\"btn\">
\t\t\t\t\t<i class=\" icono-color bi bi-house-door-fill\"></i>
\t\t\t\t</a>

\t\t\t\t<button class='btn' class=\"icono-color\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\">
\t\t\t\t\t<i class=\" icono-color bi bi-x-lg\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"offcanvas-body \" id=\"main-menu\">
\t\t\t\t";
        // line 41
        yield "\t\t\t\t";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 44
        yield "\t\t\t</div>
\t\t</div>

\t</div>
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "\t\t\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
\t\t\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--system-menu-block.html.twig";
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
        return array (  88 => 42,  81 => 41,  70 => 44,  67 => 41,  54 => 30,  50 => 28,  45 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--system-menu-block.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 41];
        static $filters = ["escape" => 42];
        static $functions = ["url" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
