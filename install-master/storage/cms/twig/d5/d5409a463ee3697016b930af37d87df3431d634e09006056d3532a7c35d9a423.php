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

/* C:\xampp\htdocs\cms\install-master/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_dda561cdf8bcdafba3ecc88f674140f585b78f78df9b7cba64673dfd32e65fa0 extends \Twig\Template
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
        echo "<h1>Contact Us</h1>

<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
  </div>
  <div class=\"form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms\\install-master/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\xampp\\htdocs\\cms\\install-master/themes/responsiv-clean/pages/contact.htm", "");
    }
}
