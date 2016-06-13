<?php

/* base.html.twig */
class __TwigTemplate_6c55edd318f98757d6e48e05eedaf9ca99d953a82ceb6f8a454c063fc1d6ffa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_d98dda20a9e33e9b237fa85f35ca5dd3cf26208a14f9ea971c5a19432cdd3e3c = $this->env->getExtension("native_profiler");
        $__internal_d98dda20a9e33e9b237fa85f35ca5dd3cf26208a14f9ea971c5a19432cdd3e3c->enter($__internal_d98dda20a9e33e9b237fa85f35ca5dd3cf26208a14f9ea971c5a19432cdd3e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_d98dda20a9e33e9b237fa85f35ca5dd3cf26208a14f9ea971c5a19432cdd3e3c->leave($__internal_d98dda20a9e33e9b237fa85f35ca5dd3cf26208a14f9ea971c5a19432cdd3e3c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_efb1187f89ea21fa4573f5647c9e099c71d3acd48e4331f523c5231f4e4f7d14 = $this->env->getExtension("native_profiler");
        $__internal_efb1187f89ea21fa4573f5647c9e099c71d3acd48e4331f523c5231f4e4f7d14->enter($__internal_efb1187f89ea21fa4573f5647c9e099c71d3acd48e4331f523c5231f4e4f7d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_efb1187f89ea21fa4573f5647c9e099c71d3acd48e4331f523c5231f4e4f7d14->leave($__internal_efb1187f89ea21fa4573f5647c9e099c71d3acd48e4331f523c5231f4e4f7d14_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be1fadef6328ebc175372fd61286270057b421e8b21229787ceb31a59b4a75af = $this->env->getExtension("native_profiler");
        $__internal_be1fadef6328ebc175372fd61286270057b421e8b21229787ceb31a59b4a75af->enter($__internal_be1fadef6328ebc175372fd61286270057b421e8b21229787ceb31a59b4a75af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be1fadef6328ebc175372fd61286270057b421e8b21229787ceb31a59b4a75af->leave($__internal_be1fadef6328ebc175372fd61286270057b421e8b21229787ceb31a59b4a75af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_331157daacc19507ed4f1f5fdb5a3dcb8e2404a8949358c5727b743202fe6437 = $this->env->getExtension("native_profiler");
        $__internal_331157daacc19507ed4f1f5fdb5a3dcb8e2404a8949358c5727b743202fe6437->enter($__internal_331157daacc19507ed4f1f5fdb5a3dcb8e2404a8949358c5727b743202fe6437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_331157daacc19507ed4f1f5fdb5a3dcb8e2404a8949358c5727b743202fe6437->leave($__internal_331157daacc19507ed4f1f5fdb5a3dcb8e2404a8949358c5727b743202fe6437_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f25ce7e46ba4846f6e91f187b23c96eefaea46f81435108ad3d518415c05139c = $this->env->getExtension("native_profiler");
        $__internal_f25ce7e46ba4846f6e91f187b23c96eefaea46f81435108ad3d518415c05139c->enter($__internal_f25ce7e46ba4846f6e91f187b23c96eefaea46f81435108ad3d518415c05139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f25ce7e46ba4846f6e91f187b23c96eefaea46f81435108ad3d518415c05139c->leave($__internal_f25ce7e46ba4846f6e91f187b23c96eefaea46f81435108ad3d518415c05139c_prof);

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
        return array (  94 => 12,  83 => 11,  72 => 7,  60 => 6,  51 => 13,  48 => 12,  46 => 11,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
