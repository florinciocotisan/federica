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

/* __string_template__419c64c0fe742d5e6bdb18ddfe119bd4 */
class __TwigTemplate_2d7ce58aa23f15f51e1602b760bd9590 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__419c64c0fe742d5e6bdb18ddfe119bd4"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__419c64c0fe742d5e6bdb18ddfe119bd4"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ro\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Furnizori • Federica</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminSuppliers';
    var iso_user = 'ro';
    var lang_is_rtl = '0';
    var full_language_code = 'ro-ro';
    var full_cldr_language_code = 'ro-RO';
    var country_iso_code = 'RO';
    var _PS_VERSION_ = '8.1.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A fost plasata o comanda noua in magazinul tau.';
    var order_number_msg = 'Numarul comenzii: ';
    var total_msg = 'Total: ';
    var from_msg = 'Din ';
    var see_order_msg = 'Vezi comanda';
    var new_customer_msg = 'S-a inregistrat un client nou in magazinul tau.';
    var customer_name_msg = 'Numele clientului: ';
    var new_msg = 'A fost trimis un mesaj nou din magazinul tau.';
    var see_msg = 'Citire mesaj';
    var token = '489a78c7d4a4b17b1928e5ee9225955a';
    var currentIndex = 'index.php?controller=AdminSuppliers';
    var employee_token = 'd826d69c50b16fff45be2fd5ab74e003';
    var choose_language_translate = 'Alege limba:';
    var default_language = '2';
    var admin_modules_link = '/administration/index.php/improve/modules/manage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8';
    var admin_notification_get_link = '/administration/index.php/common/notifications?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8';
    var admin_notification_push_link = adminNotificationPushLink = '/administration/index.php/common/notifications/ack?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8';
    var tab_modules_list = '';
    var update_success_msg = 'Actualizare reusita';
    var search_product_msg =";
        // line 43
        echo " 'Cauta un produs';
  </script>



<link
      rel=\"preload\"
      href=\"/administration/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/administration/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/administration/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/administration/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/administration\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/administration\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\";
