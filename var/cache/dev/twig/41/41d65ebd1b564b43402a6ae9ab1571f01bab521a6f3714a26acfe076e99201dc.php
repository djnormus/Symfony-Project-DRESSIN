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

/* admin/addPromo.html.twig */
class __TwigTemplate_173d6968ca5b52af3583729d27c83f4c29936a07636c1019f4e297a50e026655 extends Template
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
        return "panelAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addPromo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addPromo.html.twig"));

        $this->parent = $this->loadTemplate("panelAdmin.html.twig", "admin/addPromo.html.twig", 1);
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

        // line 4
        echo "Ajouter une promo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <form class=\"mb-5\" action=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPromo", ["param" => (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo " \" method=\"post\" >
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Code promo</label>
            <input type=\"text\" name=\"code\" value=\"\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Date de début</label>
            <input type=\"date\" name=\"startDate\" value=null class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Date de fin</label>
            <input type=\"date\" name=\"endDate\" value=null class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Valeur</label>
            <input type=\"number\" name=\"value\" value=\"\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Type</label>
            <select class=\"form-select\" name=\"type\" aria-label=\"Default select example\">
                <option selected>sélectionner le type</option>
                <option value=\"0\">Remise en pourcentage</option>
                <option value=\"1\">Remise fixe</option>
            </select>
        </div>
        
        ";
        // line 35
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 35, $this->source); })()) == "section")) {
            // line 36
            echo "            
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
            <select class=\"form-select\" name=\"section\" aria-label=\"Default select example\">
                <option selected>sélectionner la cible visée</option>
                <option value=\"femme\">Femme</option>
                <option value=\"enfant\">Enfant</option>
                <option value=\"homme\">Homme</option>
            </select>
        </div>
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 48, $this->source); })()) == "category")) {
            // line 49
            echo "        
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
            <select class=\"form-select\" name=\"category\" aria-label=\"Default select example\">
                <option selected>sélectionner la cible visée</option>
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 55
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 55), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </select>
        </div>
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 61, $this->source); })()) == "subCategory")) {
            // line 62
            echo "        
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
            <select class=\"form-select\" name=\"subCategory\" aria-label=\"Default select example\">
                <option selected>sélectionner la cible visée</option>
                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subCategories"]) || array_key_exists("subCategories", $context) ? $context["subCategories"] : (function () { throw new RuntimeError('Variable "subCategories" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 68
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "title", [], "any", false, false, false, 68), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </select>
        </div>
        ";
        }
        // line 73
        echo "        
        
        
        
        <button type=\"submit\" class=\"btn btn-primary\">
           Valider

        </button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/addPromo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 73,  196 => 70,  185 => 68,  181 => 67,  174 => 62,  172 => 61,  169 => 60,  164 => 57,  153 => 55,  149 => 54,  142 => 49,  140 => 48,  137 => 47,  124 => 36,  122 => 35,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panelAdmin.html.twig' %}

{% block title %}
Ajouter une promo
{% endblock %}

{% block body %}

    <form class=\"mb-5\" action=\" {{ path('addPromo', { param: param}) }} \" method=\"post\" >
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Code promo</label>
            <input type=\"text\" name=\"code\" value=\"\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Date de début</label>
            <input type=\"date\" name=\"startDate\" value=null class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Date de fin</label>
            <input type=\"date\" name=\"endDate\" value=null class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Valeur</label>
            <input type=\"number\" name=\"value\" value=\"\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Type</label>
            <select class=\"form-select\" name=\"type\" aria-label=\"Default select example\">
                <option selected>sélectionner le type</option>
                <option value=\"0\">Remise en pourcentage</option>
                <option value=\"1\">Remise fixe</option>
            </select>
        </div>
        
        {% if param== 'section' %}
            
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
            <select class=\"form-select\" name=\"section\" aria-label=\"Default select example\">
                <option selected>sélectionner la cible visée</option>
                <option value=\"femme\">Femme</option>
                <option value=\"enfant\">Enfant</option>
                <option value=\"homme\">Homme</option>
            </select>
        </div>
        {% endif %}

        {% if param== 'category' %}
        
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
            <select class=\"form-select\" name=\"category\" aria-label=\"Default select example\">
                <option selected>sélectionner la cible visée</option>
                {% for category in categories %}
                <option value=\"{{ category.id }}\">{{ category.title }}</option>
                {% endfor %}
            </select>
        </div>
        {% endif %}

        {% if param=='subCategory' %}
        
        <div class=\"mb-3\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
            <select class=\"form-select\" name=\"subCategory\" aria-label=\"Default select example\">
                <option selected>sélectionner la cible visée</option>
                {% for subCategory in subCategories %}
                    <option value=\"{{ subCategory.id }}\">{{ subCategory.title }}</option>
                {% endfor %}
            </select>
        </div>
        {% endif %}
        
        
        
        
        <button type=\"submit\" class=\"btn btn-primary\">
           Valider

        </button>
    </form>
{% endblock %}", "admin/addPromo.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/admin/addPromo.html.twig");
    }
}
