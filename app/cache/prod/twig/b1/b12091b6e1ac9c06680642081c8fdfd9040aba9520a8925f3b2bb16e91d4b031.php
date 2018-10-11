<?php

/* EcommerceEcommerceBundle:Default:list.html.twig */
class __TwigTemplate_27e901db5a6c9a0892354f0c3686eb0e6cc1a875c15426b5f104876d98a26858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout.html.twig", "EcommerceEcommerceBundle:Default:list.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceEcommerceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    

    
        
        
        
        
        
        
      
       <div class=\"path\">
          <a href=\"\">  <i class=\"fa fa-home home-logo\"></i> <span class=\"path-1\">Accueil</span></a><i class=\"fa fa-angle-double-right\"></i>
           <span class=\"path-1\"><a href=\"\">Qui sommes-nous ?</a></span>
          
       </div>
       
       
 
       <h2></h2>
       <div style=\"clear:both;\"></div>

       <div class=\"product-area\">
           <div class=\"box left-side\">
           
             <div class=\"title-block\">
                  <h3>CATÉGORIES</h3>
              </div>
              <ul>
                  <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 1));
        echo "\">Electricité industrielle </a></li>
                  <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 2));
        echo "\">Eclairage</a></li>
                  <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 3));
        echo "\">Mesure & controle</a></li>
                  <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 4));
        echo "\">Cablage éléctrique</a></li>
                  <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 5));
        echo "\">Electricité de batiments</a></li>
                  <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 6));
        echo "\">Fixation</a></li>
                  <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 7));
        echo "\">Divers</a></li>
                  <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 8));
        echo "\">Outillages</a></li>
              </ul>
             
           </div>
           <div class=\"main-content \">
             
             <div class=\"box products clearfix\">
         
            <div class=\"select\">
               <div class=\"sortBy\">
                <label for=\"selectSort\">trier par :</label>
                <select name=\"\" id=\"\">
                    <option value=\"\">Le moins cher</option>
                    <option value=\"\">Le plus cher</option>
                    <option value=\"\">De A à Z</option>
                    <option value=\"\">De Z à A</option>
                </select>
                
                </div>
                <div class=\"display\">
                    <span class=\"display-title\">Afficher :</span>
                    <div class=\"grid \">
                        <a href=\"\"><i class=\"fa fa-th-large\"></i></a>
                    </div>   
                    
                    
                    <div class=\"list selected\">
                        <a href=\"\"><i class=\"fa fa-th-list\"></i></a>
                    </div>
                </div>
                <div style=\"clear:both;\"></div>
            </div>
             ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 72
            echo "                 <div class=\"product-view-list clearfix\">
                     <div class=\"product-img-list\">
                         <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "name", array()), "html", null, true);
            echo "\" width=\"100\" height=\"100\">
                     </div>
                     <div class=\"product-desprption\">
                         <h4>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</h4>
                         <hr>
                         <h3 class=\"price red\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo " DT</h3>
                         <p>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</p>
                     </div>
                     <div class=\"button-list\">
                         
                       
                         ";
            // line 85
            if (($this->getAttribute($context["entity"], "disponible", array()) == 1)) {
                // line 86
                echo "                               <button class=\"voir greenbtn\">
                               <strong style=\"color:#FFF\">Disponible</strong>
                               </button>
                        ";
            } else {
                // line 90
                echo "                               <button class=\"voir redbtn\">
                               <strong style=\"color:#FFF\">Hors Stock</strong>
                               </button>
                        ";
            }
            // line 93
            echo "  

                         
                         
                     </div>
                     
                     <div class=\"clear:both;\"></div>
                 </div>   
               
                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                     
                                           
                                                            
                                                                     
                                                                              
                                                                                       
                                                                                                
                                                                                                         
                                                                                                                  
                                                                                                                           
                                                                                                                                    
                                                                                                                                             
                                                                                                                                                      
                                                                                                                                                               
                                                                                                                                                                        
                                                                                                                                                                                 
                                                                                                                                                                                          
                                                                                                                                                                                                   
                                                                                                                                                                                                            
                                                                                                                                                                                                                              
                     
                 
       </div>             
  
 
              
              
               
           </div>
           
       </div>
       
        <div style=\"clear:both;\"></div>
       <div class=\"footer-services\">
               <h2 class=\"center-lined \">Plus de raison pour magasiner chez euroelec</h2>
               <div class=\"col-1-of-4\">
                   <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/price.png"), "html", null, true);
        echo "\" alt=\"\">
                   <span>Nous égalons les prix</span>
               </div>
               <div class=\"col-1-of-4\">
                   <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/brands.png"), "html", null, true);
        echo "\" alt=\"\">
                   <span>Meilleures marques internationales</span>
               </div>
               <div class=\"col-1-of-4\">
                   <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/free-shiping.png"), "html", null, true);
        echo "\" alt=\"\">
                   <span>Livraison rapide et gratuite</span>
               </div>
               <div class=\"col-1-of-4\">
                   <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/quality.png"), "html", null, true);
        echo "\" alt=\"\">
                   <span>Grand choix de produits</span>
               </div>

       </div>
       <div style=\"clear:both;\"></div>
       <div class=\"footer-brands\">
               <h2 class=\"center-lined\">
                   Le choix des plus grandes marques
               </h2>
