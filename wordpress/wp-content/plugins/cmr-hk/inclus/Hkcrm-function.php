<?php

function Hkcrm_add_link($wp_admin_bar) {
    global $wp_admin_bar;
      $args = array(
      'id' => 'hk-crm',
      'title' => 'HK crm',
       'href' =>'Hkcrm-acp-page.php'
    );
    $wp_admin_bar->add_node($args);
    }
    add_action('admin_bar_menu', 'Hkcrm_add_link', 999);
     