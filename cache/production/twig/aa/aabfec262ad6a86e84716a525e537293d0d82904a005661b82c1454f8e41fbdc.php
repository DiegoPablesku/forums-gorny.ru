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

/* topic_notify.txt */
class __TwigTemplate_0dac2fe261097b11d2a8dc8705b7fb63ebb05e6f0e0fc4acf9df24b2e6f328c0 extends \Twig\Template
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
        echo "Subject: Reply in \"";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "\"
List-Unsubscribe: <";
        // line 2
        echo ($context["U_STOP_WATCHING_TOPIC"] ?? null);
        echo ">

Hello ";
        // line 4
        echo ($context["USERNAME"] ?? null);
        echo ",

The topic \"";
        // line 6
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "\" received a new reply";
        if ((($context["AUTHOR_NAME"] ?? null) != "")) {
            echo " by ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo " since your last visit to \"";
        echo ($context["SITENAME"] ?? null);
        echo "\". No more emails will be sent until you visit the topic.

If you want to view the newest post click the following link:
";
        // line 9
        echo ($context["U_NEWEST_POST"] ?? null);
        echo "

If you want to view the topic, click the following link:
";
        // line 12
        echo ($context["U_TOPIC"] ?? null);
        echo "

If you want to view the forum, click the following link:
";
        // line 15
        echo ($context["U_FORUM"] ?? null);
        echo "

If you no longer wish to watch this topic click the following link:
";
        // line 18
        echo ($context["U_STOP_WATCHING_TOPIC"] ?? null);
        echo "

";
        // line 20
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  83 => 18,  77 => 15,  71 => 12,  65 => 9,  52 => 6,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "topic_notify.txt", "");
    }
}
