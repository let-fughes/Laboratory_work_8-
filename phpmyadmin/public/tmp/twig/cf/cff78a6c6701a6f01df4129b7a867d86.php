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

/* database/routines/index.twig */
class __TwigTemplate_c2785f6ea1da5d10c6e96f5f0589d67c extends Template
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
        // line 1
        echo "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        echo PhpMyAdmin\Html\Generator::getIcon("b_routines", _gettext("Routines"));
        echo "
    ";
        // line 4
        echo PhpMyAdmin\Html\MySQLDocumentation::show("STORED_ROUTINES");
        echo "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">
    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
echo _gettext("Check all");
        // line 13
        echo "</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"";
echo _gettext("Export");
        // line 16
        echo "\">
          ";
        // line 17
        echo PhpMyAdmin\Html\Generator::getIcon("b_export", _gettext("Export"));
        echo "
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"";
echo _gettext("Drop");
        // line 19
        echo "\">
          ";
        // line 20
        echo PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
        echo "
        </button>
      </div>
    </div>

    <div class=\"ms-auto\">
      <div class=\"input-group\">
        <span class=\"input-group-text\">";
        // line 27
        echo PhpMyAdmin\Html\Generator::getImage("b_search", _gettext("Search"));
        echo "</span>
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
echo _gettext("Search");
        // line 28
        echo "\" aria-label=\"";
echo _gettext("Search");
        echo "\">
      </div>
    </div>
    <div class=\"ms-2\">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 32
        echo (( !($context["has_privilege"] ?? null)) ? (" disabled") : (""));
        echo "\" href=\"";
        echo PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "add_item" => true]);
        echo "\" role=\"button\"";
        echo (( !($context["has_privilege"] ?? null)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        echo ">
        ";
        // line 33
        echo PhpMyAdmin\Html\Generator::getIcon("b_routine_add", _gettext("Create new routine"));
        echo "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"";
        // line 38
        echo PhpMyAdmin\Url::getFromRoute("/database/routines");
        echo "\">
    ";
        // line 39
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "

    <div id=\"nothing2display\"";
        // line 41
        echo (( !twig_test_empty(($context["items"] ?? null))) ? (" class=\"hide\"") : (""));
        echo ">
      ";
echo _gettext("There are no routines to display.");
        // line 43
        echo "    </div>

    <table id=\"routinesTable\" class=\"table table-striped table-hover";
        // line 45
        echo ((twig_test_empty(($context["items"] ?? null))) ? (" hide") : (""));
        echo " data w-auto\">
      <thead>
      <tr>
        <th></th>
        <th>";
echo _gettext("Name");
        // line 49
        echo "</th>
        <th>";
echo _gettext("Type");
        // line 50
        echo "</th>
        <th>";
echo _gettext("Returns");
        // line 51
        echo "</th>
        <th colspan=\"4\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</tr>

      ";
        // line 58
        echo ($context["rows"] ?? null);
        echo "
      </tbody>
    </table>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/routines/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 58,  156 => 56,  149 => 51,  145 => 50,  141 => 49,  133 => 45,  129 => 43,  124 => 41,  119 => 39,  115 => 38,  107 => 33,  99 => 32,  91 => 28,  86 => 27,  76 => 20,  73 => 19,  67 => 17,  64 => 16,  58 => 13,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/routines/index.twig", "C:\\OSPanel\\home\\phpmyadmin\\public\\templates\\database\\routines\\index.twig");
    }
}
