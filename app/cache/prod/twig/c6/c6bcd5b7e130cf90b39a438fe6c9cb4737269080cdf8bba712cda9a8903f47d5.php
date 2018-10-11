<?php

/* EcommerceEcommerceBundle:Default:listpa.html.twig */
class __TwigTemplate_beb8cc00d911f2d883d201fd889c0c99370a5353dda9fa42b8b44538e0518e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout_admin.html.twig", "EcommerceEcommerceBundle:Default:listpa.html.twig", 5);
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
<h1>Liste de tous les produits</h1>
<table  class=\"responstable\">
                     
                      <tr>
                          <th>image</th>
                          <th>nom</th>
                          <th style=\"width:200px;\">description</th>
                          <th>prix</th>
                          <th>disponible</th>
                          <th>modifier</th>
                          <th>TopVente</th>
                          <th>supprimer</th>
                     </tr>  
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "                      <tr>
                         <td><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "name", array()), "html", null, true);
            echo "\" width=\"100\" height=\"100\"></td>
                         <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo " DT</td>
                         <td>
                      ";
            // line 45
            if (($this->getAttribute($context["entity"], "disponible", array()) == 1)) {
                // line 46
                echo "                          <strong style=\"color:#FF0000\">disponible</strong>
                        ";
            } else {
                // line 48
                echo "                            <strong style=\"color:#00FF00\" >hors stock</strong>
                        ";
            }
            // line 49
            echo "  
                               

                         </td>
                         <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierProduits", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> Edit </a></td>
                         <td>
                             
                              ";
            // line 56
            if (($this->getAttribute($context["entity"], "topvente", array()) == 0)) {
                // line 57
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topvente_activ", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                       <img width=\"20px\" height=\"20px\" border=\"0\" src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/desactive.png"), "html", null, true);
                echo "\">
                                            </a>  
                                                    ";
            } else {
                // line 61
                echo "                                             <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topvente_deac", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                         <img width=\"20px\" height=\"20px\" border=\"0\" src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/active.png"), "html", null, true);
                echo "\">
                                              </a>  

                               ";
            }
            // line 66
            echo "                             
                             
                         </td>
                         <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletep", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a></td>                      </tr>                         
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                         
           
             </table>
    </div>       
   </body>
</html>

   ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:listpa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 71,  148 => 69,  143 => 66,  136 => 62,  131 => 61,  125 => 58,  120 => 57,  118 => 56,  112 => 53,  106 => 49,  102 => 48,  98 => 46,  96 => 45,  91 => 43,  87 => 42,  83 => 41,  77 => 40,  74 => 39,  70 => 38,  45 => 16,  41 => 15,  31 => 7,  28 => 6,  11 => 5,);
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
/* <h1>Liste de tous les produits</h1>*/
/* <table  class="responstable">*/
/*                      */
/*                       <tr>*/
/*                           <th>image</th>*/
/*                           <th>nom</th>*/
/*                           <th style="width:200px;">description</th>*/
/*                           <th>prix</th>*/
/*                           <th>disponible</th>*/
/*                           <th>modifier</th>*/
/*                           <th>TopVente</th>*/
/*                           <th>supprimer</th>*/
/*                      </tr>  */
/*                         {% for entity in entities %}*/
/*                       <tr>*/
/*                          <td><img src="{{ asset(entity.image.AssetPath) }}" alt="{{ entity.image.name }}" width="100" height="100"></td>*/
/*                          <td>{{ entity.nom }}</td>*/
/*                          <td>{{ entity.description }}</td>*/
/*                          <td>{{ entity.prix }} DT</td>*/
/*                          <td>*/
/*                       {% if entity.disponible == 1 %}*/
/*                           <strong style="color:#FF0000">disponible</strong>*/
/*                         {% else %}*/
/*                             <strong style="color:#00FF00" >hors stock</strong>*/
/*                         {% endif %}  */
/*                                */
/* */
/*                          </td>*/
/*                          <td><a href="{{ path('modifierProduits', { 'id': entity.id }) }}"> Edit </a></td>*/
/*                          <td>*/
/*                              */
/*                               {% if entity.topvente == 0 %}*/
/*                                         <a href="{{path('topvente_activ',{'id':entity.id})}}">*/
/*                                                        <img width="20px" height="20px" border="0" src="{{asset('ressources/images/desactive.png')}}">*/
/*                                             </a>  */
/*                                                     {% else %}*/
/*                                              <a href="{{path('topvente_deac',{'id':entity.id})}}">*/
/*                                                          <img width="20px" height="20px" border="0" src="{{asset('ressources/images/active.png')}}">*/
/*                                               </a>  */
/* */
/*                                {% endif %}*/
/*                              */
/*                              */
/*                          </td>*/
/*                          <td><a href="{{ path('deletep', { 'id': entity.id }) }}"> Supprimer </a></td>                      </tr>                         */
/*                      {% endfor %}*/
/*                          */
/*            */
/*              </table>*/
/*     </div>       */
/*    </body>*/
/* </html>*/
/* */
/*    {% endblock %}*/
