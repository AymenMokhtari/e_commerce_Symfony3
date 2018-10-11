<?php

/* EcommerceEcommerceBundle:Default:showc.html.twig */
class __TwigTemplate_f58d1262778a148985c4415c198c03996b7b11c7922f9d9878006535b24925f7 extends Twig_Template
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
        echo "     

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "    
              <li><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_by_id", array("categorie" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo " </a></li>           
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "       ";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:showc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/*      */
/* */
/* {% for entity in entities %}*/
/*     */
/*               <li><a href="{{path('categorie_by_id',{'categorie':entity.id})}}">{{ entity.nom }} </a></li>           */
/* {% endfor %}*/
/*        */
