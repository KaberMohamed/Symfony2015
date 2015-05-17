<?php

/* QcmSalleTpBundle:Salle:voirSalle.html.twig */
class __TwigTemplate_0215a17db5230c594e1c4ac678cc8deea373f827f623b66b1157a8bf0e176bcb extends Twig_Template
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
        echo "<!DOCTYPE html> 
<html> 
    <head> 
        <title>Salle</title> 
    </head> 
<body> 
       salle

 ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nomSalle"]) ? $context["nomSalle"] : $this->getContext($context, "nomSalle")), "html", null, true);
        echo "    
                                          
    </body> 
</html>";
    }

    public function getTemplateName()
    {
        return "QcmSalleTpBundle:Salle:voirSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
