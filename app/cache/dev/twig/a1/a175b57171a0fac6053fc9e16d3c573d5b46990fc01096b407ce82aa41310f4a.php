<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45c99509f2c90f2491fd1b1122741f0e2a136dd1a18a8d8ff73e120f2c825b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c80b4ba4ba5ca2d2deb3556199976b88ea71b44a090a8888bedc332a6526cfec = $this->env->getExtension("native_profiler");
        $__internal_c80b4ba4ba5ca2d2deb3556199976b88ea71b44a090a8888bedc332a6526cfec->enter($__internal_c80b4ba4ba5ca2d2deb3556199976b88ea71b44a090a8888bedc332a6526cfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80b4ba4ba5ca2d2deb3556199976b88ea71b44a090a8888bedc332a6526cfec->leave($__internal_c80b4ba4ba5ca2d2deb3556199976b88ea71b44a090a8888bedc332a6526cfec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f9d4bcc884334d3e1677896e8dfc43e3605d6d5bca3011ffc40f98e6314bfa4 = $this->env->getExtension("native_profiler");
        $__internal_7f9d4bcc884334d3e1677896e8dfc43e3605d6d5bca3011ffc40f98e6314bfa4->enter($__internal_7f9d4bcc884334d3e1677896e8dfc43e3605d6d5bca3011ffc40f98e6314bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f9d4bcc884334d3e1677896e8dfc43e3605d6d5bca3011ffc40f98e6314bfa4->leave($__internal_7f9d4bcc884334d3e1677896e8dfc43e3605d6d5bca3011ffc40f98e6314bfa4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ce4dc82d306ad0fd7f45ca333b77c3edc1afe6f9cfa12cb1b96311c9270c5d6 = $this->env->getExtension("native_profiler");
        $__internal_8ce4dc82d306ad0fd7f45ca333b77c3edc1afe6f9cfa12cb1b96311c9270c5d6->enter($__internal_8ce4dc82d306ad0fd7f45ca333b77c3edc1afe6f9cfa12cb1b96311c9270c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ce4dc82d306ad0fd7f45ca333b77c3edc1afe6f9cfa12cb1b96311c9270c5d6->leave($__internal_8ce4dc82d306ad0fd7f45ca333b77c3edc1afe6f9cfa12cb1b96311c9270c5d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44f500757cff38fb48ed6485c7fec40fa8ecd4d24385a8e93e64d0e75ed0e1d5 = $this->env->getExtension("native_profiler");
        $__internal_44f500757cff38fb48ed6485c7fec40fa8ecd4d24385a8e93e64d0e75ed0e1d5->enter($__internal_44f500757cff38fb48ed6485c7fec40fa8ecd4d24385a8e93e64d0e75ed0e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_44f500757cff38fb48ed6485c7fec40fa8ecd4d24385a8e93e64d0e75ed0e1d5->leave($__internal_44f500757cff38fb48ed6485c7fec40fa8ecd4d24385a8e93e64d0e75ed0e1d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
