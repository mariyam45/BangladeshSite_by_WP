<?php
wp_enqueue_style('main-style',get_stylesheet_uri(  ));
wp_enqueue_style( 'boots-style',get_stylesheet_directory_uri(  ).'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'boots-script',get_stylesheet_directory_uri(  ).'/assets/js/bootstrap.bundle.min.js',array(),'1.0.0',true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( [
    'PM'=>'Primary',
    'PM2'=>'Primary2',
    'FM'=>'Footer',
] );

register_sidebar([
  'name'=>'List1',
  'id'=>'list1',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'List2',
  'id'=>'list2',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'List3',
  'id'=>'list3',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'MainList',
  'id'=>'mainlist',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'Portal',
  'id'=>'portal',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV1',
  'id'=>'leftv1',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV2',
  'id'=>'leftv2',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV3',
  'id'=>'leftv3',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV3',
  'id'=>'leftv3',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV4',
  'id'=>'leftv4',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV5',
  'id'=>'leftv5',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV6',
  'id'=>'leftv6',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'leftV7',
  'id'=>'leftv7',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'Dengu',
  'id'=>'dengu',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'R8sideImg1',
  'id'=>'rimg1',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'R8sideImg2',
  'id'=>'rimg2',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'Hotline',
  'id'=>'hotline',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'FooterTop',
  'id'=>'ft',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'FooterBtm',
  'id'=>'fb',
  'before_widget'=>'',
  'after_widget'=>''

]);