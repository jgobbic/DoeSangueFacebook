<?php

/* loginBundle:Default:loginuser.html.twig */
class __TwigTemplate_290fa0412be4af21cb7423c83a0fc0af58b80a0bb01d40069943e49aacfe0e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginBundle:Default:basic.html.twig", "loginBundle:Default:loginuser.html.twig", 1);
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
        $__internal_e6abe8b1e289195744a0e3932d0938d38e82790e8ff9474462428e03dc62b7b1 = $this->env->getExtension("native_profiler");
        $__internal_e6abe8b1e289195744a0e3932d0938d38e82790e8ff9474462428e03dc62b7b1->enter($__internal_e6abe8b1e289195744a0e3932d0938d38e82790e8ff9474462428e03dc62b7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:loginuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6abe8b1e289195744a0e3932d0938d38e82790e8ff9474462428e03dc62b7b1->leave($__internal_e6abe8b1e289195744a0e3932d0938d38e82790e8ff9474462428e03dc62b7b1_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_21726d65de76bd31bbbd918e97592d6441017ff04b12745fd2bbf69bec32f62d = $this->env->getExtension("native_profiler");
        $__internal_21726d65de76bd31bbbd918e97592d6441017ff04b12745fd2bbf69bec32f62d->enter($__internal_21726d65de76bd31bbbd918e97592d6441017ff04b12745fd2bbf69bec32f62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">
\t\t\t\t\t\t<strong>Login!</strong>
                    </h2>
                    <hr>
                    <p>
\t\t\tInsira seus dados para logar em sua conta!
\t\t    </p>
                    <form role=\"form\" method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login_login");
        echo "\" data-validate=\"parsley\">
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label>Email</label>
                                <input type=\"text\" name=\"email\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Senha</label>
                                <input type=\"password\" name=\"password\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label class=\"checkbox\"> Remember-me
                                    <input type=\"checkbox\" name=\"remember\" value=\"remember-me\">
                                </label>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <button type=\"submit\" class=\"btn btn-default\">Logar</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h2 class=\"intro-text text-center\">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("login_entidadereg");
        echo "\">Registrar conta!</a>
                    </h2>
                    <hr>
                </div>
            </div>
        </div>

    </div>
    ";
        // line 46
        if (array_key_exists("name", $context)) {
            // line 47
            echo "        <div class=\"alert-info fade in\">
            <strong>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        
        $__internal_21726d65de76bd31bbbd918e97592d6441017ff04b12745fd2bbf69bec32f62d->leave($__internal_21726d65de76bd31bbbd918e97592d6441017ff04b12745fd2bbf69bec32f62d_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:loginuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  93 => 47,  91 => 46,  80 => 38,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
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
/* 						<strong>Login!</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                     <p>*/
/* 			Insira seus dados para logar em sua conta!*/
/* 		    </p>*/
/*                     <form role="form" method="POST" action="{{path('login_login')}}" data-validate="parsley">*/
/*                         <div class="row">*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Email</label>*/
/*                                 <input type="text" name="email" class="form-control" data-trigger="change" data-required="true" data-type="email">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Senha</label>*/
/*                                 <input type="password" name="password" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label class="checkbox"> Remember-me*/
/*                                     <input type="checkbox" name="remember" value="remember-me">*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <button type="submit" class="btn btn-default">Logar</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                     <hr>*/
/*                     <h2 class="intro-text text-center">*/
/*                         <a href="{{path('login_entidadereg')}}">Registrar conta!</a>*/
/*                     </h2>*/
/*                     <hr>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*     {% if name is defined%}*/
/*         <div class="alert-info fade in">*/
/*             <strong>{{name}}</strong>*/
/*         </div>*/
/*     {%endif%}*/
/* {%endblock%}*/
