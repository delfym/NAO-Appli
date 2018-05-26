<?php

/* pages/observForm.html.twig */
class __TwigTemplate_f4a3531e8c780b6eed2269cefd2e6577c03e2537527fe5bc946eae57fea2cb34 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/observForm.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/observForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/observForm.html.twig"));

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
    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
            <li class=\"active\">Vos observations</li>
        </ol>
        <div class=\"row\">
            <header class=\"page-header\">
                <h1 class=\"page-title\">Saisir votre observation</h1>
            </header>
        </div>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-md-8 maincontent\">
                <!--div class=\"row widget\"></div-->

                <h3>Situer l'oiseau sur la carte</h3>
                <!-- intégration de la carte -->
                <div id=\"mapid\"></div>
            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left asideTheme\">
                <!--div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p></p>
                    </div>
                </div-->
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h3>Formulaire de saisie</h3>

                        <form class=\"form-group\" action=\"\" method=\"post\">
                            <label>Votre observation :</label>
                            <textarea class=\"form-control\" name=\"commentObs\"></textarea>
                            <label>Coordonnées de l'observation :</label>
                            <input class=\"form-control\" type=\"text\" id=\"gpsObs\"/>

                            <label>Date de l'observation :</label>
                            <input class=\"form-control\" type=\"date\" name=\"dateObs\"/>
                            <label>Photo de l'oiseau (facultatif):</label>
                            <input class=\"form-control\" type=\"file\" name=\"imgObs\"/>

                            <input class=\"btn btn-action btnLigtht\" type=\"submit\" name=\"submitObs\"/>
                        </form>
                    </div>
                </div>

                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p><img src=\"\" alt=\"\"></p>
                        <p></p>
                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->


        </div>
    </div>    <!-- /container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/observForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"{{ asset('home') }}\">Accueil</a></li>
            <li class=\"active\">Vos observations</li>
        </ol>
        <div class=\"row\">
            <header class=\"page-header\">
                <h1 class=\"page-title\">Saisir votre observation</h1>
            </header>
        </div>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-md-8 maincontent\">
                <!--div class=\"row widget\"></div-->

                <h3>Situer l'oiseau sur la carte</h3>
                <!-- intégration de la carte -->
                <div id=\"mapid\"></div>
            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left asideTheme\">
                <!--div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p></p>
                    </div>
                </div-->
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h3>Formulaire de saisie</h3>

                        <form class=\"form-group\" action=\"\" method=\"post\">
                            <label>Votre observation :</label>
                            <textarea class=\"form-control\" name=\"commentObs\"></textarea>
                            <label>Coordonnées de l'observation :</label>
                            <input class=\"form-control\" type=\"text\" id=\"gpsObs\"/>

                            <label>Date de l'observation :</label>
                            <input class=\"form-control\" type=\"date\" name=\"dateObs\"/>
                            <label>Photo de l'oiseau (facultatif):</label>
                            <input class=\"form-control\" type=\"file\" name=\"imgObs\"/>

                            <input class=\"btn btn-action btnLigtht\" type=\"submit\" name=\"submitObs\"/>
                        </form>
                    </div>
                </div>

                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4></h4>
                        <p><img src=\"\" alt=\"\"></p>
                        <p></p>
                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->


        </div>
    </div>    <!-- /container -->

{% endblock %}

\t

", "pages/observForm.html.twig", "/Applications/MAMP/htdocs/NAO-App/templates/pages/observForm.html.twig");
    }
}
