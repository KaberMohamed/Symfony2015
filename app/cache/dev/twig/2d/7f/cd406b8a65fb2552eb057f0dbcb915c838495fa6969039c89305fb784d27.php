<?php

/* QcmSalleTpBundle:Salle:layout.html.twig */
class __TwigTemplate_2d7fcd406b8a65fb2552eb057f0dbcb915c838495fa6969039c89305fb784d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'navigation' => array($this, 'block_navigation'),
            'salleTp_contenu' => array($this, 'block_salleTp_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
        <html>
           <head>


               <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
               <title> ";
        // line 7
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
           </head>

                 <body>
                 <div id=\"navigation\">
                     ";
        // line 12
        $this->displayBlock('navigation', $context, $blocks);
        // line 18
        echo "
                 </div>
                 <div id=\"contenu\">
                     <h1> Gestion des Salles de TP</h1>
                     ";
        // line 22
        $this->displayBlock('salleTp_contenu', $context, $blocks);
        // line 24
        echo "                 </div>
                 <hr/>
                 <div id=\"pied_de_page\">
                     <p> &copy; DF.</p>
                 </div>
                 </body>
        </html>";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        echo " Qcm - Salle de Tp";
    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        // line 13
        echo "                         <hr/>
                         <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("qcm_salle_tp_accueil");
        echo "\"> accueil</a>-
                         ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("QcmSalleTpBundle:Salle:navigation"));
        echo "
                         <hr/>
                     ";
    }

    // line 22
    public function block_salleTp_contenu($context, array $blocks = array())
    {
        // line 23
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "QcmSalleTpBundle:Salle:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  81 => 22,  74 => 15,  70 => 14,  67 => 13,  64 => 12,  58 => 7,  48 => 24,  46 => 22,  40 => 18,  38 => 12,  30 => 7,  22 => 1,);
    }
}
