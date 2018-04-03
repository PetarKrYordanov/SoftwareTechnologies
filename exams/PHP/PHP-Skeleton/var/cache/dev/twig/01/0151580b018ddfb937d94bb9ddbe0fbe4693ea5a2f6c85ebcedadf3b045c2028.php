<?php

/* project/delete.html.twig */
class __TwigTemplate_a23f7e21bf4132835fec405b5350f2d203714afcff87719f4845adc93353750d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/delete.html.twig", 1);
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
        $__internal_9a44dfe005b9f2657973e657d87e493329fe84729ad9f85003c97f5dab9a1a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a44dfe005b9f2657973e657d87e493329fe84729ad9f85003c97f5dab9a1a8f->enter($__internal_9a44dfe005b9f2657973e657d87e493329fe84729ad9f85003c97f5dab9a1a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $__internal_474fa1c2b6e0d59e2295cd6779bbd3a60e47ab523735ce84221b0b20d138e383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474fa1c2b6e0d59e2295cd6779bbd3a60e47ab523735ce84221b0b20d138e383->enter($__internal_474fa1c2b6e0d59e2295cd6779bbd3a60e47ab523735ce84221b0b20d138e383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a44dfe005b9f2657973e657d87e493329fe84729ad9f85003c97f5dab9a1a8f->leave($__internal_9a44dfe005b9f2657973e657d87e493329fe84729ad9f85003c97f5dab9a1a8f_prof);

        
        $__internal_474fa1c2b6e0d59e2295cd6779bbd3a60e47ab523735ce84221b0b20d138e383->leave($__internal_474fa1c2b6e0d59e2295cd6779bbd3a60e47ab523735ce84221b0b20d138e383_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d00794c18435cc1cdebc6273c92f02931f4f7e84a120e0dc72993cc1ffa4b8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00794c18435cc1cdebc6273c92f02931f4f7e84a120e0dc72993cc1ffa4b8b1->enter($__internal_d00794c18435cc1cdebc6273c92f02931f4f7e84a120e0dc72993cc1ffa4b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8abddbd46462bf373e25c81f75505488477ff5720b12e7ef447d429e6edd120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abddbd46462bf373e25c81f75505488477ff5720b12e7ef447d429e6edd120f->enter($__internal_8abddbd46462bf373e25c81f75505488477ff5720b12e7ef447d429e6edd120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo "\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_8abddbd46462bf373e25c81f75505488477ff5720b12e7ef447d429e6edd120f->leave($__internal_8abddbd46462bf373e25c81f75505488477ff5720b12e7ef447d429e6edd120f_prof);

        
        $__internal_d00794c18435cc1cdebc6273c92f02931f4f7e84a120e0dc72993cc1ffa4b8b1->leave($__internal_d00794c18435cc1cdebc6273c92f02931f4f7e84a120e0dc72993cc1ffa4b8b1_prof);

    }

    public function getTemplateName()
    {
        return "project/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  73 => 20,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", "project/delete.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\app\\Resources\\views\\project\\delete.html.twig");
    }
}
