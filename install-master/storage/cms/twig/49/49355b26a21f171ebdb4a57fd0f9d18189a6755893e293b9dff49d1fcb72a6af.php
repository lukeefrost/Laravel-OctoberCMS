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

/* C:\xampp\htdocs\cms\install-master/themes/luke/pages/about.htm */
class __TwigTemplate_4c0738502ba3f618fc8c12711f079af8fbc88be5541a0d7119b955c027abdc13 extends \Twig\Template
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
        echo "<h1>About</h1>
<p>This is the about page</p>
<hr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms\\install-master/themes/luke/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\xampp\\htdocs\\cms\\install-master/themes/luke/pages/about.htm", "");
    }
}
