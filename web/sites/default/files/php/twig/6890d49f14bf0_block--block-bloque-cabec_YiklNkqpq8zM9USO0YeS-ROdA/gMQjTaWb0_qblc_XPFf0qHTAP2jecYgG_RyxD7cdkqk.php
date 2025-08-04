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

/* themes/custom/gobbo_tema/templates/block/block--block-bloque-cabecera.html.twig */
class __TwigTemplate_d665987a91dc610dd17e08ffb3c9a3d2 extends Template
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
        // line 17
        yield " ";
        // line 19
        yield " <div id=\"cabecera\">  
   <div class=\"container py-4\">
    <div class=\"ocultar-en-movil\">

      <div class=\" row\">
        <div class=\"col-3 col-md-2\">
          ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 25)), "field_cabecera_logo_1", [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "uri", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25)) {
            // line 26
            yield "          <a
            href=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\"
            title=\"";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\"
            rel=\"home\"
            class=\"navbar-brand\"
          >
            <img
              style=\"object-fit: contain\"
              src=\"";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["content"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 34)), "field_cabecera_logo_1", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "uri", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34)), "html", null, true);
            yield "\"
              class=\"d-block w-100 my-2\"
              height=\"140px\"
            />
          </a>
          ";
        }
        // line 40
        yield "        </div>
        <div class=\"col-6 col-md-8\">
    
            <h1>
              ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 44)), "field_cabecera_sigla", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), "html", null, true);
        yield "
            </h1>
            <h4>
              ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["content"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 47)), "field_cabecera_nombre", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), "html", null, true);
        yield "
            </h4>
            <h6>
              ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["content"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 50)), "field_cabecera_lema", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), "html", null, true);
        yield "
            </h6>
         
        </div>
        <div class=\"col-3 col-md-2\">
          ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["content"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 55)), "field_cabecera_logo_2", [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55), "uri", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55)) {
            // line 56
            yield "          <a
            href=\"";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\"
            title=\"";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\"
            rel=\"home\"
            class=\"navbar-brand\"
          >
            <img
              style=\"object-fit: contain\"
              src=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["content"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 64)), "field_cabecera_logo_2", [], "any", false, false, true, 64), "entity", [], "any", false, false, true, 64), "uri", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64)), "html", null, true);
            yield "\"
              class=\"d-block w-100 my-2\"
              height=\"140px\"
            />
          </a>
          ";
        }
        // line 70
        yield "        </div>
      </div>
    </div>
    <div class=\"mostrar-en-movil\">

      <div class=\"row\">
       <div class=\"col-6 col-md-6\">
         ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["content"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 77)), "field_cabecera_logo_1", [], "any", false, false, true, 77), "entity", [], "any", false, false, true, 77), "uri", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77)) {
            // line 78
            yield "         <a
           href=\"";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\"
           title=\"";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\"
           rel=\"home\"
           class=\"navbar-brand\"
         >
           <img
             style=\"object-fit: contain\"
             src=\"";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["content"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 86)), "field_cabecera_logo_1", [], "any", false, false, true, 86), "entity", [], "any", false, false, true, 86), "uri", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86)), "html", null, true);
            yield "\"
             class=\"d-block w-100 my-2\"
             height=\"140px\"
           />
         </a>
         ";
        }
        // line 92
        yield "       </div>
       <div class=\"col-6 col-md-6\">
         ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = ($context["content"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 94)), "field_cabecera_logo_2", [], "any", false, false, true, 94), "entity", [], "any", false, false, true, 94), "uri", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94)) {
            // line 95
            yield "         <a
           href=\"";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\"
           title=\"";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\"
           rel=\"home\"
           class=\"navbar-brand\"
         >
           <img
             style=\"object-fit: contain\"
             src=\"";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["content"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 103)), "field_cabecera_logo_2", [], "any", false, false, true, 103), "entity", [], "any", false, false, true, 103), "uri", [], "any", false, false, true, 103), "value", [], "any", false, false, true, 103)), "html", null, true);
            yield "\"
             class=\"d-block w-100 my-2\"
             height=\"140px\"
           />
         </a>
         ";
        }
        // line 109
        yield "       </div> 
       <div class=\"col-12 col-md-12\">
   
           <h1>
             ";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["content"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 113)), "field_cabecera_sigla", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113), "html", null, true);
        yield "
           </h1>
           <h4>
             ";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = ($context["content"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 116)), "field_cabecera_nombre", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116), "html", null, true);
        yield "
           </h4>
           <h6>
             ";
        // line 119
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["content"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["#block_content"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "#block_content", [], "array", false, false, true, 119)), "field_cabecera_lema", [], "any", false, false, true, 119), "value", [], "any", false, false, true, 119), "html", null, true);
        yield "
           </h6>
        
       </div>
      </div>
    </div>
   </div>
   <div class=\"linea-cabecera m-0 p-0\"></div>
 </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/block/block--block-bloque-cabecera.html.twig";
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
        return array (  219 => 119,  213 => 116,  207 => 113,  201 => 109,  192 => 103,  183 => 97,  179 => 96,  176 => 95,  174 => 94,  170 => 92,  161 => 86,  152 => 80,  148 => 79,  145 => 78,  143 => 77,  134 => 70,  125 => 64,  116 => 58,  112 => 57,  109 => 56,  107 => 55,  99 => 50,  93 => 47,  87 => 44,  81 => 40,  72 => 34,  63 => 28,  59 => 27,  56 => 26,  54 => 25,  46 => 19,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/block/block--block-bloque-cabecera.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/block/block--block-bloque-cabecera.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 25];
        static $filters = ["t" => 28, "escape" => 34];
        static $functions = ["path" => 27, "file_url" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path', 'file_url'],
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
