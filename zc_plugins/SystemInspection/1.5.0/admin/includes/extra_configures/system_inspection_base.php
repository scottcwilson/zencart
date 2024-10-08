<?php
/**
 * System Inspection (formerly Mod List by That Software Guy)
 *
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Copyright 2015-2023 That Software Guy
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott Wilson 2024 Sep 29 New in v2.1.0-beta1 $
 */

define('BUILT_IN_BOXES', [
    'BOX_HEADING_CONFIGURATION',
    'BOX_CONFIGURATION_MY_STORE',
    'BOX_CONFIGURATION_MINIMUM_VALUES',
    'BOX_CONFIGURATION_MAXIMUM_VALUES',
    'BOX_CONFIGURATION_IMAGES',
    'BOX_CONFIGURATION_CUSTOMER_DETAILS',
    'BOX_CONFIGURATION_SHIPPING_PACKAGING',
    'BOX_CONFIGURATION_PRODUCT_LISTING',
    'BOX_CONFIGURATION_STOCK',
    'BOX_CONFIGURATION_LOGGING',
    'BOX_CONFIGURATION_EMAIL_OPTIONS',
    'BOX_CONFIGURATION_ATTRIBUTE_OPTIONS',
    'BOX_CONFIGURATION_GZIP_COMPRESSION',
    'BOX_CONFIGURATION_SESSIONS',
    'BOX_CONFIGURATION_REGULATIONS',
    'BOX_CONFIGURATION_GV_COUPONS',
    'BOX_CONFIGURATION_CREDIT_CARDS',
    'BOX_CONFIGURATION_PRODUCT_INFO',
    'BOX_CONFIGURATION_LAYOUT_SETTINGS',
    'BOX_CONFIGURATION_WEBSITE_MAINTENANCE',
    'BOX_CONFIGURATION_NEW_LISTING',
    'BOX_CONFIGURATION_FEATURED_LISTING',
    'BOX_CONFIGURATION_ALL_LISTING',
    'BOX_CONFIGURATION_INDEX_LISTING',
    'BOX_CONFIGURATION_DEFINE_PAGE_STATUS',
    'BOX_CONFIGURATION_EZPAGES_SETTINGS',

    // modules box text
    'BOX_HEADING_MODULES',
    'BOX_MODULES_PAYMENT',
    'BOX_MODULES_SHIPPING',
    'BOX_MODULES_ORDER_TOTAL',
    'BOX_MODULES_PLUGINS',
    'BOX_MODULES_PRODUCT_TYPES',

    // categories box text
    'BOX_HEADING_CATALOG',
    'BOX_CATALOG_CATEGORIES_PRODUCTS',
    'BOX_CATALOG_PRODUCT_TYPES',
    'BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER',
    'BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER',
    'BOX_CATALOG_MANUFACTURERS',
    'BOX_CATALOG_REVIEWS',
    'BOX_CATALOG_SPECIALS',
    'BOX_CATALOG_PRODUCTS_EXPECTED',
    'BOX_CATALOG_SALEMAKER',
    'BOX_CATALOG_PRODUCTS_PRICE_MANAGER',
    'BOX_CATALOG_PRODUCT',
    'BOX_CATALOG_PRODUCTS_TO_CATEGORIES',

    // customers box text
    'BOX_HEADING_CUSTOMERS',
    'BOX_CUSTOMERS_CUSTOMERS',
    'BOX_CUSTOMERS_ORDERS',
    'BOX_CUSTOMERS_GROUP_PRICING',
    'BOX_CUSTOMERS_CUSTOMER_GROUPS',
    'BOX_CUSTOMERS_PAYPAL',
    'BOX_CUSTOMERS_INVOICE',
    'BOX_CUSTOMERS_PACKING_SLIP',

    // taxes box text
    'BOX_HEADING_LOCATION_AND_TAXES',
    'BOX_TAXES_COUNTRIES',
    'BOX_TAXES_ZONES',
    'BOX_TAXES_GEO_ZONES',
    'BOX_TAXES_TAX_CLASSES',
    'BOX_TAXES_TAX_RATES',

    // reports box text
    'BOX_HEADING_REPORTS',
    'BOX_REPORTS_PRODUCTS_VIEWED',
    'BOX_REPORTS_PRODUCTS_PURCHASED',
    'BOX_REPORTS_ORDERS_TOTAL',
    'BOX_REPORTS_PRODUCTS_LOWSTOCK',
    'BOX_REPORTS_CUSTOMERS_REFERRALS',
    'BOX_REPORTS_SALES_REPORT_GRAPHS',

    // tools text
    'BOX_HEADING_TOOLS',
    'BOX_TOOLS_TEMPLATE_SELECT',
    'BOX_TOOLS_BACKUP',
    'BOX_TOOLS_BANNER_MANAGER',
    'BOX_TOOLS_CACHE',
    'BOX_TOOLS_DEFINE_LANGUAGE',
    'BOX_TOOLS_FILE_MANAGER',
    'BOX_TOOLS_MAIL',
    'BOX_TOOLS_NEWSLETTER_MANAGER',
    'BOX_TOOLS_SERVER_INFO',
    'BOX_TOOLS_WHOS_ONLINE',
    'BOX_TOOLS_STORE_MANAGER',
    'BOX_TOOLS_DEVELOPERS_TOOL_KIT',
    'BOX_TOOLS_SQLPATCH',
    'BOX_TOOLS_EZPAGES',

    'BOX_HEADING_EXTRAS',

    // define pages editor files
    'BOX_TOOLS_DEFINE_PAGES_EDITOR',
    'BOX_TOOLS_DEFINE_MAIN_PAGE',
    'BOX_TOOLS_DEFINE_CONTACT_US',
    'BOX_TOOLS_DEFINE_PRIVACY',
    'BOX_TOOLS_DEFINE_SHIPPINGINFO',
    'BOX_TOOLS_DEFINE_CONDITIONS',
    'BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS',
    'BOX_TOOLS_DEFINE_PAGE_2',
    'BOX_TOOLS_DEFINE_PAGE_3',
    'BOX_TOOLS_DEFINE_PAGE_4',

    // localization box text
    'BOX_HEADING_LOCALIZATION',
    'BOX_LOCALIZATION_CURRENCIES',
    'BOX_LOCALIZATION_LANGUAGES',
    'BOX_LOCALIZATION_ORDERS_STATUS',

    // gift vouchers box text
    'BOX_HEADING_GV_ADMIN',
    'BOX_GV_ADMIN_QUEUE',
    'BOX_GV_ADMIN_MAIL',
    'BOX_GV_ADMIN_SENT',
    'BOX_COUPON_ADMIN',
    'BOX_COUPON_RESTRICT',
    'BOX_COUPON_REFERRERS',

    // admin access box text
    'BOX_HEADING_ADMIN_ACCESS',
    'BOX_ADMIN_ACCESS_USERS',
    'BOX_ADMIN_ACCESS_PROFILES',
    'BOX_ADMIN_ACCESS_PAGE_REGISTRATION',
    'BOX_ADMIN_ACCESS_LOGS',

    // Other Items
    'BOX_CATALOG_CATEGORY',
    'BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER',
    'BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER',
    'BOX_CATALOG_PRODUCT_OPTIONS_NAME',
    'BOX_CATALOG_PRODUCT_OPTIONS_VALUES',
    'BOX_CATALOG_FEATURED',
    'BOX_CATALOG_FEATURED_CATEGORIES',
    'BOX_CUSTOMERS_LINKPOINT_REVIEW',
    'BOX_CATALOG_RECORD_ARTISTS',
    'BOX_CATALOG_RECORD_COMPANY',
    'BOX_CATALOG_MEDIA_MANAGER',
    'BOX_CATALOG_MEDIA_TYPES',
    'BOX_TOOLS_LAYOUT_CONTROLLER',
    'BOX_CATALOG_MUSIC_GENRE',
]);

