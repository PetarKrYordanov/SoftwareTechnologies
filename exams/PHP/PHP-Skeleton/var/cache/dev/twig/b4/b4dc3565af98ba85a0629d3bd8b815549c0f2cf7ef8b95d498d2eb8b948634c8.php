<?php

/* project/create.html.twig */
class __TwigTemplate_5b28dc0b3980fc0b0375522a4945ec6c68466c5df47c7b5d35b5c50bcf7c5429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/create.html.twig", 1);
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
        $__internal_04826c5f1f4515e2b5ac4811801e8a729865f143c321eac432b9c82046ff9f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04826c5f1f4515e2b5ac4811801e8a729865f143c321eac432b9c82046ff9f9d->enter($__internal_04826c5f1f4515e2b5ac4811801e8a729865f143c321eac432b9c82046ff9f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $__internal_d93563b2b62874ce6e9b0b1b3ca6a79f83c35be09030cfee073d46e68861600a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93563b2b62874ce6e9b0b1b3ca6a79f83c35be09030cfee073d46e68861600a->enter($__internal_d93563b2b62874ce6e9b0b1b3ca6a79f83c35be09030cfee073d46e68861600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04826c5f1f4515e2b5ac4811801e8a729865f143c321eac432b9c82046ff9f9d->leave($__internal_04826c5f1f4515e2b5ac4811801e8a729865f143c321eac432b9c82046ff9f9d_prof);

        
        $__internal_d93563b2b62874ce6e9b0b1b3ca6a79f83c35be09030cfee073d46e68861600a->leave($__internal_d93563b2b62874ce6e9b0b1b3ca6a79f83c35be09030cfee073d46e68861600a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_365a374103f41d120c1b2b74cc7e4f708b8a6a576ba7b1f3f29ffd5d9fae8158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365a374103f41d120c1b2b74cc7e4f708b8a6a576ba7b1f3f29ffd5d9fae8158->enter($__internal_365a374103f41d120c1b2b74cc7e4f708b8a6a576ba7b1f3f29ffd5d9fae8158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_373dd3e6047a4d3ecac31a020db8d682bf03c90865878e6af7bed3c5bd80babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373dd3e6047a4d3ecac31a020db8d682bf03c90865878e6af7bed3c5bd80babf->enter($__internal_373dd3e6047a4d3ecac31a020db8d682bf03c90865878e6af7bed3c5bd80babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_373dd3e6047a4d3ecac31a020db8d682bf03c90865878e6af7bed3c5bd80babf->leave($__internal_373dd3e6047a4d3ecac31a020db8d682bf03c90865878e6af7bed3c5bd80babf_prof);

        
        $__internal_365a374103f41d120c1b2b74cc7e4f708b8a6a576ba7b1f3f29ffd5d9fae8158->leave($__internal_365a374103f41d120c1b2b74cc7e4f708b8a6a576ba7b1f3f29ffd5d9fae8158_prof);

    }

    public function getTemplateName()
    {
        return "project/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <form class=\"project-create\" action=\"{{ path('create') }}\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", "project/create.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\app\\Resources\\views\\project\\create.html.twig");
    }
}
