<?php

/* loginBundle:Default:index.html.twig */
class __TwigTemplate_7228329f3476d5a7d8cbfdfe54b713f44aad7ed04fe3b4ca30b593e38cf8dd10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginBundle:Default:basic.html.twig", "loginBundle:Default:index.html.twig", 1);
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
        $__internal_e8cc5167dce19e3398e51c5b562dce1d403d455fcce35add6925e0da16fcf8f5 = $this->env->getExtension("native_profiler");
        $__internal_e8cc5167dce19e3398e51c5b562dce1d403d455fcce35add6925e0da16fcf8f5->enter($__internal_e8cc5167dce19e3398e51c5b562dce1d403d455fcce35add6925e0da16fcf8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8cc5167dce19e3398e51c5b562dce1d403d455fcce35add6925e0da16fcf8f5->leave($__internal_e8cc5167dce19e3398e51c5b562dce1d403d455fcce35add6925e0da16fcf8f5_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_c9b79b5a28e4f192c863c825362e47ccaf5454b5d0283efcf6ed67672bd9947d = $this->env->getExtension("native_profiler");
        $__internal_c9b79b5a28e4f192c863c825362e47ccaf5454b5d0283efcf6ed67672bd9947d->enter($__internal_c9b79b5a28e4f192c863c825362e47ccaf5454b5d0283efcf6ed67672bd9947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Você está no
                        <strong>DEBUG MENU</strong>
                    </h2>
                    <hr>

\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login_eventoreg");
        echo "\">Evento Registro</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                <div class=\"clearfix\"></div>

                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_c9b79b5a28e4f192c863c825362e47ccaf5454b5d0283efcf6ed67672bd9947d->leave($__internal_c9b79b5a28e4f192c863c825362e47ccaf5454b5d0283efcf6ed67672bd9947d_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
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
/*                     <h2 class="intro-text text-center">Você está no*/
/*                         <strong>DEBUG MENU</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/* */
/* 					<div class="col-lg-12 text-center">*/
/* 					</div>*/
/* */
/* 					<div class="col-lg-12">*/
/* 						<ul>*/
/* 							<li>*/
/* 								<a href="{{path('login_eventoreg')}}">Evento Registro</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/*                 <div class="clearfix"></div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {%endblock%}*/
