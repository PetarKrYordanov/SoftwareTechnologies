<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_237ff2a1e63d63cd1d0c80b7dcb8957f3d313ef90d0e7788debff48edc841ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_265767b6e6c8cec849320972f61622ea6398f9cfe1ad458382a1f1b67e3e0b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265767b6e6c8cec849320972f61622ea6398f9cfe1ad458382a1f1b67e3e0b69->enter($__internal_265767b6e6c8cec849320972f61622ea6398f9cfe1ad458382a1f1b67e3e0b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bbe66b2f649fe9f9700da71752afa941d44de56a5a81e77803a411e0401107c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe66b2f649fe9f9700da71752afa941d44de56a5a81e77803a411e0401107c0->enter($__internal_bbe66b2f649fe9f9700da71752afa941d44de56a5a81e77803a411e0401107c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265767b6e6c8cec849320972f61622ea6398f9cfe1ad458382a1f1b67e3e0b69->leave($__internal_265767b6e6c8cec849320972f61622ea6398f9cfe1ad458382a1f1b67e3e0b69_prof);

        
        $__internal_bbe66b2f649fe9f9700da71752afa941d44de56a5a81e77803a411e0401107c0->leave($__internal_bbe66b2f649fe9f9700da71752afa941d44de56a5a81e77803a411e0401107c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_033d37388b409feadb69c6a41e170f5a810132178790bcd0aa130d8f65e82859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033d37388b409feadb69c6a41e170f5a810132178790bcd0aa130d8f65e82859->enter($__internal_033d37388b409feadb69c6a41e170f5a810132178790bcd0aa130d8f65e82859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2935ba3455dd9a103ee752e8fded54046fbdb68251a895f510bd83607d11156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2935ba3455dd9a103ee752e8fded54046fbdb68251a895f510bd83607d11156->enter($__internal_a2935ba3455dd9a103ee752e8fded54046fbdb68251a895f510bd83607d11156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a2935ba3455dd9a103ee752e8fded54046fbdb68251a895f510bd83607d11156->leave($__internal_a2935ba3455dd9a103ee752e8fded54046fbdb68251a895f510bd83607d11156_prof);

        
        $__internal_033d37388b409feadb69c6a41e170f5a810132178790bcd0aa130d8f65e82859->leave($__internal_033d37388b409feadb69c6a41e170f5a810132178790bcd0aa130d8f65e82859_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_311ab06482df7f0fa18e221dccdffab7a1cc897200959b4df3dbd0fab0c81d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311ab06482df7f0fa18e221dccdffab7a1cc897200959b4df3dbd0fab0c81d8c->enter($__internal_311ab06482df7f0fa18e221dccdffab7a1cc897200959b4df3dbd0fab0c81d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d02591a168572f740adc552cb738eeceb580aa960bf28d77ec64e5602402573a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02591a168572f740adc552cb738eeceb580aa960bf28d77ec64e5602402573a->enter($__internal_d02591a168572f740adc552cb738eeceb580aa960bf28d77ec64e5602402573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d02591a168572f740adc552cb738eeceb580aa960bf28d77ec64e5602402573a->leave($__internal_d02591a168572f740adc552cb738eeceb580aa960bf28d77ec64e5602402573a_prof);

        
        $__internal_311ab06482df7f0fa18e221dccdffab7a1cc897200959b4df3dbd0fab0c81d8c->leave($__internal_311ab06482df7f0fa18e221dccdffab7a1cc897200959b4df3dbd0fab0c81d8c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d03af626c4763da5c8b2b8d7056d8b409f35ec8393d2a3493ce0b3cc5bad32b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03af626c4763da5c8b2b8d7056d8b409f35ec8393d2a3493ce0b3cc5bad32b8->enter($__internal_d03af626c4763da5c8b2b8d7056d8b409f35ec8393d2a3493ce0b3cc5bad32b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d30e462608a2fa3b4854cf83482b4897945bebbc6667ef8766133c9a1bb6bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d30e462608a2fa3b4854cf83482b4897945bebbc6667ef8766133c9a1bb6bd5->enter($__internal_5d30e462608a2fa3b4854cf83482b4897945bebbc6667ef8766133c9a1bb6bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5d30e462608a2fa3b4854cf83482b4897945bebbc6667ef8766133c9a1bb6bd5->leave($__internal_5d30e462608a2fa3b4854cf83482b4897945bebbc6667ef8766133c9a1bb6bd5_prof);

        
        $__internal_d03af626c4763da5c8b2b8d7056d8b409f35ec8393d2a3493ce0b3cc5bad32b8->leave($__internal_d03af626c4763da5c8b2b8d7056d8b409f35ec8393d2a3493ce0b3cc5bad32b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
