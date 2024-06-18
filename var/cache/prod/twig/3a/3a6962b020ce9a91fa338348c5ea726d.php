<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig */
class __TwigTemplate_fa1899a41b295de1e44eadb3a925e0db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"card\" data-role=\"products-card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["viewableSupplier"] ?? null), "supplierProducts", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewableSupplier"] ?? null), "supplierProducts", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
        </div>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supplier reference", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Wholesale price", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
            echo "</th>
                <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EAN-13", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                ";
            // line 47
            if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                // line 48
                echo "                  <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                ";
            }
            // line 50
            echo "              </tr>
            </thead>
            <tbody>
            ";
            // line 53
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 53))) {
                // line 54
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 55
                    echo "                  <tr>
                    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "attributes", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "attributes", [], "any", false, false, false, 56), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 57
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "supplier_reference", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "supplier_reference", [], "any", false, false, false, 57), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 58
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "wholesale_price", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "wholesale_price", [], "any", false, false, false, 58), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 59
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "reference", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "reference", [], "any", false, false, false, 59), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "ean13", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "ean13", [], "any", false, false, false, 60), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "upc", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "upc", [], "any", false, false, false, 61), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    ";
                    // line 62
                    if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                        // line 63
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "quantity", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "quantity", [], "any", false, false, false, 63), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 65
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "              ";
            } else {
                // line 68
                echo "                <tr>
                  <td>";
                // line 69
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 69), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 70
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 70), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 71
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 71), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 72
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 72), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 73
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", false, false, false, 73), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 74
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 74), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  ";
                // line 75
                if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                    // line 76
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 76), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 78
                echo "                </tr>
            ";
            }
            // line 80
            echo "            </tbody>
          </table>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["viewableSupplier"] ?? null), "supplierProducts", [], "any", false, false, false, 85))) {
            // line 86
            echo "      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records found", [], "Admin.Global"), "html", null, true);
            echo "</p>
      </div>
    ";
        }
        // line 91
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 91,  216 => 88,  212 => 86,  209 => 85,  199 => 80,  195 => 78,  189 => 76,  187 => 75,  183 => 74,  179 => 73,  175 => 72,  171 => 71,  167 => 70,  163 => 69,  160 => 68,  157 => 67,  150 => 65,  144 => 63,  142 => 62,  138 => 61,  134 => 60,  130 => 59,  126 => 58,  122 => 57,  118 => 56,  115 => 55,  110 => 54,  108 => 53,  103 => 50,  97 => 48,  95 => 47,  91 => 46,  87 => 45,  83 => 44,  79 => 43,  75 => 42,  71 => 41,  60 => 35,  56 => 33,  52 => 32,  46 => 29,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig", "/home/r118530wood/federica.ecomdoo.eu/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig");
    }
}
