<?php

/* QcmSalleTpBundle:Salle:ajouterSalle.html.twig */
class __TwigTemplate_1383ecf066b08eb147fe8aae575a7545cdb71104a37ceb91dc3d8a9a31dc712a extends Twig_Template
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
        echo "<body>

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</body>";
    }

    public function getTemplateName()
    {
        return "QcmSalleTpBundle:Salle:ajouterSalle.html.twig";
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
