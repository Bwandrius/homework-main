<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/article-edit.html.twig */
class __TwigTemplate_32cfcd10e0013a30921c10315c269ae4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article-edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/article-edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 17
        echo "
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Edit Article</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "

                        <div class=\"mb-3\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 29, $this->source); })()), "Title", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 30, $this->source); })()), "Title", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 31, $this->source); })()), "Title", [], "any", false, false, false, 31), 'errors');
        echo "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), 'errors');
        echo "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 39, $this->source); })()), "text", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 40, $this->source); })()), "text", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 41, $this->source); })()), "text", [], "any", false, false, false, 41), 'errors');
        echo "
                        </div>

                        <div class=\"d-flex justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save</button>
                            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Back</a>
                        </div>
                        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/article-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  123 => 46,  115 => 41,  111 => 40,  107 => 39,  101 => 36,  97 => 35,  93 => 34,  87 => 31,  83 => 30,  79 => 29,  73 => 26,  62 => 17,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}

{#    <div class=\"card\">#}
{#        <div class=\"card-header\">#}
{#            <h5 class=\"card-title\">Edit Article</h5>#}
{#        </div>#}
{#        <div class=\"card-body\">#}
{#            {{ form_start(articleForm) }}#}
{#            {{ form_widget(articleForm) }}#}
{#            <button type=\"submit\" class=\"btn btn-primary\">Save</button>#}
{#            {{ form_end(articleForm) }}#}
{#            <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary px-3 gap-3\">Back</a>#}
{#        </div>#}
{#    </div>#}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Edit Article</h5>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(articleForm, {'attr': {'class': 'form-horizontal'}}) }}

                        <div class=\"mb-3\">
                            {{ form_label(articleForm.Title, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(articleForm.Title, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(articleForm.Title) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(articleForm.image, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(articleForm.image, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(articleForm.image) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(articleForm.text, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(articleForm.text, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(articleForm.text) }}
                        </div>

                        <div class=\"d-flex justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save</button>
                            <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary\">Back</a>
                        </div>
                        {{ form_end(articleForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pages/article-edit.html.twig", "/code/templates/pages/article-edit.html.twig");
    }
}
