<?php

/* layout.html.twig */
class __TwigTemplate_c3ce2f1d27bfae30c1437090c662067ca057e6675276085d92d3732c589b75f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Slim 3</title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        <style>
            .starter-template {
                padding: 40px 15px;
   
            }
        </style>
        
    </head>
<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\"> Developers SAC</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("employees"), "html", null, true);
        echo "\">Employees</a></li>
            <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("searchByRangeSalary", array("min" => 1000, "max" => 1500)), "html", null, true);
        echo "\">Web Service</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "      </div>

    </div><!-- /.container -->

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "</body>
</html>
";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "
            ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
  
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  99 => 51,  94 => 45,  91 => 44,  85 => 61,  83 => 51,  77 => 47,  75 => 44,  63 => 35,  59 => 34,  52 => 30,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Slim 3</title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        <style>
            .starter-template {
                padding: 40px 15px;
   
            }
        </style>
        
    </head>
<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{ path_for('home')}}\"> Developers SAC</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"{{ path_for('employees')}}\">Employees</a></li>
            <li><a href=\"{{ path_for('searchByRangeSalary',{'min': 1000,'max': 1500 })}}\">Web Service</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
            {% block body %}

            {% endblock %}
      </div>

    </div><!-- /.container -->

    {% block javascripts %}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
  
    {% endblock %}
</body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\devsac\\templates\\layout.html.twig");
    }
}
