<?php

/* loginBundle:Default:welcome.html.twig */
class __TwigTemplate_13717f5e03ce0f1a0dba61a61f6f65490631be998bb8b9c01a4cc422e760f15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginBundle:Default:basic.html.twig", "loginBundle:Default:welcome.html.twig", 1);
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
        $__internal_36d03f84bcfdd0ae454eb235bd751b8ea1d78b25e7097eda7dc03a121ae00fd6 = $this->env->getExtension("native_profiler");
        $__internal_36d03f84bcfdd0ae454eb235bd751b8ea1d78b25e7097eda7dc03a121ae00fd6->enter($__internal_36d03f84bcfdd0ae454eb235bd751b8ea1d78b25e7097eda7dc03a121ae00fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d03f84bcfdd0ae454eb235bd751b8ea1d78b25e7097eda7dc03a121ae00fd6->leave($__internal_36d03f84bcfdd0ae454eb235bd751b8ea1d78b25e7097eda7dc03a121ae00fd6_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_eef5940b86704508d585b9d0390b0fb376dc3290b43719f27c69c465dbc7e68e = $this->env->getExtension("native_profiler");
        $__internal_eef5940b86704508d585b9d0390b0fb376dc3290b43719f27c69c465dbc7e68e->enter($__internal_eef5940b86704508d585b9d0390b0fb376dc3290b43719f27c69c465dbc7e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">
                        <strong>Quem você acha que somos nós!!!</strong>
                    </h2>
                    <hr>
                    <p>Faça o impossível, veja o invisível.</p>
\t\t\t\t\t\t<p><strong>Lute, lute, enfrente o poder!</strong></p>
                    <p>Alcançe o inalcançável, quebre o inquebrável.</p>
\t\t\t\t\t\t<p><strong>Lute, lute, enfrente o poder!</strong></p>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_eef5940b86704508d585b9d0390b0fb376dc3290b43719f27c69c465dbc7e68e->leave($__internal_eef5940b86704508d585b9d0390b0fb376dc3290b43719f27c69c465dbc7e68e_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:welcome.html.twig";
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
/*                     <h2 class="intro-text text-center">*/
/*                         <strong>Quem você acha que somos nós!!!</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                     <p>Faça o impossível, veja o invisível.</p>*/
/* 						<p><strong>Lute, lute, enfrente o poder!</strong></p>*/
/*                     <p>Alcançe o inalcançável, quebre o inquebrável.</p>*/
/* 						<p><strong>Lute, lute, enfrente o poder!</strong></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {%endblock%}*/
