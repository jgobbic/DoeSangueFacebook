<?php

/* loginBundle:Default:basic.html.twig */
class __TwigTemplate_24104b3320eba09ec10926585d81d642103aca88d12b27e493cf83bc547512c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eab6b9a6648567e31ae6c7b83379b68e8cc26c2eee5c4d9b042502d83eea09d4 = $this->env->getExtension("native_profiler");
        $__internal_eab6b9a6648567e31ae6c7b83379b68e8cc26c2eee5c4d9b042502d83eea09d4->enter($__internal_eab6b9a6648567e31ae6c7b83379b68e8cc26c2eee5c4d9b042502d83eea09d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:basic.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>#PARTIU Doar</title>

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/css/business-casual.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/css/parsley/parsley.css"), "html", null, true);
        echo "\">
    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    
    <div class=\"brand\">#PARTIU Doar</div>
    <div class=\"address-bar\">Aplicativo para auxiliar doação de sangue</div>

    <!-- Navigation -->
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Navegação</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class=\"navbar-brand\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("login_homepage");
        echo "\">App Doador De Sangue</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("login_homepage");
        echo "\">Home</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("login_login");
        echo "\">Login</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("login_about");
        echo "\">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    ";
        // line 69
        $this->displayBlock('container', $context, $blocks);
        // line 71
        echo "
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <p>Copyright &copy; Gyordano e Companhia (A gente precisa de nomes melhores, honestamente).</p>
                </div>
            </div>
        </div>
    </footer>

    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/login/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_eab6b9a6648567e31ae6c7b83379b68e8cc26c2eee5c4d9b042502d83eea09d4->leave($__internal_eab6b9a6648567e31ae6c7b83379b68e8cc26c2eee5c4d9b042502d83eea09d4_prof);

    }

    // line 69
    public function block_container($context, array $blocks = array())
    {
        $__internal_f42f7e4ebb70611a2e6df8af4e1f690cf7f2c0ab5fe3bab13779c9e34648ebe4 = $this->env->getExtension("native_profiler");
        $__internal_f42f7e4ebb70611a2e6df8af4e1f690cf7f2c0ab5fe3bab13779c9e34648ebe4->enter($__internal_f42f7e4ebb70611a2e6df8af4e1f690cf7f2c0ab5fe3bab13779c9e34648ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 70
        echo "    ";
        
        $__internal_f42f7e4ebb70611a2e6df8af4e1f690cf7f2c0ab5fe3bab13779c9e34648ebe4->leave($__internal_f42f7e4ebb70611a2e6df8af4e1f690cf7f2c0ab5fe3bab13779c9e34648ebe4_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 70,  164 => 69,  152 => 87,  148 => 86,  144 => 85,  140 => 84,  136 => 83,  132 => 82,  119 => 71,  117 => 69,  105 => 60,  99 => 57,  93 => 54,  84 => 48,  50 => 17,  46 => 16,  42 => 15,  38 => 14,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>#PARTIU Doar</title>*/
/* */
/*     <link rel="stylesheet" href="{{asset('bundles/login/css/bootstrap.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('bundles/login/css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('bundles/login/css/business-casual.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('bundles/login/css/parsley/parsley.css')}}">*/
/*     <!-- Fonts -->*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/*     */
/*     <div class="brand">#PARTIU Doar</div>*/
/*     <div class="address-bar">Aplicativo para auxiliar doação de sangue</div>*/
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Navegação</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->*/
/*                 <a class="navbar-brand" href="{{path('login_homepage')}}">App Doador De Sangue</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{path('login_homepage')}}">Home</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('login_login')}}">Login</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('login_about')}}">About</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     {%block container %}*/
/*     {%endblock%}*/
/* */
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <p>Copyright &copy; Gyordano e Companhia (A gente precisa de nomes melhores, honestamente).</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/*     <script src="{{asset('bundles/login/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/login/js/bootstrap.js')}}"></script>*/
/*     <script src="{{asset('bundles/login/js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/login/js/parsley/parsley.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/login/js/parsley/parsley.extend.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/login/js/parsley/parsley-standalone.min.js')}}"></script>*/
/* </body>*/
/* */
/* </html>*/
/* */
