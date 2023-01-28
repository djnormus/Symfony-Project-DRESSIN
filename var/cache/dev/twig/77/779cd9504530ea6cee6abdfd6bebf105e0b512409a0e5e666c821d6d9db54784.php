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

/* home/filterProduct.txt */
class __TwigTemplate_e6306a3e1da122b0f8aaabfdfe937d9365622fde8bf41473149dd3fe86d9bc23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filterProduct.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filterProduct.txt"));

        // line 1
        echo "


actions liées aux filtre


sur le catalogue on a un filtre clickable par section (gender en BDD sur product)


l'utilisateur click sur une de ces 3 sections (femme, homme, enfant)
donc notre utilisateur souhaite accéder aux produits liés à cette section
=>   findBy(gender=>sectioncliqué(passée en param dans l'url))


l'utilisateur a la possibilité de resserer le filtre sur la categorie et/ou le prix

*************  etape 1 **********************************************

1- l'utilisateur n'a rien sélectionné mais soumet le formulaire
=> incidence: le résultat reste le même (simple requete par section sans critere de categorie ou prix)

2- l'utilisateur ne saisie pas la catégorie mais le filtre de prix
=> incidence: recherche de produit par genre conservé et prix <= à la somme selectionnée
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden

3- lutilisateur saisi la categorie mais pas de filtre de prix
=> incidence : recherche de produit par genre conservé et catégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie ou la categorie est celle selectionnée)
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden


4- l'utilisateur saisi et le prix et la categorie
=> incidence : recherche de produit par genre conservé, prix et catégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie ou la categorie est celle selectionnée)
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden

------------------------------------   categorie déja selectionnée ( etape 2) --------------------------------------------

5- l'utilisateur n'a rien sélectionné mais soumet le formulaire
=> incidence: le résultat reste le même (simple requete par section sans critere de souscategorie ou prix donc on conserve simplement la categorie)

6-
l'utilisateur ne saisie pas la souscatégorie mais le filtre de prix
=> incidence: recherche de produit par genre conservé et prix <= à la somme selectionnée
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden


7-lutilisateur saisi la souscategorie mais pas de filtre de prix
=> incidence : recherche de produit par genre conservé et souscatégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie )
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden


8- l'utilisateur saisi et le prix et la souscategorie
=> incidence : recherche de produit par genre conservé, prix et souscatégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie )
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/filterProduct.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


actions liées aux filtre


sur le catalogue on a un filtre clickable par section (gender en BDD sur product)


l'utilisateur click sur une de ces 3 sections (femme, homme, enfant)
donc notre utilisateur souhaite accéder aux produits liés à cette section
=>   findBy(gender=>sectioncliqué(passée en param dans l'url))


l'utilisateur a la possibilité de resserer le filtre sur la categorie et/ou le prix

*************  etape 1 **********************************************

1- l'utilisateur n'a rien sélectionné mais soumet le formulaire
=> incidence: le résultat reste le même (simple requete par section sans critere de categorie ou prix)

2- l'utilisateur ne saisie pas la catégorie mais le filtre de prix
=> incidence: recherche de produit par genre conservé et prix <= à la somme selectionnée
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden

3- lutilisateur saisi la categorie mais pas de filtre de prix
=> incidence : recherche de produit par genre conservé et catégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie ou la categorie est celle selectionnée)
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden


4- l'utilisateur saisi et le prix et la categorie
=> incidence : recherche de produit par genre conservé, prix et catégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie ou la categorie est celle selectionnée)
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden

------------------------------------   categorie déja selectionnée ( etape 2) --------------------------------------------

5- l'utilisateur n'a rien sélectionné mais soumet le formulaire
=> incidence: le résultat reste le même (simple requete par section sans critere de souscategorie ou prix donc on conserve simplement la categorie)

6-
l'utilisateur ne saisie pas la souscatégorie mais le filtre de prix
=> incidence: recherche de produit par genre conservé et prix <= à la somme selectionnée
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden


7-lutilisateur saisi la souscategorie mais pas de filtre de prix
=> incidence : recherche de produit par genre conservé et souscatégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie )
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden


8- l'utilisateur saisi et le prix et la souscategorie
=> incidence : recherche de produit par genre conservé, prix et souscatégorie selectionnée et renvoie dans le formulaire 
des sous-catégories en liens pour affiner les filtres (requete sur souscategorie )
=> faire transiter les infos selectionnées ou non dans des values d'input type hidden

", "home/filterProduct.txt", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/home/filterProduct.txt");
    }
}
