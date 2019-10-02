<?php die() ; ?>

Server Variables
    SERVER_SOFTWARE = LiteSpeed
    DOCUMENT_ROOT = /home/icertech/public_html
    X-LSCACHE = on,crawler
    LSWCP_TAG_PREFIX = 03e

LSCache Plugin Options
    version = 1.1.6
    enabled = 1
    radio_select = 1
    purge_upgrade = 1
    cache_priv = 1
    cache_commenter = 1
    cache_rest = 1
    cache_page_login = 1
    timed_urls = 
    timed_urls_time = 
    cache_favicon = 1
    cache_resources = 1
    mobileview_enabled = 
    mobileview_rules = 
    login_cookie = 
    check_advancedcache = 1
    debug = 0
    admin_ips = 127.0.0.1
    debug_level = 
    log_file_size = 30
    heartbeat = 1
    debug_cookie = 
    collaps_qs = 
    log_filters = 
    log_ignore_filters = gettext
gettext_with_context
get_the_terms
get_term
    log_ignore_part_filters = i18n
locale
settings
option
    test_ips = 
    public_ttl = 604800
    front_page_ttl = 604800
    feed_ttl = 0
    403_ttl = 3600
    404_ttl = 3600
    500_ttl = 3600
    purge_by_post = A.F.H.M.PGS.PGSRP.PT.T
    excludes_uri = 
    excludes_cat = 
    excludes_tag = 
    nocache_cookies = 
    nocache_useragents = 
    crawler_include_posts = 1
    crawler_include_pages = 1
    crawler_include_cats = 1
    crawler_include_tags = 1
    crawler_excludes_cpt = 
    crawler_order_links = date_desc
    crawler_usleep = 500
    crawler_run_duration = 400
    crawler_run_interval = 600
    crawler_crawl_interval = 302400
    crawler_threads = 3
    crawler_load_limit = 1
    crawler_domain_ip = 
    crawler_custom_sitemap = 
    crawler_cron_active = 
    wc_update_interval = 0
    wc_shop_use_front_ttl = 1

Wordpress Specific Extras
    wordpress version = 4.5.15
    locale = en_GB
    active theme = Icertech
    active plugins = Array
(
    [0] => worker/init.php
    [1] => Ultimate_VC_Addons/Ultimate_VC_Addons.php
    [2] => advanced-custom-fields-pro/acf.php
    [3] => better-search-replace/better-search-replace.php
    [4] => bootstrap-for-contact-form-7/bootstrap-for-contact-form-7.php
    [5] => contact-form-7/wp-contact-form-7.php
    [6] => crazyegg-heatmap-tracking/crazyegg-heatmap-tracking.php
    [7] => duplicate-post/duplicate-post.php
    [8] => icertech-custom-post-type-products/icertech-custom-post-type-products.php
    [9] => icertech-custom-post-type-sectors/icertech-custom-post-type-sectors.php
    [10] => js_composer/js_composer.php
    [12] => login-customizer/login-customizer.php
    [13] => mailchimp-for-wp/mailchimp-for-wp.php
    [14] => popup-maker/popup-maker.php
    [15] => quick-pagepost-redirect-plugin/page_post_redirect_plugin.php
    [16] => really-simple-ssl/rlrsssl-really-simple-ssl.php
    [17] => regenerate-thumbnails/regenerate-thumbnails.php
    [18] => tablepress/tablepress.php
    [19] => twitter/twitter.php
    [20] => uk-cookie-consent/uk-cookie-consent.php
    [21] => velvet-blues-update-urls/velvet-blues-update-urls.php
    [22] => woocommerce-dynamic-pricing/woocommerce-dynamic-pricing.php
    [23] => woocommerce-email-test/woocommerce-email-test.php
    [24] => woocommerce-gateway-stripe/woocommerce-gateway-stripe.php
    [25] => woocommerce-google-analytics-integration/woocommerce-google-analytics-integration.php
    [26] => woocommerce-min-max-quantities/min-max-quantities.php
    [27] => woocommerce-pdf-invoices-packing-slips/woocommerce-pdf-invoices-packingslips.php
    [28] => woocommerce-quantity-increment/woocommerce-quantity-increment.php
    [29] => woocommerce-table-rate-shipping/woocommerce-table-rate-shipping.php
    [30] => woocommerce/woocommerce.php
    [31] => wordpress-seo/wp-seo.php
    [32] => wp-video-lightbox/wp-video-lightbox.php
)


/home/icertech/public_html/.htaccess contents:
# BEGIN LSCACHE
## LITESPEED WP CACHE PLUGIN - Do not edit the contents of this block! ##
<IfModule LiteSpeed>
RewriteEngine on
CacheLookup on
RewriteRule .* - [E=Cache-Control:no-autoflush]

### marker CACHE RESOURCE start ###
RewriteRule wp-content/.*/[^/]*(responsive|css|js|dynamic|loader|fonts)\.php - [E=cache-control:max-age=3600]
### marker CACHE RESOURCE end ###

### marker FAVICON start ###
RewriteRule favicon\.ico$ - [E=cache-control:max-age=86400]
### marker FAVICON end ###

</IfModule>
## LITESPEED WP CACHE PLUGIN - Do not edit the contents of this block! ##
# END LSCACHE

# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress
RewriteCond %{HTTP_HOST} ^icertech\.com$ [OR]
RewriteCond %{HTTP_HOST} ^www\.icertech\.com$
RewriteCond %{REQUEST_URI} !^/[0-9]+\..+\.cpaneldcv$
RewriteCond %{REQUEST_URI} !^/\.well-known/acme-challenge/[0-9a-zA-Z_-]+$
RewriteCond %{REQUEST_URI} !^/\.well-known/pki-validation/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
RewriteRule ^/?$ "https\:\/\/www\.icertech\.co\.uk\/" [R=301,L]



