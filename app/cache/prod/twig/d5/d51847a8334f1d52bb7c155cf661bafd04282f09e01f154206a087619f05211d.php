<?php

/* EcommerceEcommerceBundle:Default:one_prod_home.html.twig */
class __TwigTemplate_eca423f174e6cd318a60c9d22d1d85a010f59e8411cb8fb57c52b6543264ddf2 extends Twig_Template
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
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "
<li>
                  <div class=\"product-img\">
                      <a href=\"\">
                         <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt=\"\" width=\"100\" height=\"100\">
                          
                      </a>
                      
                     
                  </div>
                      <h4 class=\"libelle\">
                          <a href=\"#\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a>
                      </h4>
                       ";
            // line 15
            if (($this->getAttribute($context["entity"], "prix", array()) == 0)) {
                // line 16
                echo "                      <h3 class=\"price\">Prix non spécifié </h3>
                      ";
            } else {
                // line 18
                echo "                                            <h3 class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                echo " DT</h3>

                        ";
            }
            // line 21
            echo "                      
                      
                        
                    <div class=\"dbl-btn\">
                        <button class=\"voir\"><i class=\"fa fa-shopping-cart\"></i>
                            ";
            // line 26
            if (($this->getAttribute($context["entity"], "disponible", array()) == 1)) {
                // line 27
                echo "                          <strong >disponible</strong>
                        ";
            } else {
                // line 29
                echo "                            <strong  >hors stock</strong>
                        ";
            }
            // line 30
            echo "  
                        
                        
                        </button>
                    </div>    
                         
                         
                         
                         
                         
                     </li>
                     
                     
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:one_prod_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  71 => 29,  67 => 27,  65 => 26,  58 => 21,  51 => 18,  47 => 16,  45 => 15,  40 => 13,  30 => 6,  24 => 2,  19 => 1,);
    }
}
/*              {% for entity in entities %}*/
/* */
/* <li>*/
/*                   <div class="product-img">*/
/*                       <a href="">*/
/*                          <img src="{{ asset(entity.image.AssetPath) }}" alt="" width="100" height="100">*/
/*                           */
/*                       </a>*/
/*                       */
/*                      */
/*                   </div>*/
/*                       <h4 class="libelle">*/
/*                           <a href="#">{{ entity.nom }}</a>*/
/*                       </h4>*/
/*                        {%if entity.prix == 0%}*/
/*                       <h3 class="price">Prix non spécifié </h3>*/
/*                       {% else %}*/
/*                                             <h3 class="price">{{ entity.prix }} DT</h3>*/
/* */
/*                         {% endif %}*/
/*                       */
/*                       */
/*                         */
/*                     <div class="dbl-btn">*/
/*                         <button class="voir"><i class="fa fa-shopping-cart"></i>*/
/*                             {% if entity.disponible == 1 %}*/
/*                           <strong >disponible</strong>*/
/*                         {% else %}*/
/*                             <strong  >hors stock</strong>*/
/*                         {% endif %}  */
/*                         */
/*                         */
/*                         </button>*/
/*                     </div>    */
/*                          */
/*                          */
/*                          */
/*                          */
/*                          */
/*                      </li>*/
/*                      */
/*                      */
/*                       {% endfor %}*/
