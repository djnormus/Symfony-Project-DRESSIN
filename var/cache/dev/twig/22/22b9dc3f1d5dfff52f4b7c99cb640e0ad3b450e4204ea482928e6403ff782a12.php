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

/* admin/editPromo.html.twig */
class __TwigTemplate_2a63facd8857f399f08ec347ee89631538df8d46d181fae007fa2cfc475becd8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editPromo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editPromo.html.twig"));

        $this->parent = $this->loadTemplate("panelAdmin.html.twig", "admin/editPromo.html.twig", 1);
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
        echo "Editer une promo
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
<form class=\"mb-5\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPromo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "param" => (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Code promo</label>
        <input type=\"text\" name=\"code\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\"
            aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Date de début</label>
        <input type=\"date\" name=\"startDate\" ";
        // line 17
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 17, $this->source); })()), "startDate", [], "any", false, false, false, 17))) {
            // line 18
            echo "            value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 18, $this->source); })()), "startDate", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=null ";
        }
        echo " class=\"form-control\"
            id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Date de fin</label>
        <input type=\"date\" name=\"endDate\" ";
        // line 23
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 23, $this->source); })()), "endDate", [], "any", false, false, false, 23))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 23, $this->source); })()), "endDate", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
            echo "\"
            ";
        } else {
            // line 24
            echo " value=null ";
        }
        echo " class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Valeur</label>
        <input type=\"number\" name=\"value\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 28, $this->source); })()), "value", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\"
            aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Type</label>
        <select class=\"form-select\" name=\"type\" aria-label=\"Default select example\">
            <option ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34) == 0)) {
            echo " selected ";
        }
        echo " value=\"0\">Remise en pourcentage</option>
            <option ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35) == 1)) {
            echo " selected ";
        }
        echo " value=\"1\">Remise fixe</option>
        </select>
    </div>

    ";
        // line 39
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 39, $this->source); })()) == "section")) {
            // line 40
            echo "
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
        <select class=\"form-select\" name=\"section\" aria-label=\"Default select example\">
            <option ";
            // line 44
            if (((((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 44, $this->source); })()) == "section") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 44, $this->source); })()), "section", [], "any", false, false, false, 44))) && (twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 44, $this->source); })()), "section", [], "any", false, false, false, 44) == "femme"))) {
                echo " selected ";
            }
            // line 45
            echo " value=\"femme\">Femme</option>
            <option ";
            // line 46
            if (((((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 46, $this->source); })()) == "section") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 46, $this->source); })()), "section", [], "any", false, false, false, 46))) && (twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 46, $this->source); })()), "section", [], "any", false, false, false, 46) == "enfant"))) {
                echo " selected ";
            }
            // line 47
            echo " value=\"enfant\">Enfant</option>
            <option ";
            // line 48
            if (((((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 48, $this->source); })()) == "section") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 48, $this->source); })()), "section", [], "any", false, false, false, 48))) && (twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 48, $this->source); })()), "section", [], "any", false, false, false, 48) == "homme"))) {
                echo " selected ";
            }
            // line 49
            echo " value=\"homme\">Homme</option>
        </select>
    </div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 54, $this->source); })()) == "category")) {
            // line 55
            echo "
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
        <select class=\"form-select\" name=\"category\" aria-label=\"Default select example\">
            <option selected>sélectionner la cible visée</option>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 61
                echo "            <option ";
                if (((((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 61, $this->source); })()) == "category") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 61, $this->source); })()), "subCategory", [], "any", false, false, false, 61))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 61, $this->source); })()), "subCategory", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 61)))) {
                    // line 62
                    echo "                selected ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 62), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 62), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </select>
    </div>
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 68, $this->source); })()) == "subCategory")) {
            // line 69
            echo "
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
        <select class=\"form-select\" name=\"subCategory\" aria-label=\"Default select example\">
            <option selected>sélectionner la cible visée</option>
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subCategories"]) || array_key_exists("subCategories", $context) ? $context["subCategories"] : (function () { throw new RuntimeError('Variable "subCategories" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 75
                echo "            <option ";
                if (((((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 75, $this->source); })()) == "subCategory") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 75, $this->source); })()), "category", [], "any", false, false, false, 75))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 75, $this->source); })()), "category", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75) == twig_get_attribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 75)))) {
                    // line 76
                    echo "                selected ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 76), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "title", [], "any", false, false, false, 76), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </select>
    </div>
    ";
        }
        // line 81
        echo "
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Modifier la cible ?</label><br>
        ";
        // line 84
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 84, $this->source); })()) != "category")) {
            // line 85
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPromo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "param" => "category"]), "html", null, true);
            echo "\" class=\"btn btn-primary\">affecter à promo
            catégorie</a>
        ";
        }
        // line 88
        echo "        ";
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 88, $this->source); })()) != "subCategory")) {
            // line 89
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPromo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "param" => "subCategory"]), "html", null, true);
            echo "\" class=\"btn btn-primary\">affecter à promo
            sous-category</a>
        ";
        }
        // line 92
        echo "        ";
        if (((isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 92, $this->source); })()) != "section")) {
            // line 93
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPromo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93), "param" => "section"]), "html", null, true);
            echo "\" class=\"btn btn-primary\">affecter à promo
            section</a>
        ";
        }
        // line 96
        echo "    </div>

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
        return "admin/editPromo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 96,  294 => 93,  291 => 92,  284 => 89,  281 => 88,  274 => 85,  272 => 84,  267 => 81,  262 => 78,  249 => 76,  246 => 75,  242 => 74,  235 => 69,  233 => 68,  230 => 67,  225 => 64,  212 => 62,  209 => 61,  205 => 60,  198 => 55,  196 => 54,  193 => 53,  187 => 49,  183 => 48,  180 => 47,  176 => 46,  173 => 45,  169 => 44,  163 => 40,  161 => 39,  152 => 35,  146 => 34,  137 => 28,  129 => 24,  122 => 23,  109 => 18,  107 => 17,  99 => 12,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panelAdmin.html.twig' %}

