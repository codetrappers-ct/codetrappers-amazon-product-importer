<?php
/**
 * Plugin Name: Codetrappers Amazon Product Importer
 * Description: Starter plugin for importing Amazon-linked product metadata into WordPress.
 * Version: 0.1.0
 * Author: Codetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: codetrappers-amazon-product-importer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_AMAZON_PRODUCT_IMPORTER_VERSION', '0.1.0' );
define( 'COETRAPPERS_AMAZON_PRODUCT_IMPORTER_FILE', __FILE__ );
define( 'COETRAPPERS_AMAZON_PRODUCT_IMPORTER_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_AMAZON_PRODUCT_IMPORTER_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_AMAZON_PRODUCT_IMPORTER_PATH . 'includes/class-codetrappers-amazon-product-importer.php';

function codetrappers_amazon_product_importer_bootstrap() {
	$plugin = new \Codetrappers\CodetrappersAmazonProductImporter\CodetrappersAmazonProductImporterPlugin();
	$plugin->boot();
}

codetrappers_amazon_product_importer_bootstrap();
