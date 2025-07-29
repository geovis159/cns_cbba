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

/* themes/custom/gobbo_tema/templates/form/fieldset.html.twig */
class __TwigTemplate_c0bbf08cddc7d8ee37ebb5f23ec93496 extends Template
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
        // line 24
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper", ((        // line 29
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 32
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 32), "html", null, true);
        yield ">
  ";
        // line 34
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 36
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 37
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 40
        yield "  ";
        // line 41
        yield "  ";
        // line 44
        yield "  <div class=\"fieldset-wrapper d-flex\">
    ";
        // line 49
        yield "
    ";
        // line 50
        if (($context["errors"] ?? null)) {
            // line 51
            yield "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 55
        yield "    ";
        if (($context["prefix"] ?? null)) {
            // line 56
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 58
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
    ";
        // line 59
        if (($context["suffix"] ?? null)) {
            // line 60
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 62
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 62)) {
            // line 63
            yield "      <small";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 63), "addClass", ["description", "text-muted"], "method", false, false, true, 63), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 63), "html", null, true);
            yield "</small>
    ";
        }
        // line 65
        yield "  </div>
</fieldset>

<script>
//   document.addEventListener(\"DOMContentLoaded\", function () {
//             flatpickr(\"#rangoFecha\", {
//                 mode: \"range\",
//                 dateFormat: \"m/d/Y\",
//                 locale: {
//                     rangeSeparator: \" a \",
//                     firstDayOfWeek: 1
//                 }
//             });
//         });
// </script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["errors", "attributes", "required", "prefix", "children", "suffix", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/form/fieldset.html.twig";
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
        return array (  110 => 65,  102 => 63,  99 => 62,  93 => 60,  91 => 59,  86 => 58,  80 => 56,  77 => 55,  71 => 52,  68 => 51,  66 => 50,  63 => 49,  60 => 44,  58 => 41,  56 => 40,  54 => 37,  53 => 36,  52 => 34,  47 => 32,  45 => 29,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/form/fieldset.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 24, "if" => 50];
        static $filters = ["escape" => 32];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
