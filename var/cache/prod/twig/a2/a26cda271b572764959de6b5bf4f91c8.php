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

/* __string_template__9c848861d64f15f537157d6ab61b265c */
class __TwigTemplate_8a1fea2472ba588c9fd979214c839e00 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Import • Federica</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminImport';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'RO';
    var _PS_VERSION_ = '8.1.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '431201471236f6f13eddd227c73df61a';
    var currentIndex = 'index.php?controller=AdminImport';
    var employee_token = 'd826d69c50b16fff45be2fd5ab74e003';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/administration/index.php/improve/modules/manage?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80';
    var admin_notification_get_link = '/administration/index.php/common/notifications?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80';
    var admin_notification_push_link = adminNotificationPushLink = '/administration/index.php/common/notifications/ack?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product'";
        // line 43
        echo ";
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
      <link href=\"/modules/lot_design/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/administration\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/administration\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\";
var currency = {\"iso_code\":\"RON\",\"sign\":\"lei\",\"name\":\"Romanian Leu\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"RON\",\"currencySymbol\":\"lei\",\"numberSymbols\":[\".\",\",\",\";\",\"";
        // line 72
        echo "%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
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
<script type=\"t";
        // line 93
        echo "ext/javascript\" src=\"/administration/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/lot_design/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

      <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/administration/index.php/common/notifications?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/federica.ecomdoo.eu\\/administration\\/index.php?controller=AdminGamification&token=c00cfd808c7f75aff6bd217e7ab83ef3\";
            var current_id_tab = 97;
        </script><script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 121
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminimport\"
  data-base-url=\"/administration/index.php\"  data-token=\"lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=15fc6ddc157519e39226bf2750e6237d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/improve/modules/manage?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/categories/new?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/products-v2/create?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"New product\"
      >New product</a>
         ";
        // line 158
        echo " <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8d16053db494e5caa46c0ab0d932da88\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://federica.ecomdoo.eu/administration/index.php/sell/orders?token=d767b06c74cc83b22ce0880ba027de00\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"57\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/import/?-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\"
        data-post-link=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Import - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
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
    <div class=\"input-group\">
    ";
        // line 198
        echo "<input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module nam";
        // line 212
        echo "e\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=15fc6ddc157519e39226bf2750e6237d\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/improve/modules/manage?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/categories/new?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php/sell/catalog/products-v2/create?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8d16053db494e5caa46c0ab0d932da88\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://federica.ecomdoo.eu/administ";
        // line 252
        echo "ration/index.php/sell/orders?token=d767b06c74cc83b22ce0880ba027de00\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"124\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/import/?-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\"
      data-post-link=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Import - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminQuickAccesses&token=7e4a81a06e035147dff7f2b9915c4cca\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://federica.ecomdoo.eu/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
   ";
        // line 299
        echo "   <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=732b9a3ccde4feb96479aa6179852fb1\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for ";
        // line 349
        echo "now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://federica.ecomdoo.eu/img/pr/default.jpg\" alt=\"Florin\" /></span>
        <span class=\"employee_profile\">Welcome b";
        // line 399
        echo "ack Florin</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/administration/index.php/configure/advanced/employees/1/edit?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=federica.ecomdoo.eu&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/administration/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=vdRVc4BcdIMWmxzbq0nyaziMTW9li6LdOKekfvx8_gY&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&";
        // line 422
        echo "utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminLogin&amp;logout=1&amp;token=02002d02830fef933028247e48dc1d9c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/administration/index.php/configure/advanced/employees/toggle-navigation?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=";
        // line 464
        echo "\"link\">
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
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/administration/index.php/sell/orders/?_token=lQYT7Adx_7W";
        // line 504
        echo "JVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/administration/index.php/sell/orders/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/administration/index.php/sell/orders/invoices/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/administration/index.php/sell/orders/credit-slips/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEP";
        // line 534
        echo "En4CSIhnuvCzTz80\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/administration/index.php/sell/orders/delivery-slips/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarts&amp;token=732b9a3ccde4feb96479aa6179852fb1\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/administration/index.php/sell/customers/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                 ";
        // line 567
        echo "                                   keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/administration/index.php/sell/customers/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/administration/index.php/sell/addresses/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCustomerThreads&amp;token=b6723abd82ac91f80ad3898b98f30c47\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Servi";
        // line 597
        echo "ce
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCustomerThreads&amp;token=b6723abd82ac91f80ad3898b98f30c47\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/administration/index.php/sell/customer-service/order-messages/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminReturn&amp;token=ea7c09d1a7edc59b8854a4ab6568db17\" class=\"link\"> Merchandise Returns
                                <";
        // line 625
        echo "/a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/administration/index.php/modules/metrics/legacy/stats?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/administration/index.php/modules/metrics/legacy/stats?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/administration/index.php/modules/metrics?_t";
        // line 657
        echo "oken=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/administration/index.php/modules/mbo/modules/catalog/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/administration/index.php/modules/mbo/modules/catalog/?_token=lQYT7Adx_7WJVh-a6K";
        // line 692
        echo "e8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/administration/index.php/improve/modules/manage?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/administration/index.php/modules/improve/design/themes?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-s";
        // line 724
        echo "ubmenu=\"162\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/administration/index.php/modules/improve/design/themes?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=2539bc542894d6f3e1f8499e379508ab\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/administration/index.php/modules/mbo/themes/catalog/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/administration/index.php/improve/design/mail_theme/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                              ";
        // line 753
        echo "    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/administration/index.php/improve/design/cms-pages/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/administration/index.php/improve/design/modules/positions/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminImages&amp;token=a0bc5bb6b0c773e76d33131c863655bb\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/administration/index.php/modules/link-widget/list?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Link List
                                </a>
    ";
        // line 783
        echo "                          </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarriers&amp;token=c58ae7e203b1622c4dcee41f9b3253ad\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCarriers&amp;token=c58ae7e203b1622c4dcee41f9b3253ad\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/administration/index.php/impr";
        // line 814
        echo "ove/shipping/preferences/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
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
                    <a href=\"/administration/index.php/improve/payment/payment_methods?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pay";
        // line 844
        echo "ment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/administration/index.php/improve/payment/payment_methods?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/administration/index.php/improve/payment/preferences?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/administration/index.php/improve/international/localization/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
  ";
        // line 875
        echo "                    <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/administration/index.php/improve/international/localization/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/administration/index.php/improve/international/zones/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/administration/index.php/improve/international/taxes/?_token=lQYT7Adx_7WJVh";
        // line 904
        echo "-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/administration/index.php/improve/international/translations/settings?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Translations
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subt";
        // line 936
        echo "ab-AdminPsfacebookModule\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsfacebookModule&amp;token=b2347cc01df8551ad99bef8e4a927a32\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=9852d5281647ecaf0a65079efde10789\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"18\" id=\"subtab-AdminSuppliers\">
                    <a href=\"/administration/index.php/sell/catalog/suppliers/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Suppliers - Feeds
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                  ";
        // line 972
        echo "  keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/administration/index.php/modules/pseditionbasic/settings?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/administration/index.php/sell/catalog/products?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=";
        // line 1005
        echo "\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/administration/index.php/sell/catalog/products?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/administration/index.php/sell/catalog/categories?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/administration/index.php/sell/catalog/monitoring/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminAttributesGroups&amp;token=67c573fe821a02b6eaa02b";
        // line 1034
        echo "772c585e51\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/administration/index.php/sell/catalog/brands/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/administration/index.php/sell/attachments/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminCartRules&amp;token=8d16053db494e5caa46c0ab0d932da88\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\"";
        // line 1065
        echo ">
                                <a href=\"/administration/index.php/sell/stocks/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/administration/index.php/configure/shop/preferences/preferences?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/administration/index.php/configure/shop/preferences/preferences?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                  ";
        // line 1097
        echo "          
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/administration/index.php/configure/shop/order-preferences/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/administration/index.php/configure/shop/product-preferences/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/administration/index.php/configure/shop/customer-preferences/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/administration/index.php/configure/shop/contacts/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Contact
                                </a>
                              </li>

   ";
        // line 1127
        echo "                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/administration/index.php/configure/shop/seo-urls/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminSearchConf&amp;token=8a3314ccc45d077f0aeaf135ab48ee56\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/administration/index.php/configure/advanced/system-information/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                               ";
        // line 1156
        echo "                                     keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/administration/index.php/configure/advanced/system-information/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/administration/index.php/configure/advanced/performance/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/administration/index.php/configure/advanced/administration/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                      ";
        // line 1186
        echo "                      
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/administration/index.php/configure/advanced/emails/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/administration/index.php/configure/advanced/import/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/administration/index.php/configure/advanced/employees/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/administration/index.php/configure/advanced/sql-requests/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Database
                                </a>
                              </li>

                                                   ";
        // line 1216
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/administration/index.php/configure/advanced/logs/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/administration/index.php/configure/advanced/webservice-keys/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/administration/index.php/configure/advanced/feature-flags/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
          ";
        // line 1244
        echo "                      <a href=\"/administration/index.php/configure/advanced/security/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-AdminKlaviyoPsConfig\">
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
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"172\" id=\"subtab-AdminLotExporterGoogle\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminLotExporterGoogle&amp;token=9dc2b4a706ee02d67e74bc779def4072\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Exporter Feed Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                            ";
        // line 1276
        echo "                                        keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"173\" id=\"subtab-AdminLotGoogleMatch\">
                    <a href=\"https://federica.ecomdoo.eu/administration/index.php?controller=AdminLotGoogleMatch&amp;token=43fa5ad7dbab85f457588de3de67243e\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Category Match Feed -&gt; Shop
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
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/administration/index.php/configure/advanced/import/?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" aria-current=\"page\">Import</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Import          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
        ";
        // line 1331
        echo "                      <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/administration/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminImport%253Fversion%253D8.1.5%2526country%253Den/Help?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/administration/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminImport%253Fversion%253D8.1.5%2526country%253Den/Help?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1382
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/administration/index.php/modules/pseditionbasic/homepage?_token=lQYT7Adx_7WJVh-a6Ke8RxFAwEPEn4CSIhnuvCzTz80\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1416
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 121
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1382
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1416
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9c848861d64f15f537157d6ab61b265c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1593 => 1416,  1572 => 1382,  1561 => 121,  1552 => 1416,  1512 => 1382,  1459 => 1331,  1402 => 1276,  1368 => 1244,  1338 => 1216,  1306 => 1186,  1274 => 1156,  1243 => 1127,  1211 => 1097,  1177 => 1065,  1144 => 1034,  1113 => 1005,  1078 => 972,  1040 => 936,  1006 => 904,  975 => 875,  942 => 844,  910 => 814,  877 => 783,  845 => 753,  814 => 724,  780 => 692,  743 => 657,  709 => 625,  679 => 597,  647 => 567,  612 => 534,  580 => 504,  538 => 464,  494 => 422,  469 => 399,  417 => 349,  365 => 299,  316 => 252,  274 => 212,  258 => 198,  216 => 158,  174 => 121,  144 => 93,  121 => 72,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9c848861d64f15f537157d6ab61b265c", "");
    }
}
