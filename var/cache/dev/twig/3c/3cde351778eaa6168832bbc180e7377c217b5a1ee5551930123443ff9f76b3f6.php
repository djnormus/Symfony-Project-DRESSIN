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

/* base.html.twig */
class __TwigTemplate_b7cf8156704562c048ffb2c601bbd94478440153969c4c38cece1f5e80fa7892 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"UTF-8\">
\t
\t<title>
\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t</title>
\t<link rel=\"icon\"
\t\thref=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t";
        // line 14
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/lux/bootstrap.min.css\"
\t\tintegrity=\"sha512-mOju8pKJzu/lzzsmSWS8MrvFTXE9JMdOmhsz4OzN4NNfkERAUt4M7qjVQTbrWpx5SAJCv6Z2mrGY20ta6W2n+Q==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t";
        // line 18
        echo "\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\"
\t\tintegrity=\"sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t";
        // line 22
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
\t";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "</head>

<body>

\t";
        // line 34
        echo "
\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary sticky-top mb-5\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\" ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \">DressIn</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\"
\t\t\t\taria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t";
        // line 44
        echo "\t\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i
\t\t\t\t\t\t\t\tclass=\"fas fa-user-edit\"></i> Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\" ";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emailForm");
        echo " \"><i class=\"fas fa-envelope\"></i> Nous
\t\t\t\t\t\t\tcontacter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\" ";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo " \">
\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t\t\tPanier</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\"> </a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-tools\"></i>
\t\t\t\t\t\t\tGestion</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t";
        // line 74
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 75
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listProduct");
            echo "\">Accès Back-Office</a>
\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo " \"><i class=\"fas fa-user\"></i> Mon profil</a>
\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"></a>
\t\t\t\t\t\t\t";
        // line 82
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82)) {
            // line 83
            echo "\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t\tDéconnexion</a>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t";
        // line 89
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"d-flex\">
\t\t\t\t\t<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Recherche...\">
\t\t\t\t\t<button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 102
        echo "
\t<div class=\"container\">
\t\t<div class=\"row mt-3 text-center\">
\t\t\t<h1 class=\"my-3\"> ";
        // line 105
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1>
\t\t</div>

\t\t";
        // line 109
        echo "\t\t<div class=\"mx-auto col-lg-6 pb-1\">
\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "\t\t\t<div class=\"alert alert-success text-center mx-auto\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 115
            echo "\t\t\t<div class=\"alert alert-danger text-center mx-auto\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t</div>
\t\t";
        // line 119
        echo "
\t\t";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "\t</div>




\t
\t";
        // line 128
        echo "\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"
\t\tintegrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\"
\t\tcrossorigin=\"anonymous\"></script>
\t";
        // line 132
        echo "\t<script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js\"></script>
\t<script nomodule src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
</body>

</html>";
        
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

        echo "DressIn |
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
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

    // line 120
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

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 120,  344 => 105,  331 => 27,  321 => 26,  308 => 23,  298 => 22,  278 => 8,  264 => 132,  259 => 128,  251 => 121,  249 => 120,  246 => 119,  243 => 117,  234 => 115,  230 => 114,  227 => 113,  218 => 111,  214 => 110,  211 => 109,  205 => 105,  200 => 102,  186 => 89,  184 => 88,  177 => 84,  174 => 83,  171 => 82,  168 => 80,  162 => 78,  159 => 77,  153 => 75,  150 => 74,  132 => 58,  125 => 54,  122 => 53,  120 => 52,  113 => 48,  108 => 46,  105 => 45,  102 => 44,  93 => 37,  88 => 34,  82 => 29,  80 => 26,  77 => 25,  74 => 22,  69 => 18,  64 => 14,  59 => 10,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"UTF-8\">
\t
\t<title>
\t\t{% block title %}DressIn |
\t\t{% endblock %}
\t</title>
\t<link rel=\"icon\"
\t\thref=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t{# BootstrapWatch #}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/lux/bootstrap.min.css\"
\t\tintegrity=\"sha512-mOju8pKJzu/lzzsmSWS8MrvFTXE9JMdOmhsz4OzN4NNfkERAUt4M7qjVQTbrWpx5SAJCv6Z2mrGY20ta6W2n+Q==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t{# FONTAWESOME #}
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\"
\t\tintegrity=\"sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t{% block stylesheets %}
\t{{ encore_entry_link_tags('app') }}
\t{% endblock %}

\t{% block javascripts %}
\t{{ encore_entry_script_tags('app') }}
\t{% endblock %}
</head>

<body>

\t{########### NAVBAR ##################}

\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary sticky-top mb-5\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\" {{ path('home')}} \">DressIn</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\"
\t\t\t\taria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t{##### CONDITION AFFICHAGE MENU LOGIN/LOGOUT ######}
\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('login') }}\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('register') }}\"><i
\t\t\t\t\t\t\t\tclass=\"fas fa-user-edit\"></i> Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{############ FIN CONDITION #############}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\" {{ path('emailForm') }} \"><i class=\"fas fa-envelope\"></i> Nous
\t\t\t\t\t\t\tcontacter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\" {{ path('cart') }} \">
\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t\t\tPanier</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\"> </a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-tools\"></i>
\t\t\t\t\t\t\tGestion</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t{##### CONDITION 1 : AFFICHAGE MENU ADMIN ######}
\t\t\t\t\t\t\t{% if app.user and is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('listProduct') }}\">Accès Back-Office</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\" {{ path('profil') }} \"><i class=\"fas fa-user\"></i> Mon profil</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"></a>
\t\t\t\t\t\t\t{##### CONDITION 2 : AFFICHAGE MENU USER #######}
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('logout') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t\tDéconnexion</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{############ FIN DES CONDITIONS ##############}
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"d-flex\">
\t\t\t\t\t<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Recherche...\">
\t\t\t\t\t<button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</nav>
\t{########### FIN NAVBAR ##################}

\t<div class=\"container\">
\t\t<div class=\"row mt-3 text-center\">
\t\t\t<h1 class=\"my-3\"> {% block titre %}{% endblock %}</h1>
\t\t</div>

\t\t{########## BOUCLE POUR L'AFFICHAGE MESSAGES : ERROR & SUCCESS #########}
\t\t<div class=\"mx-auto col-lg-6 pb-1\">
\t\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success text-center mx-auto\">{{ message }}</div>
\t\t\t{% endfor %}

\t\t\t{% for message in app.flashes('danger') %}
\t\t\t<div class=\"alert alert-danger text-center mx-auto\">{{ message }}</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t{############## FIN BOUCLE ##################}

\t\t{% block body %}{% endblock %}
\t</div>




\t
\t{####### SCRIPT JS Bootstrap ###########}
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"
\t\tintegrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\"
\t\tcrossorigin=\"anonymous\"></script>
\t{# IONICONS SCRIPT #}
\t<script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js\"></script>
\t<script nomodule src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
</body>

</html>", "base.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/base.html.twig");
    }
}
