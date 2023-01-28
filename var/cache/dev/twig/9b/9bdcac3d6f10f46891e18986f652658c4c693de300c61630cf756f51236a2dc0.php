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

/* admin/listOrder.html.twig */
class __TwigTemplate_6ab54cc424953542fb45f01c6ee744bb6a9f54a15fd4dadc65b03b8b9ab3bdb3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listOrder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listOrder.html.twig"));

        $this->parent = $this->loadTemplate("panelAdmin.html.twig", "admin/listOrder.html.twig", 1);
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
        echo "Liste des commandes
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
        echo "Liste des commandes
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
        echo "<div class=\"table-responsive text-center\">
\t<table class=\"table table-striped table-sm\">
\t\t<thead>
\t\t\t<tr class=\"bg-primary text-light\">
\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Montant</th>
\t\t\t\t<th scope=\"col\">Client</th>
\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t<th scope=\"col\">Détail</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 31
            echo "\t\t\t";
            $context["total"] = 0;
            // line 32
            echo "
\t\t\t";
            // line 34
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "details", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                // line 35
                echo "\t\t\t";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 35) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35)));
                // line 36
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t";
            // line 38
            echo "\t\t\t<tr>
\t\t\t\t<th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            echo "</td>

\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()), "EUR"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 43), "lastName", [], "any", false, false, false, 43), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "delivery", [], "any", false, false, false, 45), "status", [], "any", false, false, false, 45) == 0)) {
                echo " <span class=\"badge bg-warning rounded-pill\">Non traitée</span>
\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "delivery", [], "any", false, false, false, 47), "status", [], "any", false, false, false, 47) == 1)) {
                echo " <span class=\"badge bg-info rounded-pill\">En préparation</span>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "delivery", [], "any", false, false, false, 49), "status", [], "any", false, false, false, 49) == 2)) {
                echo " <span class=\"badge bg-primary rounded-pill\">Expédiée</span> ";
            }
            // line 51
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "delivery", [], "any", false, false, false, 51), "status", [], "any", false, false, false, 51) == 3)) {
                echo " <span class=\"badge bg-success rounded-pill\">Livré</span> ";
            }
            // line 53
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "delivery", [], "any", false, false, false, 53), "status", [], "any", false, false, false, 53) == 4)) {
                echo " <span class=\"badge bg-danger rounded-pill\">Annulé</span> ";
            }
            // line 55
            echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailOrder", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"
\t\t\t\t\t\tclass=\"btn btn-sm btn-success rounded\"><i class=\"fas fa-eye\"></i> Détail</a></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</tbody>
\t</table>
</div>























";
        // line 87
        echo "
";
        // line 121
        echo "



";
        // line 161
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 161,  250 => 121,  247 => 87,  219 => 60,  209 => 56,  206 => 55,  201 => 53,  196 => 51,  191 => 49,  185 => 47,  180 => 45,  173 => 43,  169 => 42,  164 => 40,  160 => 39,  157 => 38,  155 => 37,  149 => 36,  146 => 35,  141 => 34,  138 => 32,  135 => 31,  131 => 30,  116 => 17,  113 => 15,  103 => 14,  92 => 10,  82 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panelAdmin.html.twig' %}


{% block title %}
{{ parent() }}Liste des commandes
{% endblock %}


{% block titre %}
Liste des commandes
{% endblock %}


{% block body %}

