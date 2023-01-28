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

/* admin/listPromo.html.twig */
class __TwigTemplate_80957b0b8e035330294a5bfb8d02271eb58cac2103871db497ce25b2f342f201 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listPromo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listPromo.html.twig"));

        $this->parent = $this->loadTemplate("panelAdmin.html.twig", "admin/listPromo.html.twig", 1);
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
        echo " Liste promo
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 9
        echo "Liste des promos
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPromo", ["param" => "category"]);
        echo "\" class=\"btn btn-primary\">AJouter promo catégorie</a>
<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPromo", ["param" => "subCategory"]);
        echo "\" class=\"btn btn-primary\">Ajouter promo sous-category</a>
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPromo", ["param" => "section"]);
        echo "\" class=\"btn btn-primary\">Ajouter promo section</a>

<table class=\"table table-dark mt-3\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Code promo</th>
        <th scope=\"col\">Valeur</th>
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Date de début</th>
        <th scope=\"col\">Date de fin</th>
        <th scope=\"col\">Cible</th>
        <th scope=\"col\">Actions</th>
    </tr>
    </thead>
    <tbody>


    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 36
            echo "

        <tr>
            <th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "code", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "value", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["promo"], "type", [], "any", false, false, false, 43) == 0)) {
                echo " % ";
            }
            // line 44
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["promo"], "type", [], "any", false, false, false, 44) == 1)) {
                echo " € ";
            }
            // line 45
            echo "            </td>
            <td>
                ";
            // line 47
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["promo"], "startDate", [], "any", false, false, false, 47))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "startDate", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            }
            // line 48
            echo "            </td>
            <td>
                ";
            // line 50
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["promo"], "endDate", [], "any", false, false, false, 50))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "endDate", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
            }
            // line 51
            echo "            </td>
            <td>
                ";
            // line 53
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["promo"], "category", [], "any", false, false, false, 53))) {
                // line 54
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promo"], "category", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54), "html", null, true);
                echo "
                    ";
                // line 55
                $context["param"] = "subCategory";
                // line 56
                echo "                ";
            }
            // line 57
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["promo"], "subCategory", [], "any", false, false, false, 57))) {
                // line 58
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promo"], "subCategory", [], "any", false, false, false, 58), "title", [], "any", false, false, false, 58), "html", null, true);
                echo "
                    ";
                // line 59
                $context["param"] = "category";
                // line 60
                echo "                ";
            }
            // line 61
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["promo"], "section", [], "any", false, false, false, 61))) {
                // line 62
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "section", [], "any", false, false, false, 62), "html", null, true);
                echo "
                    ";
                // line 63
                $context["param"] = "section";
                // line 64
                echo "                ";
            }
            // line 65
            echo "
            </td>
            <td>
                <a href=\" ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPromo", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 68), "param" => (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 68, $this->source); })())]), "html", null, true);
            echo " \"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("update.png"), "html", null, true);
            echo "\" alt=\"modifier\"></a>
                <a href=\" ";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePromo", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo " \" onclick=\"return confirm('Etes-vous de vouloir supprimer cette categorie')\"><img
                            src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("delete.png"), "html", null, true);
            echo "\" alt=\"supprimer\"></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "

    </tbody>
</table>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listPromo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 74,  249 => 70,  245 => 69,  239 => 68,  234 => 65,  231 => 64,  229 => 63,  224 => 62,  221 => 61,  218 => 60,  216 => 59,  211 => 58,  208 => 57,  205 => 56,  203 => 55,  198 => 54,  196 => 53,  192 => 51,  188 => 50,  184 => 48,  180 => 47,  176 => 45,  171 => 44,  167 => 43,  162 => 41,  158 => 40,  154 => 39,  149 => 36,  145 => 35,  124 => 17,  120 => 16,  116 => 15,  113 => 14,  103 => 13,  92 => 9,  82 => 8,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panelAdmin.html.twig' %}


{% block title %}
{{ parent() }} Liste promo
{% endblock %}

{% block titre %}
Liste des promos
{% endblock %}


{% block body %}

<a href=\"{{ path('addPromo', { param: 'category' }) }}\" class=\"btn btn-primary\">AJouter promo catégorie</a>
<a href=\"{{ path('addPromo', { param: 'subCategory' }) }}\" class=\"btn btn-primary\">Ajouter promo sous-category</a>
<a href=\"{{ path('addPromo', { param: 'section' }) }}\" class=\"btn btn-primary\">Ajouter promo section</a>

<table class=\"table table-dark mt-3\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Code promo</th>
        <th scope=\"col\">Valeur</th>
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Date de début</th>
        <th scope=\"col\">Date de fin</th>
        <th scope=\"col\">Cible</th>
        <th scope=\"col\">Actions</th>
    </tr>
    </thead>
    <tbody>


    {% for promo in promos %}


        <tr>
            <th scope=\"row\">{{ promo.id }}</th>
            <td>{{ promo.code }}</td>
            <td>{{ promo.value }}</td>
            <td>
                {% if promo.type ==0 %} % {% endif %}
                {% if promo.type ==1 %} € {% endif %}
            </td>
            <td>
                {% if promo.startDate is not null %}{{ promo.startDate | date('d/m/Y') }}{% endif %}
            </td>
            <td>
                {% if promo.endDate is not null %}{{ promo.endDate | date('d/m/Y') }}{% endif %}
            </td>
            <td>
                {% if promo.category is not null %}
                    {{ promo.category.title }}
                    {% set param = 'subCategory' %}
                {% endif %}
                {% if promo.subCategory is not null %}
                    {{ promo.subCategory.title }}
                    {% set param = 'category' %}
                {% endif %}
                {% if promo.section is not null %}
                    {{ promo.section }}
                    {% set param = 'section' %}
                {% endif %}

            </td>
            <td>
                <a href=\" {{ path('editPromo', {'id': promo.id, param:param}) }} \"><img src=\"{{ asset('update.png') }}\" alt=\"modifier\"></a>
                <a href=\" {{ path('deletePromo', {'id': promo.id}) }} \" onclick=\"return confirm('Etes-vous de vouloir supprimer cette categorie')\"><img
                            src=\"{{ asset('delete.png') }}\" alt=\"supprimer\"></a>
            </td>
        </tr>
    {% endfor %}


    </tbody>
</table>









{% endblock %}", "admin/listPromo.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/admin/listPromo.html.twig");
    }
}