define('BUILT_IN_TABLES', [
    'upgrade_exceptions',
    'address_book',
    'address_format',
    'admin',
    'admin_activity_log',
    'admin_expired_tokens',
    'admin_menus',
    'admin_notifications',
    'admin_pages',
    'admin_profiles',
    'admin_pages_to_profiles',
    'authorizenet',
    'banners',
    'banners_history',
    'categories',
    'categories_description',
    'configuration',
    'configuration_group',
    'count_product_views',
    'counter',
    'counter_history',
    'countries',
    'coupon_email_track',
    'coupon_gv_customer',
    'coupon_gv_queue',
    'coupon_redeem_track',
    'coupon_restrict',
    'coupons',
    'coupons_description',
    'coupon_referrers',
    'currencies',
    'customers',
    'customers_basket',
    'customers_basket_attributes',
    'customers_info',
    'customer_groups',
    'customers_to_groups',
    'db_cache',
    'email_archive',
    'ezpages',
    'ezpages_content',
    'featured',
    'featured_categories',
    'files_uploaded',
    'geo_zones',
    'get_terms_to_filter',
    'group_pricing',
    'languages',
    'layout_boxes',
    'manufacturers',
    'manufacturers_info',
    'media_clips',
    'media_manager',
    'media_to_products',
    'media_types',
    'meta_tags_categories_description',
    'meta_tags_products_description',
    'music_genre',
    'newsletters',
    'orders',
    'orders_products',
    'orders_products_attributes',
    'orders_products_download',
    'orders_status',
    'orders_status_history',
    'orders_total',
    'paypal',
    'paypal_payment_status',
    'paypal_payment_status_history',
    'paypal_session',
    'plugin_control',
    'plugin_control_versions',
    'plugin_groups',
    'plugin_groups_description',
    'product_music_extra',
    'product_type_layout',
    'product_types',
    'product_types_to_category',
    'products',
    'products_attributes',
    'products_attributes_download',
    'products_description',
    'products_discount_quantity',
    'products_notifications',
    'products_options',
    'products_options_types',
    'products_options_values',
    'products_options_values_to_products_options',
    'products_to_categories',
    'project_version',
    'project_version_history',
    'query_builder',
    'record_artists',
    'record_artists_info',
    'record_company',
    'record_company_info',
    'reviews',
    'reviews_description',
    'salemaker_sales',
    'sessions',
    'specials',
    'tax_class',
    'tax_rates',
    'template_select',
    'whos_online',
    'zones',
    'zones_to_geo_zones',
]);

