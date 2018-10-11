<?php

/* EcommerceEcommerceBundle::layout.html.twig */
class __TwigTemplate_11caa6a0c13ec87c775d14a2982a4a0b3a79009e5e5f77dd6ca3c98f900c136b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>EUROELEC</title>
  
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/css/font-awesome.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/css/liquidcarousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/css/iview.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
      <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/jquery.liquidcarousel.pack.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/raphael-min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/gmaps.js"), "html", null, true);
        echo "\"></script>
           <script src=\"http://maps.google.com/maps/api/js?key=AIzaSyDDVc6mrgxIWoMW9iWc5akknFlttlJeMKQ&sensor=trues\"></script>
           
         <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/gmaps.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/js/iview.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/script.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">

\t\t\$(document).ready(function() {
\t\t\t\$('#liquid1').liquidcarousel({height:129, duration:300, hidearrows:false});
                        
                                    var map =  new GMaps({
                             div: '.map',
                         lat: 36.7553954,
                         lng: 10.2230888,
                              zoom: 12
                           });


                       map.addMarker({
                         lat: 36.7553954,
                         lng: 10.2229199,
                         title: 'Lima',
                        infoWindow: {
                         content: '<p>EUROELEC Ben Arous</p>'
                       }
                         }); 


                        
                        
\t\t});

\t</script>

  
    
</head>

<body>
   <header>
      <div class=\"top-header\">
       <div class=\"container\">
           <div class=\"logo\">
               <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/logo.png"), "html", null, true);
        echo "\" height=\"104px\" alt=\"\">
           </div>
           
           
           
           <nav>
               <ul class=\"top-nav\">
                   <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">Accueil</a></li>
                   <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("aboutus");
        echo "\">Qui sommes-nous ?</a></li>
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("contactus");
        echo "\">Nous contacter</a></li>
                     <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
           </nav>
            <div class=\"rech-panier\">
           
                 ";
        // line 74
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceEcommerceBundle:Default:recherche"), array());
        // line 75
        echo "            
                                 
           </div>
                
          <div style=\"clear:both;\"></div>

           </div>
           </div>
               

";
        // line 96
        echo "

            <nav class=\"main-nav\">
              <ul >
                 ";
        // line 100
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceEcommerceBundle:Default:showc"), array());
        // line 101
        echo "              </ul>
               
           </nav>
       
   </header>
 
 <div style=\"clear:both;\"></div>

             
            
             
             
             
   <div class=\"container gray-bg\">
       
       
       ";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "        </div>
   <footer>
       <div class=\"container\">
          <div class=\"col-1-of-4\">
              <h5>Quelques liens utiles</h5>
              <ul class=\"footer-links\">
                  <li><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("aboutus");
        echo "\">Qui sommes-nous ?</a></li>
                  <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("contactus");
        echo "\">Nous contacter</a></li>
                  
                  <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("new_product");
        echo "\">Login</a></li>
              </ul>
          </div>
          <div class=\"col-1-of-2\">
              <h5>Raccourcis</h5>
              <ul class=\"footer-links\">
                  <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 1));
        echo "\">Electricité industrielle</a></li>
                  <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 2));
        echo "\">Eclairage</a></li>
                  <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 3));
        echo "\">Mesure & controle</a></li>
                  <li><a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 4));
        echo "\">Cablage éléctrique</a></li>
              </ul>
                <ul class=\"footer-links second\">
                  <li><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 5));
        echo "\">Electricité de batiments </a></li>
                  <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 6));
        echo "\">Fixation</a></li>
                  <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 7));
        echo "\">Divers </a></li>
                  <li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => 8));
        echo "\">Outillages</a></li>
              </ul>
          </div>
          <div class=\"col-1-of-4\">
              <h5>Contactez-nous</h5>
              <ul class=\"footer-links\">
                  <li>14 AV de Paris Ben Arous </li>
                  <li>contact@euroelec.tn</li>
                  <li>Tél : 71 385 929 <br>
                                    GSM: 98 248 408 <br>
                                    Fax : 71 388 509</li>
              
              </ul>
              
          </div>
           
       </div>
       <div style=\"clear:both;\"></div>
   </footer>
   <div class=\"copyright\">
      <p>© 2016  Tous droits réservés euroelec.tn</p>
      <p><a class=\"powred\" href=\"http://www.madsoft.tn\">wwww.madsoft.tn</a></p>
       
   </div>



    
