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

/* home/filterProduct.html.twig */
class __TwigTemplate_502e6fc8add3945a2ca0957a8fcb840f881798503f7ddde2073add91167326b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filterProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filterProduct.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/filterProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row mb-4\">
    <div class=\"col-md-4\">
        <a href=\" ";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filterProduct", ["param" => "femme"]);
        echo " \" type=\"button\"
            class=\"btn btn-outline-secondary rounded \">Femme</a>
        <a href=\" ";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filterProduct", ["param" => "homme"]);
        echo " \" type=\"button\"
            class=\"btn btn-outline-secondary rounded mx-2\">Homme</a>
        <a href=\" ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filterProduct", ["param" => "enfant"]);
        echo " \" type=\"button\"
            class=\"btn btn-outline-secondary rounded\">Enfant</a>
    </div>
</div>
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

<a href=\"\" onclick=\"loadForm(event)\" class=\"btn btn-primary p-1\">+ de filtres</a>

<div id=\"form\">

    <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filterValidate");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"section\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            ";
        // line 23
        if (((isset($context["affichage"]) || array_key_exists("affichage", $context) ? $context["affichage"] : (function () { throw new RuntimeError('Variable "affichage" does not exist.', 23, $this->source); })()) == "categorie")) {
            // line 24
            echo "
            <label for=\"exampleSelect1\" class=\"form-label mt-4\">Catégories</label>
            <select class=\"form-select\" name=\"cat\" id=\"exampleSelect1\">
                <option value=\"all\">Toutes nos catégories</option>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "                <option ";
                if ((twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), 0, [], "array", true, true, false, 29) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()), 0, [], "array", false, false, false, 29), "Category", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29)))) {
                    echo " selected ";
                }
                // line 30
                echo "                    value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 30), "html", null, true);
                echo " </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </select>



            ";
        } else {
            // line 37
            echo "            <label for=\"exampleSelect1\" class=\"form-label mt-4\">Sous-Catégories</label>
            <select class=\"form-select\" name=\"subCat\" id=\"exampleSelect1\">
                <option value=\"all\">Toutes nos sous-catégories</option>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousCategories"]) || array_key_exists("sousCategories", $context) ? $context["sousCategories"] : (function () { throw new RuntimeError('Variable "sousCategories" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 41
                echo "
                <option ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), 0, [], "array", true, true, false, 42) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 42, $this->source); })()), 0, [], "array", false, false, false, 42), "category", [], "any", false, false, false, 42), "subCategory", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 42)))) {
                    echo " selected ";
                }
                // line 43
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 43), "html", null, true);
                echo " </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </select>


            ";
        }
        // line 49
        echo "        </div>
        <div class=\"pt-4\">
            <label for=\"\">Votre budget</label>
            <div class=\"range-wrap mt-4 ms-3 \">
                <div class=\"range-value\" id=\"rangeV\"></div>
                <input id=\"range\" name=\"prixmax\" type=\"range\" min=\"0\" max=\"1500\" value=\"0\" step=\"50\">
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
    </form>
</div>
<div class=\"row justify-content-between ms-0 mt-3\">

    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 64
            echo "
    <div class=\"card col-md-3\" style=\"width: 18rem;\">
        <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 66), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</h5>
            <h4 class=\"card-title\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69), "EUR"), "html", null, true);
            echo " </h4>
            <p class=\"card-text\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 71), "param" => "home"]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Ajouter
                au panier</a>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "    <h1>Aucun résultat</h1>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
</div>

<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