{# CORRECTION #}
<div class=\"table-responsive text-center\">
\t<table class=\"table table-striped table-sm\">
\t\t<thead>
\t\t\t<tr class=\"bg-primary text-light\">
\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Montant</th>
\t\t\t\t<th scope=\"col\">Client</th>
\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t<th scope=\"col\">Détail</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for order in orders %}
\t\t\t{% set total=0 %}

\t\t\t{# CALCUL DU TOTAL #}
\t\t\t{% for detail in order.details %}
\t\t\t{% set total= total + detail.quantity * detail.product.price %}
\t\t\t{% endfor %}
\t\t\t{# ### #}
\t\t\t<tr>
\t\t\t\t<th scope=\"row\">{{ order.id }}</th>
\t\t\t\t<td>{{ order.date | date('d/m/Y') }}</td>

\t\t\t\t<td>{{ total | format_currency('EUR')}}</td>
\t\t\t\t<td>{{ order.user.lastName }} {{ order.user.firstName }}</td>
\t\t\t\t<td>
\t\t\t\t\t{% if order.delivery.status == 0 %} <span class=\"badge bg-warning rounded-pill\">Non traitée</span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if order.delivery.status == 1 %} <span class=\"badge bg-info rounded-pill\">En préparation</span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if order.delivery.status == 2 %} <span class=\"badge bg-primary rounded-pill\">Expédiée</span> {%
\t\t\t\t\tendif %}
\t\t\t\t\t{% if order.delivery.status == 3 %} <span class=\"badge bg-success rounded-pill\">Livré</span> {%
\t\t\t\t\tendif %}
\t\t\t\t\t{% if order.delivery.status == 4 %} <span class=\"badge bg-danger rounded-pill\">Annulé</span> {%
\t\t\t\t\tendif %}
\t\t\t\t</td>
\t\t\t\t<td><a href=\"{{ path('detailOrder', {'id': order.id }) }}\"
\t\t\t\t\t\tclass=\"btn btn-sm btn-success rounded\"><i class=\"fas fa-eye\"></i> Détail</a></td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div>























{# TEST CODE#}

{# <div class=\"table-responsive\">
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr class=\"table-dark\">
\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t<th scope=\"col\">Montant</th>
\t\t\t\t<th scope=\"col\">Client</th>
\t\t\t\t<th scope=\"col\">Détail</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for oneOrder in orders %}
\t\t\t{% set total=0 %}

\t\t\t{% for detail in oneOrder.details %}
\t\t\t{% set total= total + detail.quantity * detail.product.price %}
\t\t\t{% endfor %}

\t\t\t<tr>
\t\t\t\t<th scope=\"row\">{{ oneOrder.id }}</th>
\t\t\t\t<td>{{ oneOrder.date | date('d/m/Y') }}</td>

\t\t\t\t<td>{{ total }} €</td>
\t\t\t\t<td>{{ oneOrder.user.lastName }} {{ oneOrder.user.firstName }}</td>
\t\t\t\t<td><a href=\"{{ path('detailOrder', {'id': oneOrder.id }) }}\"
\t\t\t\t\t\tclass=\"btn btn-sm btn-success rounded\">Voir
\t\t\t\t\t\tle Détail</a></td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div> #}




{# ANCIEN CODE#}
{# <div class=\"table-responsive\">
\t<table class=\"table table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-dark\">
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Réf</th>
\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t<th scope=\"col\">Prix unitaire</th>
\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t<th scope=\"col\">Produit</th>
\t\t\t\t<th scope=\"col\">détail</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t{% for order in orders %}

\t\t\t<tr>
\t\t\t\t<th scope=\"row\">{{order.user.firstName}}</th>
\t\t\t\t{% for detail in order.details %}
\t\t\t\t<td>{{ detail.product.reference}}</td>
\t\t\t\t<td>{{ detail.quantity }}</td>
\t\t\t\t<td>{{ detail.product.price | format_currency('EUR')}}</td>
\t\t\t\t<td>{{ detail.product.price * detail.quantity }} €</td>
\t\t\t\t<td>{{ detail.product.description | slice(0,15) ~ '...' }}</td>
\t\t\t\t<td>{{ detail.product.title}}</td>
\t\t\t\t{% endfor %}
\t\t\t</tr>

\t\t\t{% endfor %}


\t\t</tbody>
\t</table>
</div> #}


{% endblock %}", "admin/listOrder.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/admin/listOrder.html.twig");
    }
}