{% block title %}
Editer une promo
{% endblock %}

{% block body %}

<form class=\"mb-5\" action=\"{{ path('editPromo', { id: promo.id, param:param}) }}\" method=\"post\">
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Code promo</label>
        <input type=\"text\" name=\"code\" value=\"{{ promo.code }}\" class=\"form-control\" id=\"exampleInputEmail1\"
            aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Date de début</label>
        <input type=\"date\" name=\"startDate\" {% if promo.startDate is not null %}
            value=\"{{ promo.startDate | date('Y-m-d')}}\" {% else %} value=null {% endif %} class=\"form-control\"
            id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Date de fin</label>
        <input type=\"date\" name=\"endDate\" {% if promo.endDate is not null %} value=\"{{ promo.endDate | date('Y-m-d')}}\"
            {% else %} value=null {% endif %} class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Valeur</label>
        <input type=\"number\" name=\"value\" value=\"{{ promo.value }}\" class=\"form-control\" id=\"exampleInputEmail1\"
            aria-describedby=\"emailHelp\">
    </div>
    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Type</label>
        <select class=\"form-select\" name=\"type\" aria-label=\"Default select example\">
            <option {% if promo.type==0 %} selected {% endif%} value=\"0\">Remise en pourcentage</option>
            <option {% if promo.type==1 %} selected {% endif%} value=\"1\">Remise fixe</option>
        </select>
    </div>

    {% if param== 'section' %}

    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
        <select class=\"form-select\" name=\"section\" aria-label=\"Default select example\">
            <option {% if param=='section' and promo.section is not null and promo.section=='femme' %} selected {%
                endif%} value=\"femme\">Femme</option>
            <option {% if param=='section' and promo.section is not null and promo.section=='enfant' %} selected {%
                endif%} value=\"enfant\">Enfant</option>
            <option {% if param=='section' and promo.section is not null and promo.section=='homme' %} selected {%
                endif%} value=\"homme\">Homme</option>
        </select>
    </div>
    {% endif %}

    {% if param== 'category' %}

    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Cible</label>
        <select class=\"form-select\" name=\"category\" aria-label=\"Default select example\">
            <option selected>sélectionner la cible visée</option>
            {% for category in categories %}
            <option {% if param=='category' and promo.subCategory is not null and promo.subCategory.id==category.id %}
                selected {% endif%} value=\"{{ category.id }}\">{{ category.title }}</option>
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
            <option {% if param=='subCategory' and promo.category is not null and promo.category.id==subCategory.id %}
                selected {% endif%} value=\"{{ subCategory.id }}\">{{ subCategory.title }}</option>
            {% endfor %}
        </select>
    </div>
    {% endif %}

    <div class=\"mb-3\">
        <label for=\"exampleInputEmail1\" class=\"form-label\">Modifier la cible ?</label><br>
        {% if param != 'category' %}
        <a href=\"{{ path('editPromo', { id: promo.id, param: 'category' }) }}\" class=\"btn btn-primary\">affecter à promo
            catégorie</a>
        {% endif %}
        {% if param != 'subCategory' %}
        <a href=\"{{ path('editPromo', {id: promo.id,  param: 'subCategory' }) }}\" class=\"btn btn-primary\">affecter à promo
            sous-category</a>
        {% endif %}
        {% if param != 'section' %}
        <a href=\"{{ path('editPromo', { id: promo.id, param: 'section' }) }}\" class=\"btn btn-primary\">affecter à promo
            section</a>
        {% endif %}
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">
        Valider

    </button>
</form>



{% endblock %}", "admin/editPromo.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/admin/editPromo.html.twig");
    }
}
