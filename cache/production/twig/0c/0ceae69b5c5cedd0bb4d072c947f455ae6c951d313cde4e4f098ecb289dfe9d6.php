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
class __TwigTemplate_bd13ee6cc55180392b947549a1762b7343b47556abc9b6e99f3073062900cbbe extends \Twig\Template
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
        echo "Subject: Уведомление об ответе — «";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "»
List-Unsubscribe: <";
        // line 2
        echo ($context["U_STOP_WATCHING_TOPIC"] ?? null);
        echo ">

Здравствуйте, ";
        // line 4
        echo ($context["USERNAME"] ?? null);
        echo "!

Вы получили это сообщение потому, что следите за темой «";
        // line 6
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "» на конференции «";
        echo ($context["SITENAME"] ?? null);
        echo "». В этой теме со времени вашего последнего посещения появилось новое сообщение";
        if ((($context["AUTHOR_NAME"] ?? null) !== "")) {
            echo ", оставленное пользователем ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo ". Новые уведомления не будут приходить, пока вы не просмотрите тему.

Если вы хотите просмотреть самое новое сообщение с момента вашего последнего посещения, перейдите по следующей ссылке:
";
        // line 9
        echo ($context["U_NEWEST_POST"] ?? null);
        echo "

Если вы хотите просмотреть всю тему, перейдите по следующей ссылке:
";
        // line 12
        echo ($context["U_TOPIC"] ?? null);
        echo "

Если вы хотите просмотреть форум, перейдите по следующей ссылке:
";
        // line 15
        echo ($context["U_FORUM"] ?? null);
        echo "

Если вы больше не хотите следить за темой, то либо щёлкните по находящейся в ней ссылке «Отписаться от темы», либо перейдите по следующей ссылке:
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
