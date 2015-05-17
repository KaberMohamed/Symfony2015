<?php

/* QcmSalleTpBundle:Default:index.html.twig */
class __TwigTemplate_52870889b1eb5ab9723c9456999651f49f4bf3761ec772726e29dd92cc5ec5f7 extends Twig_Template
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
        echo "<html>
<body>
<h1> Hello </h1>  loooool ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
</body>



</html>";
    }

    public function getTemplateName()
    {
        return "QcmSalleTpBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