<div id=\"liquid1\" class=\"liquid\">
\t<span class=\"previous\"></span>
\t<div class=\"wrapper\">
\t\t<ul>
\t\t\t<li><a href=\"#\" title=\"image 01\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/makita-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 01\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 02\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/philips-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 02\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 03\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/siemens-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 03\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 04\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/varta-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 04\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 05\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/shneider-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 05\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 06\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/legrand-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 06\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 07\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/chint-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 07\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 01\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/makita-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 01\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 02\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/philips-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 02\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 03\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/siemens-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 03\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 04\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/varta-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 04\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 05\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/shneider-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 05\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 06\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/legrand-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 06\" border=\"0\" /></a></li>
\t\t\t<li><a href=\"#\" title=\"image 07\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/chint-logo-slider.png"), "html", null, true);
        echo "\" width=\"88\" height=\"30\" alt=\"image 07\" border=\"0\" /></a></li>
\t\t\t
\t\t</ul>
\t</div>
\t<span class=\"next\"></span>
</div>
       </div>
  

        
        
        
        
        ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 178,  311 => 177,  307 => 176,  303 => 175,  299 => 174,  295 => 173,  291 => 172,  287 => 171,  283 => 170,  279 => 169,  275 => 168,  271 => 167,  267 => 166,  263 => 165,  246 => 151,  239 => 147,  232 => 143,  225 => 139,  187 => 103,  171 => 93,  165 => 90,  159 => 86,  157 => 85,  149 => 80,  145 => 79,  140 => 77,  132 => 74,  128 => 72,  124 => 71,  89 => 39,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  65 => 33,  61 => 32,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/*   */
