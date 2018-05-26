<?php

/* base.html.twig */
class __TwigTemplate_01b03e6adf41cec3813771e916d19acc6630269564ba0008a704b2827426e661 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"NAO Application\">
        <meta name=\"author\"      content=\"watching birds\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\"
                integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
                crossorigin=\"\"></script>


    </head>

    <body>
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-nao.png"), "html", null, true);
        echo "\" alt=\"NAO logo\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"active\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home"), "html", null, true);
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about"), "html", null, true);
        echo "\">A propos</a></li>
                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("observForm"), "html", null, true);
        echo " \">Saisir une observation</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <!--li><a href=\"";
        // line 54
        echo "\">Left Sidebar</a></li-->
                            <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("observForm"), "html", null, true);
        echo " \">Saisir une observation</a></li>
                            <li class=\"active\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sidebarRight"), "html", null, true);
        echo "\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        echo "\">Contact</a></li>
                    <li><a class=\"btn\" href=\"";
        // line 60
        echo "signin";
        echo "\">Se connecter / S'inscrire</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- ***************** INTEGRATION DES CONTENUS DES AUTRES PAGES ****************** -->
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    <!-- ****************************************************************************** -->

    <footer id=\"footer\" class=\"top-space\">

        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">contact@nao.fr</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Suivez-nous</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"\"><i class=\"fab fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-github fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook fa-2\"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class=\"footer2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"simplenav\">
                                <a href=\"#\">Accueil</a> |
                                <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about"), "html", null, true);
        echo "\">A propos</a> |
                                <a href=\"sidebar-right.html\">Sidebar</a> |
                                <a href=\"";
        // line 124
        echo "contact";
        echo "\">Contact</a> |
                                <b><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("signup"), "html", null, true);
        echo "\">S'enregistrer</a></b>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"text-right\">
                                Copyright &copy; 2014, Watching Birds Group. Designed by <a href=\"http://gettemplate.com/\" rel=\"designer\">gettemplate</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>

    ";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "NAO App";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nao_favicon.png"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!--link rel=\"stylesheet\" href=\" ";
        // line 18
        echo " \"-->
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
                  integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
                  crossorigin=\"\"/>


            <!-- Custom styles for our template -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\" >
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]-->
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/template.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/leaflet-map.js"), "html", null, true);
        echo "\"></script>
    <!--[endif]-->
        ";
        
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
        return array (  344 => 158,  340 => 157,  336 => 156,  332 => 155,  321 => 147,  317 => 146,  313 => 144,  304 => 143,  293 => 69,  284 => 68,  272 => 27,  268 => 26,  258 => 18,  254 => 17,  246 => 13,  237 => 12,  219 => 10,  207 => 161,  205 => 143,  184 => 125,  180 => 124,  175 => 122,  122 => 71,  120 => 68,  109 => 60,  105 => 59,  99 => 56,  95 => 55,  92 => 54,  85 => 50,  81 => 49,  77 => 48,  68 => 44,  51 => 29,  49 => 12,  44 => 10,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"NAO Application\">
        <meta name=\"author\"      content=\"watching birds\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

        <title>{% block title %}NAO App{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"shortcut icon\" href=\"{{ asset('images/nao_favicon.png') }}\">

            <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <!--link rel=\"stylesheet\" href=\" {#  asset('css/font-awesome.min.css')  #} \"-->
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\"
                  integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"
                  crossorigin=\"\"/>


            <!-- Custom styles for our template -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.css')}}\" media=\"screen\" >
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css')}}\">
        {% endblock %}

        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\"
                integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"
                crossorigin=\"\"></script>


    </head>

    <body>
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"{{ asset('index')}}\"><img src=\"{{ asset('images/logo-nao.png') }}\" alt=\"NAO logo\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"active\"><a href=\"{{ asset('home') }}\">Accueil</a></li>
                    <li><a href=\"{{ asset('about') }}\">A propos</a></li>
                    <li><a href=\"{{ asset('observForm') }} \">Saisir une observation</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <!--li><a href=\"{# {{ path('sidebarLeft') }} #}\">Left Sidebar</a></li-->
                            <li><a href=\"{{ asset('observForm') }} \">Saisir une observation</a></li>
                            <li class=\"active\"><a href=\"{{ asset('sidebarRight') }}\">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{  asset('contact') }}\">Contact</a></li>
                    <li><a class=\"btn\" href=\"{{ ('signin') }}\">Se connecter / S'inscrire</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- ***************** INTEGRATION DES CONTENUS DES AUTRES PAGES ****************** -->
        {% block body %}

        {% endblock %}
    <!-- ****************************************************************************** -->

    <footer id=\"footer\" class=\"top-space\">

        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">contact@nao.fr</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Suivez-nous</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"\"><i class=\"fab fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-github fa-2\"></i></a>
                                <a href=\"\"><i class=\"fab fa-facebook fa-2\"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class=\"footer2\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"simplenav\">
                                <a href=\"#\">Accueil</a> |
                                <a href=\"{{  asset('about') }}\">A propos</a> |
                                <a href=\"sidebar-right.html\">Sidebar</a> |
                                <a href=\"{{  ('contact') }}\">Contact</a> |
                                <b><a href=\"{{ asset('signup') }}\">S'enregistrer</a></b>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"text-right\">
                                Copyright &copy; 2014, Watching Birds Group. Designed by <a href=\"http://gettemplate.com/\" rel=\"designer\">gettemplate</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>

    {% block javascripts %}
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]-->
            <script src=\"{{ asset('js/html5shiv.js') }}\"></script>
            <script src=\"{{ asset('js/respond.min.js') }}\"></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
            <script src=\"{{ asset('js/headroom.min.js') }}\"></script>
            <script src=\"{{ asset('js/jQuery.headroom.min.js')}}\"></script>
            <script src=\"{{ asset('js/template.js')}}\"></script>
            <script src=\"{{ asset('js/leaflet-map.js') }}\"></script>
    <!--[endif]-->
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/NAO-App/templates/base.html.twig");
    }
}
