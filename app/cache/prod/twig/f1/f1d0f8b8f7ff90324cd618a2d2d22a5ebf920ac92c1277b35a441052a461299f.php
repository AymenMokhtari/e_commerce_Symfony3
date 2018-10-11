<?php

/* EcommerceEcommerceBundle:Default:recherche.html.twig */
class __TwigTemplate_c5543a3c3fa6990147b42b0962eb0bed1cd48fad5f11fb0c7b021b4f6b37422e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <form action="{{ path('rechercheProduits') }}" method="POST" class="navbar-form form-search pull-right">*/
/*     {{ form_widget(form.recherche) }}*/
/*     <button type="submit" class="btn">Rechercher</button>*/
/*     {{ form_widget(form) }}*/
/* </form>*/
