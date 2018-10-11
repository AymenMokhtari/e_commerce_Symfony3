<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2446e151ec406a203211c70637831ea3142463da8c6dbce288946540cf958afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "


<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/style-login.css"), "html", null, true);
        echo "\">
    
</head>
<body>
    ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 20
        echo "<form  class=\"login-form\"  action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <header>Login</header>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <label>Username <span>*</span></label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

        <div class=\"help\">6 characters minimum</div>
        <label for=\"\">Password <span>*</span></label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">remember_me</label>
    <button type=\"submit\" id=\"_submit\" name=\"_submit\">Login</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  61 => 22,  55 => 20,  49 => 18,  47 => 17,  40 => 13,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* */
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Document</title>*/
/*     <link rel="stylesheet" href="{{asset('ressources/css/style-login.css')}}">*/
/*     */
/* </head>*/
/* <body>*/
/*     {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <form  class="login-form"  action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <header>Login</header>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <label>Username <span>*</span></label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*         <div class="help">6 characters minimum</div>*/
/*         <label for="">Password <span>*</span></label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">remember_me</label>*/
/*     <button type="submit" id="_submit" name="_submit">Login</button>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
