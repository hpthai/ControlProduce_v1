<?php
/*
Plugin Name:  Control Produce
Plugin URI:   
Description:  Control Produce cho phép admin quản lí danh sách các món ăn như thêm xóa sửa, đồng thồi cho phép người truy cập có thể đặt món 
Version:      2.1.1
Author: Hoàng Phương Thái
License: GPL v3

*/
if ( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) )
	require 'class-admin.php';
else
	require 'class-frontend.php';

// Add settings link on plugin page
function controlproduce_link($links) {
  $settings_link = '<a href="options-general.php?page=produce">Settings</a>';
  array_unshift($links, $settings_link);
  return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'controlproduce_link' );
?>