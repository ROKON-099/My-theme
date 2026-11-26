<?php
if (!defined('ABSPATH')) exit;
function newtheme_customize($wp_customize){
 $wp_customize->add_section('newtheme_hero',array('title'=>__('Homepage Hero','newtheme'),'priority'=>30));
 $settings=array(
 'newtheme_hero_title'=>array('default'=>'Everyday essentials. Elevated.','label'=>'Hero title','type'=>'text'),
 'newtheme_hero_subtitle'=>array('default'=>'Discover thoughtfully selected products, exceptional quality and a better way to shop.','label'=>'Hero subtitle','type'=>'textarea'),
 'newtheme_hero_button'=>array('default'=>'Explore collection','label'=>'Button text','type'=>'text'),
 'newtheme_hero_image'=>array('default'=>'','label'=>'Hero image URL','type'=>'url')
 );
 foreach($settings as $id=>$data){
  $wp_customize->add_setting($id,array('default'=>$data['default'],'sanitize_callback'=>$data['type']==='url'?'esc_url_raw':'sanitize_text_field'));
  $wp_customize->add_control($id,array('label'=>__($data['label'],'newtheme'),'section'=>'newtheme_hero','type'=>$data['type']));
 }
}
add_action('customize_register','newtheme_customize');
function newtheme_mod($key,$fallback=''){return get_theme_mod($key,$fallback);}
