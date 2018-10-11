<?php

/* EcommerceEcommerceBundle:Default:addnew.html.twig */
class __TwigTemplate_9ca942204b2e4641a8531dec6be4a3a356e6cdd14a9d22b465ac823494d0f56c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout_admin.html.twig", "EcommerceEcommerceBundle:Default:addnew.html.twig", 3);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EUROELEC</title>
  
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/admin.css"), "html", null, true);
        echo "\">


  
    
</head>

<body>
    <div class=\"container1\">
        <h1>Ajouter un nouveaux produit</h1>
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("new_product");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>
    </div>
        
</body>
</html> 
        ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:addnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  58 => 24,  45 => 14,  41 => 13,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* */
/*   */
/* {%extends "EcommerceEcommerceBundle::layout_admin.html.twig"%}*/
/* {% block content %}*/
/*     */
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>EUROELEC</title>*/
/*   */
/*     <link rel="stylesheet" href="{{asset('vendors/css/font-awesome.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('ressources/css/admin.css')}}">*/
/* */
/* */
/*   */
/*     */
/* </head>*/
/* */
/* <body>*/
/*     <div class="container1">*/
/*         <h1>Ajouter un nouveaux produit</h1>*/
/* <form action="{{ path('new_product') }}" method="POST" {{ form_enctype(form) }}>*/
/*     {{ form(form) }}*/
/*     </form>*/
/*     </div>*/
/*         */
/* </body>*/
/* </html> */
/*         {% endblock %}*/
