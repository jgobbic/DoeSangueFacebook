<?php

/* loginBundle:Default:formevento.html.twig */
class __TwigTemplate_1ec8aab80f1e999e674b2af05db8cf3ca530fc8199f87e2a7e97c4e39cdeacbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginBundle:Default:basic.html.twig", "loginBundle:Default:formevento.html.twig", 1);
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
        $__internal_94141ad66c6091754dce74431fc69014c2b0aa1b1ab644d35c5030f7ecf7df40 = $this->env->getExtension("native_profiler");
        $__internal_94141ad66c6091754dce74431fc69014c2b0aa1b1ab644d35c5030f7ecf7df40->enter($__internal_94141ad66c6091754dce74431fc69014c2b0aa1b1ab644d35c5030f7ecf7df40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginBundle:Default:formevento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94141ad66c6091754dce74431fc69014c2b0aa1b1ab644d35c5030f7ecf7df40->leave($__internal_94141ad66c6091754dce74431fc69014c2b0aa1b1ab644d35c5030f7ecf7df40_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_b1cd50e15a0b595fd8a50a2ed8ed6e3a97e518366ad2004ae82a7aa372f007b1 = $this->env->getExtension("native_profiler");
        $__internal_b1cd50e15a0b595fd8a50a2ed8ed6e3a97e518366ad2004ae82a7aa372f007b1->enter($__internal_b1cd50e15a0b595fd8a50a2ed8ed6e3a97e518366ad2004ae82a7aa372f007b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">
\t\t\t\t\t\t<strong>Registre um Evento!</strong>
                    </h2>
                    <hr>
                    <p>
\t\t\tPor favor preencha este formulário para cadastrar um evento.
                    </p>
                    <p>
\t\t\tOs campos marcados com * são obrigatórios.
                    </p>
                    <form role=\"form\" method=\"POST\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("login_eventoreg");
        echo "\" data-validate=\"parsley\">
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label>Nome</label>
                                <input type=\"text\" name=\"nome\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Cidade</label>
                                <input type=\"text\" name=\"cidade\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Rua</label>
                                <input type=\"text\" name=\"rua\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Bairro</label>
                                <input type=\"text\" name=\"bairro\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Número</label>
                                <input type=\"number\" name=\"numero\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Complemento</label>
                                <input type=\"text\" name=\"complemento\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <label>Link para o evento no Facebook</label>
                                <input type=\"url\" name=\"linkfacebook\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
                            </div>
                            <div class=\"form-group col-lg-12\"> 
                                <label>Data de Início</label>
                                <input type=\"date\" name=\"datainicio\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\"/><span class=\"inst\">(MM/DD/YY)</span> 
                            </div> 

                            <div class=\"form-group col-lg-12\"> 
                                <label>Data de Término</label>
                                <input type=\"date\" name=\"datafim\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\"/><span class=\"inst\">(MM/DD/YY)</span> 
                            </div> 
                            <div class=\"form-group col-lg-12\"> 
                                <label>Horário de Início</label>
                                <input type=\"time\" name=\"horainicio\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\"/><span class=\"inst\">(MM/DD/YY)</span> 
                            </div> 

                            <div class=\"form-group col-lg-12\"> 
                                <label>Horário de Término</label>
                                <input type=\"time\" name=\"horafim\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\"/><span class=\"inst\">(MM/DD/YY)</span> 
                            </div> 
                            <div class=\"form-group col-lg-12\">
                                <label>Descrição</label>
                                <textarea type=\"text\" cols=\"40\" rows=\"12\" id=\"descricao\" class=\"form-control\" name=\"descricao\" data-trigger=\"change\" ></textarea>
                            </div>
                            <div class=\"form-group col-lg-12\">
                                <button type=\"submit\" class=\"btn btn-default\">Registrar evento</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_b1cd50e15a0b595fd8a50a2ed8ed6e3a97e518366ad2004ae82a7aa372f007b1->leave($__internal_b1cd50e15a0b595fd8a50a2ed8ed6e3a97e518366ad2004ae82a7aa372f007b1_prof);

    }

    public function getTemplateName()
    {
        return "loginBundle:Default:formevento.html.twig";
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
/* 						<strong>Registre um Evento!</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                     <p>*/
/* 			Por favor preencha este formulário para cadastrar um evento.*/
/*                     </p>*/
/*                     <p>*/
/* 			Os campos marcados com * são obrigatórios.*/
/*                     </p>*/
/*                     <form role="form" method="POST" action="{{path('login_eventoreg')}}" data-validate="parsley">*/
/*                         <div class="row">*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Nome</label>*/
/*                                 <input type="text" name="nome" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Cidade</label>*/
/*                                 <input type="text" name="cidade" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Rua</label>*/
/*                                 <input type="text" name="rua" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Bairro</label>*/
/*                                 <input type="text" name="bairro" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Número</label>*/
/*                                 <input type="number" name="numero" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Complemento</label>*/
/*                                 <input type="text" name="complemento" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Link para o evento no Facebook</label>*/
/*                                 <input type="url" name="linkfacebook" class="form-control" data-trigger="change" data-required="true">*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12"> */
/*                                 <label>Data de Início</label>*/
/*                                 <input type="date" name="datainicio" class="form-control" data-trigger="change" data-required="true"/><span class="inst">(MM/DD/YY)</span> */
/*                             </div> */
/* */
/*                             <div class="form-group col-lg-12"> */
/*                                 <label>Data de Término</label>*/
/*                                 <input type="date" name="datafim" class="form-control" data-trigger="change" data-required="true"/><span class="inst">(MM/DD/YY)</span> */
/*                             </div> */
/*                             <div class="form-group col-lg-12"> */
/*                                 <label>Horário de Início</label>*/
/*                                 <input type="time" name="horainicio" class="form-control" data-trigger="change" data-required="true"/><span class="inst">(MM/DD/YY)</span> */
/*                             </div> */
/* */
/*                             <div class="form-group col-lg-12"> */
/*                                 <label>Horário de Término</label>*/
/*                                 <input type="time" name="horafim" class="form-control" data-trigger="change" data-required="true"/><span class="inst">(MM/DD/YY)</span> */
/*                             </div> */
/*                             <div class="form-group col-lg-12">*/
/*                                 <label>Descrição</label>*/
/*                                 <textarea type="text" cols="40" rows="12" id="descricao" class="form-control" name="descricao" data-trigger="change" ></textarea>*/
/*                             </div>*/
/*                             <div class="form-group col-lg-12">*/
/*                                 <button type="submit" class="btn btn-default">Registrar evento</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {%endblock%}*/
