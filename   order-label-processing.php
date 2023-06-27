<?php 
/*
 * Plugin Name:       Altera o rotulo do pedido processando
 * Plugin URI:        https://marcleitonalmeida.com
 * Description:       Altera o titulo do pedido processando para Pedido aprovado
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Marcleiton Almeida
 * Author URI:        https://marcleitonalmeida.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       Order-label-processing
 */
 
function order_label_processing($statuses) {
    if (isset($statuses['wc-processing'])) {

        $statuses['wc-processing'] = 'Pedido Aprovado';
    }

    return $statuses;
}
add_filter('wc_order_statuses', ' order_label_processing');

