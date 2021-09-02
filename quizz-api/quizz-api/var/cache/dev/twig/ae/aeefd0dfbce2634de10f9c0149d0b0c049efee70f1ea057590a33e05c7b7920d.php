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

/* @JoseFramework/data_collector/tab/jws.html.twig */
class __TwigTemplate_499a2cbbd2d7e5351b6d2b9bfadf2a0b54b013d96bde1255ffff1ae54ae3dbdb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws.html.twig"));

        // line 1
        echo "<div class=\"tab\">
    <h2 class=\"tab-title\">JWS</h2>
    <div class=\"tab-content\">
        ";
        // line 4
        $this->loadTemplate("@JoseFramework/data_collector/tab/jws/builders.html.twig", "@JoseFramework/data_collector/tab/jws.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jws/verifiers.html.twig", "@JoseFramework/data_collector/tab/jws.html.twig", 5)->display($context);
        // line 6
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jws/loaders.html.twig", "@JoseFramework/data_collector/tab/jws.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig", "@JoseFramework/data_collector/tab/jws.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jws/mac_algorithms.html.twig", "@JoseFramework/data_collector/tab/jws.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jws/serialization_modes.html.twig", "@JoseFramework/data_collector/tab/jws.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/jws.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <h2 class=\"tab-title\">JWS</h2>
    <div class=\"tab-content\">
        {% include '@JoseFramework/data_collector/tab/jws/builders.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jws/verifiers.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jws/loaders.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jws/signature_algorithms.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jws/mac_algorithms.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jws/serialization_modes.html.twig' %}
    </div>
</div>
", "@JoseFramework/data_collector/tab/jws.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/jws.html.twig");
    }
}
