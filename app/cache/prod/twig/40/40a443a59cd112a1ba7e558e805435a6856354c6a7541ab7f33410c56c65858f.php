<?php

/* EcommerceEcommerceBundle:Default:contact.html.twig */
class __TwigTemplate_0dcb0c7f708944d16d8531b7fc2d5ee7f3198e6dc0e9097dbb58af1300aee5d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("EcommerceEcommerceBundle::layout.html.twig", "EcommerceEcommerceBundle:Default:contact.html.twig", 3);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
      

<div class=\"path\">
          <a href=\"\">  <i class=\"fa fa-home home-logo\"></i> <span class=\"path-1\">Accueil</span></a><i class=\"fa fa-angle-double-right\"></i>
           <span class=\"path-1\"><a href=\"\">Nous contacter</a></span>
          
       </div>
       
       
       <h2 class=\"page-title\">Nous contacter</h2>
       <div class=\"title-underline\">
           
           <hr>
           <div class=\"blue-underline\"></div>
       </div>
       
       <div class=\"map\"></div>
       
        
          
          <div class=\"col-1-of-2  col-contact\">
              <h2 class=\"para-title\">Coordonées</h2>
              <p>14 AV de Paris Ben Arous</p>
              <p>
                  Tél : 71 385 929 <br>
GSM: 98 248 408 <br>
Fax : 71 388 509
              </p>
              
              <h2 class=\"para-title\">Horaires d’ouverture</h2>
              

              
              <h4>Du Lundi au vendredi (inclus) :</h4>    
              <p> Matin : de 8HOO à 12H00.</p>
              <p>Après midi : de 14hOO à 17H00.</p>
              <h4> Le Samedi:  </h4>
              <p>de 8HOO à 14HOO.</p>
 
          </div>
          <div class=\"col-1-of-2  col-contact\">
              
              <h2 class=\"para-title\">
                  Nous Contacter
              </h2>

             
<table  >
    <tr>
        <td width=\"300\" ><label for=\"nom\">Nom<span class=\"red-star\">*</span></label></td>
        <td width=\"300\" ><input type=\"text\" name=\"\" id=\"\" class=\"input-box\"></td>

    </tr>
    <tr>
        <td width=\"300\" ><label for=\"nom\">Prenom<span class=\"red-star\">*</span></label></td>
        <td width=\"300\" ><input type=\"text\" name=\"\" id=\"\" class=\"input-box\"></td>
    </tr>
    <tr>
        <td width=\"300\" ><label for=\"nom\">Email<span class=\"red-star\">*</span></label></td>
        <td width=\"300\" ><input type=\"text\" name=\"\" id=\"\" class=\"input-box\"></td>
    </tr>
    <tr>
        <td width=\"300\" ><label for=\"nom\">Email<span class=\"red-star\">*</span></label></td>
        <td width=\"300\" ><input type=\"text\" name=\"\" id=\"\" class=\"input-box\"></td>
    </tr>
    <tr>
        <td width=\"300\" ><label for=\"nom\">Email<span class=\"red-star\">*</span></label></td>
        <td width=\"300\" ><input type=\"text\" name=\"\" id=\"\" class=\"input-box\"></td>
    </tr>
    <tr >
        <td width=\"300\" ><label  for=\"Sujet\">Message<span class=\"red-star\">*</span></label></td>
        <td width=\"300\" style=\"padding:0;\"  rowspan=\"3\"><textarea style=\"height:150px;\" name=\"\" id=\"\" cols=\"40\" rows=\"20\" ></textarea></td>

    
</table>
       
             <input class=\"contact-btn\" value=\"Envoyer\" type=\"submit\" name=\"\" id=\"\">
             <input  class=\"contact-btn\"  value=\"Rénitialiser\" type=\"reset\" name=\"\" id=\"\">
              
              
          </div>
           
                
                <div style=\"clear:both;\"></div>
                 

   
              
        ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* */
/*   */
/* {%extends "EcommerceEcommerceBundle::layout.html.twig"%}*/
/* {% block content %}*/
/*     */
/*       */
/* */
/* <div class="path">*/
/*           <a href="">  <i class="fa fa-home home-logo"></i> <span class="path-1">Accueil</span></a><i class="fa fa-angle-double-right"></i>*/
/*            <span class="path-1"><a href="">Nous contacter</a></span>*/
/*           */
/*        </div>*/
/*        */
/*        */
/*        <h2 class="page-title">Nous contacter</h2>*/
/*        <div class="title-underline">*/
/*            */
/*            <hr>*/
/*            <div class="blue-underline"></div>*/
/*        </div>*/
/*        */
/*        <div class="map"></div>*/
/*        */
/*         */
/*           */
/*           <div class="col-1-of-2  col-contact">*/
/*               <h2 class="para-title">Coordonées</h2>*/
/*               <p>14 AV de Paris Ben Arous</p>*/
/*               <p>*/
/*                   Tél : 71 385 929 <br>*/
/* GSM: 98 248 408 <br>*/
/* Fax : 71 388 509*/
/*               </p>*/
/*               */
/*               <h2 class="para-title">Horaires d’ouverture</h2>*/
/*               */
/* */
/*               */
/*               <h4>Du Lundi au vendredi (inclus) :</h4>    */
/*               <p> Matin : de 8HOO à 12H00.</p>*/
/*               <p>Après midi : de 14hOO à 17H00.</p>*/
/*               <h4> Le Samedi:  </h4>*/
/*               <p>de 8HOO à 14HOO.</p>*/
/*  */
/*           </div>*/
/*           <div class="col-1-of-2  col-contact">*/
/*               */
/*               <h2 class="para-title">*/
/*                   Nous Contacter*/
/*               </h2>*/
/* */
/*              */
/* <table  >*/
/*     <tr>*/
/*         <td width="300" ><label for="nom">Nom<span class="red-star">*</span></label></td>*/
/*         <td width="300" ><input type="text" name="" id="" class="input-box"></td>*/
/* */
/*     </tr>*/
/*     <tr>*/
/*         <td width="300" ><label for="nom">Prenom<span class="red-star">*</span></label></td>*/
/*         <td width="300" ><input type="text" name="" id="" class="input-box"></td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td width="300" ><label for="nom">Email<span class="red-star">*</span></label></td>*/
/*         <td width="300" ><input type="text" name="" id="" class="input-box"></td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td width="300" ><label for="nom">Email<span class="red-star">*</span></label></td>*/
/*         <td width="300" ><input type="text" name="" id="" class="input-box"></td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td width="300" ><label for="nom">Email<span class="red-star">*</span></label></td>*/
/*         <td width="300" ><input type="text" name="" id="" class="input-box"></td>*/
/*     </tr>*/
/*     <tr >*/
/*         <td width="300" ><label  for="Sujet">Message<span class="red-star">*</span></label></td>*/
/*         <td width="300" style="padding:0;"  rowspan="3"><textarea style="height:150px;" name="" id="" cols="40" rows="20" ></textarea></td>*/
/* */
/*     */
/* </table>*/
/*        */
/*              <input class="contact-btn" value="Envoyer" type="submit" name="" id="">*/
/*              <input  class="contact-btn"  value="Rénitialiser" type="reset" name="" id="">*/
/*               */
/*               */
/*           </div>*/
/*            */
/*                 */
/*                 <div style="clear:both;"></div>*/
/*                  */
/* */
/*    */
/*               */
/*         {% endblock %}*/
