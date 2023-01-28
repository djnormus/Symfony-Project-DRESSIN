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

/* security/login.html.twig */
class __TwigTemplate_adb8617548e112e3cfa4ca50cb347cbc05f4889da0f50ebe5492ae57ba4aaddb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "
Connexion
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
        echo "Connexion
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 18
            echo "<p class=\"text-center\">Vous êtes déjà connecté avec l'adresse e-mail \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
            echo "\"</p>
<p class=\"text-center\"><a href=\" ";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo " \">Aller à la page d'accueil</a></p>

";
        } else {
            // line 22
            echo "<div class=\"container col-lg-6 pb-5\">
\t<form action=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" method=\"post\">
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Email</label>
\t\t\t<input name=\"_username\" type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
\t\t\t\taria-describedby=\"emailHelp\" placeholder=\"Saisissez votre email\" required>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleInputPassword1\" class=\"form-label\">Mot de passe</label>
\t\t\t<input name=\"_password\" type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\"
\t\t\t\tplaceholder=\"Saisissez votre mot de passe\" required>
\t\t</div>

\t\t<div class=\"mb-3 form-check\">
\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary rounded my-3\">Se connecter</button>
\t\t<div>
\t\t\t<a href=\" ";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetForm");
            echo " \">Mot de passe oublié ?</a>
\t\t\t<p>Vous n'avez pas de compte?<a href=\" ";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo " \"> Inscrivez-vous</a></p>
\t\t</div>
\t</form>
</div>
";
        }
        // line 47
        echo "





";
        // line 81
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 81,  166 => 47,  158 => 42,  154 => 41,  133 => 23,  130 => 22,  124 => 19,  119 => 18,  117 => 17,  114 => 15,  104 => 14,  93 => 10,  83 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
{{ parent() }}
Connexion
{% endblock %}

{% block titre %}
Connexion
{% endblock %}


{% block body %}

{# CONDITION SI CONNECTÉ#}
{% if app.user and is_granted('ROLE_ADMIN') %}
<p class=\"text-center\">Vous êtes déjà connecté avec l'adresse e-mail \"{{app.user.email }}\"</p>
<p class=\"text-center\"><a href=\" {{ path('home') }} \">Aller à la page d'accueil</a></p>

{% else %}
<div class=\"container col-lg-6 pb-5\">
\t<form action=\"{{ path('login') }}\" method=\"post\">
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Email</label>
\t\t\t<input name=\"_username\" type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
\t\t\t\taria-describedby=\"emailHelp\" placeholder=\"Saisissez votre email\" required>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleInputPassword1\" class=\"form-label\">Mot de passe</label>
\t\t\t<input name=\"_password\" type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\"
\t\t\t\tplaceholder=\"Saisissez votre mot de passe\" required>
\t\t</div>

\t\t<div class=\"mb-3 form-check\">
\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary rounded my-3\">Se connecter</button>
\t\t<div>
\t\t\t<a href=\" {{ path('resetForm') }} \">Mot de passe oublié ?</a>
\t\t\t<p>Vous n'avez pas de compte?<a href=\" {{ path('register') }} \"> Inscrivez-vous</a></p>
\t\t</div>
\t</form>
</div>
{% endif %}






{######### ANCIEN ######################}
{# <form action=\"{{ path('login') }}\" method=\"post\">
\t<div class=\"row mb-3\">
\t\t<div class=\"col-sm-10\">
\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
\t\t\t<input type=\"email\" name=\"_username\" class=\"form-control\" id=\"inputEmail3\"
\t\t\t\tplaceholder=\"Saisissez votre email\">
\t\t</div>
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-sm-10\">
\t\t\t<label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Mot de passe</label>
\t\t\t<input type=\"password\" name=\"_password\" class=\"form-control\" id=\"inputPassword3\"
\t\t\t\tplaceholder=\"Saisissez votre Mot de passe\">
\t\t</div>
\t</div>
\t<div class=\"row mb-3\">
\t\t<div class=\"col-sm-10 offset-sm-2\">
\t\t\t<div class=\"form-check\">
\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
\t\t\t\t<label class=\"form-check-label\" for=\"gridCheck1\">
\t\t\t\t\tExample checkbox
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
</form> #}

{% endblock %}", "security/login.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/security/login.html.twig");
    }
}
