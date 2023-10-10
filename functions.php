<?php
require __DIR__ . '/inc/theme-enqueue.php';
require __DIR__ . '/inc/theme-setup.php';


// add_action('wp_enqueue_scripts', 'childhood_scripts');

// function childhood_scripts() {
// 	wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
// 	wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
// };

// add_theme_support( 'custom-logo' );



// add_action( 'acf/init', 'my_acf_add_local_field_groups' );

// function my_acf_add_local_field_groups() {
//     acf_add_local_field_group(array(
//         'key' => 'group_1',
//         'title' => 'Page Hero',
//         'fields' => array (
//             array (
//                 'key' => 'field_1',
//                 'label' => 'Hero Title',
//                 'name' => hero_title,
//                 'type' => 'text',
//             )
//         ),
//         'location' => array (
//             array (
//                 array (
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => page,
//                 ),
//             ),
//         ),
//     ));
// }
