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

/* admin/detailOrder.html.twig */
class __TwigTemplate_c3b25a9b5a40cabcb6551c5e5ecc9deb37607be039013f18750f0a63d415f208 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/detailOrder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/detailOrder.html.twig"));

        $this->parent = $this->loadTemplate("panelAdmin.html.twig", "admin/detailOrder.html.twig", 1);
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
        echo "Détail de la commande
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
        echo "Détail de la commande
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

<div class=\"border border-dark border text-center rounded  p-3 mb-5\">
    <h3 class=\"pb-3\">Gestion de la livraison:</h3>
    <div class=\"row justify-content-around mt-3\">
        <div class=\"col-md-6 border-dark border-end\">
            <h5 class=\"fw-bold\">Informations client:</h5>
            <p>Nom: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "lastName", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
            <p>Prénom: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "firstName", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
            <p>N° de Voie: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "streetNumber", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
            <p>Voie: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "street", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <p>Code postal: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "zipCode", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            <p>Ville: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "city", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
            <p>Email: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
            <p>Téléphone: 0";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "phone", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>


        </div>
        <div class=\"col-md-6\">
            <h5 class=\"fw-bold\">Statut de livraison:</h5>

            <form class=\"mb-5\" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailOrder", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\" method=\"post\" >
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Date de livraison</label>
                    <input type=\"date\" name=\"predictDate\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "delivery", [], "any", false, false, false, 39), "predictedDate", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\"
                        id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Statut</label>
                    <select  name=\"status\" class=\"form-select\" aria-label=\"Default select example\">
                        <option selected>modifier le statut</option>
                        <option value=\"1\">En préparation</option>
                        <option value=\"2\"> Expédié </option>
                        <option value=\"3\">Livré </option>
                        <option value=\"4\">Annulé </option>
                    </select>
                </div>
                <button type=\"submit\" class=\"btn btn-primary btn-sm rounded\">
                    Mettre à jour
                </button>
            </form>

            <p>Date prévu de livraison: ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "delivery", [], "any", false, false, false, 57), "predictedDate", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true);
        echo "</p>
            <p>Statut actuel:
                ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 59, $this->source); })()), "delivery", [], "any", false, false, false, 59), "status", [], "any", false, false, false, 59) == 0)) {
            echo "<span class=\"badge bg-warning rounded-pill\">Non traitée</span>";
        }
        // line 60
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "delivery", [], "any", false, false, false, 60), "status", [], "any", false, false, false, 60) == 1)) {
            echo "<span class=\"badge bg-info rounded-pill\">En préparation";
        }
        // line 61
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "delivery", [], "any", false, false, false, 61), "status", [], "any", false, false, false, 61) == 2)) {
            echo "<span class=\"badge bg-primary rounded-pill\">Expédiée</span>";
        }
        // line 62
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "delivery", [], "any", false, false, false, 62), "status", [], "any", false, false, false, 62) == 3)) {
            echo "<span class=\"badge bg-success rounded-pill\">Livré</span>";
        }
        // line 63
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 63, $this->source); })()), "delivery", [], "any", false, false, false, 63), "status", [], "any", false, false, false, 63) == 4)) {
            echo "<span class=\"badge bg-danger rounded-pill\">Annulé</span> ";
        }
        // line 64
        echo "            </p>
        </div>
    </div>
</div>

<div class=\"table-responsive text-center mb-5\">
    <table class=\"table table-striped table-sm\">
        <thead>
            <tr class=\"bg-primary text-light\">
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Ref</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Descriptif</th>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Marque</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Montant total</th>


            </tr>
        </thead>
        <tbody>

            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 88, $this->source); })()), "details", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 89
            echo "            <tr>
                <th scope=\"row\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
            echo "</th>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 91), "title", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 92), "reference", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 93), "price", [], "any", false, false, false, 93), "EUR"), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 94), "description", [], "any", false, false, false, 94), 0, 15) . "..."), "html", null, true);
            echo "</td>
                <td>
                    <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 96), "picture", [], "any", false, false, false, 96), "html", null, true);
            echo "\" width=\"50\"
                        alt=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 97), "title", [], "any", false, false, false, 97), "html", null, true);
            echo "\">
                </td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 99), "brand", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                ";
            // line 100
            $context["total"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 100), "price", [], "any", false, false, false, 100) * twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 100));
            // line 101
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 102, $this->source); })()), "EUR"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
        </tbody>
    </table>
