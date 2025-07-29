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

/* themes/custom/gobbo_tema/templates/form/select.html.twig */
class __TwigTemplate_21190b91cba21067cfd24694f5fd4905 extends Template
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
        // line 14
        $context["classes"] = ["form-select", "fondo-default", "texto-default"];
        // line 20
        yield "
";
        // line 21
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "  <select";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), "html", null, true);
            yield ">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 24
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 24) == "optgroup")) {
                    // line 25
                    yield "        <optgroup label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 25), "html", null, true);
                    yield "\">
          ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                        // line 27
                        yield "            <option value=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 27), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 27)) ? (" selected=\"selected\"") : ("")));
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 27), "html", null, true);
                        yield "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['sub_option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    yield "        </optgroup>
      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 30
$context["option"], "type", [], "any", false, false, true, 30) == "option")) {
                    // line 31
                    yield "        <option value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 31), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 31)) ? (" selected=\"selected\"") : ("")));
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 31), "html", null, true);
                    yield "</option>
      ";
                }
                // line 33
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "  </select>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/form/select.html.twig";
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
        return array (  111 => 21,  106 => 34,  100 => 33,  90 => 31,  88 => 30,  85 => 29,  72 => 27,  68 => 26,  63 => 25,  60 => 24,  56 => 23,  51 => 22,  49 => 21,  46 => 20,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/form/select.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/form/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "apply" => 21, "for" => 23, "if" => 24];
        static $filters = ["escape" => 22, "spaceless" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'for', 'if'],
                ['escape', 'spaceless'],
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
