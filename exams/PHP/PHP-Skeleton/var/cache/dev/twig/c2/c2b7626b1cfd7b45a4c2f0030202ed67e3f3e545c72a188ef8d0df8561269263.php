<?php

/* base.html.twig */
class __TwigTemplate_a17f9d7aa975e34f4e0cc44eeab7f33089147d69ffdc6090114c99e26dfbd157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c42f90aeab638ffa5ec8c3dc1c59e6cec647a16ce4c27f3e7c2494f027dac3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42f90aeab638ffa5ec8c3dc1c59e6cec647a16ce4c27f3e7c2494f027dac3cb->enter($__internal_c42f90aeab638ffa5ec8c3dc1c59e6cec647a16ce4c27f3e7c2494f027dac3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_963974d48e451aa5cb9916ebc9db3fe175ee190adab7072e9de23643515afa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963974d48e451aa5cb9916ebc9db3fe175ee190adab7072e9de23643515afa09->enter($__internal_963974d48e451aa5cb9916ebc9db3fe175ee190adab7072e9de23643515afa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_c42f90aeab638ffa5ec8c3dc1c59e6cec647a16ce4c27f3e7c2494f027dac3cb->leave($__internal_c42f90aeab638ffa5ec8c3dc1c59e6cec647a16ce4c27f3e7c2494f027dac3cb_prof);

        
        $__internal_963974d48e451aa5cb9916ebc9db3fe175ee190adab7072e9de23643515afa09->leave($__internal_963974d48e451aa5cb9916ebc9db3fe175ee190adab7072e9de23643515afa09_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9738d6f419417ee9299dd7ab7b5090a1f1cd34c60a2b86608529160d88dff1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9738d6f419417ee9299dd7ab7b5090a1f1cd34c60a2b86608529160d88dff1ce->enter($__internal_9738d6f419417ee9299dd7ab7b5090a1f1cd34c60a2b86608529160d88dff1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_683060ac64a71c972ee48c4f08862f0ee6f5ccecd8057301223840ab4a273019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683060ac64a71c972ee48c4f08862f0ee6f5ccecd8057301223840ab4a273019->enter($__internal_683060ac64a71c972ee48c4f08862f0ee6f5ccecd8057301223840ab4a273019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_683060ac64a71c972ee48c4f08862f0ee6f5ccecd8057301223840ab4a273019->leave($__internal_683060ac64a71c972ee48c4f08862f0ee6f5ccecd8057301223840ab4a273019_prof);

        
        $__internal_9738d6f419417ee9299dd7ab7b5090a1f1cd34c60a2b86608529160d88dff1ce->leave($__internal_9738d6f419417ee9299dd7ab7b5090a1f1cd34c60a2b86608529160d88dff1ce_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_785ed903a3478f9786a0c6a8dc8360bb232acfe9e42fe3b089f9396f99845ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785ed903a3478f9786a0c6a8dc8360bb232acfe9e42fe3b089f9396f99845ad7->enter($__internal_785ed903a3478f9786a0c6a8dc8360bb232acfe9e42fe3b089f9396f99845ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9e60856a69ae3c0140869b272d3d316fc558ab8b54349f3107d371e79ef3e560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e60856a69ae3c0140869b272d3d316fc558ab8b54349f3107d371e79ef3e560->enter($__internal_9e60856a69ae3c0140869b272d3d316fc558ab8b54349f3107d371e79ef3e560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9e60856a69ae3c0140869b272d3d316fc558ab8b54349f3107d371e79ef3e560->leave($__internal_9e60856a69ae3c0140869b272d3d316fc558ab8b54349f3107d371e79ef3e560_prof);

        
        $__internal_785ed903a3478f9786a0c6a8dc8360bb232acfe9e42fe3b089f9396f99845ad7->leave($__internal_785ed903a3478f9786a0c6a8dc8360bb232acfe9e42fe3b089f9396f99845ad7_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_215954eafa38125c1453500344122a3378e04e707861709d454cd135e90b9f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215954eafa38125c1453500344122a3378e04e707861709d454cd135e90b9f1f->enter($__internal_215954eafa38125c1453500344122a3378e04e707861709d454cd135e90b9f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_da5efc1cd0ea9cf6eaffe4f9b3d61c3f946e54b89fa6112c8cce218dbf43a817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5efc1cd0ea9cf6eaffe4f9b3d61c3f946e54b89fa6112c8cce218dbf43a817->enter($__internal_da5efc1cd0ea9cf6eaffe4f9b3d61c3f946e54b89fa6112c8cce218dbf43a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_da5efc1cd0ea9cf6eaffe4f9b3d61c3f946e54b89fa6112c8cce218dbf43a817->leave($__internal_da5efc1cd0ea9cf6eaffe4f9b3d61c3f946e54b89fa6112c8cce218dbf43a817_prof);

        
        $__internal_215954eafa38125c1453500344122a3378e04e707861709d454cd135e90b9f1f->leave($__internal_215954eafa38125c1453500344122a3378e04e707861709d454cd135e90b9f1f_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_00ae22e580aad218c65e51fdf0f4aa2fe9abab97563127763c1b9c6125865242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ae22e580aad218c65e51fdf0f4aa2fe9abab97563127763c1b9c6125865242->enter($__internal_00ae22e580aad218c65e51fdf0f4aa2fe9abab97563127763c1b9c6125865242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6aebd192dc5d0f8a024c6cc4bd0515faa80368afee2b64b59d99d490586d8252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aebd192dc5d0f8a024c6cc4bd0515faa80368afee2b64b59d99d490586d8252->enter($__internal_6aebd192dc5d0f8a024c6cc4bd0515faa80368afee2b64b59d99d490586d8252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_6aebd192dc5d0f8a024c6cc4bd0515faa80368afee2b64b59d99d490586d8252->leave($__internal_6aebd192dc5d0f8a024c6cc4bd0515faa80368afee2b64b59d99d490586d8252_prof);

        
        $__internal_00ae22e580aad218c65e51fdf0f4aa2fe9abab97563127763c1b9c6125865242->leave($__internal_00ae22e580aad218c65e51fdf0f4aa2fe9abab97563127763c1b9c6125865242_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_bc6192fbf1da97096116d3f82510028e5747a43c34bc3e24b2635e50e6f278fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6192fbf1da97096116d3f82510028e5747a43c34bc3e24b2635e50e6f278fb->enter($__internal_bc6192fbf1da97096116d3f82510028e5747a43c34bc3e24b2635e50e6f278fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e7371005caf28572523c36bcb036bcf4fe0e0987cd4746a94ba6f2a2a4579251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7371005caf28572523c36bcb036bcf4fe0e0987cd4746a94ba6f2a2a4579251->enter($__internal_e7371005caf28572523c36bcb036bcf4fe0e0987cd4746a94ba6f2a2a4579251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e7371005caf28572523c36bcb036bcf4fe0e0987cd4746a94ba6f2a2a4579251->leave($__internal_e7371005caf28572523c36bcb036bcf4fe0e0987cd4746a94ba6f2a2a4579251_prof);

        
        $__internal_bc6192fbf1da97096116d3f82510028e5747a43c34bc3e24b2635e50e6f278fb->leave($__internal_bc6192fbf1da97096116d3f82510028e5747a43c34bc3e24b2635e50e6f278fb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
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
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
