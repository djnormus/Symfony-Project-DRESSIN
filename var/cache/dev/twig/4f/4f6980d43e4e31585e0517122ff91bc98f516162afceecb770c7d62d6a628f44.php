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

/* home/cart.html.twig */
class __TwigTemplate_ec1a10c74cbc6c0b07dd843a564a4f13af688d3b0e0799bf703f749fe258a4d3 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/cart.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
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
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
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
        echo "
";
        // line 17
        if ( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "<div class=\"table-responsive\">
\t<table class=\"table \">
\t\t<thead>
\t\t\t<tr class=\"bg-primary text-center text-light\">

\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Réf</th>
\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t<th scope=\"col\">Photo</th>
\t\t\t\t<th scope=\"col\">Marque</th>
\t\t\t\t<th scope=\"col\">Taille</th>
\t\t\t\t<th scope=\"col\">Couleur</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\">Qté</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "
\t\t\t<tr class=\"text-center\">

\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "reference", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "price", [], "any", false, false, false, 45), "EUR"), "html", null, true);
                echo "</td>


\t\t\t\t<td>
\t\t\t\t\t<img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 49), "picture", [], "any", false, false, false, 49), "html", null, true);
                echo " \" width=\"50\"
\t\t\t\t\t\talt=\" ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), "html", null, true);
                echo " \">
\t\t\t\t</td>
\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 52), "brand", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 53), "title", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
\t\t\t\t<td><div style=\"background-color:";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 54), "colorCode", [], "any", false, false, false, 54), "html", null, true);
                echo ";border: 2px solid grey;width: 30px; min-height: 30px;\" ></div></td>

\t\t\t\t<td>
\t\t\t\t\t<a href=\" ";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeCart", ["id" => twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 57)]), "html", null, true);
                echo " \">
\t\t\t\t\t\t<i class=\"fas fa-minus-circle fa-2x\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 62), "html", null, true);
                echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\" ";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCart", ["id" => twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 65), "param" => "cart"]), "html", null, true);
                echo " \">
\t\t\t\t\t\t<i class=\"fas fa-plus-circle fa-2x\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>

\t\t\t\t<td>

\t\t\t\t\t<a href=\" ";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCart", ["id" => twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72)]), "html", null, true);
                echo " \"
\t\t\t\t\t\tonclick=\"return confirm('Etes vous sur de vouloir supprimer cet article ?')\"><img
\t\t\t\t\t\t\tsrc=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("delete.png"), "html", null, true);
                echo "\" alt=\"supprimer\"></a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 77), "price", [], "any", false, false, false, 77) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 77)), "html", null, true);
                echo " €
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "

\t\t</tbody>
\t</table>
</div>

\t<h3>
\t\tTotal : ";
            // line 89
            if (array_key_exists("totalRemise", $context)) {
                // line 90
                echo "\t\t<span style=\"text-decoration: line-through\">";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })()), "EUR"), "html", null, true);
                echo "</span>
\t\t";
            } else {
                // line 92
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 92, $this->source); })()), "EUR"), "html", null, true);
                echo "
\t\t";
            }
            // line 93
            echo "€
\t</h3>
\t";
            // line 95
            if (array_key_exists("totalRemise", $context)) {
                // line 96
                echo "\t<h3>Après remise: ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["totalRemise"]) || array_key_exists("totalRemise", $context) ? $context["totalRemise"] : (function () { throw new RuntimeError('Variable "totalRemise" does not exist.', 96, $this->source); })()), "EUR"), "html", null, true);
                echo " €</h3>
\t";
            }
            // line 98
            echo "
\t<a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("destroyCart");
            echo "\" class=\"btn btn-danger mt-5\"
\t\tonclick=\"return confirm('Etes-vous de vouloir supprimer cet article de votre panier')\">Vider le panier</a>

\t";
            // line 102
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
                // line 103
                echo "
\t<a href=\"";
                // line 104
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
                echo "\" class=\"btn btn-warning mt-5\">Passer à la commande</a>
\t";
            } else {
                // line 106
                echo "
\t<a href=\"";
                // line 107
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" class=\"btn btn-warning mt-5\">Connectez vous pour passer à la commande</a>

\t";
            }
            // line 110
            echo "\t";
            if (((isset($context["affiche"]) || array_key_exists("affiche", $context) ? $context["affiche"] : (function () { throw new RuntimeError('Variable "affiche" does not exist.', 110, $this->source); })()) == true)) {
                // line 111
                echo "
\t<div class=\"col-lg-5 pb-5\">
\t\t<form action=\"";
                // line 113
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verifPromo");
                echo "\" class=\"mt-4\" method=\"post\">
\t\t\t<div class=\"row mb-3\">
\t\t\t\t<label for=\"inputEmail3\" class=\" col-form-label\">Code promo</label>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"Vous avez un code promo?\"
\t\t\t\t\t\tid=\"inputEmail3\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Verifier </button>
\t\t</form>
\t</div>
\t";
            }
            // line 126
            echo "
\t";
        } else {
            // line 128
            echo "
\t<div class=\"text-center\">
\t\t<h3>Votre panier est vide, allez vite consulter notre <a class=\"btn btn-success rounded\"
\t\t\t\thref=\"";
            // line 131
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">catalogue</a></h3>
\t</div>


\t";
        }
        // line 136
        echo "



