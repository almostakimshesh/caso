<?php

function caso_customize_hero($wp_customize)
{
    // Add Hero Section
    $wp_customize->add_section('hero_section', [
        'title'       => __('Hero Section', 'caso'),
        'description' => __('Manage the hero section.', 'caso'),
        'priority'    => 30,
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

}
add_action('customize_register', 'caso_customize_hero');
