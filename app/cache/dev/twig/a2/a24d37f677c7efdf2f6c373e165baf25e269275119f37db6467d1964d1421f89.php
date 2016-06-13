<?php

/* loginBundle:Default:formentidade.html.twig */
class __TwigTemplate_0930aea01dfa40c9a9e47b139aa2e43be0ad49fed03ed9cc318a86cec912c9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginBundle:Default:basic.html.twig", "loginBundle:Default:formentidade.html.twig", 1);
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
        $__internal_e59d166c0b4c1c4e9e9a289872a310382111140df05c5665aa09f3fe6e9fcd7e = $this->env->getExtension("native_profiler");
        $__internal_e59d166c0b4c1c4e9e9a289872a310382111140df05c5665aa09f3fe6e9fcd7e->enter($__internal_e59d166c0b4c1c4e9e9a289872a310382111140df05c5665aa09f3fe6e9fcd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:formentidade.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59d166c0b4c1c4e9e9a289872a310382111140df05c5665aa09f3fe6e9fcd7e->leave($__internal_e59d166c0b4c1c4e9e9a289872a310382111140df05c5665aa09f3fe6e9fcd7e_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_2d36ab21f5e71858a7097d6eb247f8104c9f32b1d641c34b2ed7ae73215e65f3 = $this->env->getExtension("native_profiler");
        $__internal_2d36ab21f5e71858a7097d6eb247f8104c9f32b1d641c34b2ed7ae73215e65f3->enter($__internal_2d36ab21f5e71858a7097d6eb247f8104c9f32b1d641c34b2ed7ae73215e65f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">
\t\t\t\t\t\t<strong>Registre-se!</strong>
                    </h2>
                    <hr>
                    <p>
\t\t\tPor favor preencha este formulário em nome da sua organização para utilizar o nosso app.
                    </p>
                    <p>
\t\t\tOs campos marcados com * são obrigatórios.
                    </p>
                    <form role=\"form\" method=\"POST\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("login_entidadereg");
        echo "\" data-validate=\"parsley\">
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label>Nome*</label>
                                <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>E-mail*</label>
                                <input type=\"email\" class=\"form-control\" name=\"email\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Senha*</label>
                                <input type=\"password\" id=\"password\" name=\"password\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Repita sua Senha*</label>
                                <input type=\"password\" name=\"repassword\" data-trigger=\"change\" data-required=\"true\" data-equalto=\"#password\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Cidade*</label>
                                <input type=\"text\" id=\"cidade\" class=\"form-control\" name=\"cidade\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>CNPJ</label>
                                <input type=\"text\" id=\"cnpj\" class=\"form-control\" name=\"cnpj\" data-trigger=\"change\" >
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Descrição</label>
                                <textarea type=\"text\" cols=\"40\" rows=\"12\" id=\"descricao\" class=\"form-control\" name=\"descricao\" data-trigger=\"change\" ></textarea>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <button type=\"submit\" class=\"btn btn-default\">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_2d36ab21f5e71858a7097d6eb247f8104c9f32b1d641c34b2ed7ae73215e65f3->leave($__internal_2d36ab21f5e71858a7097d6eb247f8104c9f32b1d641c34b2ed7ae73215e65f3_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:formentidade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  40 => 3,  34 => 2,  11 => 1,);
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
/* 						<strong>Registre-se!</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                     <p>*/
/* 			Por favor preencha este formulário em nome da sua organização para utilizar o nosso app.*/
/*                     </p>*/
/*                     <p>*/
/* 			Os campos marcados com * são obrigatórios.*/
/*                     </p>*/
/*                     <form role="form" method="POST" action="{{path('login_entidadereg')}}" data-validate="parsley">*/
/*                         <div class="row">*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Nome*</label>*/
/*                                 <input type="text" id="username" class="form-control" name="username" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>E-mail*</label>*/
/*                                 <input type="email" class="form-control" name="email" data-trigger="change" data-required="true" data-type="email">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Senha*</label>*/
/*                                 <input type="password" id="password" name="password" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Repita sua Senha*</label>*/
/*                                 <input type="password" name="repassword" data-trigger="change" data-required="true" data-equalto="#password">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Cidade*</label>*/
/*                                 <input type="text" id="cidade" class="form-control" name="cidade" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>CNPJ</label>*/
/*                                 <input type="text" id="cnpj" class="form-control" name="cnpj" data-trigger="change" >*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Descrição</label>*/
/*                                 <textarea type="text" cols="40" rows="12" id="descricao" class="form-control" name="descricao" data-trigger="change" ></textarea>*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <button type="submit" class="btn btn-default">Registrar</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {%endblock%}*/
