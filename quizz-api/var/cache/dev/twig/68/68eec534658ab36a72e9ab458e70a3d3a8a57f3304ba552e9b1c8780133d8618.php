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

/* @JoseFramework/data_collector/tab/jwe/compression_methods.html.twig */
class __TwigTemplate_5556bf89810275e38ea3bdcff227e612f09ea7f859a6c8751117206b0c1ecc4b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig"));

        // line 1
        echo "<h3>Compression Methods</h3>
<p class=\"help\">
    The compression methods are used to shrink the size of the tokens.<br>
    Their use is optional, but may be needed in case of heavy payloads.
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "jwe", [], "any", false, false, false, 14), "compression_methods", [], "any", false, false, false, 14))) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "jwe", [], "any", false, false, false, 15), "compression_methods", [], "any", false, false, false, 15));
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
            <td colspan=\"2\">There is no compression method.</td>
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
        return "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig";
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
        return new Source("<h3>Compression Methods</h3>
<p class=\"help\">
    The compression methods are used to shrink the size of the tokens.<br>
    Their use is optional, but may be needed in case of heavy payloads.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
    </tr>
    </thead>
    <tbody>
    {%  if not collector.getData().jwe.compression_methods is empty %}
        {% for alias, name in collector.getData().jwe.compression_methods %}
            <tr>
                <td>{{ name }}</td>
                <td>{{ alias }}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"2\">There is no compression method.</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/jwe/compression_methods.html.twig");
    }
}
