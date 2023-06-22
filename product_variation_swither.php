<?php
/*
 * Plugin Name:       Product Variation Switcher
 * Description:       The plugin adds a product variations switcher to  the product card on your store catalog page.
 * Version:           1.0
 * Author:            Zamaraiev Dmytro
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

function show_variation() {
    global $product;

    if ($product->get_type() == "variable") {
        echo '</a>';  
        woocommerce_variable_add_to_cart($product);
    } else {
        echo '</a>';
        woocommerce_template_loop_add_to_cart();
    }
}

add_action('woocommerce_after_shop_loop_item_title', 'show_variation');
?>
