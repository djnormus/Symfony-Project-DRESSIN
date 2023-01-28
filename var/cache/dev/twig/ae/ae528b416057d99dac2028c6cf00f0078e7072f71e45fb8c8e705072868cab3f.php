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

/* home/email_form.html.twig */
class __TwigTemplate_219ee073fe8c2f1255537eb5547c2dab3c43f086f2b3b391e0703811df8ba8de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/email_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/email_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/email_form.html.twig", 1);
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
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\tFormulaire de contact
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
        echo "\tFormulaire de contact
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
\t<div class=\"container col-lg-6 pb-5\">
\t\t<form id=\"contact-form\" method=\"post\" action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emailSend");
        echo "\" role=\"form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"name\" class=\"form-label mt-4\">Prénom</label>
\t\t\t\t<input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" aria-describedby=\"emailHelp\" placeholder=\"Veuillez saisir votre Prénom\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"surname\" class=\"form-label mt-4\">Nom</label>
\t\t\t\t<input name=\"surname\" type=\"text\" class=\"form-control\" id=\"surname\" aria-describedby=\"emailHelp\" placeholder=\"Veuillez saisir votre Nom\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"email\" class=\"form-label mt-4\">E-mail</label>
\t\t\t\t<input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Veuillez saisir votre e-mail\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"form_need\" class=\"form-label mt-4\">Spécifiez l'objet de votre mail</label>
\t\t\t\t<select name=\"need\" class=\"form-select\" id=\"form_need\" data-error=\"Spécifiez l'objet de votre mail\" required>
\t\t\t\t\t<option value=\"Reclamation\">Réclamation</option>
\t\t\t\t\t<option value=\"Informations\">Informations</option>
\t\t\t\t\t<option value=\"Autre\">Autre</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"message\" class=\"form-label mt-4\">Message</label>
\t\t\t\t<textarea name=\"message\" class=\"form-control\" id=\"message\" rows=\"3\" placeholder=\"Votre message...\"></textarea>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded mt-4\">Envoyer</button>
\t\t</form>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/email_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 17,  115 => 15,  105 => 14,  94 => 10,  84 => 9,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
\t{{ parent() }}
\tFormulaire de contact
{% endblock %}

{% block titre %}
\tFormulaire de contact
{% endblock %}


{% block body %}

\t<div class=\"container col-lg-6 pb-5\">
\t\t<form id=\"contact-form\" method=\"post\" action=\"{{ path('emailSend') }}\" role=\"form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"name\" class=\"form-label mt-4\">Prénom</label>
\t\t\t\t<input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" aria-describedby=\"emailHelp\" placeholder=\"Veuillez saisir votre Prénom\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"surname\" class=\"form-label mt-4\">Nom</label>
\t\t\t\t<input name=\"surname\" type=\"text\" class=\"form-control\" id=\"surname\" aria-describedby=\"emailHelp\" placeholder=\"Veuillez saisir votre Nom\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"email\" class=\"form-label mt-4\">E-mail</label>
\t\t\t\t<input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Veuillez saisir votre e-mail\" required>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"form_need\" class=\"form-label mt-4\">Spécifiez l'objet de votre mail</label>
\t\t\t\t<select name=\"need\" class=\"form-select\" id=\"form_need\" data-error=\"Spécifiez l'objet de votre mail\" required>
\t\t\t\t\t<option value=\"Reclamation\">Réclamation</option>
\t\t\t\t\t<option value=\"Informations\">Informations</option>
\t\t\t\t\t<option value=\"Autre\">Autre</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"message\" class=\"form-label mt-4\">Message</label>
\t\t\t\t<textarea name=\"message\" class=\"form-control\" id=\"message\" rows=\"3\" placeholder=\"Votre message...\"></textarea>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded mt-4\">Envoyer</button>
\t\t</form>
\t</div>

{% endblock %}
", "home/email_form.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/home/email_form.html.twig");
    }
}
