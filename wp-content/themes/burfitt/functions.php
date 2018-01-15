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

  // Translation Section
  $wp_customize->add_setting("first_skill_text", array(
		"default" => "",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"first_skill_text",
		array(
			"label" => __("Translation Section: Text", "first_skill_text"),
			"section" => "skills",
			"settings" => "first_skill_text",
			"type" => "textarea",
		)
  ));

  // Image
  $wp_customize->add_setting("first_skill_image", array(
		"default" => "https://i1.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5852.jpg?resize=1200%2C800",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"first_skill_image",
		array(
			"label" => __("Translation Section: Image", "first_skill_image"),
			"section" => "skills",
			"settings" => "first_skill_image",
			"type" => "text",
		)
  ));

  // Link
  $wp_customize->add_setting("first_skill_link", array(
		"default" => "#",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"first_skill_link",
		array(
			"label" => __("Translation Section: Link", "first_skill_link"),
			"section" => "skills",
			"settings" => "first_skill_link",
			"type" => "text",
		)
  ));
  
  // Writing & Editing

  // Text
  $wp_customize->add_setting("second_skill_text", array(
		"default" => "",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"second_skill_text",
		array(
			"label" => __("Writing & Editing Section: Text", "second_skill_text"),
			"section" => "skills",
			"settings" => "second_skill_text",
			"type" => "textarea",
		)
  ));

  // Image
  $wp_customize->add_setting("second_skill_image", array(
		"default" => "https://i2.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5853.jpg?resize=1200%2C800",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"second_skill_image",
		array(
			"label" => __("Writing & Editing Section: Image", "second_skill_image"),
			"section" => "skills",
			"settings" => "second_skill_image",
			"type" => "text",
		)
  ));

  // Link

  $wp_customize->add_setting("second_skill_link", array(
		"default" => "#",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"second_skill_link",
		array(
			"label" => __("Writing & Editing Section: Link", "second_skill_link"),
			"section" => "skills",
			"settings" => "second_skill_link",
			"type" => "text",
		)
  ));

  // Photography Section

  // Text
  $wp_customize->add_setting("third_skill_text", array(
		"default" => "",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"third_skill_text",
		array(
			"label" => __("Photography Section: Text", "third_skill_text"),
			"section" => "skills",
			"settings" => "third_skill_text",
			"type" => "textarea",
		)
  ));

  // Image
  $wp_customize->add_setting("third_skill_image", array(
		"default" => "https://i2.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5864.jpg?resize=1200%2C800",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"third_skill_image",
		array(
			"label" => __("Photography Section: Image", "third_skill_image"),
			"section" => "skills",
			"settings" => "third_skill_image",
			"type" => "text",
		)
  ));

  // Link
  $wp_customize->add_setting("third_skill_link", array(
		"default" => "#",
		"transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"third_skill_link",
		array(
			"label" => __("Photography Section: Link", "third_skill_link"),
			"section" => "skills",
			"settings" => "third_skill_link",
			"type" => "text",
		)
  ));

  // Big Image Area

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

  $wp_customize->add_setting("big-image-a-href", array(
    "default" => "#",
    "transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    "big-image-a-href",
    array(
      "label" => __("Link Destination", "big-image-a-href"),
      "section" => "big-image",
      "settings" => "big-image-a-href",
      "type" => "text",
    )
  ));

  $wp_customize->add_setting("big-image-link", array(
    "default" => "https://i1.wp.com/www.frauleinlouise.com/wp-content/uploads/2017/12/IMG_5852.jpg?resize=1200%2C800",
    "transport" => "refresh",
  ));

  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    "big-image-link",
    array(
      "label" => __("Image File", "big-image-link"),
      "section" => "big-image",
      "settings" => "big-image-link",
      "type" => "text",
    )
  ));

}

add_action("customize_register","burfitt_customize_register");

?>