\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 136,  353 => 131,  348 => 128,  344 => 126,  328 => 113,  324 => 111,  321 => 110,  315 => 107,  312 => 106,  307 => 104,  304 => 103,  302 => 102,  296 => 99,  293 => 98,  287 => 96,  285 => 95,  281 => 93,  275 => 92,  269 => 90,  267 => 89,  258 => 82,  239 => 77,  233 => 74,  228 => 72,  218 => 65,  212 => 62,  204 => 57,  198 => 54,  194 => 53,  190 => 52,  185 => 50,  180 => 49,  173 => 45,  169 => 44,  165 => 43,  160 => 40,  143 => 39,  120 => 18,  118 => 17,  115 => 15,  105 => 14,  93 => 10,  83 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
{{ parent() }}{{ titre }}
{% endblock %}


{% block titre %}
{{ titre }}
{% endblock %}


{% block body %}

{# CONDITION AFFICHAGE PANIER SI PAS VIDE #}
{% if items is not empty %}
<div class=\"table-responsive\">
\t<table class=\"table \">
\t\t<thead>
\t\t\t<tr class=\"bg-primary text-center text-light\">

\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Réf</th>
\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t<th scope=\"col\">Photo</th>
\t\t\t\t<th scope=\"col\">Marque</th>
\t\t\t\t<th scope=\"col\">Taille</th>
\t\t\t\t<th scope=\"col\">Couleur</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\">Qté</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t{% for item in items %}

\t\t\t<tr class=\"text-center\">

\t\t\t\t<td>{{ item.product.title}}</td>
\t\t\t\t<td>{{ item.product.reference}}</td>
\t\t\t\t<td>{{ item.product.price | format_currency('EUR')}}</td>


\t\t\t\t<td>
\t\t\t\t\t<img src=\"{{ asset('upload/') }}{{ item.product.picture}} \" width=\"50\"
\t\t\t\t\t\talt=\" {{ item.product.title}} \">
\t\t\t\t</td>
\t\t\t\t<td>{{ item.product.brand}}</td>
\t\t\t\t<td>{{ item.size.title}}</td>
\t\t\t\t<td><div style=\"background-color:{{ item.color.colorCode }};border: 2px solid grey;width: 30px; min-height: 30px;\" ></div></td>

\t\t\t\t<td>
\t\t\t\t\t<a href=\" {{ path('removeCart', {'id': loop.index0 }) }} \">
\t\t\t\t\t\t<i class=\"fas fa-minus-circle fa-2x\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{{ item.quantity}}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\" {{ path('addCart', {'id': loop.index0, param:'cart' }) }} \">
\t\t\t\t\t\t<i class=\"fas fa-plus-circle fa-2x\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>

\t\t\t\t<td>

\t\t\t\t\t<a href=\" {{ path('deleteCart', {'id': loop.index0 }) }} \"
\t\t\t\t\t\tonclick=\"return confirm('Etes vous sur de vouloir supprimer cet article ?')\"><img
\t\t\t\t\t\t\tsrc=\"{{ asset('delete.png') }}\" alt=\"supprimer\"></a>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{{ item.product.price * item.quantity }} €
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t{% endfor %}


\t\t</tbody>
\t</table>
</div>

\t<h3>
\t\tTotal : {% if totalRemise is defined %}
\t\t<span style=\"text-decoration: line-through\">{{ total | format_currency('EUR') }}</span>
\t\t{% else %}
\t\t{{ total | format_currency('EUR') }}
\t\t{% endif %}€
\t</h3>
\t{% if totalRemise is defined %}
\t<h3>Après remise: {{ totalRemise | format_currency('EUR') }} €</h3>
\t{% endif %}

\t<a href=\"{{ path('destroyCart') }}\" class=\"btn btn-danger mt-5\"
\t\tonclick=\"return confirm('Etes-vous de vouloir supprimer cet article de votre panier')\">Vider le panier</a>

\t{% if app.user %}

\t<a href=\"{{ path('order') }}\" class=\"btn btn-warning mt-5\">Passer à la commande</a>
\t{% else %}

\t<a href=\"{{ path('login') }}\" class=\"btn btn-warning mt-5\">Connectez vous pour passer à la commande</a>

\t{% endif %}
\t{% if affiche==true %}

\t<div class=\"col-lg-5 pb-5\">
\t\t<form action=\"{{ path('verifPromo') }}\" class=\"mt-4\" method=\"post\">
\t\t\t<div class=\"row mb-3\">
\t\t\t\t<label for=\"inputEmail3\" class=\" col-form-label\">Code promo</label>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"Vous avez un code promo?\"
\t\t\t\t\t\tid=\"inputEmail3\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Verifier </button>
\t\t</form>
\t</div>
\t{% endif %}

\t{% else %}

\t<div class=\"text-center\">
\t\t<h3>Votre panier est vide, allez vite consulter notre <a class=\"btn btn-success rounded\"
\t\t\t\thref=\"{{ path('home') }}\">catalogue</a></h3>
\t</div>


\t{% endif %}




\t{% endblock %}", "home/cart.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/home/cart.html.twig");
    }
}
