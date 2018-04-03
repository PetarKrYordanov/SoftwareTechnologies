<?php

/* :project:edit.html.twig */
class __TwigTemplate_f74a49e7b764e29c89064a66290f06a0a7a19d5732515dbc160bce789e9e2829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85ff85f8e86e202a0a54d24f578d959259ae64484a22ed4204750e2832f7ad04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ff85f8e86e202a0a54d24f578d959259ae64484a22ed4204750e2832f7ad04->enter($__internal_85ff85f8e86e202a0a54d24f578d959259ae64484a22ed4204750e2832f7ad04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $__internal_7ca0e7607fd373776d4f240cbf6ab603f1fabcb589ab138a5ef44712f6a594e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca0e7607fd373776d4f240cbf6ab603f1fabcb589ab138a5ef44712f6a594e3->enter($__internal_7ca0e7607fd373776d4f240cbf6ab603f1fabcb589ab138a5ef44712f6a594e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85ff85f8e86e202a0a54d24f578d959259ae64484a22ed4204750e2832f7ad04->leave($__internal_85ff85f8e86e202a0a54d24f578d959259ae64484a22ed4204750e2832f7ad04_prof);

        
        $__internal_7ca0e7607fd373776d4f240cbf6ab603f1fabcb589ab138a5ef44712f6a594e3->leave($__internal_7ca0e7607fd373776d4f240cbf6ab603f1fabcb589ab138a5ef44712f6a594e3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_864e0129cfa341239dd35fb2df55464de9cde778eacaca844ea781971557faf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864e0129cfa341239dd35fb2df55464de9cde778eacaca844ea781971557faf0->enter($__internal_864e0129cfa341239dd35fb2df55464de9cde778eacaca844ea781971557faf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_95c240c573326a4155018bb9ce8994749a3385cbb729dae56ebe04874807e1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c240c573326a4155018bb9ce8994749a3385cbb729dae56ebe04874807e1d5->enter($__internal_95c240c573326a4155018bb9ce8994749a3385cbb729dae56ebe04874807e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_95c240c573326a4155018bb9ce8994749a3385cbb729dae56ebe04874807e1d5->leave($__internal_95c240c573326a4155018bb9ce8994749a3385cbb729dae56ebe04874807e1d5_prof);

        
        $__internal_864e0129cfa341239dd35fb2df55464de9cde778eacaca844ea781971557faf0->leave($__internal_864e0129cfa341239dd35fb2df55464de9cde778eacaca844ea781971557faf0_prof);

    }

    public function getTemplateName()
    {
        return ":project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}

", ":project:edit.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\app/Resources\\views/project/edit.html.twig");
    }
}
