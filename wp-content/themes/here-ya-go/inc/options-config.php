<?php 

/**
 * Sections
 */

$hereyago_sections = array();

$hereyago_sections[] = array(
  'id' => 'front_slider',
  'args' => array (
    'title' => 'Front Page Slider',
    'priority' => 45,
    'description' => 'Change the slider settings'
  )
);

/**
 * Settings
 */

$hereyago_settings = array();

// Featured Slider Settings

$hereyago_settings[] = array(
  'id' => 'hereyago_theme_options[front_slider_enabled]',
  'add_args' => array (
    'default' => true,
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ),
  'control_args' => array(
    'label'    => __('Enable Front Page Slider', 'hereyago'),
    'section'  => 'front_slider',
    'settings' => 'hereyago_theme_options[front_slider_enabled]',
    'type'     => 'checkbox',
  )
);

$hereyago_settings[] = array(
  'id' => 'hereyago_theme_options[featured_tag]',
  'add_args' => array (
    'default' => '',
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ),
  'control_args' => array(
    'label'      => __('Tag for featuring posts on the slider:', 'hereyago'),
    'section'    => 'front_slider',
    'settings'   => 'hereyago_theme_options[featured_tag]'
  )
);

$hereyago_settings[] = array(
  'id' => 'hereyago_theme_options[slide_ordering]',
  'add_args' => array (
    'default' => 'DSC',
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ),
  'control_args' => array(
    'settings' => 'hereyago_theme_options[slide_ordering]',
    'label'   => 'ASC or DSC:',
    'section' => 'front_slider',
    'type'    => 'select',
    'choices'    => array(
        'ASC' => 'ASC',
        'DSC' => 'DSC',
    ),
  )
);