define('BUILT_IN_ORDER_TOTALS', [
    'ot_cod_fee.php',
    'ot_coupon.php',
    'ot_group_pricing.php',
    'ot_gv.php',
    'ot_loworderfee.php',
    'ot_shipping.php',
    'ot_subtotal.php',
    'ot_tax.php',
    'ot_total.php',
]);

define('BUILT_IN_SHIPPINGS', [
    'flat.php',
    'freeoptions.php',
    'freeshipper.php',
    'item.php',
    'perweightunit.php',
    'storepickup.php',
    'table.php',
    'zones.php',
]);

define('OPTIONAL_TABLES', [
    'linkpoint_api',
    'paypal_testing',
]);

define('BUILT_IN_PAYMENTS', [
    'authorizenet.php',
    'authorizenet_aim.php',
    'authorizenet_echeck.php',
    'cod.php',
    'freecharger.php',
    'moneyorder.php',
    'paypal.php',
    'paypaldp.php',
    'paypalwpp.php',
]);

define('OBSOLETE_PAYMENTS', [
    'linkpoint_api.php',
    'payeezyjszc.php',
    'firstdata_hco.php',
    'square.php',
]);

define('OBSOLETE_SHIPPING', [
    'ups.php',
]);

define('OBSOLETE_ORDER_TOTALS', [
]);

define('REPLACEMENTS', [
    'square.php' => 'Square Web Payments',
    'linkpoint_api.php' => 'Stripe, Square Web Payments, PayPal RESTful',
    'firstdata_hco.php' => 'Stripe, Square Web Payments, PayPal RESTful',
    'payeezyjszc.php' => 'Stripe, Square Web Payments, PayPal RESTful',
    'ups.php' => 'UPS RESTful',
]);


