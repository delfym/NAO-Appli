<?php

/* pages/signup.html.twig */
class __TwigTemplate_1493dfe3acefae2a5b0d31fdd2aa5367e6edcb27d33cb314f6f87fc05deb7501 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/signup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">

\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
\t\t\t<li class=\"active\">S'enregistrer</li>
\t\t</ol>

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-xs-12 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">S'enregistrer</h1>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h3 class=\"thin text-center\">Enregistrer un nouveau compte</h3>
\t\t\t\t\t\t\t<p class=\"text-center text-muted\">Vous avez déjà un compte, <a href=\"";
        // line 27
        echo "signin";
        echo "\">Se connecter</a></p>
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Adresse Email<span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row top-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label>Mot de passe <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label>Confirmer le mot de passe <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> 
\t\t\t\t\t\t\t\t\t\t\tJ'ai lu les <a href=\"page_terms.html\">Conditions générales et les conditions d'utlisation du site</a>
\t\t\t\t\t\t\t\t\t\t</label>                        
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-action\" type=\"submit\">Créer le compte</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</article>
\t\t\t<!-- /Article -->

\t\t</div>
\t</div>\t<!-- /container -->
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">

\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"{{ asset('home') }}\">Accueil</a></li>
\t\t\t<li class=\"active\">S'enregistrer</li>
\t\t</ol>

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-xs-12 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">S'enregistrer</h1>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h3 class=\"thin text-center\">Enregistrer un nouveau compte</h3>
\t\t\t\t\t\t\t<p class=\"text-center text-muted\">Vous avez déjà un compte, <a href=\"{{ ('signin') }}\">Se connecter</a></p>
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Adresse Email<span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row top-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label>Mot de passe <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label>Confirmer le mot de passe <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> 
\t\t\t\t\t\t\t\t\t\t\tJ'ai lu les <a href=\"page_terms.html\">Conditions générales et les conditions d'utlisation du site</a>
\t\t\t\t\t\t\t\t\t\t</label>                        
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-action\" type=\"submit\">Créer le compte</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</article>
\t\t\t<!-- /Article -->

\t\t</div>
\t</div>\t<!-- /container -->
\t
{% endblock %}", "pages/signup.html.twig", "/Applications/MAMP/htdocs/NAO-App/templates/pages/signup.html.twig");
    }
}
