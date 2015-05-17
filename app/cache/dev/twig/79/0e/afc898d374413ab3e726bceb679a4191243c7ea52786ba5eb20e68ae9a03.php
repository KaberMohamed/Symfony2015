<?php

/* QcmSalleTpBundle:Salle:navigation.html.twig */
class __TwigTemplate_790eafc898d374413ab3e726bceb679a4191243c7ea52786ba5eb20e68ae9a03 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 2
            echo "- <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("qcm_salle_tp_voir_salle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">

    ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "batiment", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "etage", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "numero", array()), "html", null, true);
            echo "
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "QcmSalleTpBundle:Salle:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  23 => 2,  19 => 1,);
    }
}