<script>
    const
        range = document.getElementById('range'),
        rangeV = document.getElementById('rangeV'),
        setValue = () => {
            const
                newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
                newPosition = 10 - (newValue * 0.2);
            rangeV.innerHTML = `<span>\${range.value}</span>`;
            rangeV.style.left = `calc(\${newValue}% + (\${newPosition}px))`;

        };


    document.addEventListener(\"DOMContentLoaded\", setValue);
    range.addEventListener('input', setValue);

    document.querySelector(\"#hamburger\").addEventListener(\"click\", function () {
        document.querySelector(\".nav\").classList.add(\"visible\");
    })

    document.querySelector(\".close-nav\").addEventListener(\"click\", function () {
        document.querySelector(\".nav\").classList.remove(\"visible\");
    })
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/filterProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 81,  237 => 78,  230 => 76,  220 => 71,  216 => 70,  212 => 69,  208 => 68,  200 => 66,  196 => 64,  191 => 63,  175 => 49,  169 => 45,  158 => 43,  154 => 42,  151 => 41,  147 => 40,  142 => 37,  135 => 32,  124 => 30,  119 => 29,  115 => 28,  109 => 24,  107 => 23,  102 => 21,  98 => 20,  89 => 14,  82 => 10,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row mb-4\">
    <div class=\"col-md-4\">
        <a href=\" {{ path('filterProduct', {param: 'femme' }) }} \" type=\"button\"
            class=\"btn btn-outline-secondary rounded \">Femme</a>
        <a href=\" {{ path('filterProduct', {param: 'homme' }) }} \" type=\"button\"
            class=\"btn btn-outline-secondary rounded mx-2\">Homme</a>
        <a href=\" {{ path('filterProduct', {param: 'enfant' }) }} \" type=\"button\"
            class=\"btn btn-outline-secondary rounded\">Enfant</a>
    </div>
</div>
<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

<a href=\"\" onclick=\"loadForm(event)\" class=\"btn btn-primary p-1\">+ de filtres</a>

<div id=\"form\">

    <form action=\"{{ path('filterValidate') }}\" method=\"post\">
        <input type=\"hidden\" name=\"section\" value=\"{{ param }}\">
        <div class=\"form-group\">
            {% if affichage == 'categorie' %}

            <label for=\"exampleSelect1\" class=\"form-label mt-4\">Catégories</label>
            <select class=\"form-select\" name=\"cat\" id=\"exampleSelect1\">
                <option value=\"all\">Toutes nos catégories</option>
                {% for category in categories %}
                <option {% if products[0] is defined and products[0].Category.id==category.id %} selected {% endif %}
                    value=\"{{ category.id }}\">{{ category.title }} </option>
                {% endfor %}
            </select>



            {% else %}
            <label for=\"exampleSelect1\" class=\"form-label mt-4\">Sous-Catégories</label>
            <select class=\"form-select\" name=\"subCat\" id=\"exampleSelect1\">
                <option value=\"all\">Toutes nos sous-catégories</option>
                {% for category in sousCategories %}

                <option {% if products[0] is defined and products[0].category.subCategory.id==category.id %} selected {%
                    endif %} value=\"{{ category.id }}\">{{ category.title }} </option>
                {% endfor %}
            </select>


            {% endif %}
        </div>
        <div class=\"pt-4\">
            <label for=\"\">Votre budget</label>
            <div class=\"range-wrap mt-4 ms-3 \">
                <div class=\"range-value\" id=\"rangeV\"></div>
                <input id=\"range\" name=\"prixmax\" type=\"range\" min=\"0\" max=\"1500\" value=\"0\" step=\"50\">
            </div>
        </div>

        <button type=\"submit\" class=\"btn btn-primary mt-2\">Filtrer</button>
    </form>
</div>
<div class=\"row justify-content-between ms-0 mt-3\">

    {% for product in products %}

    <div class=\"card col-md-3\" style=\"width: 18rem;\">
        <img src=\"{{ asset('upload/') }}{{ product.picture }}\" class=\"card-img-top\" alt=\"{{ product.title }}\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">{{ product.title }}</h5>
            <h4 class=\"card-title\">{{ product.price | format_currency('EUR') }} </h4>
            <p class=\"card-text\">{{ product.description }}</p>
            <a href=\"{{ path('addCart', { id: product.id, param: 'home' }) }}\" class=\"btn btn-primary\">Ajouter
                au panier</a>
        </div>
    </div>
    {% else %}
    <h1>Aucun résultat</h1>
    {% endfor %}

</div>

<script src=\"{{ asset('js/script.js') }}\"></script>

<script>
    const
        range = document.getElementById('range'),
        rangeV = document.getElementById('rangeV'),
        setValue = () => {
            const
                newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
                newPosition = 10 - (newValue * 0.2);
            rangeV.innerHTML = `<span>\${range.value}</span>`;
            rangeV.style.left = `calc(\${newValue}% + (\${newPosition}px))`;

        };


    document.addEventListener(\"DOMContentLoaded\", setValue);
    range.addEventListener('input', setValue);

    document.querySelector(\"#hamburger\").addEventListener(\"click\", function () {
        document.querySelector(\".nav\").classList.add(\"visible\");
    })

    document.querySelector(\".close-nav\").addEventListener(\"click\", function () {
        document.querySelector(\".nav\").classList.remove(\"visible\");
    })
</script>


{% endblock %}", "home/filterProduct.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/home/filterProduct.html.twig");
    }
}
