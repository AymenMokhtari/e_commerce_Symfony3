<?php

/* EcommerceEcommerceBundle:Default:edit.html.twig */
class __TwigTemplate_f6ef6c56890d671f6ae1c39256ed76842128e572a1bd94dfb72fbca17fde7981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout_admin.html.twig", "EcommerceEcommerceBundle:Default:edit.html.twig", 3);
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
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/admin.css"), "html", null, true);
        echo "\">


  
    
</head>

<body>
    <div class=\"container1\">
";
        // line 23
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
 
      </div>
        
</body>
</html>  

  ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  44 => 13,  40 => 12,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* */
/*   */
/* {%extends "EcommerceEcommerceBundle::layout_admin.html.twig"%}*/
/* {% block content %}*/
/*     */
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
/* {# empty Twig template #}*/
/*   {{ form(edit_form) }}*/
/*  */
/*       </div>*/
/*         */
/* </body>*/
/* </html>  */
/* */
/*   {% endblock %}*/
