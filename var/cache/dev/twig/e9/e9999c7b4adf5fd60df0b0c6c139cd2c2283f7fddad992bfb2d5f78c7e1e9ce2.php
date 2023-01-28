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

/* admin/listProduct.html.twig */
class __TwigTemplate_e4963c8532b9546cfeac4eb65976f910b30d904e5c049a5b155fd1b0213b46b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listProduct.html.twig"));

        $this->parent = $this->loadTemplate("panelAdmin.html.twig", "admin/listProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "Liste des produits
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 10
        echo "Liste des produits
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<div class=\"table-responsive text-center\">
\t<table class=\"table table-striped table-sm\">
\t\t<thead>
\t\t\t<tr class=\"bg-primary text-light\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Ref</th>
\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t<th scope=\"col\">Descriptif</th>
\t\t\t\t<th scope=\"col\">Photo</th>
\t\t\t\t<th scope=\"col\">Marque</th>
\t\t\t\t<th scope=\"col\">sous-catégorie</th>
\t\t\t\t<th scope=\"col\">Catégorie</th>
\t\t\t\t<th scope=\"col\">Section</th>
\t\t\t\t<th scope=\"col\">Tailles</th>
\t\t\t\t<th scope=\"col\">Couleurs</th>
\t\t\t\t<th scope=\"col\">Fournisseur</th>
\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "
\t\t\t<tr>
\t\t\t\t<th scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</th>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43), "EUR"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 44), 0, 15) . "..."), "html", null, true);
            echo "</td>
\t\t\t\t";
            // line 46
            echo "\t\t\t\t<td>
\t\t\t\t\t<img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 47), "html", null, true);
            echo " \" width=\"50\" alt=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 47), "html", null, true);
            echo " \">
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 51), "subCategory", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "gender", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>

\t\t\t\t<td> ";
            // line 54
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "sizes", [], "any", false, false, false, 54))) {
                // line 55
                echo "\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "sizes", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                    // line 57
                    echo "\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["size"], "title", [], "any", false, false, false, 57), "html", null, true);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t</td>

\t\t\t\t<td>";
            // line 63
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "colors", [], "any", false, false, false, 63))) {
                // line 64
                echo "
\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "colors", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                    // line 67
                    echo "\t\t\t\t\t\t<div class=\"m-1 col-md-6\"
\t\t\t\t\t\t\tstyle=\"background-color:";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "colorCode", [], "any", false, false, false, 68), "html", null, true);
                    echo ";border: 2px solid grey;width: 30px; min-height: 30px\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t\t\t\t\t</div>

\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t</td>

\t\t\t\t<td>
\t\t\t\t\t";
            // line 77
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "suppliers", [], "any", false, false, false, 77))) {
                // line 78
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "suppliers", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t</td>

\t\t\t\t<td>
\t\t\t\t\t<a href=\" ";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo " \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("update.png"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\talt=\"modifier\"></a>
\t\t\t\t\t<a href=\" ";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo " \"
\t\t\t\t\t\tonclick=\"return confirm('Etes vous sur de vouloir supprimer cet article ?')\"><img
\t\t\t\t\t\t\tsrc=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("delete.png"), "html", null, true);
            echo "\" alt=\"supprimer\"></a>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "

\t\t</tbody>
\t</table>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 92,  276 => 87,  271 => 85,  264 => 83,  259 => 80,  253 => 78,  251 => 77,  246 => 74,  241 => 71,  232 => 68,  229 => 67,  225 => 66,  221 => 64,  219 => 63,  215 => 61,  211 => 59,  202 => 57,  198 => 56,  195 => 55,  193 => 54,  188 => 52,  184 => 51,  180 => 50,  176 => 49,  168 => 47,  165 => 46,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 38,  137 => 37,  113 => 15,  103 => 14,  92 => 10,  82 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panelAdmin.html.twig' %}


{% block title %}
{{ parent() }}Liste des produits
{% endblock %}


{% block titre %}
Liste des produits
{% endblock %}


{% block body %}
<div class=\"table-responsive text-center\">
\t<table class=\"table table-striped table-sm\">
\t\t<thead>
\t\t\t<tr class=\"bg-primary text-light\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Ref</th>
\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t<th scope=\"col\">Descriptif</th>
\t\t\t\t<th scope=\"col\">Photo</th>
\t\t\t\t<th scope=\"col\">Marque</th>
\t\t\t\t<th scope=\"col\">sous-catégorie</th>
\t\t\t\t<th scope=\"col\">Catégorie</th>
\t\t\t\t<th scope=\"col\">Section</th>
\t\t\t\t<th scope=\"col\">Tailles</th>
\t\t\t\t<th scope=\"col\">Couleurs</th>
\t\t\t\t<th scope=\"col\">Fournisseur</th>
\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t{% for product in products %}

\t\t\t<tr>
\t\t\t\t<th scope=\"row\">{{product.id}}</th>
\t\t\t\t<td>{{ product.title}}</td>
\t\t\t\t<td>{{ product.reference}}</td>
\t\t\t\t<td>{{ product.price | format_currency('EUR')}}</td>
\t\t\t\t<td>{{ product.description | slice(0,15) ~ '...'}}</td>
\t\t\t\t{# Slice() : Affichage 15 caractères #}
\t\t\t\t<td>
\t\t\t\t\t<img src=\"{{ asset('upload/') }}{{ product.picture}} \" width=\"50\" alt=\" {{ product.title}} \">
\t\t\t\t</td>
\t\t\t\t<td>{{ product.brand}}</td>
\t\t\t\t<td>{{ product.category.title }}</td>
\t\t\t\t<td>{{ product.category.subCategory.title }}</td>
\t\t\t\t<td>{{ product.gender}}</td>

\t\t\t\t<td> {% if product.sizes is not empty %}
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for size in product.sizes %}
\t\t\t\t\t\t<li>{{ size.title}}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>

\t\t\t\t<td>{% if product.colors is not empty %}

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t{% for color in product.colors %}
\t\t\t\t\t\t<div class=\"m-1 col-md-6\"
\t\t\t\t\t\t\tstyle=\"background-color:{{ color.colorCode }};border: 2px solid grey;width: 30px; min-height: 30px\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t{% endif %}
\t\t\t\t</td>

\t\t\t\t<td>
\t\t\t\t\t{% if product.suppliers is not empty %}
\t\t\t\t\t{{ product.suppliers.title}}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>

\t\t\t\t<td>
\t\t\t\t\t<a href=\" {{ path('editProduct', { id:product.id }) }} \"><img src=\"{{ asset('update.png') }}\"
\t\t\t\t\t\t\talt=\"modifier\"></a>
\t\t\t\t\t<a href=\" {{ path('deleteProduct', { id:product.id }) }} \"
\t\t\t\t\t\tonclick=\"return confirm('Etes vous sur de vouloir supprimer cet article ?')\"><img
\t\t\t\t\t\t\tsrc=\"{{ asset('delete.png') }}\" alt=\"supprimer\"></a>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t{% endfor %}


\t\t</tbody>
\t</table>
</div>


{% endblock %}", "admin/listProduct.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/admin/listProduct.html.twig");
    }
}
