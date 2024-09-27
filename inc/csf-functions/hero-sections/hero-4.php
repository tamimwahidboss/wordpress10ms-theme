<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Hero Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v4-hero-span',
            'type'  => 'text',
            'title' => esc_html__( 'Top Text', 'wp10ms' ),
        ),
        array(
            'id'    => 'v4-hero-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Main Title', 'wp10ms' ),
        ),
        array(
            'id'    => 'v4-hero-p',
            'type'  => 'text',
            'title' => esc_html__( 'Description', 'wp10ms' ),
        ),
        array(
            'id'    => 'v4-hero-btn-rep',
            'type'  => 'repeater',
            'title' => esc_html__( 'Hero Button', 'wp10ms' ),
            'max'   => 2,
            'button_title' => esc_html__( 'Add Button', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v4-hero-btn',
                    'type'  => 'link',
                    'title' => esc_html__( 'Button link', 'wp10ms' ),
                    'default' => '#',
                ),
                array(
                    'id'    => 'v4-hero-btn-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Button icon', 'wp10ms' ),
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
        array(
            'id'    => 'v4-hero-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Hero Banner', 'wp10ms' ),
        ),
    )
) );

// // Create a hero section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Hero Section',
//     'fields' => array(
//         array(
//             'id'    => 'v4-hero-span',
//             'type'  => 'text',
//             'title' => 'Top Text',
//         ),
//         array(
//             'id'    => 'v4-hero-h1',
//             'type'  => 'text',
//             'title' => 'Main Title',
//         ),
//         array(
//             'id'    => 'v4-hero-p',
//             'type'  => 'text',
//             'title' => 'Description',
//         ),
//         array(
//             'id'    => 'v4-hero-btn-rep',
//             'type'  => 'repeater',
//             'title' => 'Hero Button',
//             'max'   => '2',
//             'button_title' => 'Add Button',
//             'fields' => array(
//                 array(
//                     'id'    => 'v4-hero-btn',
//                     'type'  => 'link',
//                     'title' => 'Button link',
//                     'default' => '#',
//                 ),
    
//                 // Hero Button icon
//                 array(
//                     'id'    => 'v4-hero-btn-icon',
//                     'type'  => 'icon',
//                     'title' => 'Button icon',
//                     'default' => 'icon-arrow-right-1',
//                 ),
//             ),
//         ),
//         array(
//             'id'    => 'v4-hero-banner',
//             'type'  => 'media',
//             'title' => 'Hero Banner',
//         ),

//   )
// ) );