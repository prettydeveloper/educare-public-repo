<?php

/* /home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig */
class __TwigTemplate_395b2dc71287ad71e325bb86050164ad6d42d309552cb710f0f83b0d22511823 extends Twig_Template
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
        $__internal_e54bd7785775dac53561ccca0abb1f39b8eb0096da1f36d11556cf5ae53bd248 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_e54bd7785775dac53561ccca0abb1f39b8eb0096da1f36d11556cf5ae53bd248->enter($__internal_e54bd7785775dac53561ccca0abb1f39b8eb0096da1f36d11556cf5ae53bd248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_e54bd7785775dac53561ccca0abb1f39b8eb0096da1f36d11556cf5ae53bd248->leave($__internal_e54bd7785775dac53561ccca0abb1f39b8eb0096da1f36d11556cf5ae53bd248_prof);

    }

    public function getTemplateName()
    {
        return "/home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
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
{{ _view.fetch('content')|raw }}", "/home/pasqleo/educare/educare/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig", "");
    }
}
