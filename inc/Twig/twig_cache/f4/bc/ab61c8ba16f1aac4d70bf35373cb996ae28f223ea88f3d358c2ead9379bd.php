<?php

/* content/content-404.twig */
class __TwigTemplate_f4bcab61c8ba16f1aac4d70bf35373cb996ae28f223ea88f3d358c2ead9379bd extends Twig_Template
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
        echo "<h3>Maybe try searching for it?</h3>
";
        // line 2
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_search_form", array());
    }

    public function getTemplateName()
    {
        return "content/content-404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}