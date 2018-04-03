<?php

/* project/index.html.twig */
class __TwigTemplate_497e553cb8a9876eabbdc24baeff1d92ba0322cc9692f44433c627072334235f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_69b39804b0cadba541171a73e66d37cb31dccdd563ec3e7d6172d6771234d2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b39804b0cadba541171a73e66d37cb31dccdd563ec3e7d6172d6771234d2da->enter($__internal_69b39804b0cadba541171a73e66d37cb31dccdd563ec3e7d6172d6771234d2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_996c6315779d6211f9f596290a7dbb63dd7136719b7bee0e2cc9c823f0429697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996c6315779d6211f9f596290a7dbb63dd7136719b7bee0e2cc9c823f0429697->enter($__internal_996c6315779d6211f9f596290a7dbb63dd7136719b7bee0e2cc9c823f0429697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b39804b0cadba541171a73e66d37cb31dccdd563ec3e7d6172d6771234d2da->leave($__internal_69b39804b0cadba541171a73e66d37cb31dccdd563ec3e7d6172d6771234d2da_prof);

        
        $__internal_996c6315779d6211f9f596290a7dbb63dd7136719b7bee0e2cc9c823f0429697->leave($__internal_996c6315779d6211f9f596290a7dbb63dd7136719b7bee0e2cc9c823f0429697_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c0a9ef1f91ead4754e7fd5dbe62031dce6d517c63d35bf9d4d830870c27e719b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a9ef1f91ead4754e7fd5dbe62031dce6d517c63d35bf9d4d830870c27e719b->enter($__internal_c0a9ef1f91ead4754e7fd5dbe62031dce6d517c63d35bf9d4d830870c27e719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4d1747bb3da82b69f5af05e0bbd1fdafb07ee1bb8c4ea5f354d86efe8fb18dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1747bb3da82b69f5af05e0bbd1fdafb07ee1bb8c4ea5f354d86efe8fb18dc4->enter($__internal_4d1747bb3da82b69f5af05e0bbd1fdafb07ee1bb8c4ea5f354d86efe8fb18dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_4d1747bb3da82b69f5af05e0bbd1fdafb07ee1bb8c4ea5f354d86efe8fb18dc4->leave($__internal_4d1747bb3da82b69f5af05e0bbd1fdafb07ee1bb8c4ea5f354d86efe8fb18dc4_prof);

        
        $__internal_c0a9ef1f91ead4754e7fd5dbe62031dce6d517c63d35bf9d4d830870c27e719b->leave($__internal_c0a9ef1f91ead4754e7fd5dbe62031dce6d517c63d35bf9d4d830870c27e719b_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
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
{% endblock %}", "project/index.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\app\\Resources\\views\\project\\index.html.twig");
    }
}
