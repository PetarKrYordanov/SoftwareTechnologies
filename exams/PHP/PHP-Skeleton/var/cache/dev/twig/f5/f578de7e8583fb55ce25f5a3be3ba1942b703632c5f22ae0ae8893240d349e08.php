<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9cc36d5ec5add1c3b58a73800826077a427f692a9c4bcd893e7730774ba78d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_27e7f42237ee7241e15ebb90b8ed85022e075b313b471d2f422d571290545f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e7f42237ee7241e15ebb90b8ed85022e075b313b471d2f422d571290545f93->enter($__internal_27e7f42237ee7241e15ebb90b8ed85022e075b313b471d2f422d571290545f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_363751634f5d5660c3eab57f826b1668e1f342e852f697e899b0458b275fecb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363751634f5d5660c3eab57f826b1668e1f342e852f697e899b0458b275fecb0->enter($__internal_363751634f5d5660c3eab57f826b1668e1f342e852f697e899b0458b275fecb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e7f42237ee7241e15ebb90b8ed85022e075b313b471d2f422d571290545f93->leave($__internal_27e7f42237ee7241e15ebb90b8ed85022e075b313b471d2f422d571290545f93_prof);

        
        $__internal_363751634f5d5660c3eab57f826b1668e1f342e852f697e899b0458b275fecb0->leave($__internal_363751634f5d5660c3eab57f826b1668e1f342e852f697e899b0458b275fecb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a075c6c910906d76f6fb1333c8ee34858ebf00a4d0693e991f50975f600114e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a075c6c910906d76f6fb1333c8ee34858ebf00a4d0693e991f50975f600114e2->enter($__internal_a075c6c910906d76f6fb1333c8ee34858ebf00a4d0693e991f50975f600114e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ca1bb54424e773e4c1d5385add7294f137365848b54b9d7a8116a20091f25f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1bb54424e773e4c1d5385add7294f137365848b54b9d7a8116a20091f25f59->enter($__internal_ca1bb54424e773e4c1d5385add7294f137365848b54b9d7a8116a20091f25f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca1bb54424e773e4c1d5385add7294f137365848b54b9d7a8116a20091f25f59->leave($__internal_ca1bb54424e773e4c1d5385add7294f137365848b54b9d7a8116a20091f25f59_prof);

        
        $__internal_a075c6c910906d76f6fb1333c8ee34858ebf00a4d0693e991f50975f600114e2->leave($__internal_a075c6c910906d76f6fb1333c8ee34858ebf00a4d0693e991f50975f600114e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f55114606147cdac18bdc7f7811cfc258088d3f69c4d229b4f325d880a75911d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55114606147cdac18bdc7f7811cfc258088d3f69c4d229b4f325d880a75911d->enter($__internal_f55114606147cdac18bdc7f7811cfc258088d3f69c4d229b4f325d880a75911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ffd6e56c6248d2436730b9a534375e04a1f96dcc586390caed4e8df4f9e8d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffd6e56c6248d2436730b9a534375e04a1f96dcc586390caed4e8df4f9e8d1d->enter($__internal_9ffd6e56c6248d2436730b9a534375e04a1f96dcc586390caed4e8df4f9e8d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ffd6e56c6248d2436730b9a534375e04a1f96dcc586390caed4e8df4f9e8d1d->leave($__internal_9ffd6e56c6248d2436730b9a534375e04a1f96dcc586390caed4e8df4f9e8d1d_prof);

        
        $__internal_f55114606147cdac18bdc7f7811cfc258088d3f69c4d229b4f325d880a75911d->leave($__internal_f55114606147cdac18bdc7f7811cfc258088d3f69c4d229b4f325d880a75911d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8c7de2c1180b8b84969aab95baf869b7f4638a01f412343a81d0d26a82fae18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c7de2c1180b8b84969aab95baf869b7f4638a01f412343a81d0d26a82fae18->enter($__internal_f8c7de2c1180b8b84969aab95baf869b7f4638a01f412343a81d0d26a82fae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1051aeba2c29903b1862e695f1a7f77a2b0a5394b73f1d4e83863ccec32051a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1051aeba2c29903b1862e695f1a7f77a2b0a5394b73f1d4e83863ccec32051a0->enter($__internal_1051aeba2c29903b1862e695f1a7f77a2b0a5394b73f1d4e83863ccec32051a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1051aeba2c29903b1862e695f1a7f77a2b0a5394b73f1d4e83863ccec32051a0->leave($__internal_1051aeba2c29903b1862e695f1a7f77a2b0a5394b73f1d4e83863ccec32051a0_prof);

        
        $__internal_f8c7de2c1180b8b84969aab95baf869b7f4638a01f412343a81d0d26a82fae18->leave($__internal_f8c7de2c1180b8b84969aab95baf869b7f4638a01f412343a81d0d26a82fae18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
