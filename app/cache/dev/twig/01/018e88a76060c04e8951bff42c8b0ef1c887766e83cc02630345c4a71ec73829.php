<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb0f24cc7bb1559ec63b15c24245ffc3f5c7d604ec34a7e6af6313e8076e049a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae208da67e8565363126a3235a856766d6f716fe8a81e581753bdc0f5a1f9a2a = $this->env->getExtension("native_profiler");
        $__internal_ae208da67e8565363126a3235a856766d6f716fe8a81e581753bdc0f5a1f9a2a->enter($__internal_ae208da67e8565363126a3235a856766d6f716fe8a81e581753bdc0f5a1f9a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae208da67e8565363126a3235a856766d6f716fe8a81e581753bdc0f5a1f9a2a->leave($__internal_ae208da67e8565363126a3235a856766d6f716fe8a81e581753bdc0f5a1f9a2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99879209a8e875ea8c02cde45505477d72233e42836af9b2dfc3c7a0dda2fa1c = $this->env->getExtension("native_profiler");
        $__internal_99879209a8e875ea8c02cde45505477d72233e42836af9b2dfc3c7a0dda2fa1c->enter($__internal_99879209a8e875ea8c02cde45505477d72233e42836af9b2dfc3c7a0dda2fa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99879209a8e875ea8c02cde45505477d72233e42836af9b2dfc3c7a0dda2fa1c->leave($__internal_99879209a8e875ea8c02cde45505477d72233e42836af9b2dfc3c7a0dda2fa1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5646efd8276c29118b6204d373e283cd3d6d004340f147e32c141a5d8b13b5b = $this->env->getExtension("native_profiler");
        $__internal_b5646efd8276c29118b6204d373e283cd3d6d004340f147e32c141a5d8b13b5b->enter($__internal_b5646efd8276c29118b6204d373e283cd3d6d004340f147e32c141a5d8b13b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5646efd8276c29118b6204d373e283cd3d6d004340f147e32c141a5d8b13b5b->leave($__internal_b5646efd8276c29118b6204d373e283cd3d6d004340f147e32c141a5d8b13b5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2a8e31e06b390d4918689bf7a91ccd4ce8d17baebfc41ae92bcd0a30dacd690 = $this->env->getExtension("native_profiler");
        $__internal_a2a8e31e06b390d4918689bf7a91ccd4ce8d17baebfc41ae92bcd0a30dacd690->enter($__internal_a2a8e31e06b390d4918689bf7a91ccd4ce8d17baebfc41ae92bcd0a30dacd690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2a8e31e06b390d4918689bf7a91ccd4ce8d17baebfc41ae92bcd0a30dacd690->leave($__internal_a2a8e31e06b390d4918689bf7a91ccd4ce8d17baebfc41ae92bcd0a30dacd690_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
