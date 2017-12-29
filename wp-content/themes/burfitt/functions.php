<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );


function burfitt_customize_register($wp_customize) 
{
	$wp_customize->add_section("skills", array(
		"title" => __("Skills Area", "skills_sections"),
		"priority" => 30,
  ));

  $wp_customize->add_setting("first_skill", array(
		"default" => "",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"first_skill",
		array(
			"label" => __("Translation Section: Text", "first_skill_text"),
			"section" => "skills",
			"settings" => "first_skill",
			"type" => "textarea",
		)
  ));
  
  $wp_customize->add_setting("second_skill", array(
		"default" => "",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"second_skill",
		array(
			"label" => __("Writing & Editing Section: Text", "second_skill_text"),
			"section" => "skills",
			"settings" => "second_skill",
			"type" => "textarea",
		)
  ));

  $wp_customize->add_setting("third_skill", array(
		"default" => "",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"third_skill",
		array(
			"label" => __("Photography Section: Text", "third_skill_text"),
			"section" => "skills",
			"settings" => "third_skill",
			"type" => "textarea",
		)
	));

  $wp_customize->add_section("big-image", array(
    "title" => __("Big Image Area", "big-image-section"),
    "priority" => 31,
  ));

  $wp_customize->add_setting("big-image-title", array(
    "default" => "",
    "transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    "big-image-title",
    array(
      "label" => __("Title", "big-image-title-text"),
      "section" => "big-image",
      "settings" => "big-image-title",
      "type" => "textarea",
    )
  ));

  $wp_customize->add_setting("big-image-text", array(
    "default" => "",
    "transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    "big-image-text",
    array(
      "label" => __("Text", "big-image-desc-text"),
      "section" => "big-image",
      "settings" => "big-image-text",
      "type" => "textarea",
    )
  ));
}

add_action("customize_register","burfitt_customize_register");

?>