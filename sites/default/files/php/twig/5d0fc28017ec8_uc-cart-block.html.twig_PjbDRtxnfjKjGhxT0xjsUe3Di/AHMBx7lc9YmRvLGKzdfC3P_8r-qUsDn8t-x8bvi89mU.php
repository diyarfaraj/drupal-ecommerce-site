<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/ubercart/uc_cart/templates/uc-cart-block.html.twig */
class __TwigTemplate_29caea96c243de3acdde5cdf9ee165ba711fdd20be10471f8845645aaaf2fb65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21, "for" => 23, "trans" => 45];
        $filters = ["escape" => 22, "t" => 38];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'trans'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        if (($context["items"] ?? null)) {
            // line 22
            echo "  <table ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "    <tr>
      <td class=\"cart-block-item-qty\">";
                // line 25
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "qty", [])), "html", null, true);
                echo " ×</td>
      ";
                // line 26
                if ($this->getAttribute($context["item"], "desc", [])) {
                    // line 27
                    echo "        <td class=\"cart-block-item-title\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "<br />
        <span class=\"cart-block-item-desc\">";
                    // line 28
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "desc", [])), "html", null, true);
                    echo "</span></td>
      ";
                } else {
                    // line 30
                    echo "        <td class=\"cart-block-item-title\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "</td>
      ";
                }
                // line 32
                echo "      <td class=\"cart-block-item-price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "price", [])), "html", null, true);
                echo "</td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </table>
";
        } else {
            // line 37
            echo "  <p ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("There are no products in your shopping cart."));
            echo "
  </p>
";
        }
        // line 41
        echo "
<table class=\"cart-block-summary\">
  <tr>
    <td class=\"cart-block-summary-items\">
      ";
        // line 45
        echo \Drupal::translation()->formatPlural(abs(        // line 47
($context["item_count"] ?? null)), "<span class=\"num-items\">1</span> Item", "<span class=\"num-items\">@item_count</span> Items", array("@item_count" =>         // line 48
($context["item_count"] ?? null), ));
        // line 50
        echo "    </td>
    <td class=\"cart-block-summary-total\">
      <strong>";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total"));
        echo ":</strong> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total"] ?? null)), "html", null, true);
        echo "
    </td>
  </tr>
</table>

";
        // line 57
        if (($context["items"] ?? null)) {
            // line 58
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_links"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 58,  140 => 57,  130 => 52,  126 => 50,  124 => 48,  123 => 47,  122 => 45,  116 => 41,  110 => 38,  105 => 37,  101 => 35,  91 => 32,  85 => 30,  80 => 28,  75 => 27,  73 => 26,  69 => 25,  66 => 24,  62 => 23,  57 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/ubercart/uc_cart/templates/uc-cart-block.html.twig", "C:\\xampp\\htdocs\\drupal5\\modules\\ubercart\\uc_cart\\templates\\uc-cart-block.html.twig");
    }
}
