<?php

/* :project:index.html.twig */
class __TwigTemplate_4324891ef6024cca0e7a1803c021f272ce57a0fb3d9488a1556297b1a32250a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:index.html.twig", 1);
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
        $__internal_8a079d88e30a89ebdb5524deec9cf384178a2946af235f5b54d7c4551525acf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a079d88e30a89ebdb5524deec9cf384178a2946af235f5b54d7c4551525acf2->enter($__internal_8a079d88e30a89ebdb5524deec9cf384178a2946af235f5b54d7c4551525acf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:index.html.twig"));

        $__internal_ca734ba1155aa5849cc8da5b8f7c043a75da9c63543bfca8059b64182f89c3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca734ba1155aa5849cc8da5b8f7c043a75da9c63543bfca8059b64182f89c3a6->enter($__internal_ca734ba1155aa5849cc8da5b8f7c043a75da9c63543bfca8059b64182f89c3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a079d88e30a89ebdb5524deec9cf384178a2946af235f5b54d7c4551525acf2->leave($__internal_8a079d88e30a89ebdb5524deec9cf384178a2946af235f5b54d7c4551525acf2_prof);

        
        $__internal_ca734ba1155aa5849cc8da5b8f7c043a75da9c63543bfca8059b64182f89c3a6->leave($__internal_ca734ba1155aa5849cc8da5b8f7c043a75da9c63543bfca8059b64182f89c3a6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_827c1e9f3b6a1c197de1823ff1f6e98df677a7f1fd6b8b1aad4b816c22bf51f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827c1e9f3b6a1c197de1823ff1f6e98df677a7f1fd6b8b1aad4b816c22bf51f2->enter($__internal_827c1e9f3b6a1c197de1823ff1f6e98df677a7f1fd6b8b1aad4b816c22bf51f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_76093541edcac24d1348bd7a50cfa06b7a6c240cd96edfd465a98d45d2177ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76093541edcac24d1348bd7a50cfa06b7a6c240cd96edfd465a98d45d2177ae1->enter($__internal_76093541edcac24d1348bd7a50cfa06b7a6c240cd96edfd465a98d45d2177ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" methods=\"post\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "                <div class=\"project\">
                    <div class=\"project-title\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-budget\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "budget", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
";
        
        $__internal_76093541edcac24d1348bd7a50cfa06b7a6c240cd96edfd465a98d45d2177ae1->leave($__internal_76093541edcac24d1348bd7a50cfa06b7a6c240cd96edfd465a98d45d2177ae1_prof);

        
        $__internal_827c1e9f3b6a1c197de1823ff1f6e98df677a7f1fd6b8b1aad4b816c22bf51f2->leave($__internal_827c1e9f3b6a1c197de1823ff1f6e98df677a7f1fd6b8b1aad4b816c22bf51f2_prof);

    }

    public function getTemplateName()
    {
        return ":project:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  76 => 21,  70 => 18,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" methods=\"post\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            {% for project in projects %}
                <div class=\"project\">
                    <div class=\"project-title\">
                        {{ project.title }}
                    </div>
                    <div class=\"project-budget\">
                        {{ project.budget }}
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"{{ path('edit', {'id': project.id}) }}\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"{{ path('delete', {'id': project.id})}}\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", ":project:index.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\app/Resources\\views/project/index.html.twig");
    }
}
