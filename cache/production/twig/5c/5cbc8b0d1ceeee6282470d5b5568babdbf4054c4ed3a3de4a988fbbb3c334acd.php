<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @ovelissimo_yametrika/event/overall_footer_body_after.html */
class __TwigTemplate_457a12f76a8d6b155eed6fa9604d493dbfea6f7b784aa13b1745bcf654ad168c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["YAMETRIKA_ID"] ?? null)) {
            // line 2
            echo "
<!-- Yandex.Metrika counter -->
<script type=\"text/javascript\" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

   ym(";
            // line 11
            echo ($context["YAMETRIKA_ID"] ?? null);
            echo ", \"init\", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>

<noscript>
    <div><img src=\"https://mc.yandex.ru/watch/";
            // line 20
            echo ($context["YAMETRIKA_ID"] ?? null);
            echo "\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

";
        }
    }

    public function getTemplateName()
    {
        return "@ovelissimo_yametrika/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ovelissimo_yametrika/event/overall_footer_body_after.html", "");
    }
}