</body>
</html>    ";
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 117,  244 => 142,  240 => 141,  236 => 140,  232 => 139,  226 => 136,  222 => 135,  218 => 134,  214 => 133,  205 => 127,  200 => 125,  196 => 124,  188 => 118,  186 => 117,  168 => 101,  166 => 100,  160 => 96,  148 => 75,  146 => 74,  139 => 70,  135 => 69,  131 => 68,  127 => 67,  117 => 60,  75 => 21,  71 => 20,  67 => 19,  62 => 17,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>EUROELEC</title>*/
/*   */
/*     <link rel="stylesheet" href="{{asset('vendors/css/font-awesome.css')}}">*/
/*    <link rel="stylesheet" href="{{asset('vendors/css/liquidcarousel.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('ressources/css/style.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('vendors/css/iview.css')}}">*/
/* <script src="{{asset('vendors/js/jquery-1.7.1.min.js')}}"  type="text/javascript"></script>*/
/*       <script src="{{asset('vendors/js/jquery.liquidcarousel.pack.js')}}"></script>*/
/*        <script src="{{asset('vendors/js/raphael-min.js')}}"></script>*/
/*          <script src="{{asset('vendors/js/gmaps.js')}}"></script>*/
/*            <script src="http://maps.google.com/maps/api/js?key=AIzaSyDDVc6mrgxIWoMW9iWc5akknFlttlJeMKQ&sensor=trues"></script>*/
/*            */
/*          <script src="{{asset('vendors/js/gmaps.js')}}"></script>*/
/* */
/*     <script src="{{asset('vendors/js/jquery.easing.js')}}"></script>*/
/*     <script src="{{asset('vendors/js/iview.min.js')}}"></script>*/
/*     <script src="{{asset('ressources/js/script.js')}}"></script>*/
/* 	<script type="text/javascript">*/
/* */
/* 		$(document).ready(function() {*/
/* 			$('#liquid1').liquidcarousel({height:129, duration:300, hidearrows:false});*/
/*                         */
/*                                     var map =  new GMaps({*/
/*                              div: '.map',*/
/*                          lat: 36.7553954,*/
/*                          lng: 10.2230888,*/
/*                               zoom: 12*/
/*                            });*/
/* */
/* */
/*                        map.addMarker({*/
/*                          lat: 36.7553954,*/
/*                          lng: 10.2229199,*/
/*                          title: 'Lima',*/
/*                         infoWindow: {*/
/*                          content: '<p>EUROELEC Ben Arous</p>'*/
/*                        }*/
/*                          }); */
/* */
/* */
/*                         */
/*                         */
/* 		});*/
/* */
/* 	</script>*/
/* */
/*   */
/*     */
/* </head>*/
/* */
/* <body>*/
/*    <header>*/
/*       <div class="top-header">*/
/*        <div class="container">*/
/*            <div class="logo">*/
/*                <img src="{{asset('ressources/images/logo.png')}}" height="104px" alt="">*/
/*            </div>*/
/*            */
/*            */
/*            */
/*            <nav>*/
/*                <ul class="top-nav">*/
/*                    <li><a href="{{ path('home_page')}}">Accueil</a></li>*/
/*                    <li><a href="{{ path('aboutus')}}">Qui sommes-nous ?</a></li>*/
/*                     <li><a href="{{ path('contactus')}}">Nous contacter</a></li>*/
/*                      <li><a href="{{path('fos_user_security_login')}}">Login</a></li>*/
/*            </nav>*/
/*             <div class="rech-panier">*/
/*            */
/*                  {% render(controller('EcommerceEcommerceBundle:Default:recherche')) %}*/
/*             */
/*                                  */
/*            </div>*/
/*                 */
/*           <div style="clear:both;"></div>*/
/* */
/*            </div>*/
/*            </div>*/
/*                */
/* */
/* {# */
/*                {{ render(controller('EcommerceBundle:Default:menu')) }}*/
/*                */
/*                {% for categorie in categories %}*/
/*                    <ul>*/
/*     <li>*/
/*         <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{ categorie.nom }}</a>*/
/*     </li>*/
/* {% endfor %}*/
/*                </ul>*/
/*                #}*/
/* */
/* */
/*             <nav class="main-nav">*/
/*               <ul >*/
/*                  {% render(controller('EcommerceEcommerceBundle:Default:showc')) %}*/
/*               </ul>*/
/*                */
/*            </nav>*/
/*        */
/*    </header>*/
/*  */
/*  <div style="clear:both;"></div>*/
/* */
/*              */
/*             */
/*              */
/*              */
/*              */
/*    <div class="container gray-bg">*/
/*        */
/*        */
/*        {% block content %}{% endblock %}*/
/*         </div>*/
/*    <footer>*/
/*        <div class="container">*/
/*           <div class="col-1-of-4">*/
/*               <h5>Quelques liens utiles</h5>*/
/*               <ul class="footer-links">*/
/*                   <li><a href="{{ path('aboutus')}}">Qui sommes-nous ?</a></li>*/
/*                   <li><a href="{{ path('contactus')}}">Nous contacter</a></li>*/
/*                   */
/*                   <li><a href="{{path('new_product')}}">Login</a></li>*/
/*               </ul>*/
/*           </div>*/
/*           <div class="col-1-of-2">*/
/*               <h5>Raccourcis</h5>*/
/*               <ul class="footer-links">*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':1})}}">Electricité industrielle</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':2})}}">Eclairage</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':3})}}">Mesure & controle</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':4})}}">Cablage éléctrique</a></li>*/
/*               </ul>*/
/*                 <ul class="footer-links second">*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':5})}}">Electricité de batiments </a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':6})}}">Fixation</a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':7})}}">Divers </a></li>*/
/*                   <li><a href="{{path('categorie_by_id',{'categorie':8})}}">Outillages</a></li>*/
/*               </ul>*/
/*           </div>*/
/*           <div class="col-1-of-4">*/
/*               <h5>Contactez-nous</h5>*/
/*               <ul class="footer-links">*/
/*                   <li>14 AV de Paris Ben Arous </li>*/
/*                   <li>contact@euroelec.tn</li>*/
/*                   <li>Tél : 71 385 929 <br>*/
/*                                     GSM: 98 248 408 <br>*/
/*                                     Fax : 71 388 509</li>*/
/*               */
/*               </ul>*/
/*               */
/*           </div>*/
/*            */
/*        </div>*/
/*        <div style="clear:both;"></div>*/
/*    </footer>*/
/*    <div class="copyright">*/
/*       <p>© 2016  Tous droits réservés euroelec.tn</p>*/
/*       <p><a class="powred" href="http://www.madsoft.tn">wwww.madsoft.tn</a></p>*/
/*        */
/*    </div>*/
/* */
/* */
/* */
/*     */
/* </body>*/
/* </html>    */
