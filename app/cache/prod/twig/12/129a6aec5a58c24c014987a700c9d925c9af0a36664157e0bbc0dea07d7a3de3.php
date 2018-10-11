<?php

/* EcommerceEcommerceBundle:Default:listca.html.twig */
class __TwigTemplate_00cc99bc8b35e184fd9933aa9590d33ed48ff808eeaa3e67e9c22ced9dcbef8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout_admin.html.twig", "EcommerceEcommerceBundle:Default:listca.html.twig", 5);
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EUROELEC</title>
  
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/admin.css"), "html", null, true);
        echo "\">


  
    
</head>

<body>
    <div class=\"container1\">
<h1>Liste de tous les catégories</h1>
<table  class=\"responstable\">
                     
                      <tr>
                          
                          <th>nom</th>
                          <th>supprimer</th>
                     </tr>  
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                      <tr>
                         <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                        
                         <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletec", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a></td>                      </tr>                         
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                         
           
             </table>
    </div>       
   </body>
</html>

   ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:listca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  77 => 37,  72 => 35,  69 => 34,  65 => 33,  45 => 16,  41 => 15,  31 => 7,  28 => 6,  11 => 5,);
    }
}
/* */
/*  */
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
/* <h1>Liste de tous les catégories</h1>*/
/* <table  class="responstable">*/
/*                      */
/*                       <tr>*/
/*                           */
/*                           <th>nom</th>*/
/*                           <th>supprimer</th>*/
/*                      </tr>  */
/*                         {% for entity in entities %}*/
/*                       <tr>*/
/*                          <td>{{ entity.nom }}</td>*/
/*                         */
/*                          <td><a href="{{ path('deletec', { 'id': entity.id }) }}"> Supprimer </a></td>                      </tr>                         */
/*                      {% endfor %}*/
/*                          */
/*            */
/*              </table>*/
/*     </div>       */
/*    </body>*/
/* </html>*/
/* */
/*    {% endblock %}*/
