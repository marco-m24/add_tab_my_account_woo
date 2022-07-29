<?php
/**
 * Inserisci questo codice nel file function.php
 *
 * Sostituisci "nuova_tab" e "nuova-tab" a tuo piacimento
 */





add_action( 'init', 'register_nuova_tab_endpoint');

/**
 * Register New Endpoint.
 *
 * @return void.
 */
function register_nuova_tab_endpoint() {
    add_rewrite_endpoint( 'nuova-tab', EP_ROOT | EP_PAGES );
}




add_filter( 'query_vars', 'nuova_tab_query_vars' );

/**
 * Add new query var.
 *
 * @param array $vars vars.
 *
 * @return array An array of items.
 */
function nuova_tab_query_vars( $vars ) {

    $vars[] = 'nuova-tab';
    return $vars;
}



add_filter( 'woocommerce_account_menu_items', 'add_nuova_tab_tab' );

/**
 * Add New tab in my account page.
 *
 * @param array $items myaccount Items.
 *
 * @return array Items including New tab.
 */
function add_nuova_tab_tab( $items ) {

    $items['nuova-tab'] = 'Nuova Tab';
    return $items;
}




add_action( 'woocommerce_account_nuova-tab_endpoint', 'add_nuova_tab_content' );

/**
 * Add content to the new tab.
 *
 * @return  string.
 */
function add_nuova_tab_content() {
    echo 'Il tuo contenuto!';
}
?>
