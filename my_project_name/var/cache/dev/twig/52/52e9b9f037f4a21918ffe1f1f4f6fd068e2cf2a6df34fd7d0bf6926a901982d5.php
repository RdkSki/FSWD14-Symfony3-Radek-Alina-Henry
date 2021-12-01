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

/* todo/index.html.twig */
class __TwigTemplate_12ac84b0d27deb671408f05b762f91e2ac9e4266a710ae95903323996919d81a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todo/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TodoController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"page-header\"> Latest todos </h2>

    <table class=\"table table-striped\">

        <thead>

            <tr>

                <th>#</th>

                <th>Todo</th>

                <th>Due Date</th>

                <th></th>

            </tr>

        </thead>

        <tbody>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) || array_key_exists("todos", $context) ? $context["todos"] : (function () { throw new RuntimeError('Variable "todos" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            echo " ";
            // line 28
            echo "
        

                <tr>

                    <th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</th> ";
            // line 34
            echo "
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td> ";
            // line 36
            echo "
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "dueDate", [], "any", false, false, false, 37), "F j, Y, g:i a"), "html", null, true);
            echo "</td> ";
            // line 38
            echo "
                    <td> <a href=\"/details/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a> ";
            echo "   

                        <a href=\"/edit/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>

                        <a href=\"/delete/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>       

                    </td>

                </tr> 

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        </tbody>

    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  152 => 43,  147 => 41,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  116 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TodoController!{% endblock %}

{% block body %}
    <h2 class=\"page-header\"> Latest todos </h2>

    <table class=\"table table-striped\">

        <thead>

            <tr>

                <th>#</th>

                <th>Todo</th>

                <th>Due Date</th>

                <th></th>

            </tr>

        </thead>

        <tbody>
  {% for todo in todos %} {# making a loop in twig inside the variable todos #}

        

                <tr>

                    <th scope=\"row\">{{todo.id}}</th> {# the id of the todo #}

                    <td>{{todo.name}}</td> {# the name of the todo #}

                    <td>{{todo.dueDate|date('F j, Y, g:i a')}}</td> {# the duedate of the todo, when we want to print a date we must choose the format |date('F j, Y, g:i a') otherwise we will have error #}

                    <td> <a href=\"/details/{{todo.id}}\" class=\"btn btn-success\">View</a> {# a tag to go to the path /details/{{todo.id}} so we send the id of the record with the path (like when we are using get method ) #}   

                        <a href=\"/edit/{{todo.id}}\" class=\"btn btn-default\">Edit</a>

                        <a href=\"/delete/{{todo.id}}\" class=\"btn btn-danger\">Delete</a>       

                    </td>

                </tr> 

            {% endfor %}

        </tbody>

    </table>
{% endblock %}
", "todo/index.html.twig", "C:\\xampp\\htdocs\\Symfony3\\FSWD14-Symfony3-Radek-Alina-Henry\\FSWD14-Symfony3-Radek-Alina-Henry\\my_project_name\\templates\\todo\\index.html.twig");
    }
}
