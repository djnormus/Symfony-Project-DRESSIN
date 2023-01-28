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

/* home/detailProduct.html.twig */
class __TwigTemplate_d0bdec463331ada5effb483d32e4728a21f8632028a1ec91d156ad4455ff1b38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detailProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detailProduct.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/detailProduct.html.twig", 1);
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

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "


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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/detail.css"), "html", null, true);
        echo "\">

    <div class=\"container mt-5 mb-5\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"card\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"images p-3\">
                                <div class=\"text-center p-4\"> <img height=\"300\" id=\"main-image\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("upload/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "picture", [], "any", false, false, false, 23), "html", null, true);
        echo "\" width=\"250\" /> </div>
";
        // line 25
        echo "                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"product p-4\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-decoration-none\" ><div class=\"d-flex align-items-center\"> <i class=\"fa fa-long-arrow-left\"></i> <span class=\"ml-1\">Retour</span> </div></a>
                                </div>
                                <div class=\"mt-4 mb-3\"> <span class=\"text-uppercase text-muted brand\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "brand", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
                                    <h5 class=\"text-uppercase\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
                                    <div class=\"price d-flex flex-row align-items-center\"> <span class=\"act-price\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), "html", null, true);
        echo " €</span>
";
        // line 36
        echo "                                    </div>
                                </div>
                                <p class=\"about\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
                                <div class=\"sizes mt-5\">
                                    <h6 class=\"text-uppercase\">Tailles</h6>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "sizes", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["taille"]) {
            // line 42
            echo "                                    <label class=\"radio\"  ";
            if ((array_key_exists("size", $context) && ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 42, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["taille"], "id", [], "any", false, false, false, 42)))) {
                echo " style=\"background-color: #5d5454;margin: 3px\"  ";
            }
            echo "   ><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTempSize", ["size" => twig_get_attribute($this->env, $this->source, $context["taille"], "id", [], "any", false, false, false, 42), "id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"> <span ";
            if ((array_key_exists("size", $context) && ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 42, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["taille"], "id", [], "any", false, false, false, 42)))) {
                echo " style=\"color: white;margin: 3px\"  ";
            }
            echo "  >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taille"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</span></a> </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                </div>

                                <div class=\"sizes mt-2\">
                                    <h6 class=\"text-uppercase\">Couleurs</h6>
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "colors", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
            // line 49
            echo "                                        <label class=\"radio\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTempColor", ["color" => twig_get_attribute($this->env, $this->source, $context["couleur"], "id", [], "any", false, false, false, 49), "id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><div style=\"background-color:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["couleur"], "colorCode", [], "any", false, false, false, 49), "html", null, true);
            echo ";border: 2px solid grey;width: 30px; min-height: 30px;
                                                        ";
            // line 50
            if ((array_key_exists("color", $context) && ((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 50, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["couleur"], "id", [], "any", false, false, false, 50)))) {
                echo " transform: scale(1.2); margin: 3px  ";
            }
            echo " \" ></div></a></label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                </div>
                                <div class=\"cart mt-4 align-items-center\"> <a href=\" ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTempToCart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo " \" class=\"btn btn-dark text-uppercase mr-2 px-4\">Ajouter au panier</a> <i class=\"fa fa-heart text-muted\"></i>  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/detailProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 53,  214 => 52,  204 => 50,  197 => 49,  193 => 48,  187 => 44,  168 => 42,  164 => 41,  158 => 38,  154 => 36,  150 => 34,  146 => 33,  142 => 32,  137 => 30,  130 => 25,  125 => 23,  112 => 14,  102 => 13,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}{{ parent() }}{% endblock %}

{% block titre %}



{% endblock %}


{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('css/detail.css') }}\">

    <div class=\"container mt-5 mb-5\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"card\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"images p-3\">
                                <div class=\"text-center p-4\"> <img height=\"300\" id=\"main-image\" src=\"{{ asset('upload/') }}{{ product.picture }}\" width=\"250\" /> </div>
{#                                <div class=\"thumbnail text-center\"> <img onclick=\"change_image(this)\" src=\"https://i.imgur.com/Rx7uKd0.jpg\" width=\"70\"> <img onclick=\"change_image(this)\" src=\"https://i.imgur.com/Dhebu4F.jpg\" width=\"70\"> </div>#}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"product p-4\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <a href=\"{{ path('home') }}\" class=\"text-decoration-none\" ><div class=\"d-flex align-items-center\"> <i class=\"fa fa-long-arrow-left\"></i> <span class=\"ml-1\">Retour</span> </div></a>
                                </div>
                                <div class=\"mt-4 mb-3\"> <span class=\"text-uppercase text-muted brand\">{{ product.brand }}</span>
                                    <h5 class=\"text-uppercase\">{{ product.title }}</h5>
                                    <div class=\"price d-flex flex-row align-items-center\"> <span class=\"act-price\">{{ product.price }} €</span>
{#                                        <div class=\"ml-2\"> <small class=\"dis-price\">\$59</small> <span>40% OFF</span> </div>#}
                                    </div>
                                </div>
                                <p class=\"about\">{{ product.description }}</p>
                                <div class=\"sizes mt-5\">
                                    <h6 class=\"text-uppercase\">Tailles</h6>
                                    {% for taille in product.sizes  %}
                                    <label class=\"radio\"  {% if size is defined and  size == taille.id %} style=\"background-color: #5d5454;margin: 3px\"  {% endif %}   ><a href=\"{{ path('addTempSize', {'size':  taille.id , 'id': product.id}) }}\"> <span {% if size is defined and  size == taille.id %} style=\"color: white;margin: 3px\"  {% endif %}  >{{ taille.title }}</span></a> </label>
                                    {% endfor %}
                                </div>

                                <div class=\"sizes mt-2\">
                                    <h6 class=\"text-uppercase\">Couleurs</h6>
                                    {% for couleur in product.colors  %}
                                        <label class=\"radio\"> <a href=\"{{ path('addTempColor', {'color':  couleur.id , 'id': product.id}) }}\"><div style=\"background-color:{{ couleur.colorCode }};border: 2px solid grey;width: 30px; min-height: 30px;
                                                        {% if color is defined and  color == couleur.id %} transform: scale(1.2); margin: 3px  {% endif %} \" ></div></a></label>
                                    {% endfor %}
                                </div>
                                <div class=\"cart mt-4 align-items-center\"> <a href=\" {{ path('addTempToCart', { id: product.id}) }} \" class=\"btn btn-dark text-uppercase mr-2 px-4\">Ajouter au panier</a> <i class=\"fa fa-heart text-muted\"></i>  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







{% endblock %}", "home/detailProduct.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/home/detailProduct.html.twig");
    }
}
