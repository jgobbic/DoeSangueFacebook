<?php

/* loginBundle:Default:about.html.twig */
class __TwigTemplate_0afc500a217e91659bb930050c7327f7f1fbd171197d21b14b7c4c77a01c8d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginBundle:Default:basic.html.twig", "loginBundle:Default:about.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "loginBundle:Default:basic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccb2f50294e4913fd908000f31057fb3559c7a56f61413a8b4a3d329ac589abb = $this->env->getExtension("native_profiler");
        $__internal_ccb2f50294e4913fd908000f31057fb3559c7a56f61413a8b4a3d329ac589abb->enter($__internal_ccb2f50294e4913fd908000f31057fb3559c7a56f61413a8b4a3d329ac589abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccb2f50294e4913fd908000f31057fb3559c7a56f61413a8b4a3d329ac589abb->leave($__internal_ccb2f50294e4913fd908000f31057fb3559c7a56f61413a8b4a3d329ac589abb_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_9018bfe0582e03d391a334f23e86e4bbea082c287988405019745e476c5e237e = $this->env->getExtension("native_profiler");
        $__internal_9018bfe0582e03d391a334f23e86e4bbea082c287988405019745e476c5e237e->enter($__internal_9018bfe0582e03d391a334f23e86e4bbea082c287988405019745e476c5e237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Sobre o
                        <strong>nosso projeto</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-md-6\">
                    <img class=\"img-responsive img-border-left\" src=\"img/slide-2.jpg\" alt=\"\">
                </div>
                <div class=\"col-md-6\">
                    <p>Projeto de aplicativo doador de sangue da turma de
\t\t\t\t\t\tEngenharia de Software da Engenharia de Computação 2013 da USP São Carlos.</p>
                    <p>Site ainda em construção, o projeto fora produzido utilizando Symfony e Bootstrap.</p>
                    <p>Por favor entre em contato caso encontre alguma dificuldade!</p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">A equipe responsável por
                        <strong>ESSE PROJETO</strong>
                    </h2>
                    <hr>
                </div>

                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>Lucas Hilário Favaro Leal
                        <small></small>
                    </h3>
                </div>

                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>Gyordano Gadoni Reis
                        <small></small>
                    </h3>
                </div>

                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>Bernardo Cardoso Rodrigues
                        <small></small>
                    </h3>
                </div>

                <div class=\"clearfix\"></div>

                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>João Pedro Gobbi Codognotto
                        <small></small>
                    </h3>
                </div>

                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>Helder de Melo Mendes
                        <small></small>
                    </h3>
                </div>

                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>Renan Yochiro Kawamura
                        <small></small>
                    </h3>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>

    </div>
";
        
        $__internal_9018bfe0582e03d391a334f23e86e4bbea082c287988405019745e476c5e237e->leave($__internal_9018bfe0582e03d391a334f23e86e4bbea082c287988405019745e476c5e237e_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {%extends "loginBundle:Default:basic.html.twig"%}*/
/* {%block container %}*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <div class="col-lg-12">*/
/*                     <hr>*/
/*                     <h2 class="intro-text text-center">Sobre o*/
/*                         <strong>nosso projeto</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <p>Projeto de aplicativo doador de sangue da turma de*/
/* 						Engenharia de Software da Engenharia de Computação 2013 da USP São Carlos.</p>*/
/*                     <p>Site ainda em construção, o projeto fora produzido utilizando Symfony e Bootstrap.</p>*/
/*                     <p>Por favor entre em contato caso encontre alguma dificuldade!</p>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <div class="col-lg-12">*/
/*                     <hr>*/
/*                     <h2 class="intro-text text-center">A equipe responsável por*/
/*                         <strong>ESSE PROJETO</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4 text-center">*/
/*                     <img class="img-responsive" src="http://placehold.it/750x450" alt="">*/
/*                     <h3>Lucas Hilário Favaro Leal*/
/*                         <small></small>*/
/*                     </h3>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4 text-center">*/
/*                     <img class="img-responsive" src="http://placehold.it/750x450" alt="">*/
/*                     <h3>Gyordano Gadoni Reis*/
/*                         <small></small>*/
/*                     </h3>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4 text-center">*/
/*                     <img class="img-responsive" src="http://placehold.it/750x450" alt="">*/
/*                     <h3>Bernardo Cardoso Rodrigues*/
/*                         <small></small>*/
/*                     </h3>*/
/*                 </div>*/
/* */
/*                 <div class="clearfix"></div>*/
/* */
/*                 <div class="col-sm-4 text-center">*/
/*                     <img class="img-responsive" src="http://placehold.it/750x450" alt="">*/
/*                     <h3>João Pedro Gobbi Codognotto*/
/*                         <small></small>*/
/*                     </h3>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4 text-center">*/
/*                     <img class="img-responsive" src="http://placehold.it/750x450" alt="">*/
/*                     <h3>Helder de Melo Mendes*/
/*                         <small></small>*/
/*                     </h3>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4 text-center">*/
/*                     <img class="img-responsive" src="http://placehold.it/750x450" alt="">*/
/*                     <h3>Renan Yochiro Kawamura*/
/*                         <small></small>*/
/*                     </h3>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {%endblock%}*/
