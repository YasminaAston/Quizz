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

/* @JoseFramework/data_collector/tab/jws/mac_algorithms.html.twig */
class __TwigTemplate_8c05c6eb8f879bab37e552bef2c9b78b3ad6352a23b40045e73c424b3c9b3f5c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/mac_algorithms.html.twig"));

        // line 1
        echo "<h3>Available MAC Algorithms</h3>
<p class=\"help\">
    The following table lists all MAC algorithms available in this environment.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context["macAlgorithms"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "algorithm", [], "any", false, false, false, 14), "algorithms", [], "any", false, false, false, 14);
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["macAlgorithms"] ?? null), "MAC", [], "array", true, true, false, 15)) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["macAlgorithms"]) || array_key_exists("macAlgorithms", $context) ? $context["macAlgorithms"] : (function () { throw new RuntimeError('Variable "macAlgorithms" does not exist.', 16, $this->source); })()), "MAC", [], "array", false, false, false, 16));
            foreach ($context['_seq'] as $context["alias"] => $context["alg"]) {
                // line 17
                echo "            <tr class=\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17)))) {
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), [], "array", false, false, false, 17), "severity", [], "array", false, false, false, 17);
                } else {
                    echo "no-severity";
                }
                echo "\">
                <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 21
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 21), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "getData", [], "method", false, false, false, 21), "algorithm", [], "any", false, false, false, 21), "messages", [], "any", false, false, false, 21)))) {
                    // line 22
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "getData", [], "method", false, false, false, 22), "algorithm", [], "any", false, false, false, 22), "messages", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "message", [], "array", false, false, false, 22);
                    echo "
                    ";
                }
                // line 24
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['alg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        <tr>
            <td colspan=\"3\">There is no MAC algorithm. Did you install a package providing MAC algorithms?</td>
        </tr>
    ";
        }
        // line 32
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/jws/mac_algorithms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  102 => 28,  99 => 27,  91 => 24,  85 => 22,  83 => 21,  78 => 19,  74 => 18,  65 => 17,  60 => 16,  57 => 15,  55 => 14,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Available MAC Algorithms</h3>
<p class=\"help\">
    The following table lists all MAC algorithms available in this environment.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    {% set macAlgorithms = collector.getData().algorithm.algorithms %}
    {% if macAlgorithms['MAC'] is defined %}
        {% for alias, alg in macAlgorithms['MAC'] %}
            <tr class=\"{% if alg.name in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[alg.name]['severity']|raw }}{% else %}no-severity{% endif %}\">
                <td>{{ alg.name }}</td>
                <td>{{ alias }}</td>
                <td>
                    {% if alg.name in collector.getData().algorithm.messages|keys %}
                        {{ collector.getData().algorithm.messages[alg.name]['message']|raw }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">There is no MAC algorithm. Did you install a package providing MAC algorithms?</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/mac_algorithms.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/jws/mac_algorithms.html.twig");
    }
}
