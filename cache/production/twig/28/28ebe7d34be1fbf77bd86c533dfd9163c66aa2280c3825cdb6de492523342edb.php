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

/* @phpbb_boardannouncements/event/overall_header_content_before.html */
class __TwigTemplate_8a3d298b152d29da9211663d4a46ee7d1ea860966cdcb8c7a55c3a8d75f326fd extends \Twig\Template
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
        if (($context["S_BOARD_ANNOUNCEMENT"] ?? null)) {
            // line 2
            echo "\t";
            $asset_file = "@phpbb_boardannouncements/boardannouncements.css";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_stylesheet($asset);            // line 3
            echo "\t";
            $asset_file = "@phpbb_boardannouncements/js/boardannouncements.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 4
            echo "\t<div id=\"phpbb_announcement\" class=\"phpbb_announcement\"";
            if (($context["BOARD_ANNOUNCEMENT_BGCOLOR"] ?? null)) {
                echo " style=\"background-color:#";
                echo ($context["BOARD_ANNOUNCEMENT_BGCOLOR"] ?? null);
                echo "\"";
            }
            echo ">
\t\t";
            // line 5
            if (($context["S_BOARD_ANNOUNCEMENT_DISMISS"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_BOARD_ANNOUNCEMENT_CLOSE"] ?? null);
                echo "\" data-ajax=\"close_announcement\" data-overlay=\"false\" class=\"close clearfix\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENT_CLOSE");
                echo "\"><i class=\"icon fa-fw fa-times\"></i></a>";
            }
            // line 6
            echo "\t\t<div>";
            echo ($context["BOARD_ANNOUNCEMENT"] ?? null);
            echo "</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_boardannouncements/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 6,  78 => 5,  69 => 4,  54 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_boardannouncements/event/overall_header_content_before.html", "");
    }
}
