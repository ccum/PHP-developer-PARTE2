<?php

/* employeDetail.html.twig */
class __TwigTemplate_288fb0dbed0e64784b02f58b0939cf83ecfc222a7060649125696f3887e0d8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "employeDetail.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "         <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1> Employe Detail</h1>
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"nameinp\">Name</label>
                              
                              <input class=\"form-control\" type=\"text\" id=\"nameinp\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "name", array()), "html", null, true);
        echo "\" readonly>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"emailinp\">Email</label>
                              <input class=\"form-control\" type=\"text\" id=\"emailinp\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "email", array()), "html", null, true);
        echo "\" readonly>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"phoneinp\">Phone</label>
                              <input class=\"form-control\" type=\"text\" id=\"phoneinp\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "phone", array()), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"addressinp\">Address</label>
                              <input class=\"form-control\" type=\"text\" id=\"addressinp\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "address", array()), "html", null, true);
        echo "\" readonly>
                            </div>
                          
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"positioninp\">Position</label>
                              <input class=\"form-control\" type=\"text\" id=\"positioninp\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "position", array()), "html", null, true);
        echo "\" readonly>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"salaryinp\">Salary</label>
                              <input class=\"form-control\" type=\"text\" id=\"salaryinp\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "salary", array()), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><strong>Skills</strong></h3>
                  </div>
                  <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-condensed\">
                        <thead>
                              <tr>
                                
                                <td><strong>Name</strong></td>
       
                              </tr>
                        </thead>
                        <tbody>
                          <!-- foreach (\$order->lineItems as \$line) or some such thing here -->
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["employeeReturn"] ?? null), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 59
            echo "                                <tr>

                                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["skill"], "skill", array()), "html", null, true);
            echo "</td>
                               
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
";
    }

    public function getTemplateName()
    {
        return "employeDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 65,  114 => 61,  110 => 59,  106 => 58,  80 => 35,  73 => 31,  65 => 26,  56 => 20,  49 => 16,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block body %}
         <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1> Employe Detail</h1>
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"nameinp\">Name</label>
                              
                              <input class=\"form-control\" type=\"text\" id=\"nameinp\" value=\"{{employeeReturn.name}}\" readonly>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"emailinp\">Email</label>
                              <input class=\"form-control\" type=\"text\" id=\"emailinp\" value=\"{{employeeReturn.email}}\" readonly>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"phoneinp\">Phone</label>
                              <input class=\"form-control\" type=\"text\" id=\"phoneinp\" value=\"{{employeeReturn.phone}}\" readonly>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"addressinp\">Address</label>
                              <input class=\"form-control\" type=\"text\" id=\"addressinp\" value=\"{{employeeReturn.address}}\" readonly>
                            </div>
                          
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"positioninp\">Position</label>
                              <input class=\"form-control\" type=\"text\" id=\"positioninp\" value=\"{{employeeReturn.position}}\" readonly>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label\" for=\"salaryinp\">Salary</label>
                              <input class=\"form-control\" type=\"text\" id=\"salaryinp\" value=\"{{employeeReturn.salary}}\" readonly>
                            </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><strong>Skills</strong></h3>
                  </div>
                  <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-condensed\">
                        <thead>
                              <tr>
                                
                                <td><strong>Name</strong></td>
       
                              </tr>
                        </thead>
                        <tbody>
                          <!-- foreach (\$order->lineItems as \$line) or some such thing here -->
                            {% for skill in employeeReturn.skills %}
                                <tr>

                                <td>{{skill.skill}}</td>
                               
                                </tr>
                            {% endfor %}
                                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
{% endblock %}
", "employeDetail.html.twig", "C:\\xampp\\htdocs\\devsac\\templates\\employeDetail.html.twig");
    }
}
