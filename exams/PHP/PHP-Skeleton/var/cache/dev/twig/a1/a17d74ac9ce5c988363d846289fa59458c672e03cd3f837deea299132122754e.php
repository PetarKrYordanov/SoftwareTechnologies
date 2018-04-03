<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0acfe6e0d74ca654a1a4affc281db3f3a85b89e0dc74c98b09bfaf6fb7b9bf4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4915d8efc49057afe45ca4b62cceb25d6cfa73c6b2a6ecced5b1c1b9b749b130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4915d8efc49057afe45ca4b62cceb25d6cfa73c6b2a6ecced5b1c1b9b749b130->enter($__internal_4915d8efc49057afe45ca4b62cceb25d6cfa73c6b2a6ecced5b1c1b9b749b130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f41cf303a62fb041d4c217aa177d52c2b831f042d2883feda709bb4bee6780a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41cf303a62fb041d4c217aa177d52c2b831f042d2883feda709bb4bee6780a8->enter($__internal_f41cf303a62fb041d4c217aa177d52c2b831f042d2883feda709bb4bee6780a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4915d8efc49057afe45ca4b62cceb25d6cfa73c6b2a6ecced5b1c1b9b749b130->leave($__internal_4915d8efc49057afe45ca4b62cceb25d6cfa73c6b2a6ecced5b1c1b9b749b130_prof);

        
        $__internal_f41cf303a62fb041d4c217aa177d52c2b831f042d2883feda709bb4bee6780a8->leave($__internal_f41cf303a62fb041d4c217aa177d52c2b831f042d2883feda709bb4bee6780a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c0782c09393b47aa23aca7344c3085fef77aa9dd3dd8c40f2f4a01dd0814b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0782c09393b47aa23aca7344c3085fef77aa9dd3dd8c40f2f4a01dd0814b15->enter($__internal_3c0782c09393b47aa23aca7344c3085fef77aa9dd3dd8c40f2f4a01dd0814b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54842222955a17e14b0bac7e24b8395fdc6d8da4d99b7e0c4f8ecab6a4d68b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54842222955a17e14b0bac7e24b8395fdc6d8da4d99b7e0c4f8ecab6a4d68b8f->enter($__internal_54842222955a17e14b0bac7e24b8395fdc6d8da4d99b7e0c4f8ecab6a4d68b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_54842222955a17e14b0bac7e24b8395fdc6d8da4d99b7e0c4f8ecab6a4d68b8f->leave($__internal_54842222955a17e14b0bac7e24b8395fdc6d8da4d99b7e0c4f8ecab6a4d68b8f_prof);

        
        $__internal_3c0782c09393b47aa23aca7344c3085fef77aa9dd3dd8c40f2f4a01dd0814b15->leave($__internal_3c0782c09393b47aa23aca7344c3085fef77aa9dd3dd8c40f2f4a01dd0814b15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c2634b5dffc8554ec399fc150da71e46ef860186df6ac194acd34468229deb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2634b5dffc8554ec399fc150da71e46ef860186df6ac194acd34468229deb6->enter($__internal_7c2634b5dffc8554ec399fc150da71e46ef860186df6ac194acd34468229deb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a116158e5c29d588e8fb9c0ea1b147d2c1cb0430266793f131acbefaa0fb8423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a116158e5c29d588e8fb9c0ea1b147d2c1cb0430266793f131acbefaa0fb8423->enter($__internal_a116158e5c29d588e8fb9c0ea1b147d2c1cb0430266793f131acbefaa0fb8423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a116158e5c29d588e8fb9c0ea1b147d2c1cb0430266793f131acbefaa0fb8423->leave($__internal_a116158e5c29d588e8fb9c0ea1b147d2c1cb0430266793f131acbefaa0fb8423_prof);

        
        $__internal_7c2634b5dffc8554ec399fc150da71e46ef860186df6ac194acd34468229deb6->leave($__internal_7c2634b5dffc8554ec399fc150da71e46ef860186df6ac194acd34468229deb6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6ff022b8a1c3d22717753ec957629c9e90ddec99c20100c5b09cc0ee4ca1271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ff022b8a1c3d22717753ec957629c9e90ddec99c20100c5b09cc0ee4ca1271->enter($__internal_d6ff022b8a1c3d22717753ec957629c9e90ddec99c20100c5b09cc0ee4ca1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_76b203ffca4b32c699e62364b76c933501888293165006387e63a6310db32177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b203ffca4b32c699e62364b76c933501888293165006387e63a6310db32177->enter($__internal_76b203ffca4b32c699e62364b76c933501888293165006387e63a6310db32177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_76b203ffca4b32c699e62364b76c933501888293165006387e63a6310db32177->leave($__internal_76b203ffca4b32c699e62364b76c933501888293165006387e63a6310db32177_prof);

        
        $__internal_d6ff022b8a1c3d22717753ec957629c9e90ddec99c20100c5b09cc0ee4ca1271->leave($__internal_d6ff022b8a1c3d22717753ec957629c9e90ddec99c20100c5b09cc0ee4ca1271_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
