<?php

/* employees.html.twig */
class __TwigTemplate_fb3fb8d0c09ffddce3d477b03de98f69c193538a971dc07f66ed563ed0ec3785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "employees.html.twig", 1);
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
        echo "
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>Employees   List</h1>
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                         <div class=\"input-group\">
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Searh</button>
                          </span>
                          <input type=\"text\" class=\"form-control\" placeholder=\"user@fanfare.com\">
                        </div><!-- /input-group -->
                  </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Salary</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tbody>

                     ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listEmployees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 32
            echo "                        <tr>

                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empleado"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empleado"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empleado"], "position", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empleado"], "salary", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("employeeDetail", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["empleado"], "id", array()))), "html", null, true);
            echo "\">Detail</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "   
                  </tbody>
                </table>
            </div>
          </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  65 => 32,  61 => 31,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block body %}

    <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>Employees   List</h1>
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                         <div class=\"input-group\">
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Searh</button>
                          </span>
                          <input type=\"text\" class=\"form-control\" placeholder=\"user@fanfare.com\">
                        </div><!-- /input-group -->
                  </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Salary</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tbody>

                     {% for empleado in listEmployees %}
                        <tr>

                        <td>{{empleado.name}}</td>
                        <td>{{empleado.email}}</td>
                        <td>{{empleado.position}}</td>
                        <td>{{empleado.salary}}</td>
                        <td><a href=\"{{ path_for('employeeDetail', {'id': empleado.id}) }}\">Detail</a></td>
                        </tr>
                    {% endfor %}
   
                  </tbody>
                </table>
            </div>
          </div>
      </div>
{% endblock %}
", "employees.html.twig", "C:\\xampp\\htdocs\\devsac\\templates\\employees.html.twig");
    }
}
