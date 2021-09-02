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

/* @JoseFramework/data_collector/tab/header_checker.html.twig */
class __TwigTemplate_492bf28f2d5d104c4b75ce7102cbff49cea27f1e4515209d9bf0984d65fc5fdd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/header_checker.html.twig"));

        // line 1
        echo "<div class=\"tab\">
    <h2 class=\"tab-title\">Header Checkers</h2>
    <div class=\"tab-content\">
        ";
        // line 4
        $this->loadTemplate("@JoseFramework/data_collector/tab/header_checker/managers.html.twig", "@JoseFramework/data_collector/tab/header_checker.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/header_checker/checkers.html.twig", "@JoseFramework/data_collector/tab/header_checker.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/header_checker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <h2 class=\"tab-title\">Header Checkers</h2>
    <div class=\"tab-content\">
        {% include '@JoseFramework/data_collector/tab/header_checker/managers.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/header_checker/checkers.html.twig' %}
    </div>
</div>
", "@JoseFramework/data_collector/tab/header_checker.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/header_checker.html.twig");
    }
}
