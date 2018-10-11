<?php

/* EcommerceEcommerceBundle::layout_admin.html.twig */
class __TwigTemplate_85661f5b0df04f2529cc71017935b2fb2372f9f7fd0725a7067c8f4e26cde724 extends Twig_Template
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
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/admin.css"), "html", null, true);
        echo "\">
</head>
<body>
    <div class=\"container\">
        <div class=\"admin-menu\">
           
            <a class='logout' href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>  
            
            <a class='logout' href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">Accueil </a>  
           
        </div>
           
                
        <div class=\"menu\">
            
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("new_product");
        echo "\" class=\"btn-admin\">
                <div class=\"logo-menu\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/add.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <span>Ajouter des produits</span>
            </a>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("list_admin");
        echo "\" class=\"btn-admin\">
                 <div class=\"logo-menu\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/list.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <span>Liste des produits</span>
            </a>
           <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("new_categorie");
        echo "\" class=\"btn-admin\">
                 <div class=\"logo-menu\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/add.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <span>Ajouter des catégories</span>
            </a>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("list_adminc");
        echo "\" class=\"btn-admin\">
                 <div class=\"logo-menu\">
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/images/list.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <span>Liste des catégories</span>
            </a>
       
        </div>
        
         <div style=\"clear:both;\"></div>
         <div class=\"content\">
            
                 ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "        </div>
        
    </div>
</body>
</html>";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  109 => 52,  107 => 51,  94 => 41,  89 => 39,  82 => 35,  77 => 33,  70 => 29,  65 => 27,  58 => 23,  53 => 21,  43 => 14,  36 => 12,  27 => 6,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Document</title>*/
/*     <link rel="stylesheet" href="{{asset('ressources/css/admin.css')}}">*/
/* </head>*/
/* <body>*/
/*     <div class="container">*/
/*         <div class="admin-menu">*/
/*            */
/*             <a class='logout' href="{{ path('fos_user_security_logout') }}">Logout | {{ app.user.username }}</a>  */
/*             */
/*             <a class='logout' href="{{ path('home_page') }}">Accueil </a>  */
/*            */
/*         </div>*/
/*            */
/*                 */
/*         <div class="menu">*/
/*             */
/*             <a href="{{path('new_product')}}" class="btn-admin">*/
/*                 <div class="logo-menu">*/
/*                     <img src="{{asset('ressources/images/add.png')}}" alt="">*/
/*                 </div>*/
/*                 <span>Ajouter des produits</span>*/
/*             </a>*/
/*             <a href="{{path('list_admin')}}" class="btn-admin">*/
/*                  <div class="logo-menu">*/
/*                     <img src="{{asset('ressources/images/list.png')}}" alt="">*/
/*                 </div>*/
/*                 <span>Liste des produits</span>*/
/*             </a>*/
/*            <a href="{{path('new_categorie')}}" class="btn-admin">*/
/*                  <div class="logo-menu">*/
/*                     <img src="{{asset('ressources/images/add.png')}}" alt="">*/
/*                 </div>*/
/*                 <span>Ajouter des catégories</span>*/
/*             </a>*/
/*             <a href="{{path('list_adminc')}}" class="btn-admin">*/
/*                  <div class="logo-menu">*/
/*                     <img src="{{asset('ressources/images/list.png')}}" alt="">*/
/*                 </div>*/
/*                 <span>Liste des catégories</span>*/
/*             </a>*/
/*        */
/*         </div>*/
/*         */
/*          <div style="clear:both;"></div>*/
/*          <div class="content">*/
/*             */
/*                  {% block content %}{% endblock %}*/
/*         </div>*/
/*         */
/*     </div>*/
/* </body>*/
/* </html>*/
