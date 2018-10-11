<?php

/* EcommerceEcommerceBundle:Default:newCategorie.html.twig */
class __TwigTemplate_e87cc467ebc1d4ab0c9ace39e467a509cdeaa9145efd2276603fd1a7e2b83ec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout_admin.html.twig", "EcommerceEcommerceBundle:Default:newCategorie.html.twig", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceEcommerceBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
<div class=\"container1\">
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
        ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:newCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  28 => 5,  11 => 4,);
    }
}
/* {# empty Twig template #}*/
/* */
/*   */
/* {%extends "EcommerceEcommerceBundle::layout_admin.html.twig"%}*/
/* {% block content %}*/
/*     */
/* <div class="container1">*/
/* {{ form(form) }}*/
/* </div>*/
/*         {% endblock %}*/
