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

/* panelAdmin.html.twig */
class __TwigTemplate_4b54e492268fbc0c263fbc28e303765680659a684df0a185806ead85fc247f99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panelAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panelAdmin.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t</head>
\t<body>
\t\t<div style=\"min-height: 100vh;\" class=\"row justify-content-center p-2\">
\t\t\t<div class=\"col-md-2 bg-white m-1\">
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t<li class=\"nav-item ms-5 mt-5\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary \">
\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo " \">Mon profil</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accès Front</a>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"\">Déconnexion</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item ms-2 mt-5\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary nav-link active\"     >Gestion des articles</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProduct");
        echo "\">Liste des articles</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct");
        echo "\">Ajout article</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary \">Gestion des sous-catégories</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\">Liste sous-catégories</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary \">Gestion des catégories</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subCategory");
        echo "\">Liste catégories</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion des commandes</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listOrder");
        echo " \">Liste des commandes</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion code promo</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listPromo");
        echo " \">Liste des codes promos</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion fournisseurs</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listSuppliers");
        echo " \">Liste des fournisseurs</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion couleurs et tailles</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listSize");
        echo " \">Liste des tailles</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("color");
        echo " \">Liste des couleurs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion stocks</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listStock");
        echo " \">Gestion stocks</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 bg-white m-1\">
\t\t\t\t<div class=\"row justify-content-center mt-4 mb-4\">
\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 145
        $this->displayBlock('titre', $context, $blocks);
        // line 146
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t";
        // line 152
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 153
            echo "\t\t\t\t\t<div class=\"alert alert-success text-center mx-auto\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "

\t\t\t\t";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 157));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 158
            echo "\t\t\t\t\t<div class=\"alert alert-danger text-center mx-auto\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t";
        // line 161
        echo "

\t\t\t\t";
        // line 163
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 167
        $this->displayBlock('javascripts', $context, $blocks);
        // line 170
        echo "
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressInBackoffice |
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/lux/bootstrap.min.css\" integrity=\"sha512-EJJuqC8nbI+dUjDM89eZ8dVmckG/vAfKIhmW4pi3Y/S1gE8uvIHuPqpbZ3/DliUQOZbS0Wp7317zoPRRoX+E+A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>


\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panelAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 168,  378 => 167,  360 => 163,  342 => 145,  327 => 12,  317 => 11,  297 => 8,  284 => 170,  282 => 167,  277 => 164,  275 => 163,  271 => 161,  269 => 160,  260 => 158,  256 => 157,  252 => 155,  243 => 153,  238 => 152,  231 => 146,  229 => 145,  213 => 132,  198 => 120,  194 => 119,  178 => 106,  162 => 93,  146 => 80,  131 => 68,  117 => 57,  103 => 46,  99 => 45,  83 => 32,  79 => 31,  64 => 18,  62 => 11,  59 => 10,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<title>
\t\t\t{% block title %}DressInBackoffice |
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}

\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/lux/bootstrap.min.css\" integrity=\"sha512-EJJuqC8nbI+dUjDM89eZ8dVmckG/vAfKIhmW4pi3Y/S1gE8uvIHuPqpbZ3/DliUQOZbS0Wp7317zoPRRoX+E+A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>


\t\t{% endblock %}
\t</head>
\t<body>
\t\t<div style=\"min-height: 100vh;\" class=\"row justify-content-center p-2\">
\t\t\t<div class=\"col-md-2 bg-white m-1\">
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t<li class=\"nav-item ms-5 mt-5\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary \">
\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('profil') }} \">Mon profil</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('home') }}\">Accès Front</a>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"\">Déconnexion</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item ms-2 mt-5\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary nav-link active\"     >Gestion des articles</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('listProduct') }}\">Liste des articles</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('addProduct') }}\">Ajout article</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary \">Gestion des sous-catégories</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('category') }}\">Liste sous-catégories</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary \">Gestion des catégories</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('subCategory') }}\">Liste catégories</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion des commandes</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('listOrder') }} \">Liste des commandes</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion code promo</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('listPromo') }} \">Liste des codes promos</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion fournisseurs</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('listSuppliers') }} \">Liste des fournisseurs</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion couleurs et tailles</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('listSize') }} \">Liste des tailles</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('color') }} \">Liste des couleurs</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item ms-2 mt-3\">
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary active\">Gestion stocks</a>
\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('listStock') }} \">Gestion stocks</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 bg-white m-1\">
\t\t\t\t<div class=\"row justify-content-center mt-4 mb-4\">
\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t{% block titre %}{% endblock %}
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t{########## BOUCLES \"FOR\" POUR L'AFFICHAGE MESSAGES ERROR & SUCCESS #########}
\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success text-center mx-auto\">{{ message }}</div>
\t\t\t\t{% endfor %}


\t\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t\t<div class=\"alert alert-danger text-center mx-auto\">{{ message }}</div>
\t\t\t\t{% endfor %}
\t\t\t\t{############## FIN BOUCLES ##################}


\t\t\t\t{% block body %}{% endblock %}
\t\t\t</div>
\t\t</div>

\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}

\t</body>
</html>
", "panelAdmin.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/panelAdmin.html.twig");
    }
}