var currency = {\"iso_code\":\"RON\",\"sign\":\"lei\",\"name\":\"Leu rom\\u00e2nesc\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"RON\",\"currencySymbol\":\"lei\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,";
        // line 71
        echo "##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.3\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/default/js/vend";
        // line 92
        echo "or/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

      <script>
        window.userLocale  = 'ro';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/administration/index.php/common/notifications?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/federica.ecomdoo.eu\\/administration\\/index.php?controller=AdminGamification&token=c00cfd808c7f75aff6bd217e7ab83ef3\";
            var current_id_tab = 18;
        </script><script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 119
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-ro adminsuppliers developer-mode\"
  data-base-url=\"/administration/index.php\"  data-token=\"yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acces rapid
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/categories/new?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Categorie noua\"
      >Categorie noua</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/orders?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Comenzi\"
      >Comenzi</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8d16053db494e5caa46c0ab0d932da88\"
                 data-item=\"Cupon nou\"
      >Cupon nou</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=15fc6ddc157519e39226bf2750e6237d\"
                 data-item=\"Evaluarea catalogului\"
      >Evaluarea catalogului</a>
          <a class=\"";
        // line 156
        echo "dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/improve/modules/manage?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Module instalate\"
      >Module instalate</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/products-v2/create?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Produs nou\"
      >Produs nou</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"175\"
        data-icon=\"icon-AdminParentManufacturers\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/suppliers\"
        data-post-link=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\"
        data-prompt-text=\"Te rog numeste aceasta scurtatura:\"
        data-link=\"Furnizori - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adauga pagina curenta la lista de Acces rapid
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\">
      <i class=\"material-icons\">settings</i>
      Administreaza linkurile de Acces Rapid
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/administration/index.php?controller=AdminSearch&amp;token=4e33a827c2130119847183e702309d92\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div";
        // line 195
        echo " class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cauta (de exemplu, cod de produs, nume de client...)\" aria-label=\"Bara de cautare\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Oriunde
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Oriunde\" href=\"#\" data-value=\"0\" data-placeholder=\"Ce anume cautati?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Oriunde</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog de produse\" href=\"#\" data-value=\"1\" data-placeholder=\"Denumirea produsului, codul etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog de produse</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa nume\" href=\"#\" data-value=\"2\" data-placeholder=\"Nume\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti dupa nume</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa adresa ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti dupa adresa IP</a>
        <a class=\"dropdown-item\" data-item=\"Comenzi\" href=\"#\" data-value=\"3\" data-placeholder=\"ID comanda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Comenzi</a>
        <a class=\"dropdown-item\" data-item=\"Facturi\" href=\"#\" data-value=\"4\" data-placeholder=\"Numarul facturii\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturi</a>
        <a class=\"dropdown-item\" data-item=\"Cosuri\" href=\"#\" data-value=\"5\" data-placeholder=\"ID cos\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Cosuri</a>
        <a class=\"dropdown-item\" data-item=\"Module\" href=\"#\"";
        // line 210
        echo " data-value=\"7\" data-placeholder=\"Nume modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Module</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CAUTA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuleaza</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acces rapid</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/categories/new?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Categorie noua\"
    >Categorie noua</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/sell/orders?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Comenzi\"
    >Comenzi</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8d16053db494e5caa46c0ab0d932da88\"
             data-item=\"Cupon nou\"
    >Cupon nou</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=15fc6ddc157519e39226bf2750e6237d\"
             data-item=\"Evaluarea catalogului\"
    >Evaluarea catalogului</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/improve/modules/manage?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Module instalate\"
    >Module instalate</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.e";
        // line 250
        echo "comdoo.eu/administration/index.php/sell/catalog/products-v2/create?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Produs nou\"
    >Produs nou</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"172\"
      data-icon=\"icon-AdminParentManufacturers\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/suppliers\"
      data-post-link=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\"
      data-prompt-text=\"Te rog numeste aceasta scurtatura:\"
      data-link=\"Furnizori - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adauga pagina curenta la lista de Acces rapid
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\">
    <i class=\"material-icons\">settings</i>
    Administreaza linkurile de Acces Rapid
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Magazinul tau este in modul de depanare.</strong></p><p class=&quot;text-left&quot;>Toate erorile si mesajele PHP sunt afisate. Cand nu mai ai nevoie, &lt;strong&gt;dezactiveaza&lt;/strong&gt; aceasta optiune.</p>\"
             href=\"/administration/index.php/configure/advanced/performance/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modul depanare</span>
          </a>
        </div>
      
                      <div class=\"c";
        // line 292
        echo "omponent hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Magazinul tau este inchis pentru intretinere.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vizitatorii sau clientii nu pot accesa magazinul cand acesta este inchis pentru intretinere.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pentru a configura modul de intretinere, intra la Parametri operationali &amp;gt; Magazin &amp;gt; fila Intretinere.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Administratorii pot accesa magazinul fara verificarea adresei IP.
            &lt;/p&gt;
                  \"
             href=\"/administration/index.php/configure/shop/maintenance/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modul de intretinere</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://federica.ecomdoo.eu/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Intra in magazin</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_n";
        // line 332
        echo "one</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Comenzi<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mesaje<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici o comanda noua pentru moment :(<br>
              Ti-ai verificat <strong><a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=732b9a3ccde4feb96479aa6179852fb1\">cosurile abandonate</a></strong>?<br>Urmatoarea ta comanda s-ar putea ascunde acolo!
            </p>
            <div class=\"notification-elements\"></div";
        // line 383
        echo ">
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici un client nou pentru moment :(<br>
              Esti activ pe retelele sociale zilele acestea?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nu sunt mesaje noi pana acum.<br>
              Se pare ca toti clientii tai sunt fericiti :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de_la <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inregistrat la <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">";
        // line 434
        echo "
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://federica.ecomdoo.eu/img/pr/default.jpg\" alt=\"Florin\" /></span>
        <span class=\"employee_profile\">Bine ai revenit, Florin</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/administration/index.php/configure/advanced/employees/1/edit?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\">
      <i class=\"material-icons\">edit</i>
      <span>Profilul tau</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=federica.ecomdoo.eu&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestionați-vă contul PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-ro&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-ro&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Găsește un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/administration/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-ro&utm_mbo_source=menu-user-back-office\"  rel=\"n";
        // line 457
        echo "oopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-ro&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centrul de Ajutor
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminLogin&amp;logout=1&amp;token=02002d02830fef933028247e48dc1d9c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Deconectare</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/administration/index.php/configure/advanced/employees/toggle-navigation?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
       ";
        // line 501
        echo "           <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminDashboard&amp;token=a945e5af91ec48230b3845ebbf4e2bb2\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tablou de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vinde</span>
            </li>

                              
             ";
        // line 538
        echo "     
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/administration/index.php/sell/orders/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Comenzi
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/administration/index.php/sell/orders/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Comenzi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/administration/index.php/sell/orders/invoices/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Facturi
                                </a>
                              </li>

                                                                                  
                              
             ";
        // line 570
        echo "                                               
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/administration/index.php/sell/orders/credit-slips/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Note de credit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/administration/index.php/sell/orders/delivery-slips/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Avize de livrare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarts&amp;token=732b9a3ccde4feb96479aa6179852fb1\" class=\"link\"> Cosuri de cumparaturi
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/administration/index.php/sell/catalog/products?_token=yYzsMFlIUhv9UUVGs";
        // line 599
        echo "ICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog de produse
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/administration/index.php/sell/catalog/products?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Produse
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/administration/index.php/sell/catalog/categories?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Categorii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/administration/index.php/sell/catalog/monitoring/?_token=yYzsMFlIUhv9UUVGsICu";
        // line 629
        echo "EsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Monitorizare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminAttributesGroups&amp;token=67c573fe821a02b6eaa02b772c585e51\" class=\"link\"> Atribute si caracteristici
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/administration/index.php/sell/catalog/brands/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Marci si furnizori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/administration/index.php/sell/attachments/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Fisiere
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm";
        // line 660
        echo "enu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;token=8d16053db494e5caa46c0ab0d932da88\" class=\"link\"> Reduceri
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/administration/index.php/sell/stocks/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Stoc
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/administration/index.php/sell/customers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                   ";
        // line 692
        echo "                                         
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/administration/index.php/sell/customers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/administration/index.php/sell/addresses/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Adrese
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCustomerThreads&amp;token=b6723abd82ac91f80ad3898b98f30c47\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Asistenta pentru clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                         ";
        // line 722
        echo "     <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCustomerThreads&amp;token=b6723abd82ac91f80ad3898b98f30c47\" class=\"link\"> Asistenta pentru clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/administration/index.php/sell/customer-service/order-messages/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Mesaje la comenzi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminReturn&amp;token=ea7c09d1a7edc59b8854a4ab6568db17\" class=\"link\"> Returnari de produse
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_";
        // line 753
        echo "submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/administration/index.php/modules/metrics/legacy/stats?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistici
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/administration/index.php/modules/metrics/legacy/stats?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Statistici
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/administration/index.php/modules/metrics?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                   ";
        // line 784
        echo "   
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Imbunatateste</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/administration/index.php/modules/mbo/modules/catalog/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Module
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/administration/index.php/modules/mbo/modules/catalog/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"";
        // line 818
        echo "link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/administration/index.php/improve/modules/manage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Administrare module
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/administration/index.php/modules/improve/design/themes?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/administration/index.php/modules/improve/design/themes?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Customization
                                </a>
                              </li>

                                     ";
        // line 848
        echo "                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=2539bc542894d6f3e1f8499e379508ab\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/administration/index.php/modules/mbo/themes/catalog/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/administration/index.php/improve/design/mail_theme/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Tema pentru e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/administration/index.php/improve/design/cms-pages/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8";
        // line 876
        echo "YHmGX0Vr1gh8\" class=\"link\"> Pagini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/administration/index.php/improve/design/modules/positions/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Pozitii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminImages&amp;token=a0bc5bb6b0c773e76d33131c863655bb\" class=\"link\"> Imagini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/administration/index.php/modules/link-widget/list?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Lista de linkuri
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"";
        // line 910
        echo "link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarriers&amp;token=c58ae7e203b1622c4dcee41f9b3253ad\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livrare
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarriers&amp;token=c58ae7e203b1622c4dcee41f9b3253ad\" class=\"link\"> Transportatori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/administration/index.php/improve/shipping/preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Preferinte
                                </a>
                              </li>

                                                                                  
                              
                                    ";
        // line 939
        echo "                        
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminMbeConfiguration&amp;token=c7bd1ac0d321da209683dc93a14696d1\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminMbeShipping&amp;token=27ba6e24060c60440902f666f0197eab\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/administration/index.php/improve/payment/payment_methods?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Plata
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>";
        // line 968
        echo "
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/administration/index.php/improve/payment/payment_methods?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Modalitati de plata
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/administration/index.php/improve/payment/preferences?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Preferinte
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/administration/index.php/improve/international/localization/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                   ";
        // line 999
        echo " keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/administration/index.php/improve/international/localization/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Localizare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/administration/index.php/improve/international/zones/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Locatii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/administration/index.php/improve/international/taxes/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Taxe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <l";
        // line 1030
        echo "i class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/administration/index.php/improve/international/translations/settings?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Traduceri
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-Marketing\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsfacebookModule&amp;token=b2347cc01df8551ad99bef8e4a927a32\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsfacebookModule&amp;token=b2347cc01df8551ad99bef8e4a927a32\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                        ";
        // line 1060
        echo "                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=9852d5281647ecaf0a65079efde10789\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configureaza</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/administration/index.php/modules/pseditionbasic/settings?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
 ";
        // line 1099
        echo "                 <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/administration/index.php/configure/shop/preferences/preferences?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parametri operationali
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/administration/index.php/configure/shop/preferences/preferences?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Magazin
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/administration/index.php/configure/shop/order-preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Comenzi
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 1128
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/administration/index.php/configure/shop/product-preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Produse
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/administration/index.php/configure/shop/customer-preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/administration/index.php/configure/shop/contacts/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/administration/index.php/configure/shop/seo-urls/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Trafic si SEO
                                </a>
                              </li";
        // line 1156
        echo ">

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminSearchConf&amp;token=8a3314ccc45d077f0aeaf135ab48ee56\" class=\"link\"> Cautare
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/administration/index.php/configure/advanced/system-information/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parametri avansati
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/administration/index.php";
        // line 1187
        echo "/configure/advanced/system-information/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Informatii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/administration/index.php/configure/advanced/performance/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Performanta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/administration/index.php/configure/advanced/administration/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Administrare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/administration/index.php/configure/advanced/emails/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leve";
        // line 1218
        echo "ltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/administration/index.php/configure/advanced/import/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Importa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/administration/index.php/configure/advanced/employees/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Angajati
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/administration/index.php/configure/advanced/sql-requests/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Baza de date
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/administration/index.php/configure/advanced/logs/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Jurnale
                                </a>
                              </li>

                                                                                  
                              
               ";
        // line 1249
        echo "                                             
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/administration/index.php/configure/advanced/webservice-keys/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Servicii Web
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/administration/index.php/configure/advanced/feature-flags/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Caracteristici noi/experimentale
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/administration/index.php/configure/advanced/security/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Securitate
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-Admi";
        // line 1277
        echo "nKlaviyoPsConfig\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminKlaviyoPsConfig&amp;token=5173e00a6ed9de9812cb45d9d8eaa543\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Marci si furnizori</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/administration/index.php/sell/catalog/suppliers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" aria-current=\"page\">Furnizori</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Furnizori          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/administration/index.php/sell/catalog/suppliers/new?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"                  title=\"Adauga un furnizor nou\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Adauga un furnizor nou
            ";
        // line 1326
        echo "    </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajutor\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/administration/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fro%252Fdoc%252FAdminSuppliers%253Fversion%253D8.1.5%2526country%253Dro/Ajutor?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
                   id=\"product_form_open_help\"
                >
                  Ajutor
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/administration/index.php/sell/catalog/brands/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" id=\"subtab-AdminManufacturers\" class=\"nav-link tab \" data-submenu=\"17\">
                      Marci
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/administration/index.php/sell/catalog/suppliers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" id=\"subtab-AdminSuppliers\" class=\"nav-link tab active current\" data-submenu=\"18\">
                      Furnizori
                      <span class=\"notificatio";
        // line 1359
        echo "n-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </butto";
        // line 1370
        echo "n>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/administration/index.php/sell/catalog/suppliers/new?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"              title=\"Adauga un furnizor nou\"            >
              Adauga un furnizor nou
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajutor\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/administration/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fro%252Fdoc%252FAdminSuppliers%253Fversion%253D8.1.5%2526country%253Dro/Ajutor?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
            >
              Ajutor
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1405
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh nu!</h1>
  <p class=\"mt-3\">
    Versiunea mobila a acestei pagini nu este inca disponibila.
  </p>
  <p class=\"mt-2\">
    Te rugam sa utilizezi un calculator de tip desktop pentru a accesa aceasta pagina, pana cand este adaptata pentru mobil.
  </p>
  <p class=\"mt-2\">
    Multumim!
  </p>
  <a href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Inapoi
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1439
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 119
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1405
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1439
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__419c64c0fe742d5e6bdb18ddfe119bd4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1704 => 1439,  1635 => 1405,  1600 => 119,  1585 => 1439,  1545 => 1405,  1508 => 1370,  1495 => 1359,  1460 => 1326,  1409 => 1277,  1379 => 1249,  1346 => 1218,  1313 => 1187,  1280 => 1156,  1250 => 1128,  1219 => 1099,  1178 => 1060,  1146 => 1030,  1113 => 999,  1080 => 968,  1049 => 939,  1018 => 910,  982 => 876,  952 => 848,  920 => 818,  884 => 784,  851 => 753,  818 => 722,  786 => 692,  752 => 660,  719 => 629,  687 => 599,  656 => 570,  622 => 538,  583 => 501,  537 => 457,  512 => 434,  459 => 383,  406 => 332,  364 => 292,  320 => 250,  278 => 210,  261 => 195,  220 => 156,  178 => 119,  149 => 92,  126 => 71,  96 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"ro\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Furnizori • Federica</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminSuppliers\\';
    var iso_user = \\'ro\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'ro-ro\\';
    var full_cldr_language_code = \\'ro-RO\\';
    var country_iso_code = \\'RO\\';
    var _PS_VERSION_ = \\'8.1.5\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A fost plasata o comanda noua in magazinul tau.\\';
    var order_number_msg = \\'Numarul comenzii: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'Din \\';
    var see_order_msg = \\'Vezi comanda\\';
    var new_customer_msg = \\'S-a inregistrat un client nou in magazinul tau.\\';
    var customer_name_msg = \\'Numele clientului: \\';
    var new_msg = \\'A fost trimis un mesaj nou din magazinul tau.\\';
    var see_msg = \\'Citire mesaj\\';
    var token = \\'489a78c7d4a4b17b1928e5ee9225955a\\';
    var currentIndex = \\'index.php?controller=AdminSuppliers\\';
    var employee_token = \\'d826d69c50b16fff45be2fd5ab74e003\\';
    var choose_language_translate = \\'Alege limba:\\';
    var default_language = \\'2\\';
    var admin_modules_link = \\'/administration/index.php/improve/modules/manage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\\';
    var admin_notification_get_link = \\'/administration/index.php/common/notifications?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/administration/index.php/common/notifications/ack?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Actualizare reusita\\';
    var search_product_msg =' | raw }}{{ ' \\'Cauta un produs\\';
  </script>



<link
      rel=\"preload\"
      href=\"/administration/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/administration/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/administration/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/administration/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/administration\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/administration\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\";
var currency = {\"iso_code\":\"RON\",\"sign\":\"lei\",\"name\":\"Leu rom\\\\u00e2nesc\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"RON\",\"currencySymbol\":\"lei\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,' | raw }}{{ '##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psxDesignUpdateNotification = \"\\\\n<div class=\\\\\"psxdesign-notification\\\\\">\\\\n  1\\\\n<\\\\/div>\\\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.3\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/administration/themes/default/js/vend' | raw }}{{ 'or/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

      <script>
        window.userLocale  = \\'ro\\';
        window.userflow_id = \\'ct_55jfryadgneorc45cjqxpbf6o4\\';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/administration/index.php/common/notifications?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\\\/\\\\/federica.ecomdoo.eu\\\\/administration\\\\/index.php?controller=AdminGamification&token=c00cfd808c7f75aff6bd217e7ab83ef3\";
            var current_id_tab = 18;
        </script><script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-ro adminsuppliers developer-mode\"
  data-base-url=\"/administration/index.php\"  data-token=\"yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acces rapid
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/categories/new?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Categorie noua\"
      >Categorie noua</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/orders?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Comenzi\"
      >Comenzi</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8d16053db494e5caa46c0ab0d932da88\"
                 data-item=\"Cupon nou\"
      >Cupon nou</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=15fc6ddc157519e39226bf2750e6237d\"
                 data-item=\"Evaluarea catalogului\"
      >Evaluarea catalogului</a>
          <a class=\"' | raw }}{{ 'dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/improve/modules/manage?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Module instalate\"
      >Module instalate</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/products-v2/create?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Produs nou\"
      >Produs nou</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"175\"
        data-icon=\"icon-AdminParentManufacturers\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/suppliers\"
        data-post-link=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\"
        data-prompt-text=\"Te rog numeste aceasta scurtatura:\"
        data-link=\"Furnizori - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adauga pagina curenta la lista de Acces rapid
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\">
      <i class=\"material-icons\">settings</i>
      Administreaza linkurile de Acces Rapid
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/administration/index.php?controller=AdminSearch&amp;token=4e33a827c2130119847183e702309d92\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div' | raw }}{{ ' class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cauta (de exemplu, cod de produs, nume de client...)\" aria-label=\"Bara de cautare\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Oriunde
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Oriunde\" href=\"#\" data-value=\"0\" data-placeholder=\"Ce anume cautati?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Oriunde</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog de produse\" href=\"#\" data-value=\"1\" data-placeholder=\"Denumirea produsului, codul etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog de produse</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa nume\" href=\"#\" data-value=\"2\" data-placeholder=\"Nume\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti dupa nume</a>
        <a class=\"dropdown-item\" data-item=\"Clienti dupa adresa ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti dupa adresa IP</a>
        <a class=\"dropdown-item\" data-item=\"Comenzi\" href=\"#\" data-value=\"3\" data-placeholder=\"ID comanda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Comenzi</a>
        <a class=\"dropdown-item\" data-item=\"Facturi\" href=\"#\" data-value=\"4\" data-placeholder=\"Numarul facturii\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturi</a>
        <a class=\"dropdown-item\" data-item=\"Cosuri\" href=\"#\" data-value=\"5\" data-placeholder=\"ID cos\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Cosuri</a>
        <a class=\"dropdown-item\" data-item=\"Module\" href=\"#\"' | raw }}{{ ' data-value=\"7\" data-placeholder=\"Nume modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Module</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CAUTA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuleaza</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acces rapid</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/categories/new?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Categorie noua\"
    >Categorie noua</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/sell/orders?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Comenzi\"
    >Comenzi</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8d16053db494e5caa46c0ab0d932da88\"
             data-item=\"Cupon nou\"
    >Cupon nou</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=15fc6ddc157519e39226bf2750e6237d\"
             data-item=\"Evaluarea catalogului\"
    >Evaluarea catalogului</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/improve/modules/manage?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Module instalate\"
    >Module instalate</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.e' | raw }}{{ 'comdoo.eu/administration/index.php/sell/catalog/products-v2/create?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Produs nou\"
    >Produs nou</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"172\"
      data-icon=\"icon-AdminParentManufacturers\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/suppliers\"
      data-post-link=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\"
      data-prompt-text=\"Te rog numeste aceasta scurtatura:\"
      data-link=\"Furnizori - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adauga pagina curenta la lista de Acces rapid
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\">
    <i class=\"material-icons\">settings</i>
    Administreaza linkurile de Acces Rapid
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Magazinul tau este in modul de depanare.</strong></p><p class=&quot;text-left&quot;>Toate erorile si mesajele PHP sunt afisate. Cand nu mai ai nevoie, &lt;strong&gt;dezactiveaza&lt;/strong&gt; aceasta optiune.</p>\"
             href=\"/administration/index.php/configure/advanced/performance/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modul depanare</span>
          </a>
        </div>
      
                      <div class=\"c' | raw }}{{ 'omponent hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Magazinul tau este inchis pentru intretinere.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vizitatorii sau clientii nu pot accesa magazinul cand acesta este inchis pentru intretinere.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pentru a configura modul de intretinere, intra la Parametri operationali &amp;gt; Magazin &amp;gt; fila Intretinere.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Administratorii pot accesa magazinul fara verificarea adresei IP.
            &lt;/p&gt;
                  \"
             href=\"/administration/index.php/configure/shop/maintenance/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modul de intretinere</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://federica.ecomdoo.eu/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Intra in magazin</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_n' | raw }}{{ 'one</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Comenzi<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mesaje<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici o comanda noua pentru moment :(<br>
              Ti-ai verificat <strong><a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=732b9a3ccde4feb96479aa6179852fb1\">cosurile abandonate</a></strong>?<br>Urmatoarea ta comanda s-ar putea ascunde acolo!
            </p>
            <div class=\"notification-elements\"></div' | raw }}{{ '>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nici un client nou pentru moment :(<br>
              Esti activ pe retelele sociale zilele acestea?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nu sunt mesaje noi pana acum.<br>
              Se pare ca toti clientii tai sunt fericiti :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de_la <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - inregistrat la <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">' | raw }}{{ '
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://federica.ecomdoo.eu/img/pr/default.jpg\" alt=\"Florin\" /></span>
        <span class=\"employee_profile\">Bine ai revenit, Florin</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/administration/index.php/configure/advanced/employees/1/edit?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\">
      <i class=\"material-icons\">edit</i>
      <span>Profilul tau</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=federica.ecomdoo.eu&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestionați-vă contul PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-ro&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-ro&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Găsește un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/administration/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-ro&utm_mbo_source=menu-user-back-office\"  rel=\"n' | raw }}{{ 'oopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-ro&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centrul de Ajutor
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminLogin&amp;logout=1&amp;token=02002d02830fef933028247e48dc1d9c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Deconectare</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/administration/index.php/configure/advanced/employees/toggle-navigation?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
       ' | raw }}{{ '           <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminDashboard&amp;token=a945e5af91ec48230b3845ebbf4e2bb2\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tablou de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vinde</span>
            </li>

                              
             ' | raw }}{{ '     
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/administration/index.php/sell/orders/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Comenzi
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/administration/index.php/sell/orders/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Comenzi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/administration/index.php/sell/orders/invoices/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Facturi
                                </a>
                              </li>

                                                                                  
                              
             ' | raw }}{{ '                                               
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/administration/index.php/sell/orders/credit-slips/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Note de credit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/administration/index.php/sell/orders/delivery-slips/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Avize de livrare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarts&amp;token=732b9a3ccde4feb96479aa6179852fb1\" class=\"link\"> Cosuri de cumparaturi
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/administration/index.php/sell/catalog/products?_token=yYzsMFlIUhv9UUVGs' | raw }}{{ 'ICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog de produse
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/administration/index.php/sell/catalog/products?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Produse
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/administration/index.php/sell/catalog/categories?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Categorii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/administration/index.php/sell/catalog/monitoring/?_token=yYzsMFlIUhv9UUVGsICu' | raw }}{{ 'EsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Monitorizare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminAttributesGroups&amp;token=67c573fe821a02b6eaa02b772c585e51\" class=\"link\"> Atribute si caracteristici
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/administration/index.php/sell/catalog/brands/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Marci si furnizori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/administration/index.php/sell/attachments/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Fisiere
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm' | raw }}{{ 'enu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;token=8d16053db494e5caa46c0ab0d932da88\" class=\"link\"> Reduceri
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/administration/index.php/sell/stocks/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Stoc
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/administration/index.php/sell/customers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                   ' | raw }}{{ '                                         
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/administration/index.php/sell/customers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/administration/index.php/sell/addresses/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Adrese
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCustomerThreads&amp;token=b6723abd82ac91f80ad3898b98f30c47\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Asistenta pentru clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                         ' | raw }}{{ '     <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCustomerThreads&amp;token=b6723abd82ac91f80ad3898b98f30c47\" class=\"link\"> Asistenta pentru clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/administration/index.php/sell/customer-service/order-messages/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Mesaje la comenzi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminReturn&amp;token=ea7c09d1a7edc59b8854a4ab6568db17\" class=\"link\"> Returnari de produse
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_' | raw }}{{ 'submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/administration/index.php/modules/metrics/legacy/stats?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistici
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/administration/index.php/modules/metrics/legacy/stats?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Statistici
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/administration/index.php/modules/metrics?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                   ' | raw }}{{ '   
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Imbunatateste</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/administration/index.php/modules/mbo/modules/catalog/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Module
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/administration/index.php/modules/mbo/modules/catalog/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"' | raw }}{{ 'link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/administration/index.php/improve/modules/manage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Administrare module
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/administration/index.php/modules/improve/design/themes?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/administration/index.php/modules/improve/design/themes?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Customization
                                </a>
                              </li>

                                     ' | raw }}{{ '                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=2539bc542894d6f3e1f8499e379508ab\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/administration/index.php/modules/mbo/themes/catalog/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/administration/index.php/improve/design/mail_theme/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Tema pentru e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/administration/index.php/improve/design/cms-pages/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8' | raw }}{{ 'YHmGX0Vr1gh8\" class=\"link\"> Pagini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/administration/index.php/improve/design/modules/positions/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Pozitii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminImages&amp;token=a0bc5bb6b0c773e76d33131c863655bb\" class=\"link\"> Imagini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/administration/index.php/modules/link-widget/list?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Lista de linkuri
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"' | raw }}{{ 'link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarriers&amp;token=c58ae7e203b1622c4dcee41f9b3253ad\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livrare
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarriers&amp;token=c58ae7e203b1622c4dcee41f9b3253ad\" class=\"link\"> Transportatori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/administration/index.php/improve/shipping/preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Preferinte
                                </a>
                              </li>

                                                                                  
                              
                                    ' | raw }}{{ '                        
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminMbeConfiguration&amp;token=c7bd1ac0d321da209683dc93a14696d1\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminMbeShipping&amp;token=27ba6e24060c60440902f666f0197eab\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/administration/index.php/improve/payment/payment_methods?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Plata
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>' | raw }}{{ '
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/administration/index.php/improve/payment/payment_methods?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Modalitati de plata
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/administration/index.php/improve/payment/preferences?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Preferinte
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/administration/index.php/improve/international/localization/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                   ' | raw }}{{ ' keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/administration/index.php/improve/international/localization/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Localizare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/administration/index.php/improve/international/zones/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Locatii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/administration/index.php/improve/international/taxes/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Taxe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <l' | raw }}{{ 'i class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/administration/index.php/improve/international/translations/settings?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Traduceri
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-Marketing\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsfacebookModule&amp;token=b2347cc01df8551ad99bef8e4a927a32\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsfacebookModule&amp;token=b2347cc01df8551ad99bef8e4a927a32\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                        ' | raw }}{{ '                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=9852d5281647ecaf0a65079efde10789\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configureaza</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/administration/index.php/modules/pseditionbasic/settings?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
 ' | raw }}{{ '                 <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/administration/index.php/configure/shop/preferences/preferences?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parametri operationali
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/administration/index.php/configure/shop/preferences/preferences?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Magazin
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/administration/index.php/configure/shop/order-preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Comenzi
                                </a>
                              </li>

                                                                                  
                              
   ' | raw }}{{ '                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/administration/index.php/configure/shop/product-preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Produse
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/administration/index.php/configure/shop/customer-preferences/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/administration/index.php/configure/shop/contacts/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/administration/index.php/configure/shop/seo-urls/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Trafic si SEO
                                </a>
                              </li' | raw }}{{ '>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminSearchConf&amp;token=8a3314ccc45d077f0aeaf135ab48ee56\" class=\"link\"> Cautare
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/administration/index.php/configure/advanced/system-information/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parametri avansati
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/administration/index.php' | raw }}{{ '/configure/advanced/system-information/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Informatii
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/administration/index.php/configure/advanced/performance/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Performanta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/administration/index.php/configure/advanced/administration/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Administrare
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/administration/index.php/configure/advanced/emails/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leve' | raw }}{{ 'ltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/administration/index.php/configure/advanced/import/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Importa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/administration/index.php/configure/advanced/employees/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Angajati
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/administration/index.php/configure/advanced/sql-requests/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Baza de date
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/administration/index.php/configure/advanced/logs/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Jurnale
                                </a>
                              </li>

                                                                                  
                              
               ' | raw }}{{ '                                             
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/administration/index.php/configure/advanced/webservice-keys/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Servicii Web
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/administration/index.php/configure/advanced/feature-flags/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Caracteristici noi/experimentale
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/administration/index.php/configure/advanced/security/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"link\"> Securitate
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-Admi' | raw }}{{ 'nKlaviyoPsConfig\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminKlaviyoPsConfig&amp;token=5173e00a6ed9de9812cb45d9d8eaa543\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Marci si furnizori</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/administration/index.php/sell/catalog/suppliers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" aria-current=\"page\">Furnizori</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Furnizori          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/administration/index.php/sell/catalog/suppliers/new?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"                  title=\"Adauga un furnizor nou\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Adauga un furnizor nou
            ' | raw }}{{ '    </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajutor\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/administration/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fro%252Fdoc%252FAdminSuppliers%253Fversion%253D8.1.5%2526country%253Dro/Ajutor?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
                   id=\"product_form_open_help\"
                >
                  Ajutor
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/administration/index.php/sell/catalog/brands/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" id=\"subtab-AdminManufacturers\" class=\"nav-link tab \" data-submenu=\"17\">
                      Marci
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/administration/index.php/sell/catalog/suppliers/?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" id=\"subtab-AdminSuppliers\" class=\"nav-link tab active current\" data-submenu=\"18\">
                      Furnizori
                      <span class=\"notificatio' | raw }}{{ 'n-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </butto' | raw }}{{ 'n>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/administration/index.php/sell/catalog/suppliers/new?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"              title=\"Adauga un furnizor nou\"            >
              Adauga un furnizor nou
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajutor\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/administration/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fro%252Fdoc%252FAdminSuppliers%253Fversion%253D8.1.5%2526country%253Dro/Ajutor?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\"
            >
              Ajutor
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh nu!</h1>
  <p class=\"mt-3\">
    Versiunea mobila a acestei pagini nu este inca disponibila.
  </p>
  <p class=\"mt-2\">
    Te rugam sa utilizezi un calculator de tip desktop pentru a accesa aceasta pagina, pana cand este adaptata pentru mobil.
  </p>
  <p class=\"mt-2\">
    Multumim!
  </p>
  <a href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=yYzsMFlIUhv9UUVGsICuEsVl8d_Rni8YHmGX0Vr1gh8\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Inapoi
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__419c64c0fe742d5e6bdb18ddfe119bd4", "");
    }
}