</div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/detailOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 105,  291 => 102,  286 => 101,  284 => 100,  280 => 99,  275 => 97,  270 => 96,  265 => 94,  261 => 93,  257 => 92,  253 => 91,  249 => 90,  246 => 89,  242 => 88,  216 => 64,  211 => 63,  206 => 62,  201 => 61,  196 => 60,  192 => 59,  187 => 57,  166 => 39,  160 => 36,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  113 => 15,  103 => 14,  92 => 10,  82 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panelAdmin.html.twig' %}


{% block title %}
{{ parent() }}Détail de la commande
{% endblock %}


{% block titre %}
Détail de la commande
{% endblock %}


{% block body %}


<div class=\"border border-dark border text-center rounded  p-3 mb-5\">
    <h3 class=\"pb-3\">Gestion de la livraison:</h3>
    <div class=\"row justify-content-around mt-3\">
        <div class=\"col-md-6 border-dark border-end\">
            <h5 class=\"fw-bold\">Informations client:</h5>
            <p>Nom: {{ order.user.lastName }}</p>
            <p>Prénom: {{ order.user.firstName }}</p>
            <p>N° de Voie: {{ order.user.streetNumber }}</p>
            <p>Voie: {{ order.user.street }}</p>
            <p>Code postal: {{ order.user.zipCode }}</p>
            <p>Ville: {{ order.user.city }}</p>
            <p>Email: {{ order.user.email }}</p>
            <p>Téléphone: 0{{ order.user.phone }}</p>


        </div>
        <div class=\"col-md-6\">
            <h5 class=\"fw-bold\">Statut de livraison:</h5>

            <form class=\"mb-5\" action=\"{{ path('detailOrder', { id: order.id} ) }}\" method=\"post\" >
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Date de livraison</label>
                    <input type=\"date\" name=\"predictDate\" value=\"{{ order.delivery.predictedDate | date('Y-m-d') }}\" class=\"form-control\"
                        id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleInputEmail1\" class=\"form-label\">Statut</label>
                    <select  name=\"status\" class=\"form-select\" aria-label=\"Default select example\">
                        <option selected>modifier le statut</option>
                        <option value=\"1\">En préparation</option>
                        <option value=\"2\"> Expédié </option>
                        <option value=\"3\">Livré </option>
                        <option value=\"4\">Annulé </option>
                    </select>
                </div>
                <button type=\"submit\" class=\"btn btn-primary btn-sm rounded\">
                    Mettre à jour
                </button>
            </form>

            <p>Date prévu de livraison: {{ order.delivery.predictedDate | date('d-m-Y') }}</p>
            <p>Statut actuel:
                {% if order.delivery.status == 0 %}<span class=\"badge bg-warning rounded-pill\">Non traitée</span>{% endif %}
                {% if order.delivery.status == 1 %}<span class=\"badge bg-info rounded-pill\">En préparation{% endif %}
                {% if order.delivery.status == 2 %}<span class=\"badge bg-primary rounded-pill\">Expédiée</span>{% endif %}
                {% if order.delivery.status == 3 %}<span class=\"badge bg-success rounded-pill\">Livré</span>{% endif %}
                {% if order.delivery.status == 4 %}<span class=\"badge bg-danger rounded-pill\">Annulé</span> {% endif %}
            </p>
        </div>
    </div>
</div>

<div class=\"table-responsive text-center mb-5\">
    <table class=\"table table-striped table-sm\">
        <thead>
            <tr class=\"bg-primary text-light\">
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Ref</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Descriptif</th>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Marque</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Montant total</th>


            </tr>
        </thead>
        <tbody>

            {% for detail in order.details %}
            <tr>
                <th scope=\"row\">{{ detail.product.id }}</th>
                <td>{{ detail.product.title }}</td>
                <td>{{ detail.product.reference }}</td>
                <td>{{ detail.product.price | format_currency('EUR') }}</td>
                <td>{{ detail.product.description | slice(0,15) ~ '...' }}</td>
                <td>
                    <img src=\"{{ asset('upload/') }}{{ detail.product.picture }}\" width=\"50\"
                        alt=\"{{ detail.product.title }}\">
                </td>
                <td>{{ detail.product.brand }}</td>
                {% set total=detail.product.price * detail.quantity %}
                <td>{{ detail.quantity }}</td>
                <td>{{ total | format_currency('EUR') }}</td>
            </tr>
            {% endfor %}

        </tbody>
    </table>
</div>





{% endblock %}", "admin/detailOrder.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/admin/detailOrder.html.twig");
    }
}
