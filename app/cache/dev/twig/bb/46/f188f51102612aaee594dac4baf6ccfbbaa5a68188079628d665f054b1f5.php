<?php

/* QcmSalleTpBundle:Salle:index.html.twig */
class __TwigTemplate_bb46f188f51102612aaee594dac4baf6ccfbbaa5a68188079628d665f054b1f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QcmSalleTpBundle:Salle:layout.html.twig", "QcmSalleTpBundle:Salle:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'salleTp_contenu' => array($this, 'block_salleTp_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QcmSalleTpBundle:Salle:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil -";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_salleTp_contenu($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Accueil</h2>
    <p><i>page visitée ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nbreFois"]) ? $context["nbreFois"] : $this->getContext($context, "nbreFois")), "html", null, true);
        echo " fois.</i></p> 
    <ul> messages : 
        ";
        // line 9
        echo "    
         ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "InfoAjout"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
            <li>";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
    </ul> 
    <p>voir la salle <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("qcm_salle_tp_voir_salle", array("id" => 3));
        echo " \"> 3</a></p> 
    <p><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("qcm_salle_tp_ajouter_salle");
        echo "\">ajouter une salle </a> </p>
";
    }

    public function getTemplateName()
    {
        return "QcmSalleTpBundle:Salle:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  71 => 14,  67 => 12,  59 => 11,  53 => 10,  50 => 9,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
