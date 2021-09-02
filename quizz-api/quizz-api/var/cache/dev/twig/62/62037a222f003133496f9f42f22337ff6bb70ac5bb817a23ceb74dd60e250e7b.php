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

/* @JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig */
class __TwigTemplate_92d2a7aa8efdbfeccd094e3be93951d3c534b2e09737fb6706bc063548a9202b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig"));

        // line 1
        echo "<h3>Available Key Encryption Algorithms</h3>
<p class=\"help\">
    The following table lists all key encryption algorithms available in this environment.
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
        $context["encryptionAlgorithms"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "algorithm", [], "any", false, false, false, 14), "algorithms", [], "any", false, false, false, 14);
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["encryptionAlgorithms"] ?? null), "Key Encryption", [], "array", true, true, false, 15)) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["encryptionAlgorithms"]) || array_key_exists("encryptionAlgorithms", $context) ? $context["encryptionAlgorithms"] : (function () { throw new RuntimeError('Variable "encryptionAlgorithms" does not exist.', 16, $this->source); })()), "Key Encryption", [], "array", false, false, false, 16));
            foreach ($context['_seq'] as $context["alias"] => $context["alg"]) {
                // line 17
                echo "            <tr class=\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17)))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), [], "array", false, false, false, 17), "severity", [], "array", false, false, false, 17), "html", null, true);
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
            <td colspan=\"3\">
                No algorithm. Please consider the installation of the following packages or create your own algorithm:
                <ul>
                    <li>web-token/jwt-encryption-algorithm-aesgcmkw</li>
                    <li>web-token/jwt-encryption-algorithm-aeskw</li>
                    <li>web-token/jwt-encryption-algorithm-dir</li>
                    <li>web-token/jwt-encryption-algorithm-ecdh-es</li>
                    <li>web-token/jwt-encryption-algorithm-pbes2</li>
                    <li>web-token/jwt-encryption-algorithm-rsa</li>
                </ul>
            </td>
        </tr>
    ";
        }
        // line 42
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  102 => 28,  99 => 27,  91 => 24,  85 => 22,  83 => 21,  78 => 19,  74 => 18,  65 => 17,  60 => 16,  57 => 15,  55 => 14,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Available Key Encryption Algorithms</h3>
<p class=\"help\">
    The following table lists all key encryption algorithms available in this environment.
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
    {% set encryptionAlgorithms = collector.getData().algorithm.algorithms %}
    {% if encryptionAlgorithms['Key Encryption'] is defined %}
        {% for alias, alg in encryptionAlgorithms['Key Encryption'] %}
            <tr class=\"{% if alg.name in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[alg.name]['severity'] }}{% else %}no-severity{% endif %}\">
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
            <td colspan=\"3\">
                No algorithm. Please consider the installation of the following packages or create your own algorithm:
                <ul>
                    <li>web-token/jwt-encryption-algorithm-aesgcmkw</li>
                    <li>web-token/jwt-encryption-algorithm-aeskw</li>
                    <li>web-token/jwt-encryption-algorithm-dir</li>
                    <li>web-token/jwt-encryption-algorithm-ecdh-es</li>
                    <li>web-token/jwt-encryption-algorithm-pbes2</li>
                    <li>web-token/jwt-encryption-algorithm-rsa</li>
                </ul>
            </td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/jwe/key_encryption_algorithms.html.twig");
    }
}
