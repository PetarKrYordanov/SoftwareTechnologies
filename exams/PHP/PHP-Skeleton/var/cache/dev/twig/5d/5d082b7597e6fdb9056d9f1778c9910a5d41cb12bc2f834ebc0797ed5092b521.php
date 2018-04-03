<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ac4577b33a1508f28febae67b77f8b093663a6c91b13d448e6865acd42e10dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a74fd480073bbf4570cc4852ce5effa687766b99b5935988bc7c34635461dee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74fd480073bbf4570cc4852ce5effa687766b99b5935988bc7c34635461dee6->enter($__internal_a74fd480073bbf4570cc4852ce5effa687766b99b5935988bc7c34635461dee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_33b17a2b8e4c11c625dc6f1d3de716a6862f02cbca9e18eea4f5301648ac9dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b17a2b8e4c11c625dc6f1d3de716a6862f02cbca9e18eea4f5301648ac9dc1->enter($__internal_33b17a2b8e4c11c625dc6f1d3de716a6862f02cbca9e18eea4f5301648ac9dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a74fd480073bbf4570cc4852ce5effa687766b99b5935988bc7c34635461dee6->leave($__internal_a74fd480073bbf4570cc4852ce5effa687766b99b5935988bc7c34635461dee6_prof);

        
        $__internal_33b17a2b8e4c11c625dc6f1d3de716a6862f02cbca9e18eea4f5301648ac9dc1->leave($__internal_33b17a2b8e4c11c625dc6f1d3de716a6862f02cbca9e18eea4f5301648ac9dc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bf1fbfe88c3d9cd48e742836d6036bb941a3d88ec0fba9a94916db9a6e88ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf1fbfe88c3d9cd48e742836d6036bb941a3d88ec0fba9a94916db9a6e88ce7->enter($__internal_9bf1fbfe88c3d9cd48e742836d6036bb941a3d88ec0fba9a94916db9a6e88ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb250916c93d4821c0f63289d6e2c7ba67b730f24e911b9f53b4f700d908000c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb250916c93d4821c0f63289d6e2c7ba67b730f24e911b9f53b4f700d908000c->enter($__internal_cb250916c93d4821c0f63289d6e2c7ba67b730f24e911b9f53b4f700d908000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cb250916c93d4821c0f63289d6e2c7ba67b730f24e911b9f53b4f700d908000c->leave($__internal_cb250916c93d4821c0f63289d6e2c7ba67b730f24e911b9f53b4f700d908000c_prof);

        
        $__internal_9bf1fbfe88c3d9cd48e742836d6036bb941a3d88ec0fba9a94916db9a6e88ce7->leave($__internal_9bf1fbfe88c3d9cd48e742836d6036bb941a3d88ec0fba9a94916db9a6e88ce7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_96a56c695f9ba3b742aae43bf21b380bcc0b1e4004f50342e5b8fc16c2b3f2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a56c695f9ba3b742aae43bf21b380bcc0b1e4004f50342e5b8fc16c2b3f2c0->enter($__internal_96a56c695f9ba3b742aae43bf21b380bcc0b1e4004f50342e5b8fc16c2b3f2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfa7ce1014976c0ebff3481caba12130b38b270e660cfce10a633077ca13ef80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa7ce1014976c0ebff3481caba12130b38b270e660cfce10a633077ca13ef80->enter($__internal_bfa7ce1014976c0ebff3481caba12130b38b270e660cfce10a633077ca13ef80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bfa7ce1014976c0ebff3481caba12130b38b270e660cfce10a633077ca13ef80->leave($__internal_bfa7ce1014976c0ebff3481caba12130b38b270e660cfce10a633077ca13ef80_prof);

        
        $__internal_96a56c695f9ba3b742aae43bf21b380bcc0b1e4004f50342e5b8fc16c2b3f2c0->leave($__internal_96a56c695f9ba3b742aae43bf21b380bcc0b1e4004f50342e5b8fc16c2b3f2c0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4673b948edd9519642bcfcc303897d3e670804fc4cbf51d26741a28a3d8432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4673b948edd9519642bcfcc303897d3e670804fc4cbf51d26741a28a3d8432->enter($__internal_6c4673b948edd9519642bcfcc303897d3e670804fc4cbf51d26741a28a3d8432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9aaca0f071df0ae1089366ac1e5ea59f40124f4c10e857df4994b785947bae19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aaca0f071df0ae1089366ac1e5ea59f40124f4c10e857df4994b785947bae19->enter($__internal_9aaca0f071df0ae1089366ac1e5ea59f40124f4c10e857df4994b785947bae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9aaca0f071df0ae1089366ac1e5ea59f40124f4c10e857df4994b785947bae19->leave($__internal_9aaca0f071df0ae1089366ac1e5ea59f40124f4c10e857df4994b785947bae19_prof);

        
        $__internal_6c4673b948edd9519642bcfcc303897d3e670804fc4cbf51d26741a28a3d8432->leave($__internal_6c4673b948edd9519642bcfcc303897d3e670804fc4cbf51d26741a28a3d8432_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "F:\\projects\\exams\\rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
