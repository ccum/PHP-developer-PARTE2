<?php

/* index.html.twig */
class __TwigTemplate_0977dce672c57546ed0701a4925461649fdb8a37266d891f8108be670acf608f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Bienvenido al Sistema de personal</h1>
    <p class=\"lead\">Use el menú de navegación</p>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
        
{% block body %}
    <h1>Bienvenido al Sistema de personal</h1>
    <p class=\"lead\">Use el menú de navegación</p>
{% endblock %}


", "index.html.twig", "C:\\xampp\\htdocs\\devsac\\templates\\index.html.twig");
    }
}
