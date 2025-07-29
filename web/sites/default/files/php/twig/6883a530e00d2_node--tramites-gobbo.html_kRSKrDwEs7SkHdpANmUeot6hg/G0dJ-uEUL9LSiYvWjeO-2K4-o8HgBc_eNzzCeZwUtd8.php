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

/* themes/custom/gobbo_tema/templates/content/node--tramites-gobbo.html.twig */
class __TwigTemplate_63df40ee05000c57fe43dd6481470c3e extends Template
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
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        yield "

<article";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 64), "html", null, true);
        yield ">

  <div class=\"row pt-4 pb-0 mb-0\">
    <div class='col-sm-8 '>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\">Inicio</a>
          </li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">
            ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), "html", null, true);
        yield "
            ";
        // line 76
        yield "          </li>

        </ol>
      </nav>
    </div>
  </div>

  <section style=\"z-index: 3;\" id=\"actualizacion-tramite\">
    <div style=\"z-index: 4;\" class=\"container py-4 texto-descripcion-sitio\">
      <div class=\"row\">
        <div class=\"col-12 col-md-12\">
          <iframe id='myIframe' style=\"border-radius: 20px; border:none; z-index: 5; overflow: auto; width: 100%; \"
            src=\"";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url_tramite"] ?? null), "html", null, true);
        yield "\">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  </article>


  <script>
    var url = JSON.parse(\"";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, json_encode(($context["url_tramite"] ?? null)), "js"), "html", null, true);
        yield "\");
    //console.log('OSO url.......', url);
    const themeToggle = document.getElementById('theme-switcher-button');
    var iframe = document.getElementById('myIframe');
    var userTheme = localStorage.getItem('theme');
    cambiar_tema_iframe(userTheme);
    themeToggle.addEventListener('click', function () {
      userTheme = localStorage.getItem('theme');
      cambiar_tema_iframe(userTheme == 'dark' ? 'light' : 'dark');

    })

    function cambiar_tema_iframe(theme) {
      // console.log('OSO Theme:', theme)
      iframe.setAttribute('src', url + '?theme=' + theme);
    }
  </script>
  <script>
    var base_url = url.toString().split('.bo')[0] + '.bo';
    window.addEventListener('message', (event) => {
      // // Asegúrate de validar el origen del mensaje
      console.log('OSO BASE URL', base_url)
      if (event.origin !== base_url) {
        return;
      }
      console.log('OSO EVENTOS Mensaje', event.data);

      // Procesa el mensaje recibido
      if (event.data.type === 'setHeight' ) {
        // const iframe = document.getElementById('myIframe');
        // console.log('IFRAME', iframe);
        iframe.style.height = event.data.valor + 'px';
      }
    });

  </script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "classes", "node", "url_tramite"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/content/node--tramites-gobbo.html.twig";
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
        return array (  97 => 99,  83 => 88,  69 => 76,  65 => 74,  59 => 71,  49 => 64,  44 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/content/node--tramites-gobbo.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/content/node--tramites-gobbo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 62, "e" => 99, "json_encode" => 99];
        static $functions = ["attach_library" => 62, "url" => 71];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'e', 'json_encode'],
                ['attach_library', 'url'],
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
