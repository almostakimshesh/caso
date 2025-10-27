<?php

function caso_customize_hero($wp_customize)
{
    // Add Hero Section
    $wp_customize->add_section('hero_section', [
        'title'       => __('Hero Section', 'caso'),
        'description' => __('Manage the hero section.', 'caso'),
        'priority'    => 30,
    ]);
    // Hero Main Title
    $wp_customize->add_setting('hero_main_title',[
        'default'       =>'caso',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ]);

    $wp_customize->add_control('hero_main_title_control', [
        'label'    => __('Hero Main Title', 'caso'),
        'section'  => 'hero_section',
        'settings' => 'hero_main_title',
        'type'     => 'text',
    ]);
    // Hero Title Setting
    $wp_customize->add_setting('hero_title', [
        'default'           => "Increase Your<br>Brand Recognition<br>Today",
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ]);

    $wp_customize->add_control('hero_title_control', [
        'label'    => __('Hero Title', 'caso'),
        'section'  => 'hero_section',
        'settings' => 'hero_title',
        'type'     => 'textarea',
    ]);
// Hero Button Setting
$wp_customize->add_setting('hero_button', [
    'default'           => 'Creative branding',
    'sanitize_callback' => 'wp_kses_post',
    'transport'         => 'refresh',
]);

$wp_customize->add_control('hero_button_control', [
    'label'    => __('Hero Button', 'caso'),
    'section'  => 'hero_section',
    'settings' => 'hero_button',
    'type'     => 'text',
]);

// Journey Box Setting
$wp_customize->add_setting('journey_box_title', [
    'default'           => 'Start your journey <br> today.',
    'sanitize_callback' => 'wp_kses_post',
    'transport'         => 'refresh',
]);

$wp_customize->add_control('journey_box_title_control', [
    'label'    => __('Journey Box Title', 'caso'),
    'section'  => 'hero_section',
    'settings' => 'journey_box_title',
    'type'     => 'text',
]);


}
add_action('customize_register', 'caso_customize_hero');
