<?php

/* /home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/tests/test_case.twig */
class __TwigTemplate_6d99eb12fb6dc035fb6e606d744d58e8b14837a81345e9275fcc205d7eabdc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07fb436b786dcbb801deed14ba10925e629d558915d35fcf2e8b474137790f9b = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_07fb436b786dcbb801deed14ba10925e629d558915d35fcf2e8b474137790f9b->enter($__internal_07fb436b786dcbb801deed14ba10925e629d558915d35fcf2e8b474137790f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/tests/test_case.twig"));

        // line 18
        $context["isController"] = (twig_lower_filter($this->env, ($context["type"] ?? null)) == "controller");
        // line 19
        if (($context["isController"] ?? null)) {
            // line 20
            $context["uses"] = twig_array_merge(($context["uses"] ?? null), array(0 => "Cake\\TestSuite\\IntegrationTestCase"));
        } else {
            // line 22
            $context["uses"] = twig_array_merge(($context["uses"] ?? null), array(0 => "Cake\\TestSuite\\TestCase"));
        }
        // line 25
        $context["uses"] = twig_sort_filter(($context["uses"] ?? null));
        // line 26
        echo "<?php
namespace ";
        // line 27
        echo twig_escape_filter($this->env, ($context["baseNamespace"] ?? null), "html", null, true);
        echo "\\Test\\TestCase\\";
        echo twig_escape_filter($this->env, ($context["subNamespace"] ?? null), "html", null, true);
        echo ";

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["uses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dependency"]) {
            // line 30
            echo "use ";
            echo twig_escape_filter($this->env, $context["dependency"], "html", null, true);
            echo ";
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
/**
 * ";
        // line 34
        echo twig_escape_filter($this->env, ($context["fullClassName"] ?? null), "html", null, true);
        echo " Test Case
 */
";
        // line 36
        if (($context["isController"] ?? null)) {
            // line 37
            echo "class ";
            echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
            echo "Test extends IntegrationTestCase
{
";
        } else {
            // line 40
            echo "class ";
            echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
            echo "Test extends TestCase
{
";
        }
        // line 44
        if (($context["properties"] ?? null)) {
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["propertyInfo"]) {
                // line 46
                echo "
    /**
     * ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "description", array()), "html", null, true);
                echo "
     *
     * @var ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "type", array()), "html", null, true);
                echo "
     */
    public \$";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "name", array()), "html", null, true);
                if ($this->getAttribute($context["propertyInfo"], "value", array())) {
                    echo " = ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "value", array()), "html", null, true);
                }
                echo ";
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propertyInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 56
        if (($context["fixtures"] ?? null)) {
            // line 57
            echo "
    /**
     * Fixtures
     *
     * @var array
     */
    public \$fixtures = [";
            // line 63
            echo $this->getAttribute(($context["Bake"] ?? null), "stringifyList", array(0 => $this->env->getExtension('Jasny\Twig\ArrayExtension')->values(($context["fixtures"] ?? null))), "method");
            echo "];
";
        }
        // line 66
        if (($context["construction"] ?? null)) {
            // line 67
            echo "
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
";
            // line 76
            if (($context["preConstruct"] ?? null)) {
                // line 77
                echo "        ";
                echo ($context["preConstruct"] ?? null);
                echo "
";
            }
            // line 79
            echo "        \$this->";
            echo ((($context["subject"] ?? null) . " = ") . ($context["construction"] ?? null));
            echo "
";
            // line 80
            if (($context["postConstruct"] ?? null)) {
                // line 81
                echo "        ";
                echo ($context["postConstruct"] ?? null);
                echo "
";
            }
            // line 83
            echo "    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset(\$this->";
            // line 92
            echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
            echo ");

        parent::tearDown();
    }
";
        }
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 99
            echo "
    /**
     * Test ";
            // line 101
            echo twig_escape_filter($this->env, $context["method"], "html", null, true);
            echo " method
     *
     * @return void
     */
    public function test";
            // line 105
            echo twig_escape_filter($this->env, Cake\Utility\Inflector::camelize($context["method"]), "html", null, true);
            echo "()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        if ( !($context["methods"] ?? null)) {
            // line 112
            echo "
    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
";
        }
        // line 123
        echo "}
";
        
        $__internal_07fb436b786dcbb801deed14ba10925e629d558915d35fcf2e8b474137790f9b->leave($__internal_07fb436b786dcbb801deed14ba10925e629d558915d35fcf2e8b474137790f9b_prof);

    }

    public function getTemplateName()
    {
        return "/home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/tests/test_case.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 123,  211 => 112,  209 => 111,  198 => 105,  191 => 101,  187 => 99,  183 => 98,  175 => 92,  164 => 83,  158 => 81,  156 => 80,  151 => 79,  145 => 77,  143 => 76,  132 => 67,  130 => 66,  125 => 63,  117 => 57,  115 => 56,  102 => 52,  97 => 50,  92 => 48,  88 => 46,  84 => 45,  82 => 44,  75 => 40,  68 => 37,  66 => 36,  61 => 34,  57 => 32,  48 => 30,  44 => 29,  37 => 27,  34 => 26,  32 => 25,  29 => 22,  26 => 20,  24 => 19,  22 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * Test Case bake template
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set isController = type|lower == 'controller' %}
{% if isController %}
    {%- set uses = uses|merge(['Cake\\\\TestSuite\\\\IntegrationTestCase']) %}
{% else %}
    {%- set uses = uses|merge(['Cake\\\\TestSuite\\\\TestCase']) %}
{% endif %}

{%- set uses = uses|sort %}
<?php
namespace {{ baseNamespace }}\\Test\\TestCase\\{{ subNamespace }};

{% for dependency in uses %}
use {{ dependency }};
{% endfor %}

/**
 * {{ fullClassName }} Test Case
 */
{% if isController %}
class {{ className }}Test extends IntegrationTestCase
{
{% else %}
class {{ className }}Test extends TestCase
{
{% endif %}

{%- if properties %}
{% for propertyInfo in properties %}

    /**
     * {{ propertyInfo.description }}
     *
     * @var {{ propertyInfo.type }}
     */
    public \${{ propertyInfo.name }}{% if propertyInfo.value %} = {{ propertyInfo.value }}{% endif %};
{% endfor %}
{% endif %}

{%- if fixtures %}

    /**
     * Fixtures
     *
     * @var array
     */
    public \$fixtures = [{{ Bake.stringifyList(fixtures|values)|raw }}];
{% endif %}

{%- if construction %}

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
{% if preConstruct %}
        {{ preConstruct|raw }}
{% endif %}
        \$this->{{ (subject ~ ' = ' ~ construction)|raw }}
{% if postConstruct %}
        {{ postConstruct|raw }}
{% endif %}
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset(\$this->{{ subject }});

        parent::tearDown();
    }
{% endif %}

{%- for method in methods %}

    /**
     * Test {{ method }} method
     *
     * @return void
     */
    public function test{{ method|camelize }}()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
{% endfor %}

{%- if not methods %}

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
{% endif %}
}
", "/home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/tests/test_case.twig", "");
    }
}
