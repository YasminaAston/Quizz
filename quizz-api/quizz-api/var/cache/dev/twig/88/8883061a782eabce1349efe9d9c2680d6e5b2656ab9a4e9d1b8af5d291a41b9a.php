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

/* @JoseFramework/data_collector/tab/claim_checker/managers.html.twig */
class __TwigTemplate_86fce15a7517350b8459f920b2d24745fb487cfb2d682b396f3ca98c09d25e5b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/claim_checker/managers.html.twig"));

        // line 1
        echo "<h3>Claim Checker Managers</h3>
<p class=\"help\">
    The following table lists all Claim Checker Managers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Managers directly created through the Claim Checker Manager Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Checked Claims</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "checker", [], "any", false, false, false, 15), "claim_checker_managers", [], "any", false, false, false, 15))) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "checker", [], "any", false, false, false, 16), "claim_checker_managers", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 17
                echo "            <tr>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["data"]);
                foreach ($context['_seq'] as $context["_key"] => $context["checker"]) {
                    // line 22
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["checker"], "claim", [], "any", false, false, false, 22), "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        <tr>
            <td colspan=\"2\">There is no registered Claim Checker Manager</td>
        </tr>
    ";
        }
        // line 33
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/claim_checker/managers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  97 => 29,  94 => 28,  85 => 24,  76 => 22,  72 => 21,  66 => 18,  63 => 17,  58 => 16,  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Claim Checker Managers</h3>
<p class=\"help\">
    The following table lists all Claim Checker Managers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Managers directly created through the Claim Checker Manager Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Checked Claims</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().checker.claim_checker_managers is empty %}
        {% for id, data in collector.getData().checker.claim_checker_managers %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for checker in data %}
                            <li>{{ checker.claim }}</li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"2\">There is no registered Claim Checker Manager</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/claim_checker/managers.html.twig", "/media/fadeil/759f6fa2-2947-4a6b-9d62-5df4da66649e/fadeil/aston/repos_github/Quizz/quizz-api/quizz-api/vendor/web-token/jwt-bundle/Resources/views/data_collector/tab/claim_checker/managers.html.twig");
    }
}
