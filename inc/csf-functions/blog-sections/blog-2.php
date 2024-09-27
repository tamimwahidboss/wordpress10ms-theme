<?php
// Create a v2 blog section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Blog Section', 'wp10ms' ),
    'fields' => array(

        // Text field for section span title
        array(
            'id'      => 'v2-blog-span',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Blog', 'wp10ms' ),
        ),

        // Text field for section subtitle
        array(
            'id'      => 'v2-blog-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Latest News & Blog', 'wp10ms' ),
        ),

        // Text field for section main title
        array(
            'id'      => 'v2-blog-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Get Every Single Updates', 'wp10ms' ),
        ),
    ),
) );

// // Create a v2 blog section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Blog Section',
//     'fields' => array(
//         array(
//             'id' => 'v2-blog-span',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'Blog',
//         ),
//         array(
//             'id' => 'v2-blog-p',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'Latest News & Blog',
//         ),
//         array(
//             'id' => 'v2-blog-h1',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'Get Every Single Updates',
//         ),
//     ),
// ) );