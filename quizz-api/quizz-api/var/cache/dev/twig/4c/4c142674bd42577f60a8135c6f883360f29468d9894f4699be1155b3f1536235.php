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

/* @JoseFramework/data_collector/tab/jwe/loaders.html.twig */
class __TwigTemplate_9f94e9f698792edbd417ce533207441123ea345a770efac76d4a323e8f5cc47f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/loaders.html.twig"));

        // line 1
        echo "<h3>JWE Loaders</h3>
<p class=\"help\">
    The following table lists all JWE Loaders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Loaders directly created through the JWE Loader Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Serializers</th>
        <th>Key Encryption Algorithms</th>
        <th>Content Encryption Algorithms</th>
        <th>Compression Methods</th>
        <th>Header Checkers</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "getData", [], "method", false, false, false, 19), "jwe", [], "any", false, false, false, 19), "jwe_loaders", [], "any", false, false, false, 19))) {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "getData", [], "method", false, false, false, 20), "jwe", [], "any", false, false, false, 20), "jwe_loaders", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "serializers", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["serializer"]) {
                    // line 26
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["serializer"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serializer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "key_encryption_algorithms", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 33
                    echo "                            <li class=\"";
                    if (twig_in_filter($context["algorithm"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "getData", [], "method", false, false, false, 33), "algorithm", [], "any", false, false, false, 33), "messages", [], "any", false, false, false, 33)))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "getData", [], "method", false, false, false, 33), "algorithm", [], "any", false, false, false, 33), "messages", [], "any", false, false, false, 33), $context["algorithm"], [], "array", false, false, false, 33), "severity", [], "array", false, false, false, 33), "html", null, true);
                    } else {
                        echo "no-severity";
                    }
                    echo "\">
                                ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["algorithm"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "content_encryption_algorithms", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 42
                    echo "                            <li class=\"";
                    if (twig_in_filter($context["algorithm"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "getData", [], "method", false, false, false, 42), "algorithm", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42)))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "getData", [], "method", false, false, false, 42), "algorithm", [], "any", false, false, false, 42), "messages", [], "any", false, false, false, 42), $context["algorithm"], [], "array", false, false, false, 42), "severity", [], "array", false, false, false, 42), "html", null, true);
                    } else {
                        echo "no-severity";
                    }
                    echo "\">
                                ";
                    // line 43
                    echo twig_escape_filter($this->env, $context["algorithm"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "compression_methods", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 51
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                    </ul>
                </td>
                <td>
                    ---
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    ";
        } else {
            // line 61
            echo "        <tr>
            <td colspan=\"4\">There is no JWE Loader</td>
        </tr>
    ";
        }
        // line 65
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/jwe/loaders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  179 => 61,  176 => 60,  164 => 53,  155 => 51,  151 => 50,  145 => 46,  136 => 43,  127 => 42,  123 => 41,  117 => 37,  108 => 34,  99 => 33,  95 => 32,  89 => 28,  80 => 26,  76 => 25,  70 => 22,  67 => 21,  62 => 20,  60 => 19,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWE Loaders</h3>
<p class=\"help\">
    The following table lists all JWE Loaders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Loaders directly created through the JWE Loader Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Serializers</th>
        <th>Key Encryption Algorithms</th>
        <th>Content Encryption Algorithms</th>
        <th>Compression Methods</th>
        <th>Header Checkers</th>
    </tr>
    </thead>
    <tbody>
    {%  if not collector.getData().jwe.jwe_loaders is empty %}
        {% for id, data in collector.getData().jwe.jwe_loaders %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for serializer in data.serializers %}
                            <li>{{ serializer }}</li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for algorithm in data.key_encryption_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for algorithm in data.content_encryption_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for method in data.compression_methods %}
                            <li>{{ method }}</li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    ---
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"4\">There is no JWE Loader</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/loaders.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/jwe/loaders.html.twig");
    }
}
