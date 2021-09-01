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

/* @JoseFramework/data_collector/tab/jws/serialization_modes.html.twig */
class __TwigTemplate_e7f830e7f73b68e527a00b5dc37a9cbb2f80ccf046d4b1f38d873320f89a0261 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/serialization_modes.html.twig"));

        // line 1
        echo "<h3>Serialization Modes</h3>
<p class=\"help\">
    The serialization modes are used to convert a JWS object into a JSON object.<br>
    The JWS Compact serialization mode is the most common as it allows tokens to be used in a web context.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "jws", [], "any", false, false, false, 14), "jws_serialization", [], "any", false, false, false, 14))) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "jws", [], "any", false, false, false, 15), "jws_serialization", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["alias"] => $context["name"]) {
                // line 16
                echo "            <tr>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        <tr>
            <td colspan=\"2\">There is no serialization modes. Did you install \"web-token/jwt-signature\"?</td>
        </tr>
    ";
        }
        // line 26
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/jws/serialization_modes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  81 => 22,  78 => 21,  69 => 18,  65 => 17,  62 => 16,  57 => 15,  55 => 14,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Serialization Modes</h3>
<p class=\"help\">
    The serialization modes are used to convert a JWS object into a JSON object.<br>
    The JWS Compact serialization mode is the most common as it allows tokens to be used in a web context.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().jws.jws_serialization is empty %}
        {% for alias, name in collector.getData().jws.jws_serialization %}
            <tr>
                <td>{{ name }}</td>
                <td>{{ alias }}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"2\">There is no serialization modes. Did you install \"web-token/jwt-signature\"?</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/serialization_modes.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/jws/serialization_modes.html.twig");
    }
}