/* {%extends "EcommerceEcommerceBundle::layout.html.twig"%}*/
/* {% block content %}*/
/*     */
/* */
/*     */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*       */
/*        <div class="path">*/
/*           <a href="">  <i class="fa fa-home home-logo"></i> <span class="path-1">Accueil</span></a><i class="fa fa-angle-double-right"></i>*/
/*            <span class="path-1"><a href="">Qui sommes-nous ?</a></span>*/
/*           */
/*        </div>*/
/*        */
/*        */
/*  */
/*        <h2></h2>*/
/*        <div style="clear:both;"></div>*/
/* */
/*        <div class="product-area">*/
/*            <div class="box left-side">*/
/*            */
/*              <div class="title-block">*/
/*                   <h3>CATÉGORIES</h3>*/
/*               </div>*/
/*               <ul>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':1})}}">Electricité industrielle </a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':2})}}">Eclairage</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':3})}}">Mesure & controle</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':4})}}">Cablage éléctrique</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':5})}}">Electricité de batiments</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':6})}}">Fixation</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':7})}}">Divers</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':8})}}">Outillages</a></li>*/
/*               </ul>*/
/*              */
/*            </div>*/
/*            <div class="main-content ">*/
/*              */
/*              <div class="box products clearfix">*/
/*          */
/*             <div class="select">*/
/*                <div class="sortBy">*/
/*                 <label for="selectSort">trier par :</label>*/
/*                 <select name="" id="">*/
/*                     <option value="">Le moins cher</option>*/
/*                     <option value="">Le plus cher</option>*/
/*                     <option value="">De A à Z</option>*/
/*                     <option value="">De Z à A</option>*/
/*                 </select>*/
/*                 */
/*                 </div>*/
/*                 <div class="display">*/
/*                     <span class="display-title">Afficher :</span>*/
/*                     <div class="grid ">*/
/*                         <a href=""><i class="fa fa-th-large"></i></a>*/
/*                     </div>   */
/*                     */
/*                     */
/*                     <div class="list selected">*/
/*                         <a href=""><i class="fa fa-th-list"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div style="clear:both;"></div>*/
/*             </div>*/
/*              {% for entity in entities %}*/
/*                  <div class="product-view-list clearfix">*/
/*                      <div class="product-img-list">*/
/*                          <img src="{{ asset(entity.image.AssetPath) }}" alt="{{ entity.image.name }}" width="100" height="100">*/
/*                      </div>*/
/*                      <div class="product-desprption">*/
/*                          <h4>{{ entity.nom }}</h4>*/
/*                          <hr>*/
/*                          <h3 class="price red">{{ entity.prix }} DT</h3>*/
/*                          <p>{{ entity.description }}</p>*/
/*                      </div>*/
/*                      <div class="button-list">*/
/*                          */
/*                        */
/*                          {% if entity.disponible == 1 %}*/
/*                                <button class="voir greenbtn">*/
/*                                <strong style="color:#FFF">Disponible</strong>*/
/*                                </button>*/
/*                         {% else %}*/
/*                                <button class="voir redbtn">*/
/*                                <strong style="color:#FFF">Hors Stock</strong>*/
/*                                </button>*/
/*                         {% endif %}  */
/* */
/*                          */
/*                          */
/*                      </div>*/
/*                      */
/*                      <div class="clear:both;"></div>*/
/*                  </div>   */
/*                */
/*                         */
/*                      {% endfor %}                     */
/*                                            */
/*                                                             */
/*                                                                      */
/*                                                                               */
/*                                                                                        */
/*                                                                                                 */
/*                                                                                                          */
/*                                                                                                                   */
/*                                                                                                                            */
/*                                                                                                                                     */
/*                                                                                                                                              */
/*                                                                                                                                                       */
/*                                                                                                                                                                */
/*                                                                                                                                                                         */
/*                                                                                                                                                                                  */
/*                                                                                                                                                                                           */
/*                                                                                                                                                                                                    */
/*                                                                                                                                                                                                             */
/*                                                                                                                                                                                                                               */
/*                      */
/*                  */
/*        </div>             */
/*   */
/*  */
/*               */
/*               */
/*                */
/*            </div>*/
/*            */
/*        </div>*/
/*        */
/*         <div style="clear:both;"></div>*/
/*        <div class="footer-services">*/
/*                <h2 class="center-lined ">Plus de raison pour magasiner chez euroelec</h2>*/
/*                <div class="col-1-of-4">*/
/*                    <img src="{{asset('ressources/images/price.png')}}" alt="">*/
/*                    <span>Nous égalons les prix</span>*/
/*                </div>*/
/*                <div class="col-1-of-4">*/
/*                    <img src="{{asset('ressources/images/brands.png')}}" alt="">*/
/*                    <span>Meilleures marques internationales</span>*/
/*                </div>*/
/*                <div class="col-1-of-4">*/
/*                    <img src="{{asset('ressources/images/free-shiping.png')}}" alt="">*/
/*                    <span>Livraison rapide et gratuite</span>*/
/*                </div>*/
/*                <div class="col-1-of-4">*/
/*                    <img src="{{asset('ressources/images/quality.png')}}" alt="">*/
/*                    <span>Grand choix de produits</span>*/
/*                </div>*/
/* */
/*        </div>*/
/*        <div style="clear:both;"></div>*/
/*        <div class="footer-brands">*/
/*                <h2 class="center-lined">*/
/*                    Le choix des plus grandes marques*/
/*                </h2>*/
/* <div id="liquid1" class="liquid">*/
/* 	<span class="previous"></span>*/
/* 	<div class="wrapper">*/
/* 		<ul>*/
/* 			<li><a href="#" title="image 01"><img src="{{asset('ressources/images/makita-logo-slider.png')}}" width="88" height="30" alt="image 01" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 02"><img src="{{asset('ressources/images/philips-logo-slider.png')}}" width="88" height="30" alt="image 02" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 03"><img src="{{asset('ressources/images/siemens-logo-slider.png')}}" width="88" height="30" alt="image 03" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 04"><img src="{{asset('ressources/images/varta-logo-slider.png')}}" width="88" height="30" alt="image 04" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 05"><img src="{{asset('ressources/images/shneider-logo-slider.png')}}" width="88" height="30" alt="image 05" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 06"><img src="{{asset('ressources/images/legrand-logo-slider.png')}}" width="88" height="30" alt="image 06" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 07"><img src="{{asset('ressources/images/chint-logo-slider.png')}}" width="88" height="30" alt="image 07" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 01"><img src="{{asset('ressources/images/makita-logo-slider.png')}}" width="88" height="30" alt="image 01" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 02"><img src="{{asset('ressources/images/philips-logo-slider.png')}}" width="88" height="30" alt="image 02" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 03"><img src="{{asset('ressources/images/siemens-logo-slider.png')}}" width="88" height="30" alt="image 03" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 04"><img src="{{asset('ressources/images/varta-logo-slider.png')}}" width="88" height="30" alt="image 04" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 05"><img src="{{asset('ressources/images/shneider-logo-slider.png')}}" width="88" height="30" alt="image 05" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 06"><img src="{{asset('ressources/images/legrand-logo-slider.png')}}" width="88" height="30" alt="image 06" border="0" /></a></li>*/
/* 			<li><a href="#" title="image 07"><img src="{{asset('ressources/images/chint-logo-slider.png')}}" width="88" height="30" alt="image 07" border="0" /></a></li>*/
/* 			*/
/* 		</ul>*/
/* 	</div>*/
/* 	<span class="next"></span>*/
/* </div>*/
/*        </div>*/
/*   */
/* */
/*         */
/*         */
/*         */
/*         */
/*         {% endblock %}*/
